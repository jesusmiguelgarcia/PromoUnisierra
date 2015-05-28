-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2015 a las 20:54:59
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

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
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `idMateria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `video` varchar(200) NOT NULL,
  `sitioweb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idMateria`, `nombre`, `descripcion`, `video`, `sitioweb`) VALUES
(1, 'Matemáticas I', 'Proporcionar al alumno las habilidades elementales para construir y manejar modelos matemáticos, que como funciones de una variable, requieren los sistemas y procesos involucrados en el campo de actividad de la Ingeniería en Telemática y Sistemas.', '<iframe width="420" height="315" src="https://www.youtube.com/embed/wotf0Zsj44k" frameborder="0" allowfullscreen></iframe>', 'http://nubiagarcia.webcindario.com/Paginareal/inde..'),
(2, 'Logica Computacional', ' lógica computacional o lógica formal siempre ha sido una herramienta fundamental para el progreso de las ciencias computacionales, y sus desarrollos son la base para elaborar soluciones informáticas, tanto en software como en hardware. Es bien conocido que los profesionales que aplican adecuadamente el razonamiento lógico tiene mayores posibilidades de éxito, tanto en lo profesional como en lo personal, ya que analizar, saber buscar posibilidades, demostrar o refutar afirmaciones diversas, le permite a quien tiene ese conocimiento y manejo ser un mejor ser humano y por consiguiente un profesional con mayores y mejores aptitudes y actitudes para vivir en una sociedad como la actual, necesitada de ecuanimidad, raciocinio y capacidad de análisis para solucionar sus cada vez más complejos problemas.\r\nDiseñar, desarrollar y mantener software son procesos netamente creativos que se sustentan fundamentalmente en la capacidad de razonamiento, en el pensamiento computacional y algorítmico y en la habilidad para abstraer cualquier problema, por lo que es necesario estructurar este curso para ofrecer una base sólida de la lógica en la línea computacional para los futuros ingenieros de sistemas. Desde la publicación de los trabajos de Herbrand en 1930 la lógica se ha convertido en un valioso instrumento conceptual al servicio de las ciencias computacionales, en la que ayudan para representar el conocimiento y para soportar el diseño de sistemas de información, es decir, hoy la lógica computacional se aborda desde la perspectiva de aplicación a la computación', '<iframe width="420" height="315" src="https://www.youtube.com/embed/erZaHZ5E5hU" frameborder="0" allowfullscreen></iframe>', 'http://comercioemm.webcindario.com/index.html'),
(3, 'Fundamentos de Programacion', 'Los lenguajes de programación son idiomas artificiales diseñados para \r\nexpresar cálculos y procesos que serán llevados a cabo por ordenadores. Un \r\nlenguaje de programación está form\r\nado por un conjunto de palabras \r\nreservadas, símbolos y reglas sintácticas y semánticas que definen su \r\nestructura y el significado de sus elementos y expresiones. El proceso de \r\nprogramación consiste en la escritura, compilación y verificación del código \r\nfuente de un programa. ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/6QcCOjATf2U" frameborder="0" allowfullscreen></iframe>', 'http://nubiagarcia.webcindario.com/Paginareal/index.html'),
(4, 'Introduccion  ingenieria en sistemas computacion', 'El estudiante tendrá una visión clara \r\ny general de lo que es la carrera de \r\ningeniería en sistemas computacionales, \r\nsu impacto social e implicaciones \r\nactuales y futuras. ', '<iframe width="420" height="315" src="https://www.youtube.com/embed/ozIy9REhbQw" frameborder="0" allowfullscreen></iframe>', 'http://nubiagarcia.webcindario.com/Paginareal/index.html'),
(5, 'Analisis y Epresion Verbal', 'La expresión oral es el conjunto de técnicas que determinan las pautas generales que deben seguirse para comunicarse oralmente con efectividad, es decir, es la forma de expresar sin barreras lo que se piensa.\r\n\r\nTambién se llama expresión oral a una de las habilidades a desarrollar en el aprendizaje tanto de la lengua materna –de manera inconsciente– como de una lengua extranjera –de manera deliberada, consciente–.\r\n\r\nLa expresión oral sirve como instrumento para comunicar sobre procesos u objetos externos a él. Se debe tener en cuenta que la expresión oral en determinadas circunstancias es más amplia que el habla, ya que requiere de elementos paralingüísticos para completar su significado final.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/jSmiT8V8x7E" frameborder="0" allowfullscreen></iframe>', 'http://nubiagarcia.webcindario.com/Paginareal/index.html'),
(6, 'Taller  de Etica', 'La palabra ética proviene del vocablo griego ethos que significa comportamiento o costumbre. Ética son los principios de la conducta humana. En la historia de la ética hay tres modelos de conducta principales: la felicidad o placer; el deber, la virtud o la obligación; y la perfección, el más completo desarrollo de las potencialidades humanas. Como una ciencia normativa, la ética debe ser aplicada por todos los integrantes de una sociedad en todos los ámbitos para un equilibrio en la conducta.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/h6askuJPJpY" frameborder="0" allowfullscreen></iframe>', '\r\nhttp://comercioemm.webcindario.com/index.html\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
 ADD PRIMARY KEY (`idMateria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
