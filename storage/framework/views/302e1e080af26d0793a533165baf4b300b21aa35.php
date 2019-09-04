<?php $__env->startSection("content"); ?>

    <h1> Create New Profile Pic</h1>
    <div class="row">
        <div class="col-sm-8">

            <form method="post" action="<?php echo e(url('/save-profile')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="profile_pic">Profile Pic</label> </br>
                    <input type="file" name="profile_pic">
                </div>

                <a  class="btn btn-danger m-t-15 waves-effect" href="<?php echo e(route('home')); ?>">BACK</a>
                <button type="submit" class="btn btn-primary">Save</button>
                <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>


    </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\401kdepot\resources\views/advisors/advisorProfileCreate.blade.php ENDPATH**/ ?>