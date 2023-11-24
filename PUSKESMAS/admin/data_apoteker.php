<?php
session_start();
include "../data/database.php";
if (empty($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}


$nama_apoteker = isset($_POST["nama_apoteker"]) ? $_POST["nama_apoteker"] : '';

if (isset($_POST["t_ubah"])) {
    if (ubahApoteker($_POST)) {
        echo "<script>
        alert('apoteker $nama_apoteker berhasil diubah')
        window.location.href = 'data_apoteker.php?tab=data_apoteker'
        </script>";
    } else {
        echo "<script>
        alert('apoteker $nama_apoteker gagal diubah')
        window.location.href = 'data_apoteker.php?tab=data_apoteker'
        </script>";
    }
}


if (isset($_POST["t_tambah"])) {
    insertUser($_POST, 3);
    $nama_apoteker = $_POST["nama_apoteker"];
    if (tambahApoteker($_POST)) {
        echo "<script>
        alert('apoteker $nama_apoteker berhasil ditambahkan')
        window.location.href = 'data_apoteker.php?tab=data_apoteker'
        </script>";
    } else {
        echo "<script>
        alert('apoteker $nama gagal ditambahkan')
        window.location.href = 'data_apoteker?tab=data_apoteker'
        </script>";
    }
}

if (isset($_POST["t_hapus"])) {
    $id_apoteker = $_POST["id_apoteker"];
    if (hapusApoteker($id_apoteker)) {
        echo "<script>
        alert('apoteker $nama_apoteker berhasil dihapus')
        window.location.href = 'data_apoteker.php?tab=data_apoteker'
        </script>";
    } else {
        echo "<script>
        alert('apoteker $nama_apoteker gagal dihapus')
        window.location.href = 'data_apoteker.php?tab=data_apoteker'
        </script>";
    }
}

$all_admin = getAllApoteker();

$title = "Data Admin";
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
                            <h1>Data Master Apoteker</h1>
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
            <div class="modal fade" id="modal-tambah">
                <form action="" method="post">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah Apoteker</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php $id_apoteker = generateID("tb_apoteker", "ID_APOTEKER", "AP"); ?>
                                <div class="mb-3">
                                    <label>ID APOTEKER</label>
                                    <input type="text" readonly class="form-control" name="id_apoteker" value="<?= $id_apoteker ?>">
                                </div>
                                <div class="mb-3">
                                    <label>USERNAME</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label>PASSWORD</label>
                                    <input type="text" class="form-control" name="password" required>
                                </div>
                                <div class="mb-3">
                                    <label>NAMA APOTEKER</label>
                                    <input type="text" class="form-control" name="nama_apoteker" required>
                                </div>
                                <div class="mb-3">
                                    <label>NOMOR TELP APOTEKER</label>
                                    <input type="text" class="form-control" name="no_telp" required>
                                </div>
                                <div class="mb-3">
                                    <label>ALAMAT APOTEKER</label>
                                    <textarea required class="form-control" name="alamat" id="keterangan" style="height: 100px"></textarea>
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
                </form>
            </div>
            <!-- end modal tambah -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-default mb-2" data-toggle="modal" data-target="#modal-tambah">
                                Tambah Apoteker
                            </button>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Apoteker</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 30px;">NO</th>
                                                <th>USERNAME APOTEKER</th>
                                                <th>NAMA APOTEKER</th>
                                                <th>NOMOR TELEPON</th>
                                                <th>ALAMAT APOTEKER</th>
                                                <th style="width: 100px;">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($all_admin as $a) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $a["USERNAME"] ?></td>
                                                    <td><?= $a["NAMA_APOTEKER"] ?></td>
                                                    <td><?= $a["NO_TELP"] ?></td>
                                                    <td><?= $a["ALAMAT_APOTEKER"] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_edit<?= $a["ID_APOTEKER"] ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?= $a["ID_APOTEKER"] ?>">
                                                            Hapus
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- modal edit admin -->
                                                <div class="modal fade" id="modal_edit<?= $a["ID_APOTEKER"] ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Form Edit Admin</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" class="form-control" name="id_apoteker" value="<?= $a["ID_APOTEKER"] ?>">
                                                                        <div class="mb-3">
                                                                            <label>NAMA ADMIN</label>
                                                                            <input type="text" class="form-control" name="nama_apoteker" value="<?= $a["NAMA_APOTEKER"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>NO TELEPON ADMIN</label>
                                                                            <input type="number" class="form-control" name="no_telp" value="<?= $a["NO_TELP"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>ALAMAT ADMIN</label>
                                                                            <textarea required class="form-control" name="alamat" id="keterangan" style="height: 100px"><?= $a["ALAMAT_APOTEKER"] ?></textarea>
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


                                                <!-- modal hapus admin -->
                                                <div class="modal fade" id="modal_hapus<?= $a["ID_APOTEKER"] ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">KONFIRMASI HAPUS ADMIN</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_apoteker" value="<?= $a["ID_APOTEKER"] ?>">
                                                                    <input type="text" readonly class="form-control" name="nama_apoteker" value="<?= $a["NAMA_APOTEKER"] ?>">
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
                                                <th>USERNAME ADMIN</th>
                                                <th>NAMA ADMIN</th>
                                                <th>NOMOR TELEPON</th>
                                                <th>ALAMAT</th>
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