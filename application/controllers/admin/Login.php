<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->view('admin/login');
	}

	function proses_login() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if($this->form_validation->run()== true) {
			$this->load->model('admin_model');
			// check the username & password of user
			$user = $this->input->post('username');
			$pass = md5($this->input->post('password'));
			$status = $this->admin_model->cek_user($user, $pass);
			if($status < 0) {
				$this->session->set_flashdata("error", "Login gagal!");
			} else {
				// success
				// store the user data to session
				$this->session->set_userdata($status);
				$this->session->set_userdata("logged_in", true);
				// redirect to dashboard
				redirect("admin/home");
			}
		}
	}

	function logout() {
		// hapus session
		$data_session = array_keys($this->session->userdata);
		$this->session->unset_userdata($data_session);
		// hapus cookie
		//$this->input->set_cookie('username');
		//$this->input->set_cookie('password');
		redirect(site_url('admin/login'));
	}
}
