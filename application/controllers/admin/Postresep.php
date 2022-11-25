<?php defined('BASEPATH') or exit('No direct script access allowed');

class Postresep extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //$this->admin_model->cek_session();
        $this->load->model('resep_model');
    }

    function tambahresep()
    {
        if (isset($_POST['tambah'])) {
            $selected_val = $_POST['jenis_resep'];
            $this->resep_model->insert_resep($selected_val);
            redirect('');
        }
    }
}
