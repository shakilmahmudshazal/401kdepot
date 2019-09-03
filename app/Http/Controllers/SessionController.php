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
    if(!auth()->attempt(request(['email','password'])))
    {
    	return back();
    }
    // \Mail::to(auth()->user())->send(new welcomeAgain(auth()->user()));
    // return redirect()->home();
    return view('advisors.advisorProfile');

     


   }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
