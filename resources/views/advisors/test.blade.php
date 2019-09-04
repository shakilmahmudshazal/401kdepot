<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="/logout"> Logout</a>
<button class="btn btn-dark"><a  href="{{url('/advisorProfilePic')}}">Advisor Profile Pic</a></button>
    <button class="btn btn-dark"><a  href="{{url('/advisorProfilePicCreate')}}">Advisor Profile Pic Create</a></button>


    {{$user->email}}
    <br>
                        <img class="img-responsive img-circle"  src="{{asset('uploads/profilePic/'.$user->profilePic->profile_pic)}}" style="height: 200px;width: 200px" alt="Avatar">
</body>
</html>