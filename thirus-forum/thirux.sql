-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2011 at 10:44 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thiru`
--
CREATE DATABASE `thiru` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thiru`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`username`, `password`) VALUES
('x', '*4661D72F443CFC758BECA246B5FA89525BF23E91'),
('s', '*16863C23B2E91537AEAEDDE9D1B40DA2A975C5DC');

-- --------------------------------------------------------

--
-- Table structure for table `likex`
--

CREATE TABLE IF NOT EXISTS `likex` (
  `username` varchar(30) NOT NULL,
  `post_id` int(11) NOT NULL,
  `stat` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likex`
--

INSERT INTO `likex` (`username`, `post_id`, `stat`) VALUES
('x', 6, 1),
('x', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `postx`
--

CREATE TABLE IF NOT EXISTS `postx` (
  `post_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postx`
--

INSERT INTO `postx` (`post_id`, `parent_id`, `username`, `title`, `content`, `time`, `date`) VALUES
(10, 9, 'x', 'reason', 'its very thrilling', '20:22:02', '2011-07-10'),
(9, 9, 'x', 'space', 'i like astronomy', '20:21:23', '2011-07-10'),
(8, 8, 's', 'sports', 'i like playing sports', '19:56:28', '2011-07-10'),
(7, 6, 'x', 'movie genre ', 'i like war movies the most', '19:55:09', '2011-07-10'),
(6, 6, 'x', 'movies', 'i love watching movies', '19:54:38', '2011-07-10'),
(5, 3, 'x', 'music', 'i like to listen to music too', '19:53:56', '2011-07-10'),
(4, 1, 'x', 'which game?', 'which game you like the most?', '19:53:15', '2011-07-10'),
(3, 3, 'x', 'books', 'i like to read books', '19:52:19', '2011-07-10'),
(2, 1, 's', 'type of games', 'i like all type of games', '19:51:25', '2011-07-10'),
(1, 1, 's', 'games', 'i like games', '19:50:37', '2011-07-10'),
(11, 9, 'x', 'boring', 'sometimes its boring too', '16:44:53', '2011-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `userx`
--

CREATE TABLE IF NOT EXISTS `userx` (
  `username` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `interest` text NOT NULL,
  `location` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `picture` text NOT NULL,
  `joindate` date NOT NULL,
  `last` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userx`
--

INSERT INTO `userx` (`username`, `gender`, `name`, `birthday`, `occupation`, `interest`, `location`, `email`, `picture`, `joindate`, `last`) VALUES
('x', 'male', 'kyo', '1992-07-14', 'student', 'i like manga', 'india', 'hui@hui.com', 'tokyo-drift-rx-8[1].jpg', '2011-07-07', '2011-07-22 22:42:49'),
('s', 'male', 'thiru', '1993-03-12', 'student', 'i like games', 'chennai', 'thiru@thiru.com', 'na.jpeg', '2011-07-07', '2011-07-22 19:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `viewx`
--

CREATE TABLE IF NOT EXISTS `viewx` (
  `parent_id` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viewx`
--

INSERT INTO `viewx` (`parent_id`, `views`) VALUES
(3, 12),
(1, 67);
