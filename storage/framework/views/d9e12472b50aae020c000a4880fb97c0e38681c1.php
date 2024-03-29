
 
<?php $__env->startSection('body'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Addresses</h1>
        <a href="<?php echo e(route('addresses.create')); ?>" class="btn btn-primary">Add Addresses</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Street</th>
                <th>City</th>
                <th>Province</th>
                <th>Country</th>
                <th>Postal Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($addresses->count() > 0): ?>
                <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="align-middle"><?php echo e($rs->street); ?></td>
                        <td class="align-middle"><?php echo e($rs->city); ?></td>
                        <td class="align-middle"><?php echo e($rs->province); ?></td>
                        <td class="align-middle"><?php echo e($rs->country); ?></td>
                        <td class="align-middle"><?php echo e($rs->postal_code); ?></td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('addresses.show', $rs->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                                <a href="<?php echo e(route('addresses.edit', $rs->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('addresses.destroy', $rs->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="5">Address not found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 4\Pengujian Perangkat Lunak\tugas-ppl\resources\views/addresses/index.blade.php ENDPATH**/ ?>