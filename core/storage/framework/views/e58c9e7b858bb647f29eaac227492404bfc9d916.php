<?php $__env->startSection('content'); ?>
    <div class="login-main" style="background-image: url('<?php echo e(asset('assets/viseradmin/images/login.jpg')); ?>')">
        <div class="custom-container container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-11">
                    <div class="login-area">
                        <div class="login-wrapper">
                            <div class="login-wrapper__top">
                                <h3 class="title text-white"><?php echo app('translator')->get('Welcome to'); ?> <strong><?php echo e(__($general->site_name)); ?></strong>
                                </h3>
                                <p class="text-white"><?php echo e(__($pageTitle)); ?> <?php echo app('translator')->get('to'); ?> <?php echo e(__($general->site_name)); ?>

                                    <?php echo app('translator')->get('Dashboard'); ?></p>
                            </div>
                            <div class="login-wrapper__body">
                                <form class="cmn-form mt-30 verify-gcaptcha login-form" action="<?php echo e(route('admin.login')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label><?php echo app('translator')->get('Username'); ?></label>
                                        <input class="form-control" name="username" type="text" value="<?php echo e(old('username')); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo app('translator')->get('Password'); ?></label>
                                        <input class="form-control" name="password" type="password" required>
                                    </div>
                                    <?php if (isset($component)) { $__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243 = $component; } ?>
<?php $component = App\View\Components\Captcha::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('captcha'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Captcha::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243)): ?>
<?php $component = $__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243; ?>
<?php unset($__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243); ?>
<?php endif; ?>
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" id="remember" name="remember" type="checkbox">
                                            <label class="form-check-label" for="remember"><?php echo app('translator')->get('Remember Me'); ?></label>
                                        </div>
                                        <a class="forget-text" href="<?php echo e(route('admin.password.reset')); ?>"><?php echo app('translator')->get('Forgot Password?'); ?></a>
                                    </div>
                                    <button class="btn cmn-btn w-100" type="submit"><?php echo app('translator')->get('LOGIN'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>