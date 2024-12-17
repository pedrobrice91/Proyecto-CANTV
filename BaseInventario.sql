-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2012 a las 17:59:01
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baseinventario`
--

CREATE TABLE IF NOT EXISTS `baseinventario` (
  `serial` text NOT NULL,
  `cod_Inventario` text NOT NULL,
  `tipo` text NOT NULL,
  `modelo` text NOT NULL,
  `marca` text NOT NULL,
  `departamento` text NOT NULL,
  `fechae` text NOT NULL,
  `fechas` text NOT NULL,
  `responsable` text NOT NULL,
  `indicador` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`indicador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `baseinventario`
--

INSERT INTO `baseinventario` (`serial`, `cod_Inventario`, `tipo`, `modelo`, `marca`, `departamento`, `fechae`, `fechas`, `responsable`, `indicador`) VALUES
('Lklway4', '0002', 'Impresora', '9632', 'Imb', 'Gerencia Genneral', '10/03/2000', '', '', 7),
('lktw9', '0004', 'raton', 't9032s', 'lenovo', 'Recursos Humanos', '28/11/2001', '', '', 12),
('gfhc', '1', 'cbgv', 'cbv', 'cbv', 'ccbvc', 'cbv', '', '', 14),
('ghj', 'ma001', 'dfg', 'dfg', 'dfg', 'sistemas', '102', '', '', 15),
('dfg', '001ma', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '', '', 16),
('sdf', '001m ', 'adsf', 'asdfa', 'sadf', 'asdf', 'asdf', '', '', 17);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
