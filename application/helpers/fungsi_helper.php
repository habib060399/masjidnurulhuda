<?php

function rupiah($angka)
{
    $hasil_rupiah = "Rp. " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

function idpm()
{
    require "application/config/database.php";
    $host = $dbhelper['hostname2'];
    // var_dump($host);
    // var_dump($i);
    $username = $dbhelper['username2'];
    $password = $dbhelper['password2'];
    $database_name = $dbhelper['database2'];
    $conn = mysqli_connect($host, $username, $password, $database_name);
    $query  = "SELECT max(id_pemasukan) as maxID FROM tbl_pemasukan";
    $tampil = mysqli_query($conn, $query);
    $data   = mysqli_fetch_array($tampil);
    $idPM  = $data['maxID'];
    $noUrut  = (int) substr($idPM, 3, 3);
    $noUrut++;

    $char    = "PM";
    $newPM   = $char . sprintf("-%03s", $noUrut);

    echo $newPM;
}

function idtf()
{
    require "application/config/database.php";
    $host = $dbhelper['hostname2'];
    // var_dump($host);
    // var_dump($i);
    $username = $dbhelper['username2'];
    $password = $dbhelper['password2'];
    $database_name = $dbhelper['database2'];
    $conn = mysqli_connect($host, $username, $password, $database_name);
    $query  = "SELECT max(id_transfer) as maxID FROM tbl_transfer";
    $tampil = mysqli_query($conn, $query);
    $data   = mysqli_fetch_array($tampil);
    $idPM  = $data['maxID'];
    $noUrut  = (int) substr($idPM, 3, 3);
    $noUrut++;

    $char    = "TF";
    $newPM   = $char . sprintf("-%03s", $noUrut);

    echo $newPM;
}

function idpg()
{

    require "application/config/database.php";
    $host = $dbhelper['hostname2'];
    // var_dump($host);
    // var_dump($i);
    $username = $dbhelper['username2'];
    $password = $dbhelper['password2'];
    $database_name = $dbhelper['database2'];
    $kon = mysqli_connect($host, $username, $password, $database_name);
    $query  = "SELECT max(id_pengeluaran) as maxID FROM tbl_pengeluaran";
    $tampil = mysqli_query($kon, $query);
    $data   = mysqli_fetch_array($tampil);
    $idPG  = $data['maxID'];
    $noUrut  = (int) substr($idPG, 3, 3);
    $noUrut++;

    $char    = "PG";
    $newPG   = $char . sprintf("-%03s", $noUrut);

    return $newPG;
}

function idpt()
{
    // $kon = mysqli_connect("", "root", "", "db_masjid");
    require "application/config/database.php";
    $host = $dbhelper['hostname2'];
    // var_dump($host);
    // var_dump($i);
    $username = $dbhelper['username2'];
    $password = $dbhelper['password2'];
    $database_name = $dbhelper['database2'];
    $kon = mysqli_connect($host, $username, $password, $database_name);
    $query  = "SELECT max(id_petugas) as maxID FROM tbl_petugas";
    $tampil = mysqli_query($kon, $query);
    $data   = mysqli_fetch_array($tampil);
    $idPT  = $data['maxID'];
    $noUrut  = (int) substr($idPT, 3, 3);
    $noUrut++;

    $char    = "PT";
    $newPG   = $char . sprintf("-%03s", $noUrut);

    return $newPG;
}

function idkt()
{
    require "application/config/database.php";
    $host = $dbhelper['hostname2'];
    // var_dump($host);
    // var_dump($i);
    $username = $dbhelper['username2'];
    $password = $dbhelper['password2'];
    $database_name = $dbhelper['database2'];
    $kon = mysqli_connect($host, $username, $password, $database_name);
    // $kon = mysqli_connect("", "root", "", "db_masjid");
    $query  = "SELECT max(id_kategori) as maxID FROM tbl_kategori";
    $tampil = mysqli_query($kon, $query);
    $data   = mysqli_fetch_array($tampil);
    $idkT  = $data['maxID'];
    $noUrut  = (int) substr($idkT, 3, 3);
    $noUrut++;

    $char    = "KT";
    $newPG   = $char . sprintf("%02s", $noUrut,);

    return $newPG;
}
