<?php $__env->startSection("content"); ?>

 <h1 class="btn-dark">User</h1>
    <div class="">
        <div class="row">

        <div class="col-sm-8">

            <ul type="none">
                <?php if(!empty($user->profilePic)): ?>
                <li>  <img class="img-responsive img-circle"  src="<?php echo e(asset('uploads/profilePic/'.$user->profilePic->profile_pic)); ?>" style="height: 200px;width: 200px" alt="Avatar">  </li>
                
                <li>Profile Pic ID: <?php echo e($user->profilePic->user_id); ?></li>
                <?php endif; ?>
                <li>Email: <?php echo e($user->email); ?></li>
            </ul>

           
                

            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>


<div>
                  
                  
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\401kdepot\resources\views/advisors/advisorProfile.blade.php ENDPATH**/ ?>