

<?php $__env->startSection('content'); ?>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        <?php echo $__env->make($activeTemplate . 'partials.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make($activeTemplate . 'partials.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <?php echo $__env->make($activeTemplate . 'partials.userbreadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('panel'); ?>
            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('style'); ?>
    <style>
        .btn-group-sm>.btn,
        .btn-sm {
            padding: 0.25rem 0.5rem !important;
            font-size: .875rem !important;
            border-radius: 0.2rem;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/layouts/app.blade.php ENDPATH**/ ?>