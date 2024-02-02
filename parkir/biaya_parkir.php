<?php
include 'koneksi_db.php';
if (isset($_GET)) {
    $kodeParkir = $_GET['kodeParkir'];
    //buat query/perintah untuk membaca atau menampilkan tiap data dari tabel di database
    $query = "SELECT * FROM tbl_kendaraan,tbl_biaya WHERE kode_parkir='$kodeParkir' AND tbl_kendaraan.jenis_kendaraan = tbl_biaya.kendaraan";
    
    //jalankan perintah/query yang telah dibuat
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        foreach ($result as $row) {
            //mengambil waktu keluar dan waktu masuk dan jenis kendaraan
            //fungsi new DateTime untuk mengubah huruf menjadi format waktu
            $waktuMasuk = new DateTime($row['waktu_masuk']);
            $waktuKeluar = new DateTime($row['waktu_keluar']);

            //menghitung selisih waktu menggunakan fungsi date_diff()
            $selisihWaktu = date_diff($waktuMasuk, $waktuKeluar);

            echo "waktu parkir = $selisihWaktu->h jam";

        }
    } else {
        echo "tidak ada data";
    }
    
}

?>