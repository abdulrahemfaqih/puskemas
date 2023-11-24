<?php
include "../data/database.php";

session_start();
$title = "Pemeriksaan";
include "layouts/header.php";


$data_pasien = getAllPasien();
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include "layouts/navbar.php" ?>

        <?php include "layouts/sidebar.php" ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Pasien</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pemeriksaan Puskesmas Telang</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Pasien</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">NO</th>
                                                    <th>ID PASIEN</th>
                                                    <th>NAMA PASIEN</th>
                                                    <th>TELEPON</th>
                                                    <th>JENIS KELAMIN</th>
                                                    <th>ALAMAT</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($data_pasien as $g) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $g["ID_PASIEN"] ?></td>
                                                        <td><?= $g["NAMA_PASIEN"] ?></td>
                                                        <td><?= $g["TELP"] ?></td>
                                                        <td><?= $g["JENIS_KELAMIN"] ?></td>
                                                        <td><?= $g["ALAMAT"] ?></td>
                                                        <td>
                                                            <a href="detail_rm_pasien.php?tab=data_pasien&id_pasien=<?= $g["ID_PASIEN"] ?>" class="btn btn-primary btn-sm">Detail</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th style="width: 20px;">NO</th>
                                                    <th>ID PASIEN</th>
                                                    <th>NAMA PASIEN</th>
                                                    <th>TELEPON</th>
                                                    <th>JENIS KELAMIN</th>
                                                    <th>ALAMAT</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </div>

    <?php include "layouts/end.php" ?>