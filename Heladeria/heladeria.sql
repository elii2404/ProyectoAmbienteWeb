-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2023 a las 23:47:00
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
-- Base de datos: `heladeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoriaID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoriaID`, `nombre`) VALUES
(1, 'Vainilla'),
(2, 'Chocolate'),
(4, 'Menta'),
(5, 'Fresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre_usuario`, `fecha`, `comentario`) VALUES
(0, 'andres', '2023-12-14', 'buenos ricos helados'),
(0, 'andres', '2023-12-14', 'ricos'),
(0, 'andres', '2023-12-14', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `productoID` int(11) NOT NULL,
  `productoNombre` varchar(50) NOT NULL,
  `productoCantidad` varchar(123) NOT NULL,
  `productoDescripcion` varchar(50) NOT NULL,
  `productoPrecio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoriaID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`productoID`, `productoNombre`, `productoCantidad`, `productoDescripcion`, `productoPrecio`, `imagen`, `categoriaID`) VALUES
(1, 'Helado Yipy', '12', 'Nuevo Helado yipy', 43.00, '../assets5rpoj86jwltb1.jpg', 2),
(3, 'Cono', '33', 'Cono de Chocolate', 345.00, '../assetsdescargar.jpg', 2),
(4, 'Helado de Milan', '3543', 'Helado Milan Dos Pinos', 345.00, '../assets7441001627866.png', 4),
(246, 'choco chips', '2', 'Helado de tarro', 800.00, '../assetschoco chips.jpeg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioID` int(11) NOT NULL,
  `usuarioNombreCompleto` varchar(30) NOT NULL,
  `usuarioCorreo` varchar(30) NOT NULL,
  `usuarioContrasena` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarioID`, `usuarioNombreCompleto`, `usuarioCorreo`, `usuarioContrasena`, `fecha`, `rol`) VALUES
(1, 'Fbricio Muñoz', 'fmunoz@gmail.com', '123', '2023-12-10 19:46:38', 'usuario'),
(17, 'Elizabeth', 'eli@admin.com', '123', '2023-12-10 02:47:22', 'administrador'),
(18, 'Emily', 'emi@a.com', '3c9909afec25354d551dae21590bb2', '2023-12-10 19:51:40', 'usuario'),
(19, 'Maria', 'mari@f', '3c9909afec25354d551dae21590bb2', '2023-12-11 00:51:40', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoriaID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`productoID`),
  ADD KEY `categoriaID` (`categoriaID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `productoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoriaID`) REFERENCES `categoria` (`categoriaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
