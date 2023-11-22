<section class="header">
    <nav class="navbar navbar-expand-lg  sticky-navbar" style="background-color: #2C3E50;" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="logo">
                    <img src="front/images/logoNav.png" alt="Gambar Logo Navbar" width="65">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h3 class="mehran text-light">PUSKESMAS TELANG</h3>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav ms-auto justify-content-end navbar1">
                    <li class="nav-item mr-3">
                        <a class="nav-link " href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#about">Layanan Puskesmas</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="reservasi.php">Reservasi</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#doctors">Daftar Dokter</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#contact">Hubungi Kami</a>
                    </li>
                    <?php if (!empty($_SESSION["login_pasien"])) : ?>
                        <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="text-light"><?= $_SESSION["nama_pasien"] ?></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item bg-danger" href="logout.php" onclick="return confirm('apakah anda yakin ingin logout')">Logout</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>

        </div>
        </div>
    </nav>
</section>