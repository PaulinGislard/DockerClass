-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : lun. 22 nov. 2021 à 11:49
-- Version du serveur : 10.5.13-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Test`
--

-- --------------------------------------------------------

--
-- Structure de la table `ID`
--

CREATE TABLE `ID` (
  `User` text NOT NULL,
  `PWD` text NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `Prenom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ID`
--

INSERT INTO `ID` (`User`, `PWD`, `ID`, `Prenom`) VALUES
('root', 'root', 1, 'Admin'),
('user', 'network', 2, 'Utilisateur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
