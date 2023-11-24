<?php
session_start();

include "data/database.php";

if (!isset($_SESSION["login_pasien"])) {
    header("login.php");
    exit;
}
$id_pasien = $_SESSION["id_pasien"];

$data_pasien = isset($_SESSION["username_pasien"]) ? getDataPasien($_SESSION["username_pasien"]) : "";

$data_reservasi_rm = getDataAntrianAndPemeriksaanByIdPasien($id_pasien);

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
                            <th>ID</th>
                            <th>TANGGAL</th>
                            <th>NOMOR ANTRIAN</th>
                            <th>NAMA PASIEN</th>
                            <th>KELUHAN</th>
                            <th>DIAGNOSA</th>
                            <th>HASIL PEMERIKSAAN</th>
                            <th>TINDAKAN PEMERIKSAAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data_reservasi_rm)) : $no = 1 ?>
                            <?php foreach ($data_reservasi_rm as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data["ID_PEMERIKSAAN"] ?></td>
                                    <td><?= $data["TGL_RESERVASI"] ?></td>
                                    <td><?= $data["NO_ANTRIAN"] ?></td>
                                    <td><?= $data["NAMA_PASIEN"] ?></td>
                                    <td><?= $data["KELUHAN"] ?></td>
                                    <td><?= $data["DIAGNOSA"] ?></td>
                                    <td><?= $data["HASIL_PEMERIKSAAN"] ?></td>
                                    <td><?= $data["TINDAKAN"] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td class="text-center fw-bold" colspan="9">Belum ada data</td>
                            </tr>
                        <?php endif; ?>

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