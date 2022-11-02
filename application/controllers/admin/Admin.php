<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->model('admin_model');
		$this->admin_model->cek_session();
	}

	function index($id=null){

		$data['page'] = 'admin';

		$data['user'] = $this->admin_model->get();
		$data['total_user'] = $this->admin_model->get_total();
		$data['total_admin'] = $this->admin_model->get_total('staff');
		$data['total_staff'] = $this->admin_model->get_total('admin');
		$data['web'] = $this->pengaturan_model->get(1);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', $data);
		$this->load->view('admin/footer');
	}

	function admin(){
		$data['page'] = 'admin';
        $data['user'] = $this->admin_model->get_by_akses('admin');
		$data['total_user'] = $this->admin_model->get_total();
		$data['total_admin'] = $this->admin_model->get_total('staff');
		$data['total_staff'] = $this->admin_model->get_total('admin');
		$data['web'] = $this->pengaturan_model->get(1);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', $data);
		$this->load->view('admin/footer');
    }

    function staff(){
		$data['page'] = 'admin';
        $data['user'] = $this->admin_model->get_by_akses('staff');
		$data['total_user'] = $this->admin_model->get_total();
		$data['total_admin'] = $this->admin_model->get_total('staff');
		$data['total_staff'] = $this->admin_model->get_total('admin');
		$data['web'] = $this->pengaturan_model->get(1);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', $data);
		$this->load->view('admin/footer');
	}

    function register(){
        $this->admin_model->nama = $this->input->post('nama');
        $this->admin_model->telepon = $this->input->post('telepon');
        $this->admin_model->username = $this->input->post('username');
        $this->admin_model->password = md5($this->input->post('password'));
        $this->admin_model->email = $this->input->post('email');
        $this->admin_model->akses = $this->input->post('akses');
        if ($this->admin_model->insert()){
            redirect(site_url('admin/admin'));
        }
    }

    function update(){
        $this->admin_model->nama = $this->input->post('nama');
        $this->admin_model->telepon = $this->input->post('telepon');
        $this->admin_model->username = $this->input->post('username');
        $this->admin_model->email = $this->input->post('email');
        $this->admin_model->akses = $this->input->post('akses');
        if ($this->admin_model->update($this->input->post('id'))){
            redirect(site_url('admin/admin'));
        }
    }

    function ubah_password(){

        $pass_baru = $this->input->post('password-baru');
        $konfirmasi = $this->input->post('konfirmasi-password');
        if( $pass_baru == $konfirmasi ){
            $this->admin_model->password = md5($pass_baru);
            if ($this->admin_model->update($this->input->post('id'))){
                redirect(site_url('admin/admin'));
            }
        } else {
            echo "<a href='javascript:history.back()'><i class='fa fa-arrow-left'></i> Kembali</a> ";
            echo "Password baru tidak sama dengan password konfirmasi";
        }

    }

    function hapus($id){
        if(isset($id)){
            $this->admin_model->delete($id);
            redirect(site_url('admin/admin'));
        } else {
            redirect(site_url('admin/admin'));
        }
    }
}
