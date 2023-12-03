-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sitecuy559.mysql.db
-- Généré le : ven. 17 nov. 2023 à 15:45
-- Version du serveur : 5.7.42-log
-- Version de PHP : 8.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sitecuy559`
--

-- --------------------------------------------------------

--
-- Structure de la table `users_mvc`
--

CREATE TABLE `users_mvc` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(300) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `adress` varchar(45) NOT NULL,
  `postalCode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users_mvc`
--

INSERT INTO `users_mvc` (`id`, `email`, `password`, `firstName`, `lastName`, `adress`, `postalCode`, `city`, `admin`) VALUES
(12, 'sebastien@johndoe-et-fils.com', '$2y$10$rHe5nyCSfifF3..q8AKt9uCm3GRm.PvSNanq3nxmOhe8cc/52MBoK', 'Sébastien', 'Burnet', '11 Rue du test', '44000', 'Nantes', 1),
(14, 'poubelle.de.seb.brnt@gmail.com', '$2y$10$lna07D76bzB/Q4FWGq4jmuWtxs9rIrNq/uc59l.n7/sTSLkGb6PmK', 'Test', 'Test', '11 Rue du test', '75005', 'Paris', 0),
(15, 'johndoefils@gmail.com', '$2y$10$ErKJPyJZnCsb.7mPyIABpebG/Sd1bMlaUtuJdx5bkRcjfF7Q57qJi', 'test', 'test', '1 Rue de l\'exemple', '16100', 'Cognac', 0),
(16, 'admin@sitecube.fr', '$2y$10$i6tMnEYExGcdZJkPDS92Y.K/CrHI9P3qDh6E9NWaXXYoVeN5iEOlG', 'Sébastien', 'Burnet', '1 Chemin de l\'admin', '44000', 'Nantes', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users_mvc`
--
ALTER TABLE `users_mvc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users_mvc`
--
ALTER TABLE `users_mvc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
