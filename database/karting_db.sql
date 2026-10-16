-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 juil. 2026 à 11:07
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `karting_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `theme` varchar(100) DEFAULT NULL,
  `desc_article` text DEFAULT NULL,
  `image_article` varchar(100) DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `theme`, `desc_article`, `image_article`, `date_event`, `id_user`, `id_course`) VALUES
(1, 'Ouverture de la saison 2026', 'La nouvelle saison de karting débute avec de nombreux pilotes inscrits et plusieurs nouveautés sur les circuits. qsddfggf', './article/', '2026-01-15', 1, NULL),
(2, 'Grand Prix d\'Antsirabe', 'Le Grand Prix d\'Antsirabe a réuni les meilleurs pilotes du pays dans une compétition très disputée.', './article/image2.jpg', '2026-02-10', 1, 2),
(3, 'Nouveau sponsor officiel', 'Une nouvelle entreprise rejoint le championnat comme sponsor principal pour la saison 2026.', './article/image3.jpg', '2026-02-20', 1, NULL),
(4, 'Championnat National', 'Le championnat national promet des courses spectaculaires avec la participation de plus de cinquante pilotes.', './article/6a33c6a36cbe6_6a33c554cb2d1_image1.jpg', '2026-06-16', 1, NULL),
(5, 'Formation des jeunes pilotes', 'Une session spéciale de formation a été organisée pour les jeunes talents du karting malgache.', './article/image5.jpg', '2026-04-05', 1, NULL),
(6, 'Grand Prix de Tamatave', '', './article/image1.jpg', '2026-05-10', 1, 4),
(7, 'Inauguration du nouveau circuit', 'Un nouveau circuit moderne a été inauguré afin d\'accueillir les futures compétitions nationales.', './article/image2.jpg', '2026-06-01', 1, NULL),
(8, 'Classement de mi-saison', 'Les organisateurs publient le classement officiel après les premières manches du championnat.', './article/image3.jpg', '2026-06-20', 1, NULL),
(9, 'Grand Prix de Fianarantsoa', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ex.', './article/6a33c57d43092_image4.jpg', '2026-07-12', 1, NULL),
(10, 'Finale du championnat', 'La grande finale du championnat national a couronné le pilote le plus régulier de la saison.', './article/image5.jpg', '2026-11-30', 1, 6),
(32, 'Lorem Ipsum', 'Le championnat national promet des courses spectaculaires avec la participation de plus de cinquante pilotes.', './article/6a33c597f08ff_6a33c29ecbd65_Tanjaka.jpeg', '2026-06-18', 1, NULL),
(34, 'Grand Prix de Fianarantsoa', 'Le championnat national promet des courses spectaculaires avec la participation de plus de cinquante pilotes.', './article/6a33c554cb2d1_image1.jpg', '2026-06-18', 1, NULL),
(35, 'Lorem jhu', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ex.1', './article/6a3515ec58e84_169 - ROG Wallpaper Challenge - The Energetic in the Dark - 1080P.jpg', '2026-06-19', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(1, 'Moteurs'),
(2, 'Pneus'),
(3, 'Freins'),
(4, 'Casques'),
(5, 'Combinaisons'),
(6, 'Volants'),
(7, 'Châssis'),
(8, 'Chaînes'),
(9, 'Radiateurs'),
(10, 'Accessoires');

-- --------------------------------------------------------

--
-- Structure de la table `champion`
--

CREATE TABLE `champion` (
  `id_champion` int(11) NOT NULL,
  `nom_champion` varchar(100) NOT NULL,
  `prenom_champion` varchar(100) NOT NULL,
  `image_champion` varchar(255) DEFAULT NULL,
  `nationalite` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `desc_champion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `champion`
--

INSERT INTO `champion` (`id_champion`, `nom_champion`, `prenom_champion`, `image_champion`, `nationalite`, `age`, `desc_champion`) VALUES
(1, 'RAKOTOARISOA', 'Tanjaka', 'Tanjaka.jpeg', 'Malagasy', 24, 'Champion national de karting ayant remporté plusieurs Grands Prix.Champion national de karting ayant remporté plusieurs Grands Prix.Champion national de karting ayant remporté plusieurs Grands Prix.Champion national de karting ayant remporté plusieurs Grands Prix.Champion national de karting ayant remporté plusieurs Grands Prix.');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `date_course` date DEFAULT NULL,
  `desc_course` text DEFAULT NULL,
  `lieux` varchar(30) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id_course`, `titre`, `date_course`, `desc_course`, `lieux`, `image`) VALUES
(1, 'Ouverture Saison Karting', '2026-01-12', 'Lancement officiel de la saison de karting.', 'Antananarivo', './event/event1.jpg'),
(2, 'GP Antananarivo', '2026-02-08', 'Grande compétition régionale de karting.', 'Antananarivo', './event/event2.jpg'),
(3, 'GP Toamasina', '2026-02-22', 'Course officielle organisée sur circuit urbain.', 'Toamasina', './event/event3.jpg'),
(4, 'Championnat Junior', '2026-03-07', 'Compétition réservée aux jeunes pilotes.', 'Antsirabe', './event/event4.jpg'),
(5, 'GP Fianarantsoa', '2026-03-21', 'Grand prix interrégional de karting.', 'Fianarantsoa', './event/event1.jpg'),
(6, 'Coupe Nationale', '2026-04-11', 'Tournoi national regroupant plusieurs clubs.', 'Mahajanga', './event/event2.jpg'),
(7, 'GP Mahajanga', '2026-04-25', 'Compétition officielle de vitesse.', 'Mahajanga', './event/event3.jpg'),
(8, 'Championnat Senior', '2026-05-09', 'Championnat réservé aux pilotes seniors.', 'Antananarivo', './event/event4.jpg'),
(9, 'GP Antsirabe', '2026-05-23', 'Grande compétition nationale.', 'Antsirabe', './event/event1.jpg'),
(10, 'Grand Prix Tamatave', '2026-06-06', 'Course régionale de haut niveau.', 'Tamatave', './event/event2.jpg'),
(11, 'Tournoi Karting Est', '2026-06-20', 'Compétition des meilleurs clubs de l’est.', 'Toamasina', './event/event3.jpg'),
(12, 'GP Diego Suarez', '2026-07-11', 'Grand prix du nord de Madagascar.', 'Diego Suarez', './event/event4.jpg'),
(13, 'Championnat National', '2026-07-25', 'Championnat principal de la saison.', 'Antananarivo', './event/event4.jpg'),
(14, 'GP Tuléar', '2026-08-08', 'Compétition officielle sur piste professionnelle.', 'Tuléar', './event/event1.jpg'),
(15, 'Compétition Interclubs', '2026-08-29', 'Affrontement entre plusieurs clubs nationaux.', 'Fianarantsoa', './event/event2.jpg'),
(16, 'GP Nosy Be', '2026-09-12', 'Grand prix spécial organisé à Nosy Be.', 'Nosy Be', './event/event3.jpg'),
(17, 'Karting Challenge', '2026-09-26', 'Défi national des meilleurs pilotes.', 'Antsirabe', './event/event4.jpg'),
(18, 'Semi Finale Nationale', '2026-10-10', 'Sélection des finalistes du championnat.', 'Antananarivo', './event/event1.jpg'),
(19, 'Finale Championnat', '2026-11-07', 'Grande finale nationale de karting.', 'Antananarivo', './event/event2.jpg'),
(20, 'Cérémonie des Champions', '2026-12-05', 'Remise des trophées et clôture de saison.', 'Antananarivo', './event/event3.jpg'),
(36, 'titre xxxx', '2026-06-18', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, porro?', 'Tamataves', './event/6a33c76dc3f19_169 - ROG Wallpaper Challenge - The Energetic in the Dark - 1080P.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(30) NOT NULL,
  `desc_produit` text DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image_produit` varchar(100) DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `desc_produit`, `prix`, `stock`, `image_produit`, `id_cat`) VALUES
(11, 'Moteur Rotax Max', 'Moteur haute performance pour compétition karting.', 3500000.00, 5, './moteurs/image1.jpg', 1),
(12, 'Pneu Slick Vega', 'Pneu professionnel avec forte adhérence.', 250000.00, 20, './pneus/image1.jpg', 2),
(13, 'Disque de frein Racing', 'Système de freinage renforcé pour circuit.', 180000.00, 12, './freins/image1.jpg', 3),
(14, 'Casque LS2 Karting', 'Casque homologué FIA ultra léger.', 450000.00, 8, './casques/image1.jpg', 4),
(15, 'Combinaison Sparco', 'Combinaison résistante pour pilote professionnel.', 650000.00, 6, './combinaisons/image1.jpg', 5),
(16, 'Volant OMP Racing', 'Volant ergonomique haute précision.', 320000.00, 10, './volants/image1.jpg', 6),
(17, 'Châssis CRG', 'Châssis professionnel pour kart de compétition.', 4200000.00, 2, './chassis/image1.jpg', 7),
(18, 'Chaîne DID', 'Chaîne renforcée haute résistance.', 95000.00, 15, './chaines/image1.jpg', 8),
(19, 'Radiateur Aluminium', 'Radiateur optimisé pour refroidissement moteur.', 280000.00, 7, './radiateurs/image1.jpg', 9),
(20, 'Gants Racing', 'Gants antidérapants pour pilote karting.', 85000.00, 18, './accessoires/image1.jpg', 10);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(30) NOT NULL,
  `prenom_user` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom_user`, `prenom_user`, `email`, `password`) VALUES
(1, 'admin', 'pro', 'admin@gmail.com', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_course` (`id_course`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `champion`
--
ALTER TABLE `champion`
  ADD PRIMARY KEY (`id_champion`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `champion`
--
ALTER TABLE `champion`
  MODIFY `id_champion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
