-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-04-2021 a las 00:59:06
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
-- Estructura de tabla para la tabla `carreras`
--

DROP TABLE IF EXISTS `carreras`;
CREATE TABLE IF NOT EXISTS `carreras` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Short` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`ID`, `Nombre`, `Logo`, `Short`, `Href`, `Color`) VALUES
(1, 'Tecnólogo Profesional en Electricidad Industrial', 'fas fa-bolt ico-sm', 'TPEI', '#', 'elec'),
(2, 'Tecnólogo Profesional en Mecánica Industrial', 'fas fa-cogs ico-big', 'TPMI', '#', 'mec'),
(3, 'Tecnólogo Profesional en Metalurgia y Fundición', 'fas fa-fire ico-sm', 'TPMYF', '#', 'met'),
(4, 'Tecnólogo Profesional en Plásticos', 'fas fa-wine-bottle ico-sm', 'TPP', '#', 'plas'),
(5, 'Tecnólogo Profesional en Procesos Químicos Industriales', 'fas fa-flask ico-sm', 'TPPQI', '#', 'proc'),
(6, 'Tecnólogo Profesional en Sistemas Informáticos', 'fas fa-laptop-code ico-big', 'TPSI', '#', 'inf'),
(7, 'Tecnólogo Profesional Químico en Análisis y Procesos de Alimentos', 'fas fa-microscope ico-sm', 'TPQAPA', '#', 'ali'),
(8, 'Bachillerato Tecnológico en Diseño y Construcción', 'fas fa-pencil-ruler ico-sm', 'BTDC', '#', 'cons'),
(9, 'Bachillerato Tecnológico Químico en Control de Calidad y Medio Ambiente', 'fab fa-envira ico-sm', 'BTQM', '#', 'amb');

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
-- Estructura de tabla para la tabla `formulario`
--

DROP TABLE IF EXISTS `formulario`;
CREATE TABLE IF NOT EXISTS `formulario` (
  `Usuario - Administrador` varchar(20) NOT NULL DEFAULT 'Usuario',
  `Usuario` varchar(16) NOT NULL,
  `Nombre` varchar(16) NOT NULL,
  `ApellidoP` varchar(16) NOT NULL,
  `ApellidoM` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`Usuario - Administrador`, `Usuario`, `Nombre`, `ApellidoP`, `ApellidoM`, `Password`, `Correo`, `Telefono`) VALUES
('Usuario', 'Abraham2025', 'Abraham', 'Cruz', 'Sanchez', 'carlos', 'abraham@gmail.com', '2147483647'),
('Usuario', 'Paco', 'Paco', 'Paco', 'Paco', 'Paco', 'Paco@gmail.com', '333333333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foros`
--

DROP TABLE IF EXISTS `foros`;
CREATE TABLE IF NOT EXISTS `foros` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No.` int(12) NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Short` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `foros`
--

INSERT INTO `foros` (`ID`, `Nombre`, `Tipo`, `No.`, `Logo`, `Short`, `color`) VALUES
(3, 'Tecnólogo Profesional en Mecánica Industrial', 'Carrera', 1, 'fas fa-cogs ico-big', 'TPMI', 'mec'),
(5, 'Tecnólogo Profesional en Metalurgia y Fundición', 'Carrera', 4, 'fas fa-fire ico-sm', 'TPMYF', 'met'),
(6, 'Tecnólogo Profesional en Plásticos', 'Carrera', 2, 'fas fa-wine-bottle ico-sm', 'TPP', 'plas'),
(7, 'Tecnólogo Profesional en Procesos Químicos Industriales', 'Carrera', 2, 'fas fa-flask ico-sm', 'TPPQI', 'proc'),
(8, 'Tecnólogo Profesional en Sistemas Informáticos', 'Carrera', 2, 'fas fa-laptop-code ico-big', 'TPSI', 'inf'),
(9, 'Tecnólogo Profesional Químico en Análisis y Procesos de Alimentos', 'Carrera', 2, 'fas fa-microscope ico-sm', 'TPQAPA', 'ali'),
(10, 'Bachillerato Tecnológico en Diseño y Construcción', 'Bachillerato', 2, 'fas fa-pencil-ruler ico-sm', 'BTDC', 'cons'),
(11, 'Bachillerato Tecnológico Químico en Control de Calidad y Medio Ambiente', 'Bachillerato', 2, 'fab fa-envira ico-sm', 'BTQM', 'amb'),
(12, 'Servicio Social', 'Otro', 54, 'fas fa-clipboard-list ico-sm', 'SERVICIO', 'serv'),
(13, 'Prácticas Profesionales', 'Otro', 2, 'fas fa-user-tie ico-sm', 'PRÁCTICAS', 'prac'),
(4, 'Tecnólogo Profesional en Electricidad Industrial', 'Carrera', 2, 'fas fa-bolt ico-sm', 'TPEI', 'elec'),
(24, 'Becas', 'Otro', 521, 'fas fa-file-invoice-dollar ico-sm', 'BECAS', 'bec');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista-foros`
--

DROP TABLE IF EXISTS `lista-foros`;
CREATE TABLE IF NOT EXISTS `lista-foros` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Short` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Usuario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Color-F` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lista-foros`
--

INSERT INTO `lista-foros` (`ID`, `Nombre`, `Tipo`, `Logo`, `Short`, `Color`, `Usuario`, `Fecha`, `Color-F`) VALUES
(1, 'Lorem Ipsum 1', 'Carrera', 'fas fa-cogs ico-big', 'TPMI', 'mec', 'El Sujeto', '2021-04-01 05:15:00', 'mec-f'),
(2, 'Lorem Ipsum2', 'Carrera', 'fas fa-fire ico-sm', 'TPMYF', 'met', NULL, NULL, 'met-f'),
(3, 'Lorem Ipsum3', 'Carrera', 'fas fa-wine-bottle ico-sm', 'TPP', 'plas', NULL, NULL, 'plas-f'),
(4, 'Lorem Ipsum4', 'Carrera', 'fas fa-flask ico-sm', 'TPPQI', 'proc', NULL, NULL, 'proc-f'),
(5, 'Lorem Ipsum5', 'Carrera', 'fas fa-laptop-code ico-big', 'TPSI', 'inf', NULL, NULL, 'inf-f'),
(6, 'Lorem Ipsum6', 'Carrera', 'fas fa-microscope ico-sm', 'TPQAPA', 'ali', NULL, NULL, 'ali-f'),
(7, 'Lorem Ipsum7', 'Carrera', 'fas fa-bolt ico-sm', 'TPEI', 'elec', NULL, NULL, 'elec-f'),
(8, 'Lorem Ipsum8', 'Bachillerato', 'fas fa-pencil-ruler ico-sm', 'BTDC', 'cons', NULL, NULL, 'cons-f'),
(9, 'Lorem Ipsum9', 'Bachillerato', 'fab fa-envira ico-sm', 'BTQM', 'amb', NULL, NULL, 'amb-f'),
(10, 'Lorem Ipsum10', 'Otro', 'fas fa-clipboard-list ico-sm', 'SERVICIO', 'serv', NULL, NULL, 'serv-f'),
(11, 'Lorem Ipsum11', 'Otro', 'fas fa-user-tie ico-sm', 'PRÁCTICAS', 'prac', NULL, NULL, 'prac-f'),
(12, 'Lorem Ipsum12', 'Otro', 'fas fa-file-invoice-dollar ico-sm', 'BECAS', 'bec', NULL, NULL, 'bec-f'),
(13, 'Lorem Ipsum 13', 'Carrera', 'fas fa-cogs ico-big', 'TPMI', 'mec', NULL, NULL, 'mec-f'),
(14, 'Lorem Ipsum 14', 'Bachillerato', 'fas fa-pencil-ruler ico-sm\r\n', 'BTDC', 'cons', NULL, NULL, 'cons-f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lorem ipsum 1`
--

DROP TABLE IF EXISTS `lorem ipsum 1`;
CREATE TABLE IF NOT EXISTS `lorem ipsum 1` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tiempo` datetime NOT NULL,
  `Tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tema` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lorem ipsum 1`
--

INSERT INTO `lorem ipsum 1` (`ID`, `Usuario`, `Texto`, `Tiempo`, `Tipo`, `Tema`) VALUES
(43, 'unusuario', 'Este es un comentario', '2021-04-05 20:32:25', 'Comentario', 'TPMI'),
(44, 'unusuario', 'dfgsdfgsdfg', '2021-04-06 05:21:26', 'Comentario', 'TPMI'),
(42, 'unusuario', 'rtyurtyu', '2021-04-05 18:21:11', 'Comentario', 'TPMI'),
(19, 'unusuario', 'Este es un comentario de verdad', '2021-04-04 19:47:55', 'Comentario', 'TPMI'),
(41, 'unusuario', 'sfrgsdfg', '2021-04-05 18:15:58', 'Comentario', 'TPMI'),
(40, 'unusuario', 'dfgsdfg', '2021-04-05 16:42:39', 'Comentario', 'TPMI'),
(20, 'unusuario', 'Este es otro comentario de verdad', '2021-04-04 19:48:53', 'Comentario', 'TPMI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
