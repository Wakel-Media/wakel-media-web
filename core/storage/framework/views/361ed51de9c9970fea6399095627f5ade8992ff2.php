<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light tabstyle--two custom-data-table">
                            <thead>
                                <tr>
                                    <th><?php echo app('translator')->get('Api Name'); ?></th>
                                    <th><?php echo app('translator')->get('Short Name'); ?></th>
                                    <th><?php echo app('translator')->get('Api Url'); ?></th>
                                    <th><?php echo app('translator')->get('Status'); ?></th>
                                    <th><?php echo app('translator')->get('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $apiProviders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apiProvider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e(__($apiProvider->name)); ?></td>
                                        <td><?php echo e(__($apiProvider->short_name)); ?></td>
                                        <td><?php echo e($apiProvider->api_url); ?></td>
                                        <td> <?php  echo $apiProvider->statusBadge; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline--primary updateApiSetting"
                                                data-id="<?php echo e($apiProvider->id); ?>" data-api_key="<?php echo e($apiProvider->api_key); ?>"
                                                data-short_name="<?php echo e($apiProvider->short_name); ?>"
                                                data-price="<?php echo e($apiProvider->price); ?>" data-name="<?php echo e($apiProvider->name); ?>"
                                                data-api_url="<?php echo e($apiProvider->api_url); ?>"><i class="las la-pen"></i>
                                                <?php echo app('translator')->get('Edit'); ?></button>

                                            <?php if($apiProvider->status == Status::DISABLE): ?>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline--success confirmationBtn"
                                                    data-action="<?php echo e(route('admin.api.provider.status', $apiProvider->id)); ?>"
                                                    data-question="<?php echo app('translator')->get('Are you sure to enable this API?'); ?>">
                                                    <i class="la la-eye"></i> <?php echo app('translator')->get('Enable'); ?>
                                                </button>
                                            <?php else: ?>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-action="<?php echo e(route('admin.api.provider.status', $apiProvider->id)); ?>"
                                                    data-question="<?php echo app('translator')->get('Are you sure to disable this API?'); ?>">
                                                    <i class="la la-eye-slash"></i> <?php echo app('translator')->get('Disable'); ?>
                                                </button>
                                            <?php endif; ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
                <?php if($apiProviders->hasPages()): ?>
                    <div class="card-footer py-4">
                        <?php echo e(paginateLinks($apiProviders)); ?>

                    </div>
                <?php endif; ?>
            </div><!-- card end -->
        </div>
    </div>
    
    <div class="modal fade" id="addApiModal" tabindex="-1" role="dialog" a aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalTitle"></h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="las la-times"></i></button>
                </div>
                <form class="form-horizontal resetForm" method="post" action="<?php echo e(route('admin.api.provider.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Api Name'); ?></label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Short Name'); ?></label>
                            <input type="text" class="form-control" name="short_name" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Api Url'); ?></label>
                            <input type="url" class="form-control" name="api_url" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Api Key'); ?></label>
                            <input type="text" class="form-control" name="api_key" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary h-45 w-100"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b = $component; } ?>
<?php $component = App\View\Components\ConfirmationModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('confirmation-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ConfirmationModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b)): ?>
<?php $component = $__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b; ?>
<?php unset($__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('breadcrumb-plugins'); ?>
    <div class="d-inline">
        <div class="input-group justify-content-end">
            <input type="text" name="search_table" class="form-control bg--white" placeholder="<?php echo app('translator')->get('Search'); ?>...">
            <button class="btn btn--primary input-group-text"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <button class="btn btn-outline--primary h-45 btn-sm addApi"><i class="las la-plus"></i> <?php echo app('translator')->get('Add New'); ?></button>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function($) {
            "use strict";
            $('.updateApiSetting').on('click', function() {

                let modal      = $('#addApiModal');
                let title      = "<?php echo app('translator')->get('Edit Api'); ?>";
                let id         = $(this).data('id');
                let api_key    = $(this).data('api_key');
                let short_name = $(this).data('short_name')
                let price      = $(this).data('price');
                let api_url    = $(this).data('api_url');
                let name       = $(this).data('name');

                modal.find('input[name=api_key]').val(api_key);
                modal.find('input[name=id]').val(id);
                modal.find('input[name=api_url]').val(api_url);
                modal.find('input[name=name]').val(name);
                modal.find('input[name=price]').val(price);
                modal.find('input[name=short_name]').val(short_name);
                modal.find('.modal-title').text(title)
                modal.modal('show');

            });

            $('.addApi').on('click', function() {
                let modal = $('#addApiModal');
                let title = "<?php echo app('translator')->get('Add New Api'); ?>";

                $('.resetForm').trigger('reset');
                modal.find('input[name=id]').val('');
                modal.modal('show');
                modal.find('.modal-title').text(title)
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/admin/api_provider/index.blade.php ENDPATH**/ ?>