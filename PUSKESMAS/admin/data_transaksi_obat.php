<?php
session_start();
include "../data/database.php";
if (empty($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION["id_apoteker"] != NULL) {
    $id_apoteker = $_SESSION["id_apoteker"];
}



$id_transaksi = isset($_POST["id_transaksi"]) ? $_POST["id_transaksi"] : '';



if (isset($_POST["t_tambah"])) {
    tambahTransaksiObat($_POST);
    echo "<script>
        alert('transaksi $id_transaksi berhasil ditambahkan')
        window.location.href = 'transaksi_obat.php?tab=transaksi_obat'
        </script>";
}

if (isset($_POST["t_hapus"])) {
    $id_admin = $_POST["id_admin"];
    if (hapusAdmin($id_admin)) {
        echo "<script>
        alert('admin $id_transaksi berhasil dihapus')
        window.location.href = 'transaksi_obat.php?tab=transaksi_obat'
        </script>";
    } else {
        echo "<script>
        alert('admin $id_transaksi gagal dihapus')
        window.location.href = 'transaksi_obat.php?tab=transaksi_obat'
        </script>";
    }
}

$all_transaksi = getDataTransaksiObat();
$all_obat = getAllObat();

$title = "Transaksi Obat";
include "layouts/header.php";

?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include "layouts/navbar.php" ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include "layouts/sidebar.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Transaksi Obat</h1>
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
                                    <h3 class="card-title">Admin</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 30px;">NO</th>
                                                <th>ID_TRANSAKSI</th>
                                                <th>PEMBELI</th>
                                                <th>APOTEKER</th>
                                                <th>TANGGAL TRANSAKSI</th>
                                                <th>TOTAL BAYAR</th>
                                                <th style="width: 100px;">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($all_transaksi as $a) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $a["id_transaksi"] ?></td>
                                                    <td><?= $a["pembeli"] ?></td>
                                                    <td><?= $a["ID_APOTEKER"] ?></td>
                                                    <td><?= $a["tanggal_transaksi"] ?></td>
                                                    <td><?= formatHarga($a["total_bayar"]) ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?= $a["id_transaksi"] ?>">
                                                            Hapus
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- modal hapus admin -->
                                                <div class="modal fade" id="modal_hapus<?= $a["id_transaksi"] ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">KONFIRMASI HAPUS TRANSAKSI</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_transaksi" value="<?= $a["id_tranaksi"] ?>">
                                                                    <input type="text" readonly class="form-control" name="id_transaksi" value="<?= $a["id_transaksi"] ?>">
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="t_hapus" class="btn btn-danger">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal hapus obat -->
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width: 30px;">NO</th>
                                                <th>ID_TRANSAKSI</th>
                                                <th>PEMBELI</th>
                                                <th>APOTEKER</th>
                                                <th>TANGGAL TRANSAKSI</th>
                                                <th>TOTAL BAYAR</th>
                                                <th style="width: 100px;">AKSI</th>
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