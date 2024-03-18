
<?php $__env->startSection('content'); ?>
          <section class="slider-area py-3">
                <div class="container">
                    <div class="carousel" data-items="1" data-autoplay="true" data-loop="true" data-infinite="true" data-dots="true" data-fade="true">
                        <div class="single-item">
                            <img class="lazyload w-100 img-fit d-md-block d-none" src="<?php echo e(asset('frontend/assets/images/slider/1.webp')); ?>" alt="Slide Image">
                            <img class="lazyload w-100 img-fit d-md-none" data-src="<?php echo e(asset('frontend/assets/images/slider/mobile1.jpg')); ?>" alt="Slide Image">
                        </div>
                        <div class="single-item">
                            <img class="lazyload w-100 img-fit d-md-block d-none" data-src="<?php echo e(asset('frontend/assets/images/slider/2.webp')); ?>" alt="Slide Image">
                            <img class="lazyload w-100 img-fit d-md-none" data-src="<?php echo e(asset('frontend/assets/images/slider/mobile2.jpg')); ?>" alt="Slide Image">
                        </div>
                        <div class="single-item">
                            <img class="lazyload w-100 img-fit d-md-block d-none" data-src="<?php echo e(asset('frontend/assets/images/slider/3.webp')); ?>" alt="Slide Image">
                            <img class="lazyload w-100 img-fit d-md-none" data-src="<?php echo e(asset('frontend/assets/images/slider/mobile3.jpg')); ?>" alt="Slide Image">
                        </div>
                        <div class="single-item">
                            <img class="lazyload w-100 img-fit d-md-block d-none" data-src="<?php echo e(asset('frontend/assets/images/slider/4.webp')); ?>" alt="Slide Image">
                            <img class="lazyload w-100 img-fit d-md-none" data-src="<?php echo e(asset('frontend/assets/images/slider/mobile2.jpg')); ?>" alt="Slide Image">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Slider Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\GitRipos\book-shop\resources\views/welcome.blade.php ENDPATH**/ ?>