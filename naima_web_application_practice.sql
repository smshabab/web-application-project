-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 08:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
(3, 'Beef', 1500, 'Beef Steak ', 'Main', 'GVR-HanksKobe.jpg'),
(4, 'Strawberry Ice Cream', 300, 'Strawberry Ice Cream Description', 'Desert', 'http___cdn.cnn.com_cnnnext_dam_assets_171005130657-cambodia-cuisine-fine-dining-wat-damnak-purple-dragon-fruit-passion-and-vanilla-sorbet-meringue-and-curd-1.jpg'),
(9, 'Blue', 200, 'Blue Lemonade Cocktail', 'Drinks', 'blue_lemonade.webp'),
(10, 'Gyoza', 200, 'Description', 'Starter', 'gyoza.webp'),
(11, 'Wonthon', 200, 'Wonthon Description', 'Starter', 'maxresdefault.jpg'),
(12, 'Red-Snapper-With-Coconut-Clam', 1700, 'In this beautiful fish recipe, the fennel seeds turn into an aromatic, crunchy crust on the skin.', 'Main Course', 'Red-Snapper-With-Coconut-Clam.webp'),
(13, 'Goat-cheese-leek-and-potato', 600, 'Goat-cheese-leek-and-potato-galette-with-pistachio-crust.Adding ground pistachios creates a substantial dough that complements the leeks for these galettes.', 'Starter', 'goat-cheese-leek-and-potato-galette-with-pistachio-crust-101316.webp'),
(14, 'Apple-Cider-and-Mustard-Braised-Chicken-with-Apples-and-Kale', 1000, 'For this dish, the chicken is rubbed in mustard, cooked in cider, and served with tender apple slices and curly kale.', 'Main Course', 'Apple-Cider-and-Mustard-Braised-Chicken-with-Apples-and-Kale-04112016.webp'),
(15, 'Frogmore Stew', 1400, 'This classic dish is packed with shrimp, scallops, potatoes, corn, and more.', 'Main Course', 'frogmore-stew-recipe-061720.webp'),
(16, 'Cauliflower Bolognese', 600, 'Cauliflower and mushrooms provide richness and toothiness that do justice to the meaty original', 'Starter', 'cauliflower-bolognese-recipe-BA-021320.webp'),
(17, 'Creamy Tomato Pasta', 500, 'Adding cream cheese to tomato sauce gives the dish a creamy tang that is just delicious.', 'Starter', 'creamy-tomato-pasta-481963-Hero-5b6afcf6c9e77c0050e73162.jpg'),
(19, 'Italian-Skillet-Chicken', 1200, 'Italian-Skillet-Chicken-with-Tomatoes-and-Mushrooms', 'Main Course', 'Italian-Skillet-Chicken-Recipe-with-Tomatoes-and-Mushrooms-The-Mediterranean-Dish-2.jpg'),
(20, 'Baked Parmesan Carrot Fries', 250, 'Crunchy cheesy Baked Parmesan Carrot Fries served with a spicy, creamy mayo dip.', 'Starter', 'Carrot-fries-tall1-.jpg'),
(21, 'Fudge Ice-cream', 250, 'Get your ice cream, cookies and cake in one with this decadent fudge-filled treat.', 'Desert', '7c1096c7-bfd0-4806-a794-1d3001fe0063.jpg'),
(22, 'Lemon Tart', 500, 'Sinful, rich and creamy, this recipe is the perfect finish to a meal', 'Desert', 'lemon-tart-625_625x350_61443595187.webp'),
(23, 'Tiramisu', 350, 'Top it off with cream, sprinkle with bitter chocolate, cocoa powder and voila', 'Desert', 'tiramisu-625_625x350_41443596307.webp'),
(24, 'French Vanilla Custurd', 300, 'A classic French Crème Brûlée with a silky smooth rich custard and crunchy', 'Desert', 'Creme-Brulee_8-SQ.webp'),
(25, 'Mangomisu', 280, 'Recipe may contain gluten, peanuts, tree nuts, milk and sesame.', 'Desert', 'mangomisu-77773-1.jpg'),
(26, 'Fried Rice', 600, 'Chicken fried rice with vegetables', 'Main Course', 'chicken-fried-rice-horizontal-1545488885.png'),
(27, 'Orange Cocktail', 150, 'It’s sweet, creamy, fruity, and just purely addictive', 'Drinks', 'photo-1587223962930-cb7f31384c19.jpg'),
(28, 'Cola', 60, 'cola in glass with clear ice cubes', 'Drinks', 'cola-in-glass-with-clear-ice-cubes-isolated-on-black-background-free-photo.jpg'),
(29, 'Affogato', 100, 'Simply combine the 2 best of Italian, which is espresso and Vanilla Gelato.', 'Drinks', 'IMG_0999.jpg'),
(30, 'Latte', 200, 'Two-thirds of it is steamed milk, poured over a shot of espresso and topped with a layer of milk foam.', 'Drinks', '59806597.webp'),
(31, 'Black Coffee', 90, 'Black coffee with cinnamon', 'Drinks', 'black-coffee-cinnamon-1.jpg');

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
(1, 2, '[{\"serial\":11,\"name\":\"Wonthon\",\"price\":200,\"image\":\"maxresdefault.jpg\",\"count\":1},{\"serial\":10,\"name\":\"Gyoza\",\"price\":200,\"image\":\"gyoza.webp\",\"count\":1},{\"serial\":3,\"name\":\"Beef-Stake\",\"price\":1500,\"image\":\"GVR-HanksKobe.jpg\",\"count\":2},{\"serial\":4,\"name\":\"Strawberry-Ice-Cream\",\"price\":300,\"image\":\"http___cdn.cnn.com_cnnnext_dam_assets_171005130657-cambodia-cuisine-fine-dining-wat-damnak-purple-dragon-fruit-passion-and-vanilla-sorbet-meringue-and-curd-1.jpg\",\"count\":2},{\"serial\":9,\"name\":\"Blue\",\"price\":200,\"image\":\"blue_lemonade.webp\",\"count\":2}]'),
(2, 4, '[{\"serial\":20,\"name\":\"Baked-Parmesan-Carrot-Fries\",\"price\":250,\"image\":\"Carrot-fries-tall1-.jpg\",\"count\":1},{\"serial\":13,\"name\":\"Goat-cheese-leek-and-potato\",\"price\":600,\"image\":\"goat-cheese-leek-and-potato-galette-with-pistachio-crust-101316.webp\",\"count\":1},{\"serial\":14,\"name\":\"Apple-Cider-and-Mustard-Braised-Chicken-with-Apples-and-Kale\",\"price\":1000,\"image\":\"Apple-Cider-and-Mustard-Braised-Chicken-with-Apples-and-Kale-04112016.webp\",\"count\":1},{\"serial\":31,\"name\":\"Black-Coffee\",\"price\":90,\"image\":\"black-coffee-cinnamon-1.jpg\",\"count\":1}]');

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
(2, 'naimabintehossain', 'naima@gmail.com', 'pass1234', 'admin'),
(4, 'samiafariba', 'samia@gmail.com', '12345', NULL);

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
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_food`
--
ALTER TABLE `order_food`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
