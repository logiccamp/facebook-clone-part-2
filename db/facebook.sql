-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 13, 2021 at 03:48 AM
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
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `day_dob` varchar(10) NOT NULL,
  `month_dob` varchar(10) NOT NULL,
  `year_dob` varchar(10) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `email`, `password`, `first_name`, `last_name`, `telephone`, `gender`, `day_dob`, `month_dob`, `year_dob`, `date_registered`, `last_login`) VALUES
(1, '12121212', 'logic@bluebook.com', '$2y$10$hgKhJbmzzre4Ro8INRbyKeviVCYTie27gb.WnaSkr4foxQLSBbQBO', '', '', '', '', '', '', '', '2021-09-11 17:47:34', '2021-09-11 17:48:02'),
(2, 'WO4P5S18FRE', '', '$2y$10$hgKhJbmzzre4Ro8INRbyKeviVCYTie27gb.WnaSkr4foxQLSBbQBO', 'Buffet', 'Warren', '0836363525', 'Male', '1', '2', '1905', '2021-09-11 18:12:01', '2021-09-11 18:12:01');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
