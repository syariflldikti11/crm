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
                 Detail Usulan Program Kerja Tahun Depan
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
               
                           <a href="<?php echo base_url('validator/usulan_td');?>"  class="btn btn-dark btn-sm"> kembali</a></h4> </h4> 
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
                  <th>Status</th>
                 
                  <th >Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_detail_usulan_tb as $d): ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $d->detail_kegiatan; ?></td>
                  <td><?= $d->tempat_pelaksanaan; ?></td>
                  <td><?= $d->bentuk_kegiatan; ?></td>
                <td><?= $d->jan; ?> <?= $d->feb; ?> <?= $d->mar; ?> <?= $d->apr; ?> <?= $d->mei; ?> <?= $d->jun; ?> <?= $d->jul; ?><?= $d->agu; ?> <?= $d->sep; ?> <?= $d->okt; ?> <?= $d->nov; ?> <?= $d->des; ?></td>
                  <td><?= rupiah($d->anggaran) ?></td>
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
                  <td align="center"><div align="center"> 
                 <?php if($d->status_detail_usulan !=0):  ?><a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Validasi" href=""
                           data-bs-toggle="modal" data-bs-target="#modalvalidasi<?= $d->id_detail_usulan_tb; ?>"   

                              > 
                    <i class="fa fa-check"></i> </a> <?php endif; ?>
                  <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Histori Detail Usulan" 
                   href="<?php echo base_url('validator/histori_detail_usulan_td/'.$d->id_detail_usulan_tb);?>" 
                    ><i class="fa fa-history"></i></a></div></td>
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



<?php
                
                foreach ($dt_detail_usulan_tb as $g): ?>

                       <div
                        id="modalvalidasi<?= $g->id_detail_usulan_tb ?>"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                           Validasi 
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                             <?php  
             echo validation_errors();                       
    echo form_open('validator/validasi_detail_usulan_td'); ?>
                            <div class="modal-body">

                      
                    <input type="hidden" class="form-control" name="id_detail_usulan_tb" value="<?= $g->id_detail_usulan_tb; ?>">
                    <input type="hidden" name="id_usulan_tb" value="<?= $id; ?>" required>
                    
                 
                     <div class="mb-3">
                        <label for="exampleInputEmail1">Catatan</label>
                       <select class="form-select" name="status_detail_usulan" required>
<option value="">-Pilih-</option>
<option value="2" <?php if($g->status_detail_usulan=='2') echo 'selected'; ?>>Dikembalikan</option>
<option value="3" <?php if($g->status_detail_usulan=='3') echo 'selected'; ?>>Valid</option>
                       </select>
                        
                      </div>
                        
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Catatan</label>
                       <textarea  class="form-control" name="catatan" rows="4"
                  cols="10"><?= $g->catatan; ?></textarea>
                        
                      </div>
                      
                      
              
                            </div>
                            <div class="modal-footer">
                            <input type="submit" name="submit"  class="btn btn-info btn-pill" value="Submit">
                              <button
                                type="button"
                                class="btn btn-danger btn-pill"
                                data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
                </form>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>

  <?php endforeach; ?>