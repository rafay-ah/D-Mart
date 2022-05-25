<?php

namespace App\Http\Controllers;

use Google\Cloud\Firestore\FieldValue;
use Illuminate\Validation\ValidationException;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Request;

class ProductController
{
    public function product()
    {

        $user = auth()->user();

        $products_info = app('firebase.firestore')->database()->collection('products');
        $products = $products_info->documents();

        $trending_products_info = app('firebase.firestore')->database()->collection('trending');
        $trending_products = $trending_products_info->documents();

        $kids_products_info = app('firebase.firestore')->database()->collection('kids');
        $kids_products = $kids_products_info->documents();

        $electronic_products_info = app('firebase.firestore')->database()->collection('electronics');
        $electronic_products = $electronic_products_info->documents();

        return view('Dmart.Home1', compact('products', 'trending_products', 'kids_products', 'electronic_products', 'user'));

    }

    public function trending()
    {

        $user = auth()->user();

        $products_info = app('firebase.firestore')->database()->collection('products');
        $products = $products_info->documents();

        $trending_products_info = app('firebase.firestore')->database()->collection('trending');
        $trending_products = $trending_products_info->documents();

        return view('Dmart.trending', compact('products', 'trending_products', 'user'));

    }
    public function prod()
    {

        $user = auth()->user();

        $products_info = app('firebase.firestore')->database()->collection('products');
        $products = $products_info->documents();

        $trending_products_info = app('firebase.firestore')->database()->collection('trending');
        $trending_products = $trending_products_info->documents();

        return view('Dmart.products', compact('products', 'trending_products', 'user'));

    }

    public function kids()
    {

        $user = auth()->user();

        $products_info = app('firebase.firestore')->database()->collection('kids');
        $products = $products_info->documents();

        return view('Dmart.kids', compact('products',  'user'));

    }
    public function electronics()
    {

        $user = auth()->user();

        $products_info = app('firebase.firestore')->database()->collection('electronics');
        $products = $products_info->documents();

        return view('Dmart.electronics', compact('products',  'user'));

    }

//    public function electronics()
//    {
//
//        $user = auth()->user();
//
//        $products_info = app('firebase.firestore')->database()->collection('electronics');
//        $products = $products_info->documents();
//
//        return view('Dmart.products', compact('products',  'user'));
//
//    }

    public function prod_details(String $id)
    {
        $user = auth()->user();

        $products = app('firebase.firestore')->database()->collection('products')->document($id)->snapshot();

        $trending_products_info = app('firebase.firestore')->database()->collection('trending');
        $trending_products = $trending_products_info->documents();

        return view('Dmart.Product_details', compact('products', 'trending_products', 'user'));

    }

    public function trend_details(String $id)
    {
        $user = auth()->user();

        $products = app('firebase.firestore')->database()->collection('trending')->document($id)->snapshot();


        return view('Dmart.Product_details', compact('products', 'user'));

    }
    public function kids_details(String $id)
    {
        $user = auth()->user();

        $products = app('firebase.firestore')->database()->collection('kids')->document($id)->snapshot();


        return view('Dmart.Product_details', compact('products', 'user'));

    }
    public function electronic_details(String $id)
    {
        $user = auth()->user();

        $products = app('firebase.firestore')->database()->collection('electronics')->document($id)->snapshot();

        return view('Dmart.Product_details', compact('products', 'user'));

    }

    public function addToCart(String $id)
    {
        $user = auth()->user();

        if($user){
            $user = $user->localId;
            $postRef= app('firebase.firestore')->database()->collection("users")->document($user)->
            update([
                ['path' => 'productsInCart', 'value'=> FieldValue::arrayUnion([$id])]
            ]);
            return redirect()->back()->with('cart_added', 'Product Added To Cart Successfully');
        }
        else{
            return redirect()->back()->with('notLogedIn', 'Product Added To Cart Successfully');
        }

    }

    public function addToWishlist(String $id)
    {
        $user = auth()->user();

        if($user){
            $user = $user->localId;
            $postRef= app('firebase.firestore')->database()->collection("users")->document($user)->
            update([
                ['path' => 'favoriteProducts', 'value'=> FieldValue::arrayUnion([$id])]
            ]);
            return redirect()->back()->with('fav_added', 'Product Added Successfully');
        }
        else{
            return redirect()->back()->with('notLogedIn', 'Not LoggedIn.');
        }

    }
    public function cartList()
    {
        $user = auth()->user();

        if($user){
            $user = $user->localId;
            $total = 0;
            $product_summary = [];
            $postRef = app('firebase.firestore')->database()->collection("users")->document($user)->snapshot();
            $cart = $postRef->data()['productsInCart'];
            $prod = app('firebase.firestore')->database()->collection("products")->documents();
            $kids_prod = app('firebase.firestore')->database()->collection("kids")->documents();
            $electronic_prod = app('firebase.firestore')->database()->collection("electronics")->documents();
            $ter_prod = app('firebase.firestore')->database()->collection("trending")->documents();
            if($cart){
                foreach ($cart as $product){

                    foreach ($prod as $proda){
                        if($proda->data()['name'] == $product){
                            $product_summary[] = [
                            'name' => $proda->data()['name'],
                            'price' => $proda->data()['price'],
                            'image' => $proda->data()['images']

                        ];
                            break;
                        }
                    }
                    foreach ($ter_prod as $tren){
                        if($tren->data()['name'] == $product){
                            $product_summary[] = [
                                'name' => $tren->data()['name'],
                                'price' => $tren->data()['price'],
                                'image' => $tren->data()['images']

                            ];
                        }
                    }
                    foreach ($kids_prod as $kids){
                        if($kids->data()['name'] == $product){
                            $product_summary[] = [
                                'name' => $kids->data()['name'],
                                'price' => $kids->data()['price'],
                                'image' => $kids->data()['images']

                            ];
                        }
                    }
                    foreach ($electronic_prod as $elec){
                        if($elec->data()['name'] == $product){
                            $product_summary[] = [
                                'name' => $elec->data()['name'],
                                'price' => $elec->data()['price'],
                                'image' => $elec->data()['images']

                            ];
                        }
                    }
                }

                foreach ($product_summary as $totall){
                    $total = $total + $totall['price'];
                }
            }
            else{
                return redirect()->back()->with("empty", "empty");
            }

            return view('Dmart.Cart', compact('product_summary', 'total'));
        }
        else{
            return redirect('/user/login');
//            return redirect()->back()->with('notLogedIn', 'Not LoggedIn.');
        }

    }



    public function wishList()
    {
        $user = auth()->user();

        $user = auth()->user();

        if($user){
            $user = $user->localId;
            $product_summary = [];
            $total = 0;
            $postRef = app('firebase.firestore')->database()->collection("users")->document($user)->snapshot();
            $cart = $postRef->data()['favoriteProducts'];
            $prod = app('firebase.firestore')->database()->collection("products")->documents();
            $kids_prod = app('firebase.firestore')->database()->collection("kids")->documents();
            $electronic_prod = app('firebase.firestore')->database()->collection("electronics")->documents();
            $ter_prod = app('firebase.firestore')->database()->collection("trending")->documents();
            if($cart){
                foreach ($cart as $product){
                    foreach ($prod as $proda){
                        if($proda->data()['name'] == $product){
                            $product_summary[] = [
                                'name' => $proda->data()['name'],
                                'price' => $proda->data()['price'],
                                'image' => $proda->data()['images']

                            ];
                            break;
                        }
                    }
                    foreach ($ter_prod as $tren){
                        if($tren->data()['name'] == $product){
                            $product_summary[] = [
                                'name' => $tren->data()['name'],
                                'price' => $tren->data()['price'],
                                'image' => $tren->data()['images']

                            ];
                        }
                    }

                    foreach ($kids_prod as $kids){
                        if($kids->data()['name'] == $product){
                            $product_summary[] = [
                                'name' => $kids->data()['name'],
                                'price' => $kids->data()['price'],
                                'image' => $kids->data()['images']

                            ];
                        }
                    }
                    foreach ($electronic_prod as $elec){
                        if($elec->data()['name'] == $product){
                            $product_summary[] = [
                                'name' => $elec->data()['name'],
                                'price' => $elec->data()['price'],
                                'image' => $elec->data()['images']

                            ];
                        }
                    }
                }
                foreach ($product_summary as $totall){
                    $total = $total + $totall['price'];
                }
            }
            else{
                return redirect()->back()->with("empty", "empty");
            }

            return view('Dmart.favorite', compact('product_summary', 'total'));
        }
        else{
            return redirect()->back()->with('notLogedIn', 'Not LoggedIn.');
        }

    }

    public function removeSingleCart(String $name){
        $user = auth()->user();
        $userId = $user->localId;
        $student = app('firebase.firestore')->database()->collection('users')->document($userId)
            ->update([
                ['path' => 'productsInCart', 'value' =>FieldValue::arrayRemove([$name])]
            ]);
        return redirect()->back()->with("Success", "Removed Product From Cart");
    }

    public function removeSingleFav(String $name){
        $user = auth()->user();
        $userId = $user->localId;
        $student = app('firebase.firestore')->database()->collection('users')->document($userId)
            ->update([
                ['path' => 'favoriteProducts', 'value' =>FieldValue::arrayRemove([$name])]
            ]);
        return redirect()->back()->with("Success", "Removed Product From Cart");
    }

    public function checkout($total)
    {
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51KygNSEMRMI9NJ9iakzf0V764U05b0N2t8yRJ7qGFki0uJVJa8nq3cYQZze9qNDaV2MrOZzq5vnYDhqHV6mTAiLm005121BgLZ');

        $amount = $total;
        $amount *= 100;
        $amount = (int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Stripe Test Payment',
            'amount' => $amount,
            'currency' => 'pkr',
            'description' => 'Payment From All About Laravel',
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;

        return view('Dmart.credit-card',compact('intent', 'total'));

    }

    public function afterPayment()
    {
        echo 'Payment Received, Thanks you for using our services.';
    }
}
