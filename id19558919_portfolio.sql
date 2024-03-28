-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 13 mars 2024 à 21:05
-- Version du serveur : 10.5.20-MariaDB
-- Version de PHP : 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id19558919_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `description`
--

CREATE TABLE `description` (
  `idDescription` int(11) NOT NULL,
  `dateDebDescription` varchar(11) DEFAULT NULL,
  `dateFinDescription` varchar(11) DEFAULT NULL,
  `descDescription` varchar(4000) DEFAULT NULL,
  `butDescription` varchar(4000) DEFAULT NULL,
  `skillDescription` varchar(200) DEFAULT NULL,
  `lienGitDescription` varchar(200) DEFAULT NULL,
  `idProjet` int(11) DEFAULT NULL,
  `idEquipe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `description`
--

INSERT INTO `description` (`idDescription`, `dateDebDescription`, `dateFinDescription`, `descDescription`, `butDescription`, `skillDescription`, `lienGitDescription`, `idProjet`, `idEquipe`) VALUES
(1, '06/09/2022', '20/09/2022', 'Portfolio qui a commencé à être créé en classe principalement le html et le css, et finie de mon temps personnelle, notamment la création de la base de donnée et sa mise en place puis, le php pour utilisé la base de donnée, pour rendre site dynamique. Reste encore quelques détails côtés front-end à finir comme l\'affichage d\'image.', 'Créer un portfolio pour présenter ses projets, et à présenter en fin de seconde année. ', NULL, NULL, 1, 1),
(2, '01/10/2022', '18/12/2022', 'Créer un site dans le but de simuler une entreprise qui vend des formations, pendant le projet une maquette a été faites pour avoir une idée du résultat et des couleurs, et donc ensuite le html et le css fait pour avoir une base, pour ensuite remplacer tout le contenu du html dans une base de donnée pour rendre tout le site interactif.', 'Créer un site concret pour mettre en pratique php, pour la première fois.', NULL, NULL, 2, 2),
(3, '08/11/2022', '15/11/2022', 'Créer un programme pour chercher une adresse IP d\'un fichier DNS à l\'aide du nom de domaine, tous sa pour simuler un DNS-poisoning.', 'Simuler un DNS-poisoning.', NULL, NULL, 3, 1),
(4, '18/12/2022', 'En cours', 'Mise en place d\'un forum qui contient les fonctionnalité de s\'inscrire et se connecter au forum, lire et pouvoir créer des postes quand on est connecté et en fonction de sont rang, pouvoir supprimé des postes et changer le rang des membres, toutes les données sont stocké dans une base de donnée. ', 'Approfondir ses connaissances des base de donnée et des requêtes, apprendre à mettre en place un système d\'inscription sécurisé, et à mettre en place des cookies de session.', NULL, NULL, 4, 3),
(5, '08/09/2022', '02/02/2023', 'Une série d\'exercice d\'un total de 23 exercices, fait sur visual studio avec en modèle de projet wpf, dans la série d\'exercice, il y a différents exercices avec divers algorithme pour apprendre à coder en C#, sur wpf, et apprendre à connaitre les composants et comment les utiliser, comme on peux le voir avec les exemples ci-dessus.', 'Se familialiser avec c#, visual studio, et wpf.', 'c#, IDE visual studio, modèle wpf, xaml', NULL, 5, 1),
(6, '19/01/2023', '06/04/2023', 'Projet fait en c# sur visual studio en temps qu\'application wpf, qui est destiné à l\'utilisation de journaliste ou personne dans ce domaine pour gérer ses contrats et  trucs dans le genre. Toutes les données proviennent d\'une base de données et le projet est fait avec plusieurs classe.', 'Apprendre a connecté une base de données en c#, apprendre a faire des classe dans c#, apprendre à utiliser les classes avec une base de données ', NULL, NULL, 6, 1),
(7, '06/04/2023', '15/05/2023', 'Faire une application en c# sur visual studio en temps qu\'application wpf, qui propose des formes et pour gagner des point il faut rentrer le bon périmètre et bonne surface de la figure.', 'Apprendre à utiliser les classes avec l\'héritage, apprendre à faire une interface ergonomique', NULL, NULL, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `descriptionimage`
--

CREATE TABLE `descriptionimage` (
  `idDescription` int(11) DEFAULT NULL,
  `idImage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `descriptionimage`
--

INSERT INTO `descriptionimage` (`idDescription`, `idImage`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(3, 5),
(3, 6),
(3, 7),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(4, 17),
(4, 18),
(5, 19),
(6, 23),
(6, 24),
(6, 25),
(7, 20),
(7, 21),
(7, 22);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `idEquipe` int(11) NOT NULL,
  `tailleEquipe` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idEquipe`, `tailleEquipe`) VALUES
(1, 'Seul'),
(2, 'Deux'),
(3, 'Trois');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `idImage` int(11) NOT NULL,
  `nomImage` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`idImage`, `nomImage`) VALUES
(1, 'CONCEPTEURPortfolio'),
(2, 'CONCEPTIONPortfolio'),
(3, 'siteDeuxPortfolio'),
(4, 'siteUnPortfolio'),
(5, 'siteDeuxPoisoning'),
(6, 'siteTroisPoisoning'),
(7, 'siteUnPoisoning'),
(8, 'maquetteDeuxForum'),
(9, 'maquetteUnForum'),
(10, 'BDD_ConcepteurFormation'),
(11, 'maquetteFormation'),
(12, 'siteCinqFormation'),
(13, 'siteDeuxFormation'),
(14, 'siteQuatreFormation'),
(15, 'siteTroisFormation'),
(16, 'siteUnFormation'),
(17, 'maquetteUnForum'),
(18, 'maquetteDeuxForum'),
(19, 'exercice21'),
(20, 'GeometrieUn'),
(21, 'GeometrieDeux'),
(22, 'GeometrieTrois'),
(23, 'DigitalUn'),
(24, 'DigitalDeux'),
(25, 'DigitalTrois');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `idProjet` int(11) NOT NULL,
  `nomProjet` varchar(30) DEFAULT NULL,
  `descProjet` varchar(400) DEFAULT NULL,
  `imgProjet` varchar(30) DEFAULT NULL,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`idProjet`, `nomProjet`, `descProjet`, `imgProjet`, `idType`) VALUES
(1, 'Portfolio', 'Création de mon premier site qui est le portfolio, pour apprendre html et css avec un projet concret.', 'portfolio', 1),
(2, 'Formation', 'Création d\'un site qui propose des formations, pour débuter dans la manipulations des bases de données avec php, sur l\'interface phpMyAdmin.', 'formation', 1),
(3, 'DNS-poisoning', 'Site créé dans l\'apprentissage de la cyber-sécurité et donc essayé de modifier un fichier texte qui sert de fichier DNS, simulation d\'un DNS poisoning.', 'poisoning', 1),
(4, 'Forum', 'Création d\'un forum qui propose les matières du BTS SIO, pour maîtriser à un plus haut niveau les bases de données à manipuler avec php, et approfondir php.', 'forum', 1),
(5, 'Exercice-wpf', 'Une série d\'exercice fait sur visual studio avec en modèle de projet wpf, dans la série d\'exercice, il y a différents exercices avec divers algorithme pour apprendre à coder en C#, sur wpf, et apprendre à connaitre les composants et comment les utiliser.', 'exercice-wpf', 3),
(6, 'Digital-Physhing', 'Un projet dans le but de pouvoir gérer les contrats, articles... ', 'digital', 1),
(7, 'Geometrie', 'Projet qui fait apparaitre des figures et il faut rentrer les bon périmètre et surface.', 'geometrie', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `nomType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`idType`, `nomType`) VALUES
(1, 'Projet Ecole'),
(2, 'Projet Personnelle'),
(3, 'Exercices');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`idDescription`),
  ADD KEY `idEquipe` (`idEquipe`),
  ADD KEY `idProjet` (`idProjet`),
  ADD KEY `idDescription` (`idDescription`);

--
-- Index pour la table `descriptionimage`
--
ALTER TABLE `descriptionimage`
  ADD KEY `idDescription` (`idDescription`),
  ADD KEY `idImage` (`idImage`),
  ADD KEY `idImage_2` (`idImage`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`idEquipe`),
  ADD KEY `idEquipe` (`idEquipe`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `idImage` (`idImage`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`idProjet`),
  ADD KEY `idType` (`idType`),
  ADD KEY `idProjet` (`idProjet`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`),
  ADD KEY `idType` (`idType`),
  ADD KEY `idType_2` (`idType`),
  ADD KEY `idType_3` (`idType`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `FK_EQUIPE_DESCRIPTION` FOREIGN KEY (`idEquipe`) REFERENCES `equipe` (`idEquipe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PROJET_DESCRIPTION` FOREIGN KEY (`idProjet`) REFERENCES `projet` (`idProjet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `descriptionimage`
--
ALTER TABLE `descriptionimage`
  ADD CONSTRAINT `FK_DESCRIPTION_DESCRIPTIONIMAGE` FOREIGN KEY (`idImage`) REFERENCES `image` (`idImage`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_IMAGE_DESCRIPTIONIMAGE` FOREIGN KEY (`idDescription`) REFERENCES `description` (`idDescription`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_TYPE_PROJET` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
