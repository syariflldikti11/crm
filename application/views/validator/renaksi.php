<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                     Renaksi
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
      
        <div class="card-body">
         
          <div class="table-responsive">
            <table
              id="zero_config"
              class="table table-striped table-bordered"
            >
            <thead class="bg-info text-white">
                <tr>
                  <th><div align="center">No</div></th>
                  <th><div align="center">IKK</div></th>
                  <th><div align="center">Target</div></th>
                  <th><div align="center">TW1</div></th>
                  <th><div align="center">TW2</div></th>
                  <th><div align="center">TW3</div></th>
                  <th><div align="center">TW4</div></th>
                 
</tr>
              </thead>
             
                
           
              <tbody>
                <?php
                $no=1;
                foreach ($dt_renaksi as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    
                    <div align="left">
                      <?= $d->ikk; ?>
                    </div></td>
                  <td><div align="center">
                    <?= $d->target; ?>
                  </div></td>
                  <td><div align="center"><?= $d->tw1_renaksi; ?></div></td>
                  <td><div align="center"><?= $d->tw2_renaksi; ?></div></td>
                  <td><div align="center"><?= $d->tw3_renaksi; ?></div></td>
                  <td><div align="center"><?= $d->tw4_renaksi; ?></div></td>
                 
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
                

   