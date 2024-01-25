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
                                                    <h4>Detail Mobil</h4>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
<div class="row">
                                            <div class="col-md-12">
                                                <!-- Product detail page start -->
                                                <div class="card product-detail-page">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-lg-5 col-xs-12">
                                                                <div class="port_details_all_img row">
                                                                    <div class="col-lg-12 m-b-15">
                                                                        <div id="big_banner">
                                                                            <div class="port_big_img">
                                                                                <img class="img img-fluid" src="<?= base_url();?>upload/<?= $d->foto_mobil; ?>" alt="Big_ Details">
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                                                                <div class="row">
                                                                    <div>
                                                                        
                                                                        <div class="col-lg-12">
                                                                            <h4 class="pro-desc"><?= $d->nama_mobil; ?></h4>
                                                                        </div>
                                                                        
                                                                       
                                                                        <div class="col-lg-12">
                                                                            <span class="text-primary product-price"><?= rupiah($d->harga_otr); ?></span> 
                                                                          
                                                                             <table class="table">
                                                            <tbody>
                                                               
                                                                
                                                                <tr>
                                                                    <td class="col-lg-2">Warna</td>
                                                                    <td class="col-lg-10"><?= $d->warna; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">CC</td>
                                                                    <td class="col-lg-10"><?= $d->cc; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Transmisi</td>
                                                                    <td class="col-lg-10"><?= $d->transmisi; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Penggerak</td>
                                                                    <td class="col-lg-10"><?= $d->penggerak; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Kapasitas</td>
                                                                    <td class="col-lg-10"><?= $d->kapasitas; ?></td>
                                                                </tr>
                                                                  <tr>
                                                                    <td class="col-lg-2">AC</td>
                                                                    <td class="col-lg-10"><?= $d->ac; ?></td>
                                                                </tr>
                                                                  <tr>
                                                                    <td class="col-lg-2">AC Double Blower</td>
                                                                    <td class="col-lg-10"><?= $d->ac_double_blower; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-lg-2">Lampur Kabut</td>
                                                                    <td class="col-lg-10"><?= $d->lampu_kabut; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                                            <hr>
                                                                           
                                                                        </div>
                                                                        
                                                                        <div class="col-lg-12 col-sm-12 mob-product-btn">
                                                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-20">
                                                                                <i class="icofont icofont-cart-alt f-16"></i><span class="m-l-10">Minta Penawaran</span>
                                                                            </button>
                                                                              <button type="button" class="btn btn-warning waves-effect waves-light m-r-20">
                                                                                <i class="icofont icofont-cart-alt f-16"></i><span class="m-l-10">Berminat</span>
                                                                            </button>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                        <!-- Nav tabs start-->

                                        <!-- Nav tabs card start-->
                                      
                                                <!-- Product detail page end -->
                                            </div>
                                        </div>