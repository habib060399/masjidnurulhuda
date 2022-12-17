<?php
defined('BASEPATH') or exit('No direct script access allowed');
//include "application/controllers/Fungsi.php";

class AdminModel extends CI_Model
{

    public function insertpetugas($data)
    {
        $this->db->insert('tbl_petugas', $data);
    }

    // public function deletepetugas ($id)
    // {
    //     $this->db->where("id_petugas", $id);
    //     $this->db->delete("tbl_petugas");
    //     return true;

    // }

    public function listpetugas()
    {
        $this->db->select('*');
        $this->db->from('tbl_petugas');
        $query = $this->db->get();
        return $query;
    }

    public function getLog($number, $offset)
    {
        $query = $this->db->get('data_log', $number, $offset);
        return $query->result();
    }

    public function jumlah_data()
    {
        $query = $this->db->get('data_log')->num_rows();
        return $query;
    }

    public function listuser()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $query = $this->db->get();
        return $query;
    }

    public function insertkategori($data)
    {
        $this->db->insert('tbl_kategori', $data);
    }
    public function listkategori()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $query = $this->db->get();
        return $query;
    }
}
