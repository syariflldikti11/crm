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
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Import PDDikti</a> 
                      <a   data-bs-toggle="modal"
                        data-bs-target="#bs-kirim" href="#" class="btn btn-success btn-sm"> Kirim</a>
                        
                       <?php endif; ?></h4>
                     
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
                  <th><div align="left">Nama PTS</div></th>
                  <th><div align="center">Jenjang</div></th>
                  <th><div align="center">Nama Mahasiswa</div></th>
                  <th><div align="center">NIM</div></th>
                  <th><div align="center">SKS MBKM</div></th>
                
             
                   <th><div align="center">Status</div></th>
                 
                
                </tr>
              </thead>
              <tbody>
              <?php
              $no=1; foreach ($dt_iku3 as $z) :?>
                <tr>
                  <td> <div align="center"> <?= $no++; ?></div></td>
                   <td><div align="center"><?= $z->tw; ?></div></td>
                  <td><div align="center"><?= $z->nama_pt; ?></div></td>
                  <td><div align="center"><?= $z->nm_jenj_didik; ?></div></td>
                  <td><div align="center"><?= $z->nm_pd; ?></div></td>
                  <td><div align="center"><?= $z->nipd; ?></div></td>
                  <td><div align="center"><?= $sks=$z->sks_smt; ?></div></td>
                
                 
                  <td><div align="center"><?php if($z->status_iku==0):  ?><font color="red">belum dikirim</font>
                    <?php endif; ?>
                    <?php if($z->status_iku==1):  ?><font color="orange">dikirim</font>
                    <?php endif; ?>
                     <?php if(
$z->status_iku==2):  ?><font color="blue">dikembalikan</font> <br />
catatan validator :<?= $z->catatan; ?>
                    <?php endif; ?>
                   <?php if($z->status_iku==3):  ?><font color="green">valid</font>
                    <?php endif; ?></div></td>
                </tr>
                <?php endforeach;?>
               
               
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
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Tambah   <?= $d->iku; ?>
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
    echo form_open('pj/simpan_iku3','id="sample_form"'); ?>
                   
                 
                 
<div class="mb-3">
                        <label for="exampleInputEmail1">Triwulan</label>
                       <select class="form-select"  name="id_triwulan" id="id_triwulan">
                       
                       
                        <?php foreach ($dt_tw as $t) :?>
                          <option value="<?= $t->id_triwulan; ?>"><?= $t->tw; ?></option>
                          <?php endforeach;?>
                          </select>
                        
                      </div>
                       <div class="form-group" id="process" style="display:none;">
                        <h3>Mohon Tunggu</h3>
        <div class="progress">
       <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="">
       </div>
     </div>
   </div>
                      <input type="hidden" name="id_iku" id="id_iku" value="<?= $d->id_iku; ?>" required class="form-control">
                </div>
                            
                            <div class="modal-footer">
                            <input type="submit" name="save" id="save"  class="btn btn-info btn-pill" value="Submit">
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
                        id="bs-hapus"
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Hapus   <?= $d->iku; ?>
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
    echo form_open('pj/delete_iku3'); ?>
                   
                 
                 
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
                        id="bs-kirim"
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Kirim   <?= $d->iku; ?>
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
    echo form_open('pj/kirim_iku3'); ?>
                   
                 
                 
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

                     



                     
                   


                      
<script>
  
 $(document).ready(function(){
   
  $('#sample_form').on('submit', function(event){
   event.preventDefault();
   var count_error = 0;
   if($('#id_triwulan').val() == '')
   {
   
    count_error++;
   }
   else
   {
   
   }
 
   if($('#id_iku').val() == '')
   {
   
    count_error++;
   }
   else
   {
    
   }
 
   if(count_error == 0)
   {
    $.ajax({
     url:"<?php echo site_url('pj/simpan_iku3')?>",
     method:"POST",
     data:$(this).serialize(),
     beforeSend:function()
     {
      $('#save').attr('disabled', 'disabled');
      $('#process').css('display', 'block');
     },
     success:function(data)
     {
      var percentage = 20;
      
     
 
      var timer = setInterval(function(){
       percentage = percentage + 20;
       progress_bar_process(percentage, timer);
      }, 300);
     }
    })
   }
   else
   {
    return false;
   }
  });
 
  function progress_bar_process(percentage, timer)
  {
   $('.progress-bar').css('width', percentage + '%');
   if(percentage > 100)
   {
    clearInterval(timer);
    $('#sample_form')[0].reset();
    $('#process').css('display', 'none');
    $('.progress-bar').css('width', '0%');
    $('#save').attr('disabled', false);
    $('#success_message').html("<div class='alert alert-success'>Data Saved</div>");
window.location.href="<?php echo base_url('pj/iku3/'); ?>"+document.getElementById('id_iku').value;
    setTimeout(function(){
     $('#success_message').html('');
    }, 2000);
   }
  }
 
 });
</script>
