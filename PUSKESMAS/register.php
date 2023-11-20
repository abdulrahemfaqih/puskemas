<?php include "data/database.php"; ?>
<?php

if (isset($_POST["submitergist"])) {
    if (registrasiPasien($_POST)) {
        $nama_pasien = $_POST["name"];
        echo "<script>
            alert('Registrasi Pasien $nama_pasien berhasil, silah login untuk reservasi');
            window.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>alert('Registrasi Pasien $nama_pasien gagal, silahkan registrasi kembali')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" id="home">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="front/css/bootstrap.min (1).css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="front/css/style.css">
    <link rel="stylesheet" href="front/css/user_login.css">
</head>

<body>
    <!-- login detials  -->
    <div class="container">
        <div class="login-container">
            <h2>Registrasi</h2>
            <form action="" method="post">
                <?php $id_pasien = generateID("tb_pasien", "id_pasien", "PS"); ?>
                <input type="hidden" class="form-control" name="id_pasien" value="<?= $id_pasien ?>">
                <div class="form-group">
                    <label for="name">Nama :</label>
                    <input type="name" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="alamat" class="form-control" name="alamat" id="alamat" required>
                </div>
                <div class="form-group">
                    <label for="nohp">No HP :</label>
                    <input type="nohp" class="form-control" name="nohp" id="nohp" required>
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="username" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="password">Jenis Kelamin</label>
                    <select name="jk_pasien" id="jkpelanggan">
                        <option value="" disabled selected>-- PILIH JENIS KELAMIN --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <a href="#"><button type="submit" class="btn btn-primary" name="submitergist">Register</button></a>
                <div class="btn-container">
                    <span>
                        <a href="user_login.php" class="btn btn-link">Login</a>
                    </span>
                </div>

            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>