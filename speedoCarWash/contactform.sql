-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 03:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `id` int(250) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `carmodel` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`id`, `name`, `phone`, `email`, `date`, `carmodel`, `address`) VALUES
(5, 'ayesha', '03021745943', 'ayeshaa4837@gmail.com', '2023-10-16', 'Suzuki', 'fsd'),
(9, 'Alisha', '03021745943', 'ayeshoa143@gmail.com', '2023-10-17', 'Suzuki', 'fsd'),
(10, 'Ayesha Siddiqa', '03021745943', 'ayeshasiddiqa8090@gmail.com', '2023-10-17', 'Suzuki', 'Kanganpur.');

-- --------------------------------------------------------

--
-- Table structure for table `contact-data`
--

CREATE TABLE `contact-data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` float NOT NULL,
  `email` varchar(55) NOT NULL,
  `messages` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact-data`
--

INSERT INTO `contact-data` (`id`, `name`, `phone`, `email`, `messages`, `file`) VALUES
(87, 'Rabia', 3021750000, 'ayeshasiddiqa8090@gmail.com', 'rabi', ''),
(89, 'Rabia', 0, 'ayeshoa143@gmail.com', 'hahahhaah', ''),
(91, 'Alisha', 3021750000, 'alisha143@gmail.com', 'how are you', ''),
(92, 'Alisha', 30344, 'alisha143@gmail.com', 'hihi', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('rabia', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact-data`
--
ALTER TABLE `contact-data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact-data`
--
ALTER TABLE `contact-data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
