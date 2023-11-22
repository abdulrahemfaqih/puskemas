<?php
session_start();
include "../data/database.php";
if (empty($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}


$nama_admin = isset($_POST["nama_admin"]) ? $_POST["nama_admin"] : '';

if (isset($_POST["t_ubah"])) {
    if (ubahAdmin($_POST)) {
        echo "<script>
        alert('admin $nama_admin berhasil diubah')
        window.location.href = 'data_admin.php?tab=data_admin'
        </script>";
    } else {
        echo "<script>
        alert('admin $nama_admin gagal diubah')
        window.location.href = 'data_admin.php?tab=data_admin'
        </script>";
    }
}


if (isset($_POST["t_tambah"])) {
    insertUser($_POST, 1);
    $nama_admin = $_POST["nama_admin"];
    if (tambahAdmin($_POST)) {
        echo "<script>
        alert('admin $nama_admin berhasil ditambahkan')
        window.location.href = 'data_admin.php?tab=data_admin'
        </script>";
    } else {
        echo "<script>
        alert('admin $nama gagal ditambahkan')
        window.location.href = 'data_admin?tab=data_admin'
        </script>";
    }
}

if (isset($_POST["t_hapus"])) {
    $id_admin = $_POST["id_admin"];
    if (hapusAdmin($id_admin)) {
        echo "<script>
        alert('admin $nama_admin berhasil dihapus')
        window.location.href = 'data_admin.php?tab=data_admin'
        </script>";
    } else {
        echo "<script>
        alert('admin $nama_admin gagal dihapus')
        window.location.href = 'data_admin.php?tab=data_admin'
        </script>";
    }
}

$all_admin = getAllAdmin();

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
                            <h1>Data Master Admin</h1>
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
                                <h4 class="modal-title">Form Tambah Admin</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php $id_admin = generateID("tb_admin", "ADMIN_ID", "AD"); ?>
                                <div class="mb-3">
                                    <label>ID ADMIN</label>
                                    <input type="text" readonly class="form-control" name="id_admin" value="<?= $id_admin ?>">
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
                                    <label>NAMA ADMIN</label>
                                    <input type="text" class="form-control" name="nama_admin" required>
                                </div>
                                <div class="mb-3">
                                    <label>NOMOR TELP ADMIN</label>
                                    <input type="text" class="form-control" name="no_telp" required>
                                </div>
                                <div class="mb-3">
                                    <label>ALAMAT ADMIN</label>
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
                                Tambah Admin
                            </button>
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
                                                <th>USERNAME ADMIN</th>
                                                <th>NAMA ADMIN</th>
                                                <th>NOMOR TELEPON</th>
                                                <th>ALAMAT ADMIN</th>
                                                <th style="width: 100px;">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($all_admin as $a) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $a["USERNAME"] ?></td>
                                                    <td><?= $a["NAMA_ADMIN"] ?></td>
                                                    <td><?= $a["TELP_ADMIN"] ?></td>
                                                    <td><?= $a["ALAMAT_ADMIN"] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_edit<?= $a["ADMIN_ID"] ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?= $a["ADMIN_ID"] ?>">
                                                            Hapus
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- modal edit admin -->
                                                <div class="modal fade" id="modal_edit<?= $a["ADMIN_ID"] ?>">
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
                                                                        <input type="hidden" class="form-control" name="id_admin" value="<?= $a["ADMIN_ID"] ?>">
                                                                        <div class="mb-3">
                                                                            <label>NAMA ADMIN</label>
                                                                            <input type="text" class="form-control" name="nama_admin" value="<?= $a["NAMA_ADMIN"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>NO TELEPON ADMIN</label>
                                                                            <input type="number" class="form-control" name="no_telp" value="<?= $a["TELP_ADMIN"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>ALAMAT ADMIN</label>
                                                                            <textarea required class="form-control" name="alamat" id="keterangan" style="height: 100px"><?= $a["ALAMAT_ADMIN"] ?></textarea>
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
                                                <div class="modal fade" id="modal_hapus<?= $a["ADMIN_ID"] ?>">
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
                                                                    <input type="hidden" name="id_admin" value="<?= $a["ADMIN_ID"] ?>">
                                                                    <input type="text" readonly class="form-control" name="nama_admin" value="<?= $a["NAMA_ADMIN"] ?>">
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