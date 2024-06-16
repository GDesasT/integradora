<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Comedor Industrial</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('menu') ? 'active' : ''); ?>" href="<?php echo e(route('menu')); ?>">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('login') ? 'active' : ''); ?>" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('feedback') ? 'active' : ''); ?>" href="<?php echo e(route('feedback')); ?>">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Comedor Industrial</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\gera3\OneDrive\Escritorio\Integradora\proyectoIntegradora\resources\views/layouts/nav.blade.php ENDPATH**/ ?>