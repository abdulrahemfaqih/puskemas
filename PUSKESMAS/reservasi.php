<?php
include "data/database.php";
session_start();

if (!empty($_SESSION["id_pasien"])) {
    $id_pasien = $_SESSION["id_pasien"];
}


if (empty($_SESSION["login_pasien"])) {
    echo "<script>
        alert('login terlebih dahulu');
        window.location.href = 'index.php'
    </script>";
}


if (isset($_POST["submit"])) {
    $id_reservasi = $_POST["id_pe"];
    $tanggal = $_POST["tgl_reservasi"];
    if (tambahPemeriksaan($_POST)) {
        echo "<script>
        alert('id reservasi $id_reservasi telah dibuat, silah kan datang di tanggal $tanggal ');
        window.location.href = 'profile.php'
        </script>";
    } else {
        echo "<script>
        alert('id reservasi $id_reservasi gagal dibuat');
        window.location.href = 'profile.php'
        </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Puskesmas Reservation</title>
</head>

<body>
    <?php include "layout/navbar.php" ?>
    <div class="container mt-4">
        <h2 class="text-center my-4">Puskesmas Reservation System</h2>
        <div class="card">
            <h5 class="card-header">Form Reservasi</h5>
            <form action="" method="post">
                <div class="card-body">
                    <div class="mb-3">
                        <?php
                        $id_pemeriksann = generateID("tb_pemeriksaan", "ID_PEMERIKSAAN", "PE");
                        $no_antrian = generateNoAntrian();
                        ?>
                        <label for="id_pe" class="form-label">ID RESERVASI</label>
                        <input class="form-control bg-secondary-subtle" readonly type="text" name="id_pe" id="id_pe" value="<?= $id_pemeriksann ?>">
                        <input type="hidden" name="id_pasien" value="<?= $id_pasien ?>">
                        <input type="hidden" name="no_antrian" value="<?= $no_antrian ?>">
                    </div>
                    <div class="mb-3">
                        <?php
                        date_default_timezone_set("Asia/Jakarta");
                        $tanggal = date("Y/m/d");
                        ?>
                        <label for="tgl_reservasi" class="form-label h6">Tanggal Reservasi</label>
                        <input type="text" class="form-control" name="tgl_reservasi" id="tgl_reservasi" value="<?= $tanggal ?>">
                    </div>
                    <div class="mb-3">
                        <label for="keluhan" class="form-label h6">Keluhan</label>
                        <textarea class="form-control" name="keluhan" id="keluhan" rows="3"></textarea>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-success m-2">Simpan</button>
                        <a href="index.php" class="btn btn-warning m-2">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>