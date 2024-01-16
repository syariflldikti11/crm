<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                   <?= $judul; ?>
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
          
        </div>
        <div class="card-body">
         
          <div class="table-responsive">
            <table
              id="zero_config"
              class="table table-striped table-bordered"
            >
            <thead class="bg-info text-white">
                <tr>
                  <th><div align="center">No</div></th>
                  <th><div align="left">Kode PT</div></th>
                  <th><div align="left">Nama PT</div></th>
                  <th><div align="left">Provinsi</div></th>
                  <th><div align="left">Kota</div></th>
                  <th><div align="left">Jumlah Mhs</div></th>
                  <th><div align="left">Jumlah Dosen</div></th>
                  <th><div align="left">Jumlah Dosen Ajar</div></th>
                  <th><div align="left">Status</div></th>
                  <th><div align="left">Akreditasi</div></th>
                  <th><div align="left">Tgl Akred Awal</div></th>
                  <th><div align="left">Tgl Akred Akhir</div></th>
     
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_pts as $a): ?>
                <tr>
                <td>
                    <div align="center"><?= $no++; ?> </div></td>
                    <td><div align="center"><?= $a->Kode_PT; ?></div></td>
                  <td align="left"><div align="left"><?= $a->Nama_PT; ?></div></td>
                  <td><div align="center"> <?= $a->provinsi; ?></div></td>
                  <td><div align="center"> <?= $a->kota; ?></div></td>
                  <td><div align="center"> <?= $a->jumlah_mhs; ?></div></td>
                  <td><div align="center"> <?= $a->jumlah_dosen; ?></div></td>
                  <td><div align="center"> <?= $a->jumlah_dosen_ajar; ?></div></td>
                  <td><div align="center"> <?= $a->status_pt; ?></div></td>
                  <td><div align="center"> <?= $a->nm_akred; ?></div></td>
                  <td><div align="center"> <?= $a->tgl_sk_akred_sp; ?></div></td>
                  <td><div align="center"> <?= $a->tst_sk_akred_sp; ?></div></td>
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
