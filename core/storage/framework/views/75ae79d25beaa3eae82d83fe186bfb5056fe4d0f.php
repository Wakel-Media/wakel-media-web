<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo e($general->siteName(__($pageTitle))); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="<?php echo e(asset('assets/global/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/css/line-awesome.min.css')); ?>" rel="stylesheet" />

    <link href="<?php echo e(asset($activeTemplateTrue . 'font/flaticon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/magnific-popup.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/nice-select.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/swiper.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/odometer.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/jquery.animatedheadline.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/custom.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldPushContent('style-lib'); ?>
    <?php echo $__env->yieldPushContent('style'); ?>
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/color.php')); ?>?color=<?php echo e($general->base_color); ?>&secondColor=<?php echo e($general->secondary_color); ?>" rel="stylesheet">
</head>

<body>

    <?php echo $__env->yieldPushContent('fbComment'); ?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>

    <?php echo $__env->make($activeTemplate . 'partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <!-- header-section end -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--breadcrumb area-->
    <?php if(request()->route()->getName() != 'home'): ?>
        <?php echo $__env->make($activeTemplate . 'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!--/breadcrumb area-->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- footer-section start -->
    <?php echo $__env->make($activeTemplate . 'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="privacy-area privacy-area--style">
        <div class="container">
            <div class="copyright-area d-flex align-items-center justify-content-center flex-wrap">
                <div class="copyright">
                    <p><?php echo app('translator')->get('COPYRIGHT'); ?> &copy; <?php echo e(date('Y')); ?> <?php echo app('translator')->get('ALL RIGHT RESERVED'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-section end -->

    <?php
        $cookie = App\Models\Frontend::where('data_keys', 'cookie.data')->first();
    ?>
    <?php if($cookie->data_values->status == Status::ENABLE && !\Cookie::get('gdpr_cookie')): ?>
        <!-- cookies dark version start -->
        <div class="cookies-card hide text-center">
            <div class="cookies-card__icon bg--base">
                <i class="las la-cookie-bite"></i>
            </div>
            <p class="cookies-card__content mt-4"><?php echo e($cookie->data_values->short_desc); ?> <a
                    class="link-text" href="<?php echo e(route('cookie.policy')); ?>" target="_blank"><?php echo app('translator')->get('learn more'); ?></a></p>
            <div class="cookies-card__btn mt-4">
                <button class="btn submit-btn w-100 policy" type="button"><?php echo app('translator')->get('Allow'); ?></button>
            </div>
        </div>
    <?php endif; ?>
    <script src="<?php echo e(asset('assets/global/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/jquery.magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/jquery.nice-select.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/plugin.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/chart.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/viewport.jquery.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/odometer.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/main.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('script-lib'); ?>
    <?php echo $__env->yieldPushContent('script'); ?>
    <?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "<?php echo e(route('home')); ?>/change/" + $(this).val();
            });

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
                matched = event.matches;
                if (matched) {
                    $('body').addClass('dark-mode');
                    $('.navbar').addClass('navbar-dark');
                } else {
                    $('body').removeClass('dark-mode');
                    $('.navbar').removeClass('navbar-dark');
                }
            });

            let matched = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (matched) {
                $('body').addClass('dark-mode');
                $('.navbar').addClass('navbar-dark');
            } else {
                $('body').removeClass('dark-mode');
                $('.navbar').removeClass('navbar-dark');
            }

            var inputElements = $('input,select');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $('.policy').on('click', function() {
                $.get('<?php echo e(route('cookie.accept')); ?>', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            var inputElements = $('[type=text],select,textarea');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input,select,textarea'), function(i, element) {
                let elementType = $(element);
                if (elementType.attr('type') != 'checkbox') {
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
                }
            })

        })(jQuery);
    </script>
</body>

</html>
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/layouts/frontend.blade.php ENDPATH**/ ?>