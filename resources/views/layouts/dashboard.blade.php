<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/plugins/images/favicon.png">
    <title>Ample Blog Site</title>
    <!-- Bootstrap Core CSS -->
    <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="/home">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="/assets/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/assets/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="/assets/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="/assets/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form method="post" action="/dashboard/post/search" role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input name="search" type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="/assets/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ucfirst($usrData->username)}}</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="/dashboard" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="/dashboard/profile" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="{{route('post.list')}}" class="waves-effect"><i class="fa  fa-file-powerpoint-o fa-fw" aria-hidden="true"></i>Post</a>
                    </li>

                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="waves-effect"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i>Logout</a>
                    </li>


                </ul>
                
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            @yield('container-fluid');
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/assets/js/waves.js"></script>
    <!--Counter js -->
    <script src="/assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="/assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="/assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="/assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/assets/js/custom.min.js"></script>
    <script src="/assets/js/dashboard1.js"></script>
    <script src="/assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
