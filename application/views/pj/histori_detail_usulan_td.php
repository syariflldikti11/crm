<?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
  return $hasil_rupiah;

}
?>
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
               Histori Detail Usulan Program Kerja Tahun Depan
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
              id="zero_config"
              class="table table-striped table-bordered"
            >
            <thead class="bg-info text-white">
                <tr>
                  <th><div align="center">No</th>
                  <th>Nama Detail Kegiatan</th>
                  <th>Tempat Pelaksanaan</th>
                  <th>Bentuk Kegiatan</th>
                  <th>Bulan Kegiatan</th>
                  <th>Anggaran</th>
                   <th>Tanggal</th>
                  <th>Status</th>
                 
                 
                
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_histori_detail_usulan_tb as $d): ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $d->detail_kegiatan; ?></td>
                  <td><?= $d->tempat_pelaksanaan; ?></td>
                  <td><?= $d->bentuk_kegiatan; ?></td>
                  <td><?= $d->jan; ?> <?= $d->feb; ?> <?= $d->mar; ?> <?= $d->apr; ?> <?= $d->mei; ?> <?= $d->jun; ?> <?= $d->jul; ?><?= $d->agu; ?> <?= $d->sep; ?> <?= $d->okt; ?> <?= $d->nov; ?> <?= $d->des; ?></td>
                  <td><?= rupiah($d->anggaran) ?></td>
                    <td><?= $d->tgl_input; ?></td>

                  <td><?php if($d->status_detail_usulan==0):  ?><font color="red">belum dikirim</font>
                    <?php endif; ?>
                    <?php if($d->status_detail_usulan==1):  ?><font color="orange">dikirim</font>
                    <?php endif; ?>
                     <?php if(
$d->status_detail_usulan==2):  ?><font color="blue">dikembalikan</font> <br />
catatan validator :<?= $d->catatan; ?>
                    <?php endif; ?>
                   <?php if($d->status_detail_usulan==3):  ?><font color="green">valid</font>
                    <?php endif; ?></td>
                                 </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






 