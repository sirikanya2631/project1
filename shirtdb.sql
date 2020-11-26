-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2020 at 10:43 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shirt`
--

-- --------------------------------------------------------

--
-- Table structure for table `shirtdb`
--

CREATE TABLE `shirtdb` (
  `shirt_id` int(11) NOT NULL,
  `shirt_name` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `shirtdb`
--

INSERT INTO `shirtdb` (`shirt_id`, `shirt_name`, `size`, `price`) VALUES
(12345, 'asd', 's', 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shirtdb`
--
ALTER TABLE `shirtdb`
  ADD PRIMARY KEY (`shirt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shirtdb`
--
ALTER TABLE `shirtdb`
  MODIFY `shirt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
