
 
<?php $__env->startSection('body'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Contact</h1>
        <a href="<?php echo e(route('Contact.create')); ?>" class="btn btn-primary">Add Contact</a>
    </div>
    <form action="/Contact">
        <div class="input-group mb-3 mt-3">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <button type="search" class="btn btn-primary">Search</button>
        </div>
    </form>
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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($Contact->count() > 0): ?>
                <?php $__currentLoopData = $Contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="align-middle"><?php echo e($rs->first_name); ?></td>
                        <td class="align-middle"><?php echo e($rs->last_name); ?></td>
                        <td class="align-middle"><?php echo e($rs->email); ?></td>
                        <td class="align-middle"><?php echo e($rs->phone); ?></td>

                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('Contact.show', $rs->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                                <a href="<?php echo e(route('Contact.edit', $rs->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('Contact.destroy', $rs->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Contact not found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\tugas-ppl\resources\views/contact/index.blade.php ENDPATH**/ ?>