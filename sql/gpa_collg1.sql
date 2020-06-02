-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2013 at 07:40 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gpa_collg`
--

-- --------------------------------------------------------

--
-- Table structure for table `grid`
--

CREATE TABLE IF NOT EXISTS `grid` (
  `grid_no` int(3) NOT NULL,
  `grid_val` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grid`
--

INSERT INTO `grid` (`grid_no`, `grid_val`) VALUES
(0, '#a518'),
(1, '#b75'),
(2, '#c361'),
(3, '#d15'),
(4, '#e241'),
(5, '#f197'),
(6, '#g716'),
(7, '#h507'),
(8, '#i439'),
(9, '#j51'),
(10, '#k905'),
(11, '#l903'),
(12, '#m205'),
(13, '#n857'),
(14, '#o772'),
(15, '#p173'),
(16, '#q133'),
(17, '#r332'),
(18, '#s660'),
(19, '#t784'),
(20, '#u317'),
(21, '#v696'),
(22, '#w413'),
(23, '#x706'),
(24, '#y351'),
(25, '#z668'),
(26, '#a375'),
(27, '#b407'),
(28, '#c327'),
(29, '#d466'),
(30, '#e390'),
(31, '#f856'),
(32, '#g841'),
(33, '#h808'),
(34, '#i802'),
(35, '#j522'),
(36, '#k986'),
(37, '#l915'),
(38, '#m454'),
(39, '#n373'),
(40, '#o356'),
(41, '#p503'),
(42, '#q689'),
(43, '#r879'),
(44, '#s44'),
(45, '#t793'),
(46, '#u353'),
(47, '#v8'),
(48, '#w644'),
(49, '#x503'),
(50, '#y788'),
(51, '#z228'),
(52, '#a250'),
(53, '#b852'),
(54, '#c838'),
(55, '#d510'),
(56, '#e455'),
(57, '#f558'),
(58, '#g847'),
(59, '#h320'),
(60, '#i354'),
(61, '#j840'),
(62, '#k659'),
(63, '#l628'),
(64, '#m540'),
(65, '#n417'),
(66, '#o617'),
(67, '#p904'),
(68, '#q106'),
(69, '#r507'),
(70, '#s566'),
(71, '#t115'),
(72, '#u648'),
(73, '#v831'),
(74, '#w848'),
(75, '#x730'),
(76, '#y258'),
(77, '#z605'),
(78, '#a309'),
(79, '#b718'),
(80, '#c529'),
(81, '#d549'),
(82, '#e291'),
(83, '#f548'),
(84, '#g557'),
(85, '#h882'),
(86, '#i638'),
(87, '#j188'),
(88, '#k934'),
(89, '#l322'),
(90, '#m694'),
(91, '#n108'),
(92, '#o755'),
(93, '#p89'),
(94, '#q302'),
(95, '#r276'),
(96, '#s613'),
(97, '#t900'),
(98, '#u808'),
(99, '#v161'),
(100, '#w602'),
(101, '#x975'),
(102, '#y53'),
(103, '#z731'),
(104, '#a315'),
(105, '#b33'),
(106, '#c383'),
(107, '#d455'),
(108, '#e846'),
(109, '#f291'),
(110, '#g640'),
(111, '#h303'),
(112, '#i790'),
(113, '#j470'),
(114, '#k169'),
(115, '#l742'),
(116, '#m240'),
(117, '#n787'),
(118, '#o812'),
(119, '#p742'),
(120, '#q789'),
(121, '#r962'),
(122, '#s915'),
(123, '#t771'),
(124, '#u532'),
(125, '#v213');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `secrete` varchar(45) NOT NULL,
  `ans` varchar(45) NOT NULL,
  `age` int(2) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `dob_month` int(2) NOT NULL,
  `dob_day` int(2) NOT NULL,
  `dob_year` int(4) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `country` int(20) NOT NULL,
  `image1` varchar(80) NOT NULL,
  `image2` varchar(80) NOT NULL,
  `image3` varchar(80) NOT NULL,
  `Encpass` varchar(80) NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=249 ;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `username`, `first_name`, `last_name`, `email`, `secrete`, `ans`, `age`, `phone_no`, `dob_month`, `dob_day`, `dob_year`, `gender`, `country`, `image1`, `image2`, `image3`, `Encpass`) VALUES
(242, 'Axy', 'Karode', 'Akshay', 'axy.dude@gmail.com', 'Lolzzzzzzzz', 'haha', 21, 2147483647, 6, 11, 1991, 'MALE', 0, 'ImageDB/1364739422Abstract 3D Wallpaper (14).jpg', 'ImageDB/1364739422Abstract 3D Wallpaper (32).jpg', 'ImageDB/1364739422Abstract HD Wallpaper (55).jpg', '867a559d70e3fbd0b4202101186fde46381ecbf7'),
(247, 'sanky', 'Mistry', 'Sanket', 'sanket.mistry13@gmail.com', 'whats ur bithday ?', 'bc', 21, 2147483647, 1, 1, 1991, 'MALE', 0, 'ImageDB/1364745349Abstract 3D Wallpaper (17).jpg', 'ImageDB/1364745349Abstract 3D Wallpaper (30).jpg', 'ImageDB/1364745349Abstract 3D Wallpaper (22).jpg', '867a559d70e3fbd0b4202101186fde46381ecbf7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
