-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2022 a las 06:37:37
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `venta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idArticulo` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Precio` double NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idArticulo`, `Nombre`, `Precio`, `imagen`, `idCategoria`) VALUES
(30001, 'Hills SD Adult Optimal Care Original', 80.99, 'imagenes/cat_alimento/hills_sd_adult.png', 20001),
(30002, 'Claws & Paws Gimnasio 3 Pisos Beige', 130.99, 'imagenes/cat_acc/claws_paws_gimnasio.png', 20003),
(30003, 'Cat Zone Banio Seco 300ml', 35.99, 'imagenes/cat_cuidado/cat_zone_banio_seco.png', 20002),
(30004, 'Mpets Cleo Cat Pink Varita', 18.99, 'imagenes/cat_acc/mpets_cleo_cat.png', 20003),
(30005, 'Claws & Paws Transportador De Tela', 55.99, 'imagenes/cat_acc/transportador.png', 20003),
(30006, 'Dermasep 120ml Antimicrobiano x1 unidad', 75.99, 'imagenes/cat_cuidado/dermasep_antimicrobiano.png', 20002),
(30007, 'Cats Best Original', 136.99, 'imagenes/cat_cuidado/cats_best_original.png', 20002),
(30008, 'Potenza Cats Gel Oral', 86.95, 'imagenes/cat_cuidado/potenza_cats_gel.png', 20002),
(30009, 'Hills PD c/d Multicare ', 110.25, 'imagenes/cat_alimento/hills_pd_multicare.png', 20001),
(30010, 'Canbo Gatitos Desarrollo Inicial', 88.75, 'imagenes/cat_alimento/desarrollo_inicial.png', 20001),
(30011, 'Canbo Cuidado De Esterilizados', 127.45, 'imagenes/cat_alimento/canbo_estilirized.png', 20001),
(30012, 'Royal Canin FBN Persian ', 115.15, 'imagenes/cat_alimento/royal_canin_persian.png', 20001),
(30013, 'Royal Canin FHN Feline Sensible', 150.25, 'imagenes/cat_alimento/royal_canin_feline_sensible.png', 20001),
(30014, 'ProPlan Adulto Cat  ', 79.25, 'imagenes/cat_alimento/proplan_cat_adulto.png', 20001),
(30015, 'ProPlan Sensitive Cat  ', 115.25, 'imagenes/cat_alimento/proplan_sensitive_cat.png', 20001),
(30016, 'Matisse Adulto Salmon y Arroz', 145.85, 'imagenes/cat_alimento/matisse_adulto_salmon_arroz.png', 20001),
(30017, 'Matisse Gatitos', 115.45, 'imagenes/cat_alimento/matisse_gatitos.png', 20001),
(30018, 'Mpets MOON Basket - Orange & Gray', 38.75, 'imagenes/dog_acc/mpets_moon_basket.png', 20006),
(30019, 'Pet Life Shampoo Paico Antipulgas 0.5Kg/1Und', 25.99, 'imagenes/dog_cuidado/pet_life_shampoo.png', 20005),
(30020, 'KONG Comfort Kiddos Elephant X-Small', 36.99, 'imagenes/dog_acc/kong_comfort_elephant.png', 20006),
(30021, 'Canbo Cachorro Cordero razas med/gran', 60.99, 'imagenes/dog_alimento/canbo_cachorro_cordero.png', 20004),
(30022, 'Chuckit! Indoor Ball', 21.99, 'imagenes/dog_acc/chuckit_indoor.png', 20006),
(30023, 'Amazonia Aloe Vera Dog & Cat Conditioner Pet Care', 45.55, 'imagenes/dog_cuidado/amazonia_aloe_vera.jpg', 20005),
(30024, 'Ecaderm 130 ML', 55.99, 'imagenes/dog_cuidado/ecaderm.png', 20005),
(30025, 'Whitening Dental Care Set', 35.55, 'imagenes/dog_cuidado/whitening_dental_care_set.png', 20005),
(30026, 'Canbo Enlatado Energético', 85.55, 'imagenes/dog_alimento/canbo_enlatado_energetico.png', 20004),
(30027, 'Hills PD Canine Derm Defense', 90.65, 'imagenes/dog_alimento/hills_pd_canine_derm.png', 20004),
(30028, 'Hills PD Metabolic', 125.65, 'imagenes/dog_alimento/hills_pd_metabolic.png', 20004),
(30029, 'Royal Canin VD Dog Hepatic', 90.65, 'imagenes/dog_alimento/royal_canin_vd_hepatic.png', 20004),
(30030, 'Royal Canin VD Hypoallergenic Canine', 138.95, 'imagenes/dog_alimento/royal_canin_vd_hypoallergenic.png', 20004),
(30031, 'ProPlan Puppy Lamb ', 109.25, 'imagenes/dog_alimento/proplan_puppy_lamb.png', 20004),
(30032, 'ProPlan Adultos Razas Pequenias', 149.25, 'imagenes/dog_alimento/proplan_adultos_raza_pequenia.png', 20004);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Subcategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `Nombre`, `Subcategoria`) VALUES
(20001, 'Gatos', 'Alimento'),
(20002, 'Gatos', 'Arena y Cuidado'),
(20003, 'Gatos', 'Accesorios'),
(20004, 'Perros', 'Alimento'),
(20005, 'Perros', 'Cuidado e Higiene'),
(20006, 'Perros', 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `idDetalle_Orden` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Costo` float NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `idOrden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_orden`
--

INSERT INTO `detalle_orden` (`idDetalle_Orden`, `Cantidad`, `Costo`, `idArticulo`, `idOrden`) VALUES
(60001, 2, 80.99, 30001, 50069),
(60002, 3, 60.99, 30021, 50070),
(60003, 4, 21.99, 30022, 50071),
(60004, 3, 36.99, 30020, 50072),
(60005, 6, 25.99, 30019, 50073),
(60006, 1, 86.95, 30008, 50074),
(60007, 1, 80.99, 30001, 50075),
(60008, 4, 35.99, 30003, 50076),
(60009, 1, 80.99, 30001, 50077);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_envio`
--

CREATE TABLE `direccion_envio` (
  `idDireccion_envio` int(11) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Distrito` varchar(50) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `Telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `direccion_envio`
--

INSERT INTO `direccion_envio` (`idDireccion_envio`, `Direccion`, `Distrito`, `Departamento`, `codigo_postal`, `Telefono`) VALUES
(40001, 'AV. Universitaria 250', 'Lima', 'Lima', 15362, '985463217'),
(40002, 'AV. Condorcanqui 273', 'Lima', 'Lima', 14632, '963251485'),
(40003, 'AV. Brazil 630', 'Lima', 'Lima', 146325, '963214852'),
(40004, 'Av. Arequipa 456', 'Lima', 'Lima', 152369, '963214528'),
(40005, 'AV. Universitaria 489', 'Lima', 'Lima', 15597, '985421637'),
(40006, 'Av. Arequipa 789', 'Lima', 'Lima', 14568, '963214852');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `idOrden` int(11) NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Total` float NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idDireccion_envio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`idOrden`, `Fecha`, `Total`, `idUsuario`, `idDireccion_envio`) VALUES
(50069, '2022-03-09 23:10:55', 161.98, 34, 40001),
(50070, '2022-03-09 23:13:15', 182.97, 35, 40002),
(50071, '2022-03-09 23:15:38', 87.96, 36, 40003),
(50072, '2022-03-09 23:17:40', 110.97, 37, 40004),
(50073, '2022-03-09 23:20:34', 155.94, 38, 40005),
(50074, '2022-03-09 23:55:15', 86.95, 39, 40006),
(50075, '2022-03-10 00:25:58', 80.99, NULL, NULL),
(50076, '2022-03-10 00:30:01', 143.96, NULL, NULL),
(50077, '2022-03-10 00:32:11', 80.99, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasenia` varchar(40) DEFAULT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `FechaYHora_Creac` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FechaYHora_Modif` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `enLinea` int(1) DEFAULT NULL,
  `intentos` int(1) DEFAULT NULL,
  `num_ingr` int(11) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  `Registro` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Email`, `Contrasenia`, `Nombre`, `Apellido`, `FechaYHora_Creac`, `FechaYHora_Modif`, `enLinea`, `intentos`, `num_ingr`, `Estado`, `Registro`) VALUES
(29, 'marioRo@gmail.com', '123456', 'Mario', 'Rojas', '2022-03-09 18:22:05', '2022-03-10 05:31:52', 1, NULL, 14, 'Activo', 'Registrado'),
(30, 'Pedro@gmail.com', '789789', 'Pedro', 'Gomez', '2022-03-09 23:08:16', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Registrado'),
(31, 'Jose@gmail.com', '741741', 'Jose', 'Suarez', '2022-03-09 23:08:54', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Registrado'),
(32, 'Mariela@gmail.com', '963963', 'Mariela', 'Reyes', '2022-03-09 23:09:41', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Registrado'),
(33, 'maria@gmail.com', '852852', 'Maria', 'Carbajal', '2022-03-09 23:10:07', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Registrado'),
(34, 'Rodrigo@gmail.com', NULL, 'Rodrigo', 'Perez', '2022-03-09 23:11:32', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'No registrado'),
(35, 'Pablo@gmail.com', NULL, 'Pablo', 'Rodriguez', '2022-03-09 23:13:59', '2022-03-10 04:14:58', NULL, NULL, NULL, NULL, 'No registrado'),
(36, 'Camila@gmail.com', NULL, 'Camila', 'Rojas', '2022-03-09 23:16:44', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'No registrado'),
(37, 'Roberto@gmail.com', NULL, 'Roberto', 'Martinez', '2022-03-09 23:19:04', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'No registrado'),
(38, 'Luisa@gmail.com', NULL, 'Luisa', 'Sanchez', '2022-03-09 23:22:12', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'No registrado'),
(39, 'Jazmin@gmail.com', NULL, 'Jazmin', 'Torres', '2022-03-09 23:56:01', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'No registrado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD PRIMARY KEY (`idDetalle_Orden`),
  ADD KEY `idArticulo` (`idArticulo`),
  ADD KEY `idOrden` (`idOrden`);

--
-- Indices de la tabla `direccion_envio`
--
ALTER TABLE `direccion_envio`
  ADD PRIMARY KEY (`idDireccion_envio`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`idOrden`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idDireccion_envio` (`idDireccion_envio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30034;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20007;

--
-- AUTO_INCREMENT de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  MODIFY `idDetalle_Orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60010;

--
-- AUTO_INCREMENT de la tabla `direccion_envio`
--
ALTER TABLE `direccion_envio`
  MODIFY `idDireccion_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40007;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50078;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD CONSTRAINT `detalle_orden_ibfk_1` FOREIGN KEY (`idArticulo`) REFERENCES `articulo` (`idArticulo`),
  ADD CONSTRAINT `detalle_orden_ibfk_2` FOREIGN KEY (`idOrden`) REFERENCES `orden` (`idOrden`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `orden_ibfk_2` FOREIGN KEY (`idDireccion_envio`) REFERENCES `direccion_envio` (`idDireccion_envio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
