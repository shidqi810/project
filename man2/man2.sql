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
-- Database: `man2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fis`
--

CREATE TABLE `fis` (
  `id` int(11) NOT NULL,
  `soal` varchar(1024) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `fis_name` varchar(128) NOT NULL,
  `fis_image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fis`
--

INSERT INTO `fis` (`id`, `soal`, `foto`, `tanggal`, `fis_name`, `fis_image`) VALUES
(20, 'Pak, saya bingung sama soal nomor 5', 'Logo_2_24.png', 1567679418, 'Shidqi', 'UIN_18.png'),
(21, 'aku bingung di yg inii', 'UIN_1815.png', 1567679475, 'sdasd', 'default.jpg'),
(22, 'foto 2018', 'UIN_1816.png', 1567823094, 'Shidqi', 'UIN_18.png'),
(23, 'nomor 1 saya bingung', 'UIN_1817.png', 1567854054, 'Shidqi', 'UIN_18.png'),
(24, 'Nomor 10', 'UIN_1818.png', 1568361926, 'Shidqi', 'UIN_18.png'),
(25, 'oioi', '', 1568367042, 'Shidqi', 'UIN_18.png'),
(26, 'soal nomor1', '', 1569308600, 'Shidqi', 'UIN_18.png'),
(27, 'dfgh', '', 1571134441, 'Muhammad Shidqi 11111', 'ridho.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fis_komen`
--

CREATE TABLE `fis_komen` (
  `id` int(11) NOT NULL,
  `soalk` varchar(1024) NOT NULL,
  `fotok` varchar(128) NOT NULL,
  `tanggalk` varchar(128) NOT NULL,
  `komen_id` int(11) NOT NULL,
  `komen_name` varchar(128) NOT NULL,
  `komen_image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fis_komen`
--

INSERT INTO `fis_komen` (`id`, `soalk`, `fotok`, `tanggalk`, `komen_id`, `komen_name`, `komen_image`) VALUES
(14, 'ah ini mudah', '', '1567679453', 20, 'sdasd', 'default.jpg'),
(15, 'ini cara nya ada di yutub', 'Logo_2_2.png', '1567679516', 21, 'Muhammad Shidqi', 'default.jpg'),
(16, 'ai ini mudahh', '', '1567854114', 23, 'sdasd', 'default.jpg'),
(17, 'ini begini', '', '1568361948', 24, 'Shidqi', 'UIN_18.png'),
(18, 'caranya begini', 'UIN_18.png', '1568362021', 20, 'Shidqi', 'UIN_18.png'),
(19, 'caranya salah', '', '1568362069', 20, 'Muhammad Shidqi', 'default.jpg'),
(20, 'caranya begini', '', '1569308742', 20, 'sdasd', 'default.jpg');

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
(3, 'sdasd', 'sad@gmail.com', 'default.jpg', '$2y$10$a9f6.V5eEeURb9IJqo6RxOrXrjKIHsyLMEX23h8qZiqJmo4eoRFAO', 2, 1, 1564997372),
(4, 'oiii', 'm.shidqi810@gmail.com', 'ridho.JPG', '$2y$10$RqoSo2zSYAtifNOad1EOBOs0NZyOKF0cz0Ffz9llX/sRFfetnbQ82', 1, 1, 1565217664),
(5, 'Muhammad Shidqi', 'shidqi810@gmail.com', 'default.jpg', '$2y$10$F5cQDTM0a28JFNMT99ocf.wD3fUOfZU35bGFidNU0iaN.Pxpttym2', 1, 1, 1565331617);

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
(2, 'User'),
(3, 'Menu');

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
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 2, 'Fisika', 'user/fisika', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Kimia', 'user/kimia', 'fas fa-fw fa-user-tie', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fis`
--
ALTER TABLE `fis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fis_komen`
--
ALTER TABLE `fis_komen`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `fis`
--
ALTER TABLE `fis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `fis_komen`
--
ALTER TABLE `fis_komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
