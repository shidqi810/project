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
-- Database: `belanja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataadmin`
--

CREATE TABLE `dataadmin` (
  `id_admin` varchar(64) NOT NULL,
  `tanggal_admin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataadmin`
--

INSERT INTO `dataadmin` (`id_admin`, `tanggal_admin`, `pengumuman`) VALUES
('5dce9424d437c', '2019-11-18 09:08:32', 'Diharapkan Hadir Dalam Rapat 20 nov 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` varchar(64) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `pesanan` text NOT NULL,
  `stok` int(128) NOT NULL,
  `quantitas` int(128) NOT NULL,
  `harga` int(255) NOT NULL,
  `kategori` text NOT NULL,
  `berat` text NOT NULL,
  `kondisi` text NOT NULL,
  `total` int(128) NOT NULL,
  `penilaian` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `bayar` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `tanggal`, `nama`, `alamat`, `pesanan`, `stok`, `quantitas`, `harga`, `kategori`, `berat`, `kondisi`, `total`, `penilaian`, `komentar`, `bayar`) VALUES
('5de785fb8dc29', '2019-12-04 10:40:47', 'Ayu', '', 'Sepatu', 6, 4, 30000, '', '', '', 120000, 4, '', 1),
('5de7865f98b99', '2019-12-04 12:55:23', 'Adi', '', 'Tas', 15, 4, 20000, '', '', '', 80000, 5, '', 1),
('5de7b0024c167', '2019-12-04 13:09:22', '0', '', 'Makanan', 4, 0, 5000, '', '', '', 0, 0, '', 0),
('5de7b0ed18b36', '2019-12-04 13:13:17', 'Jaenal', '', 'Piring', 0, 5, 20000, '', '', '', 100000, 4, '', 0),
('5df0408956c7c', '2019-12-16 08:16:57', 'Shidqi', 'Jalan Letkol Iskandar', 'Tws', 5, 3, 180000, 'Headset', '1 Kg', 'Baru', 540000, 4, '', 0),
('5df040a76937f', '2019-12-11 01:04:39', '0', '0', 'Charger', 5, 0, 30000, '', '', '', 0, 0, '', 0),
('5df05ce6aeb10', '2019-12-11 05:19:10', 'Sekar', 'IP', 'Sepatu', 5, 0, 30000, 'Pakaian', '4 kg', 'Bekas', 0, 0, 'Bagus Nich', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat_user` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `catatan` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `alamat_user`, `telepon`, `catatan`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Sad Sekali', 'sad@gmail.com', 'asdsa', '12312', 'qwdas', 'default.jpg', '$2y$10$a9f6.V5eEeURb9IJqo6RxOrXrjKIHsyLMEX23h8qZiqJmo4eoRFAO', 1, 1, 1564997372),
(4, 'Muhammad Shidqi', 'm.shidqi810@gmail.com', '', '', '', 'shidqi.JPG', '$2y$10$RqoSo2zSYAtifNOad1EOBOs0NZyOKF0cz0Ffz9llX/sRFfetnbQ82', 1, 1, 1565217664),
(5, 'Muhammad Shidqi', 'shidqi810@gmail.com', '', '', '', 'default.jpg', '$2y$10$F5cQDTM0a28JFNMT99ocf.wD3fUOfZU35bGFidNU0iaN.Pxpttym2', 1, 1, 1565331617),
(6, 'Bambang', 'banmbang1234@gmail.com', '', '', '', 'default.jpg', '$2y$10$7S3McTxdeJePY1Rb5rvphuCcouVUa0ezLHvUZjKDLPtJtjP2K6zRO', 2, 1, 1571236796),
(7, 'Sekarr', 'sekar@gmail.com', '', '', '', 'default.jpg', '$2y$10$ny/rsEKO.JRMWD/LF/Greudq8M2twA1splV8ukw..uWOwlhUpl/iC', 2, 0, 1575082162),
(8, 'Azalea', 'azalea@gmail.com', 'Ip', '0821', 'Mantap', 'default.jpg', '$2y$10$b5T6SmxFAXebQdxWv7Lo..H8AfmNVVB6PGtYS5w40QHM/rlgciaoW', 2, 0, 1575686605),
(9, 'Sekar Ade Hapsari', 'sekaradehapsari@gmail.com', 'Sekip', '0821', 'manta[', 'default.jpg', '$2y$10$s3EnALO5szpz093.naloEufHxWvBWlorrKfwLQU8eSKBci0zAopOq', 1, 1, 1576034458);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 1, 'User Management', 'admin/user', 'fas fa-fw fa-user', 1),
(3, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(4, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-edit', 1),
(6, 1, 'Pembelian', 'Pembelian', 'fas fa-fw fa-handshake', 1),
(7, 1, 'Stok', 'Stok', 'fas fa-fw fa-handshake', 1),
(13, 1, 'Pengumuman', 'Pengumuman', '	 fas fa-fw fa-handshake', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataadmin`
--
ALTER TABLE `dataadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
