-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 10.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurmatravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `judul`, `deskripsi`) VALUES
(1, 'foto 01.jpg', 'judul 1', 'deskripsi 1'),
(2, 'foto 02.jpg', 'judul 2', 'deskripsi 2'),
(3, 'foto 03.jpg', 'judul 3', 'deskripsi 3'),
(4, 'foto 04.jpg', 'judul 4', 'deskripsi 4'),
(5, 'foto 05.jpg', 'judul 5', 'deskripsi 5'),
(6, 'foto 06.jpg', 'judul 6', 'deskripsi 6'),
(7, 'foto 07.jpg', 'Judul 7', 'Deskripsi 7'),
(8, 'foto 08.jpg', 'Judul 8', 'Deskripsi 8'),
(9, 'foto 09.jpg', 'Judul 9', 'Deskripsi 9'),
(10, 'foto 10.jpg', 'Judul 10', 'Deskripsi 10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_harga`
--

CREATE TABLE `galeri_harga` (
  `id` int(11) NOT NULL,
  `foto_harga` varchar(128) NOT NULL,
  `judul_harga` varchar(128) NOT NULL,
  `deskripsi_harga` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_harga`
--

INSERT INTO `galeri_harga` (`id`, `foto_harga`, `judul_harga`, `deskripsi_harga`) VALUES
(1, 'foto 01.jpg', 'judul 01', 'deskripsi 01'),
(2, 'foto 02.jpg', 'judul 02', 'deskripsi 02'),
(3, 'foto 03.jpg', 'judul 03', 'deskripsi 03'),
(4, 'foto 04.jpg', 'judul 04', 'deskripsi 04'),
(5, 'foto 05.jpg', 'judul 05', 'deskripsi 05'),
(6, 'foto 06.jpg', 'judul 06', 'deskripsi 06'),
(7, 'foto 07.jpg', 'judul 07', 'deskripsi 07'),
(8, 'foto 08.jpg', 'judul 08', 'deskripsi 08'),
(9, 'foto 09.jpg', 'judul 09', 'deskripsi 09'),
(10, 'foto 10.jpg', 'judul 10', 'deskripsi 10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_video`
--

CREATE TABLE `galeri_video` (
  `id` int(11) NOT NULL,
  `video` varchar(128) NOT NULL,
  `judul_video` varchar(128) NOT NULL,
  `deskripsi_video` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_video`
--

INSERT INTO `galeri_video` (`id`, `video`, `judul_video`, `deskripsi_video`) VALUES
(1, 'v1.mp4', 'Judul 1', 'Deskripsi 1'),
(2, 'v3.mp4', 'Judul 2', 'Deskripsi 2'),
(3, 'v4.mp4', 'Judul 3', 'Deskripsi 3'),
(4, 'v5.mp4', 'Judul 4', 'Deskripsi 4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_harga`
--
ALTER TABLE `galeri_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `galeri_harga`
--
ALTER TABLE `galeri_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
