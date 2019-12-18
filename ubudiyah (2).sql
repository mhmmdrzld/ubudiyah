-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:18 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubudiyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(3, 'Hindu'),
(4, 'Budha'),
(5, 'Kristen Protestan'),
(6, 'Katolik'),
(7, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orang_tua` int(11) NOT NULL,
  `id_pesdik` int(11) NOT NULL,
  `nama_orang_tua` varchar(25) NOT NULL,
  `pekerjaan_orang_tua` varchar(25) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `alamat_orang_tua` text NOT NULL,
  `no_orang_tua` varchar(13) NOT NULL,
  `hub_orang_tua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`id_orang_tua`, `id_pesdik`, `nama_orang_tua`, `pekerjaan_orang_tua`, `id_agama`, `alamat_orang_tua`, `no_orang_tua`, `hub_orang_tua`) VALUES
(9, 9, 'Subagio', 'Petani', 1, 'Kurau', '12345', 'Anak Kandung'),
(11, 11, 'Rizani', 'PNS', 1, 'Bati-bati Tengah', '987654321', 'Ayah Kandung'),
(13, 13, 'Rifki', 'Dagang', 1, 'Bati-bati', '987654321', 'Teman');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `no_pendaftar` varchar(25) NOT NULL,
  `nama_pendaftar` varchar(25) NOT NULL,
  `bin_binti` varchar(25) NOT NULL,
  `status_pendaftar` varchar(15) DEFAULT NULL,
  `tahun_pendaftar` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `no_pendaftar`, `nama_pendaftar`, `bin_binti`, `status_pendaftar`, `tahun_pendaftar`) VALUES
(1, 'UBD-001', 'Muhammad Syahbani Adiguna', 'Subagio', 'Di Terima', '2019'),
(2, 'UBD-002', 'Rifki Rizani', 'Rizani', 'Di Terima', '2019'),
(3, 'UBD-003', 'Sulaiman', 'King', 'Di Terima', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_pendaftar` int(11) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_pendaftar`, `username`, `password`, `status`, `level`) VALUES
(1, NULL, 'admin', 'admin', 'Aktif', 'Admin'),
(6, 2, 'UBD-002', 'UBD-002', 'Aktif', 'Siswa'),
(8, 1, 'UBD-001', 'UBD-001', 'Aktif', 'Siswa'),
(9, 3, 'UBD-003', 'UBD-003', 'Aktif', 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `pernyataan`
--

CREATE TABLE `pernyataan` (
  `id_pernyataan` int(11) NOT NULL,
  `nama_pernyataan` text NOT NULL,
  `id_sub_penyataan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id_persyaratan` int(11) NOT NULL,
  `nama_persyaratan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`id_persyaratan`, `nama_persyaratan`) VALUES
(1, 'Usia Maksimum 21 Tahun'),
(2, 'Surat Pernyataan Peserta Didik Baru'),
(3, 'Surat Pernyataan Orang Tua/Wali'),
(4, 'Fotocopy Ijazah/STTB SD/MI (1 Lembar)'),
(6, 'Fotocopy Ijazah/STTB SMP/MTs (1 Lembar)'),
(7, 'Fotocopy Nilai UN/SHUN (1 Lembar)'),
(8, 'Fotocopy Akta Kelahiran'),
(9, 'Fotocopy Kartu Keluarga'),
(10, 'Fotocopy KTP Ayah dan Ibu'),
(11, 'Pas Foto 3 x 4 Sebanyak 6 Lembar'),
(12, 'Mengisi Kartu Pribadi');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_didik`
--

CREATE TABLE `peserta_didik` (
  `id_pesdik` int(11) NOT NULL,
  `no_pendaftar` varchar(25) NOT NULL,
  `nama_pesdik` varchar(25) NOT NULL,
  `nisn_pesdik` varchar(15) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `tempat_lahir_pesdik` varchar(25) NOT NULL,
  `tanggal_lahir_pesdik` varchar(25) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta_didik`
--

INSERT INTO `peserta_didik` (`id_pesdik`, `no_pendaftar`, `nama_pesdik`, `nisn_pesdik`, `id_agama`, `tempat_lahir_pesdik`, `tanggal_lahir_pesdik`, `id_kelas`, `jk`) VALUES
(9, 'UBD-001', 'Muhammad Syahbani Adiguna', '12345', 1, 'Banjarmasin', '2019-12-15', 3, 'Laki-laki'),
(11, 'UBD-002', 'Rifki Rizani', '91456', 1, 'Bati-bati', '2019-12-15', 1, 'Laki-laki'),
(13, 'UBD-003', 'Sulaiman', '1234567', 1, 'Pelaihari', '2019-12-16', 1, 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `sub_pernyataan`
--

CREATE TABLE `sub_pernyataan` (
  `id_sub_pernyataan` int(11) NOT NULL,
  `nama_sub_pernyataan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_pelajaran`
--

CREATE TABLE `tahun_pelajaran` (
  `id_tahun_pelajaran` int(11) NOT NULL,
  `nama_tahun_pelajaran` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_pelajaran`
--

INSERT INTO `tahun_pelajaran` (`id_tahun_pelajaran`, `nama_tahun_pelajaran`) VALUES
(1, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `wali_pesdik`
--

CREATE TABLE `wali_pesdik` (
  `id_wali` int(11) NOT NULL,
  `id_pesdik` int(11) NOT NULL,
  `nama_wali` varchar(25) DEFAULT NULL,
  `pekerjaan_wali` varchar(25) DEFAULT NULL,
  `id_agama` int(11) DEFAULT NULL,
  `alamat_wali` text,
  `no_wali` varchar(13) DEFAULT NULL,
  `hub_wali` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_pesdik`
--

INSERT INTO `wali_pesdik` (`id_wali`, `id_pesdik`, `nama_wali`, `pekerjaan_wali`, `id_agama`, `alamat_wali`, `no_wali`, `hub_wali`) VALUES
(9, 9, '', 'Ibu Rumah Tanggal', 1, 'Desa Sarikandi Kecamatan Kurau', '123456789', 'Ibu Kandung'),
(11, 11, 'Rizani Rifki', 'Ayah Rumah Tanggal', 1, 'Desa Sarikandi Kecamatan Kurau', '0192837465', 'Ayah Rumah Tanggal 2'),
(13, 13, 'Adiguna', 'Tani', 1, 'Kurau', '123456', 'Sekolah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_orang_tua`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pernyataan`
--
ALTER TABLE `pernyataan`
  ADD PRIMARY KEY (`id_pernyataan`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indexes for table `peserta_didik`
--
ALTER TABLE `peserta_didik`
  ADD PRIMARY KEY (`id_pesdik`);

--
-- Indexes for table `sub_pernyataan`
--
ALTER TABLE `sub_pernyataan`
  ADD PRIMARY KEY (`id_sub_pernyataan`);

--
-- Indexes for table `tahun_pelajaran`
--
ALTER TABLE `tahun_pelajaran`
  ADD PRIMARY KEY (`id_tahun_pelajaran`);

--
-- Indexes for table `wali_pesdik`
--
ALTER TABLE `wali_pesdik`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pernyataan`
--
ALTER TABLE `pernyataan`
  MODIFY `id_pernyataan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `peserta_didik`
--
ALTER TABLE `peserta_didik`
  MODIFY `id_pesdik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_pernyataan`
--
ALTER TABLE `sub_pernyataan`
  MODIFY `id_sub_pernyataan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_pelajaran`
--
ALTER TABLE `tahun_pelajaran`
  MODIFY `id_tahun_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wali_pesdik`
--
ALTER TABLE `wali_pesdik`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
