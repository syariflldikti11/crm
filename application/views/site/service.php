
<div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h2>Informasi Service</h2>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                               <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
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
                  <th><div align="left">Nama Service</div></th>
                  <th><div align="left">Deskripsi</div></th>
                  <th><div align="left">Estimasi Harga</div></th>
                 
                 
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_service as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->nama_model_mobil; ?>
                    </div></td>
                     <td>
                    <div align="left">
                      <?= $d->nama_service; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->deskripsi; ?>
                    </div></td>
                    <td>
                    <div align="left">
                      <?= $d->estimasi_harga; ?>
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