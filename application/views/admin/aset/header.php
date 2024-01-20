<!DOCTYPE html>
<html lang="en">

<head>
    <title>LHP-Online - Sistem Pengusulan LHP Online </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->


    
        <link rel="icon" href="<?php echo base_url(); ?>files\assets\images\bjm.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\icon\icofont\css\icofont.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>files\ckeditor\ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>files\ckeditor\style.js"></script>
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\icon\feather\css\feather.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\bower_components\jquery.steps\css\jquery.steps.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>files\bower_components\select2\css\select2.min.css">
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\bower_components\bootstrap-multiselect\css\bootstrap-multiselect.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\bower_components\multiselect\css\multi-select.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\css\jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
               
             
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
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="<?php echo base_url ('aset/index'); ?>">
                            <img class="img-fluid" src="<?php echo base_url(); ?>files\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                      
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink"><?php echo $notifikasi_aset; ?></span>
                                    </div>
                                   
                                </div>
                            </li>
                         
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>files\assets\images\user.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo $this->session->userdata('ses_id');  ?> </span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                       
                                        <li>
                                            <a href="<?php echo base_url ('login/logout'); ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

     
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                           <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url ('aset/index'); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>


                              
                                </li>
                          
                               
                              
                            </ul>
                           
                            <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('aset/hasil_usulan'); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                        <span class="pcoded-mtext">Data Usulan LHP</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                        
                        

                     <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('aset/rekap_usulan_selesai'); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                        <span class="pcoded-mtext">Rekap Usulan LHP</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                       <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                        <a href="<?php echo base_url ('aset/tracking'); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-eye"></i></span>
                                        <span class="pcoded-mtext">Tracking</span>
                                    </a></li></ul>
                       
                           
                     
                         
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                     