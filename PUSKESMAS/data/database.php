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

function formatHarga(float|int|string $harga): int|float|string
{
    return "Rp. " . number_format($harga, 2, ",", ".");
}