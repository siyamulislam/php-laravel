-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 11:56 AM
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
-- Database: `panda-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `price`, `code`, `description`, `image`, `hit_count`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Redmi K20 pro', '49999', 10001, 'Xiaomi Redmi K20 Price in Bangladesh (BDT 49,999). This smartphone comes 4G Networks, (6GB, 8GB) RAM and (64GB, 128GB, 256GB) ROM, 6.39 inches AMOLED Display, (48MP+13MP+8MP) Triple Rear and 20MP Selfie Camera, Android 9.0 (Pie), Octa core CPU, 4000 mAh Li-Po Battery.', 'product-image/1669196928_product1.jpg', 0, 1, '2022-11-23 03:48:48', '2022-11-23 03:48:48'),
(2, 1, 1, 'Redmi Note 11s', '32000', 1002, 'The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let\'s focus on the 11S 5G we have here. The Redmi Note 11s (elevens), many as they may be, do tend to keep to a certain common aesthetic. At least the bulk of earlier ones, that is - the 11E and the just announced 11T and 11T Pro (yes, they keep coming) tend to feature a different camera styling. But let\'s focus on the 11S 5G we have here.', 'product-image/1669196987_product2.jpg', 0, 1, '2022-11-23 03:49:47', '2022-11-23 04:23:58'),
(4, 1, 1, 'Mi NoteBook Pro', '95000', 10003, 'Processor Intel Core i7-8550U Processor (8M Cache, 1.80 GHz up to 4.00 GHz) Display 15.6 FHD(1920 x 1080) Display Memory 8GB 2400MHz DDR4 RAM Storage 256GB PCI-E SSD Graphics NVIDIA GeForce MX150 with 2GB DDR5 Graphics Operating System Windows 10 Home Battery 4 cell lithium polymer battery Audio Built-in Dual Speakers,Dolby Audio', 'product-image/1669200269_product3.jpg', 0, 1, '2022-11-23 04:44:29', '2022-11-23 04:44:29'),
(5, 2, 2, 'T-Shirt', '650', 1400, 'White T-shirts get a lot of attention, but let’s not forget their equally versatile (and more slimming) counterpart: the exceedingly wearable, deceptively simple black T-shirt. It’s a staple you can wear to work, the gym, and on a date. Plus, as Justin Vaughan, a perfumer and the founder of the incense brand Ponsont, puts it, a black tee is the perfect high-low uniform. “I can just as easily kick it with a farmer in Virginia as I can take a meeting in the city,” he says. As is the story with all basics, the black shirt comes in many variations — and, when shopping for one, it’s important to consider the material, fit, style, and weight. We talked to stylish guys about their favorites, and they recommended recycled T-shirts, V-necks, utilitarian crewnecks, oversize shirts reminiscent of the ’90s, and more. Best overall | Best less expensive | Best V-neck | Best lightweight | Best heavyweight | Best sustainable heavyweight | Best sustainable medium weight | Best for tall men | Best V-neck for tall men | Best with a pocket | Best less expensive with a pocket | Best luxury', 'product-image/1669200320_product4.jpg', 0, 1, '2022-11-23 04:45:20', '2022-11-23 04:45:20'),
(6, 2, 2, 'Shirt', '999', 1500, 'Product details of Stylish Regular Slim Fit Blank Cotton Long Sleeve Formal Shirt For Men Brand : Classic Men Material : Cotton Fabric Classification : Cotton Ball Printed Pattern : Solid Color Collar : Square Neck Colour : As given picture Sleeve Length : Long Sleeve Plate Type : Slim Sales Channel Type : E-commerce Only Sells Online Material Composition : 100% Cotton Size : M,L,XL M- long: 29\", body: 40\" L- long: 30 \", body: 42\" XL- long: 31\", body: 44 Specifications of Stylish Regular Slim Fit Blank Cotton Long Sleeve Formal Shirt For Men BrandNo BrandSKU165682207_BD-1099146346Main MaterialCotton What’s in the box Shirt', 'product-image/1669200363_product5.jpg', 0, 1, '2022-11-23 04:46:03', '2022-11-23 04:46:03'),
(7, 3, 3, 'Saree', '2300', 3400, 'Product details of Exclusive Design Black Color Nokshi Saree For Women By Jamdani Gallery Product Type: saree Main Material: half silk Gender: Women Blouse Piece:Without Blouse Piece Occasion: Casual, Party & Festive Attractive designs Fashionable An uncommon present for the extraordinary individual Product Type: saree Main Material: half silk Gender: Women Blouse Piece:Without Blouse Piece Occasion: Casual, Party & Festive Attractive designs Fashionable An uncommon present for the extraordinary individual Specifications of Exclusive Design Black Color Nokshi Saree For Women By Jamdani Gallery BrandNo BrandSKU227673268_BD-1262640616Main MaterialSilk What’s in the box Exclusive Design Black Color Nokshi Saree For Women By Jamdani Gallery.', 'product-image/1669200396_product6.jpg', 0, 1, '2022-11-23 04:46:36', '2022-11-23 04:46:36'),
(8, 3, 3, 'Three Pieces', '2400', 1326, 'Product details of Unstitched Exclusive, Fashionable, Stylish and Comfortable, High Quality Three Piece for Women, Three Piece [3 Piece], new dress collection for women 2021,কম্পিউটার এমব্রয়ডারি ডিজাইন করা স্ক্রীন প্রিন্ট থ্রি পিচ-Skin Print Cotton Three Piece For Women Product Type : স্ক্রীন প্রিন্ট থ্রি পিচ Body : রাজধানী ভয়েল 3 গজ Design Work : স্ক্রীন প্রিন্ট Gender : Women পায়জামাঃ মদিনা ভয়েল 2.5 গজ ওরনাঃ জরজেট 2.5 গজ Size: Free Size. Length: Upto 45 Inch. Comfortable to wear. Fashionable and elegant design. Color: As same as picture. High quality fabric, stylish design, and comfortable Easy to wash Designed according to latest patterns Colour Declaration : There Might Be Slight Variation In The Actual Color Of The Georgette Long Dress Due To Different Screen Resolutions. {Wash Note} : Machine Wash Cold Gentle Cycle/Hand Wash In Cold Water বি: দ্র:ইমেজে পণ্যের রঙ দেখুন; আপনার কম্পিউটার/মোবাইলের রেজুলেশন ও লাইটিং এর জন্য ইমেজ ও প্রকৃত পণ্যের রঙ -এ সামান্য তারতম্য ঘটতে পারে। Product Type:skin print Cotton three piece Top: Front All Over Heavy skin printy Back: Plain Sleeves: All Over Cotton Based Santoon Long: 45 , Width: 50. The lawn is a plain weave textile, originally of linen but now chiefly cotton. These fabrics are fantastic for the spring and summer season. It is a generic term used to describe different styles of dress. This can be worn by women. This is combined with salwar and kameez. It is comfortable during your workout and is easy to clean. It will keep you looking and feeling good all day long. Look elegant feel comfortable with this Skin Print Cotton Three Piece, This fashionable dress will make your day Cool design with super comfort. Buy it at the best prices from DARAZ.', 'product-image/1669200437_product7.jpg', 0, 1, '2022-11-23 04:47:17', '2022-11-23 04:54:01'),
(9, 4, 2, 'T-Shirt for Kids', '450', 2344, 'PRODUCT DETAILS Size : 5-10 Years,10-16 Years TRADE INFO Quantity : 100 Pieces Destination Place : Colombo, Sri Lanka PRICE INFO FOB Price : Price on request ADDITIONAL INFORMATION Payment Terms : L/C Import Country : Central Asia,Eastern Asia,South Asia,Southeast Asia Coats Digital Messe Frankfurt Middle East GmbH Other Buying Offer From This Buyer', 'product-image/1669200480_product8.jpg', 0, 1, '2022-11-23 04:48:00', '2022-11-23 04:48:00'),
(10, 4, 3, 'Kids Pant', '850', 4544, 'Product details of Yellow Color full Pant For Kids Brand New and High Quality Yellow Color Made of Cotton Original Export Quality No harm forbabies\' skin Comfortable and warm for babies Stylish and fashion design make your baby more attractive Great for casual, daily, party or photoshoot, also a great idea for a baby show gifts About Kids Pant Kids Pants are an item of clothing worn from the waist to the ankles, covering both legs separately. The word pants generally means underwear and not Leggings . Shorts are similar to Leggings , but with legs that come down only to around the area of the knee, higher or lower depending on the style of the garment. To distinguish them from shorts, trousers may be called long trousers in certain contexts. The seller offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent of achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty. Specifications of Yellow Color full Pant For Kids BrandFashion ParkSKU117262078_BD-1036450605Main MaterialCotton What’s in the box Yellow Color full Pant For Kids', 'product-image/1669200519_product9.jpg', 0, 1, '2022-11-23 04:48:39', '2022-11-23 04:48:39'),
(11, 4, 2, 'Kids Shirt', '1200', 1221, 'Please enter PIN code to check delivery time & Pay on Delivery Availability 100% Original Products Pay on delivery might be available Easy 30 days returns and exchanges Try & Buy might be available BEST OFFERS Best Price: Rs. 479 Applicable on: Orders above Rs. 599 (only on first purchase) Coupon code: MYNTRA200 Coupon Discount: Rs. 200 off (check cart for final savings) View Eligible Products EMI option available EMI starting from Rs.32/month View Plan PRODUCT DETAILS Shirt in an airy cotton weave with a turn-down collar, buttons down the front and a yoke at the back. Long sleeves with buttoned cuffs, and a rounded hem. Material & Care 100% Cotton Machine Wash Specifications Sleeve Length Long Sleeves Collar Spread Collar Fit Regular Fit Print or Pattern Type Polka Dots Occasion Casual Length Regular Hemline Curved Placket Button Placket', 'product-image/1669200549_product10.jpg', 0, 1, '2022-11-23 04:49:09', '2022-11-23 04:49:09'),
(12, 1, 1, 'Xiaomi Band 7', '2250', 4545, 'Display 1.62 inch AMOLED Touch Display Resolution: 192 x 490 pixels，326 PPI Brightness: up to 500 nits, adjustable Tempered glass with anti-fingerprint coating Band faces:100+ Battery Charging type: magnetic charging Charging time: ≤2 hours Typical use time: ≥14 days Capacity: 180mAh Connectivity 5.2 BLE Material Strap Material: TPU Strap buckle: aluminium alloy OS Android 6.0 or higher, iOS 10 or higher SpecialFeatures Fitness: 110+ fitness modes 5 auto detection modes: outdoor running, walking, treadmill, rowing machine, elliptical Other features VO 2 max Training effect Training load Recovery duration Health: Heart rate monitoring SpO 2 tracking Sleep tracking (deep sleep, light sleep, REM and naps) Sleep breathing quality tracking Female health tracking Stress monitoring, breathing exercises PAI (Personal Activity Intelligence', 'product-image/1669200587_product11.jpg', 0, 1, '2022-11-23 04:49:47', '2022-11-23 04:49:47'),
(13, 3, 3, 'Red White Saree', '3360', 3323, 'Silk sarees have their origins in Dhaka, Bangladesh and were popularized during the Mughal rule in India. Very delicate to touch and exotic to Silk sarees have their origins in Dhaka, Bangladesh and were popularized during the Mughal rule in India. Very delicate to touch and exotic to', 'product-image/1669200620_product12.jpg', 0, 1, '2022-11-23 04:50:20', '2022-11-23 04:54:14'),
(14, 2, 2, 'Denim Jacket', '2480', 23342, 'Gender Men Fit Type Comfort Fit Color Blue Hooded NO Sleeves Type Full Sleeves Pattern Plain Brand Only & Sons, Eigh, Blue Men Material Denim Fit Regular Occasion Casual Wear Minimum Order Quantity 50 Product Description Denim jacket Made in Bangladesh COD 50% available Delivery All over India available Sizes S to XXl', 'product-image/1669200646_product13.jpg', 0, 1, '2022-11-23 04:50:46', '2022-11-23 04:50:46'),
(15, 1, 4, 'Samsung Galaxy S22 5G', '124500', 1321, 'Versions: SM-S901B, SM-S901B/DS (International); SM-S901U (USA); SM-S901U1 (USA unlocked); SM-S901W (Canada); SM-S901N (Korea); SM-S9010 (China); SM-S901E (Asia/Africa) NETWORK Technology GSM / CDMA / HSPA / EVDO / LTE / 5G LAUNCH Announced 2022, February 09 Status Available. Released 2022, February 25 BODY Dimensions 146 x 70.6 x 7.6 mm (5.75 x 2.78 x 0.30 in) Weight 167 g / 168 g (mmWave) (5.89 oz) Build Glass front (Gorilla Glass Victus+), glass back (Gorilla Glass Victus+), aluminum frame SIM Nano-SIM and eSIM or Dual SIM (2 Nano-SIMs and eSIM, dual stand-by) IP68 dust/water resistant (up to 1.5m for 30 mins) Armor aluminum frame with tougher drop and scratch resistance (advertised) DISPLAY Type Dynamic AMOLED 2X, 120Hz, HDR10+, 1300 nits (peak) Size 6.1 inches, 90.1 cm2 (~87.4% screen-to-body ratio) Resolution 1080 x 2340 pixels, 19.5:9 ratio (~425 ppi density) Protection Corning Gorilla Glass Victus+ Always-on display PLATFORM OS Android 12, upgradable to Android 13, One UI 5 Chipset Exynos 2200 (4 nm) - Europe Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm) - ROW CPU Octa-core (1x2.8 GHz Cortex-X2 & 3x2.50 GHz Cortex-A710 & 4x1.8 GHz Cortex-A510) - Europe Octa-core (1x3.00 GHz Cortex-X2 & 3x2.50 GHz Cortex-A710 & 4x1.80 GHz Cortex-A510) - ROW GPU Xclipse 920 - Europe Adreno 730 - ROW MEMORY Card slot No Internal 128GB 8GB RAM, 256GB 8GB RAM UFS 3.1 MAIN CAMERA Triple 50 MP, f/1.8, 23mm (wide), 1/1.56\", 1.0µm, Dual Pixel PDAF, OIS 10 MP, f/2.4, 70mm (telephoto), 1/3.94\", 1.0µm, PDAF, OIS, 3x optical zoom 12 MP, f/2.2, 13mm, 120˚ (ultrawide), 1/2.55\" 1.4µm, Super Steady video Features LED flash, auto-HDR, panorama Video 8K@24fps, 4K@30/60fps,', 'product-image/1669200686_samsung s22.jpg', 0, 1, '2022-11-23 04:51:26', '2022-11-23 04:51:26');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
