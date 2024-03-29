
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Add Contact</h1>
    <hr />
    <form action="<?php echo e(route('Contact.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo e($Contact->last_name); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo e($Contact->last_name); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" placeholder="email" value= "<?php echo e($Contact->email); ?>"> </input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo e($Contact->phone); ?>" > </input>
            </div>
        </div>
       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 4\Pengujian Perangkat Lunak\tugas-ppl\resources\views/Contact/create.blade.php ENDPATH**/ ?>