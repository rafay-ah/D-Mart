<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Exception\FirebaseException;
use PhpParser\Node\Scalar\String_;

class UserController
{
    public function details(){
        $user = auth()->user();
        if($user){
            $user = $user->localId;
            $user = app('firebase.firestore')->database()->collection('users')->document($user)->snapshot();
            return view('Dmart.profile', compact('user'));
        }
        else{
            return redirect('/user/login');
        }

    }
    public function image(Request $request){
        $user = auth()->user();
        $user_id = $user->localId;
        $user = app('firebase.firestore')->database()->collection('users')->document($user_id)->snapshot();
        $email = $user->data()['email'];
        //
        $request->validate([
            'image' => 'required',
        ]);
        $input = $request->all();
        $image = $request->file('image'); //image file from frontend

        $student   = app('firebase.firestore')->database()->collection('user_images/')->document($email);
        $firebase_storage_path = 'user_images/';
        $name     = $student->id();
        $localfolder = public_path('firebase-temp-uploads') .'/';
        $extension = $image->getClientOriginalExtension();
        $file      = $name. '.' . $extension;
        if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder.$file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            unlink($localfolder . $file);
            $expiresAt = new \DateTime('tomorrow');
            $imageReference = app('firebase.storage')->getBucket()->object("user_images/".$email.".jpg");

            if ($imageReference->exists()) {
                $image = $imageReference->signedUrl($expiresAt);

            } else {
                $image = null;
            }

            $postRef = app('firebase.firestore')->database()->collection("users")->document($user_id)->
            update([
                ['path' => 'image', 'value' => $image],
            ]);

            return redirect()->back()->with('notLogedIn', 'Product Added To Cart Successfully');
        }

    }
    public function update(Request $request)
    {
        $user = auth()->user();
        $user = $user->localId;
        try {
            $userProperties = [
                'name' => $request->input('name'),
                'mobile' => $request->input('mobile'),
                'shipment' => $request->input('shipment')
            ];
            $name = $userProperties['name'];
            $mobile = $userProperties['mobile'];
            $shipment = $userProperties['shipment'];

            $postRef = app('firebase.firestore')->database()->collection("users")->document($user)->
            update([
                ['path' => 'name', 'value' => $name],
                ['path' => 'deliveryAddress', 'value' => $shipment],
            ]);
            return redirect()->back()->with("Success", "Data Has Been Updated Successfully");
        }
        catch (FirebaseException $e) {
            Session::flash('error', $e->getMessage());
            return back()->withInput();
        }
    }
}
