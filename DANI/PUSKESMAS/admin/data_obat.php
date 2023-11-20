<?php
$title = "Data Obat";
include "layouts/header.php";
include "../data/database.php";
$allObat = getAllObat();
$allJenisObat = getAllJenisObat();

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
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <?php
                                $id_obat = generateID("tb_obat", "id_obat", "OB");

                                ?>
                                <form>
                                    <div class="mb-3">
                                        <label>ID OBAT</label>
                                        <input type="text" class="form-control" name="id_obat" value="<?= $id_obat ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>NAMA OBAT</label>
                                        <input type="text" class="form-control" name="nama_obat">
                                    </div>
                                    <div class="mb-3">
                                        <label>JENIS OBAT</label>
                                        <select class="form-control select2" name="id_jenis" style="width: 100%;">
                                            <option value="" disabled selected>PILIH OBAT</option>
                                            <?php foreach ($allJenisObat as $j) : ?>
                                                <option value="<?= $j["ID_JENIS_OBAT"] ?>"><?= $j["NAMA_JENIS"] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label>KATEGORI OBAT</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
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
                                                <th>ID OBAT</th>
                                                <th>NAMA OBAT</th>
                                                <th>JENIS OBAT</th>
                                                <th>KATEGORI OBAT</th>
                                                <th>STOK OBAT</th>
                                                <th>HARGA OBAT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($allObat as $b) : ?>
                                                <tr>
                                                    <td><?= $b["ID_OBAT"] ?></td>
                                                    <td><?= $b["NAMA_OBAT"] ?></td>
                                                    <td><?= $b["NAMA_JENIS"] ?></td>
                                                    <td><?= $b["NAMA_KATEGORI"] ?></td>
                                                    <td><?= $b["STOK_OBAT"] ?></td>
                                                    <td><?= formatHarga($b["HARGA_OBAT"]) ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID OBAT</th>
                                                <th>NAMA OBAT</th>
                                                <th>JENIS OBAT</th>
                                                <th>KATEGORI OBAT</th>
                                                <th>STOK OBAT</th>
                                                <th>HARGA OBAT</th>
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