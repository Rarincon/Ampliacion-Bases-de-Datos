-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2021 a las 11:52:02
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapatillas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `IdUsuario` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Comentario` varchar(500) NOT NULL,
  `IdZapatillas` varchar(200) NOT NULL,
  `IdComentario` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`IdUsuario`, `Fecha`, `Comentario`, `IdZapatillas`, `IdComentario`) VALUES
('admin', '2021-05-25', 'Muy guapas', 'Curry 10', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `IdUsuario` varchar(100) NOT NULL,
  `IdZapatilla` varchar(200) NOT NULL,
  `IdFav` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`IdUsuario`, `IdZapatilla`, `IdFav`) VALUES
('admin', 'Air max 97', 3),
('admin', 'Curry 10', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `Nombre` varchar(200) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`Nombre`, `Marca`, `Tipo`) VALUES
('Air max 97', 'Nike', 'LifeStyle'),
('Air Zoom Cage', 'Nike', 'Tenis'),
('Curry 10', 'Under Armour', 'Basket'),
('Curry 5', 'Under Armour', 'Basket'),
('Djokovic', 'Asics', 'Tenis'),
('Federer', 'Nike', 'Tenis'),
('Huarache', 'Nike', 'LifeStyle'),
('Jordan', 'Nike', 'Futbol 11'),
('Kobe Bryant 12', 'Nike', 'Basket'),
('Mbappe', 'Nike', 'Futbol11'),
('Mercurial', 'Nike', 'Futsal'),
('Mercurial CR7', 'Nike', 'Futbol11'),
('Messi', 'Adidas', 'Futbol11'),
('Neymar Jr', 'Nike', 'Futbol11'),
('old skool', 'Vans', 'LifeStyle'),
('Predator Zinedine Zidane', 'Adidas', 'Futbol11'),
('RS-X', 'Puma', 'LifeStyle'),
('Super Sala', 'Adidas', 'Futsal'),
('Thiem', 'Adidas', 'Tenis'),
('Yeezy Boost', 'Adidas', 'LifeStyle'),
('Zverev', 'Adidas', 'Tenis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Contrasenia` varchar(300) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Contrasenia`, `FechaNacimiento`, `Correo`, `Tipo`) VALUES
('admin', 'admin', '$2y$10$mY1128X6HXrMSWbZ/Zv2p.SQY.CD6/7qfsGL3V8nfZTq5JpSgsYRq', '1999-02-09', 'admin', 'admin'),
('juan', 'Juan', '$2y$10$WKFUnvrM2kfPf26LTHL8tOJCdK2hb2I1nnabSobfVOGNQyOyBWTAG', '2021-04-02', 'juanito99@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatillas`
--

CREATE TABLE `zapatillas` (
  `Nombre` varchar(200) NOT NULL,
  `FechaLanzamiento` date NOT NULL,
  `Portada` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zapatillas`
--

INSERT INTO `zapatillas` (`Nombre`, `FechaLanzamiento`, `Portada`) VALUES
('Air max 97', '2021-04-26', 'img/portadaZapatillas/airmax97.jpg'),
('Air Zoom Cage', '2021-04-26', 'img/portadaZapatillas/rafanadal.jpeg'),
('Curry 10', '2021-05-16', 'img/portadaZapatillas/underarmour2015.jpg'),
('Curry 5', '2021-04-26', 'img/portadaZapatillas/curry5.jpg'),
('Djokovic', '2021-04-30', 'img/portadaZapatillas/djokovic.jpg'),
('Federer', '2021-04-26', 'img/portadaZapatillas/federer.jpg'),
('Huarache', '2021-04-26', 'img/portadaZapatillas/nikehuarache.jpg'),
('Kobe Bryant 12', '2021-05-14', 'img/portadaZapatillas/kobe12.jpg'),
('Mbappe', '2021-04-29', 'img/portadaZapatillas/mbappe.jpg'),
('Mercurial', '2021-05-18', 'img/portadaZapatillas/nikemercurial.jpg'),
('Mercurial CR7', '2021-05-28', 'img/portadaZapatillas/cr7.jpg'),
('Messi', '2021-04-26', 'img/portadaZapatillas/messi.jpg'),
('Neymar Jr', '2021-05-01', 'img/portadaZapatillas/ney.jpg'),
('old skool', '2021-05-01', 'img/portadaZapatillas/vans.jpg'),
('Predator Zinedine Zidane', '2021-05-02', 'img/portadaZapatillas/zz.jpg'),
('RS-X', '2021-05-14', 'img/portadaZapatillas/pumarsx.jpg'),
('Super Sala', '2021-05-03', 'img/portadaZapatillas/adidassupersala.jpg'),
('Thiem', '2021-05-11', 'img/portadaZapatillas/thiem.jpg'),
('Yeezy Boost', '2021-05-04', 'img/portadaZapatillas/adidasyeezyboost700.jpg'),
('Zverev', '2021-05-02', 'img/portadaZapatillas/zverev.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`IdComentario`),
  ADD KEY `IdZapatillas` (`IdZapatillas`),
  ADD KEY `Foreign key` (`IdUsuario`) USING BTREE;

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`IdFav`),
  ADD KEY `Foreign key` (`IdUsuario`),
  ADD KEY `Foreign zapatilla` (`IdZapatilla`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD PRIMARY KEY (`Nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `IdComentario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `IdFav` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`IdZapatillas`) REFERENCES `zapatillas` (`Nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`IdZapatilla`) REFERENCES `marcas` (`Nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `zapatillas`
--
ALTER TABLE `zapatillas`
  ADD CONSTRAINT `zapatillas_ibfk_1` FOREIGN KEY (`Nombre`) REFERENCES `marcas` (`Nombre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
