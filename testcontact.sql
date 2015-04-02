-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 02 Avril 2015 à 15:03
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cameo`
--

-- --------------------------------------------------------

--
-- Structure de la table `testcontact`
--

CREATE TABLE IF NOT EXISTS `testcontact` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `Raison sociale` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Capital` int(11) NOT NULL,
  `Adresse` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `RCS` int(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prémon` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
