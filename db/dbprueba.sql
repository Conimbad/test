-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
-- 
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2021 a las 00:31:28
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3
--
-- Autor: Mardoqueo 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id_examen` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cant_preg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`id_examen`, `nombre`, `cant_preg`) VALUES
(25, 'Inglés', 5),
(26, 'Examen PHP', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(100) NOT NULL,
  `res_1` varchar(100) NOT NULL,
  `res_2` varchar(100) NOT NULL,
  `res_3` varchar(100) NOT NULL,
  `res_correcta` varchar(100) NOT NULL,
  `id_examen1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `pregunta`, `res_1`, `res_2`, `res_3`, `res_correcta`, `id_examen1`) VALUES
(56, 'Traduzca la palabra \"Apple\"', 'Manzana', 'Pera', 'Melocotón', 'Manzana', 25),
(57, 'Cómo se traduce la palabra \"Carro\" al inglés?', 'Auto', 'Carr', 'Bus', 'Carr', 25),
(58, 'Qué verbo auxiliar utilizamos para el pronombre personal \"You\"?', 'Be', 'Does', 'Do', 'Do', 25),
(59, 'Seleccione el nombre de una fruta', 'Pinapple', 'Tomato', 'Potato', 'Pinapple', 25),
(60, 'Seleccione la palabra con la que usualmente se saluda en Inglés', 'Bye', 'What', 'Hello', 'Hello', 25),
(61, 'What does PHP stand for?', 'Private Home Page', 'Personal Hypertext Processor', 'PHP: Hypertext Preprocessor', 'PHP: Hypertext Preprocessor', 26),
(62, 'PHP server scripts are surrounded by delimiters, which?', '<?php...?>', '<?php>... </?>', '<&>...</&>', '<?php...?>', 26),
(63, 'How do you write \"Hello World\" in PHP', 'echo \"Hello World\";', 'Document.Write(\"Hello World\");', '\"Hello World\";', 'echo \"Hello World\";', 26),
(64, 'All variables in PHP start with which symbol?', '&', '!', '$', '$', 26),
(65, 'What is the correct way to end a PHP statement?', '.', 'New line', ';', ';', 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id_examen`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_examen1` (`id_examen1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_examen1`) REFERENCES `examen` (`id_examen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
