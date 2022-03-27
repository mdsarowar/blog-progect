-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 07:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biztrox`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>unpublishde,1=>published',
  `hit_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `category_id`, `blog_image`, `blog_content`, `status`, `hit_count`, `created_at`, `updated_at`) VALUES
(1, 'video', '1', 'admin/assets/blog-images/1648353064697.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:51:04', '2022-03-26 22:00:08'),
(2, 'video', '1', 'admin/assets/blog-images/1648353079885.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:51:19', '2022-03-26 21:51:19'),
(3, 'video', '1', 'admin/assets/blog-images/16483530931157.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:51:33', '2022-03-26 21:51:33'),
(4, 'video', '1', 'admin/assets/blog-images/1648353119579.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:51:59', '2022-03-26 21:51:59'),
(5, 'video', '7', 'admin/assets/blog-images/1648353140710.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:52:20', '2022-03-26 21:52:20'),
(6, 'video', '9', 'admin/assets/blog-images/1648353159442.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:52:39', '2022-03-26 21:52:39'),
(7, 'video', '7', 'admin/assets/blog-images/1648353178497.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:52:58', '2022-03-26 21:52:58'),
(8, 'video', '9', 'admin/assets/blog-images/1648353200517.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:53:20', '2022-03-26 21:53:20'),
(9, 'video', '9', 'admin/assets/blog-images/16483532171782.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:53:37', '2022-03-26 21:53:37'),
(10, 'video', '9', 'admin/assets/blog-images/1648353233763.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 0, NULL, '2022-03-26 21:53:53', '2022-03-26 21:53:53'),
(11, 'video', '7', 'admin/assets/blog-images/1648353251878.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 0, NULL, '2022-03-26 21:54:11', '2022-03-26 21:54:11'),
(12, 'video', '9', 'admin/assets/blog-images/1648353269131.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:54:29', '2022-03-26 21:54:29'),
(13, 'video', '7', 'admin/assets/blog-images/16483532851051.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:54:45', '2022-03-26 21:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `categoris`
--

CREATE TABLE `categoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>Unpublished,1=>Published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoris`
--

INSERT INTO `categoris` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'video', 'admin/assets/cat-images/16483528811316.jpg', 0, '2022-03-26 21:48:01', '2022-03-26 22:00:15'),
(2, 'IT', 'admin/assets/cat-images/16483529031111.jpg', 1, '2022-03-26 21:48:23', '2022-03-26 21:48:23'),
(3, 'Class', 'admin/assets/cat-images/164835291744.jpg', 0, '2022-03-26 21:48:37', '2022-03-26 21:48:37'),
(4, 'travel', 'admin/assets/cat-images/1648352930129.jpg', 0, '2022-03-26 21:48:50', '2022-03-26 21:48:50'),
(5, 'rastrurant', 'admin/assets/cat-images/16483529431532.jpg', 0, '2022-03-26 21:49:03', '2022-03-26 21:49:03'),
(6, 'travel', 'admin/assets/cat-images/1648352959782.jpg', 0, '2022-03-26 21:49:19', '2022-03-26 21:49:19'),
(7, 'travel', 'admin/assets/cat-images/164835297278.jpg', 1, '2022-03-26 21:49:32', '2022-03-26 21:49:32'),
(8, 'travel', 'admin/assets/cat-images/16483529871962.jpg', 0, '2022-03-26 21:49:47', '2022-03-26 21:49:47'),
(9, 'travel', 'admin/assets/cat-images/1648353000610.jpg', 1, '2022-03-26 21:50:00', '2022-03-26 21:50:00'),
(10, 'travel', 'admin/assets/cat-images/1648353014374.jpg', 1, '2022-03-26 21:50:14', '2022-03-26 21:50:14'),
(11, 'travel', 'admin/assets/cat-images/1648353029333.jpg', 1, '2022-03-26 21:50:29', '2022-03-26 21:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'S.M Sarowar', 'sarowara8@gmail.com', 'asdasdasd', 'efdaf', '2022-03-26 23:37:33', '2022-03-26 23:37:33'),
(2, 'asdf', 'sarowara8@gmail.com', 'asdf', 'asdf', '2022-03-26 23:38:13', '2022-03-26 23:38:13'),
(3, 'sadf', 'sarowar352420@diu.edu.bd', 'asdf', 'asdfas', '2022-03-26 23:46:52', '2022-03-26 23:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_22_074125_create_sessions_table', 1),
(7, '2022_03_23_011608_create_categoris_table', 1),
(8, '2022_03_23_043003_create_blogs_table', 1),
(9, '2022_03_23_101738_create_services_table', 1),
(10, '2022_03_27_052125_create_contacts_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>unpublished,1=>published',
  `hit_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_image`, `service_content`, `status`, `hit_count`, `created_at`, `updated_at`) VALUES
(1, 'trable', 'admin/assets/service-images/1648353342235.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:55:42', '2022-03-26 21:55:42'),
(2, 'trable', 'admin/assets/service-images/1648353359274.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:55:59', '2022-03-26 21:55:59'),
(3, 'trable', 'admin/assets/service-images/16483533731044.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 0, NULL, '2022-03-26 21:56:13', '2022-03-26 21:56:13'),
(4, 'trable', 'admin/assets/service-images/1648353384464.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:56:24', '2022-03-26 21:56:24'),
(5, 'trable', 'admin/assets/service-images/1648353398251.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:56:38', '2022-03-26 21:56:38'),
(6, 'trable', 'admin/assets/service-images/1648353413608.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:56:53', '2022-03-26 21:56:53'),
(7, 'trable', 'admin/assets/service-images/1648353427424.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:57:07', '2022-03-26 21:57:07'),
(8, 'trable', 'admin/assets/service-images/1648353440568.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:57:20', '2022-03-26 21:57:20'),
(9, 'trable', 'admin/assets/service-images/1648353515263.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:58:35', '2022-03-26 21:58:35'),
(10, 'trable', 'admin/assets/service-images/16483535291562.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:58:49', '2022-03-26 21:58:49'),
(11, 'trable', 'admin/assets/service-images/1648353541655.jpg', '<p>aksdl;jf</p>\r\n\r\n<p>a;sdlfkj</p>\r\n\r\n<p>asd;lfjkasd</p>\r\n\r\n<p>klasdf</p>', 1, NULL, '2022-03-26 21:59:01', '2022-03-26 21:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qMSVyysWyhIKbDTe84Zvmkn10sbnTmFAA5nfttFr', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTENVd0EwcnY5Y3lPTUlkVmZ2bk5ZWUlIZ3VNRXdoOFNwSDZaQmh0eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9sb2NhbGhvc3QvYmxvZy1wcm9nZWN0L3B1YmxpYy9jb250YWN0X3ZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJExKNTBuUDNGbUZITzBIZWg1cTkxVU8vZ2Y3MzE2UWlnTVpwQWxVNHI3WktqdEVnZVk3aWZHIjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJExKNTBuUDNGbUZITzBIZWg1cTkxVU8vZ2Y3MzE2UWlnTVpwQWxVNHI3WktqdEVnZVk3aWZHIjt9', 1648360012);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `is_admin`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'sarowar', 'sarowar@gmail.com', NULL, '$2y$10$LJ50nP3FmFHO0Heh5q91UO/gf7316QigMZpAlU4r7ZKjtEgeY7ifG', NULL, NULL, 0, NULL, NULL, NULL, '2022-03-26 21:47:18', '2022-03-26 21:47:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoris`
--
ALTER TABLE `categoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categoris`
--
ALTER TABLE `categoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
