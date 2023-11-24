<?php
session_start();
include "../data/database.php";
if (isset($_GET["id_transaksi"])) {
    $id_transaksi = $_GET["id_transaksi"];
    $data_id_transaksi = getDataTransaksiPemeriksaanById($id_transaksi)[0];
    $id_pasien = $data_id_transaksi["ID_PASIEN"];
    $id_dokter = $data_id_transaksi["ID_DOKTER"];
    $nama_dokter = $data_id_transaksi["NAMA_DOKTER"];
    $nama_pasien = $data_id_transaksi["NAMA_PASIEN"];
    $tanggal_transaksi = $data_id_transaksi["TGL_TRANSAKSI"];
    $id_pemeriksaan = $data_id_transaksi["ID_PEMERIKSAAN"];
}



if (isset($_POST["proses"])) {
    $id_transaksi = $_POST["id_transaksi"];
    if (updateTransaksiPemeriksaanById($_POST)) {
        echo "<script>
        alert('transaksi $id_transaksi telah selesai')
        window.location.href = 'transaksi.php?tab=transaksi'
        </script>
        ";
    } else {
        echo "<script>
        alert('transaksi $id_transaksi gagal di proses')
        window.location.href = 'transaksi.php?tab=transaksi'
        </script>
        ";
    }
}



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
                            <h1>Proses Pemeriksaan</h1>
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
                                    <h3 class="card-title">Pemeriksaan</h3>
                                </div>
                                <!-- /.card-header -->
                                <form action="" method="post">
                                    <div class="card-body">
                                        <div class="table table-responsive">
                                            <table class="table table-bordered">
                                                <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">
                                                <tr>
                                                    <th style="width: 300px;">ID TRANSAKSI</th>
                                                    <td><?= $data_id_transaksi["ID_TRANSAKSI"] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>TANGGAL</th>
                                                    <td><input type="date" class="form-control w-25" name="tanggal" id="tanggal" value="<?= $tanggal_transaksi ?>"></td>
                                                </tr>
                                                <tr>
                                                    <th>PASIEN</th>
                                                    <td>
                                                        <?= $id_pasien ?> - <?= $nama_pasien ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>DOKTER</th>
                                                    <td>
                                                        <?= $id_dokter ?> - <?= $nama_dokter ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>ID PEMERIKSAAN</th>
                                                    <td>
                                                        <?= $id_pemeriksaan ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>JUMLAH PEMBAYARAN</th>
                                                    <td>
                                                        <input type="number" placeholder="jumlah pembayaran" name="jumlah_pembayaran" class="form-control w-25">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KETERANGAN PEMBAYARAN</th>
                                                    <td>
                                                        <textarea placeholder="keterangan_pembayaran" name="keterangan_pembayaran" class="form-control" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>STATUS PEMBAYARAN</th>
                                                    <td>
                                                        <div class="form-group">
                                                            <select name="status_pembayaran" required class="form-control select2" style="width: 25%">
                                                                <option value="1" <?= $data_id_transaksi["STATUS_PEMBAYARAN"] == 1 ? "selected" : '' ?>>SELESAI</option>
                                                                <option value="2" <?= $data_id_transaksi["STATUS_PEMBAYARAN"] == 0 ? "selected" : '' ?>>BELUM LUNAS</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="antrian.php?tab=antrian" class="btn btn-warning btn-sm mx-2">Kembali</a>
                                            <button type="submit" name="proses" class="btn btn-success btn-sm">Proses</button>
                                        </div>

                                    </div>
                                </form>
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