
<?php
      $footerContent = getContent('footer.content', true);
      $footerElements = getContent('footer.element', null, false, true);
      $addressContent = getContent('address.content', true);
  ?>

  <footer class="footer-section ptb-80">
      <div class="container">
          <div class="footer-area">
              <div class="row gy-4">
                  <div class="col-lg-4 col-sm-8">
                      <div class="footer-widget widget-menu">
                          <div class="footer-logo">
                              <h3 class="widget-title"><?php echo app('translator')->get('About Us'); ?></h3>
                              <p><?php echo e(__(@$footerContent->data_values->content)); ?></p>
                              <div class="social-area">
                                  <ul class="footer-social">
                                      <?php $__empty_1 = true; $__currentLoopData = $footerElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                          <li><a href="<?php echo e(@$item->data_values->social_url); ?>"><?php echo @$item->data_values->social_icon ?></a>
                                          </li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                          <li>
                                              <?php echo e(__($emptyMessage)); ?>

                                          </li>
                                      <?php endif; ?>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <div class="footer-widget">
                          <h3 class="widget-title"><?php echo app('translator')->get('Quick Link'); ?></h3>
                          <ul>
                              <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><a href="<?php echo e(route('pages', [$data->slug])); ?>"><?php echo e(__($data->name)); ?></a></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <li><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>
                              <li><a href="<?php echo e(route('api.documentation')); ?>"><?php echo app('translator')->get('API Documentation'); ?></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="footer-widget">
                          <h3 class="widget-title"><?php echo app('translator')->get('Privacy and Terms'); ?></h3>
                          <ul>
                              <?php
                                  $policyPages = getContent('privacy_policy.element', null, false, true);
                              ?>

                              <?php $__empty_1 = true; $__currentLoopData = $policyPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                  <li>
                                      <a href="<?php echo e(route('policy.pages', [slug($policy->data_values->title), $policy->id])); ?>"><?php echo e(__($policy->data_values->title)); ?></a>
                                  </li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                  <li>
                                      <?php echo e(__($emptyMessage)); ?>

                                  </li>
                              <?php endif; ?>


                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="footer-widget widget-menu">
                          <h3 class="widget-title"><?php echo app('translator')->get('Contact Info'); ?></h3>
                          <ul class="footer-contact-list">
                              <li><?php echo e(__(@$addressContent->data_values->address)); ?></li>
                              <li><?php echo app('translator')->get('Call Us Now'); ?> <?php echo e(@$addressContent->data_values->phone); ?></li>
                              <li><a
                                      href="mailto:<?php echo e($addressContent->data_values->email); ?>"><?php echo e(@$addressContent->data_values->email); ?></a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
<?php /**PATH /home/wakerdxu/public_html/new/core/resources/views/templates/basic/partials/footer.blade.php ENDPATH**/ ?>