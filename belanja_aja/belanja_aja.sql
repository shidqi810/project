-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 10.05
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
-- Database: `belanja_aja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `motto` varchar(128) NOT NULL,
  `wa` varchar(64) NOT NULL,
  `fb` varchar(64) NOT NULL,
  `ig` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `gambar`, `nama_lengkap`, `motto`, `wa`, `fb`, `ig`) VALUES
(1, 'shidqi.jpg', 'Muhammad Shidqi', 'Lampaui Batasmu Yang Sekarang & Berkembanglah!!!', '0821 - 7699 - 1834', 'Muhammad Shdiqi', 'shidqimuhammad'),
(2, 'arda.jpeg', 'Arda Miftahul Jannah', 'Mulai Sekarang Lakukan yang Terbaik, Agar Bisa Hidup Tanpa Penyesalan', '0813 - 7967 - 6639', 'Arda Miftahul Jannah', 'arda_mj22'),
(3, 'mia.jpeg', 'Tamia Wihelmika Putri Iswandi', 'Ubah pikiranmu dan kau dapat mengubah duniamu', '089627899291', 'Mia Wihelmikha', 'wihelmikha_');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `nama_pembeli` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `pesanan` varchar(128) NOT NULL,
  `quantitas` int(128) NOT NULL,
  `harga` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `komentar` varchar(256) NOT NULL,
  `rating` int(5) NOT NULL,
  `bayar` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `tanggal`, `nama_pembeli`, `alamat`, `pesanan`, `quantitas`, `harga`, `total`, `komentar`, `rating`, `bayar`) VALUES
(9, '15 December 2019, 09:10:40 AM', 'Suteja', 'ip', 'Makanan', 2, 30000, 60000, 'enak', 3, 1),
(13, '15 December 2019, 04:16:02', 'Budi', 'UIN', 'Makanan', 4, 5000, 20000, 'Pedas', 5, 1),
(14, '15 December 2019, 04:40:38', 'Iwang', 'UIN', 'Rokok', 1, 10000, 10000, 'Mantap', 4, 0),
(15, '16 December 2019, 03:33:41', 'Putri', 'TempatBegal', 'Kentank', 3, 500, 1500, 'Jelek, busuk', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(5, 'Muhammad Shidqi', 'shidqi', 'fcea920f7412b5da7be0cf42b8c93759'),
(6, 'Tamia Wihelmika Putri Iswandi', 'mia', 'fcea920f7412b5da7be0cf42b8c93759'),
(7, 'Arda Miftahul Jannah', 'arda', 'fcea920f7412b5da7be0cf42b8c93759'),
(8, 'Putri Jelek', 'putput', 'fcea920f7412b5da7be0cf42b8c93759'),
(9, 'Muhammad Shidqi', 'shidqi810@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
