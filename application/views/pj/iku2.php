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
                        data-bs-target="#import_pddikti" href="#" class="btn btn-primary btn-sm"> Import PDDikti</a>
          <a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm">Tambah</a>
                         <a   data-bs-toggle="modal"
                        data-bs-target="#bs-kirim" href="#" class="btn btn-success btn-sm"> Kirim</a>
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
                  <th><div align="left">Provinsi</div></th>
                  <th><div align="left">Akreditasi</div></th>
                  <th><div align="left">No SK</div></th>
                  <th><div align="left">Masa Berlaku</div></th>
                  <th><div align="left">Bukti Dukung (Opsional)</div></th>
          
                  <th><div align="center">Status</div></th>
                   <?php if($this->session->userdata('jenis')<>'2' ) :?>   <th ><div align="center">Opsi</div></th> <?php endif; ?>
                </tr>
              </thead>
              <tbody>
              <?php
              $no=1; foreach ($dt_iku2 as $a) :?>
                <tr>
                <td>
                    <div align="center"><?= $no++; ?> </div></td>
                       <td><div align="center"> <?= $a->tw; ?></div></td>
                    <td><div align="center"><?= $a->kode_pt; ?></div></td>
                  <td align="left"><div align="left"><?= $a->nama_pt; ?></div></td>
                  <td align="left"><div align="left"><?= $a->provinsi; ?></div></td>
                  <td align="left"><div align="left"><?= $a->nm_akred; ?></div></td>
                  <td align="left"><div align="left"><?= $a->sk_akred_sp; ?></div></td>
                  <td align="left"><div align="left"><?= $a->tst_sk_akred_sp; ?></div></td>
                  <td align="left"><?php if ($a->file!=NULL) :?> 
              <a  target="_blank" href="<?= base_url();?>upload/<?= $a->file; ?>"><i class="fa fa-file"></i></a>  <?php endif; ?></td>
               
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
                   <?php if($this->session->userdata('jenis')<>'2' ) :?>  <td><?php if($a->status_iku ==0 or $a->status_iku ==2 ): ?><div align="center">
                    <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-bs-toggle="modal" data-bs-target="#bs-edit-data"   
                              data-id="<?= $a->id_iku2 ?>"
                              data-nm_akred="<?= $a->nm_akred ?>"
                              data-sk_akred_sp="<?= $a->sk_akred_sp ?>"
                              data-tst_sk_akred_sp="<?= $a->tst_sk_akred_sp ?>"
                              data-file="<?= $a->file ?>"
                              > 
                    <i class="fa fa-edit"></i> </a> 
                  <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('pj/delete_iku2/'.$a->id_iku2.'/'.$d->id_iku);?>" 
                    ><i class="fa fa-trash"></i></a>
                     <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Kirim" 
                  onclick="return confirm('anda yakin ingin mengirimkan data iku ini ?')"
                   href="<?php echo base_url('pj/send_iku2/'.$a->id_iku2.'/'.$a->id_iku);?>" 
                    ><i class="fa fa-paper-plane"></i></a>
                   
                </div> 
             <?php endif; ?></td> <?php endif; ?>
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
    echo form_open('pj/kirim_iku2'); ?>
                   
                 
                 
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
                        id="import_pddikti"
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
    echo form_open('pj/import_iku2','id="sample_form"'); ?>
                   
                 
                 
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
    echo form_open_multipart('pj/simpan_iku2'); ?>
                   
                 
                   <div class="mb-3">
                 
                        <label for="exampleInputEmail1">PTS</label>
                        <select class="select2 form-control custom-select"
                    style="width: 100%; height: 36px"  onchange="changeValuee(this.value)">
                    <option>Pilih</option>
                      
                          <?php

$jsArrayy = "var prdNamee = new Array();\n";
foreach ($dt_pts as $b) {

echo '<option   value="' . $b->kode_pt . '">' . $b->kode_pt . ' '. $b->nama_pt . '</option>';  
$jsArrayy .= "prdNamee['" . $b->kode_pt . "'] = {opt_kodept:'" . addslashes($b->kode_pt) . "',opt_namapt:'".addslashes($b->nama_pt)."',opt_nm_akred:'".addslashes($b->nm_akred)."',opt_sk_akred_sp:'".addslashes($b->sk_akred_sp)."',opt_tgl_berlaku:'".addslashes($b->tst_sk_akred_sp)."',opt_provinsi:'".addslashes($b->provinsi_pt)."'};\n";

}
?>
                        </select>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Kode PT</label>
                      <input type="text" name="kode_pt"  class="form-control" id="opt_kodept" readonly required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Nama PT</label>
                      <input type="text" name="nama_pt"  class="form-control" id="opt_namapt" readonly required>  
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Provinsi</label>
                      <input type="text" name="provinsi"  class="form-control" id="opt_provinsi"  required>  
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Akreditasi</label>
                      <input type="text" name="nm_akred"  class="form-control" id="opt_nm_akred"  required>  
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">No SK</label>
                      <input type="text" name="sk_akred_sp"  class="form-control" id="opt_sk_akred_sp"  required>  
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Masa Berlaku</label>
                      <input type="date" name="tst_sk_akred_sp"  class="form-control" id="opt_tgl_berlaku"  required>  
</div> 
                      <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control">
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
    echo form_open_multipart('pj/update_iku2'); ?>
                   
                   <div class="mb-3">
                   <input type="hidden" name="id_iku2" id="id" required class="form-control">
                     <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control">
                        <label for="exampleInputEmail1">Akreditasi</label>
                        <input type="text" name="nm_akred" id="nm_akred" required class="form-control">
                      
                        
                      </div>
                       <div class="mb-3">
                   
                        <label for="exampleInputEmail1">Nomor SK</label>
                        <input type="text" name="sk_akred_sp" id="sk_akred_sp" required class="form-control">
                      
                        
                      </div>
                       <div class="mb-3">
                   
                        <label for="exampleInputEmail1">Masa Berlaku</label>
                        <input type="date" name="tst_sk_akred_sp" id="tst_sk_akred_sp" required class="form-control">
                      
                        
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
            modal.find('#nm_akred').attr("value",div.data('nm_akred'));
            modal.find('#sk_akred_sp').attr("value",div.data('sk_akred_sp'));
            modal.find('#tst_sk_akred_sp').attr("value",div.data('tst_sk_akred_sp'));
             modal.find('#file').attr("value",div.data('file'));
        });
    });
</script>
<script type="text/javascript"> 
<?php echo $jsArrayy; ?>
function changeValuee(id){
    document.getElementById('opt_kodept').value = prdNamee[id].opt_kodept;
    document.getElementById('opt_namapt').value = prdNamee[id].opt_namapt;
    document.getElementById('opt_nm_akred').value = prdNamee[id].opt_nm_akred;
    document.getElementById('opt_sk_akred_sp').value = prdNamee[id].opt_sk_akred_sp;
    document.getElementById('opt_tgl_berlaku').value = prdNamee[id].opt_tgl_berlaku;
    document.getElementById('opt_provinsi').value = prdNamee[id].opt_provinsi;

};
</script>
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('kodept').value = prdName[id].kodept;
    document.getElementById('namapt').value = prdName[id].namapt;

};
</script>

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
     url:"<?php echo site_url('pj/import_iku2')?>",
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
window.location.href="<?php echo base_url('pj/iku2/'); ?>"+document.getElementById('id_iku').value;
    setTimeout(function(){
     $('#success_message').html('');
    }, 2000);
   }
  }
 
 });
</script>