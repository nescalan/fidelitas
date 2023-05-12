-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: car_manufacturers
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.20.04.2

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
-- Table structure for table `car_brands`
--

DROP TABLE IF EXISTS `car_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_brands` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) NOT NULL,
  `origin_country` varchar(100) NOT NULL,
  `foundation_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_brands`
--

LOCK TABLES `car_brands` WRITE;
/*!40000 ALTER TABLE `car_brands` DISABLE KEYS */;
INSERT INTO `car_brands` VALUES (21,'Mercedes-Benz','Germany','1926-03-01'),(22,'BMW','Germany','1916-03-07'),(23,'Audi','Germany','1909-04-29'),(24,'Volkswagen','Germany','1937-05-28'),(25,'Porsche','Germany','1931-04-08'),(26,'Ferrari','Italy','1947-02-21'),(27,'Lamborghini','Italy','1963-03-30'),(28,'McLaren','UK','1963-03-30'),(29,'Aston Martin','UK','1913-09-15'),(30,'Bentley','UK','1919-01-18');
/*!40000 ALTER TABLE `car_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_dealers`
--

DROP TABLE IF EXISTS `car_dealers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_dealers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `dealer_name` varchar(120) NOT NULL,
  `dealer_address` varchar(120) NOT NULL,
  `dealer_city` varchar(120) NOT NULL,
  `dealer_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_dealers`
--

LOCK TABLES `car_dealers` WRITE;
/*!40000 ALTER TABLE `car_dealers` DISABLE KEYS */;
INSERT INTO `car_dealers` VALUES (1,'Bob\'s Used Cars','123 Main Street, Anytown, USA','Anytown','123-456-7890'),(2,'Joe\'s Auto Sales','456 Elm Street, Anytown, USA','Anytown','987-654-3210'),(3,'Tom\'s Toyota','789 Oak Street, Anytown, USA','Anytown','543-210-9876'),(4,'Mary\'s Mazda','101 Pine Street, Anytown, USA','Anytown','321-098-7654'),(5,'David\'s Dodge','202 Maple Street, Anytown, USA','Anytown','654-321-0987'),(6,'Susan\'s Subaru','303 Elm Street, Anytown, USA','Anytown','987-654-3210'),(7,'Michael\'s Mercedes','404 Oak Street, Anytown, USA','Anytown','543-210-9876'),(8,'Sarah\'s Saturn','505 Pine Street, Anytown, USA','Anytown','321-098-7654'),(9,'Kevin\'s Kia','606 Maple Street, Anytown, USA','Anytown','654-321-0987'),(10,'Alice\'s Audi','707 Elm Street, Anytown, USA','Anytown','987-654-3210');
/*!40000 ALTER TABLE `car_dealers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_models`
--

DROP TABLE IF EXISTS `car_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_models` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(50) NOT NULL,
  `release_year` year NOT NULL,
  `sale_price` decimal(6,2) NOT NULL,
  `car_brand_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_car_brand_id` (`car_brand_id`),
  CONSTRAINT `fk_car_brand_id` FOREIGN KEY (`car_brand_id`) REFERENCES `car_brands` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_models`
--

LOCK TABLES `car_models` WRITE;
/*!40000 ALTER TABLE `car_models` DISABLE KEYS */;
INSERT INTO `car_models` VALUES (21,'C-Class',2023,35.00,21),(22,'E-Class',2023,50.00,22),(23,'S-Class',2023,100.00,23),(24,'M3',2023,70.00,24),(25,'M5',2023,100.00,25),(26,'A4',2023,35.00,26),(27,'A6',2023,50.00,27),(28,'A8',2023,100.00,28),(29,'Golf',2023,25.00,29),(30,'Passat',2023,35.00,30);
/*!40000 ALTER TABLE `car_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_orders`
--

DROP TABLE IF EXISTS `customer_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_date` date DEFAULT NULL,
  `order_delivery_date` date DEFAULT NULL,
  `order_state` char(8) DEFAULT 'pending',
  `customer_id` int unsigned NOT NULL,
  `car_models_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customer_id` (`customer_id`),
  KEY `fk_car_models_id` (`car_models_id`),
  CONSTRAINT `fk_car_models_id` FOREIGN KEY (`car_models_id`) REFERENCES `car_models` (`id`),
  CONSTRAINT `fk_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_orders`
--

LOCK TABLES `customer_orders` WRITE;
/*!40000 ALTER TABLE `customer_orders` DISABLE KEYS */;
INSERT INTO `customer_orders` VALUES (1,'2023-05-11','2023-05-21','pending',1,21),(2,'2023-05-12','2023-05-22','pending',2,22),(3,'2023-05-13','2023-05-23','pending',3,23),(4,'2023-05-14','2023-05-24','pending',4,24),(5,'2023-05-15','2023-05-25','pending',5,25),(6,'2023-05-16','2023-05-26','pending',6,26),(7,'2023-05-17','2023-05-27','pending',7,27),(8,'2023-05-18','2023-05-28','pending',8,28),(9,'2023-05-19','2023-05-29','pending',9,29),(10,'2023-05-20','2023-05-30','pending',10,30);
/*!40000 ALTER TABLE `customer_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(120) NOT NULL,
  `customer_address` varchar(120) NOT NULL,
  `customer_city` varchar(120) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'John Smith','123 Main Street, Anytown, USA','Anytown','123-456-7890'),(2,'Jane Doe','456 Elm Street, Anytown, USA','Anytown','987-654-3210'),(3,'Peter Jones','789 Oak Street, Anytown, USA','Anytown','543-210-9876'),(4,'Mary Green','101 Pine Street, Anytown, USA','Anytown','321-098-7654'),(5,'David Brown','202 Maple Street, Anytown, USA','Anytown','654-321-0987'),(6,'Susan White','303 Elm Street, Anytown, USA','Anytown','987-654-3210'),(7,'Michael Black','404 Oak Street, Anytown, USA','Anytown','543-210-9876'),(8,'Sarah Gray','505 Pine Street, Anytown, USA','Anytown','321-098-7654'),(9,'Kevin Orange','606 Maple Street, Anytown, USA','Anytown','654-321-0987'),(10,'Alice Purple','707 Elm Street, Anytown, USA','Anytown','987-654-3210');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-11 22:32:01
