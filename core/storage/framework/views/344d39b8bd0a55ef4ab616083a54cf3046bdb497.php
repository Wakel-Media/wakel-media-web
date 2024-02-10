<?php $__env->startSection('content'); ?>
    <!-- register-section start -->
    <section class="register-section ptb-80">
        <div class="register-element-one">
            <img src="<?php echo e(asset($activeTemplateTrue . 'images/round.png')); ?>" alt="<?php echo app('translator')->get('shape'); ?>">
        </div>
        <div class="container">
            <figure class="figure highlight-background highlight-background--lean-left">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1439px"
                    height="480px">
                    <defs>
                        <linearGradient id="PSgrad_1" x1="42.262%" x2="0%" y1="90.631%" y2="0%">
                            <stop offset="28%" stop-color="rgb(245,246,252)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(255,255,255)" stop-opacity="1" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                        d="M863.247,-271.203 L-345.788,-427.818 L760.770,642.200 L1969.805,798.815 L863.247,-271.203 Z" />
                    <path fill="url(#PSgrad_1)"
                        d="M863.247,-271.203 L-345.788,-427.818 L760.770,642.200 L1969.805,798.815 L863.247,-271.203 Z" />
                </svg>
            </figure>
            <div class="account-wrapper">
                <div class="signup-area account-area change-form">
                    <div class="row m-0 flex-wrap-reverse">
                        <div class="col-lg-6">
                            <div class="register-form-area common-form-style bg-one create-account">
                                <h4 class="title"><?php echo app('translator')->get('Login your account'); ?></h4>
                                <form class="create-account-form register-form verify-gcaptcha" method="POST"
                                    action="<?php echo e(route('user.login')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label"><?php echo app('translator')->get('Username or Email'); ?></label>
                                            <input type="text" name="username" class="form--control"
                                                value="<?php echo e(old('username')); ?>" placeholder="<?php echo app('translator')->get('Username or Email'); ?>" required>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label"><?php echo app('translator')->get('Password'); ?></label>
                                            <input id="password" type="password" class="form--control" name="password"
                                                required autocomplete="current-password" placeholder="<?php echo app('translator')->get('Password'); ?>">
                                        </div>

                                        <div class="col-lg-12">
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
                                        </div>

                                        <div class="col-lg-12 mb-3 text-center">
                                            <div class="checkbox-wrapper d-flex flex-wrap justify-content-between">
                                                <div class="checkbox-item">
                                                    <input type="checkbox" name="remember" id="remember"
                                                        <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <label for="remember"><?php echo app('translator')->get('Remember Me'); ?></label>
                                                </div>


                                                <a href="<?php echo e(route('user.password.request')); ?>"
                                                    class="text--base"><?php echo app('translator')->get('Forgot Password?'); ?></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" class="submit-btn w-100"><?php echo app('translator')->get('Signin Now'); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="change-catagory-area">
                                <h4 class="title">
                                    <?php echo app('translator')->get('New here?'); ?>
                                </h4>
                                <a href="<?php echo e(route('user.register')); ?>"
                                    class="btn--base-active account-control-button"><?php echo app('translator')->get('Create Account'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register-section end -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        "use strict";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    '<span style="color:red;"><?php echo app('translator')->get('Captcha field is required.'); ?></span>';
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
        (function($) {
            $('.captcha').remove();
            $('input[name=captcha]').attr('placeholder', `<?php echo app('translator')->get('Captcha'); ?>`);
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/user/auth/login.blade.php ENDPATH**/ ?>