<?php
    $counterElements = getContent('counter.element', null, false, true);
?>
<!-- counter-section start -->
<section class="counter-section ptb-80">
    <div class="container">
        <figure class="figure highlight-background highlight-background--lean-left">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1439px"
                height="480px">
                <defs>
                    <linearGradient id="PSgrad_4" x1="42.262%" x2="0%" y1="90.631%" y2="0%">
                        <stop offset="28%" stop-color="rgb(245,246,252)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(255,255,255)" stop-opacity="1" />
                    </linearGradient>

                </defs>
                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                    d="M863.247,-271.203 L-345.788,-427.818 L760.770,642.200 L1969.805,798.815 L863.247,-271.203 Z" />
                <path fill="url(#PSgrad_4)"
                    d="M863.247,-271.203 L-345.788,-427.818 L760.770,642.200 L1969.805,798.815 L863.247,-271.203 Z" />
            </svg>
        </figure>
        <div class="row justify-content-center ml-b-10">

            <?php $__empty_1 = true; $__currentLoopData = $counterElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-3 col-md-6 col-sm-6 mrb-10">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <?php echo @$item->data_values->icon ?>
                        </div>
                        <div class="counter-content">
                            <div class="odo-area">
                                <h3 class="odo-title odometer" data-odometer-final="<?php echo e(@$item->data_values->number); ?>">
                                </h3>
                            </div>
                            <p><?php echo e(__(@$item->data_values->title)); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-lg-3 col-md-6 col-sm-6 mrb-10">
                    <?php echo e(__($emptyMessage)); ?>

                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- counter-section end -->
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/sections/counter.blade.php ENDPATH**/ ?>