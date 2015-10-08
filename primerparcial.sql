-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2015 a las 13:00:03
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `primerparcial`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Alta`(IN `dnii` VARCHAR(50), IN `prov` VARCHAR(50), IN `presi` VARCHAR(50), IN `sex` VARCHAR(50))
    NO SQL
INSERT into votos
values(null,dnii,prov,presi,sex)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Baja`(IN `id` INT(10))
    NO SQL
DELETE
from votos 				
WHERE votos.id=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Listado`()
    NO SQL
SELECT * from votos$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Modificacion`(IN `prov` VARCHAR(50), IN `presi` VARCHAR(50), IN `sex` VARCHAR(50), IN `paramId` INT(10), IN `paramDNI` VARCHAR(50))
    NO SQL
UPDATE votos 
set dni=paramDNI,
provincia=prov,
presidente=presi,
sexo=sex
WHERE id=paramId$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
  `dni` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `presidente` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`dni`, `provincia`, `presidente`, `sexo`, `id`) VALUES
('56465415', 'setdt', 'Scioli', 'Masculino', 82),
('61515522', 'qqq', 'Scioli', 'Masculino', 83);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
