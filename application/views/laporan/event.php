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
                  <th><div align="left">Nama Event</div></th>
                  <th><div align="left">Ket</div></th>
                  <th><div align="left">Tgl Event</div></th>
                
                  
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_event as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_event; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->ket; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->tgl_event; ?>
                    </div></td>
                   
                     
                       
                    </tr>
                                             <?php endforeach; ?>
                                    </tbody>
                                </table>

