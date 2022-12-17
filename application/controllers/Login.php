<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('administrator');
    }

    public function loginPetugas()
    {
        $mysqli = $this->db->db_connect();
        if (isset($_POST["LoginPetugas"])) {
            $user = $mysqli->escape_string($_POST["username"]);
            $pass = $mysqli->escape_string($_POST["password"]);
            $sql = "SELECT * FROM tbl_petugas
			  WHERE username='$user' ";
            $res = $mysqli->query($sql);
            if (mysqli_num_rows($res) === 1) {

                $data = mysqli_fetch_assoc($res);
                if (password_verify($pass, $data["password"])) {
                    // session_start();
                    $_SESSION["id_petugas"]          = $data["id_petugas"];
                    $_SESSION["username_petugas"]    = $data["username"];
                    $_SESSION["nama_petugas"]        = $data["nama"];
                    // redirect('/petugas/index');
                    redirect(base_url('petugas/index'));
                } else {
                    // $this->load->view('administrator');
                    redirect('administrator');
                }
            }
        }
    }

    public function loginAdmin()
    {
        $mysqli = $this->db->db_connect();
        if (isset($_POST["LoginAdmin"])) {
            $user = $mysqli->escape_string($_POST["username"]);
            $pass = $mysqli->escape_string($_POST["password"]);
            $sql = "SELECT * FROM tbl_admin
			  WHERE username_admin='$user' and password_admin=password('$pass')";
            $res = $mysqli->query($sql);
            if ($res) {
                if ($res->num_rows == 1) {
                    $data = $res->fetch_assoc();
                    $_SESSION["id_admin"]        = $data["id_admin"];
                    $_SESSION["username_admin"]    = $data["username_admin"];
                    $_SESSION["nama_admin"]        = $data["nama_admin"];
                    redirect(base_url('admin/index'));
                    // $this->load->view('admin/index');
                } else {
                    redirect('administrator');
                }
            }
        }
    }
}
