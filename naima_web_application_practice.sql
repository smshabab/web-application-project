-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 01:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naima_web_application_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `serial` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`serial`, `name`, `price`, `description`, `type`, `image`) VALUES
(3, 'Beef Stake', 1500, 'Beef Stake Description', 'Main Course', 'GVR-HanksKobe.jpg'),
(4, 'Strawberry Ice Cream', 300, 'Strawberry Ice Cream Description', 'Desert', 'http___cdn.cnn.com_cnnnext_dam_assets_171005130657-cambodia-cuisine-fine-dining-wat-damnak-purple-dragon-fruit-passion-and-vanilla-sorbet-meringue-and-curd-1.jpg'),
(9, 'Blue', 200, 'Blue Lemonade Cocktail', 'Drinks', 'blue_lemonade.webp'),
(10, 'Gyoza', 200, 'Description', 'Starter', 'gyoza.webp'),
(11, 'Wonthon', 200, 'Wonthon Description', 'Starter', 'maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_food`
--

CREATE TABLE `order_food` (
  `serial` int(11) NOT NULL,
  `customer_serial` int(11) NOT NULL,
  `food_cart` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_food`
--

INSERT INTO `order_food` (`serial`, `customer_serial`, `food_cart`) VALUES
(1, 2, '[{\"serial\":11,\"name\":\"Wonthon\",\"price\":200,\"image\":\"maxresdefault.jpg\",\"count\":1},{\"serial\":10,\"name\":\"Gyoza\",\"price\":200,\"image\":\"gyoza.webp\",\"count\":1},{\"serial\":3,\"name\":\"Beef-Stake\",\"price\":1500,\"image\":\"GVR-HanksKobe.jpg\",\"count\":2},{\"serial\":4,\"name\":\"Strawberry-Ice-Cream\",\"price\":300,\"image\":\"http___cdn.cnn.com_cnnnext_dam_assets_171005130657-cambodia-cuisine-fine-dining-wat-damnak-purple-dragon-fruit-passion-and-vanilla-sorbet-meringue-and-curd-1.jpg\",\"count\":2},{\"serial\":9,\"name\":\"Blue\",\"price\":200,\"image\":\"blue_lemonade.webp\",\"count\":2}]');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `serial` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`serial`, `username`, `email`, `password`, `user_type`) VALUES
(2, 'naimabintehossain', 'naima@gmail.com', 'pass1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `order_food`
--
ALTER TABLE `order_food`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_food`
--
ALTER TABLE `order_food`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
