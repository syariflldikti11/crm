<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_umum extends CI_Model{

	function laporan_event($dari,$sampai)
	{		
	   
		$this->db->select('*');
	   $this->db->from('event a');
		$this->db->where('a.tgl_event between "'.$dari.'" and "'.$sampai.'"');

	   $query = $this->db->get();
	   return $query->result();
	}
function laporan_konsultasi($dari,$sampai)
	{

		$this->db->select('*');
		$this->db->from('konsultasi a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->where('a.tgl_konsultasi between "'.$dari.'" and "'.$sampai.'"');
		$this->db->order_by('a.tgl_konsultasi desc');

		$query = $this->db->get();
		return $query->result();
	}
function laporan_kasus($dari,$sampai)
	{

		$this->db->select('*');
		$this->db->from('kasus a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna c', 'a.id_pegawai=c.id_pengguna', 'left');
		$this->db->where('a.tgl_kasus between "'.$dari.'" and "'.$sampai.'"');
$this->db->order_by('a.tgl_kasus desc');
		$query = $this->db->get();
		return $query->result();
	}
	function laporan_kasus_pegawai($dari,$sampai)
	{
 $id=$this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('kasus a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna c', 'a.id_pegawai=c.id_pengguna', 'left');
		$this->db->where('a.tgl_kasus between "'.$dari.'" and "'.$sampai.'"');
		$this->db->where('a.id_pegawai',$id);
$this->db->order_by('a.tgl_kasus desc');
		$query = $this->db->get();
		return $query->result();
	}
	function laporan_pesanan($dari,$sampai)
	{		
	   
		$this->db->select('*');
	   $this->db->from('pesanan a');
	   $this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.tgl_pesanan between "'.$dari.'" and "'.$sampai.'"');

	   $query = $this->db->get();
	   return $query->result();
	}
	function laporan_penawaran($dari,$sampai)
	{		
	   
		$this->db->select('*');
	   $this->db->from('penawaran a');
	   	$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.tgl_penawaran between "'.$dari.'" and "'.$sampai.'"');

	   $query = $this->db->get();
	   return $query->result();
	}
	function laporan_pesanan_user($dari,$sampai)
	{		
	   $id=$this->session->userdata('ses_id');
		$this->db->select('*');
	   $this->db->from('pesanan a');
	   $this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.tgl_pesanan between "'.$dari.'" and "'.$sampai.'"');
$this->db->where('a.id_pelanggan',$id);
	   $query = $this->db->get();
	   return $query->result();
	}
	function laporan_penawaran_user($dari,$sampai)
	{		
	     $id=$this->session->userdata('ses_id');
		$this->db->select('*');
	   $this->db->from('penawaran a');
	   	$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.tgl_penawaran between "'.$dari.'" and "'.$sampai.'"');
$this->db->where('a.id_pelanggan',$id);
	   $query = $this->db->get();
	   return $query->result();
	}
	function laporan_pesanan_sales($dari,$sampai)
	{		
	    $id=$this->session->userdata('id');
		$this->db->select('*');
	   $this->db->from('pesanan a');
	   $this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.tgl_pesanan between "'.$dari.'" and "'.$sampai.'"');
$this->db->where('a.id_sales',$id);
	   $query = $this->db->get();
	   return $query->result();
	}
	function laporan_penawaran_sales($dari,$sampai)
	{		
	    $id=$this->session->userdata('id');
		$this->db->select('*');
	   $this->db->from('penawaran a');
	   	$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.tgl_penawaran between "'.$dari.'" and "'.$sampai.'"');
$this->db->where('a.id_sales',$id);
	   $query = $this->db->get();
	   return $query->result();
	}
	function laporan_promo($dari,$sampai)
	{		
	   
		$this->db->select('*');
	   $this->db->from('promo a');
		$this->db->where('a.tgl_promo between "'.$dari.'" and "'.$sampai.'"');

	   $query = $this->db->get();
	   return $query->result();
	}
public function notif($tabel, $kolom = FALSE, $id = FALSE)
{   
$query = $this->db->get_where($tabel, array($kolom => $id));
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function hitung($tabel)
{   
   $query = $this->db->get($tabel);
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
 function get_sum_penawaran()
	{
		$this->db->select_sum('a.harga_deal');
		$this->db->from('penawaran a');
		$this->db->where('a.status',3);
		$query = $this->db->get();
		return $query->row();
	}
	function get_sum_pesanan()
	{
		$this->db->select_sum('a.harga_otr');
		$this->db->from('pesanan b');
		$this->db->join('mobil a', 'a.id_mobil=b.id_mobil', '');
		$this->db->where('b.status',3);
		$query = $this->db->get();
		return $query->row();
	}
     function get_konsultasi_user()
	{
 $id=$this->session->userdata('ses_id');
		$this->db->select('*');
		$this->db->from('konsultasi a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
			$this->db->where('a.id_pelanggan',$id);
		$this->db->order_by('a.tgl_konsultasi desc');

		$query = $this->db->get();
		return $query->result();
	}
	function get_pengguna()
	{

		$this->db->select('*');
		$this->db->from('pengguna a');
			$this->db->where('level !=1');


		$query = $this->db->get();
		return $query->result();
	}
	function get_pegawai()
	{

		$this->db->select('*');
		$this->db->from('pengguna a');
			$this->db->where('level =4');


		$query = $this->db->get();
		return $query->result();
	}
	function get_sales()
	{

		$this->db->select('*');
		$this->db->from('pengguna a');
			$this->db->where('level =3');


		$query = $this->db->get();
		return $query->result();
	}
function get_konsultasi()
	{

		$this->db->select('*');
		$this->db->from('konsultasi a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->order_by('a.tgl_konsultasi desc');

		$query = $this->db->get();
		return $query->result();
	}
	function get_service()
	{

		$this->db->select('*');
		$this->db->from('service a');
		$this->db->join('model_mobil b', 'a.id_model_mobil=b.id_model_mobil', 'left');

		$query = $this->db->get();
		return $query->result();
	}
	function get_detail_mobil($id)
	{

		$this->db->select('*');
		$this->db->from('mobil');
		$this->db->where('id_mobil',$id);
		

		$query = $this->db->get();
		return $query->row();
	}
	function get_kasus()
	{

		$this->db->select('*');
		$this->db->from('kasus a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna c', 'a.id_pegawai=c.id_pengguna', 'left');
$this->db->order_by('a.tgl_kasus desc');
		$query = $this->db->get();
		return $query->result();
	}
		function get_kasus_user()
	{
 $id=$this->session->userdata('ses_id');
		$this->db->select('*');
		$this->db->from('kasus a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna c', 'a.id_pegawai=c.id_pengguna', 'left');
		$this->db->where('a.id_pelanggan',$id);
$this->db->order_by('a.tgl_kasus desc');
		$query = $this->db->get();
		return $query->result();
	}
	function get_kasus_pegawai()
	{
 $id=$this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('kasus a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna c', 'a.id_pegawai=c.id_pengguna', 'left');
		$this->db->where('a.id_pegawai',$id);
$this->db->order_by('a.tgl_kasus desc');
		$query = $this->db->get();
		return $query->result();
	}
	function get_penawaran_user()
	{
 $id=$this->session->userdata('ses_id');
		$this->db->select('*');
		$this->db->from('penawaran a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.id_pelanggan',$id);
$this->db->order_by('a.tgl_penawaran desc');
		$query = $this->db->get();
		return $query->result();
	}
	function get_penawaran_sales()
	{
 $id=$this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('penawaran a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.id_sales',$id);
$this->db->order_by('a.tgl_penawaran desc');
		$query = $this->db->get();
		return $query->result();
	}
	function get_pesanan_user()
	{
 $id=$this->session->userdata('ses_id');
		$this->db->select('*');
		$this->db->from('pesanan a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.id_pelanggan',$id);
$this->db->order_by('a.tgl_pesanan desc');
		$query = $this->db->get();
		return $query->result();
	}
	function get_pesanan_sales()
	{
 $id=$this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('pesanan a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
		$this->db->where('a.id_sales',$id);
$this->db->order_by('a.tgl_pesanan desc');
		$query = $this->db->get();
		return $query->result();
	}
	function get_penawaran()
	{
 $id=$this->session->userdata('ses_id');
		$this->db->select('*');
		$this->db->from('penawaran a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
$this->db->order_by('a.tgl_penawaran desc');
		$query = $this->db->get();
		return $query->result();
	}
	function get_pesanan()
	{
 $id=$this->session->userdata('ses_id');
		$this->db->select('*');
		$this->db->from('pesanan a');
		$this->db->join('pelanggan b', 'a.id_pelanggan=b.id_pelanggan', 'left');
		$this->db->join('pengguna d', 'a.id_sales=d.id_pengguna', 'left');
		$this->db->join('mobil c', 'a.id_mobil=c.id_mobil', 'left');
$this->db->order_by('a.tgl_pesanan desc');
		$query = $this->db->get();
		return $query->result();
	}
 function get_data($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result();		
	}

	function hapus($tabel,$kolom,$id)
	{
		$this->db->delete($tabel,array($kolom => $id));
	}
	function set_data($tabel)
	{
		$data=$this->input->post(null,TRUE);
		array_pop($data);
		return $this->db->insert($tabel, $data);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function update_data($tabel)
	{
		$data=$this->input->post(null,TRUE);  
		$primary=array_slice($data,0,1);	
		array_shift($data);		
		array_pop($data);		
	    $this->db->where($primary);
	    $this->db->update($tabel, $data);	
	}
	 function UpdateData($tabelName, $data, $where){
        $res = $this->db->update($tabelName, $data, $where);
        return $res;
    }
 
}
?>