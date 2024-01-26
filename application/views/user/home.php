        <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                                <!-- Owl corousel style 2 card start -->
                                                <div class="card">
                                                   
                                                    <div class="card-block">
                                                        <div class="owl-carousel carousel-dot owl-theme">
                                                        <?php
                $no=1;
                foreach ($dt_banner as $d): ?>
                                                            <div class="item">
                                                                <img class="d-block img-fluid" src="<?= base_url();?>upload/<?= $d->file_banner; ?>" alt="Third slide">
                                                            </div>
                                                        <?php endforeach; ?>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Owl corousel style 2 card end -->
                                            </div>

                                        </div>
                         <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h1>Pilihan Mobil Daihatsu Anda</h1>
                                                     <span>Telusuri lebih dalam mobil Daihatsu yang sesuai dengan kebutuhan Anda</span>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>                    <!-- task, page, download counter  end -->
<div class="row" id="mobil">

                                            <!--  sale analytics start -->
                                            <?php
                $no=1;
                foreach ($dt_mobil as $m): ?>
                                         <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                           
                                                            <a href="#!" class="hvr-shrink">
                                                                <img src="<?= base_url();?>upload/<?= $m->foto_mobil; ?>" class="img-fluid o-hidden" alt="prod1.jpg" width="50%">
                                                            </a>
                                                            <div class="p-new"><a href="<?= base_url('user/detail_mobil/'.$m->id_mobil);?>"> Detail </a></div>
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4><?= $m->nama_mobil; ?></h4></a>
                                                           
                                                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>1250
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
<?php endforeach; ?>
                                         </div>
                                          

                                          
                                           <div class="row">
                                          

                                            <!-- social download  start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-blue">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-home f-34 text-c-blue social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">270+</h6>
                                                                <p>Outlet Resmi</p>
                                                                <p class="m-b-0">Kami Tersebar di hampir seluruh wilayah di Indonesia</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-pink">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="fa fa-gears f-34 text-c-pink social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">170+</h6>
                                                                <p>Bengkel Resmi</p>
                                                                <p class="m-b-0">Termasuk General Repair dan bengkel Body Repair yang tersebar di seluruh Indonesia</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card social-card bg-simple-c-green">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="fa fa-phone f-34 text-c-green social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">177+</h6>
                                                                <p>Layanan Daihatsu Mobile Service</p>
                                                                <p class="m-b-0">Melayani perawatan berkala kendaraan Anda dimanapun dan kapanpun</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <!-- social download  end -->
</div>