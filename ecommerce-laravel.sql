-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 23, 2024 lúc 11:46 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecommerce-laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attribute_values`
--

DROP TABLE IF EXISTS `attribute_values`;
CREATE TABLE IF NOT EXISTS `attribute_values` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_attribute_id` bigint UNSIGNED DEFAULT NULL,
  `values` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `attribute_values_product_attribute_id_foreign` (`product_attribute_id`),
  KEY `attribute_values_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `product_attribute_id`, `values`, `product_id`, `created_at`, `updated_at`, `quantity`) VALUES
(32, 2, 'S', 42, '2023-12-09 00:26:17', '2023-12-09 00:26:17', 0),
(33, 2, 'M', 42, '2023-12-09 00:26:17', '2023-12-09 00:26:17', 0),
(34, 2, 'L', 42, '2023-12-09 00:26:17', '2023-12-09 00:26:17', 0),
(35, 2, 'XL', 42, '2023-12-09 00:26:17', '2023-12-09 00:26:17', 0),
(36, 2, 'M', 43, '2023-12-09 00:29:07', '2023-12-09 00:29:07', 0),
(37, 2, 'L', 43, '2023-12-09 00:29:07', '2023-12-09 00:29:07', 0),
(38, 2, 'XL', 43, '2023-12-09 00:29:07', '2023-12-09 00:29:07', 0),
(39, 2, 'S', 44, '2023-12-11 09:12:25', '2023-12-11 09:12:25', 0),
(40, 2, 'M', 44, '2023-12-11 09:12:25', '2023-12-11 09:12:25', 0),
(41, 2, 'L', 44, '2023-12-11 09:12:25', '2023-12-11 09:12:25', 0),
(42, 2, 'XS', 45, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 0),
(43, 2, 'S', 45, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 0),
(44, 2, 'M', 45, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 0),
(45, 2, 'L', 45, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 0),
(46, 2, 'XL', 45, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 0),
(47, 3, 'Gree', 45, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 0),
(48, 3, 'BLue', 45, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 0),
(49, 3, 'Red', 45, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 0),
(50, 2, 'S', 46, '2023-12-11 09:28:43', '2023-12-11 09:28:43', 0),
(51, 2, 'M', 46, '2023-12-11 09:28:43', '2023-12-11 09:28:43', 0),
(52, 2, 'L', 46, '2023-12-11 09:28:43', '2023-12-11 09:28:43', 0),
(53, 2, 'S', 47, '2023-12-11 09:34:29', '2023-12-11 09:34:29', 0),
(54, 2, 'M', 47, '2023-12-11 09:34:29', '2023-12-11 09:34:29', 0),
(55, 2, 'L', 47, '2023-12-11 09:34:29', '2023-12-11 09:34:29', 0),
(56, 2, 'S', 48, '2023-12-11 09:35:03', '2023-12-11 09:35:03', 0),
(57, 2, 'M', 48, '2023-12-11 09:35:03', '2023-12-11 09:35:03', 0),
(58, 2, 'L', 48, '2023-12-11 09:35:03', '2023-12-11 09:35:03', 0),
(59, 2, 'S', 49, '2023-12-11 09:35:38', '2023-12-11 09:35:38', 0),
(60, 2, 'M', 49, '2023-12-11 09:35:38', '2023-12-11 09:35:38', 0),
(61, 2, 'L', 49, '2023-12-11 09:35:38', '2023-12-11 09:35:38', 0),
(62, 2, 'S', 50, '2023-12-11 09:36:03', '2023-12-11 09:36:03', 0),
(63, 2, 'M', 50, '2023-12-11 09:36:03', '2023-12-11 09:36:03', 0),
(64, 2, 'L', 50, '2023-12-11 09:36:03', '2023-12-11 09:36:03', 0),
(65, 2, 'S', 51, '2023-12-11 09:36:31', '2023-12-11 09:36:31', 0),
(66, 2, 'M', 51, '2023-12-11 09:36:31', '2023-12-11 09:36:31', 0),
(67, 2, 'L', 51, '2023-12-11 09:36:31', '2023-12-11 09:36:31', 0),
(68, 2, 'S', 52, '2023-12-11 09:40:26', '2023-12-11 09:40:26', 0),
(69, 2, 'M', 52, '2023-12-11 09:40:26', '2023-12-11 09:40:26', 0),
(70, 2, 'L', 52, '2023-12-11 09:40:26', '2023-12-11 09:40:26', 0),
(71, 2, 'S', 53, '2023-12-11 09:42:25', '2023-12-11 09:42:25', 0),
(72, 2, 'M', 53, '2023-12-11 09:42:25', '2023-12-11 09:42:25', 0),
(73, 2, 'L', 53, '2023-12-11 09:42:25', '2023-12-11 09:42:25', 0),
(74, 2, 'S', 54, '2023-12-11 09:44:12', '2023-12-11 09:44:12', 0),
(75, 2, 'M', 54, '2023-12-11 09:44:12', '2023-12-11 09:44:12', 0),
(76, 2, 'L', 54, '2023-12-11 09:44:12', '2023-12-11 09:44:12', 0),
(77, 2, 'S', 55, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 0),
(78, 2, 'M', 55, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 0),
(79, 2, 'L', 55, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 0),
(80, 2, 'XL', 55, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 0),
(81, 3, 'White', 55, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 0),
(82, 3, 'Blue', 55, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 0),
(83, 3, 'Gray', 55, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 0),
(84, 3, 'Black', 55, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 0),
(93, 2, 'S', 57, '2023-12-11 09:52:33', '2023-12-11 09:52:33', 0),
(94, 2, 'M', 57, '2023-12-11 09:52:33', '2023-12-11 09:52:33', 0),
(95, 2, 'L', 57, '2023-12-11 09:52:34', '2023-12-11 09:52:34', 0),
(96, 2, 'S', 58, '2023-12-11 09:56:27', '2023-12-11 09:56:27', 0),
(97, 2, 'M', 58, '2023-12-11 09:56:27', '2023-12-11 09:56:27', 0),
(98, 2, 'L', 58, '2023-12-11 09:56:27', '2023-12-11 09:56:27', 0),
(99, 2, 'XL', 58, '2023-12-11 09:56:27', '2023-12-11 09:56:27', 0),
(100, 2, 'S', 59, '2023-12-11 09:56:55', '2023-12-11 09:56:55', 0),
(101, 2, 'M', 59, '2023-12-11 09:56:55', '2023-12-11 09:56:55', 0),
(102, 2, 'L', 59, '2023-12-11 09:56:55', '2023-12-11 09:56:55', 0),
(103, 2, 'XL', 59, '2023-12-11 09:56:55', '2023-12-11 09:56:55', 0),
(104, 2, 'S', 60, '2023-12-11 09:57:19', '2023-12-11 09:57:19', 0),
(105, 2, 'M', 60, '2023-12-11 09:57:19', '2023-12-11 09:57:19', 0),
(106, 2, 'L', 60, '2023-12-11 09:57:19', '2023-12-11 09:57:19', 0),
(107, 2, 'XL', 60, '2023-12-11 09:57:19', '2023-12-11 09:57:19', 0),
(108, 2, 'S', 61, '2023-12-11 09:57:42', '2023-12-11 09:57:42', 0),
(109, 2, 'M', 61, '2023-12-11 09:57:42', '2023-12-11 09:57:42', 0),
(110, 2, 'L', 61, '2023-12-11 09:57:42', '2023-12-11 09:57:42', 0),
(111, 2, 'XL', 61, '2023-12-11 09:57:42', '2023-12-11 09:57:42', 0),
(112, 2, 'S', 62, '2023-12-11 10:00:14', '2023-12-11 10:00:14', 0),
(113, 2, 'M', 62, '2023-12-11 10:00:14', '2023-12-11 10:00:14', 0),
(114, 2, 'L', 62, '2023-12-11 10:00:14', '2023-12-11 10:00:14', 0),
(115, 2, 'XL', 62, '2023-12-11 10:00:14', '2023-12-11 10:00:14', 0),
(116, 2, 'S', 63, '2023-12-11 10:03:14', '2023-12-11 10:03:14', 0),
(117, 2, 'M', 63, '2023-12-11 10:03:14', '2023-12-11 10:03:14', 0),
(118, 2, 'L', 63, '2023-12-11 10:03:14', '2023-12-11 10:03:14', 0),
(119, 2, 'XL', 63, '2023-12-11 10:03:14', '2023-12-11 10:03:14', 0),
(120, 2, 'S', 64, '2023-12-11 10:06:54', '2023-12-11 10:06:54', 0),
(121, 2, 'M', 64, '2023-12-11 10:06:54', '2023-12-11 10:06:54', 0),
(122, 2, 'S', 65, '2023-12-11 10:10:24', '2023-12-11 10:10:24', 0),
(123, 2, 'M', 65, '2023-12-11 10:10:24', '2023-12-11 10:10:24', 0),
(124, 2, 'S', 66, '2023-12-11 10:12:41', '2023-12-11 10:12:41', 0),
(125, 2, 'S', 67, '2023-12-11 10:14:50', '2023-12-11 10:14:50', 0),
(126, 3, 'S', 67, '2023-12-11 10:14:50', '2023-12-11 10:14:50', 0),
(127, 2, 'S', 56, '2023-12-11 10:22:59', '2023-12-11 10:22:59', 0),
(128, 2, 'M', 56, '2023-12-11 10:22:59', '2023-12-11 10:22:59', 0),
(129, 2, 'L', 56, '2023-12-11 10:22:59', '2023-12-11 10:22:59', 0),
(130, 3, '', 56, '2023-12-11 10:22:59', '2023-12-11 10:22:59', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `image`, `is_popular`) VALUES
(15, 'Áo ', 'ao', '2023-12-08 23:55:32', '2023-12-08 23:55:32', '1702104932.jpg', 1),
(16, 'Quần ', 'quan', '2023-12-09 00:04:34', '2023-12-09 00:04:34', '1702105474.png', 1),
(17, 'Đồ lót nam', 'do-lot-nam', '2023-12-09 00:10:43', '2023-12-09 00:10:43', '1702105843.jpg', 1),
(18, 'Phụ kiện các loại', 'phu-kien-cac-loai', '2023-12-09 00:14:51', '2023-12-09 00:14:51', '1702106091.jpg', 1),
(19, 'Mỹ phẩm ', 'my-pham', '2023-12-12 09:29:41', '2023-12-12 09:29:41', '1702398581.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `content`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Rio de janero', 'minh@gmail.com', '093812392560', 'Cần cải thiện giao diện', 'Giao diện', '2023-08-28 00:46:07', '2023-08-28 00:46:07'),
(2, 'Berlin', 'Berlin@gmail.com', '09999992', 'Giao hàng quá nhanh quá tuyệt', 'giao hàng ', '2023-08-28 01:00:12', '2023-08-28 01:00:12'),
(3, 'Tokyo', 'King@gmail.com', '0123456789', 'Áo quần đẹp đáy ', 'Hàng đẹp', '2023-08-28 01:00:45', '2023-08-28 01:00:45'),
(4, 'ABASHDBJA', 'phule@gmail.com', '076672233', 'awserdtfyguhjimk,dlffdgv bnmfsl,dgpidjfuhbhb dfngmkblifjduhb nmkbh nmkinbh nmkvn \n!\n\nadasdasdasdadadasdsadasd\n\n\n\n\n', 'poiqwe', '2023-08-28 01:01:08', '2023-08-28 01:01:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` date NOT NULL DEFAULT '2023-10-11',
  PRIMARY KEY (`id`),
  UNIQUE KEY `coupons_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `desc`, `created_at`, `updated_at`, `expiry_date`) VALUES
(1, 'OFF30', 'fixed', '30.00', '300.00', 'OFF 30$ for bill 300$', '2023-10-05 03:11:05', '2023-10-05 03:11:05', '2024-10-11'),
(3, 'SALEOFF50%', 'percent', '50.00', '100.00', 'SALE OFF UPTO 50%', '2023-10-05 06:59:27', '2023-10-05 06:59:27', '2024-10-11'),
(4, 'OFF100', 'fixed', '100.00', '0.00', 'SALE OFF 100$ for bill 1000$', '2023-10-05 07:00:22', '2023-10-05 07:00:22', '2024-10-11'),
(5, 'NEWUSER', 'fixed', '30000.00', '0.00', 'OFF 30000 for all new user', '2023-10-11 07:39:10', '2023-10-11 09:02:16', '2025-11-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
CREATE TABLE IF NOT EXISTS `deliveries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `deliveries`
--

INSERT INTO `deliveries` (`id`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, '\r\nAccept order', NULL, NULL),
(2, 'Delivering', NULL, NULL),
(3, 'delivered', NULL, NULL),
(4, 'Canceled', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `home_sliders`
--

DROP TABLE IF EXISTS `home_sliders`;
CREATE TABLE IF NOT EXISTS `home_sliders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `top_title`, `sub_title`, `offer`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sale off ', 'Black Friday discount', 'Up to 60%', '60%', 'http://127.0.0.1:8000/shop', '1692435046.jpg', 1, '2023-08-19 00:58:58', '2023-08-19 01:50:46'),
(3, 'Supper value deals', 'Trade-in offer', 'On all products', 'Save more with coupons & up to 70% off', 'http://127.0.0.1:8000/shop', '1692435763.png', 1, '2023-08-19 02:02:43', '2023-08-19 02:02:43'),
(4, 'Fashion Trending', 'Hot promotions', 'Great Collection', 'Save more with coupons & up to 20% off', 'http://127.0.0.1:8000/shop', '1692435883.png', 1, '2023-08-19 02:04:43', '2023-08-19 02:04:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_29_084234_create_categories_table', 2),
(6, '2023_07_29_084255_create_products_table', 2),
(7, '2023_08_18_155126_create_home_sliders_table', 3),
(8, '2023_08_20_134438_add_image_and_is_popular_column_to_categories_table', 4),
(9, '2023_08_22_071029_add_forign_order_to_orders_table', 5),
(10, '2023_08_22_071724_add_forign_order_to_orders_table_2', 6),
(11, '2023_08_22_072609_add_forign_order_to_order_details_table', 7),
(12, '2023_08_22_074249_add_note_column_to_orders_table', 8),
(13, '2023_08_22_105402_add_column_address_and_phone_to_user_table', 9),
(14, '2023_08_22_144454_add_column_total_to_orders_table', 10),
(15, '2023_08_24_111445_create_deliveries_table', 11),
(16, '2023_08_24_120645_add_delivery_status_column_to_order_table', 12),
(17, '2023_08_25_152200_add_rstatus_to_order_details_table', 13),
(18, '2023_08_25_144754_create_reviews_table', 14),
(19, '2023_08_28_065445_create_contacts_table', 15),
(20, '2023_09_01_150605_create_subcategories_table', 16),
(21, '2023_09_02_080436_add_subcategory_id_to_product_table', 17),
(22, '2023_09_10_065651_create_product_attributes_table', 18),
(23, '2023_09_10_111258_create_attribute_values_table', 19),
(24, '2023_09_13_124624_add_options_to_order_details_table', 20),
(25, '2023_10_05_090800_create_coupons_table', 21),
(26, '2023_10_11_141028_add_expiry_date_to_coupon_table', 22),
(27, '2024_01_08_082931_add_quantity_to_attribute_values_table', 23),
(28, '2024_03_23_100213_create_shoppingcart_table', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1:payed,2 not payed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `total` decimal(10,0) NOT NULL,
  `discount` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_delivery` enum('accept order','accepted order','delivering','delivered','canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason_cancel` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `code`, `email`, `user_name`, `user_address`, `user_phone`, `user_id`, `status`, `created_at`, `updated_at`, `notes`, `total`, `discount`, `status_delivery`, `reason_cancel`) VALUES
(44, '28177843', 'minh.trinh@7stechnology.com', 'xcvgbhn', 'cyvubinomrtyubio', '0987654', 8, 1, '2023-12-15 23:12:57', '2023-12-15 23:15:24', 'tyugink hvyubink hgvyugihbj hvyugihj bhvbhn ', '229000', '0', 'delivered', NULL),
(45, '538862391', 'minh.trinh@7stechnology.com', 'vbnjuygfcv bn', 'liuygfvbnmkloiuygtfcvbhj', '09876543', 8, 1, '2023-12-15 23:13:50', '2023-12-15 23:15:21', 'dfgjn ,kjuhgv bnmkiuyhgv bn', '229000', '0', 'delivered', NULL),
(46, '362440271', 'minh.trinh@7stechnology.com', 'minh', 'adasdasdad', '0999838321', 9, 0, '2023-12-15 23:40:57', '2023-12-15 23:42:45', 'adasdas đá a', '320000', '0', 'canceled', 'đổi địa chỉ'),
(47, '231893722', 'minh.trinh@7stechnology.com', 'stec', '78asdhjbashd ádyua', '09182316784', 10, 1, '2023-12-26 06:35:46', '2023-12-26 07:17:35', 'á đá asdasd á', '648000', '0', 'delivered', NULL),
(48, '100596874', 'minh.trinh@7stechnology.com', 'Rio', '66 Tân Sơn,TP HCM', '0983127869', 10, 1, '2023-12-26 07:08:37', '2023-12-26 07:17:25', 'áudhasd', '468900', '0', 'delivered', NULL),
(49, '149558876', 'dh51904003@student.stu.edu.vn', 'Tân Minh', '999 CMT8, Tân Bình, tp HCM', '03308386701', 11, 1, '2023-12-26 10:23:34', '2023-12-27 04:12:28', 'Giao nhanh lên tôi không đợi được nữa rồi ', '483800', '0', 'delivered', NULL),
(50, '239131304', 'khoapham@gmail.com', 'uytop', 'ạuidasbhjadbjn', '0912831', 13, 0, '2023-12-27 04:15:22', '2023-12-27 04:20:39', 'kjmasnd ádnasnd', '330000', '0', 'canceled', 'ád'),
(51, '102202126', 'test@gmail.com', 'tesster', '123876tr9876', '09876576', 14, 0, '2024-01-03 20:19:26', '2024-01-03 20:45:19', 'uygvdfv', '229000', '0', 'canceled', 'ád'),
(52, '1151759', 'dh51904003@student.stu.edu.vn', 'Minh', '12poijuhbn,.kmn', '0987654321', 14, 0, '2024-01-03 20:20:32', '2024-01-03 20:24:59', 'dfsgdhfjgkhl;', '42900', '0', 'delivered', NULL),
(53, '588246494', 'dh51904003@student.stu.edu.vn', 'minh', '123jghvasdasd', '098765123', 14, 0, '2024-01-03 20:31:54', '2024-01-03 20:35:26', 'asdasd', '1030000', '0', 'canceled', 'dada'),
(54, '110276648', 'asdasd@gmail.com', 'asdasd', '123dasdasd', '12312312', 14, 0, '2024-01-03 20:33:06', '2024-01-03 20:41:20', 'adasdasd', '130000', '0', 'canceled', 'sss'),
(55, '589592785', 'asdasd@gmail.com', 'adasda', 'yuhjkmad', '098760987', 14, 0, '2024-01-03 20:46:44', '2024-01-03 20:47:07', 'ẻdcfvgbhjn', '1030000', '0', 'canceled', 'dảt'),
(56, '748144024', 'adad@gmail.com', 'adasda', '432wds', '3425364', 14, 0, '2024-01-03 20:55:19', '2024-01-03 20:59:20', 'ada', '1130000', '0', 'delivered', NULL),
(57, '94983860', 'adasd@ádasd', 'âda', '123áda', '1324567', 14, 0, '2024-01-03 20:55:53', '2024-01-03 20:56:21', 'asdas', '1030000', '0', 'canceled', 'adasdasd'),
(58, '969202297', '13@g', 'dádas', '23dasda', '1234567', 14, 1, '2024-01-03 21:00:31', '2024-01-03 21:00:44', 'adadadas', '42900', '0', 'delivered', NULL),
(59, '32395710', '12@g', '123123123', '12313123', '123123123', 14, 1, '2024-01-03 21:02:28', '2024-01-03 21:02:42', '12312312312', '42900', '0', 'delivered', NULL),
(60, '54996227', 'minh.trinh@7stechnology.com', 'Minh.trinh', 'sjkdhgsadyutas1234123', '0912312830', 9, 1, '2024-01-15 08:30:26', '2024-01-15 08:33:37', 'sagybdyhasdbasd asd asd asd asd á', '42900', '0', 'delivered', NULL),
(61, '118770956', 'tanminh@gmail.com', 'Tân Minh đệp trai', 'ádsada', '0338386701', 15, 1, '2024-03-23 04:13:48', '2024-03-23 04:14:49', 'ấnuidhas', '189000', '0', 'delivered', NULL),
(62, '284930573', 'tanminh@gmail.com', 'Tân Minh đệp trai', 'qưeasd12312', '12312321', 15, 1, '2024-03-23 04:15:36', '2024-03-23 04:16:03', '12dasd qwe qư 123', '189000', '0', 'delivered', NULL),
(63, '224017108', 'tanminh@gmail.com', 'Tân Minh đệp trai', 'zcac a d ', '12312312', 15, 1, '2024-03-23 04:18:33', '2024-03-23 04:19:08', 'zxczxc zxc zc', '189000', '0', 'delivered', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rstatus` tinyint(1) NOT NULL DEFAULT '0',
  `options` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `order_details_order_id_foreign` (`order_id`),
  KEY `order_details_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `order_id`, `quantity`, `regular_price`, `created_at`, `updated_at`, `rstatus`, `options`) VALUES
(43, 46, 44, 1, '199000.00', '2023-12-15 23:12:57', '2023-12-15 23:16:51', 1, '{\"color\":[],\"size\":[\"L\"]}'),
(44, 52, 45, 2, '199000.00', '2023-12-15 23:13:50', '2023-12-15 23:13:50', 0, '{\"color\":[],\"size\":[\"L\"]}'),
(45, 42, 46, 1, '290000.00', '2023-12-15 23:40:57', '2023-12-15 23:40:57', 0, '{\"color\":[],\"size\":[\"XL\"]}'),
(46, 42, 47, 1, '290000.00', '2023-12-26 06:35:46', '2023-12-26 07:20:25', 1, '{\"color\":[],\"size\":[\"XL\"]}'),
(47, 47, 47, 1, '199000.00', '2023-12-26 06:35:46', '2023-12-26 07:20:35', 1, '{\"color\":[],\"size\":[\"L\"]}'),
(48, 58, 47, 1, '69000.00', '2023-12-26 06:35:46', '2023-12-26 07:20:44', 1, '{\"color\":[],\"size\":[\"XL\"]}'),
(49, 44, 48, 1, '12900.00', '2023-12-26 07:08:37', '2023-12-26 07:18:52', 1, '{\"color\":[],\"size\":[\"L\"]}'),
(50, 67, 48, 4, '99000.00', '2023-12-26 07:08:37', '2023-12-26 07:19:09', 1, '{\"color\":[],\"size\":[\"S\"]}'),
(51, 44, 49, 2, '12900.00', '2023-12-26 10:23:34', '2023-12-26 10:23:34', 0, '{\"color\":[],\"size\":[\"L\"]}'),
(52, 52, 49, 2, '199000.00', '2023-12-26 10:23:34', '2023-12-26 10:23:34', 0, '{\"color\":[],\"size\":[\"L\"]}'),
(53, 65, 50, 3, '100000.00', '2023-12-27 04:15:22', '2023-12-27 04:20:31', 1, '{\"color\":[],\"size\":[\"M\"]}'),
(54, 52, 51, 1, '199000.00', '2024-01-03 20:19:26', '2024-01-03 20:19:26', 0, '{\"color\":[],\"size\":[\"L\"]}'),
(55, 44, 52, 1, '12900.00', '2024-01-03 20:20:32', '2024-01-03 20:20:32', 0, '{\"color\":[],\"size\":[\"L\"]}'),
(56, 64, 53, 10, '100000.00', '2024-01-03 20:31:54', '2024-01-03 20:31:54', 0, '{\"color\":[],\"size\":[\"M\"]}'),
(57, 64, 55, 10, '100000.00', '2024-01-03 20:46:44', '2024-01-03 20:46:44', 0, '{\"color\":[],\"size\":[\"M\"]}'),
(58, 64, 57, 10, '100000.00', '2024-01-03 20:55:53', '2024-01-03 20:55:53', 0, '{\"color\":[],\"size\":[\"M\"]}'),
(59, 44, 58, 1, '12900.00', '2024-01-03 21:00:31', '2024-01-03 21:01:20', 1, '{\"color\":[],\"size\":[\"L\"]}'),
(60, 44, 59, 1, '12900.00', '2024-01-03 21:02:28', '2024-01-03 21:02:55', 1, '{\"color\":[],\"size\":[\"L\"]}'),
(61, 44, 60, 1, '12900.00', '2024-01-15 08:30:26', '2024-01-15 08:30:26', 0, '{\"color\":[],\"size\":[\"L\"]}'),
(62, 62, 61, 1, '159000.00', '2024-03-23 04:13:48', '2024-03-23 04:15:01', 1, '{\"color\":[],\"size\":[\"XL\"]}'),
(63, 62, 62, 1, '159000.00', '2024-03-23 04:15:36', '2024-03-23 04:16:17', 1, '{\"color\":[],\"size\":[\"XL\"]}'),
(64, 62, 63, 1, '159000.00', '2024-03-23 04:18:33', '2024-03-23 04:19:20', 1, '{\"color\":[],\"size\":[\"XL\"]}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$TEVGp367VvMU8UxKSB44r.hC1COD0Gs89Dq.65Kf0KZrp8weidrny', '2023-08-22 01:30:53'),
('DH51904003@student.stu.edu.vn', '$2y$10$5lmLufeMdWuhC.FFKCdRw.WbT8ZphHDMRZHgwqIM6RbN.P0pA7gGy', '2024-01-03 20:15:35'),
('nghibuu24@gmail.com', '$2y$10$1wKMSOkr2MYgSCyPYDN5gOxlJ9O5XCn97IxRcLu11fXL1UPtG/QZC', '2023-08-23 02:17:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint NOT NULL DEFAULT '0',
  `stock_status` enum('instock','outstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int UNSIGNED NOT NULL DEFAULT '10',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subcategory_id` bigint UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_subcategory_id_foreign` (`subcategory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_desc`, `desc`, `regular_price`, `sale_price`, `SKU`, `featured`, `stock_status`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`, `subcategory_id`) VALUES
(42, 'Áo thun oversize màu đen ', 'ao-thun-oversize-mau-den', 'Được làm từ vải Cotton thoáng mát, thấm hút nước phù hợp cho những ngày năng động hay chỉ đơn giản là một ngày mưa mà không quá lo sợ về việc ướt hết đồ, Chất liệu thun mềm mại co giãn tốt , thoáng mát.\n\nThiết kế thời trang phù hợp xu hướng hiện nay', 'Hướng dẫn sử dụng và bảo quản Áo thun nam cổ tròn của TM Fashion Store\n \n\n+ Khi mới mua về nên giặt lần đầu tiên, nhiệt độ thì bình thường.\n\n+ Không nên dùng chất hóa chất để tẩy quá nhiều ( trừ áo trắng trơn ).\n\n+ Khi phơi nên chọn mặt ngược lại để phơi, tránh trường hợp phai màu.\n\n \n\nÁo thun nam, áo thun nam Old Sailor, áo thun nam the big size, áo thun cổ tròn, áo thun cá tính, áo thun năng động, áo thun thiết kế phù hợp xu hướng hiện nay, Áo thun nam the Big size,  áo thun nam Old Sailor- the Big size , áo thun nam the big size, áo thun cổ tròn the Big size, áo thun cá tính the Big size, áo thun năng động the Big size, áo thun thiết kế phù hợp xu hướng hiện nay the Big size.', '290000.00', '239000.00', 'AT-1', 1, 'instock', 297, '1702106777.jpg', '-17021067770.jpg--17021067771.jpg--17021067772.jpg--17021067773.jpg', 15, '2023-12-09 00:26:17', '2023-12-26 06:35:46', 9),
(43, 'Áo thun trắng họa tiết', 'ao-thun-trang-hoa-tiet', 'Áo thun nam trắng cao cấp đẹp  là mẫu áo thun mới nhất dành cho mùa hè năm nay', ' Áo được thiết kế trẻ trung Hàn Quốc, với tay ngắn, cổ tròn, dáng suông thoáng mát. Áo làm từ vải 95% cotton cao cấp thoáng mát, thấm mồ hôi tốt, và tăng độ bền. Áo có màu trắng sáng nổi bật rất phù hợp với những chuyến đi chơi, đi du lịch.', '199000.00', '149000.00', 'AT-2', 0, 'instock', 300, '1702106947.jpg', '-17021069470.jpg--17021069471.jpg--17021069472.jpg', 15, '2023-12-09 00:29:07', '2023-12-09 00:29:07', 9),
(44, 'Áo thun tomy', 'ao-thun-tomy', 'Hiện đại thời trang ', 'Phù hợp với mọi đối tượng, có thể mang đi làm đi học đi chơi thậm chí đi ngủ cũng được ', '12900.00', '119000.00', 'AT-3', 0, 'instock', 115, '1702311145.jpg', '-17023111450.jpg', 15, '2023-12-11 09:12:25', '2024-01-15 08:30:26', 9),
(45, 'Áo thun trơn nhiều màu ', 'ao-thun-tron-nhieu-mau', 'Áo thun trơn giá rẻ chỉ từ 35k', 'oại trang phục chiều lòng người mặc nhất, nó không chỉ đơn giản mà rất dễ mix đồ, dù bạn đang ở trong môi trường nào đi nữa, học tập, công sở, dã ngoại, party,…bạn vẫn có thể chọn cho mình những mẫu áo thun màu trơn dáng và phong cách không kém cạnh gì so với nhiều mẫu thời trang khác.', '35000.00', '29000.00', 'AT-4', 1, 'instock', 500, '1702311967.jpg', '-17023119670.jpg--17023119671.jpg--17023119672.jpg', 15, '2023-12-11 09:26:07', '2023-12-11 09:26:07', 9),
(46, 'Áo thun họa tiết vũ trụ trời trang ', 'ao-thun-hoa-tiet-vu-tru-troi-trang', 'Áo thun trơn đen họa tiết bắt mắt ', 'Áo thun trơn đen họa tiết bắt mắt ', '199000.00', '149000.00', 'AT-5', 1, 'instock', 99, '1702312123.jpg', '-17023121230.jpg', 15, '2023-12-11 09:28:43', '2023-12-15 23:12:57', 9),
(47, 'Áo sơ mi trắng trơn ', 'ao-so-mi-trang-tron', 'ÁO SƠ MI TRẮNG NAM lụa mát che nút hàn quốc \n\n', 'Áo sơ mi nam là một items không thể thiếu trong tủ đồ của phái nam, có rất nhiều dáng áo và màu sắc khác nhau tạo nên vẻ đẹp và khí chất của người đàn ông. Bạn đã biết cách chọn áo sơ mi nam tay dài sao cho phù hợp với mình chưa nào? \nÁo sơ mi nam Công sở thì những chiếc áo sơ mi trắng nam, sơ mi trắng là phổ biến nhất, áo có sọc kẻ chìm hay kẻ ca rô cũng đều rất phù hợp với môi trường công sở \n\n\n\nĐể phối đồ bạn mix với cà vạt cùng tông màu áo hoặc quần. Áo sơ mi trơn thì không nên chọn cà vạt quá đơn điệu. Tại Shop cũng có sẵn Cà vạt cho bạn lựa chọn, mời bạn vào shop Xem thêm nhé!\n\n\n\n- Áo sơ mi cho nam dự tiệc - đám cưới thiết kế trẻ trung,  với gam màu sáng nên phối cùng quần jean và kaki để sang trọng, lịch sự và hiện đại.\n\n\n\n- Áo sơ mi đi biển - hội họp bạn bè các chàng trai có thể chọn cho mình những chiếc áo họa tiết hoa lá rất phù hợp khi đi biển. Mix cùng quần short và giày sneaker trắng trẻ trung năng động. \n\n\n\nĐi chơi xuống phố cafe thì những chiếc áo sơ mi nam oversize với hoạ tiết trẻ trung. Chắc chắn sẽ tạo nên một outfit nổi bật cuốn hút tạo cho bạn phong cách riêng.', '199000.00', '129000.00', 'ASM-1', 1, 'instock', 98, '1702312469.jpg', '-17023124690.jpg', 15, '2023-12-11 09:34:29', '2023-12-26 06:35:46', 5),
(48, 'Áo sơ mi đen trơn tay dài', 'ao-so-mi-den-tron-tay-dai', 'ÁO SƠ MI ĐEN NAM lụa mát che nút hàn quốc \n\n', 'Áo sơ mi nam là một items không thể thiếu trong tủ đồ của phái nam, có rất nhiều dáng áo và màu sắc khác nhau tạo nên vẻ đẹp và khí chất của người đàn ông. Bạn đã biết cách chọn áo sơ mi nam tay dài sao cho phù hợp với mình chưa nào? \nÁo sơ mi nam Công sở thì những chiếc áo sơ mi trắng nam, sơ mi trắng là phổ biến nhất, áo có sọc kẻ chìm hay kẻ ca rô cũng đều rất phù hợp với môi trường công sở \n\n\n\nĐể phối đồ bạn mix với cà vạt cùng tông màu áo hoặc quần. Áo sơ mi trơn thì không nên chọn cà vạt quá đơn điệu. Tại Shop cũng có sẵn Cà vạt cho bạn lựa chọn, mời bạn vào shop Xem thêm nhé!\n\n\n\n- Áo sơ mi cho nam dự tiệc - đám cưới thiết kế trẻ trung,  với gam màu sáng nên phối cùng quần jean và kaki để sang trọng, lịch sự và hiện đại.\n\n\n\n- Áo sơ mi đi biển - hội họp bạn bè các chàng trai có thể chọn cho mình những chiếc áo họa tiết hoa lá rất phù hợp khi đi biển. Mix cùng quần short và giày sneaker trắng trẻ trung năng động. \n\n\n\nĐi chơi xuống phố cafe thì những chiếc áo sơ mi nam oversize với hoạ tiết trẻ trung. Chắc chắn sẽ tạo nên một outfit nổi bật cuốn hút tạo cho bạn phong cách riêng.', '199000.00', '129000.00', 'ASM-1', 1, 'instock', 99, '1702312503.jpg', '-17023125030.jpg', 15, '2023-12-11 09:35:03', '2023-12-11 09:35:03', 5),
(49, 'Áo sơ mi màu nâu be trơn tay dài', 'ao-so-mi-mau-nau-be-tron-tay-dai', 'ÁO SƠ MI nâu be lụa mát che nút hàn quốc \n\n', 'Áo sơ mi nam là một items không thể thiếu trong tủ đồ của phái nam, có rất nhiều dáng áo và màu sắc khác nhau tạo nên vẻ đẹp và khí chất của người đàn ông. Bạn đã biết cách chọn áo sơ mi nam tay dài sao cho phù hợp với mình chưa nào? \nÁo sơ mi nam Công sở thì những chiếc áo sơ mi trắng nam, sơ mi trắng là phổ biến nhất, áo có sọc kẻ chìm hay kẻ ca rô cũng đều rất phù hợp với môi trường công sở \n\n\n\nĐể phối đồ bạn mix với cà vạt cùng tông màu áo hoặc quần. Áo sơ mi trơn thì không nên chọn cà vạt quá đơn điệu. Tại Shop cũng có sẵn Cà vạt cho bạn lựa chọn, mời bạn vào shop Xem thêm nhé!\n\n\n\n- Áo sơ mi cho nam dự tiệc - đám cưới thiết kế trẻ trung,  với gam màu sáng nên phối cùng quần jean và kaki để sang trọng, lịch sự và hiện đại.\n\n\n\n- Áo sơ mi đi biển - hội họp bạn bè các chàng trai có thể chọn cho mình những chiếc áo họa tiết hoa lá rất phù hợp khi đi biển. Mix cùng quần short và giày sneaker trắng trẻ trung năng động. \n\n\n\nĐi chơi xuống phố cafe thì những chiếc áo sơ mi nam oversize với hoạ tiết trẻ trung. Chắc chắn sẽ tạo nên một outfit nổi bật cuốn hút tạo cho bạn phong cách riêng.', '199000.00', '129000.00', 'ASM-2', 1, 'instock', 99, '1702312538.jpg', '-17023125380.jpg', 15, '2023-12-11 09:35:38', '2023-12-11 09:35:38', 5),
(50, 'Áo sơ mi màu xám trơn tay dài', 'ao-so-mi-mau-xam-tron-tay-dai', 'ÁO SƠ MI XÁM mát che nút hàn quốc \n\n', 'Áo sơ mi nam là một items không thể thiếu trong tủ đồ của phái nam, có rất nhiều dáng áo và màu sắc khác nhau tạo nên vẻ đẹp và khí chất của người đàn ông. Bạn đã biết cách chọn áo sơ mi nam tay dài sao cho phù hợp với mình chưa nào? \nÁo sơ mi nam Công sở thì những chiếc áo sơ mi trắng nam, sơ mi trắng là phổ biến nhất, áo có sọc kẻ chìm hay kẻ ca rô cũng đều rất phù hợp với môi trường công sở \n\n\n\nĐể phối đồ bạn mix với cà vạt cùng tông màu áo hoặc quần. Áo sơ mi trơn thì không nên chọn cà vạt quá đơn điệu. Tại Shop cũng có sẵn Cà vạt cho bạn lựa chọn, mời bạn vào shop Xem thêm nhé!\n\n\n\n- Áo sơ mi cho nam dự tiệc - đám cưới thiết kế trẻ trung,  với gam màu sáng nên phối cùng quần jean và kaki để sang trọng, lịch sự và hiện đại.\n\n\n\n- Áo sơ mi đi biển - hội họp bạn bè các chàng trai có thể chọn cho mình những chiếc áo họa tiết hoa lá rất phù hợp khi đi biển. Mix cùng quần short và giày sneaker trắng trẻ trung năng động. \n\n\n\nĐi chơi xuống phố cafe thì những chiếc áo sơ mi nam oversize với hoạ tiết trẻ trung. Chắc chắn sẽ tạo nên một outfit nổi bật cuốn hút tạo cho bạn phong cách riêng.', '199000.00', '129000.00', 'ASM-2', 1, 'instock', 89, '1702312563.jpg', '-17023125630.jpg', 15, '2023-12-11 09:36:03', '2023-12-15 23:02:31', 5),
(51, 'Áo sơ mi màu xanh ruby trơn tay dài', 'ao-so-mi-mau-xanh-ruby-tron-tay-dai', 'ÁO SƠ MI XANH RUBY mát che nút hàn quốc \n\n', 'Áo sơ mi nam là một items không thể thiếu trong tủ đồ của phái nam, có rất nhiều dáng áo và màu sắc khác nhau tạo nên vẻ đẹp và khí chất của người đàn ông. Bạn đã biết cách chọn áo sơ mi nam tay dài sao cho phù hợp với mình chưa nào? \nÁo sơ mi nam Công sở thì những chiếc áo sơ mi trắng nam, sơ mi trắng là phổ biến nhất, áo có sọc kẻ chìm hay kẻ ca rô cũng đều rất phù hợp với môi trường công sở \n\n\n\nĐể phối đồ bạn mix với cà vạt cùng tông màu áo hoặc quần. Áo sơ mi trơn thì không nên chọn cà vạt quá đơn điệu. Tại Shop cũng có sẵn Cà vạt cho bạn lựa chọn, mời bạn vào shop Xem thêm nhé!\n\n\n\n- Áo sơ mi cho nam dự tiệc - đám cưới thiết kế trẻ trung,  với gam màu sáng nên phối cùng quần jean và kaki để sang trọng, lịch sự và hiện đại.\n\n\n\n- Áo sơ mi đi biển - hội họp bạn bè các chàng trai có thể chọn cho mình những chiếc áo họa tiết hoa lá rất phù hợp khi đi biển. Mix cùng quần short và giày sneaker trắng trẻ trung năng động. \n\n\n\nĐi chơi xuống phố cafe thì những chiếc áo sơ mi nam oversize với hoạ tiết trẻ trung. Chắc chắn sẽ tạo nên một outfit nổi bật cuốn hút tạo cho bạn phong cách riêng.', '199000.00', '129000.00', 'ASM-3', 1, 'instock', 99, '1702312591.jpg', '-17023125910.jpg', 15, '2023-12-11 09:36:31', '2023-12-11 09:36:31', 5),
(52, 'Áo sơ mi họa tiết thổ dân', 'ao-so-mi-hoa-tiet-tho-dan', 'Chất liệu: Vải Lụa cao cấp không nhăn, co giãn 4 chiều, mặt vải mịn mát và thấm hút tốt. Giúp người mặc thoáng mát, không gò bó hay hầm bí. Cam kết không ra màu không nhàu vải, giữ bền form áo.', 'Dáng áo suông vừa, lên form thoải mái nhưng vẫn vừa vặn với người mặc.\n- Thiết kế, trẻ trung, dễ dàng kết hợp cùng quần Jeans, Kaki hoặc Short. Đi tiệc, du lịch hay dạo phố cùng bạn bè đều phù hợp.', '199000.00', '129000.00', 'ASM-3', 1, 'instock', 95, '1702312826.jpg', '-17023128260.jpg--17023128261.jpg--17023128262.jpg--17023128263.jpg', 15, '2023-12-11 09:40:26', '2024-01-03 20:45:19', 6),
(53, 'Áo sơ mi tay ngắn họa tiết báo chí độc đáo thời trang ', 'ao-so-mi-tay-ngan-hoa-tiet-bao-chi-doc-dao-thoi-trang', 'Chiếc áo len này được thiết kế với chất liệu cotton đan siêu mềm mại và rất dễ mặc. Rất thích hợp để đồng hành cùng bạn ở nhà hoặc trên đường phố.', 'Áo sơ mi nam tay ngắn rộng rãi, thoải mái, giản dị, đa năng, thời trang, mát mẻ, tay ngắn\n\nThời trang cực ngầu và thiết kế quý ông.\n\nCảm ứng siêu mềm.\n\nĐây là một tủ quần áo phải có.\n\nBạn có thể mặc nó hàng ngày.\n\nPhong cách đường phố thời trang.\n\n\n\nKích thước áo sơ mi tay ngắn\n\n\n\nKích thước được đo bằng tay và chỉ mang tính chất tham khảo.\n\nSai số đo lường là khoảng 1-3 cm.\n\nTư vấn dịch vụ khách hàng của shop để biết chi tiết', '139000.00', '129000.00', 'ASM-3', 1, 'instock', 99, '1702312945.jpg', '-17023129450.jpg--17023129451.jpg--17023129452.jpg', 15, '2023-12-11 09:42:25', '2023-12-11 09:42:25', 6),
(54, 'Áo Sơ Mi Tay Ngắn Vải Lụa Họa Tiết Cò Lã', 'ao-so-mi-tay-ngan-vai-lua-hoa-tiet-co-la', 'Chiếc áo len này được thiết kế với chất liệu cotton đan siêu mềm mại và rất dễ mặc. Rất thích hợp để đồng hành cùng bạn ở nhà hoặc trên đường phố.', 'Áo sơ mi nam tay ngắn rộng rãi, thoải mái, giản dị, đa năng, thời trang, mát mẻ, tay ngắn\n\nThời trang cực ngầu và thiết kế quý ông.\n\nCảm ứng siêu mềm.\n\nĐây là một tủ quần áo phải có.\n\nBạn có thể mặc nó hàng ngày.\n\nPhong cách đường phố thời trang.\n\n\n\nKích thước áo sơ mi tay ngắn\n\n\n\nKích thước được đo bằng tay và chỉ mang tính chất tham khảo.\n\nSai số đo lường là khoảng 1-3 cm.\n\nTư vấn dịch vụ khách hàng của shop để biết chi tiết', '139000.00', '129000.00', 'ASM-3', 1, 'instock', 99, '1702313052.jpg', '-17023130520.jpg--17023130521.jpg', 15, '2023-12-11 09:44:12', '2023-12-11 09:44:12', 6),
(55, 'Áo Tank Top Nam Bo Cổ BLUESFLY Mới Không Tay Thể Thao Bozip, Thời Trang Fom Rộng Hè 2023', 'ao-tank-top-nam-bo-co-bluesfly-moi-khong-tay-the-thao-bozip-thoi-trang-fom-rong-he-2023', ' Áo Tank Top Nam Bo Cổ BLUESFLY Mới Không Tay Thể Thao, Thời Trang Fom Rộng Hè 2023', '+ Chất liệu: thun cotton 65/35, vải dày, vải mền, vải mịn, thoáng mát, không xù lông\n\n+ Form áo rộng chuẩn TAY Ngắn cực đẹp\n\n+ Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn.\n\n+ Mặc ở nhà, mặc đi chơi hoặc khi vận động thể thao. Phù hợp khi mix đồ với nhiều loại\n\n+ Thiết kế hiện đại, trẻ trung, năng động. Dễ phối đồ\n\n+ Xuất sứ: Việt Nam', '119000.00', '99000.00', 'ATT1', 1, 'instock', 111, '1702313237.jpg', '-17023132370.jpg--17023132371.jpg--17023132372.jpg--17023132373.jpg', 15, '2023-12-11 09:47:17', '2023-12-11 09:47:17', 7),
(56, 'Áo thun nam ngắn tay thời trang mùa hè giản dị trẻ trung ', 'ao-thun-nam-ngan-tay-thoi-trang-mua-he-gian-di-tre-trung', ' áo phông nam hàn quốc cổ tròn không tay', '+ Chất liệu: thun cotton 65/35, vải dày, vải mền, vải mịn, thoáng mát, không xù lông\n\n+ Form áo rộng chuẩn TAY Ngắn cực đẹp\n\n+ Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn.\n\n+ Mặc ở nhà, mặc đi chơi hoặc khi vận động thể thao. Phù hợp khi mix đồ với nhiều loại\n\n+ Thiết kế hiện đại, trẻ trung, năng động. Dễ phối đồ\n\n+ Xuất sứ: Việt Nam', '119000.00', '99000.00', 's12', 1, 'instock', 111, '1702315379.jpg', '-17023153790.jpg--17023153791.jpg--17023153792.jpg', 15, '2023-12-11 09:49:20', '2023-12-11 10:22:59', 7),
(57, 'Áo Polo Teelab Local Brand Unisex Graphic Hanoi Famous AP031', 'ao-polo-teelab-local-brand-unisex-graphic-hanoi-famous-ap031', 'Áo Polo Teelab Local Brand Unisex Graphic Hanoi Famous AP031', 'Lấy cảm hứng từ giới trẻ, sáng tạo liên tục, bắt kịp xu hướng và phát triển đa dạng các dòng sản phẩm là cách mà chúng mình hoạt động để tạo nên phong cách sống hằng ngày của bạn. Mục tiêu của TEELAB là cung cấp các sản phẩm thời trang chất lượng cao với giá thành hợp lý.\n\n\n\nChẳng còn thời gian để loay hoay nữa đâu youngers ơi! Hãy nhanh chân bắt lấy những những khoảnh khắc tuyệt vời của tuổi trẻ. TEELAB đã sẵn sàng trải nghiệm cùng bạn!', '179000.00', '159000.00', 'PL-1', 1, 'instock', 222, '1702313553.jpg', '-17023135530.jpg--17023135531.jpg--17023135532.jpg--17023135533.jpg--17023135534.jpg', 15, '2023-12-11 09:52:33', '2023-12-11 09:52:33', 8),
(58, 'Quần short nam  đen', 'quan-short-nam-den', 'quần đùi nam thể thao năng động vải kaki co dãn thanh lịch', 'quần đùi nam thể thao năng động vải kaki co dãn thanh lịch', '69000.00', '59000.00', 'QS-1', 0, 'instock', 221, '1702313787.jpg', '-17023137870.jpg', 16, '2023-12-11 09:56:27', '2023-12-26 06:35:46', 11),
(59, 'Quần short nam màu nâu be', 'quan-short-nam-mau-nau-be', 'quần đùi nam thể thao năng động vải kaki co dãn thanh lịch', 'quần đùi nam thể thao năng động vải kaki co dãn thanh lịch', '69000.00', '59000.00', 'QS-1', 0, 'instock', 222, '1702313815.jpg', '-17023138150.jpg', 16, '2023-12-11 09:56:55', '2023-12-11 09:56:55', 11),
(60, 'Quần short nam màu trắng', 'quan-short-nam-mau-trang', 'quần đùi nam thể thao năng động vải kaki co dãn thanh lịch', 'quần đùi nam thể thao năng động vải kaki co dãn thanh lịch', '69000.00', '59000.00', 'QS-1', 0, 'instock', 222, '1702313839.jpg', '-17023138390.jpg', 16, '2023-12-11 09:57:19', '2023-12-11 09:57:19', 11),
(61, 'Quần short nam màu xanh rêu', 'quan-short-nam-mau-xanh-reu', 'quần đùi nam thể thao năng động vải kaki co dãn thanh lịch', 'quần đùi nam thể thao năng động vải kaki co dãn thanh lịch', '69000.00', '59000.00', 'QS-1', 0, 'instock', 222, '1702313862.jpg', '-17023138620.jpg', 16, '2023-12-11 09:57:42', '2023-12-11 09:57:42', 11),
(62, 'Quần Jean Ống Rộng Nam Nữ Unisex Wash Black Grey Hàng Cao Cấp', 'quan-jean-ong-rong-nam-nu-unisex-wash-black-grey-hang-cao-cap', 'Quần jean nam nữ hottrend với vải jean chính phẩm được sản xuất tại nhà máy dệt may TP.HCM cho chất lượng sản phẩm cao cấp.', '✔️Đây là một trong những chiếc quần jean hot nhất hiện nay đáng để sở hữu. Phong cách Hàn Quốc đơn giản phù hợp trong mọi hoàn cảnh và đối tượng gặp gỡ. Quần có màu xanh bắt mắt, thể hiện sự trẻ trung và lịch lãm.\n✔️ Các mẫu jean mang vẻ đẹp tính tế và hiện đại\n\nQuần Jean Ống Rộng Nam Nữ Unisex Wash Hàng Cao Cấp', '159000.00', '139000.00', 'QJ-2', 1, 'instock', 30, '1702314014.jpg', '-17023140140.jpg--17023140141.jpg--17023140142.jpg--17023140143.jpg', 16, '2023-12-11 10:00:14', '2024-03-23 04:18:33', 12),
(63, 'Quần tây nam ống côn dáng body vải co giãn cao cấp', 'quan-tay-nam-ong-con-dang-body-vai-co-gian-cao-cap', 'Quần tây âu nam ống côn dáng body vải co giãn hàng xuất khẩu cao cấp đẹp hoàn hảo từng chi tiết', 'Hàng cao cấp may kỹ đẹp từng chi tiết không thể chê được 1 chi tiết nào dù nhỏ nhất\n\nChất vải co giãn tốt mềm mịn cầm mát tay \n\nHàng cao cấp vải không nhăn - không xù và tuyệt đối không phai màu\n\nForm dáng chuẩn ai mặc cũng đẹp phù hợp với tất cả mọi người\n\nNhiều màu sắc lựa chọn theo ý thích.\n\nPhù hợp mặc đi học , đi chơi , đi làm hay dã ngoại dự tiêc....\n\nMột thiết kế đẹp bất chấp mọi thời đại chưa bao giờ hết hot\n\nQuý khách lưu ý : Đây là hàng cao cấp vải co giãn may kỹ viền lót rất kỹ và đẹp\n\nToàn bộ hàng bên shop đều được chọn lọc kỹ chất lượng đảm bảo và giá cực kỳ hợp lý \n\nTheo dõi shop để cập nhật thường xuyên các chương trình khuyến mãi cực kỳ hấp dẫn các bạn nhé\n\nMô tã chi tiết sản phẩm\n\nChất liệu: cotton\n\nFom dáng ôm nhẹ\n\nKiểu dáng đơn giãn thanh lịch\n\nXuất xứ : Việt Nam\n\nThương hiệu : Nobrand\n\nKích cỡ 28-37\n\nThông tin cảnh báo : không có\n\nHướng dẫn sử dụng : Quần áo mới về chỉ nên giặt nhẹ bằng nước cho sạch bụi vải sau đó phơi khô . không ngâm quá lâu, không dùng chất tẩy rửa khi không cần thiết, không giặt máy, không giặt áo trắng chung với áo màu\n\nTheo dõi shop ngay hôm nay để cập nhật thường xuyên những mẫu thời trang cao cấp với giá tốt nhất khó có thể tìm mua sản phẩm tương tự ở nơi khác', '159000.00', '139000.00', 'QT-2', 1, 'instock', 33, '1702314194.jpg', '-17023141940.jpg--17023141941.jpg--17023141942.jpg', 16, '2023-12-11 10:03:14', '2023-12-11 10:03:14', 13),
(64, '[COMBO 3 QUẦN] Quần Lót Nam Boxer Thun Lạnh Lados 4116', 'combo-3-quan-quan-lot-nam-boxer-thun-lanh-lados-4116', 'Thun lụa co giãn, dai, thoáng mát, thấm hút mồ hôi tốt\n\nTHÔNG TIN SẢN PHẨM', 'THÔNG TIN SẢN PHẨM\n\n•	Thun co giãn 4 chiều\n\n•	Vải mỏng, dai, thoáng mát\n\n•	Độ co dãn, đàn hồi cực tốt\n\n•	Kháng khuẩn, khử mùi, thấm hút mồ hôi và đặc biệt nhanh khô khi mặc chơi thể thao và vận động nhiều\n\n•	Không màu nhuộm, ko chất gây hại\n\n•	Không sổ lông, không bai nhão, mềm mịn\n\n', '100000.00', '60000.00', 'QL01', 1, 'instock', 10, '1702314414.jpg', '-17023144140.jpg--17023144141.jpg--17023144142.jpg', 17, '2023-12-11 10:06:54', '2024-01-03 20:56:21', 15),
(65, 'Hộp 5 Quần Sịp Nam Tam Giác Cotton Cao Cấp FORMAN,', 'hop-5-quan-sip-nam-tam-giac-cotton-cao-cap-forman', 'Quần Lót Nam Tam Giác Co Dãn 4 Chiều Thoáng Mát Thấm Hút Mồ Hôi', '✅ Thông tin sản phẩm:\n👉 Quần lót nam chất liệu cotton cao cấp, có khả năng thấm hút mồ hôi tốt, thông thoáng, co giãn đàn hồi cả 4 chiều đem lại cảm giác thoải mái khi mặc. Đặc biệt, cotton là nguồn nguyên liệu tự nhiên nên rất an toàn cho vùng da nhạy cảm. Bề mặt vải mềm, mịn không bai dão sau thời gian dài sử dụng.\n👉 Thiết kế đặc biệt cho bạn tự tin vận động, tạo vẻ quyến rũ đầy nam tính\n👉 Cạp chun bản rộng co giãn, phù hợp với nhiều lứa tuổi, không gây hằn trên da\n👉 Khử mùi nhanh, co giãn 4 chiều tạo cảm giác thoải mái không bí\n👉 Khả năng kháng khuẩn cực tốt \n👉 Không bai giãn, sổ lông trong quá trình sử dụng \n👉 Sản phẩm tinh tế và luôn được ưa chuộng', '100000.00', '60000.00', 'QL02', 1, 'instock', 48, '1702314624.jpg', '-17023146240.jpg--17023146241.jpg--17023146242.jpg--17023146243.jpg--17023146244.jpg', 17, '2023-12-11 10:10:24', '2023-12-27 04:15:22', 14),
(66, 'Dây Đai Da PU Kẹp Quần Áo Cho Nam Nữ', 'day-dai-da-pu-kep-quan-ao-cho-nam-nu', 'Dây Đai Da PU Kẹp Quần Áo Cho Nam Nữ', '1.Dây nịt ngực nam sử dụng da bền và thoáng khí, đảm bảo rằng dây nịt của chúng tôi sẽ không dễ bị bung ra là trách nhiệm của chúng tôi!!!\n2.Được thiết kế với dây đai khóa điều chỉnh, bạn có thể điều chỉnh độ ôm sát theo dáng người một cách tiện lợi, tôn lên vóc dáng gợi cảm, quyến rũ của bạn.\n3.Dễ mặc và dễ cởi cúc, Một món đồ cần có cho Dây nịt ngực hàng ngày. Lựa chọn tốt cho người tạo cơ thể, thể hiện hoàn hảo đường cong cơ bắp của bạn và thể hiện rõ nét nét quyến rũ của nam giới.\n4.Dây nịt ngực bắt mắt Lý tưởng cho lễ kỷ niệm, hóa trang và chương trình, Ngày lễ tình nhân, hóa trang hoặc nhập vai, tiệc câu lạc bộ, câu lạc bộ đêm, đêm mặc đồ lót hoặc tự sướng.\n5.Món quà tuyệt vời nhất, ngày đặc biệt có thể được tặng cho những người đặc biệt\nKẹp dây treo nam Niềng răng có thể điều chỉnh Dây đai da Đai treo quần Kẹp áo sơ mi PU Kẹp dây đeo Kẹp quần Niềng răng Quý ông Dây đeo vai Phụ kiện vải Phụ nữ Đàn ông Sáng tạo.', '99000.00', '79000.00', 'PK-1', 1, 'instock', 22, '1702314761.jpg', '-17023147610.jpg', 18, '2023-12-11 10:12:41', '2023-12-11 10:12:41', NULL),
(67, 'Vòng Tay Nam Curnon Clark Bracelet ', 'vong-tay-nam-curnon-clark-bracelet', 'Phụ Kiện Đeo Tay Thời Trang, Chất Liệu Da Cá Tính', 'Phụ Kiện Đeo Tay Thời Trang, Chất Liệu Da Cá Tính', '99000.00', '79000.00', 'PK-1', 1, 'instock', 18, '1702314890.jpg', '-17023148900.jpg', 18, '2023-12-11 10:14:50', '2023-12-26 07:08:37', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attributes`
--

DROP TABLE IF EXISTS `product_attributes`;
CREATE TABLE IF NOT EXISTS `product_attributes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Sizes', '2023-09-10 03:44:51', '2023-09-10 03:54:59'),
(3, 'Colors', '2023-09-10 03:59:02', '2023-09-10 15:30:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `rating` int NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_detail_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_order_detail_id_foreign` (`order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `order_detail_id`, `created_at`, `updated_at`) VALUES
(7, 5, 'Áo đẹp chất lượng tốt ', 43, '2023-12-15 23:16:51', '2023-12-15 23:16:51'),
(8, 5, '10 đ đẹp', 49, '2023-12-26 07:18:52', '2023-12-26 07:18:52'),
(9, 5, 'Vòng tay đẹp ', 50, '2023-12-26 07:19:09', '2023-12-26 07:19:09'),
(10, 5, 'iu iu <3', 46, '2023-12-26 07:20:25', '2023-12-26 07:20:25'),
(11, 4, 'Áo sơ mi trắng trơn', 47, '2023-12-26 07:20:35', '2023-12-26 07:20:35'),
(12, 5, 'qưertt', 48, '2023-12-26 07:20:44', '2023-12-26 07:20:44'),
(13, 5, 'Sản phẩm bao xịn', 53, '2023-12-27 04:20:31', '2023-12-27 04:20:31'),
(14, 4, 'áo đẹp', 59, '2024-01-03 21:01:20', '2024-01-03 21:01:20'),
(15, 1, 'sssss', 60, '2024-01-03 21:02:54', '2024-01-03 21:02:54'),
(16, 1, 'bábcasbhjdadghbjasd', 62, '2024-03-23 04:15:01', '2024-03-23 04:15:01'),
(17, 2, 'klas  hbjasd hbjasd hbjkasdjkhbaa ', 63, '2024-03-23 04:16:17', '2024-03-23 04:16:17'),
(18, 1, '1 sao', 64, '2024-03-23 04:19:20', '2024-03-23 04:19:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`) VALUES
('admin@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2024-03-23 04:12:35', NULL),
('admin@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2024-03-23 04:12:35', NULL),
('tanminh@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2024-03-23 04:19:22', NULL),
('tanminh@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2024-03-23 04:19:22', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategories_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'Áo sơ mi tay dài ', 'ao-so-mi-tay-dai', 15, '2023-12-08 23:58:18', '2023-12-08 23:58:18'),
(6, 'Áo sơ mi tay ngắn', 'ao-so-mi-tay-ngan', 15, '2023-12-08 23:59:29', '2023-12-08 23:59:29'),
(7, 'Áo tank top', 'ao-tank-top', 15, '2023-12-09 00:01:01', '2023-12-09 00:01:01'),
(8, 'Áo polo', 'ao-polo', 15, '2023-12-09 00:01:50', '2023-12-09 00:01:50'),
(9, 'Áo thun', 'ao-thun', 15, '2023-12-09 00:02:51', '2023-12-09 00:02:51'),
(10, 'Áo khoác', 'ao-khoac', 15, '2023-12-09 00:03:34', '2023-12-09 00:03:34'),
(11, 'Quần short', 'quan-short', 16, '2023-12-09 00:05:50', '2023-12-09 00:05:50'),
(12, 'Quần jean', 'quan-jean', 16, '2023-12-09 00:06:43', '2023-12-09 00:06:43'),
(13, 'Quần Tây', 'quan-tay', 16, '2023-12-09 00:07:29', '2023-12-09 00:07:29'),
(14, 'Quần lót tam giác', 'quan-lot-tam-giac', 17, '2023-12-09 00:11:21', '2023-12-09 00:11:21'),
(15, 'Quần lót boxer', 'quan-lot-boxer', 17, '2023-12-09 00:11:53', '2023-12-09 00:11:53'),
(16, 'Vòng tay thời trang', 'vong-tay-thoi-trang', 18, '2023-12-09 00:15:41', '2023-12-09 00:15:41'),
(17, 'Vòng cổ thời trang ', 'vong-co-thoi-trang', 18, '2023-12-09 00:18:08', '2023-12-09 00:18:08'),
(18, 'Ví da hiện đại', 'vi-da-hien-dai', 18, '2023-12-09 00:18:48', '2023-12-09 00:18:48'),
(19, 'Mũ Lưỡi trai', 'mu-luoi-trai', 18, '2023-12-09 00:19:39', '2023-12-09 00:19:39'),
(20, 'Tất/ vớ', 'tat-vo', 18, '2023-12-09 00:20:48', '2023-12-09 00:20:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for admin and USR for USER',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`, `address`, `phone`) VALUES
(1, 'ADMIN', 'admin@gmail.com', NULL, NULL, '$2y$10$ZgSOPkAskky9htpTvxdzlubf/cD3SfMEfG.2I5cdvVSzMMvFlnoB.', 'ADM', NULL, '2023-07-19 01:53:52', '2023-07-19 01:53:52', '', ''),
(2, 'Tan', 'asdad@gmmail.com', NULL, NULL, '$2y$10$BtFALwW5YfqqEPzSHva8sekv9JK73Vtzy74LtUcoiLbzxN7Rm563u', 'USR', NULL, '2023-07-19 03:54:55', '2023-07-19 03:54:55', '', ''),
(3, 'Minh', 'abcdefgh@mail.com', '1693392854.jpg', NULL, '$2y$10$nDCCME/tP8kM0dydMTnDpumsoGr/5gX/bMBSdzDR4TLo0lhmpdwYy', 'USR', NULL, '2023-07-29 01:36:18', '2023-08-30 03:54:14', '8 Khúc thwauf đu', '0123456777'),
(4, 'Minh đẹp trai cute phô mai que', '1@gmail.com', '1697045124.jpg', NULL, '$2y$10$7Opd/9pNGXNkSfvtFozBJ..lHzL1ol4mbMD1akWg7PiSr/01AyRPW', 'USR', NULL, '2023-08-22 01:42:50', '2023-10-11 10:25:24', '156 abcd efgh', '032489498'),
(5, 'Tân Minh Trịnh', 'DH51904003@student.stu.edu.vn', NULL, NULL, '$2y$10$D2IP5/rg3OumD/tRtURGveux0UfS8hUh4A35lS8MMVZbdXxFGhqYe', 'USR', '89SUvlC8u2D3Z6wsdS8NHv0wWVVKWMpQBsXEuuDBg4sdal0LzeioMUl6T8BH', '2023-08-23 01:18:30', '2023-08-23 02:18:12', NULL, NULL),
(6, 'Nghi cute', 'nghibuu24@gmail.com', NULL, NULL, '$2y$10$cpGmBvkBeMjWE08RQvy0u.ko19aGEd2gWRQZTovzWs26Upna/6iRy', 'USR', NULL, '2023-08-23 01:55:05', '2023-08-28 07:58:17', '22QL50', '0338386701'),
(7, 'abcsd', 'minh@gmail.com', NULL, NULL, '$2y$10$IGOGVvT/GEr3PqoK6fPSI.pWrDvKDVjLlN4rtrSPkhl1a87LYE0km', 'USR', NULL, '2023-11-20 01:26:31', '2023-11-20 01:26:31', NULL, NULL),
(8, 'adasda', 'abc@gmail.com', NULL, NULL, '$2y$10$jsXZdj5OOkMkw4hAaoJhiuuQQSALvrzyfEO.nz51v405TxlHtGuxi', 'USR', NULL, '2023-12-15 22:13:41', '2023-12-15 22:13:41', NULL, NULL),
(9, 'Minh.trinh', 'minh.trinh@7stechnology.com', NULL, NULL, '$2y$10$4umxHvcIuo.zjJrP.W2qqe/zUK3vZi80zyJl0SCLvU1CyWkUuUPjS', 'USR', 'BEoGTRVFTy00Qkvkli48UtJiYJ7TOlI1EtBlDeuyiVroX14kNHJcazDJDZwy', '2023-12-15 23:37:09', '2024-01-15 07:52:20', NULL, NULL),
(10, 'Rio de janero', 'Rio@gmail.com', NULL, NULL, '$2y$10$/jK2xCcVNHbXZDEUJlAGtul5V4AL9ZT6Q/V6eKe9irW6yEulI61Ja', 'USR', NULL, '2023-12-26 06:34:41', '2023-12-26 06:34:41', NULL, NULL),
(11, 'abcdefaskhjdgasdgyhjvaahbjaskdjashbj a ghdas ghasd asd  gasd gujasd  gyas gyasd  gyasd ghasdgyhbjasdf agyhjsdjlf ghádghjkasd', 'poiqweyu@gmail.com', NULL, NULL, '$2y$10$i3oH2dFZO/kUQtE59n1/8.1w./7cOG/fM.NIpch5vE8/B3eI4ToqO', 'USR', NULL, '2023-12-26 10:19:27', '2023-12-26 10:19:27', NULL, NULL),
(12, 'dấdad', 'zxcvfqw@gmail.com', NULL, NULL, '$2y$10$RD0N19ycFE1E.BCGwH1DnOaek6GrNgd33LOKbSSwzY0fVNgIFcIWq', 'USR', NULL, '2023-12-26 23:47:57', '2023-12-26 23:47:57', NULL, NULL),
(13, 'khoapham', 'abcn@gmail.com', NULL, NULL, '$2y$10$02c127i7dN4SOtVhzCIsgez81pdZgQ49izEINmVdis7nb2bJU7bJq', 'USR', NULL, '2023-12-27 04:13:29', '2023-12-27 04:13:29', NULL, NULL),
(14, 'tesst', 'teser@gmail.com', '1704338303.jpg', NULL, '$2y$10$OixSyJyn1omKk9TBcrhSjOL2QWP4B2rSPneFJCJ.ySxFhSBbsipUy', 'USR', NULL, '2024-01-03 20:17:37', '2024-01-03 20:18:23', '12ass', '098676543'),
(15, 'Tân Minh đệp trai', 'tanminh@gmail.com', NULL, NULL, '$2y$10$2raizvLBqz2NChNvTgfFMOi6eXct7gOWGwwmnO5Ei0USdRnOACs7i', 'USR', NULL, '2024-03-23 02:55:57', '2024-03-23 02:55:57', NULL, NULL);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_product_attribute_id_foreign` FOREIGN KEY (`product_attribute_id`) REFERENCES `product_attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_values_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_detail_id_foreign` FOREIGN KEY (`order_detail_id`) REFERENCES `order_details` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
