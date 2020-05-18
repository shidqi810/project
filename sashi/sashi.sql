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
-- Database: `sashi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_design`
--

CREATE TABLE `galeri_design` (
  `id` int(11) NOT NULL,
  `hal` int(32) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_design`
--

INSERT INTO `galeri_design` (`id`, `hal`, `file`) VALUES
(1, 1, 'images/1b.jpg'),
(2, 1, 'images/1c.jpg'),
(3, 1, 'images/1d.jpg'),
(4, 1, 'images/1.jpg'),
(5, 1, 'images/2.jpg'),
(6, 1, 'images/3.jpg'),
(7, 1, 'images/4.jpg'),
(8, 1, 'images/5.jpg'),
(9, 1, 'images/6.jpg'),
(10, 1, 'images/7.jpg'),
(11, 1, 'images/8.jpg'),
(12, 1, 'images/9.jpg'),
(13, 1, 'images/10.jpg'),
(14, 1, 'images/11.jpg'),
(15, 1, 'images/12.jpg'),
(16, 2, 'images/13.jpg'),
(17, 2, 'images/14.jpg'),
(18, 2, 'images/15.jpg'),
(19, 2, 'images/16.jpg'),
(20, 2, 'images/17.jpg'),
(21, 2, 'images/18.jpg'),
(22, 2, 'images/19.jpg'),
(23, 2, 'images/20.jpg'),
(24, 2, 'images/21.jpg'),
(25, 2, 'images/22.jpg'),
(26, 2, 'images/23.jpg'),
(27, 2, 'images/24.jpg'),
(28, 2, 'images/24a.jpg'),
(29, 2, 'images/24b.jpg'),
(30, 2, 'images/24c.jpg'),
(31, 3, 'images/25.jpg'),
(32, 3, 'images/26.jpg'),
(33, 3, 'images/27.jpg'),
(34, 3, 'images/28.jpg'),
(35, 3, 'images/29.jpg'),
(36, 3, 'images/30.jpg'),
(37, 3, 'images/31.jpg'),
(38, 3, 'images/32.jpg'),
(39, 3, 'images/33.jpg'),
(40, 3, 'images/34.jpg'),
(41, 3, 'images/35.jpg'),
(42, 3, 'images/36.jpg'),
(43, 4, 'images/37.jpg'),
(44, 4, 'images/38.jpg'),
(45, 4, 'images/39.jpg'),
(46, 3, 'images/39a.jpg'),
(47, 3, 'images/39b.jpg'),
(48, 3, 'images/39c.jpg'),
(49, 4, 'images/40.jpg'),
(50, 4, 'images/41.jpg'),
(51, 4, 'images/42.jpg'),
(52, 4, 'images/43.jpg'),
(53, 4, 'images/44.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_program`
--

CREATE TABLE `galeri_program` (
  `id` int(11) NOT NULL,
  `hal` int(32) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_program`
--

INSERT INTO `galeri_program` (`id`, `hal`, `file`) VALUES
(1, 1, 'program/1.png'),
(2, 1, 'program/2.png'),
(3, 1, 'program/3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_video`
--

CREATE TABLE `galeri_video` (
  `id` int(11) NOT NULL,
  `hal` int(32) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_video`
--

INSERT INTO `galeri_video` (`id`, `hal`, `file`) VALUES
(1, 1, 'video/vid1.mp4'),
(2, 1, 'video/vid2.mp4'),
(3, 1, 'video/vid3.mp4'),
(4, 1, 'video/vid4.mp4'),
(5, 1, 'video/vid5.mp4'),
(6, 1, 'video/vid6.mp4'),
(7, 1, 'video/vid7.mp4'),
(8, 1, 'video/vid8.mp4'),
(9, 1, 'video/vid9.mp4'),
(10, 1, 'video/vid10.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_web`
--

CREATE TABLE `galeri_web` (
  `id` int(11) NOT NULL,
  `hal` int(32) NOT NULL,
  `file` varchar(64) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `bidang` varchar(64) NOT NULL,
  `tipe` varchar(64) NOT NULL,
  `bahasa` varchar(64) NOT NULL,
  `framework` varchar(64) NOT NULL,
  `link` text NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_web`
--

INSERT INTO `galeri_web` (`id`, `hal`, `file`, `judul`, `bidang`, `tipe`, `bahasa`, `framework`, `link`, `desk`) VALUES
(1, 1, 'web/KPUPrabumulih/1.png', 'KPU Prabumulih', 'Edukasi Politik', 'Dinamis', 'HTML, Css, PHP', 'Bootstrap', 'https://hasilpemiluprabumulih.com', 'Website yang berisikan tenang galeri hasil pemilu di kota Prabumulih'),
(2, 1, 'web/afiat/3.png', 'Afiat', 'Kesehatan', 'Statis', 'HTML, Css', '-', 'link/afiat/login.html', 'Afiat Merupakan sebuah website platform yang memungkinkan para pasien yang berada di rumah sakit untuk tidak perlu mengantri terlalu lama lagi, karena mereka dapat mengantri secara online melalui Afiat ini, dan dapat memudahkan mereka yang sedang sakit'),
(3, 1, 'web/BelanjaAja/2.png', 'Belanja Aja', 'Sistem Informasi Akuntansi', 'Dinamis', 'HTML, Css, PHP', 'Bootstrap, Font Awesome, Animate it', 'link/belanja_aja/', 'Bangun sebuah sistem informasi akuntansi yang dapat memudahkan kita dalam mengamati perkembangan keuangan serta alur masuk barang yang ada\n<br>\nUsername: shidqi\n<br>\nPassword: 1234567'),
(4, 1, 'web/fora/10.png', 'Fora', 'Forum dan E - Learning', 'Dinamis', 'HTML, Css, PHP', 'Code Igniter, Bootstrap, Font Awesome, Animate it', 'link/fora/', 'Fora merupakan sebuah platform berbasis website yang berisikan sebuah forum serta E-Learning untuk sebuah organisasi dan komunitas\n<br>\nUsername: sad@gmail.com\n<br>\nPassword: 1234567'),
(5, 1, 'web/KurmaTravel/1.png', 'Kurma Travel', 'Travel & Perjalanan', 'Dinamis', 'HTML, Css, PHP', 'Code Igniter, Bootstrap, Font Awesome, Animate it', 'https://kurmaplg.sashi.id', 'Sebuah website yang menjelaskan apa itu Kurma Travel'),
(6, 1, 'web/sigokil/1.png', 'Sigokil', 'Manajemen Project Irigasi', 'Dinamis', 'HTML, Css, PHP', 'Code Igniter, Bootstrap, Font Awesome, Animate it', 'http://sigokil.net', 'Sebuah sistem informasi yang berbasis website yang berfungsi sebagai pengamat project irigasi yang sedang terjadi di kota OKI'),
(7, 1, 'web/SIAK/2.png', 'SIAK', 'Sistem Informasi Akuntansi', 'Dinamis', 'HTML, Css, PHP', 'Code Igniter, Bootstrap, Font Awesome, Animate it', 'link/siak/', 'Bangun sebuah sistem informasi akuntansi yang dapat memudahkan kita dalam mengamati perkembangan keuangan serta alur masuk barang yang ada\n<br>\nUsername: sad@gmail.com\n<br>\nPassword: 1234567'),
(8, 1, 'web/StartupDev/5.png', 'Startup Dev', 'Landing Page Startup', 'Statis', 'HTML, Css', 'Bootstrap, Font Awesome, Animate it', 'link/startupdev/', 'Sebuah Landing Page yang berbasis Website yang berisikan tentang apa itu Startup Dev UIN Raden Fatah, Visi Misi, serta Startup - Startup apa saja yang ada di UIN Raden Fatah Palembang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `icon` varchar(64) NOT NULL,
  `judul` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `icon`, `judul`) VALUES
(1, 'fas fa-sitemap', 'Ketua Umum ICT MAN 2 Palembang'),
(2, 'fas fa-gamepad', 'Membuat Game Berjudul \"Battle for Treasure\"'),
(3, 'fas fa-images', 'Finalis Digital Imaging Techporia UNSRI 2016 Tingkat Nasional Mahasiswa & SMA'),
(4, 'fas fa-gamepad', 'Membuat Game Berjudul \"MAN 2: Road to School\"'),
(5, 'fas fa-video', 'Juara Film Pendek Terfavorit MEDIFKA UNSRI 2017 Tingkat Provinsi SMA'),
(6, 'fas fa-palette', 'Juara 3 Poster IT Contest Teknik Elektro 2018 Tingkat Nasional Mahasiswa'),
(7, 'fas fa-code', 'Juara 1 Design Web NODING Polsri 2019 Tingkat Provinsi Mahasiswa'),
(8, 'fab fa-php', 'Juara 3 Web Development UNSRI GES Tingkat Nasional Mahasiswa'),
(9, 'fab fa-java', 'Pemateri Java, Website, Design di SCSI UIN Raden Fatah'),
(10, 'fas fa-award', 'Penganugrahan Student Award 2019 UIN Raden Fatah'),
(11, 'fas fa-rocket', 'Bergabung dengan komunitas Startup Dev UIN Raden Fatah'),
(12, 'fas fa-sitemap', 'Ketua Umum SCSI UIN Raden Fatah Palembang'),
(13, 'fab fa-laravel', 'Menyelesaikan 4 minggu pelatihan intensif Laravel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_afiat`
--

CREATE TABLE `web_afiat` (
  `id` int(11) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_afiat`
--

INSERT INTO `web_afiat` (`id`, `file`) VALUES
(1, 'web/afiat/1.png'),
(2, 'web/afiat/2.png'),
(3, 'web/afiat/3.png'),
(4, 'web/afiat/4.png'),
(5, 'web/afiat/5.png'),
(6, 'web/afiat/6.png'),
(7, 'web/afiat/7.png'),
(8, 'web/afiat/8.png'),
(9, 'web/afiat/9.png'),
(10, 'web/afiat/10.png'),
(11, 'web/afiat/11.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_belanjaaja`
--

CREATE TABLE `web_belanjaaja` (
  `id` int(11) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_belanjaaja`
--

INSERT INTO `web_belanjaaja` (`id`, `file`) VALUES
(1, 'web/belanjaaja/1.png'),
(2, 'web/belanjaaja/2.png'),
(3, 'web/belanjaaja/3.png'),
(4, 'web/belanjaaja/4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_fora`
--

CREATE TABLE `web_fora` (
  `id` int(11) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_fora`
--

INSERT INTO `web_fora` (`id`, `file`) VALUES
(1, 'web/fora/1.png'),
(2, 'web/fora/2.png'),
(3, 'web/fora/3.png'),
(4, 'web/fora/4.png'),
(5, 'web/fora/5.png'),
(6, 'web/fora/6.png'),
(7, 'web/fora/7.png'),
(8, 'web/fora/8.png'),
(9, 'web/fora/9.png'),
(10, 'web/fora/10.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_kpuprabumulih`
--

CREATE TABLE `web_kpuprabumulih` (
  `id` int(11) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_kpuprabumulih`
--

INSERT INTO `web_kpuprabumulih` (`id`, `file`) VALUES
(1, 'web/KPUPrabumulih/1.png'),
(2, 'web/KPUPrabumulih/2.png'),
(3, 'web/KPUPrabumulih/3.png'),
(4, 'web/KPUPrabumulih/4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_kurmatravel`
--

CREATE TABLE `web_kurmatravel` (
  `id` int(11) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_kurmatravel`
--

INSERT INTO `web_kurmatravel` (`id`, `file`) VALUES
(1, 'web/KurmaTravel/1.png'),
(2, 'web/KurmaTravel/2.png'),
(3, 'web/KurmaTravel/3.png'),
(4, 'web/KurmaTravel/4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_siak`
--

CREATE TABLE `web_siak` (
  `id` int(11) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_siak`
--

INSERT INTO `web_siak` (`id`, `file`) VALUES
(1, 'web/SIAK/1.png'),
(2, 'web/SIAK/2.png'),
(3, 'web/SIAK/3.png'),
(4, 'web/SIAK/4.png'),
(5, 'web/SIAK/5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_sigokil`
--

CREATE TABLE `web_sigokil` (
  `id` int(11) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_sigokil`
--

INSERT INTO `web_sigokil` (`id`, `file`) VALUES
(1, 'web/Sigokil/1.png'),
(2, 'web/Sigokil/2.png'),
(3, 'web/Sigokil/3.png'),
(4, 'web/Sigokil/4.png'),
(5, 'web/Sigokil/5.png'),
(6, 'web/Sigokil/6.png'),
(7, 'web/Sigokil/7.png'),
(8, 'web/Sigokil/8.png'),
(9, 'web/Sigokil/9.png'),
(10, 'web/Sigokil/10.png'),
(11, 'web/Sigokil/11.png'),
(12, 'web/Sigokil/12.png'),
(13, 'web/Sigokil/13.png'),
(14, 'web/Sigokil/14.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_startupdev`
--

CREATE TABLE `web_startupdev` (
  `id` int(11) NOT NULL,
  `file` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_startupdev`
--

INSERT INTO `web_startupdev` (`id`, `file`) VALUES
(1, 'web/StartupDev/1.png'),
(2, 'web/StartupDev/2.png'),
(3, 'web/StartupDev/3.png'),
(4, 'web/StartupDev/4.png'),
(5, 'web/StartupDev/5.png'),
(6, 'web/StartupDev/6.png'),
(7, 'web/StartupDev/7.png'),
(8, 'web/StartupDev/8.png'),
(9, 'web/StartupDev/9.png'),
(10, 'web/StartupDev/10.png'),
(11, 'web/StartupDev/11.png'),
(12, 'web/StartupDev/12.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri_design`
--
ALTER TABLE `galeri_design`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_program`
--
ALTER TABLE `galeri_program`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_web`
--
ALTER TABLE `galeri_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_afiat`
--
ALTER TABLE `web_afiat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_belanjaaja`
--
ALTER TABLE `web_belanjaaja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_fora`
--
ALTER TABLE `web_fora`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_kpuprabumulih`
--
ALTER TABLE `web_kpuprabumulih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_kurmatravel`
--
ALTER TABLE `web_kurmatravel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_siak`
--
ALTER TABLE `web_siak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_sigokil`
--
ALTER TABLE `web_sigokil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_startupdev`
--
ALTER TABLE `web_startupdev`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri_design`
--
ALTER TABLE `galeri_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `galeri_program`
--
ALTER TABLE `galeri_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `galeri_web`
--
ALTER TABLE `galeri_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `web_afiat`
--
ALTER TABLE `web_afiat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `web_belanjaaja`
--
ALTER TABLE `web_belanjaaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `web_fora`
--
ALTER TABLE `web_fora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `web_kpuprabumulih`
--
ALTER TABLE `web_kpuprabumulih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `web_kurmatravel`
--
ALTER TABLE `web_kurmatravel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `web_siak`
--
ALTER TABLE `web_siak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `web_sigokil`
--
ALTER TABLE `web_sigokil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `web_startupdev`
--
ALTER TABLE `web_startupdev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
