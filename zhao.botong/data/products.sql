-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 06:28 AM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botong_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, 'Hoegaarden', 3.99, 'liquor', '2022-07-20 06:02:25', '2022-07-20 06:02:25', 'hoegaarden_1.jpg', 'hoegaarden.jpg'),
(2, '1664', 3.99, 'liquor', '2022-07-20 06:03:55', '2022-07-20 06:03:55', '1664_1.jpg', '1664.jpg'),
(3, 'Fruli', 3.99, 'liquor', '2022-07-20 06:04:39', '2022-07-20 06:04:39', 'fruli_1.jpg', 'fruli.jpg'),
(4, 'Corona', 3.99, 'liquor', '2022-07-20 06:06:20', '2022-07-20 06:06:20', 'corona_1.jpg', 'corona.jpg'),
(5, 'Jagermeister', 3.99, 'liquor', '2022-07-20 06:07:00', '2022-07-20 06:07:00', 'jagermeister_1.jpg', 'jagermeister.jpg'),
(6, 'Jack Daniels', 3.99, 'liquor', '2022-07-20 06:08:52', '2022-07-20 06:08:52', 'jack_1.jpg', 'jack.jpg'),
(7, 'Coca-Cola', 3.99, 'beverage', '2022-07-20 06:10:53', '2022-07-20 06:10:53', 'cola_1.jpg', 'cola.jpg'),
(8, 'Sprite', 3.99, 'beverage', '2022-07-20 06:11:34', '2022-07-20 06:11:34', 'sprite_1.jpg', 'sprite.jpg'),
(9, 'Fender', 3.99, 'beverage', '2022-07-20 06:12:13', '2022-07-20 06:12:13', 'fender_1.jpg', 'fender.jpg'),
(10, 'Perrier', 3.99, 'beverage', '2022-07-20 06:12:57', '2022-07-20 06:12:57', 'perrier_1.jpg', 'perrier.jpg'),
(11, 'Red Bull', 3.99, 'beverage', '2022-07-20 06:13:46', '2022-07-20 06:13:46', 'bull_1.jpg', 'bull.jpg'),
(12, 'Juice', 3.99, 'beverage', '2022-07-20 06:14:24', '2022-07-20 06:14:24', 'juice_1.jpg', 'juice.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
