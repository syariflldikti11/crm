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
          Cetak
                <a target="_blank" href="<?php echo base_url('pimpinan/cetak_usulan_proker_td');?>" > <i class="fa fa-file-pdf"></i></a>
                <a target="_blank" href="<?php echo base_url('pimpinan/cetak_usulan_proker_excel_td');?>" ><i class="fa fa-file-excel"></i></a> 
             </h4> 
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
                   href="<?php echo base_url('pimpinan/view_kak/'.$d->id_usulan_tb);?>"><i class="fa fa-file-pdf"></i></a></div></td>
                    <td ><div align="center"> <a target="_blank" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="RAB" 
                   href="<?php echo base_url('pimpinan/view_rab/'.$d->id_usulan_tb);?>"><i class="fa fa-file-pdf"></i></a> <a target="_blank" data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="RAB Excel" 
                   href="<?php echo base_url('pimpinan/view_rab_excel/'.$d->id_usulan_tb);?>"><i class="fa fa-file-excel"></i></a></div></td>
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
                  
 
                                      <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Detail Usulan" 
                   href="<?php echo base_url('pimpinan/detail_usulan_td/'.$d->id_usulan_tb);?>" 
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



