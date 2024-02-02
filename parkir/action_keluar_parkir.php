<?php
//panggil/sertakan file koneksi database
include 'koneksi_db.php';

if (isset($_POST)) {
    //ambil nilai inputan kodeparkir
    $kodeParkir = $_POST['kode_parkir'];
    //masukkan waktu masuk parkir secara otomatis dengan fungsi date()
    date_default_timezone_set('Asia/Jakarta');
    $waktuKeluar = date("Y-m-d H:i:s");
    $status = 'keluar';
    //buat query/perintah untuk membaca atau menampilkan tiap data dari tabel di database
    $query = "UPDATE tbl_kendaraan SET waktu_keluar='$waktuKeluar', status='$status' WHERE kode_parkir='$kodeParkir'";

    //jalankan perintah/query yang telah dibuat
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo 'data berhasil diubah';
        header("Location: biaya_parkir.php?kodeParkir=$kodeParkir");
    } else {
        echo 'data gagal diubah'. mysqli_error($koneksi);
    }
    

}


?>