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
                  <th><div align="left">Nama Lengkap</div></th>
                  <th><div align="left">Username</div></th>
                  <th><div align="left">Level</div></th>
                  
                
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_pengguna as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_lengkap; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->username; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?php if($d->level==2) {
                        echo 'Supervisor';
                      }
                      elseif ($d->level==3) {
                         echo 'Sales';
                      }
                      else{
                         echo 'Pegawai';
                      }
                      ?>
                    </div></td>

                    
                    
                   
                  <td align="center"><div align="center">   
             <a   class="btn btn-sm btn-warning" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-toggle="modal" data-target="#edit"   
                              data-id="<?= $d->id_pengguna ?>"
                              data-nama_lengkap="<?= $d->nama_lengkap ?>"
                              data-username="<?= $d->username ?>"
                              data-level="<?= $d->level ?>"
                            
                              > 
                    <span class="icofont icofont-ui-edit"></span> </a> <a  onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-sm btn-danger"  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                   href="<?php echo base_url('admin/delete_pengguna/'.$d->id_pengguna);?>" 
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
    echo form_open_multipart('admin/simpan_pengguna'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control"  name="nama_lengkap"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control"  name="username"  required >
                        
                      </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control"  name="password"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Level</label>
                       <select class="form-control" name="level">
                         <option value="2">Supervisor</option>
                         <option value="3">Sales</option>
                         <option value="4">Pegawai</option>
                       </select>
                        
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
    echo form_open_multipart('admin/update_pengguna'); ?>
                   
                                                                           <div class="modal-body">
   
                     
                          <input type="hidden" class="form-control"  name="id_pengguna" id="id" required >
                       
                        
                  
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control"  name="nama_lengkap" id="nama_lengkap" required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control"  name="username" id="username"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Level</label>
                       <select class="form-control" name="level">
                         <option value="2">Supervisor</option>
                         <option value="3">Sales</option>
                         <option value="4">Pegawai</option>
                       </select>
                        
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
      
        $('#edit').on('show.bs.modal', function (evet) {
            var div = $(evet.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_lengkap').attr("value",div.data('nama_lengkap'));
            modal.find('#username').attr("value",div.data('username'));
           
            modal.find('#level').attr("value",div.data('level'));
           
         
        });
    });
</script>