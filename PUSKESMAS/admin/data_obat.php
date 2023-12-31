<?php
session_start();
$title = "Data Obat";
include "layouts/header.php";
include "../data/database.php";

if (empty($_SESSION["login_admin"])) {
    header("Location: index.php");
    exit;
}

$allObat = getAllObat();
$allJenisObat = getAllJenisObat();
$allKategoriObat = getAllKateObat();

if (isset($_POST["t_ubah"])) {

    ubahObat($_POST);
    header("Location: data_obat.php");
}

if (isset($_POST["t_tambah"])) {
    tambahObat($_POST);
    header("Location: data_obat.php");
}

if (isset($_POST["t_hapus"])) {
    $id_obat = $_POST["id_obat"];
    hapusObat($id_obat);
    header("Location: data_obat.php");
}
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
                            <h1>Data Master Obat</h1>
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
            <!-- modal tambah -->
            <form action="" method="post">
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah Obat</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php $id_obat = generateID("tb_obat", "id_obat", "OB"); ?>
                                <div class="mb-3">
                                    <label>ID OBAT</label>
                                    <input type="text" readonly class="form-control" name="id_obat" value="<?= $id_obat ?>">
                                </div>
                                <div class="mb-3">
                                    <label>NAMA OBAT</label>
                                    <input type="text" class="form-control" name="nama_obat" required>
                                </div>
                                <div class="mb-3">
                                    <label>JENIS OBAT</label>
                                    <select class="form-control select2" name="id_jenis_obat" required style="width: 100%;">
                                        <option value="" disabled selected>PILIH OBAT</option>
                                        <?php foreach ($allJenisObat as $j) : ?>
                                            <option value="<?= $j["ID_JENIS_OBAT"] ?>"><?= $j["NAMA_JENIS_OBAT"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>KATEGORI OBAT</label>
                                    <select class="form-control select2" name="id_kategori_obat" required style="width: 100%;">
                                        <option value="" disabled selected>PILIH OBAT</option>
                                        <?php foreach ($allKategoriObat as $k) : ?>
                                            <option value="<?= $k["ID_KATEGORI_OBAT"] ?>"><?= $k["NAMA_KATEGORI_OBAT"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>STOK OBAT</label>
                                    <input type="number" class="form-control" name="stok_obat" required>
                                </div>
                                <div class="mb-3">
                                    <label>HARGA OBAT</label>
                                    <input type="number" class="form-control" name="harga_obat" required>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="t_tambah" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </form>
            <!-- end modal tambah -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-default mb-2" data-toggle="modal" data-target="#modal-default">
                                Tambah Obat
                            </button>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Obat</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 30px;">NO</th>
                                                <th>NAMA OBAT</th>
                                                <th>JENIS OBAT</th>
                                                <th>KATEGORI OBAT</th>
                                                <th>STOK OBAT</th>
                                                <th>HARGA OBAT</th>
                                                <th style="width: 100px;">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach ($allObat as $b) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $b["NAMA_OBAT"] ?></td>
                                                    <td><?= $b["NAMA_JENIS_OBAT"] ?></td>
                                                    <td><?= $b["NAMA_KATEGORI_OBAT"] ?></td>
                                                    <td><?= $b["STOK_OBAT"] ?></td>
                                                    <td><?= formatHarga($b["HARGA_OBAT"]) ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_edit<?= $b["ID_OBAT"] ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?= $b["ID_OBAT"] ?>">
                                                            Hapus
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- modal edit obat -->
                                                <div class="modal fade" id="modal_edit<?= $b["ID_OBAT"] ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Form Edit Obat</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" class="form-control" name="id_obat" value="<?= $b["ID_OBAT"] ?>">
                                                                        <div class="mb-3">
                                                                            <label>NAMA OBAT</label>
                                                                            <input type="text" class="form-control" name="nama_obat" value="<?= $b["NAMA_OBAT"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>JENIS OBAT</label>
                                                                            <select class="form-control select2" name="id_jenis_obat" style="width: 100%;">
                                                                                <option value="" disabled selected>PILIH OBAT</option>
                                                                                <?php foreach ($allJenisObat as $j) : ?>
                                                                                    <option value="<?= $j["ID_JENIS_OBAT"] ?>" <?= $j["ID_JENIS_OBAT"] == $b["ID_JENIS_OBAT"] ? "selected" : '' ?>><?= $j["NAMA_JENIS_OBAT"] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>KATEGORI OBAT</label>
                                                                            <select class="form-control select2" name="id_kategori_obat" style="width: 100%;">
                                                                                <option value="" disabled selected>PILIH OBAT</option>
                                                                                <?php foreach ($allKategoriObat as $k) : ?>
                                                                                    <option value="<?= $k["ID_KATEGORI_OBAT"] ?>" <?= $k["ID_KATEGORI_OBAT"] == $b["ID_KATEGORI_OBAT"] ? "selected" : '' ?>><?= $k["NAMA_KATEGORI_OBAT"] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>STOK OBAT</label>
                                                                            <input type="number" class="form-control" name="stok_obat" value="<?= $b["STOK_OBAT"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>HARGA OBAT</label>
                                                                            <input type="number" class="form-control" name="harga_obat" value="<?= $b["HARGA_OBAT"] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="t_ubah" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal edit obat -->


                                                <!-- modal hapus obat -->
                                                <div class="modal fade" id="modal_hapus<?= $b["ID_OBAT"] ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">KONFIRMASI HAPUS OBAT</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_obat" value="<?= $b["ID_OBAT"] ?>">
                                                                    <p><?= $b["NAMA_OBAT"] ?></p>
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
                                                <th>NO</th>
                                                <th>NAMA OBAT</th>
                                                <th>JENIS OBAT</th>
                                                <th>KATEGORI OBAT</th>
                                                <th>STOK OBAT</th>
                                                <th>HARGA OBAT</th>
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