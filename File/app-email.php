<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Email Application - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/quill.snow.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/pages/app-email.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar email-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto">
                                <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                    <i class="ficon feather icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                                <!-- select.bookmark-select-->
                                <!--   option Chat-->
                                <!--   option email-->
                                <!--   option todo-->
                                <!--   option Calendar-->
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-plus-square font-medium-5 primary"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6>
                                                <small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-download-cloud font-medium-5 success"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6>
                                                <small class="notification-text">You got new order of goods.</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-alert-triangle font-medium-5 danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6>
                                                <small class="notification-text">Server have 99% CPU usage.</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-check-circle font-medium-5 info"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6>
                                                <small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-file font-medium-5 warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6>
                                                <small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                            </small>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">John Doe</span>
                                    <span class="user-status">Available</span>
                                </div>
                                <span>
                                    <img class="round" src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-login.html">
                                    <i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50">
                        <img src="../app-assets/images/icons/xls.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p>
                        <small class="text-muted">Marketing Manager</small>
                    </div>
                </div>
                <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50">
                        <img src="../app-assets/images/icons/jpg.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p>
                        <small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
                <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50">
                        <img src="../app-assets/images/icons/pdf.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p>
                        <small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50">
                        <img src="../app-assets/images/icons/doc.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p>
                        <small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a>
        </li>
        <li class="d-flex align-items-center">
            <a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50">
                        <img src="../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p>
                        <small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50">
                        <img src="../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p>
                        <small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50">
                        <img src="../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p>
                        <small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50">
                        <img src="../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="mr-75 feather icon-alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="../index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">BIC</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                        <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                    </a>
                </li>

            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class="active nav-item"><a href="app-email.html"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
                </li>
                <li class=" nav-item"><a href="app-chat.html"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
                </li>
                <li class=" nav-item"><a href="app-todo.html"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a href="app-calender.html"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Calender</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="app-user-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View</span></a>
                        </li>
                        <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Card</span></a>
                    <ul class="menu-content">
                        <li><a href="card-basic.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a href="card-advance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a href="card-statistics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a href="card-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="card-actions.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>pages</span>
                </li>
                <li class=" nav-item"><a href="page-user-profile.html"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Profile">Profile</span></a>
                </li>
                <li class=" nav-item"><a href="page-account-settings.html"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Account Settings">Account Settings</span></a>
                </li>
                <li class=" nav-item"><a href="page-faq.html"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">FAQ</span></a>
                </li>
                <li class=" nav-item"><a href="page-knowledge-base.html"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Knowledge Base">Knowledge Base</span></a>
                </li>
                <li class=" nav-item"><a href="page-search.html"><i class="feather icon-search"></i><span class="menu-title" data-i18n="Search">Search</span></a>
                </li>
                <li class=" nav-item"><a href="page-invoice.html"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a href="auth-login.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">Login</span></a>
                        </li>
                        <li><a href="auth-register.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">Register</span></a>
                        </li>
                        <li><a href="auth-forgot-password.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Forgot Password">Forgot Password</span></a>
                        </li>
                        <li><a href="auth-reset-password.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Reset Password">Reset Password</span></a>
                        </li>
                        <li><a href="auth-lock-screen.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Lock Screen">Lock Screen</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Miscellaneous">Miscellaneous</span></a>
                    <ul class="menu-content">
                        <li><a href="page-coming-soon.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Error">Error</span></a>
                            <ul class="menu-content">
                                <li><a href="error-404.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="404">404</span></a>
                                </li>
                                <li><a href="error-500.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="500">500</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-not-authorized.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Not Authorized">Not Authorized</span></a>
                        </li>
                        <li><a href="page-maintenance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Charts &amp; Maps</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Charts">Charts</span><span class="badge badge badge-pill badge-success float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a href="chart-apex.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a href="chart-chartjs.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                        <li><a href="chart-echarts.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Echarts">Echarts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="maps-google.html"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
                </li>
                <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>



            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content email-app-sidebar d-flex">
                        <span class="sidebar-close-icon">
                            <i class="feather icon-x"></i>
                        </span>
                        <div class="email-app-menu">
                            <div class="form-group form-group-compose text-center compose-btn">
                                <button type="button" class="btn btn-primary btn-block my-2" data-toggle="modal" data-target="#composeForm"><i class="feather icon-edit"></i> Compose</button>
                            </div>
                            <div class="sidebar-menu-list">
                                <div class="list-group list-group-messages font-medium-1">
                                    <a href="#" class="list-group-item list-group-item-action border-0 pt-0 active">
                                        <i class="font-medium-5 feather icon-mail mr-50"></i> Inbox <span class="badge badge-primary badge-pill float-right">3</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 fa fa-paper-plane-o mr-50"></i> Sent</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-edit-2 mr-50"></i> Draft <span class="badge badge-warning badge-pill float-right">4</span> </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-star mr-50"></i>
                                        Starred</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-info mr-50"></i>
                                        Spam <span class="badge badge-danger badge-pill float-right">3</span> </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-trash mr-50"></i>
                                        Trash</a>
                                </div>
                                <hr>
                                <h5 class="my-2 pt-25">Labels</h5>
                                <div class="list-group list-group-labels font-medium-1">
                                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-success mr-1"></span> Personal</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-primary mr-1"></span> Company</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-warning mr-1"></span> Important</a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-danger mr-1"></span> Private</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade text-left" id="composeForm" tabindex="-1" role="dialog" aria-labelledby="emailCompose" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title text-text-bold-600" id="emailCompose">New Message</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body pt-1">
                                    <div class="form-label-group mt-1">
                                        <input type="text" id="emailTo" class="form-control" placeholder="To" name="fname-floating">
                                        <label for="emailTo">To</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailSubject" class="form-control" placeholder="Subject" name="fname-floating">
                                        <label for="emailSubject">Subject</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailCC" class="form-control" placeholder="CC" name="fname-floating">
                                        <label for="emailCC">CC</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailBCC" class="form-control" placeholder="BCC" name="fname-floating">
                                        <label for="emailBCC">BCC</label>
                                    </div>
                                    <div id="email-container">
                                        <div class="editor" data-placeholder="Message">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="emailAttach">
                                            <label class="custom-file-label" for="emailAttach">Attach file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Send" class="btn btn-primary">
                                    <input type="Reset" value="Cancel" class="btn btn-white" data-dismiss="modal">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="app-content-overlay"></div>
                        <div class="email-app-area">
                            <!-- Email list Area -->
                            <div class="email-app-list-wrapper">
                                <div class="email-app-list">
                                    <div class="app-fixed-search">
                                        <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
                                        <fieldset class="form-group position-relative has-icon-left m-0">
                                            <input type="text" class="form-control" id="email-search" placeholder="Search email">
                                            <div class="form-control-position">
                                                <i class="feather icon-search"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="app-action">
                                        <div class="action-left">
                                            <div class="vs-checkbox-con selectAll">
                                                <input type="checkbox">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-minus"></i>
                                                    </span>
                                                </span>
                                                <span>Select All</span>
                                            </div>
                                        </div>
                                        <div class="action-right">
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="feather icon-folder"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                            <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-edit-2 mr-50"></i> Draft</a>
                                                            <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-info mr-50"></i> Spam</a>
                                                            <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-trash mr-50"></i> Trash</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="feather icon-tag"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                            <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-success bullet-sm"></span> Personal</a>
                                                            <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-primary bullet-sm"></span> Company</a>
                                                            <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-warning bullet-sm"></span> Important</a>
                                                            <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-danger bullet-sm"></span> Private</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item mail-unread"><span class="action-icon"><i class="feather icon-mail"></i></span></li>
                                                <li class="list-inline-item mail-delete"><span class="action-icon"><i class="feather icon-trash"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="email-user-list list-group">
                                        <ul class="users-list-wrapper media-list">
                                            <li class="media mail-read">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img src="../app-assets/images/portrait/small/avatar-s-20.jpg" alt="avtar img holder">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Tonny Deep</h5>
                                                            <span class="list-group-item-text text-truncate">Focused impactful open system</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-success bullet-sm"></span><span class="mail-date">4:14 AM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text truncate mb-0">Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Louis Welch </h5>
                                                            <span class="list-group-item-text text-truncate">Thanks, Let's do it.</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-danger bullet-sm"></span> <span class="mail-date">2:15 AM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hi, Can we connect today? Cheesecake croissant jelly beans. Cake caramels pie chocolate. Muffin jujubes dragée carrot cake candy icing bonbon. Danish caramels topping oat cake sweet roll liquorice tootsie roll halvah.Chocolate bar jujubes jelly-o tart tiramisu croissant dragée cupcake jelly. </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media mail-read">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Envato Market</h5>
                                                            <span class="list-group-item-text text-truncate">You have new comment...</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-success bullet-sm"></span> <span class="mail-date">2:15 AM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hi There, Cotton candy jujubes ice cream candy. Oat cake jelly jelly brownie danish marzipan gummi bears. Cupcake sweet bonbon tart. Sweet croissant jelly beans dragée chocolate cake gingerbread topping chocolate bar lemon drops.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media mail-read">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Sarah Montgomery </h5>
                                                            <span class="list-group-item-text text-truncate">Your New UI.</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-warning bullet-sm"></span><span class="mail-date">Yesterday</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text text-truncate mb-0">Hello, Everything looks good. Pastry marshmallow sugar plum. Gingerbread bonbon fruitcake gummi bears wafer chocolate cake gummies tart ice cream. Danish topping biscuit dessert donut dessert. Chocolate jelly-o topping marzipan fruitcake.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Ardis Balderson</h5>
                                                            <span class="list-group-item-text text-truncate mb-0">Focused impactful open system</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <i class="fa-paperclip fa"></i> <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">15 July</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Modestine Spat</h5>
                                                            <span class="list-group-item-text text-truncate mb-0">Profound systemic alliance 🎉</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">11 July</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hey John, Parthenopean logeion chipwood tonsilitic cockleshell substance Stilbum dismayed tape Alderamin Phororhacos bridewain zoonomia lujaurite printline extraction weanedness charterless splitmouth bindoree unfit philological Pythonissa scintillescentcinchonism sabbaton thyrocricoid dissuasively schematograph immerse pristane stimulability unreligion uncomplemental uteritis nef bavenite Hachiman teleutosorus anterolateral infirmate Nahani Hyla barile farthing</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media mail-read">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Eb Begg</h5>
                                                            <span class="list-group-item-text text-truncate mb-0">Organized value-added model</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-success bullet-sm"></span> <span class="mail-date">1 July</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hello Sir, Lituola restrengthen bathofloric manciple decaffeinize Debby aciliated eatage proscribe prejurisdiction buttle quacky hyposecretion indemonstrableness schelling lymphopathy consumptivity nonappointment filminess spumiform erotogenicity equestrianize boneflower interlardationallocate ponzite cote guilder tuff strind blamefully cocaine monstrously apocalyptically sublanate cherubimical oligoplasmia Miltonian hydrazyl unbeset statured Unami Cordeau strouthiocamelian geitjie</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media mail-read">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Waldemar Mannering</h5>
                                                            <span class="list-group-item-text text-truncate mb-0">Quality-focused methodical flexibility</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-danger bullet-sm"></span> <span class="mail-date">19 Jun</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hi John, wartproof ketoheptose incomplicate hyomental organal supermaterial monogene sophister nizamate rightle multifilament phloroglucic overvehement boatloading derelictly probudgeting archantiquary unknighted pallograph Volcanalia Jacobitiana ethyl neth Jugataenoumenalize irredential energeia phlebotomist galp dactylitis unparticipated solepiece demure metarhyolite toboggan unpleased perilaryngeal binoxalate rabbitry atomic duali dihexahedron Pseudogryphus boomboat obelisk</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media mail-read">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Louetta Esses</h5>
                                                            <span class="list-group-item-text text-truncate mb-0">Company Report</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">2 Jun</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love carrot cake topping I love. Sweet candy I love</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Tressa Gass</h5>
                                                            <span class="list-group-item-text text-truncate mb-0">Theme Update</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">29 May</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate"> Hello John,Chocolate bar chupa chups sweet roll chocolate muffin macaroon liquorice tart. Carrot cake topping jelly-o cupcake sweet apple pie jelly I love. Chocolate cake I love dessert carrot cake tootsie roll chocolate I love. Tootsie roll pie marzipan sesame snaps.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Tommy Sicilia</h5>
                                                            <span class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">17 May</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love carrot cake topping I love. Sweet candy I love.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media mail-read">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img class="media-object rounded-circle" src="../app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Heather Howell</h5>
                                                            <span class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">21 Mar</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Marzipan carrot cake soufflé. Toffee tiramisu pudding cotton candy powder jujubes pie. Topping danish sweet croissant liquorice lemon drops cake oat cake brownie. Cupcake liquorice tart tootsie roll sugar plum chocolate bar oat cake sweet roll.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-results">
                                            <h5>No Items Found</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Email list Area -->
                            <!-- Detailed Email View -->
                            <div class="email-app-details">
                                <div class="email-detail-header">
                                    <div class="email-header-left d-flex align-items-center mb-1">
                                        <span class="go-back mr-1"><i class="feather icon-arrow-left font-medium-4"></i></span>
                                        <h3>Focused impactful open system 📷 😃</h3>
                                    </div>
                                    <div class="email-header-right mb-1 ml-2 pl-1">
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item"><span class="action-icon favorite"><i class="feather icon-star font-medium-5"></i></span></li>
                                            <li class="list-inline-item">
                                                <div class="dropdown no-arrow">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-folder font-medium-5"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-edit-2 mr-50"></i> Draft</a>
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-info mr-50"></i> Spam</a>
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-trash mr-50"></i> Trash</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown no-arrow">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-tag font-medium-5"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-success bullet-sm"></span> Personal</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-primary bullet-sm"></span> Company</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-warning bullet-sm"></span> Important</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-danger bullet-sm"></span> Private</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item"><span class="action-icon"><i class="feather icon-mail font-medium-5"></i></span></li>
                                            <li class="list-inline-item"><span class="action-icon"><i class="feather icon-trash font-medium-5"></i></span></li>
                                            <li class="list-inline-item email-prev"><span class="action-icon"><i class="feather icon-chevrons-left font-medium-5"></i></span></li>
                                            <li class="list-inline-item email-next"><span class="action-icon"><i class="feather icon-chevrons-right font-medium-5"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="email-scroll-area">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="email-label ml-2 my-2 pl-1">
                                                <span class="mr-1 bullet bullet-primary bullet-sm"></span><small class="mail-label">Company</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card px-1">
                                                <div class="card-header email-detail-head ml-75">
                                                    <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="avatar mr-75">
                                                            <img src="../app-assets/images/portrait/small/avatar-s-18.jpg" alt="avtar img holder" width="61" height="61">
                                                        </div>
                                                        <div class="mail-items">
                                                            <h4 class="list-group-item-heading mb-0">Ardis Balderson</h4>
                                                            <div class="email-info-dropup dropdown">
                                                                <span class="dropdown-toggle font-small-3" id="dropdownMenuButton200" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    abaldersong@utexas.edu
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right p-50" aria-labelledby="dropdownMenuButton200">
                                                                    <div class="px-25 dropdown-item">From: <strong> abaldersong@utexas.edu </strong></div>
                                                                    <div class="px-25 dropdown-item">To: <strong> johndoe@ow.ly </strong></div>
                                                                    <div class="px-25 dropdown-item">Date: <strong> 4:25 AM 13 Jan 2018 </strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                        <div class="mail-time mb-1">4:14 AM</div>
                                                        <div class="mail-date">17 May 2018</div>
                                                    </div>
                                                </div>
                                                <div class="card-body mail-message-wrapper pt-2 mb-0">
                                                    <div class="mail-message">
                                                        <p>Hey John,</p>
                                                        <p>bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto Chelonia</p>
                                                        <p>Freudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose</p>
                                                    </div>
                                                    <div class="mail-attachements d-flex">
                                                        <i class="feather icon-paperclip font-medium-5 mr-50"></i>
                                                        <span>Attachments</span>
                                                    </div>
                                                </div>
                                                <div class="mail-files py-2">
                                                    <div class="chip chip-primary">
                                                        <div class="chip-body py-50">
                                                            <span class="chip-text">interdum.docx</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <span class="font-medium-1">Click here to <span class="primary cursor-pointer"><strong>Reply</strong></span> or <span class="primary  cursor-pointer"><strong>Forward</strong></span></span>
                                                        <i class="feather icon-paperclip font-medium-5 mr-50"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Detailed Email View -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


</body>
<!-- END: Body-->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="../app-assets/vendors/js/editors/quill/quill.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../app-assets/js/core/app-menu.js"></script>
<script src="../app-assets/js/core/app.js"></script>
<script src="../app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../app-assets/js/scripts/pages/app-email.js"></script>
<!-- END: Page JS-->

</html>