-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 20:35:48
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
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `score` int(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_fighter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`id_comment`, `comment`, `score`, `user_id`, `id_fighter`) VALUES
(2, 'prueba', 3, 1, 2),
(3, 'ex campeon, gran peleador.', 4, 1, 2),
(17, 'Peleador de buen stricking (gran poder). Incompleto en el suelo.', 4, 1, 2),
(18, 'Es un campeon inmerecido. Buena tecnica', 3, 1, 3),
(21, 'The Last Stykebender!!! completo por donde lo mires!', 5, 1, 5),
(25, 'Posiblemente el mejor boxeador del UFC', 5, 21, 4),
(27, 'dasdasdasda', 3, 1, 5),
(28, 'Esta posponiendo peleas para conservar un titulo mal ganado', 2, 2, 3);

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
(32, 'Emilio Agustin Pernia', 'Pipe', 'arg', 37, '0', 170, 70, 1, 2254),
(36, 'dasdasd', 'hgfhfg', 'fghf', 56, '56', 56, 56, 1, 56),
(40, 'Jhon', 'Supergole', 'Arg', 29, '1', 190, 98, 1, 1),
(41, 'PruebaEdit2', 'Prueba1', 'Test', 40, '28/8', 188, 93, 2, 1),
(43, 'Prueba3', 'Prueba3', 'Test', 50, '2/8', 188, 93, 2, 1),
(44, 'Prueba4ed', 'Prueba4', 'Test', 60, '2/8', 188, 93, 2, 1),
(46, 'Prueba4', 'Prueba4', 'Test', 60, '2/8', 188, 93, 2, 1),
(47, 'Jhon', 'Sllkgg', 'Arg', 29, '1', 190, 98, 1, 1),
(55, 'Jhonsinsky', 'Sllkgg', 'Arg', 29, '1', 190, 98, 1, 1),
(58, 'Prueba5', 'Prueba5', 'Test', 60, '2/8', 188, 93, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `admin`, `userName`, `email`, `password`) VALUES
(1, 1, 'Emilio Agustin Pernia', 'emilioapernia@gmail.com', '$2y$10$Jd1cSwCPNR9xAzVFvVxZ2O6usqAbPVtx.OuLWymV0LAtRnYzyp6u.'),
(2, 0, 'Guadalupe Jimena', 'oronaguadalupe84@outlook.com', '$2y$10$kP2sPBBxF9KUt7Ha7m5V8.2Axz5uSdIcreChKAT42pYHQ10oo0ohK'),
(3, 0, 'Julian Pernia', 'julianpernia_92@hotmail.com', '$2y$10$Jgzb9vERHTRowz2o9t9NSOWQpuoVhPfF3EQ2CCf3yaTHJ9UTDpDOa'),
(4, 0, 'Lola Pernia', 'lolapernia@gmail.com', '$2y$10$tVF6P5T6yZxYU.QIRpD3fOXlDOidLwiab3kPUz/uX/oN9BonVwlQi'),
(8, 0, 'Olga Molian', 'mama@gmail.com', '$2y$10$AnfaGVCLRlWy5DMxMYALeO6bRft8YYDWb22GKOAHdPQypg9FP/ZRq'),
(15, 0, 'Emma Pernia', 'emmapernia@gmail.com', '$2y$10$N17nhl7lFK9o9GV2tivZceQSIDoxzOtWrTCOoh0qHg/I9nEKB.4j2'),
(16, 0, 'David Chaile', 'davidc@gmail.com', '$2y$10$WqzQETaOgnfNqXVYKKOXUOU923iPZfFj7iDukzonI86SF6dbox6ui'),
(17, 0, 'prueba', 'prueba@gmail.com', '$2y$10$zZiTBBO.oUmQaSMl4G20l.YIsj4hVOrA6kB80J9TX9iw3apyIqZx.'),
(18, 0, 'prueba1', 'prueba1@gmail.com', '$2y$10$W3JDfGlQD.l0oxcXnF0.P.e1Tu4JhOKH3ts9/b9DNCocvvpYOFG5e'),
(19, 0, 'Lola Pernia', 'lolipernia@gmail.com', '$2y$10$MhC85ROfl8Hiy9vk5PCiE.V4D3mX/1Qj/ccbQ4u5/F.2MY8r.3JZq'),
(20, 0, 'Emi Per', 'emiper@gmail.com', '$2y$10$6BDk4jqzUkDj/Q.UKFpIk.nToGyaNsdoW5z5HFBY/81tPcQUauTwy'),
(21, 0, 'Emmita Pernia', 'emmi@gmail.com', '$2y$10$SSviVqOnKICh9OhnvfpW3uPe34SMjsAU3A9ciwSrSoqVkbo96O0Xa');

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
(8, 'Flyweight', 56.6, 52.2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_comment_fighter` (`id_fighter`),
  ADD KEY `fk_comment_user` (`user_id`);

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
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `fighter`
--
ALTER TABLE `fighter`
  MODIFY `id_fighter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `weightclass`
--
ALTER TABLE `weightclass`
  MODIFY `weightClass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_fighter` FOREIGN KEY (`id_fighter`) REFERENCES `fighter` (`id_fighter`),
  ADD CONSTRAINT `fk_comment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Filtros para la tabla `fighter`
--
ALTER TABLE `fighter`
  ADD CONSTRAINT `fk_fighter_weightclass` FOREIGN KEY (`weightClass_id`) REFERENCES `weightclass` (`weightClass_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
