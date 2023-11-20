-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 02:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ADMIN_ID` varchar(10) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_ADMIN` varchar(50) DEFAULT NULL,
  `TELP_ADMIN` varchar(20) DEFAULT NULL,
  `ALAMAT_ADMIN` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_rm_obat`
--

CREATE TABLE `tb_detail_rm_obat` (
  `ID` int(11) NOT NULL,
  `ID_RM` varchar(255) DEFAULT NULL,
  `ID_OBAT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `ID_DOKTER` varchar(255) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_DOKTER` varchar(255) DEFAULT NULL,
  `SPESIALIS` varchar(255) DEFAULT NULL,
  `JENIS_KELAMIN_DOKTER` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `ALAMAT_DOKTER` varchar(255) DEFAULT NULL,
  `TELP_DOKTER` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`ID_DOKTER`, `ID_USER`, `NAMA_DOKTER`, `SPESIALIS`, `JENIS_KELAMIN_DOKTER`, `ALAMAT_DOKTER`, `TELP_DOKTER`) VALUES
('DK0002', 183, 'Dr. Faqih Triadi', 'Spesialis Mata', 'Laki-Laki', 'Dsn Bedak Utara 002, Kamal, Banyu Ajuh, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162', '089524754536'),
('DK0003', 184, 'Dr. Faris Wafda', 'Dokter Umum', 'Laki-Laki', 'Dsn Bedak Utara 002, Kamal, Banyu Ajuh, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162', '08935735356'),
('DK0004', 188, 'Dr. Faisal Triadi', 'Spesialis Penyakit Dalam', 'Laki-Laki', 'Dsn Bedak Utara 002, Kamal, Banyu Ajuh, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162', '08946753545'),
('DK0005', 189, 'Dr. Syaiful Dani', 'Spesialis THT', 'Laki-Laki', 'Dsn Bedak Utara 002, Kamal, Banyu Ajuh, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162', '089446375678'),
('DK0006', 190, 'Dr. Fatima Malik', 'Spesialis Anak', 'Perempuan', 'Dsn Bedak Utara 002, Kamal, Banyu Ajuh, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162', '08935635775');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_obat`
--

CREATE TABLE `tb_jenis_obat` (
  `ID_JENIS_OBAT` varchar(10) NOT NULL,
  `NAMA_JENIS_OBAT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_obat`
--

CREATE TABLE `tb_kategori_obat` (
  `ID_KATEGORI_OBAT` varchar(10) NOT NULL,
  `NAMA_KATEGORI_OBAT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `ID_OBAT` varchar(255) NOT NULL,
  `ID_JENIS_OBAT` varchar(10) DEFAULT NULL,
  `ID_KATEGORI_OBAT` varchar(10) DEFAULT NULL,
  `NAMA_OBAT` varchar(255) DEFAULT NULL,
  `STOK_OBAT` int(11) DEFAULT NULL,
  `HARGA_OBAT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `ID_PASIEN` varchar(255) NOT NULL,
  `NAMA_PASIEN` varchar(255) DEFAULT NULL,
  `TELP` int(11) DEFAULT NULL,
  `ALAMAT` varchar(255) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASIEN_PASSWORD` varchar(100) DEFAULT NULL,
  `PASIEN_USERNAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`ID_PASIEN`, `NAMA_PASIEN`, `TELP`, `ALAMAT`, `JENIS_KELAMIN`, `EMAIL`, `PASIEN_PASSWORD`, `PASIEN_USERNAME`) VALUES
('PS0002', 'hanna', 2147483647, 'Dsn Bedak Utara 002, Kamal, Banyu Ajuh, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162', 'Perempuan', 'hannayys1@gmail.com', '202cb962ac59075b964b07152d234b70', 'hanna123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `ID_PEMERIKSAAN` varchar(25) NOT NULL,
  `ID_DOKTER` varchar(255) DEFAULT NULL,
  `ID_POLI` int(11) DEFAULT NULL,
  `ID_RESERVASI` varchar(255) DEFAULT NULL,
  `TGL_PERIKSA` date DEFAULT NULL,
  `DIAGNOSA` varchar(255) DEFAULT NULL,
  `HASIL_PEMERIKSAAN` varchar(255) DEFAULT NULL,
  `TINDAKAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `ID_POLI` int(11) NOT NULL,
  `NAMA_POLI` varchar(255) DEFAULT NULL,
  `RUANGAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `ID_RM` varchar(255) NOT NULL,
  `ID_PEMERIKSAAN` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `ID_RESERVASI` varchar(255) NOT NULL,
  `ID_PASIEN` varchar(255) DEFAULT NULL,
  `TGL_ANTRIAN` date DEFAULT NULL,
  `KELUHAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `ID_TRANSAKSI` varchar(255) NOT NULL,
  `ID_RM` varchar(255) DEFAULT NULL,
  `TGL_TRANSAKSI` date DEFAULT NULL,
  `JUMLAH_PEMBAYARAN` int(11) DEFAULT NULL,
  `KETERANGAN_PEMBAYARAN` varchar(255) DEFAULT NULL,
  `STATUS_PEMBAYARAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `LEVEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID_USER`, `USERNAME`, `PASSWORD`, `LEVEL`) VALUES
(183, 'Faqih', '202cb962ac59075b964b07152d234b70', 1),
(184, 'fariswafda', '202cb962ac59075b964b07152d234b70', 1),
(188, 'Faisal', '202cb962ac59075b964b07152d234b70', 1),
(189, 'Dani', '202cb962ac59075b964b07152d234b70', 1),
(190, 'fatimamalik', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`ADMIN_ID`),
  ADD KEY `FK_RELATIONSHIP_14` (`ID_USER`);

--
-- Indexes for table `tb_detail_rm_obat`
--
ALTER TABLE `tb_detail_rm_obat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_RELATIONSHIP_10` (`ID_OBAT`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_RM`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`ID_DOKTER`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_USER`);

--
-- Indexes for table `tb_jenis_obat`
--
ALTER TABLE `tb_jenis_obat`
  ADD PRIMARY KEY (`ID_JENIS_OBAT`);

--
-- Indexes for table `tb_kategori_obat`
--
ALTER TABLE `tb_kategori_obat`
  ADD PRIMARY KEY (`ID_KATEGORI_OBAT`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`ID_OBAT`),
  ADD KEY `FK_RELATIONSHIP_11` (`ID_KATEGORI_OBAT`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_JENIS_OBAT`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`ID_PASIEN`);

--
-- Indexes for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`ID_PEMERIKSAAN`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_RESERVASI`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_DOKTER`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_POLI`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`ID_POLI`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`ID_RM`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_PEMERIKSAAN`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`ID_RESERVASI`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_PASIEN`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_RM`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `FK_MEMILIKI5` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_rm_obat`
--
ALTER TABLE `tb_detail_rm_obat`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_OBAT`) REFERENCES `tb_obat` (`ID_OBAT`),
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_RM`) REFERENCES `tb_rekammedis` (`ID_RM`);

--
-- Constraints for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_KATEGORI_OBAT`) REFERENCES `tb_kategori_obat` (`ID_KATEGORI_OBAT`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_JENIS_OBAT`) REFERENCES `tb_jenis_obat` (`ID_JENIS_OBAT`);

--
-- Constraints for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_RESERVASI`) REFERENCES `tb_reservasi` (`ID_RESERVASI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_DOKTER`) REFERENCES `tb_dokter` (`ID_DOKTER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_POLI`) REFERENCES `tb_poli` (`ID_POLI`);

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_PEMERIKSAAN`) REFERENCES `tb_pemeriksaan` (`ID_PEMERIKSAAN`);

--
-- Constraints for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tb_pasien` (`ID_PASIEN`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_RM`) REFERENCES `tb_rekammedis` (`ID_RM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
