<?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
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
                  Usulan Program Kerja Tahun Depan
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
                  <th><div align="center">No</th>
                  <th>Tahun</th>
                  <th>PJ</th>
                  <th>Nama Kegiatan</th>
                  <th>KAK</th>
                  <th>RAB</th>
                  <th>IKU</th>
                  <th>Permasalahan</th>
                  <th>Status</th>
                
                  <th >Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_usulan_td as $d): ?>
                <tr>
                <?php 
$cek_jumlah = $this->m_sakip->cek_jumlah($d->id_usulan_tb);
$cek_valid = $this->m_sakip->cek_valid($d->id_usulan_tb);
$cek_kembali = $this->m_sakip->cek_kembali($d->id_usulan_tb);
$jumlah=$cek_jumlah->jumlah; 
$kembali=$cek_kembali->kembali; 
$valid=$cek_valid->valid; 
 ?>
                  <td><?= $no++; ?></td>
                  <td><?= $d->tahun_proker; ?></td>
                  <td><?= $d->bagian; ?></td>
                  <td><?= $d->nama_kegiatan; ?></td>
                  <td ><div align="center"> <a target="_blank" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="KAK" 
                   href="<?php echo base_url('pj/view_kak/'.$d->id_usulan_tb);?>"><i class="fa fa-file-pdf"></i></a></div></td>
                    <td ><div align="center"> <a target="_blank" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="RAB" 
                   href="<?php echo base_url('pj/view_rab/'.$d->id_usulan_tb);?>"><i class="fa fa-file-pdf"></i></a> <a target="_blank" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="RAB Excel" 
                   href="<?php echo base_url('pj/view_rab_excel/'.$d->id_usulan_tb);?>"><i class="fa fa-file-excel"></i></a></div></td>
                  <td><?= $d->nama_iku; ?></td>
                  <td><?= $d->permasalahan; ?></td>
                  <td><?php if($d->status_usulan==0):  ?><font color="red">Belum Dikirim</font>
                    <?php endif; ?>
                   <?php if($d->status_usulan==1):  ?>

                      <font color="orange">Dikirim</font> <br />
                     <font color="blue" size="-3"> Dikirim pada tanggal <?= $d->tgl_kirim; ?></font> <br />
                     <font color="blue" size="-3"> Divalidasi pada tanggal <?= $d->tgl_valid; ?></font> <br />
                     <font color="black" size="-3"> Jumlah keg = <?= $jumlah; ?></font> <br />
                     <font color="red" size="-3"> Dikembalikan = <?= $kembali; ?></font> <br />
                     <font color="green" size="-3"> Valid = <?= $valid; ?></font> 
                    <?php endif; ?>
                   <?php if($d->status_usulan==3):  ?><font color="green">Valid</font> <br />
                     <font color="blue" size="-3"> Dikirim pada tanggal <?= $d->tgl_kirim; ?></font> <br />
                     <font color="blue" size="-3"> Divalidasi pada tanggal <?= $d->tgl_valid; ?></font> <br />
                     <font color="black" size="-3"> Jumlah keg = <?= $jumlah; ?></font> <br />
                     <font color="red" size="-3"> Dikembalikan = <?= $kembali; ?></font> <br />
                     <font color="green" size="-3"> Valid = <?= $valid; ?></font>
                    <?php endif; ?></td>
                  <td align="center"><div align="center">   
                 <?php if($d->status_usulan==0) :?>    <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Update" 
                       data-bs-toggle="modal"
                        data-bs-target="#edit<?= $d->id_usulan_tb ?>" href="#"><i class="fa fa-edit"></i></a>

             <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('pj/delete_usulan_td/'.$d->id_usulan_tb);?>" 
                    ><i class="fa fa-trash"></i></a> 
 <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Kirim" 
                  onclick="return confirm('anda yakin ingin mengirim usulan ini')"
                   href="<?php echo base_url('pj/kirim_usulan_td/'.$d->id_usulan_tb);?>" 
                    ><i class="fa fa-paper-plane"></i></a>
                  <?php endif; ?>
                    <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Detail Usulan" 
                   href="<?php echo base_url('pj/detail_usulan_td/'.$d->id_usulan_tb);?>" 
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
                              Tambah Usulan Program Kerja Tahun Depan
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
    echo form_open_multipart('pj/simpan_usulan_td'); ?>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Kegiatan</label>
                       <input type="text" class="form-control" name="nama_kegiatan">
                        
                      </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1">KAK Pdf</label>
                       <input type="file" class="form-control" name="kak" required>
                        
                      </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1">RAB Pdf</label>
                       <input type="file" class="form-control" name="rab" required>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">RAB Excel</label>
                       <input type="file" class="form-control" name="rab_excel" required>
                        
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">IKU</label>
                        <select class="select2 form-control custom-select"
                    style="width: 100%; height: 36px" name="id_iku_proker">
                       
                       
                        <?php foreach ($dt_iku_proker as $t) :?>
                          <option value="<?= $t->id_iku_proker; ?>"><?= $t->nama_iku; ?></option>
                          <?php endforeach;?>
                          </select>
                        
                      </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1">Permasalahan</label>
                    <textarea class="form-control" name="permasalahan" rows="4"
                  cols="50"
                required></textarea>                       
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
                
                foreach ($dt_usulan_td as $f): ?>

                       <div
                        id="edit<?= $f->id_usulan_tb ?>"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                           Edit Usulan Proker Tahun Depan
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
    echo form_open_multipart('pj/update_usulan_td'); ?>
                            <div class="modal-body">

                      
                    <input type="hidden" class="form-control" name="id_usulan_tb" value="<?= $f->id_usulan_tb; ?>">
                  <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Kegiatan</label>
                       <input type="text" class="form-control" name="nama_kegiatan" value="<?= $f->nama_kegiatan; ?>">
                        
                      </div>
                       <input type="hidden" class="form-control" name="old_kak" value="<?= $f->kak; ?>">
                        <input type="hidden" class="form-control" name="old_rab" value="<?= $f->rab; ?>">
                        <input type="hidden" class="form-control" name="old_rab_excel" value="<?= $f->rab_excel; ?>">
                        <div class="mb-3">
                        <label for="exampleInputEmail1">KAK Pdf</label>
                       <input type="file" class="form-control" name="kak">
                        
                      </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1">RAB Pdf</label>
                       <input type="file" class="form-control" name="rab">
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">RAB Excel</label>
                       <input type="file" class="form-control" name="rab_excel">
                        
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">IKU</label>
                        <select class="select2 form-control custom-select"
                    style="width: 100%; height: 36px" name="id_iku_proker">
                       
                       
                        <?php foreach ($dt_iku_proker as $tg) :?>
                          <option value="<?= $tg->id_iku_proker; ?>" <?php if($tg->id_iku_proker == $f->id_iku_proker) { echo 'selected'; } ?>><?= $tg->nama_iku; ?></option>
                          <?php endforeach;?>
                          </select>
                        
                      </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1">Permasalahan</label>
                    <textarea class="form-control" name="permasalahan" rows="4"
                  cols="50"
                required><?= $f->permasalahan; ?></textarea>                       
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