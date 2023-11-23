<?php
session_start();
include "../data/database.php";
if (isset($_GET["id_pemeriksaan"])) {
    $id_pemeriksaan = $_GET["id_pemeriksaan"];
    $data_id_pemeriksaan = getDataAntrianAndPemeriksaanByIdPem($id_pemeriksaan);
}

$id_pasien = $data_id_pemeriksaan["ID_PASIEN"];
$id_dokter = $data_id_pemeriksaan["ID_DOKTER"];


if (isset($_POST["proses"])) {
    $id_pemeriksaan = $_POST["id_pemeriksaan"];
    $id_transaksi = $_POST["id_transaksi"];
    if (hasilPemeriksaan($_POST) && tambahTransaksi($id_transaksi, $id_pemeriksaan, $id_pasien,  $id_dokter)) {
        echo "<script>
        alert('pemeriksaan $id_pemeriksaan telah selesai ')
        window.location.href = 'pemeriksaan.php?tab=pemeriksaan'
        </script>
        ";
    } else {
        echo "<script>
        alert('pemeriksaan $id_pemeriksaan gagal di proses')
        window.location.href = 'pemeriksaan.php?tab=pemeriksaan'
        </script>
        ";
    }
}


$all_poli = allPoli();


$id_dokter = $_SESSION["id_dokter"];
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
                                                <?php
                                                $id_transaksi = generateID("tb_transaksi_pemeriksaan", "ID_TRANSAKSI", "TP");
                                                ?>
                                                <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">
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
                                                            <?= $nama ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KELUHAN</th>
                                                    <td>
                                                        <textarea class="form-control" rows="3"><?= $data_id_pemeriksaan["KELUHAN"] ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        POLI
                                                    </th>
                                                    <td>
                                                        <div class="form-group">
                                                            <select name="poli" required class="form-control select2" style="width: 25%">
                                                                <option selected disabled="">PILIH POLI</option>
                                                                <?php foreach ($all_poli as $p) : ?>
                                                                    <option value="<?= $p["ID_POLI"] ?>"><?= $p["ID_POLI"] ?> | <?= $p["NAMA_POLI"] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>DIAGNOSA</th>
                                                    <td>
                                                        <textarea class="form-control" name="diagnosa" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>HASIL PEMERIKSAAN</th>
                                                    <td>
                                                        <textarea class="form-control" name="hasil_pemeriksaan" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>TINDAKAN PEMERIKSAAN</th>
                                                    <td>
                                                        <textarea class="form-control" name="tindakan" rows="3"></textarea>
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