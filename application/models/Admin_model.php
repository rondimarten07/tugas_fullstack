<?php

class Admin_model extends CI_Model{

    // public $id;
    // public $nama;
    // public $telepon;
    // public $username;
    // public $password;
    // public $email;
    // public $akses;

    function get(){
        return $this->db->get('admin')->result();
    }
	
	function get_by_id($id){
		$query = $this->db->get_where('admin', array('id' => $id));
		return $query->row();
	}

    function get_by_akses($akses){
        return $this->db->get_where('admin', array( 'akses'=> $akses ))->result();
    }
	
	function get_total($akses=null){
		if($akses==null){
			return $this->db->get('admin')->num_rows();
		} else {
			return $this->db->get_where('admin', array( 'akses'=> $akses ))->num_rows();
		}
	}

    function insert(){
        return $this->db->insert('admin', $this);
    }

    public function get_user($id = 0){
        if($id == 0){
            return $this->db->get('admin')->result();
        } else {
            return $this->db->get_where('admin', array('id' => $id))->row();
        }
    }

    public function cek_user($username, $password) {
        $this->db->where("email='$username' or username='$username'");
        $this->db->where('password', $password);
        $query = $this->db->get('admin');

        return $query->row_array();
    }

    public function update($id){
        return $this->db->update('admin', $this, array('id' => $id));
    }

    public function delete($id){
        return $this->db->delete('admin', array('id' => $id));
    }

    public function cek_session() {
        $user = $this->session->userdata('username');
        
        if (empty($user)) {
            $this->session->sess_destroy();
            redirect(site_url('admin/login')); // suruh login
        }
    }

}
