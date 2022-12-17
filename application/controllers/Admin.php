<?php
defined('BASEPATH') or exit('No direct script access allowed');
include "application/controllers/Fungsi.php";

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("AdminModel");
        $this->load->helper("Fungsi");
        $this->load->model("TampilPetugas");
    }

    public function index()
    {
        $data['tbl_petugas'] = $this->TampilPetugas->getPetugas()->result_array();
        $petugas = $this->TampilPetugas->getPetugas();
        $data = array(
            'petugas' => $petugas
        );
        $this->load->view('admin/index', $data);
    }
    // Halaman Data Petugas
    public function data_petugas()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/contents/inputdatapetugas');
        $this->load->view('admin/footer');
    }
    // End Halaman Data Petugas 
    public function tambah_petugas()
    {
        $id_admin = $_SESSION['id_admin'];
        $idpt = $this->input->post('idpt');
        $nama_petugas = $this->input->post('nama_petugas');
        $no_ktp = $this->input->post('no_ktp');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password2 = password_hash($password, PASSWORD_DEFAULT);


        $data = array(
            'id_admin' => $id_admin,
            'id_petugas' => $idpt,
            'nama' => $nama_petugas,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'no_hp'  => $no_hp,
            'username' => $username,
            'password' => $password2,
        );
        var_dump($password2);
        $this->AdminModel->insertpetugas($data);
        redirect(base_url('Admin/data_petugas'));
    }

    public function hapus($id)
    {
        $this->TampilPetugas->hapusPetugas($id);
        redirect('admin/listdatapetugas');
    }

    public function editPetugas($id)
    {
        $where = array('id_petugas' => $id);
        $data['petugas'] = $this->TampilPetugas->ubahData($where, 'tbl_petugas')->result_array();
        $this->load->view('admin/header');
        $this->load->view('updatedatapetugas', $data);
        $this->load->view('admin/footer');
    }

    public function updateAksi($id)
    {

        $id_petugas = $this->input->post('id_petugas');
        $nama = $this->input->post('nama');
        $no_ktp = $this->input->post('no_ktp');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id_admin = $_SESSION['id_admin'];

        $data = array(

            'id_petugas' => $id_petugas,
            'nama' => $nama,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'no_hp'  => $no_hp,
            'username' => $username,
            'password' => $password,
            'id_admin' => $id_admin
        );

        $this->TampilPetugas->updatePetugas($data, $id);
        redirect('admin/listdatapetugas');
    }

    //     public function delete_petugas($id_petugas)
    //     {
    //         $this->load->model("AdminModel");
    //         $this->AdminModel->delete_petugas($id_petugas);

    // }
    public function listdatapetugas()
    {
        $data['tbl_petugas'] = $this->AdminModel->listpetugas();
        $this->load->view('admin/header');
        $this->load->view('admin/contents/listdatapetugas', $data);
        $this->load->view('admin/footer');
    }
    public function inputdatauser()
    {

        $this->load->view('admin/header');
        $this->load->view('admin/contents/inputdatauser');
        $this->load->view('admin/footer');
    }

    public function listdatauser()
    {
        $data['tbl_user'] = $this->AdminModel->listuser();
        $this->load->view('admin/header');
        $this->load->view('admin/contents/listdatauser', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_kategori()
    {
        $idkt = $this->input->post('idkt');
        $nama_kategori = $this->input->post('nama_kategori');
        $data = array(
            'id_kategori' => $idkt,
            'nama_kategori' => $nama_kategori,
        );
        //var_dump($data);
        $this->AdminModel->insertkategori($data);
        redirect(base_url('Admin/kategori'));
    }

    public function kategori()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/contents/kategori',);
        $this->load->view('admin/footer');
    }

    public function listdatakategori()
    {
        $data['tbl_kategori'] = $this->AdminModel->listkategori();
        $this->load->view('admin/header');
        $this->load->view('admin/contents/listdatakategori', $data);
        $this->load->view('admin/footer');
    }
    public function backup()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/contents/backup');
        $this->load->view('admin/footer');
    }
    public function bkup()
    {
        $this->load->helpers('Database_backup');
    }
    public function restore()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/contents/restore');
        $this->load->view('admin/footer');
    }
    public function laporan()
    {

        $data['tbl_petugas'] = $this->AdminModel->listpetugas();
        $this->load->view('admin/header');
        $this->load->view('admin/contents/cetakPetugas', $data);
        $this->load->view('admin/footer');
    }
    public function log()
    {
        $jumlah_data = $this->AdminModel->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'admin/log';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['data_log'] = $this->AdminModel->getLog($config['per_page'], $from);
        $this->load->view('admin/header');
        $this->load->view('admin/contents/log', $data);
        $this->load->view('admin/footer');
    }
}
