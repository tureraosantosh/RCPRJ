-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 05:29 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(6, 'AC'),
(8, 'BATTERY'),
(2, 'FRIDGE'),
(4, 'HOMETHEATRE'),
(5, 'INVERTER'),
(7, 'MOBILE'),
(1, 'TV'),
(3, 'WASHINGMACHINE');

-- --------------------------------------------------------

--
-- Table structure for table `product_stock`
--

CREATE TABLE IF NOT EXISTS `product_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `hsn_number` varchar(100) NOT NULL,
  `model_number` varchar(100) NOT NULL,
  `serial_number` varchar(100) NOT NULL,
  `imei_number` varchar(100) NOT NULL,
  `actual_amount` float NOT NULL,
  `gst_rate` varchar(100) NOT NULL,
  `total_amount` float NOT NULL,
  `fridge_litre` varchar(100) NOT NULL,
  `inverter_eb` varchar(100) NOT NULL,
  `battery_ah` varchar(100) NOT NULL,
  `washing_kg` varchar(100) NOT NULL,
  `ac_ton` varchar(100) NOT NULL,
  `tv_inches` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hsn_number` (`hsn_number`,`model_number`,`serial_number`,`imei_number`),
  KEY `FK_product_role_category` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product_stock`
--

INSERT INTO `product_stock` (`id`, `cid`, `pname`, `hsn_number`, `model_number`, `serial_number`, `imei_number`, `actual_amount`, `gst_rate`, `total_amount`, `fridge_litre`, `inverter_eb`, `battery_ah`, `washing_kg`, `ac_ton`, `tv_inches`) VALUES
(1, 2, 'GODREJ', '232131312', '322DDD33', '333E333', '342342DC', 3000, '18%', 4000, '1', '', '', '', '', ''),
(2, 2, 'PANASONIC', '342424DFF', '34343DDCD', '343434DDDF', '34343434', 40000, '18%', 333333, '2', '', '', '', '', ''),
(3, 1, 'AKAI', '4324324DFD', '343434DFDF', '3434343FF', '3434343F', 400004, '18%', 2000, '', '', '', '', '', '24');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_stock`
--
ALTER TABLE `product_stock`
  ADD CONSTRAINT `FK_product_role_category` FOREIGN KEY (`cid`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
