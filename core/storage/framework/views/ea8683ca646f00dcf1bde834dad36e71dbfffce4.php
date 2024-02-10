<!-- header-section start -->
<header class="header-section">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-lg p-0">

                        <a class="site-logo site-title" href="<?php echo e(route('home')); ?>"><img
                                src="<?php echo e(getImage(getFilePath('logoIcon') . '/logo.png')); ?>" alt="<?php echo app('translator')->get('site logo'); ?>"></a>
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ms-auto">
                                <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('pages', [$data->slug])); ?>"><?php echo e(__($data->name)); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('blog')); ?>"> <?php echo app('translator')->get('Blog'); ?></a> </li>

                                <li><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>

                                <li class="menu_has_children">
                                    <a href="#0"><?php echo app('translator')->get('Account'); ?></a>
                                    <ul class="sub-menu">
                                        <?php if(auth()->guard()->check()): ?>
                                            <li><a href="<?php echo e(route('user.home')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a></li>
                                            <li><a href="<?php echo e(route('user.logout')); ?>"><?php echo app('translator')->get('Logout'); ?></a></li>
                                        <?php else: ?>
                                            <li><a href="<?php echo e(route('user.login')); ?>"><?php echo app('translator')->get('Login'); ?></a></li>
                                            <li><a href="<?php echo e(route('user.register')); ?>"><?php echo app('translator')->get('Register'); ?></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <?php if($general->ln): ?>
                                    <li class="ps-lg-3 me-auto">
                                        <select class="langSel nselect">
                                            <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->code); ?>"
                                                    <?php if(session('lang') == $item->code): ?> selected <?php endif; ?> class="mr-0">
                                                    <?php echo e(__($item->name)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/partials/header.blade.php ENDPATH**/ ?>