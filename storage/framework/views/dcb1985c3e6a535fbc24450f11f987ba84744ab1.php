<title><?php echo e(Auth::user()->name); ?></title>
 
<?php $__env->startSection('body'); ?>
    <div class="d-flex align-items-center justify-content-between">
      <h1> Welcome, <?php echo e(Auth::user()->name); ?></h1>
      <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <div class="btn-group">
          <a href="/edit" class="btn btn-primary">Edit Profile</a>
          <button class="btn btn-danger" type="submit">Logout</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 4\Pengujian Perangkat Lunak\tugas-ppl\resources\views/home.blade.php ENDPATH**/ ?>