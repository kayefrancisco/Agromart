-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 04:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marker`
--

INSERT INTO `marker` (`Loc_Id`, `unique_id`, `LocName`, `LocDescription`, `Lat`, `Lng`, `date_added`) VALUES
(28, 'f54de6', 'Pun', 'yete', '15.69919 ', '120.383205', '2023-05-09 15:19:38');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `sender_message_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `receiver_message_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marker`
--
ALTER TABLE `marker`
  ADD PRIMARY KEY (`Loc_Id`),
  ADD KEY `markerTOuser` (`unique_id`);

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
-- AUTO_INCREMENT for table `marker`
--
ALTER TABLE `marker`
  MODIFY `Loc_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
