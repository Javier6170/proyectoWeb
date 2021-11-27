-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2021 a las 17:58:53
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

-- BASE DE DATOS DE STORE DARK

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto-web`
--
DROP DATABASE IF EXISTS `proyecto-web`;
CREATE DATABASE IF NOT EXISTS `proyecto-web` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyecto-web`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Teclado'),
(2, 'Monitor'),
(3, 'Mando'),
(4, 'Raton'),
(5, 'Audio'),
(6, 'Silla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_productos`
--

DROP TABLE IF EXISTS `imagenes_productos`;
CREATE TABLE `imagenes_productos` (
  `id` int(11) NOT NULL,
  `url_imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes_productos`
--

INSERT INTO `imagenes_productos` (`id`, `url_imagen`) VALUES
(4, 'https://redragon.es/content/uploads/2021/09/MITRA.png'),
(5, 'https://redragon.es/content/uploads/2021/04/COBRA.png'),
(6, 'https://redragon.es/content/uploads/2021/06/EMERALD-1.png'),
(7, 'https://redragon.es/content/uploads/2021/04/HARROW.png'),
(8, 'https://redragon.es/content/uploads/2021/05/PRO-BRAHMA.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `script` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`, `script`) VALUES
(1, 'ver inicio', 'proyectoWeb/index.php'),
(2, 'crear_categoria', 'proyectoWeb/crear_categoria.php'),
(3, 'crear_imagen', 'proyectoWeb/crear_imagen.php'),
(4, 'crear_producto', 'proyectoWeb/crear_producto.php'),
(5, 'crear_rol', 'proyectoWeb/crear_rol.php'),
(6, 'crear_usuario', 'proyectoWeb/crear_usuario.php'),
(7, 'actualizar_categoria', 'proyectoWeb/actualizar_categoria.php'),
(8, 'actualizar_producto', 'proyectoWeb/actualizar_producto.php'),
(9, 'actualizar_rol', 'proyectoWeb/actualizar_rol.php'),
(10, 'actualizar_usuario', 'proyectoWeb/actualizar_usuario.php'),
(11, 'categoria', 'proyectoWeb/categoria.php'),
(12, 'usuarios', 'proyectoWeb/usuarios.php'),
(13, 'rol', 'proyectoWeb/rol.php'),
(14, 'productos', 'proyectoWeb/productos.php'),
(15, 'imagenes_productos', 'proyectoWeb/imagenes_productos.php'),
(16, 'eliminar_categoria', 'proyectoWeb/eliminar_categoria.php'),
(17, 'eliminar_productos', 'proyectoWeb/eliminar_productos.php'),
(18, 'eliminar_rol', 'proyectoWeb/eliminar_rol.php'),
(19, 'eliminar_url_imagen', 'proyectoWeb/eliminar_url_imagen.php'),
(20, 'eliminar_usuarios', 'proyectoWeb/eliminar_usuarios.php'),
(21, 'inicio_sesion', 'proyectoWeb/inicio_sesion.php'),
(22, 'actualizar_usuario_user', 'proyectoWeb/actualizar_usuario_user.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `url_imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `stock`, `descripcion`, `id_category`, `url_imagen`) VALUES
(1, 'Teclado Gamer', 150000, 50, 'Meloso', 1, 'https://redragon.es/content/uploads/2021/09/MITRA.png'),
(2, 'Teclado gamer 2', 180000, 80, 'Esta melos compreselo', 1, 'https://redragon.es/content/uploads/2021/09/MITRA.png'),
(3, 'Raton gamer', 100000, 80, 'Raton gamer meloso y pa la casa', 4, 'https://redragon.es/content/uploads/2021/04/COBRA.png'),
(4, 'Monitor Gamer', 2000000, 100, 'Monitor Gamer', 2, 'https://redragon.es/content/uploads/2021/06/EMERALD-1.png'),
(5, 'Monitor Gamer 2', 3500000, 80, 'Meloso ', 2, 'https://redragon.es/content/uploads/2021/06/EMERALD-1.png'),
(7, 'Teclado Gamer 3', 300000, 80, 'Teclado luminico', 1, 'https://redragon.es/content/uploads/2021/05/PRO-BRAHMA.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre_rol` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre_rol`) VALUES
(1, 'user'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permisos`
--

DROP TABLE IF EXISTS `rol_permisos`;
CREATE TABLE `rol_permisos` (
  `id` int(11) NOT NULL,
  `permisos_id` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol_permisos`
--

INSERT INTO `rol_permisos` (`id`, `permisos_id`, `rol_id`, `fecha_creacion`) VALUES
(1, 1, 1, '2021-11-26 18:57:24'),
(2, 21, 1, '2021-11-27 03:07:35'),
(3, 1, 2, '2021-11-27 03:13:13'),
(4, 2, 2, '2021-11-27 03:13:13'),
(5, 3, 2, '2021-11-27 03:13:13'),
(6, 4, 2, '2021-11-27 03:13:13'),
(7, 5, 2, '2021-11-27 03:13:13'),
(8, 7, 2, '2021-11-27 03:15:28'),
(9, 8, 2, '2021-11-27 03:15:28'),
(10, 9, 2, '2021-11-27 03:15:28'),
(11, 10, 2, '2021-11-27 03:15:28'),
(12, 11, 2, '2021-11-27 03:15:28'),
(13, 12, 2, '2021-11-27 03:15:28'),
(14, 13, 2, '2021-11-27 03:15:28'),
(16, 14, 2, '2021-11-27 03:15:28'),
(17, 15, 2, '2021-11-27 03:15:28'),
(18, 16, 2, '2021-11-27 03:15:28'),
(19, 17, 2, '2021-11-27 03:15:28'),
(20, 18, 2, '2021-11-27 03:15:28'),
(21, 19, 2, '2021-11-27 03:15:28'),
(22, 20, 2, '2021-11-27 03:15:28'),
(23, 21, 2, '2021-11-27 03:15:28'),
(24, 6, 2, '2021-11-27 04:45:57'),
(25, 22, 1, '2021-11-27 16:38:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `contrasena`, `rol_id`) VALUES
(5, 'Javier ', 'Rodriguez Marulanda', 'javier@eam.edu.co', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 1),
(6, 'Admin', 'Admin', 'Admin@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`permisos_id`),
  ADD KEY `rol_id_2` (`rol_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categoria` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`permisos_id`) REFERENCES `permisos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
