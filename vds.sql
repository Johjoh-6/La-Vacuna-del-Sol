-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 nov. 2021 à 17:06
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

--
-- Déchargement des données de la table `vds_msg`
--

INSERT INTO `vds_msg` (`id`, `id_user`, `name`, `email`, `content`, `status`) VALUES
(1, NULL, 'Michel', 'michel@gmail.com', 'OUi zezddfb', '\'delivered\'');

-- --------------------------------------------------------

--
-- Structure de la table `vds_testimonial`
--

CREATE TABLE `vds_testimonial` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vds_testimonial`
--

INSERT INTO `vds_testimonial` (`id`, `id_user`, `content`, `created_at`, `status`) VALUES
(1, 0, 'Très bon site', '2021-11-18 16:26:35', '\'draft\''),
(2, 1, 'avds hj,tyrnersvqdsfbdgnf,hgutyjrehrgzefvbsdnf,fktyjdrthergsvbfdnf,ytjrhergzvsbdnf,tydrhtseqrbnyr,rhtervfbdnt,uyrhtegrzbtenry,tjrhtegrvbetrny,tujrheqrbetsnryd,rheqbsrndt,kj-hsrnydt,kr-èj-rshbsrsndtèj-rhse(srndt,fkèj-rshesrjdtèkj-rshrjdtkdjrsth', '0000-00-00 00:00:00', 'draft');

-- --------------------------------------------------------

--
-- Structure de la table `vds_users`
--

CREATE TABLE `vds_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `sexe` char(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `last_log` datetime NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vds_users`
--

INSERT INTO `vds_users` (`id`, `name`, `prenom`, `dob`, `sexe`, `email`, `password`, `token`, `created_at`, `last_log`, `role`) VALUES
(1, 'Pierre', 'Jean', '2011-05-18', '1', '', 'azerty', 'azezregrbvdc', '2021-11-18 16:25:08', '2021-11-18 16:25:08', '\'user\''),
(2, 'Michel', 'pierre', '2000-01-01', '', '', '', '', '2021-11-19 11:10:23', '2021-11-19 11:10:23', '\'user\''),
(3, 'Michel', 'pierre', '2000-01-01', 'male', 'michel.pierre@gmail.com', 'azerty', 'azezrerhjtk,nbvcx', '2021-11-19 11:10:23', '2021-11-19 11:10:23', '\'user\''),
(5, 'joh', 'qwert', '0000-00-00', 'homme', 'jo@gmail.com', '$2y$10$i5k2yTVvLErWrsD/./.lduOx1LNc58MgXCb1e1vWgTxYprRNxBryK', 'qY8X5XrbSybI0FxYFziK8dice7ZPMUV7W2fieyRsIfbNR5qxIjb1xuNRvGMlvdnU8G2UVgLV6q4yHNm195O8o6knQGQokgZZ8q6P', '2021-11-19 16:47:09', '0000-00-00 00:00:00', 'user'),
(6, 'Michel', 'qwert', '0000-00-00', 'femme', 'michel@gmail.com', '$2y$10$TpdLtjNzU5LORZ.EpujL0.6V3BXvUuC4oxp3e80A7nFLJTgvl2nTW', 'c6pKajQFzPavJh0VFNGnFtG6DLDphcGgISeBbfMD8kL0LQ2WVrsUGeUo7DMGE8iVnfGV4z7y6LtPsA90aKL12wDxHqjQkymArnbK', '2021-11-19 16:56:23', '0000-00-00 00:00:00', 'user'),
(7, 'Jo', 'azzaerc', '2021-11-18', 'femme', 'awzety@gmail.com', '$2y$10$8XeA3zG497SImVYlggCW6.xNQq/A0qxyGnKy0N8pgTm/ytsURxaIG', 'iVq76XgCSJmohD2qNvej2sTHiaK69CqNPM1sJrVxMXW1TbeVIz9mufKiSZbqwusTN8lvu6RuqXRAENinkDegPcT5AMiGqO8fq2gG', '2021-11-19 17:03:24', '0000-00-00 00:00:00', 'user');

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
  `obligatoire` varchar(50) NOT NULL DEFAULT 'non-obligatoire',
  `status` varchar(30) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vds_vaccin`
--

INSERT INTO `vds_vaccin` (`id`, `name`, `content`, `rappel`, `obligatoire`, `status`) VALUES
(1, 'pzifer', 'azertehtbvqzerbnbvsst efbbrvzvb vebbfv', 5, '0', '\'draft\''),
(2, 'ASTRA', 'xcdfvsgfnh vfbyntebzv', 1, '1', '\'draft\''),
(4, 'Michel', 'best vaccin in the world', 5, 'non-obligatoire', 'attente'),
(5, 'Michel2', 'best vaccin in the world2', 10, 'non indiqué', 'draft');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vds_testimonial`
--
ALTER TABLE `vds_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `vds_users`
--
ALTER TABLE `vds_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `vds_user_vaccin`
--
ALTER TABLE `vds_user_vaccin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vds_vaccin`
--
ALTER TABLE `vds_vaccin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
