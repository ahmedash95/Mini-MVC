-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 04:02 PM
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
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `comment`) VALUES
(1, 1, 1, 'nice topic!'),
(2, 1, 1, 'great one!'),
(3, 5, 1, 'great information'),
(4, 5, 4, 'great man!'),
(5, 5, 3, 'need more information'),
(6, 5, 4, 'The PHP development'),
(9, 21, 1, 'i used to do this before'),
(10, 1, 8, 'this is a great photo'),
(11, 1, 4, 'a wonderfull post'),
(12, 15, 10, 'great Photos !');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `user_id`, `post_id`, `photo_name`) VALUES
(11, 15, 10, 'code-wallpaper-28.jpg'),
(12, 15, 10, 'anonymous-hackers-8152.jpg'),
(13, 15, 10, 'apple-hackintosh.png');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `description`, `body`) VALUES
(1, 1, 'first post', 'this is the first post', 'autoload_function\r\nThe autoload function being registered. If no parameter is provided, then the default implementation of spl_autoload() will be registered.\r\n\r\nthrow\r\nThis parameter specifies whether spl_autoload_register() should throw exceptions when the autoload_function cannot be registered.\r\n\r\nprepend\r\nIf true, spl_autoload_register() will prepend the autoloader on the autoload queue instead of appending it.'),
(2, 1, 'second post', 'this is the second post', 'autoload_function\r\nThe autoload function being registered. If no parameter is provided, then the default implementation of spl_autoload() will be registered.\r\n\r\nthrow\r\nThis parameter specifies whether spl_autoload_register() should throw exceptions when the autoload_function cannot be registered.\r\n\r\nprepend\r\nIf true, spl_autoload_register() will prepend the autoloader on the autoload queue instead of appending it.'),
(3, 1, 'third post', 'this is the third post', 'autoload_function\r\nThe autoload function being registered. If no parameter is provided, then the default implementation of spl_autoload() will be registered.\r\n\r\nthrow\r\nThis parameter specifies whether spl_autoload_register() should throw exceptions when the autoload_function cannot be registered.\r\n\r\nprepend\r\nIf true, spl_autoload_register() will prepend the autoloader on the autoload queue instead of appending it.'),
(4, 5, 'php manual', 'this a short description about php', 'The PHP development team announces the immediate availability of PHP 5.4.40. 14 security-related bugs were fixed in this release, including CVE-2014-9709, CVE-2015-2301, CVE-2015-2783, CVE-2015-1352. All PHP 5.4 users are encouraged to upgrade to this version.'),
(10, 15, 'photo test', 'this is the multi photos test', 'Returns the current working directory on success, or FALSE on failure.\r\n\r\nOn some Unix variants, getcwd() will return FALSE if any one of the parent directories does not have the readable or search mode set, even if the current directory does. See chmod() for more information on modes and permissions.');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `permission`, `email`) VALUES
(1, 'mohamed', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'mohamed@yahoo.com'),
(2, 'taha', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'taha@yahoo.com'),
(3, 'ahmed', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'moderator', 'ahmed@yahoo.com'),
(4, 'hassan', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'hassan@yahoo.com'),
(5, 'asharf', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'ashraf@yahoo.com'),
(22, 'abdo', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'abdo@yahoo.com'),
(27, 'dalil', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'dalil@yahoo.com'),
(8, 'omar', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'moderator', 'omar@yahoo.com'),
(9, 'moussa', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'moussa@yahoo.com'),
(21, 'samir', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'samir@yahoo.com'),
(13, 'ibrahim', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'ibrahim@ibrahim.com'),
(14, 'yasser', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'yasser@yahoo.com'),
(15, 'samy', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'samy@yahoo.com'),
(23, 'abelrahman', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'abdo@yahoo.com'),
(25, 'nabil', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'nabil@yahoo.com'),
(28, 'ahmed said', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'said@yahoo.com');

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
