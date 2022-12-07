<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
<title>Dashboard | Adminto - Responsive Admin Dashboard Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
<link href="assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<link href="assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
<link href="assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled="disabled" />

<!-- icons -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">
         <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." id="top-search">
                            <button class="btn input-group-text" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </li>
    
            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>
            
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">
    
                    <!-- item-->
                    
    
                    <div class="noti-scroll" data-simplebar>

                </div>
            </li>
    
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        Putra<i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>
    
                    <!-- item-->
                    <a href="contacts-profile.html" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>
    
                    <!-- item-->
    
    
                    <!-- item-->
                    <a href="auth-logout.html" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
    
                </div>
            </li>
    
            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                </a>
            </li>
    
        </ul>
    
        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-light text-center">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="50">
                </span>
            </a>
            
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>
             
        </ul>

        <div class="clearfix"></div> 
        
    </div>
</div>
<!-- end Topbar -->

            <div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="admin_index.php" id="topnav-dashboard" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard me-1"></i> Manage Produk
                        </a>
                        
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  arrow-none" href="admin_user.php" id="topnav-ui" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-invert-colors me-1"></i> Manage User
                        </a>

                        <div class="" aria-labelledby="topnav-ui">
                            <div class="row">
                                <div class="col-lg-4">
                    <li class="">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-grid me-1"></i> Manage kategori  
                        </a>
                    
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  arrow-none" href="#" id="topnav-layout" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-card-bulleted-settings-outline me-1"></i> Transaksi 
                        </a>
                    
                    </li>
                </ul> <!-- end navbar-->
            </div> <!-- end .collapsed-->
        </nav>
    </div> <!-- end container-fluid -->
</div> <!-- end topnav-->