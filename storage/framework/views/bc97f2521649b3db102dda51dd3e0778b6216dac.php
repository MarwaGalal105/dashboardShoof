<?php $__env->startSection('content'); ?>



	<!-- Home Design -->
	<div class="home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 ulockd-pmz">
					<div class="cd-hero">
						<ul class="cd-hero-slider autoplay">
							<li class="selected">
								<div class="cd-full-width">
									<h2>Welcome to Comfort Home</h2>
									<h3>Best Old and Health Care Service For Your Parents And Old Man, Womens.</h3>
									<a href="#" class="cd-btn btn btn-default ulockd-btn-thm">تعلم المزيد</a>
								</div> <!-- .cd-full-width -->
							</li>

							<li>
								<div class="cd-full-width">
									<h2>Best Care Service From Us.</h2>
									<h3>Best Old and Health Care Service For Your Parents And Old Man, Womens.</h3>
									<a href="#0" class="cd-btn btn btn-default ulockd-btn-thm">خدماتنا</a>
									<a href="#0" class="cd-btn btn btn-default ulockd-btn-styledark">تعلم المزيد</a>
								</div> <!-- .cd-half-width -->
							</li>

							<li>
								<div class="cd-full-width">
									<h2>Old And Health Care Service</h2>
									<h3>Instead of moving into a long haul mind office as they age.</h3>
									<a href="#0" class="cd-btn btn btn-default ulockd-btn-thm">خدماتنا</a>
									<a href="#0" class="cd-btn btn btn-default ulockd-btn-styledark">تعلم المزيد</a>
								</div> <!-- .cd-half-width -->								
							</li>

							<li class="cd-bg-video">
								<div class="cd-full-width style2">
									<h2>Your Satisfaction Our Goal</h2>
									<h3>Best Old and Health Care Service For Your Parents And Old Man, Womens.</h3>
									<a href="#0" class="cd-btn btn btn-default ulockd-btn-thm">تعلم المزيد</a>
								</div> <!-- .cd-full-width -->

								<div class="cd-bg-video-wrapper" data-video="assets/video/video">
									<!-- video element will be loaded using jQuery -->
								</div> <!-- .cd-bg-video-wrapper -->
							</li>

							<li>
								<div class="cd-full-width">
									<h2>Best Care For Your Parents</h2>
									<h3>Consectetur adipisicing elit. Reprehenderit consectetur impedit.</h3>
									<a href="#0" class="cd-btn btn btn-default ulockd-btn-thm">خدماتنا</a>
									<a href="#0" class="cd-btn btn btn-default ulockd-btn-styledark">Get a Quote</a>
								</div> <!-- .cd-full-width -->
							</li>
						</ul> <!-- .cd-hero-slider -->

						<div class="cd-slider-nav">
							<nav>
								<span class="cd-marker item-1"></span>

								<ul>
									<li class="selected"><a href="#0"></a></li>
									<li><a href="#0"></a></li>
									<li><a href="#0"></a></li>
									<li><a href="#0"></a></li>
									<li><a href="#0"></a></li>
								</ul>
							</nav> 
						</div> <!-- .cd-slider-nav -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our About -->
	<section class="ulockd-about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="about-box">
						<div class="ab-details">
							<h2>مرحبا بكم في شوف توداي</h2>
							<p>ساعدنا نلاقي طفلك</p>
							<a class="btn btn-default ulockd-btn-white" href="#">قراءه المزيد</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="about-slider text-right">
					<?php $__currentLoopData = $lastlost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<div class="item">
							<div class="about-box2">
								<div class="ab-thumb">
									
									<img class="img-responsive img-whp" src="<?php echo e(asset('public/uploads/'.$info->image)); ?>"  alt="image" height="100" width="150" >
								</div>
								<div class="ab-details2">
									<h4 class="text-thm"> <?php echo e($info->type); ?></h4>
									<a class="btn btn-lg ulockd-btn-thm" href="<?php echo e(url('lostchild/'.$info->id)); ?>">قراءه المزيد</a>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						<?php $__currentLoopData = $lastfound; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<div class="item">
							<div class="about-box2">
								<div class="ab-thumb">
									
									<img class="img-responsive img-whp" src="<?php echo e(asset('public/uploads/'.$info->image)); ?>"  alt="image" height="100" width="150" >
								</div>
								<div class="ab-details2">
									<h4 class="text-thm"><?php echo e($info->type); ?></h4>
									
								</div>
								<div class="ab-details2">
									<h4 class="text-thm"> <?php echo e($info->type); ?></h4>
									<a class="btn btn-lg ulockd-btn-thm" href="<?php echo e(url('lostchild/'.$info->id)); ?>">قراءه المزيد</a>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="row ulockd-appointment-form-one">
						<!-- Appointment Form Starts -->
	                    <form id="lost_form" name="lost_form" class="lost_form_one" action="<?php echo e(Route('lostchild.store')); ?>" method="POST"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
							<?php echo csrf_field(); ?>
							<div class="messages"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
								<h2 class="text-thm">بلاغ</h2>
                             
							<div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>"  placeholder="اسم المفقود" value="<?php echo e(old('name')); ?>" class="form-control form_control required datepicker hasDatepicker"  required="required" data-error="Name is required.">
								  <div class="help-block with-errors"></div>
								</div>
							  </div>
					
					
							  <div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="text" id="address" name="address" value="<?php echo e(old('address')); ?>"  placeholder="العنوان" required class="form-control required datepicker hasDatepicker">
								</div>
							  </div>
					
							 <div class="form-group">
								  <div class="col-md-12 col-sm-6 col-xs-12">
									<select  class="form-control required datepicker hasDatepicker" id="exampleFormControlSelect1" name="city"  placeholder="المحافظه">
									  <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										  <option value="<?php echo e($city->name); ?>"><?php echo e($city->name); ?></option>
									  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								  </div>
							</div>
					
					
							  <div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="number" id="age" name="age" value="<?php echo e(old('age')); ?>"  placeholder="العمر" required class="form-control required datepicker hasDatepicker">
								</div>
							  </div>
					
							  <div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="date" id="date" name="date" value="<?php echo e(old('date')); ?>"  placeholder="التاريخ" required class="form-control required datepicker hasDatepicker">
								</div>
							  </div>
					
							  <div  class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								<select class="form-control required datepicker hasDatepicker" name="gender"  placeholder="الجنس" >
										   <option value="male" selected>ذكر </option>
										  <option value="female">انثي</option>
					
								</select>
								</div>
							</div>
					
							  <div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="number" id="telephone" name="telephone"  placeholder="رقم التليفون" value="<?php echo e(old('telephone')); ?>" required class="form-control required datepicker hasDatepicker">
								</div>
							  </div>
					
					
							  <div class="form-group">
								  <div class="col-md-12 col-sm-6 col-xs-12">
								  <textarea name="notes" id="notes"  placeholder="ملاحظات" required="required" class="form-control required datepicker hasDatepicker"></textarea>
								  </div>
							  </div>
					
							  <div class="form-group">
								
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input type="file" name="image" id="image"  placeholder="صوره" class="form-control required datepicker hasDatepicker"> </div>
								</div>
								<div class="form-group">
							
										<div class="col-md-12 col-sm-6 col-xs-12">
												<select class="form-control required datepicker hasDatepicker" name="type"  placeholder="النوع" >
														<option value="lost" selected>مفقود </option>
														<option value="found">تم العثور عليه</option>
									
												</select>
										</div>
									</div>
							
							<div  class="form-group">
						   
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="hidden" id="status" name="status" value="0" >
								</div>
							</div>
							  
						
		                        <div class="form-group text-center">
		                            <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
		                            <button type="submit" class="btn btn-lg ulockd-btn-thm" data-loading-text="Getting Few Sec...">ارسال</button>
		                        </div>
                            </div>
	                    </form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Service -->
	

		<!-- Our Testimonial -->
		
		

	<!-- Our Feature Service -->
	<section class="ulockd-fservice">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-dtitle hvr-float-shadow">
						<h2 id="C2" class="text-uppercase"> <span class="text-thm">مفقودين</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="fs_slider">
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($info->type =='lost'): ?>
					<div class="item">
						<div class="ulockd-fservice-box text-right hvr-float-shadow">
							<div class="db-thumb">
									<img class="img-responsive img-whp" src="<?php echo e(asset('public/uploads/'.$info->image)); ?>"  alt="image" height="100" width="150">
								<div class="db-overlayer"><span title="Feature Service Icon" class="fas fa-frown"></span></div>
							</div>
							<div class="db-details">
								<h4><?php echo e($info->name); ?></h4>
								<p><?php echo e($info->notes); ?></p>
								<a class="btn btn-lg ulockd-btn-thm" href="<?php echo e(url('lostchild/'.$info->id)); ?>">قراءه المزيد</a>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					
				
				
					
				</div>
			</div>
		</div>
	</section>

	<!-- Our First Divider -->
	<section class="ulockd-frst-divider style1 parallax" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
		
				<div class="col-sm-3 col-md-3 col-lg-5">
					<div class="ulockd-ffact-one">
							<span class="ulockd-icon-let flaticon-staff-symbol pull-right"></span>
						
                        <p>تم العثور عليهم</p>
                        <div class="timer"><?php echo e($countfound); ?></div>
					</div>
				</div>

				<div class="col-sm-3 col-md-3 col-lg-4">
					<div class="ulockd-ffact-one">
							<span class="ulockd-icon-let flaticon-multiple-users-silhouette pull-right"></span>
							
                       	 <p>مفقودين</p>
                        <div class="timer"><?php echo e($countlost); ?></div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Our Team -->
	<section class="ulockd-fservice">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="ulockd-dtitle hvr-float-shadow">
							<h2 id="C2" class="text-uppercase"> <span class="text-thm">تم العثور عليهم</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="fs_slider">
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($info->type =='found'): ?>
						<div class="item">
							<div class="ulockd-fservice-box text-right hvr-float-shadow">
								<div class="db-thumb">
										<img class="img-responsive img-whp" src="<?php echo e(asset('public/uploads/'.$info->image)); ?>"  alt="image" height="100" width="150">
									<div class="db-overlayer"><span title="Feature Service Icon" class="fas fa-grin-hearts"></span></div>
								</div>
								<div class="db-details">
									<h4><?php echo e($info->name); ?></h4>
									<p><?php echo e($info->notes); ?></p>
									<a class="btn btn-lg ulockd-btn-styledark hvr-bounce-to-right" href="<?php echo e(url('findchild/'.$info->id)); ?>"> قراءه المزيد </a>
								</div>
							</div>
						</div>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						
					
					
						
					</div>
				</div>
			</div>
		</section>
	

	

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\ShoofToday\resources\views/home.blade.php ENDPATH**/ ?>