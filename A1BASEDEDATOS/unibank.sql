-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: unibank
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrador` (
  `idAdmin` int NOT NULL AUTO_INCREMENT,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(200) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (3,'admin','3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `codigoCliente` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidoMaterno` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` enum('AGUASCALIENTES','BAJA CALIFORNIA','BAJA CALIFORNIA SUR','CAMPECHE','COAHUILA','COLIMA','CHIAPAS','CHIHUAHUA','DURANGO','ESTADO DE MÉXICO','GUANAJUATO','GUERRERO','HIDALGO','JALISCO','CIUDAD DE MÉXICO','MICHOACÁN','MORELOS','NAYARIT','NUEVO LEÓN','OAXACA','PUEBLA','QUERÉTARO','QUINTANA ROO','SAN LUIS POTOSÍ','SINALOA, SONORA','TABASCO','TAMAULIPAS','TLAXCALA','VERACRUZ','YUCATÁN','ZACATECAS') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigoPostal` int NOT NULL,
  `sexo` enum('Masculino','Femenino') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curp` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `saldo` float NOT NULL,
  `ocupacion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `codigoCliente` (`codigoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'220001','Adolfo Angel','Perez','Salado','COLIMA','Manzanillo','Deportiva','Deportiva',28864,'Masculino','PESA021101HCMRLDA7','2002-11-01',0,'Estudiante'),(2,'220002','Fabian','Zepeda','Torres','COLIMA','Manzanillo','Juan Escutia','5 de mayo',24865,'Masculino','SAIA541127HGRLGL04','2000-05-06',0,'Programador'),(3,'220003','Vianey','Cruz','López','COLIMA','Manzanillo','Badalona','Barrio 5',28219,'Femenino','VIA547127MGRLGL04','2002-05-15',0,'Secretaria'),(4,'220004','MARGARITA','BUENROSTRO','FAJES','YUCATÁN','TEPOZTLAN','Buenos Aires','Miguel de la Madrid',24564,'Femenino','FABM770222MMSJNR00','1995-05-30',0,'Obrera'),(5,'220005','Daniel','Martinez','Gutierrez','ESTADO DE MÉXICO','Ecatepec','Buenos Aires','Indios Verdes',28457,'Masculino','DAMG022105HCMNLDA9','2000-09-18',0,'Estudiante'),(8,'220006','Miguel','Alejandre','Arreol','COLIMA','Manzanillo','laguna','Deportiva',28886,'Masculino','AEAM0101011HJCLRGA','2001-01-11',0,'PROGRAMADOR');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `Generar_codigo` BEFORE INSERT ON `cliente` FOR EACH ROW BEGIN
	DECLARE siguiente_codigo int;
    SET siguiente_codigo = (SELECT ifnull (MAX(CONVERT(SUBSTRING(codigoCliente, 3), SIGNED INTEGER)), 0) FROM cliente) + 1;
    SET NEW.codigoCliente = concat('22', LPAD(siguiente_codigo, 4, '0'));
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `comprobante`
--

DROP TABLE IF EXISTS `comprobante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comprobante` (
  `idComprobante` int NOT NULL AUTO_INCREMENT,
  `origenDeb` varchar(500) DEFAULT NULL,
  `destinoDeb` varchar(500) DEFAULT NULL,
  `beneficiario` varchar(50) DEFAULT NULL,
  `concepto` varchar(150) DEFAULT NULL,
  `monto` decimal(20,6) DEFAULT NULL,
  `banco` varchar(50) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idComprobante`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comprobante`
--

LOCK TABLES `comprobante` WRITE;
/*!40000 ALTER TABLE `comprobante` DISABLE KEYS */;
INSERT INTO `comprobante` VALUES (3,'5579070086431923','4242535312127878','Jose perez','Cosas',500.000000,'UNIBANK','2022-11-22 18:14:48'),(4,'5579070086431923','4242535312127878','Jose perez','Cosas',500.000000,'UNIBANK','2022-11-22 18:15:21'),(5,'4242535312127878','5519123412341234','Miguel','Servicio Social',500.000000,'BBVA','2022-11-22 18:27:52'),(6,'5579070086430123','5579090045451816','500','Servicio Social',550.000000,'UNIBANK','2022-11-25 12:24:36'),(7,'8695754253429612','5579070012347894','Fabian Zepeda','Piezas de motores',7500.000000,'BBVA','2022-11-25 12:31:30');
/*!40000 ALTER TABLE `comprobante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credito`
--

DROP TABLE IF EXISTS `credito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credito` (
  `idTarjeta` int NOT NULL AUTO_INCREMENT,
  `codigoCliente` varchar(50) NOT NULL,
  `BIN` varchar(16) NOT NULL,
  `expira` date NOT NULL,
  `codeSecurity` int NOT NULL,
  `nip` varchar(4) NOT NULL DEFAULT '',
  `saldoCred` float DEFAULT NULL,
  PRIMARY KEY (`idTarjeta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credito`
--

LOCK TABLES `credito` WRITE;
/*!40000 ALTER TABLE `credito` DISABLE KEYS */;
INSERT INTO `credito` VALUES (1,'220001','8080787800001111','2025-10-04',456,'1234',15000),(2,'220002','5589000022220012','2022-11-17',456,'4563',9000),(3,'220003','5579078023121889','2025-11-17',563,'3542',18000),(4,'220006','5579040089561200','2025-11-22',987,'7531',20000);
/*!40000 ALTER TABLE `credito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuentas`
--

DROP TABLE IF EXISTS `cuentas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cuentas` (
  `noCta` int NOT NULL AUTO_INCREMENT,
  `codigoCliente` varchar(50) NOT NULL DEFAULT '',
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`noCta`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuentas`
--

LOCK TABLES `cuentas` WRITE;
/*!40000 ALTER TABLE `cuentas` DISABLE KEYS */;
INSERT INTO `cuentas` VALUES (4,'220001','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(5,'220002','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(6,'220004','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(7,'220003','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(8,'220006','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');
/*!40000 ALTER TABLE `cuentas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `debito`
--

DROP TABLE IF EXISTS `debito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `debito` (
  `idTarjeta` int NOT NULL AUTO_INCREMENT,
  `codigoCliente` varchar(50) NOT NULL DEFAULT '',
  `BIN` varchar(16) NOT NULL,
  `expira` date NOT NULL,
  `codeSecurity` int NOT NULL,
  `nip` varchar(4) NOT NULL,
  `saldoDeb` decimal(20,2) DEFAULT NULL,
  PRIMARY KEY (`idTarjeta`),
  UNIQUE KEY `BIN` (`BIN`),
  KEY `cliente-debito` (`codigoCliente`),
  CONSTRAINT `cliente-debito` FOREIGN KEY (`codigoCliente`) REFERENCES `cliente` (`codigoCliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `debito`
--

LOCK TABLES `debito` WRITE;
/*!40000 ALTER TABLE `debito` DISABLE KEYS */;
INSERT INTO `debito` VALUES (1,'220001','5579070086431923','2026-11-14',238,'1234',4500.00),(2,'220002','4242535312127878','2026-11-15',865,'5623',9000.00),(3,'220001','5579070086430123','2026-07-21',652,'1234',5950.00),(4,'220002','5579090045451816','2022-11-17',456,'1234',5783.00),(5,'220002','5579070012347894','2023-05-17',655,'1239',8000.56),(6,'220006','5519123412341234','2025-08-13',456,'445',5950.00),(7,'220003','8695754253429612','2026-11-19',852,'1596',56696.20),(8,'220004','1596123545781245','2022-11-11',963,'4236',7532.56);
/*!40000 ALTER TABLE `debito` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `ACTUALIZA_DEBITO_BU` BEFORE UPDATE ON `debito` FOR EACH ROW INSERT INTO debitolog
(idTarAnterior, codigoClienteAnterior, BINAnterior, expiraAnterior, codeAnterior, nipAnterior, saldoAnterior,
 idTarNuevo, codigoClienteNuevo, BINNuevo, expiraNuevo, codeNuevo, nipNuevo, saldoNuevo, fechaModif)
 VALUES
 (OLD.idTarjeta, OLD.codigoCliente, OLD.BIN, OLD.expira, OLD.codeSecurity, OLD.nip, OLD.saldoDeb,
 NEW.idTarjeta, NEW.codigoCliente, NEW.BIN, NEW.expira, NEW.codeSecurity, NEW.nip, NEW.saldoDeb,
 NOW()) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `debitolog`
--

DROP TABLE IF EXISTS `debitolog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `debitolog` (
  `idTarAnterior` int NOT NULL,
  `codigoClienteAnterior` varchar(50) NOT NULL,
  `BINAnterior` varchar(16) NOT NULL,
  `expiraAnterior` date NOT NULL,
  `codeAnterior` int NOT NULL,
  `nipAnterior` varchar(4) NOT NULL,
  `saldoAnterior` decimal(20,2) NOT NULL,
  `idTarNuevo` int NOT NULL,
  `codigoClienteNuevo` varchar(50) NOT NULL,
  `BINNuevo` varchar(16) NOT NULL,
  `expiraNuevo` date NOT NULL,
  `codeNuevo` int NOT NULL,
  `nipNuevo` varchar(4) NOT NULL,
  `saldoNuevo` decimal(20,2) NOT NULL,
  `fechaModif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `debitolog`
--

LOCK TABLES `debitolog` WRITE;
/*!40000 ALTER TABLE `debitolog` DISABLE KEYS */;
INSERT INTO `debitolog` VALUES (3,'220001','5579070086430123','2026-07-21',652,'1234',6500.00,3,'220001','5579070086430123','2026-07-21',652,'1234',5950.00,'2022-11-25'),(4,'220002','5579090045451816','2022-11-17',456,'1234',5233.00,4,'220002','5579090045451816','2022-11-17',456,'1234',5783.00,'2022-11-25'),(7,'220003','8695754253429612','2026-11-19',852,'1596',64196.20,7,'220003','8695754253429612','2026-11-19',852,'1596',56696.20,'2022-11-25'),(5,'220002','5579070012347894','2023-05-17',655,'1239',500.56,5,'220002','5579070012347894','2023-05-17',655,'1239',8000.56,'2022-11-25');
/*!40000 ALTER TABLE `debitolog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ejecutivos`
--

DROP TABLE IF EXISTS `ejecutivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ejecutivos` (
  `idEjecutivo` int NOT NULL AUTO_INCREMENT,
  `usuarioEjecutivo` varchar(200) NOT NULL,
  `sucursal` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`idEjecutivo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ejecutivos`
--

LOCK TABLES `ejecutivos` WRITE;
/*!40000 ALTER TABLE `ejecutivos` DISABLE KEYS */;
INSERT INTO `ejecutivos` VALUES (1,'miguel','fie','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(2,'angel','fie','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(3,'roberto','fie','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(4,'mauricio','fie','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(5,'alonso','fie','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),(6,'jaimeduende','fondeport','e83e8535d6f689493e5819bd60aa3e5fdcba940e6d111ab6fb5c34f24f86496bf3726e2bf4ec59d6d2f5a2aeb1e4f103283e7d64e4f49c03b4c4725cb361e773'),(7,'ximena','fondeport','3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');
/*!40000 ALTER TABLE `ejecutivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamos`
--

DROP TABLE IF EXISTS `prestamos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prestamos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `NoCli` int NOT NULL,
  `dinero` int NOT NULL,
  `meses` int NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamos`
--

LOCK TABLES `prestamos` WRITE;
/*!40000 ALTER TABLE `prestamos` DISABLE KEYS */;
INSERT INTO `prestamos` VALUES (5,220001,4000,6,'Aceptado'),(6,220006,1500,4,'Aceptado'),(7,220006,300,6,'Aceptado'),(8,220001,100,2,'Pendiente');
/*!40000 ALTER TABLE `prestamos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-25 22:13:22
