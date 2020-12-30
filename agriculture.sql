-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 06:59 PM
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
  `crop_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '1', 'rice', 'zulkarnine', 'zulkarnine', 'Zulkar Nine', '5800', 'null', '2020-11-24 00:29:36', '2020-11-24 00:29:36'),
(7, '1', 'rice', 'zulkarnine', 'zulkarnine', 'tarikul islam', '5200', 'null', '2020-12-03 00:20:04', '2020-12-03 00:20:04'),
(8, '5', 'sorisa', 'zulkarnine', 'zulkarnine', 'Zulkar Nine', '5000', 'null', '2020-12-29 12:03:03', '2020-12-29 12:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Zulkar Nine', 'zns601@gmail.com', '01989419776', 'hello i,m facing a problem', '2020-11-26 12:20:38', '2020-11-26 12:20:38'),
(2, 'Faruqe', 'faruqe@gmail.com', '01869084620', 'Hello, how are you all ?', '2020-12-29 09:42:42', '2020-12-29 09:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `crop_imports`
--

CREATE TABLE `crop_imports` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_quantity` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_rate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date_bidding` date NOT NULL,
  `crop_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_image2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Action` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crop_imports`
--

INSERT INTO `crop_imports` (`id`, `username`, `crop_name`, `crop_type`, `crop_quantity`, `crop_location`, `bid_rate`, `crop_description`, `last_date_bidding`, `crop_image`, `crop_image2`, `views`, `status`, `condition`, `Action`, `created_at`, `updated_at`) VALUES
(1, 'zulkarnine', 'rice', 'Food', '10 tress', 'araihazar,dhaka,bangladesh', '5000', 'made by bangladesh', '2020-11-30', 'public/crop_images/vagitables.jpg', 'public/crop_images/vagitables.jpg', '76', '1', 'old', 'Published', '2020-11-23 22:46:14', '2020-12-29 11:05:44'),
(2, 'zulkarnine', 'Lichu', 'Fruits', '23', 'araihazar,dhaka,bangladesh', '2345', 'hello', '2020-12-10', 'public/crop_images/1copy.PNG', 'public/crop_images/1copy.PNG', '0', '0', 'old', 'Published', '2020-11-26 04:15:21', '2020-12-29 11:37:14'),
(3, 'zulkarnine', 'abc', 'vegetables', '10 bighas', 'khulna', '2442', 'made by bangladesh', '2020-12-09', 'public/crop_images/assignment-1.PNG', 'public/crop_images/assignment-1.PNG', '1', '1', 'old', 'Unpublished', '2020-11-26 22:31:13', '2020-12-10 23:51:41'),
(4, 'zulkarnine', 'Lichu', 'vegetables', '10 tress', 'araihazar,dhaka,bangladesh', '3450', 'made by bangladesh', '2020-11-30', 'public/crop_images/assignment-1.PNG', 'public/crop_images/assignment-1.PNG', '2', '1', 'old', 'Published', '2020-11-26 22:33:32', '2020-12-29 11:37:17'),
(5, 'zulkarnine', 'sorisa', 'plantation', '1 bighas', 'rajshahi', '5000', 'made by bangladesh', '2020-12-10', 'public/crop_images/images (36).jpg', 'public/crop_images/images (36).jpg', '44', '1', 'old', 'Published', '2020-12-01 01:02:55', '2020-12-29 12:22:41'),
(6, 'zulkarnine', 'komola', 'Fruits', '10 tress', 'rajshahi', '40000', 'hello', '2020-12-15', 'public/crop_images/komola.jpg', 'public/crop_images/komola.jpg', '3', '0', 'old', 'Unpublished', '2020-12-10 23:35:51', '2020-12-29 09:15:09'),
(7, 'zulkarnine', 'Lichu', 'Fruits', '10 tress', 'araihazar1450,dhaka,bangladesh', '4000', 'from bangladesh', '2020-12-30', 'public/crop_images/1608534024.download.jpg', 'public/crop_images/download.jpg', '2', '1', 'old', 'Unpublished', '2020-12-21 01:00:24', '2020-12-29 22:30:14'),
(8, 'zulkarnine', 'komola', 'food', '10 tress', 'rajshahi', '5000', 'this from rajshahi', '2020-12-30', 'public/crop_images/2020-12-21.komola.jpg', 'public/crop_images/komola.jpg', '0', '0', 'old', 'Unpublished', '2020-12-21 01:09:25', '2020-12-29 22:30:14');

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
(1, 'farmer', 'zulkarnine', 'zns601@gmail.com', '01989419776', '1997-09-25', 'Dhaka', 'Kolabagan,Dhaka', '1205', 'male', '$2y$10$vOsk1uL0pfgmX6jJQOvKm.1Og85NpzCUhsTDULPej7CYmpULZAtPK', 'null', 'active', 'verified', '2020-12-29 08:33:12', '2020-12-29 08:33:12');

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
(9, '2020_10_29_091039_create_pay_confirm_messages_table', 5),
(10, '2020_10_28_125609_create_contact_messages_table', 6),
(11, '2020_10_28_160503_create_news_infos_table', 7),
(15, '2020_10_26_124324_create_farmer_registers_table', 8),
(16, '2020_10_26_125741_create_user_registers_table', 8),
(18, '2020_10_28_140943_create_admin_registers_table', 9);

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

--
-- Dumping data for table `news_infos`
--

INSERT INTO `news_infos` (`id`, `username`, `news_name`, `news_description`, `long_description`, `news_image`, `created_at`, `updated_at`) VALUES
(2, 'zulkarnine', 'our_services', 'Bangladesh', 'hello heck', 'public/news_images/assignment-3.PNG', '2020-12-01 03:01:37', '2020-12-01 03:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `pay_confirm_messages`
--

CREATE TABLE `pay_confirm_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `crop_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_pay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_confirm_messages`
--

INSERT INTO `pay_confirm_messages` (`id`, `crop_id`, `f_username`, `crop_name`, `cust_username`, `account_pay`, `confirm_price`, `message`, `created_at`, `updated_at`) VALUES
(1, '1', 'zulkarnine', 'rice', 'zulkarnine', '01989419776', '1000', 'please pay 1000 tk for confirm', '2020-11-26 11:59:19', '2020-11-26 11:59:19'),
(2, '1', 'zulkarnine', 'rice', 'zulkarnine', '01989419776', '1000', 'null', '2020-11-26 12:04:18', '2020-11-26 12:04:18');

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
(1, 'customer', 'zulkarnine', 'zns601@gmail.com', '01660144436', '1997-09-25', 'Dhaka', 'Kolabagan,Dhaka', '1205', 'male', '$2y$10$szL3ySjeYWF3Sb.Yg6x9W.zoSY5fvmnPuOZ7qG1e8pwXaoJ2PbfZO', 'null', 'active', 'verified', '2020-12-29 08:35:19', '2020-12-29 11:08:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registers`
--
ALTER TABLE `admin_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_messages`
--
ALTER TABLE `bid_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop_imports`
--
ALTER TABLE `crop_imports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_registers`
--
ALTER TABLE `farmer_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_infos`
--
ALTER TABLE `news_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_confirm_messages`
--
ALTER TABLE `pay_confirm_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registers`
--
ALTER TABLE `user_registers`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crop_imports`
--
ALTER TABLE `crop_imports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `farmer_registers`
--
ALTER TABLE `farmer_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news_infos`
--
ALTER TABLE `news_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pay_confirm_messages`
--
ALTER TABLE `pay_confirm_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_registers`
--
ALTER TABLE `user_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
