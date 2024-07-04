-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2023 a las 18:26:32
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
-- Base de datos: `prueba_tecandroid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddep` int(11) NOT NULL,
  `pais` int(5) NOT NULL,
  `Depto` int(5) NOT NULL,
  `Nombredepto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`iddep`, `pais`, `Depto`, `Nombredepto`) VALUES
(1, 1, 1, 'Guatemala'),
(2, 1, 2, 'Escuintla'),
(3, 1, 3, 'Santa Rosa'),
(4, 1, 3, 'Quetzaltenango'),
(5, 1, 4, 'Mazatenango');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idpais` int(5) NOT NULL,
  `nombrepais` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idpais`, `nombrepais`) VALUES
(1, 'Guatemala'),
(2, 'El salvador'),
(3, 'Honduras'),
(4, 'Nicaragua'),
(5, 'Costa Rica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idpersonas` int(11) NOT NULL,
  `Nombre_completo` varchar(100) NOT NULL,
  `pais` int(5) NOT NULL,
  `departamento` int(5) NOT NULL,
  `idusers` int(11) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idpersonas`, `Nombre_completo`, `pais`, `departamento`, `idusers`, `direccion`, `fecha_creacion`, `fecha_nacimiento`) VALUES
(2, 'Brayan Ruiz', 1, 4, 1, '3av 2-22 zona 10 Quetzaltenango', '2023-11-30 01:07:37', '1990-01-05'),
(3, 'Isai Ruiz', 1, 1, 2, '10ma calle 2-98 zona 5, Guatemala', '2023-11-30 01:07:37', '1995-04-04'),
(4, 'Carlos lopez', 1, 1, NULL, '2nda ave 2-22 zona 1, Guatemala', '2023-11-30 01:07:37', '2000-04-05'),
(5, 'Daniela Barrios', 1, 1, NULL, '6ta ave 1-22 zona 14', '2023-11-30 01:43:19', '1997-11-30'),
(11, 'Daniel Suarez', 1, 3, NULL, '9na ave 9-99', '2023-12-06 17:11:18', '1990-12-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `iduser` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `nombre`, `email`, `telefono`, `pass`) VALUES
(1, 'BrayanR', 'prueba@mail.com', '55442233', '54321'),
(2, 'IsaiG', 'pruebaapp@gmail.com', '12345678', '09876'),
(29, 'ManuelR', 'rene@outlook.com', '12345678', '987654'),
(33, 'Javier Mendez', 'jmendez@yahoo.com', '12345678', '998877');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddep`),
  ADD KEY `fk_pais_departamento` (`pais`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idpais`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idpersonas`),
  ADD KEY `fk_personas_departamento` (`departamento`),
  ADD KEY `fk_personas_pais` (`pais`),
  ADD KEY `fk_personas_usuarios` (`idusers`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idpais` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idpersonas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fk_pais_departamento` FOREIGN KEY (`pais`) REFERENCES `pais` (`idpais`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `fk_personas_departamento` FOREIGN KEY (`departamento`) REFERENCES `departamento` (`iddep`),
  ADD CONSTRAINT `fk_personas_pais` FOREIGN KEY (`pais`) REFERENCES `pais` (`idpais`),
  ADD CONSTRAINT `fk_personas_usuarios` FOREIGN KEY (`idusers`) REFERENCES `usuarios` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
