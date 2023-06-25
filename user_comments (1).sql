-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 05:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_bar_comments`
--

CREATE TABLE `food_bar_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_bar_comments`
--

INSERT INTO `food_bar_comments` (`id`, `user_id`, `user_name`, `body`, `created_date`) VALUES
(1, 19, 'Testing_User', 'Do leave comments, they help us to improve.', '2020-06-13 14:19:02'),
(2, 19, 'Testing_User', 'Seriously', '2020-06-15 16:43:12'),
(3, 20, 'dvName', 'Hello, My name is ', '2020-06-15 10:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `general_comments`
--

CREATE TABLE `general_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_comments`
--

INSERT INTO `general_comments` (`id`, `user_id`, `user_name`, `body`, `created_date`) VALUES
(1, 19, 'Testing_User', 'Hellow. How are you??', '2020-06-13 16:38:00'),
(2, 20, 'dvName', 'General Store', '2020-06-15 16:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `housing_comments`
--

CREATE TABLE `housing_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `housing_comments`
--

INSERT INTO `housing_comments` (`id`, `user_id`, `user_name`, `body`, `created_date`) VALUES
(1, 19, 'Testing_User', 'testinf 1', '2020-06-15 16:31:04'),
(2, 19, 'Testing_User', 'Hello. How are You??', '2020-06-13 16:36:59'),
(3, 19, 'Testing_User', 'Hey', '2020-06-15 10:05:20'),
(4, 20, 'dvName', 'Test', '2020-06-15 10:12:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_bar_comments`
--
ALTER TABLE `food_bar_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_comments`
--
ALTER TABLE `general_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `housing_comments`
--
ALTER TABLE `housing_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_bar_comments`
--
ALTER TABLE `food_bar_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `general_comments`
--
ALTER TABLE `general_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `housing_comments`
--
ALTER TABLE `housing_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
