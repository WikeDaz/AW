-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2018 at 07:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DBproyectAW`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertising`
--

CREATE TABLE `advertising` (
  `ID` varchar(11) NOT NULL,
  `type` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID_restaurant` varchar(11) NOT NULL,
  `ID_writer` varchar(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `tiemstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cookiesAD`
--

CREATE TABLE `cookiesAD` (
  `ID` varchar(11) NOT NULL,
  `type` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lines_orders`
--

CREATE TABLE `lines_orders` (
  `ID_order` int(11) NOT NULL,
  `ID_offer` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `ID` int(11) NOT NULL,
  `ID_restaurant` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(75) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `ID_transport` varchar(11) NOT NULL,
  `ID_restaurant` varchar(11) NOT NULL,
  `ID_user` varchar(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `typesfood`
--

CREATE TABLE `typesfood` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `typesfoodrst`
--

CREATE TABLE `typesfoodrst` (
  `ID_restaurant` varchar(11) NOT NULL,
  `ID_types_food` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `passwd` varchar(256) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_surname` varchar(30) NOT NULL,
  `user_nif` varchar(11) NOT NULL,
  `dir_user` varchar(50) NOT NULL,
  `tel_number_user` int(10) NOT NULL,
  `user_mail` varchar(30) NOT NULL,
  `rd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_rst`
--

CREATE TABLE `user_rst` (
  `ID_user` varchar(15) NOT NULL,
  `dsc_rst` varchar(150) NOT NULL,
  `name_rst` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_trs`
--

CREATE TABLE `user_trs` (
  `ID_user` varchar(11) NOT NULL,
  `vehicle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertising`
--
ALTER TABLE `advertising`
  ADD KEY `ID_user` (`ID`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID_restaurant`,`ID_writer`,`tiemstamp`),
  ADD KEY `ID_restaurant` (`ID_restaurant`),
  ADD KEY `ID_escritor` (`ID_writer`);

--
-- Indexes for table `cookiesAD`
--
ALTER TABLE `cookiesAD`
  ADD KEY `type` (`type`);

--
-- Indexes for table `lines_orders`
--
ALTER TABLE `lines_orders`
  ADD PRIMARY KEY (`ID_order`,`ID_offer`),
  ADD KEY `ID_order` (`ID_order`),
  ADD KEY `ID_offer` (`ID_offer`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_restaurant` (`ID_restaurant`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `ID_restaurant` (`ID_restaurant`);

--
-- Indexes for table `typesfood`
--
ALTER TABLE `typesfood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `typesfoodrst`
--
ALTER TABLE `typesfoodrst`
  ADD KEY `ID_restaurant` (`ID_restaurant`),
  ADD KEY `ID_types_food` (`ID_types_food`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_nif`),
  ADD UNIQUE KEY `user_nif` (`user_nif`);

--
-- Indexes for table `user_rst`
--
ALTER TABLE `user_rst`
  ADD KEY `ID_user` (`ID_user`);

--
-- Indexes for table `user_trs`
--
ALTER TABLE `user_trs`
  ADD KEY `ID_user` (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typesfood`
--
ALTER TABLE `typesfood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertising`
--
ALTER TABLE `advertising`
  ADD CONSTRAINT `advertising_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`user_nif`),
  ADD CONSTRAINT `advertising_ibfk_2` FOREIGN KEY (`type`) REFERENCES `typesfood` (`ID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ID_restaurant`) REFERENCES `users` (`user_nif`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`ID_writer`) REFERENCES `users` (`user_nif`);

--
-- Constraints for table `cookiesAD`
--
ALTER TABLE `cookiesAD`
  ADD CONSTRAINT `cookiesad_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typesfood` (`ID`);

--
-- Constraints for table `lines_orders`
--
ALTER TABLE `lines_orders`
  ADD CONSTRAINT `lines_orders_ibfk_3` FOREIGN KEY (`ID_order`) REFERENCES `orders` (`ID`),
  ADD CONSTRAINT `lines_orders_ibfk_4` FOREIGN KEY (`ID_offer`) REFERENCES `offers` (`ID`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typesfood` (`ID`),
  ADD CONSTRAINT `offers_ibfk_2` FOREIGN KEY (`ID_restaurant`) REFERENCES `users` (`user_nif`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`ID_user`) REFERENCES `users` (`user_nif`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`ID_restaurant`) REFERENCES `users` (`user_nif`);

--
-- Constraints for table `typesfoodrst`
--
ALTER TABLE `typesfoodrst`
  ADD CONSTRAINT `typesfoodrst_ibfk_1` FOREIGN KEY (`ID_restaurant`) REFERENCES `users` (`user_nif`),
  ADD CONSTRAINT `typesfoodrst_ibfk_2` FOREIGN KEY (`ID_types_food`) REFERENCES `typesfood` (`ID`);

--
-- Constraints for table `user_rst`
--
ALTER TABLE `user_rst`
  ADD CONSTRAINT `user_rst_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`user_nif`);

--
-- Constraints for table `user_trs`
--
ALTER TABLE `user_trs`
  ADD CONSTRAINT `user_trs_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`user_nif`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
