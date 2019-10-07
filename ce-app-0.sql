-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 03:11 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ce-app-0`
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
('1003', 'bedrage', 218, '190009'),
('1004', 'bedrage', 219, '190009'),
('1005', 'bedrage', 220, '190009');

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
('วันศุกร์ที่ 28 มิถุนายน พ.ศ.2562 เวลา 12:45:38', 53, '190007', 2400, 'confirm', '123456789'),
('วันเสาร์ที่ 10 สิงหาคม พ.ศ.2562 เวลา 05:22:16', 54, '190008', 2400, '', ''),
('วันจันทร์ที่ 7 ตุลาคม พ.ศ.2562 เวลา 02:40:04', 55, '190009', 950, 'confirm', '');

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
('123456', 'witsarut', 'wittaya', '00000000', 'Admin', 'palm@gmail.com', '-', '123456'),
('bedrage', 'Kamin', 'Sangsri', '090-972-1056', 'Student', 's60122519036@ssru.ac.th', '', 'bedrage');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `update_com`
--
ALTER TABLE `update_com`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;