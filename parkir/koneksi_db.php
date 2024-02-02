<?php
//ambil konfigurasi settingan pada database
$namaServer = "localhost";
$username = "root";
$password = "";
$database = "pkl_parkir";

//membuat koneksi php dengan sql/database menggunakan mysqli_connect()
$koneksi = mysqli_connect($namaServer, $username, $password, $database);

//cek apakah koneksi berhasil atau tidak
if (!$koneksi) {
    //jika koneksi gagal
    die("Koneksi ke database gagal : ".mysqli_connect_error());
}

?>