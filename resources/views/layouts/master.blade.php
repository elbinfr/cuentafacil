<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>CuentaFacil | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('plugins/template/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/toastr/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('plugins/template/vendors/dataTables/datatables.min.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('plugins/template/css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="">
<div class="page-wrapper">
    <!-- START HEADER-->
    <header class="header">
        <div class="header-topbar">
            <div class="wrapper d-flex">
                <div class="page-brand">
                    <a class="link" href="index.html">
                            <span class="brand">Cuenta
                                <span class="brand-tip">F&aacute;cil</span>
                            </span>
                    </a>
                </div>
                <div class="d-flex justify-content-between align-items-center flex-1">
                    <!-- START TOP-LEFT TOOLBAR-->
                    <ul class="nav navbar-toolbar">
                        <li>
                            <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- END TOP-LEFT TOOLBAR-->
                    <!-- START TOP-RIGHT TOOLBAR-->
                    <ul class="nav navbar-toolbar">
                        <li class="dropdown dropdown-notification">
                            <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-bell rel"><span class="notify-signal"></span></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                <div class="dropdown-arrow"></div>
                                <div class="dropdown-header text-center">
                                    <div>
                                        <span class="font-18"><strong>14 New</strong> Notifications</span>
                                    </div>
                                    <a class="text-muted font-13" href="javascript:;">view all</a>
                                </div>
                                <div class="p-3">
                                    <ul class="timeline scroller" data-height="320px">
                                        <li class="timeline-item"><i class="ti-check timeline-icon"></i>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                        <li class="timeline-item"><i class="ti-truck timeline-icon"></i>25 new orders sent<small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                                        <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>
                                            <span>Server Error
                                                    <span class="badge badge-success badge-pill ml-2">resolved</span>
                                                </span><small class="float-right text-muted">2 hrs</small>
                                        </li>
                                        <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>
                                            <span>System Warning
                                                    <a class="text-purple ml-2">Check</a>
                                                </span><small class="float-right text-muted ml-2 nowrap">12:07</small>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user">
                            @include('layouts.user')
                        </li>
                    </ul>
                    <!-- END TOP-RIGHT TOOLBAR-->
                    <!-- START SEARCH PANEL-->
                </div>
            </div>
        </div>
        <!-- START MENU ----------------------------------------------------------------------------------------->
        <div class="top-navbar">
            <div class="wrapper" id="navbar-wrapper">
                <ul class="nav-menu">
                    @include('layouts.menu')
                </ul>
            </div>
        </div>
        <!-- END MENU -------------------------------------------------------------------------------------------->
    </header>
    <!-- END HEADER-->
    <div class="wrapper content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title"></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item">Datatables</li>
            </ol>
        </div>
        <div class="page-content fade-in-up min-h-content">
            @yield('main')
        </div>
        <!-- END PAGE CONTENT-->
        <footer class="page-footer">
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    </div>
</div>

<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<!-- END PAGA BACKDROPS-->

<!-- CORE PLUGINS-->
<script src="{{ asset('plugins/template/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/jquery-idletimer/dist/idle-timer.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<!-- PAGE LEVEL PLUGINS-->
@yield('script-plugins')
<!-- CORE SCRIPTS-->
<script src="{{ asset('plugins/template/js/app.min.js') }}"></script>
<!-- PAGE LEVEL SCRIPTS-->
@yield('script')
</body>

</html>