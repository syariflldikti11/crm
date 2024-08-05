<?php 

function rupiah($angka){
  
  $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
  return $hasil_rupiah;

}
?>
<div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h2>Pesanan Anda</h2>
                                                    
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
                                                   
 
            
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead class="bg-primary text-white">
                <tr>
                  <th><div align="center">No</div></th>
                  <th><div align="left">Nama Mobil</div></th>
                  <th><div align="left">Sales</div></th>
                  <th><div align="left">Keterangan</div></th>
                  <th><div align="left">Harga Mobil</div></th>
                
                  <th><div align="left">File</div></th>
                  <th><div align="left">Status</div></th>                
                  
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
                   
                 
                </tr>
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            </div>


                                             