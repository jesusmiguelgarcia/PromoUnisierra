-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2015 at 01:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `promo_materias`
--

-- --------------------------------------------------------

--
-- Table structure for table `Noticia`
--

CREATE TABLE IF NOT EXISTS `Noticia` (
`idnoticia` int(11) NOT NULL,
  `titulonoticia` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` blob NOT NULL,
  `fecha` date NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Noticia`
--

INSERT INTO `Noticia` (`idnoticia`, `titulonoticia`, `descripcion`, `imagen`, `fecha`, `idusuario`) VALUES
(1, 'Graduacion Unisierra 2015', 'Se graduan 50 alumnos de la generacion 2010 -2015 el 26 de marzo del 2015', '', '2015-03-26', 1),
(2, 'Vacaciones Semana Santa 2015', 'Nos vamos de vacaciones el dia 27 de marzo del 2015 y regresamos el 13 de abril del 2015.', '', '2015-03-27', 1),
(3, 'Huelga', 'La amenaza de huelga en contra de la universidad de la sierra llego a un acuerdo con las autoridades y esta se cancelo', '', '2015-03-19', 1),
(4, 'Regreso de vacaciones de Semana Santa', 'Hoy se reanudan las clases en la universidad de la sierra despues de dos semanas de vacaciones ', '', '2015-04-13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Noticia`
--
ALTER TABLE `Noticia`
 ADD PRIMARY KEY (`idnoticia`), ADD KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Noticia`
--
ALTER TABLE `Noticia`
MODIFY `idnoticia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
