-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2018 a las 17:24:01
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE `asientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fila` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `columna` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asientos`
--

INSERT INTO `asientos` (`id`, `fila`, `columna`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL),
(2, '1', '2', NULL, NULL),
(3, '1', '3', NULL, NULL),
(4, '1', '4', NULL, NULL),
(5, '1', '5', NULL, NULL),
(6, '1', '6', NULL, NULL),
(7, '1', '7', NULL, NULL),
(8, '1', '8', NULL, NULL),
(9, '1', '9', NULL, NULL),
(10, '1', '10', NULL, NULL),
(11, '2', '1', NULL, NULL),
(12, '2', '2', NULL, NULL),
(13, '2', '3', NULL, NULL),
(14, '2', '4', NULL, NULL),
(15, '2', '5', NULL, NULL),
(16, '2', '6', NULL, NULL),
(17, '2', '7', NULL, NULL),
(18, '2', '8', NULL, NULL),
(19, '2', '9', NULL, NULL),
(20, '2', '10', NULL, NULL),
(21, '3', '1', NULL, NULL),
(22, '3', '2', NULL, NULL),
(23, '3', '3', NULL, NULL),
(24, '3', '4', NULL, NULL),
(25, '3', '5', NULL, NULL),
(26, '3', '6', NULL, NULL),
(27, '3', '7', NULL, NULL),
(28, '3', '8', NULL, NULL),
(29, '3', '9', NULL, NULL),
(30, '3', '10', NULL, NULL),
(31, '4', '1', NULL, NULL),
(32, '4', '2', NULL, NULL),
(33, '4', '3', NULL, NULL),
(34, '4', '4', NULL, NULL),
(35, '4', '5', NULL, NULL),
(36, '4', '6', NULL, NULL),
(37, '4', '7', NULL, NULL),
(38, '4', '8', NULL, NULL),
(39, '4', '9', NULL, NULL),
(40, '4', '10', NULL, NULL),
(41, '5', '1', NULL, NULL),
(42, '5', '2', NULL, NULL),
(43, '5', '3', NULL, NULL),
(44, '5', '4', NULL, NULL),
(45, '5', '5', NULL, NULL),
(46, '5', '6', NULL, NULL),
(47, '5', '7', NULL, NULL),
(48, '5', '8', NULL, NULL),
(49, '5', '9', NULL, NULL),
(50, '5', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE `funciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resumen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `funciones`
--

INSERT INTO `funciones` (`id`, `nombre`, `resumen`, `descripcion`, `precio`, `foto`, `extens`, `fecha`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Los diablos elegantes', 'Una obra de teatro sobre los diablos bien vestidos', 'Lorem Ipsum es un texto de marcador de posición comúnmente utilizado en las industrias gráficas, gráficas y editoriales para previsualizar diseños y maquetas visuales.', '870', 'foto_funcion_1524751676.jpg', 'jpg', '2018-04-03', 2, '2018-04-26 19:07:56', '2018-04-26 19:24:05'),
(2, 'Las mascaras Doradas', 'Una historia mágica sobre las mascaras doradas', 'Lorem Ipsum es un texto de marcador de posición comúnmente utilizado en las industrias gráficas, gráficas y editoriales para previsualizar diseños y maquetas visuales.', '1300', 'foto_funcion_1524752404.jpg', 'png', '2018-04-11', 2, '2018-04-26 19:12:22', '2018-04-26 19:23:58'),
(3, 'Los locos del teatro', 'Lorem Ipsum es un texto de marcador de posición comúnmente', 'Lorem Ipsum es un texto de marcador de posición comúnmente utilizado en las industrias gráficas, gráficas y editoriales para previsualizar diseños y maquetas visuales.', '450', 'foto_funcion_1524752321.png', 'png', '2018-04-26', 2, '2018-04-26 19:18:41', '2018-04-26 19:23:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_21_030525_create_asientos_table', 1),
(4, '2018_04_21_030544_create_funciones_table', 1),
(5, '2018_04_21_030600_create_reservas_table', 1),
(6, '2018_04_21_035516_create_roles_table', 1),
(7, '2018_04_21_035603_create_role_user_table', 1),
(8, '2018_04_25_042112_create_reserva_asiento_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valorUnitario` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorTotal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `funcion_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `numero`, `valorUnitario`, `valorTotal`, `cantidad`, `funcion_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '86rhxHZuX8', '1300', '2600', 2, 2, 1, '2018-04-26 19:26:38', '2018-04-26 19:26:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_asiento`
--

CREATE TABLE `reserva_asiento` (
  `id` int(10) UNSIGNED NOT NULL,
  `reserva_id` int(10) UNSIGNED NOT NULL,
  `asiento_id` int(10) UNSIGNED NOT NULL,
  `funcion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reserva_asiento`
--

INSERT INTO `reserva_asiento` (`id`, `reserva_id`, `asiento_id`, `funcion_id`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 2, '2018-04-26 19:26:38', '2018-04-26 19:26:38'),
(2, 1, 30, 2, '2018-04-26 19:26:38', '2018-04-26 19:26:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-04-26 19:03:15', '2018-04-26 19:03:15'),
(2, 'user', 'User', '2018-04-26 19:03:16', '2018-04-26 19:03:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2018-04-26 19:03:16', '2018-04-26 19:03:16'),
(2, 1, 2, '2018-04-26 19:03:16', '2018-04-26 19:03:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellido`, `dni`, `telefono`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'UserOperative', '123456', '123456', 'user@example.com', '$2y$10$luTl88yVTo6eito1kIw.pel9.QY5PKDMc37JVNQ.WHe.eZPo1bT7S', 'MwFGY59fjrjUcrXXkC8E7hn8avOVWLt502EI1Gw9HGgDJx6v7jAu25CqO3Ua', '2018-04-26 19:03:16', '2018-04-26 19:03:16'),
(2, 'Admin', 'UserAdmin', '1234567', '1234567', 'admin@example.com', '$2y$10$OdTSunrzsIfSVUXVoLfAQ.GVWLch0utEs/F5ybfyK6OTlCWCAkXXi', 'H4Als4K8BACTO9yPSxD8XfBGOXoWTn4ww2BJQCDdk5Iv6wh49E7wKykWiQne', '2018-04-26 19:03:16', '2018-04-26 19:03:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funciones_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reservas_numero_unique` (`numero`),
  ADD KEY `reservas_funcion_id_foreign` (`funcion_id`),
  ADD KEY `reservas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `reserva_asiento`
--
ALTER TABLE `reserva_asiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserva_asiento_funcion_id_foreign` (`funcion_id`),
  ADD KEY `reserva_asiento_reserva_id_foreign` (`reserva_id`),
  ADD KEY `reserva_asiento_asiento_id_foreign` (`asiento_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asientos`
--
ALTER TABLE `asientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `funciones`
--
ALTER TABLE `funciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reserva_asiento`
--
ALTER TABLE `reserva_asiento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD CONSTRAINT `funciones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_funcion_id_foreign` FOREIGN KEY (`funcion_id`) REFERENCES `funciones` (`id`),
  ADD CONSTRAINT `reservas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `reserva_asiento`
--
ALTER TABLE `reserva_asiento`
  ADD CONSTRAINT `reserva_asiento_asiento_id_foreign` FOREIGN KEY (`asiento_id`) REFERENCES `asientos` (`id`),
  ADD CONSTRAINT `reserva_asiento_funcion_id_foreign` FOREIGN KEY (`funcion_id`) REFERENCES `funciones` (`id`),
  ADD CONSTRAINT `reserva_asiento_reserva_id_foreign` FOREIGN KEY (`reserva_id`) REFERENCES `reservas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
