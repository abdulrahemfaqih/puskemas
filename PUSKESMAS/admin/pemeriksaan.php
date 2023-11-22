<?php

session_start();
$title = "Pemeriksaan";
include "layouts/header.php";
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include "layouts/navbar.php"?>

    <?php include "layouts/sidebar.php"?>

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
                                <h3 class="card-title">Data Pemeriksaan</h3>
                            </div>
                        <!-- /.card-header -->
                            <div class="card-body">
                                <a href="#">Tambah</a>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID Pemeriksaan</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Nama Pasien</th>
                                        <th>Keluhan</th>
                                        <th>Diagnosa</th>
                                        <th>Hasil Pemeriksaan</th>
                                        <th>Tindakan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>PM001</td>
                                        <td>2023-11-12</td>
                                        <td>Rahmat Samsudin
                                        </td>
                                        <td>Sakit Gigi</td>
                                        <td>Gigi Berlubang</td>
                                        <td>Dilakukan penambalan gigi</td>
                                        <td>Diberikan obat anti nyeri</td>
                                        <td>
                                            <a href="#">Edit</a>
                                            <a href="#">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PM002</td>
                                        <td>2023-11-12</td>
                                        <td>Basuki Rahman
                                        </td>
                                        <td>Nyeri otot lengan</td>
                                        <td>Sendi Bergeser</td>
                                        <td>Dilakukan pijat urat</td>
                                        <td>Diberikan obat anti nyeri</td>
                                        <td>
                                            <a href="#">Edit</a>
                                            <a href="#">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ID Pemeriksaan</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Nama Pasien</th>
                                        <th>Keluhan</th>
                                        <th>Diagnosa</th>
                                        <th>Hasil Pemeriksaan</th>
                                        <th>Tindakan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </tfoot>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>

</div>

<?php include "layouts/end.php"?>
