<?php
    $blogContent = getContent('blog.content', true);
    $blogElements = getContent('blog.element', false, 3);
?>
<!-- news-section start -->
<section class="news-section ptb-80" id="blog">
    <div class="container">
        <figure class="figure highlight-background highlight-background--lean-left">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1439px" height="480px">
                <defs>
                    <linearGradient id="PSgrad_4" x1="42.262%" x2="0%" y1="90.631%" y2="0%">
                        <stop offset="28%" stop-color="rgb(245,246,252)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(255,255,255)" stop-opacity="1" />
                    </linearGradient>

                </defs>
                <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M863.247,-271.203 L-345.788,-427.818 L760.770,642.200 L1969.805,798.815 L863.247,-271.203 Z" />
                <path fill="url(#PSgrad_4)" d="M863.247,-271.203 L-345.788,-427.818 L760.770,642.200 L1969.805,798.815 L863.247,-271.203 Z" />
            </svg>
        </figure>
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="sub-title"><?php echo e(__(@$blogContent->data_values->heading)); ?></span>
                    <h2 class="section-title"><?php echo e(__(@$blogContent->data_values->sub_heading)); ?></h2>
                    <span class="title-border"></span>
                </div>
            </div>
        </div>
        <div class="news-area">
            <div class="row justify-content-center ml-b-30">

                <?php $__empty_1 = true; $__currentLoopData = $blogElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mrb-30">
                        <div class="news-item">
                            <div class="news-thumb">
                                <img src="<?php echo e(getImage('assets/images/frontend/blog/thumb_' . @$item->data_values->image, '480x280')); ?>" alt="<?php echo app('translator')->get('news'); ?>">
                            </div>
                            <div class="news-content">
                                <h3 class="title"><a
                                        href="<?php echo e(route('blog.details', [$item->id, slug($item->data_values->title)])); ?>"><?php echo e(__(@$item->data_values->title)); ?></a>
                                </h3>
                                <p><?php echo e(__(@$item->data_values->short_description)); ?></p>
                                <div class="news-btn">
                                    <a class="custom-btn" href="<?php echo e(route('blog.details', [$item->id, slug($item->data_values->title)])); ?>"><?php echo app('translator')->get('READ MORE'); ?> <i class="las la-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mrb-30">
                        <?php echo e(__($emptyMessage)); ?>

                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- news-section end -->
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/sections/blog.blade.php ENDPATH**/ ?>