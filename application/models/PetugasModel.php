<?php

class PetugasModel extends CI_Model
{
    public function getProfit()
    {
        $this->db->select('*');
        $this->db->from('tbl_dana');
        $this->db->join('tbl_kategori', 'id_kategori');
        $query = $this->db->get();
        return $query;
    }



    public function insert_pembayaran($data)
    {
        $this->db->insert('tbl_sementara', $data);
    }

    public function insert_prosespembayaran($data)
    {
        // $gettotal = $this->db->select_sum('jumlah')->from('tbl_sementara')->get()->result_array();
        // return $gettotal;
        $tambah = $this->db->insert('tbl_pemasukan', $data);
        if ($tambah != 0) {
            // $res = $this->db->query('INSERT INTO tbl_pemasukan');
            $res = $this->db->select('*')->from('tbl_sementara')->get();
            foreach ($res->result_array() as $r) {
                $r1 = $r['id_pemasukan'];
                $r2 = $r['id_kategori'];
                $r3 = $r['jumlah'];
                $dat = array(
                    'id_pemasukan' => $r1,
                    'id_kategori' => $r2,
                    'jumlah' => $r3
                );
                $this->db->set($dat)->from('tbl_detailpemasukan');
                $this->db->insert('tbl_detailpemasukan', $dat);
            }
            $this->db->select('*')->truncate('tbl_sementara');
        } else {
            echo "GAGAL TAMBAH DATA";
        }
    }

    public function get_pembayaransmtr2($idtrx)
    {
        $this->db->select('tbl_kategori.id_kategori,tbl_kategori.nama_kategori,tbl_sementara.jumlah');
        $this->db->from('tbl_sementara');
        $this->db->join('tbl_kategori', 'id_kategori');
        $this->db->where('id_pemasukan', $idtrx);
        $query = $this->db->get();
        return $query;
    }

    public function get_pembayaransmtr()
    {
        $this->db->select('tbl_kategori.id_kategori,tbl_kategori.nama_kategori,tbl_sementara.jumlah');
        $this->db->from('tbl_sementara');
        $this->db->join('tbl_kategori', 'id_kategori');
        $query = $this->db->get();
        return $query;
    }

    public function get_totalpembayaran()
    {
        $this->db->select_sum('jumlah');
        $this->db->from('tbl_sementara');
        $query = $this->db->get();
        return $query;
    }

    public function get_idpemasukan()
    {
        $this->db->select_max('id_pemasukan');
        $this->db->from('tbl_sementara');
        $query = $this->db->get();
        return $query;
    }

    public function viewPembayaran()
    {
        $this->db->select('*');
        $this->db->from('tbl_pemasukan');
        $this->db->order_by('id_pemasukan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getDetailBayar($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_pemasukan');
        // $this->db->join('tbl_kategori', 'id_kategori');
        // $this->db->join('tbl_pemasukan', 'id_pemasukan');
        $this->db->where('id_pemasukan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getDetailBayar2($id)
    {
        $this->db->select('tbl_kategori.nama_kategori, tbl_detailpemasukan.jumlah');
        $this->db->from('tbl_detailpemasukan');
        $this->db->join('tbl_kategori', 'id_kategori');
        // $this->db->join('tbl_pemasukan', 'id_pemasukan');
        $this->db->where('id_pemasukan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getKategori()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $query = $this->db->get();
        return $query;
    }

    public function getTransfer()
    {
        $this->db->select('*');
        $this->db->from('tbl_transfer');
        $query = $this->db->get();
        return $query;
    }

    public function updateTransfer($status, $id)
    {
        $this->db->set('status', $status);
        $this->db->where('id_transfer', $id);
        $this->db->update('tbl_transfer');
    }


    public function insertPengeluaran($data)
    {
        $this->db->insert('tbl_pengeluaran', $data);
    }

    public function getPengeluaran()
    {
        $query = $this->db->select('*')->from('tbl_pengeluaran')->get();
        return $query;
    }

    public function getpemasukan()
    {
        $this->db->select('*');
        $this->db->from('tbl_pemasukan');
        $this->db->order_by('id_pemasukan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function insertAgenda($data)
    {
        $this->db->insert('tbl_agenda', $data);
    }

    public function getagenda()
    {
        $this->db->select('*');
        $this->db->from('tbl_agenda');
        $query = $this->db->get();
        return $query;
    }

    public function insertfoto($data)
    {
        $this->db->insert('tbl_album', $data);
    }

    public function getfoto()
    {
        $query = $this->db->select('*')->from('tbl_album')->get();
        return $query;
    }

    public function deletefoto($id)
    {
        $this->db->query("DELETE FROM tbl_album WHERE id_album=$id");
    }
}
