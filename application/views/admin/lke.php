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
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah Aspek</a></h4> 
        </div>
        <div class="card-body">
         
          <div class="table-responsive">
            <table
             
              class="table table-striped table-bordered"
            >
            <thead class="bg-info text-white">
                <tr>
    <th>No</th>
    <th>LKE</th>
    <th >Program KerjaKegiatan</th>
    <th >PIC</th>
    <th >Sasaran</th>
    <th >Target Dokumen Pendukung</th>
    <th >Waktu Pelaksanaan</th>
    <th >Anggaran</th>
  </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_aspek as $d): ?>
              <tr>
    <td><?= $no++; ?></td>
    <?php $id_aspek=$d->id_aspek; ?>
    <td><?= $d->nama_aspek; ?>   <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Tambah LKE"   data-bs-toggle="modal"
                        data-bs-target="#bs-lke" href="javascript:;" 
                        data-id_aspek="<?= $d->id_aspek ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
  $hr='A'; $lke = $this->db->query("SELECT * from lke  where id_aspek='$id_aspek'");
     foreach ($lke->result() as $b) :?>
  
                
   <tr>
    <td><?= $hr++; ?></td>
     <?php $id_lke=$b->id_lke; ?>
    <td><?= $b->nama_lke; ?>  <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Tambah Proker/Kegiatan"   data-bs-toggle="modal"
                        data-bs-target="#bs-proker" href="javascript:;"  data-id_lke="<?= $b->id_lke ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
  $hrr='1'; $proker = $this->db->query("SELECT * from proker  where id_lke='$id_lke'");
     foreach ($proker->result() as $c) :?>
  
                
   <tr>
  <td></td>
     <td></td>
    <td><?= $hrr++; ?>). <?= $c->nama_proker; ?>  </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php endforeach; ?>
  <?php endforeach; ?>
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
                              Tambah Aspek
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
    echo form_open('admin/simpan_aspek'); ?>
                   
                       <div class="form-group">
                        <label for="exampleInputEmail1">Nama Aspek</label>
                        <input type="text" class="form-control"  name="nama_aspek" required >
                        
                      </div>
                      <input type="hidden" class="form-control"  name="id_area" value="<?= $id; ?>" required >
                     
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
                        id="bs-lke"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Tambah LKE
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
    echo form_open('admin/simpan_lke'); ?>
                   
                       <div class="form-group">
                        <label for="exampleInputEmail1">Nama LKE</label>
                        <input type="text" class="form-control"  name="nama_lke" required >
                        
                      </div>
                      <input type="text" class="form-control"  name="id_aspek" id="id_aspek" required >
                      <input type="text" class="form-control"  name="id_area" value="<?= $id; ?>" required >
                     
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
                        id="bs-proker"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Tambah Proker/Kegiatan
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
    echo form_open('admin/simpan_proker'); ?>
                   
                       <div class="form-group">
                        <label for="exampleInputEmail1">Nama Proker/Kegiatan</label>
                        <input type="text" class="form-control"  name="nama_proker" required >
                        
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">PIC</label>
                        <input type="text" class="form-control"  name="pic" required >
                        
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">Sasaran</label>
                        <input type="text" class="form-control"  name="sasaran" required >
                        
                      </div>
                      <input type="text" class="form-control"  name="id_lke" id="id_lke" required >
                      <input type="text" class="form-control"  name="id_area" value="<?= $id; ?>" required >
                     
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
                           Edit Aspek
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
    echo form_open('admin/update_aspek'); ?>
                   
                       <div class="mb-3">
                       <input type="hidden" class="form-control"  name="id_aspek" id="id" required >
                       <input type="hidden" class="form-control"  name="id_area" value="<?= $id; ?>" required >
                        <label for="exampleInputEmail1">Nama Aspek</label>
                        <input type="text" class="form-control"  name="nama_area" id="nama_aspek" required >
                        
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
            modal.find('#nama_aspek').attr("value",div.data('nama_aspek'));
           

        });
    });
</script>
 <script>
    $(document).ready(function() {
      
        $('#bs-lke').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)

            // Isi nilai pada field
            modal.find('#id_aspek').attr("value",div.data('id_aspek'));
           
           

        });
    });
</script>
 <script>
    $(document).ready(function() {
      
        $('#bs-proker').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)

            // Isi nilai pada field
            modal.find('#id_lke').attr("value",div.data('id_lke'));
           
           

        });
    });
</script>