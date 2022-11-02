<?php

class Pengaturan_model extends CI_Model {
	
	private $tabel = 'setting';
	
	function get($id = null){
		$query = $this->db->get_where($this->tabel, array('id'=>$id));
		return $query->row();
	}
	
	function update($id){
		$this->db->update($this->tabel, $this, array('id'=>$id));
	}
}