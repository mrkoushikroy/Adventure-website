-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2020 at 09:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skydive`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(111) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'demo', 'demo@demo.com', '9988776655', 'hi i want to contact', '2020-10-13 07:01:34'),
(2, 'demo', 'demo@demo.com', '9988776655', 'hi i want to contact', '2020-10-13 07:13:02'),
(3, 'koushik', 'koushik.roy98@gmail.com', '99887766', 'hi i want to contact', '2020-10-13 07:22:29'),
(4, 'koushik', 'ada@gg.com', '998877665', 'hi I want to contact', '2020-10-13 09:07:18'),
(5, 'demo', 'demo@gmail.com', '9900887766', 'hiiiii', '2020-10-13 09:41:25'),
(6, 'fskafn', 'bk@gjafbs.com', '8887799087', 'Hi i want to contact', '2020-10-13 10:14:56'),
(7, 'kkkk', 'kk@kk.com', '99999999', 'hiii', '2020-11-24 09:55:06'),
(8, 'hjk', 'jkjk@jkhj.com', '99999999999', 'kkd', '2020-11-26 17:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
