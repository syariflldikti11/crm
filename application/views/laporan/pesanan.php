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
                  <th><div align="left">Tanggal</div></th>
                  <th><div align="left">Nama Pelanggan</div></th>
                  <th><div align="left">Email</div></th>
                  <th><div align="left">No HP</div></th>
                  <th><div align="left">Nama Mobil</div></th>
                  <th><div align="left">Nama Sales</div></th>
                  <th><div align="left">Keterangan</div></th>
                  <th><div align="left">Harga</div></th>
                 
               
                  <th><div align="left">Status</div></th>                
                                
                  
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_pesanan as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                   <td>
                    <div align="left">
                      <?= $d->tgl_pesanan; ?>
                    </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_pelanggan; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->email; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->no_wa; ?>
                    </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_mobil; ?>
                    </div></td>
                     <td>
                    <div align="left">
                     <?= $d->nama_lengkap; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->keterangan; ?>
                    </div></td>
                   <td>
                    <div align="left">
                     <?= rupiah($d->harga_otr); ?>
                    </div></td>
                  
                    
                    <td>
                    <div align="left">
                       <?php if($d->status==1): ?><label class="label label-primary">Proses</label><?php endif;?>
                     <?php if($d->status==3): ?><label class="label label-success">Selesai</label><?php endif;?>
                      <?php if($d->status==2): ?><label class="label label-danger">Batal</label><?php endif;?>
                       <?php if($d->status==0): ?><label class="label label-inverse">Menunggu</label><?php endif;?>
                    </div></td>
                   
                     
                       
                    </tr>
                                             <?php endforeach; ?>
                                    </tbody>
                                </table>

