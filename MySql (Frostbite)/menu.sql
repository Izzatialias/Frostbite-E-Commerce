-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 02:08 PM
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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `M_Code` varchar(10) NOT NULL,
  `M_Category` varchar(30) NOT NULL,
  `M_name` varchar(50) NOT NULL,
  `M_price` decimal(10,0) NOT NULL,
  `M_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`M_Code`, `M_Category`, `M_name`, `M_price`, `M_img`) VALUES
('B1', 'beve', 'Sodas', '8', 'image/bev1.jpg'),
('B2', 'beve', 'Iced Tea', '10', 'image/bev2.jpg'),
('B3', 'beve', 'Ice Latte', '13', 'image/bev3.jpg'),
('C1', 'cakes', 'Chocolate Cake', '15', 'image/chocolate.png'),
('C2', 'cakes', 'Cheese Cake', '15', 'image/cheese.png'),
('C3', 'cakes', 'Red Velvet Cake', '15', 'image/red valvet.png'),
('C4', 'cakes', 'Salted Caramel Cake', '15', 'image/salted caramel.png'),
('C5', 'cakes', 'Strawberry Cake', '15', 'image/strawberry.png'),
('C6', 'cakes', 'Oreo Cheese Cake', '20', 'image/oreo.png'),
('I1', 'ice', 'Vanilla Ice Cream', '7', ''),
('I2', 'ice', 'Chocolate Ice Cream', '7', ''),
('I3', 'ice', 'Biscoff x Nutella Ice Cream', '10', ''),
('I4', 'ice', 'Matcha Ice Cream', '7', ''),
('I5', 'ice', 'Mint Chocolate Chip Ice Cream', '7', ''),
('I6', 'ice', 'Strawberry Ice Cream', '7', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`M_Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
