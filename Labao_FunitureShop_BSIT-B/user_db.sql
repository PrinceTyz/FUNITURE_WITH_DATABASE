-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 20, 2023 at 05:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(1, 'prince1', 9213312323, 'salangan', 'COD'),
(2, 'safdsfsad', 9213123423, 'salangan', 'COD'),
(3, 'prince louie labao', 9612774311, 'salangan', 'COD'),
(4, 'john michael sizon', 9612774311, 'salangan', 'COD'),
(5, 'prince louie labao', 9612774322, 'salangan', 'COD'),
(6, 'john louie viola', 9612774333, 'sta rita bata', 'COD'),
(7, 'prince louie labao', 9612774311, 'salangan', 'COD'),
(8, 'prince louie labao', 9612774311, 'salangan', 'COD'),
(9, 'prince louie labao', 9234213432, 'SMB salangan', 'COD'),
(10, 'prince louie labao', 9612774311, 'Salangan SMB', 'COD'),
(11, 'prince louie labao', 9612323430, 'salangan smb', 'COD'),
(12, 'prince sdfsadf', 9612323423, 'salangan smb', 'COD'),
(13, 'princelouie', 9312312312, 'Salangan', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(10, 'prince ', 'harley_labao24@yahoo.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(11, 'prince louie labao', 'princelouielabao@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(12, 'prince louie', 'princelouie@gmail.com', 'efe6398127928f1b2e9ef3207fb82663', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(3, 'Bag 2', 2500, 1),
(4, 'Bag 1', 1500, 1),
(4, 'Bag 2', 2500, 1),
(4, 'Bag 3', 2999, 1),
(5, 'Bag 2', 2500, 1),
(5, 'Bag 3', 2999, 1),
(5, 'Bag 1', 1500, 1),
(6, 'Bag 1', 1500, 4),
(6, 'Bag 3', 2999, 3),
(7, 'Bag 2', 2500, 1),
(7, 'Bag 1', 1500, 1),
(7, 'Bag 3', 2999, 1),
(8, 'Bag 3', 2999, 1),
(8, 'Bag 1', 1500, 1),
(8, 'Bag 2', 2500, 1),
(8, 'Bag 4', 5000, 1),
(8, 'Bag 5', 2999, 1),
(8, 'Bag 6', 3500, 1),
(9, 'Sofa1', 1500, 1),
(9, 'Sofa2', 2500, 1),
(9, 'Sofa3', 3500, 1),
(9, 'Bed1', 5000, 1),
(9, 'Bed2', 3400, 1),
(9, 'Bed3', 4100, 1),
(9, 'Armchair1', 2100, 1),
(9, 'Dining table1', 3500, 1),
(9, 'Dining table2', 7000, 1),
(9, 'Dining table3', 6000, 1),
(10, 'Sofa1', 1500, 1),
(10, 'Sofa2', 2500, 1),
(11, 'Dining table2', 7000, 1),
(11, 'Sofa3', 3500, 1),
(12, 'Sofa3', 3500, 1),
(13, 'Sofa1', 1500, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
