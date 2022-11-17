<?php

class resep_model extends CI_Model
{


    function getallresep()
    {
        return $this->db->get('resep')->result_array();
    }
    function get($id = null)
    {
        $query = $this->db->get_where('resep', array('id' => $id));
        return $query->result_array();
    }

    function insert_resep($n)
    {
        if ($n == "resep") {
            $data = [
                "judul" => $this->input->post('judul', true),
                "resep_makanan" => $this->input->post('deskripsi', true)
            ];
            $this->db->insert($n, $data);
        } else if ($n == "resep_minuman") {
            $data = [
                "judul" => $this->input->post('judul', true),
                "resep_minuman" => $this->input->post('deskripsi', true)
            ];
            $this->db->insert($n, $data);
        }
    }
    function hapusresep_makanan($n)
    {
        $this->db->where('id', $n);
        $this->db->delete('resep');
    }
    function hapusresep_minuman($n)
    {
        $this->db->where('id', $n);
        $this->db->delete('resep_minuman');
    }
    function ubahresep_makanan($n)
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "resep_makanan" => $this->input->post('deskripsi', true)
        ];
        $this->db->where('id', $n);
        $this->db->update('resep', $data);
    }
    function ubahresep_minuman($n)
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "resep_minuman" => $this->input->post('deskripsi', true)
        ];
        $this->db->where('id', $n);
        $this->db->update('resep_minuman', $data);
    }
    function getallresep_minuman()
    {
        return $this->db->get('resep_minuman')->result_array();
    }
    function get_minuman($id = null)
    {
        $query = $this->db->get_where('resep_minuman', array('id' => $id));
        return $query->result_array();
    }
}
