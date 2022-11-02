<?php

defined('BASEPATH')OR exit('No direct script access allowed');

/* Class untuk mengontrol halaman produk di admin
 *
 */

class Produk extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('produk_model');
	}

	function index() {
		$data['page'] = 'produk';
		$data['total_semua'] = $this->produk_model->get_total();
		$data['total_barang'] = $this->produk_model->get_total('barang');
		$data['total_jasa'] = $this->produk_model->get_total('jasa');
		$data['total_paket'] = $this->produk_model->get_total('paket');
		$data['total_promo'] = $this->produk_model->get_total('promo');
		$data['web'] = $this->pengaturan_model->get(1);

		// load library pagination
		$this->load->library('pagination');

		//pagination settings
		$config['base_url'] = site_url("admin/produk/index");
		$config['total_rows'] = $data['total_semua'];
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// integrasi pagination dengan bootstrap
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#!">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['halaman'] = $this->pagination->create_links();

		$dari_offset = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
		$data['produk'] = $this->produk_model->get_pagination($config['per_page'], $dari_offset);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar');
		$this->load->view('admin/content', $data);
		$this->load->view('admin/footer');

	}

	function jenis($jenis = null) {
		if($jenis == null) {
			show_404();
		} else {
			$data['page'] = 'produk';
			$data['total_semua'] = $this->produk_model->get_total();
			$data['total_barang'] = $this->produk_model->get_total('barang');
			$data['total_jasa'] = $this->produk_model->get_total('jasa');
			$data['total_paket'] = $this->produk_model->get_total('paket');
			$data['total_promo'] = $this->produk_model->get_total('promo');
			$data['web'] = $this->pengaturan_model->get(1);

			// load library pagination
			$this->load->library('pagination');

			//pagination settings
			$config['base_url'] = site_url("admin/produk/jenis/".$jenis."/");
			$config['total_rows'] = count($this->produk_model->get_by_jenis($jenis));
			$config['per_page'] = 10;
			$config["uri_segment"] = 5;
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = floor($choice);

			// integrasi pagination dengan bootstrap
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '&raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#!">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);

			$data['halaman'] = $this->pagination->create_links();

			$dari_offset = ($this->uri->segment(5))? $this->uri->segment(5) : 0;
			$data['produk'] = $this->produk_model->get_by_jenis_pagination($jenis, $config['per_page'], $dari_offset);

			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
			$this->load->view('admin/content', $data);
			$this->load->view('admin/footer');
		}
	}

	function detail($id = null) {
		if($id == null) {
			show_404();
		} else {
			$data['page'] = 'detail_produk';
			$data['produk'] = $this->produk_model->get_by_id($id);
			$data['web'] = $this->pengaturan_model->get(1);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
			$this->load->view('admin/content', $data);
			$this->load->view('admin/footer');
		}
	}

	function tambah_produk() {
		// generate id produk_model
		$this->produk_model->id = base_convert(microtime(false), 10, 36);
		$this->produk_model->nama = $this->input->post('nama');
		$this->produk_model->harga = $this->input->post('harga');
		$this->produk_model->jenis = $this->input->post('jenis');
		$this->produk_model->keterangan = $this->minify_html($this->input->post('keterangan'));
		// upload foto produk_model
		// $this->produk_model->foto = $this->input->post('produk_model');
		$this->upload_foto();
		$this->produk_model->insert();
		redirect(site_url('admin/produk'));
	}

	private function minify_html($html){
		$output = str_replace(array("\r\n", "\r"), "\n", $html);
		$lines = explode("\n", $output);
		$new_lines = array();

		foreach ($lines as $i => $line) {
			if(!empty($line))
				$new_lines[] = trim($line);
		}
		return implode($new_lines);
	}

	private function upload_foto() {
		$config['upload_path'] = './assets/tjc/img/produk/';
		$config['allowed_types'] = 'png|jpg|jpeg|gif';
		$config['max_size'] = 100;
		//$config['max_width'] = 1024;
		//$config['max_height'] = 1024;
		$config['file_name'] = $this->produk_model->id;
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('foto')) {
			$this->produk_model->foto = $this->upload->data('file_name');
			return true;
		} else {
			if($this->input->post('foto_lama')){
				$this->produk_model->foto = $this->input->post('foto_lama');
			} else {
				$this->produk_model->foto = 'default.png';
			}
		}
	}

	function edit($id = null) {
		if($id == null) {
			show_404();
		} else {
			$data['page'] = 'form_edit_produk';
			$data['produk'] = $this->produk_model->get_by_id($id);
			$data['web'] = $this->pengaturan_model->get(1);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/navbar');
			$this->load->view('admin/content', $data);
			$this->load->view('admin/footer');
		}
	}

	function update() {
		$id = $this->input->post('id');
		$this->produk_model->nama = $this->input->post('nama');
		$this->produk_model->harga = $this->input->post('harga');
		$this->produk_model->jenis = $this->input->post('jenis');
		$this->produk_model->keterangan = $this->minify_html($this->input->post('keterangan'));
		$this->produk_model->update($id);
		redirect(site_url('admin/produk'));
	}

	function update_gambar() {
		$id = $this->input->post('id-edit');
		$this->produk_model->id = $this->input->post('id-edit');
		$this->upload_foto();
		$this->produk_model->update($id);
		print_r($this->produk_model);
		redirect(site_url('admin/produk'));
	}

	function hapus($id = null){
		if($id == null){
			show_404();
		} else {
			// ambil data
			$produk = $this->produk_model->get_by_id($id);

			// hapus file gambar
			if( $produk->foto != "default.png"){
				unlink(FCPATH.'assets/tjc/img/produk/' . $produk->foto);
			}
			// hapus di database
			$this->produk_model->delete($id);

			redirect(site_url('admin/produk'));
		}
	}
}
