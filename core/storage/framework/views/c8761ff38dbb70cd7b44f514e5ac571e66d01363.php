<?php $__env->startSection('panel'); ?>
    <?php if(@json_decode($general->system_info)->version > systemDetails()['version']): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-warning mb-3 text-white">
                    <div class="card-header">
                        <h3 class="card-title"> <?php echo app('translator')->get('New Version Available'); ?> <button class="btn btn--dark float-end"><?php echo app('translator')->get('Version'); ?>
                                <?php echo e(json_decode($general->system_info)->version); ?></button> </h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text--dark"><?php echo app('translator')->get('What is the Update ?'); ?></h5>
                        <p>
                            <pre class="f-size--24"><?php echo e(json_decode($general->system_info)->details); ?></pre>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(@json_decode($general->system_info)->message): ?>
        <div class="row">
            <?php $__currentLoopData = json_decode($general->system_info)->message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-12">
                    <div class="alert border--primary border" role="alert">
                        <div class="alert__icon bg--primary"><i class="far fa-bell"></i></div>
                        <p class="alert__message"><?php echo $msg; ?></p>
                        <button class="close" data-bs-dismiss="alert" type="button" aria-label="Close">
                            <i class="las la-times"></i>
                        </button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
    <div>
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6">
                <div class="card bg--primary has-link box--shadow2 overflow-hidden">
                    <a class="item-link" href="<?php echo e(route('admin.users.all')); ?>"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="las la-users f-size--56"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--small text-white"><?php echo app('translator')->get('Total Users'); ?></span>
                                <h2 class="text-white"><?php echo e($widget['total_users']); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card bg--success has-link box--shadow2">
                    <a class="item-link" href="<?php echo e(route('admin.users.active')); ?>"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="las la-user-check f-size--56"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--small text-white"><?php echo app('translator')->get('Active Users'); ?></span>
                                <h2 class="text-white"><?php echo e($widget['verified_users']); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card bg--danger has-link box--shadow2">
                    <a class="item-link" href="<?php echo e(route('admin.users.email.unverified')); ?>"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="lar la-envelope f-size--56"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--small text-white"><?php echo app('translator')->get('Email Unverified Users'); ?></span>
                                <h2 class="text-white"><?php echo e($widget['email_unverified_users']); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-3 col-sm-6">
                <div class="card bg--red has-link box--shadow2">
                    <a class="item-link" href="<?php echo e(route('admin.users.mobile.unverified')); ?>"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="las la-comment-slash f-size--56"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--small text-white"><?php echo app('translator')->get('Mobile Unverified Users'); ?></span>
                                <h2 class="text-white"><?php echo e($widget['mobile_unverified_users']); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- dashboard-w1 end -->
        </div><!-- row end-->

        <div class="row gy-4 mt-2">
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-hand-holding-usd overlay-icon text--success"></i>
                    <div class="widget-two__icon b-radius--5 bg--success">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($general->cur_sym); ?><?php echo e(showAmount($deposit['total_deposit_amount'])); ?></h3>
                        <p><?php echo app('translator')->get('Total Deposited'); ?></p>
                    </div>
                    <a class="widget-two__btn border--primary btn-outline--primary border--success btn-outline--success border border" href="<?php echo e(route('admin.deposit.list')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-spinner overlay-icon text--warning"></i>
                    <div class="widget-two__icon b-radius--5 bg--warning">
                        <i class="fas fa-spinner"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($deposit['total_deposit_pending']); ?></h3>
                        <p><?php echo app('translator')->get('Pending Deposits'); ?></p>
                    </div>
                    <a class="widget-two__btn border--primary btn-outline--primary border--warning btn-outline--warning border border" href="<?php echo e(route('admin.deposit.pending')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-ban overlay-icon text--danger"></i>
                    <div class="widget-two__icon b-radius--5 bg--danger">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($deposit['total_deposit_rejected']); ?></h3>
                        <p><?php echo app('translator')->get('Rejected Deposits'); ?></p>
                    </div>
                    <a class="widget-two__btn border--primary btn-outline--primary border--danger btn-outline--danger border border" href="<?php echo e(route('admin.deposit.rejected')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="fas fa-percentage overlay-icon text--primary"></i>
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($general->cur_sym); ?><?php echo e(showAmount($deposit['total_deposit_charge'])); ?></h3>
                        <p><?php echo app('translator')->get('Deposited Charge'); ?></p>
                    </div>
                    <a class="widget-two__btn border--primary btn-outline--primary border--primary btn-outline--primary border border" href="<?php echo e(route('admin.deposit.list')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
        </div><!-- row end-->

        <div class="row gy-4 mt-2">
            <div class="col-xxl-4 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="las la-shopping-cart overlay-icon text--primary"></i>
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="las la-shopping-cart"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($widget['total_order']); ?></h3>
                        <p><?php echo app('translator')->get('Total Order'); ?></p>
                    </div>
                    <a class="widget-two__btn border--primary btn-outline--primary border" href="<?php echo e(route('admin.orders.index')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-4 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="las la-spinner overlay-icon text--warning"></i>
                    <div class="widget-two__icon b-radius--5 bg--warning">
                        <i class="las la-spinner"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($widget['pending_order']); ?></h3>
                        <p><?php echo app('translator')->get('Pending Order'); ?></p>
                    </div>
                    <a class="widget-two__btn border--warning btn-outline--warning border" href="<?php echo e(route('admin.orders.pending')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-4 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="la la-refresh overlay-icon text--info"></i>
                    <div class="widget-two__icon b-radius--5 bg--info">
                        <i class="la la-refresh"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($widget['processing_order']); ?></h3>
                        <p><?php echo app('translator')->get('Processing Order'); ?></p>
                    </div>
                    <a class="widget-two__btn border--info btn-outline--info border" href="<?php echo e(route('admin.orders.processing')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->

        </div><!-- row end-->

        <div class="row gy-4 mt-2">
            <div class="col-xxl-4 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="las la-check-circle overlay-icon text--success"></i>
                    <div class="widget-two__icon b-radius--5 bg--success">
                        <i class="las la-check-circle"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($widget['completed_order']); ?></h3>
                        <p><?php echo app('translator')->get('Completed Order'); ?></p>
                    </div>
                    <a class="widget-two__btn border--success btn-outline--success border" href="<?php echo e(route('admin.orders.completed')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-4 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="las la-times-circle overlay-icon text--danger"></i>
                    <div class="widget-two__icon b-radius--5 bg--danger">
                        <i class="las la-times-circle"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($widget['cancelled_order']); ?></h3>
                        <p><?php echo app('translator')->get('Cancelled Order'); ?></p>
                    </div>
                    <a class="widget-two__btn border--danger btn-outline--danger border" href="<?php echo e(route('admin.orders.cancelled')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xxl-4 col-sm-6">
                <div class="widget-two box--shadow2 b-radius--5 bg--white">
                    <i class="la la-fast-backward overlay-icon text-secondary"></i>
                    <div class="widget-two__icon b-radius--5 bg--secondary">
                        <i class="la la-fast-backward"></i>
                    </div>
                    <div class="widget-two__content">
                        <h3><?php echo e($widget['refunded_order']); ?></h3>
                        <p><?php echo app('translator')->get('Refunded Order'); ?></p>
                    </div>
                    <a class="widget-two__btn border--secondary btn-outline--secondary border" href="<?php echo e(route('admin.orders.refunded')); ?>"><?php echo app('translator')->get('View All'); ?></a>
                </div>
            </div><!-- dashboard-w1 end -->
        </div>
        <div class="row mb-none-30 mt-30">
            <div class="col-xl-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo app('translator')->get('Monthly Deposit'); ?> (<?php echo app('translator')->get('Last 12 Month'); ?>)</h5>
                        <div id="apex-bar-chart"> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo app('translator')->get('Transactions Report'); ?> (<?php echo app('translator')->get('Last 30 Days'); ?>)</h5>
                        <div id="apex-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-none-30 mt-5">
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo app('translator')->get('Login By Browser'); ?> (<?php echo app('translator')->get('Last 30 days'); ?>)</h5>
                        <canvas id="userBrowserChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo app('translator')->get('Login By OS'); ?> (<?php echo app('translator')->get('Last 30 days'); ?>)</h5>
                        <canvas id="userOsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo app('translator')->get('Login By Country'); ?> (<?php echo app('translator')->get('Last 30 days'); ?>)</h5>
                        <canvas id="userCountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cronModal" role="dialog" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo app('translator')->get('Cron Job Setting Instruction'); ?></h5>
                        <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                            <i class="las la-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="text--danger text-center"><?php echo app('translator')->get('Please Set Cron Job Now'); ?></h3>
                        <p class="lead">
                            <?php echo app('translator')->get('To automate the api order placement, we need to set the cron job and make sure the cron job is running properly. Set the Cron time as minimum as possible. Once per 5-15 minutes is ideal while once every minute is the best option.'); ?> </p>
                        <label class="font-weight-bold"><?php echo app('translator')->get('Cron Command'); ?></label>

                        <div class="input-group">
                            <input class="form-control" id="referralURL" name="text" type="text" value="curl -s <?php echo e(route('cron')); ?>" readonly>
                            <span class="input-group-text copytext btn btn--primary copyBoard pt-2" id="copyBoard">
                                <?php echo app('translator')->get('Copy'); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <?php
        $lastCron = Carbon\Carbon::parse($general->last_cron)->diffInSeconds();
    ?>
    <span
        class="<?php if($lastCron < 300): ?> text--info <?php elseif($lastCron < 900): ?> text--warning <?php else: ?> text--danger <?php endif; ?>">
        <?php echo app('translator')->get('Last Cron Run'); ?>
        <strong><?php echo e(diffForHumans($general->last_cron)); ?></strong>
    </span>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/viseradmin/js/vendor/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/viseradmin/js/vendor/chart.js.2.8.0.js')); ?>"></script>
    <script>
        (function($) {
            "use strict";
            <?php if(Carbon\Carbon::parse($general->last_cron)->diffInMinutes() > 15): ?>
                window.onload = () => {
                    $('#cronModal').modal('show');
                }
            <?php endif; ?>

            $('.copyBoard').on('click', function() {
                var copyText = document.getElementById("referralURL");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                iziToast.success({
                    message: "Copied: " + copyText.value,
                    position: "topRight"
                });
            });
        })(jQuery);
    </script>

    <script>
        "use strict";
        var options = {
            series: [{
                name: 'Total Deposit',
                data: [
                    <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e(getAmount(@$depositsMonth->where('months', $month)->first()->depositAmount)); ?>,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            }],
            chart: {
                type: 'bar',
                height: 450,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: <?php echo json_encode($months, 15, 512) ?>,
            },
            yaxis: {
                title: {
                    text: "<?php echo e(__($general->cur_sym)); ?>",
                    style: {
                        color: '#7c97bb'
                    }
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "<?php echo e(__($general->cur_sym)); ?>" + val + " "
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
        chart.render();



        var ctx = document.getElementById('userBrowserChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_browser_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_browser_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                maintainAspectRatio: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });



        var ctx = document.getElementById('userOsChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_os_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_os_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0, 0.05)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            },
        });


        // Donut chart
        var ctx = document.getElementById('userCountryChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($chart['user_country_counter']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo e($chart['user_country_counter']->flatten()); ?>,
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

        // apex-line chart
        var options = {
            chart: {
                height: 450,
                type: "area",
                toolbar: {
                    show: false
                },
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 0,
                    blur: 10,
                    opacity: 0.08
                },
                animations: {
                    enabled: true,
                    easing: 'linear',
                    dynamicAnimation: {
                        speed: 1000
                    }
                },
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                    name: "Plus Transactions",
                    data: [
                        <?php $__currentLoopData = $trxReport['date']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trxDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e(@$plusTrx->where('date', $trxDate)->first()->amount ?? 0); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                },
                {
                    name: "Minus Transactions",
                    data: [
                        <?php $__currentLoopData = $trxReport['date']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trxDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e(@$minusTrx->where('date', $trxDate)->first()->amount ?? 0); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                }
            ],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100]
                }
            },
            xaxis: {
                categories: [
                    <?php $__currentLoopData = $trxReport['date']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trxDate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e($trxDate); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                },
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
        };

        var chart = new ApexCharts(document.querySelector("#apex-line"), options);

        chart.render();
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>