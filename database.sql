-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 02:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demodatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `pprice` int(11) DEFAULT NULL,
  `pdescription` varchar(50) DEFAULT NULL,
  `pimage` varchar(50) DEFAULT NULL,
  `pcat` int(11) NOT NULL,
  `pavailability` varchar(50) NOT NULL,
  `pqty` int(11) NOT NULL,
  `ppage` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pprice`, `pdescription`, `pimage`, `pcat`, `pavailability`, `pqty`, `ppage`) VALUES
(2, 'rose plant', 40, 'a wild nature rose plant', 'rose.jpg', 1, 'available', 1, 'rose.php'),
(3, 'boganvilia', 400, 'wild category flowers', 'boganvilia.jpg', 1, 'available', 2, 'boganvilia.php'),
(4, 'cherry blossom', 500, 'western flower seed ', 'cheery.jpg', 1, 'available', 200, 'cherry.php'),
(5, 'monstera', 100, 'an indoor plant ', 'montera.jpg', 1, 'available', 5, 'montera.php'),
(6, 'aloe vera', 600, 'deserted plant ', 'aloevera.jpg', 1, 'available', 1, 'aloe.php'),
(7, 'daisy ', 300, 'winter season plant seeds', 'daisy.jpg', 1, 'available', 100, 'daisy.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pasword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `city`, `pasword`) VALUES
(3, 'Tabassum12', 'Raza', 'tr@gmail.com', 'karachi', '125'),
(4, 'eshal', 'raza', 'eshu@gmail.com', 'peshawar', '123'),
(6, 'tr', 'raza', 'tr@gmail.com', 'karachi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
