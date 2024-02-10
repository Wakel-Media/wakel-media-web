<div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a class="sidebar__main-logo" href="<?php echo e(route('home')); ?>"><img
                    src="<?php echo e(getImage(getFilePath('logoIcon') . '/logo.png')); ?>" alt="<?php echo app('translator')->get('image'); ?>"></a>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item <?php echo e(menuActive('user.home')); ?>">
                    <a class="nav-link" href="<?php echo e(route('user.home')); ?>">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Dashboard'); ?></span>
                    </a>
                </li>
                <li class="sidebar-menu-item <?php echo e(menuActive('user.service*')); ?>">
                    <a class="nav-link" href="<?php echo e(route('user.services')); ?>">
                        <i class="menu-icon las la-list-ol"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Services'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a class="<?php echo e(menuActive('user.order*', 3)); ?>" href="javascript:void(0)">
                        <i class="menu-icon las la-file-invoice"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Orders'); ?></span>
                        <?php if($pendingOrders > 0): ?>
                            <span class="menu-badge pill bg--danger ms-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('user.order*', 2)); ?>">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('user.order.mass')); ?>">
                                <a class="nav-link" href="<?php echo e(route('user.order.mass')); ?>">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Mass Orders'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('user.order.history')); ?>">
                                <a class="nav-link" href="<?php echo e(route('user.order.history')); ?>">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Orders'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('user.order.pending')); ?>">
                                <a class="nav-link" href="<?php echo e(route('user.order.pending')); ?>">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Orders'); ?></span>
                                    <?php if($pendingOrders): ?>
                                        <span class="menu-badge pill bg--danger ms-auto"><?php echo e($pendingOrders); ?></span>
                                    <?php endif; ?>

                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('user.order.processing')); ?>">
                                <a class="nav-link" href="<?php echo e(route('user.order.processing')); ?>">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Processing Orders'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.orders.completed')); ?>">
                                <a class="nav-link" href="<?php echo e(route('user.order.completed')); ?>">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Completed Orders'); ?></span>

                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('user.order.cancelled')); ?>">
                                <a class="nav-link" href="<?php echo e(route('user.order.cancelled')); ?>">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Cancelled Orders'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('user.order.refunded')); ?>">
                                <a class="nav-link" href="<?php echo e(route('user.order.refunded')); ?>">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Refunded Orders'); ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="sidebar-menu-item <?php echo e(menuActive('user.deposit*')); ?>">
                    <a class="nav-link" href="<?php echo e(route('user.deposit.history')); ?>">
                        <i class="menu-icon las la-university"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Deposit'); ?></span>
                    </a>
                </li>
                <li class="sidebar-menu-item <?php echo e(menuActive('user.transactions')); ?>">
                    <a class="nav-link" href="<?php echo e(route('user.transactions')); ?>">
                        <i class="menu-icon la la-exchange-alt"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Transactions'); ?></span>
                    </a>
                </li>
                <li class="sidebar-menu-item <?php echo e(menuActive('user.api.index')); ?>">
                    <a class="nav-link" href="<?php echo e(route('user.api.index')); ?>">
                        <i class="menu-icon las la-cloud-download-alt"></i>
                        <span class="menu-title"><?php echo app('translator')->get('API'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('ticket*')); ?>">
                    <a class="nav-link" href="<?php echo e(route('ticket.index')); ?>">
                        <i class="menu-icon la la-ticket"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Support Ticket'); ?></span>
                    </a>
                </li>
                <li class="sidebar-menu-item <?php echo e(menuActive('user.twofactor')); ?>">
                    <a class="nav-link" href="<?php echo e(route('user.twofactor')); ?>">
                        <i class="menu-icon la la-lock"></i>
                        <span class="menu-title"><?php echo app('translator')->get('2FA Security'); ?></span>
                    </a>
                </li>
            </ul>
            <div class="text-uppercase mb-3 text-center">
                <span class="text--primary"><?php echo e(__(systemDetails()['name'])); ?></span>
                <span class="text--success"><?php echo app('translator')->get('V'); ?><?php echo e(systemDetails()['version']); ?> </span>
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->

<?php $__env->startPush('script'); ?>
    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/partials/sidenav.blade.php ENDPATH**/ ?>