-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-04-2018 a las 23:18:35
-- Versión del servidor: 5.5.57-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `awDB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lines_orders`
--

CREATE TABLE `lines_orders` (
  `ID` int(11) NOT NULL,
  `ID_order` int(11) NOT NULL,
  `ID_offer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lines_orders`
--

INSERT INTO `lines_orders` (`ID`, `ID_order`, `ID_offer`) VALUES
(1, 3, 3),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `offers`
--

CREATE TABLE `offers` (
  `ID` int(11) NOT NULL,
  `ID_restaurant` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(75) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `offers`
--

INSERT INTO `offers` (`ID`, `ID_restaurant`, `name`, `price`, `description`, `type`) VALUES
(1, '23070793V', 'Tortilla de patatas', 7, 'Tortilla de patatas de 4 huevos', 1),
(2, '23070793V', 'Croquetas de jamón', 9, 'Croquetas de jamón ibérico, 6 unidades', 1),
(3, '23070793V', 'pulpo a la gallega', 12, 'Pulpo traído directamente desde galicia', 1),
(6, '47391269A', 'Hamburguesa CAMBURGUER', 15, 'Plátano dorado, emulsión de Ron Santa Teresa y rodaja de queso de cabra.', 2),
(7, '47391269A', 'Hamburguesa CHIPOTLE', 13, 'Guacamole casero, fresco y rústico, acompañado de salsa Chipotle ', 2),
(11, '47391269A', 'Hamburguesa Kevin Bacon', 11, 'Carne en la plancha mezclada con trozos de bacon, cebolla y queso', 2),
(12, '47391269A', 'Hamburguesa YANKEE', 12, 'Carne de vaca, costillas de cerdo, queso, cebolla y lechuga batavia.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `ID_transport` varchar(11) NOT NULL,
  `ID_restaurant` varchar(11) NOT NULL,
  `ID_user` varchar(11) NOT NULL,
  `date` datetime NOT NULL,
  `state` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`ID`, `ID_transport`, `ID_restaurant`, `ID_user`, `date`, `state`, `total_price`) VALUES
(3, '', '23070793V', '44332211K', '2018-05-08 21:00:00', 0, 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typesfood`
--

CREATE TABLE `typesfood` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `typesfood`
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
-- Estructura de tabla para la tabla `typesfoodrst`
--

CREATE TABLE `typesfoodrst` (
  `ID_restaurant` varchar(11) NOT NULL,
  `ID_types_food` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `typesfoodrst`
--

INSERT INTO `typesfoodrst` (`ID_restaurant`, `ID_types_food`) VALUES
('23070793V', 1),
('47391269A', 2),
('12345678K', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `passwd` int(9) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_surname` varchar(30) NOT NULL,
  `user_nif` varchar(11) NOT NULL,
  `dir_user` varchar(50) NOT NULL,
  `tel_number_user` int(10) NOT NULL,
  `user_mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`passwd`, `type`, `user_name`, `user_surname`, `user_nif`, `dir_user`, `tel_number_user`, `user_mail`) VALUES
(1, 1, 'Yamir', 'Kumar', '12345678K', 'Calle Cea Bermudez 17, Madrid CP:28030', 911830344, 'indian@restaurante.com'),
(1, 1, 'restaurante', '', '23070793V', 'Calle del Barco 6 3ºD, Madrid 28015  ', 611221122, 'restaurante@restaurante.com'),
(1, 2, 'repartidor', '', '23131493V', '', 618172113, 'repartidor@repartidor.com'),
(1, 0, 'cliente', '', '44332211K', 'Calle buen suceso 2, Madrid CP:28015', 611223344, 'cliente@cliente.com'),
(1, 1, 'Joe', 'Smith', '47391269A', 'Calle de la Palma 32, Madrid CP:28015', 915839263, 'american@restaurante.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_rst`
--

CREATE TABLE `user_rst` (
  `ID_user` varchar(11) NOT NULL,
  `dsc_rst` varchar(150) NOT NULL,
  `name_rst` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_rst`
--

INSERT INTO `user_rst` (`ID_user`, `dsc_rst`, `name_rst`) VALUES
('23070793V', 'Restaurante de ejemplo, galardonado con el premio a la mejor tortilla de patatas de Madrid en el año 2015. ', 'El restaurante'),
('47391269A', 'Carne de vaca, fresca y picada a diario una sola vez. Pan artesano y patatas 100% caseras.', 'Hamburguesería Joe'),
('12345678K', 'Considerado el mejor restaurante indio de la Zona', 'Restaurante indio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_trs`
--

CREATE TABLE `user_trs` (
  `ID_user` varchar(11) NOT NULL,
  `vehiculo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_trs`
--

INSERT INTO `user_trs` (`ID_user`, `vehiculo`) VALUES
('23131493V', 'Bicicleta BH X6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lines_orders`
--
ALTER TABLE `lines_orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_order` (`ID_order`),
  ADD KEY `ID_offer` (`ID_offer`);

--
-- Indices de la tabla `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_restaurant` (`ID_restaurant`),
  ADD KEY `type` (`type`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `ID_restaurant` (`ID_restaurant`);

--
-- Indices de la tabla `typesfood`
--
ALTER TABLE `typesfood`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `typesfoodrst`
--
ALTER TABLE `typesfoodrst`
  ADD KEY `ID_restaurant` (`ID_restaurant`),
  ADD KEY `ID_types_food` (`ID_types_food`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_nif`),
  ADD UNIQUE KEY `user_nif` (`user_nif`);

--
-- Indices de la tabla `user_rst`
--
ALTER TABLE `user_rst`
  ADD KEY `ID_user` (`ID_user`);

--
-- Indices de la tabla `user_trs`
--
ALTER TABLE `user_trs`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lines_orders`
--
ALTER TABLE `lines_orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `typesfood`
--
ALTER TABLE `typesfood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lines_orders`
--
ALTER TABLE `lines_orders`
  ADD CONSTRAINT `lines_orders_ibfk_2` FOREIGN KEY (`ID_offer`) REFERENCES `offers` (`ID`),
  ADD CONSTRAINT `lines_orders_ibfk_3` FOREIGN KEY (`ID_order`) REFERENCES `orders` (`ID`);

--
-- Filtros para la tabla `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typesfood` (`ID`),
  ADD CONSTRAINT `offers_ibfk_2` FOREIGN KEY (`ID_restaurant`) REFERENCES `users` (`user_nif`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`ID_user`) REFERENCES `users` (`user_nif`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`ID_restaurant`) REFERENCES `users` (`user_nif`);

--
-- Filtros para la tabla `typesfoodrst`
--
ALTER TABLE `typesfoodrst`
  ADD CONSTRAINT `typesfoodrst_ibfk_1` FOREIGN KEY (`ID_restaurant`) REFERENCES `users` (`user_nif`),
  ADD CONSTRAINT `typesfoodrst_ibfk_2` FOREIGN KEY (`ID_types_food`) REFERENCES `typesfood` (`ID`);

--
-- Filtros para la tabla `user_rst`
--
ALTER TABLE `user_rst`
  ADD CONSTRAINT `user_rst_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`user_nif`);

--
-- Filtros para la tabla `user_trs`
--
ALTER TABLE `user_trs`
  ADD CONSTRAINT `user_trs_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`user_nif`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
