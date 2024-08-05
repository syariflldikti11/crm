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
                   <th><div align="left">Tanggal Kasus</div></th>
                  <th><div align="left">Nama Pelanggan</div></th>
                   <th><div align="left">Nama Pegawai</div></th>
                  <th><div align="left">No WA Pelanggan</div></th>
                  <th><div align="left">Subject</div></th>
                  <th><div align="left">Deskripsi</div></th>
                  <th><div align="left">Balasan</div></th>   
                  <th><div align="left">Status</div></th>               
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_kasus as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                    <td>
                    <div align="left">
                      <?= $d->tgl_kasus; ?>
                    </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_pelanggan; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->nama_lengkap; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->no_wa; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->subject; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->deskripsi; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->balasan; ?>
                    </div></td>
                    <td>
                    <div align="left">
                     
                       <?php if($d->status==0): ?><label class="label label-primary">Dibuka</label><?php endif;?>
                     <?php if($d->status==1): ?><label class="label label-success">Selesai</label><?php endif;?>
                      <?php if($d->status==2): ?><label class="label label-danger">Ditutup</label><?php endif;?>
                    </div></td>
                   
                  <td align="center"><div align="center">   
            <a   class="btn btn-sm btn-warning" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-toggle="modal" data-target="#edit"   
                              data-id="<?= $d->id_kasus ?>"
                              data-subject="<?= $d->subject ?>"
                              data-deskripsi="<?= $d->deskripsi ?>"
                              data-balasan="<?= $d->balasan ?>"
                              
                              > 
                    <span class="icofont icofont-ui-edit"></span> </a> </div></td>
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
    echo form_open('admin/simpan_kasus'); ?>
                   
                                                                           <div class="modal-body">
    <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Pelanggan</label>
                        
                        <select class="form-control" name="id_pelanggan">
                            <?php
                foreach ($dt_pelanggan as $b): ?>
                          <option value="<?= $b->id_pelanggan; ?>"><?= $b->nama_pelanggan; ?></option>
                           <?php endforeach; ?>
                        </select>
                     
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Subject</label>
                        <input type="text" class="form-control"  name="subject"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" class="form-control"  name="deskripsi"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Balasan</label>
                        <input type="text" class="form-control"  name="balasan"  required >
                        
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
    echo form_open('pegawai/update_kasus'); ?>
                   
                                                                           <div class="modal-body">
   
                        <div class="mb-3">
                        <label for="exampleInputEmail1">Subject</label>
                         <input type="hidden" class="form-control"  name="id_kasus" id="id"  required >
                        <input type="text" class="form-control"  name="subject" id="subject"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" class="form-control"  name="deskripsi" id="deskripsi"  required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Balasan</label>
                        <input type="text" class="form-control"  name="balasan" id="balasan" required >
                        
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
            modal.find('#subject').attr("value",div.data('subject'));
            modal.find('#deskripsi').attr("value",div.data('deskripsi'));
            modal.find('#balasan').attr("value",div.data('balasan'));
          
           
        });
    });
</script>