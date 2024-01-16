<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    Monev
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
               
                  Tahun <?= date('Y'); ?>
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
          <h4 class="card-title mb-0">   
               <a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a></h4> 
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
                  <th><div align="left">Nama Aspek</div></th>
                  <th><div align="left">Tahun Monev</div></th>
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_monev as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_monev; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->tahun_monev; ?>
                    </div></td>
                  <td align="center"><div align="center">   
             <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('admin/delete_monev/'.$d->id_monev);?>" 
                    ><i class="fa fa-trash"></i></a> <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-bs-toggle="modal" data-bs-target="#bs-edit-data"   
                              data-id="<?= $d->id_monev ?>"
                              data-nama_monev="<?= $d->nama_monev ?>"
                              data-tahun_monev="<?= $d->tahun_monev ?>"
                              > 
                    <i class="fa fa-edit"></i> </a> <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Area" 
                   href="<?php echo base_url('admin/area/'.$d->id_monev);?>" 
                    ><i class="fa fa-list"></i></a></div></td>
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
                        id="bs-example-modal-md"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Tambah Monev
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
    echo form_open('admin/simpan_monev'); ?>
                   
                       <div class="form-group">
                        <label for="exampleInputEmail1">Nama Monev</label>
                        <input type="text" class="form-control"  name="nama_monev" required >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Monev</label>
                        <input type="number" class="form-control"  name="tahun_monev" required >
                        
                      </div>
                
                            </div>
                            <div class="modal-footer">
                            <input type="submit" name="submit"  class="btn btn-info btn-pill" value="Submit">
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
                           Edit Sasaran Kegiatan
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
    echo form_open('admin/update_monev'); ?>
                   
                       <div class="form-group">
                       <input type="hidden" class="form-control"  name="id_monev" id="id" required >
                        
                        <label for="exampleInputEmail1">Nama Monev</label>
                        <input type="text" class="form-control"  name="nama_monev" id="nama_monev" required >
                        
                      </div>
                       <div class="form-group">
                       <input type="hidden" class="form-control"  name="id_monev" id="id" required >
                        
                        <label for="exampleInputEmail1">Tahun Monev</label>
                        <input type="number" class="form-control"  name="tahun_monev" id="tahun_monev" required >
                        
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
            modal.find('#nama_monev').attr("value",div.data('nama_monev'));
            modal.find('#tahun_monev').attr("value",div.data('tahun_monev'));

        });
    });
</script>