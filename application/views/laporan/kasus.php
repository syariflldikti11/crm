<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script>
  window.print();
</script>
<style type="text/css">
 body{
  -webkit-print-color-adjust:exact;
}
</style>
<table width="100%" border="0">
  <tr>
    <td width="15%">
     <img src="<?= base_url();?>files/logo.png" alt="" class="user-image" width="100%"> </td>
    <td width="85%"><p align="center"><b><font size="+4">Tri Mandiri Sejati Daihatsu</font></b><br>
  
        <font size="-1">Jl. A. Yani No.Km. 4, Kebun Bunga, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70234</font>     
    </td>
  </tr>
</table>
<div style='mso-element:para-border-div;border:none;border-top:solid windowtext 3.0pt;
padding:1.0pt 0cm 0cm 0cm'>
<p>
 
 <?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
  return $hasil_rupiah;

}
?>
<center><font size="+1"><?= $judul; ?></font></center> <br />
<center><font size="-1"> PERIODE <?= date('d-m-Y', strtotime($dari)); ?> s/d <?= date('d-m-Y', strtotime($sampai)); ?></font></center> <br />
 <table class="w3-table-all">
                                   <thead>
                                        <tr class="w3-black" >
                                          
                                      <th><div align="center">No</div></th>
                   <th><div align="left">Tanggal Kasus</div></th>
                  <th><div align="left">Nama Pelanggan</div></th>
                   <th><div align="left">Nama Pegawai</div></th>
                  <th><div align="left">No WA Pelanggan</div></th>
                  <th><div align="left">Subject</div></th>
                  <th><div align="left">Deskripsi</div></th>
                  <th><div align="left">Balasan</div></th>   
                  <th><div align="left">Status</div></th>               
                 
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_kasus as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                    <td>
                    <div align="left">
                      <?= $d->tgl_kasus; ?>
                    </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_pelanggan; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->nama_lengkap; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->no_wa; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->subject; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->deskripsi; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->balasan; ?>
                    </div></td>
                   <td>
                    <div align="left">
                     
                       <?php if($d->status==0): ?><label class="label label-primary">Dibuka</label><?php endif;?>
                     <?php if($d->status==1): ?><label class="label label-success">Selesai</label><?php endif;?>
                      <?php if($d->status==2): ?><label class="label label-danger">Ditutup</label><?php endif;?>
                    </div></td>
                   
                   
                     
                       
                    </tr>
                                             <?php endforeach; ?>
                                    </tbody>
                                </table>

