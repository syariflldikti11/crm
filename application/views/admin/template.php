<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRM - App </title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files\assets\icon\font-awesome\css\font-awesome.min.css">
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
                        <a href="<?php echo base_url ('admin'); ?>">
                            <img class="img-fluid" src="<?php echo base_url(); ?>files\assets\images\logo.png" alt="Theme-Logo">
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
                                        <img src="<?php echo base_url(); ?>files\assets\images\user.png" class="img-radius" alt="User-Profile-Image">
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
                          
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url ('admin'); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>


                              
                                </li>
                          
                               
                              
                            </ul>
                             <div class="pcoded-navigatio-lavel">Master Data</div>
                        <ul class="pcoded-item pcoded-left-item">
                             <li class="">
                                    <a href="<?php echo base_url ('admin/pengguna'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                        <span class="pcoded-mtext">Pengguna</span>
                                        
                                    </a>  
                                </li>
                                 <li class="">
                                    <a href="<?php echo base_url ('admin/banner'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-image"></i></span>
                                        <span class="pcoded-mtext">Banner</span>
                                        
                                    </a>  
                                </li>
                                   </ul>
                            <div class="pcoded-navigatio-lavel">Manajemen Produk</div>
                             <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                        <a href="<?php echo base_url ('admin/model_mobil'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-car"></i></span>
                                        <span class="pcoded-mtext">Model Mobil</span>
                                    </a></li></ul>
                              <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                        <a href="<?php echo base_url ('admin/mobil'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-car"></i></span>
                                        <span class="pcoded-mtext">Mobil</span>
                                    </a></li></ul>
                                    <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                        <a href="<?php echo base_url ('admin/service'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-gears"></i></span>
                                        <span class="pcoded-mtext">Service</span>
                                    </a></li></ul>
                           
                          
                        
                        
<div class="pcoded-navigatio-lavel">Manajemen Pemasaran</div>
                     <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('admin/event'); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                      <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('admin/promo'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-bullhorn"></i></span>
                                        <span class="pcoded-mtext">Promo</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                    <div class="pcoded-navigatio-lavel">Manajemen Penjualan</div>
                     <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('admin/penawaran'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-heart"></i></span>
                                        <span class="pcoded-mtext">Penawaran</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                      <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('admin/pesanan'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="pcoded-mtext">Pesanan</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                      <div class="pcoded-navigatio-lavel">Manajemen Pelanggan</div>
                        <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('admin/pelanggan'); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">Pelanggan</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                       <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                        <a href="<?php echo base_url ('admin/solusi'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-question"></i></span>
                                        <span class="pcoded-mtext">Solusi</span>
                                    </a></li></ul>
                                     <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                        <a href="<?php echo base_url ('admin/konsultasi'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-headphones"></i></span>
                                        <span class="pcoded-mtext">Konsultasi</span>
                                    </a></li></ul>
                                    <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                        <a href="<?php echo base_url ('admin/kasus'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-briefcase"></i></span>
                                        <span class="pcoded-mtext">Kasus</span>
                                    </a></li>

                                </ul>
                                <div class="pcoded-navigatio-lavel">Manajemen Laporan</div>
                                <ul class="pcoded-item pcoded-left-item">
                                     <li class="">
                        <a href="<?php echo base_url ('admin/laporan_pelanggan'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Pelanggan</span>
                                    </a></li>
                           <li class="">
                        <a href="<?php echo base_url ('admin/laporan_mobil'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Mobil</span>
                                    </a></li>
                                     <li class="">
                        <a href="<?php echo base_url ('admin/laporan_service'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Service</span>
                                    </a></li>
                                     <li class="">
                        <a href="#" data-toggle="modal" data-target="#event">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Event</span>
                                    </a></li>
                                     <li class="">
                        <a href="#" data-toggle="modal" data-target="#promo">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Promo</span>
                                    </a></li>
                                    <li class="">
                        <a href="#" data-toggle="modal" data-target="#pesanan">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Pesanan</span>
                                    </a></li>
                                    <li class="">
                        <a href="#" data-toggle="modal" data-target="#penawaran">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Penawaran</span>
                                    </a></li>
                                     <li class="">
                        <a href="#" data-toggle="modal" data-target="#konsultasi">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Konsultasi</span>
                                    </a></li>
                                    <li class="">
                        <a href="#" data-toggle="modal" data-target="#kasus">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Laporan Kasus</span>
                                    </a></li>
              </ul>
                        </div>

                    </nav>
                     <div class="modal fade" id="konsultasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Laporan Konsultasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open('admin/laporan_konsultasi'); ?>
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
                     <div class="modal fade" id="kasus" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Laporan Kasus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open('admin/laporan_kasus'); ?>
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
                <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Laporan Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open('admin/laporan_event'); ?>
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
    echo form_open('admin/laporan_pesanan'); ?>
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
    echo form_open('admin/laporan_penawaran'); ?>
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

 <div class="modal fade" id="promo" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Laporan Promo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open('admin/laporan_promo'); ?>
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

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                     
          
<?= $contents; ?>
<?php


$query=$this->db->query("Select FORMAT(AVG(penilaian), 1) as kasusp from kasus where penilaian !=0");
 foreach ($query->result() as $t) :?>
<?php $kasusp=$t->kasusp; ?>
 <?php endforeach; ?>

 <?php


$query=$this->db->query("Select FORMAT(AVG(penilaian), 1) as konsultasip from konsultasi where penilaian !=0");
 foreach ($query->result() as $f) :?>
<?php $konsultasip=$f->konsultasip; ?>
 <?php endforeach; ?>

 <?php


$query=$this->db->query("Select FORMAT(AVG(penilaian), 1) as pesananp from pesanan where penilaian !=0");
 foreach ($query->result() as $p) :?>
<?php $pesananp=$p->pesananp; ?>
 <?php endforeach; ?>

 <?php


$query=$this->db->query("Select FORMAT(AVG(penilaian), 1) as penawaranp from penawaran where penilaian !=0");
 foreach ($query->result() as $fs) :?>
<?php $penawaranp=$fs->penawaranp; ?>
 <?php endforeach; ?>
                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   





<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\jquery\js\jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\jquery\js\jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\popper.js\js\popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\bootstrap\js\bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\modernizr\js\modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\modernizr\js\css-scrollbars.js"></script>

<!-- data-table js -->
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>files\assets\pages\data-table\js\jszip.min.js"></script>
<script src="<?php echo base_url(); ?>files\assets\pages\data-table\js\pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>files\assets\pages\data-table\js\vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\select2\js\select2.full.min.js"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\bootstrap-multiselect\js\bootstrap-multiselect.js">


</script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\multiselect\js\jquery.multi-select.js"></script>

<script src="<?php echo base_url(); ?>files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\i18next\js\i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
<!-- Custom js -->
<script src="<?php echo base_url(); ?>files\assets\pages\data-table\js\data-table-custom.js"></script>

<script src="<?php echo base_url(); ?>files\assets\js\pcoded.min.js"></script>
<script src="<?php echo base_url(); ?>files\assets\js\vartical-layout.min.js"></script>
<script src="<?php echo base_url(); ?>files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>files\assets\js\script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'area',
  },
  title: {
   text: '',
   x: -20
  },
  subtitle: {
   text: '',
   x: -20
  },
  xAxis: {
   categories: ['Kasus', 'Konsultasi', 'Pesanan', 'Penawaran']
  },
  yAxis: {
   title: {
    text: 'Rata-rata'
   }
  },
  series: [{
   name: 'Penilaian',
   data: [<?= $kasusp; ?>, <?= $konsultasip; ?>, <?= $pesananp; ?>, <?= $penawaranp; ?>],
   color: 'blue'
 
  }
  
  ]
 });
}); 
</script>
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'sj',
   type: 'column',
  },
  title: {
   text: 'Tren Konsultasi dan Kasus',
   x: -20
  },
  subtitle: {
   text: '',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total'
   }
  },
  series: [{
   name: 'Kasus',
   data: <?php echo json_encode($grafik_kasus); ?>,
   color: 'red'
 
  },
  
  {
   name: 'Konsultasi',
   data: <?php echo json_encode($grafik_konsultasi); ?>,
   color: 'green'
 
  }
  ]

 });
}); 
</script>

<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'allpesanan',
   type: 'column',
  },
  title: {
   text: 'Pesanan',
   x: -20
  },
  subtitle: {
   text: '',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total'
   }
  },
  series: [{
   name: 'Semua Pesanan',
   data: <?php echo json_encode($grafik_pesanan_progress); ?>,
   color: 'red'
 
  },
  
  {
   name: 'Pesanan Deal',
   data: <?php echo json_encode($grafik_pesanan_selesai); ?>,
   color: 'green'
 
  }
  ]

 });
}); 
</script>
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'allpenawaran',
   type: 'line',
  },
  title: {
   text: 'Penawaran',
   x: -20
  },
  subtitle: {
   text: '',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total'
   }
  },
  series: [{
   name: 'Semua Penawaran',
   data: <?php echo json_encode($grafik_penawaran_progress); ?>,
   color: 'red'
 
  },
  
  {
   name: 'Penawaran Deal',
   data: <?php echo json_encode($grafik_penawaran_selesai); ?>,
   color: 'green'
 
  }
  ]

 });
}); 
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
