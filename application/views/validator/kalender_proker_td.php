<?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
  return $hasil_rupiah;

}
?>
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title">DAFTAR PROGRAM KERJA LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH XI TAHUN <?= $tahun+1; ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                   Program Kerja Tahun Depan
                    </li>
                  
                  </ol>
                </nav>
              </div>
            </div>
            <div
              class="
                col-md-7
                justify-content-end
                align-self-center
                 d-md-flex
              "
            >
              <div class="d-flex">
               
                <button class="btn btn-warning">
               
                  Tahun <?= $tahun; ?>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="border-bottom title-part-padding">
          <h4 class="card-title mb-0">   
               </h4> 
        </div>
        <div class="card-body">
         
          <div class="table-responsive">
            <table
             
              class="table"
            >
           
                                   <thead>
                                        <tr class="w3-blue" >
                     
                  <th width="133" rowspan="2">Nama Bidang/Pokja</th>
                  <th width="133" rowspan="2">IKU</th>
                  <th width="105" rowspan="2">Nama Kegiatan</th>
                  <th width="112" rowspan="2">Tempat Pelaksanaan</th>
                  <th width="173" rowspan="2">Mekanisme Kegiatan</th>
                  <th width="130" rowspan="2">Anggaran Kegiatan</th>
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
                    <td><?= $vb->nama_iku; ?></td>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



