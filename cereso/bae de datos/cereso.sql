-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2019 a las 22:11:40
-- Versión del servidor: 10.4.8-MariaDB
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
-- Base de datos: `cereso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delito`
--

CREATE TABLE `delito` (
  `NUMDELITO` int(4) NOT NULL,
  `NOMDELITO` varchar(27) DEFAULT NULL,
  `MIN_DELITO` int(11) DEFAULT NULL,
  `MAX_DELITO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `delito`
--

INSERT INTO `delito` (`NUMDELITO`, `NOMDELITO`, `MIN_DELITO`, `MAX_DELITO`) VALUES
(23, 'CHOQUE', 5, 34),
(34, 'ROBO A TIENDA', 12, 90),
(78, 'LOCO JAJA', 3, 50),
(90, 'ROBO A TIENDA', 12, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delito_reos`
--

CREATE TABLE `delito_reos` (
  `NUMREO` int(4) NOT NULL,
  `NUMDELITO` int(4) NOT NULL,
  `REOANNO` int(2) DEFAULT NULL,
  `NUMCELDA` int(3) NOT NULL,
  `CODZONA` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `delito_reos`
--

INSERT INTO `delito_reos` (`NUMREO`, `NUMDELITO`, `REOANNO`, `NUMCELDA`, `CODZONA`) VALUES
(5, 78, 23, 12, 9013),
(2, 90, 45, 9, 9014);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `policia`
--

CREATE TABLE `policia` (
  `NUMPOLICIA` char(4) NOT NULL,
  `NOMPOLICIA` varchar(14) DEFAULT NULL,
  `JEFEPOLICIA` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `policia`
--

INSERT INTO `policia` (`NUMPOLICIA`, `NOMPOLICIA`, `JEFEPOLICIA`) VALUES
('1001', 'jorge', 1111),
('1002', 'samuel', 1112),
('1003', 'luis', 1113),
('1004', 'leonardo', 1114),
('1005', 'efrain', 1115),
('1006', 'ramon', 1114),
('1007', 'xander', 1111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reos`
--

CREATE TABLE `reos` (
  `NUMREO` int(4) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `APELLIDO` varchar(45) DEFAULT NULL,
  `ALIAS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reos`
--

INSERT INTO `reos` (`NUMREO`, `NOMBRE`, `APELLIDO`, `ALIAS`) VALUES
(1, 'LUISITO', 'HERNANDEZ', 'CHAPITO'),
(2, 'FER', 'HERNANDEZ', 'FHH'),
(3, 'SERGIO', 'PULIDO', 'QWERTY'),
(5, 'LEO', 'DANIEL', 'PGJ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `NUMREO` int(4) NOT NULL,
  `CVE_TRABAJO` int(3) NOT NULL,
  `TRABAJO` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`NUMREO`, `CVE_TRABAJO`, `TRABAJO`) VALUES
(1, 111, 'TRAPEAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `CODZONA` int(4) NOT NULL,
  `ZONA` varchar(10) DEFAULT NULL,
  `NUMPOLICIA` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`CODZONA`, `ZONA`, `NUMPOLICIA`) VALUES
(9010, 'suereste', '1002'),
(9011, 'sur', '1003'),
(9013, 'sur', '1005'),
(9014, 'norte', '1005');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `delito`
--
ALTER TABLE `delito`
  ADD PRIMARY KEY (`NUMDELITO`);

--
-- Indices de la tabla `delito_reos`
--
ALTER TABLE `delito_reos`
  ADD PRIMARY KEY (`CODZONA`,`NUMREO`,`NUMDELITO`),
  ADD KEY `NUMDELITO` (`NUMDELITO`),
  ADD KEY `CODZONA` (`CODZONA`),
  ADD KEY `delito_reos_ibfk_1` (`NUMREO`);

--
-- Indices de la tabla `policia`
--
ALTER TABLE `policia`
  ADD PRIMARY KEY (`NUMPOLICIA`);

--
-- Indices de la tabla `reos`
--
ALTER TABLE `reos`
  ADD PRIMARY KEY (`NUMREO`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`NUMREO`,`CVE_TRABAJO`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`CODZONA`),
  ADD KEY `NUMPOLI` (`NUMPOLICIA`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `delito_reos`
--
ALTER TABLE `delito_reos`
  ADD CONSTRAINT `delito_reos_ibfk_1` FOREIGN KEY (`NUMREO`) REFERENCES `reos` (`NUMREO`),
  ADD CONSTRAINT `delito_reos_ibfk_2` FOREIGN KEY (`NUMDELITO`) REFERENCES `delito` (`NUMDELITO`),
  ADD CONSTRAINT `delito_reos_ibfk_3` FOREIGN KEY (`CODZONA`) REFERENCES `zona` (`CODZONA`);

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `r1` FOREIGN KEY (`NUMREO`) REFERENCES `reos` (`NUMREO`);

--
-- Filtros para la tabla `zona`
--
ALTER TABLE `zona`
  ADD CONSTRAINT `zona_ibfk_1` FOREIGN KEY (`NUMPOLICIA`) REFERENCES `policia` (`NUMPOLICIA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
