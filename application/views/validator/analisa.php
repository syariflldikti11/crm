<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                     Daftar
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
       
        <div class="card-body">
            <a   href="<?= base_url('validator/cetak_analisa'); ?>" class="btn btn-dark btn-sm"> Cetak</a>
        <h4> Note : untuk analisa capaian layanan tepat waktu hanya diinput oleh bagian HKT</h4>
          <div class="table-responsive">
            <table
             
              class="table"
            >
            <thead class="bg-info text-white">
                        <tr>
                     
                  <th>Pilih Capaian Kinerja</th>
                  <th>Penanggung Jawab</th>
                        </tr>
                     
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_iku as $d): ?>
                <tr>
                
               <?php $id_iku=$d->id_iku; ?>
                  <td><a href="<?php echo base_url('validator/analisa_capaian_kinerja/'.$d->id_iku);?>"><?= $d->iku; ?></a></td>
                  <td><?php if($d->id_bagian=='') {
                    echo "Semua Pemberi Layanan";
                    
                  }
                  else
                  {
                    echo $d->bagian;
                  }
                  ?>  <?php $hitung = $this->m_sakip->hitung_analisanew($id_iku); ?> <span class="badge badge-pill bg-success"><?= $hitung; ?></span></td>
                
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



