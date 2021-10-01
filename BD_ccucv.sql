-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5337
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla ccucv.blogs
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idAutor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ccucv.blogs: ~1 rows (aproximadamente)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `titulo`, `contenido`, `idAutor`, `created_at`, `updated_at`) VALUES
	(1, 'Blog de prueba', '¡Felicidades, el blog funciona!', 1, NULL, NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Volcando estructura para tabla ccucv.foto_datas
DROP TABLE IF EXISTS `foto_datas`;
CREATE TABLE IF NOT EXISTS `foto_datas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `URL` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ccucv.foto_datas: ~0 rows (aproximadamente)
DELETE FROM `foto_datas`;
/*!40000 ALTER TABLE `foto_datas` DISABLE KEYS */;
/*!40000 ALTER TABLE `foto_datas` ENABLE KEYS */;

-- Volcando estructura para tabla ccucv.historia_coros
DROP TABLE IF EXISTS `historia_coros`;
CREATE TABLE IF NOT EXISTS `historia_coros` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `sxn` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ccucv.historia_coros: ~4 rows (aproximadamente)
DELETE FROM `historia_coros`;
/*!40000 ALTER TABLE `historia_coros` DISABLE KEYS */;
INSERT INTO `historia_coros` (`id`, `sxn`, `info`, `descrip`, `created_at`, `updated_at`) VALUES
	(1, 'hist', 'Historia', 'Seccion Historia', NULL, NULL),
	(2, 'mv', 'Mision y Vision', 'Mision y Vision', NULL, NULL),
	(3, 'val', 'Valores', 'Valores', NULL, NULL),
	(4, 'recs', 'Reconocimientos', 'Reconocimientos', NULL, NULL);
/*!40000 ALTER TABLE `historia_coros` ENABLE KEYS */;

-- Volcando estructura para tabla ccucv.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ccucv.migrations: ~6 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(51, '2019_06_27_031017_create_present_coros_table', 1),
	(58, '2014_10_12_000000_create_users_table', 2),
	(59, '2014_10_12_100000_create_password_resets_table', 2),
	(60, '2019_06_23_024319_create_blogs_table', 2),
	(61, '2019_06_27_030923_create_historia_coros_table', 2),
	(62, '2019_10_28_223618_foto_data', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla ccucv.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ccucv.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla ccucv.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$DZGNJaYWPFAMk.JUrFdmAOROoZKtEjVQ8R0Z195X9.mGt5Cyaq1M6',
  `is_Admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ccucv.users: ~3 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `is_Admin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'administrador', 'administrador@admin.com', NULL, '$2y$10$DZGNJaYWPFAMk.JUrFdmAOROoZKtEjVQ8R0Z195X9.mGt5Cyaq1M6', 1, NULL, NULL, NULL),
	(2, 'mod', 'moderador', 'moderador@admin.com', NULL, '$2y$10$DZGNJaYWPFAMk.JUrFdmAOROoZKtEjVQ8R0Z195X9.mGt5Cyaq1M6', 0, NULL, NULL, NULL),
	(3, 'user', 'usuario', 'usuario@admin.com', NULL, '$2y$10$DZGNJaYWPFAMk.JUrFdmAOROoZKtEjVQ8R0Z195X9.mGt5Cyaq1M6', 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
