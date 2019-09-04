<?php $__env->startSection("content"); ?>


  <div class="row">
    <div class="col-sm-8 offset-2 ">
        <h1> Login Here</h1>
<form method="post" action="/login">
      <?php echo e(csrf_field()); ?>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Log In</button>
  <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
    </div>


    </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\401kdepot\resources\views/advisors/login.blade.php ENDPATH**/ ?>