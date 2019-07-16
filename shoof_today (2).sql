-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2019 at 01:16 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoof_today`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(20, 'طفل تم العثور عليه', NULL, '2019-07-14 06:25:19', '2019-07-14 06:25:19'),
(19, 'طفل مفقود', NULL, '2019-07-14 06:25:10', '2019-07-14 06:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'القاهره', '2019-07-09 06:15:33', '2019-07-09 06:15:33'),
(2, 'الاسكندريه', '2019-07-09 06:15:52', '2019-07-09 06:15:52'),
(3, 'الاسماعليه', '2019-07-09 06:16:01', '2019-07-09 06:16:01'),
(4, 'الجيزه', '2019-07-09 06:16:07', '2019-07-09 06:16:07'),
(5, 'اسوان', '2019-07-09 06:16:16', '2019-07-09 06:16:16'),
(6, 'اسيوط', '2019-07-09 06:16:27', '2019-07-09 06:16:27'),
(7, 'الاقصر', '2019-07-09 06:16:33', '2019-07-09 06:16:33'),
(8, 'البحر الاحمر', '2019-07-09 06:16:39', '2019-07-09 06:16:39'),
(9, 'البحيره', '2019-07-09 06:16:50', '2019-07-09 06:16:50'),
(10, 'بني سويف', '2019-07-09 06:16:56', '2019-07-09 06:16:56'),
(11, 'بور سعيد', '2019-07-09 06:17:00', '2019-07-09 06:17:00'),
(12, 'جنوب سيناء', '2019-07-09 06:17:15', '2019-07-09 06:17:15'),
(13, 'الدقهليه', '2019-07-09 06:17:22', '2019-07-09 06:17:22'),
(14, 'دمياط', '2019-07-09 06:17:27', '2019-07-09 06:17:27'),
(15, 'المنوفيه', '2019-07-09 06:17:31', '2019-07-09 06:17:31'),
(16, 'سوهاج', '2019-07-09 06:17:44', '2019-07-09 06:17:44'),
(17, 'السويس', '2019-07-09 06:17:48', '2019-07-09 06:17:48'),
(18, 'شمال سيناء', '2019-07-09 06:17:54', '2019-07-09 06:17:54'),
(19, 'الفيوم', '2019-07-09 06:18:05', '2019-07-09 06:18:05'),
(20, 'القليوببيه', '2019-07-09 06:18:10', '2019-07-09 06:18:10'),
(21, 'قنا', '2019-07-09 06:18:14', '2019-07-09 06:18:14'),
(22, 'مطروح', '2019-07-09 06:18:18', '2019-07-09 06:18:18'),
(23, 'كفر الشيخ', '2019-07-09 06:18:25', '2019-07-09 06:18:25'),
(24, 'الوادي الجديد', '2019-07-09 06:18:30', '2019-07-09 06:18:30'),
(25, 'المنيا', '2019-07-09 06:18:39', '2019-07-09 06:18:39'),
(26, 'الغربيه', '2019-07-09 06:19:06', '2019-07-09 06:19:06'),
(28, 'الشرقيه', '2019-07-09 08:13:20', '2019-07-09 08:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `age` int(50) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `telephone` int(50) NOT NULL,
  `notes` text,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `address`, `city`, `age`, `date`, `gender`, `telephone`, `notes`, `image`, `status`, `type`, `created_at`, `updated_at`) VALUES
(33, 'sandra', 'kj', 'القاهره', 5, '2019-01-01', 'female', 656, 'notes', '33_image.jpg', 0, 'lost', '2019-07-15 12:11:38', '2019-07-16 08:44:02'),
(28, 'marwa', 'kj', 'الاسكندريه', 5, '2019-01-01', 'female', 2, 'KLJL', '28_image.jpg', 0, 'lost', '2019-07-15 08:11:53', '2019-07-16 08:44:02'),
(29, 'sara', 'kj', 'القليوبيه', 5, '2018-01-01', 'female', 252, 'KJK', '29_image.jpg', 0, 'lost', '2019-07-15 08:12:25', '2019-07-16 08:44:02'),
(31, 'marwa', 'klml', 'الجيزه', 7, '2019-01-01', 'female', 12345678, 'ss', '31_image.jpg', 0, 'found', '2019-07-15 09:46:43', '2019-07-16 08:44:02'),
(32, 'sandra', 'kj', 'البحيره', 2, '2019-05-01', 'female', 1, 'klm', '32_image.jpg', 0, 'found', '2019-07-15 10:13:49', '2019-07-16 08:44:02'),
(34, 'laila', 'kklk', 'القاهره', 2, '2019-01-01', 'female', 546, 'notes', '34_image.jpg', 0, 'found', '2019-07-15 12:14:09', '2019-07-16 08:44:02'),
(35, 'yara', 'lk', 'المنصوره', 5, '2019-01-01', 'female', 65, 'jhjhj', '35_image.jpg', 0, 'lost', '2019-07-16 05:18:38', '2019-07-16 08:44:02'),
(36, 'sand', 'lkm', 'المنوفيه', 25, '2019-01-01', 'female', 5, 'ko', '36_image.jpg', 0, 'found', '2019-07-16 05:20:54', '2019-07-16 08:44:02'),
(37, 'ahmed', 'klml', 'القاهره', 2, '2019-01-01', 'male', 5, 'ol,k', '37_image.jpg', 0, 'lost', '2019-07-16 05:21:34', '2019-07-16 08:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(8, 'jkl', 'da', '2019-07-09 10:48:05', '2019-07-09 10:48:05'),
(5, 'jkl', 'klj', '2019-07-04 06:23:55', '2019-07-04 06:23:55'),
(4, 'ew', 'wr', '2019-06-26 12:52:07', '2019-06-26 12:52:07'),
(6, 'jklre', 'da', '2019-07-04 08:09:21', '2019-07-04 08:09:21'),
(9, 'ead', 'wrl', '2019-07-09 10:48:11', '2019-07-09 10:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `telephone` int(50) NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `name`, `permission`, `website`, `status`, `telephone`, `department`, `created_at`, `updated_at`) VALUES
(14, 'marwagalal15@gmail.com', NULL, '12345678', NULL, 'sandrao', 'admin', '15', 1, 0, '3', '2019-07-03 07:16:16', '2019-07-09 10:40:54'),
(15, 'marwagalal10@gmail.com', NULL, '$2y$10$9R.YvlcGqo6k82SxW4mgPer7VOKPNkJdP6WzjnqdlzP.fg/HR.Rka', NULL, 'dfg', 'user', 'okopk', 0, 0, '', '2019-07-03 07:16:16', '2019-07-03 07:16:16'),
(17, 'sandy_sado196@yahoo.com', NULL, '$2y$10$9KBh1tKm/Cx67Ta6tdir/uzCAcDCOh4IWdR/qHPo2XqDUwBsP08Hi', NULL, 'sandra', 'user', 'ipoiopi', 0, 0, '', '2019-07-03 07:16:16', '2019-07-03 07:16:16'),
(21, 'marwagalal105@gmail.com', NULL, '$2y$10$b.MDEFOdYreg5UlPSwYO6O8ORSUEfgcrlG4EB8mU88Mewe3.QR2Ja', NULL, 'marwa', 'user', NULL, 0, 0, '', '2019-07-03 07:16:16', '2019-07-11 12:42:32'),
(22, 'marwagalal1105@gmail.com', NULL, '$2y$10$TC8cGAhz0XsyljED15mIdOTBvwYPyt.XZpUo9D21mTrNwUUv01Ym6', NULL, 'sandra', 'user', 'jhkhkhk', 1, 555, '', '2019-07-03 07:16:16', '2019-07-03 07:16:16'),
(23, 'hh@hh.com', NULL, '$2y$10$LfgqvNFJqDsZC2MfxQ32D.d8udTEeS.rpWbzq.6sYw1UVGebLaygO', NULL, 'sandraa', 'admin', 'kk', 0, 22, '', '2019-07-03 07:16:16', '2019-07-03 07:16:16'),
(24, 'sandrasamvy17@gmail.com', NULL, '$2y$10$e7TQLg2FLukZqCwxOqJWluCovrEedM5BUg.401cytNrQ3PQv.sKde', NULL, 'sandra', 'admin', 'k', 1, 555, '', '2019-07-03 07:16:16', '2019-07-03 07:16:16'),
(25, 'sandy_sado@yahoo.com', NULL, '$2y$10$7wjzuCfEXEEQqkOfDns4pe/NuPzLaX7QZX8wFcHXD0vnCBEeV8dUW', NULL, 'sports', 'admin', 'ipoiopi', 1, 5, '', '2019-07-03 05:17:24', '2019-07-03 05:17:24'),
(26, 'michael@bluesoftec.com', NULL, '$2y$10$HT4WHjXqEYSpaG4pfyHBJuU1aFQyVfasQoAsWdWTK4OvR8zN9789S', NULL, 'michael', 'admin', 'sdf', 0, 3, '', '2019-07-03 08:31:21', '2019-07-11 12:43:15'),
(27, 'sandy_so@yahoo.com', NULL, '$2y$10$XjWz1492y.yussib5MMnXuR/vfWW6cVz4lGx75M9VUK0AD3jpLg7m', NULL, 'marwa', 'user', 'ipoiopi', 1, 3, '', '2019-07-03 08:58:57', '2019-07-03 08:58:57'),
(28, 'marwagal@gmail.com', NULL, '$2y$10$0mHqj6Pcmtzh6j6nNuAObeB1P7TN08WHJcxM3MimvducNWdUvy8sq', NULL, 'marwa', 'user', 'sdf', 1, 555, '', '2019-07-03 10:04:51', '2019-07-03 10:04:51'),
(29, 'rak@gmail.com', NULL, '$2y$10$eUjuEas4sIMAdaf.rs0EGeHlmPw3MoIaaajXit09EUrbKmIz7YSki', NULL, 'sports', 'editor', 'sdf', 0, 2, '', '2019-07-03 10:07:15', '2019-07-03 10:07:15'),
(30, 'sandy_s@yahoo.com', NULL, '$2y$10$oaMI9Cu/9vNT08k/QltIi.JhD9aY9Ybl9L7UcuA/mKNE4gi6eZ7Km', NULL, 'sports', 'user', 'ipoiopi', 1, 555, '', '2019-07-03 10:15:22', '2019-07-03 10:15:22'),
(31, 'sa@yahoo.com', NULL, '$2y$10$ADwm4H5242z3pjphUH.hPu9wM3caoWDjThc6JJt5PWqy04GJ5tgMK', NULL, 'marwa', 'user', 'ipoiopi', 1, 555, '', '2019-07-03 10:26:15', '2019-07-03 10:26:15'),
(32, 'sand@yahoo.com', NULL, '$2y$10$VAJm1rZZkr5uMFKcAIGZnOXF4oVzZ/je86Ba3MJ1qyC9omu9nvesi', NULL, 'ahmedd', 'user', 'sdf', 1, 2, '', '2019-07-03 10:33:11', '2019-07-03 12:28:23'),
(33, 'marwa@gmail.com', NULL, '$2y$10$ah4Fx1Vja8m3.x4LPqm/.uBSl4e5CsskvgIpzVI0cZG/nqrqjd7aO', NULL, 'marwaaaaa', 'editor', 'dfg', 1, 2, '2', '2019-07-04 07:46:07', '2019-07-09 09:15:23'),
(34, 'sa6@yahoo.com', NULL, '$2y$10$o5gi16l3zoC5buvZd.bOoewgQ03XgKqUZRkPnpNcKMKVDrQMwh3QK', NULL, 'marwa', 'user', 'sdf', 0, 1, '18', '2019-07-09 10:47:42', '2019-07-09 10:47:42'),
(35, 'mariam@user.com', NULL, '$2y$10$.zn47gUsVGCRiraY0hxQDOLJ/YC9jDhmJFMtnC9f.XvQPI5z.7Toa', NULL, 'mariam', 'user', 'sdf', 1, 3, '18', '2019-07-14 05:04:44', '2019-07-14 05:04:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
