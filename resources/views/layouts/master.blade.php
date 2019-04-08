<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="KHRMS is super flexible, powerful, clean &amp; modern web application for human resource management.">
        <meta name="keywords" content="human resource management, payroll, loans">
        <meta name="author" content="Kalami Tech">
        <title>KHRMS - @yield('page-title')</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon-32.png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/fonts/meteocons/style.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-content-menu.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
        <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    {{-- <body class="vertical-layout vertical-content-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns"> --}}
        @yield('body-header-tag')

        <!-- BEGIN: Header-->
        <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-hide-on-scroll navbar-border navbar-shadow navbar-brand-center">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="modern admin logo" src="app-assets/images/logo/logo.png">
                            </a></li>
                        <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                    </ul>
                </div>
                <div class="navbar-container content">
                    <div class="collapse navbar-collapse" id="navbar-mobile">
                        <ul class="nav navbar-nav mr-auto float-left">
                            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading red darken-1">99% Server load</h6>
                                                    <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Complete the task</h6><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Generate monthly report</h6><small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span class="avatar avatar-online"><img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row mb-1">
                </div>

                <!-- BEGIN: Main Menu-->

                <div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
                    <div class="main-menu-content">
                        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                            <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                                <ul class="menu-content">
                                    <li class="active"><a class="menu-item" href="dashboard-ecommerce.html"><i></i><span data-i18n="nav.dash.ecommerce">eCommerce</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dashboard-crypto.html"><i></i><span data-i18n="nav.dash.crypto">Crypto</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dashboard-sales.html"><i></i><span data-i18n="nav.dash.sales">Sales</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Templates</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.templates.vert.main">Vertical</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="../vertical-menu-template"><i></i><span data-i18n="nav.templates.vert.classic_menu">Classic Menu</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../vertical-modern-menu-template"><i></i><span>Modern Menu</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../vertical-compact-menu-template"><i></i><span data-i18n="nav.templates.vert.compact_menu">Compact Menu</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../vertical-content-menu-template"><i></i><span data-i18n="nav.templates.vert.content_menu">Content Menu</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../vertical-overlay-menu-template"><i></i><span data-i18n="nav.templates.vert.overlay_menu">Overlay Menu</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.templates.horz.main">Horizontal</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="../horizontal-menu-template"><i></i><span data-i18n="nav.templates.horz.classic">Classic</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../horizontal-menu-template-nav"><i></i><span data-i18n="nav.templates.horz.top_icon">Full Width</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.admin-panels">Admin Panels</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Admin Panels"></i>
                            </li>
                            <li class=" nav-item"><a href="../ecommerce-menu-template"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="">eCommerce</span></a>
                            </li>
                            <li class=" nav-item"><a href="../travel-menu-template"><i class="la la-plane"></i><span class="menu-title" data-i18n="">Travel &amp; Booking</span></a>
                            </li>
                            <li class=" nav-item"><a href="../hospital-menu-template"><i class="la la-stethoscope"></i><span class="menu-title" data-i18n="">Hospital</span></a>
                            </li>
                            <li class=" nav-item"><a href="../crypto-menu-template"><i class="la la-bitcoin"></i><span class="menu-title" data-i18n="">Crypto</span></a>
                            </li>
                            <li class=" nav-item"><a href="../support-menu-template"><i class="la la-tag"></i><span class="menu-title" data-i18n="">Support Ticket</span></a>
                            </li>
                            <li class=" nav-item"><a href="../bank-menu-template"><i class="la la-bank"></i><span class="menu-title" data-i18n="">Bank</span></a>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.apps">Apps</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Apps"></i>
                            </li>
                            <li class=" nav-item"><a href="scrumboard.html"><i class="la la-edit"></i><span class="menu-title" data-i18n="nav.scrumboard.main">Scrumboard</span><span class="badge badge badge-info float-right">Update</span></a>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title" data-i18n="nav.event_calendars.main">Calendars</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.event_calendars.full_calender.main">Full Calendar</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="full-calender-basic.html"><i></i><span data-i18n="nav.event_calendars.full_calender.full_calender_basic">Basic</span></a>
                                            </li>
                                            <li><a class="menu-item" href="full-calender-events.html"><i></i><span data-i18n="nav.event_calendars.full_calender.full_calender_events">Events</span></a>
                                            </li>
                                            <li><a class="menu-item" href="full-calender-advance.html"><i></i><span data-i18n="nav.event_calendars.full_calender.full_calender_advance">Advance</span></a>
                                            </li>
                                            <li><a class="menu-item" href="full-calender-extra.html"><i></i><span data-i18n="nav.event_calendars.full_calender.full_calender_extra">Extra</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="calendars-clndr.html"><i></i><span data-i18n="nav.event_calendars.calendars_clndr">CLNDR</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.pages">Pages</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Pages"></i>
                            </li>
                            <li class=" nav-item"><a href="news-feed.html"><i class="la la-newspaper-o"></i><span class="menu-title" data-i18n="">News Feed</span></a>
                            </li>
                            <li class=" nav-item"><a href="social-feed.html"><i class="la la-share-alt"></i><span class="menu-title" data-i18n="">Social Feed</span></a>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.invoice.main">Invoice</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="invoice-summary.html"><i></i><span data-i18n="nav.invoice.invoice_summary">Invoice Summary</span></a>
                                    </li>
                                    <li><a class="menu-item" href="invoice-template.html"><i></i><span data-i18n="nav.invoice.invoice_template">Invoice Template</span></a>
                                    </li>
                                    <li><a class="menu-item" href="invoice-list.html"><i></i><span data-i18n="nav.invoice.invoice_list">Invoice List</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-film"></i><span class="menu-title" data-i18n="nav.timelines.main">Timelines</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="timeline-center.html"><i></i><span data-i18n="nav.timelines.timeline_center">Timelines Center</span></a>
                                    </li>
                                    <li><a class="menu-item" href="timeline-left.html"><i></i><span data-i18n="nav.timelines.timeline_left">Timelines Left</span></a>
                                    </li>
                                    <li><a class="menu-item" href="timeline-right.html"><i></i><span data-i18n="nav.timelines.timeline_right">Timelines Right</span></a>
                                    </li>
                                    <li><a class="menu-item" href="timeline-horizontal.html"><i></i><span data-i18n="nav.timelines.timeline_horizontal">Timelines Horizontal</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.users.main">Users</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="user-profile.html"><i></i><span data-i18n="nav.users.user_profile">Users Profile</span></a>
                                    </li>
                                    <li><a class="menu-item" href="user-cards.html"><i></i><span data-i18n="nav.users.user_cards">Users Cards</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.gallery_pages.main">Gallery</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="gallery-grid.html"><i></i><span data-i18n="nav.gallery_pages.gallery_grid">Gallery Grid</span></a>
                                    </li>
                                    <li><a class="menu-item" href="gallery-grid-with-desc.html"><i></i><span data-i18n="nav.gallery_pages.gallery_grid_with_desc">Gallery Grid with Desc</span></a>
                                    </li>
                                    <li><a class="menu-item" href="gallery-masonry.html"><i></i><span data-i18n="nav.gallery_pages.gallery_masonry">Masonry Gallery</span></a>
                                    </li>
                                    <li><a class="menu-item" href="gallery-masonry-with-desc.html"><i></i><span data-i18n="nav.gallery_pages.gallery_masonry_with_desc">Masonry Gallery with Desc</span></a>
                                    </li>
                                    <li><a class="menu-item" href="gallery-hover-effects.html"><i></i><span data-i18n="nav.gallery_pages.gallery_hover_effects">Hover Effects</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-search"></i><span class="menu-title" data-i18n="nav.search_pages.main">Search</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="search-page.html"><i></i><span data-i18n="nav.search_pages.search_page">Search Page</span></a>
                                    </li>
                                    <li><a class="menu-item" href="search-website.html"><i></i><span data-i18n="nav.search_pages.search_website">Search Website</span></a>
                                    </li>
                                    <li><a class="menu-item" href="search-images.html"><i></i><span data-i18n="nav.search_pages.search_images">Search Images</span></a>
                                    </li>
                                    <li><a class="menu-item" href="search-videos.html"><i></i><span data-i18n="nav.search_pages.search_videos">Search Videos</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-unlock"></i><span class="menu-title" data-i18n="nav.login_register_pages.main">Authentication</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="login-simple.html"><i></i><span data-i18n="nav.login_register_pages.login_simple">Login Simple</span></a>
                                    </li>
                                    <li><a class="menu-item" href="login-with-bg.html"><i></i><span data-i18n="nav.login_register_pages.login_with_bg">Login with Bg</span></a>
                                    </li>
                                    <li><a class="menu-item" href="login-with-bg-image.html"><i></i><span data-i18n="nav.login_register_pages.login_with_bg_image">Login with Bg Image</span></a>
                                    </li>
                                    <li><a class="menu-item" href="login-with-navbar.html"><i></i><span data-i18n="nav.login_register_pages.login_with_navbar">Login with Navbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="login-advanced.html"><i></i><span data-i18n="nav.login_register_pages.login_advanced">Login Advanced</span></a>
                                    </li>
                                    <li><a class="menu-item" href="register-simple.html"><i></i><span data-i18n="nav.login_register_pages.register_simple">Register Simple</span></a>
                                    </li>
                                    <li><a class="menu-item" href="register-with-bg.html"><i></i><span data-i18n="nav.login_register_pages.register_with_bg">Register with Bg</span></a>
                                    </li>
                                    <li><a class="menu-item" href="register-with-bg-image.html"><i></i><span data-i18n="nav.login_register_pages.register_with_bg_image">Register with Bg Image</span></a>
                                    </li>
                                    <li><a class="menu-item" href="register-with-navbar.html"><i></i><span data-i18n="nav.login_register_pages.register_with_navbar">Register with Navbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="register-advanced.html"><i></i><span data-i18n="nav.login_register_pages.register_advanced">Register Advanced</span></a>
                                    </li>
                                    <li><a class="menu-item" href="unlock-user.html"><i></i><span data-i18n="nav.login_register_pages.unlock_user">Unlock User</span></a>
                                    </li>
                                    <li><a class="menu-item" href="recover-password.html"><i></i><span data-i18n="nav.login_register_pages.recover_password">recover-password</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-warning"></i><span class="menu-title" data-i18n="nav.error_pages.main">Error</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="error-400.html"><i></i><span data-i18n="nav.error_pages.error_400">Error 400</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-400-with-navbar.html"><i></i><span data-i18n="nav.error_pages.error_400_with_navbar">Error 400 with Navbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-401.html"><i></i><span data-i18n="nav.error_pages.error_401">Error 401</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-401-with-navbar.html"><i></i><span data-i18n="nav.error_pages.error_401_with_navbar">Error 401 with Navbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-403.html"><i></i><span data-i18n="nav.error_pages.error_403">Error 403</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-403-with-navbar.html"><i></i><span data-i18n="nav.error_pages.error_403_with_navbar">Error 403 with Navbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-404.html"><i></i><span data-i18n="nav.error_pages.error_404">Error 404</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-404-with-navbar.html"><i></i><span data-i18n="nav.error_pages.error_404_with_navbar">Error 404 with Navbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-500.html"><i></i><span data-i18n="nav.error_pages.error_500">Error 500</span></a>
                                    </li>
                                    <li><a class="menu-item" href="error-500-with-navbar.html"><i></i><span data-i18n="nav.error_pages.error_500_with_navbar">Error 500 with Navbar</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.other_pages.main">Others</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.other_pages.coming_soon.main">Coming Soon</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="coming-soon-flat.html"><i></i><span data-i18n="nav.other_pages.coming_soon.coming_soon_flat">Flat</span></a>
                                            </li>
                                            <li><a class="menu-item" href="coming-soon-bg-image.html"><i></i><span data-i18n="nav.other_pages.coming_soon.coming_soon_bg_image">Bg image</span></a>
                                            </li>
                                            <li><a class="menu-item" href="coming-soon-bg-video.html"><i></i><span data-i18n="nav.other_pages.coming_soon.coming_soon_bg_video">Bg video</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="under-maintenance.html"><i></i><span data-i18n="nav.other_pages.under_maintenance">Maintenance</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="pricing.html"><i class="la la-money"></i><span class="menu-title" data-i18n="">Pricing</span></a>
                            </li>
                            <li class=" nav-item"><a href="checkout-form.html"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="">Checkout</span></a>
                            </li>
                            <li class=" nav-item"><a href="faq.html"><i class="la la-question"></i><span class="menu-title" data-i18n="">FAQ</span></a>
                            </li>
                            <li class=" nav-item"><a href="knowledge-base.html"><i class="la la-database"></i><span class="menu-title" data-i18n="">Knowledge Base</span></a>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.layouts">Layouts</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Page layouts</span><span class="badge badge badge-pill badge-danger float-right mr-2">New</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="layout-1-column.html"><i></i><span data-i18n="nav.page_layouts.1_column">1 column</span></a>
                                    </li>
                                    <li><a class="menu-item" href="layout-2-columns.html"><i></i><span data-i18n="nav.page_layouts.2_columns">2 columns</span></a>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.page_layouts.3_columns.main">Content Sidebar</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="layout-content-right-sidebar.html"><i></i><span data-i18n="nav.page_layouts.3_columns.right_sidebar">Right sidebar</span></a>
                                            </li>
                                            <li><a class="menu-item" href="layout-content-right-sticky-sidebar.html"><i></i><span data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar">Right sticky sidebar</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.page_layouts.3_columns_detached.main">Content Det. Sidebar</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="layout-content-detached-right-sidebar.html"><i></i><span data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar">Detached right sidebar</span></a>
                                            </li>
                                            <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html"><i></i><span data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar">Detached sticky right sidebar</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="navigation-divider"></li>
                                    <li><a class="menu-item" href="layout-fixed-navbar.html"><i></i><span data-i18n="nav.page_layouts.fixed_navbar">Fixed navbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="layout-fixed-navigation.html"><i></i><span data-i18n="nav.page_layouts.fixed_navigation">Fixed navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="layout-fixed-navbar-navigation.html"><i></i><span data-i18n="nav.page_layouts.fixed_navbar_navigation">Fixed navbar &amp; navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="layout-fixed-navbar-footer.html"><i></i><span data-i18n="nav.page_layouts.fixed_navbar_footer">Fixed navbar &amp; footer</span></a>
                                    </li>
                                    <li class="navigation-divider"></li>
                                    <li><a class="menu-item" href="layout-fixed.html"><i></i><span data-i18n="nav.page_layouts.fixed_layout">Fixed layout</span></a>
                                    </li>
                                    <li><a class="menu-item" href="layout-boxed.html"><i></i><span data-i18n="nav.page_layouts.boxed_layout">Boxed layout</span></a>
                                    </li>
                                    <li><a class="menu-item" href="layout-static.html"><i></i><span data-i18n="nav.page_layouts.static_layout">Static layout</span></a>
                                    </li>
                                    <li class="navigation-divider"></li>
                                    <li><a class="menu-item" href="layout-light.html"><i></i><span data-i18n="nav.page_layouts.light_layout">Light layout</span></a>
                                    </li>
                                    <li><a class="menu-item" href="layout-dark.html"><i></i><span data-i18n="nav.page_layouts.dark_layout">Dark layout</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">Navbars</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="navbar-light.html"><i></i><span data-i18n="nav.navbars.nav_light">Navbar Light</span></a>
                                    </li>
                                    <li><a class="menu-item" href="navbar-dark.html"><i></i><span data-i18n="nav.navbars.nav_dark">Navbar Dark</span></a>
                                    </li>
                                    <li><a class="menu-item" href="navbar-brand-center.html"><i></i><span data-i18n="nav.navbars.nav_brand_center">Brand Center</span></a>
                                    </li>
                                    <li><a class="menu-item" href="navbar-fixed-top.html"><i></i><span data-i18n="nav.navbars.nav_fixed_top">Fixed Top</span></a>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.navbars.nav_hide_on_scroll.main">Hide on Scroll</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="navbar-hide-on-scroll-top.html"><i></i><span data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top">Hide on Scroll Top</span></a>
                                            </li>
                                            <li><a class="menu-item" href="navbar-hide-on-scroll-bottom.html"><i></i><span data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom">Hide on Scroll Bottom</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="navbar-components.html"><i></i><span data-i18n="nav.navbars.nav_components">Navbar Components</span></a>
                                    </li>
                                    <li><a class="menu-item" href="navbar-styling.html"><i></i><span data-i18n="nav.navbars.nav_styling">Navbar Styling</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Vertical Nav</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.main">Navigation Types</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="../vertical-menu-template"><i></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Vertical Menu</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../vertical-modern-menu-template"><i></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_modern-menu">Vertical Modern Menu</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../vertical-overlay-menu-template"><i></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Vertical Overlay</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../vertical-compact-menu-template"><i></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_compact">Vertical Compact</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../vertical-content-menu-template"><i></i><span data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_content">Vertical Content</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-fixed.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_fixed">Fixed Navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-static.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_static">Static Navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-light.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_light">Navigation Light</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-dark.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_dark">Navigation Dark</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-accordion.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_accordion">Accordion Navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-collapsible.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_collapsible">Collapsible Navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-flipped.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_flipped">Flipped Navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-native-scroll.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_native_scroll">Native scroll</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-right-side-icon.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_right_side_icon">Right side icons</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-bordered.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_bordered">Bordered Navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-disabled-link.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_disabled_link">Disabled Navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-styling.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_styling">Navigation Styling</span></a>
                                    </li>
                                    <li><a class="menu-item" href="vertical-nav-tags-pills.html"><i></i><span data-i18n="nav.vertical_nav.vertical_nav_tags_pills">Tags &amp; Pills</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title" data-i18n="nav.horz_nav.main">Horizontal Nav</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.horz_nav.horizontal_navigation_types.main">Navigation Types</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="../horizontal-menu-template"><i></i><span data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_left_icon_navigation">Left Icon Navigation</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../horizontal-menu-template-nav"><i></i><span data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_menu_template_nav">Top Icon Navigation</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">Page Headers</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="headers-breadcrumbs-basic.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_basic">Breadcrumbs basic</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-top.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_top">Breadcrumbs top</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-bottom.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_bottom">Breadcrumbs bottom</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-top-with-description.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_top_with_description">Breadcrumbs top with desc</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-with-button.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_with_button">Breadcrumbs with button</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-with-round-button.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_with_round_button">Breadcrumbs with button 2</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-with-button-group.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_with_button_group">Breadcrumbs with buttons</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-with-description.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_description">Breadcrumbs with desc</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-with-search.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_search">Breadcrumbs with search</span></a>
                                    </li>
                                    <li><a class="menu-item" href="headers-breadcrumbs-with-stats.html"><i></i><span data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_stats">Breadcrumbs with stats</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title" data-i18n="nav.footers.main">Footers</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="footer-light.html"><i></i><span data-i18n="nav.footers.footer_light">Footer Light</span></a>
                                    </li>
                                    <li><a class="menu-item" href="footer-dark.html"><i></i><span data-i18n="nav.footers.footer_dark">Footer Dark</span></a>
                                    </li>
                                    <li><a class="menu-item" href="footer-transparent.html"><i></i><span data-i18n="nav.footers.footer_transparent">Footer Transparent</span></a>
                                    </li>
                                    <li><a class="menu-item" href="footer-fixed.html"><i></i><span data-i18n="nav.footers.footer_fixed">Footer Fixed</span></a>
                                    </li>
                                    <li><a class="menu-item" href="footer-components.html"><i></i><span data-i18n="nav.footers.footer_components">Footer Components</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.general">General</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-paint-brush"></i><span class="menu-title" data-i18n="nav.color_palette.main">Color Palette</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="color-palette-primary.html"><i></i><span data-i18n="nav.color_palette.color_palette_primary">Primary palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-danger.html"><i></i><span data-i18n="nav.color_palette.color_palette_danger">Danger palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-success.html"><i></i><span data-i18n="nav.color_palette.color_palette_success">Success palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-warning.html"><i></i><span data-i18n="nav.color_palette.color_palette_warning">Warning palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-info.html"><i></i><span data-i18n="nav.color_palette.color_palette_info">Info palette</span></a>
                                    </li>
                                    <li class="navigation-divider"></li>
                                    <li><a class="menu-item" href="color-palette-red.html"><i></i><span data-i18n="nav.color_palette.color_palette_red">Red palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-pink.html"><i></i><span data-i18n="nav.color_palette.color_palette_pink">Pink palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-purple.html"><i></i><span data-i18n="nav.color_palette.color_palette_purple">Purple palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-blue.html"><i></i><span data-i18n="nav.color_palette.color_palette_blue">Blue palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-cyan.html"><i></i><span data-i18n="nav.color_palette.color_palette_cyan">Cyan palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-teal.html"><i></i><span data-i18n="nav.color_palette.color_palette_teal">Teal palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-yellow.html"><i></i><span data-i18n="nav.color_palette.color_palette_yellow">Yellow palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-amber.html"><i></i><span data-i18n="nav.color_palette.color_palette_amber">Amber palette</span></a>
                                    </li>
                                    <li><a class="menu-item" href="color-palette-blue-grey.html"><i></i><span data-i18n="nav.color_palette.color_palette_blue_grey">Blue Grey palette</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-puzzle-piece"></i><span class="menu-title" data-i18n="nav.starter_kit.main">Starter kit</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-1-column.html"><i></i><span data-i18n="nav.starter_kit.1_column">1 column</span></a>
                                    </li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-2-columns.html"><i></i><span data-i18n="nav.starter_kit.2_columns">2 columns</span></a>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.starter_kit.3_columns_detached.main">Content Det. Sidebar</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-content-detached-left-sidebar.html"><i></i><span data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_left_sidebar">Detached left sidebar</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-content-detached-left-sticky-sidebar.html"><i></i><span data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_left_sidebar">Detached sticky left sidebar</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-content-detached-right-sidebar.html"><i></i><span data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_right_sidebar">Detached right sidebar</span></a>
                                            </li>
                                            <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-content-detached-right-sticky-sidebar.html"><i></i><span data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_right_sidebar">Detached sticky right sidebar</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="navigation-divider"></li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-fixed-navbar.html"><i></i><span data-i18n="nav.starter_kit.fixed_navbar">Fixed navbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-fixed-navigation.html"><i></i><span data-i18n="nav.starter_kit.fixed_navigation">Fixed navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-fixed-navbar-navigation.html"><i></i><span data-i18n="nav.starter_kit.fixed_navbar_navigation">Fixed navbar &amp; navigation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-fixed-navbar-footer.html"><i></i><span data-i18n="nav.starter_kit.fixed_navbar_footer">Fixed navbar &amp; footer</span></a>
                                    </li>
                                    <li class="navigation-divider"></li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-fixed.html"><i></i><span data-i18n="nav.starter_kit.fixed_layout">Fixed layout</span></a>
                                    </li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-boxed.html"><i></i><span data-i18n="nav.starter_kit.boxed_layout">Boxed layout</span></a>
                                    </li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-static.html"><i></i><span data-i18n="nav.starter_kit.static_layout">Static layout</span></a>
                                    </li>
                                    <li class="navigation-divider"></li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-light.html"><i></i><span data-i18n="nav.starter_kit.light_layout">Light layout</span></a>
                                    </li>
                                    <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-content-menu-template/layout-dark.html"><i></i><span data-i18n="nav.starter_kit.dark_layout">Dark layout</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="changelog.html"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.changelog.main">Changelog</span><span class="badge badge badge-pill badge-warning float-right">3.0</span></a>
                            </li>
                            <li class="disabled nav-item"><a href="#"><i class="la la-eye-slash"></i><span class="menu-title" data-i18n="nav.disabled_menu.main">Disabled Menu</span></a>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-android"></i><span class="menu-title" data-i18n="nav.menu_levels.main">Menu levels</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.menu_levels.second_level">Second level</span></a>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.menu_levels.second_level_child.main">Second level child</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.menu_levels.second_level_child.third_level">Third level</span></a>
                                            </li>
                                            <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.menu_levels.second_level_child.third_level_child.main">Third level child</span></a>
                                                <ul class="menu-content">
                                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1">Fourth level</span></a>
                                                    </li>
                                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2">Fourth level</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.ui">User Interface</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-tablet"></i><span class="menu-title" data-i18n="nav.cards.main">Cards</span><span class="badge badge badge-success float-right mr-2">New</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="card-bootstrap.html"><i></i><span data-i18n="nav.cards.card_bootstrap">Bootstrap</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-headings.html"><i></i><span data-i18n="nav.cards.card_headings">Headings</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-options.html"><i></i><span data-i18n="nav.cards.card_options">Options</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-actions.html"><i></i><span data-i18n="nav.cards.card_actions">Action</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-draggable.html"><i></i><span data-i18n="nav.cards.card_draggable">Draggable</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-fire"></i><span class="menu-title" data-i18n="nav.advance_cards.main">Advance Cards</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="card-statistics.html"><i></i><span data-i18n="nav.cards.card_statistics">Statistics</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-weather.html"><i></i><span data-i18n="nav.cards.card_weather">Weather</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-charts.html"><i></i><span data-i18n="nav.cards.card_charts">Charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-interactive.html"><i></i><span data-i18n="nav.cards.card_interactive">Interactive</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-maps.html"><i></i><span data-i18n="nav.cards.card_maps">Maps</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-social.html"><i></i><span data-i18n="nav.cards.card_social">Social</span></a>
                                    </li>
                                    <li><a class="menu-item" href="card-ecommerce.html"><i></i><span data-i18n="nav.cards.card_ecommerce">E-Commerce</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-compass"></i><span class="menu-title" data-i18n="nav.content.main">Content</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="content-grid.html"><i></i><span data-i18n="nav.content.content_grid">Grid</span></a>
                                    </li>
                                    <li><a class="menu-item" href="content-typography.html"><i></i><span data-i18n="nav.content.content_typography">Typography</span></a>
                                    </li>
                                    <li><a class="menu-item" href="content-text-utilities.html"><i></i><span data-i18n="nav.content.content_text_utilities">Text utilities</span></a>
                                    </li>
                                    <li><a class="menu-item" href="content-syntax-highlighter.html"><i></i><span data-i18n="nav.content.content_syntax_highlighter">Syntax highlighter</span></a>
                                    </li>
                                    <li><a class="menu-item" href="content-helper-classes.html"><i></i><span data-i18n="nav.content.content_helper_classes">Helper classes</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-server"></i><span class="menu-title" data-i18n="nav.components.main">Components</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="component-alerts.html"><i></i><span data-i18n="nav.components.component_alerts">Alerts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-callout.html"><i></i><span data-i18n="nav.components.component_callout">Callout</span></a>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.components.components_buttons.main">Buttons</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="component-buttons-basic.html"><i></i><span data-i18n="nav.components.components_buttons.component_buttons_basic">Basic Buttons</span></a>
                                            </li>
                                            <li><a class="menu-item" href="component-buttons-extended.html"><i></i><span data-i18n="nav.components.components_buttons.component_buttons_extended">Extended Buttons</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="component-carousel.html"><i></i><span data-i18n="nav.components.component_carousel">Carousel</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-collapse.html"><i></i><span data-i18n="nav.components.component_collapse">Collapse</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-dropdowns.html"><i></i><span data-i18n="nav.components.component_dropdowns">Dropdowns</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-list-group.html"><i></i><span data-i18n="nav.components.component_list_group">List Group</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-modals.html"><i></i><span data-i18n="nav.components.component_modals">Modals</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-pagination.html"><i></i><span data-i18n="nav.components.component_pagination">Pagination</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-navs-component.html"><i></i><span data-i18n="nav.components.component_navs_component">Navs Component</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-tabs-component.html"><i></i><span data-i18n="nav.components.component_tabs_component">Tabs Component</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-pills-component.html"><i></i><span data-i18n="nav.components.component_pills_component">Pills Component</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-tooltips.html"><i></i><span data-i18n="nav.components.component_tooltips">Tooltips</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-popovers.html"><i></i><span data-i18n="nav.components.component_popovers">Popovers</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-badges.html"><i></i><span data-i18n="nav.components.component_badges">Badges</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-pill-badges.html"><i></i><span>Pill Badges</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-progress.html"><i></i><span data-i18n="nav.components.component_progress">Progress</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-media-objects.html"><i></i><span data-i18n="nav.components.component_media_objects">Media Objects</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-scrollable.html"><i></i><span data-i18n="nav.components.component_scrollable">Scrollable</span></a>
                                    </li>
                                    <li><a class="menu-item" href="component-spinners.html"><i></i><span data-i18n="nav.components.component_spinners">Spinners</span></a>
                                    </li>
                                    <li><a class="menu-item" href="components-toast.html"><i></i><span data-i18n="nav.components.components_toast">Toast &amp; Custom Switch</span></a>
                                    </li>
                                    <li><a class="menu-item" href="components-bootstrap-spinner.html"><i></i><span data-i18n="nav.components.components_bootstrap_spinner">Bootstrap Spinner</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-diamond"></i><span class="menu-title" data-i18n="nav.extra_components.main">Extra Components</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="ex-component-sweet-alerts.html"><i></i><span data-i18n="nav.extra_components.ex_component_sweet_alerts">Sweet Alerts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-tree-views.html"><i></i><span data-i18n="nav.extra_components.ex_component_tree_views">Tree Views</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-toastr.html"><i></i><span data-i18n="nav.extra_components.ex_component_toastr">Toastr</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-ratings.html"><i></i><span data-i18n="nav.extra_components.ex_component_ratings">Ratings</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-noui-slider.html"><i></i><span data-i18n="nav.extra_components.ex_component_noui_slider">NoUI Slider</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-date-time-dropper.html"><i></i><span data-i18n="nav.extra_components.ex_component_date_time_dropper">Date Time Dropper</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-lists.html"><i></i><span data-i18n="nav.extra_components.ex_component_lists">Lists</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-toolbar.html"><i></i><span data-i18n="nav.extra_components.ex_component_toolbar">Toolbar</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-knob.html"><i></i><span data-i18n="nav.extra_components.ex_component_knob">Knob</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-long-press.html"><i></i><span data-i18n="nav.extra_components.ex_component_long_press">Long Press</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-offline.html"><i></i><span data-i18n="nav.extra_components.ex_component_offline">Offline</span></a>
                                    </li>
                                    <li><a class="menu-item" href="ex-component-zoom.html"><i></i><span data-i18n="nav.extra_components.ex_component_zoom">Zoom</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-eye"></i><span class="menu-title" data-i18n="nav.icons.main">Icons</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="icons-feather.html"><i></i><span data-i18n="nav.icons.icons_feather">Feather</span></a>
                                    </li>
                                    <li><a class="menu-item" href="icons-line-awesome.html"><i></i><span data-i18n="nav.icons.icons_line_awesome">Line Awesome</span></a>
                                    </li>
                                    <li><a class="menu-item" href="icons-meteocons.html"><i></i><span data-i18n="nav.icons.icons_meteocons">Meteocons</span></a>
                                    </li>
                                    <li><a class="menu-item" href="icons-simple-line-icons.html"><i></i><span data-i18n="nav.icons.icons_linecons">Simple Line Icons</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="animation.html"><i class="la la-spinner spinner"></i><span class="menu-title" data-i18n="nav.animation.main">Animation</span></a>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.forms">Forms</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Forms"></i>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-terminal"></i><span class="menu-title" data-i18n="nav.form_elements.main">Form Elements</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="form-inputs.html"><i></i><span data-i18n="nav.form_elements.form_inputs">Form Inputs</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-input-groups.html"><i></i><span data-i18n="nav.form_elements.form_input_groups">Input Groups</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-input-grid.html"><i></i><span data-i18n="nav.form_elements.form_input_grid">Input Grid</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-extended-inputs.html"><i></i><span data-i18n="nav.form_elements.form_extended_inputs">Extended Inputs</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-checkboxes-radios.html"><i></i><span data-i18n="nav.form_elements.form_checkboxes_radios">Checkboxes &amp; Radios</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-switch.html"><i></i><span data-i18n="nav.form_elements.form_switch">Switch</span></a>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.form_elements.form_select.main">Select</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="form-select2.html"><i></i><span data-i18n="nav.form_elements.form_select.form_select2">Select2</span></a>
                                            </li>
                                            <li><a class="menu-item" href="form-selectize.html"><i></i><span data-i18n="nav.form_elements.form_select.form_selectize">Selectize</span></a>
                                            </li>
                                            <li><a class="menu-item" href="form-selectivity.html"><i></i><span data-i18n="nav.form_elements.form_select.form_selectivity">Selectivity</span></a>
                                            </li>
                                            <li><a class="menu-item" href="form-select-box-it.html"><i></i><span data-i18n="nav.form_elements.form_select.form_select_box_it">Select Box It</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="form-dual-listbox.html"><i></i><span data-i18n="nav.form_elements.form_dual_listbox">Dual Listbox</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-tags-input.html"><i></i><span data-i18n="nav.form_elements.form_tags_input">Tags Input</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-validation.html"><i></i><span data-i18n="nav.form_elements.form_validation">Validation</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.form_layouts.main">Form Layouts</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="form-layout-basic.html"><i></i><span data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-layout-horizontal.html"><i></i><span data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-layout-hidden-labels.html"><i></i><span data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-layout-form-actions.html"><i></i><span data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-layout-row-separator.html"><i></i><span data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-layout-bordered.html"><i></i><span data-i18n="nav.form_layouts.form_layout_bordered">Bordered</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-layout-striped-rows.html"><i></i><span data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-layout-striped-labels.html"><i></i><span data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-paste"></i><span class="menu-title" data-i18n="nav.form_wizard.main">Form Wizard</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="form-wizard-circle-style.html"><i></i><span data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</span></a>
                                    </li>
                                    <li><a class="menu-item" href="form-wizard-notification-style.html"><i></i><span data-i18n="nav.form_wizard.form_wizard_notification_style">Notification Style</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="form-repeater.html"><i class="la la-repeat"></i><span class="menu-title" data-i18n="nav.form_repeater.main">Form Repeater</span></a>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.tables">Tables</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Tables"></i>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="table-basic.html"><i></i><span data-i18n="nav.bootstrap_tables.table_basic">Basic Tables</span></a>
                                    </li>
                                    <li><a class="menu-item" href="table-border.html"><i></i><span data-i18n="nav.bootstrap_tables.table_border">Table Border</span></a>
                                    </li>
                                    <li><a class="menu-item" href="table-sizing.html"><i></i><span data-i18n="nav.bootstrap_tables.table_sizing">Table Sizing</span></a>
                                    </li>
                                    <li><a class="menu-item" href="table-styling.html"><i></i><span data-i18n="nav.bootstrap_tables.table_styling">Table Styling</span></a>
                                    </li>
                                    <li><a class="menu-item" href="table-components.html"><i></i><span data-i18n="nav.bootstrap_tables.table_components">Table Components</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-th"></i><span class="menu-title" data-i18n="nav.data_tables.main">DataTables</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="dt-basic-initialization.html"><i></i><span data-i18n="nav.data_tables.dt_basic_initialization">Basic Initialisation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-advanced-initialization.html"><i></i><span data-i18n="nav.data_tables.dt_advanced_initialization">Advanced initialisation</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-styling.html"><i></i><span data-i18n="nav.data_tables.dt_styling">Styling</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-data-sources.html"><i></i><span data-i18n="nav.data_tables.dt_data_sources">Data Sources</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-api.html"><i></i><span data-i18n="nav.data_tables.dt_api">API</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-th-large"></i><span class="menu-title" data-i18n="nav.datatable_extensions.main">DataTables Ext.</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="dt-extensions-autofill.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_autofill">AutoFill</span></a>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.datatable_extensions.datatable_buttons.main">Buttons</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="dt-extensions-buttons-basic.html"><i></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic">Basic Buttons</span></a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-html-5-data-export.html"><i></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export">HTML 5 Data Export</span></a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-flash-data-export.html"><i></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export">Flash Data Export</span></a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-column-visibility.html"><i></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility">Column Visibility</span></a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-print.html"><i></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print">Print</span></a>
                                            </li>
                                            <li><a class="menu-item" href="dt-extensions-buttons-api.html"><i></i><span data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api">API</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-column-reorder.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_column_reorder">Column Reorder</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-fixed-columns.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns">Fixed Columns</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-key-table.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_key_table">Key Table</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-row-reorder.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_row_reorder">Row Reorder</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-select.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_select">Select</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-fix-header.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_fix_header">Fix Header</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-responsive.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_responsive">Responsive</span></a>
                                    </li>
                                    <li><a class="menu-item" href="dt-extensions-column-visibility.html"><i></i><span data-i18n="nav.datatable_extensions.dt_extensions_column_visibility">Column Visibility</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-th-list"></i><span class="menu-title" data-i18n="nav.handson_table.main">Handson Table</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="handson-table-appearance.html"><i></i><span data-i18n="nav.handson_table.handson_table_appearance">Appearance</span></a>
                                    </li>
                                    <li><a class="menu-item" href="handson-table-rows-columns.html"><i></i><span data-i18n="nav.handson_table.handson_table_rows_columns">Rows Columns</span></a>
                                    </li>
                                    <li><a class="menu-item" href="handson-table-rows-only.html"><i></i><span data-i18n="nav.handson_table.handson_table_rows_only">Rows Only</span></a>
                                    </li>
                                    <li><a class="menu-item" href="handson-table-columns-only.html"><i></i><span data-i18n="nav.handson_table.handson_table_columns_only">Columns Only</span></a>
                                    </li>
                                    <li><a class="menu-item" href="handson-table-data-operations.html"><i></i><span data-i18n="nav.handson_table.handson_table_data_operations">Data Operations</span></a>
                                    </li>
                                    <li><a class="menu-item" href="handson-table-cell-features.html"><i></i><span data-i18n="nav.handson_table.handson_table_cell_features">Cell Features</span></a>
                                    </li>
                                    <li><a class="menu-item" href="handson-table-cell-types.html"><i></i><span data-i18n="nav.handson_table.handson_table_cell_types">Cell Types</span></a>
                                    </li>
                                    <li><a class="menu-item" href="handson-table-integrations.html"><i></i><span data-i18n="nav.handson_table.handson_table_integrations">Integrations</span></a>
                                    </li>
                                    <li><a class="menu-item" href="handson-table-utilities.html"><i></i><span data-i18n="nav.handson_table.handson_table_utilities">Utilities</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="table-jsgrid.html"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">jsGrid</span></a>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.addons">Add Ons</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Add Ons"></i>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-edit"></i><span class="menu-title" data-i18n="nav.editors.main">Editors</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="editor-quill.html"><i></i><span data-i18n="nav.editors.editor_quill">Quill</span></a>
                                    </li>
                                    <li><a class="menu-item" href="editor-ckeditor.html"><i></i><span data-i18n="nav.editors.editor_ckeditor">CKEditor</span></a>
                                    </li>
                                    <li><a class="menu-item" href="editor-summernote.html"><i></i><span data-i18n="nav.editors.editor_summernote">Summernote</span></a>
                                    </li>
                                    <li><a class="menu-item" href="editor-tinymce.html"><i></i><span data-i18n="nav.editors.editor_tinymce">TinyMCE</span></a>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.editors.code_editor_codemirror.main">Code Editor</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="code-editor-codemirror.html"><i></i><span data-i18n="nav.editors.code_editor_codemirror.code_editor_codemirror">CodeMirror</span></a>
                                            </li>
                                            <li><a class="menu-item" href="code-editor-ace.html"><i></i><span data-i18n="nav.editors.code_editor_codemirror.code_editor_ace">Ace</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title" data-i18n="nav.pickers.main">Pickers</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="pickers-date-&amp;-time-picker.html"><i></i><span data-i18n="nav.pickers.pickers_date_time_picker">Date &amp; Time Picker</span></a>
                                    </li>
                                    <li><a class="menu-item" href="pickers-color-picker.html"><i></i><span data-i18n="nav.pickers.pickers_color_picker">Color Picker</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-code-fork"></i><span class="menu-title" data-i18n="nav.jquery_ui.main">jQuery UI</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="jquery-ui-interactions.html"><i></i><span data-i18n="nav.jquery_ui.jquery_ui_interactions">Interactions</span></a>
                                    </li>
                                    <li><a class="menu-item" href="jquery-ui-navigations.html"><i></i><span data-i18n="nav.jquery_ui.jquery_ui_navigations">Navigations</span></a>
                                    </li>
                                    <li><a class="menu-item" href="jquery-ui-date-pickers.html"><i></i><span data-i18n="nav.jquery_ui.jquery_ui_date_pickers">Date Pickers</span></a>
                                    </li>
                                    <li><a class="menu-item" href="jquery-ui-autocomplete.html"><i></i><span data-i18n="nav.jquery_ui.jquery_ui_autocomplete">Autocomplete</span></a>
                                    </li>
                                    <li><a class="menu-item" href="jquery-ui-buttons-select.html"><i></i><span data-i18n="nav.jquery_ui.jquery_ui_buttons_select">Buttons &amp; Select</span></a>
                                    </li>
                                    <li><a class="menu-item" href="jquery-ui-slider-spinner.html"><i></i><span data-i18n="nav.jquery_ui.jquery_ui_slider_spinner">Slider &amp; Spinner</span></a>
                                    </li>
                                    <li><a class="menu-item" href="jquery-ui-dialog-tooltip.html"><i></i><span data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip">Dialog &amp; Tooltip</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="add-on-block-ui.html"><i class="la la-terminal"></i><span class="menu-title" data-i18n="nav.add_on_block_ui.main">Block UI</span></a>
                            </li>
                            <li class=" nav-item"><a href="add-on-image-cropper.html"><i class="la la-crop"></i><span class="menu-title" data-i18n="nav.add_on_image_cropper.main">Image Cropper</span></a>
                            </li>
                            <li class=" nav-item"><a href="add-on-drag-drop.html"><i class="la la-mouse-pointer"></i><span class="menu-title" data-i18n="nav.add_on_drag_drop.main">Drag &amp; Drop</span></a>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-cloud-upload"></i><span class="menu-title" data-i18n="nav.file_uploaders.main">File Uploader</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="file-uploader-dropzone.html"><i></i><span data-i18n="nav.file_uploaders.file_uploader_dropzone">Dropzone</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-flag-o"></i><span class="menu-title" data-i18n="nav.internationalization.main">Internationalization</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="i18n-resources.html"><i></i><span data-i18n="nav.internationalization.i18n_resources">Resources</span></a>
                                    </li>
                                    <li><a class="menu-item" href="i18n-xhr-backend.html"><i></i><span data-i18n="nav.internationalization.i18n_xhr_backend">XHR Backend</span></a>
                                    </li>
                                    <li><a class="menu-item" href="i18n-query-string.html?lng=en"><i></i><span data-i18n="nav.internationalization.i18n_query_string">Query String</span></a>
                                    </li>
                                    <li><a class="menu-item" href="i18n-on-init.html"><i></i><span data-i18n="nav.internationalization.i18n_on_init">On Init</span></a>
                                    </li>
                                    <li><a class="menu-item" href="i18n-after-init.html"><i></i><span data-i18n="nav.internationalization.i18n_after_init">After Init</span></a>
                                    </li>
                                    <li><a class="menu-item" href="i18n-fallback.html"><i></i><span data-i18n="nav.internationalization.i18n_fallback">Fallback</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Charts &amp; Maps"></i>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.google_charts.main">Google Charts</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="google-bar-charts.html"><i></i><span data-i18n="nav.google_charts.google_bar_charts">Bar charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="google-line-charts.html"><i></i><span data-i18n="nav.google_charts.google_line_charts">Line charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="google-pie-charts.html"><i></i><span data-i18n="nav.google_charts.google_pie_charts">Pie charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="google-scatter-charts.html"><i></i><span data-i18n="nav.google_charts.google_scatter_charts">Scatter charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="google-bubble-charts.html"><i></i><span data-i18n="nav.google_charts.google_bubble_charts">Bubble charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="google-other-charts.html"><i></i><span data-i18n="nav.google_charts.google_other_charts">Other charts</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-file-photo-o"></i><span class="menu-title" data-i18n="nav.echarts.main">Echarts</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="echarts-line-area-charts.html"><i></i><span data-i18n="nav.echarts.echarts_line_area_charts">Line &amp; Area charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="echarts-bar-column-charts.html"><i></i><span data-i18n="nav.echarts.echarts_bar_column_charts">Bar &amp; Column charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="echarts-pie-doughnut-charts.html"><i></i><span data-i18n="nav.echarts.echarts_pie_doughnut_charts">Pie &amp; Doughnut charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="echarts-scatter-charts.html"><i></i><span data-i18n="nav.echarts.echarts_scatter_charts">Scatter charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="echarts-radar-chord-charts.html"><i></i><span data-i18n="nav.echarts.echarts_radar_chord_charts">Radar &amp; Chord charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="echarts-funnel-gauges-charts.html"><i></i><span data-i18n="nav.echarts.echarts_funnel_gauges_charts">Funnel &amp; Gauges charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="echarts-combination-charts.html"><i></i><span data-i18n="nav.echarts.echarts_combination_charts">Combination charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="echarts-advance-charts.html"><i></i><span data-i18n="nav.echarts.echarts_advance_charts">Advance charts</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-area-chart"></i><span class="menu-title" data-i18n="nav.chartjs.main">Chartjs</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="chartjs-line-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_line_charts">Line charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="chartjs-bar-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_bar_charts">Bar charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="chartjs-scatter-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="chartjs-polar-radar-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="chartjs-advance-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-line-chart"></i><span class="menu-title" data-i18n="nav.d3_charts.main">D3 Charts</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="d3-line-chart.html"><i></i><span data-i18n="nav.d3_charts.d3_line_chart">Line Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="d3-bar-chart.html"><i></i><span data-i18n="nav.d3_charts.d3_bar_chart">Bar Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="d3-pie-chart.html"><i></i><span data-i18n="nav.d3_charts.d3_pie_chart">Pie Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="d3-circle-diagrams.html"><i></i><span data-i18n="nav.d3_charts.d3_circle_diagrams">Circle Diagrams</span></a>
                                    </li>
                                    <li><a class="menu-item" href="d3-tree-chart.html"><i></i><span data-i18n="nav.d3_charts.d3_tree_chart">Tree Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="d3-other-charts.html"><i></i><span data-i18n="nav.d3_charts.d3_other_charts">Other Charts</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-indent"></i><span class="menu-title" data-i18n="nav.c3_charts.main">C3 Charts</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="c3-line-chart.html"><i></i><span data-i18n="nav.c3_charts.c3_line_chart">Line Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="c3-bar-pie-chart.html"><i></i><span data-i18n="nav.c3_charts.c3_bar_pie_chart">Bar &amp; Pie Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="c3-axis-chart.html"><i></i><span data-i18n="nav.c3_charts.c3_axis_chart">Axis Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="c3-data-chart.html"><i></i><span data-i18n="nav.c3_charts.c3_data_chart">Data Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="c3-grid-chart.html"><i></i><span data-i18n="nav.c3_charts.c3_grid_chart">Grid Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="c3-transform-chart.html"><i></i><span data-i18n="nav.c3_charts.c3_transform_chart">Transform Chart</span></a>
                                    </li>
                                    <li><a class="menu-item" href="c3-other-charts.html"><i></i><span data-i18n="nav.c3_charts.c3_other_charts">Other Charts</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-pie-chart"></i><span class="menu-title" data-i18n="nav.chartist.main">Chartist</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="chartist-line-charts.html"><i></i><span data-i18n="nav.chartist.chartist_line_charts">Line charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="chartist-bar-charts.html"><i></i><span data-i18n="nav.chartist.chartist_bar_charts">Bar charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="chartist-pie-charts.html"><i></i><span data-i18n="nav.chartist.chartist_pie_charts">Pie charts</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="morris-charts.html"><i class="la la-share-alt"></i><span class="menu-title" data-i18n="nav.morris_charts.main">Morris Charts</span></a>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title" data-i18n="nav.flot_charts.main">Flot Charts</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="flot-line-charts.html"><i></i><span data-i18n="nav.flot_charts.flot_line_charts">Line charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="flot-bar-charts.html"><i></i><span data-i18n="nav.flot_charts.flot_bar_charts">Bar charts</span></a>
                                    </li>
                                    <li><a class="menu-item" href="flot-pie-charts.html"><i></i><span data-i18n="nav.flot_charts.flot_pie_charts">Pie charts</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" nav-item"><a href="rickshaw-charts.html"><i class="la la-bullseye"></i><span class="menu-title" data-i18n="nav.rickshaw_charts.main">Rickshaw Charts</span></a>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-map"></i><span class="menu-title" data-i18n="nav.maps.main">Maps</span></a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.maps.google_maps.main">Google Maps</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="gmaps-basic-maps.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</span></a>
                                            </li>
                                            <li><a class="menu-item" href="gmaps-services.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_services">Services</span></a>
                                            </li>
                                            <li><a class="menu-item" href="gmaps-overlays.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</span></a>
                                            </li>
                                            <li><a class="menu-item" href="gmaps-routes.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_routes">Routes</span></a>
                                            </li>
                                            <li><a class="menu-item" href="gmaps-utils.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_utils">Utils</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.maps.vector_maps.main">Vector Maps</span></a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.maps.vector_maps.jquery_mapael.main">jQuery Mapael</span></a>
                                                <ul class="menu-content">
                                                    <li><a class="menu-item" href="vector-maps-mapael-basic.html"><i></i><span data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic">Basic Maps</span></a>
                                                    </li>
                                                    <li><a class="menu-item" href="vector-maps-mapael-advance.html"><i></i><span data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance">Advance Maps</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="menu-item" href="vector-maps-jvector.html"><i></i><span data-i18n="nav.maps.vector_maps.jvector_maps">jVector Map</span></a>
                                            </li>
                                            <li><a class="menu-item" href="vector-maps-jvq.html"><i></i><span data-i18n="nav.maps.vector_maps.vector_maps_jvq">JQV Map</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Support"></i>
                            </li>
                            <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="la la-support"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
                            </li>
                            <li class=" nav-item"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="la la-text-height"></i><span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- END: Main Menu-->
                <div class="content-body">
                    <!-- eCommerce statistic -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="info">850</h3>
                                                <h6>Products Sold</h6>
                                            </div>
                                            <div>
                                                <i class="icon-basket-loaded info font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="warning">$748</h3>
                                                <h6>Net Profit</h6>
                                            </div>
                                            <div>
                                                <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="success">146</h3>
                                                <h6>New Customers</h6>
                                            </div>
                                            <div>
                                                <i class="icon-user-follow success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="danger">99.89 %</h3>
                                                <h6>Customer Satisfaction</h6>
                                            </div>
                                            <div>
                                                <i class="icon-heart danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ eCommerce statistic -->

                    <!-- Products sell and New Orders -->
                    <div class="row match-height">
                        <div class="col-xl-8 col-12" id="ecommerceChartView">
                            <div class="card card-shadow">
                                <div class="card-header card-header-transparent py-20">
                                    <div class="btn-group dropdown">
                                        <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                                        <div class="dropdown-menu animate" role="menu">
                                            <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                                            <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                                            <a class="dropdown-item" href="#" role="menuitem">profit</a>
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                                        <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                                    </ul>
                                </div>
                                <div class="widget-content tab-content bg-white p-20">
                                    <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                                    <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                                    <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">New Orders</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div id="new-orders" class="media-list position-relative">
                                        <div class="table-responsive">
                                            <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">Product</th>
                                                        <th class="border-top-0">Customers</th>
                                                        <th class="border-top-0">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-truncate">iPhone X</td>
                                                        <td class="text-truncate p-1">
                                                            <ul class="list-unstyled users-list m-0">
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                                                </li>
                                                                <li class="avatar avatar-sm">
                                                                    <span class="badge badge-info">+4 more</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="text-truncate">$8999</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">Pixel 2</td>
                                                        <td class="text-truncate p-1">
                                                            <ul class="list-unstyled users-list m-0">
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Scott" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-16.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Charles Miller" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-15.png" alt="Avatar">
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="text-truncate">$5550</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">OnePlus</td>
                                                        <td class="text-truncate p-1">
                                                            <ul class="list-unstyled users-list m-0">
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Christine Ramos" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Thomas Brewer" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-10.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Chapman" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-9.png" alt="Avatar">
                                                                </li>
                                                                <li class="avatar avatar-sm">
                                                                    <span class="badge badge-info">+3 more</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="text-truncate">$9000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">Galaxy</td>
                                                        <td class="text-truncate p-1">
                                                            <ul class="list-unstyled users-list m-0">
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Ryan Schneider" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-14.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Tiffany Oliver" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-13.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joan Reid" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="text-truncate">$7500</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">Moto Z2</td>
                                                        <td class="text-truncate p-1">
                                                            <ul class="list-unstyled users-list m-0">
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-8.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-7.png" alt="Avatar">
                                                                </li>
                                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                                    <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                                </li>
                                                                <li class="avatar avatar-sm">
                                                                    <span class="badge badge-info">+1 more</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="text-truncate">$8500</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Products sell and New Orders -->

                    <!-- Recent Transactions -->
                    <div class="row">
                        <div id="recent-transactions" class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Recent Transactions</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table id="recent-orders" class="table table-hover table-xl mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Status</th>
                                                    <th class="border-top-0">Invoice#</th>
                                                    <th class="border-top-0">Customer Name</th>
                                                    <th class="border-top-0">Products</th>
                                                    <th class="border-top-0">Categories</th>
                                                    <th class="border-top-0">Shipping</th>
                                                    <th class="border-top-0">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                    <td class="text-truncate"><a href="#">INV-001001</a></td>
                                                    <td class="text-truncate">
                                                        <span class="avatar avatar-xs">
                                                            <img class="box-shadow-2" src="app-assets/images/portrait/small/avatar-s-4.png" alt="avatar">
                                                        </span>
                                                        <span>Elizabeth W.</span>
                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <ul class="list-unstyled users-list m-0">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-1.jpg" alt="Avatar">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-2.jpg" alt="Avatar">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-4.jpg" alt="Avatar">
                                                            </li>
                                                            <li class="avatar avatar-sm">
                                                                <span class="badge badge-info">+1 more</span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">$ 1200.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Declined</td>
                                                    <td class="text-truncate"><a href="#">INV-001002</a></td>
                                                    <td class="text-truncate">
                                                        <span class="avatar avatar-xs">
                                                            <img class="box-shadow-2" src="app-assets/images/portrait/small/avatar-s-5.png" alt="avatar">
                                                        </span>
                                                        <span>Doris R.</span>
                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <ul class="list-unstyled users-list m-0">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-6.jpg" alt="Avatar">
                                                            </li>
                                                            <li class="avatar avatar-sm">
                                                                <span class="badge badge-info">+2 more</span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">$ 1850.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> Pending</td>
                                                    <td class="text-truncate"><a href="#">INV-001003</a></td>
                                                    <td class="text-truncate">
                                                        <span class="avatar avatar-xs">
                                                            <img class="box-shadow-2" src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar">
                                                        </span>
                                                        <span>Megan S.</span>
                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <ul class="list-unstyled users-list m-0">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-2.jpg" alt="Avatar">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">$ 3200.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                    <td class="text-truncate"><a href="#">INV-001004</a></td>
                                                    <td class="text-truncate">
                                                        <span class="avatar avatar-xs">
                                                            <img class="box-shadow-2" src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar">
                                                        </span>
                                                        <span>Andrew D.</span>
                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <ul class="list-unstyled users-list m-0">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-6.jpg" alt="Avatar">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-1.jpg" alt="Avatar">
                                                            </li>
                                                            <li class="avatar avatar-sm">
                                                                <span class="badge badge-info">+1 more</span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-outline-info round">Apparels</button>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">$ 4500.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                                                    <td class="text-truncate"><a href="#">INV-001005</a></td>
                                                    <td class="text-truncate">
                                                        <span class="avatar avatar-xs">
                                                            <img class="box-shadow-2" src="app-assets/images/portrait/small/avatar-s-9.png" alt="avatar">
                                                        </span>
                                                        <span>Walter R.</span>
                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <ul class="list-unstyled users-list m-0">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-5.jpg" alt="Avatar">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="app-assets/images/portfolio/portfolio-3.jpg" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">$ 1500.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Recent Transactions -->

                    <!--Recent Orders & Monthly Sales -->
                    <div class="row match-height">
                        <div class="col-xl-8 col-lg-12">
                            <div class="card">
                                <div class="card-content ">
                                    <div id="cost-revenue" class="height-250 position-relative"></div>
                                </div>
                                <div class="card-footer">
                                    <div class="row mt-1">
                                        <div class="col-3 text-center">
                                            <h6 class="text-muted">Total Products</h6>
                                            <h2 class="block font-weight-normal">18.6 k</h2>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center">
                                            <h6 class="text-muted">Total Sales</h6>
                                            <h2 class="block font-weight-normal">64.54 M</h2>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center">
                                            <h6 class="text-muted">Total Cost</h6>
                                            <h2 class="block font-weight-normal">24.38 B</h2>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center">
                                            <h6 class="text-muted">Total Revenue</h6>
                                            <h2 class="block font-weight-normal">36.72 M</h2>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body sales-growth-chart">
                                        <div id="monthly-sales" class="height-250"></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="chart-title mb-1 text-center">
                                        <h6>Total monthly Sales.</h6>
                                    </div>
                                    <div class="chart-stats text-center">
                                        <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Recent Orders & Monthly Sales -->

                    <!-- Basic Horizontal Timeline -->
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Card</h4>
                                </div>
                                <div class="card-content">
                                    <img class="img-fluid" src="app-assets/images/carousel/05.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                    <span class="float-left">3 hours ago</span>
                                    <span class="float-right">
                                        <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Timeline</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <section class="cd-horizontal-timeline">
                                                <div class="timeline">
                                                    <div class="events-wrapper">
                                                        <div class="events">
                                                            <ol>
                                                                <li><a href="#0" data-date="16/01/2015" class="selected">16 Jan</a></li>
                                                                <li><a href="#0" data-date="28/02/2015">28 Feb</a></li>
                                                                <li><a href="#0" data-date="20/04/2015">20 Mar</a></li>
                                                                <li><a href="#0" data-date="20/05/2015">20 May</a></li>
                                                                <li><a href="#0" data-date="09/07/2015">09 Jul</a></li>
                                                                <li><a href="#0" data-date="30/08/2015">30 Aug</a></li>
                                                                <li><a href="#0" data-date="15/09/2015">15 Sep</a></li>
                                                            </ol>
                                                            <span class="filling-line" aria-hidden="true"></span>
                                                        </div>
                                                        <!-- .events -->
                                                    </div>
                                                    <!-- .events-wrapper -->
                                                    <ul class="cd-timeline-navigation">
                                                        <li><a href="#0" class="prev inactive">Prev</a></li>
                                                        <li><a href="#0" class="next">Next</a></li>
                                                    </ul>
                                                    <!-- .cd-timeline-navigation -->
                                                </div>
                                                <!-- .timeline -->
                                                <div class="events-content">
                                                    <ol>
                                                        <li class="selected" data-date="16/01/2015">
                                                            <blockquote class="blockquote border-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img class="media-object img-xl mr-1" src="app-assets/images/portrait/small/avatar-s-5.png" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                                    </div>
                                                                </div>
                                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                                    <cite title="Source Title">Entrepreneur</cite>
                                                                </footer>
                                                            </blockquote>
                                                            <p class="lead mt-2">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                                            </p>
                                                        </li>
                                                        <li data-date="28/02/2015">
                                                            <blockquote class="blockquote border-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img class="media-object img-xl mr-1" src="app-assets/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                                    </div>
                                                                </div>
                                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                                    <cite title="Source Title">Entrepreneur</cite>
                                                                </footer>
                                                            </blockquote>
                                                            <p class="lead mt-2">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                                            </p>
                                                        </li>
                                                        <li data-date="20/04/2015">
                                                            <blockquote class="blockquote border-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img class="media-object img-xl mr-1" src="app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                                    </div>
                                                                </div>
                                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                                    <cite title="Source Title">Entrepreneur</cite>
                                                                </footer>
                                                            </blockquote>
                                                            <p class="lead mt-2">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                                            </p>
                                                        </li>
                                                        <li data-date="20/05/2015">
                                                            <blockquote class="blockquote border-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img class="media-object img-xl mr-1" src="app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                                    </div>
                                                                </div>
                                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                                    <cite title="Source Title">Entrepreneur</cite>
                                                                </footer>
                                                            </blockquote>
                                                            <p class="lead mt-2">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                                            </p>
                                                        </li>
                                                        <li data-date="09/07/2015">
                                                            <blockquote class="blockquote border-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img class="media-object img-xl mr-1" src="app-assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                                    </div>
                                                                </div>
                                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                                    <cite title="Source Title">Entrepreneur</cite>
                                                                </footer>
                                                            </blockquote>
                                                            <p class="lead mt-2">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                                            </p>
                                                        </li>
                                                        <li data-date="30/08/2015">
                                                            <blockquote class="blockquote border-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img class="media-object img-xl mr-1" src="app-assets/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                                    </div>
                                                                </div>
                                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                                    <cite title="Source Title">Entrepreneur</cite>
                                                                </footer>
                                                            </blockquote>
                                                            <p class="lead mt-2">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                                            </p>
                                                        </li>
                                                        <li data-date="15/09/2015">
                                                            <blockquote class="blockquote border-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img class="media-object img-xl mr-1" src="app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                                    </div>
                                                                </div>
                                                                <footer class="blockquote-footer text-right">Steve Jobs
                                                                    <cite title="Source Title">Entrepreneur</cite>
                                                                </footer>
                                                            </blockquote>
                                                            <p class="lead mt-2">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                                            </p>
                                                        </li>
                                                    </ol>
                                                </div>
                                                <!-- .events-content -->
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Basic Horizontal Timeline -->
                </div>
            </div>
        </div>
        <!-- END: Content-->

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light navbar-border">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
        </footer>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="app-assets/vendors/js/ui/headroom.min.js"></script>
        <script src="app-assets/vendors/js/charts/chartist.min.js"></script>
        <script src="app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
        <script src="app-assets/vendors/js/charts/raphael-min.js"></script>
        <script src="app-assets/vendors/js/charts/morris.min.js"></script>
        <script src="app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/core/app-menu.js"></script>
        <script src="app-assets/js/core/app.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->

</html>