  <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4><?php echo $judul; ?></h4>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>

<div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Inputs Validation start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                       
                                                      

                                                    </div>
                                                    <div class="card-block">
                                                       <?php echo validation_errors();
    echo form_open('aset/review_usulan'); ?>
   
                                                         <input type="hidden" value="<?php 
echo $d['id'] ?>" class="form-control" name="id" >
 <div class="form-group row">
                                                                <label class="col-sm-2">Tindakan</label>
                                                                <div class="col-sm-10">
                                                                    <div class="form-radio">
                                                                        <div class="radio radiofill radio-primary radio-inline">
                                                                            <label>
                                                        <input type="radio" name="status_aset" value="1" data-bv-field="member"  <?php if($d['status_aset']==1){echo 'checked';}?>>
                                                        <i class="helper"></i>Teruskan
                                                    </label>
                                                                        </div>
                                                                        <div class="radio radiofill radio-primary radio-inline">
                                                                            <label>
                                                        <input type="radio" name="status_aset" value="2"  data-bv-field="member" <?php if($d['status_aset']==2){echo 'checked';}?>>
                                                        <i class="helper" ></i>Tolak
                                                    </label>
                                                                        </div>
                                                                    </div>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                        <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Catatan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" value="<?php 
echo $d['ket_aset'] ?>" class="form-control" name="ket_aset" >
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Catatan dari SKPD</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" readonly value="<?php 
echo $d['ket_skpd'] ?>" class="form-control" >
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>

                                                           
                                                         
                                                          
                                                         
                                                            <div class="form-group row">
                                                                <label class="col-sm-2"></label>
                                                                <div class="col-sm-10">
                                                                    <input type="submit" name="submit" class="btn btn-primary m-b-0" value="Update">
                                                                </div>
                                                            </div>
                                                        </form>
                                                      
                                                    </div>
                                                </div>

                                               