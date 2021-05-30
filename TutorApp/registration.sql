-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 08:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cellphone_number` varchar(16) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `firstname`, `surname`, `email`, `cellphone_number`, `subject`, `time`) VALUES
(14, 'Jaden', 'Petersen', 'petersen.jaden@icloud.com', '0662555264', 'CMN', '16:00-17:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `ID_number` varchar(13) NOT NULL,
  `employee_number` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone_number`, `ID_number`, `employee_number`, `password`) VALUES
(1, 'Jaden', 'petersen.jaden@icloud.com', '0662555264', '0002135475081', 115, 'ef0979d9fdc410f7cb9fc9b462ed356a'),
(2, 'Breezy', 'breezy@gmail.com', '+27662555264', '1234567890123', 3, '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
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
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
