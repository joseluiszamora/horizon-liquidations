<?php
  class Home extends  CI_Controller {   
    public function __construct() {
      parent::__construct();
    }

    function index() {
      $data['category'] = 'home';
      $data['page'] = 'index';
      $this->load->view('template/template', $data);
    }
  }
?>