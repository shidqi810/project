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
-- Database: `kpuprabu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `menu` varchar(32) NOT NULL,
  `foto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id`, `judul`, `menu`, `foto`) VALUES
(1, 'Pemilu 2004', 'DPD', 'hasil/2004/2004dpd.jpg'),
(2, 'Pemilu 2004', 'DPR', 'hasil/2004/2004dpr.jpg'),
(3, 'Pemilu 2004', 'Presiden', 'hasil/2004/2004pilpres.jpg'),
(7, 'Pilkada 2008', 'Gubernur', 'hasil/2008/2008gubernur.jpg'),
(8, 'Pilkada 2008', 'Walikota', 'hasil/2008/2008walikota.jpg'),
(9, 'Pemilu 2009', 'DPD', 'hasil/2009/2009dpd.jpg'),
(10, 'Pemilu 2009', 'DPR', 'hasil/2009/2009dpr.jpg'),
(11, 'Pemilu 2009', 'Presiden', 'hasil/2009/2009pilpres.jpg'),
(12, 'Pilkada 2013', 'Gubernur', 'hasil/2013/2013gubernur.jpg'),
(13, 'Pilkada 2013', 'Walikota', 'hasil/2013/2013walikota.jpg'),
(14, 'Pemilu 2014', 'DPD', 'hasil/2014/2014dpd.jpg'),
(15, 'Pemilu 2014', 'DPR', 'hasil/2014/2014dpr.jpg'),
(16, 'Pemilu 2014', 'Presiden', 'hasil/2014/2014pilpres.jpg'),
(18, 'Pilkada 2018', 'Gubernur', 'hasil/2018/2018gubernur.jpg'),
(19, 'Pilkada 2018', 'Walikota', 'hasil/2018/2018walikota.jpg'),
(20, 'Pemilu 2019', 'DPD', 'hasil/2019/2019dpd1.jpg'),
(21, 'Pemilu 2019', 'DPR', 'hasil/2019/2019dpr1.jpg'),
(22, 'Pemilu 2019', 'Presiden', 'hasil/2019/2019ppwp1.jpg'),
(23, 'Pilkada 2023', '', 'img/soon.png'),
(25, 'Pemilu 2024', '', 'img/soon.png'),
(27, 'Pemilu 2019', 'DPR', 'hasil/2019/2019dpr2.jpg'),
(28, 'Pemilu 2019', 'DPR', 'hasil/2019/2019dpr4.jpg'),
(29, 'Pemilu 2019', 'DPR', 'hasil/2019/2019dpr3.jpg'),
(30, 'Pemilu 2019', 'DPD', 'hasil/2019/2019dpd2.jpg'),
(31, 'Pemilu 2019', 'Presiden', 'hasil/2019/2019ppwp2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `text_sub`
--

CREATE TABLE `text_sub` (
  `id` int(11) NOT NULL,
  `sub_text` varchar(512) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `durasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `text_sub`
--

INSERT INTO `text_sub` (`id`, `sub_text`, `judul`, `icon`, `durasi`) VALUES
(1, 'Menyajikan hasil pemilu Legislatif, dan Pilpres <br> Kota Prabumulih', 'Pemilu 2004', 'img/tampilan2.png', 0.7),
(2, 'Menyajikan hasil pilkada Walikota Dan Gubernur <br> Kota Prabumulih', 'Pilkada 2008', 'img/tampilan1.png', 1.1),
(3, 'Menyajikan hasil pemilu Legislatif, dan Pilpres <br> Kota Prabumulih', 'Pemilu 2009', 'img/tampilan6.png', 1.7),
(4, 'Menyajikan hasil pilkada Walikota Dan Gubernur <br> Kota Prabumulih', 'Pilkada 2013', 'img/tampilan4.png', 0.7),
(5, 'Menyajikan hasil pemilu Legislatif, dan Pilpres <br> Kota Prabumulih', 'Pemilu 2014', 'img/tampilan8.png', 1.1),
(6, 'Menyajikan hasil pilkada Walikota Dan Gubernur <br> Kota Prabumulih', 'Pilkada 2018', 'img/tampilan3.png', 1.7),
(7, 'Menyajikan hasil pemilu Legislatif, dan Pilpres <br> Kota Prabumulih', 'Pemilu 2019', 'img/tampilan7.png', 0.7),
(8, 'Menyajikan hasil pilkada Walikota Dan Gubernur <br> Kota Prabumulih', 'Pilkada 2023', 'img/tampilan5.png', 1.1),
(9, 'Menyajikan hasil pemilu Legislatif, dan Pilpres <br> Kota Prabumulih', 'Pemilu 2024', 'img/tampilan9.png', 1.7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `text_sub`
--
ALTER TABLE `text_sub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `text_sub`
--
ALTER TABLE `text_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
