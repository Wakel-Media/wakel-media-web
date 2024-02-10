<?php $__env->startSection('panel'); ?>
    <div class="row gy-4">
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-lg-12">
                <div class="d-flex flex-wrap justify-content-between mb-3 gap-2">
                    <h3><?php echo e(__($category->name)); ?></h3>

                    <a href="<?php echo e(route('user.service.category', $category->id)); ?>" class="btn btn-sm btn-outline--primary"> <i
                            class=" las la-list-ul"></i>
                        <?php echo app('translator')->get('View All'); ?></a>
                </div>
                <div class="card b-radius--10">
                    <div class="card-body p-0">
                        <div class="table-responsive--lg table-responsive">
                            <table class="table table--light tabstyle--two">
                                <thead>
                                    <tr>
                                        <th><?php echo app('translator')->get('Service ID'); ?></th>
                                        <th><?php echo app('translator')->get('Service'); ?></th>
                                        <th><?php echo app('translator')->get('Price Per 1k'); ?></th>
                                        <th><?php echo app('translator')->get('Min'); ?></th>
                                        <th><?php echo app('translator')->get('Max'); ?></th>
                                        <th><?php echo app('translator')->get('Make Order'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        $services = $category
                                            ->services()
                                            ->limit(10)
                                            ->get();
                                    ?>
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($service->id); ?></td>
                                            <td class="break_line"><?php echo e(__($service->name)); ?>

                                            </td>
                                            <td>
                                                <?php echo e($general->cur_sym . showAmount($service->price_per_k)); ?></td>
                                            <td><?php echo e($service->min); ?></td>
                                            <td><?php echo e($service->max); ?></td>

                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline--info detailsBtn"
                                                    data-details="<?php echo e($service->details); ?>" <?php if(!$service->details): echo 'disabled'; endif; ?>> <i
                                                        class="la la-desktop"></i> <?php echo app('translator')->get('Details'); ?>
                                                </button>

                                                <button type="button" class=" btn btn-sm btn-outline--primary orderBtn"
                                                    data-url="<?php echo e(route('user.order.create', $service->id)); ?>"
                                                    data-api_provider_id="<?php echo e($service->api_provider_id); ?>"
                                                    data-price_per_k="<?php echo e(getAmount($service->price_per_k)); ?>"
                                                    data-min="<?php echo e($service->min); ?>" data-max="<?php echo e($service->max); ?>">
                                                    <i class="las la-cart-plus"></i> <?php echo app('translator')->get('Order'); ?>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table><!-- table end -->
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            <?php echo e(__($emptyMessage)); ?>

                        </h4>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    
    <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> <?php echo app('translator')->get('Details'); ?></h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="details">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark btn-sm" data-bs-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('Place a new order'); ?></h4>
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form method="post" class="resetForm">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="api_provider_id">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Link'); ?></label>
                            <input type="url" class="form-control" name="link" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Quantity'); ?></label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-text"><?php echo app('translator')->get('Min'); ?></div>
                                    <input type="number" name="min" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <div class="input-group-text"><?php echo app('translator')->get('Max'); ?></div>
                                    <input type="number" name="max" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="input-group">
                                <div class="input-group-text"><?php echo app('translator')->get('Price'); ?></div>
                                <input type="text" class="form-control total_price " name="price" readonly>
                                <div class="input-group-text"><?php echo app('translator')->get('Per 1K'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary h-45 w-100"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function($) {
            "use strict";

            $('.detailsBtn').on('click', function() {
                var modal = $('#detailsModal');
                var details = $(this).data('details');
                modal.find('#details').html(details);
                modal.modal('show');
            });

            $('.orderBtn').on('click', function() {
                var modal = $('#orderModal');
                $('.resetForm').trigger('reset');
                var url = $(this).data('url');
                var pricePerK = parseFloat($(this).data('price_per_k'));
                var min = $(this).data('min');
                var max = $(this).data('max');
                let apiProviderId = $(this).data('api_provider_id');
                //Calculate total price
                $(document).on("keyup", "#quantity", function() {
                    var quantity = parseInt($('#quantity').val());
                    var totalPrice = parseFloat((pricePerK / 1000) * quantity);
                    modal.find('input[name=price]').val("<?php echo e($general->cur_sym); ?>" + totalPrice
                        .toFixed(2));
                });

                modal.find('form').attr('action', url);
                modal.find('input[name=quantity]').attr('min', min).attr('max', max);
                modal.find('input[name=min]').val(min);
                modal.find('input[name=max]').val(max);
                modal.find('input[name=api_provider_id]').val(apiProviderId)
                modal.modal('show');
            });

            //Scroll to paginate position
            var pathName = document.location.pathname;
            window.onbeforeunload = function() {
                var scrollPosition = $(document).scrollTop();
                sessionStorage.setItem("scrollPosition_" + pathName, scrollPosition.toString());
            }
            if (sessionStorage["scrollPosition_" + pathName]) {
                $(document).scrollTop(sessionStorage.getItem("scrollPosition_" + pathName));
            }
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/user/services/services.blade.php ENDPATH**/ ?>