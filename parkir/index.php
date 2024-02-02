<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Parkir</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card my-5">
                    <div class="card-header">
                        <h2 class="h2">Tambah Kendaraan Parkir</h2>
                    </div>
                    <div class="card-body">
                        <form action="action_tambah_parkir.php" method="post"> 
                            <div class="form-group">
                                <label for="jenis_kendaraan_id" class="form-label">Jenis Kendaraan</label>
                                <select class="form-select" name="jenis_kendaraan" id="jenis_kendaraan_id" required>
                                    <option value="">---pilih jenis kendaraan---</option>
                                    <option value="motor">Sepeda Motor</option>
                                    <option value="mobil">Mobil</option>
                                    <option value="bis">Bis</option>
                                    <option value="truk">Truk</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nomor_plat_id">Nomor Plat</label>
                                <input class="form-control" type="text" name="nomor_plat" id="nomor_plat_id" required placeholder="masukkan nomor plat kendaraan...">
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card my-5">
                    <div class="card-header">
                        <h2 class="h2">Keluar Parkir</h2>
                    </div>
                    <div class="card-body">
                        <form action="action_keluar_parkir.php" method="post">
                            <div class="form-group">
                                <label class="form-label" for="kode_parkir_id">Kode Parkir</label>
                                <input class="form-control" type="text" name="kode_parkir" id="kode_parkir_id" required placeholder="masukkan kode parkir...">
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        //panggil/sertakan file koneksi database
        include 'koneksi_db.php';
        
        //buat query/perintah untuk membaca atau menampilkan tiap data dari tabel di database
        $query = "SELECT * FROM tbl_kendaraan WHERE status='parkir'";
        
        //jalankan perintah/query yang telah dibuat
        $result = mysqli_query($koneksi, $query);
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h2">Daftar Kendaraan Parkir</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Kode Parkir</td>
                                    <td>Nomor Plat</td>
                                    <td>Jenis Kendaraan</td>
                                    <td>Waktu Masuk</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            //cek apakah ada data yang dibaca dari query
                            if (mysqli_num_rows($result) > 0 ) {
                                $nomor = 1;
                                //tampilkan data dari tiap baris di tabel database ke dalam html menggunakan perulangan
                                while ($row = mysqli_fetch_array($result)) {

                            ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo $row['kode_parkir'] ?></td>
                                    <td><?php echo $row['nomor_plat'] ?></td>
                                    <td><?php echo $row['jenis_kendaraan'] ?></td>
                                    <td><?php echo $row['waktu_masuk'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                </tr>
                            <?php
                                    $nomor++;
                                }
                            } else {
                                //jika tidak ada data dari tabel di database maka tampilkan pesan berikut
                                echo "tidak ada data dalam tabel di database";
                            }
                            ?>
                            </tbody>
                        </table>                        
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>
</html>