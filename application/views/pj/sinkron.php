<div class="page-breadcrumb">
          <div class="row">
            <div class="col-md-5 align-self-center">
              <h3 class="page-title"><?= $judul ?></h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    Sinkron
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
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-body">
                  
                  <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          data-bs-toggle="tab"
                          href="#home"
                          role="tab"
                        >
                          <span>Data 1</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          data-bs-toggle="tab"
                          href="#profile"
                          role="tab"
                        >
                          <span>Data 2</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          data-bs-toggle="tab"
                          href="#pts"
                          role="tab"
                        >
                          <span>Data 3</span>
                        </a>
                      </li>
                      
                      
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="p-3">
                          <h3>Jumlah Mahasiswa Aktif Pada PTS</h3>
                          <div class="mb-3">
                        <label for="exampleInputEmail1">Periode Pelaporan</label>
                        <?php  
             echo validation_errors();                       
    echo form_open('sakip/simpan_sinkron1'); ?>
                      <input type="text" name="tahun_lapor"  class="form-control" >
                      
</div> 
<div class="mb-3">
<input type="submit" name="submit"  class="btn btn-info btn-pill" value="Sinkron">
                      
</div> 
                        </div>
                      </div>
                      </form>
                      <div class="tab-pane " id="pts" role="tabpanel">
                        <div class="p-3">
                          <h3>Jumlah Mahasiswa Aktif Pada sPTS</h3>
                          <div class="mb-3">
                        <label for="exampleInputEmail1">Periode Pelaporan</label>
                        <?php  
             echo validation_errors();                       
    echo form_open('sakip/simpan_sinkron1'); ?>
                      <input type="text" name="tahun_lapor"  class="form-control" >
                      
</div> 
<div class="mb-3">
<input type="submit" name="submit"  class="btn btn-info btn-pill" value="Sinkron">
                      
</div> 
                        </div>
                      </div>
                      </form>
                      <div class="tab-pane p-3" id="profile" role="tabpanel">
                        <h3>Jumlah Mahasiswa pada setiap PTS yang melaksanakan kampus merdeka</h3>
                        <div class="mb-3">
                        <label for="exampleInputEmail1">Periode Pelaporan</label>
                        <?php  
             echo validation_errors();                       
    echo form_open('sakip/simpan_sinkron2'); ?>
                      <input type="text" name="tahun_lapor"  class="form-control" >
                      
</div> 
<div class="mb-3">
<input type="submit" name="submit"  class="btn btn-info btn-pill" value="Sinkron">
</form>         
</div> 

                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>




