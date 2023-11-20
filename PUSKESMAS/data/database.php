<?php

define("DB", mysqli_connect("localhost", "root", "", "puskesmas"));

function query($query)
{
    $result = mysqli_query(DB, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// =========================================== TABEL OBAT ============================================================

function getAllObat()
{
    return mysqli_query(DB, "SELECT * FROM tb_obat AS obat
    JOIN tb_jenis_obat AS jenis ON obat.ID_JENIS_OBAT = jenis.ID_JENIS_OBAT
    JOIN tb_kategori_obat AS kategori ON obat.ID_KATEGORI_OBAT = kategori.ID_KATEGORI_OBAT")->fetch_all(MYSQLI_ASSOC);
}
function generateID($table, $kolom, $prefix)
{

    $lastID = query("SELECT MAX($kolom) as maxID FROM $table")[0];
    $id = $lastID["maxID"];
    $urutan = (int)substr($id, 2, 4);
    $urutan++;
    $new_id = $prefix . sprintf("%04s", $urutan);
    return $new_id;
}

function getAllJenisObat() {
    return mysqli_query(DB, "SELECT * FROM tb_jenis_obat");
}

function getAllKateObat() {
    return mysqli_query(DB, "SELECT * FROM tb_kategori_obat");
}


function ubahObat($data) {
    $id_obat = htmlspecialchars($data["id_obat"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $id_jenis_obat = htmlspecialchars($data["id_jenis_obat"]);
    $id_kategori_obat = htmlspecialchars($data["id_kategori_obat"]);
    $stok_obat = htmlspecialchars($data["stok_obat"]);
    $harga_obat = htmlspecialchars($data["harga_obat"]);

    mysqli_query(DB,"UPDATE tb_obat SET
    NAMA_OBAT = '$nama_obat',
    ID_JENIS_OBAT = '$id_jenis_obat',
    ID_KATEGORI_OBAT = '$id_kategori_obat',
    STOK_OBAT = '$stok_obat',
    HARGA_OBAT = '$harga_obat'
    WHERE ID_OBAT = '$id_obat'");
}

function tambahObat($data) {
    $id_obat = htmlspecialchars($data["id_obat"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $id_jenis_obat = htmlspecialchars($data["id_jenis_obat"]);
    $id_kategori_obat = htmlspecialchars($data["id_kategori_obat"]);
    $stok_obat = htmlspecialchars($data["stok_obat"]);
    $harga_obat = htmlspecialchars($data["harga_obat"]);

    mysqli_query(DB, "INSERT INTO tb_obat (ID_OBAT, ID_JENIS_OBAT, ID_KATEGORI_OBAT, NAMA_OBAT, STOK_OBAT, HARGA_OBAT)
                      VALUES ('$id_obat', '$id_jenis_obat', '$id_kategori_obat', '$nama_obat', '$stok_obat', '$harga_obat')");
}

function hapusObat($id_obat) {
    mysqli_query(DB, "DELETE FROM tb_obat WHERE id_obat = '$id_obat'");
}

function formatHarga(float|int|string $harga): int|float|string
{
    return "Rp. " . number_format($harga, 2, ",", ".");
}

// ==================================== PASIEN ================================

function getDataPasien($username)
{
    return mysqli_query(DB, "SELECT * FROM tb_pasien WHERE PASIEN_USERNAME = '$username'")->fetch_all(MYSQLI_ASSOC)[0];
}

function registrasiPasien($data) {
    $id_pasien = htmlspecialchars($data['id_pasien']);
    $nama = htmlspecialchars($data['name']);
    $username = htmlspecialchars($data['username']);
    $nohp = htmlspecialchars($data['nohp']);
    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars(md5($data['password']));
    $jk_pasien = htmlspecialchars($data['jk_pasien']);

    $query = "INSERT INTO tb_pasien(ID_PASIEN, NAMA_PASIEN, TELP,ALAMAT, JENIS_KELAMIN, EMAIL, PASIEN_PASSWORD, PASIEN_USERNAME) VALUES ('$id_pasien', '$nama', '$nohp','$alamat', '$jk_pasien', '$email', '$password', '$username')";
    $result = mysqli_query(DB, $query);
    return $result;
}

// ======================================== TABEL DOKTER =============================================




function getAllDataDokter()
{
    return mysqli_query(DB, "SELECT `ID_DOKTER`, `NAMA_DOKTER`, `SPESIALIS`, `JENIS_KELAMIN_DOKTER`, `ALAMAT_DOKTER`, `TELP_DOKTER` FROM `tb_dokter`")->fetch_all(MYSQLI_ASSOC);
}

function insertUser($data)
{
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars(md5($data["password"]));
    $level = 2;

    return mysqli_query(DB, "INSERT INTO tb_user (USERNAME, PASSWORD, LEVEL) VALUES ('$username', '$password', '$level')");
}

function InsertDataDokter($data)
{


    $id_user = mysqli_insert_id(DB);


    // Extract dokter-related data from $data
    $id_dokter = htmlspecialchars($data['id_dokter']);
    $nama_dokter = htmlspecialchars($data['nama_dokter']);
    $spesialis = htmlspecialchars($data['spesialis']);
    $jk_dokter = htmlspecialchars($data['jenisk_dokter']);
    $alamat = htmlspecialchars($data['alamat']);
    $nohp_dokter = htmlspecialchars($data['nohp_dokter']);

    $query = "INSERT INTO tb_dokter(ID_DOKTER,ID_USER, NAMA_DOKTER, SPESIALIS, JENIS_KELAMIN_DOKTER, ALAMAT_DOKTER, TELP_DOKTER) VALUES ('$id_dokter','$id_user', '$nama_dokter', '$spesialis', '$jk_dokter', '$alamat', '$nohp_dokter')";

    return mysqli_query(DB, $query);
}



function editedDokter($data)
{
    $id = htmlspecialchars($data['id_dokter']);
    $nama = htmlspecialchars($data['nama_dokter']);
    $spesialis = htmlspecialchars($data['spesialis']);
    $jk_dokter = htmlspecialchars($data['jenisk_dokter']);
    $alamat = htmlspecialchars($data['alamat']);
    $nohp = htmlspecialchars($data['nohp_dokter']);

    return mysqli_query(DB, "UPDATE tb_dokter SET `NAMA_DOKTER`= '$nama',`SPESIALIS`='$spesialis',`JENIS_KELAMIN_DOKTER`='$jk_dokter',`ALAMAT_DOKTER`='$alamat',`TELP_DOKTER`='$nohp' WHERE ID_DOKTER = '$id'");
}



function deleteDokter($data)
{
    $id_dokter = $data['id_dokter'];
    $success = true;

    // Retrieve the associated user ID from tb_dokter
    $query_user_id = "SELECT ID_USER FROM tb_dokter WHERE ID_DOKTER = '$id_dokter'";
    $result_user_id = mysqli_query(DB, $query_user_id);

    if ($result_user_id && $row = mysqli_fetch_assoc($result_user_id)) {
        $id_user = $row['ID_USER'];

        // Delete from tb_dokter
        $result_dokter = mysqli_query(DB, "DELETE FROM tb_dokter WHERE ID_DOKTER = '$id_dokter'");

        // Delete from tb_user
        $result_user = mysqli_query(DB, "DELETE FROM tb_user WHERE ID_USER = '$id_user'");

        // Check for errors in either query
        if (!$result_dokter || !$result_user) {
            $success = false;
        }
    } else {
        $success = false;
    }

    // Rest of your code if needed

    return $success;
}


// ======================================= ADMIN =======================================================


function getAllAdmin() {
    return mysqli_query(DB, "SELECT * FROM tb_admin")->fetch_all(MYSQLI_ASSOC);
}

function tambahAdmin($data) {
    return mysqli_query(DB, "INSERT INTO tb_admin (ID_ADMIN, ")
}

// ======================================= TABEL POLI =================================================



// ============================================== LOGIN =================================================

function getUsername($username)
{
    $result = query("SELECT * FROM tb_user WHERE USERNAME = '$username'")[0];
    return $result;
}

function getDataLogin($username)
{
    return mysqli_query(DB, "SELECT tb_user.*, tb_dokter.ID_USER AS ID_DOKTER_USER, tb_dokter.*, tb_admin.ID_USER AS ID_ADMIN_USER, tb_admin.*
    FROM tb_user
    LEFT JOIN tb_dokter ON tb_user.ID_USER = tb_dokter.ID_USER
    LEFT JOIN tb_admin ON tb_user.ID_USER = tb_admin.ID_USER
    WHERE tb_user.USERNAME = '$username';")->fetch_assoc();
}