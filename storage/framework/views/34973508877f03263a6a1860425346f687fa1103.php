<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="/logout"> Logout</a>
<button class="btn btn-dark"><a  href="<?php echo e(url('/advisorProfilePic')); ?>">Advisor Profile Pic</a></button>
    <button class="btn btn-dark"><a  href="<?php echo e(url('/advisorProfilePicCreate')); ?>">Advisor Profile Pic Create</a></button>


    <?php echo e($user->email); ?>

    <br>
                        <img class="img-responsive img-circle"  src="<?php echo e(asset('uploads/profilePic/'.$user->profilePic->profile_pic)); ?>" style="height: 200px;width: 200px" alt="Avatar">
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\401kdepot\resources\views/advisors/test.blade.php ENDPATH**/ ?>