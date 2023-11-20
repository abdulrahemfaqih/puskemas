<?php
define("DB", mysqli_connect("localhost", "root", "", "puskemas1"));

function getDataLogin($username)
{
    return mysqli_query(DB, "SELECT tb_user.*, tb_dokter.ID_USER AS ID_DOKTER_USER, tb_dokter.*, tb_admin.ID_USER AS ID_ADMIN_USER, tb_admin.*
    FROM tb_user
    LEFT JOIN tb_dokter ON tb_user.ID_USER = tb_dokter.ID_USER
    LEFT JOIN tb_admin ON tb_user.ID_USER = tb_admin.ID_USER
    WHERE tb_user.USERNAME = '$username'")->fetch_assoc();

}

$data_login = getDataLogin('admin1');
if (!empty($data_login)) {
    var_dump($data_login);
} else {
    var_dump("gak ada");
}

