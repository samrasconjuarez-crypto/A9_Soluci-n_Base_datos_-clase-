-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2025 a las 05:13:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `universidad` varchar(50) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`id`, `nombre`, `correo`, `universidad`, `fecha`) VALUES
(1, 's', 'samrasconjuarez@gmail.com', 'ITCJ', '2025-08-30 02:10:23'),
(2, 's', 'samrasconjuarez@gmail.com', 'ITCJ', '2025-08-30 02:11:05'),
(3, 's', 'samrasconjuarez@gmail.com', 'URN', '2025-08-30 02:11:18'),
(4, 's', 'samrasconjuarez@gmail.com', 'ITCJ', '2025-08-30 02:11:28'),
(5, 'Krampen', 'heilend.krampen@gmail.com', 'UACJ', '2025-08-30 02:11:52'),
(6, 'Felipe', 'usuario@correo.com', 'UACJ', '2025-08-30 02:15:29'),
(7, 'Felipe', 'usuario@correo.com', 'URN', '2025-08-30 02:16:14'),
(8, 'diana', 'di@gmail.com', 'UACH', '2025-08-30 02:16:25'),
(9, 'Adan ', 'adan@gmail.com', 'UACH', '2025-08-30 02:19:35'),
(10, 'SAMUEL SALVADOR', 'adan@gmail.com', 'ITCJ', '2025-08-30 03:06:21'),
(11, 'SAMUEL SALVADOR', 'adan@gmail.com', 'TEC', '2025-08-30 03:07:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `votos`
--
ALTER TABLE `votos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
