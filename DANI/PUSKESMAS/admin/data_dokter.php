<?php
$title = "Data Dokter";
include "layouts/header.php";
include "../data/database.php";
$allDokter = getAllDataDokter();
// var_dump($allDokter);

if (isset($_POST['t_tambah'])) {
    if (insertUser($_POST)) {
        InsertDataDokter($_POST);
    }
    header("Location: data_dokter.php");
}

if (isset($_POST['t_edit'])) {
    $edit = editedDokter($_POST);
    header("Location: data_dokter.php");
}
if (isset($_POST['t_delete'])) {
    $delete = deleteDokter($_POST);

    if ($delete) {
        echo "<script>alert('data berhasil dihapus')</script>";
    } else {
        echo "<script>alert('data gagal dihapus')</script>";
    }
    header("Location: data_dokter.php");
}

$spesialis = array("Spesialis THT", "Spesialis Penyakit Dalam", "Spesialis Anak", "Spesialis Penyakit Dalam", "Spesialis Jiwa", "Spesialis Mata", "Dokter Gigi", "Dokter Umum");
$jeniskelamin = array("Laki-laki", "Perempuan");
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
                            <h1>Data Master Dokter</h1>
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
                                <h4 class="modal-title">Tambah Dokter</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php $id_dokter = generateID("tb_dokter", "id_dokter", "DK"); ?>
                                <div class="mb-3">
                                    <!-- <label>ID DOKTER</label> -->
                                    <input type="hidden" class="form-control" name="id_dokter"
                                        value="<?= $id_dokter ?>">
                                </div>
                                <div class="mb-3">
                                    <label>USERNAME</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="mb-3">
                                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-3">
                                    <label>NAMA DOKTER</label>
                                    <input type="text" class="form-control" name="nama_dokter">
                                </div>
                                <div class="mb-3">
                                    <label>SPESIALIS</label>
                                    <select class="form-control select2" name="spesialis" style="width: 100%;">
                                        <option value="Laki-laki">
                                            Spesialis THT
                                        </option>
                                        <option value="Perempuan">
                                            Spesialis Penyakit Dalam
                                        </option>
                                        <option value="Perempuan">
                                            Spesialis Anak
                                        </option>
                                        <option value="Perempuan">
                                            Spesialis Penyakit Dalam
                                        </option>
                                        <option value="Perempuan">
                                            Spesialis Jiwa
                                        </option>
                                        <option value="Perempuan">
                                            Spesialis Mata
                                        </option>
                                        <option value="Perempuan">
                                            Dokter Gigi
                                        </option>
                                        <option value="Perempuan">
                                            Dokter Umum
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>JENIS KELAMIN</label>
                                    <select class="form-control select2" name="jenisk_dokter" style="width: 100%;">
                                        <option value="Laki-laki">
                                            Laki-laki
                                        </option>
                                        <option value="Perempuan">
                                            Perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>ALAMAT DOKTER</label>
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                                <div class="mb-3">
                                    <label>NO TELP DOKTER</label>
                                    <input type="number" class="form-control" name="nohp_dokter">
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="t_tambah" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </form>


            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-default mb-2" data-toggle="modal"
                                data-target="#modal-default">
                                Tambah Dokter
                            </button>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Dokter</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID DOKTER</th>
                                                <th>NAMA DOKTER</th>
                                                <th>SPESIALIS</th>
                                                <th>JENIS KELAMIN</th>
                                                <th>ALAMAT DOKTER</th>
                                                <th>NO HP DOKTER</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($allDokter as $b): ?>
                                            <tr>
                                                <td>
                                                    <?= $b["ID_DOKTER"] ?>
                                                </td>
                                                <td>
                                                    <?= $b["NAMA_DOKTER"] ?>
                                                </td>
                                                <td>
                                                    <?= $b["SPESIALIS"] ?>
                                                </td>
                                                <td>
                                                    <?= $b["JENIS_KELAMIN_DOKTER"] ?>
                                                </td>
                                                <td>
                                                    <?= $b["ALAMAT_DOKTER"] ?>
                                                </td>
                                                <td>
                                                    <?= $b["TELP_DOKTER"] ?>
                                                </td>
                                                <td>
                                                    <form action="" method="post">
                                                        <div class="modal fade" id="modal-edited<?= $b["ID_DOKTER"] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Edit Data Dokter</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <!-- <label>ID DOKTER</label> -->
                                                                            <input type="hidden" class="form-control"
                                                                                name="id_dokter"
                                                                                value="<?= $b["ID_DOKTER"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>NAMA DOKTER</label>
                                                                            <input type="text" class="form-control"
                                                                                name="nama_dokter"
                                                                                value="<?= $b["NAMA_DOKTER"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="spesialis">SPESIALIS</label>
                                                                            <select class="form-control select2"
                                                                                name="spesialis" style="width: 100%;">
                                                                                <?php foreach ($spesialis as $sp): ?>
                                                                                <option value="<?= $sp ?>"
                                                                                    <?= ($b['SPESIALIS'] == $sp) ? 'selected' : ''; ?>>
                                                                                    <?= $sp ?>
                                                                                </option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="">JENIS KELAMIN</label>
                                                                            <select class="form-control select2"
                                                                                name="jenisk_dokter"
                                                                                style="width: 100%;">
                                                                                <?php foreach ($jeniskelamin as $jk): ?>
                                                                                <option value="<?= $jk ?>"
                                                                                    <?= ($b["JENIS_KELAMIN_DOKTER"] == $jk) ? 'selected' : ''; ?>>
                                                                                    <?= $jk ?>
                                                                                </option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>ALAMAT DOKTER</label>
                                                                            <input type="text" class="form-control"
                                                                                name="alamat"
                                                                                value="<?= $b["ALAMAT_DOKTER"] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label>NO TELP DOKTER</label>
                                                                            <input type="number" class="form-control"
                                                                                name="nohp_dokter"
                                                                                value="<?= $b["TELP_DOKTER"] ?>">
                                                                        </div>
                                                                        <div
                                                                            class="modal-footer justify-content-between">
                                                                            <button type="button"
                                                                                class="btn btn-default"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit" name="t_edit"
                                                                                class="btn btn-primary">Edit</button>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <!-- DELETE -->
                                                    <form action="" method="post">
                                                        <div class="modal fade" id="modal-delete<?= $b["ID_DOKTER"] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Apakah ingin menghapus
                                                                            data ini?</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <input type="hidden" class="form-control"
                                                                                name="id_dokter"
                                                                                value="<?= $b["ID_DOKTER"] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit" name="t_delete"
                                                                            class="btn btn-primary">Hapus</button>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                    </form>
                                                    <div class="btn-group" role="group">
                                                        <button type="submit" data-toggle="modal"
                                                            data-target="#modal-edited<?= $b["ID_DOKTER"] ?>"
                                                            name="t_edit" class="btn btn-success">Edit</button>
                                                        <button type="submit" data-toggle="modal"
                                                            data-target="#modal-delete<?= $b["ID_DOKTER"] ?>"
                                                            name="t_delete" id="t_delete"
                                                            class="btn btn-danger">Hapus</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
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