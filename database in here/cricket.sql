-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 02:55 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '123', NULL, '2019-05-07 23:37:21', '2019-05-07 23:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `body`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sandalanka', 'ela', NULL, '2019-05-07 07:43:54', '2019-05-07 07:43:54'),
(2, 'saman', 'hari', NULL, '2019-05-07 11:57:54', '2019-05-07 11:57:54');

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
(1, '2019_05_07_062148_create_players_table', 1),
(2, '2019_05_07_114123_create_feedback_table', 1),
(3, '2019_05_07_134022_create_admins_table', 2),
(4, '2019_05_07_134255_create_schedules_table', 2),
(5, '2019_05_07_151841_create_results_table', 3),
(6, '2019_05_08_051200_create_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `nic`, `contact`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Savith Priyantha', 123456789, 119, 'savith@gmail.com', '12345', 'image/3.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(2, 'Sammilka Perera', 123456789, 119, 'sammilka@gmail.com', '12345', 'image/5.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(3, 'Delish Gunarathna', 123456789, 119, 'dilesh@gmail.com', '12345', 'image/6.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(4, 'Nimanda Subasingha', 123456789, 119, 'savith@gmail.com', '12345', 'image/26.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(5, 'Raminda Nissanka', 123456789, 119, 'raminda@gmail.com', '12345', 'image/7.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(6, 'Sanjaya Chaturanga', 123456789, 119, 'sanjaya@gmail.com', '12345', 'image/8.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(7, 'Madura Perera', 123456789, 119, 'madura@gmail.com', '12345', 'image/9.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(8, 'Milinda Siriwaradna', 123456789, 119, 'milinda@gmail.com', '12345', 'image/27.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(9, 'Sachith Pathirana', 123456789, 119, 'sachith@gmail.com', '12345', 'image/28.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(10, 'Pathum Nissanka', 123456789, 119, 'pathum@gmail.com', '12345', 'image/12.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(11, 'Dananjaya De Silva', 123456789, 119, 'danajaya@gmail.com', '12345', 'image/19.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(12, 'Salinda Ushan', 123456789, 119, 'salinda@gmail.com', '12345', 'image/17.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(13, 'Nilantha Rathnayaka', 123456789, 119, 'nilantha@gmail.com', '12345', 'image/18.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40'),
(14, 'Thamara Abayarathna', 123456789, 119, 'thamara@gmail.com', '12345', 'image/16.jpg', NULL, '2019-05-07 07:14:40', '2019-05-07 07:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `match`, `date`, `result`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NCC vs Baduraliya', '2019-05-02', 'Ncc won by 8 wicket', NULL, '2019-05-07 11:31:14', '2019-05-07 11:31:14'),
(2, 'NCC vs Baduraliya', '2019-05-09', 'Ncc won by 8 wicket', NULL, '2019-05-08 07:19:34', '2019-05-08 07:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `ground` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `match`, `date`, `ground`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NCC vs Baduraliya', '2019-05-24', 'SSc', NULL, '2019-05-07 09:23:46', '2019-05-07 09:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '123', NULL, '2019-05-07 23:50:30', '2019-05-07 23:50:30'),
(2, 'anuja@gmail.com', '00000', NULL, '2019-05-08 00:23:55', '2019-05-08 00:23:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
