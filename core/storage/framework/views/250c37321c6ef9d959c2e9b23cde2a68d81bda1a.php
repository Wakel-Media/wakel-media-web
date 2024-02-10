<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--lg table-responsive">
                        <table class="table table--light tabstyle--two">
                            <thead>
                                <tr>
                                    <th><?php echo app('translator')->get('Name'); ?></th>
                                    <th><?php echo app('translator')->get('Category'); ?></th>
                                    <th><?php echo app('translator')->get('Price Per 1k'); ?></th>
                                    <th><?php echo app('translator')->get('Min'); ?></th>
                                    <th><?php echo app('translator')->get('Max'); ?></th>
                                    <th><?php echo app('translator')->get('API Service ID'); ?></th>
                                    <th><?php echo app('translator')->get('Status'); ?></th>
                                    <th><?php echo app('translator')->get('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="break_line"><?php echo e(__(@$service->name)); ?>

                                            <?php if(@$service->provider->short_name): ?>
                                                <span class="badge badge--primary"><?php echo e(__(@$service->provider->short_name)); ?>

                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="break_line"><?php echo e(__(@$service->category->name ?? @$service->category_name)); ?></td>
                                        <td>
                                            <?php echo e($general->cur_sym . showAmount(@$service->price_per_k ?? @$service->price)); ?></td>
                                        <td><?php echo e(@$service->min); ?></td>
                                        <td><?php echo e(@$service->max); ?></td>
                                        <td><?php echo e(@$service->api_service_id); ?></td>
                                        <td> <?php echo $service->statusBadge; ?> </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.service.edit', $service->id)); ?>"
                                                class="btn btn-sm btn-outline--primary">
                                                <i class="la la-pen"></i> <?php echo app('translator')->get('Edit'); ?>
                                            </a>
                                            <?php if($service->status == Status::DISABLE): ?>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline--success confirmationBtn"
                                                    data-action="<?php echo e(route('admin.service.status', $service->id)); ?>"
                                                    data-question="<?php echo app('translator')->get('Are you sure to enable this service?'); ?>">
                                                    <i class="la la-eye"></i> <?php echo app('translator')->get('Enable'); ?>
                                                </button>
                                            <?php else: ?>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-action="<?php echo e(route('admin.service.status', $service->id)); ?>"
                                                    data-question="<?php echo app('translator')->get('Are you sure to disable this service?'); ?>">
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
                <?php if($services->hasPages()): ?>
                    <div class="card-footer py-4">
                        <?php echo e(paginateLinks($services)); ?>

                    </div>
                <?php endif; ?>

            </div><!-- card end -->
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search-form','data' => ['placeholder' => 'Search here ...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Search here ...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <a href="<?php echo e(route('admin.service.add')); ?>" class="btn btn-outline--primary h-45">
        <i class="las la-plus"></i><?php echo app('translator')->get('Add New'); ?>
    </a>
    <button class="btn h-45 btn-outline--info" id="actionButton" data-bs-toggle="dropdown">
        <i class="las la-ellipsis-v"></i>
        <?php echo app('translator')->get('API Services'); ?>
    </button>
    <div class="dropdown-menu p-0">
        <?php $__currentLoopData = $apiLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apiList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('admin.service.api', $apiList->id)); ?>" class="dropdown-item">
                <i class="las la-cloud-download-alt"></i>
                <?php echo e(__($apiList->name)); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/admin/service/index.blade.php ENDPATH**/ ?>