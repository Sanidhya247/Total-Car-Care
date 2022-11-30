-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 02:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(1, 'brijesh', 10, 'complete', 'pay_J9mceoWen0hqPi', '2022-03-21 04:02:30'),
(2, 'brijesh', 1, 'complete', 'pay_J9mdm7kem13eE6', '2022-03-21 04:09:25'),
(3, 'brijesh', 100, 'complete', 'pay_J9meuyeVXyLpyA', '2022-03-21 04:10:24'),
(4, 'brijesh', 100, 'pending', '', '2022-03-22 04:26:04'),
(5, 'brijesh', 100, 'complete', 'pay_JABI1WKkphDFx8', '2022-03-22 04:16:23'),
(6, 'sanidhya', 100, 'complete', 'pay_JAPq97FBNG06Ye', '2022-03-23 06:29:25'),
(7, 'brijesh', 1, 'pending', '', '2022-03-24 02:34:52'),
(8, 'brijesh', 1, 'complete', 'pay_JBZmbAft80K8rf', '2022-03-26 04:53:05'),
(9, 'brijesh', 1, 'pending', '', '2022-03-26 06:09:03'),
(10, 'brijesh', 100, 'pending', '', '2022-03-27 08:36:05'),
(11, 'brijesh', 100, 'pending', '', '2022-03-27 08:36:49'),
(12, 'brijesh', 100, 'complete', 'pay_JC19sXFZbceGnu', '2022-03-27 08:39:54'),
(13, 'sanidhya', 1, 'pending', '', '2022-03-29 10:35:19'),
(14, 'sanidhya', 1, 'pending', '', '2022-03-29 10:35:20'),
(15, 'sanidhya', 1, 'pending', '', '2022-03-29 10:35:20'),
(16, 'sanidhya', 1, 'pending', '', '2022-03-29 10:35:20'),
(17, 'brijesh', 1, 'pending', '', '2022-03-29 10:36:00'),
(18, 'brijesh', 100, 'complete', 'pay_JCqDO37rhWDEFL', '2022-03-29 10:36:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
