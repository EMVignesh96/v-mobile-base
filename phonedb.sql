-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2016 at 09:37 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessory`
--

CREATE TABLE IF NOT EXISTS `accessory` (
  `ID` int(11) NOT NULL,
  `AccName` varchar(20) NOT NULL,
  `ManID` int(11) NOT NULL,
  `Compatibility` varchar(20) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`ID`, `AccName`, `ManID`, `Compatibility`, `Price`) VALUES
(1, 'Xperia SmartBand', 1, 'Xperia SmartPhones', 12990),
(2, 'Xperia SmartWatch 3', 1, 'Xperia SmartPhones', 14970),
(3, 'Bluetooth Headset', 1, 'Bluetooth', 4990),
(4, 'PowerBeats', 2, 'iPhones', 25690),
(5, 'Mono Bluetooth Head', 1, 'Bluetooth', 1990),
(6, 'iWatch', 2, 'iPhones', 22650),
(7, 'Apple Earpods', 2, 'iPhones', 2265);

-- --------------------------------------------------------

--
-- Table structure for table `battery`
--

CREATE TABLE IF NOT EXISTS `battery` (
  `ID` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `mAh` float NOT NULL,
  `TT` int(11) NOT NULL,
  `ST` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `battery`
--

INSERT INTO `battery` (`ID`, `Type`, `mAh`, `TT`, `ST`) VALUES
(1, 'Removable', 1750, 9, 454),
(2, 'Non-Removable', 1715, 14, 240),
(3, 'Removable', 3000, 18, 288),
(4, 'Non-Removable', 3450, 0, 0),
(5, 'Removable', 1800, 10, 312),
(6, 'Non-Removable', 2900, 17, 540),
(7, 'Non-Removable', 2470, 0, 0),
(8, 'Non-Removable', 3630, 0, 0),
(9, 'Non-Removable', 3220, 24, 330),
(10, 'Non-Removable', 3000, 0, 0),
(11, 'Removable', 2390, 0, 0),
(12, 'Non-Removable', 3900, 0, 0),
(13, 'Non-Removable', 2070, 0, 0),
(14, 'Non-Removable', 2200, 13, 576),
(15, 'Non-Removable', 2070, 24, 0),
(16, 'Non-Removable', 1980, 0, 0),
(17, 'Removable', 1830, 0, 0),
(18, 'Removable', 1200, 0, 0),
(19, 'Non-Removable', 3100, 16, 740),
(20, 'Removable', 1200, 12, 1104),
(21, 'Removable', 1320, 0, 0),
(22, 'Non-Removable', 1750, 9, 454),
(23, 'Non-Removable', 2700, 0, 0),
(24, 'Non-Removable', 2300, 17, 300),
(25, 'Non-Removable', 2950, 18, 0),
(26, 'Removable', 2100, 11, 430),
(27, 'Non-Removable', 3430, 17, 540),
(28, 'Removable', 3000, 18, 0),
(29, 'Non-Removable', 1432, 8, 200),
(30, 'Non-Removable', 1510, 10, 250),
(31, 'Non-Removable', 2500, 21, 840),
(32, 'Non-Removable', 8000, 7, 10),
(33, 'Non-Removable', 8600, 10, 100),
(34, 'Non-Removable', 6000, 13, 188),
(35, 'Non-Removable', 6700, 10, 720),
(36, 'Non-Removable', 4500, 23, 1300),
(37, 'Non-Removable', 4500, 24, 1030);

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE IF NOT EXISTS `camera` (
  `ID` int(11) NOT NULL,
  `PC` int(11) NOT NULL,
  `SC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`ID`, `PC`, `SC`) VALUES
(1, 8, 0),
(2, 12, 5),
(3, 20, 5),
(4, 12, 8),
(5, 8, 2),
(6, 23, 5),
(7, 13, 5),
(8, 20, 5),
(9, 13, 2),
(10, 21, 5),
(11, 5, 0),
(12, 21, 2),
(13, 8, 2),
(14, 10, 2),
(15, 5, 1),
(16, 5, 0),
(17, 5, 0),
(18, 2, 0),
(19, 20, 2),
(20, 2, 0),
(21, 2, 0),
(22, 5, 0),
(23, 12, 5),
(24, 8, 1),
(25, 13, 5),
(26, 5, 2),
(27, 23, 5),
(28, 13, 5),
(29, 8, 0),
(30, 8, 1),
(31, 8, 1),
(32, 5, 1),
(33, 5, 1),
(34, 21, 2),
(35, 8, 2),
(36, 8, 2),
(37, 5, 40);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `ID` int(11) NOT NULL,
  `RAM` int(11) NOT NULL,
  `ROM` int(11) NOT NULL,
  `CPU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`ID`, `RAM`, `ROM`, `CPU`) VALUES
(1, 1, 8, 1),
(2, 2, 4, 1),
(3, 3, 32, 2),
(4, 3, 32, 4),
(5, 2, 16, 2),
(6, 3, 32, 4),
(7, 2, 8, 1),
(8, 2, 32, 3),
(9, 3, 64, 3),
(10, 3, 64, 3),
(11, 1, 8, 1),
(12, 3, 64, 3),
(13, 1, 8, 1),
(14, 2, 64, 2),
(15, 1, 16, 1),
(16, 1, 4, 1),
(17, 1, 8, 1),
(18, 0, 0, 0),
(19, 3, 32, 3),
(20, 0, 0, 0),
(21, 0, 0, 0),
(22, 1, 4, 1),
(23, 2, 32, 3),
(24, 2, 32, 2),
(25, 2, 16, 1),
(26, 1, 16, 1),
(27, 3, 32, 4),
(28, 2, 16, 4),
(29, 1, 64, 1),
(30, 1, 32, 1),
(31, 1, 8, 1),
(32, 2, 16, 1),
(33, 1, 32, 1),
(34, 3, 16, 2),
(35, 9, 6, 0),
(36, 3, 16, 3),
(37, 3, 32, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dbadmin`
--

CREATE TABLE IF NOT EXISTS `dbadmin` (
  `Name` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbadmin`
--

INSERT INTO `dbadmin` (`Name`, `Password`) VALUES
('root', 'phonedb');

-- --------------------------------------------------------

--
-- Table structure for table `dimension`
--

CREATE TABLE IF NOT EXISTS `dimension` (
  `ID` int(11) NOT NULL,
  `L` float NOT NULL,
  `B` float NOT NULL,
  `H` float NOT NULL,
  `SS` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dimension`
--

INSERT INTO `dimension` (`ID`, `L`, `B`, `H`, `SS`) VALUES
(1, 5.07, 2.56, 0.38, 4.3),
(2, 5.44, 2.64, 0.28, 4.7),
(3, 5.71, 2.88, 0.32, 5.2),
(4, 6.27, 3.06, 0.29, 5.7),
(5, 5.12, 2.5, 0.35, 4.2),
(6, 5.75, 2.83, 0.29, 5.2),
(7, 5.59, 2.85, 0.46, 5),
(8, 5.83, 2.95, 0.43, 5.5),
(9, 6.27, 3.27, 0.4, 5.96),
(10, 6.06, 3, 0.44, 5.7),
(11, 5.11, 2.63, 0.48, 4.5),
(12, 5.64, 2.8, 0.32, 5.2),
(13, 5.57, 2.78, 0.43, 5),
(14, 5.09, 2.57, 0.41, 4.7),
(15, 5.11, 2.59, 0.46, 4.5),
(16, 4.91, 2.55, 0.48, 4.3),
(17, 5.1, 2.63, 0.36, 4.5),
(18, 4.88, 2.19, 0.41, 2.8),
(19, 5.75, 2.83, 0.29, 5.2),
(20, 4.39, 2.36, 0.46, 2.4),
(21, 4.55, 2.29, 0.54, 2.4),
(22, 4.88, 2.44, 0.37, 4),
(23, 5.79, 2.86, 0.31, 5.2),
(24, 5.43, 2.72, 0.34, 4.95),
(25, 5.96, 3.04, 0.29, 5.5),
(26, 5.66, 3.04, 0.38, 5.01),
(27, 6.08, 2.98, 0.31, 5.5),
(28, 5.99, 3.1, 0.3, 5.5),
(29, 4.54, 2.31, 0.37, 3.5),
(30, 4.9, 2.33, 0.35, 4),
(31, 5.56, 2.84, 0.35, 5),
(32, 9.5, 7.31, 0.37, 9.7),
(33, 9.4, 6.67, 0.3, 9.7),
(34, 10.47, 6.77, 6.4, 10.1),
(36, 8.4, 4.87, 6.4, 8),
(37, 5.98, 3.09, 0.32, 5.7);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `ID` int(11) NOT NULL,
  `ManName` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`ID`, `ManName`, `Country`) VALUES
(1, 'Sony', 'Japan'),
(2, 'Apple', 'USA'),
(3, 'Microsoft', 'USA'),
(4, 'Nokia', 'Finland'),
(5, 'Huawei', 'China'),
(6, 'Samsung', 'South Korea'),
(7, 'Lenovo', 'China'),
(8, 'Motorola', 'USA'),
(9, 'BlackBerry', 'Canada'),
(10, 'LG', 'South Korea'),
(11, 'HTC', 'Taiwan');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `ID` int(11) NOT NULL,
  `MobName` varchar(20) NOT NULL,
  `Launch` int(11) NOT NULL,
  `ManID` int(11) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`ID`, `MobName`, `Launch`, `ManID`, `Category`, `Price`) VALUES
(1, 'Xperia L', 2013, 1, 'SmartPhone', 7599),
(2, 'iPhone 6S', 2015, 2, 'SmartPhone', 72000),
(3, 'Lumia 950', 2015, 3, 'SmartPhone', 39999),
(4, 'Nexus 6P', 2015, 5, 'SmartPhone', 42990),
(5, 'BlackBerry Z10', 2013, 9, 'SmartPhone', 15499),
(6, 'Xperia Z5', 2015, 1, 'SmartPhone', 59990),
(7, 'Moto G3', 2015, 8, 'SmartPhone', 12999),
(8, 'Moto X Play', 2015, 8, 'SmartPhone', 18500),
(9, 'Nexus 6', 2014, 8, 'SmartPhone', 29999),
(10, 'Moto X Style', 2015, 8, 'SmartPhone', 29999),
(11, 'Moto E2', 2015, 8, 'SmartPhone', 4999),
(12, 'Moto Maxx', 2014, 8, 'SmartPhone', 45000),
(13, 'Moto G2', 2014, 8, 'SmartPhone', 124999),
(14, 'Moto X', 2013, 8, 'SmartPhone', 19999),
(15, 'Moto G', 2013, 8, 'SmartPhone', 9999),
(16, 'Moto E', 2014, 8, 'SmartPhone', 4999),
(17, 'Lumia 638', 2014, 3, 'SmartPhone', 8999),
(18, 'Nokia 225', 2014, 4, 'FeaturePhone', 3101),
(19, 'Xperia Z3', 2014, 1, 'SmartPhone', 32240),
(20, 'Asha 210', 2013, 4, 'FeaturePhone', 4714),
(21, 'Nokia C3', 2010, 4, 'FeaturePhone', 7089),
(22, 'Xperia M', 2013, 1, 'SmartPhone', 7500),
(23, 'Nexus 5X', 2015, 10, 'SmartPhone', 31990),
(24, 'Nexus 5', 2013, 10, 'SmartPhone', 22999),
(25, 'Galaxy E7', 2015, 6, 'SmartPhone', 14733),
(26, 'Galaxy Grand Neo', 2014, 6, 'SmartPhone', 13999),
(27, 'Xperia Z5 Premium', 2015, 1, 'SmartPhone', 65990),
(28, 'Galaxy J7', 2015, 6, 'SmartPhone', 20199),
(29, ' iPhone 4S', 2011, 2, 'SmartPhone', 16999),
(30, 'iPhone 5C', 2013, 2, 'SmartPhone', 23999),
(31, 'Lumia 640', 2015, 3, 'SmartPhone', 7999),
(32, 'iPad Mini 4', 2012, 2, 'Tablet', 29000),
(33, 'iPad Air 2', 2013, 2, 'Tablet', 35900),
(34, 'Xperia Z2 Tablet', 2014, 1, 'Tablet', 48190),
(35, 'Nexus 9', 2014, 11, 'Tablet', 42900),
(36, 'Xperia Z3 Tablet', 2014, 1, 'Tablet', 50390),
(37, 'Lumia 950 XL', 2015, 3, 'SmartPhone', 46999);

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE IF NOT EXISTS `platform` (
  `ID` int(11) NOT NULL,
  `OS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`ID`, `OS`) VALUES
(1, 'Android 4.2'),
(2, 'iOS 9'),
(3, 'Windows 10'),
(4, 'Android 6.0'),
(5, 'BlackBerry OS 10'),
(6, 'Android 5.1'),
(7, 'Android 5.1'),
(8, 'Android 5.1'),
(9, 'Android 5.0'),
(10, 'Android 5.1'),
(11, 'Android 5.0'),
(12, 'Android 4.4'),
(13, 'Android 4.4'),
(14, 'Android 4.2'),
(15, 'Android 4.3'),
(16, 'Android 4.4'),
(17, 'Windows 8.1'),
(18, 'Java'),
(19, 'Android 5.0'),
(20, 'Java'),
(21, 'Java'),
(22, 'Android 4.2'),
(23, 'Android 6.0'),
(24, 'Android 5.0'),
(25, 'Android 4.4.4'),
(26, 'Android 4.2'),
(27, 'Android 5.1'),
(28, 'Android 5.1'),
(29, 'iOS 5'),
(30, 'iOS 7'),
(31, 'Windows 8.1'),
(32, 'iOS 9'),
(33, 'iOS 7'),
(34, 'Android 5.0.2'),
(35, 'Android 5.1'),
(36, 'Android 4.4.4'),
(37, 'Windows 10');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `ID` int(11) NOT NULL,
  `Ratings` int(1) NOT NULL,
  `Review` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `Ratings`, `Review`) VALUES
(1, 3, 'A phone with Decent Configurations'),
(2, 5, 'Apple has really made a good phone.'),
(3, 4, 'Best Microsoft Phone ever.'),
(4, 4, 'A New Nexus from the Chinese.'),
(5, 3, 'A Phone with Decent Configurations form BlackBerry.'),
(6, 4, 'Good Phone form Sony with Finger print sensor. '),
(7, 4, 'Worth for the Price.'),
(8, 4, 'Smartphones for everyone.'),
(9, 4, 'Nexus from Motorola.'),
(10, 4, 'High-End Phone in Moto X series.'),
(11, 4, 'Affordable Phone with decent Configuration.'),
(12, 3, 'High-End Phone with Stock Android.'),
(13, 4, 'Good Phone with Good Configration.'),
(14, 4, 'The First phone in X series.'),
(15, 2, 'The First Phone with Good Features from Moto. '),
(16, 3, 'Cheapest Phone from Moto'),
(17, 2, 'A good Phone with cheap cost.'),
(18, 2, 'A feature Phone with good utility.'),
(19, 4, 'Xperia Z3 is good with sufficient high-end features.'),
(20, 3, 'A nice feature phone form Nokia.'),
(21, 3, 'A good Phone.'),
(22, 2, 'A nice cheap Phone from Sony.'),
(23, 4, 'The New Nexus from LG.'),
(24, 4, 'Pure Android Phone form LG.'),
(25, 3, 'A SmartPhone with Decent configuration from Samsung.'),
(26, 2, 'A Good Phone with Great Configuration.'),
(27, 5, 'The Best of Sony SmartPhones.'),
(28, 4, 'A decent Phone from Samsung.'),
(29, 4, 'The First iPhone with sufficient specification.'),
(30, 4, 'A Low cost version of iPhone 5s.'),
(31, 4, 'Middle Range Phone from Microsoft.'),
(32, 3, 'iPad with Retina HD.'),
(33, 4, 'Sleek looks.'),
(34, 4, 'Sony Tablet with 10 inches screen.'),
(35, 4, 'The Tablet in Nexus Series.'),
(36, 4, 'Z3 is a good Tablet.'),
(37, 5, 'Phone has Windows.');

-- --------------------------------------------------------

--
-- Table structure for table `userreview`
--

CREATE TABLE IF NOT EXISTS `userreview` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Ratings` int(11) NOT NULL,
  `Review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreview`
--

INSERT INTO `userreview` (`ID`, `Name`, `Ratings`, `Review`) VALUES
(29, 'Murali', 4, 'Good Phone.. Am loving it..'),
(1, 'Vignesh', 3, 'Cheap and Good.. Amazing Camera..'),
(7, 'Srivatsan', 4, 'Just got a new one.. good..'),
(11, 'Mouli', 3, 'Nice Phone..'),
(15, 'Abi', 2, 'Ive been using it for a year.. Now Ive rooted it..'),
(3, 'Arun', 3, 'High end!!'),
(24, 'Pradeep', 4, 'Good phone..I bought it 6 months back..'),
(11, 'Kathick', 3, 'Moto E 2nd Generation.. Very Good.. Low Cost.. Great!!'),
(27, 'Vignesh', 5, 'Wow!! Xperia with FingerPrint sensor!!!'),
(4, 'Vignesh', 5, 'Nexus form Hauwei... OMG!! First Android with Fingerprint sensor!!!'),
(15, 'Nikhil', 3, 'Not soo good... G3 is good.. '),
(19, 'Kavin', 4, 'I wanna buy this phone...'),
(2, 'Vignesh', 4, 'Amazing 3D Touch!!!'),
(23, 'Arun', 3, 'Not Comparable with iPhone 6S... Thats Awesome..'),
(23, 'Venkat', 4, 'No.. Its good..'),
(23, 'Vino', 2, 'But its LG.. No phones can match iPhones..'),
(1, 'Praveen', 3, 'But it doesnt have a good sefie camera... Not suitable for Selfie Pullais..'),
(16, 'Govind', 4, 'Good phone at its price..'),
(16, 'Priyanka', 5, 'I give it 5 stars..'),
(24, 'Vignesh', 4, 'Will it run Marshmallow??'),
(24, 'Pradeep', 4, 'Of course.. Itll.'),
(2, 'Murali', 4, 'Fine'),
(18, 'Pradiv', 0, 'Who wants a feature phone??!!!'),
(27, 'Aravind', 4, 'nice.. Should be less expensive..'),
(29, 'Praveen', 5, 'The size is perfect to handle..'),
(34, 'Vignesh', 3, 'Z3 Tablet is far better..'),
(34, 'Abishek', 2, 'Of Course...'),
(27, 'Carl', 4, 'Ill give it 4 Stars...'),
(27, 'Arun', 0, 'Samsung was the first to launch finger print sensor..'),
(10, 'Vignesh', 3, 'Impressive..............'),
(10, 'Arun', 0, 'Yeah!!'),
(29, 'Vino', 0, 'Fits my hand so well..'),
(37, 'Arun', 4, 'Awesome from Microsoft...'),
(37, 'Vignesh', 0, 'Not that Worth..'),
(32, 'Vignesh', 4, 'Good Phone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ManID` (`ManID`);

--
-- Indexes for table `battery`
--
ALTER TABLE `battery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dimension`
--
ALTER TABLE `dimension`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ManID` (`ManID`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessory`
--
ALTER TABLE `accessory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `battery`
--
ALTER TABLE `battery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessory`
--
ALTER TABLE `accessory`
  ADD CONSTRAINT `accessory_ibfk_1` FOREIGN KEY (`ManID`) REFERENCES `manufacturer` (`ID`);

--
-- Constraints for table `battery`
--
ALTER TABLE `battery`
  ADD CONSTRAINT `battery_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `phone` (`ID`);

--
-- Constraints for table `camera`
--
ALTER TABLE `camera`
  ADD CONSTRAINT `camera_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `phone` (`ID`);

--
-- Constraints for table `config`
--
ALTER TABLE `config`
  ADD CONSTRAINT `config_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `phone` (`ID`),
  ADD CONSTRAINT `config_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `phone` (`ID`);

--
-- Constraints for table `dimension`
--
ALTER TABLE `dimension`
  ADD CONSTRAINT `dimension_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `phone` (`ID`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`ManID`) REFERENCES `manufacturer` (`ID`);

--
-- Constraints for table `platform`
--
ALTER TABLE `platform`
  ADD CONSTRAINT `platform_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `phone` (`ID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `phone` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
