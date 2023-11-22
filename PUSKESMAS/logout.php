<?php
session_start();
$_SESSION["login_pasien"] = [];
$_SESSION["nama_pasien"] = [];
$_SESSION["username_pasien"] = [];
$_SESSION["id_pasien"] = [];


header("Location:index.php");
exit;
