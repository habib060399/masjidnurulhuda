<?php
defined('BASEPATH') or exit('No direct script access allowed');
include "application/controllers/Fungsi.php";

class Petugas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("PetugasModel");
        $this->load->helper("Fungsi");
    }

    public function index()
    {
        // $this->load->view('petugas/header');
        $this->load->view('petugas/index');
        // $this->load->view('petugas/footer');
    }

    public function home()
    {
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/home');
        $this->load->view('petugas/footer');
    }

    public function profit()
    {
        $angka = 0;
        $data['rupiah'] = rupiah($angka);
        $data['profit'] = $this->PetugasModel->getProfit();
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/profit', $data);
        $this->load->view('petugas/footer');
    }

    public function updateStatus($id)
    {
        $data2 = $this->input->post('status');
        $data['status'] = $this->PetugasModel->updateTransfer($data2, $id);

        redirect(base_url('Petugas/cek_transfer'));
    }
    public function cek_transfer()
    {

        $data['transfer'] = $this->PetugasModel->getTransfer();





        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/cek_transfer', $data);
        $this->load->view('petugas/footer');
    }

    public function viewpembayaran()
    {
        $angka  = 0;
        $data['rupiah'] = rupiah($angka);
        $data['viewPembayaran'] = $this->PetugasModel->viewPembayaran();
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/view_pembayaran', $data);
        $this->load->view('petugas/footer');
    }

    public function view_prosespembayaran()
    {
        $idtrx = $_POST['idtrx'];
        $id_pemasukan = $this->PetugasModel->get_idpemasukan();
        $total_pembayaran = $this->PetugasModel->get_totalpembayaran();
        $pembayaran_sementara2 = $this->PetugasModel->get_pembayaransmtr2($idtrx);
        $data = array(
            'id_pemasukan' => $id_pemasukan,
            'total_pembayaran' => $total_pembayaran,
            'pembayaran_sementara2' => $pembayaran_sementara2
        );
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/pembayaran', $data);
        $this->load->view('petugas/footer');
    }

    public function proses_pembayaran()
    {
        $idpm = $this->input->post('idpm');
        $nama = $this->input->post('nama');
        $tgl = $this->input->post('tgl');
        $idpetugas = $_SESSION['id_petugas'];
        $total = $this->PetugasModel->get_totalpembayaran();
        // $tot =  $total['jumlah'];
        foreach ($total->result_array() as $r) {
            $row = $r['jumlah'];
            $data = array(
                'id_pemasukan' => $idpm,
                'id_petugas' => $idpetugas,
                'nama' => $nama,
                'tgl_pemasukan' => $tgl,
                'totalbayar' => $row
            );
        }
        // var_dump($data);
        $this->PetugasModel->insert_prosespembayaran($data);
        redirect('petugas/tambah_pembayaran');
    }

    public function tambah_pembayaran()
    {
        $kategori = $this->PetugasModel->getKategori();
        $pembayaran_sementara = $this->PetugasModel->get_pembayaransmtr();
        $total_pembayaran = $this->PetugasModel->get_totalpembayaran();
        $id_pemasukan = $this->PetugasModel->get_idpemasukan();
        $idpm = idpm();
        $data = array(
            'kategori' => $kategori,
            'idpm' => $idpm,
            'pembayaran_sementara' => $pembayaran_sementara,
            'total_pembayaran' => $total_pembayaran,
            'id_pemasukan' => $id_pemasukan
        );
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/input_pembayaran', $data);
        $this->load->view('petugas/footer');
    }

    public function input_pembayaran()
    {
        $idpm = $this->input->post('idpm');
        $id_kategori = $this->input->post('id_kategori');
        $nominal = $this->input->post('nominal');

        $data = array(
            'id_pemasukan' => $idpm,
            'id_kategori' => $id_kategori,
            'jumlah' => $nominal
        );
        //var_dump($data);
        $this->PetugasModel->insert_pembayaran($data);
        redirect('Petugas/tambah_pembayaran');
    }

    public function detail_bayar($id)
    {
        $data['detailbayar'] = $this->PetugasModel->getDetailBayar($id);
        $data['detailbayar2'] = $this->PetugasModel->getDetailBayar2($id);
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/detail_bayar', $data);
        $this->load->view('petugas/footer');
    }

    public function input_pengeluaran()
    {
        $data['kategori'] = $this->PetugasModel->getKategori();
        $data['idpg'] = idpg();
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/input_pengeluaran', $data);
        $this->load->view('petugas/footer');
    }

    public function tambah_pengeluaran()
    {
        $idpg = $this->input->post('idpg');
        $idkat = $this->input->post('id_kategori');
        $ket = $this->input->post('ket');
        $tgl = $this->input->post('tgl');
        $nominal = $this->input->post('nominal');
        $idpetugas = $_SESSION['id_petugas'];
        $data = array(
            'id_pengeluaran' => $idpg,
            'id_kategori' => $idkat,
            'id_petugas' => $idpetugas,
            'keterangan' => $ket,
            'tgl_pengeluaran' => $tgl,
            'nominal' => $nominal,
        );
        //var_dump($data);
        $this->PetugasModel->insertPengeluaran($data);

        redirect(base_url('Petugas/input_pengeluaran'));
    }

    public function pengeluaran()
    {
        $data['pengeluaran'] = $this->PetugasModel->getPengeluaran();
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/pengeluaran', $data);
        $this->load->view('petugas/footer');
    }

    public function pemasukan()
    {
        $data['getpemasukan'] = $this->PetugasModel->getpemasukan();

        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/pemasukan', $data);
        $this->load->view('petugas/footer');
    }

    public function laporan()
    {
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/laporan');
        $this->load->view('petugas/footer');
    }

    // public function print()
    // {
    //     $this->load->helper('LaporanPemasukan_helper');
    // }

    public function agenda()
    {
        $data['agenda'] = $this->PetugasModel->getagenda();
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/agenda', $data);
        $this->load->view('petugas/footer');
    }

    public function insertagenda()
    {
        $judul = $this->input->post('judul');
        $jamawal = $this->input->post('jamawal');
        $jamakhir = $this->input->post('jamakhir');
        $tglawal = $this->input->post('tglawal');
        $tglakhir = $this->input->post('tglakhir');
        $keterangan = $this->input->post('keterangan');
        $idpetugas = $_SESSION['id_petugas'];

        $data = array(
            'id_petugas' => $idpetugas,
            'judul' => $judul,
            'jam_awal' => $jamawal,
            'jam_akhir' => $jamakhir,
            'tgl_awal' => $tglawal,
            'tgl_akhir' => $tglakhir,
            'keterangan' => $keterangan
        );
        // var_dump($data);
        $this->PetugasModel->insertAgenda($data);
        redirect('petugas/agenda');
    }

    public function album()
    {
        $data['foto'] = $this->PetugasModel->getfoto();

        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/album', $data);
        $this->load->view('petugas/footer');
    }

    public function deletefoto($id)
    {
        $this->PetugasModel->deletefoto($id);
        redirect('petugas/album');
    }

    public function upload()
    {
        if (isset($_POST['kirim'])) {
            $idpetugas = $_SESSION['id_petugas'];
            $tgl = date('Ymd');

            $config['upload_path'] = 'assets/foto/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; //kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('fupload');
            $hasil = $this->upload->data();
            if (!empty($hasil['file_name'])) {
                $data = array(
                    'id_petugas' => $idpetugas,
                    'file_name' => $hasil['file_name'],
                    'tgl_upload' => $tgl
                );
                // var_dump($data);
                $this->PetugasModel->insertfoto($data);
                redirect('petugas/album');
            }
        }
    }

    public function backup()
    {

        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/backup');
        $this->load->view('petugas/footer');
    }

    public function prosesbackup()
    {
        $this->load->helper('Database_backup_helper');
    }

    public function restore()
    {
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/restore');
        $this->load->view('petugas/footer');
    }
    public function cetakPemasukan()
    {
        $data['getpemasukan'] = $this->PetugasModel->getpemasukan();

        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/cetakPemasukan', $data);
        $this->load->view('petugas/footer');
    }
    public function cetakPengeluaran()
    {
        $data['pengeluaran'] = $this->PetugasModel->getPengeluaran();
        $this->load->view('petugas/header');
        $this->load->view('petugas/contents/cetakPengeluaran', $data);
        $this->load->view('petugas/footer');
    }
}
