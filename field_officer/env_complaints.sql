-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 11:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `env_complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(20) NOT NULL,
  `report_address` varchar(255) NOT NULL,
  `report_city` varchar(255) NOT NULL,
  `report_zip` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL COMMENT 'only Wildlife OR Forest',
  `violation_active` tinyint(1) NOT NULL,
  `incident_date` date NOT NULL,
  `emergency` tinyint(1) NOT NULL,
  `intention` varchar(255) NOT NULL COMMENT 'Accident, Purposeful, Unknown',
  `violation_method` varchar(255) NOT NULL,
  `affected_subjects` varchar(255) NOT NULL COMMENT 'pedestrians, workers, animals',
  `description` varchar(255) NOT NULL,
  `media_upload` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reporter_info`
--

CREATE TABLE `reporter_info` (
  `user_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `report_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`user_id`, `name`, `email`, `city`, `user_type`, `password`) VALUES
(1, 'Admin1', 'admin1@gmail.com', 'Colombo', 'admin', 'admin123'),
(4, 'Aamir', 'am@gmail.com', 'Aluthgama', 'user', '@aamir'),
(3, 'Aakil', 'as@gmail.com', 'Kalmunai', 'user', '@aakil'),
(5, 'Fudhail', 'fu@gmail.com', 'Ratmalana', 'user', '@fudhail'),
(6, 'Nusaif', 'nu@gmail.com', 'Kathankudy', 'user', '@nusaif'),
(7, 'Sajath', 'sa@gmail.com', 'Polonnaruwa', 'user', '@sajath');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `reporter_info`
--
ALTER TABLE `reporter_info`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reporter_info`
--
ALTER TABLE `reporter_info`
  ADD CONSTRAINT `reporter_info_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `report` (`report_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
