<div class="card">
                                                <div class="card-header">
                                                    <h5><?php echo $judul; ?></h5>
                                                   <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#Modal-tab">Download</button>

                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                 <th>No</th>
                                                                 <th>ID LHP</th>
                                                                 <th>No TTD LHP</th>
                                                                <th>Pengusul</th>
                                                                <th>Tanggal Usulan</th>
                                                              
                                                                <th>File Kontrak</th>
                                                                <th>SPK Nomor</th>
                                                                <th>Tanggal SPK</th>
                                                              
                                                                <th>File DPA</th>
                                                                <th>File RKBMD</th>
                                                                <th>Opsi</th>
                                                               
                                                                
                                                              
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                                 <?php $no=1; ?>
                  <?php foreach($dt_usulan as $d): ?>
                                                         <tr>
                  <td><?php echo $no++; ?></td>
                  <td>LHP<?php echo $d['id']; ?> </td>
                  <td><?php echo $d['id_bakeuda']; ?> </td>
                  <td><?php echo $d['skpd']; ?> </td>
                  <td><?php echo $d['tgl_usulan']; ?> </td>
                 
                  <td> <a href="<?php echo base_url(); ?>upload/kontrak/<?php echo $d["file_kontrak"] ?>"><?php echo $d['file_kontrak'];?></a></td>
                  <td><?php echo $d['spk_nomor']; ?></td>
                  <td><?php echo $d['tgl_spk']; ?></td>
<td> <a href="<?php echo base_url(); ?>upload/dpa/<?php echo $d["file_dpa"] ?>"><?php echo $d['file_dpa'];?></a></td>
<td> <a href="<?php echo base_url(); ?>upload/rkbmd/<?php echo $d["file_rkbmd"] ?>"><?php echo $d['file_rkbmd'];?></a></td>
<td align="center">
                     <a onclick="return confirm('anda yakin ingin menghapus data ini')" class="btn btn-danger" href="<?php echo base_url('aset/delete_usulan/'.$d['id']);?>"><span class="icofont icofont-ui-delete"></span></a>
   <a  class="btn btn-primary" href="<?php echo base_url('aset/cetak_lhp/'.$d['id']);?>"><span class="feather icon-eye"></span></a>
   <a  class="btn btn-inverse" href="<?php echo base_url('aset/download_lhp/'.$d['id']);?>"><span class="feather icon-download"></span></a>
               </td>
                
              
                  
               
     
                  
                </tr>
              
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>

                                                        </table>
                                                             


 <div class="modal fade modal-flex" id="Modal-tab" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                                                <ul class="nav nav-tabs" role="tablist">
                                                                                  
                                                                                    
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#tab-settings" role="tab">by  Tgl</a>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="tab-content modal-body">
                                                                                   
                                                                                    
                                                                                    
                                                                                    <div class="tab-pane active" id="tab-settings" role="tabpanel">
                                                                                        <?php echo form_open('aset/export_lhp_selesai_tgl') ?>
                                                                                         <div class="col-sm-12 col-xl-12">
                                                                

                                                              <br />

                                                                <div class="input-daterange input-group" id="datepicker">
                                                                    <input type="date" class="input-sm form-control" name="dari">
                                                                    <span class="input-group-addon">to</span>
                                                                    <input type="date" class="input-sm form-control" name="sampai">
                                                                </div>  <input type="submit" name="search_submit" class="btn btn-primary" value="Download">
                                                                <?php echo form_close() ?>
                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                    </div>
                                                </div>
                                            </div>


                                            