-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 12:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro-suit`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `regular_price` varchar(50) NOT NULL,
  `sale_price` varchar(50) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `image_link` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `regular_price`, `sale_price`, `sku`, `image_link`, `created_at`, `updated_at`) VALUES
(4, 'Apple new mac book 2017 March :P', '255', '587', 'product_582', 'http://localhost/pro-suit/public/img/product-2.jpg', '2022-03-09 22:25:21', '2022-03-09 16:55:21'),
(5, 'Apple new mac book 2016 March :P', '510', '115', 'product_414', 'http://localhost/pro-suit/public/img/product-5.jpg', '2022-03-09 22:25:21', '2022-03-09 16:55:21'),
(6, 'Apple new mac book 2012 March :P', '218', '354', 'product_616', 'http://localhost/pro-suit/public/img/product-4.jpg', '2022-03-09 22:25:21', '2022-03-09 16:55:21'),
(7, 'Apple new mac book 2014 March :P', '544', '983', 'product_576', 'http://localhost/pro-suit/public/img/product-1.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(8, 'Apple new mac book 2014 March :P', '386', '532', 'product_794', 'http://localhost/pro-suit/public/img/product-3.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(9, 'Apple new mac book 2018 March :P', '754', '348', 'product_264', 'http://localhost/pro-suit/public/img/product-4.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(10, 'Apple new mac book 2011 March :P', '841', '721', 'product_738', 'http://localhost/pro-suit/public/img/product-4.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(11, 'Apple new mac book 2011 March :P', '313', '216', 'product_498', 'http://localhost/pro-suit/public/img/product-3.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(12, 'Apple new mac book 2014 March :P', '795', '602', 'product_205', 'http://localhost/pro-suit/public/img/product-4.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(13, 'Apple new mac book 2014 March :P', '928', '854', 'product_268', 'http://localhost/pro-suit/public/img/product-2.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(14, 'Apple new mac book 2016 March :P', '125', '724', 'product_825', 'http://localhost/pro-suit/public/img/product-6.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(15, 'Apple new mac book 2016 March :P', '447', '755', 'product_347', 'http://localhost/pro-suit/public/img/product-4.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(16, 'Apple new mac book 2019 March :P', '498', '872', 'product_696', 'http://localhost/pro-suit/public/img/product-6.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(17, 'Apple new mac book 2018 March :P', '425', '626', 'product_782', 'http://localhost/pro-suit/public/img/product-1.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(18, 'Apple new mac book 2015 March :P', '187', '549', 'product_260', 'http://localhost/pro-suit/public/img/product-6.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(19, 'Apple new mac book 2014 March :P', '258', '791', 'product_810', 'http://localhost/pro-suit/public/img/product-1.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(20, 'Apple new mac book 2011 March :P', '490', '163', 'product_156', 'http://localhost/pro-suit/public/img/product-2.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(21, 'Apple new mac book 2017 March :P', '219', '420', 'product_243', 'http://localhost/pro-suit/public/img/product-1.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(22, 'Apple new mac book 2014 March :P', '941', '839', 'product_756', 'http://localhost/pro-suit/public/img/product-6.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(23, 'Apple new mac book 2012 March :P', '187', '637', 'product_113', 'http://localhost/pro-suit/public/img/product-5.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(24, 'Apple new mac book 2016 March :P', '597', '992', 'product_556', 'http://localhost/pro-suit/public/img/product-4.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(25, 'Apple new mac book 2016 March :P', '411', '890', 'product_961', 'http://localhost/pro-suit/public/img/product-3.jpg', '2022-03-09 22:25:22', '2022-03-09 16:55:22'),
(26, 'Apple new mac book 2014 March :P', '820', '171', 'product_818', 'http://localhost/pro-suit/public/img/product-6.jpg', '2022-03-09 22:25:23', '2022-03-09 16:55:23'),
(27, 'Apple new mac book 2014 March :P', '834', '376', 'product_844', 'http://localhost/pro-suit/public/img/product-5.jpg', '2022-03-09 22:25:23', '2022-03-09 16:55:23'),
(28, 'Apple new mac book 2014 March :P', '922', '873', 'product_730', 'http://localhost/pro-suit/public/img/product-1.jpg', '2022-03-09 22:25:23', '2022-03-09 16:55:23');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
