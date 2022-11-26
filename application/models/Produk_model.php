<?php

class Produk_model extends CI_Model
{

    // public $id;
    // public $nama;
    // public $jenis;
    // public $keterangan;
    // public $harga;
    // public $foto;

    function get()
    {
        $this->db->order_by('tanggal DESC');
        return $this->db->get('produk')->result();
    }

    function get_by_jenis($jenis)
    {
        $this->db->order_by('tanggal DESC');
        return $this->db->get_where('produk', array('jenis' => $jenis))->result();
    }

    function get_pagination($limit, $offset)
    {
        $this->db->order_by('tanggal DESC');
        return $this->db->get('produk', $limit, $offset)->result();
    }

    function get_by_jenis_pagination($jenis, $limit, $offset)
    {
        $this->db->order_by('tanggal DESC');
        return $this->db->get_where('produk', array('jenis' => $jenis), $limit, $offset)->result();
    }

    function get_total($jenis = null)
    {
        if ($jenis == null) {
            return $this->db->get('produk')->num_rows();
        } else {
            return $this->db->get_where('produk', array('jenis' => $jenis))->num_rows();
        }
    }

    function insert()
    {
        return $this->db->insert('produk', $this);
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('produk', array('id' => $id));
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return 0;
        }
    }
    public function get_by_id_2($id)
    {
        $query = $this->db->get_where('produk', array('id' => $id));
        return $query->result_array();
    }

    public function update($id)
    {
        return $this->db->update('produk', $this, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete('produk', array('id' => $id));
    }
}
