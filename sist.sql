-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2025 a las 15:52:42
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
-- Base de datos: `sist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id_cont` int(11) NOT NULL,
  `contenido` varchar(200) NOT NULL,
  `usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id_cont`, `contenido`, `usuario`) VALUES
(1, 'El RFC (Registro Federal de Contribuyentes) es una clave alfanumérica que el Servicio de Administración Tributaria (SAT) de México asigna a las personas físicas y morales que realizan actividades econ', 'usuario05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2025_02_19_005800_usuarios', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progreso`
--

CREATE TABLE `progreso` (
  `id_cont` int(11) NOT NULL,
  `contenido` varchar(200) NOT NULL,
  `s1` varchar(10) NOT NULL,
  `s2` varchar(10) NOT NULL,
  `s3` varchar(10) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progreso`
--

INSERT INTO `progreso` (`id_cont`, `contenido`, `s1`, `s2`, `s3`, `usuario`) VALUES
(1, '0', 'no', 'no', 'no', 'lolo'),
(2, '0', 'si', 'no', 'no', 'usuario06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `contraseña`, `email`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'lolo', 'pur', '$2y$12$8WbdVanTnddxppcEd2of4.VWM0iVzRANtBJfW1RaVLQrPxE8NFQne', 'lolo8909@gmail.com', 'user', '2025-02-23 08:03:27', '2025-03-07 02:17:51'),
(2, 'usuario05', 'Usuario de Prueba', '$2y$12$sIcXF/bWetZga.P4.1HCzu6loTvY3w/gLITCvtrfjN/U7D7AuY1Te', 'usuario05@example.com', 'admin', '2025-02-23 08:26:15', '2025-02-23 08:26:15'),
(3, 'usuario06', 'Otro Usuario de Prueba', '$2y$12$.prGLeI8bQaJtg/17y/jTur7qYhaRyaeeLG3zlqtS.MVbfGB36IjC', 'usuario06@example.com', 'user', '2025-02-23 08:26:16', '2025-02-23 08:26:16'),
(4, 'Polar04', 'Polar', '$2y$12$dOqTLmUwhNXCAZN6EnVMD.tMhuDfw9W4DRqr.z64CV/stOlg5DRry', 'polar9977@slp.tecnm.mx', 'user', '2025-03-06 06:44:29', '2025-03-06 06:44:29'),
(5, 'prueba ajax', 'prueba05', '$2y$12$5PkIRtIDO7JCXfWNW1a40evYXWQvuffZ5XA673uFutbrDQEL2Z8wm', 'prueba7766@gmail.com', 'user', '2025-03-06 06:55:43', '2025-03-06 06:55:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `progreso`
--
ALTER TABLE `progreso`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `progreso`
--
ALTER TABLE `progreso`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
