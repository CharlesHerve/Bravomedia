-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 10:58 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arbetsprovet`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `tmpname` varchar(1000) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `text` text,
  `upltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `type`, `size`, `tmpname`, `title`, `text`, `upltime`) VALUES
(1, 'IMG_0596.JPG', NULL, NULL, NULL, NULL, NULL, '2016-12-23 22:41:10'),
(2, 'IMG_0597.JPG', 'image/jpeg', NULL, NULL, NULL, NULL, '2016-12-23 22:41:10'),
(3, 'IMG_0598.JPG', 'image/jpeg', 1390582, NULL, NULL, NULL, '2016-12-23 22:41:10'),
(5, 'IMG_0596.JPG', 'image/jpeg', 1862961, 'C:wamp64	mpphp377F.tmp', 'fauteuil', NULL, '2016-12-23 22:41:10'),
(6, 'IMG_0597.JPG', 'image/jpeg', 1951317, 'C:wamp64	mpphp5635.tmp', 'fauteuil raye', 'achete chez ikea il y a longtemps', '2016-12-23 22:41:10'),
(7, 'IMG_0598.JPG', 'image/jpeg', 1390582, 'C:wamp64	mpphp6789.tmp', 'centrale nucleaire', 'domestique et individuelle', '2016-12-23 22:42:06'),
(8, 'IMG_0598.JPG', 'image/jpeg', 1390582, 'C:wamp64	mpphp942F.tmp', 'washing machine', 'brand new Braun, never used, sold for removal', '2016-12-23 22:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Fname`, `Lname`, `Email`, `Password`) VALUES
(1, 'charles', 'le roux', 'adresse@email.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
