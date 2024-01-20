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
                                                                <th>Pengusul</th>
                                                                <th>Tanggal Usulan</th>
                                                                <th>Jenis Pekerjaan</th>
                                                                <th>Merk/Type</th>
                                                                <th>Volume</th>
                                                                <th>Harga Satuan</th>
                                                                <th>Jumlah Honor Pejabat Pengadaan</th>
                                                                <th>Rp.</th>
                                                                   <th>Jumlah Honor Pejabat Penerima</th>
                                                                <th>Rp.</th>
                                                                <th>File Kontrak</th>
                                                                <th>SPK Nomor</th>
                                                                <th>Tanggal SPK</th>
                                                                <th>File KIB</th>
                                                                <th>File DPA</th>
                                                                <th>Opsi</th>
                                                               
                                                              
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                                 <?php $no=1; ?>
                  <?php foreach($dt_report as $d): ?>
                                                         <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['skpd']; ?> </td>
                  <td><?php echo $d['tgl_usulan']; ?> </td>
                  <td><?php echo $d['jenis_pekerjaan']; ?></td>
                  <td><?php echo $d['merk']; ?></td>
                  <td><?php echo $d['volume']; ?></td>
                  <td><?php echo $d['harga_satuan']; ?></td>
              
                  <td><?php echo $d['hp_pengadaan_orang']; ?> Orang</td>
                  <td>Rp. <?php echo $d['hp_harga_pengadaan']; ?></td>          
                  <td><?php echo $d['hb_penerima_orang']; ?> Orang</td>
                  <td>Rp. <?php echo $d['hb_penerima_barang']; ?></td>
                  <td> <a href="<?php echo base_url(); ?>upload/kontrak/<?php echo $d["file_kontrak"] ?>"><?php echo $d['file_kontrak'];?></a></td>
                  <td><?php echo $d['spk_nomor']; ?></td>
                  <td><?php echo $d['tgl_spk']; ?></td>
<td> <a href="<?php echo base_url(); ?>upload/kib/<?php echo $d["file_kib"] ?>"><?php echo $d['file_kib'];?></a></td>
<td> <a href="<?php echo base_url(); ?>upload/dpa/<?php echo $d["file_dpa"] ?>"><?php echo $d['file_dpa'];?></a></td>

                  <td align="center">
                             <a class="btn btn-info"  href="<?php echo base_url('skpd/cetak_lhp/'.$d['id']);?>">Cetak</a> 
               </td>
             
                  
               
     
                  
                </tr>
              
                <?php endforeach; ?>
                                                            </tbody>
                                                            
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                            