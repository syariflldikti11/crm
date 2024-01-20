<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
    color: #000000;
    font-weight: bold;
}
-->
</style>
</head>
 <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekap usulan lhp .xls");
?>
<body>
    <?php $dari=$_POST['dari']; 
  $sampai=$_POST['sampai'];
  
  ?>
<?php 

function rupiah($angka){
    
    $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
    return $hasil_rupiah;

}
?>
<?php
 
 
 foreach($dt_usulan as $d): ?>
<?php   $skpd=$d['skpd']; ?>
     <?php endforeach; ?> 
<div align="center"><strong>
<h3>LAPORAN HASIL PENGADAAN<br />
  <font size="-5">DARI TANGGAL <?php echo $dari; ?> SAMPAI TANGGAL <?php echo $sampai; ?></font></h3></strong>
  <table width="100%" border="0">
    <tr>
      <td colspan="2"><strong>Provinsi</strong></td>
      <td colspan="9" >: Kalimantan Selatan</td>
    </tr>
    <tr>
      <td colspan="2"><strong>Kab./Kota</strong></td>
      <td colspan="9">: Banjarmasin</td>
    </tr>
  
  </table>
  <br />
</div>
<table width="100%" border="1" >
  <tr>
   <td><strong>SKPD</strong></td>
    <td><strong>ID LHP</strong></td>
    
    <td><strong>Tgl Usulan</strong></td>
    <td><strong>Jenis Pekerjaan</strong></td>
    <td><strong>Merk/Type</strong></td>
    <td><strong>Volume</strong></td>
    <td><strong>Harga Satuan (Rp)</strong></td>
    <td><strong>Jumlah (Rp)</strong></td>
    <td><div align="center"><strong>Persentase</strong></div></td>
    <td><strong>Nilai Tambah Perolehan (Rp)</strong></td>
    <td><strong>Total Nilai Perolehan (Rp)</strong></td>
    <td><strong>Nilai Perolehan Satuan (Rp)</strong></td>
  </tr>
  <?php
  $total_semua_honor=0;
  $total_persentasi=0;
    $jumlah_nilai_perolehan=0;
 
 foreach($dt_usulan as $d): ?> <tr bgcolor="#cccccc">
    <td><span class="style1"><?php echo  $d['skpd']; ?></span></td>
    <td><span class="style1">LHP<?php echo  $d['id']; ?></span></td>
   
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
                                                           <?php
  
                                                        $id=$d['id'];
                                                        $query=$this->db->query("SELECT SUM(hp_pengadaan_orang*hp_harga_pengadaan) as honor_pengadaan from data_usulan_lhp_honorer      where id_lhp_honorer = '$id'");
                                                        foreach ($query->result() as $row): ?>
                                                          <?php  $jumlah_pengadaan=$row->honor_pengadaan; ?>
                                                          <?php endforeach; ?> 
                                                          
                                                           <?php
  
                                                        $id=$d['id'];
                                                        $query=$this->db->query("SELECT SUM(hb_penerima_orang*hb_penerima_barang) as honor_penerima from data_usulan_lhp_honorer        where id_lhp_honorer = '$id'");
                                                        foreach ($query->result() as $row): ?>
                                                          <?php  $jumlah_penerima=$row->honor_penerima; ?>
                                                          <?php endforeach; ?> 
                                                          
                                                            <?php
  
                                                        $id=$d['id'];
                                                        $query=$this->db->query("SELECT SUM(volume*honor_rp) as honorarium from honorarium      where id_lhp_honorarium = '$id'");
                                                        foreach ($query->result() as $row): ?>
                                                          <?php  $jumlah_honorarium=$row->honorarium; ?>
                                                          <?php endforeach; ?> 
                                                          <?php  $total_semua_honor=$jumlah_honorarium+$jumlah_penerima+$jumlah_pengadaan; ?>
     <?php
  
                                                        $id=$d['id'];
                                                        $query=$this->db->query("SELECT SUM(volume*harga_satuan) as harga from data_usulan_lhp      where id_lhp = '$id'");
                                                        foreach ($query->result() as $row): ?>
                                                          <?php  $total_pengadaan=$row->harga; ?>

                                                          <?php endforeach; ?> 

                                                          
   <?php
   $no=1;
                                                        $id=$d['id'];
                                                        $query=$this->db->query("Select * from data_usulan_lhp join usulan_lhp on usulan_lhp.id=data_usulan_lhp.id_lhp  where id_lhp = '$id'");
                                                        foreach ($query->result() as $row): ?>
  <tr>
   
    <td>&nbsp;</td>
   <td>&nbsp;</td>
    <td><?php echo $row->tgl_usulan; ?></td>
    <td><?php echo $row->jenis_pekerjaan; ?></td>
    <td><?php echo $row->merk; ?></td>
    <td><?php echo $volume=$row->volume; ?></td>
    <td><?php echo $harga_satuan=$row->harga_satuan;  ?></td>
    <td><?php echo $total=$volume*$harga_satuan;  ?></td>

                                                         
    <td>
      <div align="center">
        <?php if ($total!=0) {
         $persentase= +$total/$total_pengadaan*100;
           echo round($persentase,0);   }
         else {
          echo 0;
         }  ?>
   </div></td>
    <td><?php  $tambahnilaiperolehan= +$persentase*$total_semua_honor/100; ?>   <?php  echo round($tambahnilaiperolehan,0); ?> </td>
    <td><?php  $totalnilaiperolehan=$tambahnilaiperolehan+$total; ?> <?php echo round($totalnilaiperolehan,0); ?> </td>
    <td> <div align="right">
      <?php if ($total!=0) {
       


   $bilangan=round($totalnilaiperolehan,0);
   $mod=$volume;
   $hasil =  intval($bilangan / $mod);
   $sisa = $bilangan % $mod;

   if ($sisa==0)
   {

    echo $hasil;
   }
   else {
       $sampai=$volume-1;
echo "(1 s/d $sampai)";
   echo " $hasil  <br>";  
echo "($volume)";
  echo $hasil+$sisa;
}


       }
         else {
          echo 0;
         }  

         ?>
      
    </div></td>
 

    
    <?php endforeach; ?>
<?php $jumlah_honorarium; ?>
  </tr> <tr bgcolor="#cccccc"> <td colspan="7"><div align="right"><strong>JUMLAH </strong></div>     </td>
   
    <td><strong><?php echo $total_pengadaan; ?></strong></td>
    <td><div align="center"><strong>100 </strong></div></td>
     <td><strong><?php echo $total_semua_honor; ?></strong></td>
       <td><strong>
       <?php $jumlah_nilai_perolehan=$total_pengadaan+$total_semua_honor; ?>
         <?php echo $jumlah_nilai_perolehan; ?>
       </strong></td>
         <td></td>
         
     
   
   
  </tr>
  
  <tr> <td colspan="6"><div align="right"><strong>HONOR PEJABAT PENGADAAN BARANG JASA
</strong></div>     </td>
   
    <td><strong><?php echo $jumlah_pengadaan; ?></strong></td>
   
   
     <td><div align="center"></div></td>
       <td></td>
         <td></td>
         <td></td>
         <td></td>
  </tr>
    <tr> <td colspan="6"><div align="right"><strong>HONOR PEJABAT/PANITIA PEMERIKSA HASIL PEKERJAAN

</strong></div>     </td>
   
    <td><strong><?php echo $jumlah_penerima; ?></strong></td>
   
   
    <td><div align="center"></div></td>
       <td></td>
         <td></td>
         <td>&nbsp;</td>
         <td></td>
  </tr>
  <tr> <td colspan="6"><div align="right"><strong>HONOR LAINNYA


</strong></div>     </td>
   
    <td><strong><?php echo $jumlah_honorarium; ?></strong></td>
   
   
    <td><div align="center"></div></td>
       <td></td>
         <td></td>
         <td>&nbsp;</td>
         <td></td>
  </tr> <tr bgcolor="#cccccc"> <td colspan="6"><div align="right"><strong>JUMLAH HONOR


</strong></div>     </td>
   
    <td><strong><?php echo $total_semua_honor; ?></strong></td>
   
    
    <td><div align="center"></div></td>
       <td></td>
         <td></td>
         <td></td>
         <td>&nbsp;</td>
  </tr>
   
   
   <?php endforeach; ?>
</table>
</body>
</html>
 <?php
        exit ()
        ?>