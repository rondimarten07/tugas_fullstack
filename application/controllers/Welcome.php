<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('produk_model', 'pengaturan_model', 'resep_model'));
	}

	public function index()
	{
		$data['page'] = 'home';
		$data['produk'] = $this->produk_model->get_by_jenis('barang');
		$data['web'] = $this->pengaturan_model->get(1);


		$this->load->view('depan/navbar',  $data);
		$this->load->view('depan/header', $data);
		$this->load->view('depan/content');
		$this->load->view('depan/footer');
	}

	function produk()
	{
		$data['page'] = 'produk';
		$data['web'] = $this->pengaturan_model->get(1);

		// load library pagination
		$this->load->library('pagination');

		//pagination settings
		$config['base_url'] = site_url("welcome/produk/");
		$config['total_rows'] = count($this->produk_model->get_by_jenis("barang"));
		$config['per_page'] = 9;
		$config["uri_segment"] = 3;
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

		$dari_offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['produk'] = $this->produk_model->get_by_jenis_pagination("barang", $config['per_page'], $dari_offset);


		$this->load->view('depan/navbar',  $data);
		$this->load->view('depan/header', $data);
		$this->load->view('depan/content');
		$this->load->view('depan/footer');
	}


	function jasa()
	{
		$data['page'] = 'jasa';
		$data['web'] = $this->pengaturan_model->get(1);

		// load library pagination
		$this->load->library('pagination');

		//pagination settings
		$config['base_url'] = site_url("welcome/jasa/");
		$config['total_rows'] = count($this->produk_model->get_by_jenis("jasa"));
		$config['per_page'] = 9;
		$config["uri_segment"] = 3;
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

		$dari_offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['produk'] = $this->produk_model->get_by_jenis_pagination("jasa", $config['per_page'], $dari_offset);


		$this->load->view('depan/header', $data);
		$this->load->view('depan/navbar',  $data);
		$this->load->view('depan/content');
		$this->load->view('depan/footer');
	}

	function promo()
	{
		$data['page'] = 'promo';
		$data['web'] = $this->pengaturan_model->get(1);

		// load library pagination
		$this->load->library('pagination');

		//pagination settings
		$config['base_url'] = site_url("welcome/promo/");
		$config['total_rows'] = count($this->produk_model->get_by_jenis("promo"));
		$config['per_page'] = 9;
		$config["uri_segment"] = 3;
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

		$dari_offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['produk'] = $this->produk_model->get_by_jenis_pagination("promo", $config['per_page'], $dari_offset);



		$this->load->view('depan/navbar',  $data);
		$this->load->view('depan/header', $data);
		$this->load->view('depan/content');
		$this->load->view('depan/footer');
	}

	function paket()
	{
		$data['page'] = 'paket';
		$data['web'] = $this->pengaturan_model->get(1);

		// load library pagination
		$this->load->library('pagination');

		//pagination settings
		$config['base_url'] = site_url("welcome/paket/");
		$config['total_rows'] = count($this->produk_model->get_by_jenis("paket"));
		$config['per_page'] = 9;
		$config["uri_segment"] = 3;
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

		$dari_offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['produk'] = $this->produk_model->get_by_jenis_pagination("paket", $config['per_page'], $dari_offset);



		$this->load->view('depan/navbar',  $data);
		$this->load->view('depan/header', $data);
		$this->load->view('depan/content');
		$this->load->view('depan/footer');
	}


	function tentang()
	{
		$data['page'] = 'tentang';

		$data['web'] = $this->pengaturan_model->get(1);


		$this->load->view('depan/navbar',  $data);
		$this->load->view('depan/header', $data);
		$this->load->view('depan/content');
		$this->load->view('depan/footer');
	}

	function kontak()
	{
		$data['page'] = 'kontak';
		$data['web'] = $this->pengaturan_model->get(1);


		$this->load->view('depan/navbar',  $data);
		$this->load->view('depan/header', $data);
		$this->load->view('depan/content');
		$this->load->view('depan/footer');
	}
	function detailresep()
	{
		$data['page'] = 'detailresep';
		$data['web'] = $this->pengaturan_model->get(1);
		if (isset($_POST['detail'])) {
			$data['produk'] = $this->produk_model->get_by_id_2($this->input->post('id'));
		}

		$this->load->view('depan/header', $data);
		$this->load->view('depan/navbar');
		$this->load->view('depan/content', $data);
		$this->load->view('depan/footer');
	}
	function makanan()
	{
		$data['page'] = 'makanan';
		$data['web'] = $this->pengaturan_model->get(1);
		$data['resep_makanan'] = $this->resep_model->getallresep();

		$this->load->view('depan/header', $data);
		$this->load->view('depan/navbar',  $data);
		$this->load->view('depan/content');
		$this->load->view('depan/footer');
	}
}
