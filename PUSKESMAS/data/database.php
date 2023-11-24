<?php

define("DB", mysqli_connect("localhost", "root", "", "puskesmas1"));

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

function getAllJenisObat()
{
    return mysqli_query(DB, "SELECT * FROM tb_jenis_obat");
}

function getAllKateObat()
{
    return mysqli_query(DB, "SELECT * FROM tb_kategori_obat");
}


function ubahObat($data)
{
    $id_obat = htmlspecialchars($data["id_obat"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $id_jenis_obat = htmlspecialchars($data["id_jenis_obat"]);
    $id_kategori_obat = htmlspecialchars($data["id_kategori_obat"]);
    $stok_obat = htmlspecialchars($data["stok_obat"]);
    $harga_obat = htmlspecialchars($data["harga_obat"]);

    mysqli_query(DB, "UPDATE tb_obat SET
    NAMA_OBAT = '$nama_obat',
    ID_JENIS_OBAT = '$id_jenis_obat',
    ID_KATEGORI_OBAT = '$id_kategori_obat',
    STOK_OBAT = '$stok_obat',
    HARGA_OBAT = '$harga_obat'
    WHERE ID_OBAT = '$id_obat'");
}

function tambahObat($data)
{
    $id_obat = htmlspecialchars($data["id_obat"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $id_jenis_obat = htmlspecialchars($data["id_jenis_obat"]);
    $id_kategori_obat = htmlspecialchars($data["id_kategori_obat"]);
    $stok_obat = htmlspecialchars($data["stok_obat"]);
    $harga_obat = htmlspecialchars($data["harga_obat"]);

    mysqli_query(DB, "INSERT INTO tb_obat (ID_OBAT, ID_JENIS_OBAT, ID_KATEGORI_OBAT, NAMA_OBAT, STOK_OBAT, HARGA_OBAT)
                      VALUES ('$id_obat', '$id_jenis_obat', '$id_kategori_obat', '$nama_obat', '$stok_obat', '$harga_obat')");
}

function hapusObat($id_obat)
{
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

function registrasiPasien($data)
{
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

function insertUser($data, $level)
{
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars(md5($data["password"]));

    return mysqli_query(DB, "INSERT INTO tb_user (USERNAME, PASSWORD, LEVEL) VALUES ('$username', '$password', '$level')");
}

function InsertDataDokter($data)
{


    $id_user = mysqli_insert_id(DB);


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


function getAllAdmin()
{
    return mysqli_query(DB, "SELECT tb_admin.*, tb_user.USERNAME
    FROM tb_admin
    LEFT JOIN tb_user ON tb_admin.ID_USER = tb_user.ID_USER
    ")->fetch_all(MYSQLI_ASSOC);
}

function tambahAdmin($data)
{
    $id_user = mysqli_insert_id(DB);
    $id_admin = htmlspecialchars($data["id_admin"]);
    $nama_admin = htmlspecialchars($data["nama_admin"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    return mysqli_query(DB, "INSERT INTO tb_admin (ADMIN_ID, ID_USER, NAMA_ADMIN, TELP_ADMIN, ALAMAT_ADMIN)
    VALUES
    ('$id_admin', '$id_user', '$nama_admin', '$no_telp', '$alamat')
    ");
}

function ubahAdmin($data)
{
    $id_admin = htmlspecialchars($data["id_admin"]);
    $nama_admin = htmlspecialchars($data["nama_admin"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    return mysqli_query(DB, "UPDATE tb_admin SET
    NAMA_ADMIN = '$nama_admin',
    TELP_ADMIN = '$no_telp',
    ALAMAT_ADMIN = '$alamat'
    WHERE ADMIN_ID = '$id_admin'
    ");
}

function hapusAdmin($id_admin)
{
    return mysqli_query(DB, "DELETE FROM tb_admin WHERE ADMIN_ID = '$id_admin'");
}

// ======================================= TABEL POLI =================================================

function allPoli()
{
    return mysqli_query(DB, "SELECT * FROM tb_poli")->fetch_all(MYSQLI_ASSOC);
}

function tambahPoli($data)
{
    $id_poli = htmlspecialchars($data["id_poli"]);
    $nama_poli = htmlspecialchars($data["nama_poli"]);
    $ruangan = htmlspecialchars($data["ruangan"]);

    return mysqli_query(DB, "INSERT INTO tb_poli (ID_POLI, NAMA_POLI, RUANGAN)
    VALUES
    ('$id_poli', '$nama_poli', '$ruangan')
    ");
}

function ubahPoli($data)
{
    $id_poli = htmlspecialchars($data["id_poli"]);
    $nama_poli = htmlspecialchars($data["nama_poli"]);
    $ruangan = htmlspecialchars($data["ruangan"]);

    return mysqli_query(DB, "UPDATE tb_poli SET
    NAMA_POLI = '$nama_poli',
    RUANGAN = '$ruangan'
    WHERE ID_POLI = '$id_poli'
");
}

function hapusPoli($id_poli)
{
    return mysqli_query(DB, "DELETE FROM tb_poli WHERE ID_POLI = '$id_poli'");
}


// ============================================== LOGIN =================================================

function getUsername($username)
{
    $result = query("SELECT * FROM tb_user WHERE USERNAME = '$username'")[0];
    return $result;
}

function getDataLogin($username)
{
    return mysqli_query(DB, "
        SELECT
            tb_user.*,
            tb_dokter.ID_USER AS ID_DOKTER_USER,
            tb_dokter.*,
            tb_admin.ID_USER AS ID_ADMIN_USER,
            tb_admin.*,
            tb_apoteker.ID_USER AS ID_APOTEKER_USER,
            tb_apoteker.*
        FROM
            tb_user
            LEFT JOIN tb_dokter ON tb_user.ID_USER = tb_dokter.ID_USER
            LEFT JOIN tb_admin ON tb_user.ID_USER = tb_admin.ID_USER
            LEFT JOIN tb_apoteker ON tb_apoteker.ID_USER = tb_apoteker.ID_USER
        WHERE
            tb_user.USERNAME = '$username'
    ")->fetch_assoc();
}

//==============================TABEL PEMERIKSAAN ======================

function getDataAntrianAndPemeriksaanByIdPasien($id_pasien)
{
    return mysqli_query(DB, "SELECT tb_pemeriksaan.*, tb_pasien.NAMA_PASIEN  FROM tb_pemeriksaan
    LEFT JOIN tb_pasien ON tb_pemeriksaan.ID_PASIEN = tb_pasien.ID_PASIEN
    WHERE tb_pemeriksaan.ID_PASIEN = '$id_pasien'")->fetch_all(MYSQLI_ASSOC);
}
function getDataAntrianAndPemeriksaanWhereDokterNull()
{
    return mysqli_query(DB, "SELECT tb_pemeriksaan.*, tb_pasien.NAMA_PASIEN
    FROM tb_pemeriksaan
    LEFT JOIN tb_pasien ON tb_pemeriksaan.ID_PASIEN = tb_pasien.ID_PASIEN
    WHERE tb_pemeriksaan.ID_DOKTER IS NULL")
        ->fetch_all(MYSQLI_ASSOC);
}
function getDataAntrianAndPemeriksaanWhereIdDokter($id_dokter)
{
    return mysqli_query(DB, "SELECT tb_pemeriksaan.*, tb_pasien.NAMA_PASIEN
    FROM tb_pemeriksaan
    LEFT JOIN tb_pasien ON tb_pemeriksaan.ID_PASIEN = tb_pasien.ID_PASIEN
    WHERE ID_DOKTER = '$id_dokter'")
        ->fetch_all(MYSQLI_ASSOC);
}
function getDataAntrianAndPemeriksaanByIdPem($id_pemeriksaan)
{
    return mysqli_query(DB, "SELECT tb_pemeriksaan.*, tb_pasien.NAMA_PASIEN  FROM tb_pemeriksaan
    LEFT JOIN tb_pasien ON tb_pemeriksaan.ID_PASIEN = tb_pasien.ID_PASIEN
    WHERE ID_PEMERIKSAAN = '$id_pemeriksaan'")->fetch_all(MYSQLI_ASSOC)[0];
}

function hapusPemeriksan($id_pemeriksaan)
{
    return mysqli_query(DB, "DELETE FROM tb_pemeriksaan WHERE ID_PEMERIKSAAN = '$id_pemeriksaan'");
}



function tambahPemeriksaan($data)
{
    $id_pe = htmlspecialchars($data["id_pe"]);
    $id_pasien = htmlspecialchars($data["id_pasien"]);
    $antrian = htmlspecialchars($data["no_antrian"]);
    $tgl_antrian = htmlspecialchars($data["tgl_reservasi"]);
    $keluhan = htmlspecialchars($data["keluhan"]);
    return mysqli_query(DB, "INSERT INTO tb_pemeriksaan (ID_PEMERIKSAAN, ID_PASIEN, NO_ANTRIAN, TGL_RESERVASI, KELUHAN)
    VALUES
    ('$id_pe', '$id_pasien', '$antrian', '$tgl_antrian', '$keluhan' )
    ");
}

function generateNoAntrian()
{
    $last_no_antrian = query("SELECT TGL_RESERVASI,  MAX(NO_ANTRIAN) AS no_antrian FROM tb_pemeriksaan")[0];

    if ($last_no_antrian) {
        $last_date = strtotime($last_no_antrian["TGL_RESERVASI"]);
        $current_date = strtotime(date("Y-m-d"));
        if ($current_date == $last_date) {
            $max_antrian = (int)$last_no_antrian["no_antrian"];
        } else {
            $max_antrian = 0;
        }
    }
    $next_nomor = $max_antrian + 1;
    return $next_nomor;
}

function updatePemeriksaanById($data)
{
    $id_pemeriksaan = $data["id_pemeriksaan"];
    $tanggal = $data["tanggal"];
    $dokter = $data["dokter"];

    return mysqli_query(DB, "UPDATE tb_pemeriksaan SET
    TGL_PERIKSA = '$tanggal',
    ID_DOKTER  = '$dokter'
    WHERE ID_PEMERIKSAAN = '$id_pemeriksaan'
    ");
}

function hasilPemeriksaan($data)
{
    $id_pemeriksaan = $data["id_pemeriksaan"];
    $poli = $data["poli"];
    $diagnosa = $data["diagnosa"];
    $hasil_pemeriksaan = $data["hasil_pemeriksaan"];
    $tindakan = $data["tindakan"];
    $status = 1;

    return mysqli_query(DB, "UPDATE tb_pemeriksaan SET
    ID_POLI = '$poli',
    DIAGNOSA = '$diagnosa',
    HASIL_PEMERIKSAAN = '$hasil_pemeriksaan',
    TINDAKAN = '$tindakan',
    `STATUS` = '$status'
    WHERE ID_PEMERIKSAAN = '$id_pemeriksaan'
    ");
}

// =========================== TABEL TRANSAKSI ============================

function tambahTransaksi($id_tr, $id_pe, $id_ps, $id_do)
{
    $id_transaksi = $id_tr;
    $id_pemeriksaan = $id_pe;
    $tanggal_transaksi = date("Y-m-d");
    $id_pasien = $id_ps;
    $id_dokter = $id_do;
    $status = 0;

    return mysqli_query(DB, "INSERT INTO tb_transaksi_pemeriksaan (ID_TRANSAKSI, ID_PEMERIKSAAN, TGL_TRANSAKSI, JUMLAH_PEMBAYARAN, STATUS_PEMBAYARAN, ID_PASIEN, ID_DOKTER)
    VALUES
    ('$id_transaksi', '$id_pemeriksaan', '$tanggal_transaksi',0 , '$status', '$id_pasien', '$id_dokter')
    ");
}



function getDataTransaksiPemeriksaan()
{
    return mysqli_query(DB, "SELECT tb_transaksi_pemeriksaan.*, tb_pasien.NAMA_PASIEN, tb_dokter.NAMA_DOKTER
    FROM tb_transaksi_pemeriksaan
    LEFT JOIN tb_pasien ON tb_transaksi_pemeriksaan.ID_PASIEN = tb_pasien.ID_PASIEN
    LEFT JOIN tb_dokter ON tb_transaksi_pemeriksaan.ID_DOKTER = tb_dokter.ID_DOKTER
    ")->fetch_all(MYSQLI_ASSOC);
}

function getDataTransaksiPemeriksaanById($id_transaksi)
{
    return mysqli_query(DB, "SELECT tb_transaksi_pemeriksaan.*, tb_pasien.NAMA_PASIEN, tb_dokter.NAMA_DOKTER
    FROM tb_transaksi_pemeriksaan
    LEFT JOIN tb_pasien ON tb_transaksi_pemeriksaan.ID_PASIEN = tb_pasien.ID_PASIEN
    LEFT JOIN tb_dokter ON tb_transaksi_pemeriksaan.ID_DOKTER = tb_dokter.ID_DOKTER
    WHERE ID_TRANSAKSI = '$id_transaksi'
    ")->fetch_all(MYSQLI_ASSOC);
}

function updateTransaksiPemeriksaanById($data)
{
    $id_transaksi = $data["id_transaksi"];
    $jumlah_pembayaran = $data["jumlah_pembayaran"];
    $status_pembayaran = $data["status_pembayaran"];
    $keterangan_pembayaran = $data["keterangan_pembayaran"];

    return mysqli_query(DB, "UPDATE tb_transaksi_pemeriksaan SET
    JUMLAH_PEMBAYARAN = '$jumlah_pembayaran',
    KETERANGAN = '$keterangan_pembayaran',
    STATUS_PEMBAYARAN = '$status_pembayaran'
    WHERE ID_TRANSAKSI = '$id_transaksi'
    ");
}

function getDataTransaksiPemeriksaanByStatus()
{
    return mysqli_query(DB, "SELECT tb_transaksi_pemeriksaan.*, tb_pasien.NAMA_PASIEN, tb_dokter.NAMA_DOKTER
    FROM tb_transaksi_pemeriksaan
    LEFT JOIN tb_pasien ON tb_transaksi_pemeriksaan.ID_PASIEN = tb_pasien.ID_PASIEN
    LEFT JOIN tb_dokter ON tb_transaksi_pemeriksaan.ID_DOKTER = tb_dokter.ID_DOKTER
    WHERE STATUS_PEMBAYARAN = 1
    ")->fetch_all(MYSQLI_ASSOC);
}


function getDataPemeriksaanByStatus()
{
    return mysqli_query(DB, "SELECT tb_pemeriksaan.*, tb_pasien.NAMA_PASIEN
    FROM tb_pemeriksaan
    LEFT JOIN tb_pasien ON tb_pemeriksaan.ID_PASIEN = tb_pasien.ID_PASIEN
    WHERE `STATUS` = '1'")->fetch_all(MYSQLI_ASSOC);
}


// ================================ TABEL APOTEKER ===============================




function getAllApoteker()
{
    return mysqli_query(DB, "SELECT tb_apoteker.*, tb_user.USERNAME
    FROM tb_apoteker
    LEFT JOIN tb_user ON tb_apoteker.ID_USER = tb_user.ID_USER
    ")->fetch_all(MYSQLI_ASSOC);
}

function tambahApoteker($data)
{
    $id_user = mysqli_insert_id(DB);
    $id_apoteker = htmlspecialchars($data["id_apoteker"]);
    $nama_apoteker = htmlspecialchars($data["nama_apoteker"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    return mysqli_query(DB, "INSERT INTO tb_apoteker (ID_APOTEKER, ID_USER, NAMA_APOTEKER, NO_TELP, ALAMAT_APOTEKER)
    VALUES
    ('$id_apoteker', '$id_user', '$nama_apoteker', '$no_telp', '$alamat')
    ");
}

function ubahApoteker($data)
{
    $id_apoteker = htmlspecialchars($data["id_apoteker"]);
    $nama_apoteker = htmlspecialchars($data["nama_apoteker"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    return mysqli_query(DB, "UPDATE tb_apoteker SET
    NAMA_APOTEKER = '$nama_apoteker',
    NO_TELP = '$no_telp',
    ALAMAT_APOTEKER = '$alamat'
    WHERE ID_APOTEKER = '$id_apoteker'
    ");
}

function hapusApoteker($id_apoteker)
{
    return mysqli_query(DB, "DELETE FROM tb_apoteker WHERE ID_APOTEKER = '$id_apoteker'");
}


// function deleteUsername($)