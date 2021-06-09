-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 03:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `julio-betta-fish`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuantitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`id`, `nama_ikan`, `slug`, `deskripsi`, `harga`, `kuantitas`, `foto`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'Ikan cupang halfmoon', 'ikan-cupang-halfmoon', 'ikan cupang halfmoon warna orange', '150000', '78', 'assets/fish/Luhe5sKycu2gPHdbkGi3qXqQmHZ1b3ZNfNnzudHX.jpg', '2021-06-09 04:48:59', '2021-05-04 20:07:21', '2021-06-09 04:48:59'),
(7, 'testes', 'testes', 'tes', '11', '1', 'assets/fish/3GBRz1UykqbOFLJ5DDdv5ZRzOPnSGdeBifSh3Chn.jpg', '2021-05-10 23:11:41', '2021-05-10 23:11:38', '2021-05-10 23:11:41'),
(8, 'ikan cupang pelangi', 'ikan-cupang-pelangi', 'ikan cupang berwarna warni', '10000', '100', 'assets/fish/cCKSZhpIgnYSUSw5rdcDTCqZ65ZcLzBFgPXFCLhp.jpg', '2021-06-09 04:49:00', '2021-05-10 23:46:04', '2021-06-09 04:49:00'),
(9, 'Ikan cupang blue', 'ikan-cupang-blue', 'Ikan cupang berwarna biru', '100000', '16', 'https://cdn.idntimes.com/content-images/post/20200914/bdd0096ff8db005b2a3c3339368cb036-bd9a1fce7b62f23c3f83b60752404975.jpg', '2021-06-09 04:49:01', '2021-06-09 04:24:41', '2021-06-09 04:49:01'),
(10, 'tes', 'tes', 'tes', '10', '10', 'https://cdn.idntimes.com/content-images/post/20200914/bdd0096ff8db005b2a3c3339368cb036-bd9a1fce7b62f23c3f83b60752404975.jpg', '2021-06-09 04:49:02', '2021-06-09 04:47:22', '2021-06-09 04:49:02'),
(11, 'tes', 'tes', 'tes', '100', '11', 'https://cdn.idntimes.com/content-images/post/20200914/bdd0096ff8db005b2a3c3339368cb036-bd9a1fce7b62f23c3f83b60752404975.jpg', NULL, '2021-06-09 04:49:19', '2021-06-09 04:49:19'),
(12, 'tes', 'tes', 'tes', '100', '11', 'https://cdn.idntimes.com/content-images/post/20200914/bdd0096ff8db005b2a3c3339368cb036-bd9a1fce7b62f23c3f83b60752404975.jpg', '2021-06-09 04:49:22', '2021-06-09 04:49:19', '2021-06-09 04:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_04_29_125614_create_fish_table', 1),
(11, '2021_04_29_131209_create_transaction_table', 1),
(12, '2021_04_29_132035_create_transaction_details_table', 1),
(13, '2021_06_09_131448_create_user_table', 2),
(14, '2021_06_09_132226_create_user_table', 3),
(15, '2021_06_09_132510_create_penggunas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunas`
--

INSERT INTO `penggunas` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sony', 'sony@gmail.com', '12345678', NULL, NULL),
(2, 'Daniel', 'daniel@yahoo.com', 'akuganteng', '2021-06-09 06:45:45', '2021-06-09 06:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `status_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `uuid`, `id_user`, `nama`, `alamat`, `jumlah_pesanan`, `harga_total`, `status_transaksi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'TRX868686', '2', 'daniel', 'Pare', 10, 250000, 'SUKSES', NULL, '2021-05-03 14:12:39', '2021-05-04 06:32:46'),
(2, 'TRX70240431', '1', 'Daniel P', 'Kediri, Jawa Timur', 10, 0, 'DIPROSES', '2021-05-10 23:07:07', '2021-05-04 21:06:29', '2021-05-10 23:07:07'),
(3, 'TRX99109378', '1', 'Daniel P', 'Kediri, Jawa Timur', 10, 0, 'DIPROSES', '2021-05-10 23:07:06', '2021-05-04 21:07:42', '2021-05-10 23:07:06'),
(4, 'TRX80783515', '1', 'Daniel P', 'Kediri, Jawa Timur', 10, 150000, 'DIKIRIM', '2021-05-10 23:07:05', '2021-05-05 00:48:43', '2021-05-10 23:07:05'),
(5, 'TRX93812249', '1', 'Daniel Prastha A', 'Kediri, Jawa Timur', 10, 150000, 'DIKIRIM', '2021-05-10 23:11:12', '2021-05-10 23:10:53', '2021-05-10 23:11:12'),
(6, 'TRX41829758', '2', 'Daniel Prastha A', 'Kediri, Jawa Timur', 10, 150000, 'SUKSES', NULL, '2021-05-10 23:46:28', '2021-05-27 19:24:10'),
(7, 'TRX97582619', '4', 'Andy budiman', 'Malang, Jawa Timur', 5, 550000, 'DIKIRIM', NULL, '2021-05-27 19:25:27', '2021-05-27 19:25:44'),
(8, 'TRX11767471', '4', 'Ahmad Yuli', 'Malang, Jawa Timur', 11, 350000, 'DIPROSES', NULL, '2021-06-03 02:11:00', '2021-06-03 02:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `id_transaksi`, `id_ikan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', '5', NULL, NULL, NULL),
(2, '2', '6', NULL, '2021-05-04 21:06:29', '2021-05-04 21:06:29'),
(3, '3', '6', NULL, '2021-05-04 21:07:42', '2021-05-04 21:07:42'),
(4, '4', '6', NULL, '2021-05-05 00:48:43', '2021-05-05 00:48:43'),
(5, '5', '6', NULL, '2021-05-10 23:10:53', '2021-05-10 23:10:53'),
(6, '6', '6', NULL, '2021-05-10 23:46:28', '2021-05-10 23:46:28'),
(7, '7', '6', NULL, '2021-05-27 19:25:27', '2021-05-27 19:25:27'),
(8, '8', '6', NULL, '2021-06-03 02:11:00', '2021-06-03 02:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin jbf', 'adminjbf@gmail.com', NULL, '$2y$10$AReEk1m7nMfHgWfejq9f0.Jl.NEeeg.6XTis6sX8EZqGqESPpX3KK', NULL, '2021-05-02 06:26:05', '2021-05-02 06:26:05');

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
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
