<?php

class UserModel extends CI_Model
{
    public function getAgenda()
    {
        $this->db->select('*');
        $this->db->from('tbl_agenda');
        $query = $this->db->get();
        return $query;
    }

    public function getAlbum()
    {
        $this->db->select('*');
        $this->db->from('tbl_album');
        $query = $this->db->get();
        return $query;
    }

    public function getPemasukan()
    {
        $this->db->select('*');
        $this->db->from('tbl_pemasukan');
        $this->db->order_by('id_pemasukan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getPengeluaran()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengeluaran');
        $query = $this->db->get();
        return $query;
    }

    public function insertSedekah($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function insertPemasukan($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    //punya bima
    public function tampilPemasukan()
    {
        $this->db->select('*');
        $this->db->from('tbl_pemasukan');
        $query = $this->db->get();
        return $query;
    }

    //punya bima
    public function tampilSedekah()
    {
        $this->db->select('*');
        $this->db->from('tbl_transfer');
        $query = $this->db->get();
        return $query;
    }
}
