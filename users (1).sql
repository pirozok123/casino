-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 05:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `balance` double(10,2) NOT NULL DEFAULT 0.00,
  `credits` double(10,4) NOT NULL DEFAULT 0.0000,
  `balance_time` int(11) NOT NULL,
  `credits_time` int(11) NOT NULL,
  `subjects` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`, `balance`, `credits`, `balance_time`, `credits_time`, `subjects`) VALUES
(4, 'admin', 'formoney2017@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', '2019-11-20 14:47:48', 0.00, 0.0000, 0, 0, 0),
(5, 'admin', 'formoney2017@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', '2019-11-20 14:49:25', 0.00, 0.0000, 0, 0, 0),
(6, 'admin', 'formoney2017@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', '2019-11-20 14:54:55', 0.00, 0.0000, 0, 0, 0),
(7, 'aaa', 'formoney2017@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', '2019-11-20 14:55:12', 47.00, 16.0000, 1574347909, 1574268565, 50),
(8, 'petro', 'formoney2017@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', '2019-11-20 17:10:58', 9.00, 18.0000, 1574352673, 1574269886, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
