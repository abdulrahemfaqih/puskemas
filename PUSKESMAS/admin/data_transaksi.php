<?php
include "../data/database.php";

session_start();
$title = "Pemeriksaan";
include "layouts/header.php";


$getDataTransaksi = getDataTransaksiPemeriksaanByStatus();
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
                            <h1>Transaksi</h1>
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
                                    <h3 class="card-title">Transaksi</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 180px;">AKSI</th>
                                                    <th style="width: 20px;">NO</th>
                                                    <th>ID TRANSAKSI</th>
                                                    <th>TANGGAL TRNSAKSI</th>
                                                    <th>NAMA PASIEN </th>
                                                    <th>NAMA DOKTER</th>
                                                    <th>ID PEMERIKSAAN</th>
                                                    <th>JUMLAH PEMBAYARAN</th>
                                                    <th>STATUS PEMBAYARAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($getDataTransaksi as $g) : ?>
                                                    <tr>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" href="detail_transaksi_pembayaran.php">Detail</a>
                                                            <?php if ($g["STATUS_PEMBAYARAN"] == 1) : ?>
                                                                <a class="btn btn-success btn-sm">
                                                                    Pembayaran Selesai
                                                                </a>
                                                            <?php else : ?>
                                                                <a class="btn btn-warning btn-sm" href="proses_transaksi.php?id_transaksi=<?= $g["ID_TRANSAKSI"] ?>">
                                                                    Pembayaran
                                                                </a>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $g["ID_TRANSAKSI"] ?></td>
                                                        <td><?= $g["TGL_TRANSAKSI"] ?></td>
                                                        <td><?= $g["NAMA_PASIEN"] ?></td>
                                                        <td><?= $g["NAMA_DOKTER"] ?></td>
                                                        <td><?= $g["ID_PEMERIKSAAN"] ?></td>
                                                        <td><?= $g["JUMLAH_PEMBAYARAN"] ?></td>
                                                        <?php if ($g["STATUS_PEMBAYARAN"] == 1) : ?>
                                                            <td>Lunas</td>
                                                        <?php else : ?>
                                                            <td>Belum Lunas</td>
                                                        <?php endif; ?>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th style="width: 130px;">AKSI</th>
                                                    <th style="width: 20px;">NO</th>
                                                    <th>ID TRANSAKSI</th>
                                                    <th>TANGGAL TRNSAKSI</th>
                                                    <th>NAMA PASIEN </th>
                                                    <th>NAMA DOKTER</th>
                                                    <th>ID PEMERIKSAAN</th>
                                                    <th>JUMLAH PEMBAYARAN</th>
                                                    <th>STATUS PEMBAYARAN</th>
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