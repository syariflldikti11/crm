<div class="card">
                                                <div class="card-header">
                                                    <h5><?php echo $judul; ?></h5>
                                                   

                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                 <th>No</th>
                                                                 <th>ID LHP</th>
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
               </td>
                
              
                  
               
     
                  
                </tr>
              
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>

                                                        </table>
                                                         <a href="<?php echo base_url('aset/export_excel'); ?> " class="btn btn-primary"> Export Excel </a>
                                                    </div>
                                                </div>
                                            </div>


                                            