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
                  
                  <th><div align="left">File banner</div></th>
                
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_banner as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                 
                     <td>
                    <div align="left">
                     <a target="_blank" href="<?= base_url(); ?>upload/<?= $d->file_banner; ?>">File </a>
                    </div></td>
                    
                   
                  <td align="center"><div align="center">   
             <a   class="btn btn-sm btn-warning" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-toggle="modal" data-target="#edit"   
                              data-id="<?= $d->id_banner ?>"
                             
                              data-file_banner="<?= $d->file_banner ?>"
                            
                              > 
                    <span class="icofont icofont-ui-edit"></span> </a> <a  onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-sm btn-danger"  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                   href="<?php echo base_url('admin/delete_banner/'.$d->id_banner);?>" 
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
    echo form_open_multipart('admin/simpan_banner'); ?>
                   
                                                                           <div class="modal-body">
   
                     
                       <div class="mb-3">
                        <label for="exampleInputEmail1">File</label>
                        <input type="file" class="form-control"  name="file_banner"  required >
                      
                        
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
    echo form_open_multipart('admin/update_banner'); ?>
                   
                                                                           <div class="modal-body">
   
                          <input type="hidden" class="form-control"  name="id_banner" id="id" required >
                        
                      
                    
                        <div class="mb-3">
                        <label for="exampleInputEmail1">File</label>
                        <input type="file" class="form-control"  name="file_banner"  >
                          <input type="hidden" class="form-control"  name="old_banner" id="file_banner"  required >
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
      
        $('#edit').on('show.bs.modal', function (banner) {
            var div = $(banner.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
          
            modal.find('#file_banner').attr("value",div.data('file_banner'));
         
        });
    });
</script>