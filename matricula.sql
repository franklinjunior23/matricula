-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-07-2023 a las 14:38:28
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matricula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `id_student` int(255) NOT NULL,
  `ciclo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `documents`
--

INSERT INTO `documents` (`id`, `id_student`, `ciclo`, `archivo`, `fecha_creat`) VALUES
(1, 2323, '1', '223232', '0000-00-00'),
(2, 2323, '2', '2', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(7) NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciclo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `turno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carrera` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id`, `nombre`, `apellido`, `dni`, `correo`, `fecha_nac`, `genero`, `estado`, `ciclo`, `turno`, `carrera`) VALUES
(1, 'daw', 'dawdad', 23, 'awdawda@aaa', 'dwawdwa', 0, '0', 'VI', 'noche', 'Desarrollo de Sistemas de informacion'),
(2323, 'franklin junior', 'de la cruz cano', 22, 'awd@gaa.com', 'awd', 1, '0', 'Egresado', 'mañana', 'Enfemeria'),
(2324, 'alberto san', 'samaniegho', 2323232, 'aaa@gmail', '22/02/2200', 0, '', 'II', 'noche', 'enfemeria\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_student` (`id_student`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2325;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
