-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: laravel_r6
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `carTitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published` tinyint(1) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cars_category_id_foreign` (`category_id`),
  CONSTRAINT `cars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Nissan2','Sunt nam ut animi deleniti vero optio. Dolore enim non deleniti ut accusantium. Provident perferendis distinctio sunt sit odio culpa. Aut ut unde nostrum rerum.',54373.9,'WhatsApp Image 2024-08-04 at 19.17.44_48805d89.jpg',3,2,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(2,'Tree Pot','Exercitationem enim illo accusamus molestiae et neque et. Quasi tempora et enim cumque quia natus. Natus in possimus architecto fugit qui.',58.9,'WhatsApp Image 2024-08-04 at 19.17.44_48805d89.jpg',8,1,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(3,'Nissan2','Id eligendi pariatur impedit tempore praesentium soluta. Natus aut sunt id facere aliquid suscipit. Est sunt eum ad optio ut vel aliquam sint. Facilis sed eum sit impedit eaque.',35.3,'1723566998.jpg',4,2,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(4,'Ford','Dolor magni maiores ex. Odio illo quia accusantium voluptatem officiis. Eaque sit accusantium maxime minus sint sint.',0.3,'1724401270.jpg',7,1,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(5,'Tuyuta','Saepe totam velit dolores cupiditate. Deserunt rerum velit perferendis consequatur saepe est molestias maxime. Occaecati molestiae modi quae eius recusandae sed beatae.',44792.4,'WhatsApp Image 2024-08-04 at 19.17.43_ba4e55e5.jpg',1,1,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(6,'Mercedes1','Cumque et enim non fugit quia. Vitae odio necessitatibus quod est. Ratione molestias debitis non magnam ut necessitatibus commodi.',12244.1,'1723642814.jpg',7,2,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(7,'Hundai','Aliquam consequatur quo animi consequuntur. Ipsum aut ut optio quibusdam dolorum. Sit voluptatem eaque hic officia maxime quas amet. Ut perferendis impedit voluptas minima.',164926,'1723566998.jpg',6,2,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(8,'Hundai','Nemo error sed est odio unde. Ex velit et suscipit.',2793.4,'.',8,2,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(9,'Tree Pot','Debitis recusandae laboriosam eos officiis aliquam sint. Illo tenetur sed ipsum dolorem illo. Rem tenetur minima quia asperiores cumque. Sit possimus non totam provident ut.',6682.6,'WhatsApp Image 2024-08-04 at 19.17.44_48805d89.jpg',6,1,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51'),(10,'BMW1','Culpa quo magnam mollitia in alias non molestiae. Distinctio consectetur hic eaque dicta sequi.',44575456.2,'..',4,2,NULL,'2024-08-28 07:35:51','2024-08-28 07:35:51');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Bartoletti Group','2024-08-28 07:35:49','2024-08-28 07:35:49'),(2,'Carter, Walsh and Gleichner','2024-08-28 07:35:50','2024-08-28 07:35:50'),(3,'McGlynn-Schimmel','2024-08-28 07:35:50','2024-08-28 07:35:50'),(4,'Dickens, Predovic and Strosin','2024-08-28 07:35:50','2024-08-28 07:35:50'),(5,'Heller, Kunze and Batz','2024-08-28 07:35:50','2024-08-28 07:35:50'),(6,'Nikolaus-Reichel','2024-08-28 07:35:50','2024-08-28 07:35:50'),(7,'Corwin-Greenfelder','2024-08-28 07:35:50','2024-08-28 07:35:50'),(8,'Kessler-Beer','2024-08-28 07:35:50','2024-08-28 07:35:50'),(9,'Ward, Jast and Boyle','2024-08-28 07:35:50','2024-08-28 07:35:50'),(10,'Rodriguez, Powlowski and Rodriguez','2024-08-28 07:35:50','2024-08-28 07:35:50');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` double NOT NULL,
  `isFulled` tinyint(1) NOT NULL,
  `timeFrom` time NOT NULL,
  `timeTo` time NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_02_13_173933_create_categories_table',1),(5,'2024_07_19_143017_create_cars_table',1),(6,'2024_07_19_222027_create_classes_table',1),(7,'2024_08_06_150438_create_products_table',1),(8,'2024_08_11_152122_create_phones_table',1),(9,'2024_08_11_152223_create_students_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phones`
--

LOCK TABLES `phones` WRITE;
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `productname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `class` varchar(255) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_phone_id_foreign` (`phone_id`),
  CONSTRAINT `students_phone_id_foreign` FOREIGN KEY (`phone_id`) REFERENCES `phones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `expired` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Eldridge Prohaska III','nicolas.cummerata@example.net','2024-08-28 07:35:53','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'+1-563-740-8255','EX0oH6t8Il','2024-08-28 07:35:58','2024-08-28 07:35:58'),(2,'Kacie Orn','george.hintz@example.com','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'1-517-223-3236','MEk5aK5uWb','2024-08-28 07:35:58','2024-08-28 08:06:48'),(3,'Rylan Mills','egreenfelder@example.net','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'949.419.6146','OcwuvtNTuO','2024-08-28 07:35:58','2024-08-28 08:06:48'),(4,'Sophia O\'Conner','schowalter.lavon@example.org','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'+1-352-232-4808','HKur9OMhKT','2024-08-28 07:35:58','2024-08-28 08:06:48'),(5,'Brown Wiegand','bernhard.madelynn@example.org','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'+1-815-759-7739','e3IdowHuVc','2024-08-28 07:35:59','2024-08-28 08:06:48'),(6,'Prof. Spencer Schuster','chester25@example.net','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'731.360.0989','yTH4XUrVKl','2024-08-28 07:35:59','2024-08-28 08:06:48'),(7,'Dr. Omari Krajcik DDS','swalker@example.org','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'1-252-754-1204','UEzTDiXg0Y','2024-08-28 07:35:59','2024-08-28 08:06:48'),(8,'Prof. Mackenzie Pfeffer DDS','joannie.emard@example.net','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'484.660.1450','Kv2r0FtOKO','2024-08-28 07:35:59','2024-08-28 08:06:48'),(9,'Chadrick Bechtelar PhD','harris.easton@example.net','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'+1 (430) 885-3683','IP1ySJNUTZ','2024-08-28 07:35:59','2024-08-28 07:35:59'),(10,'Ines Denesik','rswift@example.net','2024-08-28 07:35:58','$2y$12$8cegfCuekTn02Lmi/Tnbbug2B5CO.BaEpLtuxnLySlNSlkegglnzC',1,'+1 (734) 498-5381','SuEofcCHBT','2024-08-28 07:35:59','2024-08-28 08:06:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-28 16:28:33
