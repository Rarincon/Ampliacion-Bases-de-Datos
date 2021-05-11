-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2021 a las 18:12:38
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
('admin', '0000-00-00', 'me encanto', 'Jordan', 1),
('juan', '0000-00-00', 'manolo el del bombo', 'Jordan', 2),
('juan', '0000-00-00', 'jose', 'Jordan', 3),
('juan', '0000-00-00', 'pepe', 'Jordan', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `IdUsuario` varchar(100) NOT NULL,
  `IdZapatilla` varchar(200) NOT NULL,
  `IdFav` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('Jordan', 'Nike', 'Futbol 11');

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
('juan', 'juan', '$2y$10$WKFUnvrM2kfPf26LTHL8tOJCdK2hb2I1nnabSobfVOGNQyOyBWTAG', '2021-04-02', 'eppepepe', 'user'),
('m', 'm', '$2y$10$uII18z2PeQU6olQvsBgJueM22T4RQf302Rq6hB.NfJl0.DZbAWumi', '2021-05-07', 'eppepepe', 'user');

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
('Jordan', '2021-04-11', 'img/portadaZapatillas/bugs-bunny-tenemos11593330363.jpg');

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
  MODIFY `IdComentario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `IdFav` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`Idzapatilla`) REFERENCES `marcas` (`Nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
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
