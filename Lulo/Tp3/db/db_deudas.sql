-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 19:42:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_deudas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudas`
--
-- Error leyendo la estructura de la tabla db_deudas.deudas: #1932 - Table &#039;db_deudas.deudas&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla db_deudas.deudas: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `db_deudas`.`deudas`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL COMMENT 'id deudor',
  `deudor` varchar(100) NOT NULL COMMENT 'nombre del deudor',
  `cuota` int(11) NOT NULL COMMENT 'numero de cuota',
  `cuota_capital` int(11) NOT NULL COMMENT 'monto de la cuota',
  `fecha_pago` varchar(20) NOT NULL COMMENT 'fecha de pago de la cuota'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `deudor`, `cuota`, `cuota_capital`, `fecha_pago`) VALUES
(1, 'Luciano Oroquieta', 2, 49000, '12/09/2023'),
(2, 'Nicolas Illari', 5, 20000, '5/9/2023'),
(3, 'Martin Massimo', 2, 30000, '19/9/2023'),
(4, 'Haydee', 6, 15000, '5/9/2023'),
(5, 'Belen ', 5, 10000, '5/9/2023');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id deudor', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
