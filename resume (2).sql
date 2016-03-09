-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 05:26 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
  `name` longtext NOT NULL,
  `description` longtext NOT NULL,
  `qualifications` longtext NOT NULL,
  `skills` longtext NOT NULL,
  `achievements` longtext NOT NULL,
  `units` int(11) NOT NULL DEFAULT '10',
  `status` varchar(12) NOT NULL DEFAULT 'active',
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `name` (`name`,`description`,`qualifications`,`skills`,`achievements`),
  FULLTEXT KEY `FULLTEXTQ` (`qualifications`),
  FULLTEXT KEY `UNIQS` (`skills`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `description`, `qualifications`, `skills`, `achievements`, `units`, `status`, `date_created`) VALUES
(1, 'Software Engineer', 'Lorem Ipsum', 'BS Technology, lala\r\n', 'Android', '1,2,3,4', 1, 'active', '2016-01-23'),
(2, 'System Analyst Lead', 'lorem ipsum', 'Bachelor of Science in Computer Science,Bachelor of Science in Information Technology', 'Android,C,PHP', '1,2,3,4', 10, 'active', '2016-01-23'),
(3, 'System Programmer', 'lorem ipsum', 'BSIT,MAED,MSCS,Doctorate', 'Android,C,Java,PHP', '1,2,3,4', 10, 'active', '2016-01-23'),
(4, 'Accounting Person', 'lorem ipsum', '1,2,3,4', '1,2,3,4', '1,2,3,4', 10, 'active', '2016-01-23'),
(5, 'Librarian', 'lorem ipsum', '1,2,3,4', '1,2,3,4', '1,2,3,4', 10, 'active', '2016-01-23'),
(6, 'Technician', 'lorem ipsum', '1,2,3,4', '1,2,3,4', '1,2,3,4', 10, 'active', '2016-01-23'),
(9, 'CEO', 'lorem ipsum', '1,2,3', '1,2,3', '', 10, 'active', '0000-00-00'),
(12, 'JANITOR', 'lorem ipsum', '1,2', '1,2', '', 10, 'active', '0000-00-00'),
(15, 'Random Job', 'Male', 'BSIT,MAED,MSCS,Doctorate', 'Android,C,JAVA,PHP', '', 10, 'active', '0000-00-00'),
(17, 'Random Job', '', '', '', '', 10, 'active', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_info`
--

CREATE TABLE IF NOT EXISTS `jobs_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jobs_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ` (`jobs_id`,`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `jobs_info`
--

INSERT INTO `jobs_info` (`id`, `jobs_id`, `applicant_id`, `date_created`) VALUES
(1, 1, 3, '2016-02-04'),
(2, 3, 3, '2016-02-04'),
(3, 2, 3, '2016-02-04'),
(4, 2, 1, '2016-02-05'),
(5, 4, 3, '2016-02-05'),
(6, 6, 3, '2016-02-05'),
(7, 5, 1, '2016-02-05'),
(8, 6, 1, '2016-02-05'),
(9, 3, 1, '2016-02-09'),
(10, 2, 11, '2016-02-10'),
(12, 2, 12, '2016-02-10'),
(13, 15, 3, '2016-02-10'),
(14, 15, 14, '2016-02-10'),
(15, 16, 14, '2016-02-10'),
(16, 15, 15, '2016-02-10');

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
  `status` varchar(24) NOT NULL DEFAULT 'active',
  `date_created` datetime NOT NULL,
  `logs` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`, `date_created`, `logs`) VALUES
(1, 'fredo@gmail.com', 'password', 'active', '2016-01-22 01:58:00', '2016-01-22 01:58:00'),
(2, 'hr1@gmail.com', 'password', 'active', '2016-01-22 04:32:17', '2016-01-22 04:32:17'),
(3, 'applicant1@gmail.com', 'password', 'active', '2016-01-23 01:03:37', '2016-01-23 01:03:37'),
(4, 'applicant2@klaseko.com', 'password', 'active', '2016-01-23 01:03:57', '2016-01-23 01:03:57'),
(5, 'jin@mara', 'falla', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'jin@mara', 'fallala', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'hr3@gmail.com', 'password', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'hr5@gmail.com', 'password', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'hr6@gmail.com', 'password', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'applicant1@gmail.com', 'password', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'marasiga@gmail.com', 'paulo14', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'eugenepaulomarasigan@yahoo.com', 'paulo14', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'eugenepaulomarasigan@yahoo.com', 'pupup', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'new@klala', 'palala', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'marasiganeugeneee@gmail.com', 'password', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'hr1@gmail.com', 'password', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE IF NOT EXISTS `users_profile` (
  `id` int(11) NOT NULL,
  `img_name` varchar(48) NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(24) NOT NULL,
  `address` varchar(124) NOT NULL,
  `type` varchar(12) NOT NULL DEFAULT 'applicant',
  `contact_no` varchar(48) NOT NULL,
  `qualification` longtext NOT NULL,
  `skills` longtext NOT NULL,
  `achievements` longtext NOT NULL,
  `date_created` datetime NOT NULL,
  UNIQUE KEY `UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id`, `img_name`, `fullname`, `lastname`, `birthday`, `gender`, `address`, `type`, `contact_no`, `qualification`, `skills`, `achievements`, `date_created`) VALUES
(1, 'login_background_2.jpeg', 'Linfredo', 'Sorre', '1990-03-15', 'Male', 'Paranaque City', 'applicant', '09164400851', 'Bachelor of Science in Mechanical Engineering,Professional License in Mechanical Engineering', 'Android,C,PHP', '1,2,3,4', '2016-01-22 04:31:03'),
(2, 'IMG_0417.JPG', 'Eugene', 'Marasigan', '1996-06-14', 'Male', 'Makati City', 'hr', '09164400851', '1,2,3', '1,2,3', '1,2,3,4', '2016-01-22 04:32:44'),
(3, '', 'Raven ', 'Arellano', '2016-01-03', 'Male', 'Tondo', 'applicant', '09164400851', 'BS Technology,lala', 'Android,C,JAVA,PHP', '1,2,3,4', '2016-01-23 01:04:54'),
(4, '', 'Mark', 'Francis', '2016-01-03', 'Male', '6 Teheran', 'applicant', '09164400851', '1', '1', '1,2,3,4', '2016-01-23 01:04:22'),
(9, '', '', '', '0000-00-00', 'Male', '', 'applicant', '', '', '', '', '0000-00-00 00:00:00'),
(11, '', '', '', '0000-00-00', '', '', 'applicant', '', '', '', '', '0000-00-00 00:00:00'),
(12, '', '', '', '0000-00-00', '', '', 'applicant', '', '', '', '', '0000-00-00 00:00:00'),
(13, '', '', '', '0000-00-00', '', '', 'applicant', '', '', '', '', '0000-00-00 00:00:00'),
(14, '', '', '', '0000-00-00', 'Male', '', 'applicant', '', 'A,B,C,D', 'A,B,C,D', '', '0000-00-00 00:00:00'),
(15, 'jobs.png', 'Eugene ', 'Marasigan', '1996-06-14', 'Male', 'Cavite', 'applicant', '09178570476', '', '', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
