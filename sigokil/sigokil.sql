-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 10.07
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
-- Database: `sigokil`
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
-- Struktur dari tabel `datairigasi`
--

CREATE TABLE `datairigasi` (
  `id_dataIrigasi` varchar(64) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `program` text NOT NULL,
  `lokasi` text NOT NULL,
  `lokasi_file` varchar(128) NOT NULL,
  `outcome` text NOT NULL,
  `output` text NOT NULL,
  `pengadaan` text NOT NULL,
  `pagu` text NOT NULL,
  `nilai_kontrak` text NOT NULL,
  `realisasi` text NOT NULL,
  `keu` int(100) NOT NULL,
  `fisik` int(100) NOT NULL,
  `total` text NOT NULL,
  `verifikasi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datairigasi`
--

INSERT INTO `datairigasi` (`id_dataIrigasi`, `tanggal`, `program`, `lokasi`, `lokasi_file`, `outcome`, `output`, `pengadaan`, `pagu`, `nilai_kontrak`, `realisasi`, `keu`, `fisik`, `total`, `verifikasi`) VALUES
('5dd31925c8004', '2019-11-25 10:14:48', 'Gali sungai', 'Empat Lawang', 'Logo_21.png', 'p', 'o', 'j', 'pagu', 'opd', 'd', 87, 0, 'Sudah lancar', 1),
('5dd8a9c548c49', '2019-11-23 07:16:57', 'p', 'p', '#', 'p', 'p', 'p', 'p', 'p', 'p', 90, 80, 'asd', 1),
('5dd91fbf9ba58', '2019-11-23 12:02:07', 'a', 'a', '#', 'a', 'a', 'a', 'a', 'a', 'a', 80, 90, '70', 0),
('5dd9202420da8', '2019-11-30 02:28:29', 'b', 'b', '#', 'b', 'b', 'b', 'b', 'b', 'b', 80, 90, '70', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datairigasi2`
--

CREATE TABLE `datairigasi2` (
  `id_dataIrigasi2` varchar(64) NOT NULL,
  `tanggal2` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `program2` text NOT NULL,
  `lokasi2` text NOT NULL,
  `lokasi_file2` varchar(128) NOT NULL,
  `outcome2` text NOT NULL,
  `output2` text NOT NULL,
  `rencana_pagu` text NOT NULL,
  `verifikasi2` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datairigasi2`
--

INSERT INTO `datairigasi2` (`id_dataIrigasi2`, `tanggal2`, `program2`, `lokasi2`, `lokasi_file2`, `outcome2`, `output2`, `rencana_pagu`, `verifikasi2`) VALUES
('5dd8d75766442', '2019-11-23 06:53:11', 'a', 'a', '#', 'a', 'a', 'a', 0),
('5dd8dbc06c03e', '2019-11-23 09:55:58', 'c', 'c', 'Logo_2_(Putih).png', 'c', 'c', 'd', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datajaringan`
--

CREATE TABLE `datajaringan` (
  `id_jaringan` varchar(64) NOT NULL,
  `tanggal_jaringan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deskripsi_jaringan` text NOT NULL,
  `file_jaringan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `datajaringan`
--

INSERT INTO `datajaringan` (`id_jaringan`, `tanggal_jaringan`, `deskripsi_jaringan`, `file_jaringan`) VALUES
('5dd144f291be1', '2019-11-18 00:14:56', 'Data 2', 'UIN_18.png'),
('5dfddbe5102b3', '2019-12-21 08:46:29', 'ahsdghv', 'Logo_2_2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamanfaat`
--

CREATE TABLE `datamanfaat` (
  `id_manfaat` varchar(64) NOT NULL,
  `tanggal_manfaat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deskripsi_manfaat` text NOT NULL,
  `file_manfaat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datamanfaat`
--

INSERT INTO `datamanfaat` (`id_manfaat`, `tanggal_manfaat`, `deskripsi_manfaat`, `file_manfaat`) VALUES
('5dcd0ab503259', '2019-11-14 08:05:45', 'Data manfaat 3', 'UIN_18.png'),
('5dd25e2fcd1b2', '2019-11-18 09:02:39', 'Irigasi Daerah Belitang', 'Logo_2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataperluasan`
--

CREATE TABLE `dataperluasan` (
  `id_perluasan` varchar(64) NOT NULL,
  `tanggal_perluasan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deskripsi_perluasan` text NOT NULL,
  `file_perluasan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataperluasan`
--

INSERT INTO `dataperluasan` (`id_perluasan`, `tanggal_perluasan`, `deskripsi_perluasan`, `file_perluasan`) VALUES
('5dcc0fa61f95e', '2019-11-13 14:13:58', 'Data1', 'Logo_2_(Putih).png'),
('5dcc1cba064b4', '2019-11-14 06:41:41', 'Data 3', 'UIN_18.png'),
('5dccf73b1a574', '2019-11-14 06:42:03', 'Data 4', 'Logo_2_2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Ragil Tri', 'sad@gmail.com', 'default.jpg', '$2y$10$a9f6.V5eEeURb9IJqo6RxOrXrjKIHsyLMEX23h8qZiqJmo4eoRFAO', 2, 1, 1564997372),
(4, 'Muhammad Shidqi', 'm.shidqi810@gmail.com', 'shidqi.JPG', '$2y$10$RqoSo2zSYAtifNOad1EOBOs0NZyOKF0cz0Ffz9llX/sRFfetnbQ82', 1, 1, 1565217664),
(5, 'Muhammad Shidqi', 'shidqi810@gmail.com', 'default.jpg', '$2y$10$F5cQDTM0a28JFNMT99ocf.wD3fUOfZU35bGFidNU0iaN.Pxpttym2', 1, 1, 1565331617),
(6, 'Bambang', 'banmbang1234@gmail.com', 'default.jpg', '$2y$10$7S3McTxdeJePY1Rb5rvphuCcouVUa0ezLHvUZjKDLPtJtjP2K6zRO', 2, 1, 1571236796),
(7, 'Sekar', 'sekar@gmail.com', 'default.jpg', '$2y$10$ny/rsEKO.JRMWD/LF/Greudq8M2twA1splV8ukw..uWOwlhUpl/iC', 2, 0, 1575082162),
(8, 'Lestari', 'lestari@gmail.com', 'default.jpg', '$2y$10$1pdB.0scfPBXwcY1mWgnke6WOFZKbtiTUEtmM7pj1NsjXSdAjPqAy', 2, 0, 1582624659);

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
(5, 1, 'Progress Pengerjaan 2019*', 'DataIrigasi', 'fas fa-fw fa-handshake', 1),
(6, 1, 'Rencana Pekerjaan Irigasi 2020*', 'DataIrigasi2', 'fas fa-fw fa-handshake', 1),
(8, 1, 'Jaringan', 'DataJaringan', 'fas fa-fw fa-edit', 1),
(9, 1, 'Manfaat', 'DataManfaat', 'fas fa-fw fa-edit', 1),
(10, 1, 'Perluasan', 'DataPerluasan', 'fas fa-fw fa-edit', 1),
(11, 2, 'Progress Pengerjaan 2019', 'UserDataIrigasi', 'fas fa-fw fa-handshake', 1),
(12, 2, 'Rencana Pekerjaan Irigasi 2020', 'UserDataIrigasi2', 'fas fa-fw fa-handshake', 1),
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
-- Indeks untuk tabel `datairigasi`
--
ALTER TABLE `datairigasi`
  ADD PRIMARY KEY (`id_dataIrigasi`);

--
-- Indeks untuk tabel `datairigasi2`
--
ALTER TABLE `datairigasi2`
  ADD PRIMARY KEY (`id_dataIrigasi2`);

--
-- Indeks untuk tabel `datajaringan`
--
ALTER TABLE `datajaringan`
  ADD PRIMARY KEY (`id_jaringan`);

--
-- Indeks untuk tabel `datamanfaat`
--
ALTER TABLE `datamanfaat`
  ADD PRIMARY KEY (`id_manfaat`);

--
-- Indeks untuk tabel `dataperluasan`
--
ALTER TABLE `dataperluasan`
  ADD PRIMARY KEY (`id_perluasan`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
