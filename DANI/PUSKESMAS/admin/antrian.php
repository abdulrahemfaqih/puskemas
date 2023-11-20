<?php
$title = "Antrian";
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
                <h1>Data Antrian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Pasien</li>
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
                <h3 class="card-title">Data Antrian Puskesmas Telang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="#">Tambah</a>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nomor Antrian</th>
                        <th>Nama Pasien</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>PS001</td>
                        <td>Rahmat Samsudin
                        </td>
                        <td>Kamal</td>
                        <td>2023-11-12</td>
                        <td>
                            <a href="#">Edit</a>
                            <a href="#">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>PS002</td>
                        <td>Basuki Rahman
                        </td>
                        <td>Telang</td>
                        <td>2023-11-12</td>
                        <td>
                            <a href="#">Edit</a>
                            <a href="#">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nomor Antrian</th>
                        <th>Nama Pasien</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                

    </div>

</div>


<?php include "layouts/end.php"?>
