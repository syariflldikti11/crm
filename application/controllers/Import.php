  <?php

class Import extends CI_Controller {
  function sakip_jumlah_dosen()
  {
    

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/apipddikti/sakip/sakip_jumlah_dosen',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: ci_session=baf43404ik8c5gmcsuqmo68ajoej8n55'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$data=json_decode($response);
foreach ($data as $d) {
  $sql1 = "insert into sakip_jumlah_dosen values('$d->kode_pt','$d->nama_pt','$d->total')";
    $this->db->query($sql1);

}
echo "Berhasil";
}

}
?>

 
