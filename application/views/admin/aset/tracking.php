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
                                                                   <th>Status</th>
                                                                     <th>Opsi</th>
                                                                 <th>ID LHP</th>
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
                  <?php foreach($dt_usulan_tracking as $d): ?>
                                                         <tr>
                  <td><?php echo $no++; ?></td>
                    <td> <?php if ($d['status_kabid'] !=1 )   {
                       echo "Belum Selesai"; }
                       else {
                           echo "Selesai";} ?></td>
                           <td align="center">  <a  class="btn btn-warning" href="" data-target="#sign-in<?php echo $d['id']; ?>" data-toggle="modal"><span class="feather icon-eye"></span></a></td>
                  <td>LHP<?php echo $d['id']; ?> </td>
                  <td><?php echo $d['skpd']; ?> </td>
                  <td><?php echo $d['tgl_usulan']; ?> </td>
                 
                  <td> <a href="<?php echo base_url(); ?>upload/kontrak/<?php echo $d["file_kontrak"] ?>"><?php echo $d['file_kontrak'];?></a></td>
                  <td><?php echo $d['spk_nomor']; ?></td>
                  <td><?php echo $d['tgl_spk']; ?></td>
<td> <a href="<?php echo base_url(); ?>upload/dpa/<?php echo $d["file_dpa"] ?>"><?php echo $d['file_dpa'];?></a></td>
<td> <a href="<?php echo base_url(); ?>upload/rkbmd/<?php echo $d["file_rkbmd"] ?>"><?php echo $d['file_rkbmd'];?></a></td>
                  
                  
               
     
                  
                </tr>
                 <div id="sign-in<?php echo $d['id']; ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="login-card card-block login-card-modal">
                                                <form class="md-float-material">
                                                    <div class="text-center">
                                                        <img src="<?php echo base_url(); ?>files\assets\images\logo.png" alt="logo.png">
                                                    </div>
                                                    <div class="card m-t-15">
                                                    <div class="auth-box card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center txt-primary">USULAN LHP</h3>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                       
                                                        <?php
                                                        $id=$d['id'];
                                                        $query=$this->db->query("Select * from usulan_lhp where id = '$id'");
                                                        foreach ($query->result() as $row)
                                                        {
                                                           echo 'Status Aset =' ; 
                                        if($row->status_aset==1)
                        {
                         echo 'Usulan telah diteruskan <br> catatan dari Staff Aset : '.$row->ket_aset.' <br>';
                                                }
                                                 else if($row->status_aset==0)
                        {
                         echo 'Usulan masih diproses <br>';
                                                }
                                                 else if($row->status_aset==2)
                        {
                         echo 'Usulan di Tolak <br> catatan dari Staff Aset : '.$row->ket_aset.'<br> '; 
                                                }
                                                 
                                                echo  '<p />';
                                                echo  '<p />';
                                                echo  '<p />';

                                                 echo 'Status Kasubid Penatausahaan =' ; 
                                        if($row->status_kasubid_p==1)
                        {
                         echo 'Usulan telah diteruskan <br> catatan dari Staff Aset : '.$row->ket_kasubid_penatausahaan.' <br>';
                                                }
                                                
                                                 else if($row->status_kasubid_p==2)
                        {
                         echo 'Usulan di Tolak <br> catatan dari Kasubid Penatausahaan : '.$row->ket_kasubid_penatausahaan.'<br> '; 
                                                }
                                                  echo  '<p />';
                                                echo  '<p />';
                                                echo  '<p />';

                                                  echo 'Status Kasubid Pemanfaatan =' ; 
                                        if($row->status_kasubid==1)
                        {
                         echo 'Usulan telah diteruskan <br> catatan dari Kasubid Pemanfaatan: '.$row->ket_kasubid_pemanfaatan.' <br>';
                                                }
                                                
                                                 else if($row->status_kasubid==2)
                        {
                         echo 'Usulan di Tolak <br> catatan dari Kasubid Pemanfaatan : '.$row->ket_kasubid_pemanfaatan.'<br> '; 
                                                }
                                                   echo  '<p />';
                                                echo  '<p />';
                                                echo  '<p />';

                                                  echo 'Status Kabid Aset =' ; 
                                        if($row->status_kabid==1)
                        {
                         echo 'Usulan telah diterima <br> catatan dari Kabed Aset: '.$row->ket_kabid.' <br>';
                                                }
                                               
                                                 else if($row->status_kabid==2)
                        {
                         echo 'Usulan di Tolak <br> catatan dari Kabid Aset : '.$row->ket_kabid.'<br> '; 
                                                }
                                                 '</p>';
                                                        }
                                                        ?>
                                                       
                                                        <div class="row m-t-15">
                                                            <div class="col-md-12">
                                                                <button type="button" data-dismiss="modal" class="btn btn-primary btn-md btn-block waves-effect text-center">Close</button>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                       
                                                    </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div>
                                        </div>
                                    </div>
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>