
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Edit Address</h1>
    <hr />
    <form action="<?php echo e(route('addresses.update', $address->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Street</label>
                <input type="text" name="street" class="form-control" placeholder="Street" value="<?php echo e($address->street); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo e($address->city); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Province</label>
                <input type="text" name="province" class="form-control" placeholder="Province" value="<?php echo e($address->province); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Country</label>
                <input class="form-control" name="country" placeholder="Country" value= "<?php echo e($address->country); ?>"> </input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Postal Code</label>
                <input class="form-control" name="postal code" placeholder="Postal Code" value= "<?php echo e($address->postal_code); ?>"> </input>
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\tugas-ppl\resources\views/addresses/edit.blade.php ENDPATH**/ ?>