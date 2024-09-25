-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agbetask`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Los Angeles', NULL, NULL),
(2, 1, 'San Francisco', NULL, NULL),
(3, 2, 'Houston', NULL, NULL),
(4, 2, 'Dallas', NULL, NULL),
(5, 3, 'Toronto', NULL, NULL),
(6, 3, 'Ottawa', NULL, NULL),
(7, 4, 'Mumbai', NULL, NULL),
(8, 4, 'Pune', NULL, NULL),
(9, 5, 'New Delhi', NULL, NULL),
(10, 5, 'Gurgaon', NULL, NULL),
(11, 6, 'Noida', NULL, NULL),
(12, 7, 'Sydney', NULL, NULL),
(13, 7, 'Newcastle', NULL, NULL),
(14, 8, 'Munich', NULL, NULL),
(15, 8, 'Nuremberg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countrymdls`
--

CREATE TABLE `countrymdls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countrymdls`
--

INSERT INTO `countrymdls` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'USA', NULL, NULL),
(2, 'Canada', NULL, NULL),
(3, 'India', NULL, NULL),
(4, 'Australia', NULL, NULL),
(5, 'Germany', NULL, NULL);

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
(1, '2024_09_24_161633_create_countrymdls_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'California', NULL, NULL),
(2, 1, 'Texas', NULL, NULL),
(3, 2, 'Ontario', NULL, NULL),
(4, 3, 'Maharashtra', NULL, NULL),
(5, 3, 'Delhi', NULL, NULL),
(6, 3, 'Noida', NULL, NULL),
(7, 4, 'New South Wales', NULL, NULL),
(8, 5, 'Bavaria', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile_number` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `locality` varchar(200) DEFAULT NULL,
  `pincode` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `dob`, `email`, `email_verified_at`, `mobile_number`, `password`, `country_id`, `state_id`, `city_id`, `locality`, `pincode`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'arvind', 'rawat', '2024-09-12', 'admin@gmail.com', NULL, '423423423424', '$2y$10$/VQ4UFTS44u1ZiH3jsaNhOa2ET9eUb5RyFnnhYMxB5S4H/.ldL2iq', 3, 5, 9, 'Delhi', '110077', NULL, '2024-09-24 23:53:56', '2024-09-24 23:53:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countrymdls`
--
ALTER TABLE `countrymdls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `countrymdls`
--
ALTER TABLE `countrymdls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
