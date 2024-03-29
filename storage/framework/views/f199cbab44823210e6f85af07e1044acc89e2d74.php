
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Detail Contact</h1>
    <hr />
    <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo e($Contact->first_name); ?>" >
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
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($Contact->created_at); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($Contact->updated_at); ?>" readonly>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 4\Pengujian Perangkat Lunak\tugas-ppl\resources\views/Contact/show.blade.php ENDPATH**/ ?>