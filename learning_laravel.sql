-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 04:43 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rctable`
--

CREATE TABLE `rctable` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `norek` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rctable`
--

INSERT INTO `rctable` (`id`, `created_at`, `updated_at`, `norek`, `startdate`, `enddate`) VALUES
(23, '2018-06-03 01:39:01', '2018-06-03 01:39:01', '0000000064875421', '15052018', '18052017'),
(50, '2018-06-03 06:32:26', '2018-06-03 06:32:26', '0000000064875421', '17052018', '18052018'),
(51, '2018-06-03 06:33:22', '2018-06-03 06:33:22', '0000000064875421', '17052018', '18052018'),
(52, '2018-06-03 06:37:15', '2018-06-03 06:37:15', '0000000064875421', '17052018', '18052018'),
(53, '2018-06-03 06:37:53', '2018-06-03 06:37:53', '0000000064875421', '15052018', '18052017'),
(54, '2018-06-03 06:38:46', '2018-06-03 06:38:46', '0000000064875421', '17052018', '18052018'),
(55, '2018-06-03 06:50:30', '2018-06-03 06:50:30', '0000000064875421', '17052018', '18052018'),
(56, '2018-06-03 06:55:20', '2018-06-03 06:55:20', '0000000064875421', '17052018', '18052018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lazu', 'lazu@bni.co.id', '$2y$10$h79n0S5tNKGaABGziv.IC.4t4N2k01G1Z9I5oTmvHcET8eyLLgm8i', 'tlVYfOMDIVs7Vis88OQVU8FxeLNDfdyglx9eoPIk6pYRszJjIc4zAWNnwvkG', '2017-09-21 03:28:28', '2017-09-21 03:28:28'),
(2, 'lazuardi', 'lazuardi@bni.co.id', '$2y$10$KBEAuKX/6ZXvDgoYAd..MuS6FYoPcGDSIFni5r0JztmKcOyWz7CFi', NULL, '2018-05-13 06:12:06', '2018-05-13 06:12:06'),
(3, 'Resi Respati', 'resi@kata.ai', '$2y$10$uLRq.aNe3M.mB5ira5yzW.GSiQIebp4uVj3JwjMbh1Xb1yHNMqbLO', NULL, '2018-06-01 22:28:26', '2018-06-01 22:28:26');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `rctable`
--
ALTER TABLE `rctable`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rctable`
--
ALTER TABLE `rctable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
