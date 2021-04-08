-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2021 a las 01:08:15
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
-- Base de datos: `carreras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripción`
--

CREATE TABLE `descripción` (
  `Id` int(12) NOT NULL,
  `namecarrera` varchar(10) NOT NULL,
  `numerosemestre` int(12) NOT NULL,
  `maestro` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` bigint(15) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `descripción`
--

INSERT INTO `descripción` (`Id`, `namecarrera`, `numerosemestre`, `maestro`, `correo`, `telefono`, `links`) VALUES
(1, 'TPSI', 8, 'Ing. Josué Eliseo Tapia Ramírez', 'josue.tapia@sems.udg.mx', 3336199814, '../images/tpi.jpg'),
(2, 'TPSI', 8, 'Lic. Eulogio Ivan Pimienta Mercado', '(No tiene)', 3336199814, '../images/comapl.jpg'),
(3, 'TPEI', 8, 'Mtro. José Antonio Elías Baltazar', 'jose.elias@sems.udg.mx', 3336199814, '../images/tei.jpg'),
(4, 'TPMI', 8, ' Sabas Barajas López', '(No tiene)', 3336199814, '../images/tmi.jpg'),
(5, 'TPMYF', 8, 'Mtra. María Guadalupe Cibrián Salas', 'guadalupe.cibrian@sems.udg.mx', 3336199814, '../images/promet.jpg'),
(6, 'TPMYF', 8, 'Ing. Miguel Ángel Valdez Valtierra', 'miguel.valdez@sems.udg.mx', 3336199814, '../images/qtme.jpg'),
(7, 'TPQAPA', 8, 'Ing. Elias Lay Martinez', '(No tiene)', 3336199814, '../images/qta.jpg'),
(8, 'TPPQI', 8, 'Mtra. Anna Karina Sandoval Rosas', 'anna.sandoval@sems.udg.mx', 3336199814, '../images/tecqui.jpg'),
(9, 'BTQCCMA', 8, 'Ing. Irma Bautista Hernández', '(No tiene)', 3336199814, '../images/btqm.jpg'),
(10, 'TPP', 8, 'Mtra. Lilia Daniela Mendoza Yáñez ', '(No tiene)', 3336199814, '(No hay)'),
(11, 'BTDC', 8, 'Mtr. Mauricio Rafael Rubio Hurtado ', '(No tiene)', 3336199814, '(No hay)'),
(12, 'BTDC', 8, 'Mtra. María Fernanda Sánchez Ocando', '(No tiene)', 3336199814, '../images/btdc.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descripción`
--
ALTER TABLE `descripción`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descripción`
--
ALTER TABLE `descripción`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
