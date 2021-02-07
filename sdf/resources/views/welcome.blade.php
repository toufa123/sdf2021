<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title>SDF WebApplication | Zircos - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon(asset('favicon-32x32.png')) }}">
    <link rel="shortcut icon" href="{{ favicon(asset('favicon.ico')) }}"/>

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet"/>
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet"/>

</head>

<body data-layout="horizontal">

<!-- Begin page -->
<div id="wrapper">

    <!-- Navigation Bar-->
    <header id="topnav">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-2" height="12"> <span
                                class="text-white align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/french.jpg" alt="user-image" class="mr-2" height="12">
                                <span class="align-middle">Français</span>
                            </a>


                        </div>
                    </li>

                    <li class="dropdown d-none d-lg-block">


                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                                       data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                       aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-image"
                                             class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome !</h6>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-outline"></i>
                                            <span>Profile</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-settings-outline"></i>
                                            <span>Settings</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lock-outline"></i>
                                            <span>Lock Screen</span>
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-logout-variant"></i>
                                            <span>Logout</span>
                                        </a>

                                    </div>
                                @else
                                    <a class="nav-link text-white waves-effect waves-light float-right"
                                       href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>

                                    @if (Route::has('register'))
                                        <a class="nav-link text-white waves-effect waves-light float-right"
                                           href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </li>


                    <!--<li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li>-->
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/SPARAC white.png')}}" alt="" height="55">
                                        <!-- <span class="logo-lg-text-light">Zircos</span> -->
                                    </span>
                        <span class="logo-sm">
                                        <!-- <span class="logo-sm-text-dark">Z</span> -->
                                        <img src="{{asset('assets/images/SPARAC white.png')}}" alt="" height="40">
                                    </span>
                    </a>
                </div>


                <!--<ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>-->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-home"></i>Home</a>
                            <!--<ul class="submenu">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="dashboard_2.html">Dashboard 2</a></li>
                            </ul>-->
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-view-dashboard"></i>Dashboard
                            </a>
                            <ul class="submenu">
                                <li><a href="#">Mediterranean Level</a></li>
                                <li><a href="#">National Level</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-database"></i>SDF Listing
                            </a>
                            <ul class="submenu">
                                <li><a href="#"><i class="mdi mdi-clipboard-list"></i> SDF List</a></li>
                                <li><a href="" admin-widgets.html""><i class="mdi mdi-map"></i> SDF Map</a></li>
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="#"> <i class="mdi mdi-email"></i>Contact US
                            </a>
                            <!--<ul class="submenu">
                                <li><a href="layouts-vertical.html">Vertical</a></li>
                                <li><a href="layouts-topbar-light.html">Topbar Light</a></li>
                                <li><a href="layouts-center-menu.html">Center Menu</a></li>
                                <li><a href="layouts-normal-header.html">Unsticky Header</a></li>
                            </ul>-->
                        </li>

                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Zircos</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Real Estate </a></li>
                                    <li class="breadcrumb-item active">Starter</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Starter page</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @yield('content')
            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->


        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2010 - 2023 &copy; SDF webApplication by <a href="">UNEP-MAP-SPA/RAC</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h4 class="font-16 m-0 text-white">Help</h4>
    </div>
    <div class="slimscroll-menu">

        <div class="p-4">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, layout, etc.
            </div>
            <div class="mb-2">
                <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked/>
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                       data-bsStyle="assets/css/bootstrap-dark.min.css"
                       data-appStyle="assets/css/app-dark.min.css"/>
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                       data-appStyle="assets/css/app-rtl.min.css"/>
                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/dark-rtl.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch"
                       data-bsStyle="assets/css/bootstrap-dark.min.css"
                       data-appStyle="assets/css/app-dark-rtl.min.css"/>
                <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
            </div>

            <a href="https://1.envato.market/eKY0g" class="btn btn-danger btn-block mt-3" target="_blank"><i
                    class="mdi mdi-download mr-1"></i> Download Now</a>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
    <i class="mdi mdi-settings-outline mdi-help"></i> &nbsp;Help
</a>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>

</html>
