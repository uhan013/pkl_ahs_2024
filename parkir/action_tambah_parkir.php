<?php
include 'koneksi_db.php';

if (isset($_POST)) {
    //mengambil nilai dari kolom/field inputan yang telah dibuat dan disimpan dalam variabel
    $jenisKendaraan = $_POST['jenis_kendaraan'];
    $nomorPlat = $_POST['nomor_plat'];
    //masukkan waktu masuk parkir secara otomatis dengan fungsi date()
    date_default_timezone_set('Asia/Jakarta');
    $waktuMasuk = date("Y-m-d H:i:s");
    $status = 'parkir';
    //membuat kode parkir dengan menggabungkan nomor plat dan waktu masuk parkir
    $kodeWaktu = date("dHi");
    $kodeParkir = $nomorPlat.$kodeWaktu;
    
    //inputan yang sudah disimpan di variabel ke database
    $query = "INSERT INTO tbl_kendaraan (id_kendaraan, jenis_kendaraan, nomor_plat, waktu_masuk, status, kode_parkir) VALUES ('','$jenisKendaraan', '$nomorPlat', '$waktuMasuk','$status', '$kodeParkir')";

    //jalankan atau eksekusi perintah query yang sudah dibuat
    $result = mysqli_query($koneksi, $query);
    
    //cek apakah perintah/query yang dijalankan berhasil masuk ke database atau tidak
    if ($result) {
        //jika perintah/query berhasil
        echo "data berhasil dimasukkan";
        header("Location: index.php");
    } else {
        //jika perintah/query gagal
        echo "data gagal dimasukkan : ".mysqli_error($koneksi);
    } 
}

?>