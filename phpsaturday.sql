-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2021 at 09:48 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpsaturday`
--
CREATE DATABASE IF NOT EXISTS `phpsaturday` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpsaturday`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dp` varchar(30) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `password`, `dp`, `regdate`) VALUES
(1, 'saravanan', 'saravana@gmail.com', 9988774411, '312dc6ec7c900fb9017bf43c6b1f81bb', '', '2021-09-04 09:27:50'),
(2, 'jalal', 'jalal@gmail.com', 8745874455, 'b8fee76fe839ac50e1735a483f0100e5', '', '2021-09-04 09:32:49'),
(3, 'gunasekar', 'gunasekar@gmail.com', 9874563214, '937eae9b0ee86a37fa75dbb5cf94abd1', 'car3.png', '2021-09-04 09:35:32'),
(4, 'sri', 'sri@gmail.com', 9999988888, '296c2075a196aef15e372a68ae77477b', '', '2021-09-04 09:38:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
