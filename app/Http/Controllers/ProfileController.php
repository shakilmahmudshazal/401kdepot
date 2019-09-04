<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\profilePic;


class ProfileController extends Controller
{
    //
    public function show()
    {
    	# code...
    	$id= auth()->id();
    	$user= new user;
    	$user=$user::find($id);

    	// $profilePic= new profilePic;
    	// $profilePic=$profilePic::find($user->profilePic->id);

    	return view('advisors.advisorProfile',compact('user'));

    }
}
