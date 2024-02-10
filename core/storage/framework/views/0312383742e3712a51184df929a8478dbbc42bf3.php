<?php $__env->startSection('content'); ?>
    <?php
        $policyPages = getContent('privacy_policy.element', null, false, true);
    ?>
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
                <div class="login-area account-area change-form">
                    <div class="row m-0">
                        <div class="col-lg-6 p-0">
                            <div class="change-catagory-area">
                                <h4 class="title">
                                    <?php echo app('translator')->get('Already have an account?'); ?>
                                </h4>
                                <a href="<?php echo e(route('user.login')); ?>"
                                    class="btn--base-active account-control-button"><?php echo app('translator')->get('Sign In Here'); ?></a>
                            </div>
                        </div>

                        <div class="col-lg-6 ">
                            <div class="register-form-area common-form-style bg-one create-account">
                                <h4 class="title"><?php echo app('translator')->get('Create your account'); ?></h4>
                                <form action="<?php echo e(route('user.register')); ?>" method="POST" class="verify-gcaptcha">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label"><?php echo app('translator')->get('Username'); ?></label>
                                                <input type="text" class="form-control form--control checkUser"
                                                    name="username" value="<?php echo e(old('username')); ?>" required
                                                    placeholder="<?php echo app('translator')->get('Enter Username'); ?>">
                                                <small class="text--danger usernameExist"></small>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label"><?php echo app('translator')->get('E-Mail Address'); ?></label>
                                                <input type="email" class="form-control form--control checkUser"
                                                    placeholder="<?php echo app('translator')->get('Your Email'); ?>" name="email"
                                                    value="<?php echo e(old('email')); ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label"><?php echo app('translator')->get('Country'); ?></label>
                                                <select name="country" class="form-control form--control">
                                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option data-mobile_code="<?php echo e($country->dial_code); ?>"
                                                            value="<?php echo e($country->country); ?>" data-code="<?php echo e($key); ?>">
                                                            <?php echo e(__($country->country)); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label"><?php echo app('translator')->get('Mobile'); ?></label>
                                                <div class="input-group ">
                                                    <span class="input-group-text mobile-code">

                                                    </span>
                                                    <input type="hidden" name="mobile_code">
                                                    <input type="hidden" name="country_code">
                                                    <input type="number" name="mobile" value="<?php echo e(old('mobile')); ?>"
                                                        class="form-control form--control checkUser"
                                                        placeholder="<?php echo app('translator')->get('Your Phone Number'); ?>" required>
                                                </div>
                                                <small class="text--danger mobileExist"></small>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label"><?php echo app('translator')->get('Password'); ?></label>
                                                <input type="password" class="form-control form--control" name="password"
                                                    placeholder="<?php echo app('translator')->get('Password'); ?>" required>
                                                <?php if($general->secure_password): ?>
                                                    <div class="input-popup">
                                                        <p class="error lower"><?php echo app('translator')->get('1 small letter minimum'); ?></p>
                                                        <p class="error capital"><?php echo app('translator')->get('1 capital letter minimum'); ?></p>
                                                        <p class="error number"><?php echo app('translator')->get('1 number minimum'); ?></p>
                                                        <p class="error special"><?php echo app('translator')->get('1 special character minimum'); ?></p>
                                                        <p class="error minimum"><?php echo app('translator')->get('6 character password'); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label"><?php echo app('translator')->get('Confirm Password'); ?></label>
                                                <input type="password" class="form-control form--control"
                                                    name="password_confirmation" required placeholder="<?php echo app('translator')->get('Confirm Password'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
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


                                    </div>

                                    <?php if($general->agree): ?>
                                        <div class="form-group form-checkbox mb-3">
                                            <input type="checkbox" id="agree" <?php if(old('agree')): echo 'checked'; endif; ?>
                                                name="agree" required>
                                            <label for="agree"><?php echo app('translator')->get('I agree with'); ?></label>
                                            <span class="text--base">
                                                <?php $__currentLoopData = $policyPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a
                                                        href="<?php echo e(route('policy.pages', [slug($policy->data_values->title), $policy->id])); ?>"><?php echo e(__($policy->data_values->title)); ?></a>
                                                    <?php if(!$loop->last): ?>
                                                        ,
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="form-group mt-3">
                                        <button type="submit" id="recaptcha" class="btn btn--base w-100">
                                            <?php echo app('translator')->get('Register'); ?></button>
                                    </div>
                                    <p class="mt-3"><?php echo app('translator')->get('Already have an account?'); ?>
                                        <a href="<?php echo e(route('user.login')); ?>" class="text--base">
                                            <?php echo app('translator')->get('Login'); ?>
                                        </a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="existModalLongTitle"><?php echo app('translator')->get('You are with us'); ?></h5>
                    <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </span>
                </div>
                <div class="modal-body">
                    <h6 class="text-center"><?php echo app('translator')->get('You already have an account please Login '); ?></h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark btn-sm"
                        data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                    <a href="<?php echo e(route('user.login')); ?>" class="btn btn--base btn-sm"><?php echo app('translator')->get('Login'); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .country-code .input-group-text {
            background: #fff !important;
        }

        .country-code select {
            border: none;
        }

        .country-code select:focus {
            border: none;
            outline: none;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php if($general->secure_password): ?>
    <?php $__env->startPush('script-lib'); ?>
        <script src="<?php echo e(asset('assets/global/js/secure_password.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        (function($) {
            <?php if($mobileCode): ?>
                $(`option[data-code=<?php echo e($mobileCode); ?>]`).attr('selected', '');
            <?php endif; ?>
            $('select[name=country]').change(function() {
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
            $('.checkUser').on('focusout', function(e) {
                var url = '<?php echo e(route('user.checkUser')); ?>';
                var value = $(this).val();
                var token = '<?php echo e(csrf_token()); ?>';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {
                        mobile: mobile,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'email') {
                    var data = {
                        email: value,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'username') {
                    var data = {
                        username: value,
                        _token: token
                    }
                }
                $.post(url, data, function(response) {
                    if (response.data != false && response.type == 'email') {
                        $('#existModalCenter').modal('show');
                    } else if (response.data != false) {
                        $(`.${response.type}Exist`).text(`${response.type} already exist`);
                    } else {
                        $(`.${response.type}Exist`).text('');
                    }
                });
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/user/auth/register.blade.php ENDPATH**/ ?>