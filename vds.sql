-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 nov. 2021 à 09:24
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
  `status` varchar(30) NOT NULL DEFAULT 'delivered',
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vds_msg`
--

INSERT INTO `vds_msg` (`id`, `id_user`, `name`, `email`, `content`, `status`, `created_at`, `modified_at`) VALUES
(1, NULL, 'Michel', 'michel@gmail.com', 'OUi zezddfb', 'answered', '0000-00-00 00:00:00', '2021-11-22 13:08:59'),
(2, NULL, 'joh', 'michel@gmail.com', 'Je suis ravis', 'delivered', '0000-00-00 00:00:00', NULL),
(3, NULL, 'joh', 'michel@gmail.com', 'Je suis ravis', 'delivered', '2021-11-22 16:47:28', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vds_testimonial`
--

CREATE TABLE `vds_testimonial` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vds_testimonial`
--

INSERT INTO `vds_testimonial` (`id`, `id_user`, `content`, `created_at`, `modified_at`, `status`) VALUES
(3, 6, 'azdzerebth tres tres bien', '2021-11-22 15:45:15', '2021-11-22 15:45:15', 'draft'),
(4, 1, 'AZRR AZRDqdgt dvdbnbev csrt rhnthnr crevt(bytnbvev evz(tynyb fgdbfhh srgdththdtg hthrhtgreh gsh-rrgrehrt fsrgrhthr', '2021-11-22 17:15:24', '2021-11-22 17:15:24', 'draft'),
(5, 2, 'asegrhjy cvgbhn sxqcvrt dcsvfdbfn wcdvsfbgf dsvfdbg cdsvfdbgn dcsfvdgbfnh cdsfvdgbfn cdsvfdgbn cdsvfbgnh,', '2021-11-22 17:16:22', '2021-11-22 17:16:22', 'draft'),
(6, 3, 'zczvrb asert', '2021-11-22 17:20:02', '2021-11-22 17:20:02', 'draft'),
(7, 5, 'aeev sxcevrh', '2021-11-22 17:20:14', '2021-11-22 17:20:14', 'draft'),
(8, 7, 'Ouiii ', '2021-11-22 17:20:27', '2021-11-22 17:20:27', 'draft'),
(9, 8, 'J\'aime votre site !!!!!!', '2021-11-24 09:10:52', NULL, 'draft');

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
  `modified_at` datetime DEFAULT NULL,
  `last_log` datetime NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vds_users`
--

INSERT INTO `vds_users` (`id`, `name`, `prenom`, `dob`, `sexe`, `email`, `password`, `token`, `created_at`, `modified_at`, `last_log`, `role`) VALUES
(1, 'Pierre', 'Jean', '2011-05-18', '1', '', 'azerty', 'azezregrbvdc', '2021-11-18 16:25:08', '0000-00-00 00:00:00', '2021-11-18 16:25:08', '\'user\''),
(2, 'Michel', 'pierre', '2000-01-01', '', '', '', '', '2021-11-19 11:10:23', '0000-00-00 00:00:00', '2021-11-19 11:10:23', '\'user\''),
(3, 'Michel', 'pierre', '2000-01-01', 'male', 'michel.pierre@gmail.com', 'azerty', 'azezrerhjtk,nbvcx', '2021-11-19 11:10:23', '0000-00-00 00:00:00', '2021-11-19 11:10:23', '\'user\''),
(5, 'joh', 'qwert', '0000-00-00', 'homme', 'jo@gmail.com', '$2y$10$i5k2yTVvLErWrsD/./.lduOx1LNc58MgXCb1e1vWgTxYprRNxBryK', 'qY8X5XrbSybI0FxYFziK8dice7ZPMUV7W2fieyRsIfbNR5qxIjb1xuNRvGMlvdnU8G2UVgLV6q4yHNm195O8o6knQGQokgZZ8q6P', '2021-11-19 16:47:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'user'),
(6, 'Michel', 'qwert', '2021-11-08', 'homme', 'michel@gmail.com', '$2y$10$TpdLtjNzU5LORZ.EpujL0.6V3BXvUuC4oxp3e80A7nFLJTgvl2nTW', 'c6pKajQFzPavJh0VFNGnFtG6DLDphcGgISeBbfMD8kL0LQ2WVrsUGeUo7DMGE8iVnfGV4z7y6LtPsA90aKL12wDxHqjQkymArnbK', '2021-11-19 16:56:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'user'),
(7, 'Jo', 'azzaerc', '2021-11-18', 'femme', 'awzety@gmail.com', '$2y$10$8XeA3zG497SImVYlggCW6.xNQq/A0qxyGnKy0N8pgTm/ytsURxaIG', 'iVq76XgCSJmohD2qNvej2sTHiaK69CqNPM1sJrVxMXW1TbeVIz9mufKiSZbqwusTN8lvu6RuqXRAENinkDegPcT5AMiGqO8fq2gG', '2021-11-19 17:03:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'user'),
(8, 'Jean', 'Michel', '2000-01-01', 'homme', 'jean@gmail.com', '$2y$10$9uQ3ZZiRjmrFOA35OVcQy.ttunlUHvL7hL2gQaHt/z45A1MXjupge', 'VFhLX17UUBAtx2BOOeqfwivjCzgurLQX23cPFlZFm4PVeb44KIQuHdegaMq4VoEDzZhoCCywWJxxWeZhgnxuVixvh9pyfzkmrmY4', '2021-11-23 10:25:46', NULL, '0000-00-00 00:00:00', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `vds_user_vaccin`
--

CREATE TABLE `vds_user_vaccin` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_vaccin` int(11) NOT NULL,
  `vaccin_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vds_user_vaccin`
--

INSERT INTO `vds_user_vaccin` (`id`, `id_user`, `id_vaccin`, `vaccin_at`, `created_at`) VALUES
(1, 6, 1, '2021-11-23 09:31:19', '2021-11-23 09:31:19'),
(3, 6, 2, '2021-11-23 09:32:12', '2021-11-23 09:32:12'),
(4, 7, 2, '2021-11-23 00:00:00', '2021-11-23 00:00:00'),
(5, 8, 1, '2021-11-23 14:47:48', '2021-11-23 14:47:48'),
(6, 8, 2, '2021-11-23 14:47:48', '2021-11-23 14:47:48'),
(7, 8, 7, '2020-01-01 15:19:32', '2021-11-23 15:19:32'),
(8, 8, 9, '2000-01-01 00:00:00', '2021-11-23 16:14:07'),
(9, 8, 1, '2010-01-01 00:00:00', '2021-11-23 16:15:26'),
(10, 8, 9, '2010-10-10 00:00:00', '2021-11-23 16:31:16'),
(11, 8, 1, '2010-10-10 00:00:00', '2021-11-23 16:32:36'),
(12, 8, 9, '2000-01-01 00:00:00', '2021-11-24 08:43:31'),
(13, 8, 9, '2000-01-01 00:00:00', '2021-11-24 08:44:10');

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
  `status` varchar(30) NOT NULL DEFAULT 'draft',
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vds_vaccin`
--

INSERT INTO `vds_vaccin` (`id`, `name`, `content`, `rappel`, `obligatoire`, `status`, `created_at`, `modified_at`) VALUES
(1, 'pzifer', 'test 26', 5, 'obligatoire', 'publish', '0000-00-00 00:00:00', NULL),
(2, 'ASTRA', 'xcdfvsgfnh vfbyntebzv', 1, 'obligatoire', 'draft', '0000-00-00 00:00:00', '2021-11-22 16:20:19'),
(4, 'Michel', 'best vaccin in the world', 5, 'non-obligatoire', 'attente', '0000-00-00 00:00:00', NULL),
(5, 'Michel3', 'best vaccin in the world3', 10, 'obligatoire', 'draft', '0000-00-00 00:00:00', '2021-11-22 16:20:12'),
(6, 'project', 'AZE', 1, 'non-obligatoire', 'draft', '0000-00-00 00:00:00', NULL),
(7, 'project', 'AZERT', 60, 'obligatoire', 'user', '0000-00-00 00:00:00', NULL),
(8, 'project', 'AZERT', 3, 'obligatoire', 'user', '0000-00-00 00:00:00', NULL),
(9, 'test', 'test 22', 1, 'non-obligatoire', 'publish', '0000-00-00 00:00:00', NULL),
(10, 'Check', '', 12, 'non indiqué', 'draft', '2021-11-23 16:57:12', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vds_testimonial`
--
ALTER TABLE `vds_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `vds_users`
--
ALTER TABLE `vds_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `vds_user_vaccin`
--
ALTER TABLE `vds_user_vaccin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `vds_vaccin`
--
ALTER TABLE `vds_vaccin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
