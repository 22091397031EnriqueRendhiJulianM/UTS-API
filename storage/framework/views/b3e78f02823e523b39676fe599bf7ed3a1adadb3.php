<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/home"><?php echo e(Auth::user()->name); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('addresses*') ? 'active' : ''); ?>" href="<?php echo e(route('addresses.index')); ?>">Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('Contact*') ? 'active' : ''); ?>" href="<?php echo e(route('Contact.index')); ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\laravel\tugas-ppl\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>