<?php

class Tes extends CI_Controller {
function insert_pts(){
  $sqll = "truncate sakip_pts";
  $this->db->query($sqll);
	$ID_att = $this->input->post('no');
$result = array();
foreach($ID_att AS $key => $val){
 $result[] = array(
 "id" => $ID_att[$key],
  "Kode_PT"  => $_POST['a'][$key],
  "Nama_PT"  => $_POST['b'][$key],
    "status_pt"  => $_POST['c'][$key],
      "jumlah_mhs"  => $_POST['d'][$key],
         "jumlah_dosen"  => $_POST['e'][$key],
 );
}
$this->db->insert_batch('sakip_pts', $result);
redirect('login_sakip');
}

function insert_mhs_merdeka(){
  $sqll = "truncate sakip_mhs_merdeka";
  $this->db->query($sqll);
	$ID_att = $this->input->post('no');
$result = array();
foreach($ID_att AS $key => $val){
 $result[] = array(
 "id" => $ID_att[$key],
  "kode_pt"  => $_POST['a'][$key],
  "nama_pt"  => $_POST['b'][$key],
    "total"  => $_POST['c'][$key],
 );
}
$this->db->insert_batch('sakip_mhs_merdeka', $result);
redirect('login_sakip');
}

function insert_prodi(){
  $sqll = "truncate sakip_prodi";
  $this->db->query($sqll);
	$ID_att = $this->input->post('no');
$result = array();
foreach($ID_att AS $key => $val){
 $result[] = array(
 "id" => $ID_att[$key],
  "kode_pt"  => $_POST['a'][$key],
  "nama_pt"  => $_POST['b'][$key],
    "nama_prodi"  => $_POST['c'][$key],
 );
}
$this->db->insert_batch('sakip_prodi', $result);
redirect('login_sakip');
}

function insert_dosen(){
  $sqll = "truncate sakip_dosen";
  $this->db->query($sqll);
	$ID_att = $this->input->post('no');
$result = array();
foreach($ID_att AS $key => $val){
 $result[] = array(
 "id" => $ID_att[$key],
  "kode_pt"  => $_POST['a'][$key],
  "nama_pt"  => $_POST['b'][$key],
    "jumlah_dosen"  => $_POST['c'][$key],
 );
}
$this->db->insert_batch('sakip_dosen', $result);
redirect('login_sakip');
}


}
?>