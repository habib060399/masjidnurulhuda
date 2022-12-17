<?php
class TampilPetugas extends CI_Model
{
    public function getPetugas()
    {
        $this->db->select('*');
        $this->db->from('tbl_petugas');
        $query = $this->db->get();
        return $query;
    }

    public function hapusPetugas($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('tbl_petugas');
    }

    public function getPetugasById($id)
    {
        return $this->db->get_where('tbl_petugas', ['id_petugas' => $id])->row_array();
    }

    public function ubahData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function updatePetugas($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id_petugas', $id);
        $this->db->update('tbl_petugas');
    }
}
