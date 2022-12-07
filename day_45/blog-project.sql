-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 12:21 PM
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
-- Database: `blog-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Xaiomi', 'des', 1, 'admin/assets/upload/brand/1670409101_xaiomi.jpg', '2022-12-07 04:31:41', '2022-12-07 04:31:41'),
(6, 'Samsung', 'des', 1, 'admin/assets/upload/brand/1670409216_samsung.jpg', '2022-12-07 04:33:36', '2022-12-07 04:33:36'),
(7, 'Denim', 'des', 1, 'admin/assets/upload/brand/1670409333_denim.png', '2022-12-07 04:35:33', '2022-12-07 04:35:33'),
(8, 'Gucci', 'des', 1, 'admin/assets/upload/brand/1670409347_gucci.jpg', '2022-12-07 04:35:47', '2022-12-07 04:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(14, 'Electronics', 'des', 1, 'admin/assets/upload/category/1670409377_Electrionics.jpg', '2022-12-07 04:36:17', '2022-12-07 04:36:17'),
(15, 'Men Fashion', 'des', 1, 'admin/assets/upload/category/1670409396_men.jpg', '2022-12-07 04:36:36', '2022-12-07 04:36:36'),
(16, 'Women Fashion', 'des', 1, 'admin/assets/upload/category/1670409410_women.jpg', '2022-12-07 04:36:50', '2022-12-07 04:36:50'),
(17, 'Kids Fashion', 'des', 1, 'admin/assets/upload/category/1670409425_kid.jpg', '2022-12-07 04:37:05', '2022-12-07 04:37:05');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_04_081357_create_sessions_table', 1),
(7, '2022_12_05_110538_create_categories_table', 2),
(8, '2022_12_06_105551_create_brands_table', 3),
(9, '2022_12_07_080800_create_products_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `brand_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `price`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(4, 14, 5, 'Redmi K20 pro', 49000.00, '<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"15\" scope=\"row\">NETWORK</th>\r\n			<td><a href=\"https://www.gsmarena.com/network-bands.php3\">Technology</a></td>\r\n			<td><a href=\"https://www.gsmarena.com/xiaomi_redmi_k20_pro-9708.php#\">GSM / HSPA / LTE</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"2\" scope=\"row\">LAUNCH</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=phone-life-cycle\">Announced</a></td>\r\n			<td>2019, May 28</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=phone-life-cycle\">Status</a></td>\r\n			<td>Available. Released 2019, June 01</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"6\" scope=\"row\">BODY</th>\r\n			<td><a href=\"https://www.gsmarena.com/xiaomi_redmi_k20_pro-9708.php#\" onclick=\"helpW(\'h_dimens.htm\');\">Dimensions</a></td>\r\n			<td>156.7 x 74.3 x 8.8 mm (6.17 x 2.93 x 0.35 in)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/xiaomi_redmi_k20_pro-9708.php#\" onclick=\"helpW(\'h_weight.htm\');\">Weight</a></td>\r\n			<td>191 g (6.74 oz)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=build\">Build</a></td>\r\n			<td>Glass front (Gorilla Glass 5), glass back (Gorilla Glass 5), aluminum frame</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=sim\">SIM</a></td>\r\n			<td>Dual SIM (Nano-SIM, dual stand-by)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"5\" scope=\"row\">DISPLAY</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=display-type\">Type</a></td>\r\n			<td>Super AMOLED, HDR10</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/xiaomi_redmi_k20_pro-9708.php#\" onclick=\"helpW(\'h_dsize.htm\');\">Size</a></td>\r\n			<td>6.39 inches, 100.2 cm2&nbsp;(~86.1% screen-to-body ratio)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=resolution\">Resolution</a></td>\r\n			<td>1080 x 2340 pixels, 19.5:9 ratio (~403 ppi density)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=screen-protection\">Protection</a></td>\r\n			<td>Corning Gorilla Glass 5</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"4\" scope=\"row\">PLATFORM</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=os\">OS</a></td>\r\n			<td>Android 9.0 (Pie), upgradable to Android 10, MIUI 12</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=chipset\">Chipset</a></td>\r\n			<td>Qualcomm SM8150 Snapdragon 855 (7 nm)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=cpu\">CPU</a></td>\r\n			<td>Octa-core (1x2.84 GHz Kryo 485 &amp; 3x2.42 GHz Kryo 485 &amp; 4x1.78 GHz Kryo 485)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=gpu\">GPU</a></td>\r\n			<td>Adreno 640</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"5\" scope=\"row\">MEMORY</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=memory-card-slot\">Card slot</a></td>\r\n			<td>No</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=dynamic-memory\">Internal</a></td>\r\n			<td>64GB 6GB RAM, 128GB 6GB RAM, 128GB 8GB RAM, 256GB 8GB RAM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>UFS 2.1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"4\" scope=\"row\">MAIN CAMERA</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=camera\">Triple</a></td>\r\n			<td>48 MP, f/1.8, 26mm (wide), 1/2.0&quot;, 0.8&micro;m, PDAF, Laser AF<br />\r\n			8 MP, f/2.4, 53mm (telephoto), 1/4.0&quot;, 1.12&micro;m, PDAF, 2x optical zoom<br />\r\n			13 MP, f/2.4, 12mm (ultrawide), 1/3.1&quot;, 1.12&micro;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=camera\">Features</a></td>\r\n			<td>Dual-LED flash, HDR, panorama</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=camera\">Video</a></td>\r\n			<td>4K@30/60fps, 1080p@30/120/240fps, 1080p@960fps</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"4\" scope=\"row\">SELFIE CAMERA</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=secondary-camera\">Single</a></td>\r\n			<td>Motorized pop-up 20 MP, f/2.2, (wide), 1/3.4&quot;, 0.8&micro;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=secondary-camera\">Features</a></td>\r\n			<td>HDR</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=secondary-camera\">Video</a></td>\r\n			<td>1080p@30fps</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"3\" scope=\"row\">SOUND</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=loudspeaker\">Loudspeaker</a></td>\r\n			<td>Yes</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=audio-jack\">3.5mm jack</a></td>\r\n			<td>Yes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>24-bit/192kHz audio</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"9\" scope=\"row\">COMMS</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=wi-fi\">WLAN</a></td>\r\n			<td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=bluetooth\">Bluetooth</a></td>\r\n			<td>5.0, A2DP, LE, aptX HD</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=gnss\">Positioning</a></td>\r\n			<td>GPS (L1+L5), GLONASS (G1), BDS (B1), GALILEO (E1+E5a)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=nfc\">NFC</a></td>\r\n			<td>Yes (China only)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=fm-radio\">Radio</a></td>\r\n			<td>Yes</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=usb\">USB</a></td>\r\n			<td>USB Type-C 2.0, USB On-The-Go</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"9\" scope=\"row\">FEATURES</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=sensors\">Sensors</a></td>\r\n			<td>Fingerprint (under display, optical), accelerometer, gyro, proximity, compass</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"7\" scope=\"row\">BATTERY</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=rechargeable-battery-types\">Type</a></td>\r\n			<td>Li-Po 4000 mAh, non-removable</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=battery-charging\">Charging</a></td>\r\n			<td>27W wired, QC4</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"6\" scope=\"row\">MISC</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=build\">Colors</a></td>\r\n			<td>Carbon black, Flame red, Glacier blue, Summer Honey, Pearl White</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=models\">Models</a></td>\r\n			<td>M1903F11I</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=sar\">SAR</a></td>\r\n			<td>1.03 W/kg (head) &nbsp; &nbsp; 0.72 W/kg (body) &nbsp; &nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=price\">Price</a></td>\r\n			<td>About 400 EUR</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"6\" scope=\"row\">TESTS</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=benchmarking\">Performance</a></td>\r\n			<td>AnTuTu: 368846 (v7), 437823 (v8)<br />\r\n			GeekBench: 10684 (v4.4), 2732 (v5.1)<br />\r\n			GFXBench: 36fps (ES 3.1 onscreen)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php\">Display</a></td>\r\n			<td><a href=\"https://www.gsmarena.com/xiaomi_redmi_k20_pro-review-1973p3.php#dt\">Contrast ratio: Infinite (nominal)</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p5.php\">Camera</a></td>\r\n			<td><a href=\"https://www.gsmarena.com/piccmp.php3?idType=1&amp;idPhone1=9708&amp;nSuggest=1\">Photo</a>&nbsp;/&nbsp;<a href=\"https://www.gsmarena.com/vidcmp.php3?idType=3&amp;idPhone1=9708&amp;nSuggest=1\">Video</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p7.php\">Loudspeaker</a></td>\r\n			<td><a href=\"https://www.gsmarena.com/xiaomi_redmi_k20_pro-review-1973p3.php#lt\">Voice 71dB / Noise 75dB / Ring 84dB</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p4.php\">Audio quality</a></td>\r\n			<td><a href=\"https://www.gsmarena.com/xiaomi_redmi_k20_pro-review-1973p3.php#aq\">Noise -93.9dB / Crosstalk -94.2dB</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p6.php\">Battery life</a></td>\r\n			<td>\r\n			<p><a href=\"https://www.gsmarena.com/xiaomi_redmi_k20_pro-9708.php#\" onclick=\"showBatteryPopup(event, 9708); \">Endurance rating 103h</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, 'admin/assets/upload/product/1670409508_p1.jpg', '2022-12-07 04:38:28', '2022-12-07 04:38:28'),
(5, 14, 5, 'Redmi Note 11s', 32000.00, '<h1><strong>The Redmi Note 11</strong>s</h1>\r\n\r\n<h3>(elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let&#39;s focus on the 11S 5G we have here. The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let&#39;s focus on the 11S 5G we have here.</h3>', 1, 'admin/assets/upload/product/1670409613_p2.jpg', '2022-12-07 04:40:13', '2022-12-07 04:59:27'),
(6, 14, 5, 'Mi NoteBook Pro', 95000.00, '<h2>wow</h2>', 1, 'admin/assets/upload/product/1670409672_p3.jpg', '2022-12-07 04:41:12', '2022-12-07 04:41:12'),
(7, 15, 7, 'T-shirt', 120.00, '<p>White T-shirts get a lot of attention, but let&rsquo;s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It&rsquo;s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. &ldquo;I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,&rdquo; he says. As is the story with all basics, the black shirt comes in many variations &mdash; and, when shopping for one, it&rsquo;s important to consider the material, fit, style, and weight. We talked to stylish guys about their favorites, and they recommended recycled T-shirts, V-necks, utilitarian crewnecks, oversize shirts reminiscent of the &rsquo;90s, and more. Best overall | Best less expensive | Best V-neck | Best lightweight | Best heavyweight | Best sustainable heavyweight | Best sustainable medium weight | Best for tall men | Best V-neck for tall men | Best with a pocket | Best less expensive with a pocket | Best luxury</p>', 1, 'admin/assets/upload/product/1670409731_p4.jpg', '2022-12-07 04:42:11', '2022-12-07 05:13:16'),
(8, 16, 8, 'Saree', 14000.00, '<p>Product details of Exclusive Design Black Color Nokshi Saree For Women By Jamdani Gallery Product Type: saree Main Material: half silk Gender: Women Blouse Piece:Without Blouse Piece Occasion: Casual, Party &amp; Festive Attractive designs Fashionable An uncommon present for the extraordinary individual Product Type: saree Main Material: half silk Gender: Women Blouse Piece:Without Blouse Piece Occasion: Casual, Party &amp; Festive Attractive designs Fashionable An uncommon present for the extraordinary individual Specifications of Exclusive Design Black Color Nokshi Saree For Women By Jamdani Gallery BrandNo BrandSKU227673268_BD-1262640616Main MaterialSilk What&rsquo;s in the box Exclusive Design Black Color Nokshi Saree For Women By Jamdani Gallery</p>', 1, 'admin/assets/upload/product/1670411343_p6.jpg', '2022-12-07 05:09:03', '2022-12-07 05:12:36'),
(9, 16, 8, 'Three pieces', 3600.00, '<p>Product details of Unstitched Exclusive, Fashionable, Stylish and Comfortable, High Quality Three Piece for Women, Three Piece [3 Piece], new dress collection for women 2021,কম্পিউটার এমব্রয়ডারি ডিজাইন করা স্ক্রীন প্রিন্ট থ্রি পিচ-Skin Print Cotton Three Piece For Women Product Type : স্ক্রীন প্রিন্ট থ্রি পিচ Body : রাজধানী ভয়েল 3 গজ Design Work : স্ক্রীন প্রিন্ট Gender : Women পায়জামাঃ মদিনা ভয়েল 2.5 গজ ওরনাঃ জরজেট 2.5 গজ Size: Free Size. Length: Upto 45 Inch. Comfortable to wear. Fashionable and elegant design. Color: As same as picture. High quality fabric, stylish design, and comfortable Easy to wash Designed according to latest patterns Colour Declaration : There Might Be Slight Variation In The Actual Color Of The Georgette Long Dress Due To Different Screen Resolutions. {Wash Note} : Machine Wash Cold Gentle Cycle/Hand Wash In Cold Water বি: দ্র:ইমেজে পণ্যের রঙ দেখুন; আপনার কম্পিউটার/মোবাইলের রেজুলেশন ও লাইটিং এর জন্য ইমেজ ও প্রকৃত পণ্যের রঙ -এ সামান্য তারতম্য ঘটতে পারে। Product Type:skin print Cotton three piece Top: Front All Over Heavy skin printy Back: Plain Sleeves: All Over Cotton Based Santoon Long: 45 , Width: 50. The lawn is a</p>', 1, 'admin/assets/upload/product/1670411407_p7.jpg', '2022-12-07 05:10:07', '2022-12-07 05:11:38'),
(10, 17, 7, 'T-shirt for Kids', 250.00, '<p>PRODUCT DETAILS Size : 5-10 Years,10-16 Years TRADE INFO Quantity : 100 Pieces Destination Place : Colombo, Sri Lanka PRICE INFO FOB Price : Price on request ADDITIONAL INFORMATION Payment Terms : L/C Import Country : Central Asia,Eastern Asia,South Asia,Southeast Asia Coats Digital Messe Frankfurt Middle East GmbH Other Buying Offer From This Buyer</p>', 1, 'admin/assets/upload/product/1670411466_p8.jpg', '2022-12-07 05:11:06', '2022-12-07 05:11:06'),
(11, 17, 7, 'Kids Pant', 1200.00, '<p>Product details of Yellow Color full Pant For Kids Brand New and High Quality Yellow Color Made of Cotton Original Export Quality No harm forbabies&#39; skin Comfortable and warm for babies Stylish and fashion design make your baby more attractive Great for casual, daily, party or photoshoot, also a great idea for a baby show gifts About Kids Pant Kids Pants are an item of clothing worn from the waist to the ankles, covering both legs separately. The word pants generally means underwear and not Leggings . Shorts are similar to Leggings , but with legs that come down only to around the area of the knee, higher or lower depending on the style of the garment. To distinguish them from shorts, trousers may be called long trousers in certain contexts. The seller offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent of achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.</p>', 1, 'admin/assets/upload/product/1670411659_p9.jpg', '2022-12-07 05:14:19', '2022-12-07 05:14:19'),
(12, 17, 8, 'Kids Shirt', 1200.00, '<p>Please enter PIN code to check delivery time &amp; Pay on Delivery Availability 100% Original Products Pay on delivery might be available Easy 30 days returns and exchanges Try &amp; Buy might be available BEST OFFERS Best Price: Rs. 479 Applicable on: Orders above Rs. 599 (only on first purchase) Coupon code: MYNTRA200 Coupon Discount: Rs. 200 off (check cart for final savings) View Eligible Products EMI option available EMI starting from Rs.32/month View Plan PRODUCT DETAILS Shirt in an airy cotton weave with a turn-down collar, buttons down the front and a yoke at the back. Long sleeves with buttoned cuffs, and a rounded hem.</p>', 1, 'admin/assets/upload/product/1670411704_p10.jpg', '2022-12-07 05:15:04', '2022-12-07 05:15:04'),
(13, 14, 5, 'Xiaomi Band 7', 2200.00, '<p>Display 1.62 inch AMOLED Touch Display Resolution: 192 x 490 pixels，326 PPI Brightness: up to 500 nits, adjustable Tempered glass with anti-fingerprint coating Band faces:100+ Battery Charging type: magnetic charging Charging time: &le;2 hours Typical use time: &ge;14 days Capacity: 180mAh Connectivity 5.2 BLE Material Strap Material: TPU Strap buckle: aluminium alloy OS Android 6.0 or higher, iOS 10 or higher SpecialFeatures Fitness: 110+ fitness modes 5 auto detection modes: outdoor running, walking, treadmill, rowing machine, elliptical Other features VO 2 max Training effect Training load Recovery duration Health: Heart rate monitoring SpO 2 tracking Sleep tracking (deep sleep, light sleep, REM and naps) Sleep breathing quality tracking Female health tracking Stress monitoring, breathing exercises PAI (Personal Activity Intelligence</p>', 1, 'admin/assets/upload/product/1670411758_p11.jpg', '2022-12-07 05:15:58', '2022-12-07 05:15:58'),
(14, 16, 8, 'ed White Saree TK. 3360', 3250.00, '<p>Silk sarees have their origins in Dhaka, Bangladesh and were popularized during the Mughal rule in India. Very delicate to touch and exotic to</p>', 1, 'admin/assets/upload/product/1670411794_p12.jpg', '2022-12-07 05:16:34', '2022-12-07 05:16:34'),
(15, 15, 8, 'Denim Jacket', 2450.00, '<p>Gender Men Fit Type Comfort Fit Color Blue Hooded NO Sleeves Type Full Sleeves Pattern Plain Brand Only &amp; Sons, Eigh, Blue Men Material Denim Fit Regular Occasion Casual Wear Minimum Order Quantity 50 Product Description Denim jacket Made in Bangladesh COD 50% available Delivery All over India available Sizes S to XXl</p>', 1, 'admin/assets/upload/product/1670411835_p13.jpg', '2022-12-07 05:17:15', '2022-12-07 05:17:15'),
(16, 14, 6, 'Samsung Galaxy S22 5G', 120000.00, '<p>M-S908N (Korea); SM-S9080 (China); SM-S908E (Asia/Africa)</p>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"15\" scope=\"row\">NETWORK</th>\r\n			<td><a href=\"https://www.gsmarena.com/network-bands.php3\">Technology</a></td>\r\n			<td><a href=\"https://www.gsmarena.com/samsung_galaxy_s22_ultra_5g-11251.php#\">GSM / CDMA / HSPA / EVDO / LTE / 5G</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"2\" scope=\"row\">LAUNCH&nbsp; &nbsp;</th>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=phone-life-cycle\">Announced</a></td>\r\n			<td>2022, February 09</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=phone-life-cycle\">Status</a></td>\r\n			<td>Available. Released 2022, February 25</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"6\" scope=\"row\">BODY&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>\r\n			<td><a href=\"https://www.gsmarena.com/samsung_galaxy_s22_ultra_5g-11251.php#\" onclick=\"helpW(\'h_dimens.htm\');\">Dimensions</a></td>\r\n			<td>163.3 x 77.9 x 8.9 mm (6.43 x 3.07 x 0.35 in)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/samsung_galaxy_s22_ultra_5g-11251.php#\" onclick=\"helpW(\'h_weight.htm\');\">Weight</a></td>\r\n			<td>228 g / 229 g (mmWave) (8.04 oz)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=build\">Build</a></td>\r\n			<td>Glass front (Gorilla Glass Victus+), glass back (Gorilla Glass Victus+), aluminum frame</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://www.gsmarena.com/glossary.php3?term=sim\">SIM</a></td>\r\n			<td>Nano-SIM and eSIM or Dual SIM (2 Nano-SIMs and eSIM, dual stand-by)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>IP68 dust/water resistant (up to 1.5m for 30 mins)<br />\r\n			Armor aluminum frame with tougher drop and scratch resistance (advertised)<br />\r\n			Stylus, 2.8ms latency (Bluetooth integration, accelerometer, gyro)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, 'admin/assets/upload/product/1670412005_s22 5G.jpg', '2022-12-07 05:20:05', '2022-12-07 05:20:05');

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
('twd4RwnH5D7jEZLgnh3SBA0xezphMicRCHTFCPPb', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaWJadGw4SVpiTXdJRDhnb2daVjJUeHVhcEVveTF2eXc0eWZJVDRmWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHA6Ly9sb2NhbGhvc3Qvd29ya0RCL3BocC1sYXJhdmVsL2RheV80My9ibG9nLXByb2plY3QvcHVibGljL3Byb2R1Y3QvbWFuYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRoTU1NVEgzQmVlQ3JXUS5kLy43VS4uT2xZYU8yN3FPL1hWY20ubVIwYnZSSElpQVh4TU5XRyI7fQ==', 1670412045);

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
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Siam', 'siyamidt@gmail.com', NULL, '$2y$10$hMMMTH3BeeCrWQ.d/.7U..OlYaO27qO/XVcm.mR0bvRHIiAXxMNWG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-04 02:29:34', '2022-12-04 02:29:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
