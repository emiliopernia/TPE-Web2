-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2021 a las 00:44:45
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ufc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fighter`
--

CREATE TABLE `fighter` (
  `id_fighter` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `nickname` varchar(40) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `record` varchar(12) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fighter`
--

INSERT INTO `fighter` (`id_fighter`, `name`, `nickname`, `nationality`, `age`, `record`, `height`, `weight`) VALUES
(1, 'Jon Jones', 'Bones', 'EEUU', 34, '26/1', 193, 114),
(2, 'Jan Blachowicz', 'The Polish Power', 'Poland', 38, '28/8', 188, 93),
(3, 'Aljamain Sterling', 'Funk Master', 'EEUU', 32, '20/3', 170, 61),
(4, 'Petr Yan', 'No Mercy', 'Russia', 28, '15/2', 170, 61),
(5, 'Israel Adesanya', 'The Last Stylebender', 'Nigerian', 32, '21/1', 193, 84),
(6, 'T.J. Dillashaw', 'Killshaw', 'EEUU', 35, '18/4', 170, 61),
(7, 'Alexander Volkanovski', 'The Great', 'Australian', 32, '23/1', 168, 66),
(8, 'Max Holloway', 'Blessed', 'EEUU', 29, '22/6', 180, 66),
(9, 'Brian Ortega', 'T-City', 'EEUU', 30, '15/2', 172, 66),
(10, 'Charles Oliveira', 'Do Bronx', 'Brasilian', 31, '31/8', 178, 70),
(11, 'Dustin Poirier', 'The Diamond', 'EEUU', 32, '28/6', 175, 70),
(12, 'Islam Makhachev', 'Hassbulla', 'Russian', 29, '20/1', 178, 70),
(13, 'Kamaru Usman', 'The Niggerian Nightmare', 'Niggeria', 34, '19/1', 183, 77),
(14, 'Colby Covington', 'Chaos', 'EEUU', 33, '16/2', 180, 77),
(15, 'Gilbert Burns', 'Durinho', 'Brasilian', 35, '20/4', 178, 77),
(16, 'Robert Whittaker', 'The Reaper', 'Australian', 30, '24/5', 183, 84),
(17, 'Sean Strickland', 'Tarzan', 'EEUU', 30, '24/3', 185, 84),
(18, 'Jiri Prochazka\r\n', 'Denisa', 'Czech', 28, '28/3/1', 191, 93),
(19, 'Aleksandar Rakic', 'Rocket', 'Austria', 29, '14/2', 196, 93),
(20, 'Francis Ngannou', 'The Predator', 'Niggerian', 35, '16/3', 193, 118),
(21, 'Ciryl Gane', 'Bon Gamin', 'French', 31, '10/0', 193, 112);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fighter`
--
ALTER TABLE `fighter`
  ADD PRIMARY KEY (`id_fighter`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fighter`
--
ALTER TABLE `fighter`
  MODIFY `id_fighter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
