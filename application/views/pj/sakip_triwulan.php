<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                   <?= $judul; ?>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div
              class="
                col-md-7
                justify-content-end
                align-self-center
                 d-md-flex
              "
            >
              <div class="d-flex">
               
                <button class="btn btn-warning">
               
                  Tahun <?= $tahun; ?>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="border-bottom title-part-padding">
          
        </div>
        <div class="card-body">
         
          <div class="table-responsive">
            <table
              id="zero_config"
              class="table table-striped table-bordered"
            >
            <thead class="bg-info text-white">
                <tr>
                  <th><div align="center">No</div></th>
                  <th><div align="left">Triwulan</div></th>
                  <th><div align="left">Status</div></th>
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_triwulan as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->tw; ?>
                    </div></td>
                    <td>
                    <div align="center">
                     <?php if ($d->status==1) {
                        echo '<font color="green">Active</font>';
                     } 
                     else {
                        echo '<font color="red">Non Active</font>';
                     }
                     ?>
                    </div></td>
                  <td align="center"><div align="center"><a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-bs-toggle="modal" data-bs-target="#bs-edit-data"   
                              data-id="<?= $d->id_triwulan ?>"
                              data-tw="<?= $d->tw ?>"
                              > 
                    <i class="fa fa-edit"></i> </a> </div></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

                      <div
                        id="bs-edit-data"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                           Edit Triwulan
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">

                         <?php  
             echo validation_errors();                       
    echo form_open('app/update_triwulan'); ?>
                   
                       <div class="form-group">
                       <input type="hidden" class="form-control"  name="id_triwulan" id="id" required >
                        
                        <label for="exampleInputEmail1">Status</label>
                      <select class="form-select" name="status">
                        <option value="1">Active</option>
                        <option value="0">Non Active</option>
                      </select>
                        
                      </div>
                
                            </div>
                            <div class="modal-footer">
                            <input type="submit" name="submit"  class="btn btn-info btn-pill" value="Update">
                              <button
                                type="button"
                                class="btn btn-danger btn-pill"
                                data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
                </form>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>



                      <script>
    $(document).ready(function() {
      
        $('#bs-edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#tw').attr("value",div.data('tw'));

        });
    });
</script>