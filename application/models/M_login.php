<?php
class M_login extends CI_Model{

	function auth_pengguna($username){
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->where('username',$username);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
		}
		

 
 
}