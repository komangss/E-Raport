-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25 Jan 2020 pada 15.53
-- Versi Server: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e_raport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Data_Kelas`
--

CREATE TABLE `Data_Kelas` (
  `id_data_kelas` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `index` int(8) NOT NULL,
  `id_wali` int(11) NOT NULL,
  `id_data_data_siswa` varchar(255) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Guru`
--

CREATE TABLE `Guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `nip` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_wali_kelas` int(1) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Jurusan`
--

CREATE TABLE `Jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Kelas`
--

CREATE TABLE `Kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama _kelas` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Mapel`
--

CREATE TABLE `Mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(32) NOT NULL,
  `is_mapel_jurusan` int(1) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Nilai_Siswa`
--

CREATE TABLE `Nilai_Siswa` (
  `id_nilai_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai_keterampilan` varchar(32) NOT NULL,
  `nilai_sikap` varchar(32) NOT NULL,
  `nilai_pengetahuan` varchar(32) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `SIswa`
--

CREATE TABLE `SIswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nis` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Tahun`
--

CREATE TABLE `Tahun` (
  `id_tahun` int(11) NOT NULL,
  `nama_jurusan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Data_Kelas`
--
ALTER TABLE `Data_Kelas`
  ADD PRIMARY KEY (`id_data_kelas`);

--
-- Indexes for table `Guru`
--
ALTER TABLE `Guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `Jurusan`
--
ALTER TABLE `Jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `Kelas`
--
ALTER TABLE `Kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `Mapel`
--
ALTER TABLE `Mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `Nilai_Siswa`
--
ALTER TABLE `Nilai_Siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`);

--
-- Indexes for table `SIswa`
--
ALTER TABLE `SIswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `Tahun`
--
ALTER TABLE `Tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Data_Kelas`
--
ALTER TABLE `Data_Kelas`
  MODIFY `id_data_kelas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Guru`
--
ALTER TABLE `Guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Jurusan`
--
ALTER TABLE `Jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Kelas`
--
ALTER TABLE `Kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Mapel`
--
ALTER TABLE `Mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Nilai_Siswa`
--
ALTER TABLE `Nilai_Siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `SIswa`
--
ALTER TABLE `SIswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Tahun`
--
ALTER TABLE `Tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
