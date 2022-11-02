<?php

class Profil extends CI_Controller {

    function __construct(){
        parent::__construct();
		$this->load->model('admin_model');
        $this->admin_model->cek_session();
    }

    function index(){
		$user =  $this->admin_model->get_by_id($this->session->userdata('id'));
        $data['web'] = $this->pengaturan_model->get(1);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', array('page' => 'tampilan_profil', 'user' => $user));
		$this->load->view('admin/footer');
    }

    function edit(){
		$user =  $this->admin_model->get_by_id($this->session->userdata('id'));
        $data['web'] = $this->pengaturan_model->get(1);

        $this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', array('page'=>'form_edit_profil', 'user' => $user));
		$this->load->view('admin/footer');
    }

	function update(){
		$this->admin_model->nama = $this->input->post('nama');
        $this->admin_model->telepon = $this->input->post('telepon');
        $this->admin_model->username = $this->input->post('username');
        $this->admin_model->email = $this->input->post('email');
        $this->admin_model->akses = $this->input->post('akses');
        if ($this->admin_model->update($this->input->post('id'))){
            redirect(site_url('admin/profil'));
        }
	}

	function ubah_password(){
		$pass_baru = $this->input->post('password-baru');
        $konfirmasi = $this->input->post('konfirmasi-password');
        if( $pass_baru == $konfirmasi ){
            $this->admin_model->password = md5($pass_baru);
            if ($this->admin_model->update($this->input->post('id'))){
                redirect(site_url('admin/profil'));
            }
        } else {
            echo "<a href='javascript:history.back()'><i class='fa fa-arrow-left'></i> Kembali</a> ";
            echo "Password baru tidak sama dengan password konfirmasi";
        }
	}


}
