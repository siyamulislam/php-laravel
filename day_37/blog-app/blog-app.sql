-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 12:28 PM
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
-- Database: `blog-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `short_description`, `long_description`, `image`, `hit_count`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'moon light', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et convallis nulla. Praesent euismod tellus at augue tempus sodales. Suspendisse potenti. Cras magna mi, varius ullamcorper diam ut, consequat volutpat leo. Phasellus facilisis feugiat nulla, ut condimentum mauris tempor vel. Integer blandit, leo at faucibus tempor, justo quam aliquam lacus, nec gravida orci augue id mi. Pellentesque turpis lectus, venenatis nec nibh at, rhoncus fermentum felis. Duis tempor pulvinar augue, in malesuada leo tempor ut. Curabitur tristique mauris ut ligula tristique, vel lobortis justo luctus. Sed pulvinar sollicitudin vulputate. Duis at molestie leo.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et convallis nulla. Praesent euismod tellus at augue tempus sodales. Suspendisse potenti. Cras magna mi, varius ullamcorper diam ut, consequat volutpat leo. Phasellus facilisis feugiat nulla, ut condimentum mauris tempor vel. Integer blandit, leo at faucibus tempor, justo quam aliquam lacus, nec gravida orci augue id mi. Pellentesque turpis lectus, venenatis nec nibh at, rhoncus fermentum felis. Duis tempor pulvinar augue, in malesuada leo tempor ut. Curabitur tristique mauris ut ligula tristique, vel lobortis justo luctus. Sed pulvinar sollicitudin vulputate. Duis at molestie leo.', 'blog-image/159Z_2107.w026.n002.628B.p1.628.jpg', 0, 1, '2022-11-22 01:54:25', '2022-11-22 01:56:54'),
(2, 2, 'Lorem Night', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et convallis nulla. Praesent euismod tellus at augue tempus sodales. Suspendisse potenti. Cras magna mi, varius ullamcorper diam ut, consequat volutpat leo. Phasellus facilisis feugiat nulla, ut condimentum mauris tempor vel. Integer blandit, leo at faucibus tempor, justo quam aliquam lacus, nec gravida orci augue id mi. Pellentesque turpis lectus, venenatis nec nibh at, rhoncus fermentum felis. Duis tempor pulvinar augue, in malesuada leo tempor ut. Curabitur tristique mauris ut ligula tristique, vel lobortis justo luctus. Sed pulvinar sollicitudin vulputate. Duis at molestie leo.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et convallis nulla. Praesent euismod tellus at augue tempus sodales. Suspendisse potenti. Cras magna mi, varius ullamcorper diam ut, consequat volutpat leo. Phasellus facilisis feugiat nulla, ut condimentum mauris tempor vel. Integer blandit, leo at faucibus tempor, justo quam aliquam lacus, nec gravida orci augue id mi. Pellentesque turpis lectus, venenatis nec nibh at, rhoncus fermentum felis. Duis tempor pulvinar augue, in malesuada leo tempor ut. Curabitur tristique mauris ut ligula tristique, vel lobortis justo luctus. Sed pulvinar sollicitudin vulputate. Duis at molestie leo.', 'blog-image/159Z_2107.w026.n002.628B.p1.628.jpg', 0, 1, '2022-11-22 01:54:38', '2022-11-22 01:57:41'),
(3, 3, 'Pond', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et convallis nulla. Praesent euismod tellus at augue tempus sodales. Suspendisse potenti. Cras magna mi, varius ullamcorper diam ut, consequat volutpat leo. Phasellus facilisis feugiat nulla, ut condimentum mauris tempor vel. Integer blandit, leo at faucibus tempor, justo quam aliquam lacus, nec gravida orci augue id mi. Pellentesque turpis lectus, venenatis nec nibh at, rhoncus fermentum felis. Duis tempor pulvinar augue, in malesuada leo tempor ut. Curabitur tristique mauris ut ligula tristique, vel lobortis justo luctus. Sed pulvinar sollicitudin vulputate. Duis at molestie leo.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et convallis nulla. Praesent euismod tellus at augue tempus sodales. Suspendisse potenti. Cras magna mi, varius ullamcorper diam ut, consequat volutpat leo. Phasellus facilisis feugiat nulla, ut condimentum mauris tempor vel. Integer blandit, leo at faucibus tempor, justo quam aliquam lacus, nec gravida orci augue id mi. Pellentesque turpis lectus, venenatis nec nibh at, rhoncus fermentum felis. Duis tempor pulvinar augue, in malesuada leo tempor ut. Curabitur tristique mauris ut ligula tristique, vel lobortis justo luctus. Sed pulvinar sollicitudin vulputate. Duis at molestie leo.', 'blog-image/3451515.jpg', 0, 1, '2022-11-22 01:54:53', '2022-11-22 01:58:05'),
(4, 1, 'আর্জেন্টিনা ৭, সৌদি আরব ৩, মেসি ০', 'মেসিদের  বিশ্বকাপ শুরু হচ্ছে আজ। বিকেল ৪টায় লুসাইল স্টেডিয়ামে আর্জেন্টিনা নিজেদের প্রথম ম্যাচে খেলবে সৌদি আরবের বিপক্ষে। কোচ লিওনেল স্কালোনির অধীনে দারুণ ছন্দে আছে আর্জেন্টিনা।  টানা ৩৬ ম্যাচ অপরাজিত থেকেই বিশ্বকাপে এসেছে স্কালোনির আর্জেন্টিনা আর এই দলকে তাতিয়ে দেওয়ার মতো কারণ আছে আরও একটি। দলের অধিনায়ক মেসি আগেই ঘোষণা দিয়েছেন, কাতারেই তাঁর শেষ বিশ্বকাপ। মেসি নিজেও যেমন সেরাটা দিতে চাইবেন, তেমনি পুরো দলের চেষ্টারও কমতি থাকবে না। তাই সব মিলিয়ে আর্জেন্টিনা কাতার বিশ্বকাপে এসেছে ফেবারিটের তকমা নিয়েই।', 'গত রাশিয়া বিশ্বকাপটা দুঃস্বপ্নের মতো কাটানোর পর পরিবর্তনের মধ্য দিয়ে গেছে সৌদি আরব। কোচ হার্ভে রেনার্দের অধীনে দল অনেকটাই ঘুরে দাঁড়িয়েছে। বাছাইয়ে ভালো খেলেই জায়গা করে নিয়েছে কাতার বিশ্বকাপে। আগে পাঁচটি বিশ্বকাপ খেলা সৌদি এবার ভালো খেলতে চায়। তবে বিশ্বকাপ জেতার স্বপ্ন দেখা তাদের জন্য একটু বাড়াবাড়িই।  সৌদি আরবের জালে এ পর্যন্ত ৭ গোল করেছে আর্জেন্টিনা। আরব দেশটি আর্জেন্টিনার জালে করেছে ৩ গোল। সৌদি আরবের বিপক্ষে এর আগে একটি ম্যাচই খেলেছেন মেসি। সেই ম্যাচে তিনি গোল পাননি। এই দুই দলের প্রথম দেখা ১৯৮৮ সালে।সৌদি আরবের জালে এ পর্যন্ত ৭ গোল করেছে আর্জেন্টিনা। আরব দেশটি আর্জেন্টিনার জালে করেছে ৩ গোল। সৌদি আরবের বিপক্ষে এর আগে একটি ম্যাচই খেলেছেন মেসি। সেই ম্যাচে তিনি গোল পাননি।  ১. ৬ জুলাই ১৯৮৮, অস্ট্রেলিয়া দ্বিশতবর্ষী গোল্ডকাপ  এশিয়ার চ্যাম্পিয়ন সৌদি আরব, র‌্যাঙ্কিংয়ে ১ নম্বর দল ব্রাজিল, ১৯৮৬ বিশ্বকাপজয়ী আর্জেন্টিনা ও স্বাগতিক অস্ট্রেলিয়াকে নিয়ে অনুষ্ঠিত হয়েছিল এই টুর্নামেন্ট। গ্রুপ পর্বের ম্যাচে সৌদি আরবের সঙ্গে ২-২ গোলে ড্র করে আর্জেন্টিনা। ম্যাচের ৪ গোলের ৩টিই করেন আর্জেন্টিনার সাবেক রাইটব্যাক হারনান দিয়াজ। অর্থাৎ দলের হয়ে জোড়া গোল করার পাশাপাশি করেন আত্মঘাতী গোলও। সৌদি আরবের হয়ে অন্য গোলটি করেন তাদের ফুটবল ইতিহাসের সর্বোচ্চ গোলদাতা মাজিদ আবদুল্লাহ।', 'blog-image/prothomalo-bangla_2022-11_99ce6f21-1d00-4eeb-86fc-061a854c00c9_611029_01_02.webp', 0, 1, '2022-11-22 03:18:52', '2022-11-24 02:14:56'),
(5, 1, 'আর্জেন্টিনা-সৌদি আরব ম্যাচের রেফারি গুরুতর অপরাধে জড়িত থাকার অভিযোগে গ্রেপ্তার হয়েছিলেন', 'কাতার লুসাইল স্টেডিয়ামে আজ বাংলাদেশ সময় বিকেল চারটায় বিশ্বকাপে নিজেদের প্রথম ম্যাচে মাঠে নামবে আর্জেন্টিনা, প্রতিপক্ষ সৌদি আরব। এই ম্যাচ পরিচালনা করবেন স্লোভেনিয়ান রেফারি স্লাভকো ভিনচিচ।   তাঁর দুজন সহকারীও স্লোভেনিয়ান—টমাস ক্লানসিনিক ও আন্দ্রাজ কোভাচিচ। চতুর্থ রেফারির দায়িত্বে সেনেগালের মাগুয়েত্তে এনদিয়ায়ে। বিশ্বকাপের ম্যাচ হলেও সাধারণত কোনো ম্যাচের রেফারি নিয়ে কেউ মাথা ঘামান না। তবে এই ম্যাচ শুরুর আগেই রেফারি স্লাভকো ভিনচিচকে নিয়ে শুরু হয়েছে আলোচনা। কারণ, তাঁর অতীত ইতিহাস।', '৪২ বছর বয়সী স্লাভকো ভিনচিচ ২০১০ সাল থেকে ফিফা রেফারির দায়িত্ব পালন করছেন। গত ইউরোপা লিগের ফাইনাল ম্যাচও পরিচালনা করেছেন তিনি। বড়দের বিশ্বকাপে এই ম্যাচ দিয়েই তাঁর অভিষেক ঘটবে। সেটি তাঁর জন্য আনন্দের উপলক্ষ হলেও ভিনচিচ আলোচনায় উঠে এসেছেন দুই বছর আগের এক ঘটনার জন্য। ড্রাগ ও অস্ত্র চোরাচালান এবং পতিতাবৃত্তির চক্রের সঙ্গে জড়িত থাকার অভিযোগে দুই বছর আগে পুলিশ তাঁকে গ্রেপ্তার করেছিল। অভিযোগ প্রমাণ না হওয়ায় পুলিশ ছেড়ে দিয়েছিল ভিনচিচকে অভিযোগ প্রমাণ না হওয়ায় পুলিশ ছেড়ে দিয়েছিল ভিনচিচকেছবি: টুইটার ২০২০ সালে কোভিড মহামারি চলাকালে বসনিয়ার বিয়েইনা শহরের একটি কেবিনে পুলিশ তাঁকে গ্রেপ্তার করে। সেই কেবিনে পুলিশ ৯ জন নারী, ২৬ জন পুরুষ, অবৈধ অস্ত্র ও প্রচুর কোকেনের সন্ধান পেয়েছিল। আর্জেন্টিনার সংবাদমাধ্যম ‘টিওয়াইসি স্পোর্টস’ জানিয়েছে, ১৪ প্যাকেট কোকেন উদ্ধার করেছিল পুলিশ আর ১০টি অবৈধ অস্ত্র। এর পাশাপাশি ৩টি বুলেট প্রুফ জ্যাকেট ও ১০ হাজার ইউরোও উদ্ধার করা হয়েছিল। পরে পুলিশি তদন্তে জানা যায়, এই চক্রের সঙ্গে সরাসরি সংযোগ ছিল না ভিনচিচের। পুলিশ তাঁকে গ্রেপ্তার করেছিল সার্বিয়ান মডেল তিয়ানা মাকসিমোভিচের সঙ্গে জড়িত থাকার সন্দেহে। তিয়ানার বিরুদ্ধে পতিতাবৃত্তি চক্র চালানোর অভিযোগ ছিল। ইতালির সংবাদকর্মী জিয়ানলুকা ডি মার্জিও জানিয়েছেন, সেই ঘটনায় নৌকায় দ্রিনা নদী দিয়ে আরও তিনজনের সঙ্গে পালানোর চেষ্টা করেছিলেন ভিনচিচ। বসনিয়ান পুলিশের কাছে সেই ঘটনায় নিজের অবস্থান ব্যাখ্যার পর মুক্তি পেয়েছিলেন ভিনচিচ, ‘নৈশভোজের দাওয়াতে গিয়েছিলাম, যেটা আমার সবচেয়ে বড় ভুল হয়ে দাঁড়ায়। টেবিলে বন্ধুদের সঙ্গে বসেছিলাম। হঠাৎই পুলিশ হানা দেয়। গ্রেপ্তার হওয়া চক্রের সঙ্গে আমার কোনো সম্পর্কই নেই। এমনকি আমার সঙ্গীদের সঙ্গেও তাদের কোনো সম্পর্ক নেই।’ ভিনচিচ সে সময় আরও জানিয়েছিলেন, ‘পুলিশ আমাদের গ্রেপ্তার করে, আমরা সাক্ষ্য দিই এবং পরে জানা যায়, ওই চক্রের সঙ্গে আমাদের কোনো সংযোগ নেই। এরপর মুক্তি পাই। এটা আমার জীবনের সবচেয়ে বড় ভুল ছিল।', 'blog-image/prothomalo-bangla_2022-11_ae542fe4-0141-4fc5-88cf-602f0f6ee71f_11.webp', 0, 1, '2022-11-22 03:21:38', '2022-11-24 02:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'খেলা', 'খেলা খেলা খেলা', 'category-image/prothomalo-bangla_2022-11_bfed6531-db97-46e5-bd67-78d87fbe975d_2022_11_23T191401Z_998937675_UP1EIBN1HFBKY_RTRMADP_3_SOCCER_WORLDCUP_BEL_CAN_REPORT.webp', '2022-11-21 04:27:08', '2022-11-24 02:23:04'),
(2, 'Night', 'wow', 'category-image/159Z_2107.w026.n002.628B.p1.628.jpg', '2022-11-21 04:28:15', '2022-11-22 01:55:52'),
(3, 'River', 'nodi', 'category-image/images.jfif', '2022-11-21 04:28:54', '2022-11-22 01:56:03'),
(4, 'Moon light', 'wow wow', 'category-image/159Z_2107.w026.n002.628B.p1.628.jpg', '2022-11-22 01:52:44', '2022-11-22 01:56:19');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_21_100404_create_categories_table', 2),
(6, '2022_11_21_110351_create_blogs_table', 3),
(7, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(8, '2022_11_24_084451_create_sessions_table', 4);

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
('ERl57319JMPW7K8cCPIE8dO4MSC4VnH1l5Osgbcz', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiY0YzZTJYQVFDdEQzbnR0VmFFZFQ1bVJROTl2TUY2TkxXMU9JS1NCUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGlmT3VmSjR4bmNpbEMudHltbnFKWk9UVmtCdWdQRllIR1U2M1BsUUFrVmpTeWtlaVJoVFNtIjt9', 1669289001),
('tHskzSBu5aoVyxNTyGiGuIdBGWyi4RXAVHXrGM6i', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRDgyVVlvSk80STJiQ2hVbFgydUp1TlNJUDJzcFE0dkZlbE14bkt5ZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo2ODoiaHR0cDovL2xvY2FsaG9zdC93b3JrREIvcGhwLWxhcmF2ZWwvZGF5XzM3L2Jsb2ctYXBwL3B1YmxpYy9kYXNoYm9hcmQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2NDoiaHR0cDovL2xvY2FsaG9zdC93b3JrREIvcGhwLWxhcmF2ZWwvZGF5XzM3L2Jsb2ctYXBwL3B1YmxpYy9sb2dpbiI7fX0=', 1669283902);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Siam', 'siyamidt@gmail.com', NULL, '$2y$10$ifOufJ4xncilC.tymnqJZOTVkBugPFYHGU63PlQAkVjSykeiRhTSm', NULL, NULL, NULL, NULL, '2022-11-24 03:18:41', '2022-11-24 03:18:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
