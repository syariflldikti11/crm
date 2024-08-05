<?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
  return $hasil_rupiah;

}
?> <div class="card">
                                                <div class="card-header">
                                                    <h5><?php echo $judul; ?></h5>
                                                   
 
            
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead class="bg-primary text-white">
                <tr>
                  <th><div align="center">No</div></th>
                  <th><div align="left">Nama Pelanggan</div></th>
                  <th><div align="left">Email</div></th>
                  <th><div align="left">No HP</div></th>
                  <th><div align="left">Nama Mobil</div></th>
                  <th><div align="left">Nama Sales</div></th>
                  <th><div align="left">Keterangan</div></th>
                  <th><div align="left">Harga</div></th>
                 
                  <th><div align="left">File</div></th>
                  <th><div align="left">Status</div></th>                
                  <th><div align="left">Opsi</div></th>                
                  
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_pesanan as $d): ?>
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
                      <?= $d->email; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->no_wa; ?>
                    </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_mobil; ?>
                    </div></td>
                     <td>
                    <div align="left">
                     <?= $d->nama_lengkap; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->keterangan; ?>
                    </div></td>
                   <td>
                    <div align="left">
                      <?= rupiah($d->harga_otr); ?>
                    </div></td>
                   
                     <td>
                     <div align="left">
                      <a target="_blank" href="<?= base_url(); ?>upload/<?= $d->file; ?>">File </a>
                    </div></td>
                    <td>
                    <div align="left">
                      <?php if($d->status==1): ?><label class="label label-primary">Proses</label><?php endif;?>
                     <?php if($d->status==3): ?><label class="label label-success">Selesai</label><?php endif;?>
                      <?php if($d->status==2): ?><label class="label label-danger">Batal</label><?php endif;?>
                       <?php if($d->status==0): ?><label class="label label-inverse">Menunggu</label><?php endif;?>
                    </div></td>
                   
                  <td>
                     <a   class="btn btn-sm btn-warning" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Teruskan" href="javascript:;"
                           data-toggle="modal" data-target="#kirim"   
                              data-id="<?= $d->id_pesanan ?>"
                            
                              
                              > 
                    <span class="fa fa-edit"></span> </a> 
                   </td>
                </tr>
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                             

                                                                  <div class="modal fade" id="kirim" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Update Pesanan</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                                            </div>
                                                                            <?php  
             echo validation_errors();                       
    echo form_open('sales/update_pesanan'); ?>
                   
                                                                           <div class="modal-body">
   
                        
                        <input type="hidden" class="form-control"  name="id_pesanan" id="id"  required >
                   
                            <div class="mb-3">
                        <label for="exampleInputEmail1">Status</label>
                       <select class="form-control" name="status">
                         <option value="1">Proses</option>
                         <option value="2">Batal</option>
                         <option value="3">Selesai</option>
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
      
        $('#kirim').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
           
          
           
        });
    });
</script>