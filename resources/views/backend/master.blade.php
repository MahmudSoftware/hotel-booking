<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="images/favicon_1.ico">
        <title>Hotel Reservation</title>

        <!-- Base Css Files -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('backend/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('backend/css/waves-effect.css') }}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ asset('backend/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('backend/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css" />
        @stack('style')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('backend/js/modernizr.min.js') }}"></script>
        
    </head>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="logo"><i class="md md-terrain"></i> <span>My Hotel </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('backend/images/avatar-1.jpg') }}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>

                                        
                                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

          @include('backend.sidebar')
        </div>

        
@yield('main')

<footer class="footer text-right">
    2015 © Moltran.
</footer>
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/waves.js') }}"></script>
<script src="{{ asset('backend/js/wow.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('backend/assets/chat/moment-2.2.1.js') }}"></script>
<script src="{{ asset('backend/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('backend/assets/jquery-detectmobile/detect.js') }}"></script>
<script src="{{ asset('backend/assets/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('backend/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('backend/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

<!-- sweet alerts -->
<script src="{{ asset('backend/assets/sweet-alert/sweet-alert.min.js') }}"></script>
<script src="{{ asset('backend/assets/sweet-alert/sweet-alert.init.js') }}"></script>

<!-- flot Chart -->
<script src="{{ asset('backend/assets/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('backend/assets/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('backend/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('backend/assets/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('backend/assets/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('backend/assets/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('backend/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

<!-- Counter-up -->
<script src="{{ asset('backend/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('backend/js/jquery.app.js') }}"></script>

<!-- Dashboard -->
<script src="{{ asset('backend/js/jquery.dashboard.js') }}"></script>

<!-- Chat -->
<script src="{{ asset('backend/js/jquery.chat.js') }}"></script>

<!-- Todo -->
<script src="{{ asset('backend/js/jquery.todo.js') }}"></script>

<script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>

@stack('js')

<script type="text/javascript">
    /* ==============================================
    Counter Up
    =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>

</body>
</html>