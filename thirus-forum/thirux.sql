-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2011 at 02:45 AM
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
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`username`, `password`) VALUES
('x', '*B69027D44F6E5EDC07F1AEAD1477967B16F28227'),
('s', '*16863C23B2E91537AEAEDDE9D1B40DA2A975C5DC');

-- --------------------------------------------------------

--
-- Table structure for table `postx`
--

CREATE TABLE IF NOT EXISTS `postx` (
  `post_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postx`
--

INSERT INTO `postx` (`post_id`, `parent_id`, `username`, `title`, `content`, `time`, `date`, `likes`, `dislikes`) VALUES
(10, 9, 'x', 'reason', 'its very thrilling', '20:22:02', '2011-07-10', 0, 0),
(9, 9, 'x', 'space', 'i like astronomy', '20:21:23', '2011-07-10', 1, 0),
(8, 8, 's', 'sports', 'i like playing sports', '19:56:28', '2011-07-10', 0, 0),
(7, 6, 'x', 'movie genre ', 'i like war movies the most', '19:55:09', '2011-07-10', 0, 0),
(6, 6, 'x', 'movies', 'i love watching movies', '19:54:38', '2011-07-10', 1, 1),
(5, 3, 'x', 'music', 'i like to listen to music too', '19:53:56', '2011-07-10', 1, 0),
(4, 1, 'x', 'which game?', 'which game you like the most?', '19:53:15', '2011-07-10', 0, 0),
(3, 3, 'x', 'books', 'i like to read books', '19:52:19', '2011-07-10', 0, 0),
(2, 1, 's', 'type of games', 'i like all type of games', '19:51:25', '2011-07-10', 0, 1),
(1, 1, 's', 'games', 'i like games', '19:50:37', '2011-07-10', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userx`
--

CREATE TABLE IF NOT EXISTS `userx` (
  `username` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `birthday` date NOT NULL,
  `occupation` text NOT NULL,
  `interest` text NOT NULL,
  `location` text NOT NULL,
  `email` text NOT NULL,
  `joindate` date NOT NULL,
  `last` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userx`
--

INSERT INTO `userx` (`username`, `gender`, `name`, `birthday`, `occupation`, `interest`, `location`, `email`, `joindate`, `last`) VALUES
('x', 'male', 'thiru', '1992-07-14', 'student', 'i like sports', 'india', 'hui', '2011-07-07', '2011-07-12 01:27:41'),
('s', 'male', 'thiru', '1993-03-12', 'student', 'i like games', 'chennai', 'thiru@thiru.com', '2011-07-07', '2011-07-12 02:43:17');

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
(3, 6),
(1, 14),
(9, 6),
(8, 8),
(6, 3);
