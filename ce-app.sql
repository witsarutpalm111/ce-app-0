-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 06:05 AM
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
  `Receive_ID` text NOT NULL,
  `User_id` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `com`
--

INSERT INTO `com` (`ID_com`, `Serial_number`, `Receive_ID`, `User_id`, `id`) VALUES
('b4f5919e89d7623c0df5cbceeb39111d', '123456789', 'fd4fd359883d5c5540b687b86f8ea8e5', '111', 23),
('1224af7317bc32f5ac9e2e03ae108d70', '555666', '9e96f88fc9b1996a9de428952a019f3c', '222', 24),
('2e734db4061e706f1bf9a3a87c9078e7', '888', '982e1074f752829bdadbd7a36db68bb9', '222', 25),
('2095d8174914c2addaba8e2230ea70c2', '123456', '1ff6f53248686c5b13fed8d9a26dbfe7', 'hhh', 27),
('95704bea222b0e64526b6a99a82b431d', '555666', '4f059f7887ad9376aa1277d5510baa0b', '111', 28),
('9727237dcab4b35de3208a181a069760', '555', '860a2803e2a19b99e38732c2f0ace253', '111', 29),
('a2076a28e6e04b28e786e9786d4b4c85', '444', '195ab952ff929b70e729e56cd9194166', '111', 30),
('eeb6a0b2b5fe87fe74e6a9a3628902da', 'tttt5555', '2e5958e34ca210ab24db3bddaafd2f93', '111', 31),
('edf10e8885fb947071e93a7f59cd0f1b', '68&jgcjg', '4d934652f0f3b261cc89787c469c43a1', 'user', 32),
('5ee5adc76d580f069b16f8822775f00b', 'ugcut', 'b33f457f0eff57fb2e7abdf81b7ce131', 'user', 33),
('3548186ded4003a32dc597890e9125dc', 'utdtu75฿75', '3fde0d9ee8839ca645418043479971df', 'user', 34),
('e0966a2e00f8e544ae551de0ffc65056', 'gdsytcivnpol', 'f85ed83ecb760c44339aba0463c1ae6e', 'user', 35);

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
('1001', '222', 194, '190003'),
('1002', '222', 195, '190003'),
('1003', '222', 196, '190003'),
('1004', '222', 197, '190003'),
('1001', '222', 198, '190004'),
('1002', '222', 199, '190004'),
('1004', '111', 221, '190008'),
('1002', 'hhh', 223, '190010'),
('1001', 'hhh', 224, '190010'),
('1003', 'hhh', 225, '190010'),
('1004', 'hhh', 226, '190010'),
('1005', 'hhh', 227, '190010'),
('1001', 'hhh', 231, ''),
('1002', 'hhh', 232, ''),
('1004', '111', 244, '190013'),
('1006', '111', 247, '190013'),
('1002', 'user', 249, '190014'),
('1003', 'user', 250, '190014'),
('1002', 'user', 252, '190015'),
('1003', 'user', 253, '190015'),
('1002', 'user', 255, '190016'),
('1003', 'user', 256, '190016'),
('1002', 'user', 258, '190017'),
('1003', 'user', 259, '190017');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `date_order` text NOT NULL,
  `id` int(11) NOT NULL,
  `id_order` text NOT NULL,
  `order_price` int(11) NOT NULL,
  `status_order` text NOT NULL,
  `Serial_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`date_order`, `id`, `id_order`, `order_price`, `status_order`, `Serial_number`) VALUES
('วันพฤหัสบดีที่ 27 มิถุนายน พ.ศ.2562 เวลา 10:21:18', 49, '190003', 2650, 'confirm', '888'),
('วันพฤหัสบดีที่ 27 มิถุนายน พ.ศ.2562 เวลา 10:21:27', 50, '190004', 2200, 'confirm', '555666'),
('วันศุกร์ที่ 28 มิถุนายน พ.ศ.2562 เวลา 12:45:38', 53, '190007', 2400, 'confirm', '123456789'),
('วันอาทิตย์ที่ 30 มิถุนายน พ.ศ.2562 เวลา 15:09:05', 54, '190008', 2650, 'confirm', '555666'),
('วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 04:42:57', 55, '190009', 2400, 'confirm', '555'),
('วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 05:10:27', 56, '190010', 3150, 'confirm', '123456'),
('วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 11:04:32', 57, '190011', 2400, 'confirm', '444'),
('วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 11:18:21', 58, '190012', 2900, 'confirm', '555666'),
('วันจันทร์ที่ 15 กรกฎาคม พ.ศ.2562 เวลา 10:13:32', 59, '190013', 705, 'confirm', 'tttt5555'),
('วันพุธที่ 16 ตุลาคม พ.ศ.2562 เวลา 04:54:28', 60, '190014', 2400, 'confirm', '68&jgcjg'),
('วันพุธที่ 16 ตุลาคม พ.ศ.2562 เวลา 04:57:04', 61, '190015', 2400, 'confirm', 'ugcut'),
('วันพุธที่ 16 ตุลาคม พ.ศ.2562 เวลา 04:57:22', 62, '190016', 2400, 'confirm', 'utdtu75฿75'),
('วันเสาร์ที่ 21 ธันวาคม พ.ศ.2562 เวลา 09:32:21', 63, '190017', 2400, 'confirm', 'gdsytcivnpol');

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
(500, 'อาการจอฟ้า', 1005, 120),
(55, 'aaa', 1006, 20);

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
('b4f5919e89d7623c0df5cbceeb39111d', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันศุกร์ที่ 28 มิถุนายน พ.ศ.2562 เวลา 19:15:14', 75, 0),
('1224af7317bc32f5ac9e2e03ae108d70', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันศุกร์ที่ 28 มิถุนายน พ.ศ.2562 เวลา 19:46:26', 76, 0),
('2e734db4061e706f1bf9a3a87c9078e7', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันอาทิตย์ที่ 30 มิถุนายน พ.ศ.2562 เวลา 19:48:05', 77, 0),
('09ff6ca0a11ea12154544430e4843768', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 10:39:00', 78, 0),
('a58a24a6f5247c88b3614a5c44e107bd', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 10:52:45', 79, 0),
('7948de2859d29096d52d19a2f22fd324', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 10:58:29', 80, 0),
('10793da6890fe0d94a4a60afe729ea26', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 11:02:24', 81, 0),
('d96edd5da1132bda3d57c3bc8812fdbb', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 11:04:39', 82, 0),
('2095d8174914c2addaba8e2230ea70c2', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 11:10:38', 83, 0),
('95704bea222b0e64526b6a99a82b431d', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 16:20:09', 84, 0),
('9727237dcab4b35de3208a181a069760', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 1 กรกฎาคม พ.ศ.2562 เวลา 16:26:08', 85, 0),
('a2076a28e6e04b28e786e9786d4b4c85', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันอังคารที่ 2 กรกฎาคม พ.ศ.2562 เวลา 14:43:26', 86, 0),
('b4f5919e89d7623c0df5cbceeb39111d', 'ตรวจหาจุดบกพร่อง', 'fykgk', 'gukuk', 200, 'วันอังคารที่ 2 กรกฎาคม พ.ศ.2562 เวลา 14:43:50', 87, 1),
('eeb6a0b2b5fe87fe74e6a9a3628902da', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันจันทร์ที่ 15 กรกฎาคม พ.ศ.2562 เวลา 15:14:07', 88, 0),
('edf10e8885fb947071e93a7f59cd0f1b', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันพุธที่ 16 ตุลาคม พ.ศ.2562 เวลา 09:59:55', 89, 0),
('5ee5adc76d580f069b16f8822775f00b', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันพุธที่ 16 ตุลาคม พ.ศ.2562 เวลา 10:00:05', 90, 0),
('3548186ded4003a32dc597890e9125dc', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันพุธที่ 16 ตุลาคม พ.ศ.2562 เวลา 10:00:13', 91, 0),
('e0966a2e00f8e544ae551de0ffc65056', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันเสาร์ที่ 21 ธันวาคม พ.ศ.2562 เวลา 15:33:38', 92, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone_num` int(11) NOT NULL,
  `Role` text NOT NULL,
  `Email` text NOT NULL,
  `More_contact` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `fname`, `lname`, `phone_num`, `Role`, `Email`, `More_contact`, `Password`) VALUES
('111', 'witsarut', 'wittaya', 0, 'Std', 'palm@gmail.com', '5555', '111'),
('123456', 'witsarut', 'wittaya', 0, 'Admin', 'palm@gmail.com', '-', 'e10adc3949ba59abbe56e057f20f883e'),
('222', 'witsarut', '5555', 0, 'asfasf', 'palm@gmail.com', 'safsafsaf', '222'),
('333', 'witsarut', 'wittaya', 0, '783783', 'palm@gmail.com', '78378', '333'),
('444', '444', '444', 444, 'Guest', '4444', '', '444'),
('555', 'iiii', 'iiiii', 44444554, 'Student', 'iiiii', '', '555'),
('hhh', 'hhh', 'h', 0, 'Student', 'h', '', 'hhh'),
('user', ',lll', ',lk,k,lp,', 7548484, 'Student', 'palm@gmail', '', 'ee11cbb19052e40b07aac0ca060c23ee');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `update_com`
--
ALTER TABLE `update_com`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
