-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2015 at 12:30 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `programacionweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `idActividad` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `encargado` varchar(15) NOT NULL,
  `acciones` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  `hora` datetime NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `actualiza`
--

CREATE TABLE IF NOT EXISTS `actualiza` (
  `Usuario_idUsuario` int(11) NOT NULL,
  `Materia_idMateria` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `idMateria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `video` varchar(100) NOT NULL,
  `sitioweb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
`idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` blob,
  `fecha` date NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `tituloNoticia`, `descripcion`, `imagen`, `fecha`, `Usuario_idUsuario`) VALUES
(1, 'Baile Dia del Estudiante', 'El dia 22 de mayo del 2015 el comite prograduacion de la Universidad de la Sierra realizara el clasico baile del dia del estudiante donde se coronara a la reyna unisierra 2015', NULL, '2015-04-22', 1),
(2, 'Fin del Semestre', 'Vacaciones de verano 2015, el semestre concluye este 5 de Junio del 2015', NULL, '2015-06-05', 1),
(3, 'Mega Puente', 'El dia 1 de mayo comenzara el mega puente concluyendo el 4 de mayo.', NULL, '2015-04-30', 1),
(4, 'Dia del Estudiente', 'El dia 24 de mayo celebramos el dia del estudiante en la Universidad de la Sierra,\r\nque posiblemente sea festejado el 22 de mayo', NULL, '2015-05-18', 1),
(5, 'Viaje de Estudios', 'Los alumnos del octavo semestre realizaran un viaje de estudios a la mina santa clara en Banamichi, Sonora', NULL, '2015-04-28', 1),
(6, 'Promocion Unisierra ', 'Profesores de la carrera de Telematica y Sistemas estan promocionando la nueva carrera de ingenieria en Sistemas Computacionales', NULL, '2015-04-22', 1),
(7, 'Reyna Unisierra', 'Hoy se abrieron las inscripciones para poseer la corna unisierra 2015.', NULL, '2015-04-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellido`, `tipo`, `edad`, `sexo`, `carrera`, `provincia`, `email`, `telefono`, `contraseña`) VALUES
(1, 'Jorge', 'Urquijo', 'Admin', 20, 'Masculino', 'ITS', 'Huasabas', 'jorgedzo_17@hotmail.com', NULL, 'unisierra123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividad`
--
ALTER TABLE `actividad`
 ADD PRIMARY KEY (`idActividad`,`Usuario_idUsuario`), ADD KEY `Usuario_idUsuario` (`Usuario_idUsuario`);

--
-- Indexes for table `actualiza`
--
ALTER TABLE `actualiza`
 ADD PRIMARY KEY (`Usuario_idUsuario`,`Materia_idMateria`), ADD KEY `Materia_idMateria` (`Materia_idMateria`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
 ADD PRIMARY KEY (`idMateria`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
 ADD PRIMARY KEY (`idNoticia`,`Usuario_idUsuario`), ADD KEY `Usuario_idUsuario` (`Usuario_idUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `actividad`
--
ALTER TABLE `actividad`
ADD CONSTRAINT `Actividad_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Constraints for table `actualiza`
--
ALTER TABLE `actualiza`
ADD CONSTRAINT `Actualiza_ibfk_1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`),
ADD CONSTRAINT `Actualiza_ibfk_2` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Constraints for table `noticia`
--
ALTER TABLE `noticia`
ADD CONSTRAINT `Noticia_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
