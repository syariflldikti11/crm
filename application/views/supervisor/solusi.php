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
                  <th><div align="left">Pertanyaan</div></th>
                  <th><div align="left">Jawaban</div></th>
                
                
                
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_solusi as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->pertanyaan; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->jawaban; ?>
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
    echo form_open('admin/simpan_solusi'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Pertanyaan</label>
                        <input type="text" class="form-control"  name="pertanyaan"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Jawaban</label>
                        <input type="text" class="form-control"  name="jawaban"  required >
                        
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
    echo form_open('admin/update_solusi'); ?>
                   
                                                                           <div class="modal-body">
   
                      <div class="mb-3">
                          <input type="hidden" class="form-control"  name="id_solusi" id="id" required >
                        <label for="exampleInputEmail1">Pertanyaan</label>
                        <input type="text" class="form-control"  name="pertanyaan" id="pertanyaan"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Jawaban</label>
                        <input type="text" class="form-control"  name="jawaban" id="jawaban"  required >
                        
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
      
        $('#edit').on('show.bs.modal', function (pertanyaan) {
            var div = $(pertanyaan.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#pertanyaan').attr("value",div.data('pertanyaan'));
            modal.find('#jawaban').attr("value",div.data('jawaban'));
           
           
         
        });
    });
</script>