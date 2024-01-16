<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, monster admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, "
    />
    <meta
      name="description"
      content="Monster is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>eSakip</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/monsteradmin/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?= base_url(); ?>/assets/backend/assets/images/logo.ico"
    />
    <!-- Custom CSS -->
   
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url(); ?>/assets/backend/assets/libs/select2/dist/css/select2.min.css"
    />
    <link href="<?= base_url(); ?>/assets/backend/dist/css/style.min.css" rel="stylesheet" />
    <link
      href="<?= base_url(); ?>/assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
    <link
      href="<?= base_url(); ?>/assets/backend/assets/extra-libs/toastr/dist/build/toastr.min.css"
      rel="stylesheet"
    />
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <?php
      $id=$this->session->userdata('id');
			$tahun=$this->session->userdata('tahun');
  $queryy=$this->db->query("SELECT sum(jumlah_kirim_kembali) as jumlah from sakip_iku where id_bagian='$id' and tahun_iku=$tahun");
      foreach ($queryy->result() as $c) :?>

<?php $jml_kembali=$c->jumlah; ?>
<?php endforeach;?>

 <?php
      $idd=$this->session->userdata('id');
			$tahunn=$this->session->userdata('tahun');
  $query=$this->db->query("SELECT count(status_analisa) as jumlahh from sakip_analisa join sakip_iku on sakip_analisa.id_iku=sakip_iku.id_iku where id_bagian='$id' and tahun_iku=$tahun and status_analisa=2");
      foreach ($query->result() as $a) :?>

<?php $jml_kembali_analisa=$a->jumlahh; ?>
<?php endforeach;?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="<?= base_url('pj'); ?>">
              <!-- Logo icon -->
              <span class="logo-text">
            <img  alt="homepage" width="90%"
                  class="dark-logo"
                  src="<?= base_url(); ?>/assets/backend/assets/images/logoesakip.png"
                
                
                />
             
              
    </span>
              <!--End Logo icon -->
              <!-- Logo text -->
            
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ti-more"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
              <li class="nav-item d-none d-md-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="icon-arrow-left-circle"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
             
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- mega menu -->
              <!-- ============================================================== -->
             
              <!-- ============================================================== -->
              <!-- End mega menu -->
              <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
            
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
             
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="<?= base_url(); ?>/assets/backend/assets/images/logodikbud.jpg"
                    alt="user"
                    width="30"
                    class="profile-pic rounded-circle"
                  />
                </a>
                <div
                  class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  "
                >
                 
                
              
                  <a class="dropdown-item" data-bs-toggle="modal"
                        data-bs-target="#ganti" href="#"
                    ><i
                      data-feather="settings"
                      class="feather-sm text-warning me-1 ms-1"
                    ></i>
                    Ganti Password</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('login_sakip/logout'); ?>"
                    ><i
                      data-feather="log-out"
                      class="feather-sm text-danger me-1 ms-1"
                    ></i>
                    Logout</a
                  >
                  
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Language  -->
              <!-- ============================================================== -->
              
            </ul>
          </div>
        </nav>
      </header>
      <div
                        id="ganti"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="ganti"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Ganti Password
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">

                         <?php  
             echo validation_errors();                       
    echo form_open_multipart('pj/ganti_password'); ?>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Password</label>
                       <input type="password" class="form-control" name="password">
                        
                      </div>
                        
             
                   
                            </div>
                            <div class="modal-footer">
                            <input type="submit" name="submit"  class="btn btn-info btn-pill" value="Submit">
                              <button
                                type="button"
                                class="btn btn-danger btn-pill"
                                data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
                </form>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li>
                <!-- User profile -->
                <div
                  class="user-profile text-center position-relative pt-4 mt-1"
                >
                  <!-- User profile image -->
                 
                   
    <div class="profile-img m-auto">
                    <img
                      src="<?= base_url(); ?>/assets/backend/assets/images/logodikbud.jpg"
                      alt="user"
                      class="w-100 rounded-circle"
                    />
                  </div>
                  
                  <!-- User profile text-->
                  <div class="profile-text py-1">
            
         
<?= $this->session->userdata('ses_id'); ?>


                   
                  </div>
                </div>
                <!-- End User profile text-->
              </li>
              <!-- User Profile-->
            
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="<?= base_url('pj'); ?>"
                  aria-expanded="false"
                  ><i data-feather="home" class="feather-icon"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
          
          
              <!--<li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="folder" class="feather-icon"></i
                  ><span class="hide-menu">Master Data </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                <?php if($this->session->userdata('akses')=='1') :?> 
                <li class="sidebar-item">
                    <a   href="<?= base_url('pj/standar_layanan'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-quilt"></i
                      ><span class="hide-menu"> Standar Layanan </span></a
                    >
                  </li>
                  <?php endif; ?>
                  <li class="sidebar-item">
                    <a   href="<?= base_url('pj/pts'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-quilt"></i
                      ><span class="hide-menu"> PTS </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a  href="<?= base_url('pj/prodi'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu"> Prodi </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a  href="<?= base_url('pj/dosen'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu"> Dosen </span></a
                    >
                  </li>
                 
                 
                </ul>
              </li>!-->
                  <?php if($this->session->userdata('jenis')<>'3' ) :?>  
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="target" class="feather-icon"></i
                  ><span class="hide-menu">Target </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a  href="<?= base_url('pj/target_kinerja'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-quilt"></i
                      ><span class="hide-menu"> Target kinerja </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a  href="<?= base_url('pj/renaksi'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu"> Rencana Aksi Triwulan </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                    href="<?= base_url('pj/iku'); ?>"
                      class="sidebar-link"
                      ><i class="mdi mdi-view-day"></i
                      ><span class="hide-menu"> IKU LLDIKTI XI </span></a
                    >
                  </li>
                 
                </ul>
              </li>
            <?php endif; ?>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i
                  ><span class="hide-menu">Program Kerja </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  
                  <li class="sidebar-item">
                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-playlist-plus"></i>
                      <span class="hide-menu">Usulan Proker</span></a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="<?= base_url('pj/usulan_tb'); ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Tahun Berjalan</span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="<?= base_url('pj/usulan_td'); ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Tahun Depan</span></a>
                      </li>
                    
                    </ul>
                  </li>
                   <li class="sidebar-item">
                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-playlist-plus"></i>
                      <span class="hide-menu">Data Proker</span></a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="<?= base_url('pj/proker_tb'); ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Tahun Berjalan</span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="<?= base_url('pj/proker_td'); ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Tahun Depan</span></a>
                      </li>
                    
                    </ul>
                  </li>

                  <li class="sidebar-item">
                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-playlist-plus"></i>
                      <span class="hide-menu">Kalender Proker</span></a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="<?= base_url('pj/kalender_proker_tb'); ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Tahun Berjalan</span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="<?= base_url('pj/kalender_proker_td'); ?>" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Tahun Depan</span></a>
                      </li>
                    
                    </ul>
                  </li>
                 
                </ul>
              </li>
               <?php if($this->session->userdata('jenis')=='1' ) :?>
            
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="activity" class="feather-icon"></i
                  ><span class="hide-menu">Capaian Kinerja </span> <span class="badge badge-pill bg-danger"><?= $hasil=$jml_kembali+$jml_kembali_analisa; ?></span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a   href="<?= base_url('pj/capaian_kinerja'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-quilt"></i
                      ><span class="hide-menu"> Capaian Kinerja  </span><span class="badge badge-pill bg-danger"><?= $jml_kembali; ?></span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url('pj/analisa'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu"> Analisa Capaian </span><span class="badge badge-pill bg-danger"><?= $jml_kembali_analisa; ?></span></a
                    >
                  </li>
                   <li class="sidebar-item">
                    <a href="<?= base_url('pj/pengukuran_kinerja'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu">Pengukuran Kinerja </span></a
                    >
                  </li>
                 
                </ul>
              </li>
            <?php endif; ?>
             <?php if($this->session->userdata('jenis')=='2' ) :?>
            
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="activity" class="feather-icon"></i
                  ><span class="hide-menu">Capaian Kinerja </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a   href="<?= base_url('pj/capaian_kinerja_spi'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-quilt"></i
                      ><span class="hide-menu"> Capaian Kinerja  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url('pj/analisa_spi'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu"> Analisa Capaian </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= base_url('pj/pengukuran_kinerja'); ?>" class="sidebar-link"
                      ><i class="mdi mdi-view-parallel"></i
                      ><span class="hide-menu">Pengukuran Kinerja </span></a
                    >
                  </li>
                  
                 
                </ul>
              </li>
            <?php endif; ?>

              
             
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        
        <!-- End Bottom points-->
      </aside>



      <div class="page-wrapper">
      
        <?=$contents?>
      
        <footer class="footer">All right reserved LLDIKTI XI.</footer>

      </div>
     
    </div>
   

   
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   <script src="<?= base_url(); ?>assets/backend/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url(); ?>assets/backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="<?= base_url(); ?>assets/backend/dist/js/app.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/dist/js/app.init.js"></script>
    <script src="<?= base_url(); ?>assets/backend/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url(); ?>assets/backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url(); ?>assets/backend/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url(); ?>assets/backend/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/backend/dist/js/feather.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/dist/js/custom.min.js"></script>

    <script src="<?= base_url(); ?>assets/backend/dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="<?= base_url(); ?>assets/backend/assets/libs/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/dist/js/pages/datatable/custom-datatable.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
   
    <script src="<?= base_url(); ?>assets/backend/assets/extra-libs/toastr/dist/build/toastr.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/assets/extra-libs/toastr/toastr-init.js"></script>
    
   <script src="<?= base_url(); ?>assets/backend/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/dist/js/pages/forms/select2/select2.init.js"></script>
       <script src="<?= base_url(); ?>assets/backend/dist/js/pages/datatable/datatable-advanced.init.js"></script>
       <script>
        //setting datatables
        $('#zero_config').DataTable({
            "cache": true, 
        });
    </script>
    <script type="text/javascript">


<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('delete')){  ?>
    toastr.error("<?php echo $this->session->flashdata('delete'); ?>");
<?php }else if($this->session->flashdata('update')){  ?>
    toastr.info("<?php echo $this->session->flashdata('update'); ?>");
<?php } ?>


</script>
<script>
$(document).ready(function(){
  $('[data-tooltip="tooltip"]').tooltip();   
});
</script>
  </body>
</html>
