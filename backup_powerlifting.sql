/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: powerlifting_shop
-- ------------------------------------------------------
-- Server version	10.11.11-MariaDB-0ubuntu0.24.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `historial`
--

DROP TABLE IF EXISTS `historial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `detalle` text DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_historial`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial`
--

LOCK TABLES `historial` WRITE;
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
INSERT INTO `historial` VALUES
(1,2,'Cinturón Powerlifting (x1) - $799\n','2025-05-07 22:50:37'),
(2,2,'SBD Bundle (x1) - $2599\nDeadlift Bundle (x1) - $2899\nBench Press Bundle (x1) - $2199\n','2025-05-14 04:13:43'),
(3,4,'Programa Fuerza 5x5 (x1) - $199\n','2025-05-14 05:04:40');
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `imagen_url` varchar(255) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES
(4,'Rutina Powerbuilding 4 días','Combina hipertrofia con fuerza. Ideal para intermedios.',299.00,40,'rutina1.jpg','Rutinas'),
(5,'Programa Fuerza 5x5','Enfocado en fuerza pura. Sesiones cortas y efectivas.',199.00,39,'rutina2.jpg','Rutinas'),
(6,'Hipertrofia Torso-Pierna','Estructurado en bloques de hipertrofia avanzados.',249.00,60,'rutina3.jpg','Rutinas'),
(7,'Rutina Novatos FullBody','Plan para novatos con progresión semanal.',149.00,70,'rutina4.jpg','Rutinas'),
(8,'Push Pull Legs Avanzado','Entrenamiento dividido para volumen y fuerza.',279.00,45,'rutina5.jpg','Rutinas'),
(9,'Creatina Monohidratada','Creatina de alta pureza para rendimiento y fuerza.',399.00,100,'creatina.jpg','Suplementos'),
(10,'Proteína Whey 2kg','Proteína de suero sabor vainilla.',799.00,50,'proteina.jpg','Suplementos'),
(11,'Multivitamínico Deportivo','Soporte nutricional completo diario.',299.00,30,'multi.jpg','Suplementos'),
(12,'Pre-entreno XPower','Energía y enfoque para tus entrenamientos.',349.00,60,'preentreno.jpg','Suplementos'),
(13,'BCAA Recovery','Aminoácidos esenciales para recuperación muscular.',289.00,80,'bcaa.jpg','Suplementos'),
(14,'Cinturón de cuero','Soporte lumbar para sentadillas y peso muerto.',699.00,20,'cinturon.jpg','Accesorios'),
(15,'Muñequeras reforzadas','Estabilidad extra para press de banca.',299.00,35,'muniequeras.jpg','Accesorios'),
(16,'Rodilleras IPF','Rodilleras de neopreno nivel competencia.',599.00,25,'rodilleras.jpg','Accesorios'),
(17,'Straps antideslizantes','Para mejorar el agarre en peso muerto.',199.00,50,'straps.jpg','Accesorios'),
(18,'Calcetas Deadlift','Evitan raspaduras en peso muerto. Antiderrapantes.',149.00,60,'calcetas.jpg','Accesorios'),
(19,'Coderas neopreno','Apoyo extra para entrenamiento de empuje.',329.00,30,'coderas.jpg','Accesorios'),
(20,'Playera sin mangas','Ideal para entrenar cómodo y libre.',199.00,100,'playera.jpg','Accesorios'),
(21,'Singlet oficial','Aprobado por federación. Ideal para competir.',799.00,20,'singlet.jpg','Accesorios'),
(22,'Bandas elásticas','Para movilidad y activación muscular.',129.00,80,'bandas.jpg','Accesorios'),
(23,'Ganchos de levantamiento','Alternativa a straps. Fácil y seguro.',249.00,30,'ganchos.jpg','Accesorios'),
(24,'Barra olímpica 20kg','Barra estándar para levantamientos comp.',2999.00,10,'barra.jpg','Equipamiento'),
(25,'Discos de caucho 10kg','Discos recubiertos para entreno en casa.',999.00,20,'discos.jpg','Equipamiento'),
(26,'Banca ajustable','Inclinado, plano y declinado. Alta resistencia.',4499.00,5,'banca.jpg','Equipamiento'),
(27,'Jaula de potencia','Para entrenar con seguridad en casa o gym.',6499.00,3,'jaula.jpg','Equipamiento'),
(28,'Par de mancuernas ajustables','Rango 2kg-24kg. Ahorro de espacio.',2499.00,15,'mancuernas.jpg','Equipamiento'),
(35,'SBD Bundle','Cinturón + Rodilleras + Muñequeras',2599.00,15,'bundle.jpg','Bundles'),
(36,'Deadlift Specialist Bundle','Calcetas + Straps + Cinturón + Singlet',2899.00,10,'bundle.jpg','Bundles'),
(37,'Bench Press Bundle','Muñequeras + Coderas + Playera',2199.00,12,'bundle.jpg','Bundles'),
(38,'Chaleco de Peso Ajustable','Perfecto para entrenamiento funcional y sobrecarga progresiva corporal.',1499.00,8,'chaleco.jpg','Equipamiento'),
(39,'Programa Cutting 6 semanas','Rutina avanzada para pérdida de grasa manteniendo fuerza.',199.00,25,'cutting.jpg','Rutinas'),
(40,'Proteína Vegana 1kg','Suplemento sin lactosa con alto valor biológico.',399.00,20,'vegana.jpg','Suplementos');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` enum('admin','cliente') DEFAULT 'cliente',
  `fecha_creacion` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES
(1,'Diego','Leyvas','dnKJND@GMAIL.COM','$2y$10$zmwsNAMe8eYkNG4RdtPPXer0XRk2iMiBZZFN41Ox0Y0EBjlNVGn6m','cliente','2025-04-30 04:12:19'),
(2,'Diego','Leyvas','dleyvey@gmail.com','$2y$10$riNf2HlBNiVMxjCQiLkzXu9O.6fx2U1NvJHSAZpEv4NE0G2MiyHGK','admin','2025-04-30 04:12:51'),
(4,'Juan','Frank','dmaryo@live.com','$2y$10$V1LY5eA7VCyrOnL2kLLiWeesU3yDSHm5r0i8ZRBWoQYnO.7omYNIO','cliente','2025-05-14 04:33:04');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-13 23:48:58
