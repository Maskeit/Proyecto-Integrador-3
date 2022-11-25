-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 05:14:38
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
  `codigoCliente` int(10) DEFAULT NULL,
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
(1, 220001, 'Adolfo Angel', 'Perez', 'Salado', 'COLIMA', 'Manzanillo', 'Deportiva', 'Deportiva', 28864, 'Masculino', 'PESA021101HCMRLDA7', '2002-11-01', 2500, 'Estudiante'),
(2, 220002, 'Fabian', 'Zepeda', 'Torres', 'COLIMA', 'Manzanillo', 'Juan Escutia', '5 de mayo', 24865, 'Masculino', 'SAIA541127HGRLGL04', '2000-05-06', 2500, 'Programador'),
(3, 220003, 'Vianey', 'Cruz', 'López', 'COLIMA', 'Manzanillo', 'Badalona', 'Barrio 5', 28219, 'Femenino', 'VIA547127MGRLGL04', '2002-05-15', 10000, 'Secretaria'),
(4, 220004, 'MARGARITA', 'BUENROSTRO', 'FAJES', 'YUCATÁN', 'TEPOZTLAN', 'Buenos Aires', 'Miguel de la Madrid', 24564, 'Femenino', 'FABM770222MMSJNR00', '1995-05-30', 0, 'Obrera'),
(5, 220005, 'Daniel', 'Martinez', 'Gutierrez', 'ESTADO DE MÉXICO', 'Ecatepec', 'Buenos Aires', 'Indios Verdes', 28457, 'Masculino', 'DAMG022105HCMNLDA9', '2000-09-18', 0, 'Estudiante');

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
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `idTarjeta` int(11) NOT NULL,
  `BIN` varchar(16) NOT NULL,
  `noCta` int(10) NOT NULL,
  `saldo` float NOT NULL,
  `codeSecurity` int(3) NOT NULL,
  `expira` varchar(5) NOT NULL,
  `nip` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `noCta` int(11) NOT NULL,
  `codigoCliente` int(10) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`noCta`, `codigoCliente`, `pass`) VALUES
(1, 220001, '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(2, 220002, '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debito`
--

CREATE TABLE `debito` (
  `idTarjeta` int(11) NOT NULL,
  `BIN` varchar(16) NOT NULL,
  `noCta` int(10) NOT NULL,
  `saldo` float NOT NULL,
  `codeSecurity` int(3) NOT NULL,
  `expira` varchar(5) NOT NULL,
  `nip` int(4) DEFAULT NULL
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
(5, 'alonso', 'fie', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL,
  `NoCli` int(50) NOT NULL,
  `dinero` int(20) NOT NULL,
  `meses` int(3) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id`, `NoCli`, `dinero`, `meses`, `status`) VALUES
(5, 220001, 4000, 6, 'Denegado'),
(6, 220006, 1500, 4, 'Aceptado'),
(7, 220006, 300, 6, 'Aceptado');


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
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`idTarjeta`),
  ADD UNIQUE KEY `BIN` (`BIN`);

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
  ADD UNIQUE KEY `BIN` (`BIN`);
--
-- Indices de la tabla `ejecutivos`
--
ALTER TABLE `ejecutivos`
  ADD PRIMARY KEY (`idEjecutivo`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `noCta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `debito`
--
ALTER TABLE `debito`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ejecutivos`
--
ALTER TABLE `ejecutivos`
  MODIFY `idEjecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
