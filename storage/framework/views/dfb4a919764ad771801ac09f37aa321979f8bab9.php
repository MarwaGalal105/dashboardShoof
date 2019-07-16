<?php $__env->startSection('content'); ?>
<div class="ulockd-inner-home">
    <div class="container text-center">
        <div class="row">
            <div class="ulockd-inner-conraimer-details">
                <div class="col-md-12">
                    <h1 class="text-uppercase">مفقودين</h1>
                </div>
                <div class="col-md-12">
                    <div class="ulockd-icd-layer">
                        <ul class="list-inline ulockd-icd-sub-menu">
                            <li><a href="<?php echo e(url('home')); ?>"> الرئيسيه </a></li>
                            <li><a href="#"> > </a></li>
                            <li> <a href="<?php echo e(url('lostchild')); ?>">مفقودين </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ulockd-shop">
    <div class="container">
        <div class="row">
          
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="row ulockd-mrgn1260 ulockd-shop-menubar ulockd-mrgb35">
                    
                    <form action="<?php echo e(route('search')); ?>">
                        
                        <div class="col-lg-5">
                            <div class="input-group ulockd-product-searchbar">
                                <input type="text" class="form-control" name="search" placeholder="ابحث بالاسم او رقم التليفون">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Search</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row ulockd-mrgn1260">
                    <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($data->type=='lost'): ?>
                    <div class="col-sm-6 col-md-6 col-lg-4 clearfix">
                        <div class="ulockd-shop-item">
                            <div class="ulockd-product-img">
                                <img class="img-responsive img-whp" src="<?php echo e(asset('public/uploads/'.$data->image)); ?>" alt="1.jpg">
                                <div class="price-tag"><?php echo e($data->type); ?></div>
                            </div>
                            <div class="ulockd-product-details">
                                
                                <h3><?php echo e($data->name); ?></h3>
                                <p><?php echo e($data->notes); ?></p>
                                <a class="btn btn-lg ulockd-btn-styledark hvr-bounce-to-right" href="<?php echo e(url('lostchild/'.$data->id)); ?>">قراءه المزيد</a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                    
                   
                </div>
            </div>
        <div class="col-md-4 col-lg-3 ulockd-pad-zero pad15-xs">
         
            <h3 class="ulockd-bb-dashed"><span class="flaticon-calendar text-thm"></span>مفقودين</h3>
            <div class="ulockd-lp">
                <div class="ulockd-latest-post">
                    <?php if(isset($item)): ?>
                        <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="ulockd-latest-post">
                                <div class="media">
                                    <div class="media-right pull-right">
                                        <a href="#">
                                              <img class="media-object thumbnail" src="<?php echo e(asset('public/uploads/'.$data->image)); ?>" height="65" width="90" alt="1.jpg">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo e($data->name); ?></h4>
                                       <?php echo e($data->notes); ?> <a href="<?php echo e(url('lostchild/'.$data->id)); ?>"> <strong class="text-thm"> المزيد... </strong> </a>
                                       
                                    </div>
                                </div>
                            </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                   
                </div>
            </div>
            <div class="ulockd-ip-tag">
                <div class="ulockd-tag-list-title">
                    <h3 class="ulockd-bb-dashed"><span class="flaticon-mark text-thm"></span> Search by Tags</h3>
                </div>
                <ul class="list-inline ulockd-tag-list-details">
                    <li><a href="#">Photoshop</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Tutorial</a></li>
                    <li><a href="#">Corses</a></li>
                    <li><a href="#">Primum</a></li>
                    <li><a href="#">Designtuto</a></li>
                    <li><a href="#">Autocad</a></li>
                    <li><a href="#">Development</a></li>
                </ul>
            </div>
            <div class="ulockd-ip-flickr">
                <div class="ulockd-flickr-list-title">
                    <h3 class="ulockd-bb-dashed"><span class="flaticon-flickr text-thm"></span> Flickr Feed</h3>
                    <div class="flickr-photo"></div>
                </div>
            </div>
            <div class="ulockd-ip-flickr">
                <div class="ulockd-flickr-list-title">
                    <h3 class="ulockd-bb-dashed"><span class="flaticon-twitter-logo-on-black-background text-thm"></span> Twitter Feed</h3>
                    <div class="twitter"></div>
                </div>
            </div>
        </div>
            <div class="col-lg-12">
                <nav class="ulockd-shop-pagination" aria-label="Page navigation">
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\ShoofToday\resources\views/front/lost/index.blade.php ENDPATH**/ ?>