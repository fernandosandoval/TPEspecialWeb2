-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2017 a las 13:31:02
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `id_item` int(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fk_id_vendedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id_item`, `nombre`, `genero`, `precio`, `descripcion`, `fk_id_vendedor`) VALUES
(1, 'Mortal Kombat XL', 'Lucha', 1000, 'El mejor juego de peleas', 1),
(2, 'Uncharted 4', 'Aventura', 800, 'La ultima entrega de la saga de Nathan Drake', 1),
(4, 'PES 2018', 'Deportes', 1300, 'Este año el PES es mejor que el FIFA', 2),
(5, 'Playstation 4 Slim con 2 Joysticks', 'No posee', 10000, 'Comprala hoy y te llevas un juego de regalo', 3),
(6, 'Joystick Dualshock para PS4', 'No posee', 1500, 'Nuevo, sin uso', 3),
(8, 'Driveclub', 'Carreras de autos', 500, 'Oferta Cybermonday!!!', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`) VALUES
(1, 'fer', '$2y$10$tJmcy7y1Gp7tqqHber894Oup.9fVGA4yYEDJzNPloveSIYPaMNNom', 'Fernando', 'Sandoval');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `localidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios que publican juegos';

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre`, `telefono`, `localidad`) VALUES
(1, 'Jose', '2494111111', 'Tandil'),
(2, 'Juan', '2494123456', 'Tandil'),
(3, 'Pedro', '2236666666', 'Mar del Plata'),
(4, 'Carlos', '2354534435', 'Barker');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `fkey` (`fk_id_vendedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`),
  ADD UNIQUE KEY `id_usuario` (`id_vendedor`),
  ADD KEY `id_persona` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fkey` FOREIGN KEY (`fk_id_vendedor`) REFERENCES `vendedor` (`id_vendedor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
