-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2021 pada 09.24
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eraportummi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
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
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ummi Mamluaturrohmah', 'ummimar77@gmail.com', NULL, '$2y$10$yWWT9yPoBBFj6VGhsWlsPO0Y5iaGa5aBlGf8RbzYS2FX8en9zIlXC', NULL, '2021-05-29 22:56:31', '2021-05-29 22:56:31');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_29_141744_create_siswa_table', 1),
(5, '2021_05_29_142126_drop_table_siswa', 1),
(6, '2021_05_29_142245_create_guru_table', 1),
(7, '2021_05_29_142349_create_nilai_table', 1),
(8, '2021_05_30_101410_add_kelas_on_users_table', 2),
(9, '2021_06_03_134019_add_nis_on_users_table', 3),
(10, '2021_06_04_172749_add_hasil_on_nilai_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nilaiagama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaimtk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaiindo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaieng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaiipa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaiips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaipkn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaiakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `user_id`, `nilaiagama`, `nilaimtk`, `nilaiindo`, `nilaieng`, `nilaiipa`, `nilaiips`, `nilaipkn`, `nilaiakhir`, `grade`, `hasil`, `created_at`, `updated_at`) VALUES
(3, 1, '98', '95', '93', '92', '90', '80', '90', '91', 'A', NULL, '2021-06-04 01:00:38', '2021-06-04 01:00:38'),
(4, 2, '90', '90', '90', '90', '90', '90', '90', '90', 'A', NULL, '2021-06-04 20:50:01', '2021-06-04 20:50:01');

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nis`, `name`, `email`, `email_verified_at`, `password`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '191134569', 'admin', 'admin@gmail.com', NULL, '$2y$10$1i5qNW10MdcVdij9AF5lyOFL/omnMz1WGpSF1WTyxBWevBqYg/qj.', 'VII', NULL, '2021-06-03 10:34:36', '2021-06-04 10:17:19'),
(2, '192244527', 'Nesya Naura', 'Nesraa@gmail.com', NULL, '$2y$10$2bGNSPW4D8HKBrcWNIdmtu/Jx.7mwVVggpN6Xs.hhoA8T8EN.ePEy', 'VII', NULL, '2021-06-03 10:35:40', '2021-06-04 10:17:35'),
(3, '191115632', 'Amanda Az-Zahra', 'Mandaza@gmail.com', NULL, '$2y$10$Q/3BPtzuHyo7TJyG381TBuqbUzNJ8Vjtgj3dwzUbhT05Oka8/dBtO', 'VII', NULL, '2021-06-03 11:13:16', '2021-06-04 10:17:58'),
(4, '192217944', 'Muhammad Abdurrahman', 'rahman13@gmail.com', NULL, '$2y$10$nDbaLauTD55XX5c2qxZW2ujew4yahu5X9BxzQ4v8SUUO3D7yQDzlC', 'VII', NULL, '2021-06-03 11:19:38', '2021-06-04 19:09:32'),
(5, '191119877', 'Galih Wijayanto', 'lihga@gmail.com', NULL, '$2y$10$n.aZmRwfSaIn5rrbobWasOp1GaEf40HPlflLXztwPIW4Z8jNdgAK.', 'VII', NULL, '2021-06-03 11:20:51', '2021-06-04 19:10:20'),
(6, '191124590', 'Salsabila Rusida', 'rusida04@gmail.com', NULL, '$2y$10$eEnBOcJiFCA8ESPdXbBxdeKuQsr4s6QtM3WiBJeSOfXiOgAxnlT/q', 'VIII', NULL, '2021-06-04 19:13:14', '2021-06-04 19:43:08'),
(7, '191135587', 'Ayub Nur Hidayat', 'hidayat900@gmail.com', NULL, '$2y$10$g1X79wU0QqPSWbr4YaiX4.7aqGMjgIBpDsuslr0tqQubWjue2GAfm', 'VIII', NULL, '2021-06-04 19:15:09', '2021-06-04 19:44:12'),
(8, '192224590', 'Jason Maxwell', 'Jsnmaxell98@gmail.com', NULL, '$2y$10$jWjCh4WMmL2TxzutSG9f9.j4UlPsjmfhNsABDuW6netOsg4AcambO', 'VIII', NULL, '2021-06-04 19:31:45', '2021-06-04 21:50:21'),
(9, '191115456', 'Rajendra Adi', 'RadenAdi@gmail.com', NULL, '$2y$10$I5lNP/n0jMWH4m4PFLaiR.U05jGZh0m.d.qwNOiN.jwoU0GVhW5j6', 'VIII', NULL, '2021-06-04 19:33:44', '2021-06-04 21:53:39'),
(10, '191112835', 'Queen Azaleaa syarif', 'Syarifazlea@gmail.com', NULL, '$2y$10$LMEEeGg9Kh/Oru4xzzgWAuNwWHRFqWieFXy5aXv3NV8760XfmRoMO', 'VIII', NULL, '2021-06-04 19:35:58', '2021-06-04 21:55:54'),
(11, '191114466', 'Rafi Afiia', 'rafiia45@gmail.com', NULL, '$2y$10$bvF9lv43JpJ1jdVkmw6ms.0/x4ZqgjThfQ0oPE11aXheH2eP52hwi', 'IX', NULL, '2021-06-04 21:27:00', '2021-06-04 21:32:47'),
(12, '194545986', 'Nurul Ilmi', 'Ilmi@gmail.com', NULL, '$2y$10$OWKPhdVSP.9QwnTjECJdRu2QGuQt37EcTjr/Yt.m79ed7J2NKDPIW', 'IX', NULL, '2021-06-04 21:31:06', '2021-06-04 21:34:56'),
(13, '191113209', 'Diana Mumtazah', 'dianammtzh@gmail.com', NULL, '$2y$10$ijzbC92PxowBTsrY024mYOJL1AlTuREs60KH/bYuMhXSGo5Ge5vgW', 'IX', NULL, '2021-06-04 21:36:35', '2021-06-04 21:37:20'),
(14, '192224598', 'Siva Nurjannah', 'sivanurjan@gmail.com', NULL, '$2y$10$9.Em6Oo9e.Tgp2smgwusIelanFMEkGY2d3Vp/3N1CkNq175i2SzrO', 'IX', NULL, '2021-06-04 21:39:27', '2021-06-04 21:40:18'),
(15, '191313010', 'Muhammad Faqih Adzkiya', 'adzkiya164@gmail.com', NULL, '$2y$10$uYntLv6GWn3z8A5Yd.YfCuVulL6BsT4FNxFSYRGuM31EVCq2bKAqS', 'IX', NULL, '2021-06-04 21:42:30', '2021-06-04 21:44:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guru_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
