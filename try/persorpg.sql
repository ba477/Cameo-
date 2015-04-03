-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Avril 2015 à 17:09
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `persorpg`
--

CREATE TABLE IF NOT EXISTS `persorpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `classe` varchar(100) NOT NULL,
  `experience` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `persorpg`
--

INSERT INTO `persorpg` (`id`, `nom`, `classe`, `experience`) VALUES
(1, 'Rakkta', 'tank', '1'),
(2, 'Baston Rodeur', 'rodeur', '1'),
(3, 'Kôga De Pegase', 'Gardien', '0'),
(7, 'Fufumagueule', 'Dps', '0'),
(20, 'ezrz', 'Tank', '0'),
(21, 'GiinSiide', 'Mage.jpg', '0'),
(23, 'ba444444', 'Mage', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
