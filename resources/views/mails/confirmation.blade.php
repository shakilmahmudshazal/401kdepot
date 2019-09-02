<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <h1>Mail Confirmation</h1>
 <a href="">hi tyhere</a>
 Your registered email-id is {{$advisorLogin['email']}} , Please click on the below link to verify your email account
 <a href="{{url('advisor/verify',$advisorLogin->verifyEmail->token)}}">Verify Email</a>
</body>
</html>