-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 07, 2020 at 07:32 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(69) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('shivam garg', 'shivigarg010@gmail.com', 'isdcuydojsziupcz');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `item_id` varchar(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `price` bigint(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `price`) VALUES
('1', 'Fossil 4th Gen', 14000),
('2', 'Apple watch series 3', 23290),
('3', 'Fossil Sport 43', 10500),
('4', 'Galaxy watch LTE', 40000),
('5', 'Fitbit Versa 2', 21000),
('6', 'Huawei Watch GT 2 (46 mm)', 17000),
('7', 'Honor Magic Watch 2', 17000),
('8', 'Huami Amazfit GTR 47 mm', 11000),
('9', 'HYT Soonow Green Black 49mm', 9690000),
('10', 'Fossil unisex strap', 500),
('11', 'Apple white strap', 400),
('12', 'Apple watch strap funky', 350);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(69) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `city` varchar(86) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(600) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `phone`, `city`, `address`) VALUES
(1, 'shivam', 'shivigarg010@gmail.comn', 'Pqrstu10', '9910903140', 'DElhi', ''),
(12, 'md5', 'md5check404new@gmail.com', '041f11df15931311f6f3962be9228b20', '0991090314', 'Delhi', 'B125 GURU NANAK PURA'),
(13, 'md6', 'md5check404@gmail.com', '041f11df15931311f6f3962be9228b20', '0991090314', 'Delhi', 'B125 GURU NANAK PURA'),
(14, 'md7', 'md5check@gmail.com', '041f11df15931311f6f3962be9228b20', '0991090314', 'Delhi', 'B125 GURU NANAK PURA'),
(15, 'shivam garg', 'md5check44@gmail.com', '041f11df15931311f6f3962be9228b20', '0991090314', 'Delhi', 'B125 GURU NANAK PURA'),
(16, 'shivam garg', 'md5check445@gmail.com', '041f11df15931311f6f3962be9228b20', '0991090314', 'Delhi', 'B125 GURU NANAK PURA'),
(17, 'delete', 'md5chedekeck445@gmail.com', '041f11df15931311f6f3962be9228b20', '0991090314', 'Delhi', 'B125 GURU NANAK PURA .\"\' ); drop table feedback ;'),
(18, 'shivam garg', 'md5chedeleteck445@gmail.com', '041f11df15931311f6f3962be9228b20', '0991090314', 'Delhi', 'B125 GURU NANAK PURA.\"\' )\"; drop table feedback ;');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `item_id` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date&time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`item_id`, `user_id`, `status`, `date&time`) VALUES
('3', 7, 'Added to cart', '2020-05-30 02:18:04'),
('2', 6, 'Added to cart', '2020-05-30 20:44:46'),
('3', 6, 'Added to cart', '2020-05-30 20:44:49'),
('1', 6, 'Added to cart', '2020-05-30 21:03:33'),
('3', 2, 'Confirmed', '2020-05-31 02:57:46'),
('6', 4, 'Confirmed', '2020-05-31 19:04:32'),
('7', 4, 'Confirmed', '2020-05-31 19:04:35'),
('8', 4, 'Confirmed', '2020-05-31 19:04:38'),
('6', 2, 'Confirmed', '2020-05-31 19:44:49'),
('2', 2, 'Confirmed', '2020-05-31 19:46:21'),
('1', 2, 'Confirmed', '2020-05-31 19:47:13'),
('1', 8, 'Confirmed', '2020-06-07 00:19:52'),
('2', 8, 'Confirmed', '2020-06-07 00:19:54'),
('2', 15, 'Confirmed', '2020-06-07 01:49:21'),
('9', 15, 'Confirmed', '2020-06-07 01:49:33'),
('1', 15, 'Confirmed', '2020-06-07 01:49:36'),
('6', 16, 'Confirmed', '2020-06-08 00:52:05'),
('9', 16, 'Confirmed', '2020-06-08 00:52:07'),
('10', 16, 'Confirmed', '2020-06-08 00:52:10'),
('7', 16, 'Confirmed', '2020-06-08 00:59:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
