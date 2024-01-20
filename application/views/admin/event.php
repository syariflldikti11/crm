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
                  <th><div align="left">Nama Event</div></th>
                  <th><div align="left">Ket</div></th>
                  <th><div align="left">Tgl Event</div></th>
                
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_event as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_event; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->ket; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->tgl_event; ?>
                    </div></td>
                    
                   
                  <td align="center"><div align="center">   
             <a   class="btn btn-sm btn-warning" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-toggle="modal" data-target="#edit"   
                              data-id="<?= $d->id_event ?>"
                              data-nama_event="<?= $d->nama_event ?>"
                              data-ket="<?= $d->ket ?>"
                              data-tgl_event="<?= $d->tgl_event ?>"
                            
                              > 
                    <span class="icofont icofont-ui-edit"></span> </a> <a  onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-sm btn-danger"  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                   href="<?php echo base_url('admin/delete_event/'.$d->id_event);?>" 
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
    echo form_open('admin/simpan_event'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Nama event</label>
                        <input type="text" class="form-control"  name="nama_event"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <input type="text" class="form-control"  name="ket"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tanggal Event</label>
                        <input type="date" class="form-control"  name="tgl_event"  required >
                        
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
    echo form_open('admin/update_event'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                          <input type="hidden" class="form-control"  name="id_event" id="id" required >
                        <label for="exampleInputEmail1">Nama event</label>
                        <input type="text" class="form-control"  name="nama_event" id="nama_event"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <input type="text" class="form-control"  name="ket" id="ket"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tanggal Event</label>
                        <input type="date" class="form-control"  name="tgl_event" id="tgl_event"  required >
                        
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
      
        $('#edit').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_event').attr("value",div.data('nama_event'));
            modal.find('#ket').attr("value",div.data('ket'));
           
            modal.find('#tgl_event').attr("value",div.data('tgl_event'));
         
        });
    });
</script>