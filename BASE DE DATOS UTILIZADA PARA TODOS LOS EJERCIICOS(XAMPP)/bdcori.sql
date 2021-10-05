-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2021 a las 11:00:40
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
-- Base de datos: `bdcori`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `carrera` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `id_persona`, `carrera`) VALUES
(1, 1, 'informatica'),
(2, 3, 'matematica'),
(3, 5, 'estadistica'),
(4, 7, 'estadistica'),
(5, 9, 'informatica'),
(6, 11, 'informatica'),
(7, 13, 'matematica'),
(8, 15, 'estadistica'),
(9, 17, 'matematica'),
(10, 19, 'informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `carrera` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `id_persona`, `carrera`) VALUES
(1, 2, 'matematica'),
(2, 4, 'estadistica'),
(3, 6, 'informatica'),
(4, 8, 'matematica'),
(5, 10, 'estadistica'),
(6, 12, 'informatica'),
(7, 14, 'matematica'),
(8, 16, 'estadistica'),
(9, 18, 'informatica'),
(10, 20, 'informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `sigla` varchar(20) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `sigla`, `nombre`, `id_docente`) VALUES
(1, 'inf-111', 'introduccion a la informatica', 1),
(2, 'lab-111', 'laboratorio de inf-111', 5),
(3, 'inf-112', 'organizacion de computadoras', 6),
(4, 'inf-113', 'laboratorio de computacion', 10),
(5, 'mat-114', 'matematica discreta ', 2),
(6, 'mat-115', 'analisis matematico ', 7),
(7, 'inf-121', 'algoritmos y programacion', 5),
(8, 'lab-121', 'laboratorio de inf-121', 5),
(9, 'fis-122', 'fisica i', 4),
(10, 'mat-111', 'algebra i', 2),
(11, 'mat-112', 'calculo diferencia e integral i', 7),
(12, 'mat-113', 'geometria i', 9),
(13, 'mat-114', 'heuristica matematica', 2),
(14, 'mat-117', 'computacion cientifica', 7),
(15, 'mat-131', 'algebra lineal i', 9),
(16, 'mat-122', 'calculo diferencial e integral ii', 2),
(17, 'mat-123', 'geometria ii', 7),
(18, 'mat-120', 'teoria de numeros', 9),
(19, 'inf-111', 'programacion i', 1),
(20, 'lab-111', 'laboratorio de programacion', 1),
(21, 'mat-130', 'algebra', 7),
(22, 'mat-132', 'calculo i', 7),
(23, 'est-113', 'estadistica descriptiva', 3),
(24, 'est-122', 'computacion estadistica', 8),
(25, 'est-124', 'diseño procesamiento y analisis estadistico', 4),
(26, 'mat-136', 'algebra lineal', 2),
(27, 'mat-134', 'calculo ii', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` double NOT NULL,
  `nota3` double NOT NULL,
  `nota_final` double NOT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `id_estudiante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`id_nota`, `nota1`, `nota2`, `nota3`, `nota_final`, `id_materia`, `id_estudiante`) VALUES
(28, 55.4, 81.1, 81.2, 72.6, 1, 3),
(29, 63.3, 25.5, 90.2, 59.7, 2, 3),
(30, 53.7, 93.2, 97.8, 81.6, 3, 3),
(31, 65.8, 34.7, 97.3, 65.9, 4, 3),
(32, 69.7, 52.7, 45, 55.8, 5, 3),
(33, 45.7, 51.9, 88.9, 62.2, 6, 3),
(34, 97.9, 33.6, 52, 61.2, 7, 3),
(35, 25.6, 68.8, 93.9, 62.8, 8, 3),
(36, 27.3, 35, 86.5, 49.6, 9, 3),
(37, 37.1, 37.3, 70, 48.1, 1, 6),
(38, 41.2, 99.7, 28.8, 56.6, 2, 6),
(39, 49.6, 25.4, 41.5, 38.8, 3, 6),
(40, 44.7, 53.8, 46.2, 48.2, 4, 6),
(41, 94, 92.5, 86.7, 91.1, 5, 6),
(42, 46, 37.2, 34.9, 39.4, 1, 9),
(43, 46.6, 71.7, 57.3, 58.5, 2, 9),
(44, 73.2, 60.5, 50.3, 61.3, 3, 9),
(45, 38.5, 30.9, 30.8, 33.4, 1, 10),
(46, 77.9, 70.2, 34.2, 60.8, 3, 10),
(47, 86.3, 96.7, 46.2, 76.4, 5, 10),
(48, 30.8, 30.8, 78.1, 46.6, 10, 1),
(49, 95, 83.4, 78.1, 85.5, 11, 1),
(50, 96.1, 43.9, 83.1, 74.4, 12, 1),
(51, 86.8, 46, 54, 62.3, 13, 1),
(52, 83.7, 71, 89.5, 81.4, 14, 1),
(53, 35.7, 98.7, 82.8, 72.4, 10, 4),
(54, 71.3, 86.2, 99.4, 85.6, 11, 4),
(55, 57.8, 96.6, 90.6, 81.7, 12, 4),
(56, 42.1, 93.5, 98.2, 77.9, 13, 4),
(57, 77, 82.8, 51.8, 70.5, 14, 4),
(58, 38.8, 92.4, 45, 58.7, 15, 4),
(59, 60.1, 50.2, 64.7, 58.3, 16, 4),
(60, 98.7, 56, 30.4, 61.7, 10, 7),
(61, 31.7, 73.2, 49.3, 51.4, 11, 7),
(70, 94.4, 36.3, 45.6, 58.8, 19, 2),
(71, 49.8, 33.9, 25.9, 36.5, 21, 2),
(72, 52, 28.2, 70.9, 50.4, 23, 2),
(73, 46.4, 53.7, 32.8, 44.3, 19, 5),
(74, 69.3, 38.1, 82.3, 63.2, 20, 5),
(75, 30.1, 69.4, 78.6, 59.4, 21, 5),
(76, 54.8, 80.1, 84.9, 73.3, 22, 5),
(77, 85.3, 86.5, 50.2, 74, 23, 5),
(78, 63.4, 82.5, 81.1, 75.7, 22, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `cod_depart` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `ci`, `fecha_nac`, `cod_depart`) VALUES
(1, 'Cariotta Thurlby', '0273789570', '0000-00-00', '01'),
(2, 'Hunfredo Barbey', '0131895745', '0000-00-00', '02'),
(3, 'Cortie Maypes', '1529101182', '0000-00-00', '01'),
(4, 'Reeva O\'Hone', '1145756093', '0000-00-00', '04'),
(5, 'Merola Drakeford', '5791776608', '0000-00-00', '08'),
(6, 'Gillian McLugaish', '1169553001', '0000-00-00', '06'),
(7, 'Sherwynd Swyndley', '4717804201', '0000-00-00', '07'),
(8, 'Hartley Lenchenko', '6027213000', '0000-00-00', '08'),
(9, 'Toby Southwell', '0689653883', '0000-00-00', '02'),
(10, 'Zebedee Azam', '0363664939', '0000-00-00', '01'),
(11, 'Giralda Farryn', '7888068898', '0000-00-00', '08'),
(12, 'Maximilianus MacElroy', '9060944291', '0000-00-00', '02'),
(13, 'Ephrem Henrys', '0898689279', '0000-00-00', '01'),
(14, 'Esma Holleran', '8589502260', '0000-00-00', '08'),
(15, 'Kimmie Cahani', '5869831873', '0000-00-00', '06'),
(16, 'Anton Heggman', '7472228796', '0000-00-00', '01'),
(17, 'Julissa Deverille', '8566635132', '0000-00-00', '04'),
(18, 'Had Castagnaro', '4811759087', '0000-00-00', '03'),
(19, 'Johnna Ballendine', '6769972263', '0000-00-00', '09'),
(20, 'Berni Evensden', '1598503588', '0000-00-00', '06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usu` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `rol` int(1) NOT NULL,
  `id_persona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usu`, `pass`, `rol`, `id_persona`) VALUES
(1, 'xstooke0@ehow.com', 'WOhCVlORU', 1, 1),
(2, 'shealeas1@ovh.net', 'vNqkZMXo8dmH', 2, 2),
(3, 'mwindus2@zimbio.com', '1nrgqyTW', 1, 3),
(4, 'hhamner3@sitemeter.c', 'RhDnEamMK', 2, 4),
(5, 'lbattrum4@google.com', 'r5xzbl', 1, 5),
(6, 'wtuppeny5@wired.com', 'xrNEEr3FT8y', 2, 6),
(7, 'abegg6@opera.com', 'o3YCf3KDGY0v', 1, 7),
(8, 'ddrei7@sogou.com', 'AUA4UaQb2rc7', 2, 8),
(9, 'mtomaini8@elpais.com', 'SkDwBzO', 1, 9),
(10, 'hsmullin9@altervista', 'c6nwNBqe', 2, 10),
(11, 'nwasona@businessweek', 'v7sZhpuWDzWH', 1, 11),
(12, 'gbrownfieldb@faceboo', '93Ig2B9n', 2, 12),
(13, 'ajewisec@sciencedire', 'M41QKpmWK', 1, 13),
(14, 'nespinosad@i2i.jp', 'B6TvEcgW8a', 2, 14),
(15, 'agarcie@example.com', 'ZzZ7eSH2Pd9v', 1, 15),
(16, 'tkonnekef@java.com', '5qhfLglzFR', 2, 16),
(17, 'ffranckeg@netscape.c', 'Jtcwokt', 1, 17),
(18, 'hspinageh@networkadv', 'hPoDnT', 2, 18),
(19, 'lwindlessi@answers.c', 'xEL4mI', 1, 19),
(20, 'mdankovj@topsy.com', 'wgAlaukHgL47', 2, 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_persona` (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id_docente`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`),
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
