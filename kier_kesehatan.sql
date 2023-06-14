-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 02:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kier_kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(56, '2014_10_12_000000_create_users_table', 1),
(57, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(58, '2019_08_19_000000_create_failed_jobs_table', 1),
(59, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(60, '2023_06_12_085611_create_pelamars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelamars`
--

CREATE TABLE `pelamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tekanan_darah` varchar(255) NOT NULL,
  `per_tekanan_darah` varchar(255) NOT NULL,
  `berat_badan` varchar(255) NOT NULL,
  `tinggi_badan` varchar(255) NOT NULL,
  `suhu_tubuh` varchar(255) NOT NULL,
  `buta_warna` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelamars`
--

INSERT INTO `pelamars` (`id`, `nama`, `umur`, `jenis_kelamin`, `alamat`, `tekanan_darah`, `per_tekanan_darah`, `berat_badan`, `tinggi_badan`, `suhu_tubuh`, `buta_warna`, `created_at`, `updated_at`) VALUES
(1, 'Bruce Dickens', '30', 'perempuan', '201 Stokes Loaf\nEleonoreside, ME 17471-7115', '81', '121', '62', '163', '36', 'tidak', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(2, 'Mrs. Sophia Nolan Jr.', '37', 'perempuan', '36188 Isom Bridge\nEast Wendell, CO 69048-4787', '111', '95', '53', '180', '36', 'iya', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(3, 'Mr. Roscoe Schaefer', '32', 'laki-laki', '3925 Otto Junction\nLake Santinaville, MT 14974', '81', '134', '74', '170', '36', 'iya', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(4, 'Davon Orn', '34', 'perempuan', '308 Turner Ways Apt. 362\nPriscillaview, TX 86804-7673', '89', '107', '56', '155', '36', 'tidak', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(5, 'Braulio Hansen', '25', 'laki-laki', '7871 Ricardo Fort\nKailynport, MT 43516', '73', '172', '61', '162', '36', 'iya', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(6, 'Jeromy Schinner', '33', 'perempuan', '7267 Moore Knolls Apt. 183\nEast Shanemouth, TX 27633-8416', '61', '174', '56', '174', '37', 'iya', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(7, 'Lucie Beer', '37', 'laki-laki', '4634 Trinity Fall\nKamrontown, RI 69484-4480', '51', '183', '48', '165', '36', 'iya', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(8, 'Destiney King', '40', 'perempuan', '9286 Annette Garden Apt. 341\nCaesarshire, LA 73155', '98', '106', '63', '161', '35', 'tidak', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(9, 'Octavia Morissette III', '27', 'perempuan', '68851 Hoppe Mountain Suite 511\nEast Tracey, FL 67764-3387', '77', '177', '79', '162', '37', 'tidak', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(10, 'Malinda Feest III', '37', 'perempuan', '6576 Violette Harbors\nPort Gage, VT 85305-7413', '85', '145', '64', '175', '35', 'tidak', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(11, 'Maude Littel', '25', 'perempuan', '3041 Monahan Manor\nTateburgh, AL 00973', '78', '140', '78', '180', '35', 'tidak', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(12, 'Ms. Pasquale Haag', '38', 'perempuan', '19250 Kemmer Shores Apt. 256\nNew Lulu, DC 94442', '67', '173', '75', '170', '35', 'iya', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(13, 'Raphael Cruickshank', '25', 'laki-laki', '32087 Libby Harbor Apt. 614\nNew Friedrich, MS 67314-9837', '52', '187', '63', '165', '36', 'iya', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(14, 'Newell Krajcik', '28', 'laki-laki', '7161 Jude Vista\nKirstinchester, GA 85186-0963', '84', '155', '80', '161', '36', 'iya', '2023-06-14 04:26:58', '2023-06-14 04:26:58'),
(15, 'Kim Sporer', '33', 'perempuan', '710 Ned Estates Suite 997\nJohnstonport, NH 20010-9336', '64', '92', '67', '155', '37', 'tidak', '2023-06-14 04:26:58', '2023-06-14 04:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '$2y$10$4Bohn.CHT4Mt2PKGnkpbfONpyHcxCQ7AfvsmMYka3rEnn9QPHduUu', NULL, '2023-06-14 04:26:58', '2023-06-14 04:26:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelamars`
--
ALTER TABLE `pelamars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pelamars`
--
ALTER TABLE `pelamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
