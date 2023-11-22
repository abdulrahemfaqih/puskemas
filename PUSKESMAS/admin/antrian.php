<?php
session_start();
include "../data/database.php";
if (empty($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}

$data_antrian = getDataAntrianAndPemeriksaan();
var_dump($data_antrian);




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
                                                <th style="width: 30px;">NO</th>
                                                <th>ID POLI</th>
                                                <th>NAMA POLI</th>
                                                <th>RUANGAN POLI</th>
                                                <th style="width: 100px;">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($all_poli as $p) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $p["ID_POLI"] ?></td>
                                                    <td><?= $p["NAMA_POLI"] ?></td>
                                                    <td><?= $p["RUANGAN"] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_edit<?= $p["ID_POLI"] ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?= $p["ID_POLI"] ?>">
                                                            Hapus
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>NO</th>
                                                <th>ID POLI</th>
                                                <th>NAMA POLI</th>
                                                <th>RUANGAN POLI</th>
                                                <th>AKSI</th>
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