<?php
    $actionContent = getContent('action.content', true);
?>
<!-- action-section start -->
<section class="action-section ptb-80 bg_img"
    data-background="<?php echo e(getImage($activeTemplateTrue . 'images/action-bg.png', '1920x510')); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="action-content">
                    <span class="sub-title"><?php echo e(__(@$actionContent->data_values->heading)); ?></span>
                    <h2 class="title"><?php echo e(__(@$actionContent->data_values->sub_heading)); ?></h2>
                    <div class="action-btn">
                        <a href="<?php echo e(@$actionContent->data_values->button_url); ?>"
                            class="btn--base-active"><?php echo e(__(@$actionContent->data_values->button)); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- action-section end -->
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/sections/action.blade.php ENDPATH**/ ?>