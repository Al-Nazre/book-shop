<div class="nav-area border-bottom border-light bg-white d-lg-block d-none">
    <div class="container">
        <nav id="main-menu">
            <ul class="d-flex align-items-center justify-content-center list-unstyled mb-0">
                <li>
                    <a href="./index.html">
                        <span>হোম</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>বই</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>জেনারেল বই</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>বিষয়</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>লেখক</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>প্রকাশক</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>বইমেলা ২০২২</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>প্রি-অর্ডার</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>প্রসাধনী</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>পোশাক</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="./blogs.html">
                        <span>ব্লগ</span>
                    </a>
                </li>
                <li>
                    <a href="./category.html">
                        <span>স্টেশনারী</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
            <!-- End Nav Area -->


<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'Laravel')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\GitRipos\book-shop\resources\views/layouts/inc/navbar.blade.php ENDPATH**/ ?>