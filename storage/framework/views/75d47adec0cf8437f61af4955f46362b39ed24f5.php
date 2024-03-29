
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Add Addresses</h1>
    <hr />
    <form action="<?php echo e(route('addresses.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Street</label>
                <input type="text" name="street" class="form-control" placeholder="Street" value="<?php echo e($addresses->street); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo e($addresses->city); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Postal Code</label>
                <input class="form-control" name="postal_code" placeholder="Postal Code" value= "<?php echo e($addresses->postal_code); ?>"> </input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Province</label>
                <input type="text" name="province" class="form-control" placeholder="Province" value="<?php echo e($addresses->province); ?>" > </input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Country</label>
                <input class="form-control" name="country" placeholder="Country" value= "<?php echo e($addresses->country); ?>"> </input>
            </div>
        </div>
       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\tugas-ppl\resources\views/addresses/create.blade.php ENDPATH**/ ?>