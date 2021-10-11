-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2021 a las 20:24:57
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
  `weight` int(11) NOT NULL,
  `weightClass_id` int(11) NOT NULL,
  `weightClassRank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fighter`
--

INSERT INTO `fighter` (`id_fighter`, `name`, `nickname`, `nationality`, `age`, `record`, `height`, `weight`, `weightClass_id`, `weightClassRank`) VALUES
(2, 'Jan Blachowicz', 'The Polish Power', 'Poland', 38, '28/8', 188, 93, 2, 1),
(3, 'Aljamain Sterling', 'Funk Master', 'EEUU', 32, '20/3', 170, 61, 7, 1),
(4, 'Petr Yan', 'No Mercy', 'Russia', 28, '15/2', 170, 61, 7, 2),
(5, 'Israel Adesanya', 'The Last Stylebender', 'Nigerian', 32, '21/1', 193, 84, 3, 1),
(6, 'T.J. Dillashaw', 'Killshaw', 'EEUU', 35, '18/4', 170, 61, 7, 3),
(7, 'Alexander Volkanovski', 'The Great', 'Australian', 32, '23/1', 168, 66, 6, 1),
(8, 'Max Holloway', 'Blessed', 'EEUU', 29, '22/6', 180, 66, 6, 2),
(9, 'Brian Ortega', 'T-City', 'EEUU', 30, '15/2', 172, 66, 6, 3),
(10, 'Charles Oliveira', 'Do Bronx', 'Brasilian', 31, '31/8', 178, 70, 5, 1),
(11, 'Dustin Poirier', 'The Diamond', 'EEUU', 32, '28/6', 175, 70, 5, 2),
(12, 'Islam Makhachev', 'Hassbulla', 'Russian', 29, '20/1', 178, 70, 5, 3),
(13, 'Kamaru Usman', 'The Niggerian Nightmare', 'Niggeria', 34, '19/1', 183, 77, 4, 1),
(14, 'Colby Covington', 'Chaos', 'EEUU', 33, '16/2', 180, 77, 4, 2),
(15, 'Gilbert Burns', 'Durinho', 'Brasilian', 35, '20/4', 178, 77, 4, 3),
(16, 'Robert Whittaker', 'The Reaper', 'Australian', 30, '24/5', 183, 84, 3, 2),
(17, 'Sean Strickland', 'Tarzan', 'EEUU', 30, '24/3', 185, 84, 3, 3),
(18, 'Jiri Prochazka\r\n', 'Denisa', 'Czech', 28, '28/3/1', 191, 93, 2, 2),
(19, 'Aleksandar Rakic', 'Rocket', 'Austria', 29, '14/2', 196, 93, 2, 3),
(26, 'Jon Jones', 'Bones', 'EEUU', 31, '18/0/1', 191, 212, 1, 3),
(27, 'Emilio Pernia', 'Pipe', 'Arg', 37, '0/0/0', 170, 70, 1, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `userName`, `email`, `password`) VALUES
(1, 'Emilio Agustin Pernia', 'emilioapernia@gmail.com', '$2y$10$Jd1cSwCPNR9xAzVFvVxZ2O6usqAbPVtx.OuLWymV0LAtRnYzyp6u.'),
(2, 'Guadalupe Jimena', 'oronaguadalupe84@outlook.com', '$2y$10$kP2sPBBxF9KUt7Ha7m5V8.2Axz5uSdIcreChKAT42pYHQ10oo0ohK'),
(3, 'Julian Pernia', 'julianpernia_92@hotmail.com', '$2y$10$Jgzb9vERHTRowz2o9t9NSOWQpuoVhPfF3EQ2CCf3yaTHJ9UTDpDOa'),
(4, 'Lola Pernia', 'lolapernia@gmail.com', '$2y$10$tVF6P5T6yZxYU.QIRpD3fOXlDOidLwiab3kPUz/uX/oN9BonVwlQi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `weightclass`
--

CREATE TABLE `weightclass` (
  `weightClass_id` int(11) NOT NULL,
  `weightClassName` varchar(50) NOT NULL,
  `maxWeight` double NOT NULL,
  `minWeight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `weightclass`
--

INSERT INTO `weightclass` (`weightClass_id`, `weightClassName`, `maxWeight`, `minWeight`) VALUES
(1, 'Heavyweight', 120.2, 93),
(2, 'Light Heavyweight	', 92.9, 83.9),
(3, 'Middleweight', 83.8, 77.1),
(4, 'Welterweight', 77, 70.3),
(5, 'Lightweight', 70.2, 65.8),
(6, 'Featherweight', 65.7, 61.2),
(7, 'Bantamweight', 61.1, 56.7),
(8, 'Flyweight', 56.6, 52.2),
(9, 'PruebaEdit2', 40, 38);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fighter`
--
ALTER TABLE `fighter`
  ADD PRIMARY KEY (`id_fighter`),
  ADD KEY `fk_fighter_weightclass` (`weightClass_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `weightclass`
--
ALTER TABLE `weightclass`
  ADD PRIMARY KEY (`weightClass_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fighter`
--
ALTER TABLE `fighter`
  MODIFY `id_fighter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `weightclass`
--
ALTER TABLE `weightclass`
  MODIFY `weightClass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fighter`
--
ALTER TABLE `fighter`
  ADD CONSTRAINT `fk_fighter_weightclass` FOREIGN KEY (`weightClass_id`) REFERENCES `weightclass` (`weightClass_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
