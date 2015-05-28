-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2015 a las 21:40:59
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `iscpromocion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `idActividad` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `encargado` varchar(15) NOT NULL,
  `acciones` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `turno` varchar(2) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`idActividad`, `estado`, `encargado`, `acciones`, `fecha`, `hora`, `turno`, `Usuario_idUsuario`) VALUES
(1, 'Completo', 'Martin Cordova', 'CBTa Moctezuma', '2015-04-10', '04:00:00', 'pm', 1),
(2, 'Completo', 'Miguel Garcia', 'CECyTES Sahuaripa', '2015-04-05', '10:30:00', 'am', 1),
(3, 'Incompleto', 'Aldo Juarez', 'cobach Agua Prieta', '2015-05-11', '04:14:00', 'pm', 1),
(4, 'Incompleto', 'David Madrid', 'Conalep Nacozari', '2015-05-23', '04:00:00', 'pm', 1),
(5, 'Completo', 'Ulises Ponce', 'CBTis Hermosillo', '2015-04-13', '09:00:00', 'am', 1),
(10, 'Incompleto', 'x', 'x', '2015-04-30', '04:00:00', 'am', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`idActividad`,`Usuario_idUsuario`), ADD KEY `Usuario_idUsuario` (`Usuario_idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
ADD CONSTRAINT `Actividad_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
