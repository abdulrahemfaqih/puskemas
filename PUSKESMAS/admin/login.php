<?php
session_start();

include "../data/database.php";

if (isset($_POST["login"])) {

    $username = $_POST["USERNAME"];
    $password = $_POST["PASSWORD"];

    $user = getUsername($username);
    $username = $user["USERNAME"];
    $data_user = getDataLogin($username);
    $nama = isset($data_user["NAMA_ADMIN"]) ? $data_user["NAMA_ADMIN"] : $data_user["NAMA_DOKTER"];


    if (!empty($user)) {
        if ((md5($password)) == $user["PASSWORD"]) {
            $_SESSION["id_user_admin"] = $user["ID_USER"];
            $_SESSION["level_admin"] = $user["LEVEL"];
            $_SESSION["username_admin"] = $user["USERNAME"];
            $_SESSION["login_admin"] = true;
            $_SESSION["nama_admin"] = $nama;
            echo "<script>
            alert('login sukses, Selamat Datang $nama ')
            window.location.href = 'index.php';
            </script>";
            exit;
        }
        $error = "password dan username salah";
    }
    $error = "username tidak ditemukan";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="assets/index2.html" class="h1"><b>Form Login</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="USERNAME" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="PASSWORD" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login" class="btn btn-primary btn-block">LOGIN</button>
                        </div>

                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>