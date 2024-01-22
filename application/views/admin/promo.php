<div class="card">
                                                <div class="card-header">
                                                    <h5><?php echo $judul; ?></h5>
                                                   
 
             <button type="button" class="btn btn-sm btn-inverse" data-toggle="modal" data-target="#default-Modal">Tambah</button>
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead class="bg-primary text-white">
                <tr>
                  <th><div align="center">No</div></th>
                  <th><div align="left">Nama Promo</div></th>
                  <th><div align="left">detail_promo</div></th>
                  <th><div align="left">Tgl Promo</div></th>
                  <th><div align="left">File Promo</div></th>
                
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_promo as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_promo; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->detail_promo; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->tgl_promo; ?>
                    </div></td>
                     <td>
                    <div align="left">
                     <a target="_blank" href="<?= base_url(); ?>upload/<?= $d->file_promo; ?>">File </a>
                    </div></td>
                    
                   
                  <td align="center"><div align="center">   
             <a   class="btn btn-sm btn-warning" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-toggle="modal" data-target="#edit"   
                              data-id="<?= $d->id_promo ?>"
                              data-nama_promo="<?= $d->nama_promo ?>"
                              data-detail_promo="<?= $d->detail_promo ?>"
                              data-tgl_promo="<?= $d->tgl_promo ?>"
                              data-file_promo="<?= $d->file_promo ?>"
                            
                              > 
                    <span class="icofont icofont-ui-edit"></span> </a> <a  onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-sm btn-danger"  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                   href="<?php echo base_url('admin/delete_promo/'.$d->id_promo);?>" 
                    ><span class="icofont icofont-ui-delete"></span> </a></div></td>
                </tr>
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                            
                                               <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"><?= $modal_tambah; ?></h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                                            </div>
                                                                            <?php  
             echo validation_errors();                       
    echo form_open_multipart('admin/simpan_promo'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Promo</label>
                        <input type="text" class="form-control"  name="nama_promo"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Detail Promo</label>
                        <input type="text" class="form-control"  name="detail_promo"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tanggal promo</label>
                        <input type="date" class="form-control"  name="tgl_promo"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">File</label>
                        <input type="file" class="form-control"  name="file_promo"  required >
                      
                        
                      </div>
                      
                      
      </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                                                
                                                                                <input type="submit" name="submit"  class="btn btn-primary waves-effect waves-light" value="Submit">
                                                                            </div>
                                                                          </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                            <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"><?= $modal_edit; ?></h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                                            </div>
                                                                            <?php  
             echo validation_errors();                       
    echo form_open_multipart('admin/update_promo'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                          <input type="hidden" class="form-control"  name="id_promo" id="id" required >
                        <label for="exampleInputEmail1">Nama Promo</label>
                        <input type="text" class="form-control"  name="nama_promo" id="nama_promo"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Detail Promo</label>
                        <input type="text" class="form-control"  name="detail_promo" id="detail_promo"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tanggal promo</label>
                        <input type="date" class="form-control"  name="tgl_promo" id="tgl_promo"  required >
                        
                      </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1">File</label>
                        <input type="file" class="form-control"  name="file_promo"  >
                          <input type="hidden" class="form-control"  name="old_promo" id="file_promo"  required >
                      </div>
                      
      </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                                                
                                                                                <input type="submit" name="submit"  class="btn btn-primary waves-effect waves-light" value="Submit">
                                                                            </div>
                                                                          </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <script>
    $(document).ready(function() {
      
        $('#edit').on('show.bs.modal', function (promo) {
            var div = $(promo.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_promo').attr("value",div.data('nama_promo'));
            modal.find('#detail_promo').attr("value",div.data('detail_promo'));
           
            modal.find('#tgl_promo').attr("value",div.data('tgl_promo'));
            modal.find('#file_promo').attr("value",div.data('file_promo'));
         
        });
    });
</script>