-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2015 at 11:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task5`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `permission`, `email`) VALUES
(1, 'mohamed', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'mohamed@yahoo.com'),
(2, 'taha', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'taha@yahoo.com'),
(3, 'ahmed', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'moderator', 'ahmed@yahoo.com'),
(4, 'hassan', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'hassan@yahoo.com'),
(5, 'asharf', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'ashraf@yahoo.com'),
(6, 'mosha', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'mosha@yahoo.com'),
(12, 'medhat', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'medhat@medhat.com'),
(8, 'omar', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'moderator', 'omar@yahoo.com'),
(9, 'moussa', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'moussa@yahoo.com'),
(11, 'zohdy', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'zohdy@yahoo.com'),
(13, 'ibrahim', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'ibrahim@ibrahim.com'),
(14, 'yasser', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'yasser@yahoo.com'),
(15, 'samy', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'samy@yahoo.com'),
(20, 'hoseny', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'hoseny@hoseny.com'),
(18, 'abdo', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'abdo@yahoo.com'),
(19, 'adel', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'adel@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `authority` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `authority`, `username`, `password`, `email`, `gender`) VALUES
(1, 'admin', 'mohamed', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'prince4moha@yahoo.com', 'male'),
(2, 'admin', 'hassan', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'ahmed@yahoo.com', 'male'),
(4, 'supervisor', 'israa', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'israa@yahoo.com', 'female'),
(5, 'admin', 'yasso', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'yasser@yahoo.com', 'male'),
(10, 'member', 'mego', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'mego@yahoo.com', 'male'),
(6, 'member', 'asharf', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'ashraf@yahoo.com', 'male'),
(7, 'supervisor', 'zaher', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'zaher@zaher.com', 'male'),
(9, 'member', 'gemy', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'gemy@yahoo.com', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
