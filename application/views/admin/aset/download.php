 <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekap usulan lhp skpd selesai.xls");
?>

<?php
 foreach($dt_usulan as $d): ?>

<?php  $d['id_user']; ?>

      <?php endforeach; ?>



 <?php 
    foreach($dt_usulan as $d): ?>
      <?php $nomor=$d['no_surat']; ?>
      <?php endforeach; ?>

<b>I. PENGADAAN BARANG/JASA</b>
  <?php $no=1;
  $hasil_pejabat_pengadaan=0;
    foreach($dt_usulann as $d): ?>
  
<?php  $no++; ?>
 <?php  $org=$d['hp_pengadaan_orang']; ?>  <?php  $harga=$d['hp_harga_pengadaan'];  $harga;  ?> 
    <?php   $hasil=$org * $harga;    ?>
 
  <?php  $hasil_pejabat_pengadaan=$hasil_pejabat_pengadaan+$hasil; ?>
    <?php endforeach; ?>
    
    
    <?php $no=1;
  $hasil_honorarium=0;
    foreach($dt_usulannn as $d): ?>
  
<?php  $no++; ?>
 <?php  $orggg=$d['volume']; ?>  <?php  $hargaaa=$d['honor_rp'];  $hargaaa;  ?> 
    <?php   $hasilll=$orggg * $hargaaa;    ?>
 
  <?php  $hasil_honorarium=$hasil_honorarium+$hasilll; ?>
    <?php endforeach; ?>


 
 
<?php $no=1;
 $totalhonor=0; 
$hasil_pejabat_pemeriksa=0;
    foreach($dt_usulann as $d): ?>
  
<?php  $no++; ?>
 <?php  $penerima=$d['hb_penerima_orang']; ?>  
 <?php $barang=$d['hb_penerima_barang'];   $barang;  ?>
 <?php   $hasill=$penerima * $barang;   ?>
  

<?php  $hasil_pejabat_pemeriksa=$hasil_pejabat_pemeriksa+$hasill; ?>

<?php $totalsemua=$hasil_pejabat_pemeriksa+$hasil_pejabat_pengadaan+$hasil_honorarium; ?>
  <?php endforeach; ?>

<?php  $totalhonor=$totalsemua; ?>
<table border="1" class="saya">
  <tr>
    <td  ><div align="center">No</div></td> 
       <th>ID LHP</th>
                                                                <th>Pengusul</th>
                                                                 <th>SPK Nomor</th>
                                                                <th>Tanggal SPK</th>
                                                                <th>Tanggal Usulan</th>
    <td  ><div align="center">Jenis Pekerjaan</div></td>
    <td ><div align="center">Merk/Type</div></td>
    <td  ><div align="center">Volume(Unit/Paket)</div></td>
    <td  ><div align="center">Harga Satuan <br />
    (Rp)</div></td>
    <td width="18%" ><div align="center">Jumlah<br />
      (Rp)</div></td>
       <th>Persentase</th>
                                                                <th>Nilai Tambahan Perolehan</th>
                                                                <th>Total Nilai Perolehan</th>
                                                                <th>Nilai Perolehan Satuan</th>
                                                                 <?php $total_jumlah_barangcopy=0; ?>
                                                  <?php foreach($dt_usulan as $d): ?> 
               
                  <?php  $acopy=$d['volume']; ?>
                  <?php $bcopy=$d['harga_satuan']; ?>
                  <?php $jumlahcopy=$acopy*$bcopy; ?>
                                             
  <?php   $total_jumlah_barangcopy=$total_jumlah_barangcopy+$jumlahcopy; ?>
                </tr>
              <?php endforeach; ?>                
                                                               
                            <?php  $hasilcopy=    $total_jumlah_barangcopy ; ?> 
  </tr>
             
                                                               
                            

 
   <?php $no=1;
   $total_pengadaan=0;
   $total_persentasi=0;
   $total_tambahnilaiperolehan=0;
   $totalhasil_nilaiperolehan=0;

    foreach($dt_usulan as $usul): ?>
   
  
  <tr>
    <td ><div align="center"><?php echo $no++; ?></div></td>
     <td>LHP<?php echo $usul['id']; ?> </td>
                  <td><?php echo $usul['skpd']; ?> </td>
                  <td><?php echo $usul['tgl_usulan']; ?> </td>
                    <td><?php echo $usul['spk_nomor']; ?></td>
                  <td><?php echo $usul['tgl_spk']; ?></td>
    <td ><?php echo $usul['jenis_pekerjaan']; ?></td>
    <td ><div align="center"><?php echo $usul['merk']; ?></div></td>
     <td ><div align="center"><?php echo $a=$usul['volume']; ?></div></td>
     <td ><div align="center"><?php echo $b=$usul['harga_satuan']; ;
	  ?></div></td>
    <td ><div align="center"><?php echo $c=$a*$b;    ?>
   
  
</div></td>
<td><?php  $persentase= +$c/$hasilcopy*100; ?>  <?php echo round($persentase,0); ?></td>
<td><?php  $tambahnilaiperolehan= +$persentase*$totalsemua/100; ?>   <?php echo round($tambahnilaiperolehan,0); ?></td>
<td><?php  $totalnilaiperolehan=$tambahnilaiperolehan+$c; ?> <?php echo round($totalnilaiperolehan,0); ?></td>
<td><?php  $nilaiperolehansatuan=$totalnilaiperolehan/$a; ?> <?php echo round($nilaiperolehansatuan,0); ?></td>
<?php  $total_pengadaan=$total_pengadaan+$c; ?>
 <?php   $total_persentasi=$total_persentasi+$persentase; ?>
 <?php   $total_tambahnilaiperolehan=$total_tambahnilaiperolehan+$tambahnilaiperolehan; ?>
 <?php   $totalhasil_nilaiperolehan=$totalhasil_nilaiperolehan+$totalnilaiperolehan; ?>
  </tr>

  <?php endforeach; ?>
  <tr>
    <td  colspan="9"><div align="center"><strong>JUMLAH </strong></div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div></td>
    <td>
    <td  align="center"><strong> <?php echo $total_pengadaan; ?></strong></td>
    <td  align="center"><strong> <?php echo $total_persentasi; ?></strong></td>
    <td  align="center"><strong> <?php echo $total_tambahnilaiperolehan; ?></strong></td>
    <td  align="center"><strong> <?php echo $totalhasil_nilaiperolehan; ?></strong></td>
  </tr>
</table>




  <p/>

 <table  border="0">
   <tr>
     <td>PEJABAT PENGADAAN BARANG JASA</td>
     <td><?php echo $hasil_pejabat_pengadaan; ?></td>
   </tr>
   <tr>
     <td>PEJABAT/PANITIA PEMERIKSA HASIL PEKERJAAN</td>
     <td><?php echo  $hasil_pejabat_pemeriksa; ?></td>
   </tr>
    <tr>
     <td>HONORARIUM LAINNYA</td>
     <td><?php echo $hasil_honorarium; ?></td>
   </tr><tr>
     <td>&nbsp;</td>
     <td><?php echo  $totalsemua; ?></td>
   </tr>
 </table>

<br />

 <?php
        exit ()
        ?>

 <br />
