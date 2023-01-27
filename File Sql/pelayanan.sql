-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2023 pada 14.33
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `rt_rw` varchar(50) NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Buddha','Konghucu') NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nik`, `nama`, `tempat`, `tgl_lahir`, `jekel`, `alamat_rumah`, `rt_rw`, `agama`, `type`) VALUES
(1, '6302062103000007', 'Hasanurrahman', 'Palangkaraya', '2000-03-21', 'Laki-Laki', 'Banjarbaru', '06/06', 'Islam', 'tipe 60'),
(2, '6302062303000009', 'Yulia', 'Palangkaraya', '2000-07-01', 'Perempuan', 'Jl. Pangeran Antasari', '01/02', 'Kristen', 'tipe 54'),
(4, '6302062201000008', 'Andika', 'Martapura', '2023-01-27', 'Laki-Laki', 'Sekumpul', '09/08', 'Islam', 'tipe 70'),
(5, '6302062201000005', 'Prayogo', 'Banjarmasin', '2023-01-27', 'Laki-Laki', 'Banjarmasin Selatan', '10/12', 'Buddha', 'tipe 70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Hasanurrahman', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(3, 'Puspa Arum Putri Arisandy', 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 'Pimpinan'),
(4, 'Rahmat', 'wakil', '28d866e5f30ae6386be9f1921e0b2a58', 'Wakil Pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
