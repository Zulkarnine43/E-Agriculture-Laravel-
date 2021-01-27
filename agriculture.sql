-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 11:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registers`
--

CREATE TABLE `admin_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `division` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_registers`
--

INSERT INTO `admin_registers` (`id`, `username`, `email`, `mobile`, `dob`, `division`, `address`, `gender`, `password`, `profile_pic`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'zulkarnine', 'zns601@gmail.com', '01660144436', '1997-09-25', 'Dhaka', 'Kolabagan,Dhaka', 'male', '$2y$10$yQcf6ngoEj0ZcLV7H0iaqeooqYjTJR0ofJ.K6S93R47iQV6LlC1s6', 'null', 'verified', '2020-12-29 10:38:02', '2020-12-29 10:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `bid_messages`
--

CREATE TABLE `bid_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `crop_id` int(10) UNSIGNED NOT NULL,
  `crop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bid_messages`
--

INSERT INTO `bid_messages` (`id`, `crop_id`, `crop_name`, `f_username`, `cust_username`, `name`, `bid_price`, `message`, `created_at`, `updated_at`) VALUES
(14, 17, 'soyabean', 'zulkarnine', 'zulkarnine', 'Zulkar Nine', '1600', 'null', '2021-01-21 22:19:00', '2021-01-21 22:19:00'),
(15, 17, 'soyabean', 'zulkarnine', 'zulkarnine', 'Zulkar Nine', '1700', 'null', '2021-01-23 04:39:14', '2021-01-23 04:39:14'),
(16, 13, 'tea', 'zulkarnine', 'sajedul', 'Zulkar Nine', '9100', 'null', '2021-01-24 00:54:36', '2021-01-24 00:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories_infos`
--

CREATE TABLE `categories_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_infos`
--

INSERT INTO `categories_infos` (`id`, `a_username`, `categories_name`, `categories_description`, `categories_status`, `created_at`, `updated_at`) VALUES
(1, 'zulkarnine', 'fruits', 'that,s for fruits', '1', '2021-01-04 10:00:49', '2021-01-13 06:32:30'),
(2, 'zulkarnine', 'vegetables', 'that,s for vegetables', '1', '2021-01-04 10:40:00', '2021-01-04 10:40:00'),
(3, 'zulkarnine', 'seeds', 'that,s for food', '1', '2021-01-04 10:40:23', '2021-01-15 04:02:51'),
(4, 'zulkarnine', 'cash', 'that,s for cash', '1', '2021-01-04 10:40:53', '2021-01-04 10:40:53'),
(8, 'zulkarnine', 'Flowers', 'that\'s for flowers', '1', '2021-01-26 23:03:47', '2021-01-26 23:03:47'),
(10, 'zulkarnine', 'Sapling', 'that\'s for Sapling', '1', '2021-01-27 00:00:09', '2021-01-27 00:00:09'),
(11, 'zulkarnine', 'Others', 'That\'s for all others', '1', '2021-01-27 00:18:59', '2021-01-27 00:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `crop_imports`
--

CREATE TABLE `crop_imports` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_session` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_type` int(10) UNSIGNED NOT NULL,
  `crop_quantity` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_rate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date_bidding` date NOT NULL,
  `crop_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_image2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Action` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crop_imports`
--

INSERT INTO `crop_imports` (`id`, `username`, `crop_name`, `crop_session`, `crop_type`, `crop_quantity`, `crop_location`, `bid_rate`, `crop_description`, `last_date_bidding`, `crop_image`, `crop_image2`, `status`, `condition`, `Action`, `created_at`, `updated_at`) VALUES
(5, 'zulkarnine', 'sorisa', '2', 2, '1 bighas', 'rajshahi', '5000', 'made by bangladesh', '2021-01-21', 'public/crop_images/1610723217.mustard1.jpg', 'public/crop_images/1610723217.mustard2.jpg', '0', 'old', 'deleted', '2020-12-01 01:02:55', '2021-01-25 03:32:51'),
(6, 'zulkarnine', 'komola', '1', 1, '10 tress', 'rajshahi', '40000', 'from bangladesh', '2020-12-25', 'public/crop_images/komola.jpg', 'public/crop_images/1610723961.orange2.jpg', '0', 'old', 'Published', '2020-12-10 23:35:51', '2021-01-23 04:49:11'),
(7, 'zulkarnine', 'Lichu', '3', 1, '10 tress', 'araihazar1450,dhaka,bangladesh', '4000', 'from bangladesh', '2020-12-30', 'public/crop_images/1610723841.9.jpg', 'public/crop_images/download.jpg', '1', 'old', 'Published', '2020-12-21 01:00:24', '2021-01-15 09:24:48'),
(10, 'alomgir', 'grapes', '2', 1, '10 tress', 'khulna', '6000', 'for consumers', '2021-02-25', 'public/crop_images/1610715801.grapes.jpg', 'public/crop_images/1610715801.grapes2.jpg', '1', 'New', 'Published', '2021-01-15 07:03:21', '2021-01-27 03:10:45'),
(11, 'sajedul', 'badacophy', '2', 2, '10 bighas', 'chittagong', '5000', 'for consumers', '2021-01-28', 'public/crop_images/1610716188.Cabbage.jpg', 'public/crop_images/1610716188.Cabbage2.jpg', '1', 'New', 'Published', '2021-01-15 07:09:48', '2021-01-27 03:10:40'),
(12, 'zulkarnine', 'Rice', '3', 3, '40 kg', 'chittagong', '3000', 'for consumers', '2021-02-06', 'public/crop_images/1610721658.rice.jpg', 'public/crop_images/1610721658.rice2.jpg', '1', 'New', 'Published', '2021-01-15 08:40:58', '2021-01-15 08:41:11'),
(13, 'zulkarnine', 'tea', '1', 4, '1 bighas', 'Norshingdi', '9000', 'for consumers', '2021-02-15', 'public/crop_images/1610722084.tea.jpg', 'public/crop_images/1610722084.tea2.jpg', '1', 'New', 'Published', '2021-01-15 08:48:05', '2021-01-15 08:50:19'),
(14, 'zulkarnine', 'peaj', '2', 2, '40 kg', 'rajshahi', '6000', 'for consumers', '2021-02-16', 'public/crop_images/1610722836.Onion2.jpg', 'public/crop_images/1610722836.Onion.jpg', '1', 'New', 'Published', '2021-01-15 09:00:36', '2021-01-15 09:00:43'),
(16, 'zulkarnine', 'butta', '1', 3, '20kg', 'rajshahi', '500', 'for consumers', '2021-02-28', 'public/crop_images/1610723529.maize.jpg', 'public/crop_images/1610723529.maize2.jpg', '1', 'New', 'Published', '2021-01-15 09:12:09', '2021-01-15 09:15:41'),
(17, 'zulkarnine', 'soyabean', '1', 4, '1 bighas', 'raipura,dhaka', '1500', 'for consumer', '2021-01-25', 'public/crop_images/1610723734.syebean2.jpg', 'public/crop_images/1610723734.soyebean.jpg', '1', 'old', 'Published', '2021-01-15 09:15:34', '2021-01-24 21:40:44'),
(18, 'sajedul', 'potato', '1', 2, '1 bighas', 'Norshingdi', '5500', 'that,s for consumers', '2021-03-05', 'public/crop_images/1611146178.Potato.jpg', 'public/crop_images/1611146178.Potato2.jpg', '1', 'New', 'Published', '2021-01-20 06:36:18', '2021-01-24 01:01:18'),
(21, 'Faruqe', 'Mango', '1', 1, '5 trees', 'khulna', '1500', 'bangladesh', '2021-01-31', 'public/crop_images/1611738764.mango.jpg', 'public/crop_images/1611738764.mango2.jpg', '1', 'New', 'Published', '2021-01-27 03:12:44', '2021-01-27 03:13:43'),
(22, 'Faruqe', 'badam', '3', 3, '30kg', 'bondor, narayangonj', '600', 'bangladesh', '2021-02-06', 'public/crop_images/1611739154.groundnat.jpg', 'public/crop_images/1611739154.goundnat2.jpg', '1', 'New', 'Published', '2021-01-27 03:19:14', '2021-01-27 03:19:33'),
(23, 'Faruqe', 'Aakh', '3', 4, '1 bighas', 'Raipura, Norshingdi', '2500', 'for bangladesh', '2021-02-17', 'public/crop_images/1611739406.sugerkan.jpg', 'public/crop_images/1611739406.sugerkan.jpg', '1', 'New', 'Published', '2021-01-27 03:23:26', '2021-01-27 03:23:37'),
(24, 'zulkarnine', 'peara', '1', 10, '50 pics', 'Chittagong', '500', 'bangladesh', '2021-02-05', 'public/crop_images/1611739728.4.jpg', 'public/crop_images/1611739728.4.jpg', '1', 'New', 'Published', '2021-01-27 03:28:48', '2021-01-27 03:29:21'),
(25, 'zulkarnine', 'cotton', '1', 4, '30kg', 'Rajshahi', '3000', 'bangladesh', '2021-01-30', 'public/crop_images/1611740005.cotton.jpg', 'public/crop_images/1611740005.cotton2.jpg', '1', 'New', 'Published', '2021-01-27 03:33:25', '2021-01-27 03:40:28'),
(26, 'zulkarnine', 'Sunflower', '1', 8, '1 bighas', 'Rajshahi', '3000', 'bangladesh', '2021-02-10', 'public/crop_images/1611740388.images (37).jpg', 'public/crop_images/1611740388.images (36).jpg', '1', 'New', 'Published', '2021-01-27 03:39:48', '2021-01-27 03:40:30'),
(27, 'hossain', 'abc', '3', 11, '1 pics', 'dhaka', '800', 'bangladesh', '2021-02-05', 'public/crop_images/1611740742.images (26).jpg', 'public/crop_images/1611740742.images (26).jpg', '1', 'New', 'Published', '2021-01-27 03:45:42', '2021-01-27 03:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_registers`
--

CREATE TABLE `farmer_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `register_as` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `division` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farmer_registers`
--

INSERT INTO `farmer_registers` (`id`, `register_as`, `username`, `email`, `mobile`, `dob`, `division`, `address`, `zip_code`, `gender`, `password`, `profile_pic`, `action`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'farmer', 'zulkarnine', 'zns601@gmail.com', '01989419776', '1997-09-25', 'Dhaka', 'Kolabagan,Dhaka', '1205', 'male', '$2y$10$5EnTljBZoUBfb8.0zziQxev5RUYtA2pDfUtkvERTs3PPmd4WZoICG', 'null', 'active', 'verified', '2020-12-29 08:33:12', '2021-01-27 04:20:50'),
(2, 'farmer', 'alomgir', 'alomgir@gmail.com', '01876543567', '1996-05-24', 'Khulna', 'noton bazar', '1211', 'male', '$2y$10$296c5wRUL5sUJNG8ZqX/FeE.C5rCEtf2/XDHU963AUVe/ua4UuhU6', 'null', 'active', 'verified', '2021-01-15 06:30:02', '2021-01-15 06:30:02'),
(3, 'farmer', 'Faruqe', 'faruqe@gmail.com', '01969084620', '1997-07-12', 'Dhaka', 'raipura', '1615', 'male', '$2y$10$QrWtmO4w4LuSipeRLKFBVOKJOn/WtKvOjHbFjs/DPUSE/WewSo4SC', 'null', 'active', 'verified', '2021-01-15 06:32:00', '2021-01-15 06:32:00'),
(4, 'farmer', 'sajedul', 'sajedul@gmail.com', '01888344856', '1995-09-26', 'Chittagong', '90/A road, hathazari', '1234', 'male', '$2y$10$oCKO0K1OG5wrJhjZNyIkO.Xv8RTg4tiaS4S5n/CRJwx6LN46h4fKK', 'null', 'active', 'verified', '2021-01-15 06:34:52', '2021-01-15 06:34:52'),
(5, 'farmer', 'hossain', 'hossain@gmail.com', '01764578235', '1993-04-30', 'Barishal', 'kuakata', '1567', 'male', '$2y$10$M4NEU4pJ/G/tyOdP.QhOGuuLF7SSTR2YpEiUohCIkBn7R/j7ZldeW', 'null', 'disable', 'verified', '2021-01-15 06:37:32', '2021-01-27 04:10:24');

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
(7, '2020_10_28_052526_create_crop_imports_table', 3),
(8, '2020_10_28_093532_create_bid_messages_table', 4),
(11, '2020_10_28_160503_create_news_infos_table', 7),
(15, '2020_10_26_124324_create_farmer_registers_table', 8),
(16, '2020_10_26_125741_create_user_registers_table', 8),
(18, '2020_10_28_140943_create_admin_registers_table', 9),
(19, '2021_01_04_154438_create_categories_infos_table', 10),
(20, '2020_10_29_091039_create_pay_confirm_messages_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news_infos`
--

CREATE TABLE `news_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_confirm_messages`
--

CREATE TABLE `pay_confirm_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `crop_id` int(10) UNSIGNED NOT NULL,
  `f_username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_price` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_registers`
--

CREATE TABLE `user_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `register_as` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `division` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_registers`
--

INSERT INTO `user_registers` (`id`, `register_as`, `username`, `email`, `mobile`, `dob`, `division`, `address`, `zip_code`, `gender`, `password`, `profile_pic`, `action`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'zulkarnine', 'zns601@gmail.com', '01660144436', '1997-09-25', 'Dhaka', 'Kolabagan,Dhaka', '1205', 'male', '$2y$10$szL3ySjeYWF3Sb.Yg6x9W.zoSY5fvmnPuOZ7qG1e8pwXaoJ2PbfZO', 'null', 'active', 'verified', '2020-12-29 08:35:19', '2021-01-21 03:11:36'),
(2, 'customer', 'alomgir', 'alomgir@gmail.com', '01876543567', '1995-09-26', 'Dhaka', 'noton bazar', '1211', 'male', '$2y$10$R6R8S2jH0unUaBNY3i76wuX.PERvwc4ePLWbAztSNai.Vji88.yuu', 'null', 'active', 'verified', '2021-01-15 06:39:57', '2021-01-15 06:39:57'),
(3, 'customer', 'Faruqe', 'faruqe@gmail.com', '01969084620', '1996-04-02', 'Chittagong', 'hathhazari', '1506', 'male', '$2y$10$DcVBqY1SDCcJAiI7RQ/8qOu8jqbOedKXlj7m2SU1vQZQCaCspkboO', 'null', 'active', 'verified', '2021-01-15 06:41:15', '2021-01-15 06:41:15'),
(4, 'customer', 'sajedul', 'sajedul@gmail.com', '01888344856', '1994-12-26', 'Dhaka', '1606', '1606', 'male', '$2y$10$DVGvgGtOX06EkWHXZNiwtOaX7t9AXmxbag3PIlAO9rPiJhRHRHUci', 'null', 'active', 'verified', '2021-01-15 06:44:45', '2021-01-23 21:54:40'),
(5, 'customer', 'hossain', 'hossain@gmail.com', '01764578235', '1999-05-31', 'Comilla', '45 kollandi', '1703', 'male', '$2y$10$1dr1SbMaNufMXIi0r3G/dOhMVRzdVnqcCGWiueYWNfUVoqZMyD2AK', 'null', 'active', 'verified', '2021-01-15 06:47:37', '2021-01-15 06:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registers`
--
ALTER TABLE `admin_registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bid_messages`
--
ALTER TABLE `bid_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crop_id` (`crop_id`),
  ADD KEY `bid_messages_ibfk_2` (`f_username`),
  ADD KEY `bid_messages_ibfk_3` (`cust_username`);

--
-- Indexes for table `categories_infos`
--
ALTER TABLE `categories_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_infos_ibfk_1` (`a_username`);

--
-- Indexes for table `crop_imports`
--
ALTER TABLE `crop_imports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crop_imports_ibfk_1` (`username`),
  ADD KEY `crop_type` (`crop_type`);

--
-- Indexes for table `farmer_registers`
--
ALTER TABLE `farmer_registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_infos`
--
ALTER TABLE `news_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_infos_ibfk_1` (`username`);

--
-- Indexes for table `pay_confirm_messages`
--
ALTER TABLE `pay_confirm_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pay_confirm_messages_ibfk_1` (`crop_id`),
  ADD KEY `pay_confirm_messages_ibfk_2` (`cust_username`),
  ADD KEY `pay_confirm_messages_ibfk_3` (`f_username`);

--
-- Indexes for table `user_registers`
--
ALTER TABLE `user_registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registers`
--
ALTER TABLE `admin_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid_messages`
--
ALTER TABLE `bid_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories_infos`
--
ALTER TABLE `categories_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `crop_imports`
--
ALTER TABLE `crop_imports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `farmer_registers`
--
ALTER TABLE `farmer_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news_infos`
--
ALTER TABLE `news_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pay_confirm_messages`
--
ALTER TABLE `pay_confirm_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_registers`
--
ALTER TABLE `user_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid_messages`
--
ALTER TABLE `bid_messages`
  ADD CONSTRAINT `bid_messages_ibfk_1` FOREIGN KEY (`crop_id`) REFERENCES `crop_imports` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_messages_ibfk_2` FOREIGN KEY (`f_username`) REFERENCES `crop_imports` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_messages_ibfk_3` FOREIGN KEY (`cust_username`) REFERENCES `user_registers` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `categories_infos`
--
ALTER TABLE `categories_infos`
  ADD CONSTRAINT `categories_infos_ibfk_1` FOREIGN KEY (`a_username`) REFERENCES `admin_registers` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `crop_imports`
--
ALTER TABLE `crop_imports`
  ADD CONSTRAINT `crop_imports_ibfk_1` FOREIGN KEY (`username`) REFERENCES `farmer_registers` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `crop_imports_ibfk_2` FOREIGN KEY (`crop_type`) REFERENCES `categories_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news_infos`
--
ALTER TABLE `news_infos`
  ADD CONSTRAINT `news_infos_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin_registers` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `pay_confirm_messages`
--
ALTER TABLE `pay_confirm_messages`
  ADD CONSTRAINT `pay_confirm_messages_ibfk_1` FOREIGN KEY (`crop_id`) REFERENCES `bid_messages` (`crop_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pay_confirm_messages_ibfk_2` FOREIGN KEY (`cust_username`) REFERENCES `bid_messages` (`cust_username`) ON DELETE CASCADE,
  ADD CONSTRAINT `pay_confirm_messages_ibfk_3` FOREIGN KEY (`f_username`) REFERENCES `farmer_registers` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
