
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Detail Address</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Street</label>
            <input type="text" name="street" class="form-control" placeholder="Street" value="<?php echo e($addresses->street); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control" placeholder="Price" value="<?php echo e($addresses->city); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="province" class="form-control" placeholder="Province" value="<?php echo e($addresses->province); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Country</label>
            <input type="text" name="country" class="form-control" placeholder="Country" value="<?php echo e($addresses->country); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Postal Code</label>
            <input type="text" name="postal_code" class="form-control" placeholder="Postal Code" value="<?php echo e($addresses->postal_code); ?>" readonly>
        </div>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($addresses->created_at); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($addresses->updated_at); ?>" readonly>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\tugas-ppl\resources\views/addresses/show.blade.php ENDPATH**/ ?>