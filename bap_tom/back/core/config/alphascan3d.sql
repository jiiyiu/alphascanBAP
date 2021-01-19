-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 19 jan. 2021 à 20:12
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `alphascan3d`
--

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

CREATE TABLE `commands` (
  `id_user` int(11) NOT NULL,
  `command_date` date NOT NULL COMMENT 'date de la commande',
  `command_number` int(11) NOT NULL COMMENT 'numéro de commande',
  `status` int(1) NOT NULL COMMENT '1 = terminée\r\n2 = en cours\r\n3 = annulé'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL COMMENT 'Id de l''utilisateur',
  `email` varchar(255) NOT NULL COMMENT 'Email de l''utilisateur (+identifiant de connection)',
  `firstname` varchar(50) NOT NULL COMMENT 'Prénom de l''utilisateur',
  `name` varchar(50) NOT NULL COMMENT 'Nom de famille de l''utilisateur',
  `password` varchar(255) NOT NULL COMMENT 'Mot de passe crypté de l''utilisateur',
  `phonenumber` varchar(50) NOT NULL COMMENT 'Numéro de téléphone de l''utilisateur',
  `loc_country` varchar(50) NOT NULL COMMENT 'Pays de l''adresse de l''utilisateur',
  `loc_adresse1` varchar(255) NOT NULL COMMENT 'Adresse principale de l''utilisateur',
  `loc_adresse2` varchar(255) NOT NULL COMMENT 'Complément d''adresse',
  `loc_codepostal` varchar(50) NOT NULL COMMENT 'Code postal de la ville de l''utilisateur',
  `loc_ville` varchar(50) NOT NULL COMMENT 'Ville de l''utilisateur',
  `loc_departement` varchar(50) NOT NULL COMMENT 'Département de l''utilisateur',
  `role` varchar(50) DEFAULT NULL COMMENT 'Inscrire "admin" si l''utilisateur est administrateur du site',
  `politiquecookies` tinyint(1) DEFAULT NULL COMMENT 'Le client accepte la politique de confidentialité et les cookies du site',
  `newsletter` tinyint(1) DEFAULT NULL COMMENT 'Le client accepte de recevoir la newsletter'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de l''utilisateur';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
