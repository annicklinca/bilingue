<?php
  include '../connection.php'; 
  include 'admin_session.php';  



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Mbabazi Homes</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CodedThemes">
        <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="CodedThemes">
        <!-- Favicon icon -->
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
        <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script> 
    </head>

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div class='contain'>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">

                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">

                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <a class="mobile-search morphsearch-search" href="#">
                                <i class="ti-search"></i>
                            </a>
                            <a href="index.php">
                                Mbabazi Homes
                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>

                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>

                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <i class="ti-user" style=" border-radius:5px; background-color:skyblue; padding: 12px;"></i>
                                        <span><?php echo $admin_username ?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="signout.php">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="index.php">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-write"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Add Content</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                        <li>
                                        <a href="about.php">
                                            <span class="pcoded-micon"><i class="ti-comments-smiley"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">About Page</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    
                                    <li class="active">
                                        <a href="addservice.php">
                                            <span class="pcoded-micon"><i class="ti-comments-smiley"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Service Page</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="training.php">
                                            <span class="pcoded-micon"><i class="ti-comments-smiley"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Training Page</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="career.php">
                                            <span class="pcoded-micon"><i class="ti-comments-smiley"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Career Page</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-write"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">CLIENTS FILES</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                        <li>
                                        <a href="printtest.php">
                                            <span class="pcoded-micon"><i class="ti-comments-smiley"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">tEST PRINT</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                   
                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Contact Us </div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li>
                                        <a href="contact.php">
                                            <span class="pcoded-micon"><i class="ti-comments-smiley"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add Contact</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="message.php">
                                            <span class="pcoded-micon"><i class="ti-comments-smiley"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">View Message</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </nav>