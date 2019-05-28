-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 10:53 AM
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
  `Serial_number` int(11) NOT NULL,
  `Recieve_ID` text NOT NULL,
  `User_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `com`
--

INSERT INTO `com` (`ID_com`, `Serial_number`, `Recieve_ID`, `User_id`, `id`) VALUES
('f2acc825cdf670e66d30e3c31dea0463', 5555, 'beb6b30becdde85643f50e301386b268', 111, 20);

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
('111', '111', '111', '111', 'Std', '111', '111', '111'),
('123456', 'ooo', 'aaa', '963256325', 'Admin', 'aplm@gmail.com', '-', '123456'),
('222', '2222', '2222', '2222', 'Std', '2222', '2222', '222'),
('4444', '4444', '444', '456456', 'Std', '45645', '5555', '444');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `update_com`
--
ALTER TABLE `update_com`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
