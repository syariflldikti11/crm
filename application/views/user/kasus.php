
<div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h2>Layanan Kasus Pelanggan</h2>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                               <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Zero config.table start -->
                 <div class="card">
                                                <div class="card-header">
                                                    <h5><?php echo $judul; ?></h5>
                                                   
 
             <button type="button" class="btn btn-sm btn-inverse" data-toggle="modal" data-target="#default-Modal">Tambah</button>
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
                   
                 
                </tr>
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>
                                                        </table>
                                                    </div>
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
    echo form_open('user/simpan_kasus'); ?>
                   
                                                                           <div class="modal-body">
    
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Subject</label>
                        <input type="text" class="form-control"  name="subject"  required >
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Deskripsi</label>
                     <textarea class="form-control" name="deskripsi"></textarea>
                        
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