<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../assets/dist/img/logo-puskesmas.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PUSKESMAS TELANG</span>
    </a>
    <?php $nama = $_SESSION["nama"] ?>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $nama ?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="antrian.php" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Antrian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="transaksi.php" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pemeriksaan.php" class="nav-link">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Pemeriksaan
                        </p>
                    </a>
                </li>
                <?php if ($_SESSION["LEVEL"] == 1) : ?>
                    <li class="nav-item menu-is-opening">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="data_admin.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Admin</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_antrian.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Antrian</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_transaksi.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Transaksi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_berita.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Berita</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_dokter.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Dokter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_pemeriksaan.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Pemeriksaan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_pasien.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Pasien</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_obat.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Obat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_poli.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Poli</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_rekammedis" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Rekam Medis</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="laporan.php" class="nav-link">
                            <i class="nav-icon fas fa-calendar"></i>
                            <p>
                                Laporan
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION["login"])) : ?>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>