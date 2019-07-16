@extends('front.layouts.main')
@section('content')



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
							<h2>Welcome to Comfort Home</h2>
							<p>Regardless of whether you need to stay in your own house, are searching for help with a more established relative, weighing up lodging alternatives or looking for exhortation on paying for care, we can help you.</p>
							<a class="btn btn-default ulockd-btn-white" href="#">قراءه المزيد</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="about-slider text-right">
					@foreach ($lastlost as $info)
						
						<div class="item">
							<div class="about-box2">
								<div class="ab-thumb">
									
									<img class="img-responsive img-whp" src="{{asset('public/uploads/'.$info->image)}}"  alt="image" height="100" width="150" >
								</div>
								<div class="ab-details2">
									<h4 class="text-thm"> {{ $info->type }}</h4>
									<a class="btn btn-lg ulockd-btn-thm" href="{{ url('lostchild/'.$info->id) }}">قراءه المزيد</a>
								</div>
							</div>
						</div>
						@endforeach	
						@foreach ($lastfound as $info)
						
						<div class="item">
							<div class="about-box2">
								<div class="ab-thumb">
									
									<img class="img-responsive img-whp" src="{{asset('public/uploads/'.$info->image)}}"  alt="image" height="100" width="150" >
								</div>
								<div class="ab-details2">
									<h4 class="text-thm">{{ $info->type }}</h4>
									
								</div>
							</div>
						</div>
						@endforeach	
			
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="row ulockd-appointment-form-one">
						<!-- Appointment Form Starts -->
	                    <form id="lost_form" name="lost_form" class="lost_form_one" action="{{ Route('lostchild.store') }}" method="POST"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
							@csrf
							<div class="messages"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
								<h2 class="text-thm">بلاغ</h2>
                             
							<div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="text" id="name" name="name" value="{{ old('name') }}"  placeholder="اسم المفقود" required class="form-control required datepicker hasDatepicker">
								</div>
							  </div>
					
					
							  <div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="text" id="address" name="address" value="{{ old('address') }}"  placeholder="العنوان" required class="form-control required datepicker hasDatepicker">
								</div>
							  </div>
					
							 <div class="form-group">
								  <div class="col-md-12 col-sm-6 col-xs-12">
									<select  class="form-control required datepicker hasDatepicker" id="exampleFormControlSelect1" name="city"  placeholder="المحافظه">
									  @foreach ($cities as $city)
										  <option value="{{ $city->name }}">{{ $city->name }}</option>
									  @endforeach
									</select>
								  </div>
							</div>
					
					
							  <div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="number" id="age" name="age" value="{{ old('age') }}"  placeholder="العمر" required class="form-control required datepicker hasDatepicker">
								</div>
							  </div>
					
							  <div class="form-group">
								<div class="col-md-12 col-sm-6 col-xs-12">
								  <input type="date" id="date" name="date" value="{{ old('date') }}"  placeholder="التاريخ" required class="form-control required datepicker hasDatepicker">
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
								  <input type="number" id="telephone" name="telephone"  placeholder="رقم التليفون" value="{{ old('telephone') }}" required class="form-control required datepicker hasDatepicker">
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
	<section class="service-two parallax" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-srvc-title hvr-float-shadow">
						<h2 class="text-uppercase">Awesome <span class="text-thm">Services</span></h2>
						<p>Comfort Home supplements Glenmoor House, which is another Avery home in Corby, which has joint journeys masterminded.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ulockd-pad395 ulockd-mrgn65">
					<div class="ulockd-srvc-column text-center">
						<div class="ulockd-srv-icon"><span class="flaticon-nurse"></span></div>
						<div class="ulockd-srvc-details">
							<h3>Assisted Living</h3>
							<p>Day in and day out Nursing and Medial Services gives custom-made care to individuals in their cabin who are attempting to oversee.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ulockd-pad395 ulockd-mrgn65">
					<div class="ulockd-srvc-column text-center">
						<div class="ulockd-srv-icon"><span class="flaticon-medical-4"></span></div>
						<div class="ulockd-srvc-details">
							<h3>Primary Health Care</h3>
							<p>We trust that growth influences each individual in an unexpected way, and that each individual can profit by an interesting, individualized care.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ulockd-pad395 ulockd-mrgn65">
					<div class="ulockd-srvc-column text-center">
						<div class="ulockd-srv-icon"><span class="flaticon-office-block"></span></div>
						<div class="ulockd-srvc-details">
							<h3>Resident Care</h3>
							<p>This level of care and supervision is for individuals who can't live without anyone else's who needn't bother with 24 hour nursing care.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ulockd-pad395">
					<div class="ulockd-srvc-column text-center">
						<div class="ulockd-srv-icon"><span class="flaticon-folder"></span></div>
						<div class="ulockd-srvc-details">
							<h3>Housekeeping Service</h3>
							<p>Our Medical Social Workers take care of patients and families who encounter challenges in adapting to mental, social and emerging from.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ulockd-pad395">
					<div class="ulockd-srvc-column text-center">
						<div class="ulockd-srv-icon"><span class="flaticon-cross"></span></div>
						<div class="ulockd-srvc-details">
							<h3>Rehabilitation Service</h3>
							<p>our Rehabilitation Services gives exhaustive therapeutic and professional recovery to deliver a representative's obstructions to employ ability.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ulockd-pad395">
					<div class="ulockd-srvc-column text-center">
						<div class="ulockd-srv-icon"><span class="flaticon-shape-1"></span></div>
						<div class="ulockd-srvc-details">
							<h3>Qualified Doctors</h3>
							<p>Subsequent to giving conclusions, a specialist treats patients who are experiencing sicknesses and wounds. A specialist is likewise called .</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		<!-- Our Testimonial -->
		<section class="ulockd-testimonial-divider">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="ulockd-testimonials">
								<h2 class="ulockd-testi-title">Video <span class="text-thm">Testimonial</span></h2>
								<p>Compliment from our honorable patient.</p>
								<ul class="list-unstyled">
									<li><iframe class="ulockd-frame" src="http://www.youtube.com/embed/a-Pi0O7rb1E?autoplay=0" allowfullscreen=""></iframe>
									</li>
									<li><iframe class="ulockd-frame" src="http://www.youtube.com/embed/Dlitc3Ki6iU?autoplay=0" allowfullscreen=""></iframe>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							 <div class="ulockd-faq-box">
								<div class="ulockd-ap-faq-title style2 clearfix">
									<h2>Frequently <span class="text-thm"> Asked?</span></h2>
								</div>
								<div class="ulockd-faq-content">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														<i class="fa fa-angle-down icon-1"></i>
														<i class="fa fa-angle-up icon-2"></i>
														What is long-term care?
													</a>
												</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
												<div class="panel-body">
												  <p>Long haul mind includes an assortment of administrations intended to meet a man's well being or individual care needs amid a short or drawn out stretch of time.</p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingTwo">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														<i class="fa fa-angle-down icon-1"></i>
														<i class="fa fa-angle-up icon-2"></i>
														What does in-home care cost?
													</a>
												</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
												<div class="panel-body">
												  <p>Each Comfort Keepers office is autonomously claimed and worked. We urge you to contact your nearby office straightforwardly for a total rundown of items and administrations accessible, and in addition the rates for your region.</p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingThree">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														<i class="fa fa-angle-down icon-1"></i>
														<i class="fa fa-angle-up icon-2"></i>
														Services Accessible 24H/7days?
													</a>
												</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
												<div class="panel-body">
												  <p>Yes. Administrations are accessible for as meager as a couple of hours a visit up to 24 hours, 7 days seven days, 365 days a year.</p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headignFour">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
														<i class="fa fa-angle-down icon-1"></i>
														<i class="fa fa-angle-up icon-2"></i>
														What is Primary Care?
													</a>
												</h4>
											</div>
											<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headignFour">
												<div class="panel-body">
												  <p>The term essential care alludes to the sort of restorative care you require first — before you become ill, before you have to see a master, before you have to go to a healing facility.</p>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headignFive">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
														<i class="fa fa-angle-down icon-1"></i>
														<i class="fa fa-angle-up icon-2"></i>
														Consectetur adipisicing Cupiditate!
													</a>
												</h4>
											</div>
											<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headignFive">
												<div class="panel-body">
												  <p>Each Comfort Keepers office utilizes a group of parental figures so that your care administration won't be hindered in the event that somebody becomes ill or takes some time off. In the event that your Comfort Keeper is inaccessible, the Client Care Coordinator will organize another parental figure and will reach you ahead of time of the change.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							 </div>
						</div>
						<div class="col-sm-12 col-md-7 col-lg-4">
							<div class="ulockd-about-ondetials">
								<h2>About Our <span class="text-thm">Mission</span></h2>
								<p>we additionally paintings very closely with our community healthcare group who provide antenatal, postnatal and nursing services and different specialist provision inclusive of the quitters scheme.This 24 month benefit covers all ranges of basic upkeep.</p>
								<button type="submit" class="btn btn-lg ulockd-btn-thm">Read More</button>
								<h3>About Our <span class="text-thm">History</span></h3>
								<p class="ulockd-abt-ondtls-para">Comfort Home Start This Programm In The Year 1990. sit amet, consectetur adipisicing elit. Blanditiis laboriosam nam, nisi vel aut suscipit!.</p>
								<button type="submit" class="btn btn-lg ulockd-btn-thm">Read More</button>
							</div>
						</div>
					</div>
				</div>
			</section>
		

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
				@foreach ($data as $info)
				@if($info->type =='lost')
					<div class="item">
						<div class="ulockd-fservice-box text-right hvr-float-shadow">
							<div class="db-thumb">
									<img class="img-responsive img-whp" src="{{asset('public/uploads/'.$info->image)}}"  alt="image" height="100" width="150">
								<div class="db-overlayer"><span title="Feature Service Icon" class="fas fa-frown"></span></div>
							</div>
							<div class="db-details">
								<h4>{{ $info->name }}</h4>
								<p>{{ $info->notes }}</p>
								<button type="submit" class="btn btn-default ulockd-btn-thm">قراءه المزيد</button>
							</div>
						</div>
					</div>
					@endif
					@endforeach	
					
				
				
					
				</div>
			</div>
		</div>
	</section>

	<!-- Our First Divider -->
	<section class="ulockd-frst-divider style1 parallax" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="ulockd-ffact-one">
						
                        <p>اطفال عادت الي اهلها</p>
                        <div class="timer">0</div>
					</div>						
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="ulockd-ffact-one">
						
                        <p>تم العثور عليهم</p>
                        <div class="timer">{{ $countfound }}</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="ulockd-ffact-one">
						
                        <p>مفقودين</p>
                        <div class="timer">{{ $countlost }}</div>
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
					@foreach ($data as $info)
					@if($info->type =='found')
						<div class="item">
							<div class="ulockd-fservice-box text-right hvr-float-shadow">
								<div class="db-thumb">
										<img class="img-responsive img-whp" src="{{asset('public/uploads/'.$info->image)}}"  alt="image" height="100" width="150">
									<div class="db-overlayer"><span title="Feature Service Icon" class="fas fa-frown"></span></div>
								</div>
								<div class="db-details">
									<h4>{{ $info->name }}</h4>
									<p>{{ $info->notes }}</p>
									<button type="submit" class="btn btn-default ulockd-btn-thm">قراءه المزيد</button>
								</div>
							</div>
						</div>
						@endif
						@endforeach	
						
					
					
						
					</div>
				</div>
			</div>
		</section>
	

	

	
@endsection