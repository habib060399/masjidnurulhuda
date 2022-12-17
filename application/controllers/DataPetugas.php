<?php
class DataPetugas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("TampilPetugas");
    }

    public function index()
    {
    }
}
