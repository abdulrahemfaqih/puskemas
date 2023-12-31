<?php
session_start();
include "../data/database.php";
if (empty($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET["id_pemeriksaan"])) {
    $id_pemeriksaan = $_GET["id_pemeriksaan"];
    $data_id_pemeriksaan = getDataAntrianAndPemeriksaanByIdPem($id_pemeriksaan);
}

if (isset($_POST["proses"])) {

    if (updatePemeriksaanById($_POST)) {
        $id_pemeriksaan = $_POST["id_pemeriksaan"];
        echo "<script>
        alert('id pemerikaan $id_pemeriksaan berhasil diproses')
        window.location.href = 'antrian.php?tab=antrian'
        </script>";
    } else {
        echo "<script>
        alert('id pemerikaan $id_pemeriksaan gagal diproses')
        window.location.href = 'antrian.php?tab=antrian'
        </script>";
    }
}


$all_dokter = getAllDataDokter();


$title = "Proses Reservasi";
include "layouts/header.php";

?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include "layouts/navbar.php" ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container-->
        <?php include "layouts/sidebar.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Proses Reservasi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Proses Reservasi</h3>
                                </div>
                                <!-- /.card-header -->
                                <form action="" method="post">
                                    <div class="card-body">
                                        <div class="table table-responsive">
                                            <table class="table table-bordered">

                                                <input type="hidden" name="id_pemeriksaan" value="<?= $id_pemeriksaan ?>">
                                                <tr>
                                                    <th style="width: 300px;">ID PEMERIKSAAN</th>
                                                    <td><?= $data_id_pemeriksaan["ID_PEMERIKSAAN"] ?></td>
                                                </tr>
                                                <tr>
                                                    <?php
                                                    $tanggal = date("Y-m-d");
                                                    ?>
                                                    <th>TANGGAL</th>
                                                    <td><input type="date" name="tanggal" id="tanggal" value="<?= $tanggal ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>PASIEN</th>
                                                    <td>
                                                        <?= $data_id_pemeriksaan["ID_PASIEN"] ?> - <?= $data_id_pemeriksaan["NAMA_PASIEN"] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>DOKTER</th>
                                                    <td>
                                                        <div class="form-group">
                                                            <select name="dokter" required class="form-control select2" style="width: 25%">
                                                                <option selected disabled="">PILIH DOKTER</option>
                                                                <?php foreach ($all_dokter as $dokter) : ?>
                                                                    <option value="<?= $dokter["ID_DOKTER"] ?>"><?= $dokter["ID_DOKTER"] ?> | <?= $dokter["NAMA_DOKTER"] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KELUHAN</th>
                                                    <td>
                                                        <textarea class="form-control" rows="3"><?= $data_id_pemeriksaan["KELUHAN"] ?></textarea>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="antrian.php?tab=antrian" class="btn btn-warning btn-sm mx-2">Kembali</a>
                                            <button type="submit" name="proses" class="btn btn-success btn-sm">Proses</button>
                                        </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include "layouts/footer.php" ?>

    </div>
    <!-- ./wrapper -->


    <?php include "layouts/end.php" ?>