-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2014 at 04:40 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `product_management_ps02231`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerId` int(225) NOT NULL AUTO_INCREMENT,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`customerId`,`user`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `user`, `pass`, `name`, `phone`, `email`, `address`) VALUES
(1, 'phucltps02231', 'abc123456', 'Thiên Phúc', '01653075223', 'phucltps02231@fpt.edu.vn', '13 Trường Trinh TP.HCM'),
(2, 'phatltps02232', 'asdasdsdd532', 'Tấn Phát', '01693330202', 'phatdaps02232@fpt.edu.vn', '289 Hà Tôn Quyền Cần Thơ'),
(3, 'hienltps02240', 'wsddswaddw33', 'Mỹ Hiền', '0918499393', 'hienl@gmail.com', '2201 Lê Lợi Hà Nội'),
(4, 'hungltps02224', 'pasdapwkks201', 'Quốc Hùng', '01683292922', 'hung@yahoo.com', '693 Ngô Quyền TP.HCM'),
(5, 'huyenltps0235362', 'pepd102', 'Hà Huyền', '016822422343', 'huyenl@fpt.edu.vn', '249 Nam Kỳ Khởi Nghĩa TP.HCM'),
(6, 'haltps023531', 'pepd4242102', 'Hà Hà', '01682242464', 'hal@fpt.edu.vn', '400 Nam Kỳ Khởi Nghĩa TP.HCM'),
(7, 'quenltps74646', 'p5757pd102', 'Quen Quen', '01682242424', 'quenl@fpt.edu.vn', '5 Lê Lợi TP.HCM'),
(8, 'vultps05755', 'd1353502', 'Đình Vũ', '01682242412', 'vu@fpt.edu.vn', '15 Thái Phiên TP.HCM'),
(11, 'songtu6789', '123456', 'Thảo Trang', '01684242424', 'trangl@fpt.edu.vn', '225 Nguyễn Trãi TP.HCM'),
(13, 'customer', '123456', 'No name', '01684242424', 'noname@yahoo.com', '45 Hà Thành TPHCM');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE IF NOT EXISTS `management` (
  `managementId` int(225) NOT NULL AUTO_INCREMENT,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`managementId`,`user`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`managementId`, `user`, `pass`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `datecreate` varchar(64) NOT NULL,
  `total` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderId`, `datecreate`, `total`, `customerId`) VALUES
(106, '2014-11-30', 210000, 0),
(107, '2014-11-30', 210000, 0),
(108, '2014-11-30', 420000, 11),
(109, '2014-11-30', 420000, 11),
(110, '2014-11-30', 210000, 0),
(111, '2014-11-30', 210000, 11),
(112, '2014-11-30', 215000, 11),
(113, '2014-11-30', 215000, 11),
(114, '2014-11-30', 210000, 11),
(115, '2014-11-30', 210000, 11),
(116, '2014-11-30', 210000, 11),
(117, '2014-11-30', 210000, 11),
(118, '2014-11-30', 210000, 11),
(119, '2014-11-30', 210000, 11),
(120, '2014-11-30', 210000, 11),
(121, '2014-11-30', 210000, 11),
(122, '2014-11-30', 210000, 11),
(123, '2014-11-30', 210000, 11),
(124, '2014-11-30', 210000, 11),
(125, '2014-11-30', 210000, 11),
(126, '2014-11-30', 210000, 11),
(127, '2014-11-30', 210000, 11),
(128, '2014-11-30', 210000, 11),
(129, '2014-11-30', 210000, 11),
(130, '2014-11-30', 210000, 11),
(131, '2014-11-30', 210000, 11),
(132, '2014-11-30', 210000, 11),
(133, '2014-11-30', 210000, 11),
(134, '2014-11-30', 210000, 11),
(135, '2014-11-30', 210000, 11),
(136, '2014-11-30', 210000, 11),
(137, '2014-11-30', 210000, 13),
(138, '2014-11-30', 630000, 11),
(139, '2014-11-30', 630000, 11),
(140, '2014-11-30', 630000, 11),
(141, '2014-11-30', 1680000, 13),
(142, '2014-12-01', 1470000, 11);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderId` int(225) DEFAULT NULL,
  `productId` int(4) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `quanlity` int(4) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderId`, `productId`, `price`, `quanlity`, `total`) VALUES
(106, 10, 210000, 1, 210000),
(107, 10, 210000, 1, 210000),
(108, 10, 210000, 2, 420000),
(109, 10, 210000, 2, 420000),
(110, 10, 210000, 1, 210000),
(111, 10, 210000, 1, 210000),
(112, 20, 215000, 1, 215000),
(113, 20, 215000, 1, 215000),
(114, 10, 210000, 1, 210000),
(115, 10, 210000, 1, 210000),
(116, 10, 210000, 1, 210000),
(117, 10, 210000, 1, 210000),
(118, 10, 210000, 1, 210000),
(119, 10, 210000, 1, 210000),
(120, 10, 210000, 1, 210000),
(121, 10, 210000, 1, 210000),
(122, 10, 210000, 1, 210000),
(123, 10, 210000, 1, 210000),
(124, 10, 210000, 1, 210000),
(125, 10, 210000, 1, 210000),
(126, 10, 210000, 1, 210000),
(127, 10, 210000, 1, 210000),
(128, 10, 210000, 1, 210000),
(129, 10, 210000, 1, 210000),
(130, 10, 210000, 1, 210000),
(131, 10, 210000, 1, 210000),
(132, 10, 210000, 1, 210000),
(133, 10, 210000, 1, 210000),
(134, 10, 210000, 1, 210000),
(135, 10, 210000, 1, 210000),
(136, 10, 210000, 1, 210000),
(137, 10, 210000, 1, 210000),
(138, 10, 210000, 3, 630000),
(139, 10, 210000, 3, 630000),
(140, 10, 210000, 3, 630000),
(141, 10, 210000, 8, 1680000),
(142, 10, 210000, 7, 1470000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productId` int(225) NOT NULL AUTO_INCREMENT,
  `productCode` varchar(32) NOT NULL DEFAULT '',
  `name` varchar(32) DEFAULT NULL,
  `type` varchar(24) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  PRIMARY KEY (`productId`,`productCode`),
  UNIQUE KEY `productCode` (`productCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productCode`, `name`, `type`, `image`, `price`) VALUES
(1, 'A0233', 'Áo hồng', 'Đồ nữ', 'g1.jpg', 120000),
(2, 'A0291', 'Áo trắng', 'Đồ nữ', 'g2.jpg', 130000),
(3, 'A03902', 'Áo đầm hồng', 'Đồ nữ', 'g3.jpg', 140000),
(4, 'A01901', 'Áo thể thao', 'Đồ nữ', 'g4.jpg', 150000),
(5, 'A02019', 'Áo trắng váy đỏ', 'Đồ nữ', 'g5.jpg', 160000),
(6, 'A201', 'Áo đen', 'Đồ nữ', 'g6.jpg', 170000),
(7, 'A9402', 'Áo xanh dương', 'Đồ nữ', 'g7.jpg', 180000),
(8, 'A2013', 'Áo trắng váy đen', 'Đồ nữ', 'g8.jpg', 190000),
(9, 'A3024', 'Áo khoác xám', 'Đồ nữ', 'g9.jpg', 200000),
(10, 'A302193', 'Áo sọc hồng', 'Đồ nữ', 'g10.jpg', 210000),
(11, 'B0132', 'Áo thun k style', 'Đồ nam', 'b1.jpg', 125000),
(12, 'B0133', 'Áo sơ mi xanh', 'Đồ nam', 'b2.jpg', 135000),
(13, 'B0121', 'Áo sơ mi trắng', 'Đồ nam', 'b3.jpg', 145000),
(14, 'B01113', 'Áo xanh gọn', 'Đồ nam', 'b4.jpg', 155000),
(15, 'B3329', 'Áo đen trắng', 'Đồ nam', 'b5.jpg', 165000),
(16, 'B2492', 'Áo thanh lịch', 'Đồ nam', 'b6.jpg', 175000),
(17, 'B2942', 'Áo xanh quần đen', 'Đồ nam', 'b7.jpg', 185000),
(18, 'B2021', 'Áo xanh quần xám', 'Đồ nam', 'b8.jpg', 195000),
(19, 'B492', 'Áo xanh quần kem', 'Đồ nam', 'b9.jpg', 205000),
(20, 'B4022', 'Áo trắng quần đen', 'Đồ nam', 'b10.jpg', 215000),
(21, 'C4535', 'Áo đôi xanh', 'Đồ đôi', 'd1.jpg', 130000),
(22, 'C1432', 'Áo đôi sọc', 'Đồ đôi', 'd2.jpg', 135000),
(23, 'C3423', 'Áo đôi xanh dương', 'Đồ đôi', 'd3.jpg', 145000),
(24, 'C4324', 'Áo đôi trắng', 'Đồ đôi', 'd4.jpg', 155000),
(25, 'C435', 'Áo đôi đơn điệu', 'Đồ đôi', 'd5.jpg', 165000),
(26, 'C123', 'Áo đôi thanh lịch', 'Đồ đôi', 'd6.jpg', 175000),
(27, 'C456', 'Áo đôi du lịch', 'Đồ đôi', 'd7.jpg', 185000),
(28, 'C243', 'Áo đôi du lịch 2', 'Đồ đôi', 'd8.jpg', 195000),
(29, 'C0391', 'Áo đôi xám', 'Đồ đôi', 'd9.jpg', 207000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
