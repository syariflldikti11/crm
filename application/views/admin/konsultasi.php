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
                  <th><div align="left">Nama Pelanggan</div></th>
                  <th><div align="left">No Wa</div></th>
                  <th><div align="left">Konsultasi</div></th>
                  <th><div align="left">Balasan</div></th>
                  <th><div align="left">Penilaian</div></th>
                
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_konsultasi as $d): ?>
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
                      <?= $d->no_wa; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->isi_konsultasi; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->balasan; ?>
                    </div></td>
                    <td> <div align="left">
                      <?php if($d->penilaian==4): ?><label class="label label-success">Sangat Puas</label><?php endif;?>
                      <?php if($d->penilaian==3): ?><label class="label label-primary">Puas</label><?php endif;?>
                      <?php if($d->penilaian==2): ?><label class="label label-warning">Kurang Puas</label><?php endif;?>
                      <?php if($d->penilaian==1): ?><label class="label label-danger">Tidak Puas</label><?php endif;?>
                      
                    </div></td>
                 
                   
                  <td align="center"><div align="center">   
             <a   class="btn btn-sm btn-warning" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-toggle="modal" data-target="#edit"   
                              data-id="<?= $d->id_konsultasi ?>"
                              data-balasan="<?= $d->balasan ?>"
                             
                            
                              > 
                    <span class="icofont icofont-ui-edit"></span> </a> <a  onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-sm btn-danger"  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                   href="<?php echo base_url('admin/delete_konsultasi/'.$d->id_konsultasi);?>" 
                    ><span class="icofont icofont-ui-delete"></span> </a></div></td>
                </tr>
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>
                                                        </table>
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
    echo form_open('admin/update_konsultasi'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                          <input type="hidden" class="form-control"  name="id_konsultasi" id="id" required >
                        <label for="exampleInputEmail1">Balasan</label>
                        <input type="text" class="form-control"  name="balasan" id="balasan"  required >
                        
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
            modal.find('#balasan').attr("value",div.data('balasan'));
           
           
         
        });
    });
</script>