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
          <h4 class="card-title mb-0">    <?php if($this->session->userdata('jenis')<>'2' ) :?> <a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a>
                       
                     <?php endif; ?> </h4> 
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
                  <th><div align="center">TW</div></th>
                  <th><div align="center">Nilai Survey</div></th>
                   <th><div align="center">Total Responden</div></th>
                  <th><div align="center">Bukti Dukung</div></th>
                  <th><div align="center">Status</div></th>
               <?php if($this->session->userdata('jenis')<>'2' ) :?>   <th ><div align="center">Opsi</div></th> <?php endif; ?>
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
                <?php if($this->session->userdata('jenis')<>'2' ) :?>  <td><?php if($b->status_iku ==0 or $b->status_iku ==2 ): ?><div align="center"><a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('pj/delete_iku1/'.$b->id_iku1.'/'.$d->id_iku);?>" 
                    ><i class="fa fa-trash"></i></a> <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-bs-toggle="modal" data-bs-target="#bs-edit-data"   
                              data-id="<?= $b->id_iku1 ?>"
                              data-nilai_survey="<?= $b->nilai_survey ?>"
                              data-total_responden="<?= $b->total_responden ?>"
                              data-file="<?= $b->file ?>"
                              > 
                    <i class="fa fa-edit"></i> </a>
 <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Kirim" 
                  onclick="return confirm('anda yakin ingin mengirimkan data iku ini ?')"
                   href="<?php echo base_url('pj/send_iku1/'.$b->id_iku1.'/'.$d->id_iku);?>" 
                    ><i class="fa fa-paper-plane"></i></a>
                    </div><?php endif; ?></td> <?php endif; ?>
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


                        <div id="bs-example-modal-md"
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
    echo form_open_multipart('pj/simpan_iku1'); ?>
                   
                   
                
                <div class="mb-3">
                        <label for="exampleInputEmail1">Nilai Survei</label>
                        <input type="text" name="nilai_survey" required class="form-control">
                        <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control" required>
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Total Responden</label>
                        <input type="text" name="total_responden" required class="form-control">
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Bukti Dukung</label>
                        <input type="file" name="file"  required class="form-control">
                        
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
    echo form_open_multipart('pj/update_iku1'); ?>
                   
                   <div class="mb-3">
                   <input type="hidden" name="id_iku1" id="id" required class="form-control">
                        <label for="exampleInputEmail1">Nilai Survei</label>
                        <input type="text" name="nilai_survey" id="nilai_survey" required class="form-control">
                        <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control">
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Total Responden</label>
                        <input type="text" name="total_responden" id="total_responden" class="form-control">
                       
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Bukti Dukung</label>
                        <input type="file" name="file" id="file" class="form-control">
                        <input type="hidden" name="old_file" id="file" required class="form-control">
                        
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



                    


                      <script>
    $(document).ready(function() {
      
        $('#bs-edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nilai_survey').attr("value",div.data('nilai_survey'));
            modal.find('#total_responden').attr("value",div.data('total_responden'));
            modal.find('#file').attr("value",div.data('file'));
      
        });
    });
</script>