<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Book Shop')); ?></title>

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/material-design-iconic-font.min.css')); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/fontawesome-stars.css')); ?>">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/meanmenu.css')); ?>">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/slick.css')); ?>">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.css')); ?>">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery-ui.min.css')); ?>">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/venobox.css')); ?>">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/nice-select.css')); ?>">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/magnific-popup.css')); ?>">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/helper.css')); ?>">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">
  
</head>
<body>
    <div id="app">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

     <!-- Scripts -->
    <script src="<?php echo e(asset('frontend/')); ?>" defer></script>
    <!-- Modernizr js -->
    <script src="<?php echo e(asset('frontend/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
    <!-- jQuery-V1.12.4 -->
        <script src="<?php echo e(asset('frontend/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
        <!-- Popper js -->
        <script src="<?php echo e(asset('frontend/js/vendor/popper.min.js')); ?>"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
        <!-- Ajax Mail js -->
        <script src="<?php echo e(asset('frontend/js/ajax-mail.js')); ?>"></script>
        <!-- Meanmenu js -->
        <script src="<?php echo e(asset('frontend/js/jquery.meanmenu.min.js')); ?>"></script>
        <!-- Wow.min js -->
        <script src="<?php echo e(asset('frontend/js/jquery.meanmenu.min.js')); ?>x"></script>
        <!-- Slick Carousel js -->
        <script src="<?php echo e(asset('frontend/js/slick.min.js')); ?>"></script>
        <!-- Owl Carousel-2 js -->
        <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
        <!-- Magnific popup js -->
        <script src="<?php echo e(asset('frontend/js/jquery.magnific-popup.min.js')); ?>"></script>
        <!-- Isotope js -->
        <script src="<?php echo e(asset('frontend/js/isotope.pkgd.min.js')); ?>"></script>
        <!-- Imagesloaded js -->
        <script src="<?php echo e(asset('frontend/js/imagesloaded.pkgd.min.js')); ?>"></script>
        <!-- Mixitup js -->
        <script src="<?php echo e(asset('frontend/js/jquery.mixitup.min.js')); ?>"></script>
        <!-- Countdown -->
        <script src="<?php echo e(asset('frontend/js/jquery.countdown.min.js')); ?>"></script>
        <!-- Counterup -->
        <script src="<?php echo e(asset('frontend/js/jquery.counterup.min.js')); ?>"></script>
        <!-- Waypoints -->
        <script src="<?php echo e(asset('frontend/js/waypoints.min.js')); ?>"></script>
        <!-- Barrating -->
        <script src="<?php echo e(asset('frontend/js/jquery.barrating.min.js')); ?>"></script>
        <!-- Jquery-ui -->
        <script src="<?php echo e(asset('frontend/js/jquery-ui.min.js')); ?>"></script>
        <!-- Venobox -->
        <script src="<?php echo e(asset('frontend/js/venobox.min.js')); ?>"></script>
        <!-- Nice Select js -->
        <script src="<?php echo e(asset('frontend/js/jquery.nice-select.min.js')); ?>"></script>
        <!-- ScrollUp js -->
        <script src="<?php echo e(asset('frontend/js/scrollUp.min.js')); ?>"></script>
        <!-- Main/Activator js -->
        <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH F:\Work 2024\Projects\book-shop\resources\views/layouts/app.blade.php ENDPATH**/ ?>