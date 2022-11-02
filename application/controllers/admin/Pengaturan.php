<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('pengaturan_model');
		$this->admin_model->cek_session();
	}

	function index(){

		$data['page'] = 'pengaturan';
		$data['pengaturan'] = $this->pengaturan_model->get(1);
		$data['web'] = $this->pengaturan_model->get(1);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', $data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id = $this->input->post('id');
		$this->pengaturan_model->judul = $this->input->post('judul');
		$this->pengaturan_model->tagline = $this->input->post('tagline');
		$this->pengaturan_model->telepon1 = $this->input->post('telepon1');
		$this->pengaturan_model->telepon2 = $this->input->post('telepon2');
		$this->pengaturan_model->email = $this->input->post('email');
		$this->pengaturan_model->alamat = $this->input->post('alamat');
		$this->pengaturan_model->peta = $this->input->post('peta');
		$this->pengaturan_model->tentang = $this->input->post('tentang');
		$this->pengaturan_model->update($id);

		$this->session->set_flashdata('berhasil', 'Sudah disimpan!');
		redirect(site_url('admin/pengaturan'));
	}


}
