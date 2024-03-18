

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    
                    <div class="page-section mb-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                                    <!-- Login Form s-->
                                    <form method="POST" action="<?php echo e(route('login')); ?>">
                                       <?php echo csrf_field(); ?>
                                        <div class="login-form">
                                            <h4 class="login-title">Login</h4>
                                            <div class="row">
                                                <div class="col-md-12 col-12 mb-20">
                                                    <label>Email Address*</label>
                                                    <input class="mb-0 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" placeholder="Email Address"  name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                                    
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>Password</label>
                                                    <input class="mb-0 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                                                
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                        <input type="checkbox" id="remember_me" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                        <label for="remember_me">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">    
                                                <?php if(Route::has('password.request')): ?>
                                                    <a href="<?php echo e(route('password.request')); ?>">Forgotten pasward?</a>
                                                <?php endif; ?>
                                                                                
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="register-button mt-0">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                                 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work 2024\Projects\book-shop\resources\views/auth/login.blade.php ENDPATH**/ ?>