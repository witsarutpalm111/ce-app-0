-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 02:55 PM
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
('b4f5919e89d7623c0df5cbceeb39111d', '123456789', 'fd4fd359883d5c5540b687b86f8ea8e5', 111, 23),
('1224af7317bc32f5ac9e2e03ae108d70', '555666', '9e96f88fc9b1996a9de428952a019f3c', 222, 24);

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
('1001', '111', 212, '190007'),
('1002', '111', 213, '190007'),
('1003', '111', 214, '190007'),
('1001', '111', 215, ''),
('1002', '111', 216, ''),
('1003', '111', 217, '');

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
('วันพฤหัสบดีที่ 27 มิถุนายน พ.ศ.2562 เวลา 10:21:18', 49, '190003', 2650, '', ''),
('วันพฤหัสบดีที่ 27 มิถุนายน พ.ศ.2562 เวลา 10:21:27', 50, '190004', 2200, 'confirm', '555666'),
('วันศุกร์ที่ 28 มิถุนายน พ.ศ.2562 เวลา 12:45:38', 53, '190007', 2400, 'confirm', '123456789');

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
('b4f5919e89d7623c0df5cbceeb39111d', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันศุกร์ที่ 28 มิถุนายน พ.ศ.2562 เวลา 19:15:14', 75, 0),
('1224af7317bc32f5ac9e2e03ae108d70', 'ยืนยันคำสั่งซ่อม', '', '', 0, 'วันศุกร์ที่ 28 มิถุนายน พ.ศ.2562 เวลา 19:46:26', 76, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `update_com`
--
ALTER TABLE `update_com`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
