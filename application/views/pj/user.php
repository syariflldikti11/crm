<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                     Daftar
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
          <h4 class="card-title mb-0">User &nbsp; &nbsp;<a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a></h4> 
        </div>
        <div class="card-body">
         
          <div class="table-responsive">
            <table
             id="zero_config"
              class="table"
            >
            <thead class="bg-info text-white">
                        <tr>
                        <th><div align="center">No</div></th>
                  <th><div align="center">Username</div></th>
                  <th><div align="center">Password</div></th>
                  <th><div align="center">Akses</div></th>
                  <th><div align="center">Opsi</div></th>
                        </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_user as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
               
                  <td><div align="center">
                    <?= $d->username; ?>
                  </div></td>
                  <td><div align="center">
                    <?= $d->password; ?>
                  </div></td>
                  <td><div align="center"></div></td>
                  <td><div align="center"><a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('sakip/delete_sasaran_kegiatan/'.$d->id_user);?>" 
                    ><i class="fa fa-trash"></i></a> <a data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Edit" href="javascript:;"
                           data-bs-toggle="modal" data-bs-target="#bs-edit-data"   
                              data-id="<?= $d->id_user ?>"
                              data-sasaran_kegiatan="<?= $d->sasaran_kegiatan ?>"
                              > 
                    <i class="fa fa-edit"></i> </a> </div></td>
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



