-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql113.byethost7.com
-- Generation Time: Jul 09, 2016 at 05:18 PM
-- Server version: 5.6.30-76.3
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b7_16656868_helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `acessos`
--

CREATE TABLE IF NOT EXISTS `acessos` (
  `id_acesso` int(11) NOT NULL AUTO_INCREMENT,
  `cod_usuario` varchar(50) NOT NULL,
  `data_in` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  PRIMARY KEY (`id_acesso`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `acessos`
--

INSERT INTO `acessos` (`id_acesso`, `cod_usuario`, `data_in`, `ip`, `login`) VALUES
(1, '4', '1458181242', '179.34.111.37', 'EDMILSON'),
(2, '4', '1458181287', '179.34.111.37', 'ADMIN'),
(3, '4', '1458181324', '179.34.111.37', 'ADMIN'),
(4, '4', '1458226517', '179.210.220.241', 'ADMIN'),
(5, '4', '1458226579', '179.210.220.241', 'ADMIN'),
(6, '4', '1458255744', '179.34.111.37', 'EDMILSON'),
(7, '2', '1458256853', '179.34.111.37', 'VAMBER'),
(8, '4', '1458265196', '179.34.111.37', 'EDMILSON'),
(9, '1', '1458265247', '179.34.111.37', 'NATALIA'),
(10, '3', '1458265277', '179.34.111.37', 'MARINS'),
(11, '4', '1458265346', '179.34.111.37', 'EDMILSON'),
(12, '3', '1458265498', '179.34.111.37', 'MARINS'),
(13, '2', '1458266839', '179.34.111.37', 'VAMBER'),
(14, '3', '1458266879', '179.34.111.37', 'MARINS'),
(15, '4', '1458266945', '179.34.111.37', 'EDMILSON'),
(16, '3', '1458267041', '179.34.111.37', 'MARINS'),
(17, '4', '1458268682', '179.34.111.37', 'EDMILSON'),
(18, '4', '1458312540', '179.34.111.37', 'EDMILSON'),
(19, '4', '1458325096', '179.34.111.37', 'EDMILSON'),
(20, '4', '1458325245', '179.34.111.37', 'ADMIN'),
(21, '4', '1458499993', '179.34.111.37', 'EDMILSON'),
(22, '2', '1458505025', '179.34.111.37', 'VAMBER'),
(23, '1', '1458505203', '179.34.111.37', 'NATALIA'),
(24, '4', '1458579724', '179.210.220.241', 'EDMILSON');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
