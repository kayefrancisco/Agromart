-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 05:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agromart`
--

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `crops` text NOT NULL,
  `types` text NOT NULL,
  `plant_date` date NOT NULL,
  `harvest_date` date NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `crops`, `types`, `plant_date`, `harvest_date`, `lat`, `lng`) VALUES
(169, '1', 'aa', '2023-06-28', '2023-07-20', '15.751282735414474', '120.39127582672897'),
(170, '1', '', '2023-07-05', '2023-06-28', '15.745417414254558', '120.39316413138022'),
(171, '1', '', '2023-06-27', '2023-07-19', '15.748391401073873', '120.38767088148569'),
(172, '13', '', '2023-07-11', '2023-07-05', '15.749539896120234', '120.38861179307266'),
(173, '4', '', '2023-07-14', '2023-07-05', '15.689563831268595', '120.43976917862894'),
(174, '1', '', '2023-07-05', '2023-07-19', '15.709111214966667', '120.35967443604025'),
(175, '1', '', '2023-07-05', '2023-07-19', '15.709111214966667', '120.35967443604025'),
(176, '1', '', '2023-07-05', '2023-07-19', '15.709111214966667', '120.35967443604025'),
(177, '11', '', '2023-06-28', '2023-07-03', '15.711861064076633', '120.35999366082252'),
(178, '1', 'sss', '2023-07-12', '2023-06-29', '15.682126634301698', '120.3469003736973'),
(179, '6', '', '2023-07-06', '2023-06-28', '15.700844671164003', '120.3498608618975'),
(180, '1', 'jasmin', '2023-07-24', '2023-09-18', '15.678941000552987', '120.33409953117372'),
(181, '2', 'sweetcorn', '2023-07-04', '2023-07-04', '15.679601450094202', '120.33439993858339'),
(182, '12', 'black coffee', '2023-07-05', '2023-06-28', '15.678570384451035', '120.33393725752833');

-- --------------------------------------------------------

--
-- Table structure for table `marker`
--

CREATE TABLE `marker` (
  `Loc_Id` int(10) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `LocName` varchar(255) NOT NULL,
  `LocDescription` varchar(255) NOT NULL,
  `Lat` varchar(255) NOT NULL,
  `Lng` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marker`
--

INSERT INTO `marker` (`Loc_Id`, `unique_id`, `LocName`, `LocDescription`, `Lat`, `Lng`, `date_added`) VALUES
(28, 'f54de6', 'Pun', 'yete', '15.69919 ', '120.383205', '2023-05-09 15:19:38'),
(29, '900a38', 'try', 'try eeee', '15.727311', '120.40947', '2023-06-30 12:25:30'),
(30, '900a38', 'arjay', 'try eeee', '15.727642', '120.40947', '2023-06-30 12:27:06'),
(31, '900a38', 'arjay', 'try eeee', '15.727642', '120.40947', '2023-06-30 12:34:57'),
(32, '900a38', '', '', '', '', '2023-07-10 22:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `mcrops`
--

CREATE TABLE `mcrops` (
  `id` int(11) NOT NULL,
  `Crops` text NOT NULL,
  `hex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcrops`
--

INSERT INTO `mcrops` (`id`, `Crops`, `hex`) VALUES
(1, 'Rice', '#008000'),
(2, 'Corn', '#DFFF00'),
(3, 'Coconut', '#454B1B'),
(4, 'Mango', '#AAFF00'),
(5, 'Sugarcane', '#5F9EA0'),
(6, 'Pineapple', '#E4D00A'),
(7, 'Cassava', '#7FFFD4'),
(8, 'Rubber', '#AFE1AF'),
(9, 'Sweet Potato', '#0BDA51'),
(10, 'Onion', '#8A9A5B'),
(11, 'Eggplant', '#7F00FF'),
(12, 'Coffee', '#964B00'),
(13, 'Tobocco', '#808080'),
(14, 'Abaca', '#C4B454'),
(15, 'Tomato', '#EE4B2B'),
(16, 'Potato', '#7C3030'),
(17, 'Ampalaya', '#40826D'),
(18, 'Cabbage', '#C4B454'),
(19, 'Calamansi', '#DFFF00'),
(20, 'Mongo', '#355E3B'),
(21, 'Cacao', ' #6b5848'),
(22, 'Banana', '#ffe135');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_stocks` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `unique_id`, `p_title`, `p_image`, `p_description`, `p_price`, `p_stocks`, `p_address`, `p_category`, `date_added`) VALUES
(34, '900a38', 'Rice', '1684972258NFA-RICE.jpg', 'NFA Rice', '25 per kilo', '100 socks', 'Bamban, San Clemente, Tarlac', 'CropProduction', '2023-05-25'),
(36, '900a38', 'Granger', '1684972299luya.jpg', 'Native Granger', '15', '1 bags', 'Sitio Dueg, Brgy Maasin, San Clemente, Tarlac', 'CropProduction', '2023-05-25'),
(37, 'e8c30a', 'chicken', '1684972356Chicken.jpg', 'Magnolia Chicken', '250', '50', 'Balloc, San Clemente, Tarlac', 'Livestock', '2023-05-25'),
(38, '900a38', 'UREA', '1684972958UREA.jpg', '50 kilo per socks', '1250', '100 socks', 'Bamban, San Clemente, Tarlac', 'Fertilizer', '2023-05-25'),
(39, '900a38', 'Organic Fertilizer', '1684973089Vegetable.jpg', 'Goods for plants like tomato, eggplants and others', '150', '50 piece', 'Bamban, San Clemente, Tarlac', 'Fertilizer', '2023-05-25'),
(40, 'e8c30a', 'Fresh Banana', '1684973291banana_banner.jpg', 'Fresh Banana (pongkan)', '30 per kilo', '30 KILO', 'Balloc, San Clemente, Tarlac', 'CropProduction', '2023-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT '2' COMMENT '1=admin, 2=user',
  `user_avtar` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `last_logout` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `unique_id`, `fname`, `lname`, `address`, `email`, `password`, `user_type`, `user_avtar`, `user_status`, `last_logout`, `date_added`) VALUES
(1, '1be614', 'bryan', 'Felix', 'camiling, tarlac', 'bryanfelix@gmail.com', 'bryan', '2', '6a446179.jfif', 'active', '', '2023-05-25'),
(2, '3f5533', 'admin', 'admin', 'Cabaluyan 2nd, Mangatarem, Pangasinan', 'admin@gmail.com', 'admin', '1', '096c3e6f.jpg', 'active', '', '2023-04-21'),
(3, '6620ea', 'user', 'user', 'camiling, tarlac', 'user@gmail.com', 'user', '2', 'a706a22c.jpg', 'active', '', '2023-04-21'),
(4, '900a38', 'Rolando', 'Goloya', 'Cabaluyan 2nd, Mangatarem, Pangasinan', 'goloys@gmail.com', '1111', '2', 'fdb43add.jpg', 'active', '', '2023-04-21'),
(5, 'e8c30a', 'kaye', 'santiago', 'camiling, tarlac', 'kaye@gmail.com', '1111', '2', 'cfb4ef78.jpg', 'active', '', '2023-04-21'),
(6, 'f54de6', 'test', 'user', 'Mangatarem, Pangasinan', 'testuser@gmail.com', '1111', '2', '7fce07fe.jpg', 'active', '', '2023-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `time` datetime(6) NOT NULL,
  `sender_message_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `receiver_message_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `message` varchar(500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marker`
--
ALTER TABLE `marker`
  ADD PRIMARY KEY (`Loc_Id`),
  ADD KEY `markerTOuser` (`unique_id`);

--
-- Indexes for table `mcrops`
--
ALTER TABLE `mcrops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserProduct` (`unique_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `marker`
--
ALTER TABLE `marker`
  MODIFY `Loc_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mcrops`
--
ALTER TABLE `mcrops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marker`
--
ALTER TABLE `marker`
  ADD CONSTRAINT `markerTOuser` FOREIGN KEY (`unique_id`) REFERENCES `user` (`unique_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `UserProduct` FOREIGN KEY (`unique_id`) REFERENCES `user` (`unique_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
