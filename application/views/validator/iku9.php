<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <?php
                                $num_char = 60;
                                ?>
                     <?php $iku=$d->iku; ?>
                    <?= substr($iku, 0, $num_char) . '...'; ?>
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
                        <a   data-bs-toggle="modal"
                        data-bs-target="#bs-bukti" href="#" class="btn btn-warning btn-sm"> Bukti Dukung</a>
                      <a   data-bs-toggle="modal"
                        data-bs-target="#bs-valid" href="#" class="btn btn-success btn-sm"> Validasi Semua</a>
                       </h4> 
        </div>
        <div class="card-body">
      
          <div class="table-responsive">
            
            <table
              id="file_export"
              class="table table-striped table-bordered"
            >
            <thead class="bg-info text-white">
                <tr>
                <th><div align="center">No</div></th>
                  <th><div align="center">TW</div></th>
                  <th><div align="center">Kode PT</div></th>
                  <th><div align="left">Nama PTS</div></th>
                  <th><div align="left">Jumlah Prodi</div></th>
                  <th><div align="left">Jumlah Prodi Bekerja Sama</div></th>
                  <th><div align="left">Persentase</div></th>
                
                   <th><div align="center">Status</div></th>
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $no=1;
              foreach ($dt_iku9 as $a) :?>
                <tr>
                  <td>
                    <div align="center"><?= $no++; ?> </div></td>
                      <td><div align="center"> <?= $a->tw; ?></div></td>
                    <td><div align="center"><?= $a->kode_pt; ?></div></td>
                  <td align="left"><div align="left"><?= $a->nama_pt; ?></div></td>
                  <td><div align="center"> <?= $total_prodi=$a->jumlah_prodi; ?></div></td>
                  <td><div align="center"> <?= $total=$a->jumlah_prodi_ks; ?></div></td>
                  <td><div align="center"><?php $persentasi=($total/$total_prodi)*100; ?> <?= round($persentasi,2); ?> %</div></td>
                
                   <td><div align="center"><?php if($a->status_iku==0):  ?><font color="red">belum dikirim</font>
                    <?php endif; ?>
                    <?php if($a->status_iku==1):  ?><font color="orange">dikirim</font>
                    <?php endif; ?>
                   <?php if(
$a->status_iku==2):  ?><font color="blue">dikembalikan</font> <br />
catatan validator :<?= $a->catatan; ?>
                    <?php endif; ?>
                   <?php if($a->status_iku==3):  ?><font color="green">valid</font>
                    <?php endif; ?></div></td>
                  <td align="center">
                  <?php if($a->status_iku !=0):  ?>  <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Validasi" href=""
                           data-bs-toggle="modal" data-bs-target="#modalvalidasi<?= $a->id_iku9 ?>"   

                              > 
                    <i class="fa fa-check"></i> </a> <?php endif; ?></td>
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
                
                foreach ($dt_iku9 as $g): ?>

                       <div
                        id="modalvalidasi<?= $g->id_iku9 ?>"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                           Validasi IKU
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
    echo form_open('validator/validasi_iku9'); ?>
                            <div class="modal-body">

                      
                    <input type="hidden" class="form-control" name="id_iku9" value="<?= $g->id_iku9; ?>">
                    <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required>
                     <div class="mb-3">
                        <label for="exampleInputEmail1">Catatan</label>
                       <select class="form-select" name="status_iku">
<option value="0" <?php if($g->status_iku=='0') echo 'selected'; ?>>Belum dikirim</option>
<option value="1" <?php if($g->status_iku=='1') echo 'selected'; ?>>Dikirim</option>
<option value="2" <?php if($g->status_iku=='2') echo 'selected'; ?>>Dikembalikan</option>
<option value="3" <?php if($g->status_iku=='3') echo 'selected'; ?>>Valid</option>
                       </select>
                        
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Catatan</label>
                       <textarea placeholder="hanya diisi untuk status dikembalikan" class="form-control" name="catatan" rows="4"
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
 <div
                        id="bs-valid"
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Validasi   <?= $d->iku; ?>
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body" style="overflow:hidden;">

                         <?php  
             echo validation_errors();                       
    echo form_open('validator/valid_iku9'); ?>
                   
                 
                 
<div class="mb-3">
                        <label for="exampleInputEmail1">Triwulan</label>
                       <select class="form-select"  name="id_triwulan">
                       
                       
                        <?php foreach ($dt_tw as $t) :?>
                          <option value="<?= $t->id_triwulan; ?>"><?= $t->tw; ?></option>
                          <?php endforeach;?>
                          </select>
                        
                      </div>
                      <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control">
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

                     


  
<div
                        id="bs-bukti"
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Download Bukti Dukung  <?= $d->iku; ?>
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>

                              
                            </div>
                            <div class="modal-body" style="overflow:hidden;">

                        
                   
               
                
              
Download File Bukti Dukung <br />
                      <?php foreach ($dt_bukti as $b) :?>
                        <?= $b->tw; ?> <a href="<?= base_url();?>upload/<?= $b->file; ?>">Download</a> <br />
                          <?php endforeach;?>
                </div>
                            
                            <div class="modal-footer">
                           
                              <button
                                type="button"
                                class="btn btn-danger btn-pill"
                                data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
              
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>

