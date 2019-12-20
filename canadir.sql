-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2019 a las 23:53:43
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `canadir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuda`
--

CREATE TABLE `ayuda` (
  `id` int(11) NOT NULL,
  `nacionalida` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ayuda`
--

INSERT INTO `ayuda` (`id`, `nacionalida`, `estado`, `municipio`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', 'Chihuahua', 'Balleza'),
(6, '', 'Distrito Federal', 'Gustavo A. Madero'),
(7, '', 'Estado de Mexico', 'Acambay de Ruiz CastaÃ±eda'),
(8, '', 'Estado de Mexico', 'Acambay de Ruiz CastaÃ±eda'),
(9, '', 'Estado de Mexico', 'Acambay de Ruiz CastaÃ±eda'),
(10, '', 'Estado de Mexico', 'Acambay de Ruiz CastaÃ±eda'),
(11, '', 'Estado de Mexico', 'Acambay de Ruiz CastaÃ±eda'),
(12, '', 'Estado de Mexico', 'Acambay de Ruiz Castañeda'),
(13, '', 'Estado de Mexico', 'Acambay de Ruiz Castañeda'),
(14, '', 'Estado de Mexico', 'San MartÃ­n de las Piramides'),
(15, '', 'Estado de Mexico', 'San Marti­n de las Piramides'),
(16, '', 'Ciudad de Mexico', 'Ãlvaro Obregon'),
(17, '', 'Ciudad de Mexico', 'Alvaro Obregon'),
(18, '', 'Ciudad de Mexico', 'La Magdalena Contreras'),
(19, 'Mexico', 'Estado de Mexico', 'Ecatepec de Morelos'),
(20, 'Mexico', 'Estado de Mexico', 'Ecatepec de Morelos'),
(21, 'Mexico', 'Ciudad de Mexico', 'Venustiano Carranza'),
(22, '', '', ''),
(23, '', '', ''),
(24, 'Mexico', 'Baja California', 'Ensenada'),
(25, 'Mexico', 'Puebla', 'AcaxtlahuacÃ¡n de Albino Zertuche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacion`
--

CREATE TABLE `capacitacion` (
  `id` int(11) NOT NULL,
  `roles` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `capacitacion1` int(50) NOT NULL,
  `capacitacion2` int(11) NOT NULL,
  `capacitacion3` int(50) NOT NULL,
  `nombrecapacitacion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `video1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `video2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `video3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `video4` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `video5` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `video6` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `capacitacion`
--

INSERT INTO `capacitacion` (`id`, `roles`, `capacitacion1`, `capacitacion2`, `capacitacion3`, `nombrecapacitacion`, `descripcion`, `img`, `video1`, `video2`, `video3`, `video4`, `video5`, `video6`) VALUES
(1, 'Mesero', 1, 0, 0, 'Como vestir adecuadamente una mesa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\n', 'img/vestir_mesas.jpg', 'https://www.youtube.com/embed/iVwrTYtThM0', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU'),
(2, 'Cocinero', 1, 2, 3, 'como poder una mesa', 'shjkdhsjkdhkjshdkshk', 'img/logo.jpg', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU', 'https://www.youtube.com/embed/7s1RjItUBqU'),
(3, 'Mesero', 0, 2, 0, 'Como servir correctamente un platillo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'img/logo.png', 'https://www.youtube.com/embed/WdGxzGpVNvA', 'https://www.youtube.com/embed/RRu3opP0kFs', 'https://www.youtube.com/embed/WdGxzGpVNvA', '', '', ''),
(4, 'Mesero', 0, 0, 3, 'Capacitacion 3', 'gdfgfd', '', 'https://www.youtube.com/embed/dLkwOYDu0xY', 'https://www.youtube.com/embed/dLkwOYDu0xY', 'https://www.youtube.com/embed/dLkwOYDu0xY', '', '', ''),
(5, 'Chef', 1, 0, 0, 'capcitacion chef', 'gdfgdfg', 'img/logo.png', 'https://www.youtube.com/embed/dLkwOYDu0xY', 'https://www.youtube.com/embed/dLkwOYDu0xY', 'https://www.youtube.com/embed/dLkwOYDu0xY', '', '', ''),
(6, 'Chef', 0, 2, 0, 'seccion 2', 'seccion 2', 'img/logo.png', 'https://www.youtube.com/embed/dLkwOYDu0xY', 'https://www.youtube.com/embed/dLkwOYDu0xY', '', '', '', ''),
(7, 'Chef', 0, 0, 3, 'seccion 3', 'seccion 3', 'img/logo.png', '', '', 'https://www.youtube.com/embed/dLkwOYDu0xY', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `numeroempleado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `sucursal` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `turno` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `confirmapassword` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `numeroempleado`, `nombre`, `telefono`, `area`, `email`, `roles`, `sucursal`, `rfc`, `turno`, `foto`, `contrasena`, `confirmapassword`) VALUES
(1, '1001', 'Cesar Bazan ', '55-5097-5240', 'administrador', 'bazan102004@hotmail.com', 'Administrador', 'satelite', 'duyssgsdsds', '1', 'img/cesar.jpg', '123456', '123456'),
(2, '1002', 'Luis Perez', '55-4050-6065', 'mesero', 'bazancesar11@gmail.com', 'Mesero', 'Azteca', 'sasas', '2', 'img/cesar.jpg', '12345', '12345'),
(3, '1003', 'Juan Garcia', '55-5045-5620', 'Cocina', 'bazancesar12@gmail.com', 'Cocinero', 'Ecatepec', 'sdsdgsgdg', '3', 'img/cesar.jpg', '12345', '12345'),
(4, '1004', 'fsdfsdf', '6564654656', 'dfsfdsf', '', 'fsdfsdf', 'fsdfds', 'fsdfd', '1', 'fdsfsd', 'fsdf', 'fsdfd'),
(5, '1005', 'Pancho garces', '6546546', 'Chef', 'hgf', 'Chef', 'hhgf', 'hgfhfg', '3', 'fsd', 'fsdf', 'fdsf'),
(6, '1006', 'hgfhg', '5545', 'Mesero', 'gfdgdf', 'Mesero', 'fdsf', 'fsdfsd', '2', 'fsdfsd', 'fsdfds', 'fsdfd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `entidad_federativa` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `prefijo` int(255) NOT NULL,
  `clave` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `entidad_federativa`, `prefijo`, `clave`) VALUES
(1, 'Estado de México', 52, 1),
(2, 'Ciudad de Mexico', 52, 2),
(3, 'Veracruz', 52, 3),
(4, 'Puebla', 52, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `nombre_municipio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre_municipio`, `dos`, `id_estado`) VALUES
(1, 'Ecatepec', 'Estado de México', 1),
(2, 'tecamc', 'Estado de México', 1),
(3, 'Coacalco ', 'Estado de México', 1),
(4, 'Tlalpan', 'dsdsd', 2),
(5, 'Coyoacan', 'fdsfs', 2),
(6, 'yes', 'jjj', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombrepais` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `prefijo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombrepais`, `prefijo`) VALUES
(1, 'México', 52),
(2, 'Brazil', 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(50) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `configcontrasena` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `curso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_pago` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `direccion`, `telefono`, `edad`, `email`, `contrasena`, `configcontrasena`, `curso`, `imagen_pago`) VALUES
(1, 'Cesar', 'Bazan Cruz', 'Calle Lopez Mateos Numero 25 colonia Benito Juarez', '55-5098-5463', 25, 'bazan102004@hotmail.com', '12345', '12345', 'Workshop: Trabajo en Equipo', 'img_pagos/Botella_CBR.png'),
(2, 'Aldo', 'Cabrera Ramos', 'Calle 5 de mayo', '55-5069-5898', 30, 'aldo_cabrera2006@hotmail.com', '12345', '12345', 'Mi Patrimonio Fiscal', ''),
(3, 'Luis ', 'Gracia Marquez', 'lopez mateos 25 clalle duranzno', '545465465456', 35, 'bazancesar12@gmail.com', '123456', '123456', 'Introduccion a Workshop', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
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
-- AUTO_INCREMENT de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
