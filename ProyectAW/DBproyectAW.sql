-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2018 at 07:45 PM
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

--
-- Dumping data for table `advertising`
--

INSERT INTO `advertising` (`ID`, `type`, `time`) VALUES
('44332211K', 6, '2018-05-07 00:16:12'),
('44332211K', 6, '2018-05-07 00:56:57'),
('44332211K', 6, '2018-05-07 00:56:58'),
('44332211K', 6, '2018-05-07 00:56:59'),
('44332211K', 6, '2018-05-07 00:57:00');

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

--
-- Dumping data for table `cookiesAD`
--

INSERT INTO `cookiesAD` (`ID`, `type`, `time`) VALUES
('2', 1, '2018-05-07 00:16:40'),
('', 1, '2018-05-07 00:23:31'),
('3', 2, '2018-05-07 01:04:26'),
('3', 2, '2018-05-07 01:04:29'),
('3', 2, '2018-05-07 01:04:30'),
('3', 6, '2018-05-07 01:04:46'),
('3', 6, '2018-05-07 01:04:47'),
('3', 6, '2018-05-07 01:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `lines_orders`
--

CREATE TABLE `lines_orders` (
  `ID_order` int(11) NOT NULL,
  `ID_offer` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lines_orders`
--

INSERT INTO `lines_orders` (`ID_order`, `ID_offer`, `count`) VALUES
(3, 2, 0),
(3, 3, 0),
(4, 2, 8);

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
  `type` int(11) NOT NULL,
  `hidden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`ID`, `ID_restaurant`, `name`, `price`, `description`, `type`, `hidden`) VALUES
(1, '23070793V', 'Tortilla de patatas', 7, 'Tortilla de patatas de 4 huevos', 1, 1),
(2, '23070793V', 'Croquetas de jamï¿½n', 9, ' Croquetas de jamï¿½n ibï¿½rico, 6 unidades', 6, 0),
(3, '23070793V', 'pulpo a la gallega', 12, 'Pulpo traído directamente desde galicia', 1, 1),
(6, '47391269A', 'Hamburguesa CAMBA', 15, 'Plátano dorado, emulsión de Ron Santa Teresa y rodaja de queso de cabra.', 2, 0),
(7, '47391269A', 'Hamburguesa CHIPOTLE', 13, 'Guacamole casero, fresco y rústico, acompañado de salsa Chipotle ', 2, 0),
(11, '47391269A', 'Hamburguesa Kevin Ba', 11, 'Carne en la plancha mezclada con trozos de bacon, cebolla y queso', 2, 0),
(12, '47391269A', 'Hamburguesa YANKEE', 12, 'Carne de vaca, costillas de cerdo, queso, cebolla y lechuga batavia.', 2, 0);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `ID_transport`, `ID_restaurant`, `ID_user`, `date`, `state`, `type`, `total_price`) VALUES
(3, '', '23070793V', '44332211K', '2018-05-08 21:00:00', 0, 0, 65),
(4, '', '23070793V', '44332211K', '2018-05-07 02:57:51', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `typesfood`
--

CREATE TABLE `typesfood` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typesfood`
--

INSERT INTO `typesfood` (`ID`, `Name`) VALUES
(1, 'Española'),
(2, 'Americana'),
(3, 'China'),
(4, 'Italiana'),
(5, 'Mexicana'),
(6, 'Turca'),
(7, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `typesfoodrst`
--

CREATE TABLE `typesfoodrst` (
  `ID_restaurant` varchar(11) NOT NULL,
  `ID_types_food` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typesfoodrst`
--

INSERT INTO `typesfoodrst` (`ID_restaurant`, `ID_types_food`) VALUES
('23070793V', 1),
('47391269A', 2),
('12345678K', 7);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`passwd`, `type`, `user_name`, `user_surname`, `user_nif`, `dir_user`, `tel_number_user`, `user_mail`, `rd`) VALUES
('$2y$10$qIQOKuxOfmDcK.KE6rJYTOebwxcf03xOdlGbsTC1PfEdLhUU3GCUa', 1, 'Yamir', 'Kumar', '12345678K', 'Calle Cea Bermudez 17, Madrid CP:28030', 911830344, 'indian@restaurante.com', '2018-05-05 17:41:45'),
('$2y$10$qIQOKuxOfmDcK.KE6rJYTOebwxcf03xOdlGbsTC1PfEdLhUU3GCUa', 1, 'restaurante', '', '23070793V', 'Calle del Barco 6 3ºD, Madrid 28015  ', 611221122, 'restaurante@restaurante.com', '2018-05-05 17:41:45'),
('$2y$10$qIQOKuxOfmDcK.KE6rJYTOebwxcf03xOdlGbsTC1PfEdLhUU3GCUa', 2, 'repartidor', '', '23131493V', '', 618172113, 'repartidor@repartidor.com', '2018-05-05 17:41:45'),
('$2y$10$qIQOKuxOfmDcK.KE6rJYTOebwxcf03xOdlGbsTC1PfEdLhUU3GCUa', 0, 'cliente', '', '44332211K', 'Calle buen suceso 2, Madrid CP:28015', 611223344, 'cliente@cliente.com', '2018-05-05 17:41:45'),
('1', 1, 'Joe', 'Smith', '47391269A', 'Calle de la Palma 32, Madrid CP:28015', 915839263, 'american@restaurante.com', '2018-05-05 17:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_rst`
--

CREATE TABLE `user_rst` (
  `ID_user` varchar(15) NOT NULL,
  `dsc_rst` varchar(150) NOT NULL,
  `name_rst` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rst`
--

INSERT INTO `user_rst` (`ID_user`, `dsc_rst`, `name_rst`) VALUES
('23070793V', 'Restaurante de ejemplo, galardonado con el premio a la mejor tortilla de patatas de Madrid en el año 2015. ', 'El restaurante'),
('47391269A', 'Carne de vaca, fresca y picada a diario una sola vez. Pan artesano y patatas 100% caseras.', 'Hamburguesería '),
('12345678K', 'Considerado el mejor restaurante indio de la Zona', 'Restaurante ind');

-- --------------------------------------------------------

--
-- Table structure for table `user_trs`
--

CREATE TABLE `user_trs` (
  `ID_user` varchar(11) NOT NULL,
  `vehicle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_trs`
--

INSERT INTO `user_trs` (`ID_user`, `vehicle`) VALUES
('23131493V', 'Bicicleta BH X6');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `typesfood`
--
ALTER TABLE `typesfood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
