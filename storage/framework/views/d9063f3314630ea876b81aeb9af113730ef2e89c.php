
 
<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="<?php echo e(route('product.update', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="title" class="form-control" placeholder="First Name" value="<?php echo e($product->title); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="price" class="form-control" placeholder="Last Name" value="<?php echo e($product->price); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="product_code" class="form-control" placeholder="Email" value="<?php echo e($product->product_code); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <textarea class="form-control" name="description" placeholder="Phone" ><?php echo e($product->description); ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 4\Pengujian Perangkat Lunak\tugas-ppl\resources\views/product/edit.blade.php ENDPATH**/ ?>