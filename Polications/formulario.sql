-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2021 a las 02:24:11
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
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
('Usuario', 'Abraham2025', 'Abraham', 'Cruz', 'Sanchez', 'carlos', 'abraham@gmail.com', '2147483647');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
