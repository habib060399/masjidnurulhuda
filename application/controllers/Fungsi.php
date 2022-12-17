<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Fungsi extends CI_Controller
{
    public function rupiah($angka)
    {
        $hasil_rupiah = "RP" . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }
}
