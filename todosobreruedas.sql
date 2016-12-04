-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2016 a las 19:10:45
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `todosobreruedas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `_id_categoria` int(3) NOT NULL,
  `tipo_produc` text,
  `class_vehi` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='categoria de videojuegos';

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`_id_categoria`, `tipo_produc`, `class_vehi`) VALUES
(35, 'ACCESORIO', 'BUS'),
(32, 'RIN', 'MOTO'),
(30, 'RIN', 'BUS'),
(36, 'ACCESORIO', 'CAMIONETA'),
(33, 'LLANTA', 'CAMION'),
(34, 'LLANTA', 'AUTOMOVIL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `_id_cliente` int(5) NOT NULL,
  `tipo_doc` varchar(20) NOT NULL,
  `num_doc` int(20) NOT NULL,
  `nom_cli` text NOT NULL,
  `apelli_cli` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel_cli` varchar(20) NOT NULL,
  `direc_cli` varchar(52) NOT NULL,
  `ciud_cli` varchar(32) NOT NULL,
  `_id_ubicacion` int(11) NOT NULL,
  `gene_cli` varchar(34) NOT NULL,
  `fec_nac_cli` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`_id_cliente`, `tipo_doc`, `num_doc`, `nom_cli`, `apelli_cli`, `email`, `tel_cli`, `direc_cli`, `ciud_cli`, `_id_ubicacion`, `gene_cli`, `fec_nac_cli`) VALUES
(1, 'CC', 123456789, 'MARCELA', 'BUITRAGO', 'MARCE1234@GMAIL.COM', '8598998', 'CALLE 45 NUM 34 - 53 SUR', 'LACHES', 3, 'femenino', '2016-10-03'),
(2, 'CE', 58254, 'MAGALY', 'CASTELLANOS', 'MAGI9876@GMAIL.COM', '3554546', 'CALLE 146 NUM 34 - 65 NORTE', 'TULUA', 4, 'femenino', '2016-10-29'),
(3, 'TI', 543254, 'MARIA', 'QUITIAN', 'MARI1993@GMAIL.COM', '322555245', 'CALLE 90 NUM 23 - 43 NORTE', 'CHILE', 3, 'femenino', '2016-09-13'),
(5, 'PAS', 52455, 'KARLINA', 'GOMEZ', 'KAR1234gom@GMAIL.COM', '3244325', 'CALLE 56 NUM 10 - 32', 'LURDES', 4, 'femenino', '2016-10-13'),
(4, 'CC', 102365565, 'TATIANA', 'RAMIREZ', 'TATIS323RAM@GMAIL.COM', '320555555', 'CALLE 34 NUM 34 -54 SUR', 'YERSID', 2, 'femenino', '2016-08-15'),
(6, 'PAS', 625452, 'MARTHA', 'JIMENEZ', 'MAR545jim@GMAIL.COM', '320255212', 'CALLE 74 NUM 34 -14 SUR', 'REGALO', 4, 'femenino', '2016-09-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `_id_comen` int(11) NOT NULL,
  `nom_comen` varchar(42) NOT NULL,
  `email_comen` varchar(44) NOT NULL,
  `tel_comen` varchar(20) NOT NULL,
  `detal_comen` varchar(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`_id_comen`, `nom_comen`, `email_comen`, `tel_comen`, `detal_comen`) VALUES
(1, 'aNDREA', 'ANDRE45@gmail.cOM', '3156525855', ' mejoras en la letras'),
(2, 'diana beltran', 'diani323@hotmail.com', '351584564', ' mejoras graficas'),
(3, 'catalina meneses', 'catica656@gmail.com', '30202565555', ' manejo de imagenes'),
(4, 'rtteerty', 'fcgh', '654645', ' vchnfgjfgjh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_detalle`
--

CREATE TABLE `factura_detalle` (
  `cantidad` int(2) NOT NULL,
  `valor` double NOT NULL,
  `_id_juego` varchar(5) NOT NULL,
  `_id_factura` int(5) NOT NULL,
  `_id_detalle` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_encabezado`
--

CREATE TABLE `factura_encabezado` (
  `_id_factura` int(6) NOT NULL,
  `_id_cliente` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `valor_total` double NOT NULL,
  `estado_activo` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `_id_produc` int(5) NOT NULL,
  `ref_produc` int(20) NOT NULL,
  `nom_produc` varchar(50) NOT NULL,
  `desc_produc` text NOT NULL,
  `val_unita` double NOT NULL,
  `cant_produc` varchar(30) NOT NULL,
  `color` text NOT NULL,
  `tama_produc` varchar(35) NOT NULL,
  `mate_produc` varchar(32) NOT NULL,
  `fech_entra` date NOT NULL,
  `_id_ubicacion` int(11) NOT NULL,
  `_id_categoria` varchar(3) NOT NULL,
  `img_rutas` varchar(255) NOT NULL,
  `visitas` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`_id_produc`, `ref_produc`, `nom_produc`, `desc_produc`, `val_unita`, `cant_produc`, `color`, `tama_produc`, `mate_produc`, `fech_entra`, `_id_ubicacion`, `_id_categoria`, `img_rutas`, `visitas`) VALUES
(1, 323, 'CAMI FORTERA', ' LLANTA CAMI FORTERA', 80000, '8', 'NEGRO', '16 PULGADAS', 'CAUCHO', '2016-11-13', 3, '33', '/tsrsoloweb2016v2/img/LLANTA/323.jpg', 0),
(40, 656, 'RIN', 'RIN 13', 95000, '10', 'ROJO', '15 PULGADAS', 'ALUMINIO', '2016-11-13', 2, '30', 'C:/xampp/htdocs/TSRSOLOWEB2016V2/img/RIN/656.jpg', 0),
(38, 333, 'SILLAS CAMIONETA', 'SILLAS DEPORTIVAS', 180000, '4', 'NEGRO', 'MEDIANNO', 'TELA', '2016-11-13', 2, '6', 'C:/xampp/htdocs/TSRSOLOWEB2016V2/img/LLANTA/333.jpg', 0),
(27, 323, 'ACCESORIO', 'RADIO MP3', 125000, '6', 'AZUL', 'MEDIANO', 'PLASTICO', '2016-11-13', 4, '3', 'C:/xampp/htdocs/TSRSOLOWEB2016V2/img/ACCESORIO/ACCESORI8.jpg', 0),
(42, 656, 'llanta', 'ssd', 344, '324', '324', '323', 'ds', '2016-11-13', 3, '34', 'C:/xampp/htdocs/TSRSOLOWEB2016V2/img/LLANTA/656.jpg', 0),
(43, 8958, 'erty', 'gdsg', 0, 'sgdfgsd', 'sgdsfg', 'dfg', 'dgdfg', '2016-11-13', 1, '34', 'C:/xampp/htdocs/TSRSOLOWEB2016V2/img/LLANTA/8958.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `_id_provee` int(11) NOT NULL,
  `tipo_doc_pro` varchar(20) NOT NULL,
  `num_provee` int(20) NOT NULL,
  `nom_provee` varchar(42) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel_provee` varchar(46) NOT NULL,
  `direc_provee` varchar(45) NOT NULL,
  `ciudad_provee` varchar(50) NOT NULL,
  `_id_ubicacion` int(11) NOT NULL,
  `fec_creada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`_id_provee`, `tipo_doc_pro`, `num_provee`, `nom_provee`, `email`, `tel_provee`, `direc_provee`, `ciudad_provee`, `_id_ubicacion`, `fec_creada`) VALUES
(1, 'CC', 955266, 'RIN FORMULA', 'RINFORMU1254@GMAIL.COM', '7555854', 'CALLE 160 NUM 34 - 23', 'TUNJA', 3, '0000-00-00'),
(2, 'NI', 956544, 'JAN ACCESORIOS', 'JAN1234@gmail.com', '8555445', 'CALLE 172 NUM 34 - 42', 'BOGOTA', 3, '0000-00-00'),
(3, 'PAS', 29898, 'MOTOR PARTES', 'MOTOPARTE987654@GMAIL.COM', '3546541', 'CALLE 9 NUM 32 - 53', 'BOGOTA', 3, '0000-00-00'),
(6, 'NIT', 856254, 'ACCESORIO LOCAL', 'ACCLOCAL654@HOTMAIL.COM', '3205555478', 'CALLE 90 NUM 54 - 22 NORTE', 'BERLIN', 1, '0000-00-00'),
(7, 'CE', 523454, 'TRANSRINES', 'TRANSRINES1234@GMAIL.COM', '8655445', 'CALLE 5 NUM 34 - 65 CENTRO', 'MARGARITA', 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `_id_transaccion` int(5) NOT NULL,
  `numero_transaccion` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `banco` varchar(20) NOT NULL,
  `cuenta_destino` varchar(20) NOT NULL,
  `_id_factura` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `_id_ubicacion` int(11) NOT NULL,
  `departamento` varchar(42) NOT NULL,
  `ciudad` varchar(43) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`_id_ubicacion`, `departamento`, `ciudad`) VALUES
(1, 'AMAZONAS', 'LETICIA'),
(2, 'ANTIOQUIA', 'MEDELLIN'),
(3, 'ARAUCA', 'ARAUCA'),
(4, 'ATLANTICO', 'BARRANQUILLA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `_id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(256) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`_id_user`, `email`, `contrasena`, `rol`) VALUES
(16, 'jjaa', '$2y$10$ONLSfLNKY3dWZYCDcOQ/Iel8HeVKDNhIhA0esVrF4kAD7lEGJ5Zwe', 'root'),
(15, 'jja', '$2y$10$oyqAZGQCbWjy3mAFUa16heBodb7.w6oNLnO.FAsYEXJu23S0GUAdS', 'admin'),
(3, 'copìto@hotmail.com', '$2y$10$3/HIctKRWPv6exzoP91RpOmOSv01qBb.00FTjNiVnKiAdGozDLgri', 'cliente'),
(1, 'cartel@gmail.com', '$2y$10$OjzdX3RA7hoNUkk16xlMhOTXHXbOtRQKX4o8oaq5tFzvk5JpvIlju', 'root'),
(2, 'hp@gmail.com', '$2y$10$z1XA1IIaKIqKt4EmPuxRGexsPI4qWJ10QnF65r85g3BTBcZIi1vuK', 'admin'),
(9, 'ACCLOCAL654@HOTMAIL.COM', '$2y$10$vmywlNpnKAOT5ti77D0dduWlI/18xuyuiUgukuiaHSfju6OlbJBHW', 'provee'),
(7, 'ACCEMUND9876@HOTMAIL.COM', '$2y$10$hffc.KXsiDOOTMD7vm11XOX2Gw5LYpODhKtynaNSogCmHYjMj.KYG', 'provee'),
(8, 'RINCROMER1234@GMAIL.COM', '$2y$10$aAvGVI9f8mMi4uaxTVZDguc7Vu26AcLHHBfz4Oaf8O7ExVSgbZ5SO', 'provee'),
(10, 'MARI1993@GMAIL.COM', '$2y$10$X8os4.zJbKWiOSJ2bs5L4e0i2PixFdXBje.xgHyjXQH9Xy7bObnPC', 'cliente'),
(4, 'MARCE1234@GMAIL.COM', '$2y$10$vXSEA.IfXqIQboCDyPAHzOimjikt.55/y27xxWu3AhO2VPDBU7Wt6', 'cliente'),
(5, 'MAGI9876@GMAIL.COM', '$2y$10$c0k/0byKFr/o4ASGl6mZJedpl.4hGUmw37g7GXozTn/BM14IQ.UOe', 'cliente'),
(6, 'GOMAFURIA123@GMAIL.COM', '$2y$10$B1KQBu0FtGyHrURvwqkf3OyGAvtyeHoNA5PMhEMYfiaBt1zusOxQ6', 'cliente'),
(11, 'TRANSRINES1234@GMAIL.COM', '$2y$10$x5TL5pjN4o7nU5xNx.Ev5uiiWuR2sgpwgyvnHmq.PIg5UZ7j95fMC', 'provee'),
(12, 'TATIS323RAM@GMAIL.COM', '$2y$10$amQfmkzUcWmJYQy17wZJFOLIik45ztCpc5iYrA7/Ze4DLKX40nWX.', 'cliente'),
(13, 'KAR1234gom@GMAIL.COM', '$2y$10$mgTvvc.emjb2slLy6D19MeVb2HrumjN2s8pOLlij03u2SNkBsLXY.', 'cliente'),
(14, 'MAR545jim@GMAIL.COM', '$2y$10$ayK1v/87WwdJ.Il.hX7mHenNqOwkcQoi2.TCVIJswzioZKJktk9rK', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`_id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`_id_cliente`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `num_doc` (`num_doc`),
  ADD KEY `_id_ubicacion` (`_id_ubicacion`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`_id_comen`);

--
-- Indices de la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  ADD PRIMARY KEY (`_id_detalle`),
  ADD KEY `_id_juego` (`_id_juego`),
  ADD KEY `_id_factura` (`_id_factura`);

--
-- Indices de la tabla `factura_encabezado`
--
ALTER TABLE `factura_encabezado`
  ADD PRIMARY KEY (`_id_factura`),
  ADD KEY `_id_cliente` (`_id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`_id_produc`),
  ADD KEY `_id_juego_id_categoria` (`_id_categoria`),
  ADD KEY `ref_produc` (`ref_produc`),
  ADD KEY `_id_ubicacion` (`_id_ubicacion`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`_id_provee`),
  ADD UNIQUE KEY `num_provee` (`num_provee`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `tipo_doc_pro` (`tipo_doc_pro`),
  ADD KEY `_id_ubicacion` (`_id_ubicacion`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`_id_transaccion`),
  ADD KEY `_id_factura` (`_id_factura`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`_id_ubicacion`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`_id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `_id_categoria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `_id_cliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `_id_comen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  MODIFY `_id_detalle` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `_id_produc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `_id_provee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `_id_transaccion` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `_id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
