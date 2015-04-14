-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Avril 2015 à 16:25
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
  `numetodaccord` varchar(30) NOT NULL,
  `raisonsocial` varchar(20) NOT NULL,
  `capital` int(11) NOT NULL,
  `adressesiege` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `rcs` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `fonction` varchar(20) NOT NULL,
  `tukwu` decimal(5,2) NOT NULL,
  `operation` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `testcontact`
--

INSERT INTO `testcontact` (`id`, `numetodaccord`, `raisonsocial`, `capital`, `adressesiege`, `cp`, `ville`, `rcs`, `nom`, `prenom`, `fonction`, `tukwu`, `operation`) VALUES
(1, 'CAMEO_2015_04_14', 'Ba4 Corporation ', 1000000000, '4 résidence des maréchaux ', 78700, 'Conflans', 404833, 'Chemaslé', 'Bastien', 'Directeur général', '3.50', 'BATTH06'),
(2, 'CAMEO_2015_04_15', 'Riot Games', 1000000000, '116 rue de lalalal ', 75001, 'Paris', 404833, 'Panth', 'Talon ', 'God', '3.00', 'BATTH05'),
(3, 'CAMEO_2015_04_16', 'Blizzard', 13564554, '12 rue tropposey', 78787, 'New york', 155125514, 'Bill', 'Gates', 'PDG', '2.50', 'BATTH06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
