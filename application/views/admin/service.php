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
                  <th><div align="left">Nama Mobil</div></th>
                  <th><div align="left">Nama Service</div></th>
                  <th><div align="left">Deskripsi</div></th>
                  <th><div align="left">Estimasi Harga</div></th>
                 
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_service as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_mobil; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->nama_service; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->deskripsi; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->estimasi_harga; ?>
                    </div></td>
                   
                  <td align="center"><div align="center">   
            <a   class="btn btn-sm btn-warning" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-toggle="modal" data-target="#edit"   
                              data-id="<?= $d->id_service ?>"
                              data-nama_service="<?= $d->nama_service ?>"
                              data-deskripsi="<?= $d->deskripsi ?>"
                              data-estimasi_harga="<?= $d->estimasi_harga ?>"
                              
                              > 
                    <span class="icofont icofont-ui-edit"></span> </a> <a  onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-sm btn-danger"  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                   href="<?php echo base_url('admin/delete_service/'.$d->id_service);?>" 
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
    echo form_open('admin/simpan_service'); ?>
                   
                                                                           <div class="modal-body">
    <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Mobil</label>
                        
                        <select class="form-control" name="id_mobil">
                            <?php
                foreach ($dt_mobil as $b): ?>
                          <option value="<?= $b->id_mobil; ?>"><?= $b->nama_mobil; ?></option>
                           <?php endforeach; ?>
                        </select>
                     
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Nama service</label>
                        <input type="text" class="form-control"  name="nama_service"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" class="form-control"  name="deskripsi"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Estimasi Harga</label>
                        <input type="text" class="form-control"  name="estimasi_harga"  required >
                        
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
    echo form_open('admin/update_service'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                          <input type="hidden" class="form-control"  name="id_service" id="id" required >
                        <label for="exampleInputEmail1">Nama Service</label>
                        <input type="text" class="form-control"  name="nama_service" id="nama_service"  required >
                        
                      </div>
                      
                   
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" class="form-control"  name="deskripsi"  id="deskripsi" required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Estimasi Harga</label>
                        <input type="text" class="form-control"  name="estimasi_harga"  id="estimasi_harga"  required >
                        
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
            modal.find('#nama_service').attr("value",div.data('nama_service'));
            modal.find('#deskripsi').attr("value",div.data('deskripsi'));
            modal.find('#estimasi_harga').attr("value",div.data('estimasi_harga'));
          
           
        });
    });
</script>