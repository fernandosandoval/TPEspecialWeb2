-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2017 a las 11:57:33
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
  `tipo` varchar(10) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `fk_id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id_item`, `nombre`, `tipo`, `genero`, `precio`, `descripcion`, `fk_id_usuario`) VALUES
(1, 'Mortal Kombat XL', 'Juego', 'Lucha', 1000, 'El mejor juego de peleas', 1),
(2, 'Uncharted 4', 'Juego', 'Aventura', 800, 'La ultima entrega de la clásica saga de Nathan Drake', 1),
(3, 'FIFA 18', 'Juego', 'Deportes', 1500, 'Nuevo, recién salido del horno', 2),
(4, 'PES 2018', 'Juego', 'Deportes', 1300, 'Este año el PES es mejor que el FIFA', 2),
(5, 'Playstation 4 Slim con 2 Joysticks', 'Consola', 'No posee', 10000, 'Comprala hoy y te llevas un juego de regalo', 3),
(6, 'Joystick Dualshock para PS4', 'Accesorio', 'No posee', 1500, 'Nuevo, sin uso', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `localidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios que publican juegos';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `telefono`, `localidad`) VALUES
(1, 'Jose', '2494111111', 'Tandil'),
(2, 'Juan', '2494123456', 'Tandil'),
(3, 'Pedro', '2236666666', 'Mar del Plata');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_persona` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
