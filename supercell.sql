-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 03:22 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supercell`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_table_detail`
--

CREATE TABLE `brand_table_detail` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_table_detail`
--

CREATE TABLE `item_table_detail` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_table_detail`
--

INSERT INTO `item_table_detail` (`item_id`, `item_name`, `price`, `discount`, `stock`, `brand_id`, `description`, `remember_token`, `created_at`, `updated_at`, `picture`) VALUES
(7, 'Nokia', 1000000, 1, 100, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ', NULL, '2018-12-19 00:10:13', '2018-12-19 00:10:13', '415518.jpg'),
(8, 'Merek HP', 200000, 11, 100, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ', NULL, '2018-12-19 00:11:01', '2018-12-19 00:11:01', '415518.jpg'),
(9, 'Nokia', 10000, 10, 100, 4, 'adasdsadasdasdasdasdasdasdasdasdas', NULL, '2018-12-20 08:58:41', '2018-12-20 08:58:41', 'IMG_6284.JPG'),
(10, 'Samsung', 10000, 10, 100, 8, 'adasdsadasdasdasdasdasdasdasdasdas', NULL, '2018-12-20 09:00:41', '2018-12-20 09:00:41', 'IMG_6284.JPG'),
(11, 'asd', 10000, 10, 100, 33, 'adasdsadasdasdasdasdasdasdasdasdas', NULL, '2018-12-20 09:01:29', '2018-12-20 09:01:29', 'Foto Ujian Hapkido.jpg'),
(12, 'Samsung', 10000, 10, 100, 98, 'adasdsadasdasdasdasdasdasdasdasdas', NULL, '2018-12-20 09:02:39', '2018-12-20 09:02:39', 'IMG_6284.JPG'),
(16, 'Tes Masuk apa gk', 10000, 10, 100, 98, 'adasdsadasdasdasdasdasdasdasdasdas', NULL, '2018-12-20 09:22:28', '2018-12-20 09:22:28', 'IMG_6284.JPG'),
(17, 'aASU', 10000, 10, 100, 11, 'ASDFASAD', NULL, '2018-12-20 19:10:02', '2018-12-20 19:10:02', 'IMG_6284.JPG');

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
(3, '2018_11_28_073422_transaction_table', 1),
(4, '2018_11_28_073725_transaction_table_detail', 1),
(5, '2018_11_28_074040_item_table_detail', 1),
(6, '2018_11_28_074254_brand_table_detail', 1),
(7, '2018_12_19_051711_update_item_table_detail', 2),
(8, '2018_12_19_064456_update_item_detail_table', 3),
(10, '2018_12_20_094142_update_transaction_table', 4);

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
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table_detail`
--

CREATE TABLE `transaction_table_detail` (
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `item_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `gender`, `profile_picture`, `address`, `date_of_birth`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'M. Hafiz Bukhari', 'hafiz.bukhari@hotmail.com', '$2y$10$wrv9XH.Rt.UOvYOeny00MO7FnsUf40HWHU2eZCHUSNKCpu1YoVHEG', 'Male', 'C:\\xampp\\tmp\\phpF0F.tmp', 'cengkareng barat', '2018-12-05', '8R9WSjsGNe0F58ATMtafACheJZTF2POAncd9WKnc8M0ATft81Ebwn0MPFeYz', '2018-12-06 23:18:06', '2018-12-20 02:29:40'),
(2, 'Adiputra Respati Wicaksono', 'ada@aaa.com', '$2y$10$uicMA9GVZRPcb7guUZmtnuD649dbuqaW3aHnkeNApKduiUwqNUmYa', 'Male', 'video-games-need-for-speed-most-wanted-2560x1600-wallpaper.jpg', 'adadad', '2018-12-06', 'XN1ZysnaNJ8z0SbSvFHwcD69EX2FAlIPbiXaZNdShZVroGODdXJlTZGfeihx', '2018-12-11 23:36:29', '2018-12-11 23:36:29'),
(3, 'adiputra Respati Wicaksono', 'adiputra52429@gmail.com', '$2y$10$dZnojBtrTUZoc5RK/xf0VONWtVvclT.Z1XO9dCr43qXQaEVZgTBi6', 'Male', '415518.jpg', 'adadad', '2018-01-31', '8HihKF2szWKX848U7KbvNPAtxQj79IMaYRe2L6UP4jHlGOx7ZxzngMWDTi1h', '2018-12-18 03:10:44', '2018-12-18 03:10:44'),
(4, 'Adiputra Respati Wicaksono', 'hafiz@hafiz.com', '$2y$10$c8aZtrxuhNM9OGLWdb4Mje.18dE87u327sSa5NK4n4/uvSRhVuDSS', 'Male', 'video-games-need-for-speed-most-wanted-2560x1600-wallpaper.jpg', 'asdasdsadsadsad', '2018-12-13', 'uaJmEqiOhyu5cJ5BPv1HsgCEPdTwkhRlgADFRCEGhDdL0XB1FXRnG0u9CiPM', '2018-12-19 02:55:48', '2018-12-19 02:55:48'),
(5, 'Adiputra Respati Wicaksono', 'adiputra52414@gmail.com', '$2y$10$Vt4R9f/BLqajLvkVJE2IW.swEYJdsL93L5Zjvh2bxzSiJtGY1A3XS', 'Male', 'video-games-need-for-speed-most-wanted-2560x1600-wallpaper.jpg', 'cibubur', '9999-09-09', NULL, '2018-12-19 03:03:52', '2018-12-19 03:03:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_table_detail`
--
ALTER TABLE `brand_table_detail`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `item_table_detail`
--
ALTER TABLE `item_table_detail`
  ADD PRIMARY KEY (`item_id`);

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
-- Indexes for table `transaction_table`
--
ALTER TABLE `transaction_table`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transaction_table_id_user_foreign` (`id_user`);

--
-- Indexes for table `transaction_table_detail`
--
ALTER TABLE `transaction_table_detail`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_table_detail`
--
ALTER TABLE `brand_table_detail`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_table_detail`
--
ALTER TABLE `item_table_detail`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction_table`
--
ALTER TABLE `transaction_table`
  MODIFY `transaction_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_table_detail`
--
ALTER TABLE `transaction_table_detail`
  MODIFY `transaction_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction_table`
--
ALTER TABLE `transaction_table`
  ADD CONSTRAINT `transaction_table_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
