<?php
include "../data/database.php";

session_start();
$title = "Detail Rekam Medis";
include "layouts/header.php";


$id_pasien = $_GET["id_pasien"];
$data_pemeriksaan = getDataAntrianAndPemeriksaanByIdPasien($id_pasien);


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
                            <h1>Data Rekam Medis Pasien</h1>
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
                                                <th style="width: 20px;">NO</th>
                                                <th>ID PEMERIKSAAN</th>
                                                <th>TANGGAL PEMERIKSAAN</th>
                                                <th>ID PASIEN</th>
                                                <th>NAMA PASIEN </th>
                                                <th>KELUHAN</th>
                                                <th>DIAGNOSA</th>
                                                <th>HASIL PEMERIKSAAN</th>
                                                <th>TINDAKAN PEMERIKSAAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($data_pemeriksaan)) : ?>
                                                <?php $no = 1;
                                                foreach ($data_pemeriksaan as $d) : ?>
                                                    <tr>
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
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width: 30px;">NO</th>
                                                <th>ID PEMERIKSAAN</th>
                                                <th>TANGGAL PEMERIKSAAN</th>
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