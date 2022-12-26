-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 09:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_category_id` bigint(20) NOT NULL,
  `course_sub_category_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL COMMENT 'trainer user id',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ending_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>Unpublished 1=>Published',
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `apply_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_category_id`, `course_sub_category_id`, `user_id`, `title`, `price`, `short_description`, `long_description`, `image`, `starting_date`, `ending_date`, `total_hour`, `slug`, `status`, `hit_count`, `apply_count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'fewfwef', 32.00, 'r432qr23', '<p>23r23rew</p>', 'admin/assets/images/upload-images/course/1672072172-774_Screenshot_1.png', '2022-12-26', '2023-02-16', '32', 'fewfwef', 1, 0, 0, '2022-12-26 10:29:32', '2022-12-26 10:32:03'),
(2, 2, 3, 1, 'rfwaefwe', 32.00, 'ewfweqf', '<p>weqfwe</p>', 'admin/assets/images/upload-images/course/1672072196-589_Screenshot_2.png', '2022-12-09', '2022-12-10', '2', 'rfwaefwe', 0, 0, 0, '2022-12-26 10:29:56', '2022-12-26 10:29:56'),
(3, 1, 2, 2, 't4', 35.00, 'ergwer r', '<p>ewgerw&nbsp;</p>', 'admin/assets/images/upload-images/course/1672072241-51_Screenshot_2.png', '2022-12-14', '2022-12-28', '3', 't4', 1, 0, 0, '2022-12-26 10:30:41', '2022-12-26 10:31:08'),
(4, 2, 3, 2, 'i7687', 785.00, '5875tr87t', '<p>iitiitv t&nbsp;</p>', 'admin/assets/images/upload-images/course/1672073369-565_Screenshot_1.png', '2022-12-26', '2023-01-06', '8', 'i7687', 0, 0, 0, '2022-12-26 10:49:29', '2022-12-26 10:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Android', 1, '2022-12-26 10:28:08', '2022-12-26 10:28:08'),
(2, 'Web', 1, '2022-12-26 10:28:14', '2022-12-26 10:28:14'),
(3, 'HAcking', 1, '2022-12-26 10:28:21', '2022-12-26 10:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `course_sub_categories`
--

CREATE TABLE `course_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_sub_categories`
--

INSERT INTO `course_sub_categories` (`id`, `category_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Flutter', 'Flutter', 1, '2022-12-26 10:28:38', '2022-12-26 10:28:38'),
(2, 1, 'React', 'React', 1, '2022-12-26 10:28:45', '2022-12-26 10:28:45'),
(3, 2, 'PHP', 'PHP', 1, '2022-12-26 10:28:52', '2022-12-26 10:28:52'),
(4, 3, 'Wifi', 'Wifi', 1, '2022-12-26 10:29:00', '2022-12-26 10:29:00');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_12_12_075430_create_sessions_table', 1),
(16, '2022_12_14_104817_create_course_categories_table', 1),
(17, '2022_12_15_101952_create_course_sub_categories_table', 1),
(18, '2022_12_22_074359_create_courses_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0UyVdex1FYhAicsoNztJov0nUguwLUZCt2dAXiYo', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2Vycy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoid3l2WXJTb1Nrc1ZkblRsNVkwNkFQTlhkWTVkSTZpYnM3UUVrOFNzaiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRseXJjQ0VISWxtU3NSSjdCdGRUUFl1Nld4dW9lTXFRejdubDdVWnJNZGR1Y0lCQU53N3VZQyI7fQ==', 1672086759),
('T5MKrI88WWomCHIljjDfS1Irw2pubtzDLxU4gipo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaW51UUV4QWNiR1M0MzlibDVBZjRwa0V0U0tTMXREZk9tNlA0UWRYaSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdXNlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGJmbk1ENnNsLmFmSzRDcmZGMVphYk9NYmhsQWxVQlVMcVRxSFBtUWlTeWUuaW1qOW1KeVAyIjt9', 1672088000);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role_type` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1=>Admin; 2=>Trainer; 3=>Student;',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role_type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$bfnMD6sl.afK4CrfF1ZabOMbhlAlUBULqTqHPmQiSye.imj9mJyP2', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2022-12-26 10:27:29', '2022-12-26 10:27:29'),
(2, 'Siam', 'siyamidt@gmail.com', NULL, '$2y$10$mvLHB8SdCmcXj8wm5y3aTuMOcsyp9XbnGoCuheYcb1byVBrdMlKfe', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2022-12-26 10:27:51', '2022-12-26 10:27:51'),
(3, 'Md Rahim', 'rahim@gmail.com', NULL, '$2y$10$WOEbjGLi3bWK/484dtZTyOAxavYJUoA6rki.GJ.FE.LCUHaDIdvFC', NULL, NULL, NULL, 3, NULL, NULL, NULL, '2022-12-26 12:32:01', '2022-12-26 12:32:01'),
(4, 'Karim', 'karim@gmail.com', NULL, '$2y$10$lyrcCEHIlmSsRJ7BtdTPYu6WxuoeMqQz7nl7UZrMdducIBANw7uYC', NULL, NULL, NULL, 3, NULL, NULL, NULL, '2022-12-26 12:57:47', '2022-12-26 12:57:47'),
(6, 'Siyamul', 'siyamulislam1@gmail.com', NULL, '$2y$10$ubJ1N/1/M0M1u6j4rzfK6u3vewQad9.NKm5zxeaROOp81cVNLTVq6', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2022-12-26 13:51:21', '2022-12-26 14:07:17'),
(7, 'Redmi Note 11s', 'siyamulislam.99@gmail.com', NULL, '$2y$10$fHHrCpV93p3e..8Wab5ZPOCwcvQXu8MGgyE7EGiMb4CSu.mB5HTaO', NULL, NULL, NULL, 3, NULL, NULL, NULL, '2022-12-26 14:07:50', '2022-12-26 14:07:50'),
(9, 'Xiaomi', 'siyamulislam@gmail.com', NULL, '$2y$10$HpysJvmu.3yg7IeaVa88OeK8DT17.fBOySHtO2CXa1xCYYU4qToyG', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2022-12-26 14:11:58', '2022-12-26 14:11:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_sub_categories`
--
ALTER TABLE `course_sub_categories`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_sub_categories`
--
ALTER TABLE `course_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
