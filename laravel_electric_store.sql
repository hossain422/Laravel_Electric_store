-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 27, 2023 at 06:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_electric_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `category_id`, `brand_name`, `brand_image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Codecanyon', '1689344042_Electric_store.jpg', '1', '2023-07-14 08:14:04', '2023-07-16 03:51:28'),
(2, NULL, 'Samsung', '1689344296_Electric_store.webp', '1', '2023-07-14 08:18:17', '2023-07-14 08:18:17'),
(3, NULL, 'Braun', '1689344445_Electric_store.webp', '1', '2023-07-14 08:20:45', '2023-07-14 08:20:45'),
(4, NULL, 'Huawei', '1689344478_Electric_store.webp', '1', '2023-07-14 08:21:18', '2023-07-14 08:21:18'),
(5, NULL, 'Lenovo', '1689344500_Electric_store.webp', '1', '2023-07-14 08:21:40', '2023-07-14 08:21:40'),
(6, NULL, 'LG', '1689344519_Electric_store.webp', '1', '2023-07-14 08:21:59', '2023-07-16 03:51:21'),
(7, NULL, 'Oppo', '1689344534_Electric_store.webp', '1', '2023-07-14 08:22:14', '2023-07-16 03:51:22'),
(8, NULL, 'SBS', '1689344556_Electric_store.webp', '1', '2023-07-14 08:22:36', '2023-07-16 03:54:32'),
(9, NULL, 'Tornado', '1689344577_Electric_store.webp', '1', '2023-07-14 08:22:57', '2023-07-16 03:51:24'),
(10, NULL, 'Ultra', '1689344593_Electric_store.webp', '1', '2023-07-14 08:23:13', '2023-07-16 03:51:15'),
(12, NULL, 'White Whale', '1689344626_Electric_store.webp', '1', '2023-07-14 08:23:46', '2023-07-16 03:54:32'),
(13, NULL, 'Mienta', '1689344649_Electric_store.webp', '1', '2023-07-14 08:24:09', '2023-07-16 03:54:32'),
(14, NULL, 'Kenwood', '1689344672_Electric_store.webp', '1', '2023-07-14 08:24:32', '2023-07-16 03:51:06'),
(15, NULL, 'HP', '1689478545_Electric_store.webp', '1', '2023-07-15 21:35:45', '2023-07-16 03:52:30'),
(17, NULL, 'Dell', '1689478564_Electric_store.webp', '1', '2023-07-15 21:36:04', '2023-07-16 03:51:12'),
(18, NULL, 'Apple', '1690042657_Electric_store.webp', '1', '2023-07-22 10:17:38', '2023-07-22 10:17:38'),
(19, NULL, 'Nokia', '1690042688_Electric_store.webp', '1', '2023-07-22 10:18:08', '2023-07-22 10:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Sports', '1689315264_Electric.jpg', '1', '2023-07-13 07:34:57', '2023-07-14 00:14:24'),
(4, 'Gaming', '1689315228_Electric.jpg', '1', '2023-07-13 08:26:47', '2023-07-14 04:11:02'),
(5, 'Watch', '1689263244_Electric.jpg', '1', '2023-07-13 09:47:26', '2023-07-13 09:47:26'),
(6, 'Electronics', '1689315162_Electric.jpg', '1', '2023-07-13 10:15:11', '2023-07-14 04:11:05'),
(10, 'Laptops & PCs', '1689315103_Electric.jpg', '1', '2023-07-13 22:20:39', '2023-07-14 04:10:57'),
(12, 'Lerge Home Appliances', '1689315056_Electric.jpg', '1', '2023-07-13 22:20:40', '2023-07-14 00:10:56'),
(13, 'Small Home Appliances', '1689314976_Electric.jpg', '1', '2023-07-13 22:20:41', '2023-07-14 04:11:07'),
(15, 'TVs', '1689314916_Electric.jpg', '1', '2023-07-13 22:21:48', '2023-07-14 03:24:41'),
(16, 'Mobiles & Tablets', '1689308542_Electric.jpg', '1', '2023-07-13 22:22:22', '2023-07-14 00:07:49'),
(19, 'Mobiles & Tablets Accessories', '1689337693_Electric.jpg', '1', '2023-07-14 06:28:15', '2023-07-14 06:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_13_110304_create_categories_table', 2),
(6, '2023_07_13_174358_create_sub_categories_table', 3),
(7, '2023_07_13_174418_create_brands_table', 3),
(8, '2023_07_14_143423_create_products_table', 4),
(9, '2023_07_15_071857_create_multi_images_table', 5),
(10, '2023_07_19_174003_create_carts_table', 6),
(11, '2023_07_22_001611_create_orders_table', 7),
(12, '2023_07_22_001642_create_shippings_table', 7),
(13, '2023_07_22_001658_create_order_items_table', 7),
(14, '2023_07_22_081351_create_payments_table', 8),
(15, '2023_07_27_160810_create_wishlists_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `multi_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `product_id`, `multi_image`, `created_at`, `updated_at`) VALUES
(1, 30, '1689478269_Electric_store.webp', '2023-07-15 21:31:09', '2023-07-15 21:31:09'),
(2, 30, '1689478269_Electric_store.jpg', '2023-07-15 21:31:09', '2023-07-15 21:31:09'),
(3, 30, '1689478269_Electric_store.jpg', '2023-07-15 21:31:09', '2023-07-15 21:31:09'),
(4, 31, '1689478753_Electric_store.webp', '2023-07-15 21:39:13', '2023-07-15 21:39:13'),
(5, 31, '1689478753_Electric_store.webp', '2023-07-15 21:39:13', '2023-07-15 21:39:13'),
(6, 31, '1689478753_Electric_store.webp', '2023-07-15 21:39:14', '2023-07-15 21:39:14'),
(7, 32, '1689514515_Electric_store.webp', '2023-07-16 07:35:16', '2023-07-16 07:35:16'),
(8, 32, '1689514516_Electric_store.webp', '2023-07-16 07:35:16', '2023-07-16 07:35:16'),
(9, 32, '1689514517_Electric_store.webp', '2023-07-16 07:35:17', '2023-07-16 07:35:17'),
(10, 32, '1689514517_Electric_store.webp', '2023-07-16 07:35:18', '2023-07-16 07:35:18'),
(11, 32, '1689514518_Electric_store.webp', '2023-07-16 07:35:18', '2023-07-16 07:35:18'),
(12, 33, '1689595921_Electric_store.webp', '2023-07-17 06:12:01', '2023-07-17 06:12:01'),
(13, 33, '1689595922_Electric_store.webp', '2023-07-17 06:12:02', '2023-07-17 06:12:02'),
(14, 33, '1689595922_Electric_store.webp', '2023-07-17 06:12:02', '2023-07-17 06:12:02'),
(15, 33, '1689595922_Electric_store.webp', '2023-07-17 06:12:02', '2023-07-17 06:12:02'),
(16, 33, '1689595922_Electric_store.webp', '2023-07-17 06:12:02', '2023-07-17 06:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `invoice` varchar(255) NOT NULL,
  `total` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `invoice`, `total`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(17, 1, '64bba6ab6f385', '403405', 'nagad', '2', '2023-07-22 03:51:39', '2023-07-22 03:52:03'),
(18, 2, '64bc06ca98ed2', '277705', NULL, '1', '2023-07-22 10:41:46', '2023-07-22 10:41:46'),
(19, 1, '64bc081e84139', '114305', 'bKash-bKash', '2', '2023-07-22 10:47:26', '2023-07-22 10:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `qty` varchar(255) NOT NULL,
  `total` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(29, '64bba6ab6f385', '39', '2', NULL, '2023-07-22 03:51:39', '2023-07-22 03:51:39'),
(30, '64bba6ab6f385', '31', '2', NULL, '2023-07-22 03:51:40', '2023-07-22 03:51:40'),
(31, '64bba6ab6f385', '29', '1', NULL, '2023-07-22 03:51:40', '2023-07-22 03:51:40'),
(32, '64bba6ab6f385', '40', '3', NULL, '2023-07-22 03:51:41', '2023-07-22 03:51:41'),
(33, '64bc06ca98ed2', '41', '2', NULL, '2023-07-22 10:41:48', '2023-07-22 10:41:48'),
(34, '64bc06ca98ed2', '32', '2', NULL, '2023-07-22 10:41:49', '2023-07-22 10:41:49'),
(35, '64bc06ca98ed2', '9', '1', NULL, '2023-07-22 10:41:50', '2023-07-22 10:41:50'),
(36, '64bc081e84139', '17', '1', NULL, '2023-07-22 10:47:26', '2023-07-22 10:47:26'),
(37, '64bc081e84139', '27', '1', NULL, '2023-07-22 10:47:27', '2023-07-22 10:47:27'),
(38, '64bc081e84139', '41', '1', NULL, '2023-07-22 10:47:28', '2023-07-22 10:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `bank_txn` varchar(255) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `merchant_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `amount`, `bank_txn`, `card_type`, `currency`, `merchant_id`, `name`, `email`, `phone`, `address`, `city`, `country`, `zip`, `status`, `created_at`, `updated_at`) VALUES
(2, '64bba6ab6f385', '403405.00', '1105334932709', 'nagad', 'BDT', 'aamarpaytest', 'Nazmul Hossain', 'benglish085@gmail.com', '01790265643', NULL, NULL, NULL, NULL, '1', '2023-07-22 03:52:03', '2023-07-22 03:52:03'),
(3, '64bc081e84139', '114305.00', '1002922962524', 'bKash-bKash', 'BDT', 'aamarpaytest', 'Nazmul Hossain', 'benglish085@gmail.com', '01790265643', NULL, NULL, NULL, NULL, '1', '2023-07-22 10:52:40', '2023-07-22 10:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `thambnail` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `category_id`, `sub_category_id`, `brand_id`, `thambnail`, `price`, `short_desc`, `description`, `qty`, `tag`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Samsung Galaxy A14 Dual SIM, 64GB, 4GB RAM, 4G LTE - Black', '64bc052f54afb_Electric_store.webp', '16', '2', '2', '[\"64bc052fa3c30_Electric_store.webp\",\"64bc052fa410c_Electric_store.webp\",\"64bc053001f74_Electric_store.webp\",\"64bc0530026fe_Electric_store.webp\",\"64bc053002e96_Electric_store.webp\",\"64bc05300361b_Electric_store.webp\",\"64bc05300dc11_Electric_store.webp\"]', '29200', 'Samsung Galaxy A14 Dual SIM, 64GB, 4GB RAM, 4G LTE - Black', 'About product\r\n\r\nBrand\r\nSamsung\r\n\r\nModel\r\nGalaxy A14\r\n\r\nDisplay\r\n6.6 Inches\r\n\r\n1080 x 2400 Pixels\r\n\r\nMain Camera\r\n- 50 MP\r\n\r\n- 5 MP\r\n\r\n- 2 MP\r\n\r\nFront Camera\r\n-8 MP\r\n\r\nMemory\r\n64GB, 4GB RAM\r\n\r\nProcessor Number\r\nOcta-core, Mediatek MT6769, 2GHz\r\n\r\nBattery Capacity\r\n5000 mAh, Lithium Polymer\r\n\r\nConnectivity\r\nWifi\r\n\r\n4G Network\r\n\r\nUSB Type-C\r\n\r\nBluetooth\r\n\r\nColor\r\nBlack\r\n\r\nFeatures we like\r\n\r\nClear View of The Perfect Wide Screen\r\nSamsung Galaxy A14 is equipped with a 6.6 Inch that works with FHD+ technology to enable you to experience maximum entertainment with a wide and vivid screen that enables you to watch movies, play your favorite games, and browse websites comfortably and clearly.\r\nCatch Up Every Moment You See\r\nMain triple camera with multiple features help you get creative with 50MP (f1.8) lens that has a large sensor lightens up your photos.\r\nFurthermore, the 5MP ultra-wide angle widens the photography vision with no need to take a step backward.\r\nThe other 2MP Macro lenses complete your photography scene to control blur and capture tiny things.\r\nDon\'t miss a moment and take realistic selfies with the 13MP front camera.\r\n\r\n\r\nExtra Space with Accelerated Performance\r\nEnjoy fast performance and smoother multitasking with Samsung Galaxy A14 Octa-core processor and 4GB RAM. This processor id ideal for gamers because it enables high speed data processing, faster app launches, and high performance that can handle multiple tasks.\r\nWith Samsung A14 you will get spacious storage capacity up to 64GB that makes storing your media files a hassle-free process.\r\nUnstoppable Features\r\nSamsung A14 that provide you with maximum security with a side fingerprint sensor that can only be accessed with your fingerprint.\r\nSamsung A14 features powerful 5000mAh battery made for heavy duty from dawn to night and stays for so long until recharged again.\r\nDon\'t worry about running out of power, A14 charges with 15W to power up the device rapidly.\r\n\r\nSpecifications\r\nBrand	Samsung\r\nMobile Phone Type	Smartphones\r\nModel Name	Galaxy A14\r\nColor	Black\r\nStorage Capacity	64 GB\r\nRAM	4 GB\r\nMain Camera Resolution	Triple Camera\r\nFront Camera	8 MP\r\nNumber of SIM	Dual SIM\r\nOperating System Type	Android\r\nProcessor Manufacturer	MediaTek\r\nNumber of Processor Core	Octa Core\r\nBattery Capacity	4000 - 5000 mAh\r\nNetwork	4 G\r\nPort Type	USB Type-C\r\nResolution	1080 x 2400\r\nDisplay Size	6.6 Inch\r\nDisplay Type	PLS LCD\r\nDimensions	167.7x78x9.1 mm\r\nWater Resistant	Unidentified\r\nTouch ID	Yes', '30', 'Oppo, mobile', '1', '2023-07-15 02:31:18', '2023-07-22 10:34:56'),
(9, 'Oppo A16K Dual Sim, 64GB, 4GB RAM, 4G LTE - Blue (No Warranty)', '64bc05f31cf76_Electric_store.webp', '16', '2', '7', '[\"64bc05f31ea5c_Electric_store.webp\",\"64bc05f31f72e_Electric_store.webp\",\"64bc05f3296fd_Electric_store.webp\",\"64bc05f32a9fb_Electric_store.webp\",\"64bc05f32bab7_Electric_store.webp\"]', '35100', 'Oppo A16K Dual Sim, 64GB, 4GB RAM, 4G LTE - Blue (No Warranty)', 'About product\r\n\r\nBrand\r\nOppo\r\n\r\nModel\r\nA16K\r\n\r\nDisplay\r\n6.5-inch (720 x 1600) IPS LCD touchscreen\r\n\r\nRear Camera\r\n13MP, f/2.2, 26mm (wide)\r\n\r\nFront Camera\r\n5 MP, f/2.4, 27mm (wide)\r\n\r\nMemory\r\n64GB internal storage, 4GB RAM\r\n\r\nProcessor\r\nMediaTek MT6765G Helio G35 octa-core\r\n\r\nBattery Capacity\r\n4230mAh\r\n\r\nConnectivity\r\nBluetooth 5.0, Wi-Fi, GPS, microUSB 2.0\r\n\r\nColor\r\nBlue\r\n\r\nSpecifications\r\nWarranty	No Warranty\r\nBrand	Oppo\r\nMobile Phone Type	Smartphones\r\nModel Name	Oppo A16K\r\nColor	Blue\r\nStorage Capacity	64 GB\r\nRAM	4 GB\r\nMain Camera Resolution	13 MP\r\nFront Camera	5 MP\r\nNumber of SIM	Dual SIM\r\nSIM Type	Nano-SIM\r\nOperating System Type	Android 11\r\nProcessor Manufacturer	MediaTek\r\nNumber of Processor Core	Octa Core\r\nBattery Capacity	4000 - 5000 mAh\r\nNetwork	4G LTE\r\nConnectivity	Bluetooth, GPS, Wi-Fi, micro USB 2.0\r\nPort Type	microUSB 2.0\r\nResolution	720 x 1600\r\nDisplay Size	6.5 Inch\r\nDisplay Type	IPS LCD\r\nDimensions	164 x 75.4 x 7.9 mm\r\nWeight in Grams	175g\r\nMemory Card Slot	Yes\r\nWater Resistant	No\r\nTouch ID	No\r\nGPS Receiver	Built-in', '19', 'Oppo, mobile', '1', '2023-07-15 02:40:54', '2023-07-22 10:41:50'),
(17, 'Honor Pad 8 Tablet, 12 Inch FullView Display, 128GB, 4GB RAM, Wi-Fi - Blue', '64bc032dc10cc_Electric_store.webp', '16', '1', '18', '[\"64bc032e77e3b_Electric_store.webp\",\"64bc032e789ec_Electric_store.webp\",\"64bc032e7969f_Electric_store.webp\",\"64bc032e94ad0_Electric_store.webp\",\"64bc032e9f785_Electric_store.webp\",\"64bc032ea0022_Electric_store.webp\"]', '23000', 'Honor Pad 8 Tablet, 12 Inch FullView Display, 128GB, 4GB RAM, Wi-Fi - Blue', 'About product\r\n\r\nBrand\r\nHonor\r\n\r\nModel\r\nPad 8 Tablet\r\n\r\nColor\r\nBlue\r\n\r\nDisplay\r\n12 Inch IPS LCD (1200x2000) 2K FullView Display with 60 Hz Refresh Rate\r\n\r\nProcessor\r\nQualcomm Snapdragon 680 (2.4 GHz) 6 nm - Octa Core Processor\r\n\r\nCamera\r\n- Main Camera: 5 MP\r\n\r\n- Front Camera: 5 MP\r\n\r\nSIM Type\r\nWithout SIM\r\n\r\nStorage\r\n128GB Storage - 4GB RAM\r\n\r\nBattery\r\n7250 mAh Battery - 22.5 Watt fast charging\r\n\r\nOperating System\r\nAndroid 12\r\n\r\nFeatures we like\r\n\r\nA More Comfort Reading\r\nUsed to like the Book Experience, Of Course it is amazing, a full view where your eyes can move between lines with ease, why not repeating such experience with a 12-Inch Full View Display.\r\nBright and Colorful\r\nVivid scenes and enjoyable videos, A 2K Display that delivers an immersive experience.\r\n\r\n\r\nDon\'t Stop the Party\r\nWhat else is needed for a party? A clear music or a long-lasting battery, both are at your fingertips, 8 Speakers and a 7250mAh battery are your party partners from now on.\r\nSpecifications\r\nBrand	Honor\r\nModel Name	Pad 8\r\nColor	Blue\r\nStorage Capacity	128 GB\r\nRAM	4 GB\r\nMain Camera Resolution	5 MP\r\nFront Camera	5 MP\r\nNumber of SIM	Without SIM\r\nOperating System Type	Android 12\r\nProcessor Manufacturer	Qualcomm Snapdragon\r\nNumber of Processor Core	Octa Core\r\nBattery Capacity	7001-8000mAh\r\nNetwork	Wi-Fi\r\nDisplay Size	12 Inch\r\nDisplay Type	IPS LCD\r\nWeight in Grams	520 g', '19', 'Apple, Tablet', '1', '2023-07-15 03:02:19', '2023-07-22 10:47:26'),
(18, 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)', '1689411864_Electric_store.webp', '16', '2', '7', '[\"64b637c4c06e5_Electric_store.webp\",\"64b637c4c0be1_Electric_store.webp\",\"64b637c4c13f1_Electric_store.webp\",\"64b637c4c1bb0_Electric_store.webp\",\"64b637c4c23a4_Electric_store.webp\"]', '19000', 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)', 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB\r\n\r\n RAM, 4G LTE, Navy Blue (One Year Warranty)Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year \r\n\r\nWarranty)Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) v Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)', '27', 'Oppo, mobile', '1', '2023-07-15 03:04:25', '2023-07-18 00:57:08'),
(27, 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)', '1689412529_Electric_store.jpg', '16', '2', '4', '[\"64b6376882278_Electric_store.jpg\",\"64b637688a6ef_Electric_store.jpg\"]', '35000', 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)', 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) v Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)', '19', 'Mobile, sumsong', '1', '2023-07-15 03:15:29', '2023-07-22 10:47:27'),
(29, 'Apple MacBook Air MGN63AE/A Laptop, 13.3 inch, Apple M1 Chip, 256GB SSD, 8GB RAM, M1 GPU 7 Cores, macOS - Space grey', '1689437915_Electric_store.webp', '10', '3', '9', '[\"64b6371c9d65f_Electric_store.webp\"]', '95400', 'Apple MacBook Air MGN63AE/A Laptop, 13.3 inch, Apple M1 Chip, 256GB SSD, 8GB RAM, M1 GPU 7 Cores, macOS - Space grey', 'About productBrandAppleModelMacBook Air MGN63AE/ADisplay13.3 inch WQXGA (2560x1600) Retina IPS LED Display with 400 nitsProcessorApple M1 Chip - Octa CoreStorage256GB SSD - 8GB RAMGraphics Card TypeApple M1 GPU 7 CoresColorSpace greyOperating SystemmacOSSpecificationsNumber of Warranty YearsWith 1 Year Official WarrantyBrandAppleModel NameMacBook Air MGN63AE/ADisplay Size13.3 InchHard Capacity256 GBHard Drive TypeSolid State DriveProcessor ManufacturerAppleProcessor TypeApple M1 ChipNumber of Processor CoreOcta CoreProcessor SpeedUnidentifiedRAM8 GBOperating System TypeMac OSBattery CapacityBuilt-in 49.9‑watt‑hour lithium‑polymer batteryNumber of USB Ports2 Thunderbolt Ports (USB 4th Generation)Keyboard LanguageEnglish &amp; ArabicEthernetNoWiFi ConnectivityYesResolution in Numbers2560x1600Resolution TypeWQXGA (2560x1600) Retina IPS LED Display with 400 nitsGraphic CardAppleGraphics Card TypeM1 GPU 7 CoresWeb CamYes', '12', 'Apple, Laptop', '1', '2023-07-15 10:18:35', '2023-07-22 03:51:41'),
(31, 'HP 200 G4 22 All in One Computer, Intel Core i3 10110U, 21.5 Inch FHD, 1TB HDD, 4GB RAM, Intel UHD Graphics, DOS, with Wired Keyboard and Mouse, Gray - 9UG59EA', '1689478753_Electric_store.webp', '10', '8', '15', '[\"64b636ec42c5e_Electric_store.webp\",\"64b636ec43160_Electric_store.webp\",\"64b636ec43806_Electric_store.webp\"]', '65000', 'HP 200 G4 22 All in One Computer, Intel Core i3 10110U, 21.5 Inch FHD, 1TB HDD, 4GB RAM, Intel UHD Graphics, DOS, with Wired Keyboard and Mouse, Gray - 9UG59EA', 'About productBrandHPModel200 G4 22 All in OneProcessorIntel Core i3 10110UDisplay Size-21.5 Inch FHD (‎1920x1080)Storage1TB HDDRAM4GB RAMGraphics Card TypeIntel UHDOperating SystemDosColorGraySpecificationsBrandHpModel Name200 G4 22 All in OneDisplay Size21.5 InchDimensions‎58.8 x 47.4 x 24.4 cmWeight in Grams‎8360Hard Drive TypeHard Disk DriveProcessor ManufacturerIntelProcessor TypeDual CoreNumber of Processor CoreUnidentifiedProcessor SpeedUnidentifiedProcessor Speedup to 4.1 GHzRAM4 GBOperating System TypeFREEDOSUSB Ports4HDMI Ports1Keyboard LanguageUnidentifiedWiFi ConnectivityYesResolution in Numbers1920x1080Resolution TypeFHDGraphic CardUnidentifiedGraphics Card TypeIntel UHDNumeric KeypadYesWeb CamYes', '14', 'PC, Laptop', '1', '2023-07-15 21:39:13', '2023-07-22 03:51:40'),
(32, 'Samsung 24 Inch FHD QLED Monitor - LC24FG73FQMXZN', '64bc03ef2f255_Electric_store.webp', '6', '10', '2', '[\"64bc03ef42814_Electric_store.webp\",\"64bc03ef430bf_Electric_store.webp\",\"64bc03ef43af6_Electric_store.webp\",\"64bc03ef444fa_Electric_store.webp\"]', '65000', 'Samsung 24 Inch FHD QLED Monitor - LC24FG73FQMXZN', 'About productBrand: Samsung&nbsp;Type: monitorSize in inch: 24Display type: QLEDHD type: Full HD&nbsp;(1080 X 1920)Key features:&nbsp;1ms response time, Quantum Dot color, AMD FreeSync technology, eye saver mode, flicker free technology, game modeCompatible with: Windows, MacModel number:&nbsp;LC24FG73FQMXZNSpecificationsModel NameLC24FG73FQMXZNWeight in kg3BrandSamsungScreen size in inch24 InchDimensions545 x 323.9 x 70.4 mmResolution TypeFHDDisplay TypeQLEDResolution in Numbers1920x1080', '18', 'Monitor, sumsong', '1', '2023-07-16 07:35:15', '2023-07-22 10:41:49'),
(33, 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)', '1689595918_Electric_store.webp', '16', '2', '7', '[\"64b6362e232cd_Electric_store.webp\",\"64b6362e2a14a_Electric_store.webp\",\"64b6362e2af24_Electric_store.webp\",\"64b6362e2bb9d_Electric_store.webp\"]', '36500', 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE,&nbsp;', 'Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) v Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty) Oppo A17K Dual SIM, 64GB, 3GB RAM, 4G LTE, Navy Blue (One Year Warranty)', '20', 'Oppo, mobile', '1', '2023-07-17 06:12:00', '2023-07-19 11:23:19'),
(39, 'iQ&T Sports Action Camera, Black - Q3H', '64b668705559e_Electric_store.webp', '6', '9', '8', '[\"64b6687241f58_Electric_store.webp\",\"64b6687242a41_Electric_store.webp\",\"64b6687243540_Electric_store.webp\",\"64b66872444fb_Electric_store.webp\",\"64b66872453bd_Electric_store.webp\",\"64b6687245c5e_Electric_store.webp\"]', '65000', 'iQ&amp;T Sports Action Camera, Black - Q3H', 'About productBrandiQ&amp;TTypeSports Action CameraCamera Resolution16 MPKey Features- Audio cable interface for personalized music playback-2.0-inch LCD FHD Display-30 Meters Waterproof-Ultra HD 4k Waterproof Video Camera- 4K@30FPS/2K@30FPS Videos-16MP high-definition photo by 170-degree adjustable wide-angel-Built-in wifi-Video Resolution: 4k At 15Fps, 2.7k At 30Fps, 1080p At 60Fps, 720p At 120Fps-Photo Resolution: 16MP/12MP/8MP /5MP/2MPPower Source900mAh Rechargeable BatteryFlashBuilt-in FlashModelQ3HSpecificationsBrandIQ&amp;TModel NameQ3HDigital Camera TypeSports Action CameraMaximum Resolution (in Megapixel)16 MPLCD Monitor Size in Inch2.0-inch LCD FHD DisplayBattery Type900mAh Rechargeable BatteryAuto FocusNoWiFi ConnectivityYesWireless LANNo', '-6', 'Oppo, mobile', '1', '2023-07-18 04:24:50', '2023-07-22 03:51:39'),
(40, 'Fujifilm Mini LiPlay Hybrid Instant Camera - Elegant Black', '64b66ec7e92c9_Electric_store.webp', '6', '9', '3', '[\"64b66ec8bcb8a_Electric_store.webp\",\"64b66ec8bd9a5_Electric_store.webp\",\"64b66ec8be6e2_Electric_store.webp\"]', '16000', 'Fujifilm Mini LiPlay Hybrid Instant Camera - Elegant Black', 'About productBrandFujifilmTypeInstant CameraModelMini LiPlay HybridLensMinimum Focal lens 28 mmCamera Resolution9.9 MPKey Features- Innovative image sensor produces high-resolution images with notable clarity and quality- Water-resistant casing-Touchscreen- Bluetooth connectivity-100 hours battery lifeFlashIntegrated flash captures images even in low-light situationsPower SupplyLithium-ion batteryColorElegant BlackSpecificationsBrandFujifilmModel NameMini LiPlay HybridMaximum Resolution (in Megapixel)9.9 MPBattery TypeLi-ion PolymerAuto FocusNoWireless LANNo', '-14', 'Camera', '1', '2023-07-18 04:51:52', '2023-07-22 03:51:41'),
(41, 'Nokia T20 Tablet, 10.4 Inch, 64GB, 4GB RAM, 4G LTE - Ocean Blue', '64bc01ef2fd50_Electric_store.webp', '16', '1', '19', '[\"64bc01ef3d8d7_Electric_store.webp\",\"64bc01ef532ca_Electric_store.webp\",\"64bc01ef831ad_Electric_store.webp\"]', '56300', 'Nokia T20 Tablet, 10.4 Inch, 64GB, 4GB RAM, 4G LTE - Ocean Blue', 'About productBrandNokiaModelT20 tabletDisplay10.4-inch 2K (1200×2000) touchscreenRear Camera8MP auto-focus cameraFront Camera5MPMemory64GB internal storage, 4GB RAMProcessorUnisoc T610 octa-coreBattery Capacity8200mAh with 15W fast chargingConnectivityWi-Fi, Bluetooth 5.0, GPS, Type-C USB 2.0ColorOcean BlueSpecificationsNumber of Warranty Years1BrandNokiaModel NameT20ColorBlueStorage Capacity64 GBRAM4 GBMain Camera Resolution8 MPFront Camera5 MPNumber of SIMSingle SIMOperating System TypeAndroid 11Processor ManufacturerUnisocNumber of Processor CoreOcta CoreBattery Capacity8001-9000mAhBluetoothYesNetwork4G LTEDisplay Size10.4 InchDimensions247.6 x 157.5 x 7.8 mmWeight in Grams470g', '27', 'Mobile', '1', '2023-07-22 10:21:03', '2023-07-22 10:47:28'),
(42, 'Samsung 43 Inch Full HD Smart LED TV With Built-in Receiver - 43t5300', '64bc0d2f24498_Electric_store.webp', '15', '21', '2', '[\"64bc0d2fd4725_Electric_store.webp\",\"64bc0d2fd55b7_Electric_store.webp\",\"64bc0d2fd63da_Electric_store.webp\",\"64bc0d2fd7a59_Electric_store.webp\",\"64bc0d2fd8eae_Electric_store.webp\"]', '25000', 'Samsung 43 Inch Full HD Smart LED TV With Built-in Receiver - 43t5300', 'About productBrand:&nbsp;SamsungSize in Inch: 43HD Type: FHD&nbsp;Display Type:&nbsp;LEDBuilt-in Receiver:&nbsp;YesKey Features: Smart Hub &amp; One Remote Function, HDR, and PurColor.Smart Connection:&nbsp;Yes (Wi-Fi, Ethernet)Connectivity:1 USB ports, 2 HDMI portsModel Number: UA43T5300AUXEGFeatures we like&nbsp;Your Best Resolution &amp; One Remote for EverythingSamsung T5300 TV delivers full HD resolution that delivers crisp colors and high clarity.The FHD resolution is twice the resolution of HD, and this will let you enjoy your content.This smart TV comes with a universal remote control to manage your apps, channels and consoles.&nbsp;\"Awesome Colors with HDRSamsung T5300 TV features High Dynamic Range (HDR), so you will experience immersive spectrum of colors.Dark Scenes are also enhanced with HDR and details are sharply displayed.In addition, the PurColor technology optimizes the picture of your TV to make it deliver a massive variety of colors details.\"&nbsp;\"A New Slim DesignThe slim design is so perfect and copes up with your home decoration.The TV will not take much space and it is stable thanks to the curved stands.\"&nbsp;\"Smart Connectivity with AirPlay 2Featuring AirPlay 2, you can connect your compatible smartphone to the tv screen.Amazingly, you can play music and videos from your iPhone or iPad on the tv screen with one touch.\"&nbsp;SpecificationsNumber of Warranty Years2Product lifetime: is the availability period during which the supplier provides the products spare parts after the expiration of the warranty period.5 YearsBrandSamsungModel NameUA43T5300AUXEGScreen TypeSmart TVResolution TypeFHDScreen DesignFlatScreen size in inch43 InchTv Screen Size40 - 49 InchHDMI Ports2USB Ports1Internet ConnectionWi-Fi, EthernetDisplay TypeLEDResolution in Numbers1920x1080Built-in ReceiverYesRemote Control IncludedYesAuto Power OffYesFilm Picture ModeYes', '23', 'TVs', '1', '2023-07-22 11:09:03', '2023-07-22 11:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `name`, `email`, `phone`, `address`, `city`, `country`, `zip`, `created_at`, `updated_at`) VALUES
(17, '64bba6ab6f385', 'Nazmul Hossain', 'benglish085@gmail.com', '01790265643', 'Bishai Shawrail, Kalukhali, Rajbari', 'Rajbari', 'Bangladesh', '7722', '2023-07-22 03:51:39', '2023-07-22 03:51:39'),
(18, '64bc06ca98ed2', 'Nazmul 🥰🥰🥰', 'nazmulhossain9996@gmail.com', '01790265643', 'Bishai Shawrail, Kalukhali, Rajbari', 'Dhaka', 'Bangladesh', '7722', '2023-07-22 10:41:46', '2023-07-22 10:41:46'),
(19, '64bc081e84139', 'Nazmul Hossain', 'benglish085@gmail.com', '01790265643', 'Bishai Shawrail, Kalukhali, Rajbari', 'Rajbari', 'Bangladesh', '7722', '2023-07-22 10:47:26', '2023-07-22 10:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 16, 'Tablet', '1', '2023-07-14 04:08:28', '2023-07-14 06:34:31'),
(2, 16, 'Mobile', '1', '2023-07-14 04:08:50', '2023-07-14 06:20:17'),
(3, 10, 'Laptops', '1', '2023-07-14 04:11:29', '2023-07-14 06:20:22'),
(8, 10, 'PCs', '1', '2023-07-14 06:20:57', '2023-07-14 06:20:57'),
(9, 6, 'Camera', '1', '2023-07-14 06:22:32', '2023-07-14 06:22:32'),
(10, 6, 'Monitors', '1', '2023-07-14 06:22:44', '2023-07-14 06:22:44'),
(11, 6, 'Printers', '1', '2023-07-14 06:22:56', '2023-07-14 06:22:56'),
(12, 6, 'Projectors', '1', '2023-07-14 06:23:21', '2023-07-14 06:23:21'),
(13, 4, 'Video Games', '1', '2023-07-14 06:23:52', '2023-07-14 06:34:22'),
(14, 4, 'Game Consoles', '1', '2023-07-14 06:24:06', '2023-07-14 06:24:06'),
(15, 19, 'Earphone', '1', '2023-07-14 06:28:56', '2023-07-14 06:28:56'),
(16, 19, 'Smart Watch', '1', '2023-07-14 06:29:06', '2023-07-14 06:29:06'),
(17, 19, 'Speakers & Microphones', '1', '2023-07-14 06:29:39', '2023-07-14 06:29:39'),
(18, 19, 'Power Bank', '1', '2023-07-14 06:29:59', '2023-07-14 06:34:29'),
(19, 19, 'Screen Protectors', '1', '2023-07-14 06:30:17', '2023-07-14 06:30:17'),
(20, 15, 'Receivers', '1', '2023-07-14 06:31:40', '2023-07-14 06:31:40'),
(21, 15, 'TVs', '1', '2023-07-14 06:31:49', '2023-07-14 06:31:49'),
(22, 10, 'Mouses', '1', '2023-07-14 06:32:38', '2023-07-14 06:32:38'),
(23, 10, 'Keyboards', '1', '2023-07-14 06:33:01', '2023-07-14 06:33:01'),
(24, 10, 'Headphones', '1', '2023-07-14 06:33:12', '2023-07-14 06:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` varchar(255) NOT NULL DEFAULT '1',
  `socialite` varchar(500) DEFAULT NULL,
  `socialite_id` varchar(500) DEFAULT NULL,
  `socialite_token` varchar(500) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'Bangladesh',
  `gander` varchar(255) DEFAULT NULL,
  `bathday` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_role`, `socialite`, `socialite_id`, `socialite_token`, `created_by`, `first_name`, `last_name`, `phone`, `address`, `city`, `country`, `gander`, `bathday`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@gmail.com', NULL, '$2y$10$xEt1exxeoeSL9n6TNVuh.e2Ral0x1i2fdxKpDCl2P5sVv12Z9HkpK', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, '2023-07-06 09:49:12', '2023-07-06 09:49:12'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$ZQgbRSWqKDu5wxr0gQDJ8.GM0nnvW9zG9VpgyyvrJ4Djs.7LBFBty', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, '2023-07-06 09:49:48', '2023-07-06 09:49:48'),
(3, 'Nazmul Hossain', 'benglish085@gmail.com', NULL, NULL, '1', 'github', '95046096', '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', NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, '2023-07-07 10:14:05', '2023-07-07 10:14:05'),
(4, 'Nazmul Hossain', 'azmul422@gmail.com', NULL, NULL, '1', 'facebook', '1318175489105120', 'EAAC9gVyWG0MBANOit7ufE438LflRZCibwqiAoF8ZCsS0LK53HOfVrBlgXwXT1J8Kkv4Q1zpI5onmUi89iWFu6Ry66ThkHsvKZBIhPDyRVbXRNBnokXUMZBZBPZCFJ4RKJC2XreU7oK2aXG499SIPJv6kRZAS3W4ivgWf4NuRBsDtk1MNNWxtBqOHcVcpx16HKDQdJpTwLTKUqiTasRldJdqmszoo3SMb8q0thtgdZCOe5AZDZD', NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, '2023-07-07 10:57:59', '2023-07-07 10:57:59'),
(7, 'Nazmul Hossain', 'nazmulhossain9996@gmail.com', NULL, NULL, '1', 'google', '102678880995942265145', 'ya29.a0AbVbY6MigaxX1hEfblQkH1qoL3HVwHe4x-N8xAcz9CC0uYAy1YNccfVaqEkxAhu24QgeKSF3_ymiM4IcUv76PJJCB7SrKV9Opzbx4q-qoLIEQXZQAmfqrYhSHqhisAZD63ZqxL0LCBPlweDpKLOjmSeI9nTiaCgYKAUQSARMSFQFWKvPl1hj1Xsxxg_hjrgdbxzwQjQ0163', NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, '2023-07-07 23:16:43', '2023-07-07 23:16:43'),
(9, 'Hossain Ahmed', 'hossainahmed360360@gmail.com', NULL, NULL, '1', 'google', '115590838516590592031', 'ya29.a0AbVbY6PHVHJ4UsTv2HTcwBpbp1bBwb-2G6yJVZB4SBzkOiXW9k6h1VEU4h43kqJCVBERcZY7ygJe_RbAtr5Mh9iYJqsNSO4Qu3yI59VbB7Kj3N-dqKJvv43H7xIxQ4bQEeyTj7pApI9w84eq7S0FYdb7vYRvaCgYKAW0SARESFQFWKvPlO6DXBd2yqc4z5okTaZ6f7w0163', NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, '2023-07-08 02:58:24', '2023-07-08 02:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
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
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
