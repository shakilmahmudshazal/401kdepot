@extends('layouts.master')
@section("content")

 <h1 class="btn-dark">User</h1>
    <div class="">
        <div class="row">

        <div class="col-sm-8">

            <ul type="none">
                @if(!empty($user->profilePic))
                <li>  <img class="img-responsive img-circle"  src="{{asset('uploads/profilePic/'.$user->profilePic->profile_pic)}}" style="height: 200px;width: 200px" alt="Avatar">  </li>
                
                <li>Profile Pic ID: {{$user->profilePic->user_id}}</li>
                @endif
                <li>Email: {{$user->email}}</li>
            </ul>

           
                

            </div>
        </div>
    </div>



@endsection


<div>
                  
                  