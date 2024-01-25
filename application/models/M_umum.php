<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_umum extends CI_Model{
    
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