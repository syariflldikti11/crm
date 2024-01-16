<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                  <?= $judul; ?>
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
         
                      
                          <a href="<?php echo base_url('pj/analisa_spi');?>"  class="btn btn-dark btn-sm"> kembali</a></h4>  </h4> 
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
                  <th><div align="left">IKU</div></th>
                  <th><div align="left">TW</div></th>
                  <th><div align="center">Progress</div></th>
                  <th><div align="center">Kendala</div></th>
                  <th><div align="center">Tindak Lanjut</div></th>
                  <th><div align="center">Status</div></th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_analisa as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->iku; ?>
                    </div></td>
                  <td>
                    <div align="left">
                      <?= $d->tw; ?>
                    </div></td>
                  <td><div align="left">
                    <?= $d->progress; ?>
                  </div></td>
                  <td><div align="left">
                    <?= $d->kendala; ?>
                  </div></td>
                  <td><div align="left">
                    <?= $d->tindak_lanjut; ?>
                  </div></td>
                    <td><div align="center"><?php if(
$d->status_analisa==0):  ?><font color="red">belum dikirim</font>
                    <?php endif; ?>
                    <?php if(
$d->status_analisa==1):  ?><font color="orange">dikirim</font>
                    <?php endif; ?>
                    <?php if(
$d->status_analisa==2):  ?><font color="blue">dikembalikan</font> <br />
catatan validator :<?= $d->catatan; ?>
                    <?php endif; ?>
                   <?php if(
$d->status_analisa==3):  ?><font color="green">valid</font>
                    <?php endif; ?></div></td>
                 
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



<div
                        id="bs-example-modal-md"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Tambah Analisa Capaian Kinerja
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">

                         <?php  
             echo validation_errors();                       
    echo form_open('pj/simpan_analisa_capaian_kinerja'); ?>
                   
                   <input type="hidden" name="id_iku" value="<?= $id_iku; ?>" required>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Triwulan</label>
                        <select class="form-select" name="id_triwulan">
                          <?php foreach ($dt_tw as $b) :?>
                          <option value="<?= $b->id_triwulan; ?>"><?= $b->tw; ?></option>
                          <?php endforeach;?>
                        </select>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Progress</label>
                       <textarea class="form-control" name="progress" rows="8"
                  cols="50"
                  minlength="1000" required placeholder="Minimal 1000 karakter"></textarea>
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Kendala/Permasalahan</label>
                       <textarea class="form-control" name="kendala" rows="8"
                  cols="50"
                required></textarea>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Tindak Lanjut</label>
                       <textarea class="form-control" name="tindak_lanjut" rows="8"
                  cols="50"
                  required></textarea>
                        
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

                     
  <?php
                
                foreach ($dt_analisa as $f): ?>

                       <div
                        id="modaledit<?= $f->id_analisa ?>"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                           Edit Analisa Capaian Kinerja
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
    echo form_open('pj/update_analisa_capaian_kinerja'); ?>
                            <div class="modal-body">

                      
                    <input type="hidden" class="form-control" name="id_analisa" value="<?= $f->id_analisa; ?>">
                    <input type="hidden" name="id_iku" value="<?= $id_iku; ?>" required>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Progress</label>
                       <textarea class="form-control" name="progress" rows="8"
                  cols="50"
                  minlength="1000" required><?= $f->progress; ?></textarea>
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Kendala/Permasalahan</label>
                       <textarea class="form-control" name="kendala" rows="8"
                  cols="50"
                  required><?= $f->kendala; ?></textarea>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Tindak Lanjut</label>
                       <textarea class="form-control" name="tindak_lanjut" rows="8"
                  cols="50"
                 required><?= $f->tindak_lanjut; ?></textarea>
                        
                      </div>
              
                            </div>
                            <div class="modal-footer">
                            <input type="submit" name="submit"  class="btn btn-info btn-pill" value="Update">
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

  <?php
                
                foreach ($dt_analisa as $g): ?>

                       <div
                        id="modalvalidasi<?= $f->id_analisa ?>"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                           Validasi Analisa Capaian Kinerja
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
    echo form_open('pj/validasi_analisa_capaian_kinerja'); ?>
                            <div class="modal-body">

                      
                    <input type="hidden" class="form-control" name="id_analisa" value="<?= $f->id_analisa; ?>">
                    <input type="hidden" name="id_iku" value="<?= $id_iku; ?>" required>
                     <div class="mb-3">
                        <label for="exampleInputEmail1">Catatan</label>
                       <select class="form-select" name="status_analisa">
<option value="0" <?php if($g->status_analisa=='0') echo 'selected'; ?>>Belum dikirim</option>
<option value="1" <?php if($g->status_analisa=='1') echo 'selected'; ?>>Dikirim</option>
<option value="2" <?php if($g->status_analisa=='2') echo 'selected'; ?>>Dikembalikan</option>
<option value="3" <?php if($g->status_analisa=='3') echo 'selected'; ?>>Valid</option>
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