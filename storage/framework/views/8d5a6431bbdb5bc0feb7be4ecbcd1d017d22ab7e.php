<!DOCTYPE html>
<html dir="rtl" lang="ar">

<!-- Mirrored from unlockdesizn.com/html/health-and-beauty/comfort-home/demo/index-multipage.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jul 2019 13:30:51 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="assisted living, activities, care services, dementia care, elderly care, doctor, health, health care, hospital, medical template, nursing home, old care, retail, senior, service etc">
<meta name="unlockdesign" content="SaniulHassan">
<!-- css file -->
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/front/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/front/css/all-plugins.css">
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/front/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal&display=swap">
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/front/vendor/s-customizer/css/colors/default.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/front/css/responsive.css">

<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/front/css/mystyle.css">
<!-- Title -->
<title>Comfort Home - Old & Health Care HTML Template</title>
<!-- Favicon -->
<link href="<?php echo e(url('/')); ?>/public/front/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo e(url('/')); ?>/public/front/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=" ttps://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div id="preloader" class="preloader">
            <div id="pre" class="preloader_container"><div class="preloader_disabler btn btn-default">Disable Preloader</div></div>
        </div>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="ulockd-social-linked">
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.weatherford.com/"><i class="fa fa-rss"></i></a></li>
                        <li><a href="https://www.google.com/"><i class="fa fa-google"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <?php if(Auth::check()): ?>
            <div class="col-md-4">
                <div class="ulockd-welcm-ht text-center">
                    <p class="ulockd-welcntxt">   <?php echo e(ucfirst(Auth::user()->name)); ?> مرحبا بك</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ulockd-welcm-ht text-right">
                <ul>
                <li>
                <a data-toggle="tooltip" data-placement="top" title="Logout"  href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        تسجيل خروج
                    </a>    
                    <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
                </ul>
                <?php else: ?>
            
                <ul>
                    <li>
                        <a href="#">
                            <div data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo"><i class="fa fa-user"></i> تسجيل الدخول | <i class="fa fa-edit"></i> حساب جديد</div>
                        </a>
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center" id="exampleModalLabel">تسجيل الدخول او حساب جديد</h4>
                                        <p class="text-center">سجل الدخول لتستمتع بجميع الخدمات</p>
                                    </div>
                                    <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-5 text-center hvr-float-shadow">
                                                <form class="ulockd-login-form" method="POST" action="<?php echo e(route('login')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <h3><span class="flaticon-lock"></span> تسجيل الدخول</h3>
                                                    <p>اكتب اسمك و الرقم السري</p>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكتروني">
                                                            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </span>
                                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" class="form-control" placeholder="الرقم السري">
                                                    </div>
                                                    <button type="submit" class="btn btn-default ulockd-btn-styledark">تسجيل الدخول الي الصفحه</button>
                                                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                </form>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-7 hvr-float-shadow">
                                                <form class="ulockd-reg-form text-center" method="POST" action="<?php echo e(route('registerfront.store')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <h3> <span class="flaticon-house-key"></span> تسجيل</h3>
                                                    <p>انضم الي مجتمعنا</p>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" id="exampleInputNamex" placeholder="الاسم الاول">
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="exampleInputEmailx" placeholder="البريد الالكتروني">
                                                    </div>
                                                    <div class="form-group">
                                                            <input type="text" class="form-control" name="telephone" id="exampleInputTelxx" placeholder="رقم التليفون">
                                                        </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="password" placeholder="الرقم السري">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="اعاده الرقم السري">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="permission" value="user" class="form-control" >
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit" class="btn btn-default ulockd-btn-styledark">تسجيل</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>	
                                    </div>
                                    <!-- modal footer start here-->
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
             <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>  


<div class="header-middle">
<div class="container">
    <div class="row">
        
        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
        <div class="ulockd-ohour-info style2">
            <div class="ulockd-icon pull-right"><i class="fas fa-grin-hearts"></i></div>
            <div class="ulockd-info">
                <h3><a href="<?php echo e(url('findchild/create')); ?>">  طفل تم العثور عليه </h3>
                
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
        <div class="ulockd-ohour-info style2">
            <div class="ulockd-icon pull-right"><i class="fas fa-frown"></i></div>
            <div class="ulockd-info">
                <h3><a href="<?php echo e(url('lostchild/create')); ?>">طفل مفقود </h3>
                
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
        <div class="ulockd-ohour-info style2">
            <div class="ulockd-icon pull-right"><span class="flaticon-old-handphone"></span></div>
            <div class="ulockd-info">
                <h3>اتصل بنا</h3>
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
                <div class="ulockd-welcm-hmddl">
                <a href="<?php echo e(url('home')); ?>" class="ulockd-main-logo"><img src="<?php echo e(url('/')); ?>/public/front/images/header-logo.png" alt=""></a>
                </div>
        </div>
    </div>
</div>
</div>


	<!-- Header Styles -->
	<header class="header-nav">
            <div class="main-header-nav navbar-scrolltofixed">
                <div class="container">
                    <nav class="navbar navbar-default bootsnav ulockd-menu-style1 light-blue">
                        <!-- Start Top Search -->
                        <div class="top-search">
                            <div class="container">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Top Search -->
    
                        <div class="container ulockd-padd90">
                            <!-- Start Atribute Navigation -->
                            <div class="attr-nav">
                                <ul>
                                  
                                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Atribute Navigation -->
    
                            <!-- Start Header Navigation -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <!-- End Header Navigation -->
    
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbar-menu">
                                <ul class="nav navbar-nav navbar-right" data-in="fadeIn">
                                    
                                    <li>
                                        <a href="<?php echo e(url('/contactus')); ?>" class="dropdown-toggle" data-toggle="dropdown">اتصل بنا</a>
                                        
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('/findchild')); ?>" class="dropdown-toggle" data-toggle="dropdown">تم العثور عليهم</a>
                                        
                                            </li>
                                            
                                    <li >
                                        <a href="<?php echo e(url('/lostchild')); ?>" class="dropdown-toggle" data-toggle="dropdown">مفقودين</a>
                                        
                                    </li> 
                                    <li >
                                        <a href="<?php echo e(url('home')); ?>" class="dropdown-toggle" data-toggle="dropdown">الرئيسيه</a>
                                        
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
    
                        <!-- Start Side Menu -->
                        <div class="side ulockd-bgthm">
                            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                            <div class="widget">
                                <h4 class="title">Custom Pages</h4>
                                <ul class="link">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="title">Additional Links</h4>
                                <ul class="link">
                                    <li><a href="#">Retina Homepage</a></li>
                                    <li><a href="#">New Page Examples</a></li>
                                    <li><a href="#">Parallax Sections</a></li>
                                    <li><a href="#">Shortcode Central</a></li>
                                    <li><a href="#">Ultimate Font Collection</a></li>
                                    <li><img title="Facebook Feed With Client File" class="img-responsive ulockd-mrgn1210" src="images/resource/image3.png" alt="image3.png"></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Side Menu -->
                        
                    </nav>
                </div>
            </div>		
        </header>

<?php echo $__env->yieldContent('content'); ?>

<!-- Our Footer -->
<section class="ulockd-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="ulockd-footer-widget">
    					<img alt="footer-logo.png" src="<?php echo e(url('/')); ?>/public/front/images/footer-logo.png" class="img-responsive ulockd-footer-log">
    					<p class="ulockd-ftr-text">Regardless of whether you need to stay in your own house, are searching for help with a more established relative, looking for exhortation on paying for care, we can help you.</p>
    				</div>
    				<div class="ulockd-footer-newsletter">
    					<h4 class="title text-uppercase">News Letter</h4>
		                <form class="ulockd-mailchimp">
		                    <div class="input-group">
			                    <input type="email" class="form-control input-md" placeholder="Your email" name="EMAIL" value="">
			                    <span class="input-group-btn">
			                        <button type="submit" class="btn btn-md"><i class="icon flaticon-right-arrow"></i></button>
			                    </span>
		                    </div>
		                </form>
    				</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="ulockd-footer-lnews">
						<h3 class="text-uppercase">Latest News</h3>
						<div class="ulockd-media-box">
							<div class="media">
							  <div class="media-right pull-right">
							    <a class="thumbnail" href="#">
							      <img class="media-object" src="<?php echo e(url('/')); ?>/public/front/images/blog/s1.jpg" alt="s1.jpg">
							    </a>
							  </div>
							  <div class="media-body">
								<a href="#" class="post-date">21 January, 2017</a>
							    <h4 class="media-heading">Let's Move Blog</h4>
							    <p>Notice test for Alzheimer's conclusion steps nearer...</p>
							  </div>
							</div>
							<div class="media">
							  <div class="media-right pull-right">
							    <a class="thumbnail" href="#">
							      <img class="media-object" src="<?php echo e(url('/')); ?>/public/front/images/blog/s2.jpg" alt="s2.jpg">
							    </a>
							  </div>
							  <div class="media-body">
								<a href="#" class="post-date">21 January, 2017</a>
							    <h4 class="media-heading">Let's Move Blog</h4>
							    <p>Notice test for Alzheimer's conclusion steps nearer...</p>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
					<div class="footer-qlink">
						<h3 class="text-uppercase">NAVIGATION</h3>
						<ul class="list-unstyled">
							<li> <span class="flaticon-checked-mark text-thm"></span> <a href="#"> About Us</a></li>
							<li> <span class="flaticon-checked-mark text-thm"></span> <a href="#"> Appointment</a></li>
							<li> <span class="flaticon-checked-mark text-thm"></span> <a href="#"> Help Center</a></li>
							<li> <span class="flaticon-checked-mark text-thm"></span> <a href="#"> Our Services</a></li>
							<li> <span class="flaticon-checked-mark text-thm"></span> <a href="#"> Sitemap</a></li>
							<li> <span class="flaticon-checked-mark text-thm"></span> <a href="#"> Team Details</a></li>
							<li> <span class="flaticon-checked-mark text-thm"></span> <a href="#"> Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4">
					<div class="flickr-widget">
						<h3 class="text-uppercase">Flickr Feed</h3>
						<ul class="list-inline">
							<li>
								<div class="thumb">
									<img alt="flckr1.jpg" src="<?php echo e(url('/')); ?>/public/front/images/gallery/flckr1.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="<?php echo e(url('/')); ?>/public/front/images/gallery/flckr2.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="<?php echo e(url('/')); ?>/public/front/images/gallery/flckr3.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="<?php echo e(url('/')); ?>/public/front/images/gallery/flckr4.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="<?php echo e(url('/')); ?>/public/front/images/gallery/flckr5.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="<?php echo e(url('/')); ?>/public/front/images/gallery/flckr6.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our CopyRight Section -->
	<section class="copyrights">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>جميع الحقوق محفوظه لشركه بلوسوفتيك @2019</p>
					<ul class="list-inline ulockd-footer-font-icon ulockd-mrgn1215">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-feed"></i></a></li>
						<li><a href="#"><i class="fa fa-google"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/bootsnav.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/parallax.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/scrollto.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/gallery.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/slider.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/video-player.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/timepicker.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/tweetie.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/front/js/script.js"></script>
</body>

<!-- Mirrored from unlockdesizn.com/html/health-and-beauty/comfort-home/demo/index-multipage.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jul 2019 13:32:28 GMT -->
</html>
<?php /**PATH D:\wamp\www\ShoofToday\resources\views/front/layouts/main.blade.php ENDPATH**/ ?>