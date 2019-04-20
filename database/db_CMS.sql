-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 20, 2019 at 03:08 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Kids'),
(4, 'Gear'),
(5, 'Electronics'),
(6, 'Shoes'),
(7, 'Fanwear');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_brand` varchar(75) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_color` varchar(20) NOT NULL,
  `product_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_color`, `product_img`) VALUES
(1, 'Columbia Men\'s Plus Size Watertight II Shell Jacket', 'Colombia', '109.99', 'Red', 'Columbia_Watertight_II_Jacket.png'),
(2, 'Ripzone Men\'s Crow Bomber Jacket', 'Ripzone', '89.99', 'Black', 'Ripzone_Crow_Bomber.png'),
(3, 'Champion Men\'s Packable Jacket', 'Champion', '54.99', 'Blue', 'Champion_Packable_Jacket.png'),
(4, 'Nike Legend 2.0 Men\'s Short Sleeve Top', 'Nike', '22.50', 'Dark Grey', 'Nike_Legend_Short_Sleeve.png'),
(5, 'PUMA Men\'s Amplified Sweatpants', 'PUMA', '59.99', 'Black', 'PUMA_ Amplified_Sweatpants.png'),
(6, 'Columbia Women\'s Fast Trek Pants', 'Columbia', '19.99', 'Black', 'Columbia_Fast_Trek_Pants.png'),
(7, 'The North Face Women\'s Tekno Ridge Hoodie', 'The North Face', '159.99', 'Urban Navy', 'The_North_Face_Tekno_Ridge_Hoodie.png'),
(8, 'Ripzone Women\'s Venice Hooded Cardigan', 'Ripzone', '39.99', 'Grey', 'Ripzone_Venice_Hooded_Cardigan.png'),
(9, 'PUMA Women\'s Amplified Hoodie', 'PUMA', '64.99', 'Green', 'PUMA_Amplified_Hoodie.png'),
(10, 'Columbia Women\'s Montferland Down Parka', 'Colombia', '155.97', 'White', 'Columbia_Montferland_Down_Parka.png'),
(11, 'Columbia Girls\' Rain-Zilla Jacket', 'Colombia', '64.99', 'Pink', 'Columbia_Rain_Zilla_Jacket.png'),
(12, 'Stonz Kids\' Rain Boots', 'Stonz', '27.97', 'Yellow', 'Stonz_Rain_Boots.png'),
(13, 'Under Armour Boys\' Instinct Shorts', 'Under Armour', '29.99', 'Black', 'Under_Armour_Instinct_Shorts.png'),
(14, 'The North Face Girls\' Zipline Jacket', 'The North Face', '36.88', 'Blue', 'The_North_Face_Zipline_Jacket.png'),
(15, 'Columbia Boys\' Rain-Zilla Rain Jacket', 'Columbia', '31.88', 'Red', 'Columbia_Rain_Zilla_Rain_Jacket.png'),
(16, 'Diadora Orbita 27.5 Men\'s Mountain Bike 2019', 'Diadora', '329.99', 'Blue', 'Diadora_Orbita_Mountain_Bike.png'),
(17, 'Fitbit Alta HR Activity Tracker', 'Fitbit', '99.97', 'Black', 'Fitbit_Alta_HR_Activity_Tracker.png'),
(18, 'Gatorade Squeeze Bottle', 'Gatorade', '6.99', 'Green', 'Gatorade_Squeeze_Bottle.png'),
(19, 'HEAD Tornado Badminton Racquet', 'HEAD', '99.99', 'Multi', 'HEAD_Tornado_Badminton_Racquet.png'),
(20, 'Under Armour Undeniable 3.0 Medium Duffel Bag', 'Under Armour', '54.99', 'Black', 'Under_Armour_Undeniable_Medium_Duffel_Bag.png'),
(21, 'GoPro Karma Drone with HERO6 Camera Included', 'GoPro', '1,299.97', 'Black', 'GoPro_Drone.png'),
(22, 'Beats Solo3 Wireless Headphones', 'Beats', '329.99', 'Black', 'Beats_Solo3_Wireless_Headphones.png'),
(23, 'Apple Watch Series 4 GPS, 40mm Gold Aluminum with Pink Sport Band', 'Apple', '519.00', 'Pink', 'AppleWatch.png'),
(24, 'Fitbit Versa Smartwatch', 'Fitbit', '249.99', 'Grey', 'FitBit_SmartWatch.png'),
(25, 'Fitbit Charge 3 Charging Cable', 'Fitbit', '24.95', 'Black', 'Fitbit_Charge3_Charging_Cable.png'),
(26, 'Vans Men\'s Ultrarange Rapidweld Shoes', 'Vans', '109.99', 'Black', 'Vans_Mens_Ultrarange_Rapidwel.png'),
(27, 'Converse Women\'s CT Ox Shoes', 'Converse', '64.99', 'White', 'Converse_Womens_CT_Ox.png'),
(28, 'Under Armour Men\'s Curry 6 \"All-Star\" Basketball Shoes', 'Under Armour', '159.99', 'Green', 'Under_Armour_Mens_Curry_6_Basketball.png'),
(29, 'adidas Women\'s Ultraboost 19 Running Shoes', 'adidas', '250.00', 'Indigo', 'adidas_Womens_Ultraboost_19.png'),
(30, 'New Balance Men\'s Fresh Foam Lazr V2 Running Shoes', 'New Balance', '129.99', 'Black', 'New_Balance_Mens_Fresh_Foam_Lazr_V2.png'),
(31, 'Pittsburgh Penguins adidas Sidney Crosby Authentic Pro Stadium Series Hockey Jersey', 'Pittsburgh Penguins', '259.99', 'Black', 'Penguins_adidas_Crosby_Pro_Stadium_Series.png'),
(32, 'Youth Edmonton Oilers Connor McDavid Replica Away', 'Edmonton Oilers', '129.99', 'White', 'Edmonton_Oilers_McDavid_Replica_Away.png'),
(33, 'Youth Vancouver Canucks Pettersson Replica', 'Vancouver Canucks', '129.99', 'Blue', 'Vancouver_Canucks_Pettersson_Replica.png'),
(34, 'Youth Toronto Maple Leafs Auston Matthews Jersey', 'Toronto Maple Leafs', '129.99', 'White', 'Toronto_Maple_Leafs_Matthews.png'),
(35, 'Toronto Raptors Men\'s Mitchell and Ness Hardwood Classics Carter Jersey', 'Toronto Raptors', '139.99', 'Purple', 'Toronto_Raptors_Hardwood_Classics_Carter.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_category`
--

CREATE TABLE `tbl_products_category` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products_category`
--

INSERT INTO `tbl_products_category` (`id`, `product_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 14, 3),
(15, 15, 3),
(16, 16, 4),
(17, 17, 4),
(18, 18, 4),
(19, 19, 4),
(20, 20, 4),
(21, 21, 5),
(22, 22, 5),
(23, 23, 5),
(24, 24, 5),
(25, 25, 5),
(26, 26, 6),
(27, 27, 6),
(28, 28, 6),
(29, 29, 6),
(30, 30, 6),
(31, 31, 7),
(32, 32, 7),
(33, 33, 7),
(34, 34, 7),
(35, 35, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(20) NOT NULL,
  `user_fname` varchar(30) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_access` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_access`) VALUES
(1, 'admin', 'admin', '123', 'admin@admin.com', 1),
(2, 'Jaclyn', 'Jaclyn', 'jrf', 'jaclynflomen@hotmail.com', 2),
(3, 'Ethan', 'Ethan', 'mara', 'ethan@mara.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_products_category`
--
ALTER TABLE `tbl_products_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_products_category`
--
ALTER TABLE `tbl_products_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
