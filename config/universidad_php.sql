-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2023 a las 23:41:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_alumnos`
--

CREATE TABLE `materias_alumnos` (
  `id_materia_alumnos` int(11) NOT NULL,
  `id_maestros_materia` int(11) DEFAULT NULL,
  `matricula_alumnos` int(11) DEFAULT NULL,
  `calificaciones` int(11) DEFAULT NULL,
  `mensaje_maestro` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_maestros`
--

CREATE TABLE `materias_maestros` (
  `id_materia_maestro` int(11) NOT NULL,
  `maestro_asignado` int(11) DEFAULT NULL,
  `materia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias_maestros`
--

INSERT INTO `materias_maestros` (`id_materia_maestro`, `maestro_asignado`, `materia_id`) VALUES
(1, 2, 1),
(2, 5, 2),
(3, 6, 2),
(4, 7, 3),
(5, 2, 5),
(6, 8, 4),
(7, 5, 5),
(8, 6, 3),
(9, 9, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_universidad`
--

CREATE TABLE `materias_universidad` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias_universidad`
--

INSERT INTO `materias_universidad` (`id_materia`, `nombre_materia`) VALUES
(1, 'Programacion Front-end'),
(2, 'Prorgramacion Back-end'),
(3, 'Python'),
(4, 'C#'),
(5, 'Java'),
(6, 'Ingles'),
(7, 'Programacion orientada a objetos'),
(8, 'Frances');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_universidad`
--

CREATE TABLE `usuarios_universidad` (
  `id_usuario` int(11) NOT NULL,
  `matricula` int(11) DEFAULT NULL,
  `nombre_usuario` varchar(250) DEFAULT NULL,
  `apellido` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contracena` varchar(250) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `roles` enum('ADMIN','MAESTRO','ALUMNO') DEFAULT NULL,
  `estado` enum('ACTIVO','INACTIVO') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_universidad`
--

INSERT INTO `usuarios_universidad` (`id_usuario`, `matricula`, `nombre_usuario`, `apellido`, `email`, `contracena`, `direccion`, `fecha_nacimiento`, `roles`, `estado`) VALUES
(1, NULL, 'Harold', 'Carazas', 'admin@admin', '$2y$10$92Ri.AKm14idOwOpAeT7U.3pbxcC2XIR34y/QZZnWjaopCSTGwoc6', 'calle 1 col. La huerta, CP28973', '1997-09-19', 'ADMIN', 'ACTIVO'),
(2, NULL, 'Lily', 'Jaimes', 'maestro@maestro', '$2y$10$Hj9lV2dra6yE2OuG8CaK2.An7VPvGnqJu686NOwkPUZi3dFKEsXJq', 'calle #5 col.Huentitan, CP30896', '2023-10-17', 'MAESTRO', 'ACTIVO'),
(3, 56789, 'David', 'Fontes', 'alumno@alumno', '$2y$10$iy1mwt8TpLKzuN4Z3bUqCO0HVIB9I7GwI35/e/43/Xx.3OGzEmim6', 'Calle #6 col. Tabachines. CP28983', '1997-09-09', 'ALUMNO', 'ACTIVO'),
(4, 98765, 'Alex', 'Mercado', 'alex@alex', '$2y$10$iy1mwt8TpLKzuN4Z3bUqCO0HVIB9I7GwI35/e/43/Xx.3OGzEmim6', 'Desconocido', '1994-09-23', 'ALUMNO', 'INACTIVO'),
(5, NULL, 'Carlos', 'Olmos', 'olmos@olmos', '$2y$10$Hj9lV2dra6yE2OuG8CaK2.An7VPvGnqJu686NOwkPUZi3dFKEsXJq', 'Calle 4 av. Siempre Viva', '1970-04-21', 'MAESTRO', 'ACTIVO'),
(6, NULL, 'Sergio', 'Garcia', 'sergio@sergio', '$2y$10$Hj9lV2dra6yE2OuG8CaK2.An7VPvGnqJu686NOwkPUZi3dFKEsXJq', 'Abajo de un puente', '1990-02-13', 'MAESTRO', 'ACTIVO'),
(7, NULL, 'Hyrum', 'Smith', 'smith@smith', '$2y$10$Hj9lV2dra6yE2OuG8CaK2.An7VPvGnqJu686NOwkPUZi3dFKEsXJq', 'Utah st. Walk #88888', '1992-06-16', 'MAESTRO', 'INACTIVO'),
(8, NULL, 'Roger', 'Huitron', 'roger@roger', '$2y$10$Hj9lV2dra6yE2OuG8CaK2.An7VPvGnqJu686NOwkPUZi3dFKEsXJq', 'Al otro lado del charco', '1980-05-06', 'MAESTRO', 'ACTIVO'),
(9, NULL, 'xbox', 'playstation', 'control@control', NULL, 'av. Sony col. Microsoft', '2023-10-20', 'MAESTRO', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materias_alumnos`
--
ALTER TABLE `materias_alumnos`
  ADD PRIMARY KEY (`id_materia_alumnos`),
  ADD KEY `id_maestros_materia` (`id_maestros_materia`),
  ADD KEY `matricula_alumnos` (`matricula_alumnos`);

--
-- Indices de la tabla `materias_maestros`
--
ALTER TABLE `materias_maestros`
  ADD PRIMARY KEY (`id_materia_maestro`),
  ADD KEY `maestro_asignado` (`maestro_asignado`),
  ADD KEY `materia_id` (`materia_id`);

--
-- Indices de la tabla `materias_universidad`
--
ALTER TABLE `materias_universidad`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `usuarios_universidad`
--
ALTER TABLE `usuarios_universidad`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materias_maestros`
--
ALTER TABLE `materias_maestros`
  MODIFY `id_materia_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios_universidad`
--
ALTER TABLE `usuarios_universidad`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias_alumnos`
--
ALTER TABLE `materias_alumnos`
  ADD CONSTRAINT `materias_alumnos_ibfk_1` FOREIGN KEY (`id_maestros_materia`) REFERENCES `materias_maestros` (`id_materia_maestro`),
  ADD CONSTRAINT `materias_alumnos_ibfk_2` FOREIGN KEY (`matricula_alumnos`) REFERENCES `usuarios_universidad` (`id_usuario`);

--
-- Filtros para la tabla `materias_maestros`
--
ALTER TABLE `materias_maestros`
  ADD CONSTRAINT `materias_maestros_ibfk_1` FOREIGN KEY (`maestro_asignado`) REFERENCES `usuarios_universidad` (`id_usuario`),
  ADD CONSTRAINT `materias_maestros_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias_universidad` (`id_materia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
