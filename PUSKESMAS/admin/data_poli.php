<?php
session_start();
include "../data/database.php";
if (empty($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}


$nama_poli = isset($_POST["nama_poli"]) ? $_POST["nama_poli"] : '';

if (isset($_POST["t_ubah"])) {
    if (ubahPoli($_POST)) {
        echo "<script>
        alert('poli $nama_poli berhasil diubah')
        window.location.href = 'data_poli.php?tab=data_poli'
        </script>";
    } else {
        echo "<script>
        alert('poli $nama_poli gagal diubah')
        window.location.href = 'data_poli.php?tab=data_poli'
        </script>";
    }
}


if (isset($_POST["t_tambah"])) {
    if (tambahPoli($_POST)) {
        echo "<script>
        alert('poli $nama_poli berhasil ditambahkan')
        window.location.href = 'data_poli.php?tab=data_poli'
        </script>";
    } else {
        echo "<script>
        alert('poli $nama gagal ditambahkan')
        window.location.href = 'data_poli?tab=data_poli'
        </script>";
    }
}

if (isset($_POST["t_hapus"])) {
    $id_poli = $_POST["id_poli"];
    if (hapusPoli($id_poli)) {
        echo "<script>
        alert('poli $nama_poli berhasil dihapus')
        window.location.href = 'data_poli.php?tab=data_poli'
        </script>";
    } else {
        echo "<script>
        alert('poli $nama_poli gagal dihapus')
        window.location.href = 'data_poli.php?tab=data_poli'
        </script>";
    }
}

$all_poli = allPoli();

$title = "Data Poli";
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
                            <h1>Data Master Poli</h1>
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
                                <h4 class="modal-title">Form Tambah Poli</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php $id_poli = generateID("tb_poli", "ID_POLI", "PI"); ?>
                                <div class="mb-3">
                                    <label>ID POLI</label>
                                    <input type="text" readonly class="form-control" name="id_poli" value="<?= $id_poli?>">
                                </div>
                                <div class="mb-3">
                                    <label>NAMA POLI</label>
                                    <input type="text" class="form-control" name="nama_poli" required>
                                </div>
                                <div class="mb-3">
                                    <label>RUANGAN</label>
                                    <input type="text" class="form-control" name="ruangan" required>
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
                                Tambah Poli
                            </button>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Poli</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 30px;">NO</th>
                                                <th>ID POLI</th>
                                                <th>NAMA POLI</th>
                                                <th>RUANGAN POLI</th>
                                                <th style="width: 100px;">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($all_poli as $p) : ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $p["ID_POLI"] ?></td>
                                                    <td><?= $p["NAMA_POLI"] ?></td>
                                                    <td><?= $p["RUANGAN"] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_edit<?= $p["ID_POLI"] ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?= $p["ID_POLI"] ?>">
                                                            Hapus
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- modal edit admin -->
                                                <div class="modal fade" id="modal_edit<?= $p["ID_POLI"] ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Form Edit POLI</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" class="form-control" name="id_poli" value="<?= $p["ID_POLI"] ?>">
                                                                        <div class="mb-3">
                                                                            <label>NAMA POLI</label>
                                                                            <input type="text" class="form-control" name="nama_poli" value="<?= $p["NAMA_POLI"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>RUANGAN POLI</label>
                                                                            <input type="text" class="form-control" name="ruangan" value="<?= $p["RUANGAN"] ?>">
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
                                                <div class="modal fade" id="modal_hapus<?= $p["ID_POLI"] ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="" method="post">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">KONFIRMASI HAPUS POLI</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_poli" value="<?= $p["ID_POLI"] ?>">
                                                                    <input type="text" readonly class="form-control" name="nama_poli" value="<?= $p["NAMA_POLI"] ?>">
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
                                                <th>ID POLI</th>
                                                <th>NAMA POLI</th>
                                                <th>RUANGAN POLI</th>
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