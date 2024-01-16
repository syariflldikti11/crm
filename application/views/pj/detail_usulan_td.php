<?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
  return $hasil_rupiah;

}
?>
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                 Detail Usulan Program Kerja Tahun Berjalan
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
        <?php
        $cek = $this->m_sakip->cek_usulan_tb($id);
        $status_cek=$cek->status_usulan;
        ?>
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="border-bottom title-part-padding">
          <h4 class="card-title mb-0">   
             <?php if($status_cek!=3):?>  <a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a><?php endif; ?>
                           <a href="<?php echo base_url('pj/usulan_td');?>"  class="btn btn-dark btn-sm"> kembali</a></h4> </h4> 
        </div>
        <div class="card-body">
         
          <div class="table-responsive">
            <table
              id="zero_config"
              class="table table-striped table-bordered"
            >
            <thead class="bg-info text-white">
                <tr>
                  <th><div align="center">No</th>
                  <th>Nama Detail Kegiatan</th>
                  <th>Tempat Pelaksanaan</th>
                  <th>Bentuk Kegiatan</th>
                  <th>Bulan Kegiatan</th>
                  <th>Anggaran</th>
                  <th>Status</th>
                 
                  <th >Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_detail_usulan_tb as $d): ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $d->detail_kegiatan; ?></td>
                  <td><?= $d->tempat_pelaksanaan; ?></td>
                  <td><?= $d->bentuk_kegiatan; ?></td>
                  <td><?= $d->jan; ?> <?= $d->feb; ?> <?= $d->mar; ?> <?= $d->apr; ?> <?= $d->mei; ?> <?= $d->jun; ?> <?= $d->jul; ?><?= $d->agu; ?> <?= $d->sep; ?> <?= $d->okt; ?> <?= $d->nov; ?> <?= $d->des; ?></td>
                  <td><?= rupiah($d->anggaran) ?></td>
                  <td><?php if($d->status_detail_usulan==0):  ?><font color="red">belum dikirim</font>
                    <?php endif; ?>
                    <?php if($d->status_detail_usulan==1):  ?><font color="orange">dikirim</font>
                    <?php endif; ?>
                     <?php if(
$d->status_detail_usulan==2):  ?><font color="blue">dikembalikan</font> <br />
catatan validator :<?= $d->catatan; ?>
                    <?php endif; ?>
                   <?php if($d->status_detail_usulan==3):  ?><font color="green">valid</font>
                    <?php endif; ?></td>
                  <td align="center"><div align="center"> 
                 <?php if($d->status_detail_usulan==0 or $d->status_detail_usulan==2) :?> 
                  <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Update" 
                       data-bs-toggle="modal"
                        data-bs-target="#edit<?= $d->id_detail_usulan_tb ?>" href="#"><i class="fa fa-edit"></i></a>
 
             <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('pj/delete_detail_usulan_td/'.$d->id_detail_usulan_tb.'/'.$d->id_usulan_tb);?>" 
                    ><i class="fa fa-trash"></i></a>
                     <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Kirim" 
                  onclick="return confirm('anda yakin ingin mengirim data ini')"
                   href="<?php echo base_url('pj/kirim_detail_usulan_td/'.$d->id_detail_usulan_tb.'/'.$d->id_usulan_tb);?>" 
                    ><i class="fa fa-paper-plane"></i></a> 

                  
                  <?php endif; ?>
                  <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Histori Detail Usulan" 
                   href="<?php echo base_url('pj/histori_detail_usulan_td/'.$d->id_detail_usulan_tb);?>" 
                    ><i class="fa fa-history"></i></a></div></td>
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
                              Tambah Detail Usulan Program Kerja Tahun Depan
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
    echo form_open_multipart('pj/simpan_detail_usulan_td'); ?>
                      <div class="modal-body">
                    <input type="hidden" class="form-control" name="id_usulan_tb" value="<?= $id; ?>">
                  <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Detail Kegiatan</label>
                       <input type="text" class="form-control" name="detail_kegiatan" >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tempat Pelaksanaan</label>
                       <input type="text" class="form-control" name="tempat_pelaksanaan" >
                        
                      </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Bentuk Kegiatan</label>
                        <select class="form-select" name="bentuk_kegiatan">
                       
                      
                          <option value="Luring">Luring</option>
                          <option value="Daring">Daring</option>
                          <option value="Hybrid">Hybrid</option>
                        
                          </select>
                        
                      </div>
          
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Jadwal Kegiatan</label>
                      <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Januari"
                      id="flexCheckDefault"
                      name="jan"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Januari
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Februari"
                      id="flexCheckDefault"
                      name="feb"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Februari
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Maret"
                      id="flexCheckDefault"
                      name="mar"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Maret
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="April"
                      id="flexCheckDefault"
                      name="apr"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      April
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Mei"
                      id="flexCheckDefault"
                      name="mei"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Mei
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Juni"
                      id="flexCheckDefault"
                      name="jun"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Juni
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Juli"
                      id="flexCheckDefault"
                      name="jul"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Juli
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Agustus"
                      id="flexCheckDefault"
                      name="agu"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Agustus
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="September"
                      id="flexCheckDefault"
                      name="sep"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      September
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Oktober"
                      id="flexCheckDefault"
                      name="okt"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Oktober
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="November"
                      id="flexCheckDefault"
                      name="nov"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      November
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Desember"
                      id="flexCheckDefault"
                      name="des"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Desember
                    </label>
                  </div>
                  
                        
                      </div>
                       
                        <div class="mb-3">
                        <label for="exampleInputEmail1">Anggaran</label>
                       <input type="text" class="form-control" name="anggaran" >
                        
                      </div>
              
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

    <?php
                
                foreach ($dt_detail_usulan_tb as $f): ?>

                       <div
                        id="edit<?= $f->id_detail_usulan_tb ?>"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                           Edit Usulan Proker Tahun Berjalan
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                             <?php  
             echo validation_errors();                       
    echo form_open_multipart('pj/update_detail_usulan_td'); ?>
                            <div class="modal-body">

                      
                    <input type="hidden" class="form-control" name="id_detail_usulan_tb" value="<?= $f->id_detail_usulan_tb; ?>">
                    <input type="hidden" class="form-control" name="id_usulan_tb" value="<?= $id; ?>">
                  <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Detail Kegiatan</label>
                       <input type="text" class="form-control" name="detail_kegiatan" value="<?= $f->detail_kegiatan; ?>">
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tempat Pelaksanaan</label>
                       <input type="text" class="form-control" name="tempat_pelaksanaan" value="<?= $f->tempat_pelaksanaan; ?>" >
                        
                      </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Bentuk Kegiatan</label>
                        <select class="form-select" name="bentuk_kegiatan">
                       
                      
                          <option value="Luring" <?php if($f->bentuk_kegiatan == 'Luring') { echo 'selected'; } ?>>Luring</option>
                          <option value="Daring" <?php if($f->bentuk_kegiatan == 'Daring') { echo 'selected'; } ?>>Daring</option>
                          <option value="Hybrid" <?php if($f->bentuk_kegiatan == 'Hybrid') { echo 'selected'; } ?>>Hybrid</option>
                        
                          </select>
                        
                      </div>
          
                       <div class="mb-3">
                         <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Januari"
                      id="flexCheckDefault"
                      name="jan" <?php if($f->jan == 'Januari') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Januari
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Februari"
                      id="flexCheckDefault"
                      name="feb" <?php if($f->feb == 'Februari') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Februari
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Maret"
                      id="flexCheckDefault"
                      name="mar"
                      <?php if($f->mar == 'Maret') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Maret
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="April"
                      id="flexCheckDefault"
                      name="apr"
                      <?php if($f->apr == 'April') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      April
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Mei"
                      id="flexCheckDefault"
                      name="mei"
                      <?php if($f->mei == 'Mei') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Mei
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Juni"
                      id="flexCheckDefault"
                      name="jun"
                      <?php if($f->jun == 'Juni') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Juni
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Juli"
                      id="flexCheckDefault"
                      name="jul"
                      <?php if($f->jul == 'Juli') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Juli
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Agustus"
                      id="flexCheckDefault"
                      name="agu"
                      <?php if($f->agu == 'Agustus') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Agustus
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="September"
                      id="flexCheckDefault"
                      name="sep"
                      <?php if($f->sep == 'September') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      September
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Oktober"
                      id="flexCheckDefault"
                      name="okt"
                      <?php if($f->okt == 'Oktober') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Oktober
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="November"
                      id="flexCheckDefault"
                      name="nov"
                      <?php if($f->nov == 'November') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      November
                    </label>
                  </div>
                   <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="Desember"
                      id="flexCheckDefault"
                      name="des"
                      <?php if($f->des == 'Desember') { echo 'Checked'; } ?>
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                      Desember
                    </label>
                  </div>
                  
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Anggaran</label>
                       <input type="text" class="form-control" name="anggaran" value="<?= $f->anggaran; ?>" >
                        
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

  <?php endforeach; ?>


 