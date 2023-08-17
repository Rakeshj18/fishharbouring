-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 10:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `bno` int(100) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `city` text NOT NULL,
  `state` blob NOT NULL,
  `zipcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`bno`, `fullname`, `email`, `address`, `phone`, `city`, `state`, `zipcode`) VALUES
(1, 'Rakesh', 'rakeshjrakeshj4@gmail.com', '#42, Raghvendra Nagar Srirampura Near Naidu Store', 2147483647, 'Mysuru', 0x494e, 570014),
(3, 'ra', '', '', 0, '', '', 0),
(5, 'nera', 'nehamb@gmail.com', '#42, Raghvendra Nagar Srirampura Near Naidu Store', 2147483647, 'Mysuru', 0x494e, 570014),
(6, 'rm', 'rm@gmail.com', '#43,xxx', 2147483647, 'mandya', 0x74616d696c206e616475, 678953),
(7, 'Rakesh', 'rakeshjrakeshj4@gmail.com', '#42, Raghvendra Nagar Srirampura Near Naidu Store', 2147483647, 'Mysuru', 0x494e, 570014),
(8, 'Neara', 'neara@gmail.com', '#42, Raghvendra Nagar Srirampura Near Naidu Store', 2147483647, 'Mysuru', 0x61646d696e706167652e706870, 7800),
(9, 'aa', 'abc@gmail.com', 'mysuru', 1234567891, 'Mysuru', 0x333132343531312e77656270, 670);

-- --------------------------------------------------------

--
-- Table structure for table `crab`
--

CREATE TABLE `crab` (
  `cno` int(20) NOT NULL,
  `ctype` text NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `fno` int(10) NOT NULL,
  `fishtype` text NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`fno`, `fishtype`, `price`, `quantity`) VALUES
(1, 'Cod fish', 112, '3'),
(2, 'katla fish', 320, '3'),
(3, '', 500, '4'),
(4, 'snake head fish', 500, '4'),
(5, 'katla fish', 320, '2');

-- --------------------------------------------------------

--
-- Table structure for table `my cart`
--

CREATE TABLE `my cart` (
  `slno` int(5) NOT NULL,
  `itemname` char(20) NOT NULL,
  `itemprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(2) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`) VALUES
(1, 'rakeshjrakeshj4@gmai', 'eab71244afb687f16d8c'),
(4, '4mh20is066@gmail.com', '81dc9bdb52d04dc20036'),
(11, 'baby@gmail.com', '827ccb0eea8a706c4c34'),
(12, 'nehamb2601@gmail.com', 'eab71244afb687f16d8c'),
(13, 'a@gmail.com', 'eab71244afb687f16d8c'),
(14, 'rak@gmail.com', '827ccb0eea8a706c4c34'),
(15, 'nmb@gmail.com', '3e3cef7748db3f689474'),
(16, 'rrn@gmail.com', '67ffdce18398d07ed1e9b7eea6981659');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `fno` int(20) NOT NULL,
  `fishspecies` char(50) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `crab`
--
ALTER TABLE `crab`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `my cart`
--
ALTER TABLE `my cart`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`fno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `bno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `fno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `my cart`
--
ALTER TABLE `my cart`
  MODIFY `slno` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `fno` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
