-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 01:43:56
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unibank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `adminUser`, `adminPass`) VALUES
(3, 'admin', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(10) NOT NULL,
  `codigoCliente` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidoMaterno` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` enum('AGUASCALIENTES','BAJA CALIFORNIA','BAJA CALIFORNIA SUR','CAMPECHE','COAHUILA','COLIMA','CHIAPAS','CHIHUAHUA','DURANGO','ESTADO DE MÉXICO','GUANAJUATO','GUERRERO','HIDALGO','JALISCO','CIUDAD DE MÉXICO','MICHOACÁN','MORELOS','NAYARIT','NUEVO LEÓN','OAXACA','PUEBLA','QUERÉTARO','QUINTANA ROO','SAN LUIS POTOSÍ','SINALOA, SONORA','TABASCO','TAMAULIPAS','TLAXCALA','VERACRUZ','YUCATÁN','ZACATECAS') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigoPostal` int(5) NOT NULL,
  `sexo` enum('Masculino','Femenino') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curp` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `saldo` float NOT NULL,
  `ocupacion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `codigoCliente`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `estado`, `municipio`, `calle`, `colonia`, `codigoPostal`, `sexo`, `curp`, `fechaNacimiento`, `saldo`, `ocupacion`) VALUES
(1, '220001', 'Adolfo Angel', 'Perez', 'Salado', 'COLIMA', 'Manzanillo', 'Deportiva', 'Deportiva', 28864, 'Masculino', 'PESA021101HCMRLDA7', '2002-11-01', 0, 'Estudiante'),
(2, '220002', 'Fabian', 'Zepeda', 'Torres', 'COLIMA', 'Manzanillo', 'Juan Escutia', '5 de mayo', 24865, 'Masculino', 'SAIA541127HGRLGL04', '2000-05-06', 0, 'Programador'),
(3, '220003', 'Vianey', 'Cruz', 'López', 'COLIMA', 'Manzanillo', 'Badalona', 'Barrio 5', 28219, 'Femenino', 'VIA547127MGRLGL04', '2002-05-15', 0, 'Secretaria'),
(4, '220004', 'MARGARITA', 'BUENROSTRO', 'FAJES', 'YUCATÁN', 'TEPOZTLAN', 'Buenos Aires', 'Miguel de la Madrid', 24564, 'Femenino', 'FABM770222MMSJNR00', '1995-05-30', 0, 'Obrera'),
(5, '220005', 'Daniel', 'Martinez', 'Gutierrez', 'ESTADO DE MÉXICO', 'Ecatepec', 'Buenos Aires', 'Indios Verdes', 28457, 'Masculino', 'DAMG022105HCMNLDA9', '2000-09-18', 0, 'Estudiante'),
(8, '220006', 'Miguel', 'Alejandre', 'Arreol', 'COLIMA', 'Manzanillo', 'laguna', 'Deportiva', 28886, 'Masculino', 'AEAM0101011HJCLRGA', '2001-01-11', 0, 'PROGRAMADOR');

--
-- Disparadores `cliente`
--
DELIMITER $$
CREATE TRIGGER `Generar_codigo` BEFORE INSERT ON `cliente` FOR EACH ROW BEGIN
	DECLARE siguiente_codigo int;
    SET siguiente_codigo = (SELECT ifnull (MAX(CONVERT(SUBSTRING(codigoCliente, 3), SIGNED INTEGER)), 0) FROM cliente) + 1;
    SET NEW.codigoCliente = concat('22', LPAD(siguiente_codigo, 4, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobante`
--

CREATE TABLE `comprobante` (
  `idComprobante` int(11) NOT NULL,
  `origenDeb` varchar(500) DEFAULT NULL,
  `destinoDeb` varchar(500) DEFAULT NULL,
  `beneficiario` varchar(50) DEFAULT NULL,
  `concepto` varchar(150) DEFAULT NULL,
  `monto` decimal(20,6) DEFAULT NULL,
  `banco` varchar(50) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comprobante`
--

INSERT INTO `comprobante` (`idComprobante`, `origenDeb`, `destinoDeb`, `beneficiario`, `concepto`, `monto`, `banco`, `fecha`) VALUES
(3, '5579070086431923', '4242535312127878', 'Jose perez', 'Cosas', '500.000000', 'UNIBANK', '2022-11-22 18:14:48'),
(4, '5579070086431923', '4242535312127878', 'Jose perez', 'Cosas', '500.000000', 'UNIBANK', '2022-11-22 18:15:21'),
(5, '4242535312127878', '5519123412341234', 'Miguel', 'Servicio Social', '500.000000', 'BBVA', '2022-11-22 18:27:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `idTarjeta` int(11) NOT NULL,
  `codigoCliente` varchar(50) NOT NULL,
  `BIN` varchar(16) NOT NULL,
  `expira` date NOT NULL,
  `codeSecurity` int(3) NOT NULL,
  `nip` varchar(4) NOT NULL DEFAULT '',
  `saldoCred` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `credito`
--

INSERT INTO `credito` (`idTarjeta`, `codigoCliente`, `BIN`, `expira`, `codeSecurity`, `nip`, `saldoCred`) VALUES
(1, '220001', '8080787800001111', '2025-10-04', 456, '1234', 15000),
(2, '220002', '5589000022220012', '2022-11-17', 456, '4563', 9000),
(3, '220003', '5579078023121889', '2025-11-17', 563, '3542', 18000),
(4, '220006', '5579040089561200', '2025-11-22', 987, '7531', 20000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `noCta` int(11) NOT NULL,
  `codigoCliente` varchar(50) NOT NULL DEFAULT '',
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`noCta`, `codigoCliente`, `pass`) VALUES
(4, '220001', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(5, '220002', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(6, '220004', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(7, '220003', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(8, '220006', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debito`
--

CREATE TABLE `debito` (
  `idTarjeta` int(11) NOT NULL,
  `codigoCliente` varchar(50) NOT NULL DEFAULT '',
  `BIN` varchar(16) NOT NULL,
  `expira` date NOT NULL,
  `codeSecurity` int(3) NOT NULL,
  `nip` varchar(4) NOT NULL,
  `saldoDeb` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `debito`
--

INSERT INTO `debito` (`idTarjeta`, `codigoCliente`, `BIN`, `expira`, `codeSecurity`, `nip`, `saldoDeb`) VALUES
(1, '220001', '5579070086431923', '2026-11-14', 238, '1234', '4500.00'),
(2, '220002', '4242535312127878', '2026-11-15', 865, '5623', '9000.00'),
(3, '220001', '5579070086430123', '2026-07-21', 652, '1234', '6500.00'),
(4, '220002', '5579090045451816', '2022-11-17', 456, '1234', '5233.00'),
(5, '220002', '5579070012347894', '2023-05-17', 655, '1239', '500.56'),
(6, '220006', '5519123412341234', '2025-08-13', 456, '445', '5950.00');

--
-- Disparadores `debito`
--
DELIMITER $$
CREATE TRIGGER `ACTUALIZA_DEBITO_BU` BEFORE UPDATE ON `debito` FOR EACH ROW INSERT INTO debitolog
(idTarAnterior, codigoClienteAnterior, BINAnterior, expiraAnterior, codeAnterior, nipAnterior, saldoAnterior,
 idTarNuevo, codigoClienteNuevo, BINNuevo, expiraNuevo, codeNuevo, nipNuevo, saldoNuevo, fechaModif)
 VALUES
 (OLD.idTarjeta, OLD.codigoCliente, OLD.BIN, OLD.expira, OLD.codeSecurity, OLD.nip, OLD.saldoDeb,
 NEW.idTarjeta, NEW.codigoCliente, NEW.BIN, NEW.expira, NEW.codeSecurity, NEW.nip, NEW.saldoDeb,
 NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debitolog`
--

CREATE TABLE `debitolog` (
  `idTarAnterior` int(11) NOT NULL,
  `codigoClienteAnterior` varchar(50) NOT NULL,
  `BINAnterior` varchar(16) NOT NULL,
  `expiraAnterior` date NOT NULL,
  `codeAnterior` int(3) NOT NULL,
  `nipAnterior` varchar(4) NOT NULL,
  `saldoAnterior` decimal(20,6) NOT NULL,
  `idTarNuevo` int(11) NOT NULL,
  `codigoClienteNuevo` varchar(50) NOT NULL,
  `BINNuevo` varchar(16) NOT NULL,
  `expiraNuevo` date NOT NULL,
  `codeNuevo` int(3) NOT NULL,
  `nipNuevo` varchar(4) NOT NULL,
  `saldoNuevo` decimal(20,6) NOT NULL,
  `fechaModif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejecutivos`
--

CREATE TABLE `ejecutivos` (
  `idEjecutivo` int(11) NOT NULL,
  `usuarioEjecutivo` varchar(200) NOT NULL,
  `sucursal` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ejecutivos`
--

INSERT INTO `ejecutivos` (`idEjecutivo`, `usuarioEjecutivo`, `sucursal`, `pass`) VALUES
(1, 'miguel', 'fie', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(2, 'angel', 'fie', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(3, 'roberto', 'fie', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(4, 'mauricio', 'fie', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(5, 'alonso', 'fie', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(6, 'jaimeduende', 'fondeport', 'e83e8535d6f689493e5819bd60aa3e5fdcba940e6d111ab6fb5c34f24f86496bf3726e2bf4ec59d6d2f5a2aeb1e4f103283e7d64e4f49c03b4c4725cb361e773'),
(7, 'ximena', 'fondeport', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `codigoCliente` (`codigoCliente`);

--
-- Indices de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD PRIMARY KEY (`idComprobante`);

--
-- Indices de la tabla `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`idTarjeta`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`noCta`);

--
-- Indices de la tabla `debito`
--
ALTER TABLE `debito`
  ADD PRIMARY KEY (`idTarjeta`),
  ADD UNIQUE KEY `BIN` (`BIN`),
  ADD KEY `cliente-debito` (`codigoCliente`);

--
-- Indices de la tabla `ejecutivos`
--
ALTER TABLE `ejecutivos`
  ADD PRIMARY KEY (`idEjecutivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  MODIFY `idComprobante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `noCta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `debito`
--
ALTER TABLE `debito`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ejecutivos`
--
ALTER TABLE `ejecutivos`
  MODIFY `idEjecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `debito`
--
ALTER TABLE `debito`
  ADD CONSTRAINT `cliente-debito` FOREIGN KEY (`codigoCliente`) REFERENCES `cliente` (`codigoCliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
