<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tri Mandiri Sejati Daihatsu </title>
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
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url(); ?>\files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\icon\font-awesome\css\font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
     <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>files\bower_components\owl.carousel\css\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>files\bower_components\owl.carousel\css\owl.theme.default.css">
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>files\bower_components\swiper\css\swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font --><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\files\assets\icon\feather\css\feather.css">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\files\assets\pages\prism\prism.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\files\assets\css\jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\files\assets\css\pcoded-horizontal.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <style>


/* Add WA floating button CSS */
.floating {
position: fixed;
width: 60px;
height: 60px;
bottom: 40px;
right: 40px;
background-color: #25d366;
color: #fff;
border-radius: 50px;
text-align: center;
font-size: 30px;
box-shadow: 2px 2px 3px #999;
z-index: 100;
}

.fab-icon {
margin-top: 16px;
}
</style>
</head>
<!-- Menu horizontal fixed layout -->

<body>
<!-- render the button and direct it to wa.me -->
<a href="https://wa.me/6285867845672?text=Hi%20Qiscus" class="floating" target="_blank">
<i class="fa fa-whatsapp "></i>
</a>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">

        <div class="pcoded-container">
            <!-- Menu header start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="<?php echo base_url ('user'); ?>">
                            <img class="img-fluid" src="<?= base_url(); ?>\files\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                       
                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url(); ?>\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>  <?= $this->session->userdata('ses_nama'); ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                       
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                       
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
            <!-- Menu header end -->
            <div class="pcoded-main-container">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar">
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="<?php echo base_url ('user'); ?>">
                                    <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                                    <span class="pcoded-mtext">Home</span>
                                   
                                </a>
                              
                            </li>
                          
                         
                             <li class="pcoded-hasmenu">
                                <a href="<?php echo base_url ('user/service'); ?>">
                                    <span class="pcoded-micon"><i class="fa fa-gears"></i></span>
                                    <span class="pcoded-mtext">Service</span>
                                   
                                </a>
                              
                            </li>
                             <li class="pcoded-hasmenu">
                                <a href="<?php echo base_url ('user/promo'); ?>">
                                    <span class="pcoded-micon"><i class="fa fa-percent"></i></span>
                                    <span class="pcoded-mtext">Promo</span>
                                   
                                </a>
                              
                            </li>
                             <li class="pcoded-hasmenu">
                                <a href="<?php echo base_url ('user/event'); ?>">
                                    <span class="pcoded-micon"><i class="fa fa-calendar"></i></span>
                                    <span class="pcoded-mtext">Event</span>
                                   
                                </a>
                              
                            </li>
                             <li class="pcoded-hasmenu">
                                <a href="<?php echo base_url ('user/solusi'); ?>">
                                    <span class="pcoded-micon"><i class="fa fa-question"></i></span>
                                    <span class="pcoded-mtext">Solusi</span>
                                   
                                </a>
                              
                            </li>
                           
                           
 <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-shopping-cart"></i></span>
                                    <span class="pcoded-mtext">Transaksi</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                  
                                    <li class="">
                                        <a href="<?php echo base_url ('user/penawaran'); ?>" data-i18n="nav.disabled-menu.main" class="disabled">
                                            <span class="pcoded-micon"><i class="ti-na"></i></span>
                                            <span class="pcoded-mtext">Penawaran</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url ('user/pesanan'); ?>" data-i18n="nav.sample-page.main">
                                            <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>
                                            <span class="pcoded-mtext">Pesanan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            
                          
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-phone"></i></span>
                                    <span class="pcoded-mtext">Hubungi Kami</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                  
                                    <li class="">
                                        <a href="<?php echo base_url ('user/konsultasi'); ?>" data-i18n="nav.disabled-menu.main" class="disabled">
                                            <span class="pcoded-micon"><i class="ti-na"></i></span>
                                            <span class="pcoded-mtext">Konsultasi</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url ('user/kasus'); ?>" data-i18n="nav.sample-page.main">
                                            <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>
                                            <span class="pcoded-mtext">Kasus</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                             <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                    <span class="pcoded-mtext">Laporan</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                  
                                    <li class="">
                                        <a href="#" data-toggle="modal" data-target="#penawaran" data-i18n="nav.disabled-menu.main" class="disabled">
                                            <span class="pcoded-micon"><i class="ti-na"></i></span>
                                            <span class="pcoded-mtext">Penawaran</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                         <a href="#" data-toggle="modal" data-target="#pesanan" data-i18n="nav.disabled-menu.main" class="disabled">
                                            <span class="pcoded-micon"><i class="ti-na"></i></span>
                                            <span class="pcoded-mtext">Pesanan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                 <div class="modal fade" id="pesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Laporan Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open('user/laporan_pesanan'); ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Dari</label>
                        <input type="date" name="dari" class="form-control">
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Sampai</label>
                        <input type="date" name="sampai" class="form-control">
                        
                      </div>
                        
                     
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit"  class="btn btn-primary btn-pill" value="Submit">
                  </div>
                  </form>
                </div>
              </div>
            </div>
                 <div class="modal fade" id="penawaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Laporan Penawaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open('user/laporan_penawaran'); ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Dari</label>
                        <input type="date" name="dari" class="form-control">
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Sampai</label>
                        <input type="date" name="sampai" class="form-control">
                        
                      </div>
                        
                     
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit"  class="btn btn-primary btn-pill" value="Submit">
                  </div>
                  </form>
                </div>
              </div>
            </div>
                <!-- Sidebar chat start -->
                <div id="sidebar" class="users p-chat-user showChat">
                    <div class="had-container">
                        <div class="card card_main p-fixed users-main">
                            <div class="user-box">
                                <div class="chat-inner-header">
                                    <div class="back_chatBox">
                                        <div class="right-icon-control">
                                            <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                            <div class="form-icon">
                                                <i class="icofont icofont-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-friend-list">
                                    <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius img-radius" src="<?= base_url(); ?>\files\assets\images\avatar-3.jpg" alt="Generic placeholder image ">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Josephin Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="<?= base_url(); ?>\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Lary Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="<?= base_url(); ?>\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alice</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="<?= base_url(); ?>\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alia</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="<?= base_url(); ?>\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Suzen</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar inner chat start-->
                <div class="showChat_inner">
                    <div class="media chat-inner-header">
                        <a class="back_chatBox">
                            <i class="feather icon-chevron-left"></i> Josephin Doe
                        </a>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="<?= base_url(); ?>\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                        <div class="media-right photo-table">
                            <a href="#!">
                                <img class="media-object img-radius img-radius m-t-5" src="<?= base_url(); ?>\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                            </a>
                        </div>
                    </div>
                    <div class="chat-reply-box p-b-20">
                        <div class="right-icon-control">
                            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                            <div class="form-icon">
                                <i class="feather icon-navigation"></i>
                            </div>
                        </div>
                    </div>
                </div>
 <div class="pcoded-wrapper">
                        <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                     <div class="page-body m-t-50">          


<?= $contents; ?>


                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  

   





<!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this webuser.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\modernizr\js\css-scrollbars.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>files\assets\pages\data-table\js\jszip.min.js"></script>
<script src="<?php echo base_url(); ?>files\assets\pages\data-table\js\pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>files\assets\pages\data-table\js\vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <!-- Syntax highlighter prism js -->
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\owl.carousel\js\owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>files\assets\js\owl-custom.js"></script>
<!-- swiper js -->
<script type="text/javascript" src="<?= base_url(); ?>files\bower_components\swiper\js\swiper.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>files\assets\js\swiper-custom.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\assets\pages\prism\custom-prism.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script src="<?php echo base_url(); ?>files\assets\pages\data-table\js\data-table-custom.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script src="<?= base_url(); ?>files\assets\js\pcoded.min.js"></script>
    <script src="<?= base_url(); ?>files\assets\js\menu\menu-hori-fixed.js"></script>
    <script src="<?= base_url(); ?>files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>files\assets\js\script.js"></script>
<!-- Global user tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script type="text/javascript">


  <?php if ($this->session->flashdata('success')) { ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
  <?php } else if ($this->session->flashdata('delete')) { ?>
      toastr.error("<?php echo $this->session->flashdata('delete'); ?>");
  <?php } else if ($this->session->flashdata('update')) { ?>
        toastr.info("<?php echo $this->session->flashdata('update'); ?>");
  <?php } ?>


</script>
</body>

</html>