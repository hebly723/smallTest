-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2016 at 08:14 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `sh_book`
--

CREATE TABLE IF NOT EXISTS `sh_book` (
  `bookname` varchar(20) DEFAULT NULL,
  `writer` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sh_book`
--

INSERT INTO `sh_book` (`bookname`, `writer`, `image`, `price`) VALUES
('工科数学分析', '王义和', '', 25),
('好多小说', '不知道', '/book/haoduo.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `sh_goods`
--

CREATE TABLE IF NOT EXISTS `sh_goods` (
  `bookname` varchar(20) DEFAULT NULL,
  `writer` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sh_goods`
--

INSERT INTO `sh_goods` (`bookname`, `writer`, `image`, `price`) VALUES
('工科数学分析', '王义和', '', 25),
('好多小说', '不知道', '/book/haoduo.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `sh_user`
--

CREATE TABLE IF NOT EXISTS `sh_user` (
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sh_user`
--

INSERT INTO `sh_user` (`username`, `password`) VALUES
('Dick', '123'),
('Dick', '234'),
('Dick', '234'),
('Dick', '234'),
('helen', '234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
