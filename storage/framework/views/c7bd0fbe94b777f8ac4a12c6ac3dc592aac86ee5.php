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
  
    
        <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/images/logo/favicon.png')); ?>" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/plugin.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>">
</head>
<body>
    <div id="app">
        <?php echo $__env->make('layouts.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

     <!-- Scripts -->
   
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

    
        <script type="text/javascript" src="<?php echo e(asset('frontend/assets/js/plugin.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('frontend/assets/js/script.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\GitRipos\book-shop\resources\views/layouts/master.blade.php ENDPATH**/ ?>