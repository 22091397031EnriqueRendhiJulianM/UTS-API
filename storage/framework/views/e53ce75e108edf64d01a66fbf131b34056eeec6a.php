
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Edit Profile</h1>
    <hr />
    <form action="<?php echo e(route('update.profile')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e(Auth::user()->name); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo e(Auth::user()->username); ?>" >
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\tugas-ppl\resources\views/edit.blade.php ENDPATH**/ ?>