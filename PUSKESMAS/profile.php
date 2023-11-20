<?php
session_start();

include "data/database.php";

if (!isset($_SESSION["login"])) {
    header("login.php");
    exit;
}

$data_pasien = isset($_SESSION["username"]) ? getDataPasien($_SESSION["username"]) : "";
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" id="home">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="front/css/bootstrap.min (1).css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="front/css/style.css">
</head>

<body>
    <?php include "layout/navbar.php" ?>
    <section class="about">
        <div class="container mt-4">
            <h2>PROFILE</h2>
            <?php if ($data_pasien) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <label for="idPasien">ID Pasien:</label>
                        <p><?php echo $data_pasien["ID_PASIEN"]; ?></p>

                        <label for="namaPasien">Nama Pasien:</label>
                        <p><?php echo $data_pasien["NAMA_PASIEN"]; ?></p>

                        <label for="telp">Telepon:</label>
                        <p><?php echo $data_pasien["TELP"]; ?></p>

                        <label for="alamat">Alamat:</label>
                        <p><?php echo $data_pasien["ALAMAT"]; ?></p>
                    </div>
                    <div class="col-md-6">
                        <label for="jenisKelamin">Jenis Kelamin:</label>
                        <p><?php echo $data_pasien["JENIS_KELAMIN"]; ?></p>

                        <label for="email">Email:</label>
                        <p><?php echo $data_pasien["EMAIL"]; ?></p>

                        <!-- Password is intentionally not displayed -->
                    </div>
                </div>
            <?php else : ?>
                <p>Data pasien tidak ditemukan.</p>
            <?php endif; ?>
            <h3 class="text-center">RIWAYAT RESERVASI DAN REKAM MEDIS</h3>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th>NO</th>
                            <th>ID RM</th>
                            <th>TANGGAL</th>
                            <th>NAMA PASIEN</th>
                            <th>KELUHAN</th>
                            <th>DIAGNOSA</th>
                            <th>HASIL PEMERIKSAAN</th>
                            <th>TINDAKAN PEMERIKSAAN</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </section>






    <script src="front/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>