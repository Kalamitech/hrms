<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="KHRMS is super flexible, powerful, clean &amp; modern web application for human resource management.">
        <meta name="keywords" content="human resource management, payroll, loans">
        <meta name="author" content="Kalami Tech">
        <title>{{ config('app.name') }} - @yield('page-title')</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon-32.png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/cryptocoins/cryptocoins.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

        <!-- BEGIN: Header-->
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item" >
                            <a class="navbar-brand" href="admin/index">
                                <img class="brand-logo" alt="KHRMS Icon" style="height:40px; width:auto" src="../../../app-assets/images/logo/icon.png">
                                <h3 class="brand-text">K H R M S</h3>
                            </a>
                        </li>
                        <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                    </ul>
                </div>
                <div class="navbar-container content">
                    <div class="collapse navbar-collapse" id="navbar-mobile">
                        <ul class="nav navbar-nav mr-auto float-left">
                            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="admin/change-password"><i class="ft-lock"></i> Change Password</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="ft-power"></i> Logout</a>
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->


        <!-- BEGIN: Main Menu-->

        <div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
            <div class="main-menu-content">
                    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="border-radius: 30px;">
                        <li class="nav-item">
                            <a href="admin/dashboard">
                                <i class="la la-dashboard"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title">Employees</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="admin/add-employee">
                                        <span>Add Employee</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/employee-listings">
                                        <span>Employee Listings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/employee-upload">
                                        <span>Employee Bank Details</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/employee-upload">
                                        <span>Employee Upload</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href=""><i class="la la-users"></i><span class="menu-title">Teams</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="admin/add-team">
                                        <span>Add Team</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/team-listings">
                                        <span>Team Listings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href=""><i class="la la-suitcase"></i><span class="menu-title">Roles</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="admin/add-role">
                                        <span>Add Role</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/role-listings">
                                        <span>Role Listings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href=""><i class="la la-plane"></i><span class="menu-title">Leaves</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="admin/add-leave-type">
                                        <span>Add Leave Type</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/my-leave-list">
                                        <span>My Leave List</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/apply-leave">
                                        <span>Apply Leave</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/leave-type-listings">
                                        <span>Leave Type Listings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/total-leave-listings">
                                        <span>Total Leave Listings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href=""><i class="la la-level-up"></i><span class="menu-title">Promotions</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="admin/promote">
                                        <span>Promote</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/promotion-listings">
                                        <span>Promotion Listings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href=""><i class="la la-trophy"></i><span class="menu-title">Awards</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="admin/add-award">
                                        <span>Add Award</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/award-listings">
                                        <span>Award Listings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/award-listings">
                                        <span>Awardees</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/award-listings">
                                        <span>Awardee Listings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href=""><i class="la la-graduation-cap"></i><span class="menu-title">Trainings</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="admin/promote">
                                        <span>Add Training Program</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/promotion-listings">
                                        <span>Program Listings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/promotion-listings">
                                        <span>Training Invite</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/promotion-listings">
                                        <span>Invitation Listings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href=""><i class="la la-hotel"></i><span class="menu-title">Holidays</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="admin/promote">
                                        <span>Promote</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-item" href="admin/promotion-listings">
                                        <span>Promotion Listings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="admin/meeting-invitation">
                                <i class="la la-calendar"></i>
                                <span class="menu-title">Meeting Invitation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/event-invitation">
                                <i class="la la-calendar"></i>
                                <span class="menu-title">Event Invitation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/company-forms">
                                <i class="la la-book"></i>
                                <span class="menu-title">Company Forms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin/company-policy">
                                <i class="la la-gavel"></i>
                                <span class="menu-title">Company Policy</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>

        <!-- END: Main Menu-->
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row mb-1">
                </div>
                <div class="content-body">
                    @yield('content-body')
                </div>
            </div>
        </div>
        <!-- END: Content-->

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light navbar-border navbar-shadow">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://kalami.tech" target="_blank">Kalami Tech</a></span></span></p>
        </footer>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="../../../app-assets/vendors/js/charts/chart.min.js"></script>
        <script src="../../../app-assets/vendors/js/charts/echarts/echarts.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="../../../app-assets/js/core/app-menu.js"></script>
        <script src="../../../app-assets/js/core/app.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="../../../app-assets/js/scripts/pages/dashboard-crypto.js"></script>
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->

</html>