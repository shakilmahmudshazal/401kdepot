<?php

namespace App\Http\Controllers;
use App\advisorLogin;
use App\verifyEmail;

use Illuminate\Http\Request;
use App\Mail\confirmation;

class AdvisorLoginController extends Controller
{
    //
     public function createAdvisor( Request $request)
    {
    	$validaterData=$request->validate([
          'email'=>'required',
          'password' => 'required|min:6|confirmed'
         
    	]);
          $email=$request['email'];
          $password=$request['password'];

          $advisorLogin = advisorLogin::create([
              'email' => $email,
              'password' => bcrypt($password)
            ]);

          $verifyEmail = verifyEmail::create([
            'advisor_login_id' => $advisorLogin->id,
            'token' => sha1(time())
          ]);
          \Mail::to($advisorLogin)->send(new confirmation($advisorLogin));
            return view('advisors.advisorProfile');


         


   		

    }

        public function verifyEmail($token)
        {
          $verifyEmail = verifyEmail::where('token', $token)->first();
          if(isset($verifyEmail) ){
            $advisorLogin = $verifyEmail->advisorLogin;
            if(!$advisorLogin->emailConfirmed) {
              $verifyEmail->advisorLogin->emailConfirmed = 1;
              $verifyEmail->advisorLogin->save();
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
