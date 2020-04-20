-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2020 a las 20:55:02
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotoshabitacion`
--

CREATE TABLE `fotoshabitacion` (
  `id` int(11) NOT NULL,
  `idhabitacion` int(11) NOT NULL,
  `fotografia` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id` int(11) NOT NULL,
  `nro` int(11) NOT NULL,
  `idtipohabitacion` int(11) NOT NULL,
  `banoprivado` tinyint(1) NOT NULL,
  `espacio` decimal(7,2) NOT NULL,
  `precio` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id`, `nro`, `idtipohabitacion`, `banoprivado`, `espacio`, `precio`) VALUES
(7, 1, 1, 1, '100.00', '1500.00'),
(9, 2, 7, 2, '200.00', '1200.00'),
(10, 3, 7, 1, '100.00', '1250.00'),
(11, 4, 7, 1, '200.00', '3200.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `codigoreserva` varchar(5) COLLATE utf8_bin NOT NULL,
  `fechaingreso` date NOT NULL,
  `fechasalida` date NOT NULL,
  `idhabitacion` int(11) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `pagada` tinyint(1) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_bin NOT NULL,
  `correoelectronico` varchar(70) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Recepcionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitaciones`
--

CREATE TABLE `tipohabitaciones` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(70) COLLATE utf8_bin NOT NULL,
  `nrocamas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipohabitaciones`
--

INSERT INTO `tipohabitaciones` (`id`, `descripcion`, `nrocamas`) VALUES
(1, 'doble', 2),
(7, 'simple', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(40) COLLATE utf8_bin NOT NULL,
  `nombres` varchar(40) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_bin NOT NULL,
  `idrol` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_bin NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `nombres`, `apellidos`, `idrol`, `estado`) VALUES
(1, 'admi@gmail.com', '6cd00776a079723548b5fe2980449e5262e40641', 'admi', 'admi apellido', 1, '0'),
(3, 'usuario@gmail.com', 'b665e217b51994789b02b1838e730d6b93baa30f', 'usuario', 'usuario ap', 0, '1'),
(11, 'recep@gmail.com', 'recep', 'recep', 'recep apellido', 2, '0'),
(12, 'admi1@gmail.com', 'admi', 'admi1', 'admi1 ap', 1, '0'),
(13, 'recep2@gmail.com', 'recer2', 'recep2', 'recep2 apellido', 2, ''),
(14, 'recep3@gmail.com', 'recep3', 'recep3', 'recep3 apellido', 2, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotoshabitacion`
--
ALTER TABLE `fotoshabitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipohabitaciones`
--
ALTER TABLE `tipohabitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotoshabitacion`
--
ALTER TABLE `fotoshabitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipohabitaciones`
--
ALTER TABLE `tipohabitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
