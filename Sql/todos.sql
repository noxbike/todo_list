-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 juil. 2020 à 22:25
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `todo_list`
--

-- --------------------------------------------------------

--
-- Structure de la table `todos`
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `todo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `todos`
--

INSERT INTO `todos` (`id`, `todo`, `date`, `created_at`, `updated_at`) VALUES
(2, 'Apprendre l\'anglais', '2020-07-15', '2020-07-04 10:27:36', '2020-07-11 16:00:37'),
(4, 'Apprendre Redux', '2020-07-09', '2020-07-04 10:36:51', '2020-07-08 15:23:18'),
(8, 'Méditer', '2020-07-12', '2020-07-06 08:21:37', '2020-07-11 16:07:51'),
(28, 'Sport', '2020-07-12', '2020-07-10 14:46:52', '2020-07-11 16:01:27'),
(14, 'Lire un livre', '2020-07-10', '2020-07-07 06:40:04', '2020-07-07 06:40:04'),
(33, 'Apprendre le framework Laravel', '2020-07-12', '2020-07-11 14:31:44', '2020-07-11 16:04:31'),
(34, 'Apprendre Python', '2020-07-11', '2020-07-11 14:32:55', '2020-07-11 14:32:55'),
(35, 'Regarder un documentaire sur la sécurité informatique', '2020-07-11', '2020-07-11 14:33:53', '2020-07-11 14:33:53'),
(31, 'Préparer mon projet php', '2020-07-10', '2020-07-10 15:30:48', '2020-07-11 16:12:36'),
(32, 'Faire les courses', '2020-07-11', '2020-07-11 14:29:59', '2020-07-11 14:29:59'),
(36, 'Promener le chien', '2020-07-12', '2020-07-11 15:29:20', '2020-07-11 15:29:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
