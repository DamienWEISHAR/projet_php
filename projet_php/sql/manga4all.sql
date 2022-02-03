-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 21 jan. 2022 à 09:21
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `manga4all`
--

DROP DATABASE IF EXISTS `manga4all`;
CREATE DATABASE `manga4all`;
USE `manga4all`;
-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auteur` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_auteur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_comm` bigint(20) NOT NULL AUTO_INCREMENT,
  `titre_comm` varchar(50) NOT NULL,
  `contenu_comm` varchar(255) NOT NULL,
  `id_profil` bigint(20) NOT NULL,
  PRIMARY KEY (`id_comm`),
  KEY `id_profil` (`id_profil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commercer`
--

DROP TABLE IF EXISTS `commercer`;
CREATE TABLE IF NOT EXISTS `commercer` (
  `id_manga` bigint(20) NOT NULL,
  `id_util` bigint(20) NOT NULL,
  PRIMARY KEY (`id_manga`,`id_util`),
  KEY `id_util` (`id_util`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dessiner`
--

DROP TABLE IF EXISTS `dessiner`;
CREATE TABLE IF NOT EXISTS `dessiner` (
  `id_manga` bigint(20) NOT NULL,
  `id_auteur` bigint(20) NOT NULL,
  PRIMARY KEY (`id_manga`,`id_auteur`),
  KEY `id_auteur` (`id_auteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id_droit` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_droit` varchar(50) NOT NULL,
  PRIMARY KEY (`id_droit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `editions`
--

DROP TABLE IF EXISTS `editions`;
CREATE TABLE IF NOT EXISTS `editions` (
  `id_edition` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_edition` varchar(50) NOT NULL,
  PRIMARY KEY (`id_edition`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emettre`
--

DROP TABLE IF EXISTS `emettre`;
CREATE TABLE IF NOT EXISTS `emettre` (
  `id_util` bigint(20) NOT NULL,
  `id_comm` bigint(20) NOT NULL,
  PRIMARY KEY (`id_util`,`id_comm`),
  KEY `id_comm` (`id_comm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etats`
--

DROP TABLE IF EXISTS `etats`;
CREATE TABLE IF NOT EXISTS `etats` (
  `id_etat` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_etat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_etat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mangas`
--

DROP TABLE IF EXISTS `mangas`;
CREATE TABLE IF NOT EXISTS `mangas` (
  `id_manga` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_manga` varchar(50) NOT NULL,
  `tome_manga` int(11) NOT NULL,
  `prix_manga` int(11) NOT NULL,
  `langue_manga` varchar(50) NOT NULL,
  `id_edition` bigint(20) NOT NULL,
  `id_etat` bigint(20) NOT NULL,
  PRIMARY KEY (`id_manga`),
  KEY `id_edition` (`id_edition`),
  KEY `id_etat` (`id_etat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_msg` bigint(20) NOT NULL AUTO_INCREMENT,
  `contenu_msg` varchar(50) NOT NULL,
  `id_util` bigint(20) NOT NULL,
  `id_util_reponse` bigint(20) NOT NULL,
  PRIMARY KEY (`id_msg`),
  KEY `id_util_reponse` (`id_util_reponse`),
  KEY `id_util` (`id_util`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

DROP TABLE IF EXISTS `profils`;
CREATE TABLE IF NOT EXISTS `profils` (
  `id_profil` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_profil` varchar(50) NOT NULL,
  `id_util` bigint(20) NOT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `id_util` (`id_util`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_util` bigint(20) NOT NULL AUTO_INCREMENT,
  `pseudo_util` varchar(50) NOT NULL,
  `email_util` varchar(50) NOT NULL,
  `mdp_util` varchar(50) NOT NULL,
  `id_droit` bigint(20) NOT NULL,
  PRIMARY KEY (`id_util`),
  KEY `id_droit` (`id_droit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
