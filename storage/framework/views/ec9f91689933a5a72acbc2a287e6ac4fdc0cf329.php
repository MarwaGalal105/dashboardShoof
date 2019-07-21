<?php $__env->startSection('content'); ?>

<section class="ulockd-contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="ulockd-cp-title">
						<h2 class="text-uppercase">اتصل بنا</h2>
					</div>
					<div class="ulockd-contact-details">
						<ul class="list-inline ulockd-contact-place">
							<li><span class="flaticon-black-back-closed-envelope-shape"></span></li>
							<li><span class="flaticon-old-handphone"></span></li>
							<li><span class="flaticon-map-marker"></span></li>
							<li><span class="flaticon-checkbox-pen-outline"></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
                  
                    <div class="col-md-9">
                        <div class="ulockd-contact-form">
                            <form method="POST" action="<?php echo e(url('contact')); ?>" >
                            <?php echo e(csrf_field()); ?>

                                <div class="messages"></div>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="email" name="email" class="form-control ulockd-form-fg required email" placeholder="البريد الالكتروني" required="required" data-error="يجب كتابه البريد الالكتروني" type="email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="name" name="name" class="form-control ulockd-form-fg required" placeholder="اسمك" required="required" data-error="يجب كتابه الاسم." type="text">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="message" name="message" class="form-control ulockd-form-tb required" rows="8" placeholder="الرساله" ></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group ulockd-contact-btn">
                                            <button type="submit" class="btn btn-default ulockd-btn-thm" >SUBMIT</button>
                                        </div>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\ShoofToday\resources\views/front/contact.blade.php ENDPATH**/ ?>