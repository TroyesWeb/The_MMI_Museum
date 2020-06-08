-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 juin 2020 à 13:05
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mmi_museum`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(4) NOT NULL,
  `admin_identifiant` int(40) NOT NULL,
  `admin_password` int(100) NOT NULL,
  `admin_nom` int(30) NOT NULL,
  `admin_prenom` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `oeuvre_id` int(6) NOT NULL AUTO_INCREMENT,
  `oeuvre_intitule` varchar(30) NOT NULL,
  `oeuvre_desc` varchar(150) NOT NULL,
  `oeuvre_photo` varchar(20) NOT NULL,
  `oeuvre_date` date NOT NULL,
  `oeuvre_classe` varchar(6) NOT NULL,
  PRIMARY KEY (`oeuvre_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(8) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `users_prenom` varchar(30) NOT NULL,
  `users_nom` varchar(30) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
