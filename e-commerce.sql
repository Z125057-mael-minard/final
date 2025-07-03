-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 09:16 AM
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
  `order_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `user_id`, `order_country`, `order_city`, `order_street`, `order_housenr`, `order_name`) VALUES
(1, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0'),
(2, '0000-00-00 00:00:00', 1, '', '0', '0', '0', '0'),
(3, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0'),
(4, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0'),
(5, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0'),
(6, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0'),
(7, '0000-00-00 00:00:00', 7, '', '0', '0', '0', '0'),
(8, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0'),
(9, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0'),
(10, '0000-00-00 00:00:00', 1, '', '0', '0', '0', '0'),
(11, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0'),
(12, '0000-00-00 00:00:00', 7, '', '0', '0', '0', '0'),
(13, '0000-00-00 00:00:00', 9, '', '0', '0', '0', '0'),
(14, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0'),
(15, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0'),
(16, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0'),
(17, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0'),
(18, '0000-00-00 00:00:00', 7, '', '0', '0', '0', '0'),
(19, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0'),
(20, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0'),
(21, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0'),
(22, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0'),
(23, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0'),
(24, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0'),
(25, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0'),
(26, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0'),
(27, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0'),
(28, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0'),
(29, '0000-00-00 00:00:00', 3, '', '0', '0', '0', '0'),
(30, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0'),
(31, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0'),
(32, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0'),
(33, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0'),
(34, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0'),
(35, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0'),
(36, '0000-00-00 00:00:00', 5, '', '0', '0', '0', '0'),
(37, '0000-00-00 00:00:00', 9, '', '0', '0', '0', '0'),
(38, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0'),
(39, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0'),
(40, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0'),
(41, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0'),
(42, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0'),
(43, '0000-00-00 00:00:00', 9, '', '0', '0', '0', '0'),
(44, '0000-00-00 00:00:00', 8, '', '0', '0', '0', '0'),
(45, '0000-00-00 00:00:00', 2, '', '0', '0', '0', '0'),
(46, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0'),
(47, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0'),
(48, '0000-00-00 00:00:00', 4, '', '0', '0', '0', '0'),
(49, '0000-00-00 00:00:00', 0, '', '0', '0', '0', '0'),
(50, '0000-00-00 00:00:00', 6, '', '0', '0', '0', '0'),
(51, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(52, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(103, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(104, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(105, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(106, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(107, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(108, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(109, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(110, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(111, '2025-06-30 00:00:00', 0, 'Netherlands', 'Breda', 'Kesterenlaa', '208B', 'MaKe Station'),
(112, '2025-06-30 11:09:55', 0, 'France', 'Lion', 'GabenStreet', '66', 'Mael'),
(113, '2025-06-30 11:11:14', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael'),
(114, '2025-06-30 11:11:38', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael'),
(115, '2025-06-30 11:11:53', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael'),
(116, '2025-06-30 11:12:09', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael'),
(117, '2025-06-30 11:13:10', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael'),
(118, '2025-06-30 11:13:30', 0, 'France', 'Lion', 'LionStreet', '66', 'Mael'),
(119, '2025-06-30 14:37:43', 0, 'Franch', 'Paris', 'ParisStreet', '122', 'Gaben'),
(120, '2025-06-30 14:39:14', 0, 'Franch', 'Paris', 'ParisStreet', '122', 'Gaben'),
(121, '2025-07-01 15:31:50', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(122, '2025-07-01 15:34:13', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(123, '2025-07-01 15:34:25', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(124, '2025-07-01 15:34:31', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(125, '2025-07-01 15:36:42', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(126, '2025-07-01 15:37:03', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(127, '2025-07-01 15:40:10', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(128, '2025-07-01 15:40:15', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(129, '2025-07-01 15:40:38', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(130, '2025-07-01 15:41:02', 0, 'Netherlands', 'Zwolle', 'Ministerlaa', '208B', 'LCM Thie'),
(131, '2025-07-01 15:43:26', 0, 'Netherlands', 'Zwolle', 'Ministerlaan', '208B', 'LCM Thie'),
(132, '2025-07-01 15:43:42', 0, 'Netherlands', 'Zwolle', 'Ministerlaan', '208B', 'LCM Thie'),
(133, '2025-07-01 15:43:53', 0, 'Netherlands', 'Zwolle', 'Ministerlaan', '208B', 'LCM Thie'),
(134, '2025-07-01 15:44:12', 0, 'Netherlands', 'Zwolle', 'Ministerlaan', '208B', 'LCM Thie');

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
(63, 134, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(34) NOT NULL DEFAULT 'no_name',
  `product_image_path` varchar(300) NOT NULL DEFAULT 'no_image',
  `category_id` int(10) NOT NULL DEFAULT 0,
  `product_price` varchar(9) NOT NULL DEFAULT '0',
  `product_stock` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image_path`, `category_id`, `product_price`, `product_stock`) VALUES
(1, 'Pocky Chocolaty', '', 1, '50', '200'),
(2, 'Pocky Strawberry', '', 1, '170', '238'),
(3, 'KitKat Matcha', '', 1, '350', '411'),
(4, 'KitKat Sakura', '', 1, '400', '357'),
(5, 'Black Thunder Chocolate Bar', '', 1, '150', '386'),
(6, 'Meiji Apollo Strawberry Chocolates', '', 1, '200', '241'),
(7, 'Dars Chocolate', '', 1, '180', '491'),
(8, 'Koala\'s March Cookies', '', 1, '200', '132'),
(9, 'Glico Almond Chocolate', '', 1, '300', '98'),
(10, 'Meiji Macadamia Chocolate', '', 1, '350', '216'),
(11, 'Toppo Chocolate Sticks', '', 1, '200', '274'),
(12, 'Meiji Marble Chocolates', '', 1, '200', '479'),
(13, 'Meiji Kinoko no Yama', '', 1, '200', '283'),
(14, 'Takenoko no Sato', '', 1, '200', '11'),
(15, 'Chocoball Peanut', '', 1, '180', '367'),
(16, 'Shiroi Koibito Cookies', '', 2, '1200', '414'),
(17, 'Tokyo Banana', '', 2, '1500', '286'),
(18, 'Matcha Mochi', '', 2, '300', '125'),
(19, 'Daifuku Mochi', '', 2, '200', '442'),
(20, 'Yokan Sweet Bean Jelly', '', 2, '300', '322'),
(21, 'Sakuma Drops Candy', '', 2, '300', '429'),
(22, 'Konpeito Sugar Candy', '', 2, '300', '82'),
(23, 'Bourbon Alfort Cookies', '', 2, '200', '457'),
(24, 'Lotte Custard Cake', '', 2, '300', '201'),
(25, 'Calbee Shrimp Chips', '', 3, '150', '97'),
(26, 'Senbei Rice Crackers', '', 3, '200', '497'),
(27, 'Jagabee Potato Snacks', '', 3, '200', '150'),
(28, 'Wasabi Peas', '', 3, '200', '317'),
(29, 'Umeboshi Dried Plum Snacks', '', 3, '300', '310'),
(30, 'Koikeya Seaweed Chips', '', 3, '200', '148'),
(31, 'Pretz Tomato Flavor', '', 3, '150', '388'),
(32, 'Peach Gummies', '', 3, '150', '277'),
(33, 'Grape Gummies', '', 3, '150', '65'),
(34, 'Ramune Soda', '', 4, '180', '278'),
(35, 'Melon Soda', '', 4, '200', '298'),
(36, 'Suntory Boss Coffee', '', 4, '180', '296'),
(37, 'Itoen Green Tea', '', 4, '150', '150'),
(38, 'UCC Coffee Can', '', 4, '180', '333'),
(39, 'Calpis Soda', '', 4, '200', '223'),
(40, 'Fanta Grape', '', 4, '180', '130'),
(41, 'Asahi Juroku-cha Tea', '', 4, '180', '93'),
(42, 'Sapporo Ichiban Ramen', '', 5, '300', '478'),
(43, 'Nissin Cup Noodles', '', 5, '200', '275'),
(44, 'TestProduct', 'no_image', 1, '33', '44'),
(45, 'Esmee\'s Chocolate', 'no_image', 1, '100', '1'),
(46, 'Mael Chocolate', 'no_image', 3, '200', '10'),
(47, 'Gabin Wiener', 'no_image', 3, '3000', '1');

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
(7, 'faf6b9522d71d6007ca4b330bd75d8a605803da17ec9720016cf6cf7573ee2ee', 11, 'DESKTOP-SJBPESN', '2025-08-29 00:00:00');

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
(9, 'Julia', 'julia@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa0V2z2EMZG5pS9gT9uJvP0ZZGa', 0),
(11, 'admin', 'user@test.email', '$2y$10$9hjRFzAy2YlCz5a/SooYgeK3WtRfWXeIvXoJ9GJ9b..nk9g.qc5wq', 1);

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
  MODIFY `order_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `order_rows`
--
ALTER TABLE `order_rows`
  MODIFY `order_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
