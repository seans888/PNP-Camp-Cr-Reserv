-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 10:00 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `phpmyreservation_configuration`
--

CREATE TABLE `phpmyreservation_configuration` (
  `id` int(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phpmyreservation_configuration`
--

INSERT INTO `phpmyreservation_configuration` (`id`, `price`) VALUES
(1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `phpmyreservation_reservations`
--

CREATE TABLE `phpmyreservation_reservations` (
  `reservation_id` int(10) NOT NULL,
  `reservation_made_time` datetime NOT NULL,
  `reservation_year` smallint(4) NOT NULL,
  `reservation_week` tinyint(2) NOT NULL,
  `reservation_day` tinyint(1) NOT NULL,
  `reservation_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reservation_price` float NOT NULL,
  `reservation_user_id` int(10) NOT NULL,
  `reservation_user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reservation_user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phpmyreservation_users`
--

CREATE TABLE `phpmyreservation_users` (
  `user_id` int(10) NOT NULL,
  `user_is_admin` tinyint(1) NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_reservation_reminder` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phpmyreservation_users`
--

INSERT INTO `phpmyreservation_users` (`user_id`, `user_is_admin`, `user_email`, `user_password`, `user_name`, `user_reservation_reminder`) VALUES
(1, 1, 'rpaltea@student.apc.edu.ph', '$1$k4i8pa2m$ozhxqHyrjCmsB9lCtcZxF/', 'rollie', 0),
(2, 0, 'duane@gmail.com', '$1$k4i8pa2m$ozhxqHyrjCmsB9lCtcZxF/', 'duane', 0),
(3, 0, 'kathleen@gmail.com', '$1$k4i8pa2m$ozhxqHyrjCmsB9lCtcZxF/', 'kathleen', 0),
(4, 0, 'kevin@apc.com', '$1$k4i8pa2m$ozhxqHyrjCmsB9lCtcZxF/', 'kevin', 0),
(5, 1, 'pnpreservation.apc@gmail.com', '$1$k4i8pa2m$4i71BM3i9KLRT7drvJ1Ip/', 'admin', 0),
(6, 0, 'user1@gmail.com', '$1$k4i8pa2m$wG040GbXrdQs97ylNvZwj1', 'userone', 0),
(7, 0, 'user@gmail.com', '$1$k4i8pa2m$I5bHC.sZJQdsSpHbQ8NaY.', 'usertwo', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpmyreservation_configuration`
--
ALTER TABLE `phpmyreservation_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpmyreservation_reservations`
--
ALTER TABLE `phpmyreservation_reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `phpmyreservation_users`
--
ALTER TABLE `phpmyreservation_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phpmyreservation_configuration`
--
ALTER TABLE `phpmyreservation_configuration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `phpmyreservation_reservations`
--
ALTER TABLE `phpmyreservation_reservations`
  MODIFY `reservation_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phpmyreservation_users`
--
ALTER TABLE `phpmyreservation_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
