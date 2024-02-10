<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form method="post" action="<?php echo e(route('admin.service.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo e($service->id); ?>">
                        <input type="hidden" name="api_provider_id" value="<?php echo e($service->api_provider_id); ?>">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label><?php echo app('translator')->get('Category'); ?></label>
                                <select class="form-control" name="category" id="category" required>
                                    <option selected><?php echo app('translator')->get('Select One'); ?>...</option>
                                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($category->id); ?>" <?php if($service->category_id == $category->id): echo 'selected'; endif; ?>>
                                            <?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label><?php echo app('translator')->get('Name'); ?> </label>
                                <input type="text" class="form-control " name="name" value="<?php echo e($service->name); ?>"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label><?php echo app('translator')->get('Price Per 1k'); ?> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="price_per_k"
                                        value="<?php echo e(getAmount(@$service->price_per_k)); ?>" required>
                                    <div class="input-group-text"><?php echo e($general->cur_text); ?></div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label><?php echo app('translator')->get('Min'); ?></label>
                                    <input type="number" name="min" class="form-control" value="<?php echo e($service->min); ?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label><?php echo app('translator')->get('Max'); ?></label>
                                    <input type="number" name="max" class="form-control" value="<?php echo e($service->max); ?>"
                                        required>
                                </div>
                            </div>
                        </div>
                        <?php if($service->api_service_id): ?>
                            <div class="form-group">
                                <label><?php echo app('translator')->get('Service Id (If order process through API)'); ?></label>
                                <input type="text" name="api_service_id" value="<?php echo e($service->api_service_id); ?>" disabled
                                    class="form-control">
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Details'); ?></label>
                            <textarea class="form-control" rows="5" name="details"><?php echo e(@$service->details); ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary h-45 w-100"><?php echo app('translator')->get('Update'); ?></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('breadcrumb-plugins'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.back','data' => ['route' => ''.e(route('admin.service.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('admin.service.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/admin/service/edit.blade.php ENDPATH**/ ?>