<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                 
                  Penggabungan   <?= $d->nama_pt; ?>
                   
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
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a>
                         <a href="<?php echo base_url('pj/iku4/'.$d->id_iku);?>"  class="btn btn-dark btn-sm"> kembali</a></h4> 
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
                  <th><div align="center">Kode PT</div></th>
                  <th><div align="left">Nama PTS</div></th>
                 
                  <th ><div align="center">Opsi</div></th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $no=1;
              foreach ($dt_detail_iku4 as $a) :?>
                <tr>
                  <td>
                    <div align="center"><?= $no++; ?> </div></td>
                    <td><div align="center"><?= $a->detail_kode_pt; ?></div></td>
                  <td align="left"><div align="left"><?= $a->detail_nama_pt; ?></div></td>
               
                  <td align="center"><div align="center">
                    
                  <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('pj/delete_detail_iku4/'.$a->id_detail_iku4.'/'.$id);?>" 
                    ><i class="fa fa-trash"></i></a>
                   
                 </div></td>
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
                              Tambah Penggabungan <?= $d->nama_pt; ?>
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
    echo form_open('pj/simpan_detail_iku4'); ?>
                   
                 
                   <div class="mb-3">
                 
                        <label for="exampleInputEmail1">PTS</label>
                        <select  class="select2 form-control custom-select"
                    style="width: 100%; height: 36px"  onchange="changeValuee(this.value)">
                    <option>Pilih</option>
                      
                          <?php

$jsArrayy = "var prdNamee = new Array();\n";
foreach ($dt_pts as $b) {

echo '<option   value="' . $b->Kode_PT . '">' . $b->Kode_PT . ' '. $b->Nama_PT . '</option>';  
$jsArrayy .= "prdNamee['" . $b->Kode_PT . "'] = {opt_kodept:'" . addslashes($b->Kode_PT) . "',opt_namapt:'".addslashes($b->Nama_PT)."'};\n";

}
?>
                        </select>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Kode PT</label>
                      <input type="text" name="detail_kode_pt"  class="form-control" id="opt_kodept"  required>
</div> 
<div class="mb-3">
                        <label for="exampleInputEmail1">Nama PT</label>
                      <input type="text" name="detail_nama_pt"  class="form-control" id="opt_namapt"  required>  
</div> 

                      <input type="hidden" name="id_iku4" value="<?= $id; ?>" required class="form-control">
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

                     



                     
                   


                      <script>
    $(document).ready(function() {
      
        $('#bs-edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#kodept').attr("value",div.data('kodept'));
            modal.find('#namapt').attr("value",div.data('namapt'));
        });
    });
</script>
<script type="text/javascript"> 
<?php echo $jsArrayy; ?>
function changeValuee(id){
    document.getElementById('opt_kodept').value = prdNamee[id].opt_kodept;
    document.getElementById('opt_namapt').value = prdNamee[id].opt_namapt;

};
</script>
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('kodept').value = prdName[id].kodept;
    document.getElementById('namapt').value = prdName[id].namapt;

};
</script>