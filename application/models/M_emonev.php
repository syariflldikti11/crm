<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_emonev extends CI_Model{
  
  function get_area($id)
  {
    $this->db->select('*');
    $this->db->from('area');
    $this->db->where('id_monev', $id);
    $query = $this->db->get();
    return $query->result();
  }
  function get_aspek($id)
  {
    $this->db->select('*');
    $this->db->from('aspek');
    $this->db->where('id_area', $id);
    $query = $this->db->get();
    return $query->result();
  }

}
?>