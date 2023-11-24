<?php
$current_tab = isset($_GET["tab"]) ? $_GET["tab"] : '';
date_default_timezone_set("Asia/Jakarta");
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../assets/dist/img/logo-puskesmas.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PUSKESMAS TELANG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <?php if (isset($_SESSION["login_admin"])) : ?>
                <?php $nama = $_SESSION["nama_admin"] ?>
                <div class="info">
                    <a href="#" class="d-block"><?= $nama ?></a>
                </div>
            <?php endif ?>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php if ($_SESSION["level_admin"] == 1) : ?>
                    <li class="nav-item">
                        <a href="index.php?tab=dashboard" class="nav-link <?= $current_tab == 'dashboard' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($_SESSION["level_admin"] == 1) : ?>
                    <li class="nav-item">
                        <a href="antrian.php?tab=antrian" class="nav-link <?= $current_tab == 'antrian' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Antrian
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="transaksi.php?tab?transaksi" class="nav-link <?= $current_tab == 'transaksi' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-cash-register"></i>
                            <p>
                                Transaksi Pemeriksaan
                            </p>
                        </a>
                    </li>
                <?php endif ?>
                <?php if ($_SESSION["level_admin"] == 3) : ?>
                    <li class="nav-item">
                        <a href="transaksi_obat.php?tab=transaksi_obat" class="nav-link <?= $current_tab == 'transaksi_obat' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-cash-register"></i>
                            <p>
                                Transaksi Obat
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($_SESSION["level_admin"] == 2) : ?>
                    <li class="nav-item">
                        <a href="pemeriksaan.php?tab=pemeriksaan" class="nav-link <?= $current_tab == 'pemeriksaan' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-stethoscope"></i>
                            <p>
                                Pemeriksaan
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($_SESSION["level_admin"] == 1) : ?>
                    <li class="nav-item <?= ($current_tab == 'data_admin'
                                            || $current_tab == 'data_dokter'
                                            || $current_tab == 'data_poli'
                                            || $current_tab == 'data_obat'
                                            || $current_tab == 'data_transaksi'
                                            || $current_tab == 'data_rekam_medis'
                                            || $current_tab == "data_apoteker"
                                            || $current_tab == "data_transaksi_obat"
                                            || $current_tab == "data_pasien"
                                            ) ? 'menu-open' : ''; ?>">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="data_admin.php?tab=data_admin" class="nav-link <?= $current_tab == 'data_admin' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Admin</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_transaksi_obat.php?tab=data_transaksi_obat" class="nav-link <?= $current_tab == 'data_transaksi_obat' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Transaksi Obat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_transaksi.php?tab=data_transaksi" class="nav-link <?= $current_tab == 'data_transaksi' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Transaksi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_berita.php?tab=data_berita" class="nav-link <?= $current_tab == 'data_berita' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Berita</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_dokter.php?tab=data_dokter" class="nav-link <?= $current_tab == 'data_dokter' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Dokter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_apoteker.php?tab=data_apoteker" class="nav-link <?= $current_tab == 'data_apoteker' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Apoteker</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_rekam_medis.php?tab=data_rekam_medis" class="nav-link <?= $current_tab == 'data_rekam_medis' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Rekam Medis</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_pasien.php?tab=data_pasien" class="nav-link <?= $current_tab == 'data_pasien' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Pasien</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_obat.php?tab=data_obat" class="nav-link <?= $current_tab == 'data_obat' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Obat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_poli.php?tab=data_poli" class="nav-link <?= $current_tab == 'data_poli' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Poli</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="laporan.php?tab=laporan" class="nav-link <?= $current_tab == 'laporan' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-calendar"></i>
                            <p>
                                Laporan
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION["login_admin"])) : ?>
                    <li class="nav-item ">
                        <a href="logout.php" onclick="return confirm('yakin ingin logout?')" class="nav-link">
                            <i class="nav-icon fa-solid fa-right-from-bracket" style="color: #ff0000;"></i>
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