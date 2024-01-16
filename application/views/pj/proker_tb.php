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
                   Program Kerja Tahun Berjalan
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
                <a target="_blank" href="<?php echo base_url('pj/cetak_proker');?>" > <i class="fa fa-file-pdf"></i></a>
                <a target="_blank" href="<?php echo base_url('pj/cetak_proker_excel');?>" ><i class="fa fa-file-excel"></i>   
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
                  <th>PJ</th>
                  <th>Nama Kegiatan</th>
                  <th>KAK</th>
                  <th>RAB</th>
                  <th>IKU</th>
                  <th>Permasalahan</th>
                  <th>Total Anggaran</th>
                
                  <th >Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_proker_tb as $d): ?>
                <tr>
                  <td><?= $no++; ?></td>
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
                 <td><?php $cek_anggaran = $this->m_sakip->get_total_anggaran($d->id_usulan_tb);
 $anggaran=$cek_anggaran->row()->total_anggaran; 
 echo rupiah($anggaran);?></td>
                  <td align="center"><div align="center">   
                
                    <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Detail Usulan" 
                   href="<?php echo base_url('pj/detail_proker_tb/'.$d->id_usulan_tb);?>" 
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



