<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('/main_page', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('/trending', [App\Http\Controllers\ProductController::class, 'trending'])->name('trending_prod');
Route::get('/prod', [App\Http\Controllers\ProductController::class, 'prod'])->name('prod');
Route::get('/kids', [App\Http\Controllers\ProductController::class, 'kids'])->name('kids_prod');
Route::get('/electronics', [App\Http\Controllers\ProductController::class, 'electronics'])->name('electronics_prod');

Route::get('/product/details/{product_name}', [App\Http\Controllers\ProductController::class, 'prod_details'])->name('product');
Route::get('/kids_product/details/{product_name}', [App\Http\Controllers\ProductController::class, 'kids_details'])->name('product');
Route::get('/electronic_product/details/{product_name}', [App\Http\Controllers\ProductController::class, 'electronic_details'])->name('product');

Route::get('/trending_product/details/{product_name}', [App\Http\Controllers\ProductController::class, 'trend_details'])->name('product');
Route::get('/add_to_cart/{product_name}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('addToCart');
Route::get('/add_to_wishlist/{product_name}', [App\Http\Controllers\ProductController::class, 'addToWishlist'])->name('addToWishlist');

Route::get('/main_profile', [App\Http\Controllers\UserController::class, 'details'])->name('main_profile');
Route::get('/upload/image', [App\Http\Controllers\UserController::class, 'image'])->name('profile_image');
Route::post('/upload/image', [App\Http\Controllers\UserController::class, 'image'])->name('profile_image');

Route::get('/cart', [App\Http\Controllers\ProductController::class, 'cartList'])->name('cartlist');

Route::get('/favorite', [App\Http\Controllers\ProductController::class, 'wishList'])->name('cartlist');

Route::POST('/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('name');

Route::get('/removeSingleCart/{name}', [App\Http\Controllers\ProductController::class, 'removeSingleCart'])->name('removeSingleCart');

Route::get('/removeSingleFav/{name}', [App\Http\Controllers\ProductController::class, 'removeSingleFav'])->name('removeSingleFav');

Route::get('/checkout/{total}', [App\Http\Controllers\ProductController::class, 'checkout'])->name('checkout');
Route::post('/afterPayment', [App\Http\Controllers\ProductController::class, 'aftersales'])->name('checkout.credit-card');

Route::get('/main_about', function () {
    return view('Dmart.About1');
});
Route::get('/main_contact', function () {
    return view('Dmart.Contact1');
});
Route::get('/user/register', function () {
    return view('Dmart.Register');
});
Route::get('/user/login', function () {
    return view('Dmart.login');
});
Route::get('/products', function () {
    return view('Dmart.Product_details');
});
Route::get('/main_faq', function () {
    return view('Dmart.FAQ1');
});
Route::get('/main_how', function () {
    return view('Dmart.HOW1');
});
Route::get('/main_term', function () {
    return view('Dmart.TermsandCondition');
});
Route::get('/main_agreement', function () {
    return view('Dmart.useragreement');
});
Route::get('/main_privacy', function () {
    return view('Dmart.PrivacyPolicy');
});



Auth::routes();



Route::get('/forgot/password', [App\Http\Controllers\ForgotPassword::class, 'forgotPassword'])->name('forgotPassword');

Route::post('/forgot/password', [App\Http\Controllers\ForgotPassword::class, 'emailSend'])->name('emailSend');

Route::get('/change/password/{userId}', [App\Http\Controllers\ForgotPassword::class, 'changePassword'])->name('changePassword');

Route::post('/change/password', [App\Http\Controllers\ForgotPassword::class, 'changePasswordUpdate'])->name('changePasswordUpdate');

