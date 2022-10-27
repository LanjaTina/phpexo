-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 juin 2022 à 05:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `info320`
--

-- --------------------------------------------------------

--
-- Structure de la table `specialites`
--

DROP TABLE IF EXISTS `specialites`;
CREATE TABLE IF NOT EXISTS `specialites` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specialites`
--

INSERT INTO `specialites` (`id`, `nom`, `credit`, `created_at`, `updated_at`) VALUES
(1, 'INFORMATIQUE', 100, NULL, NULL),
(2, 'GESTION', 120, NULL, NULL),
(3, 'MATHEMATIQUE', 200, NULL, NULL),
(4, 'HISTOIRE - GEOGRAPHIE', 700, NULL, NULL),
(5, 'Comptabilité', 3001, '2022-06-20 02:17:33', '2022-06-20 02:17:33'),
(6, 'CIRCUIT LOGIQUE', 9001, '2022-06-20 02:18:22', '2022-06-20 02:18:22'),
(7, 'ENTREPRENEURIAT', 205, '2022-06-20 02:18:53', '2022-06-20 02:18:53'),
(8, 'fqsdfdqsfdqfdqsfd', 888, '2022-06-20 02:18:59', '2022-06-20 02:18:59'),
(9, 'BLIBLIBLIBBLI', 5997, '2022-06-20 02:19:05', '2022-06-20 02:19:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
