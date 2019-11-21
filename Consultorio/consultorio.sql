-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2019 a las 04:29:37
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `Documento` varchar(8) COLLATE latin1_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `Mutual` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `Consulta` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `consultorio`
--

INSERT INTO `consultorio` (`Documento`, `Nombre`, `Apellido`, `Mutual`, `Consulta`) VALUES
('20548935', 'Josefina', 'Ayala', 'GALENO', 'CHEQUEO RUTINARIO'),
('21544547', 'Omar ', 'Ciccioli', 'OSDE', 'CHEQUEO'),
('32987458', 'Marcos', 'Leon', 'SM', 'CHEQUEO'),
('34987421', 'Adriana', 'Frigerio', 'PAMI', 'Programacion de Operacion'),
('41098711', 'Bruno', 'Ciccioli', 'OSDE', 'Se realizo chequeos varios. Todo ok');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD PRIMARY KEY (`Documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
