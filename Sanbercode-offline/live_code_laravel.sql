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
-- Database: `live_code_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_02_25_082600_create_users_table', 1),
(4, '2020_02_25_142720_create_portofolios_table', 1),
(5, '2020_02_26_040942_add_coba_on_portofolios_table', 1),
(6, '2020_02_26_073700_create_tags_table', 1),
(7, '2020_02_26_080721_create_portofolio_tag_table', 1),
(8, '2020_02_27_025132_create_posts_table', 2),
(9, '2020_02_27_032944_add_description_to_portofolios_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolios`
--

CREATE TABLE `portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coba` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `portofolios`
--

INSERT INTO `portofolios` (`id`, `project_name`, `url_image`, `coba`, `user_id`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Coba BUat', 'cobaaaaaaa', NULL, 1, '2020-02-26 18:47:39', '2020-02-26 18:47:39', ''),
(16, 'Baruuuuuuuuu', 'ajhsdkg', NULL, 1, '2020-03-12 17:50:36', '2020-03-12 17:50:36', NULL),
(17, 'baruu lagiiiiiii', 'sdnfbsjkfgjhdfg', NULL, 1, '2020-03-12 17:52:55', '2020-03-12 17:52:55', '<p>lshfkjhfdk</p>'),
(18, 'asdhgsajhdgashgd', 'kasgdsahjgdjhsagd', NULL, 2, '2020-03-12 17:54:55', '2020-03-12 17:54:55', '<p>ajhsgdjsahgdasd</p>'),
(19, 'asdjbksajdbaksjb', 'aksbdksajbdkasjb', NULL, 2, '2020-03-14 23:56:51', '2020-03-14 23:56:51', '<p>kasbdkbasd</p>'),
(20, 'ini untuk pengujian many to many', 'askdsajdhasidh', NULL, 1, '2020-03-15 00:01:55', '2020-03-15 00:01:55', '<p>askdjbsakd</p>'),
(21, 'banyak lagiiiiii', 'kasdksjabdkasb', NULL, 1, '2020-03-15 00:07:39', '2020-03-15 00:07:39', '<p>asdmsadn</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio_tag`
--

CREATE TABLE `portofolio_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portofolio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `portofolio_tag`
--

INSERT INTO `portofolio_tag` (`id`, `portofolio_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(46, 16, 24, NULL, NULL),
(47, 16, 25, NULL, NULL),
(48, 17, 24, NULL, NULL),
(49, 17, 25, NULL, NULL),
(50, 18, 26, NULL, NULL),
(51, 19, 27, NULL, NULL),
(52, 20, 28, NULL, NULL),
(53, 20, 29, NULL, NULL),
(54, 20, 30, NULL, NULL),
(55, 20, 31, NULL, NULL),
(56, 21, 28, NULL, NULL),
(57, 21, 29, NULL, NULL),
(58, 21, 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `content`, `category`) VALUES
(1, '2020-02-26 19:56:22', '2020-02-26 19:56:22', 'Judul', 'ajdkjasbdkjabsdkbsakjdb', 'tips'),
(2, '2020-03-12 06:53:12', '2020-03-12 06:53:12', 'asdasdas', 'asdsad', 'technology');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(1, 'tags 1', '2020-02-26 18:47:39', '2020-02-26 18:47:39'),
(2, ' tag 2', '2020-02-26 18:47:39', '2020-02-26 18:47:39'),
(3, ' tag 3', '2020-02-26 18:47:39', '2020-02-26 18:47:39'),
(4, 'hj', '2020-02-26 18:51:35', '2020-02-26 18:51:35'),
(5, ' asdugh', '2020-02-26 18:51:35', '2020-02-26 18:51:35'),
(6, ' asd', '2020-02-26 18:51:35', '2020-02-26 18:51:35'),
(7, 'asd', '2020-02-26 20:42:46', '2020-02-26 20:42:46'),
(8, 'ad', '2020-02-26 20:42:46', '2020-02-26 20:42:46'),
(9, 'asdsd', '2020-02-26 20:42:48', '2020-02-26 20:42:48'),
(10, 'sdssds', '2020-02-26 20:42:50', '2020-02-26 20:42:50'),
(11, 'sdsdsdsd', '2020-02-26 20:42:51', '2020-02-26 20:42:51'),
(12, 'asdasd', '2020-02-26 20:54:09', '2020-02-26 20:54:09'),
(13, 'fsfd', '2020-02-26 20:54:10', '2020-02-26 20:54:10'),
(14, 'asdsa', '2020-02-26 20:55:34', '2020-02-26 20:55:34'),
(15, 'dasd', '2020-02-26 20:55:34', '2020-02-26 20:55:34'),
(16, 'dsdsdsd', '2020-02-26 20:55:34', '2020-02-26 20:55:34'),
(17, 'asdsad', '2020-02-26 20:58:04', '2020-02-26 20:58:04'),
(18, 'fete', '2020-02-26 20:58:04', '2020-02-26 20:58:04'),
(19, 'wewrf', '2020-02-26 20:58:04', '2020-02-26 20:58:04'),
(20, 'fsdf', '2020-02-26 20:58:04', '2020-02-26 20:58:04'),
(21, 'ausdh', '2020-02-26 20:58:25', '2020-02-26 20:58:25'),
(22, 'asdha', '2020-02-26 20:58:26', '2020-02-26 20:58:26'),
(23, 'ddd', '2020-02-26 21:26:39', '2020-02-26 21:26:39'),
(24, 'apo', '2020-03-12 17:50:36', '2020-03-12 17:50:36'),
(25, 'ini', '2020-03-12 17:50:36', '2020-03-12 17:50:36'),
(26, 'jhagsdhjags', '2020-03-12 17:54:55', '2020-03-12 17:54:55'),
(27, 'aksbd', '2020-03-14 23:56:51', '2020-03-14 23:56:51'),
(28, 'tag1', '2020-03-15 00:01:55', '2020-03-15 00:01:55'),
(29, 'tag2', '2020-03-15 00:01:55', '2020-03-15 00:01:55'),
(30, 'tag3', '2020-03-15 00:01:55', '2020-03-15 00:01:55'),
(31, 'tag10', '2020-03-15 00:01:55', '2020-03-15 00:01:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Shidqi', 'm.shidqi810@gmail.com', NULL, '$2y$10$RlUSrRZ62WLn57tQmqeJOezikjM4UinGxVFDiBTHs/meKn/M30HV6', NULL, '2020-02-26 18:47:15', '2020-02-26 18:47:15'),
(2, 'coba coba', 'coba@mail.com', NULL, '$2y$10$4Ri4Hnh9GLe6kbFMT8JbU.3F6eYZektCVKoXoXUSwKJBxKtF9X1Ma', NULL, '2020-03-12 17:54:14', '2020-03-12 17:54:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `portofolios`
--
ALTER TABLE `portofolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portofolios_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `portofolio_tag`
--
ALTER TABLE `portofolio_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portofolio_tag_portofolio_id_foreign` (`portofolio_id`),
  ADD KEY `portofolio_tag_tag_id_foreign` (`tag_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `portofolio_tag`
--
ALTER TABLE `portofolio_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `portofolios`
--
ALTER TABLE `portofolios`
  ADD CONSTRAINT `portofolios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `portofolio_tag`
--
ALTER TABLE `portofolio_tag`
  ADD CONSTRAINT `portofolio_tag_portofolio_id_foreign` FOREIGN KEY (`portofolio_id`) REFERENCES `portofolios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `portofolio_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
