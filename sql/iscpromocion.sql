-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2015 at 04:57 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PagWEB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Actividad`
--

CREATE TABLE IF NOT EXISTS `Actividad` (
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
-- Table structure for table `Actualiza`
--

CREATE TABLE IF NOT EXISTS `Actualiza` (
  `Usuario_idUsuario` int(11) NOT NULL,
  `Materia_idMateria` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Materia`
--

CREATE TABLE IF NOT EXISTS `Materia` (
  `idMateria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `video` varchar(200) NOT NULL,
  `sitioweb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Noticia`
--

CREATE TABLE IF NOT EXISTS `Noticia` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` blob,
  `fecha` date NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
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
-- Indexes for dumped tables
--

--
-- Indexes for table `Actividad`
--
ALTER TABLE `Actividad`
 ADD PRIMARY KEY (`idActividad`,`Usuario_idUsuario`), ADD KEY `Usuario_idUsuario` (`Usuario_idUsuario`);

--
-- Indexes for table `Actualiza`
--
ALTER TABLE `Actualiza`
 ADD PRIMARY KEY (`Usuario_idUsuario`,`Materia_idMateria`), ADD KEY `Materia_idMateria` (`Materia_idMateria`);

--
-- Indexes for table `Materia`
--
ALTER TABLE `Materia`
 ADD PRIMARY KEY (`idMateria`);

--
-- Indexes for table `Noticia`
--
ALTER TABLE `Noticia`
 ADD PRIMARY KEY (`idNoticia`,`Usuario_idUsuario`), ADD KEY `Usuario_idUsuario` (`Usuario_idUsuario`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
 ADD PRIMARY KEY (`idUsuario`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Actividad`
--
ALTER TABLE `Actividad`
ADD CONSTRAINT `Actividad_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`);

--
-- Constraints for table `Actualiza`
--
ALTER TABLE `Actualiza`
ADD CONSTRAINT `Actualiza_ibfk_1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `Materia` (`idMateria`),
ADD CONSTRAINT `Actualiza_ibfk_2` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`);

--
-- Constraints for table `Noticia`
--
ALTER TABLE `Noticia`
ADD CONSTRAINT `Noticia_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
