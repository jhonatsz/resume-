-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2016 at 04:47 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  `description` longtext NOT NULL,
  `qualifications` longtext NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `description`, `qualifications`, `status`) VALUES
(1, 'Software Engineer', 'Lorem Ipsum', '2015 mba', 'active'),
(2, 'Marketing Lead', 'lorem ipsum', 'marketing lead 2015', 'active'),
(3, 'Sales Marketing', 'lorem ipsum', 'sas', 'active'),
(4, 'Accounting Person', '', '', 'active'),
(5, 'Librarian', 'lorem ipsum', '', 'active'),
(6, 'Technician', 'lorem ipsum', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_info`
--

CREATE TABLE IF NOT EXISTS `jobs_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jobs_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `years` varchar(255) NOT NULL,
  `role` double NOT NULL,
  `type` bigint(16) NOT NULL,
  `filename` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`type`,`qualification`,`years`,`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `name`, `qualification`, `years`, `role`, `type`, `filename`) VALUES
(9, 'Music Aeroplane', 'TOY#MA01', 'Music Toys', 250, 500, 'test.pdf'),
(10, 'Power Ranger', 'TOY#BT01', 'Battery Toys', 1000, 100, 'test.pdf'),
(11, 'Remote Car', 'TOY#RMT01', 'Remote Control Toys', 280, 800, 'test.pdf'),
(12, 'Bubbles', 'TOY#WT01', 'Water Games', 100, 1000, 'test.pdf'),
(14, 'Basket Ball', 'TOY#BB01', 'Outdoor Toys', 2000, 500, 'test.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` varchar(24) NOT NULL,
  `date_created` datetime NOT NULL,
  `logs` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`, `date_created`, `logs`) VALUES
(1, 'kaii@gmail.com', 'password123', 'active', '2016-01-22 01:58:00', '2016-01-22 01:58:00'),
(2, 'kaiirah@gmail.com', 'password', 'active', '2016-01-22 04:32:17', '2016-01-22 04:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE IF NOT EXISTS `users_profile` (
  `id` int(11) NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(124) NOT NULL,
  `type` varchar(12) NOT NULL DEFAULT 'applicant',
  `date_created` datetime NOT NULL,
  UNIQUE KEY `UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id`, `fullname`, `lastname`, `birthday`, `address`, `type`, `date_created`) VALUES
(1, 'Jhonathan Howard', 'Falcutela', '1990-03-15', 'Paranaque City', 'applicant', '2016-01-22 04:31:03'),
(2, 'Kaii ', 'Falcutela', '1990-01-05', 'Makati City', 'hr', '2016-01-22 04:32:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
