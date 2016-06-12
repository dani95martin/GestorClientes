-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2016 a las 15:28:54
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor_clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_fiscal` varchar(45) DEFAULT NULL,
  `nif` varchar(15) DEFAULT NULL,
  `numero_cuenta_banco` varchar(20) DEFAULT NULL,
  `persona_contacto` varchar(45) DEFAULT NULL,
  `telefono` varchar(19) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `horario` varchar(300) DEFAULT NULL,
  `web` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_fiscal`, `nif`, `numero_cuenta_banco`, `persona_contacto`, `telefono`, `email`, `email2`, `direccion`, `horario`, `web`, `facebook`, `twitter`, `instagram`, `observaciones`, `imagen`) VALUES
(65, 'InterJet Airlines', 'S12345678', 'ES180049235207241420', 'Eduardo Barreiros', '532164582', 'interduardo@pruebaproyectorex.com', 'interduerdo2@pruebaproyectorex.com', 'Blvd. Teófilio Borunda 8681 Local 115 Planta Baja,Chihuahua,32618 Cd Juárez, Chih.,México', 'Lun-Dom: 24H', 'https://www.interjet.com.mx/', 'https://www.facebook.com/interjet.mx/', 'https://twitter.com/interjet', 'https://www.instagram.com/interjet/', '', 'imagenes/logotipos/1463563982-interjet.png'),
(67, 'Spring Hoteles', 'M12345678', 'ES180049235207241420', 'Antonio Nebrija', '+34 922 787 753 ', 'spring@springhoteles.com', '', 'Avda. Antonio Domínguez Alfonso, 8  38660 Playa de las Américas (Arona) Tenerife - Islas Canarias - España / Spain', 'Lun-Dom: 24H', 'http://www.springhoteles.com/es/spring-hoteles-tenerife', 'https://www.facebook.com/springtenerife', 'https://twitter.com/springtenerife', 'https://www.instagram.com/springhotels/', '', 'imagenes/logotipos/1464005819-logotipo_spring_hoteles.jpg'),
(68, 'A2J Arquitectos', 'Q12345678', 'ES180049235207241420', 'Jose Miguel Iglesias Egido', '650 092 925', 'adosjarquitectos@gmail.com', '', 'C/Molinos SN, Malpartida de Plasencia, Cáceres', 'Lun-Sab: 09:00-14:00 | 16:00-20:00', 'http://www.a2jarquitectos.com/', 'https://www.facebook.com/A2j-Arquitectos-Ana-Barrueco-Jose-Miguel-Iglesias-746508565446567/', '', '', '', 'imagenes/logotipos/1463564796-a2jcuadrado_n.jpg'),
(69, 'Camper', 'T12345678', 'ES580049235207241420', 'Sergio Torrentes', '312 54 89 56', 'sergicamp@pruebasproyectorex.com', '', '', 'Lun-Vier: 09:00 - 13:00 | 15:30 - 20:00', 'http://www.camper.com/', 'https://www.facebook.com/Camper', 'https://twitter.com/camper', 'https://www.instagram.com/camper/', '', 'imagenes/logotipos/1463565079-camper-logo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `password`, `nombre_completo`, `rol`) VALUES
(1, 'admin', 'admin', 'administrador', 'administrador'),
(2, 'dani4media', 'administrador', 'Daniel Martín Martín', 'administrador'),
(3, 'angel4media', 'admin4media', 'Ángel Cabezas Ortiz', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
