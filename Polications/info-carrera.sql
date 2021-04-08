-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2021 a las 03:36:37
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
-- Estructura de tabla para la tabla `info-carrera`
--

CREATE TABLE `info-carrera` (
  `nombrecarrera` varchar(10) NOT NULL,
  `presentacion` text NOT NULL,
  `descripcion` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info-carrera`
--

INSERT INTO `info-carrera` (`nombrecarrera`, `presentacion`, `descripcion`, `id`) VALUES
('TPSI', 'Presentación:\r\n\r\nEl programa del Tecnólogo Profesional en Sistemas Informáticos prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Coordinar y supervisar las actividades relacionadas con la instalación de programas y captura de información.\r\n2.-Formular programas para el procesamiento electrónico de datos y realizan las pruebas para verificar su validez.\r\n3.-Operar equipo informático para el procesamiento, transmisión, almacenamiento y registro de datos.\r\n4.-Operar y controlar computadoras y unidades periféricas', 1),
('TPEI', 'Presentación:\r\n\r\nEl programa del Tecnólogo Profesional en Electricidad Industrial prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Instalar, reparar y dar mantenimiento a los sistemas eléctricos automatizados, elevadores y escaleras eléctricas.\r\n2.-Instalar y reemplazar los sistemas de intercomunicación en edificios residenciales, industriales y comerciales.\r\n3.-Interpretar diagramas y planos, revisar, reparar, ajustar o instalar equipos eléctricos, motores y transformadores.\r\n4.-Instalar, reparar y dar mantenimiento a centrales eléctricas, subestaciones, líneas eléctricas aéreas y subterráneas de alta y baja tensión.', 2),
('TPMI', 'Presentación:\r\n\r\nEl programa del Tecnólogo Profesional en Mecánica Industrial prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Calcular y maquinar piezas metálicas, máquinas, herramienta.\r\n2.-Elaborar herramientas y elementos industriales utilizando máquinas herramientas convencionales o de control numérico.\r\n3.-Soldar, unir o cortar piezas metálicas y aplicar soldadura para rellenar piezas.\r\n4.-Planear y programar la fabricación de piezas metálicas y la prestación de servicios.', 3),
('TPMYF', 'Presentación:\r\n\r\nEl programa del Tecnólogo Profesional en Metalurgia y Fundición prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Analizar en el laboratorio y en la áreas de producción y terminado, artículos de aluminio, bronce y pewter.\r\n2.-Diseñar, elaborar y preparar moldes de diferentes materiales metálicos.\r\n3.-Realizar procesos de vaciado, enfriamiento, desmoldado, acabado, pulido y abrillantado de piezas metálicas para diferentes sectores.', 4),
('TPP', 'El Programa del Tecnólogo Profesional en Plásticos prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Realizar el control de calidad en el laboratorio y en las áreas de producción y terminado, en industrias dedicadas a la elaboración de productos de plástico: mangueras, perfiles, juguetes, globos y guantes de látex, tubos, conexiones de PVC y productos especiales para las industrias farmacéuticas, automovilística', 5),
('TPPQI', 'Presentación:\r\n\r\nEl programa del Tecnólogo Profesional en Procesos Químicos Industriales prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Supervisar los procesos químicos para que se cumplan las normas de seguridad e higiene en la industria.\r\n2.-Controlar y evaluar la materia prima y el producto terminado de las empresas del ramo químico.\r\n3.-Verificar, cuantificar y dosificar materia prima la obtención de productos químicos', 6),
('TPQAPA', 'Presentación:\r\n\r\nEl Programa del Tecnólogo Profesional Químico en Análisis y Procesos de Alimentos prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Realizar el control de calidad e inocuidad en el laboratorio y en las áreas de producción y envasado, en empresas dedicadas a la elaboración de productos: lácticos, cárnicos, jugos, refrescos, cervezas, vinos, botanas, dulces y galletas', 7),
('BTDC', 'Presentación:\r\n\r\nEl programa del Bachillerato Tecnológico en Diseño y Construcción prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Dibujar, trazar y analizar códigos para elaborar planos en forma bidimensional, tridimensional y digital con base en las normas, reglamentos y medidas ergonómicas.\r\n2.-Interpretar los planos utilizados en la construcción para programar y asignar tareas al personal siguiendo la calendarización de la obra.\r\n3.-Analizar las especificaciones de la construcción, para elaborar el presupuesto apoyado en las pruebas de control de calidad de los materiales.\r\n4.-Inspeccionar el terreno y utilizar métodos topográficos en el cálculo de áreas para el dibujo de planos.\r\n5.-Coordinar los trabajos topográficos e informa sobre los avances del proyecto.', 8),
('BTQM', 'Presentación:\r\n\r\nEl programa del Bachillerato Tecnológico Químico en Control de Calidad y Medio Ambiente prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:', '1.-Compilar, clasifica, registrar y archivar documentos y reportes relativos a diferentes áreas de empresas ambientales.\r\n2.-Preparar soluciones, aplicar técnicas de muestreo y análisis empleados en los laboratorios químicos o microbiológicos.\r\n3.-Inspeccionar y valorar las condiciones de higiene y seguridad industrial, el origen y la fuente de contaminación del medio ambiente y el manejo de desechos peligrosos en industrias e instituciones.\r\n4.-Realizar análisis, interpretar resultados, redactar informes y monitorear el funcionamiento y el proceso en las plantas de tratamiento y potabilización de agua.', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info-carrera`
--
ALTER TABLE `info-carrera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info-carrera`
--
ALTER TABLE `info-carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
