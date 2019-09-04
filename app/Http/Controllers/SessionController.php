<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function create()
    {
    	return view('advisors.login');
    }

    public function login()
    {
        $user= new \App\user;
        $verrified=$user::where('email',request('email'))->where('emailConfirmed',1)->count();
        $notVerrified=$user::where('email',request('email'))->where('emailConfirmed',0)->where('password',request('password'))->count();

        if($verrified==0)
        {
            if ($notVerrified==0) {

                return back();

               
            } else {
                return view('advisors.verrifyEmail');
            }
            
        }


    if(!auth()->attempt(request(['email','password'])))
    {
    	return back();
    }
    // \Mail::to(auth()->user())->send(new welcomeAgain(auth()->user()));
    // return redirect()->home();


    return redirect('/advisorProfile');

    // return view('advisors.test');

     


   }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
