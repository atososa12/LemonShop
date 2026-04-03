-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tienda_celulares
-- ------------------------------------------------------
-- Server version	8.4.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `combos`
--

DROP TABLE IF EXISTS `combos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `combos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(255) DEFAULT NULL,
  `categoria_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  CONSTRAINT `combos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `combos`
--

LOCK TABLES `combos` WRITE;
/*!40000 ALTER TABLE `combos` DISABLE KEYS */;
INSERT INTO `combos` VALUES (1,'Kit iPhone','Vidrio templado, funda y cargador completo. Envío gratis a todo el país.',NULL,1),(2,'Kit Samsung','Vidrio templado, funda y cargador completo. Envío gratis a todo el país.',NULL,1),(3,'Kit Redmi','Vidrio templado, funda y cargador completo. Envío gratis a todo el país.',NULL,1),(4,'Kit Motorola','Vidrio templado, funda y cargador completo. Envío gratis a todo el país.',NULL,1),(5,'Vention Elf E07','Auriculares inalámbricos con ENC, Bluetooth 5.3, hasta 22h de batería y estuche de regalo.',NULL,2),(6,'AilyPods QT20 QCY','Auriculares Bluetooth con ENC, baja latencia, diseño compacto y estuche.',NULL,2),(7,'JBL Tune 520BT','Auriculares Bluetooth con hasta 57h de batería, diseño cómodo y plegable.',NULL,2),(8,'JBL Tune 500','Auriculares con cable, JBL Pure Bass, micrófono y diseño liviano.',NULL,2),(9,'JBL Go Essential 2','Parlante Bluetooth compacto, resistente al agua IP67, hasta 5h de batería.',NULL,3),(10,'JBL Go 4','Parlante portátil con graves mejorados, 7h de batería y resistencia IP67.',NULL,3),(11,'JBL Grip','Parlante Bluetooth portátil con hasta 14h de reproducción.',NULL,3),(12,'EKO-Vi EKV-PA-02','Parlante Bluetooth 16W con múltiples funciones y conectividad.',NULL,3),(13,'EKO-Vi EKV-PA-03','Parlante Bluetooth 20W con luces, micrófono y múltiples entradas.',NULL,3),(14,'EKO-Vi EKV-PA-04','Parlante Bluetooth 40W potente con TWS y múltiples funciones.',NULL,3),(15,'Combo Gamer X-Lizzard','Teclado y mouse RGB con conexión USB.',NULL,4),(16,'Combo Genius KM-8200','Teclado y mouse inalámbrico compatible con Windows.',NULL,4),(17,'Silla Gamer X-Lizzard','Silla ergonómica regulable con soporte hasta 150kg.',NULL,4),(18,'Bolso Laptop Bluecase','Bolso resistente al agua para laptop hasta 15.6\".',NULL,4),(19,'Mochila Vention 20L','Mochila impermeable para laptop, cómoda y espaciosa.',NULL,4);
/*!40000 ALTER TABLE `combos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-03-28 22:22:51
