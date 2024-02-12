-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2024 pada 05.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `absensi` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `nip`, `tanggal_absensi`, `absensi`, `keterangan`) VALUES
(6, 9021288, '2023-08-02', 'sakit', 'Sakit Perut'),
(8, 121012113, '2023-08-05', 'alfa', 'tanpa keterangan'),
(9, 9021288, '2023-08-03', 'sakit', 'masih sakit'),
(10, 812121220, '2023-08-07', 'ijin', 'ijin karena rusbe sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `email`, `username`, `password`) VALUES
(1, 'WAHYU CANDRA UTAMA', 'wahyucandrautama@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `rfid` varchar(20) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `sakit` int(11) NOT NULL,
  `ijin` int(11) NOT NULL,
  `alfa` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`rfid`, `nip`, `nama_karyawan`, `alamat`, `sakit`, `ijin`, `alfa`, `foto`) VALUES
('10121103', 121012113, 'MUHAMMAD FARHAN FADILAH', 'SOREANG', 0, 0, 0, '09082023061632fotopaan.jpg'),
('10121116', 9021288, 'WAHYU CANDRA UTAMA', 'KOPO', 0, 0, 0, '08082023185858WhatsApp Image 2023-06-23 at 14.04.42.jpg'),
('10121118', 812121220, 'MUHAMMAD AKMAL ALI PASHA', 'CIBADUYUT', 0, 0, 0, '08082023191340WhatsApp Image 2022-08-26 at 08.51.03.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `rfid` varchar(30) NOT NULL,
  `nama_karyawan` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `rfid`, `nama_karyawan`, `tanggal`, `jam_masuk`, `jam_pulang`, `keterangan`, `status`) VALUES
(1, '2708230910578', 'WAHYU CANDRA UTAMA', '2023-08-11', '13:58:56', '13:59:21', 'TERLAMBAT', '0'),
(2, '2708230910578', 'WAHYU CANDRA UTAMA', '2023-08-12', '08:03:29', '16:05:26', 'TERLAMBAT', '0'),
(3, '2708230910578', 'WAHYU CANDRA UTAMA', '2023-08-13', '07:07:06', '00:00:00', 'TEPAT WAKTU', '1'),
(4, '2708230910578', 'WAHYU CANDRA UTAMA', '2023-08-15', '07:10:02', '00:00:00', 'TEPAT WAKTU', '1'),
(5, '2708230910578', 'WAHYU CANDRA UTAMA', '2023-08-16', '08:11:00', '00:00:00', 'TERLAMBAT', '1'),
(6, '2708230910578', 'WAHYU CANDRA UTAMA', '2023-08-17', '08:13:49', '00:00:00', 'TEPAT WAKTU', '1'),
(7, '10121103', 'MUHAMMAD FARHAN FADILAH', '2023-11-23', '10:26:48', '21:47:28', 'TEPAT WAKTU', '0'),
(8, '10121116', 'WAHYU CANDRA UTAMA', '2023-11-23', '14:30:09', '00:00:00', 'TERLAMBAT', '1'),
(9, '10121116', 'WAHYU CANDRA UTAMA', '2024-02-12', '11:42:10', '00:00:00', 'TERLAMBAT', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`rfid`);

--
-- Indeks untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
