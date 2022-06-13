-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 13 juin 2022 à 16:03
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
-- Base de données : `fillerouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `typecategory` varchar(255) NOT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcategory`, `typecategory`) VALUES
(1, 'cat'),
(2, 'Ville'),
(3, 'Saison'),
(4, 'Animal'),
(5, 'Famille'),
(6, 'art'),
(7, 'yasiine ');

-- --------------------------------------------------------

--
-- Structure de la table `like_`
--

DROP TABLE IF EXISTS `like_`;
CREATE TABLE IF NOT EXISTS `like_` (
  `idlike` int(11) NOT NULL AUTO_INCREMENT,
  `idmember` int(11) DEFAULT NULL,
  `intpost` int(11) DEFAULT NULL,
  PRIMARY KEY (`idlike`),
  KEY `FK_idmember` (`idmember`),
  KEY `FK_idpost` (`intpost`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `like_`
--

INSERT INTO `like_` (`idlike`, `idmember`, `intpost`) VALUES
(1, 14, 40);

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `idmember` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motedepass` varchar(255) NOT NULL,
  `rool` int(11) DEFAULT '0',
  PRIMARY KEY (`idmember`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `member`
--

INSERT INTO `member` (`idmember`, `prenom`, `nom`, `email`, `motedepass`, `rool`) VALUES
(12, 'user', 'user', 'user@gmail.com', '$2y$12$P3vdNPbTxSszw9kzy3KHYe5W0bqgox8Rt9E.b.VvnWKqcPuWSG1NC', 0),
(9, 'admin', 'admin', 'admin@gmail.com', '$2y$12$JfdbEiAibfJ.M1F4jFdiJ.UwWATtg5jeMHNG/Ok5TFAYS.NtqF4sa', 1),
(11, 'zineb', 'zineb', 'zineb@gmail.com', '$2y$12$SvvLqayBaaQnU.2f5wPTy.pIxXjEhDSjAKI6drnB5oMg7wBkyz29e', 0);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `intpost` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `titrei_mg` varchar(255) NOT NULL,
  `descreption` varchar(255) NOT NULL,
  `idmember` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`intpost`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`intpost`, `image`, `titrei_mg`, `descreption`, `idmember`, `category`) VALUES
(25, '1653314673.jpg', 'test', 'ndlkc,lqjdfojskndvkhsn', 11, ''),
(39, '1654268381.jpg', 'titre', 'text', 14, ''),
(40, '1654268838.jpg', 'titre', 'text', 14, ''),
(85, '1654852752.jpg', 'test', 'cgchv', 12, 'Ville'),
(74, '1654789545.jpg', 'jdfkxnskncksj   ', '                                                                                                                sxcnklqNCLdfd \r\n                         \r\n                         \r\n                         \r\n                        ', 12, 'ville'),
(83, '1654851999.jpg', 'iui', 'dfghjkn', 12, 'Animal'),
(81, '1654536350.jpg', 'titre ', '                            jksjdnos \r\n                        ', 12, 'ville');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
