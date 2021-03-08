-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-03-2021 a las 02:35:23
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `polications`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `pregunta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `faq`
--

INSERT INTO `faq` (`ID`, `pregunta`, `respuesta`) VALUES
(1, '¿Es esta una pregunta de ejemplo?', 'En efecto, la pregunta anterior sólo es un ejemplo'),
(2, '¿Es esta una segunda pregunta de ejemplo?', 'En efecto, la segunda pregunta anterior solo es un ejemplo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista-carreras`
--

DROP TABLE IF EXISTS `lista-carreras`;
CREATE TABLE IF NOT EXISTS `lista-carreras` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Short` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lista-carreras`
--

INSERT INTO `lista-carreras` (`ID`, `Nombre`, `Logo`, `Short`, `Href`, `Color`) VALUES
(1, 'Tecnólogo Profesional en Electricidad Indsustrial', 'fas fa-bolt ico-sm', 'TPEI', '#', 'elec'),
(2, 'Tecnólogo Profesional en Mecánica Industrial', 'fas fa-cogs ico-big', 'TPMI', '#', 'mec'),
(3, 'Tecnólogo Profesional en Metalurgia y Fundición', 'fas fa-fire ico-sm', 'TPMI', '#', 'met'),
(4, 'Tecnólogo Profesional en Plásticos', 'fas fa-wine-bottle ico-sm', 'TPP', '#', 'plas'),
(5, 'Tecnólogo Profesional en Procesos Químicos Industriales', 'fas fa-flask ico-sm', 'TPPQI', '#', 'proc'),
(6, 'Tecnólogo Profesional en Sistemas Informáticos', 'fas fa-laptop-code ico-big', 'TPSI', '#', 'inf'),
(7, 'Tecnólogo Profesional Químico en Análisis y Procesos de Alimentos', 'fas fa-microscope ico-sm', 'TPQAPA', '#', 'ali'),
(8, 'Bachillerato Tecnológico en Diseño y Construcción', 'fas fa-pencil-ruler ico-sm', 'BTDC', '#', 'cons'),
(9, 'Bachillerato Tecnológico Químico en Control de Calidad y Medio Ambiente', 'fab fa-envira ico-sm', 'BTQM', '#', 'amb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista-foros`
--

DROP TABLE IF EXISTS `lista-foros`;
CREATE TABLE IF NOT EXISTS `lista-foros` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No.` int(12) NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lista-foros`
--

INSERT INTO `lista-foros` (`ID`, `Nombre`, `Tipo`, `No.`, `Logo`, `Href`, `color`) VALUES
(3, 'Tecnólogo Profesional en Mecánica Industrial', 'Carrera', 1, 'fas fa-cogs ico-big', '#', 'mec'),
(5, 'Tecnólogo Profesional en Metalurgia y Fundición', 'Carrera', 4, 'fas fa-fire ico-sm', '#', 'met'),
(6, 'Tecnólogo Profesional en Plásticos', 'Carrera', 2, 'fas fa-wine-bottle ico-sm', '#', 'plas'),
(7, 'Tecnólogo Profesional en Procesos Químicos Industriales', 'Carrera', 2, 'fas fa-flask ico-sm', '#', 'proc'),
(8, 'Tecnólogo Profesional en Sistemas Informáticos', 'Carrera', 2, 'fas fa-laptop-code ico-big', '#', 'inf'),
(9, 'Tecnólogo Profesional Químico en Análisis y Procesos de Alimentos', 'Carrera', 2, 'fas fa-microscope ico-sm', '#', 'ali'),
(10, 'Bachillerato Tecnológico en Diseño y Construcción', 'Bachillerato', 2, 'fas fa-pencil-ruler ico-sm', '#', 'cons'),
(11, 'Bachillerato Tecnológico Químico en Control de Calidad y Medio Ambiente', 'Bachillerato', 2, 'fab fa-envira ico-sm', '#', 'amb'),
(12, 'Servicio Social', 'Otro', 54, 'fas fa-clipboard-list ico-sm', '#', 'serv'),
(13, 'Prácticas Profesionales', 'Otro', 2, 'fas fa-user-tie ico-sm', '#', 'prac'),
(4, 'Tecnólogo Profesional en Electricidad Industrial', 'Carrera', 2, 'fas fa-bolt ico-sm', '#', 'elec'),
(24, 'Becas', 'Otro', 521, 'fas fa-file-invoice-dollar ico-sm', '#', 'bec');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
