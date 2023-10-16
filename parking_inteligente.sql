-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2023 a las 21:35:33
-- Versión del servidor: 8.0.17
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
-- Base de datos: `parking_inteligente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas_e`
--

CREATE TABLE `entradas_e` (
  `id_en` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `hora_entrada` time NOT NULL,
  `usuario_u` varchar(60) NOT NULL,
  `id_e` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `entradas_e`
--

INSERT INTO `entradas_e` (`id_en`, `fecha_entrada`, `hora_entrada`, `usuario_u`, `id_e`) VALUES
(81, '2023-05-17', '13:38:52', 'taniach.mar', 2),
(82, '2023-05-17', '13:38:54', 'Esteban Fernandez', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios_e`
--

CREATE TABLE `espacios_e` (
  `id_e` int(11) NOT NULL,
  `nombre_e` varchar(40) NOT NULL,
  `estatus_e` varchar(40) NOT NULL,
  `usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `espacios_e`
--

INSERT INTO `espacios_e` (`id_e`, `nombre_e`, `estatus_e`, `usuario`) VALUES
(1, 'A1', 'Disponible', ''),
(2, 'A2', 'Disponible', ''),
(3, 'A3', 'Disponible', ''),
(4, 'A4', 'Disponible', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas_e`
--

CREATE TABLE `salidas_e` (
  `id_sa` int(11) NOT NULL,
  `fecha_salida` date NOT NULL,
  `hora_salida` time NOT NULL,
  `espacio` varchar(40) NOT NULL,
  `usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `salidas_e`
--

INSERT INTO `salidas_e` (`id_sa`, `fecha_salida`, `hora_salida`, `espacio`, `usuario`) VALUES
(434, '2023-05-20', '17:00:52', 'A4', 'Esteban Fernandez'),
(435, '2023-05-20', '17:01:44', 'A4', 'Esteban Fernandez'),
(436, '2023-05-22', '21:10:05', 'A2', 'Esteban Fernandez'),
(437, '2023-05-22', '21:11:22', 'A3', 'Esteban Fernandez'),
(438, '2023-05-22', '21:11:40', 'A1', 'Esteban Fernandez'),
(439, '2023-05-22', '21:25:35', 'A2', 'Esteban Fernandez'),
(440, '2023-05-22', '21:26:41', 'A3', 'Esteban Fernandez'),
(441, '2023-05-22', '21:27:07', 'A2', 'Esteban Fernandez'),
(442, '2023-05-22', '22:39:10', 'A1', 'Esteban Fernandez'),
(443, '2023-05-22', '22:39:21', 'A4', 'Esteban Fernandez'),
(444, '2023-05-23', '18:09:08', 'A2', 'taniach.mar'),
(445, '2023-05-23', '18:11:01', 'A4', 'taniach.mar'),
(447, '2023-05-24', '19:29:46', 'A2', 'Esteban Fernandez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_u` int(11) NOT NULL,
  `nombre_u` varchar(40) NOT NULL,
  `apellido_u` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `domicilio_u` varchar(50) NOT NULL,
  `puesto_u` varchar(40) NOT NULL,
  `rol_u` varchar(40) NOT NULL,
  `usuario_u` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password_u` varchar(40) NOT NULL,
  `foto_u` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_u`, `nombre_u`, `apellido_u`, `domicilio_u`, `puesto_u`, `rol_u`, `usuario_u`, `password_u`, `foto_u`) VALUES
(1, 'Sofia', 'Gonzales Garcia', 'Calle Girasoles', 'Profesora', 'Administrador', 'sofia.Gonzale10', 'sofia1234', 'foto_prueba.PNG'),
(4, 'Esteban', 'Fuentes Fernandez', 'Calle Miradores', 'Secretario', 'Cliente', 'Esteban Fernandez', 'esteban1234', 'foto_prueba2.jpg'),
(6, 'Tania', 'Chavez Martinez', 'Calle Miguel Hidalgo', 'Contador', 'Cliente', 'taniach.mar', 'tania.chavez', 'foto.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entradas_e`
--
ALTER TABLE `entradas_e`
  ADD PRIMARY KEY (`id_en`);

--
-- Indices de la tabla `espacios_e`
--
ALTER TABLE `espacios_e`
  ADD PRIMARY KEY (`id_e`);

--
-- Indices de la tabla `salidas_e`
--
ALTER TABLE `salidas_e`
  ADD PRIMARY KEY (`id_sa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entradas_e`
--
ALTER TABLE `entradas_e`
  MODIFY `id_en` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `espacios_e`
--
ALTER TABLE `espacios_e`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `salidas_e`
--
ALTER TABLE `salidas_e`
  MODIFY `id_sa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
