-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2014 at 09:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stiu`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cname`) VALUES
(2, 'THA'),
(3, 'Board'),
(4, 'FPS Games'),
(5, 'Adventure'),
(6, 'eargerhg'),
(7, 'sdgs');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `user_type`) VALUES
(1, 'apleknj', 'pppkkk111', 'admin'),
(2, 'nitcha', 'abc123', 'user'),
(3, 'irexjr', 'ifat', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE IF NOT EXISTS `loginadmin` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`user`, `password`) VALUES
('admin', '12345'),
('irexjr', 'ifat'),
('abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `productid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `productimage` varchar(100) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `purchasedate` date NOT NULL,
  `paymentmethod` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`productid`, `amount`, `productname`, `username`, `price`, `productimage`, `remark`, `purchasedate`, `paymentmethod`, `address`) VALUES
(9, 1, 'Torchlight 2', 'irexjr', 35, 'images/productimage/tl2.png', 'CheckedOut', '2014-10-09', 'Paypal', 'Sukhumvit 71 preedi 20 banomyong 50 Bangkok Thailand'),
(5, 3, 'Modernwarfare 2', 'irexjr', 50, 'images/productimage/mw2.jpg', 'CheckedOut', '2014-10-10', 'CreditCard', 'Sukhumvit 71 preedi 20 banomyong 50 Bangkok Thailand'),
(15, 1, 'Diablo2', 'irexjr', 10, 'images/productimage/db2.jpg', 'CheckedOut', '2014-10-10', 'CreditCard', 'Sukhumvit 71 preedi 20 banomyong 50 Bangkok Thailand'),
(5, 1, 'Modernwarfare 2', 'irexjr', 50, 'images/productimage/mw2.jpg', 'CheckedOut', '2014-10-10', 'CreditCard', 'Sukhumvit 71 preedi 20 banomyong 50 Bangkok Thailand');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL,
  `productimage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `productimage`) VALUES
(4, 'Dayz Stand Alone', 20, 'Amazing Survival Apocalypse game that features extreme realism and amazing graphics ', '', 'images/productimage/dayz.jpg'),
(5, 'Modernwarfare 2', 50, 'FPS Game from COD franchies features amazing multiplayer experiance for the 6th Installment of this game', '', 'images/productimage/mw2.jpg'),
(6, 'Minecraft', 30, 'Build whatever you want! An Amazazing adventure game for your whole family!', '', 'images/productimage/minecraft.png'),
(7, 'League of Legends', 20, 'MOBA games that tests your will and concentration to beat other players and become the LOL tourney champion!', '', 'images/productimage/league.png'),
(8, 'Borderlands The Sequel', 50, 'Launch into the Borderlands universe and shoot n loot your way through a brand new adventure that rockets you onto Pandoras moon in Borderlands: The Pre-Sequel!', '', 'images/productimage/border.jpg'),
(9, 'Torchlight 2', 35, 'The award-winning action RPG is back, bigger and better than ever! Torchlight II takes you back into the quirky, fast-paced world of bloodthirsty monsters, bountiful treasures, and sinister secrets - and, once again, the fate of the world is in your hands!', '', 'images/productimage/tl2.png'),
(10, 'BitMap2Material', 60, 'Bitmap2Material 3 IS OUT! Bitmap2Material is an incredibly powerful tool that helps you generate full, seamlessly tiling materials from any bitmap image. This now includes all PBR (Physically-Based Rendering) channels, based on ', '', 'images/productimage/bm2.jpg'),
(11, 'Gauntlet', 70, 'The classic Gauntlet 4-player co-op action gameplay returns in a completely new experience! Battle the endless hordes of foes as you and your friends fight for treasure and glory via both local and online co-op multiplayer. Invade the Darkness this Summer on PC and Steam Machines!', '', 'images/productimage/gaunt.jpg'),
(12, 'StarCraft', 82, 'Star Craft is a strat based competition game that Koreans love to play. You will suck at the start!', '6', 'images/productimage/sc2.jpg'),
(13, 'BattleField 4', 20, 'One of the most realistic FPS shooters out at the moment. Features realism to extreme limits. 100s of guns to play with and best Multiplayer experiance. Battlefield 4 is awesome.', '', 'images/productimage/bf4.jpg'),
(14, 'Diablo3', 50, 'Diablo 3 is a dungeon running came. gear up farm paragon levels and PVP each other!', '', 'images/productimage/download.jpg'),
(15, 'Diablo2', 10, 'Diablo2 is a dungeon running came. OLD BUT GOLD PVP PVE GET DAT GEAR LOOT STACKS', '', 'images/productimage/db2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `customer_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`customer_id`, `first_name`, `last_name`, `gender`, `email`, `address`, `date_of_birth`, `username`, `password`) VALUES
(40, 'Lera', 'dskonhewrh', 'Male', 'sdonbwoktn', 'eoernoiqwerhn', '1950-01-01', 'lera', 'opijwgwg'),
(53, 'pwiegj', 'oenrhe', 'Male', 'oiwjgi@live.com', 'owwkdgowegn', '1950-01-01', 'test1', 'test1'),
(54, 'Thomas', 'Charlesworth', 'Male', 'thomas.charlesworths@gmail.com', 'Sukhumvit 71 preedi 20 banomyong 50 Bangkok Thailand', '1996-11-20', 'irexjr', 'ifat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
