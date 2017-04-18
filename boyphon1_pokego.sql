-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2017 at 10:40 PM
-- Server version: 5.6.34
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boyphon1_pokego`
--

-- --------------------------------------------------------

--
-- Table structure for table `hello`
--

CREATE TABLE `hello` (
  `image` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Team` varchar(20) NOT NULL,
  `imageurl` varchar(300) NOT NULL,
  `iduser` varchar(30) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `profileset` text NOT NULL,
  `coverurl` varchar(300) NOT NULL,
  `youtuber` varchar(1) NOT NULL,
  `yuurl` varchar(50) NOT NULL,
  `profileid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hello`
--

INSERT INTO `hello` (`image`, `Name`, `Team`, `imageurl`, `iduser`, `twitter`, `instagram`, `profileset`, `coverurl`, `youtuber`, `yuurl`, `profileid`) VALUES
('930803823709759', 'Intisen In', 'Team Valor', ' ', '930803823709759', ' ', ' ', '1', 'uploadimages/1140x376.png', '0', '', NULL),
('1790577031189123', 'เมฆ ฐา.', 'Team Mystic', ' ', '1790577031189123', ' ', ' ', '1', 'uploadimages/1140x376.png', '0', '', NULL),
('1270829182967838', 'Watcharets Junputhin', 'Team Mystic', ' ', '1270829182967838', ' ', ' ', '1', 'uploadimages/1140x376.png', '0', '', NULL),
('968265739962975', 'HumDum WiseDotagg', 'Team Instinct', ' ', '968265739962975', 'pksctv', '', '3', 'uploadimages/1140x376.png', '0', '', NULL),
(' ', 'Open Graph Test User', 'Team Mystic', 'http://christyricepm.com/files/2014/02/ok-button-md1.png', '141112049676831', 'TheBoy_xyz', 'TheBoyPhongsakorn', '4', 'http://semenada.ru/wp-content/uploads/2014/11/collage_vysadka_krokusov-1140x376.jpg', '1', 'BoyPhongsakorn', NULL),
('983205441806789', 'Thaenthai Regret', 'Team Mystic', ' ', '983205441806789', ' ', ' ', '1', 'uploadimages/1140x376.png', '0', ' ', NULL),
('1075075735924471', 'Phongsakorn Boy Wisetthon', 'Team Mystic', ' ', '1075075735924471', ' ', ' ', '1', 'uploadimages/1140x376.png', '0', ' ', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
