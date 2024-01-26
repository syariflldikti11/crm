<div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h2>Informasi Promo Mobil Daihatsu</h2>
                                                    <span>Dapatkan informasi mengenai promo penjualan dan purna jual terbaru dari Daihatsu</span>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
<div class="row">
 <?php
                $no=1;
                foreach ($dt_promo as $m): ?>
                                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            
                                                            <a href="#!" class="hvr-shrink">
                                                                <img src="<?= base_url();?>upload/<?= $m->file_promo; ?>" class="img-fluid o-hidden" >
                                                            </a>
                                                            <div class="p-new"><a href=""> New </a></div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h3><?= $m->nama_promo; ?></h3></a>
                                                            <div class="m-b-10">
                                                                <?= $m->detail_promo; ?>
                                                            </div>
                                                             <small class="old-price"><?= $m->tgl_promo; ?></small></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          <?php endforeach; ?>
                                           
                                          
                                      
                                        </div>