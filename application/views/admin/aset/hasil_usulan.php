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
                                                                   <th>Opsi</th>
                                                                 <th>ID LHP</th>
                                                                    <th>Catatan SKPD</th>
                                                                <th>Pengusul</th>
                                                                <th>Tanggal Usulan</th>
                                                                <th>File Kontrak</th>
                                                                <th>SPK Nomor</th>
                                                                <th>Tanggal SPK</th>
                                                               
                                                                <th>File DPA</th>
                                                                <th>File RKBMD</th>
                                                             
                                                              
                                                              
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                                 <?php $no=1; ?>
                  <?php foreach($dt_usulan_lhp as $d): ?>
                                                         <tr>
                  <td><?php echo $no++; ?></td>
                   <td align="center">
   <a  class="btn btn-primary" href="<?php echo base_url('aset/review_usulan/'.$d['id']);?>"><span class="icofont icofont-ui-edit"></span></a> 
   <a  class="btn btn-danger" href="<?php echo base_url('aset/cetak_lhp/'.$d['id']);?>"><span class="feather icon-eye"></span></span></a> 
                   


               </td>
                  <td>LHP<?php echo $d['id']; ?></td>
                  <td><?php echo $d['ket_skpd']; ?></td>
                  <td><?php echo $d['skpd']; ?> </td>
                  <td><?php echo $d['tgl_usulan']; ?> </td>
                 
                  <td> <a href="<?php echo base_url(); ?>upload/kontrak/<?php echo $d["file_kontrak"] ?>"><?php echo $d['file_kontrak'];?></a></td>
                  <td><?php echo $d['spk_nomor']; ?></td>
                  <td><?php echo $d['tgl_spk']; ?></td>
<td> <a href="<?php echo base_url(); ?>upload/dpa/<?php echo $d["file_dpa"] ?>"><?php echo $d['file_dpa'];?></a></td>
<td> <a href="<?php echo base_url(); ?>upload/rkbmd/<?php echo $d["file_rkbmd"] ?>"><?php echo $d['file_rkbmd'];?></a></td>
 

                 
                  
               
     
                  
                </tr>
              
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                            