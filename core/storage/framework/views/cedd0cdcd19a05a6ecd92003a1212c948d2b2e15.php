<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--lg table-responsive">
                        <table class="table table--light tabstyle--two custom-data-table">
                            <thead>
                                <tr>
                                    <th>
                                        <label for="selectAll"><i class="th-check-all fa fa-stop"></i></label>
                                    </th>
                                    <th><?php echo app('translator')->get('ID'); ?></th>
                                    <th><?php echo app('translator')->get('Name'); ?></th>
                                    <th><?php echo app('translator')->get('Category'); ?></th>
                                    <th><?php echo app('translator')->get('Rate'); ?></th>
                                    <th><?php echo app('translator')->get('Min'); ?></th>
                                    <th><?php echo app('translator')->get('Max'); ?></th>
                                    <th><?php echo app('translator')->get('Action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="childCheckBox" data-name="<?php echo e(@$item->name); ?>"
                                                data-api_provider_id=<?php echo e(@$item->api_id); ?>

                                                data-category="<?php echo e(@$item->category); ?>"
                                                data-price_per_k="<?php echo e(getAmount(@$item->rate)); ?>"
                                                data-min="<?php echo e(@$item->min); ?>" data-max="<?php echo e(@$item->max); ?>"
                                                data-api_service_id="<?php echo e(@$item->service); ?>" name="checkbox_id">
                                        </td>
                                        <td><strong><?php echo e(@$item->service); ?></strong></td>
                                        <td class="break_line"><?php echo e(__(@$item->name)); ?>

                                        </td>
                                        <td class="break_line"><?php echo e(__(@$item->category)); ?></td>
                                        <td>
                                            <?php echo e($general->cur_sym . showAmount(@$item->rate)); ?></td>
                                        <td><?php echo e(@$item->min); ?></td>
                                        <td><?php echo e(@$item->max); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline--primary addBtn"
                                                data-original-title="<?php echo app('translator')->get('Action'); ?>" data-toggle="tooltip"
                                                data-name="<?php echo e(@$item->name); ?>" data-api_provider_id=<?php echo e(@$item->api_id); ?>

                                                data-category="<?php echo e(@$item->category); ?>"
                                                data-price_per_k="<?php echo e(getAmount(@$item->rate)); ?>"
                                                data-min="<?php echo e(@$item->min); ?>" data-max="<?php echo e(@$item->max); ?>"
                                                data-api_service_id="<?php echo e(@$item->service); ?>">
                                                <i class="las la-plus"></i>
                                                <?php echo app('translator')->get('Add Service'); ?>
                                            </button>
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
                    <div class="card-footer">
                        <?php echo e(paginateLinks($services)); ?>

                    </div>
                <?php endif; ?>
            </div><!-- card end -->
        </div>
    </div>

    <div class="modal fade" id="confirmServiceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Enter how many Times You Incress Price'); ?></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                </div>
                <div class="modal-body">
                    <div class="col-auto">
                        <input type="number" class="form-control inputNumer" placeholder="<?php echo app('translator')->get('Enter positive number'); ?>"
                            min="1" value="1">
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn--primary w-100 h-45" id="allService"><?php echo app('translator')->get('Submit'); ?></button>
                </div>
            </div>
        </div>
    </div>


    
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><?php echo app('translator')->get('Add New'); ?></h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>

                    </button>
                </div>
                <form class="form-horizontal reset" method="post" action="<?php echo e(route('admin.service.api.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="api_provider_id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Category'); ?></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="category" required readonly>
                            </div>
                        </div>

                        <div class="form-row form-group">
                            <label><?php echo app('translator')->get('Name'); ?></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="code" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Price Per 1k'); ?></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="price_per_k" required>
                                <div class="input-group-text"><?php echo e($general->cur_text); ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label><?php echo app('translator')->get('Min'); ?></label>
                                <input type="text" name="min" class="form-control" required readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label><?php echo app('translator')->get('Max'); ?></label>
                                <input type="text" name="max" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Details'); ?></label>
                            <textarea class="form-control" name="details" required></textarea>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Service Id (If order process through API)'); ?></label>
                            <input type="text" name="api_service_id" class="form-control" readonly required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <div class="select-all">
        <div class="select-all__content d-flex align-items-center flex-wrap">
            <label for="selectAll" class="select-all__text mb-0 me-2"><?php echo app('translator')->get('Select All'); ?></label>
            <input type="checkbox" id="selectAll" class="checkAll mb-1">
        </div>
    </div>
    <div class="input-group w-auto search-form">
        <input type="text" name="search_table" class="form-control bg--white" placeholder="<?php echo app('translator')->get('Search'); ?>...">
        <button class="btn btn--primary input-group-text"><i class="fa fa-search"></i></button>
    </div>
    <button class="btn btn-outline--info btn-sm d-none h-45 addService" data-bs-toggle="modal"
        data-bs-target="#confirmServiceModal">
        <i class="las la-plus"></i>
        <?php echo app('translator')->get('Add Selected Service'); ?>
    </button>
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



<?php $__env->startPush('script'); ?>
    <script>
        (function($) {
            "use strict";


            $(".childCheckBox").on('change', function(e) {
                let totalLength = $(".childCheckBox").length;
                let checkedLength = $(".childCheckBox:checked").length;
                if (totalLength == checkedLength) {
                    $('.checkAll').prop('checked', true);
                    $('.th-check-all').addClass('fa-check-square').removeClass('fa-stop');
                } else {
                    $('.checkAll').prop('checked', false);
                    $('.th-check-all').addClass('fa-stop').removeClass('fa-check-square');
                }
                if (checkedLength) {
                    $('.addService').removeClass('d-none')
                } else {
                    $('.addService').addClass('d-none')
                }
            });

            $('.checkAll').on('change', function() {
                if ($('.checkAll:checked').length) {
                    $('.childCheckBox').prop('checked', true);
                    $('.th-check-all').addClass('fa-check-square').removeClass('fa-stop');
                } else {
                    $('.childCheckBox').prop('checked', false);
                    $('.th-check-all').addClass('fa-stop').removeClass('fa-check-square');
                }
                $(".childCheckBox").change();
            });


            $('#allService').on('click', function() {
                let services = [];
                let inputNumber = parseInt($('.inputNumer').val());
                var checkBox = $('input:checkbox[name=checkbox_id]:checked');
                checkBox.each(function() {
                    let api_service_id = $(this).data('api_service_id')
                    let name = $(this).data('name');
                    let price_per_k = parseFloat($(this).data('price_per_k'));
                    let min = $(this).data('min');
                    let max = $(this).data('max');
                    let category = $(this).data('category');
                    let api_provider_id = $(this).data('api_provider_id');
                    services.push({
                        "api_service_id": api_service_id,
                        "name": name,
                        "price_per_k": price_per_k,
                        "min": min,
                        "max": max,
                        "category": category,
                        "incressTimes": inputNumber,
                        "api_provider_id": api_provider_id,
                    });

                })
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "<?php echo e(route('admin.service.add')); ?>",
                    data: {
                        services: services
                    },
                    success: function(data) {
                        if (data.success) {
                            $('.childCheckBox').prop('checked', false);
                            $('.checkAll').prop('checked', false);
                            $('#confirmServiceModal').modal('hide');
                            notify('success', data.message);
                            window.location.href = "<?php echo e(route('admin.service.index')); ?>";
                        } else {
                            notify('error', `<?php echo app('translator')->get('Something wrong please try again'); ?>`);
                        }

                    }

                })

            })
            $(document).on('click', '.addBtn', function() {
                var modal = $('#addModal');
                $('.reset').trigger("reset");
                var name = $(this).data('name');
                var price_per_k = $(this).data('price_per_k');
                var min = $(this).data('min');
                var max = $(this).data('max');
                var category = $(this).data('category');
                var api_provider_id = $(this).data('api_provider_id');
                var api_service_id = $(this).data('api_service_id');
                modal.find('input[name=name]').val(name);
                modal.find('input[name=price_per_k]').val(price_per_k);
                modal.find('input[name=min]').val(min);
                modal.find('input[name=max]').val(max);
                modal.find('input[name=api_provider_id]').val(api_provider_id);
                modal.find('input[name=api_service_id]').val(api_service_id);
                modal.find('input[name=category]').val(category);
                modal.modal('show');
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/admin/service/api_services.blade.php ENDPATH**/ ?>