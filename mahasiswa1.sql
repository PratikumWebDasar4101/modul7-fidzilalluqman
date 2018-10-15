-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2018 pada 05.52
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6701174095`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa1`
--

CREATE TABLE `mahasiswa1` (
  `nama` varchar(50) NOT NULL,
  `nim` decimal(10,0) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `prodi` varchar(35) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `moto_hidup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa1`
--

INSERT INTO `mahasiswa1` (`nama`, `nim`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('saya', '123449531', 'Laki - Laki', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'asdas', 'asdawda'),
('budi', '6701174088', 'Laki - Laki', 'Teknik Elektro', 'Fakultas Teknik Elektro', 'Indramayu', 'asdasdasdasdaw'),
('asdasd', '6701174099', 'Laki - Laki', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'jandand', 'a,jsdnawjkd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa1`
--
ALTER TABLE `mahasiswa1`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
