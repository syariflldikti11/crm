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
          <h4 class="card-title mb-0"><a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a>
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
                  <th><div align="center">Nilai Survey</div></th>
                   <th><div align="center">Total Responden</div></th>
                  <th><div align="center">Bukti Dukung</div></th>
                  <th><div align="center">Status</div></th>
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no=1;
                foreach ($dt_iku1 as $b): ?>
                <tr>
                  <td><div align="center"> <?= $no++; ?></div></td>
                       <td><div align="center"> <?= $b->tw; ?></div></td>
                  <td><div align="left"><?= $b->nilai_survey; ?></div></td>
                   <td><div align="left"><?= $b->total_responden; ?></div></td>
                 <td ><div align="center"> <a  target="_blank" href="<?= base_url();?>upload/<?= $b->file; ?>"><i class="fa fa-file"></i></a></div></td>
                 <td><div align="center"><?php if($b->status_iku==0):  ?><font color="red">belum dikirim</font>
                    <?php endif; ?>
                    <?php if($b->status_iku==1):  ?><font color="orange">dikirim</font>
                    <?php endif; ?>
                    <?php if(
$b->status_iku==2):  ?><font color="blue">dikembalikan</font> <br />
catatan validator :<?= $b->catatan; ?>
                    <?php endif; ?>
                   <?php if($b->status_iku==3):  ?><font color="green">valid</font>
                    <?php endif; ?></div></td>
                  <td><div align="center">  <?php if($b->status_iku!=0):  ?> <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Validasi" href=""
                           data-bs-toggle="modal" data-bs-target="#modalvalidasi<?= $b->id_iku1 ?>"   

                              > 
                    <i class="fa fa-check"></i> </a>     <?php endif; ?></div></td>
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
                
                foreach ($dt_iku1 as $g): ?>

                       <div
                        id="modalvalidasi<?= $g->id_iku1 ?>"
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
    echo form_open('validator/validasi_iku1'); ?>
                            <div class="modal-body">

                      
                    <input type="hidden" class="form-control" name="id_iku1" value="<?= $g->id_iku1; ?>">
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
                        id="bs-example-modal-md"
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Tambah  <?= $d->iku; ?>
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
    echo form_open('app/simpan_iku1'); ?>
                   
                   <div class="mb-3">
                        <label for="exampleInputEmail1">Standar Layanan</label>
                        <select class="select2 form-control custom-select"
                    style="width: 100%; height: 36px" name="id_standar_layanan">
                          <?php foreach ($dt_sl as $a) :?>
                          <option value="<?= $a->id_standar_layanan; ?>"><?= $a->nama_standar_layanan; ?></option>
                          <?php endforeach;?>
                        </select>
                        
                      </div>
                
                
                <div class="mb-3">
                        <label for="exampleInputEmail1">Jumlah Layanan</label>
                        <input type="text" name="jumlah_layanan" required class="form-control">
                        <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Layanan Tetap Waktu</label>
                        <input type="text" name="layanan_tepat_waktu" required class="form-control" required>
                        
                      </div>
                     
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Triwulan</label>
                       <select class="form-select"  name="id_triwulan">
                       
                       
                        <?php foreach ($dt_tw as $t) :?>
                          <option value="<?= $t->id_triwulan; ?>"><?= $t->tw; ?></option>
                          <?php endforeach;?>
                          </select>
                        
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
    echo form_open('validator/valid_iku1'); ?>
                   
                 
                 
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
                        id="bs-edit-data"
                        class="modal fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              <?= $d->iku; ?>
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
    echo form_open('app/update_iku1'); ?>
                   
                   <div class="mb-3">
                   <input type="hidden" name="id_iku1" id="id" required class="form-control">
                        <label for="exampleInputEmail1">Jumlah Layanan</label>
                        <input type="text" name="jumlah_layanan" id="jumlah_layanan" required class="form-control">
                        <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control">
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Layanan Tetap Waktu</label>
                        <input type="text" name="layanan_tepat_waktu" id="layanan_tepat_waktu" required class="form-control">
                        
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
                              Upload Bukti Dukung  <?= $d->iku; ?>
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
    echo form_open_multipart('app/upload_bukti_dukung'); ?>
                   
               
                
                
             
                        <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control">
                      
                        <div class="mb-3">
                        <label for="exampleInputEmail1">File</label>
                        <input type="File" name="file" required class="form-control">
                        
                      </div>
                     
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Triwulan</label>
                       <select class="form-select"  name="id_triwulan">
                       
                       
                        <?php foreach ($dt_tw as $t) :?>
                          <option value="<?= $t->id_triwulan; ?>"><?= $t->tw; ?></option>
                          <?php endforeach;?>
                          </select>
                        
                      </div>
Download File Bukti Dukung <br />
                      <?php foreach ($dt_bukti as $b) :?>
                        <?= $b->tw; ?> <a href="<?= base_url();?>upload/<?= $b->file; ?>">Download</a> <br />
                          <?php endforeach;?>
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


                      <script>
    $(document).ready(function() {
      
        $('#bs-edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#jumlah_layanan').attr("value",div.data('jumlah_layanan'));
            modal.find('#layanan_tepat_waktu').attr("value",div.data('layanan_tepat_waktu'));
        });
    });
</script>