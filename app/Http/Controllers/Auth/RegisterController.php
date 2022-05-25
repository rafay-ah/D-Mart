<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Validation\ValidationException;
use Session;

use App\Http\Controllers\post_legal_caseController;

use Auth;
use Kreait\Firebase\Database;
use Carbon\Carbon;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */



    use RegistersUsers;
    protected $auth;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct(FirebaseAuth $auth, Database $database) {
       $this->middleware('guest');
      $this->database = $database;

       $this->auth = $auth;
    }

    protected function validator(array $data) {
       return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255'],
          'password' => ['required', 'string', 'min:8', 'max:12'],
       ]);
    }
    protected function register(Request $request) {


       try {
         $this->validator($request->all())->validate();
         $userProperties = [
            'email' => $request->input('email'),
            'emailVerified' => false,
            'password' => $request->input('password'),
            'displayName' => $request->input('name'),
            'disabled' => false,
         ];


           try {
               if ($this->auth->getUserByEmail($request->input('email'))){
                   return redirect()->back()->with('user_exist', 'User Already Exist');
               }
           }
           catch (FirebaseException $e) {
               $createdUser = $this->auth->createUser($userProperties);
           };

         $user = $request->all();
             $postData = [
                     'user_id' => $createdUser->uid,
                     'email' => $user['email'],
                     'name' => $user['name'],
                     'admin' => false,
                     'deliveryAddress' => "",
                     'image' => "",
                     'favoriteProducts' => [],
                    'productsInCart' => [],

                 ];


        $postRef= app('firebase.firestore')->database()->collection("users")->document($createdUser->uid)->set($postData);


//           var_dump($createdUser->uid);
//           die();
//        $postRef = $this->database->getReference('users/'.$createdUser->uid)->set($postData);

        if ($postRef) {
         return redirect()->back()->with('success', 'Registration Successfull');
     } else {
            session()->flash('message', 'your message Failed');
         return redirect()->back()->with('failed', 'Registration Failed ');
     }

        return redirect()->route('login');
       } catch (FirebaseException $e) {
          Session::flash('error', $e->getMessage());
          return back()->withInput();
       }
    }
 }
