<?php
include "koneksi.php";
include "../config/config.php";

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


// ================================= // DOKTER // ================================== //
function getAllDataDokter()
{
    return mysqli_query(DB, "SELECT `ID_DOKTER`, `NAMA_DOKTER`, `SPESIALIS`, `JENIS_KELAMIN_DOKTER`, `ALAMAT_DOKTER`, `TELP_DOKTER` FROM `tb_dokter`")->fetch_all(MYSQLI_ASSOC);
}

function insertUser($data)
{
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars(md5($data["password"])); // encrypted
    $level = 1;
    ;

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

// ================================================================================================= //

// ==============================================Delete sDokter================================= //

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


// ================================================================================================= //

// ========================================Register Pelanggan============================================= //
function registPelanggan($data)
{
    $id_pelanggan = htmlspecialchars($data['id_pasien']);
    $nama = htmlspecialchars($data['name']);
    $username = htmlspecialchars($data['username']);
    $nohp = htmlspecialchars($data['nohp']);
    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars(md5($data['password'])); // Encrypt Password
    $jkpelanggan = htmlspecialchars($data['jkpelanggan']);

    $query = "INSERT INTO tb_pasien(ID_PASIEN, NAMA_PASIEN, TELP,ALAMAT, JENIS_KELAMIN, EMAIL, PASIEN_PASSWORD, PASIEN_USERNAME) VALUES ('$id_pelanggan', '$nama', '$nohp','$alamat', '$jkpelanggan', '$email', '$password', '$username')";
    $result = mysqli_query(DB, $query);
    return $result;
}

// ==============================================LOGIN=================================//

function validateLogin($data)
{
    $useroremail = htmlspecialchars($data['useroremail']);
    $password = htmlspecialchars(md5($data['password']));

    return mysqli_query(DB, "SELECT * FROM tb_pasien WHERE PASIEN_USERNAME = '$useroremail' AND PASIEN_PASSWORD = '$password'")->fetch_all(MYSQLI_ASSOC);
}



function generateID($table, $kolom, $prefix)
{

    $lastID = query("SELECT MAX($kolom) as maxID FROM $table")[0];
    $id = $lastID["maxID"];
    $urutan = (int) substr($id, 2, 4);
    $urutan++;
    $new_id = $prefix . sprintf("%04s", $urutan);
    return $new_id;
}

function getAllJenisObat()
{
    return mysqli_query(DB, "SELECT * FROM tb_jenis_obat");
}

function formatHarga(float|int|string $harga): int|float|string
{
    return "Rp. " . number_format($harga, 2, ",", ".");
}