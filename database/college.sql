-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 10:32 PM
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
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE `get_in_touch` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `phone_num` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_detail`
--

CREATE TABLE `medical_detail` (
  `id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `health_problem` varchar(250) NOT NULL,
  `injury` int(10) NOT NULL,
  `smoke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_detail`
--

INSERT INTO `medical_detail` (`id`, `personal_detail_id`, `height`, `weight`, `health_problem`, `injury`, `smoke`) VALUES
(5, 9, 180, 67, 'brainlessness', 6, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `personal_detail`
--

CREATE TABLE `personal_detail` (
  `id` int(11) NOT NULL,
  `mr_ms_mrs` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(100) NOT NULL,
  `contact_number` mediumint(50) NOT NULL,
  `emergency_number` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `membership_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_detail`
--

INSERT INTO `personal_detail` (`id`, `mr_ms_mrs`, `first_name`, `second_name`, `gender`, `age`, `contact_number`, `emergency_number`, `email`, `address`, `membership_type`) VALUES
(9, 'mr', 'mallika', 'm', 'Male', 45, 123, 321, 'asb@gmail.co', 'sdfgdfg fdgdfdg', 'bronze');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ser_no` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ser_no`, `user`, `password`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_detail`
--
ALTER TABLE `medical_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_detail_id` (`personal_detail_id`);

--
-- Indexes for table `personal_detail`
--
ALTER TABLE `personal_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_detail`
--
ALTER TABLE `medical_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_detail`
--
ALTER TABLE `personal_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medical_detail`
--
ALTER TABLE `medical_detail`
  ADD CONSTRAINT `medical_detail_ibfk_1` FOREIGN KEY (`personal_detail_id`) REFERENCES `personal_detail` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
