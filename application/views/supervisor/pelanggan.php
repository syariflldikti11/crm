<div class="card">
                                                <div class="card-header">
                                                    <h5><?php echo $judul; ?></h5>
                                                   
 
            
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead class="bg-primary text-white">
                <tr>
                  <th><div align="center">No</div></th>
                  <th><div align="left">Nama</div></th>
                  <th><div align="left">JK</div></th>
                  <th><div align="left">Tgl Lahir</div></th>
                  <th><div align="left">Alamat</div></th>
                  <th><div align="left">Email</div></th>
                  <th><div align="left">No WA</div></th>
                
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_pelanggan as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_pelanggan; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->jk; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->tgl_lahir; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->alamat; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->email; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->no_wa; ?>
                    </div></td>
                  
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
    echo form_open('admin/simpan_pelanggan'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Pelanggan</label>
                        <input type="text" class="form-control"  name="nama_pelanggan"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">JK</label>
                        <select class="form-control" name="jk">
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="form-control"  name="alamat"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control"  name="email"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">No WA</label>
                        <input type="number" class="form-control"  name="no_wa"  required >
                        
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
    echo form_open('admin/update_pelanggan'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                          <input type="hidden" class="form-control"  name="id_pelanggan" id="id" required >
                        <label for="exampleInputEmail1">Nama Pelanggan</label>
                        <input type="text" class="form-control"  name="nama_pelanggan" id="nama_pelanggan"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">JK</label>
                        <select class="form-control" name="jk">
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="form-control"  name="alamat" id="alamat"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir" id="tgl_lahir"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control"  name="email" id="email"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">No WA</label>
                        <input type="number" class="form-control"  name="no_wa" id="no_wa"  required >
                        
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
            modal.find('#nama_pelanggan').attr("value",div.data('nama_pelanggan'));
            modal.find('#alamat').attr("value",div.data('alamat'));
            modal.find('#jk').attr("value",div.data('jk'));
            modal.find('#tgl_lahir').attr("value",div.data('tgl_lahir'));
            modal.find('#email').attr("value",div.data('email'));
            modal.find('#no_wa').attr("value",div.data('no_wa'));
           
        });
    });
</script>