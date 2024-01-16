  <?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
  return $hasil_rupiah;

}
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
pt>
<style type="text/css">
#kanan{
border-right:solid 1px;
}
 body{
  -webkit-print-color-adjust:exact;
}
</style>

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Usulan Proker Tahun Depan.xls"); { ?>
<center><h5>DAFTAR USULAN PROGRAM KERJA LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH XI TAHUN <?= $tahun+1; ?></h5></center>
<p />
 
 <table border="1" width="100%">
                                   <thead>
                                         <tr class="w3-blue" >
                     
                  <th width="133" rowspan="2">Nama Bidang/Pokja</th>
                        <th width="133" rowspan="2">IKU</th>
                  <th width="105" rowspan="2">Nama Kegiatan</th>
                  <th width="112" rowspan="2">Tempat Pelaksanaan</th>
                  <th width="173" rowspan="2">Mekanisme Kegiatan</th>
                  <th width="130" rowspan="2">Rencana Anggaran</th>
                      <th colspan="12"><div align="center">Bulan</div></th>
                      </tr>
                                        <tr class="w3-blue" >
                                          <th width="130">Jan</th>
                                          <th width="130">Feb</th>
                                          <th width="130">Mar</th>
                                          <th width="130">Apr</th>
                                          <th width="130">Mei</th>
                                          <th width="130">Jun</th>
                                          <th width="130">Jul</th>
                                          <th width="130">Agu</th>
                                          <th width="130">Sep</th>
                                          <th width="130">Okt</th>
                                          <th width="130">Nov</th>
                                          <th width="130">Des</th>
                                        </tr>
                    </thead>
                    <tbody>
                    <?php
              $arrb=array();
                foreach ($dt_proker as $db){
$arrb[$db->bagian][]=$db;
 }
        ?>
                           
             
               <?php foreach ($arrb as $keyb =>$valb): ?>
                <?php foreach ($valb as $kb => $vb) : ?>
                     
                     <tr>
                    <?php if ($kb == 0) : ?>
                        <td rowspan="<?php echo count($valb) ?>">
                            <?= $vb->bagian ?>                        </td>
                    <?php endif ?>
                          <td><?= $vb->nama_iku; ?> <i class="fa fa-check"></i></td>
                    <td><?= $vb->detail_kegiatan; ?></td>
                    <td><?= $vb->tempat_pelaksanaan; ?></td>
                    <td><?= $vb->bentuk_kegiatan; ?></td>
                    <td><?= rupiah($vb->anggaran); ?></td>
                     <td <?php if($vb->jan != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->jan != NULL) { echo '&#10004;' ;  } ?>
                    </div></td>
                    <td <?php if($vb->feb != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->feb != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->mar != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->mar != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->apr != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->apr != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->mei != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->mei != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->jun != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->jun != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->jul != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->jul != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->agu != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->agu != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->sep != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->sep != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->okt != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->okt != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->nov != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->nov != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                    <td <?php if($vb->des != NULL):?> style="background-color:#99CC99;" <?php endif; ?>><div align="center">
                      <?php if($vb->des != NULL) { echo '&#10004;'; } ?>
                    </div></td>
                     </tr>
            <?php endforeach ?>
        <?php endforeach ?>
                    </tbody>
                  </table>
   <?php
}
?>