-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2019 a las 20:14:14
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casasnocturnas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `damas`
--

CREATE TABLE `damas` (
  `id_dama` int(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `descripcion` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `damas`
--

INSERT INTO `damas` (`id_dama`, `nombre`, `nacionalidad`, `edad`, `descripcion`) VALUES
(1, 'david choque cusi', 'paceña', '19', 'lo mas barato de la casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'el rincon', 'Calle las Flores # 12', -17.786289, -63.181171, 'para adultos');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `mostrar`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `mostrar` (
`id_reserva` int(11)
,`nombre` varchar(60)
,`descripcion` varchar(80)
,`fecha` date
,`forma_pago` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `tipo_persona` varchar(30) DEFAULT NULL,
  `nombre` varchar(60) NOT NULL,
  `ci` varchar(15) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `tipo_persona`, `nombre`, `ci`, `telefono`, `correo`, `direccion`, `usuario`, `clave`) VALUES
(1, 'adm', 'edson', '1233456', '123456', 'edson@gmail.com', 'las lomas/paititi', 'adm', '123'),
(2, '', 'joel', '123456', '123456', 'eds@gmail.com', 'las lomas', 'adadam', '123'),
(3, '', 'ugo', '4562', '523123', 'dsf@gmail.com', 'las lomas', 'admada', '123'),
(4, '', 'joel', '123456', '123456', 'joel@gmail.com', 'las lomas', 'joel', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `precio` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'tres cuervos', 'lo mas fuerte de la casa', 10),
(2, 'leche', 'lo mas barato de la casa', 10),
(3, '', '', 10),
(4, 'chiquicho', 'chocolatada', 10),
(5, 'alcohol', 'lo mas caro', 222),
(6, 'alcohol', 'lo mas caro', 222),
(7, 'agua', 'lo mas economico', 666),
(8, 'agua', 'lo mas economico', 666),
(9, '7 machos', '777', 777),
(10, 'el duende', 'una bebida que causa alucinaciones', 15.15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `forma_pago` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `id_persona`, `id_servicio`, `fecha`, `forma_pago`) VALUES
(20, 4, 1, '2019-12-31', 'tarjeta debito'),
(19, 4, 1, '2019-12-11', 'tarjeta credito'),
(18, 4, 1, '2019-12-13', 'tarjeta debito'),
(17, 4, 1, '2018-07-22', 'tarjeta credito'),
(16, 0, 1, '0000-00-00', 'tarjeta credito'),
(15, 0, 1, '0000-00-00', 'dinero'),
(14, 0, 1, '0000-00-00', 'tarjeta credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_dama` int(10) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `precio` decimal(3,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `id`, `id_dama`, `id_producto`, `nombre`, `descripcion`, `precio`) VALUES
(1, 1, 1, 1, 'Una loca + mas chinb', '1', '9.99');

-- --------------------------------------------------------

--
-- Estructura para la vista `mostrar`
--
DROP TABLE IF EXISTS `mostrar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mostrar`  AS  select `dc`.`id_reserva` AS `id_reserva`,`dp`.`nombre` AS `nombre`,`ds`.`descripcion` AS `descripcion`,`dc`.`fecha` AS `fecha`,`dc`.`forma_pago` AS `forma_pago` from ((`reservas` `dc` join `personas` `dp` on(`dc`.`id_persona` = `dp`.`id_persona`)) join `servicios` `ds` on(`dc`.`id_servicio` = `ds`.`id_servicio`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `damas`
--
ALTER TABLE `damas`
  ADD PRIMARY KEY (`id_dama`);

--
-- Indices de la tabla `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id` (`id`),
  ADD KEY `id_dama` (`id_dama`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `damas`
--
ALTER TABLE `damas`
  MODIFY `id_dama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
