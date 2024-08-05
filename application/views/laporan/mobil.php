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
     <img src="<?= base_url();?>assets/vendors/images/logo-icon.png" alt="" class="user-image" width="50%"> </td>
    <td width="85%"><p align="center"><b><font size="+4">CV ANSARI</font></b><br>
  
        <font size="-1">Jalan Raden Ajeng Kartini RT 20 RW 05, Kota Buntok, Kecamatan Dusun Selatan <br />
        Barito Selatan (Kab.) - Kalimantan Tengah</font>     
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
 <table class="w3-table-all">
                                   <thead>
                                        <tr class="w3-black" >
                                          
                                          <th>No</th>
                                 
                    
                                  <th>Nama</th>
                                <th>NIK</th>
                                <th>KK</th>
                                <th>TTL</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Status Kawin</th>
                                <th>Jabatan</th>
                                <th>Pendidikan</th>
                                <th>TMT</th>
                                <th>Gaji Pokok</th>
                            
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                $no=1;
                foreach ($dt_pegawai as $d):?>
                  
                    <tr>
                        <td><?= $no++; ?></td>
                        
                       
                        <td><?= $d->nama_pegawai; ?></td>
                        <td><?= $d->nik; ?></td>
                        <td><?= $d->kk; ?></td>
                        <td><?= $d->tempat_lahir; ?>, <?= $d->tgl_lahir; ?></td>
                        <td><?= $d->agama; ?></td>
                        <td><?= $d->alamat; ?></td>
                        <td><?= $d->email; ?></td>
                        <td><?= $d->no_hp; ?></td>
                        <td><?= $d->status_kawin; ?></td>
                        <td><?= $d->nama_jabatan; ?></td>
                           <td><?= $d->pendidikan_terakhir; ?></td>
                        <td><?= $d->tmt; ?></td>
                        <td><?= $d->gaji_pokok; ?></td>
                     
                       
                    </tr>
                                             <?php endforeach; ?>
                                    </tbody>
                                </table>

<?php
 $ttd = $this->m_umum->ambil_data('ttd_laporan', 'id_ttd',1);
 ?>
<br />
<div align="right">
  Buntok, <?php echo date("d-m-Y"); ?>
<br />
<?= $ttd->jabatan; ?>
<br />
<br />
<img src="<?= base_url();?>/upload/<?= $ttd->file; ?>" width="<?= $ttd->lebar; ?>px">
<br />

<?= $ttd->nama_ttd; ?>
</div>