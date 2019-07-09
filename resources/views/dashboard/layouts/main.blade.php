<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


<title>{{ config('app.name', 'AppDashboard') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <!-- Bootstrap -->
    <link href="{{url('/')}}/public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/')}}/public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/')}}/public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('/')}}/public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{url('/')}}/public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('/')}}/public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('/')}}/public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('/')}}/public/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title">
              <a href="{{url('dashboard/')}}" class="site_title"><i class='fa fa-camera' ></i><span>App dashboard</span></a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
             </form>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('/')}}/public/images/user1.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ ucfirst(Auth::user()->name) }}</h2> 
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{url('dashboard/')}}"><i class='fa fa-home' ></i> Dashboard</span></a> </li>

                  <li><a href="{{url('dashboard/categories/')}}"><i class="fa fa-object-group"></i></i>Categories</span></a> </li>

                  <li><a href="{{url('dashboard/info/')}}"><i class="fa fa-info-circle"></i>Data</span></a> </li>

       
                </ul>
              </div>
              
              <div class="menu_section">
                  <h3>App Options</h3>
                  
                  <ul class="nav side-menu">                 
                    <li><a href="{{url('dashboard/options/')}}"><i class="fa fa-edit"></i> Options</span></a> </li>
                                 
                  <li>
                    <a href="{{url('dashboard/users/')}}"><i class="fa fa-user"></i> Users </a>
                   
                    </li>

                     <li>
                    <a href="{{url('dashboard/cities/')}}"><i class="fa fa-map-marker"></i> Cities </a>
                   
                    </li>
                  </ul>
                </div>

                <div class="menu_section">
                 <ul class="nav side-menu">                 
                    <li>
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">  <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                      </a>

                   </li>
                  </ul>
                </div>

                   
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{url('/')}}/public/images/user1.png" alt="">
                    {{ ucfirst(Auth::user()->name) }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                   <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                      Logout  </a>    
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
             
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{url('/')}}/public/images/user1.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{url('/')}}/public/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

        @yield('content')

        </div>
        <!-- /page content -->


        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{url('/')}}/public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('/')}}/public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('/')}}/public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{url('/')}}/public/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{url('/')}}/public/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{url('/')}}/public/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('/')}}/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{url('/')}}/public/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{url('/')}}/public/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{url('/')}}/public/vendors/Flot/jquery.flot.js"></script>
    <script src="{{url('/')}}/public/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{url('/')}}/public/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{url('/')}}/public/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{url('/')}}/public/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{url('/')}}/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{url('/')}}/public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{url('/')}}/public/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{url('/')}}/public/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{url('/')}}/public/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{url('/')}}/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{url('/')}}/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('/')}}/public/vendors/moment/min/moment.min.js"></script>
    <script src="{{url('/')}}/public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{url('/')}}/public/build/js/custom.min.js"></script>
	
  </body>
</html>
