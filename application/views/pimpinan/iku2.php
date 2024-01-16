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
    echo form_open('pimpinan/valid_iku2'); ?>
                   
                 
                 
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
    $(document).ready(function() {
      
        $('#bs-edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#kodept').attr("value",div.data('kodept'));
            modal.find('#namapt').attr("value",div.data('namapt'));
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
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('kodept').value = prdName[id].kodept;
    document.getElementById('namapt').value = prdName[id].namapt;

};
</script>