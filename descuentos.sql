-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-11-2022 a las 05:01:05
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evidencia3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

DROP TABLE IF EXISTS `descuentos`;
CREATE TABLE IF NOT EXISTS `descuentos` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Porcentaje_Descuento` int NOT NULL,
  `Producto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`Id`, `Porcentaje_Descuento`, `Producto`) VALUES
(1, 10, 'Lápiz Adhesivo Pritt 42 gramos'),
(3, 5, 'Sacapuntas Maped Igloo 2 piezas'),
(4, 25, 'Lápices de Colores Pastel 24 pz'),
(5, 30, 'Libreta 80 hojas'),
(6, 2, 'Lápiz Paper M. Mirado No.2 Triangular 4 pzas'),
(2, 6, 'Bolígrafos Azor Pin Point Punto Fino Multicolor 10 pzas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
