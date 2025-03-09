<?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
  return $hasil_rupiah;

}
?>
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
<script>
  window.print();
</script>
  <div class="card">
                                                    <div class="row invoice-contact">
                                                        <div class="col-md-8">
                                                            <div class="invoice-box row">
                                                                <div class="col-sm-12">
                                                                    <table class="table invoice-table table-borderless">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><img src="<?= base_url();?>files/logo.png" class="m-b-10" alt="" width="100px"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tri Mandiri Sejati Daihatsu</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Jl. A. Yani No.Km. 4, Kebun Bunga, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70234</td>
                                                                            </tr>
                                                                           
                                                                            <tr>
                                                                                <td>085867845672</td>
                                                                            </tr>
                                                                            <!-- <tr>
                                                            <td><a href="#" target="_blank">www.demo.com</a>
                                                            </td>
                                                        </tr> -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row invoive-info">
                                                            <div class="col-md-4 col-xs-12 invoice-client-info">
                                                                 <h6>INVOIECE PESANAN PELANGGAN</h6>
                                                                <h6>Informasi Pelanggan :</h6>
                                                                <h6 class="m-0"><?= $d->nama_pelanggan; ?></h6>
                                                                <p class="m-0 m-t-10"><?= $d->alamat; ?></p>
                                                                <p class="m-0"><?= $d->no_wa; ?></p>
                                                               
                                                            </div>
                                                            <div class="col-md-4 col-sm-6">
                                                                <h6>Informasi Pesanan:</h6>
                                                                <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Tanggal pesanan :</th>
                                                                            <td><?= $d->tgl_pesanan; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Status :</th>
                                                                            <td>
                                                                                 <?php if($d->status==1): ?><label class="label label-primary">Proses</label><?php endif;?>
                     <?php if($d->status==3): ?><label class="label label-success">Selesai</label><?php endif;?>
                      <?php if($d->status==2): ?><label class="label label-danger">Batal</label><?php endif;?>
                       <?php if($d->status==0): ?><label class="label label-inverse">Menunggu</label><?php endif;?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Id :</th>
                                                                            <td>
                                                                                #<?= substr($d->id_pesanan, 0, 8); ?>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                          
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                
                                                                    <table class="table  invoice-detail-table">
                                                                        <thead>
                                                                            <tr class="thead-default">
                                                                                <th>Nama Mobil</</th>
                  <th>Nama Sales</th>
                  <th>Keterangan</th>
                  <th>Harga</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                
                      <?= $d->nama_mobil; ?>
                    </td>
                     <td>
                    
                     <?= $d->nama_lengkap; ?>
                    </td>
                    <td>
                    
                      <?= $d->keterangan; ?>
                    </td>
                   <td>
                    
                     <?= rupiah($d->harga_otr); ?>
                    </td>
                                                                            </tr>
                                                                           
                                                                        </tbody>
                                                                    </table>
                                                            
                                                            </div>
                                                        </div>
                                                       
                                                     <!--    <div class="row">
                                                            <div class="col-sm-12">
                                                                <h6>Terms And Condition :</h6>
                                                                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>


                                            