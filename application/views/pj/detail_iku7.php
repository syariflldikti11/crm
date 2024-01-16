<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                 
                    Prestasi <?= $d->nama_pt; ?>
                   
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
          <h4 class="card-title mb-0"><a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a>
                         <a href="<?php echo base_url('pj/iku7/'.$d->id_iku);?>"  class="btn btn-dark btn-sm"> kembali</a></h4> 
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
                  <th><div align="center">NIM</div></th>
                  <th><div align="center">Nama</div></th>
                  <th><div align="center">Prestasi</div></th>
                  <th><div align="center">Tahun</div></th>
                  <th><div align="center">Peringkat</div></th>
                  <th><div align="center">Kategori</div></th>
                  <th><div align="center">Sertifikat</div></th>
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $no=1;
              foreach ($dt_detail_iku7 as $a) :?>
                <tr>
                  <td>
                    <div align="center"><?= $no++; ?> </div></td>
                    <td><div align="center"><?= $a->nim; ?></div></td>
                    <td><div align="center"><?= $a->nama; ?></div></td>
                    <td><div align="center"><?= $a->prestasi; ?></div></td>
                    <td><div align="center"><?= $a->tahun; ?></div></td>
                  <td><div align="center"><?= $a->peringkat; ?></div></td>
                  <td><div align="center"><?= $a->kategori; ?></div></td>
                  <td ><div align="center"> <a href="<?= base_url();?>upload/<?= $a->file; ?>"><i class="fa fa-file"></i></a></div></td>
                  <td ><div align="center">
                    
                  <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('pj/delete_detail_iku7/'.$a->id_detail_iku7.'/'.$id);?>" 
                    ><i class="fa fa-trash"></i></a>
                   <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href=""
                           data-bs-toggle="modal" data-bs-target="#modaledit<?= $a->id_detail_iku7 ?>"   

                              > 
                    <i class="fa fa-edit"></i> </a>
                 </div></td>
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
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Tambah Prestasi Mahasiswa <?= $d->nama_pt; ?>
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body" style="overflow:hidden;">

                         <?php  
             echo validation_errors();                       
    echo form_open_multipart('pj/simpan_detail_iku7'); ?>
                   
                 
                  
                      <div class="mb-3">
                        <label for="exampleInputEmail1">NIM</label>
                      <input type="text" name="nim"  class="form-control" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Nama</label>
                      <input type="text" name="nama"  class="form-control" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Prestasi</label>
                      <input type="text" name="prestasi"  class="form-control" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Tahun</label>
                      <input type="text" name="tahun"  class="form-control" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Peringkat</label>
                      <input type="text" name="peringkat"  class="form-control" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Kategori</label>
                       <select class="form-select"  name="kategori">
 
                          <option value="Nasional">Nasional</option>
                          <option value="Internasional">Internasional</option>

                          </select>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Sertifikat</label>
                      <input type="file" name="file"  class="form-control" required>
</div> 

                      <input type="hidden" name="id_iku7" value="<?= $id; ?>" required class="form-control">
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

                     



                     
                   
 <?php 
              $no=1;
              foreach ($dt_detail_iku7 as $c) :?>

                     <div
                        id="modaledit<?= $c->id_detail_iku7 ?>"
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Edit Prestasi Mahasiswa <?= $d->nama_pt; ?>
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body" style="overflow:hidden;">

                         <?php  
             echo validation_errors();                       
    echo form_open_multipart('pj/update_detail_iku7'); ?>
                   
                 
                  
                      <div class="mb-3">
                        <label for="exampleInputEmail1">NIM</label>
                      <input type="text" name="nim"  class="form-control" value="<?= $c->nim; ?>" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Nama</label>
                      <input type="text" name="nama"  class="form-control" value="<?= $c->nama; ?>" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Prestasi</label>
                      <input type="text" name="prestasi"  class="form-control" value="<?= $c->prestasi; ?>" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Tahun</label>
                      <input type="text" name="tahun"  class="form-control" value="<?= $c->tahun; ?>" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Peringkat</label>
                      <input type="text" name="peringkat"  class="form-control" value="<?= $c->peringkat; ?>" required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Kategori</label>
                       <select class="form-select"  name="kategori">
 
                          <option value="Nasional" <?php if($c->kategori=='Nasional') {echo 'selected';}?>>Nasional</option>
                          <option value="Internasional" <?php if($c->kategori=='Internasional') {echo 'selected';}?>>Internasional</option>

                          </select>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Sertifikat</label>
                      <input type="file" name="file"  class="form-control">
</div> 

                      <input type="hidden" name="id_detail_iku7" value="<?= $c->id_detail_iku7; ?>" required class="form-control">
                      <input type="hidden" name="id_iku7" value="<?= $id; ?>" required class="form-control">
                      <input type="hidden" name="old_file" value="<?= $c->file; ?>" required class="form-control">
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

                   <?php endforeach; ?>  