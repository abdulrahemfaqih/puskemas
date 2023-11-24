<?php
include "../data/database.php";

session_start();
$title = "Pemeriksaan";
include "layouts/header.php";


// var_dump($_SESSION);
$data_pemeriksaan = getDataPemeriksaanByStatus();
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
                            <h1>Data Pemeriksaan</h1>
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
                                    <h3 class="card-title">Pemeriksaan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 130px;">AKSI</th>
                                                <th style="width: 20px;">NO</th>
                                                <th>ID ANTRIAN </th>
                                                <th>TANGGAL ANTRIAN</th>
                                                <th>ID PASIEN</th>
                                                <th>NAMA PASIEN </th>
                                                <th>KELUHAN</th>
                                                <th>DIAGNOSA</th>
                                                <th>HASIL PEMERIKSAAN</th>
                                                <th>TINDAKAN PEMERIKSAAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($data_pemeriksaan as $d) : ?>
                                                <tr>
                                                    <td>
                                                        <?php if ($d["STATUS"] == 1) : ?>
                                                            <a class="btn btn-success btn-sm">
                                                                Pemeriksaan Selesai
                                                            </a>
                                                        <?php else : ?>
                                                            <a class="btn btn-warning btn-sm" href="hasil_pemeriksaan.php?id_pemeriksaan=<?= $d["ID_PEMERIKSAAN"] ?>">
                                                                Periksa
                                                            </a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $d["ID_PEMERIKSAAN"] ?></td>
                                                    <td><?= $d["TGL_RESERVASI"] ?></td>
                                                    <td><?= $d["ID_PASIEN"] ?></td>
                                                    <td><?= $d["NAMA_PASIEN"] ?></td>
                                                    <td><?= $d["KELUHAN"] ?></td>
                                                    <td><?= $d["DIAGNOSA"] ?></td>
                                                    <td><?= $d["HASIL_PEMERIKSAAN"] ?></td>
                                                    <td><?= $d["TINDAKAN"] ?></td>
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
                                                <th>KELUHAN</th>
                                                <th>DIAGNOSA</th>
                                                <th>HASIL PEMERIKSAAN</th>
                                                <th>TINDAKAN PEMERIKSAAN</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </div>

    <?php include "layouts/end.php" ?>