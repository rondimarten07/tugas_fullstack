<?php

class Info extends CI_Controller {

    function __construct(){
        parent::__construct();
		$this->load->model('admin_model');
        //$this->admin_model->cek_session();
    }

    function index(){
		$data['web'] = $this->pengaturan_model->get(1);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', array('page' => 'info'));
		$this->load->view('admin/footer');
    }



}
