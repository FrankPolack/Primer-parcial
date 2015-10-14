-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2015 a las 22:45:12
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `basevotos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarVoto`(IN `paramId` INT)
    NO SQL
DELETE FROM votos WHERE id=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVoto`(IN `paramDni` VARCHAR(50), IN `paramProv` VARCHAR(50), IN `paramPresi` VARCHAR(50), IN `paramSexo` VARCHAR(50), IN `paramDire` VARCHAR(50), IN `paramLoca` VARCHAR(50))
    NO SQL
insert into votos values(null,paramDni,paramProv,paramPresi,paramSexo,paramDire,paramLoca)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarVoto`(IN `paramProv` VARCHAR(50), IN `paramPresi` VARCHAR(30), IN `paramSexo` VARCHAR(10), IN `paramId` INT, IN `paramDni` VARCHAR(50), IN `paramDire` VARCHAR(50), IN `paramLoca` VARCHAR(50))
    NO SQL
UPDATE votos SET provincia=paramProv, presidente=paramPresi, sexo=paramSexo, localidad=paramLoca, direccion=paramDire, dni=paramDni WHERE id=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerVotoPorId`(IN `paramId` INT)
    NO SQL
SELECT * FROM votos where id=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerVotos`()
    NO SQL
select *from votos$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
`id` int(11) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `presidente` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`id`, `dni`, `provincia`, `presidente`, `sexo`, `localidad`, `direccion`) VALUES
(22, '1000005', 'S', 'Scioli', 'M', 'S', 'S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `votos`
--
ALTER TABLE `votos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
