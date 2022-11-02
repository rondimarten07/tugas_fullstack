<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->admin_model->cek_session();
		$this->load->model('produk_model');
	}

	function index(){
		$data['page'] = 'home';
		$data['jml_produk'] = count($this->produk_model->get_by_jenis('barang'));
		$data['jml_jasa'] = count($this->produk_model->get_by_jenis('jasa'));
		$data['jml_promo'] = count($this->produk_model->get_by_jenis('promo'));
		$data['jml_paket'] = count($this->produk_model->get_by_jenis('paket'));
		$data['jml_user'] = count($this->admin_model->get());
		$data['web'] = $this->pengaturan_model->get(1);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', $data);
		$this->load->view('admin/footer');
	}

}
