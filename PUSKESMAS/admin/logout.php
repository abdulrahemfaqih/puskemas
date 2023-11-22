<?php
session_start();
$_SESSION["login_admin"] = [];
$_SESSION["nama_admin"] = [];
$_SESSION["username_admin"] = [];
$_SESSION["level_admin"] = [];
$_SESSION["id_user_admin"] = [];

header("Location: login.php");
exit();
