<?php 

function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;

}
?>
                                        
                                    <div class="row">

<div class="col-xl-3 col-md-6">
<div class="card bg-c-yellow text-white">
<div class="card-block">
<div class="row align-items-center">
<div class="col">
<p class="m-b-5">Pelanggan</p>
<h4 class="m-b-0"><?= $pelanggan; ?></h4>
</div>
<div class="col col-auto text-right">
<i class="fa fa-users f-50 text-c-yellow"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-green text-white">
<div class="card-block">
<div class="row align-items-center">
<div class="col">
<p class="m-b-5">Sales</p>
<h4 class="m-b-0"><?= $sales; ?></h4>
</div>
<div class="col col-auto text-right">
<i class="fa fa-user f-50 text-c-green"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-pink text-white">
<div class="card-block">
<div class="row align-items-center">
<div class="col">
<p class="m-b-5">Model Mobil</p>
<h4 class="m-b-0"><?= $model_mobil; ?></h4>
</div>
<div class="col col-auto text-right">
<i class="fa fa-car f-50 text-c-pink"></i>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-blue text-white">
<div class="card-block">
<div class="row align-items-center">
<div class="col">
<p class="m-b-5">Pendapatan</p>
<h4 class="m-b-0"><?php $total=0;
$penawaran=$penawaran->harga_deal; 
     $pesanan=$pesanan->harga_otr;
$total=$total+$penawaran+$pesanan;
echo rupiah($total);
     ?>
</h4>
</div>
<div class="col col-auto text-right">
<i class="fa fa-money f-50 text-c-blue"></i>
</div>
</div>
</div>
</div>
</div>

                                  
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Aplikasi CRM Tri Mandiri Sejati Daihatsu</h5>
                                                    <span> </span>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <p>
                                                        Selamat datang Admin
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    

 <div class="col-md-8">
                                                <div class="card">
                                                   <div class="card-header">
                                                        <h5>Penilaian Pelanggan (Skala 1-4)</h5>
                                                      
                                                    </div>
                                                    <div class="card-block">
                                                        
                                                        <div class="row">
                                                            <div class="col-3 b-r-default">
                                                                <p class="text-muted m-b-5">Kasus</p>
                                                                <h5><?php


$query=$this->db->query("Select FORMAT(AVG(penilaian), 1) as kasusp from kasus where penilaian !=0");
 foreach ($query->result() as $t) :?>
<?= $kasusp=$t->kasusp; ?>
 <?php endforeach; ?></h5>


                                                            </div>
                                                            <div class="col-3 b-r-default">
                                                                <p class="text-muted m-b-5">Konsultasi</p>
                                                                <h5><?php


$query=$this->db->query("Select FORMAT(AVG(penilaian), 1) as konsultasip from konsultasi where penilaian !=0");
 foreach ($query->result() as $f) :?>
<?= $f->konsultasip; ?>
 <?php endforeach; ?></h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <p class="text-muted m-b-5">Pesanan</p>
                                                                <h5><?php


$query=$this->db->query("Select FORMAT(AVG(penilaian), 1) as pesananp from pesanan where penilaian !=0");
 foreach ($query->result() as $p) :?>
<?= $p->pesananp; ?>
 <?php endforeach; ?></h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <p class="text-muted m-b-5">Penawaran</p>
                                                                <h5><?php


$query=$this->db->query("Select FORMAT(AVG(penilaian), 1) as penawaranp from penawaran where penilaian !=0");
 foreach ($query->result() as $fs) :?>
<?= $fs->penawaranp; ?>
 <?php endforeach; ?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="chart" height="150"></div>
                                                </div>
                                            </div>
<div class="col-md-4">
<div class="card feed-card">
<div class="card-header">
<h5>Notifikasi</h5>
</div>
<div class="card-block">
<div class="row m-b-30">
<div class="col-auto p-r-0">
<i class="fa fa-heart bg-simple-c-blue feed-icon"></i>
</div>
<div class="col">
<h6 class="m-b-5"><?= $notif_penawaran; ?> Penawaran belum selesai 
</h6>
</div>
</div>
<div class="row m-b-30">
<div class="col-auto p-r-0">
<i class="fa fa-shopping-cart bg-simple-c-pink feed-icon"></i>
</div>
<div class="col">
<h6 class="m-b-5"><?= $notif_pesanan; ?> Pesanan belum selesai 
</h6>
</div>
</div>
<div class="row m-b-30">
<div class="col-auto p-r-0">
<i class="fa fa-headphones bg-simple-c-green feed-icon"></i>
</div>
<div class="col">
<h6 class="m-b-5"><?= $notif_konsultasi; ?> Konsultasi belum dibalas
</h6>
</div>
</div>
<div class="row m-b-30">
<div class="col-auto p-r-0">
<i class="fa fa-briefcase bg-simple-c-pink feed-icon"></i>
</div>
<div class="col">
<h6 class="m-b-5"><?= $notif_kasus; ?> Kasus belum selesai  
</h6>
</div>
</div>

</div>
</div>
</div>


<div class="col-md-6">
<div class="card feed-card">
<div class="card-header">
<h5>Kasus dan Konsultasi</h5>
</div>
<div class="card-block">


<div id="sj"></div>

</div>
</div>
</div>
<div class="col-md-6">
<div class="card feed-card">
<div class="card-header">
<h5>Pesanan</h5>
</div>
<div class="card-block">


<div id="allpesanan"></div>

</div>
</div>
</div>
<div class="col-md-6">
<div class="card feed-card">
<div class="card-header">
<h5>Penawaran</h5>
</div>
<div class="card-block">


<div id="allpenawaran"></div>

</div>
</div>
</div>

</div>
                                    </div>
                                </div>


