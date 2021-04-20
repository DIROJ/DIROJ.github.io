-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2021 a las 22:24:16
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
-- Base de datos: `notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas frecuentes`
--

CREATE TABLE `preguntas frecuentes` (
  `ID` int(11) NOT NULL,
  `Pregunta` text NOT NULL,
  `Respuesta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas frecuentes`
--

INSERT INTO `preguntas frecuentes` (`ID`, `Pregunta`, `Respuesta`) VALUES
(1, '¿Cómo hacer el trámite para Becas Prepárate? ', 'a. Ingresa a la página https://bienestarazteca.com.mx/. Lee el aviso de Privacidad.\r\nb. Ingresa tu CURP. \r\nc. Ingresa los datos que te solicita la aplicación. \r\nd. Tómate una foto para que tus siguientes cobros sean más seguros. \r\ne. Crea una contraseña y escribe tu número celular y correo electrónico. No puedes utilizar el de otra persona. \r\nf. Cuando concluyas, recibirás tu usuario a través de mensaje en tu celular y/o tu correo electrónico registrado. \r\n\r\nPuedes consultar los videos de apoyo para tu registro y retiro de la beca en: https://www.youtube.com/watch?v=rT_AvX9bhdg&feature=youtu.be \r\n\r\nSi surge una duda o complicación con el tramite puedes mandar un correo al encargado de las becas de la escuela:\r\n pedro.avina@academicos.udg.mx\r\n'),
(2, '¿Cómo Solicitar una Condonación?', 'La condonación es un trámite que genera un descuento en la orden de pago, todos aquellos que tienen problemas para pagar el monto completo.\r\n\r\nLo que se tiene que hacer es ir con las secretarias para requerir la solicitud de la condonación. En dicha solicitud debes presentar los documentos que requieres a la secretaria que te esté ayudando. \r\n\r\nLas condonaciones tardan unas semanas en reflejarse, por lo que hay que ser pacientes.\r\n'),
(4, '¿Qué horarios tienen las secretarias?', 'Secretarias tienen un horario de 10:00am a 4:00pm'),
(5, '¿Qué horario tiene control escolar?', 'Control Escolar tiene un horario de 10:00am a 4:00pm'),
(6, '¿Qué horario tiene la biblioteca?  ', 'Biblioteca tienen un horario de 10:00am a 2:00pm'),
(7, '¿Cómo es el trámite que me presten algún libro?', 'Una vez tienes seleccionado el libro que necesitarás, debes acudir a la biblioteca para llenar un pequeño formulario con tus datos. Tienes que tener tu credencial para poder realizar el trámite ya que se quedará ahí hasta el momento que lo devuelvas '),
(8, '¿Qué pasa si no se paga la orden a tiempo? ', 'En caso de no haber realizado el pago en el periodo que marca tu ficha, puedes realizarlo unos días después. Pero si lo ignoras se irán acumulando para que se paguen en un futuro. '),
(9, '¿Qué significan las calificaciones provisionales de las juntas? ', 'Las calificaciones que se entregan en las juntas de padres de familia, solamente sirven para darnos una idea de como vamos trabajando a lo largo del semestre. \r\n\r\nEstas calificaciones no son definitivas, por lo que si aparece un “malo” en ellas, tenemos la oportunidad de esforzarnos más para poder alcanzar una calificación más elevada.\r\n\r\nLo mismo pasa si vemos un” Bueno”, no tenemos que confiarnos, pues si nos descuidamos podemos decaer con el promedio.\r\n'),
(10, '¿Cómo sacar una constancia?', 'Las constancias no sirven para comprobar que somos estudiantes, suelen ser requeridas en trámites específicos como becas o apoyos por parte del gobierno. Dependerá de lo que se te soliciten, puedes sacar una constancia con o sin calificaciones.\r\n\r\nSe debe imprimir una orden de pago de la constancia que requieras, realizar el monto que se pide, toca esperar a que se refleje el pago y la podremos recoger con las secretarias una vez que la tengan lista.\r\n'),
(11, '¿Cómo darte de baja de la escuela?', 'Para darte de baja de la escuela tienes que imprimir una ficha de pago, que después llenarás con tus datos, después de reflejado el pago, las secretarias darán seguimiento a tu trámite. ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas frecuentes`
--
ALTER TABLE `preguntas frecuentes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas frecuentes`
--
ALTER TABLE `preguntas frecuentes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
