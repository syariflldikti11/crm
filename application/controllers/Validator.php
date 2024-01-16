<?php

class Validator extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('m_sakip');
    if ($this->session->userdata('akses') != TRUE) {
      redirect(base_url('login_sakip'));
    }
  }
  function pengukuran_kinerja()
{
 
 $tahun=$this->session->userdata('tahun');
  $data = array(
     'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
        'judul' => 'Pengukuran Kinerja',
        'tahun'=> $tahun,
        'dt_ikk'=> $this->m_sakip->get_ikk_home(),
        'dt_pk'=> $this->m_sakip->get_pk(),
         'dt_tw'=> $this->m_sakip->get_triwulan()
    );  
  $this->template->load('sakip/validator/template', 'sakip/validator/pengukuran_kinerja', $data);
     
}
  function view_kak($id_usulan_tb)
  {

    $data = array(

      'view_kak' => $this->m_sakip->get_row_view_dokumen($id_usulan_tb),
    );
    $this->load->view('sakip/validator/view_kak', $data);
  }
  function view_rab($id_usulan_tb)
  {

    $data = array(

      'view_rab' => $this->m_sakip->get_row_view_dokumen($id_usulan_tb),
    );
    $this->load->view('sakip/validator/view_rab', $data);
  }
  function view_rab_excel($id_usulan_tb)
  {

    $data = array(

      'view_rab_excel' => $this->m_sakip->get_row_view_dokumen($id_usulan_tb),
    );
    $this->load->view('sakip/validator/view_rab_excel', $data);
  }
  function histori_detail_usulan_tb($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_histori_detail_usulan_tb' => $this->m_sakip->get_histori_detail_usulan_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/histori_detail_usulan_tb', $data);
  }
  function histori_detail_usulan_td($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_histori_detail_usulan_tb' => $this->m_sakip->get_histori_detail_usulan_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/histori_detail_usulan_td', $data);
  }
  function validasi_usulan_tb($id)
  {
    $tgl = date('Y-m-d');
    $detail = $this->m_sakip->cek_belum_valid($id);
    ;
    if ($detail->num_rows() > 0) {
      $notif = "Tidak bisa validasi usulan, masih ada detail usulan yang belum di validasi";
      $this->session->set_flashdata('delete', $notif);
      redirect('validator/usulan_tb');
    } else {
      $this->db->query("update usulan_tb set status_usulan=3, tgl_valid='$tgl' where id_usulan_tb='$id'");
      $notif = " Validasi usulan berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect('validator/usulan_tb');
    }
  }
  function validasi_usulan_td($id)
  {
    $tgl = date('Y-m-d');
    $detail = $this->m_sakip->cek_belum_valid($id);
    ;
    if ($detail->num_rows() > 0) {
      $notif = "Tidak bisa validasi usulan, masih ada detail usulan yang belum di validasi";
      $this->session->set_flashdata('delete', $notif);
      redirect('validator/usulan_tb');
    } else {
      $this->db->query("update usulan_tb set status_usulan=3, tgl_valid='$tgl' where id_usulan_tb='$id'");
      $notif = " Validasi usulan berhasil";
      $this->session->set_flashdata('success', $notif);
      redirect('validator/usulan_td');
    }
  }
  public function uploadRABValid()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'pdf';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('rab_valid')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }
  public function uploadRABExcelValid()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'xls|xlsx';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('rab_excel_valid')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }
  function proker_tb()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'dt_proker_tb' => $this->m_sakip->get_proker_tb_validator(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/proker_tb', $data);

  }
  function detail_proker_tb($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_detail_proker_tb' => $this->m_sakip->get_detail_proker_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/detail_proker_tb', $data);
  }
  function proker_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'dt_proker_tb' => $this->m_sakip->get_proker_td_validator(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/proker_td', $data);

  }
  function detail_proker_td($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_detail_proker_tb' => $this->m_sakip->get_detail_proker_tb($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/detail_proker_td', $data);
  }
  function usulan_tb()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'dt_usulan_tb' => $this->m_sakip->get_usulan_tb_validator(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/usulan_tb', $data);

  }
  function usulan_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'dt_usulan_td' => $this->m_sakip->get_usulan_td_validator(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/usulan_td', $data);

  }
  function validasi_detail_usulan_tb()
  {
    $id_detail_usulan_tb = $this->input->post('id_detail_usulan_tb');
    $id_usulan_tb = $this->input->post('id_usulan_tb');
    $status_detail_usulan = $this->input->post('status_detail_usulan');
    $catatan = $this->input->post('catatan');
    $this->db->query("update detail_usulan_tb set status_detail_usulan=$status_detail_usulan,catatan='$catatan' where id_detail_usulan_tb='$id_detail_usulan_tb'");
    $querycek = $this->db->query("select * from detail_usulan_tb a where a.id_detail_usulan_tb='$id_detail_usulan_tb'");
    foreach ($querycek->result() as $a) {
      $sql = "insert into histori_detail_usulan_tb (id_detail_usulan_tb, id_usulan_tb, detail_kegiatan,bentuk_kegiatan,status_detail_usulan,anggaran,catatan,jan,feb,mar,apr,mei,jun,jul,agu,sep,okt,nov,des,tempat_pelaksanaan)values ('$a->id_detail_usulan_tb',' $a->id_usulan_tb',' $a->detail_kegiatan','$a->bentuk_kegiatan','$status_detail_usulan','$a->anggaran','$catatan','$a->jan','$a->feb','$a->mar','$a->apr','$a->mei','$a->jun','$a->jul','$a->agu','$a->sep','$a->okt','$a->nov','$a->des','$a->tempat_pelaksanaan')";
      $this->db->query($sql);
    }
    $notif = "Validasi Data Berhasil ";
    $this->session->set_flashdata('update', $notif);
    redirect(base_url() . "validator/detail_usulan_tb/" . $id_usulan_tb);

  }

  function validasi_detail_usulan_td()
  {
    $id_detail_usulan_tb = $this->input->post('id_detail_usulan_tb');
    $id_usulan_tb = $this->input->post('id_usulan_tb');
    $status_detail_usulan = $this->input->post('status_detail_usulan');
    $catatan = $this->input->post('catatan');
    $this->db->query("update detail_usulan_tb set status_detail_usulan=$status_detail_usulan,catatan='$catatan' where id_detail_usulan_tb='$id_detail_usulan_tb'");
    $querycek = $this->db->query("select * from detail_usulan_tb a where a.id_detail_usulan_tb='$id_detail_usulan_tb'");
    foreach ($querycek->result() as $a) {
      $sql = "insert into histori_detail_usulan_tb (id_detail_usulan_tb, id_usulan_tb, detail_kegiatan,bentuk_kegiatan,status_detail_usulan,anggaran,catatan,jan,feb,mar,apr,mei,jun,jul,agu,sep,okt,nov,des,tempat_pelaksanaan)values ('$a->id_detail_usulan_tb',' $a->id_usulan_tb',' $a->detail_kegiatan','$a->bentuk_kegiatan','$status_detail_usulan','$a->anggaran','$catatan','$a->jan','$a->feb','$a->mar','$a->apr','$a->mei','$a->jun','$a->jul','$a->agu','$a->sep','$a->okt','$a->nov','$a->des','$a->tempat_pelaksanaan')";
      $this->db->query($sql);
    }
    $notif = "Validasi Data Berhasil ";
    $this->session->set_flashdata('update', $notif);
    redirect(base_url() . "validator/detail_usulan_td/" . $id_usulan_tb);

  }
  function buka_usulan_tb($id)
  {
    $this->db->query("update usulan_tb set status_usulan=0 where id_usulan_tb='$id'");
    $notif = " Usulan Proker Tahun Berjalan Berhasil Dibuka";
    $this->session->set_flashdata('success', $notif);
    redirect('validator/usulan_tb');

  }
  function buka_usulan_td($id)
  {
    $this->db->query("update usulan_tb set status_usulan=0 where id_usulan_tb='$id'");
    $notif = " Usulan Proker Tahun Depan Berhasil Dibuka";
    $this->session->set_flashdata('success', $notif);
    redirect('validator/usulan_td');

  }
  function setujui_usulan_tb($id)
  {
    $this->db->query("update usulan_tb set setujui_usulan=1 where id_usulan_tb='$id'");
    $notif = " Usulan Proker Tahun Telah di Setujui";
    $this->session->set_flashdata('success', $notif);
    redirect('validator/usulan_tb');

  }
  function detail_usulan_tb($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_detail_usulan_tb' => $this->m_sakip->get_detail_usulan_tb_validator($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/detail_usulan_tb', $data);
  }
  function detail_usulan_td($id)
  {
    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Program Kerja',
      'id' => $id,
      'dt_detail_usulan_tb' => $this->m_sakip->get_detail_usulan_tb_validator($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/detail_usulan_td', $data);
  }
  function kalender_proker_tb()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_tb(),
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/kalender_proker_tb', $data);

  }
  function kalender_proker_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_td(),
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/kalender_proker_td', $data);

  }
  function cetak_proker()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_tb(),

    );
    $this->load->view('sakip/validator/cetak_proker', $data);

  }
  function cetak_proker_excel()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_tb(),
    );
    $this->load->view('sakip/validator/cetak_proker_excel', $data);

  }
  function cetak_proker_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_td(),

    );
    $this->load->view('sakip/validator/cetak_proker_td', $data);

  }
  function cetak_proker_excel_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_proker_td(),
    );
    $this->load->view('sakip/validator/cetak_proker_excel_td', $data);

  }
  function cetak_usulan_proker()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_usulan_proker_tb(),
    );
    $this->load->view('sakip/validator/cetak_usulan_proker', $data);

  }
  function cetak_usulan_proker_excel()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_usulan_proker_tb(),
    );
    $this->load->view('sakip/validator/cetak_usulan_proker_excel', $data);

  }
  function cetak_usulan_proker_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_usulan_proker_td(),
    );
    $this->load->view('sakip/validator/cetak_usulan_proker_td', $data);

  }
  function cetak_usulan_proker_excel_td()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'tahun' => $tahun,
      'dt_proker' => $this->m_sakip->cetak_usulan_proker_td(),
    );
    $this->load->view('sakip/validator/cetak_usulan_proker_excel_td', $data);

  }
  function index()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'jml_kembali_iku1' => $this->m_sakip->hitung_kembali_iku1(),
      'jml_kembali_iku2' => $this->m_sakip->hitung_kembali_iku2(),
      'jml_kembali_iku3' => $this->m_sakip->hitung_kembali_iku3(),
      'jml_kembali_iku4' => $this->m_sakip->hitung_kembali_iku4(),
      'jml_kembali_iku5' => $this->m_sakip->hitung_kembali_iku5(),
      'jml_kembali_iku6' => $this->m_sakip->hitung_kembali_iku6(),
      'jml_kembali_iku7' => $this->m_sakip->hitung_kembali_iku7(),
      'jml_kembali_iku8' => $this->m_sakip->hitung_kembali_iku8(),
      'jml_kembali_iku9' => $this->m_sakip->hitung_kembali_iku9(),
      'jml_kembali_iku10' => $this->m_sakip->hitung_kembali_iku10(),
      'jml_kembali_iku11' => $this->m_sakip->hitung_kembali_iku11(),
      'jml_kembali_analisa' => $this->m_sakip->hitung_kembali_analisa(),
      'judul' => 'Dashboard',
      'tahun' => $tahun,
      'dt_ikk' => $this->m_sakip->get_ikk_home(),
      'dt_pk' => $this->m_sakip->get_pk(),
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/home', $data);

  }

  function renaksi()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Rencana Aksi Triwulan',

      'dt_renaksi' => $this->m_sakip->get_renaksi(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/renaksi', $data);

  }

  function analisa()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Analisa Capaian Kinerja',
      'dt_iku' => $this->m_sakip->get_iku_validator(),

      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/analisa', $data);

  }
  function analisa_capaian_kinerja($ida)
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Analisa Capaian Kinerja',
      'id_iku' => $ida,
      'dt_analisa' => $this->m_sakip->get_analisa($ida),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/analisa_capaian_kinerja', $data);
  }

  function cetak_analisa()
  {

    $data['dt_analisa'] = $this->m_sakip->get_cetak_analisa();
    $this->load->view('sakip/validator/cetak_analisa', $data);

  }

  function validasi_analisa_capaian_kinerja()
  {

    $this->form_validation->set_rules('id_analisa', 'id_analisa', 'required');
    $this->form_validation->set_rules('status_analisa', 'status_analisa');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/analisa_capaian_kinerja/" . $id);
    } else {
      $this->m_umum->update_data("sakip_analisa");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/analisa_capaian_kinerja/" . $id);
    }

  }


  function capaian_kinerja()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Capaian Kinerja',
      'dt_iku' => $this->m_sakip->get_iku(),

      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/capaian_kinerja', $data);


  }
  function iku1($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku1' => $this->m_sakip->get_iku1($id_iku),
      'dt_sl' => $this->m_sakip->get_standar_layanan_admin(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/iku1', $data);

  }

  function cetak_iku1($id_iku)
  {

    $data['dt_iku1'] = $this->m_sakip->get_iku1($id_iku);
    $this->load->view('sakip/laporan/cetak_iku1', $data);

  }
  function iku2($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts_iku2(),
      'dt_iku2' => $this->m_sakip->get_iku2($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/iku2', $data);

  }

  function cetak_iku2($id_iku)
  {

    $data['dt_iku2'] = $this->m_sakip->get_iku2($id_iku);
    $this->load->view('sakip/laporan/cetak_iku2', $data);

  }
  function iku3($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),

      'dt_iku3' => $this->m_sakip->get_iku3($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/iku3', $data);

  }

  function cetak_iku3($id_iku)
  {

    $data['dt_iku3'] = $this->m_sakip->get_iku3($id_iku);
    $this->load->view('sakip/laporan/cetak_iku3', $data);

  }
  function iku4($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_iku4' => $this->m_sakip->get_iku4($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/validator/template', 'sakip/validator/iku4', $data);

  }

  function detail_iku4($id_iku4)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku4,
      'd' => $this->m_sakip->m_iku4($id_iku4),
      'dt_pts' => $this->m_sakip->get_pts_all(),
      'dt_detail_iku4' => $this->m_sakip->get_detail_iku4($id_iku4),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/validator/template', 'sakip/validator/detail_iku4', $data);

  }

  function cetak_iku4($id_iku)
  {

    $data['dt_iku4'] = $this->m_sakip->get_iku4($id_iku);
    $this->load->view('sakip/laporan/cetak_iku4', $data);

  }
  function iku5($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku' => $this->m_sakip->get_iku5($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/validator/template', 'sakip/validator/iku5', $data);

  }

  function cetak_iku5($id_iku)
  {
    $data['dt_pts'] = $this->m_sakip->get_pts();
    $data['dt_iku'] = $this->m_sakip->get_iku5($id_iku);
    $this->load->view('sakip/laporan/cetak_iku5', $data);

  }
  function delete_iku5($id, $id_iku)
  {

    $this->m_umum->hapus('sakip_iku5', 'id_iku5', $id);
    $notif = " Data berhasil dihapuskan";
    $this->session->set_flashdata('delete', $notif);
    redirect(base_url() . "validator/iku5/" . $id_iku);

  }
  function iku6($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku6' => $this->m_sakip->get_iku6($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/validator/template', 'sakip/validator/iku6', $data);

  }


  function cetak_iku6($id_iku)
  {

    $data['dt_iku6'] = $this->m_sakip->get_iku6($id_iku);
    $this->load->view('sakip/laporan/cetak_iku6', $data);

  }

  function iku7($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku7' => $this->m_sakip->get_iku7($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/validator/template', 'sakip/validator/iku7', $data);

  }
  function detail_iku7($id_iku7)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku7,
      'd' => $this->m_sakip->m_iku7($id_iku7),
      'dt_pts' => $this->m_sakip->get_pts_all(),
      'dt_detail_iku7' => $this->m_sakip->get_detail_iku7($id_iku7),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/validator/template', 'sakip/validator/detail_iku7', $data);

  }

  function cetak_iku7($id_iku)
  {

    $data['dt_iku7'] = $this->m_sakip->get_iku7($id_iku);
    $this->load->view('sakip/laporan/cetak_iku7', $data);

  }

  function iku8($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts_iku8(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku8' => $this->m_sakip->get_iku8($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/validator/template', 'sakip/validator/iku8', $data);

  }

  function cetak_iku8($id_iku)
  {

    $data['dt_iku8'] = $this->m_sakip->get_iku8($id_iku);
    $this->load->view('sakip/laporan/cetak_iku8', $data);

  }

  function iku9($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts_iku9(),
      'dt_iku9' => $this->m_sakip->get_iku9($id_iku),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),

      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );


    $this->template->load('sakip/validator/template', 'sakip/validator/iku9', $data);

  }

  function cetak_iku9($id_iku)
  {

    $data['dt_iku9'] = $this->m_sakip->get_iku9($id_iku);
    $this->load->view('sakip/laporan/cetak_iku9', $data);

  }

  function iku10($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku10' => $this->m_sakip->get_iku10($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/iku10', $data);

  }


  function cetak_iku10($id_iku)
  {

    $data['dt_iku10'] = $this->m_sakip->get_iku10($id_iku);
    $this->load->view('sakip/laporan/cetak_iku10', $data);

  }

  function iku11($id_iku)
  {

    $tahun = $this->session->userdata('tahun');

    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'id' => $id_iku,
      'd' => $this->m_sakip->m_iku($id_iku),
      'dt_pts' => $this->m_sakip->get_pts(),
      'dt_bukti' => $this->m_sakip->get_bukti($id_iku),
      'dt_iku11' => $this->m_sakip->get_iku11($id_iku),
      'dt_tw' => $this->m_sakip->get_triwulan(),
      'judul' => 'Capaian Kinerja',
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/iku11', $data);

  }


  function cetak_iku11($id_iku)
  {

    $data['dt_iku11'] = $this->m_sakip->get_iku11($id_iku);
    $this->load->view('sakip/laporan/cetak_iku11', $data);

  }
  function iku()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Indikator Kinerja Utama LLDIKTI XI',
      'dt_iku' => $this->m_sakip->get_iku(),
      'dt_ikk' => $this->m_sakip->get_data('sakip_ikk'),
      'dt_bagian' => $this->m_sakip->get_data('sakip_bagian'),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/iku', $data);

  }

  function target_kinerja()
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Target Perjanjian Kinerja',
      'dt_sasaran' => $this->m_sakip->get_sk(),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/sasaran_kegiatan', $data);

  }


  function error()
  {
    $this->load->view('errors/html/error_404');
  }
  function ikk($id)
  {

    $tahun = $this->session->userdata('tahun');
    $data = array(
      'jml_iku1' => $this->m_sakip->hitung_iku1(),
      'jml_iku2' => $this->m_sakip->hitung_iku2(),
      'jml_iku3' => $this->m_sakip->hitung_iku3(),
      'jml_iku4' => $this->m_sakip->hitung_iku4(),
      'jml_iku5' => $this->m_sakip->hitung_iku5(),
      'jml_iku6' => $this->m_sakip->hitung_iku6(),
      'jml_iku7' => $this->m_sakip->hitung_iku7(),
      'jml_iku8' => $this->m_sakip->hitung_iku8(),
      'jml_iku9' => $this->m_sakip->hitung_iku9(),
      'jml_iku10' => $this->m_sakip->hitung_iku10(),
      'jml_iku11' => $this->m_sakip->hitung_iku11(),
      'jml_analisa' => $this->m_sakip->hitung_analisa(),
      'judul' => 'Target Perjanjian Kinerja',
      'id' => $id,
      'dt_ikk' => $this->m_sakip->get_ikk($id),
      'tahun' => $tahun,
    );
    $this->template->load('sakip/validator/template', 'sakip/validator/ikk', $data);

  }


  function kirim_analisa($id_analisa, $id_iku)
  {
    $this->db->query("update sakip_analisa set status_analisa=1 where id_analisa='$id_analisa'");
    $notif = " Data Analisa IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/analisa_capaian_kinerja/" . $id_iku);
  }
  function kirim_iku2()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku2 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku2/" . $id_iku);
  }
  function kirim_iku3()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku3 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku3/" . $id_iku);
  }
  function kirim_iku4()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku4 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku4/" . $id_iku);
  }
  function kirim_iku5()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku5 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku5/" . $id_iku);
  }
  function kirim_iku6()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku6 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku6/" . $id_iku);
  }
  function kirim_iku7()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku7 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku7/" . $id_iku);
  }
  function kirim_iku8()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku8 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku8/" . $id_iku);
  }
  function kirim_iku9()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku9 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku9/" . $id_iku);
  }
  function kirim_iku10()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku10 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku10/" . $id_iku);
  }
  function kirim_iku11()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku11 set status_iku=1 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku11/" . $id_iku);
  }
  function valid_iku1()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku1 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku1/" . $id_iku);
  }

  function valid_iku2()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku2 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku2/" . $id_iku);
  }
  function valid_iku3()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku3 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku3/" . $id_iku);
  }
  function valid_iku4()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku4 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku4/" . $id_iku);
  }
  function valid_iku5()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku5 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku5/" . $id_iku);
  }
  function valid_iku6()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku6 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku6/" . $id_iku);
  }
  function valid_iku7()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku7 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku7/" . $id_iku);
  }
  function valid_iku8()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku8 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku8/" . $id_iku);
  }
  function valid_iku9()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku9 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku9/" . $id_iku);
  }
  function valid_iku10()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku10 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku10/" . $id_iku);
  }
  function valid_iku11()
  {
    $id_triwulan = $this->input->post('id_triwulan');
    $id_iku = $this->input->post('id_iku');
    $this->db->query("update sakip_iku11 set status_iku=3 where id_triwulan='$id_triwulan' and id_iku='$id_iku' ");
    $notif = " Data IKU berhasil dikirim";
    $this->session->set_flashdata('success', $notif);
    redirect(base_url() . "validator/iku11/" . $id_iku);
  }
  function validasi_iku1()
  {

    $this->form_validation->set_rules('id_iku1', 'id_iku1', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku1/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku1");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku1/" . $id);
    }

  }
  function validasi_iku2()
  {

    $this->form_validation->set_rules('id_iku2', 'id_iku2', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku2/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku2");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku2/" . $id);
    }

  }
  function validasi_iku3()
  {

    $this->form_validation->set_rules('id_iku3', 'id_iku3', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku3/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku3");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku3/" . $id);
    }

  }
  function validasi_iku4()
  {

    $this->form_validation->set_rules('id_iku4', 'id_iku4', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku4/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku4");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku4/" . $id);
    }

  }
  function validasi_iku5()
  {

    $this->form_validation->set_rules('id_iku5', 'id_iku5', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku5/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku5");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku5/" . $id);
    }

  }
  function validasi_iku6()
  {

    $this->form_validation->set_rules('id_iku6', 'id_iku6', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku6/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku6");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku6/" . $id);
    }

  }
  function validasi_iku7()
  {

    $this->form_validation->set_rules('id_iku7', 'id_iku7', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku7/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku7");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku7/" . $id);
    }

  }
  function validasi_iku8()
  {

    $this->form_validation->set_rules('id_iku8', 'id_iku8', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku8/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku8");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku8/" . $id);
    }

  }
  function validasi_iku9()
  {

    $this->form_validation->set_rules('id_iku9', 'id_iku9', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku9/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku9");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku9/" . $id);
    }

  }
  function validasi_iku10()
  {

    $this->form_validation->set_rules('id_iku10', 'id_iku10', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku10/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku10");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku10/" . $id);
    }

  }
  function validasi_iku11()
  {

    $this->form_validation->set_rules('id_iku11', 'id_iku11', 'required');
    $this->form_validation->set_rules('status_iku', 'status_iku');
    $id = $this->input->post('id_iku');
    if ($this->form_validation->run() === FALSE) {
      redirect(base_url() . "validator/iku11/" . $id);
    } else {
      $this->m_umum->update_data("sakip_iku11");
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect(base_url() . "validator/iku11/" . $id);
    }

  }
}

?>