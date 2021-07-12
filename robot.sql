-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 يوليو 2021 الساعة 03:00
-- إصدار الخادم: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotics`
--

-- --------------------------------------------------------

--
-- بنية الجدول `robot`
--

CREATE TABLE `robot` (
  `id` int(11) NOT NULL,
  `forward` varchar(10) NOT NULL,
  `back` varchar(10) NOT NULL,
  `leftv` varchar(10) NOT NULL,
  `rightr` varchar(10) NOT NULL,
  `stop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `robot`
--

INSERT INTO `robot` (`id`, `forward`, `back`, `leftv`, `rightr`, `stop`) VALUES
(1, 'F', 'b', 'L', 'R', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robot`
--
ALTER TABLE `robot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robot`
--
ALTER TABLE `robot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
