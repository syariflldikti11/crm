<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=analisa capaian.xls");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
?>
            <table
             
            border=1
            >
            <thead class="bg-info text-white">
                <tr>
                  <th><div align="center">No</div></th>
                  <th><div align="left">Indikator Kinerja Utama</div></th>
                  <th><div align="left">Triwulan</div></th>
                  <th><div align="center">Progress</div></th>
                  <th><div align="center">Kendala</div></th>
                  <th><div align="center">Tindak Lanjut</div></th>
                 
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dt_analisa as $d): ?>
                <tr>
                  <td><div align="center">
                    <?= $no++; ?>
                  </div></td>
                  <td>
                    <div align="left">
                      <?= $d->iku; ?>
                    </div></td>
                  <td>
                    <div align="left">
                      <?= $d->tw; ?>
                    </div></td>
                  <td><div align="center">
                    <?= $d->progress; ?>
                  </div></td>
                  <td><div align="center">
                    <?= $d->kendala; ?>
                  </div></td>
                  <td><div align="center">
                    <?= $d->tindak_lanjut; ?>
                  </div></td>
                 
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>





