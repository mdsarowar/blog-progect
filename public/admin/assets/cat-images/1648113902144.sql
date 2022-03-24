-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 07:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `code`, `email`, `mobile`, `address`, `image`, `status`, `created_at`, `updated_at`, `password`) VALUES
(1, 'MD. Nazmul Vai', 'MDN20228', 'nazmul@gmail.com', '01234567897', 'Narayanganj', 'teacher-images/avatar-6.jpg', 1, '2022-03-14 23:05:13', '2022-03-19 21:41:58', '$2y$10$5Fp1fcSGzGcE28Uqvp4KFu7neMg133VYWaZ9cF.QG26WMqwv1pAIq'),
(3, 'Anwar Mastor', 'ANW20228', 'anwar@gmail.com', '01234567892', 'Jalkuri', 'teacher-images/avatar-3.jpg', 1, '2022-03-14 23:08:16', '2022-03-20 23:55:22', '$2y$10$AM5S0ai/cJym/2.GPWGR1eYT1jR6ivQeS8wng3Vpl/VbR1dTStRw.'),
(5, 'Ratna Khan', 'RAT20228', 'ratna@gmail.com', '017896541231', 'Borishal', 'teacher-images/avatar-5.jpg', 1, '2022-03-15 21:31:05', '2022-03-19 21:41:34', '$2y$10$PuJ76nEfmtp8d/xv.Fu/VORsh0kRVRYQD7cL4y6sf/JzK3/AvQlMW'),
(6, 'Fatiha Israt', 'FAT20228', 'fateha@gmail.com', '012345678912', 'Chittagonj', 'teacher-images/avatar-4.jpg', 1, '2022-03-15 21:54:14', '2022-03-19 22:12:29', '$2y$10$tEdMkrr1FYCONMnJ7lNNO.rev.91ygRHegM0M2Orsf4I7NX8oeUGy'),
(7, 'Habibur Rahman', 'HAB20227', 'habibur@gmail.com', '01712131614', 'Dhaka', 'teacher-images/avatar-7.jpg', 1, '2022-03-19 21:31:01', '2022-03-19 21:31:01', '$2y$10$PuUiVi6wce86wzL5ezCr0u7PehRpC2oJOh3LWzBqtpkKbFhuQGccq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
