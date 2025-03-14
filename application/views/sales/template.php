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
                        <a href="<?php echo base_url ('pegawai'); ?>">
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
                                    <a href="<?php echo base_url ('sales'); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>


                              
                                </li>
                          
                               
                              
                            </ul>
                            
                    <div class="pcoded-navigatio-lavel">Manajemen Penjualan</div>
                     <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('sales/penawaran'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-heart"></i></span>
                                        <span class="pcoded-mtext">Penawaran</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                      <ul class="pcoded-item pcoded-left-item">
                                 <li class="">
                                    <a href="<?php echo base_url ('sales/pesanan'); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="pcoded-mtext">Pesanan</span>
                                        
                                    </a>  
                                </li>
                    </ul>
                   
                      
                           
                     
                         
                           <div class="pcoded-navigatio-lavel">Manajemen Laporan</div>
                                <ul class="pcoded-item pcoded-left-item">
                                   
                          
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
    echo form_open('sales/laporan_konsultasi'); ?>
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
    echo form_open('sales/laporan_kasus'); ?>
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
    echo form_open('sales/laporan_event'); ?>
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
    echo form_open('sales/laporan_pesanan'); ?>
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
    echo form_open('sales/laporan_penawaran'); ?>
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
    echo form_open('sales/laporan_promo'); ?>
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
