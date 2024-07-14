-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 04:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frostbite`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `O_Num` varchar(11) NOT NULL,
  `O_date` date NOT NULL,
  `O_time` time NOT NULL,
  `O_setDate` date NOT NULL,
  `O_setTime` time(6) NOT NULL,
  `O_quantity` int(11) NOT NULL,
  `O_totalPrice` decimal(11,0) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `B_ID` varchar(10) NOT NULL,
  `M_Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`O_Num`),
  ADD KEY `Foreign_Key` (`username`),
  ADD KEY `FK` (`B_ID`),
  ADD KEY `Fore_Key` (`M_Code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK` FOREIGN KEY (`B_ID`) REFERENCES `bill` (`B_ID`),
  ADD CONSTRAINT `Fore_Key` FOREIGN KEY (`M_Code`) REFERENCES `menu` (`M_Code`),
  ADD CONSTRAINT `Foreign_Key` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
