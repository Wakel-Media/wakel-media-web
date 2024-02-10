
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>

                                <tr>
                                    <th scope="row"><?php echo app('translator')->get('API URL'); ?></th>
                                    <td><?php echo e(route('api.v1')); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo app('translator')->get('Response format'); ?></th>
                                    <td><?php echo app('translator')->get('JSON'); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo app('translator')->get('HTTP Method'); ?></th>
                                    <td><?php echo app('translator')->get('POST'); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?php echo app('translator')->get('Your API key'); ?></th>
                                    <td><?php echo e(auth()->user()->api_key); ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline--primary confirmationBtn" data-question="<?php echo app('translator')->get('Your current api key will removed. Are you sure to generate new api key?'); ?>" data-action="<?php echo e(route('user.api.generateKey')); ?>">
                                            <?php echo app('translator')->get('Generate New Key'); ?>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
            </div><!-- card end -->
        </div>
        <div class="col-lg-12 mb-30">
            <div class="accordion cmn-accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <button class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" type="button" aria-expanded="false" aria-controls="collapseOne">
                            <span class="text"><?php echo app('translator')->get('Service List'); ?></span>
                            <span class="plus-icon"></span>
                        </button>
                    </div>

                    <div class="collapse" id="collapseOne" data-parent="#accordionExample" aria-labelledby="headingOne">
                        <div class="card-body">
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
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid action'); ?>"</em>}

</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <button class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" type="button" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="text"><?php echo app('translator')->get('Place New Order'); ?></span>
                            <span class="plus-icon"></span>
                        </button>
                    </div>
                    <div class="collapse" id="collapseTwo" data-parent="#accordionExample" aria-labelledby="headingTwo">
                        <div class="card-body">
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
  "order" : 1242</em> 
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
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <button class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" type="button" aria-expanded="false" aria-controls="collapseThree">
                            <span class="text"><?php echo app('translator')->get('Order Status'); ?></span>
                            <span class="plus-icon"></span>
                        </button>
                    </div>
                    <div class="collapse" id="collapseThree" data-parent="#accordionExample" aria-labelledby="headingThree">
                        <div class="card-body">
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
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid action'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The order field is required'); ?>"</em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid Order Id'); ?>"</em>}
 </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <button class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" type="button" aria-expanded="false" aria-controls="collapseSix">
                            <span class="text"><?php echo app('translator')->get('User Balance'); ?></span>
                            <span class="plus-icon"></span>
                        </button>
                    </div>
                    <div class="collapse" id="collapseSix" data-parent="#accordionExample" aria-labelledby="headingSix">
                        <div class="card-body">
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
{
    <em> "status": "100.84292"</em>
    <em>"currency" :" <?php echo e(gs()->cur_text); ?>"</em>
}
  </pre>
                                    <b><?php echo app('translator')->get('Error response'); ?> :</b>
                                    <pre>
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The action field is required'); ?>" </em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('The api key field is required'); ?>" </em>}
{<em>"<?php echo app('translator')->get('error'); ?>" : "<?php echo app('translator')->get('Invalid api key'); ?>" </em>}
 </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <a class="btn btn-sm btn-outline--primary text--small" href="<?php echo e(asset('assets/example.txt')); ?>" target="_blank">
        <i class="las la-code"></i>
        <?php echo app('translator')->get('Example PHP Code'); ?></a>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/user/api/index.blade.php ENDPATH**/ ?>