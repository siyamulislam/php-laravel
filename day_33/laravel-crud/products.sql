-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:23 PM
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
-- Database: `laravel_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 1200.00, 'wow joss wow joss wow joss wow joss wow joss wow joss', 'C:\\xampp\\tmp\\php8F95.tmp', '2022-11-17 04:52:42', '2022-11-17 04:52:42'),
(2, 'Pant', 1400.00, 'not bad , its good', 'C:\\xampp\\tmp\\php1086.tmp', '2022-11-17 04:55:26', '2022-11-17 04:55:26'),
(3, 'baby pant', 1400.00, 'not bad , its good', 'C:\\xampp\\tmp\\php5EA7.tmp', '2022-11-17 05:06:42', '2022-11-17 05:06:42'),
(4, 'Shoe', 3222.00, 'f sds dgsd', 'C:\\xampp\\tmp\\php41BC.tmp', '2022-11-17 05:08:45', '2022-11-17 05:08:45'),
(5, 'Shirt Puraton', 3.00, 'ds fsdf', 'C:\\xampp\\tmp\\php5EF3.tmp', '2022-11-17 05:17:37', '2022-11-17 05:17:37'),
(6, 'new shirt', 1200.00, 'gd fhdg', 'C:\\xampp\\tmp\\phpCA0F.tmp', '2022-11-17 05:22:27', '2022-11-17 05:22:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
