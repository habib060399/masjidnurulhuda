<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("UserModel");
        $this->load->model("PetugasModel");
        $this->load->helper("Fungsi");
    }
    public function index()
    {
        $data['tbl_transfer'] = $this->UserModel->tampilSedekah()->result_array();
        $donasi = $this->UserModel->tampilSedekah();

        $agenda = $this->UserModel->getAgenda();
        $album = $this->UserModel->getAlbum();
        $pemasukan = $this->UserModel->getPemasukan();
        $pengeluaran = $this->UserModel->getPengeluaran();
        $kategori = $this->PetugasModel->getKategori();
        $data = array(
            'kategori' => $kategori,
            'pengeluaran' => $pengeluaran,
            'pemasukan' => $pemasukan,
            'album' => $album,
            'agenda' => $agenda,
            'donasi' => $donasi
        );
        $this->load->view('sidebar');
        $this->load->view('slider');
        $this->load->view('home', $data);
    }

    public function getAgenda()
    {
        $data['tbl_agenda'] = $this->UserModel->getAgenda();
        $this->load->view('sidebar');
        $this->load->view('slider');
        $this->load->view('home', $data);
    }

    public function tambahtransfer()
    {
        $this->load->view('home');
    }

    public function tambahAksi()
    {
        $this->load->helpers('Fungsi');
        $apaaja = idtf();
        if (isset($_POST['Submit'])) {
            $id_transfer = $this->input->post('id_transfer');
            $nama = $this->input->post('nama');
            $no_rekening = $this->input->post('no_rekening');
            $nama_bank = $this->input->post('nama_bank');
            $jumlah = $this->input->post('jumlah');
            $tgl_transfer = $this->input->post('tgl_transfer');
            $status = $this->input->post('status');

            $config['upload_path'] = 'assets/foto/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; //kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $hasil = $this->upload->data();

            if (!empty($hasil['file_name'])) {
                $data = array(
                    'id_transfer' => $id_transfer,
                    'nama' => $nama,
                    'no_rekening' => $no_rekening,
                    'nama_bank' => $nama_bank,
                    'jumlah' => $jumlah,
                    'tgl_transfer' => $tgl_transfer,
                    'status' => $status,
                    'image' => $hasil['file_name']
                );
                var_dump($data);


                $this->UserModel->insertSedekah('tbl_transfer', $data);
                redirect('User/index');
            } else {
                echo "Tes123";
            }
        } else {
            echo "Tidak masuk";
        }
    }
}
