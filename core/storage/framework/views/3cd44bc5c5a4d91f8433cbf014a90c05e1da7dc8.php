<?php $__env->startSection('content'); ?>
    <?php
        $bannerContent = getContent('banner.content', true);
    ?>
    <!-- banner-section start -->
    <section class="banner-section">
        <div class="banner-element">
            <img src="<?php echo e(getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->image, '630x540')); ?>"
                alt="<?php echo app('translator')->get('banner'); ?>">
        </div>
        <div class="banner-shape-one">
            <img src="<?php echo e(asset($activeTemplateTrue . 'images/banner/icon-1.png')); ?>" alt="<?php echo app('translator')->get('shape'); ?>">
        </div>
        <div class="banner-shape-two">
            <img src="<?php echo e(asset($activeTemplateTrue . 'images/banner/icon-2.png')); ?>" alt="<?php echo app('translator')->get('shape'); ?>">
        </div>
        <div class="banner-shape-three">
            <img src="<?php echo e(asset($activeTemplateTrue . 'images/banner/icon-3.png')); ?>" alt="<?php echo app('translator')->get('shape'); ?>">
        </div>
        <div class="container">
            <figure class="figure highlight-background highlight-background--lean-right">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1291px"
                    height="480px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="0%" x2="0%" y1="100%" y2="0%">
                            <stop offset="28%" stop-color="rgb(244,245,250)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(252,253,255)" stop-opacity="1" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" opacity="0.1" fill="rgb(0, 0, 0)"
                        d="M480.084,0.001 L1290.991,0.001 L810.906,831.000 L-0.000,831.000 L480.084,0.001 Z" />
                    <path fill="url(#PSgrad_0)"
                        d="M480.084,0.001 L1290.991,0.001 L810.906,831.000 L-0.000,831.000 L480.084,0.001 Z" />
                </svg>
            </figure>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-content">
                        <h2 class="title"><?php echo e(__(@$bannerContent->data_values->heading)); ?></h2>
                        <p><?php echo e(__(@$bannerContent->data_values->sub_heading)); ?></p>
                        <div class="banner-btn">
                            <a href="<?php echo e(@$bannerContent->data_values->button_link); ?>"
                                class="btn--base"><?php echo e(__(@$bannerContent->data_values->button)); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <?php if($sections->secs != null): ?>
        <?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($activeTemplate . 'sections.' . $sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/home.blade.php ENDPATH**/ ?>