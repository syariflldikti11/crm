<?php

class Site extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();

  }
  function index()
{
 
  $data = array(
        'judul' => 'Home'
      
    );  
  $this->template->load('site/template', 'site/home', $data);
     
}

}

?>