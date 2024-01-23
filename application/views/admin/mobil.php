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
                  <th><div align="left">Warna</div></th>
                  <th><div align="left">CC</div></th>
                  <th><div align="left">Transmisi</div></th>
                  <th><div align="left">Penggerak</div></th>
                  <th><div align="left">Kapasitas</div></th>
                  <th><div align="left">AC</div></th>
                  <th><div align="left">AC Double</div></th>
                  <th><div align="left">Lampu Kabut</div></th>
                  <th><div align="left">Foto</div></th>
                
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_mobil as $d): ?>
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
                      <?= $d->warna; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->cc; ?>
                    </div></td>
                      <td>
                    <div align="left">
                      <?= $d->transmisi; ?>
                    </div></td>
                      <td>
                    <div align="left">
                      <?= $d->penggerak; ?>
                    </div></td>
                      <td>
                    <div align="left">
                      <?= $d->kapasitas; ?>
                    </div></td>
                      <td>
                    <div align="left">
                      <?= $d->ac; ?>
                    </div></td>
                      <td>
                    <div align="left">
                      <?= $d->ac_double_blower; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->lampu_kabut; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <a target="_blank" href="<?= base_url(); ?>upload/<?= $d->foto_mobil; ?>">File </a>
                    </div></td>
                    
                   
                  <td align="center"><div align="center">   
       <a  onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-sm btn-danger"  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                   href="<?php echo base_url('admin/delete_mobil/'.$d->id_mobil);?>" 
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
    echo form_open_multipart('admin/simpan_mobil'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Mobil</label>
                        <input type="text" class="form-control"  name="nama_mobil"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Warna</label>
                        <input type="text" class="form-control"  name="warna"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">CC</label>
                        <input type="number" class="form-control"  name="cc"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Kapasitas Peneumpang</label>
                        <input type="number" class="form-control"  name="kapasitas"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Transmisi</label>
                  
                         <select class="form-control" name="transmisi" required>
                          <option value="Manual">Manual</option>
                          <option value="Automatic">Automatic</option>
                        </select>
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Penggerak</label>
                       <select class="form-control" name="penggerak" required>
                          <option value="FWD">FWD</option>
                          <option value="RWD">RWD</option>
                        </select>
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">AC</label>
                         <select class="form-control" name="ac" required>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">AC Double Blower</label>
                       
                          <select class="form-control" name="ac_double_blower" required>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Lampu Kabut</label>
                       
                         <select class="form-control" name="lampu_kabut" required>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Foto Mobil</label>
                        <input type="file" class="form-control"  name="foto_mobil" required >
                        
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