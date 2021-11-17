-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 nov. 2021 à 17:40
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vds`
--

-- --------------------------------------------------------

--
-- Structure de la table `vds_msg`
--

CREATE TABLE `vds_msg` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `content` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '''delivered'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vds_testimonial`
--

CREATE TABLE `vds_testimonial` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '''draft'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vds_users`
--

CREATE TABLE `vds_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `sex` char(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `last_log` datetime NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT '''user'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vds_user_vaccin`
--

CREATE TABLE `vds_user_vaccin` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_vaccin` int(11) NOT NULL,
  `vaccin_at` date NOT NULL,
  `rappel_vaccin` date NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vds_vaccin`
--

CREATE TABLE `vds_vaccin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `rappel` int(4) NOT NULL,
  `obligatoire` tinyint(1) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '''draft'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vds_msg`
--
ALTER TABLE `vds_msg`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vds_testimonial`
--
ALTER TABLE `vds_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vds_users`
--
ALTER TABLE `vds_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vds_user_vaccin`
--
ALTER TABLE `vds_user_vaccin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vds_vaccin`
--
ALTER TABLE `vds_vaccin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vds_msg`
--
ALTER TABLE `vds_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vds_testimonial`
--
ALTER TABLE `vds_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vds_users`
--
ALTER TABLE `vds_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vds_user_vaccin`
--
ALTER TABLE `vds_user_vaccin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vds_vaccin`
--
ALTER TABLE `vds_vaccin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
