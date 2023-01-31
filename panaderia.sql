-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2023 a las 20:44:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panaderia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panaderia`
--

CREATE TABLE `panaderia` (
  `ID` int(11) DEFAULT NULL,
  `Nombre_del_producto` varchar(50) NOT NULL,
  `Cantidad_Disponible` int(100) NOT NULL,
  `Precio_del_producto` int(50) NOT NULL,
  `Numero_de_expedio` varchar(50) NOT NULL,
  `Ganancias_totales` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `panaderia`
--

INSERT INTO `panaderia` (`ID`, `Nombre_del_producto`, `Cantidad_Disponible`, `Precio_del_producto`, `Numero_de_expedio`, `Ganancias_totales`) VALUES
(1, 'Concha de vainilla', 25, 8, '19890072', '$ 250'),
(2, 'Pan de Elote', 10, 10, '', '$400'),
(3, 'Dona de Chocolate', 20, 8, '5183', '$150'),
(4, 'Pan de Nata', 30, 12, '19899', '$325'),
(6, 'Chocolatin', 25, 10, '', '$250');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
