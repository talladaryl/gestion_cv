-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 25 jan. 2024 à 15:57
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aaronna`
--
CREATE DATABASE IF NOT EXISTS `aaronna` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aaronna`;

-- --------------------------------------------------------

--
-- Structure de la table `annoncea`
--

CREATE TABLE `annoncea` (
  `idan` int(11) NOT NULL,
  `usnom` varchar(111) NOT NULL,
  `gategoriea` varchar(255) NOT NULL,
  `descripa` text NOT NULL,
  `villa` varchar(222) NOT NULL,
  `titrea` text NOT NULL,
  `datar` date NOT NULL,
  `type` varchar(222) NOT NULL,
  `nature` varchar(222) NOT NULL,
  `imgf` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annoncea`
--

INSERT INTO `annoncea` (`idan`, `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf`) VALUES
(3, 'lechien@fg', 'Mode - Accessoires de mode', '  \r\n  ,,,,,,,,,,,,,,lll\r\n', 'nnn', 'nnn', '2021-11-15', 'prenium', 'Offre ( vous proposez )', 'upload/hj.jpg'),
(6, 'lechien@fg', 'Offres Emploi, Travail - Recrutement', '  Jcjgjgjgjjjgjgjgjgjgjjggjjgjgjg\r\n  \r\n', 'Lgjkg', 'Lekoi', '2021-11-23', 'prenium', 'Offre ( vous proposez )', 'upload/SGN_11_01_2021_1635757488861.jpeg'),
(8, 'monbro', 'Mode - Accessoires de mode', '  kdif\r\n  \r\n', 'ville', 'hfh', '2021-12-13', 'prenium', 'Demande ( vous recherchez )', 'upload/20210217_101925.jpg'),
(9, 'hdjhcj', 'Gatégorie', '  \r\n  dddd\r\n', 'Yaounde', 'd', '2021-12-14', 'prenium', 'Offre ( vous proposez )', 'upload/20210212_125605.jpg'),
(10, 'kkk', 'Électroménager Maison Déco', '  \r\n  nnnn\r\n', 'nnn', 'nnn', '2022-02-11', 'prenium', 'Offre ( vous proposez )', 'upload/posc3a9idon.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `contact` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `enquetteur`
--

CREATE TABLE `enquetteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(222) NOT NULL,
  `age` date NOT NULL,
  `residence` varchar(222) NOT NULL,
  `statut` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `objection`
--

CREATE TABLE `objection` (
  `idonb` int(11) NOT NULL,
  `avis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `suplement`
--

CREATE TABLE `suplement` (
  `idim` int(11) NOT NULL,
  `idua` int(11) NOT NULL,
  `chemin` varchar(222) NOT NULL,
  `user` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `suplement`
--

INSERT INTO `suplement` (`idim`, `idua`, `chemin`, `user`) VALUES
(1, 1, 'suplement/1c0299fbbe509bb5af9abcb1b1db9aba.jpg', 'lechien@fg'),
(2, 9, 'suplement/1c0299fbbe509bb5af9abcb1b1db9aba.jpg', 'hdjhcj'),
(3, 9, 'suplement/6e071e8a399bbbdd6193e842051abee8.jpg', 'hdjhcj');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `noma` varchar(123) NOT NULL,
  `mailto` varchar(123) NOT NULL,
  `cheminuser` varchar(222) NOT NULL,
  `tel` varchar(111) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `passa` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`noma`, `mailto`, `cheminuser`, `tel`, `sex`, `passa`) VALUES
('Lekingbrathly', 'Charo', 'uploaduser/IMG_20211118_085013_566.jpg', '656776', 'Masculin', 'charo'),
('Lekingbrathly', 'Charoschaos', 'uploaduser/16376524678805644767047898404714.jpg', '677888578', 'Masculin', 'theking'),
('titan', 'chris', 'uploaduser/m.jpg', '699673943', 'Masculin', 'chris'),
('lcjcjcjcj', 'hdjhcj', 'uploaduser/20210217_101903.jpg', '22222', 'Masculin', 'qqq'),
('JURIS', 'jurissamuel@gmail,com', 'uploaduser/Color-Name-List-List-Of-Colors-706x1024.png', '8654324689900', 'Masculin', 'gxdsfghujhfdefv'),
('lo', 'kk', 'uploaduser/gara.png', '2222222', 'Masculin', 'jj'),
('kinj', 'kkk', 'uploaduser/index.jpg', '3333', 'Masculin', 'kkk'),
('lechien', 'lechien@fg', 'uploaduser/5adec4bdc453c2fa952b6eb9a54149c6.png', '0989E9', 'Masculin', 'lechien'),
('lekingbra', 'lepouvoir_emplace', 'uploaduser/zeufoudre.jpg', '98648847794', 'Masculin', 'kalibraa'),
('chaos@fgl.com', 'letono', 'uploaduser/user-04.jpg', '2222', 'Masculin', '5c97f998cf702b5b9bd23fdc5362ea9d281b66b2'),
('loki', 'lokiu', 'uploaduser/zeufoudre.jpg', '33333', 'Masculin', 'loki'),
('letonk', 'mlp', 'uploaduser/Neptune-The-Roman-God-of-Sea.x34319-1.jpg', '999', 'Feminin', 'pk'),
('bro', 'monbro', 'uploaduser/20210217_101839.jpg', '222222222', 'Masculin', 'bro'),
('lekoi', 'roimulan', 'uploaduser/ange de la mort.jpg', '0999', 'Masculin', 'lpo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annoncea`
--
ALTER TABLE `annoncea`
  ADD PRIMARY KEY (`idan`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enquetteur`
--
ALTER TABLE `enquetteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `objection`
--
ALTER TABLE `objection`
  ADD PRIMARY KEY (`idonb`);

--
-- Index pour la table `suplement`
--
ALTER TABLE `suplement`
  ADD PRIMARY KEY (`idim`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mailto`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annoncea`
--
ALTER TABLE `annoncea`
  MODIFY `idan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `enquetteur`
--
ALTER TABLE `enquetteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `objection`
--
ALTER TABLE `objection`
  MODIFY `idonb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `suplement`
--
ALTER TABLE `suplement`
  MODIFY `idim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
