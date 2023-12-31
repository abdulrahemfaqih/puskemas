<?php
session_start();
include "../data/database.php";
if (empty($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}

$data_antrian = getDataAntrianAndPemeriksaanWhereDokterNull();

if (isset($_GET["hapus_id"])) {
    $id = $_GET["hapus_id"];
    if (hapusPemeriksan($id)) {
        echo "<script>
        alert('id pemeriksaan $id berhasil dihapus')
        window.location.href = 'antrian.php?tab=antrian'
        </script>";
    }
}


$title = "Data Antrian";
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
                            <h1>Antrian</h1>
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
                                    <h3 class="card-title">Poli</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 220px;">AKSI</th>
                                                <th style="width: 30px;">NO</th>
                                                <th>ID ANTRIAN </th>
                                                <th>TANGGAL ANTRIAN</th>
                                                <th>ID PASIEN</th>
                                                <th>NAMA PASIEN </th>
                                                <th style="width: 100px;">NOMOR ANTRIAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($data_antrian as $d) : ?>
                                                <tr>
                                                    <td>
                                                        <a class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus')" href="antrian.php?hapus_id=<?= $d["ID_PEMERIKSAAN"] ?>">
                                                            Batal
                                                        </a>

                                                        <a class="btn btn-success btn-sm" href="proses_reservasi.php?tab=antrian&id_pemeriksaan=<?= $d["ID_PEMERIKSAAN"] ?>">
                                                            Proses Pemeriksaan
                                                        </a>
                                                    </td>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $d["ID_PEMERIKSAAN"] ?></td>
                                                    <td><?= $d["TGL_RESERVASI"] ?></td>
                                                    <td><?= $d["ID_PASIEN"] ?></td>
                                                    <td><?= $d["NAMA_PASIEN"] ?></td>
                                                    <td><?= $d["NO_ANTRIAN"] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>AKSI</th>
                                                <th style="width: 30px;">NO</th>
                                                <th>ID ANTRIAN </th>
                                                <th>TANGGAL ANTRIAN</th>
                                                <th>ID PASIEN</th>
                                                <th>NAMA PASIEN </th>
                                                <th>NOMOR ANTRIAN</th>
                                            </tr>
                                        </tfoot>
                                    </table>

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