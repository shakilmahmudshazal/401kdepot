<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\verifyEmail;
use App\Mail\confirmation;


class UserController extends Controller
{
        // public function __construct()
        // {
        //    $this->middleware('guest');

        // }



     public function createUser( Request $request)
    {
    	$validaterData=$request->validate([
          'email'=>'required',
          'password' => 'required|min:6|confirmed'
         
    	]);
          $email=$request['email'];
          $password=$request['password'];

          $user = user::create([
              'email' => $email,
              'password' => bcrypt($password)
            ]);

          $verifyEmail = verifyEmail::create([
            'user_id' => $user->id,
            'token' => sha1(time())
          ]);
          \Mail::to($user)->send(new confirmation($user));
          // auth()->login($user);
            return view('advisors.checkConfirmation');


         


   		

    }

        public function verifyEmail($token)
        {
          $verifyEmail = verifyEmail::where('token', $token)->first();
          if(isset($verifyEmail) ){
            $user = $verifyEmail->user;
            if(!$verifyEmail->user->emailConfirmed) {
              $verifyEmail->user->emailConfirmed = 1;
              $verifyEmail->user->save();
              $status = "Your e-mail is verified. You can now login.";
            } else {
              $status = "Your e-mail is already verified. You can now login.";
            }
          } else {
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
          }
          return redirect('/login')->with('status', $status);
        }

}
