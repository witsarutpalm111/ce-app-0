-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 06:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ce-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `com`
--

CREATE TABLE `com` (
  `ID_com` text NOT NULL,
  `Serial_number` text NOT NULL,
  `Recieve_ID` text NOT NULL,
  `User_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `com`
--

INSERT INTO `com` (`ID_com`, `Serial_number`, `Recieve_ID`, `User_id`, `id`) VALUES
('fa6d4cfd3c26c2537cf6cfc3274a1634', '5555', '15495fccc22ef9667d73945310c21b83', 111, 4),
('c1350a824260f096a33874d4de2367e6', '123456', 'd9c36c991f4f54cec688e9cf1a07f16d', 222, 8),
('f074ba7230039abc2eec93540d24f2ad', '555666', '002194e5a814a024d0980e19eb3d0796', 333, 9),
('548cd7d0ac2720bf847165da0207b950', '44444', '2782deec1d2340c8d253765bcd5baba5', 444, 16),
('a38758eead4f9eefc6ee101f9c8b08cb', '555666', '97401645ea9ac80171bb6ae815206516', 111, 23),
('b039c3752d060b2f5b1532c35b70bca0', '1212121', 'e8a9138724662188931f502ea022f952', 444, 24),
('0e3be65ab88f27f0ba4aab244037f0dd', '123', '68b9fcbabde996ac98f78d480dd86af8', 111, 25);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_product` text NOT NULL,
  `user_id` text NOT NULL,
  `id` int(11) NOT NULL,
  `id_order` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_product`, `user_id`, `id`, `id_order`) VALUES
('1004', '111', 148, '190002'),
('1005', '111', 149, '190002'),
('1004', '111', 153, '190003'),
('1001', '222', 154, '190004'),
('1002', '222', 155, '190004'),
('1003', '222', 156, '190004'),
('1001', '111', 162, '190006'),
('1002', '111', 163, '190006'),
('1003', '111', 164, '190006'),
('1004', '111', 165, '190006'),
('1005', '111', 166, '190006'),
('1002', '111', 167, '190007');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `date_order` text NOT NULL,
  `id` int(11) NOT NULL,
  `id_order` text NOT NULL,
  `order_price` int(11) NOT NULL,
  `status_order` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`date_order`, `id`, `id_order`, `order_price`, `status_order`) VALUES
('วันพฤหัสบดีที่ 20 มิถุนายน พ.ศ.2562 เวลา 11:49:52', 32, '190001', 2400, 'confirm'),
('วันพฤหัสบดีที่ 20 มิถุนายน พ.ศ.2562 เวลา 11:50:33', 33, '190002', 3150, 'confirm'),
('วันพฤหัสบดีที่ 20 มิถุนายน พ.ศ.2562 เวลา 12:23:54', 34, '190003', 2650, 'confirm'),
('วันศุกร์ที่ 21 มิถุนายน พ.ศ.2562 เวลา 08:01:28', 35, '190004', 2400, ''),
('วันจันทร์ที่ 24 มิถุนายน พ.ศ.2562 เวลา 05:40:54', 36, '190005', 2000, ''),
('วันจันทร์ที่ 24 มิถุนายน พ.ศ.2562 เวลา 08:25:53', 37, '190006', 3150, ''),
('วันจันทร์ที่ 24 มิถุนายน พ.ศ.2562 เวลา 12:12:16', 38, '190007', 2000, 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `price_rate`
--

CREATE TABLE `price_rate` (
  `Price` int(11) NOT NULL,
  `List` text NOT NULL,
  `id_list` int(3) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price_rate`
--

INSERT INTO `price_rate` (`Price`, `List`, `id_list`, `time`) VALUES
(200, 'ล้างเครื่อง', 1001, 30),
(2000, 'ลง window', 1002, 170),
(200, 'ทำความสะอาด', 1003, 50),
(250, 'ตรวจสภาพเครื่อง', 1004, 30),
(500, 'อาการจอฟ้า', 1005, 120);

-- --------------------------------------------------------

--
-- Table structure for table `update_com`
--

CREATE TABLE `update_com` (
  `ID_com` text NOT NULL,
  `Status_com` text NOT NULL,
  `Detail_com` text NOT NULL,
  `Note_com` text NOT NULL,
  `Price_com` int(11) NOT NULL,
  `Time_update` text NOT NULL,
  `id` int(5) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `update_com`
--

INSERT INTO `update_com` (`ID_com`, `Status_com`, `Detail_com`, `Note_com`, `Price_com`, `Time_update`, `id`, `count`) VALUES
('c1350a824260f096a33874d4de2367e6', 'ตรวจเช็คความเรียบร้อย', '1561knioml;,', '453453', 0, 'วันพุธที่ 12 มิถุนายน พ.ศ.2562 เวลา 17:55:48', 22, 2),
('f074ba7230039abc2eec93540d24f2ad', 'อื่นๆ', 'fdhdhdhdtjdff', '783783', 0, 'วันพุธที่ 12 มิถุนายน พ.ศ.2562 เวลา 17:57:16', 25, 2),
('f074ba7230039abc2eec93540d24f2ad', 'ทดสอบเครื่องคอมพิวเตอร์', 'srmrtms4t6m', '', 5000, 'วันพุธที่ 12 มิถุนายน พ.ศ.2562 เวลา 17:57:27', 26, 3),
('f074ba7230039abc2eec93540d24f2ad', 'ทำความสะอาดตัวเครื่อง', 'ppppppppppppppppppp', 'ppp', 0, 'วันพุธที่ 12 มิถุนายน พ.ศ.2562 เวลา 19:11:53', 28, 4),
('c1350a824260f096a33874d4de2367e6', 'ตรวจหาจุดบกพร่อง', '111111', '1111', 1111, 'วันพุธที่ 12 มิถุนายน พ.ศ.2562 เวลา 19:13:31', 30, 3),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'ทำความสะอาดตัวเครื่อง', '666666', '-', 7783, 'วันพุธที่ 12 มิถุนายน พ.ศ.2562 เวลา 19:14:28', 31, 6),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'อื่นๆ', '11111', '--', 5000, 'วันศุกร์ที่ 14 มิถุนายน พ.ศ.2562 เวลา 19:06:29', 32, 7),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'ทำความสะอาดตัวเครื่อง', '999999', '-', 200, 'วันศุกร์ที่ 14 มิถุนายน พ.ศ.2562 เวลา 19:14:56', 33, 8),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'ทำความสะอาดตัวเครื่อง', 'aaa', 'AFBAEFBA', 5000, 'วันศุกร์ที่ 14 มิถุนายน พ.ศ.2562 เวลา 19:31:49', 34, 9),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'ทำความสะอาดตัวเครื่อง', 'aaa', '-', 300, 'วันศุกร์ที่ 14 มิถุนายน พ.ศ.2562 เวลา 19:32:18', 35, 10),
('548cd7d0ac2720bf847165da0207b950', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันศุกร์ที่ 21 มิถุนายน พ.ศ.2562 เวลา 19:21:59', 43, 0),
('548cd7d0ac2720bf847165da0207b950', 'ตรวจหาจุดบกพร่อง', '][][]', '', 200, 'วันศุกร์ที่ 21 มิถุนายน พ.ศ.2562 เวลา 19:22:13', 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone_num` text NOT NULL,
  `Role` text NOT NULL,
  `Email` text NOT NULL,
  `More_contact` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `fname`, `lname`, `phone_num`, `Role`, `Email`, `More_contact`, `Password`) VALUES
('111', 'witsarut', 'wittaya', '00000000', 'Std', 'palm@gmail.com', '5555', '111'),
('123456', 'witsarut', 'wittaya', '00000000', 'Admin', 'palm@gmail.com', '-', '123456'),
('222', 'witsarut', '5555', '00000000', 'asfasf', 'palm@gmail.com', 'safsafsaf', '222'),
('333', 'witsarut', 'wittaya', '00000000', '783783', 'palm@gmail.com', '78378', '333'),
('444', '444', '444', '444', 'Guest', '4444', '', '444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_rate`
--
ALTER TABLE `price_rate`
  ADD PRIMARY KEY (`id_list`);

--
-- Indexes for table `update_com`
--
ALTER TABLE `update_com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com`
--
ALTER TABLE `com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `update_com`
--
ALTER TABLE `update_com`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
