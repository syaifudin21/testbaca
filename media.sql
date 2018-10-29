-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2017 pada 16.38
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bacaan`
--

CREATE TABLE `bacaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` time NOT NULL,
  `pencipta` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bacaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bacaan`
--

INSERT INTO `bacaan` (`id`, `judul`, `label`, `waktu`, `pencipta`, `bacaan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'lorem', '00:12:00', 'lorem', '<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2017-04-09 06:58:04', '2017-04-09 07:15:19', NULL),
(2, 'Judul', 'Label', '01:00:00', 'Pencipta', '<p><img alt=\"\" src=\"http://localhost:8000/photos/1/Koala.jpg\" style=\"height:93px; width:124px\" /></p>\r\n\r\n<p>Ini contoh saja</p>', '2017-04-09 07:30:55', '2017-04-09 07:30:55', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bacaansoal`
--

CREATE TABLE `bacaansoal` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bacaan` int(11) NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawabanbenar` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bacaansoal`
--

INSERT INTO `bacaansoal` (`id`, `id_bacaan`, `pertanyaan`, `jawaban1`, `jawaban2`, `jawaban3`, `jawabanbenar`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'Jawaban Benar', 'Jawaban Salah', 'Jawaban Ragu', 'jawaban1'),
(2, 2, 'Ini Pertanyaan', 'J', 'C', 'X', 'jawaban1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_03_085939_bacaan', 1),
(4, '2017_04_04_044502_bacaansoal', 1),
(5, '2017_04_05_132807_nilaibaca', 1),
(6, '2017_04_09_032634_add_votes_to_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaibaca`
--

CREATE TABLE `nilaibaca` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_bacaan` int(11) NOT NULL,
  `waktumulai` timestamp NULL DEFAULT NULL,
  `waktuselesai` timestamp NULL DEFAULT NULL,
  `waktuselesaisoal` timestamp NULL DEFAULT NULL,
  `benar` int(11) DEFAULT NULL,
  `salah` int(11) DEFAULT NULL,
  `kosong` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilaibaca`
--

INSERT INTO `nilaibaca` (`id`, `id_member`, `id_bacaan`, `waktumulai`, `waktuselesai`, `waktuselesaisoal`, `benar`, `salah`, `kosong`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2017-04-09 14:15:58', '2017-04-09 14:16:36', '2017-04-09 14:24:55', 1, 0, 0, '2017-04-09 14:15:58', '2017-04-09 14:24:55'),
(2, 2, 2, '2017-04-09 14:31:30', '2017-04-09 14:31:39', '2017-04-09 14:31:43', 0, 0, 0, '2017-04-09 14:31:30', '2017-04-09 14:31:43'),
(3, 2, 2, '2017-04-09 14:36:27', '2017-04-09 14:36:36', '2017-04-09 14:36:43', 0, 1, 0, '2017-04-09 14:36:27', '2017-04-09 14:36:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sekolah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `jabatan`, `alamat`, `sekolah`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, '$2y$10$DxGYbEloVkYBlpr0R88MN.zoeb8G22PLEYZXY8FrF4xK9sW/vX/nO', 'Admin', 'adminadmin', 'sma admin', 'h2sHHZ4IgwtD2d8h54szBfiga08sy8pubVHI97GB2R9L8qAIk4vuONni0SXj', '2017-04-09 06:56:07', '2017-04-09 06:56:07'),
(2, 'member', 'member', NULL, '$2y$10$G8M.UJbvn4gsjeYpcIvepeprN.oCtzEfjfp7Zy7orjpf3B.HxYB.2', 'Member', 'desa member', 'sd member', '9376fLoxBCIIELTXYmGV7UN7w2zmjrn6o683y41sfoRavJ1icf1DHdadvN50', '2017-04-09 07:05:55', '2017-04-09 07:05:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bacaan`
--
ALTER TABLE `bacaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bacaansoal`
--
ALTER TABLE `bacaansoal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaibaca`
--
ALTER TABLE `nilaibaca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bacaan`
--
ALTER TABLE `bacaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bacaansoal`
--
ALTER TABLE `bacaansoal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nilaibaca`
--
ALTER TABLE `nilaibaca`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
