<?php include "data/database.php"; ?>
<?php
session_start();
if (isset($_POST['submitlogin'])) {
    $password = $_POST["password"];
    $userame = $_POST["username"];

    $data_pasien = getDataPasien($userame);
    if (!empty($data_pasien)) {
        if (md5($password) == $data_pasien["PASIEN_PASSWORD"]) {
            $_SESSION["login_pasien"] = true;
            $_SESSION["nama_pasien"] = $data_pasien["NAMA_PASIEN"];
            $_SESSION["username_pasien"] = $data_pasien["PASIEN_USERNAME"];
            $nama = $_SESSION["nama_pasien"];
            echo "<script>
            alert('login sukses, Selamat Datang $nama')
            window.location.href = 'index.php';
            </script>";
            exit;
        } else {
            $error = "<script>alert('password dan username tidak cocok')</script>";
        }
    } else {
        echo "<script>alert('username tidak ditemukan')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" id="home">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link rel="stylesheet" href="front/css/bootstrap.min (1).css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="front/css/style.css">
    <link rel="stylesheet" href="front/css/user_login.css">
</head>

<body>

    <!-- login detials  -->
    <div class="container">
        <div class="login-container">
            <h2>User Login</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="useroremail">Username :</label>
                    <input type="text" class="form-control" id="useroremail" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <a href="#"><button type="submit" class="btn btn-primary" name="submitlogin">Login</button></a>
                <div class="btn-container">
                    <span>
                        <a href="index.php" class="btn btn-link">Batal</a>
                    </span>
                    <span>
                        <a href="register.php" class="btn btn-link">Register</a>
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