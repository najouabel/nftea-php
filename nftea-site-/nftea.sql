-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 23 nov. 2022 à 18:23
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nftea`
--

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

CREATE TABLE `collection` (
  `CollectionId` int(30) NOT NULL,
  `NameColl` varchar(20) NOT NULL,
  `UserId` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `collection`
--

INSERT INTO `collection` (`CollectionId`, `NameColl`, `UserId`) VALUES
(1, 'Pirate Nation', 1),
(2, 'Lil Hotties Official', 2),
(3, 'Doodles', 3),
(4, 'Azuki', 4),
(5, 'The Blitnauts', 5),
(6, 'LetsWalk', 6),
(11, 'hiha', 2),
(12, 'iknowyou', 2),
(13, 'azer', 10),
(14, 'AQWX', 11),
(15, 'JIJIJI', 12),
(16, 'hania', 12),
(17, 'aaaaa', 12),
(18, 'tataata', 10);

-- --------------------------------------------------------

--
-- Structure de la table `nft`
--

CREATE TABLE `nft` (
  `IdNft` int(30) NOT NULL,
  `CollectionId` int(20) NOT NULL,
  `NameNft` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `imageNft` varchar(255) NOT NULL,
  `Prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nft`
--

INSERT INTO `nft` (`IdNft`, `CollectionId`, `NameNft`, `description`, `imageNft`, `Prix`) VALUES
(3, 1, 'Piratee', 'HIHAHIHA', 'dodle1.PNG', 20),
(6, 2, 'zaza', 'hi', 'anim1.PNG', 111),
(8, 2, 'ahm', 'how', 'anim8.PNG', 1),
(9, 4, 'Tiliiiiiiiiiiiiiiiiiiii', 'how', 'anim7.PNG', 20),
(10, 6, 'bili', 'HIHAHIHA', 'anim5.PNG', 1234570),
(14, 1, 'Piratee', 'Gold Silver Pirate owns a Silver Bel', 'bil5.PNG', 1234570),
(16, 18, 'Tili', 'zzz', 'anim2.PNG', 20),
(17, 13, 'Piratee', 'Gold Silver Pirate owns a Silver Bel', 'bil3.PNG', 1234570),
(20, 13, 'zzzz', 'HIHAHIHA', 'anim1.PNG', 100000000),
(21, 18, 'zitzit', 'how', 'bil7.PNG', 111);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `UserId` int(30) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `Email`, `Password`) VALUES
(1, 'ProofofPlay', 'ProofofPlay@gmail.com', 'ProofofPlay'),
(2, 'gburns       ', 'gburns@gmail.com', 'gburns'),
(3, 'Doodles_LLC', 'Doodles_LLC@gmail.com', 'Doodles_LLC'),
(4, 'TeamAzuki', 'TeamAzuki@gmail.com', 'TeamAzuki'),
(5, 'dhof', 'dhof@gmail.com', 'dhof'),
(6, 'deekaymotion', 'deekaymotion@gmail.com', 'deekaymotion'),
(10, 'najoua', 'najoua@gmail.com', '1234'),
(11, 'lamiaa', 'lamiaa@gmail.com', '123'),
(12, 'kamal', 'kamal@gmail.com', '1234'),
(13, 'nji', 'nji@gmail.com', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`CollectionId`),
  ADD KEY `UserId` (`UserId`);

--
-- Index pour la table `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`IdNft`),
  ADD KEY `CollectionId` (`CollectionId`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `collection`
--
ALTER TABLE `collection`
  MODIFY `CollectionId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `nft`
--
ALTER TABLE `nft`
  MODIFY `IdNft` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `UserId` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`);

--
-- Contraintes pour la table `nft`
--
ALTER TABLE `nft`
  ADD CONSTRAINT `CollectionId` FOREIGN KEY (`CollectionId`) REFERENCES `collection` (`CollectionId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
