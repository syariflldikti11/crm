<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                 
                    Prestasi <?= $d->nama_pt; ?>
                   
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
                         <a href="<?php echo base_url('validator/iku7/'.$d->id_iku);?>"  class="btn btn-dark btn-sm"> kembali</a></h4> 
        </div>
        <div class="card-body">
      
          <div class="table-responsive">
            
            <table
              id="zero_config"
              class="table table-striped table-bordered"
            >
            <thead class="bg-info text-white">
                <tr>
                <th><div align="center">No</div></th>
                  <th><div align="center">NIM</div></th>
                  <th><div align="center">Nama</div></th>
                  <th><div align="center">Prestasi</div></th>
                  <th><div align="center">Tahun</div></th>
                  <th><div align="center">Peringkat</div></th>
                  <th><div align="center">Kategori</div></th>
                  <th><div align="center">Sertifikat</div></th>
                
                </tr>
              </thead>
              <tbody>
              <?php 
              $no=1;
              foreach ($dt_detail_iku7 as $a) :?>
                <tr>
                  <td>
                    <div align="center"><?= $no++; ?> </div></td>
                    <td><div align="center"><?= $a->nim; ?></div></td>
                    <td><div align="center"><?= $a->nama; ?></div></td>
                    <td><div align="center"><?= $a->prestasi; ?></div></td>
                    <td><div align="center"><?= $a->tahun; ?></div></td>
                  <td><div align="center"><?= $a->peringkat; ?></div></td>
                  <td><div align="center"><?= $a->kategori; ?></div></td>
                  <td ><div align="center"> <a href="<?= base_url();?>upload/<?= $a->file; ?>"><i class="fa fa-file"></i></a></div></td>
                 
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



