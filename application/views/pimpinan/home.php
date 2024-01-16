<?php

$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku1 where menu='iku1' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku2 where menu='iku2' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku3 where menu='iku3' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku4 where menu='iku4' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku5 where menu='iku5' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku6 where menu='iku6' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku7 where menu='iku7' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku8 where menu='iku8' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku9 where menu='iku9' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku10 where menu='iku10' and tahun_iku=$tahun ");
$this->db->query("update sakip_iku set jumlah_kirim=$jml_iku11 where menu='iku11' and tahun_iku=$tahun ");
?>
  <div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title">Dashboard</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Dashboard
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
                d-none d-md-flex
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">eSAKIP</h4>
                  <hr />
                 
                  <p>
                    Selamat Datang di Sistem Infromasi Akuntabilitas Kinerja Pemerintah Tahun <?= $tahun; ?>
                    <br />
                    eSAKIP versi sebelumnya silahkan <a target="_blank" href="https://sakip.lldikti11.or.id/v1">klik link ini</a>
                 
                  </p>
                  
 
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Column -->
            <div class="col-12">
              <div class="card">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="p-3">
                      <h2></h2>
                   
                 
                     <div class="table-responsive">
                      <table
                    class="table table-bordered"
                  >
                   <thead class="bg-info text-white">
                      <tr>
                  
                  <th>Sasaran Kegiatan</th>
                  <th>Indikator Kinerja Kegiatan</th>
                  <th>Satuan</th>
                  <th>Target</th>
               
                      </tr>
                    </thead>
                    <tbody>
                    <?php
              $arr=array();
                foreach ($dt_ikk as $d){
$arr[$d->sasaran_kegiatan][]=$d;
 }
        ?>
                           
             
               <?php foreach ($arr as $key =>$val): ?>
                <?php foreach ($val as $k => $v) : ?>
                     
                     <tr>
                    <?php if ($k == 0) : ?>
                        <td rowspan="<?php echo count($val) ?>">
                            <?php echo $v->sasaran_kegiatan ?>
                        </td>
                    <?php endif ?>
                    <td><?php echo $v->ikk ?></td>
                    <td><?php echo $v->satuan ?></td>
                    <td><?php echo $v->target ?></td>
                </tr>
            <?php endforeach ?>
        <?php endforeach ?>
                    
                    </tbody>
                  </table>
</div>
                   
                   
                     
                    </div>
                  </div>
                  <div class="col-lg-6 border-start">
                    <div class="card-body">
                     
                       <embed src='<?= base_url();?>/upload/<?= $dt_pk->file; ?>'
         
         
         
          type='application/pdf' 
          width='100%' 
          height='650'/>
   </embed>
   
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>

          <!-- Row -->
        </div>

        