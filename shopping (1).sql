-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2015 at 08:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`ProductID` int(10) NOT NULL,
  `ProductcatID` int(10) NOT NULL,
  `ProductName` text COLLATE utf8_vietnamese_ci NOT NULL,
  `ProductDesc` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `ExpiredDate` date NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Price` text COLLATE utf8_vietnamese_ci NOT NULL,
  `PhotoURL` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `ProductImportDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductcatID`, `ProductName`, `ProductDesc`, `ExpiredDate`, `Quantity`, `Price`, `PhotoURL`, `ProductImportDate`) VALUES
(2, 1, 'Forever 21', '', '2015-12-11', 20, '1420', '02.png', '2017-09-06'),
(4, 1, 'Gucci A1', '', '2015-02-11', 118, '7276', '04.png', '2014-10-06'),
(5, 1, 'Gucci 12', '', '2016-02-11', 1118, '42765', '05.png', '2012-10-06'),
(6, 1, 'Nice', '', '2014-11-11', 30, '500', '06.png', '2014-09-09'),
(7, 1, 'Adidas', '', '2014-11-11', 30, '600', '07.png', '2014-09-09'),
(11, 3, 'Rolex Z', '', '2015-11-11', 100, '5452', '11.png', '2015-06-06'),
(12, 3, 'Channel', '', '2015-09-10', 20, '4563', '12.png', '2015-08-06'),
(13, 3, 'Cartier', '', '2015-02-01', 107, '3241', '13.png', '2015-09-05'),
(14, 3, 'MontBlanc', '', '2015-02-11', 18, '1276', '15.png', '2015-10-06'),
(15, 3, 'Rolex D', '', '2015-11-10', 100, '5152', '14.png', '2015-06-06'),
(16, 3, 'Channel', '', '2014-09-10', 200, '1563', '16.png', '2015-08-06'),
(17, 3, 'Cartier', '', '2015-05-01', 102, '3231', '17.png', '2015-09-05'),
(18, 3, 'MontBlanc', '', '2015-02-11', 12, '12476', '18.png', '2015-10-06'),
(21, 2, 'Chanel', '', '2015-11-12', 100, '4576', '21.png', '2016-12-06'),
(22, 2, 'Forever 21', '', '2015-12-11', 20, '14202', '22.png', '2017-09-06'),
(23, 2, 'LX M99', '', '2015-01-01', 100, '2776', '23.png', '2018-09-09'),
(24, 2, 'Gucci A1', '', '2015-02-11', 118, '7276', '24.png', '2014-10-06'),
(25, 2, 'Gucci 12', '', '2016-02-11', 1118, '4276', '25.png', '2012-10-06'),
(32, 3, 'Rolexx', '', '0000-00-00', 100, '1201', 'R-16-den-160x240.jpg', '2015-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `productcat`
--

CREATE TABLE IF NOT EXISTS `productcat` (
`ProductCatID` int(11) NOT NULL,
  `ProductCatName` text COLLATE utf8_vietnamese_ci NOT NULL,
  `PhotoURL` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `productcat`
--

INSERT INTO `productcat` (`ProductCatID`, `ProductCatName`, `PhotoURL`) VALUES
(1, 'Giay', 'giay.png'),
(2, 'Ao', 'ao.png'),
(3, 'Dong Ho', 'dongho.png');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shoppingcart` (
`shoppingcartID` int(11) NOT NULL,
  `username` text COLLATE utf8_vietnamese_ci NOT NULL,
  `productid` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` text COLLATE utf8_vietnamese_ci NOT NULL,
  `boughtdate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`shoppingcartID`, `username`, `productid`, `quantity`, `price`, `boughtdate`) VALUES
(2, 'Acc3', 24, 12, '7276k', '2015-03-07'),
(3, 'Acc4', 22, 141, '1420k', '2015-03-06'),
(5, 'Acc6', 3, 21, '2776k', '0000-00-00'),
(6, 'Acc7', 0, 0, '', '0000-00-00'),
(14, 'Acc5', 22, 10, '1420k', '2015-03-07'),
(15, 'Acc5', 13, 12, '3241k', '2015-03-07'),
(17, 'Acc5', 24, 14, '7276k', '2015-03-07'),
(18, 'Acc5', 18, 11, '12476k', '2015-03-07'),
(19, 'Acc3', 21, 10, '4576k', '2015-03-07'),
(20, 'Acc3', 12, 11, '4563k', '2015-03-07'),
(21, 'Acc3', 4, 10, '7276k', '2015-03-07'),
(22, 'Acc5', 24, 12, '7276k', '2015-03-07'),
(23, 'tungomii', 23, 11, '2776k', '2015-03-09'),
(24, 'tungomii', 4, 12, '7276k', '2015-03-09'),
(25, 'admin', 6, 1, '500', '2015-04-03'),
(26, 'tungomii123', 2, 1, '1420', '2015-04-03'),
(27, 'admin', 4, 1, '7276', '2015-04-03'),
(28, 'admin', 5, 1, '42765', '2015-04-03'),
(29, 'Acc3', 2, 2, '1420', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`ID` int(11) NOT NULL,
  `username` text COLLATE utf8_vietnamese_ci NOT NULL,
  `password` text COLLATE utf8_vietnamese_ci NOT NULL,
  `lastlogin` datetime NOT NULL,
  `deleteflag` int(1) NOT NULL,
  `email` text COLLATE utf8_vietnamese_ci NOT NULL,
  `isadmin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `lastlogin`, `deleteflag`, `email`, `isadmin`) VALUES
(1, 'admin', 'admin', '2015-04-02 19:58:56', 0, 'email1@gmail.com', 1),
(2, 'Tungomii', 'hanu2011', '2015-03-09 07:51:11', 0, 'dothanhtung152@gmail.com', 1),
(3, 'Acc3', '3', '2015-03-07 18:51:33', 0, 'email3@gmail.com', 0),
(4, 'Acc4', '4', '0000-00-00 00:00:00', 0, 'email4@gmail.com', 0),
(5, 'Acc5', '5', '2015-03-07 18:30:50', 0, 'email5@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `productcat`
--
ALTER TABLE `productcat`
 ADD PRIMARY KEY (`ProductCatID`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
 ADD PRIMARY KEY (`shoppingcartID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `ProductID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `productcat`
--
ALTER TABLE `productcat`
MODIFY `ProductCatID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
MODIFY `shoppingcartID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
