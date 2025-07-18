-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2025 at 03:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_image_path`) VALUES
(1, 'Chocolate', '0'),
(2, 'Traditional Sweets', '0'),
(3, 'Snacks', '0'),
(4, 'Drinks', '0'),
(5, 'Instant Noodles', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(14) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `user_id` int(17) NOT NULL,
  `order_country` varchar(100) NOT NULL,
  `order_city` varchar(100) NOT NULL,
  `order_street` varchar(100) NOT NULL,
  `order_housenr` varchar(100) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `order_status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `user_id`, `order_country`, `order_city`, `order_street`, `order_housenr`, `order_name`, `order_status`) VALUES
(1, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0', 1),
(2, '0000-00-00 00:00:00', 1, '', '0', '0', '0', '0', 1),
(3, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0', 1),
(4, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0', 1),
(5, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0', 1),
(6, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0', 1),
(7, '0000-00-00 00:00:00', 7, '', '0', '0', '0', '0', 1),
(8, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0', 1),
(9, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0', 1),
(10, '0000-00-00 00:00:00', 1, '', '0', '0', '0', '0', 1),
(11, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0', 1),
(12, '0000-00-00 00:00:00', 7, '', '0', '0', '0', '0', 1),
(13, '0000-00-00 00:00:00', 9, '', '0', '0', '0', '0', 1),
(14, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0', 1),
(15, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0', 1),
(16, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0', 1),
(17, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0', 1),
(18, '0000-00-00 00:00:00', 7, '', '0', '0', '0', '0', 1),
(19, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0', 1),
(20, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0', 1),
(21, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0', 1),
(22, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0', 1),
(23, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0', 1),
(24, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0', 1),
(25, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0', 1),
(26, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0', 1),
(27, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0', 1),
(28, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0', 1),
(29, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0', 1),
(30, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0', 1),
(31, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0', 1),
(32, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0', 1),
(33, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0', 1),
(34, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0', 1),
(35, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0', 1),
(36, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0', 1),
(37, '0000-00-00 00:00:00', 9, '', '0', '0', '0', '0', 1),
(38, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0', 1),
(39, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0', 1),
(40, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0', 1),
(41, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0', 1),
(42, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0', 1),
(43, '0000-00-00 00:00:00', 9, '', '0', '0', '0', '0', 1),
(44, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0', 1),
(45, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0', 1),
(46, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0', 1),
(47, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0', 1),
(48, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0', 1),
(49, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0', 1),
(50, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0', 1),
(51, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(52, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(103, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(104, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(105, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(106, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(107, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(108, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(109, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(110, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(111, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station', 1),
(112, '2025-06-30 11:09:55', 0, 'France', 'Lion', 'GabenStreet', '66', 'Mael', 1),
(113, '2025-06-30 11:11:14', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael', 1),
(114, '2025-06-30 11:11:38', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael', 1),
(115, '2025-06-30 11:11:53', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael', 1),
(116, '2025-06-30 11:12:09', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael', 1),
(117, '2025-06-30 11:13:10', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael', 1),
(118, '2025-06-30 11:13:30', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael', 1),
(119, '2025-06-30 14:37:43', 0, 'Franch', 'Paris', 'ParisStreet', '122', 'Gaben', 1),
(120, '2025-06-30 14:39:14', 0, 'Franch', 'Paris', 'ParisStreet', '122', 'Gaben', 1),
(121, '2025-07-01 15:31:50', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(122, '2025-07-01 15:34:13', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(123, '2025-07-01 15:34:25', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(124, '2025-07-01 15:34:31', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(125, '2025-07-01 15:36:42', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(126, '2025-07-01 15:37:03', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(127, '2025-07-01 15:40:10', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(128, '2025-07-01 15:40:15', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(129, '2025-07-01 15:40:38', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(130, '2025-07-01 15:41:02', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie', 1),
(131, '2025-07-01 15:43:26', 0, 'Netherlands', 'Zwolle', 'Ministerlaan', '208B', 'LCM Thie', 1),
(132, '2025-07-01 15:43:42', 0, 'Netherlands', 'Zwolle', 'Ministerlaan', '208B', 'LCM Thie', 1),
(133, '2025-07-01 15:43:53', 0, 'Netherlands', 'Zwolle', 'Ministerlaan', '208B', 'LCM Thie', 1),
(134, '2025-07-01 15:44:12', 0, 'Netherlands', 'Zwolle', 'Ministerlaan', '208B', 'LCM Thie', 1),
(135, '2025-07-17 11:07:54', 0, 'kljdasf', 'lkasjdf', 'lkasdf', 'lkasdf', 'Test', 1),
(136, '2025-07-17 11:24:50', 0, 'a', 'a', 'a', 'a', 'Mael', 1),
(137, '2025-07-17 11:25:03', 0, 'a', 'a', 'a', 'a', 'Mael', 1),
(138, '2025-07-17 11:26:40', 0, 'dont remember test', 'dont remember test', 'dont remember test', 'dont remember test', 'Mael', 1),
(139, '2025-07-17 11:26:59', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(140, '2025-07-17 11:27:45', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(141, '2025-07-17 11:34:19', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(142, '2025-07-17 11:34:45', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(143, '2025-07-17 11:37:13', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(144, '2025-07-17 11:38:56', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(145, '2025-07-17 11:39:40', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(146, '2025-07-17 11:39:50', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(147, '2025-07-17 11:41:08', 0, 'remember test', 'remember test', 'remember test', 'remember test', 'Mael', 1),
(148, '2025-07-17 11:42:23', 0, 'France', 'Lyon', 'Grande Rue de la Guillotiere', '26', 'Mael', 1),
(149, '2025-07-17 11:46:36', 0, 'France', 'Lyon', 'Grande Rue de la Guillotiere', '26', 'Mael', 1),
(150, '2025-07-18 15:08:57', 0, 'Netherlands', 'Amsterdam', 'Kanker Str.', '420', 'admin', 1),
(151, '2025-07-18 15:09:23', 0, 'Netherlands', 'Amsterdam', 'Fuck you street', '420', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_rows`
--

CREATE TABLE `order_rows` (
  `order_row_id` int(11) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `order_product_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_rows`
--

INSERT INTO `order_rows` (`order_row_id`, `order_id`, `product_id`, `order_product_amount`) VALUES
(1, 1, 35, 4),
(2, 2, 34, 5),
(3, 3, 17, 1),
(4, 4, 15, 2),
(5, 5, 32, 4),
(6, 6, 6, 4),
(7, 7, 38, 2),
(8, 8, 13, 2),
(9, 9, 34, 5),
(10, 10, 8, 1),
(11, 11, 14, 1),
(12, 12, 20, 5),
(13, 13, 24, 5),
(14, 14, 19, 4),
(15, 15, 14, 2),
(16, 16, 2, 1),
(17, 17, 39, 3),
(18, 18, 30, 5),
(19, 19, 38, 3),
(20, 20, 24, 2),
(21, 21, 15, 3),
(22, 22, 23, 1),
(23, 23, 32, 3),
(24, 24, 19, 3),
(25, 25, 17, 2),
(26, 26, 25, 4),
(27, 27, 13, 1),
(28, 28, 18, 5),
(29, 29, 42, 2),
(30, 30, 25, 5),
(31, 31, 12, 2),
(32, 32, 38, 2),
(33, 33, 5, 3),
(34, 34, 8, 2),
(35, 35, 16, 4),
(36, 36, 7, 5),
(37, 37, 33, 2),
(38, 38, 38, 4),
(39, 39, 30, 3),
(40, 40, 8, 3),
(41, 41, 4, 5),
(42, 42, 4, 4),
(43, 43, 26, 4),
(44, 44, 35, 5),
(45, 45, 28, 4),
(46, 46, 2, 4),
(47, 47, 31, 2),
(48, 48, 21, 2),
(49, 49, 20, 1),
(50, 50, 11, 5),
(51, 0, 7, 10),
(52, 0, 3, 5),
(53, 0, 7, 10),
(54, 0, 3, 5),
(55, 118, 7, 10),
(56, 118, 3, 5),
(57, 119, 7, 10),
(58, 119, 3, 5),
(59, 120, 7, 10),
(60, 120, 3, 5),
(61, 0, 2, 5),
(62, 0, 2, 5),
(63, 134, 2, 5),
(64, 150, 1, 0),
(65, 150, 3, 999),
(66, 150, 4, 377384153),
(67, 151, 1, 0),
(68, 151, 3, 999),
(69, 151, 4, 377384153);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `order_status_id` int(11) NOT NULL,
  `order_status_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`order_status_id`, `order_status_name`) VALUES
(1, 'Ordered'),
(2, 'Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(34) NOT NULL DEFAULT 'no_name',
  `product_image_path` varchar(300) NOT NULL DEFAULT 'no_image',
  `category_id` int(10) NOT NULL DEFAULT 0,
  `product_price` int(10) NOT NULL DEFAULT 0,
  `product_stock` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image_path`, `category_id`, `product_price`, `product_stock`) VALUES
(1, 'Pocky Chocolaty', '', 1, 50, '200'),
(2, 'Pocky Strawberry', '', 1, 170, '238'),
(3, 'KitKat Matcha', 'products_imgs/KitKat_matcha.png', 1, 350, '411'),
(4, 'KitKat Sakura', '', 1, 400, '357'),
(5, 'Black Thunder Chocolate Bar', '', 1, 150, '386'),
(6, 'Meiji Apollo Strawberry Chocolates', '', 1, 200, '241'),
(7, 'Dars Chocolate', '', 1, 180, '491'),
(8, 'Koala\'s March Cookies', '', 1, 200, '132'),
(9, 'Glico Almond Chocolate', '', 1, 300, '98'),
(10, 'Meiji Macadamia Chocolate', '', 1, 350, '216'),
(11, 'Toppo Chocolate Sticks', '', 1, 200, '274'),
(12, 'Meiji Marble Chocolates', '', 1, 200, '479'),
(13, 'Meiji Kinoko no Yama', '', 1, 200, '283'),
(14, 'Takenoko no Sato', '', 1, 200, '11'),
(15, 'Chocoball Peanut', '', 1, 180, '367'),
(16, 'Shiroi Koibito Cookies', '', 2, 1200, '414'),
(17, 'Tokyo Banana', '', 2, 1500, '286'),
(18, 'Matcha Mochi', '', 2, 300, '125'),
(19, 'Daifuku Mochi', '', 2, 200, '442'),
(20, 'Yokan Sweet Bean Jelly', '', 2, 300, '322'),
(21, 'Sakuma Drops Candy', '', 2, 300, '429'),
(22, 'Konpeito Sugar Candy', '', 2, 300, '82'),
(23, 'Bourbon Alfort Cookies', '', 2, 200, '457'),
(24, 'Lotte Custard Cake', '', 2, 300, '201'),
(25, 'Calbee Shrimp Chips', '', 3, 150, '97'),
(26, 'Senbei Rice Crackers', '', 3, 200, '497'),
(27, 'Jagabee Potato Snacks', '', 3, 200, '150'),
(28, 'Wasabi Peas', '', 3, 200, '317'),
(29, 'Umeboshi Dried Plum Snacks', '', 3, 300, '310'),
(30, 'Koikeya Seaweed Chips', '', 3, 200, '148'),
(31, 'Pretz Tomato Flavor', '', 3, 150, '388'),
(32, 'Peach Gummies', '', 3, 150, '277'),
(33, 'Grape Gummies', '', 3, 150, '65'),
(34, 'Ramune Soda', '', 4, 180, '278'),
(35, 'Melon Soda', '', 4, 200, '298'),
(36, 'Suntory Boss Coffee', '', 4, 180, '296'),
(37, 'Itoen Green Tea', '', 4, 150, '150'),
(38, 'UCC Coffee Can', '', 4, 180, '333'),
(39, 'Calpis Soda', '', 4, 200, '223'),
(40, 'Fanta Grape', '', 4, 180, '130'),
(41, 'Asahi Juroku-cha Tea', '', 4, 180, '93'),
(42, 'Sapporo Ichiban Ramen', '', 5, 300, '478'),
(43, 'Nissin Cup Noodles', '', 5, 200, '275'),
(44, 'TestProduct', 'no_image', 1, 33, '44'),
(45, 'Esmee\'s Chocolate', 'no_image', 1, 100, '1'),
(46, 'Mael Chocolate', 'no_image', 3, 200, '10'),
(47, 'Gabin Wiener', 'no_image', 3, 3000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int(10) NOT NULL,
  `session_token` varchar(200) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `host_name` varchar(200) NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `session_token`, `user_id`, `host_name`, `end_time`) VALUES
(23, '3398bdfa6eadea20d43410f7d8bcd4ca56d2fc597a6737f8949ce9e99c8e5041', 10, 'elitebook', '2025-09-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_is_admin`) VALUES
(0, 'Alice', 'alice@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(1, 'Bob', 'bob@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(2, 'Charlie', 'charlie@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(3, 'Diana', 'diana@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(4, 'Ethan', 'ethan@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(5, 'Fiona', 'fiona@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(6, 'George', 'george@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(7, 'Hannah', 'hannah@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(8, 'Ivan', 'ivan@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(9, 'luke', 'luke@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(10, 'admin', 'user@test.email', '$2y$10$YhhrrODvwaMGamUyODfZNOG5zaCxm3syvjCirxA3UULxE2rU/d7s.', 1),
(12, 'Mael', 'mael@gmail.com', '$2y$10$Rt0iLQNkPkT8laUoat5ODOhIP9a7iaKdS0PZHKl4DCMv9wx6IMTyi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_country` varchar(200) NOT NULL,
  `address_city` varchar(200) NOT NULL,
  `address_street` varchar(200) NOT NULL,
  `address_house_number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`address_id`, `user_id`, `address_country`, `address_city`, `address_street`, `address_house_number`) VALUES
(1, 9, 'France', 'Toulouse', 'Rue du Capitole', '328'),
(2, 10, 'Netherlands', 'Amsterdam', 'Fuck you street', '420'),
(6, 12, 'France', 'Lyon', 'Grande Rue de la Guillotiere', '26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_rows`
--
ALTER TABLE `order_rows`
  ADD PRIMARY KEY (`order_row_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`order_status_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `order_rows`
--
ALTER TABLE `order_rows`
  MODIFY `order_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
