<?php
include "data/database.php";
session_start();

if (!isset($_SESSION["login_pasien"])) {
    header("Location: login.php");
    exit();
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
                        $rm_id = generateID("tb_reservasi", "ID_RESERVASI", "RE");
                        ?>
                        <label for="id_rm" class="form-label h6">ID RM</label>
                        <input class="form-control bg-secondary-subtle" readonly type="text" name="id_rm" id="id_rm" value="<?= $rm_id ?>">
                    </div>
                    <div class="mb-3">
                        <?php
                        date_default_timezone_set("Asia/Jakarta");
                        $tanggal = date("Y/m/d");
                        ?>
                        <label for="tgl_periksa" class="form-label h6">Tanggal Periksa</label>
                        <input type="text" class="form-control" name="tgl_periksa" id="tgl_periksa" value="<?= $tanggal ?>">
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