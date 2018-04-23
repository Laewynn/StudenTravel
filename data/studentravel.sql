-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 18 jan. 2018 à 13:47
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `studentravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `guides`
--

DROP TABLE IF EXISTS `guides`;
CREATE TABLE IF NOT EXISTS `guides` (
  `id_guides` int(11) NOT NULL AUTO_INCREMENT,
  `nom_guides` varchar(50) NOT NULL,
  `prenom_guides` varchar(50) NOT NULL,
  `ville_guides` varchar(70) NOT NULL,
  `description_guides` text NOT NULL,
  `caracteristiques_guides` text NOT NULL,
  `telephone_guides` int(10) NOT NULL,
  `mail_guides` varchar(50) NOT NULL,
  PRIMARY KEY (`id_guides`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id_villes` int(11) NOT NULL AUTO_INCREMENT,
  `nom_villes` varchar(50) NOT NULL,
  `description_villes` varchar(500) NOT NULL,
  `activites_villes` varchar(500) NOT NULL,
  PRIMARY KEY (`id_villes`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
CREATE TABLE IF NOT EXISTS `visiteurs` (
  `id_visiteurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom_visiteurs` varchar(50) NOT NULL,
  `prenom_visiteurs` varchar(50) NOT NULL,
  `telephone_visiteurs` int(10) NOT NULL,
  `mail_visiteurs` varchar(50) NOT NULL,
  PRIMARY KEY (`id_visiteurs`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

DROP TABLE IF EXISTS `voyages`;
CREATE TABLE IF NOT EXISTS `voyages` (
  `id_voyages` int(11) NOT NULL AUTO_INCREMENT,
  `datedebut_voyages` date NOT NULL,
  `datefin_voyages` date NOT NULL,
  `nbetudiants_voyages` int(11) NOT NULL,
  `villedepart_voyages` varchar(50) NOT NULL,
  `villedarrivee_voyages` varchar(50) NOT NULL,
  `budget_voyage` int(11) NOT NULL,
  PRIMARY KEY (`id_voyages`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
