<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>LHP Online</title>
</head>

<body>

  
<style>
  .saya
   {
  border : 1px solid black;

  border-collapse: collapse;
}
 .tes
   {

margin : 0px;
}
@media print {
    .footer,
    #non-printable {
        display: none !important;
    }
    #printable {
        display: block;
    }
}

 .style3 {font-family: "Calibri Light"}
.style4 {margin: 0px; font-family: "Calibri Light"; }
.style5 {border: 1px solid black; border-collapse: collapse; font-family: "Calibri Light"; }
.style6 {
  border-right: 1px solid black;
  border-bottom: 1px solid black;
  border-left: 1px solid black;
 border-collapse: collapse; font-family: "Calibri Light"; }
 </style>
<?php
 foreach($dt_usulan as $d): ?>

<?php  $d['id_user']; ?>

      <?php endforeach; ?>
      <?php if($d['id_user'] ==8) : ?>
 <table width="100%" border="0">
     <tr>
       <td width="10%"><img src="<?php echo base_url(); ?>files\assets\images\photo.png" width="95" height="88" /></td>
       <td width="80%"><p align="center"><strong>PEMERINTAH  KOTA BANJARMASIN</strong><br />
             <strong>DINAS  PERHUBUNGAN</strong><br />
         Jl. Karya Bhakti No. 54 Pasir Mas Telp. /  Fax. (0511) 3352543<br />
  <strong>BANJARMASIN</strong><strong> Kode Pos</strong> <strong>70129</strong> </p></td>
       <td width="10%"><img src="<?php echo base_url(); ?>files\assets\images\dishub.png" width="95" height="88" /></td>
     </tr>
   </table>
    <?php endif ?>
    
      <?php  if($d['id_user'] ==4) : ?>
 <table width="100%" border="0">
     <tr>
       <td width="10%"><img src="<?php echo base_url(); ?>files\assets\images\photo.png" width="95" height="88" /></td>
       <td width="80%"><p align="center"><strong>PEMERINTAH  KOTA BANJARMASIN</strong><br />
             <strong>DINAS PEKERJAAN UMUM & PENATAAN RUANG</strong><br />
         Jalan Brigjend H. Hasan Basri No.82 Telpon.(0511) 3300197 Fax.(0511) 3300094<br />
  <strong>BANJARMASIN</strong><strong> Kode Pos</strong> <strong>70124</strong></p></td>
       <td width="10%"></td>
     </tr>
   </table>
    <?php endif ?>
     <?php  if($d['id_user'] ==21) : ?>
 <table width="100%" border="0">
     <tr>
       <td width="10%"><img src="<?php echo base_url(); ?>files\assets\images\photo.png" width="95" height="88" /></td>
       <td width="80%"><p align="center"><strong>PEMERINTAH  KOTA BANJARMASIN</strong><br />
             <strong>DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</strong><br />
        Jalan Sultan Adam RT 28 No. 49 Banjarmasin 70122<br />
        Telepon/Faksmile (0511) 3305525<br />
Pos-el dpmptsp.banjarmasin@gmail.com</p></td>
       <td width="10%"><img src="<?php echo base_url(); ?>files\assets\images\modalpintu.png" width="95" height="88" /></td>
     </tr>
   </table>
    <?php endif ?>
    
     <?php if($d['id_user'] !=8 and $d['id_user'] !=4 and $d['id_user'] !=21  )  : ?>
    <table width="100%" border="0">
 
  <tr>
    <td width="14%" height="90"><div align="right"><img src="<?php echo base_url(); ?>files\assets\images\photo.png" width="95" height="88" /></div></td>
    <td width="86%"><div align="center">
 <?php if($d['id_user'] ==1)
                        {
                         echo     '<strong>';     echo   'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KESEHATAN';   echo     '</strong>'; echo '<br />';
           echo    'Jl. Pramuka Komp. Tirta Dharma (PDAM) km. 6 Banjarmasin Kode Pos 70249';    echo    '<br />';
           echo    'Telepon (0511) 4281348 Faks. (0511) 4281348';    echo    '<br />';
           echo    'E-mail : Dinkesbjm@gmail.com Website : Dinkes.bjm.go.id';
                                                }
                                                
                                                else if($d['id_user'] ==56)
                        {
                         echo     '<strong>';     echo   'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KESEHATAN';   echo     '</strong>'; echo '<br />';
           echo    'Jl. Pramuka Komp. Tirta Dharma (PDAM) km. 6 Banjarmasin Kode Pos 70249';    echo    '<br />';
           echo    'Telepon (0511) 4281348 Faks. (0511) 4281348';    echo    '<br />';
           echo    'E-mail : Dinkesbjm@gmail.com Website : Dinkes.bjm.go.id';
                                                }
                                                 else if($d['id_user'] >=58)
                        {
                         echo     '<strong>';     echo   'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KESEHATAN';   echo     '</strong>'; echo '<br />';
           echo    'Jl. Pramuka Komp. Tirta Dharma (PDAM) km. 6 Banjarmasin Kode Pos 70249';    echo    '<br />';
           echo    'Telepon (0511) 4281348 Faks. (0511) 4281348';    echo    '<br />';
           echo    'E-mail : Dinkesbjm@gmail.com Website : Dinkes.bjm.go.id';
                                                }
                                                
                                                
                                                else if($d['id_user'] ==2)  {
                                                   echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS PENDIDIKAN';   echo     '</strong>'; echo '<br />';
           echo    'Jl. P. Tendean No.29 RT.16 RW.02 Telp (0511) 3253373 Banjarmasin Kode POS 70231';    
           
                                                }
                                                else if($d['id_user'] ==3)  {
                                                   echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KETAHANAN PANGAN, PERTANIAN DAN PERIKANAN';   echo     '</strong>'; echo '<br />';
           echo    '<strong>';    echo    'kOMPLEK SCREEN HOUSE';   echo     '</strong>'; echo '<br />';
           echo    '<strong>';    echo    'Jl. Pangeran Hidayatullah / Lingkar Dalam Utara Telp/Fax. 0511-3201327';   echo     '</strong>'; echo '<br />';
           echo    '<strong>';    echo    'Kel. Benua Anyar Kec. Banjarmasin Timur 70239 Email distankan_bjm@yahoo.co.id';   echo     '</strong>'; }
           

            else if($d['id_user'] ==5)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS SOSIAL';   echo     '</strong>'; echo '<br />';
           echo    'Jl. Ir. Pangeran H. Muhammad Noor RT. 38 No. 02 Banjarmasin 70118';    echo '<br />';
           echo    'Telepon (0511) 4412276  Faks (0511) 4412276';    echo '<br />';
           echo    'Email : Dinsos_Banjarmasin@Yahoo.Com   Website : Simdakskbjm.Com';    
               
                                                }
                                                else if($d['id_user'] ==6)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS PERDAGANGAN DAN PERINDUSTRIAN';   echo     '</strong>'; echo '<br />';
           echo    'jl.brig h.hasan basri Jalur 2, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123';    echo '<br />';
           echo    'https://indag.banjarmasinkota.go.id';    
               
                                                }
                                                 else if($d['id_user'] ==7)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL';   echo     '</strong>'; echo '<br />';
           echo    'Jl. Sultan Adam No. 18 RT 28 Telp. (0511-3307293)';    echo '<br />';
           echo    'BANJARMASIN 70122';   
    
                                                }
                                               
                                                  else if($d['id_user'] ==9)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KOMUNIKASI, INFORMATIKA DAN STATISTIK';   echo     '</strong>'; echo '<br />';
           echo    'Jalan RE. Martadinata No.1 Kode Pos 70111 Gedung Blok B Lt. Dasar Banjarmasin';    echo '<br />';
           echo    'Website : diskominfotik.banjarmasin.go.id email : diskominfotik.bjm@gmail.com';   
    
                                                }
                                                 else if($d['id_user'] ==10)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KEBUDAYAAN, KEPEMUDAAN, OLAH RAGA DAN PARIWISATA';   echo     '</strong>'; echo '<br />';
           echo    'Alamat : Jl. Pangeran Hidayatullah (Lingkar Dalam Banua Anyar) Banjarmasin Telp/Fax : (0511)3201350';    echo '<br />';
           echo    'Email : budpar.banjarmasin@gmail.com  Website : http://banjarmasintourism.com';   
    
                                                }
                                                else if($d['id_user'] ==11)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS LINGKUNGAN HIDUP';   echo     '</strong>'; echo '<br />';
           echo    'Alamat : Jalan R.E Martadinata No. 1 Blok D Lantai II Banjarmasin 70111';    echo '<br />';
           echo    'Telepon (0511) 3363811 Faks (0511) 3363811';   echo '<br />';
            echo    'Email: dlhkotabjm@gmail.com Website: http://dlh.banjarmasinkota.go.id/';  
    
                                                }
                                                 else if($d['id_user'] ==12)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KOPERASI USAHA MIKRO DAN TENAGA KERJA';   echo     '</strong>'; echo '<br />';
           echo    'Jalan Pramuka Komp. Semanda (MAN 2 Model) Banjarmasin';    echo '<br />';
           echo    'Telp/Fax : ( 0511 ) 3250774';   
    
                                                }
                                                 else if($d['id_user'] ==13)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN';   echo     '</strong>'; echo '<br />';
           echo    'Jalan R.E. Martadinata No. 1 Blok.B Lantai 2 Banjarmasin 70111 Telp/Fax: (0511) 3365592';   
    
                                                }
                                                 else if($d['id_user'] ==14)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS KEPEMUDAAN DAN OLAHRAGA';   echo     '</strong>'; echo '<br />';
           echo    'Jl. Pramuka / Tirta Dhama Komp. Pdam, Sungai Lulut, Banjarmasin, Kota Banjarmasin, Kalimantan Selatan 70238';   
    
                                                }
                                                else if($d['id_user'] ==15)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'BADAN PENGELOLAAN KEUANGAN, PENDAPATAN DAN ASET DAERAH';   echo     '</strong>'; echo '<br />';
           echo    'Jl. Pramuka / Tirta Darma Komplek PDAM Bandarmasih Banjarmasin No 17 Rt 9';   echo '<br />';
           echo    'Telp (0511) 4281292 Fax (0511) 4281293, 6742525';  
    
                                                }
                                                 else if($d['id_user'] ==16)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'BADAN PERENCANAAN PEMBANGUNAN DAERAH, PENELITIAN DAN PENGEMBANGAN KOTA BANJARMASIN';   echo     '</strong>'; echo '<br />';
           echo    'Jalan RE Martadinata No.1 Blok B Lantai III Banjarmasin 70111';   echo '<br />';
           echo    'Telp (0511)  3355665 Fax (0511) 3355665';  echo '<br />';
            echo    'Email: barenlitbangda@gmail.com Website: https://renlitbang.banjarmasinkota.go.id/'; 
    
                                                }
                                                else if($d['id_user'] ==17)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'BADAN KEPEGAWAIAN DAERAH, PENDIDIKAN DAN ';   echo     '</strong>'; echo '<br />';
          echo    '<strong>'; echo    'PELATIHAN ';  echo     '</strong>'; echo '<br />';
          echo     '</strong>'; echo    'Jl. R.E Marthadinata No. 1  Blok B Lantai III Banjarmasin Telp. (0511) 3363790';  echo     '</strong>';
    
                                                }
                                                 else if($d['id_user'] ==18)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'BADAN KESATUAN BANGSA DAN POLITIK';   echo     '</strong>'; echo '<br />';
           echo    'Alamat : Jalan R.E Martadinata No. 1 Blok D Lantai III Banjarmasin 70111';    echo '<br />';
           echo    'Telepon (0511) 3363811 Faks (0511) 3363811';   echo '<br />';
            echo    'Email: dlhkotabjm@gmail.com Website: http://dlh.banjarmasinkota.go.id/';  
    
                                                }
                                                
                                                
                                                 else if($d['id_user'] ==19)  {
             echo     '<strong>';    echo     'BPEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS PENGENDALIAN PENDUDUK,  KELUARGA BERENCANA DAN PEMBERDAYAAN MASYARAKAT  ';   echo     '</strong>'; echo '<br />';
           echo    'Jalan Brigjend. H.Hasan Basry – Kayu Tangi II RT.16 Telp.(0511) 3301346, Fax : 3301346';    echo '<br />';
            echo    'BANJARMASIN 70124';  
    
                                                }
                                                
                                               
                                                 else if($d['id_user'] ==20)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK';   echo     '</strong>'; echo '<br />';
          echo    '<strong>'; echo    'KOTA BANJARMASIN';  echo     '</strong>'; echo '<br />';
            echo    'Jl. Sultan Adam No. 18 Rt. 28 Kelurahan Surgi Mufti Banjarmasin'; 
    
                                                }
                                               
           else if($d['id_user'] ==22)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'BADAN PENANGGULANGAN BENCANA DAERAH';   echo     '</strong>'; echo '<br />';
           echo    'Jln. RE. Martadinata No.1 Telp. (0511) 3364082 Fax.(0511)3353933';   echo '<br />';
           echo    'Banjarmasin Kode Pos 70111';  
          }
                                                 else if($d['id_user'] ==25)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SATUAN POLISI PAMONG PRAJA';   echo     '</strong>'; echo '<br />';
           echo    'Jalan K.S. Tubun No. 117 Banjarmasin Telp. 0511-3201260 Fax 3201244';   echo '<br />';
           echo    'Email. satpolppkotabjm@gmail.com Kode Pos 70241'; 
                                                }
                                                
                                                else if($d['id_user'] ==23)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'INSPEKTORAT';   echo     '</strong>'; echo '<br />';
           echo    'Jalan Tirta Darma (Komp, PDAM) RT. 34 Telp (0511) 3274572 Banjarmsin';   
       
                                                }
                                                
                                                 else if($d['id_user'] ==24)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH';   echo     '</strong>'; echo '<br />';
           echo    'Jl. LambungMangkurat No.2 Telp. (0511) 3352467, 3366379 Fax. (0511) 3366379';   echo '<br />';
           echo    'Banjarmasin 70111'; 
                                                }
                                                else if($d['id_user'] ==26)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS PERPUSTAKAAN DAN KEARSIPAN';   echo     '</strong>'; echo '<br />';
           echo    'Jalan KS. Tubun RT. 5 RW. 1 Banjarmasin Telepon (0511) 3362523';   echo '<br />';
           echo    'Banjarmasin'; 
                                                }
                                                 else if($d['id_user'] ==36)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'KECAMATAN BANJARMASIN UTARA';   echo     '</strong>'; echo '<br />';
           echo    'Jalan HKSN RT.10 Kelurahan Alalak Utara Kecamatan Banjarmasin Utara';   echo '<br />';
           echo    'Kota Banjarmasin 70125, Telpon (0511) 33652523 Faks (0511) 33652523';  
  
                                                }

                                                else if($d['id_user'] ==37)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'KECAMATAN BANJARMASIN TIMUR';   echo     '</strong>'; echo '<br />';
           echo    '<strong>';    echo    'Jalan Manggis No. 20. B A N J A R M A S I N    70236';   echo     '</strong>'; echo '<br />';
           echo    '<strong>';    echo    'Email : kec.bantim@gmail.com';   echo     '</strong>'; 
          
                                                }
                                                 else if($d['id_user'] ==38)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'KECAMATAN BANJARMASIN SELATAN';   echo     '</strong>'; echo '<br />';
           echo    '<strong>';    echo    'Jalan Tembus Mantuil RT. 01 RW. 01 No. 19 Telepon 0511 3265560 Banjarmasin 70246';   echo     '</strong>';
         }
           else if($d['id_user'] ==39)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'KECAMATAN BANJARMASIN BARAT';   echo     '</strong>'; echo '<br />';
             echo    'Jl. Ir. H. Pangeran Muhammad Noor Telp. (0511) 3352566 Banjarmasin 70166';  
           }
            else if($d['id_user'] ==40)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'KECAMATAN BANJARMASIN TENGAH';   echo     '</strong>'; echo '<br />';
            echo    'Jl. Pulau Laut Rt..5   No.7  Telepon. (0511) 3365880   Fax (0511) 3365881   <strong> Kelurahan Antasan Besar Banjarmasin';   echo     '</strong>'; echo '<br />';
            echo    'E-mail : kec.banteng@gmail.com, Banjarmasin 70114';   
          
                                                }
                                                 else if($d['id_user'] ==46)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';

           echo    '<strong>';    echo    'BAGIAN UMUM';   echo     '</strong>'; echo '<br />';
                echo    'Jl. R.E. Martadinata No. 01 Banjarmasin 7011 Telepon (0511) 4368142 - 4368145'; echo '<br />'; 
                echo    'Faks. (0511) 3353933, website : www.banjarmasinkota.go.id';
              }
                                                 else if($d['id_user'] ==47)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';
           echo    '<strong>';    echo    'BAGIAN PEMBANGUNAN';   echo     '</strong>'; echo '<br />';
           echo    'Jalan R. E. Martadinata No. 1 Gedung Blok D Lt. I - Banjarmasin 70111';   echo '<br />';
           echo    'Telp. (0511) 3364085, Faks. (0511) 3353933, e-mail: pembangunan.setdakobjm@gmail.com';   echo '<br />';
           echo    'http://banjarmasinkota.go.id'; 
                                                }
                                                else if($d['id_user'] ==48)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';

           echo    '<strong>';    echo    'BAGIAN HUKUM';   echo     '</strong>'; echo '<br />';
                echo    'Jl. R.E. Martadinata No. 01 Banjarmasin 7011';  
               
              }
               else if($d['id_user'] ==49)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';

           echo    '<strong>';    echo    'BAGIAN PEMERINTAHAN';   echo     '</strong>'; echo '<br />';
                echo    'Jl. R.E. Martadinata No. 01 Banjarmasin 7011';  
               
              }
               else if($d['id_user'] ==50)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';

           echo    '<strong>';    echo    'BAGIAN ORGANISASI';   echo     '</strong>'; echo '<br />';
                echo    'Jl. R.E. Martadinata No. 01 Banjarmasin 7011';  
               
              }
               else if($d['id_user'] ==51)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';

           echo    '<strong>';    echo    'BAGIAN PEREKONOMIAN DAN SUMBER DAYA ALAM';   echo     '</strong>'; echo '<br />';
                echo    'Jl. R.E. Martadinata No. 01 Banjarmasin 7011';  
               

              }
               else if($d['id_user'] ==52)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';

           echo    '<strong>';    echo    'BAGIAN KESRA';   echo     '</strong>'; echo '<br />';
                echo    'Jl. R.E. Martadinata No. 01 Banjarmasin 7011';  
               
              }
               else if($d['id_user'] ==53)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';

           echo    '<strong>';    echo    'BAGIAN PROTOKOL DAN KOMUNIKASI PIMPINAN';   echo     '</strong>'; echo '<br />';
                echo    'Jl. R.E. Martadinata No. 1 Telp. (0511) 3364857, 3363732 Banjarmasin 70111';  
                                                }

               else if($d['id_user'] ==54)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'SEKRETARIAT DAERAH';   echo     '</strong>'; echo '<br />';

           echo    '<strong>';    echo    'BAGIAN LAYANAN PENGADAAN';   echo     '</strong>'; echo '<br />';
                echo    'Jl. R.E. Martadinata No. 01 Banjarmasin 70111';               
              }
              
              else if($d['id_user'] ==57)  {
             echo     '<strong>';    echo     'PEMERINTAH KOTA BANJARMASIN';    echo    '</strong>';    echo    '<br />';  
           echo    '<strong>';    echo    'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN';   echo     '</strong>'; echo '<br />';
           echo    'Jl. RE Martadinata No. 1 Banjarmasin 70111';  
              }
                                               
                                                
                                               
          
               
              
                                                ?>
  </div></td>
  </tr>

</table>  <?php endif ?>

<div style='mso-element:para-border-div;border:none;border-top:solid windowtext 3.0pt;
padding:1.0pt 0cm 0cm 0cm'>
<table width="100%" border="0">
  <tr>
    <td width="64%">&nbsp;</td>
    <td width="36%">&nbsp; &nbsp;Banjarmasin,  <?php  $tanggal=$d['tgl_usulan']; ?> <?php echo date("d-m-Y",strtotime($tanggal)); ?>  <br /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong> &nbsp; &nbsp;Kepada</strong></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Yth.</strong></div></td>
    <td><strong>&nbsp; &nbsp;Kepala BPKPAD</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>&nbsp; &nbsp;Kota Banjarmasin</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>&nbsp; &nbsp;di-</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>&nbsp; &nbsp; &nbsp; &nbsp;Banjarmasin</strong></td>
  </tr>
</table>
 <?php 
    foreach($dt_usulan as $d): ?>
      <?php $nomor=$d['no_surat']; ?>
      <?php endforeach; ?>
<p align="center"><u><strong>LAPORAN HASIL PENGADAAN</strong></u><br />
Nomor : <?php echo $nomor; ?> </p>
Dengan ini disampaikan Hasil Pengadaan Barang/Jasa pada Kota Banjarmasin Tahun Anggaran 
2023 berupa :<br /> 

<b>I. PENGADAAN BARANG/JASA</b>

<table width="100%" border="0" class="saya">
   <tr>
    <td width="3%" class="style5"><div align="center">No</div></td> 
    <td width="29%" class="style5"><div align="center">Jenis Pekerjaan/Nama Barang</div></td>
    <td width="14%" class="style5"><div align="center">Merk/Type</div></td>
    <td width="13%" class="style5"><div align="center">Volume<br />
    (Satuan)</div></td>
    <td width="20%" class="style5"><div align="center">Harga Satuan <br />
    (Rp)</div></td>
    <td width="21%" class="style5"><div align="center">Total<br />
      (Rp)</div></td>
  </tr><?php 

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}
?>
   <?php $no=1;
   $total_pengadaan=0;
    foreach($dt_usulan as $usul): ?>
      <?php  $spk=$d['spk_nomor']; ?>
<?php  $tgl=$d['tgl_spk']; ?>
  <tr>
    <td class="style5"><div align="center"><?php echo $no++; ?></div></td>
    <td class="style5"><?php echo $usul['jenis_pekerjaan']; ?></td>
    <td class="style5"><div align="center"><?php echo $usul['merk']; ?></div></td>
     <td class="style5"><div align="center"><?php echo $a=$usul['volume']; ?> <?php echo $usul['satuan']; ?></div></td>
     <td class="style5"><div align="center"><?php $b=$usul['harga_satuan']; echo rupiah($b);
	  ?></div></td>
    <td class="style5"><div align="center"><?php  $c=$a*$b;    ?>
    <?php
echo rupiah($c);
?>
  
</div></td>
<?php  $total_pengadaan=$total_pengadaan+$c; ?>
  </tr>

  <?php endforeach; ?>
  <tr>
    <td class="style5" colspan="5"><div align="center"><strong>JUMLAH I</strong></div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div>      <div align="center"></div></td>
    <td class="style5" align="center"><strong> <?php echo rupiah($total_pengadaan); ?></strong></td>
  </tr>
</table>
<b>II. HONORARIUM PEJABAT/PANITIA PENGADAAN/PEMERIKSA HASIL PEKERJAAN <br />
 A. HONOR PEJABAT PENGADAAN BARANG JASA</b>

<table width="100%" border="0" class="saya">
  <?php $no=1;
  $hasil_pejabat_pengadaan=0;
    foreach($dt_usulann as $d): ?>
  <tr>
    <td class="style5" width="3%"><div align="center"><?php echo $no++; ?></div></td>
    <td class="style5" width="47%"><div align="center"><?php echo $org=$d['hp_pengadaan_orang']; ?> Org x  <?php  $harga=$d['hp_harga_pengadaan']; echo rupiah($harga);  ?> =</div></td>
    <td class="style5" width="50%"><div align="center"> <?php  $hasil=$org * $harga;  echo rupiah($hasil);  ?></div></td>
  </tr>
  <?php  $hasil_pejabat_pengadaan=$hasil_pejabat_pengadaan+$hasil; ?>
    <?php endforeach; ?>
</table>

 <strong>B. HONOR PEJABAT/PANITIA PEMERIKSA HASIL PEKERJAAN
</strong>
 <table width="100%" border="0" class="saya">
<?php $no=1;
$hasil_pejabat_pemeriksa=0;
    foreach($dt_usulann as $d): ?>
  <tr>
    <td class="style5" width="3%"><div align="center"><?php echo $no++; ?></div></td>
    <td class="style5" width="47%"><div align="center"><?php echo $penerima=$d['hb_penerima_orang']; ?> Org x  <?php $barang=$d['hb_penerima_barang'];  echo rupiah($barang);  ?> =</div></td>
    <td class="style5" width="50%"><div align="center"> <?php  $hasill=$penerima * $barang;  echo rupiah($hasill);  ?></div></td>
  </tr>

<?php  $hasil_pejabat_pemeriksa=$hasil_pejabat_pemeriksa+$hasill; ?>

<?php $totalsemua=$hasil_pejabat_pemeriksa+$hasil_pejabat_pengadaan; ?>
  <?php endforeach; ?>
  <tr>
    <td class="style5" colspan="2"><div align="center"><strong>JUMLAH II</strong></div></td>
    <td class="style5"><div align="center"><strong> <?php  echo rupiah($totalsemua); ?></strong></div></td>
  </tr>
</table>

 <?php $no=1;
 $huruf='A';
 $hasil_honorariumm=0;
 $total_honorariumm=0;
    foreach($dt_usulannn as $d): ?>
  <?php  $volumee=$d['volume']; ?>  <?php $honor_rpp=$d['honor_rp'];   rupiah($honor_rpp);  ?> 
  <?php $hasil_honorariumm=$volumee*$honor_rpp;  rupiah($hasil_honorariumm); ?></div></td>
   </tr>
 </table>
 <?php $total_honorariumm=$total_honorariumm+$hasil_honorariumm; ?>
   <?php endforeach; ?>



  <?php if ($total_honorariumm!=0): ?><b>III. HONORARIUM </b><br /> <?php endif ?>
 <?php $no=1;
 $huruf='A';
 $hasil_honorarium=0;
 $total_honorarium=0;
    foreach($dt_usulannn as $d): ?>
    <strong> <?php echo $huruf++; ?>. <?php echo $d['nama_kategori']; ?></strong>
 <table width="100%" class="saya">
   <tr>
     <td class="style5" width="3%"><div align="center"><?php echo $no++; ?></div></td>
     <td class="style5" width="47%"><div align="center"><?php echo $volume=$d['volume']; ?> x <?php $honor_rp=$d['honor_rp'];  echo rupiah($honor_rp);  ?> = </div></td>
     <td class="style5" width="50%"><div align="center"><?php $hasil_honorarium=$volume*$honor_rp; echo rupiah($hasil_honorarium); ?></div></td>
   </tr>
 </table>
 <?php $total_honorarium=$total_honorarium+$hasil_honorarium; ?>
   <?php endforeach; ?>
   <table class="style6" width="100%" border="0px">
    <?php if ($total_honorarium!=0): ?>    <tr>
     <td class="style6" width="50%"><div align="center"><strong>JUMLAH III</strong></div></td>
       <td class="style6" width="50%"><div align="center"><strong><?php $total_honorarium; echo rupiah($total_honorarium); ?></strong></div></td>
     </tr><?php endif ?>
   </table>
<br />
 <table class="saya" width="100%" border="">
 <?php if ($total_honorarium==0): ?>  <tr>
    <td class="style5" width="50%"><div align="center"><strong>JUMLAH (I + II)</strong></div></td>
    <td class="style5" width="50%"><div align="center"><strong> 
      <?php  $jumlah_semua=$totalsemua+$total_pengadaan;  echo rupiah($jumlah_semua);  ?>
    </strong></div></td>
  </tr><?php endif ?>
   <?php if ($total_honorarium!=0): ?>  <tr>
    <td class="style5" width="50%"><div align="center"><strong>JUMLAH (I + II + III)</strong></div></td>
    <td class="style5" width="50%"><div align="center"><strong> 
      <?php  $jumlah_semua=$totalsemua+$total_pengadaan+$total_honorarium;  echo rupiah($jumlah_semua);  ?>
    </strong></div></td>
  </tr><?php endif ?>
</table>
 <br />
Bersama ini kami lampirkan sebagai berikut :<br />
<table width="100%" border="0">
  <tr>
    <td width="4%"><div align="right">1.</div></td>
    <td colspan="2">Copy Dokumen Kontrak/SPK/SP/Kwitansi Pengadaan Barang tersebut diatas sebanyak 1 (Satu) berkas</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="15%">SPK Nomor</td>
    <td width="81%">: <?php echo $spk; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Tanggal</td>
    <td>:  <?php echo date("d-m-Y",strtotime($tgl)); ?> </td>
  </tr>
   <tr>
    <td><div align="right">2.</div></td>
    <td colspan="2">Copy DPA yang menunjukan bahwa pengadaan barang tersebut sudah teranggarkan sebanyak 1 (Satu)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">berkas</td>
  </tr>
</table>
Demikian disampaikan sebagai bahan selanjutnya

<table width="100%" border="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="63%">Laporan diterima :</td>
    <td width="33%">&nbsp;</td>
  </tr>
   <?php 
    foreach($dt_usulan as $d): ?>

<?php  $id_bakeuda=$d['id_bakeuda']; ?>
<?php  $kepala=$d['kepala_skpd']; ?>
<?php  $nama=$d['nama']; ?>
<?php  $nip=$d['nip']; ?>
<?php  $d['status_kabid']; ?>
      <?php endforeach; ?>
  <tr>
    <td>&nbsp;</td>
    <td>LHP ditandatangani : <?php echo $id_bakeuda; ?>/LHP/Aset/Bakeuda/2023</td>
    <td></td>
  </tr><br />
</table>
<table width="100%" border="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="56%">Mengetahui</td>
    <td width="40%">&nbsp;</td>
  </tr>
 
  <tr>
    <td><div align="right">an.</div></td>
    <td>Kepala BPKPAD Kota Banjarmasin</td>
    <td><?php echo $kepala; ?></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td>Kepala Bidang Pengelolaan BMD</td>
    <td>Selaku </td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td rowspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php if ($d['status_kabid']==1): ?>
            <img src="<?php echo base_url(); ?>files/assets/images/ttdkabid.png" width="180" height="150" /> <?php endif ?></td>
    <td><?php echo $d['selaku']; ?></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="40"><div align="right"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><strong><u>Pahriadi, SE, MM</u></strong></td>
    <td> <u><strong><?php echo $nama; ?></strong></u></td>
  </tr>
  <tr>
    <td height="21"><div align="right"></div></td>
    <td>NIP.19681110 198903 1 020</td>
    <td>NIP.  <?php echo $nip; ?></td>
  </tr>
  
</table>
<p><br />
</p>
</body>
</html>
 <script>window.print()</script>
