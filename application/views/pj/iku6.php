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
          <h4 class="card-title mb-0"><?php  
             echo validation_errors(); ?>    <?php if($this->session->userdata('jenis')<>'2' ) :?> <a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a>
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
                  <th><div align="center">Kode PT</div></th>
                  <th><div align="left">Nama PTS</div></th>
                
                  <th><div align="center">Bentuk Implementasi PPKS</div></th>
                  <th><div align="center">Bentuk Implementasi Anti Narkoba</div></th>
                  <th><div align="center">Bentuk Implementasi Korupsi</div></th>
                   <th><div align="center">Status</div></th>
                 <?php if($this->session->userdata('jenis')<>'2' ) :?> <th ><div align="center">Opsi</div></th><?php endif; ?>
                </tr>
              </thead>
              <tbody>
              <?php 
              $no=1;
              foreach ($dt_iku6 as $a) :?>
                <tr>
                  <td>
                    <div align="center"><?= $no++; ?> </div></td>
                    <td><div align="center"> <?= $a->tw; ?></div></td>
                    <td><div align="center"><?= $a->kode_pt; ?></div></td>
                  <td align="left"><div align="left"><?= $a->nama_pt; ?></div></td>
                  
                  <td ><div align="center"> <?= $a->bentuk_ppks; ?><br />
                  <a target="_blank" href="<?= base_url();?>upload/<?= $a->ppks; ?>">Implementasi PPKS</a> </td>
                  <td ><div align="center"> <?= $a->bentuk_narkoba; ?><br />
                  <a target="_blank" href="<?= base_url();?>upload/<?= $a->narkoba; ?>">Implementasi Anti Narkoba</a> </td>
                  <td ><div align="center"> <?= $a->bentuk_korupsi; ?><br />
                  <a target="_blank" href="<?= base_url();?>upload/<?= $a->korupsi; ?>">Implementasi Anti Korupsi</a> </td>
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
                 <?php if($this->session->userdata('jenis')<>'2' ) :?>    <td align="center">  <?php if($a->status_iku ==0 or $a->status_iku ==2):  ?><div align="center">            <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('pj/delete_iku6/'.$a->id_iku6.'/'.$d->id_iku);?>" 
                    ><i class="fa fa-trash"></i></a>

<a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-bs-toggle="modal" data-bs-target="#bs-edit-data"   
                              data-id="<?= $a->id_iku6 ?>"
                              data-ppks="<?= $a->ppks ?>"
                              data-narkoba="<?= $a->narkoba ?>"
                              data-korupsi="<?= $a->korupsi ?>"
                              data-bentuk_ppks="<?= $a->bentuk_ppks ?>"
                              data-bentuk_narkoba="<?= $a->bentuk_narkoba ?>"
                              data-bentuk_korupsi="<?= $a->bentuk_korupsi ?>"
                              > 
                    <i class="fa fa-edit"></i> </a>   <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Kirim" 
                  onclick="return confirm('anda yakin ingin mengirimkan data iku ini ?')"
                   href="<?php echo base_url('pj/send_iku6/'.$a->id_iku6.'/'.$d->id_iku);?>" 
                    ><i class="fa fa-paper-plane"></i></a><?php endif; ?>
                    
                
                    </div></td><?php endif; ?>
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
    echo form_open('pj/kirim_iku6'); ?>
                   
                 
                 
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

                                               
   <?php echo form_open_multipart('pj/simpan_iku6'); ?>
                   
  
   

                   <div class="mb-3">
                 
                        <label for="exampleInputEmail1">PTS</label>
                        <select class="select2 form-control custom-select"
                    style="width: 100%; height: 36px"  onchange="changeValuee(this.value)">
                    <option>Pilih</option>
                      
                          <?php

$jsArrayy = "var prdNamee = new Array();\n";
foreach ($dt_pts as $b) {

echo '<option   value="' . $b->Kode_PT . '">' . $b->Kode_PT . ' '. $b->Nama_PT . '</option>';  
$jsArrayy .= "prdNamee['" . $b->Kode_PT . "'] = {opt_kodept:'" . addslashes($b->Kode_PT) . "',opt_namapt:'".addslashes($b->Nama_PT)."'};\n";

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
                      <input type="text" name="nama_pt"  class="form-control" id="opt_namapt" readonly required >  
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Bentuk Implementasi PPKS</label>
                      <input type="text" name="bentuk_ppks"  class="form-control" required >  
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Implementasi PPKS</label>
                      <input type="file" name="ppks"  class="form-control" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Bentuk Implementasi Anti Narkoba</label>
                      <input type="text" name="bentuk_narkoba"  class="form-control" required >  
</div>
<div class="mb-3">
                        <label for="exampleInputEmail1">Implementasi Anti Narkoba</label>
                      <input type="file" name="narkoba"  class="form-control" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Bentuk Implementasi Anti Korupsi</label>
                      <input type="text" name="bentuk_korupsi"  class="form-control" required >  
</div>
<div class="mb-3">
                        <label for="exampleInputEmail1">Implementasi Anti Korupsi</label>
                      <input type="file" name="korupsi"  class="form-control" required>
</div> 
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
    echo form_open_multipart('pj/update_iku6'); ?>
                    <input type="hidden" name="id_iku6" id="id" required class="form-control">
                  <div class="mb-3">
                        <label for="exampleInputEmail1">Bentuk Implementasi PPKS</label>
                      <input type="text" name="bentuk_ppks" id="bentuk_ppks"  class="form-control" required >  
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Implementasi PPKS</label>
                      <input type="file" name="ppks"  class="form-control" >
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Bentuk Implementasi Anti Narkoba</label>
                      <input type="text" name="bentuk_narkoba" id="bentuk_narkoba"  class="form-control" required >  
</div>
<div class="mb-3">
                        <label for="exampleInputEmail1">Implementasi Anti Narkoba</label>
                      <input type="file" name="narkoba"  class="form-control" >
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Bentuk Implementasi Anti Korupsi</label>
                      <input type="text" name="bentuk_korupsi" id="bentuk_korupsi"  class="form-control" required >  
</div>
<div class="mb-3">
                        <label for="exampleInputEmail1">Implementasi Anti Korupsi</label>
                      <input type="file" name="korupsi"  class="form-control" >
</div> 
                       <input type="hidden" name="id_iku" value="<?= $d->id_iku; ?>" required class="form-control">
                        <input type="hidden" name="old_ppks" id="ppks" required class="form-control">
                        <input type="hidden" name="old_narkoba" id="narkoba"  class="form-control">
                       
                        <input type="hidden" name="old_korupsi" id="korupsi"  class="form-control">
                     
                
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
            modal.find('#narkoba').attr("value",div.data('narkoba'));
            modal.find('#ppks').attr("value",div.data('ppks'));
            modal.find('#korupsi').attr("value",div.data('korupsi'));
            modal.find('#bentuk_ppks').attr("value",div.data('bentuk_ppks'));
            modal.find('#bentuk_narkoba').attr("value",div.data('bentuk_narkoba'));
            modal.find('#bentuk_korupsi').attr("value",div.data('bentuk_korupsi'));
        });
    });
</script>

                     
                   


                      
<script type="text/javascript"> 
<?php echo $jsArrayy; ?>
function changeValuee(id){
    document.getElementById('opt_kodept').value = prdNamee[id].opt_kodept;
    document.getElementById('opt_namapt').value = prdNamee[id].opt_namapt;

};
</script>
