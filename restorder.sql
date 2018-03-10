-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 02:15 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_head_order`
--

CREATE TABLE `tb_head_order` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `invoice` char(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_table` int(11) NOT NULL,
  `date` date NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_order`
--

CREATE TABLE `tb_item_order` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `invoice` char(255) NOT NULL,
  `code_menu` char(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `code_menu` char(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `type` varchar(255) NOT NULL,
  `sub_type` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_table`
--

CREATE TABLE `tb_table` (
  `id` int(11) NOT NULL,
  `name_business` varchar(255) NOT NULL,
  `table_id` int(11) NOT NULL,
  `information` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp_item_order`
--

CREATE TABLE `tb_tmp_item_order` (
  `id` int(11) NOT NULL,
  `name_business` varchar(255) NOT NULL,
  `table_id` int(11) NOT NULL,
  `code_menu` char(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_rights` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `password`, `access_rights`) VALUES
(58, 'juheri842@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager'),
(59, 'test@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'supervisor'),
(60, 'naon@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager'),
(61, 'alsagunadi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager'),
(62, 'alsagunadi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager'),
(63, 'alsagunadi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_profil`
--

CREATE TABLE `tb_user_profil` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `type_business` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_profil`
--

INSERT INTO `tb_user_profil` (`id`, `email`, `business_name`, `type_business`, `city`, `status`, `address`) VALUES
(38, 'juheri842@gmail.com', 'Mc. Donald', 'restoran', NULL, '0', NULL),
(39, 'test@gmail.com', 'restoran', '', NULL, '0', NULL),
(40, 'naon@gmail.com', 'restoran', 'restoran', NULL, '0', NULL),
(41, 'alsagunadi@gmail.com', 'LPKIA', 'Restoran', NULL, '0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_head_order`
--
ALTER TABLE `tb_head_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_item_order`
--
ALTER TABLE `tb_item_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_table`
--
ALTER TABLE `tb_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tmp_item_order`
--
ALTER TABLE `tb_tmp_item_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tb_user_profil`
--
ALTER TABLE `tb_user_profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_head_order`
--
ALTER TABLE `tb_head_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_item_order`
--
ALTER TABLE `tb_item_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_table`
--
ALTER TABLE `tb_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tmp_item_order`
--
ALTER TABLE `tb_tmp_item_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_user_profil`
--
ALTER TABLE `tb_user_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
