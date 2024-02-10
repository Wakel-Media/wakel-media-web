<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-12">
            <div class="row gy-4">
                <div class="col-xxl-3 col-sm-6">
                    <div class="widget-two style--two box--shadow2 b-radius--5 bg--19">
                        <div class="widget-two__icon b-radius--5 bg--primary">
                            <i class="las la-money-bill-wave-alt"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3 class="text-white"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($user->balance)); ?></h3>
                            <p class="text-white"><?php echo app('translator')->get('Balance'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.report.transaction')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div>
                <!-- dashboard-w1 end -->


                <div class="col-xxl-3 col-sm-6">
                    <div class="widget-two style--two box--shadow2 b-radius--5 bg--primary">
                        <div class="widget-two__icon b-radius--5 bg--primary">
                            <i class="las la-wallet"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3 class="text-white"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($totalDeposit)); ?></h3>
                            <p class="text-white"><?php echo app('translator')->get('Deposits'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.deposit.list')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div>
                <!-- dashboard-w1 end -->

                <div class="col-xxl-3 col-sm-6">
                    <div class="widget-two style--two box--shadow2 b-radius--5 bg--1">
                        <div class="widget-two__icon b-radius--5 bg--primary">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3 class="text-white"><?php echo e($general->cur_sym); ?><?php echo e(showAmount($totalSpent)); ?></h3>
                            <p class="text-white"><?php echo app('translator')->get('Total Spent'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.report.transaction')); ?>?search=<?php echo e($user->username); ?>&remark=order"
                            class="widget-two__btn"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div>
                <!-- dashboard-w1 end -->

                <div class="col-xxl-3 col-sm-6">
                    <div class="widget-two style--two box--shadow2 b-radius--5 bg--17">
                        <div class="widget-two__icon b-radius--5 bg--primary">
                            <i class="las la-exchange-alt"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3 class="text-white"><?php echo e($totalTransaction); ?></h3>
                            <p class="text-white"><?php echo app('translator')->get('Transactions'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.report.transaction')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div>
                <!-- dashboard-w1 end -->
            </div>
            <div class="row gy-4 mt-2">
                <div class="col-xxl-4 col-sm-6">
                    <div class="widget-two  box--shadow2 b-radius--5 bg--white">
                        <i class="las la-shopping-cart overlay-icon text--primary"></i>
                        <div class="widget-two__icon b-radius--5 bg--primary">
                            <i class="las la-shopping-cart"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3><?php echo e($widget['total_order']); ?></h3>
                            <p><?php echo app('translator')->get('Total Order'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.orders.index')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn border border--primary btn-outline--primary"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div><!-- dashboard-w1 end -->
                <div class="col-xxl-4 col-sm-6">
                    <div class="widget-two  box--shadow2 b-radius--5  bg--white">
                        <i class="las la-spinner overlay-icon text--warning"></i>
                        <div class="widget-two__icon b-radius--5 bg--warning">
                            <i class="las la-spinner"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3><?php echo e($widget['pending_order']); ?></h3>
                            <p><?php echo app('translator')->get('Pending Order'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.orders.pending')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn border border--warning btn-outline--warning"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div><!-- dashboard-w1 end -->
                <div class="col-xxl-4 col-sm-6">
                    <div class="widget-two  box--shadow2 b-radius--5 bg--white">
                        <i class="la la-refresh overlay-icon text--teal"></i>
                        <div class="widget-two__icon b-radius--5 bg--teal">
                            <i class="la la-refresh"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3><?php echo e($widget['processing_order']); ?></h3>
                            <p><?php echo app('translator')->get('Processing Order'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.orders.processing')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn border border--success btn-outline--success"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div><!-- dashboard-w1 end -->

            </div><!-- row end-->

            <div class="row gy-4 mt-2">
                <div class="col-xxl-4 col-sm-6">
                    <div class="widget-two  box--shadow2 b-radius--5 bg--white">
                        <i class="las la-check-circle overlay-icon text--green"></i>
                        <div class="widget-two__icon b-radius--5 bg--green">
                            <i class="las la-check-circle"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3><?php echo e($widget['completed_order']); ?></h3>
                            <p><?php echo app('translator')->get('Complete Order'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.orders.completed')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn border border--success btn-outline--success"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div><!-- dashboard-w1 end -->
                <div class="col-xxl-4 col-sm-6">
                    <div class="widget-two  box--shadow2 b-radius--5 bg--white">
                        <i class="las la-times-circle overlay-icon text--dnager"></i>
                        <div class="widget-two__icon b-radius--5 bg--danger">
                            <i class="las la-times-circle"></i>
                        </div>
                        <div class="widget-two__content">
                            <h3><?php echo e($widget['cancelled_order']); ?></h3>
                            <p><?php echo app('translator')->get('Cancelled Order'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.orders.cancelled')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn border border--danger btn-outline--danger"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div><!-- dashboard-w1 end -->
                <div class="col-xxl-4 col-sm-6">
                    <div class="widget-two  box--shadow2 b-radius--5 bg--white">
                        <i class="la la-fast-backward  overlay-icon text-secondary"></i>
                        <div class="widget-two__icon b-radius--5 bg--secondary">
                            <i class="la la-fast-backward "></i>
                        </div>
                        <div class="widget-two__content">
                            <h3><?php echo e($widget['refunded_order']); ?></h3>
                            <p><?php echo app('translator')->get('Refunded Order'); ?></p>
                        </div>
                        <a href="<?php echo e(route('admin.orders.refunded')); ?>?search=<?php echo e($user->username); ?>"
                            class="widget-two__btn border border--secondary btn-outline--secondary"><?php echo app('translator')->get('View All'); ?></a>
                    </div>
                </div><!-- dashboard-w1 end -->
            </div>



            <div class="d-flex flex-wrap gap-3 mt-4">
                <div class="flex-fill">
                    <button data-bs-toggle="modal" data-bs-target="#addSubModal"
                        class="btn btn--success btn--shadow w-100 btn-lg bal-btn" data-act="add">
                        <i class="las la-plus-circle"></i> <?php echo app('translator')->get('Balance'); ?>
                    </button>
                </div>

                <div class="flex-fill">
                    <button data-bs-toggle="modal" data-bs-target="#addSubModal"
                        class="btn btn--danger btn--shadow w-100 btn-lg bal-btn" data-act="sub">
                        <i class="las la-minus-circle"></i> <?php echo app('translator')->get('Balance'); ?>
                    </button>
                </div>

                <div class="flex-fill">
                    <a href="<?php echo e(route('admin.report.login.history')); ?>?search=<?php echo e($user->username); ?>"
                        class="btn btn--primary btn--shadow w-100 btn-lg">
                        <i class="las la-list-alt"></i><?php echo app('translator')->get('Logins'); ?>
                    </a>
                </div>

                <div class="flex-fill">
                    <a href="<?php echo e(route('admin.users.notification.log', $user->id)); ?>"
                        class="btn btn--secondary btn--shadow w-100 btn-lg">
                        <i class="las la-bell"></i><?php echo app('translator')->get('Notifications'); ?>
                    </a>
                </div>

                <div class="flex-fill">
                    <a href="<?php echo e(route('admin.users.login', $user->id)); ?>" target="_blank"
                        class="btn btn--primary btn--gradi btn--shadow w-100 btn-lg">
                        <i class="las la-sign-in-alt"></i><?php echo app('translator')->get('Login as User'); ?>
                    </a>
                </div>


                <div class="flex-fill">
                    <?php if($user->status == Status::USER_ACTIVE): ?>
                        <button type="button" class="btn btn--warning btn--gradi btn--shadow w-100 btn-lg userStatus"
                            data-bs-toggle="modal" data-bs-target="#userStatusModal">
                            <i class="las la-ban"></i><?php echo app('translator')->get('Ban User'); ?>
                        </button>
                    <?php else: ?>
                        <button type="button" class="btn btn--success btn--gradi btn--shadow w-100 btn-lg userStatus"
                            data-bs-toggle="modal" data-bs-target="#userStatusModal">
                            <i class="las la-undo"></i><?php echo app('translator')->get('Unban User'); ?>
                        </button>
                    <?php endif; ?>
                </div>
            </div>


            <div class="card mt-30">
                <div class="card-header">
                    <h5 class="card-title mb-0"><?php echo app('translator')->get('Information of'); ?> <?php echo e($user->fullname); ?></h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.users.update', [$user->id])); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label><?php echo app('translator')->get('First Name'); ?></label>
                                    <input class="form-control" type="text" name="firstname" required
                                        value="<?php echo e($user->firstname); ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label"><?php echo app('translator')->get('Last Name'); ?></label>
                                    <input class="form-control" type="text" name="lastname" required
                                        value="<?php echo e($user->lastname); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo app('translator')->get('Email'); ?> </label>
                                    <input class="form-control" type="email" name="email"
                                        value="<?php echo e($user->email); ?>" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo app('translator')->get('Mobile Number'); ?> </label>
                                    <div class="input-group ">
                                        <span class="input-group-text mobile-code"></span>
                                        <input type="number" name="mobile" value="<?php echo e(old('mobile')); ?>" id="mobile"
                                            class="form-control checkUser" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label><?php echo app('translator')->get('Address'); ?></label>
                                    <input class="form-control" type="text" name="address"
                                        value="<?php echo e(@$user->address->address); ?>">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="form-group">
                                    <label><?php echo app('translator')->get('City'); ?></label>
                                    <input class="form-control" type="text" name="city"
                                        value="<?php echo e(@$user->address->city); ?>">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="form-group ">
                                    <label><?php echo app('translator')->get('State'); ?></label>
                                    <input class="form-control" type="text" name="state"
                                        value="<?php echo e(@$user->address->state); ?>">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="form-group ">
                                    <label><?php echo app('translator')->get('Zip/Postal'); ?></label>
                                    <input class="form-control" type="text" name="zip"
                                        value="<?php echo e(@$user->address->zip); ?>">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="form-group ">
                                    <label><?php echo app('translator')->get('Country'); ?></label>
                                    <select name="country" class="form-control">
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option data-mobile_code="<?php echo e($country->dial_code); ?>"
                                                value="<?php echo e($key); ?>"><?php echo e(__($country->country)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group  col-xl-4 col-md-6 col-12">
                                <label><?php echo app('translator')->get('Email Verification'); ?></label>
                                <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger"
                                    data-bs-toggle="toggle" data-on="<?php echo app('translator')->get('Verified'); ?>" data-off="<?php echo app('translator')->get('Unverified'); ?>"
                                    name="ev" <?php if($user->ev): ?> checked <?php endif; ?>>

                            </div>

                            <div class="form-group  col-xl-4 col-md-6 col-12">
                                <label><?php echo app('translator')->get('Mobile Verification'); ?></label>
                                <input type="checkbox" data-width="100%" data-onstyle="-success" data-offstyle="-danger"
                                    data-bs-toggle="toggle" data-on="<?php echo app('translator')->get('Verified'); ?>" data-off="<?php echo app('translator')->get('Unverified'); ?>"
                                    name="sv" <?php if($user->sv): ?> checked <?php endif; ?>>

                            </div>
                            <div class="form-group col-xl-4 col-md- col-12">
                                <label><?php echo app('translator')->get('2FA Verification'); ?> </label>
                                <input type="checkbox" data-width="100%" data-height="50" data-onstyle="-success"
                                    data-offstyle="-danger" data-bs-toggle="toggle" data-on="<?php echo app('translator')->get('Enable'); ?>"
                                    data-off="<?php echo app('translator')->get('Disable'); ?>" name="ts"
                                    <?php if($user->ts): ?> checked <?php endif; ?>>
                            </div>

                        </div>


                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn--primary w-100 h-45"><?php echo app('translator')->get('Submit'); ?>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



    
    <div id="addSubModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="type"></span> <span><?php echo app('translator')->get('Balance'); ?></span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.users.add.sub.balance', $user->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="act">
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Amount'); ?></label>
                            <div class="input-group">
                                <input type="number" step="any" name="amount" class="form-control"
                                    placeholder="<?php echo app('translator')->get('Please provide positive amount'); ?>" required>
                                <div class="input-group-text"><?php echo e(__($general->cur_text)); ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Remark'); ?></label>
                            <textarea class="form-control" placeholder="<?php echo app('translator')->get('Remark'); ?>" name="remark" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary h-45 w-100"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="userStatusModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <?php if($user->status == Status::USER_ACTIVE): ?>
                            <span><?php echo app('translator')->get('Ban User'); ?></span>
                        <?php else: ?>
                            <span><?php echo app('translator')->get('Unban User'); ?></span>
                        <?php endif; ?>
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.users.status', $user->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <?php if($user->status == 1): ?>
                            <h6 class="mb-2"><?php echo app('translator')->get('If you ban this user he/she won\'t able to access his/her dashboard.'); ?></h6>
                            <div class="form-group">
                                <label><?php echo app('translator')->get('Reason'); ?></label>
                                <textarea class="form-control" name="reason" rows="4" required></textarea>
                            </div>
                        <?php else: ?>
                            <p><span><?php echo app('translator')->get('Ban reason was'); ?>:</span></p>
                            <p><?php echo e($user->ban_reason); ?></p>
                            <h4 class="text-center mt-3"><?php echo app('translator')->get('Are you sure to unban this user?'); ?></h4>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <?php if($user->status == Status::USER_ACTIVE): ?>
                            <button type="submit" class="btn btn--primary h-45 w-100"><?php echo app('translator')->get('Submit'); ?></button>
                        <?php else: ?>
                            <button type="button" class="btn btn--dark"
                                data-bs-dismiss="modal"><?php echo app('translator')->get('No'); ?></button>
                            <button type="submit" class="btn btn--primary"><?php echo app('translator')->get('Yes'); ?></button>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    <script>
        (function($) {
            "use strict"
            $('.bal-btn').click(function() {
                var act = $(this).data('act');
                $('#addSubModal').find('input[name=act]').val(act);
                if (act == 'add') {
                    $('.type').text('Add');
                } else {
                    $('.type').text('Subtract');
                }
            });
            let mobileElement = $('.mobile-code');
            $('select[name=country]').change(function() {
                mobileElement.text(`+${$('select[name=country] :selected').data('mobile_code')}`);
            });

            $('select[name=country]').val('<?php echo e(@$user->country_code); ?>');
            let dialCode = $('select[name=country] :selected').data('mobile_code');
            let mobileNumber = `<?php echo e($user->mobile); ?>`;
            mobileNumber = mobileNumber.replace(dialCode, '');
            $('input[name=mobile]').val(mobileNumber);
            mobileElement.text(`+${dialCode}`);

        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/admin/users/detail.blade.php ENDPATH**/ ?>