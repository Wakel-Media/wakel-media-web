<!-- navbar-wrapper start -->
<nav class="navbar-wrapper bg--dark">
    <div class="navbar__left">
        <button class="res-sidebar-open-btn me-3" type="button"><i class="las la-bars"></i></button>
        <form class="navbar-search">
            <input class="navbar-search-field" id="searchInput" name="#0" type="search" autocomplete="off" placeholder="<?php echo app('translator')->get('Search here...'); ?>">
            <i class="las la-search"></i>
            <ul class="search-list"></ul>
        </form>
    </div>
    <div class="navbar__right">
        <ul class="navbar__action-list">
            <li class="dropdown">
                <button class="" data-bs-toggle="dropdown" data-display="static" type="button" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img
                                src="<?php echo e(getImage(getFilePath('userProfile') . '/' . auth()->user()->image, getFileSize('userProfile'))); ?>" alt="<?php echo app('translator')->get('image'); ?>"></span>
                        <span class="navbar-user__info">
                            <span class="navbar-user__name"><?php echo e(auth()->user()->username); ?></span>
                        </span>
                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm box--shadow1 dropdown-menu-right border-0 p-0">
                    <a class="dropdown-menu__item d-flex align-items-center px-3 py-2" href="<?php echo e(route('user.profile.setting')); ?>">
                        <i class="dropdown-menu__icon las la-user-circle"></i>
                        <span class="dropdown-menu__caption"><?php echo app('translator')->get('Profile'); ?></span>
                    </a>

                    <a class="dropdown-menu__item d-flex align-items-center px-3 py-2" href="<?php echo e(route('user.change.password')); ?>">
                        <i class="dropdown-menu__icon las la-key"></i>
                        <span class="dropdown-menu__caption"><?php echo app('translator')->get('Password'); ?></span>
                    </a>

                    <a class="dropdown-menu__item d-flex align-items-center px-3 py-2" href="<?php echo e(route('user.logout')); ?>">
                        <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                        <span class="dropdown-menu__caption"><?php echo app('translator')->get('Logout'); ?></span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- navbar-wrapper end -->
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/partials/topnav.blade.php ENDPATH**/ ?>