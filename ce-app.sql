-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 10:45 AM
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
('aa4d905f7a115fa48316c29cf638c8f4', '561', '2e3196f85e7182da7bd1f5dfe6eedba0', 111, 1),
('9ac4f3edea45470ef0d7d114705915dd', '591561', 'e653389a0332c8506cf7a7c447af863a', 111, 2),
('c84eba5de62428dd65a6414bd27e0d4a', '5555', '82a86ecc8d992fc2afa89353ece79f2f', 111, 3),
('fa6d4cfd3c26c2537cf6cfc3274a1634', '5555', '15495fccc22ef9667d73945310c21b83', 111, 4),
('840b64c11771151a7babd4d9f538e5dd', '555666', 'e604d125ff0f15cf1b56494c40fb6d80', 111, 5),
('eba3174adf235b31afeff3fc12b3e977', '555666', 'e85c4e9a342747e1fdeaa73d65d16654', 111, 6);

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
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `update_com`
--

INSERT INTO `update_com` (`ID_com`, `Status_com`, `Detail_com`, `Note_com`, `Price_com`, `Time_update`, `id`) VALUES
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'ตรวจหาจุดบกพร่อง', 'ฟหำกเฟำเฟำเ', '--', 5000, 'วันพุธที่ 29 พฤษภาคม พ.ศ.2562 เวลา 23:41:05', 10),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'อื่นๆ', 'adgfadg', '453453', 200, 'วันพุธที่ 29 พฤษภาคม พ.ศ.2562 เวลา 23:41:20', 11),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'ติดตั้งอุปกรณ์ที่เสียหาย', '', '', 0, 'วันอาทิตย์ที่ 2 มิถุนายน พ.ศ.2562 เวลา 12:53:11', 12),
('840b64c11771151a7babd4d9f538e5dd', '', '', '', 0, '', 13),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'ติดตั้งอุปกรณ์ที่เสียหาย', '56161561', 'AFBAEFBA', 5000, 'วันอาทิตย์ที่ 2 มิถุนายน พ.ศ.2562 เวลา 13:13:15', 14),
('fa6d4cfd3c26c2537cf6cfc3274a1634', 'ทดสอบเครื่องคอมพิวเตอร์', 'ihgvouybokm', '-', 200, 'วันอาทิตย์ที่ 2 มิถุนายน พ.ศ.2562 เวลา 13:13:37', 15),
('840b64c11771151a7babd4d9f538e5dd', 'ติดตั้งอุปกรณ์ที่เสียหาย', '78378378', '783783', 5000, 'วันอาทิตย์ที่ 2 มิถุนายน พ.ศ.2562 เวลา 13:20:59', 16),
('840b64c11771151a7babd4d9f538e5dd', 'ตรวจเช็คความเรียบร้อย', '783783793', '-', 7783, 'วันอาทิตย์ที่ 2 มิถุนายน พ.ศ.2562 เวลา 13:21:27', 17),
('eba3174adf235b31afeff3fc12b3e977', '', '', '', 0, '', 18);

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
  `E-mail` text NOT NULL,
  `More_contact` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `fname`, `lname`, `phone_num`, `Role`, `E-mail`, `More_contact`, `Password`) VALUES
('111', 'palm', 'dfhjdfj', '0895685236', 'Std', 'palm@gmail.com', '5555', '111'),
('1112', '5555', '5555', '5555', 'Admin', '5555', '444', '4444'),
('123456', 'ooo', 'aaa', '963256325', 'Admin', 'aplm@gmail.com', '-', '123456'),
('1234561', '5555', 'dfhjdfj', '55555', 'Admin', '555', '5555', '4444'),
('qwdwf', 'qwfqwf', 'qwfqwf', '591415641', 'Admin', 'qwfqwfqwf.com', 'qwfqwf', 'qwfwf');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `update_com`
--
ALTER TABLE `update_com`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
