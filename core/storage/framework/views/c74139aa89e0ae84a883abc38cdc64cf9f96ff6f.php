
<?php $__env->startSection('content'); ?>
    <section class="ptb-80">
        <div class="container">
            <div class="bodywrapper__inner">
                <div class="row">
                    <div class="d-flex justify-content-end mb-3">
                        <a class="submit-btn text--small" href="<?php echo e(asset('assets/example.txt')); ?>" target="_blank">
                            <i class="las la-code"></i> <?php echo app('translator')->get('Example PHP Code'); ?></a>
                    </div>
                    <div class="col-lg-12">
                        <div class="api-docs">
                            <ul class="api-docs-list">
                                <li class="api-docs-list__item"> <strong class="text"> <?php echo app('translator')->get('API URL'); ?> </strong> <span
                                        class="text"><?php echo e(route('api.v1')); ?></span>
                                </li>
                                <li class="api-docs-list__item"> <strong class="text"> <?php echo app('translator')->get('Response Format'); ?></strong> <span
                                        class="text"><?php echo app('translator')->get('JSON'); ?></span>
                                </li>
                                <li class="api-docs-list__item"> <strong class="text"> <?php echo app('translator')->get('HTTP Method'); ?></strong> <span
                                        class="text"> <?php echo app('translator')->get('POST'); ?></span>
                                </li>
                                <li class="api-docs-list__item"> <strong class="text"> <?php echo app('translator')->get('Api Key'); ?></strong> <span
                                        class="text"><?php echo app('translator')->get('Your api key'); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="faq-wrapper">

                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title"><?php echo app('translator')->get('Service List'); ?>
                                    </span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <div class="card">
                                        <div class="card-body">
                                            <b><?php echo app('translator')->get('Required parameters'); ?></b>

                                            <div id="type_0">
                                                <ul>
                                                    <li><b width="20%">key</b> - <?php echo app('translator')->get('Your API Key'); ?></li>
                                                    <li><b>action</b> - "services"</li>
                                                </ul>
                                            </div>
                                            <br>
                                            <b><?php echo app('translator')->get('Success response'); ?> :</b>
                                            <pre>[
    {<em>
     "service": 1,
     "name": "YouTube Livestream Viewers ",
     "rate": "0.33000000",
     "min": 1000,
     "max": 200000,
     "category": "Live Stream [ Low ConCurrent | Less Price ] [ 30 Minutes to 24 Hours]"</em>
    },
    {<em>
      "service": 2,
      "name": "YouTube Livestream Viewers ~ ",
      "rate": "2.10000000",
      "min": 1000,
      "max": 200000,
      "category": "Live Stream [ Low ConCurrent | Less Price ] [ 30 Minutes to 24 Hours]" </em>
    }
]</pre>
                                            <br>
                                            <b><?php echo app('translator')->get('Error response'); ?> :</b>
                                            <pre>
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The action field is required'); ?>" </em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The api key field is required'); ?>" </em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid api key'); ?>" </em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid action'); ?>" </em>}
</pre>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title"><?php echo app('translator')->get('Place New Order'); ?>
                                    </span><span class="right-icon"></span></h3>
                                <div class="faq-content">

                                    <div class="card">
                                        <div class="card-body">
                                            <b><?php echo app('translator')->get('Required parameters'); ?></b>

                                            <div id="type_0">
                                                <ul>
                                                    <li><b width="20%">key</b> - <?php echo app('translator')->get('Your API Key'); ?></li>
                                                    <li><b>action</b> - "add"</li>
                                                    <li><b>service</b> - <?php echo app('translator')->get('Service ID'); ?></li>
                                                    <li><b>link</b> - <?php echo app('translator')->get('Link to page'); ?></li>
                                                    <li><b>quantity</b> - <?php echo app('translator')->get('Quantity to be delivered'); ?></li>
                                                    <li><b>runs(optional) </b> - <?php echo app('translator')->get('Runs to deliver'); ?></li>
                                                    <li><b>interval(optional) </b> - <?php echo app('translator')->get('Interval in minutes'); ?></li>
                                                </ul>
                                            </div>
                                            <br>
                                            <b><?php echo app('translator')->get('Success response'); ?> :</b>
                                            <pre>
{<em>
  "order" : "1242"</em> 
}
</pre>

                                            <br>
                                            <b><?php echo app('translator')->get('Error response'); ?> :</b>
                                            <pre>
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The action field is required'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The api key field is required'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid api key'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid Service Id'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The link field is required'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The quantity field is required'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Please follow the limit'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Insufficient balance'); ?>"</em>}

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">
                                        <?php echo app('translator')->get('Order Status'); ?>
                                    </span><span class="right-icon"></span></h3>
                                <div class="faq-content">

                                    <div class="card">
                                        <div class="card-body">
                                            <b><?php echo app('translator')->get('Required parameters'); ?></b>

                                            <div id="type_0">
                                                <ul>
                                                    <li><b width="20%">key</b> - <?php echo app('translator')->get('Your API Key'); ?></li>
                                                    <li><b>action</b> - "status"</li>
                                                    <li><b>order</b> - <?php echo app('translator')->get('Order ID'); ?></li>
                                                </ul>
                                            </div>
                                            <br>
                                            <b><?php echo app('translator')->get('Success response'); ?> :</b>
                                            <pre>
{<em>
  "status" : "Pending",
  "start_count" : "1000",
  "remains" : "500",
  "currency" : <?php echo e(gs()->cur_text); ?>

</em>
}</pre>
                                            <br>
                                            <b><?php echo app('translator')->get('Available status'); ?></b>
                                            <ul>
                                                <li><span class="text--warning">Pending</span></li>
                                                <li><span class="text--info">Processing</span></li>
                                                <li><span class="text--success">Complete</span></li>
                                                <li><span class="text--danger">Order Cancelled</span></li>
                                                <li><span class="text--dark">Refunded</span></li>
                                            </ul>
                                            <br>
                                            <b><?php echo app('translator')->get('Error response'); ?> :</b>
                                            <pre>
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The action field is required'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The api key field is required'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid api key'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid request'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The order field is required'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid Order Id'); ?>"</em>}
 </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">
                                        <?php echo app('translator')->get('Get Balance'); ?>
                                    </span><span class="right-icon"></span></h3>
                                <div class="faq-content">

                                    <div class="card">
                                        <div class="card-body">
                                            <b><?php echo app('translator')->get('Required parameters'); ?></b>

                                            <div id="type_0">
                                                <ul>
                                                    <li><b width="20%">key</b> - <?php echo app('translator')->get('Your API Key'); ?></li>
                                                    <li><b>action</b> - "balance"</li>

                                                </ul>
                                            </div>
                                            <br>
                                            <b><?php echo app('translator')->get('Success response'); ?> :</b>
                                            <pre>
{<em>"balance" : "100.84292"</em>
<em>"currency" : <?php echo e(gs()->cur_text); ?></em>
}
  </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/api_documentation.blade.php ENDPATH**/ ?>