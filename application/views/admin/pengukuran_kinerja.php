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
          <h4 class="card-title mb-0"><a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-success btn-sm"> Hitung</a>
                       
                      </h4> 
        </div>
        <div class="card-body">
         
          <div class="table-responsive">
        
            <table
                    class="table table-bordered"
                  >
                  <thead class="bg-info text-white">
                      <tr>
                  
                  <th>Sasaran Kegiatan</th>
                  <th>Indikator Kinerja Kegiatan</th>
                  <th>Satuan</th>
                  <th>Target Perjanjian Kinerja</th>
                  <th>Rencana Aksi TW 1</th>
                  <th>Capaian TW 1
                  <th>Rencana Aksi TW 2</th>
                  <th>Capaian TW 2
                  <th>Rencana Aksi TW 3</th>
                  <th>Capaian TW 3
                  <th>Rencana Aksi TW 4</th>
                  <th>Capaian TW 4</th>
               
                      </tr>
                    </thead>
                    <tbody>
                    <?php
              $arr=array();
                foreach ($dt_ikk as $d){
$arr[$d->sasaran_kegiatan][]=$d;
 }
        ?>
                           
             
               <?php foreach ($arr as $key =>$val): ?>
                <?php foreach ($val as $k => $v) : ?>
                     
                     <tr>
                    <?php if ($k == 0) : ?>
                        <td rowspan="<?php echo count($val) ?>">
                            <?php echo $v->sasaran_kegiatan ?>
                        </td>
                    <?php endif ?>
                    <td><?php echo $v->ikk ?></td>
                    <td align="center"><?php echo $v->satuan ?></td>
                    <td align="center"><?php echo $v->target ?></td>
                    <td align="center"><?php echo $v->tw1_renaksi ?></td>
                    <td align="center"><?php echo $v->tw1_capaian ?></td>
                    <td align="center"><?php echo $v->tw2_renaksi ?></td>
                    <td align="center"><?php echo $v->tw2_capaian ?></td>
                    <td align="center"><?php echo $v->tw3_renaksi ?></td>
                    <td align="center"><?php echo $v->tw3_capaian ?></td>
                    <td align="center"><?php echo $v->tw4_renaksi ?></td>
                    <td align="center"><?php echo $v->tw4_capaian ?></td>
                   
                </tr>
            <?php endforeach ?>
        <?php endforeach ?>
                    
                    </tbody>
                  </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div
                        id="bs-example-modal-md"
                        class="modal hide fade"
                        tabindex=""
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="false"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Hitung Capaian
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>

                              
                            </div>
                            <div class="modal-body" style="overflow:hidden;">

                         <?php  
             echo validation_errors();                       
    echo form_open_multipart('app/hitung_capaian'); ?>
                   
                   
                
                
                     
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Triwulan</label>
                       <select class="form-select"  name="id_triwulan">
                       
                       
                        <?php foreach ($dt_tw as $t) :?>
                          <option value="<?= $t->id_triwulan; ?>"><?= $t->tw; ?></option>
                          <?php endforeach;?>
                          </select>
                        
                      </div>
                </div>
                            
                            <div class="modal-footer">
                            <input type="submit" name="submit"  class="btn btn-info btn-pill" value="Submit">
                              <button
                                type="button"
                                class="btn btn-danger btn-pill"
                                data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
                </form>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>



