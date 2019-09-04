<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <h1>Mail Confirmation</h1>
 <a href="">hi there</a>
 Your registered email-id is <?php echo e($user['email']); ?> , Please click on the below link to verify your email account
 <a href="<?php echo e(url('user/verify',$user->verifyEmail->token)); ?>">Verify Email</a>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\401kdepot\resources\views/mails/confirmation.blade.php ENDPATH**/ ?>