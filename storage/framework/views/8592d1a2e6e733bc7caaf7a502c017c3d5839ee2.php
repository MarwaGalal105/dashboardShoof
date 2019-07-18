<?php $__env->startSection('content'); ?>


<div class="ulockd-inner-home">
		<div class="container text-center">
			<div class="row">
				<div class="ulockd-inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase">تفاصيل عن الطفل المفقود</h1>
					</div>
					<div class="col-md-12">
						<div class="ulockd-icd-layer">
							<ul class="list-inline ulockd-icd-sub-menu"> 
                                <li><a href="<?php echo e(url('home')); ?>"> الرئيسيه </a></li>
                                <li><a href="#"> > </a></li>
                                <li> <a href="<?php echo e(url('lostchild')); ?>">مفقودين </a> </li>
                                <li><a href="#"> > </a></li>
                                <li> <a href="<?php echo e(url('lostchild/'.$info->id)); ?>">تفاصيل</a> </li>
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
                        <div class="row ulockd-mrgn1260">
                            <div class="col-sm-6 col-md-6 col-lg-5 clearfix">
                                <div class="ulockd-product-details-img">
                                    <img class="img-responsive img-whp" src="<?php echo e(asset('public/uploads/'.$info->image)); ?>"  alt="1.jpg">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-7 clearfix">
                                <div class="ulockd-product-details">
                                    <h3 class="product-name">الاسم: <strong class="text-thm"> <?php echo e($info->name); ?> </strong> </h3>
                                    <ul class="list-inline product-quantity">
                                        <li><h4 class="product-quantity">العمر:<strong class="text-thm"> <?php echo e($info->age); ?> </strong></h4></li>
                                    </ul>
                                    <h3 class="product-name">المحافظه: <strong class="text-thm"> <?php echo e($info->city); ?> </strong> </h3>
                                    <?php if($info->gender=='male'): ?>
                                    <h3 class="product-name">الجنس: <strong class="text-thm"> ذكر </strong> </h3>
                                    <?php else: ?> 
                                    <h3 class="product-name">الجنس: <strong class="text-thm"> انثي </strong> </h3>
                                    <?php endif; ?>
                                    <h3 class="product-name">رقم التليفون: <strong class="text-thm"> <?php echo e($info->telephone); ?> </strong> </h3>
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 ulockd-mrgn1260">
                                <div class="ulockd-pd-tab bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
                                    <ul class="nav nav-tabs" id="myTabs" role="tablist"> 
                                        <li role="presentation" class="active">
                                            <a href="#description" id="description-tab" role="tab" data-toggle="tab" aria-controls="description" aria-expanded="true">ملاحظات</a>
                                        </li> 
                                        
                                    </ul> 
                                    <div class="tab-content" id="myTabContent"> 
                                        <div class="tab-pane fade active in" role="tabpanel" id="description" aria-labelledby="description-tab">
                                            <p class="ulockd-mrgn1225"><?php echo e($info->notes); ?></p>
                                           
                                        </div>
                                        
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 ulockd-pad-zero pad15-xs">
                        <h3 class="ulockd-bb-dashed"><span class="flaticon-calendar text-thm"></span> مفقودين</h3>
                        <div class="ulockd-lp">
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
                           
                        </div>
                        
                        
                    </div>
                </div>
                <div class="row ">
                    <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6 col-md-6 col-lg-2 clearfix">
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>
        </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\ShoofToday\resources\views/front/lost/show.blade.php ENDPATH**/ ?>