<?php $__env->startSection('panel'); ?>
    <div class="row gy-4">
        <div class="col-xxl-4 col-sm-6">
            <div class="card bg--primary has-link box--shadow2 overflow-hidden">
                <a class="item-link" href="<?php echo e(route('user.transactions')); ?>"></a>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <i class="la la-wallet f-size--56"></i>
                        </div>
                        <div class="col-8 text-end">
                            <span class="text--small text-white"><?php echo app('translator')->get('Balance'); ?></span>
                            <h2 class="text-white"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($widget['balance'])); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xxl-4 col-sm-6">
            <div class="card bg--success has-link box--shadow2">
                <a class="item-link" href="<?php echo e(route('user.transactions')); ?>?remark=order"></a>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <i class="la la-money-bill f-size--56"></i>
                        </div>
                        <div class="col-8 text-end">
                            <span class="text--small text-white"><?php echo app('translator')->get('Total Spent'); ?></span>
                            <h2 class="text-white"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($widget['total_spent'])); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xxl-4 col-sm-6">
            <div class="card bg--danger has-link box--shadow2">
                <a class="item-link" href="<?php echo e(route('user.transactions')); ?>"></a>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <i class="la la-exchange-alt f-size--56"></i>
                        </div>
                        <div class="col-8 text-end">
                            <span class="text--small text-white"><?php echo app('translator')->get('Total Transactions'); ?></span>
                            <h2 class="text-white"><?php echo e($widget['total_transaction']); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
    </div>

    <div class="row gy-4 mt-2">
        <div class="col-xxl-4 col-sm-6">
            <div class="card bg--purple has-link box--shadow2 overflow-hidden">
                <a class="item-link" href="<?php echo e(route('user.services')); ?>"></a>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <i class="las la-list f-size--56"></i>
                        </div>
                        <div class="col-8 text-end">
                            <span class="text--small text-white"><?php echo app('translator')->get('Total service'); ?></span>
                            <h2 class="text-white"><?php echo e($widget['total_service']); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xxl-4 col-sm-6">
            <div class="card bg--blue has-link box--shadow2">
                <a class="item-link" href="<?php echo e(route('user.deposit.history')); ?>"></a>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <i class="fas fa-wallet f-size--56"></i>
                        </div>
                        <div class="col-8 text-end">
                            <span class="text--small text-white"><?php echo app('translator')->get('Total Deposit'); ?></span>
                            <h2 class="text-white"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($widget['deposit'])); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xxl-4 col-sm-6">
            <div class="card bg--lime has-link box--shadow2">
                <a class="item-link" href="<?php echo e(route('ticket.index')); ?>"></a>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <i class="las la-ticket-alt f-size--56"></i>
                        </div>
                        <div class="col-8 text-end">
                            <span class="text--small text-white"><?php echo app('translator')->get('Total Tickets'); ?></span>
                            <h2 class="text-white"><?php echo e($widget['total_ticket']); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
    </div>
    <div class="row gy-4 mt-2">
        <div class="col-xxl-4 col-sm-6">
            <div class="widget-two box--shadow2 b-radius--5 bg--white">
                <a class="item-link" href="<?php echo e(route('user.order.pending')); ?>"></a>
                <i class="la la-spinner overlay-icon text--warning"></i>
                <div class="widget-two__icon b-radius--5 bg--warning">
                    <i class="la la-spinner"></i>
                </div>
                <div class="widget-two__content">
                    <h3><?php echo e($widget['pending_order']); ?></h3>
                    <p><?php echo app('translator')->get('Pending Order'); ?></p>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xxl-4 col-sm-6">
            <div class="widget-two box--shadow2 b-radius--5 bg--white">
                <a class="item-link" href="<?php echo e(route('user.order.processing')); ?>"></a>
                <i class="la la-refresh overlay-icon text--teal"></i>
                <div class="widget-two__icon b-radius--5 bg--teal">
                    <i class="la la-refresh"></i>
                </div>
                <div class="widget-two__content">
                    <h3><?php echo e($widget['processing_order']); ?></h3>
                    <p><?php echo app('translator')->get('Processing Order'); ?></p>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->

        <div class="col-xxl-4 col-sm-6">
            <div class="widget-two box--shadow2 b-radius--5 bg--white">
                <a class="item-link" href="<?php echo e(route('user.order.completed')); ?>"></a>
                <i class="las la-check-circle overlay-icon text--success"></i>
                <div class="widget-two__icon b-radius--5 bg--success">
                    <i class="las la-check-circle"></i>
                </div>
                <div class="widget-two__content">
                    <h3><?php echo e($widget['completed_order']); ?></h3>
                    <p><?php echo app('translator')->get('Complete Order'); ?></p>
                </div>

            </div>
        </div><!-- dashboard-w1 end -->

    </div>

    <div class="row gy-4 mt-2">

        <div class="col-xxl-4 col-sm-6">
            <div class="widget-two box--shadow2 b-radius--5 bg--white">
                <a class="item-link" href="<?php echo e(route('user.order.refunded')); ?>"></a>
                <i class="la la-fast-backward overlay-icon text-secondary"></i>
                <div class="widget-two__icon b-radius--5 bg-secondary">
                    <i class="la la-fast-backward"></i>
                </div>
                <div class="widget-two__content">
                    <h3><?php echo e($widget['refunded_order']); ?></h3>
                    <p><?php echo app('translator')->get('Refund Order'); ?></p>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->

        <div class="col-xxl-4 col-sm-6">
            <div class="widget-two box--shadow2 b-radius--5 bg--white">
                <a class="item-link" href="<?php echo e(route('user.order.cancelled')); ?>"></a>
                <i class="las la-times-circle overlay-icon text--danger"></i>
                <div class="widget-two__icon b-radius--5 bg--danger">
                    <i class="las la-times-circle"></i>
                </div>
                <div class="widget-two__content">
                    <h3><?php echo e($widget['cancelled_order']); ?></h3>
                    <p><?php echo app('translator')->get('Cancelled Order'); ?></p>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->

        <div class="col-xxl-4 col-sm-6">
            <div class="widget-two box--shadow2 b-radius--5 bg--white">
                <a class="item-link" href="<?php echo e(route('user.order.history')); ?>"></a>
                <i class="las la-shopping-cart overlay-icon text-primary"></i>
                <div class="widget-two__icon b-radius--5 bg-primary">
                    <i class="las la-shopping-cart"></i>
                </div>
                <div class="widget-two__content">
                    <h3><?php echo e($widget['total_order']); ?></h3>
                    <p><?php echo app('translator')->get('Total Order'); ?></p>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
    </div><!-- row end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/user/dashboard.blade.php ENDPATH**/ ?>