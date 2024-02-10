<?php
    $testimonialContent = getContent('testimonial.content', true);
    $testimonialElements = getContent('testimonial.element', null, false, true);
?>
<!-- client-section-two start -->

<div class="client-section ptb-80 bg_img" data-background="<?php echo e(getImage($activeTemplateTrue . 'images/client-bg.png')); ?>">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-header">
                    <h2 class="section-title"><?php echo e(__(@$testimonialContent->data_values->heading)); ?></h2>
                    <span class="title-border"></span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-20">
            <div class="col-lg-12">
                <div class="client-slider">
                    <div class="swiper-wrapper">

                        <?php $__empty_1 = true; $__currentLoopData = $testimonialElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="swiper-slide">
                                <div class="client-item">
                                    <div class="client-content">
                                        <div class="client-details">
                                            <div class="client-ratings">
                                                <?php
                                                    $ratting = $item->data_values->Ratting_out_of_five;
                                                ?>
                                                <?php for($i = 1; $i <= $ratting; $i++): ?>
                                                    <i class="fas fa-star"></i>
                                                <?php endfor; ?>
                                            </div>
                                            <p><?php echo e(__(@$item->data_values->review)); ?></p>
                                        </div>
                                        <div class="client-bottom">
                                            <div class="client-thumb">
                                                <img src="<?php echo e(getImage('assets/images/frontend/testimonial/' . @$item->data_values->image, '70x70')); ?>"
                                                    alt="<?php echo app('translator')->get('client'); ?>">
                                            </div>
                                            <div class="client-title">
                                                <h3 class="title"><?php echo e(__(@$item->data_values->name)); ?></h3>
                                                <span
                                                    class="sub-title"><?php echo e(__(@$item->data_values->designation)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="swiper-slide">
                                <?php echo e(__($emptyMessage)); ?>

                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- client-section-two end -->
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/sections/testimonial.blade.php ENDPATH**/ ?>