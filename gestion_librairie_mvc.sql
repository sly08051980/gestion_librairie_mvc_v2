-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 jan. 2024 à 16:39
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_librairie_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

CREATE TABLE `commander` (
  `id_commande` int(11) NOT NULL,
  `Id_Livre` int(11) NOT NULL,
  `Id_fournisseur` int(11) NOT NULL,
  `Date_achat` date NOT NULL,
  `Prix_achat` decimal(6,2) NOT NULL,
  `Nbr_exemplaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `commander`
--

INSERT INTO `commander` (`id_commande`, `Id_Livre`, `Id_fournisseur`, `Date_achat`, `Prix_achat`, `Nbr_exemplaires`) VALUES
(1, 5, 8, '2021-08-12', 15.50, 3),
(3, 14, 4, '2021-08-12', 7.80, 1),
(4, 18, 7, '2021-08-12', 21.50, 2),
(5, 10, 11, '2021-08-12', 12.25, 1),
(8, 23, 5, '2021-08-12', 7.90, 1);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `Id_fournisseur` int(11) NOT NULL,
  `Code_fournisseur` varchar(50) NOT NULL COMMENT 'Le code du fournisseur',
  `Raison_sociale` varchar(50) NOT NULL COMMENT 'Nom de la compagnie du fournisseur',
  `Rue_fournisseur` varchar(100) DEFAULT NULL COMMENT 'Rue du fournisseur',
  `Code_postal` varchar(50) DEFAULT NULL COMMENT 'Code postal du fournisseur',
  `Localite` varchar(100) DEFAULT NULL COMMENT 'Localité du fournisseur',
  `Pays` varchar(100) DEFAULT NULL COMMENT 'Pays du fournisseur',
  `Tel_fournisseur` varchar(50) DEFAULT NULL COMMENT 'téléphone du fournisseur',
  `Url_fournisseur` varchar(100) DEFAULT NULL COMMENT 'Adresse du site Web du fournisseur',
  `Email_fournisseur` varchar(50) DEFAULT NULL COMMENT 'Email du fournisseur',
  `Fax_fournisseur` varchar(50) DEFAULT NULL COMMENT 'Fax du fournisseur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`Id_fournisseur`, `Code_fournisseur`, `Raison_sociale`, `Rue_fournisseur`, `Code_postal`, `Localite`, `Pays`, `Tel_fournisseur`, `Url_fournisseur`, `Email_fournisseur`, `Fax_fournisseur`) VALUES
(1, 'ACT73', 'ActuSF', '45 CHE DU PENEY', '73000', 'Chambéry', 'France', NULL, 'www.actusf.com', 'jerome.vincent@actusf.com ', NULL),
(2, 'AU30', 'Au Diable Vauvert', 'La Laune', '30600 ', 'VAUVERT', 'France', '0466731656', 'https://audiable.com/', NULL, '0466731657'),
(3, 'BET75', 'Beta Publisher', '11 Rue Blanche', '75009', 'Paris', 'France', NULL, 'https://www.betapublisher.com/', 'team@betapublisher.com', NULL),
(4, 'ANO75', 'Anovi', '18, rue Viala', '75015 ', 'Paris', 'France', '0187200075', 'https://anovi.fr/', 'contact@anovi.fr', '0187200075'),
(5, 'ACT13', 'Actes Sud', 'Place Nina-Berberova', '13633', 'Arles', 'France', '0490498691', 'https://www.actes-sud.fr/', 'hello@actes-sud.fr', '0490969525'),
(6, 'EDI92', 'Éditions du Jasmin', '4 rue Valiton', '92110', 'Clichy', 'France', '0979355494', 'https://editions-du-jasmin.com/', 'blabla@editions-du-jasmin.com', '0979355496'),
(7, 'JAC91', 'Jacket', 'Avenue Boiserie', '91180', 'Saint-germain-lès-arpajon', 'France', '0991188236', 'BelleJacket.com', 'belle@jacket.fr', '+330118823'),
(8, 'GEN63', 'Genia', 'Rue Ardoise Floraine', '63020', 'Aurières', 'France', '0494748596', 'Genia_Edition.com', 'Genia@lecture.com', '+3394748596'),
(9, 'URS12', 'Ursof', 'Rue Leon Fanourakis', '12000', 'Rodez', 'France', '0326154859', 'Rodez.fr', 'Rodez@edition.fr', '+332614859'),
(10, 'SCR75', 'Scrineo', '3 rue Française', '75001', 'Paris', 'France', '0182104616', 'https://www.scrineo.fr/', 'scrineo@scrineo.fr', NULL),
(11, 'REB03', 'Rebelle éditions', '29 avenue des Guineberts, 03100 Montluçon', '03100', 'Montluçon', 'France', '0613829113', 'https://www.rebelleeditions.com/', 'contact@rebelleeditions.com', NULL),
(12, 'REI69', 'Reines de Coeur', '18 Rue de la Marne\r\n', '69310', 'Pierre-Bénite', 'France', '', 'https://www.reinesdecoeur.com/', 'Gaelle@reinesdecoeur.com', NULL),
(13, 'LE83', 'Le bon livre', '10 Rue de la trinité', '83400', 'Hyères', 'France', '0622153132', 'lebonlivre.fr', 'lebonlivre@mail.fr', NULL),
(14, 'LIV83', 'Livre service', '43 rue du four', '83600', 'Fréjus', 'France', ' 0366918164', 'https://livreservice.com/', 'livreservice@gmai.com', NULL),
(15, 'KIN86', 'king Livre', '54 rue de l’oiseau bleu', '86000', 'Fréjus', 'France', '0534327890', 'https://kinglivre.com/', 'kinglivre@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `Id_Livre` int(11) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Titre_livre` varchar(100) NOT NULL,
  `Theme_livre` varchar(50) NOT NULL,
  `Nbr_pages_livre` int(11) NOT NULL,
  `Format_livre` varchar(50) NOT NULL,
  `Nom_auteur` varchar(100) NOT NULL,
  `Prenom_auteur` varchar(100) NOT NULL,
  `Editeur` varchar(100) NOT NULL,
  `Annee_edition` int(11) NOT NULL,
  `Prix_vente` decimal(6,2) NOT NULL,
  `Langue_livre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`Id_Livre`, `ISBN`, `Titre_livre`, `Theme_livre`, `Nbr_pages_livre`, `Format_livre`, `Nom_auteur`, `Prenom_auteur`, `Editeur`, `Annee_edition`, `Prix_vente`, `Langue_livre`) VALUES
(1, '‎979-1028114312', 'Personne ne sort d\'ici vivant', 'Horreur', 624, 'Poche', 'Neville', 'Adam', 'Bragelonne', 2021, 7.90, '‎Français'),
(2, '979-1095383284', 'La légende de Spellman', 'Horreur', 130, 'Broché', 'Dennisson', 'Florian', 'Chambre Noire', 2019, 8.99, 'Français'),
(3, '979-1092640007', 'Sanatorium', 'Fantastique', 136, 'Broché', 'Zaïre', 'Johanna', 'AFNIL', 2018, 10.55, 'Français'),
(4, '978-1657506831', 'Les contes fantastiques du valenciennois L\'intégrale: Volumes I et II', 'Fantastique', 411, 'Broché', 'Bosio', 'Bertrand', '‎Indépendant', 2020, 17.92, 'Français'),
(5, '978-2072895098', 'L’anomalie - Prix Goncourt 2020', 'Science-fiction', 336, 'Broché', 'Le Tellier', 'Hervé', 'Gallimard', 2020, 20.00, 'Français'),
(7, '978-2072962498', 'Ca ira mieux demain', 'CINÉMA', 250, 'Poche', 'Drucker', 'Michel ', 'R. Laffont', 2019, 21.00, 'Anglais'),
(8, '978-9571542364', 'Ailleurs', 'ECRITS SUR LE CINÉMA', 300, ' Poche', 'Depardieu', 'Gérard', 'Cherche Midi', 2020, 19.00, 'Française'),
(9, '978-9671256417', 'Les conquérants de l\'inutile', 'RÉCITS DE MONTAGNE', 400, 'Poche', 'Terray', 'Lionel ', 'Paulsen', 2017, 22.00, 'Française'),
(10, '978-8247117511', 'The white darkness', 'BIOGRAPHIES HISTORIQUES', 387, 'Poche', 'Grann', 'David ', 'Ed. du sous-sol', 2021, 16.00, 'ANGLAIS'),
(11, '978-2070360024', 'L\'étranger', 'Philosophique', 192, '11.20x18cm', 'Camus', 'Albert', 'Gallimard', 1972, 6.30, 'Français'),
(12, '978-2811239282', 'Orgueil et préjugés', 'Romance', 528, '13x20cm', 'Austen', 'Jane', 'Milady', 2017, 16.90, 'Français'),
(13, '978-2070408507', 'Le Petit Prince', 'Philosophique', 104, '11x15cm', 'De Saint-Exupéry', 'Antoine', 'Gallimard', 1999, 7.00, 'Français'),
(14, '978-2707303143', 'Moderato Cantabile', 'Philosophique', 174, '11.20x18cm', 'Duras', 'Marguerite', 'Minuit', 1980, 6.50, 'Français'),
(15, '978-2302048474', 'Alice au pays des merveilles', 'Conte', 290, '20x28cm', 'Caroll', 'Lewis', 'Soleil', 2015, 29.95, 'Français'),
(16, '978-3662435297', 'Comme un million de papillon noir', 'Enfant', 32, '26.8x21.6x9', 'BRUN', 'Barbara', 'Cambourakis', 2021, 14.00, 'Français'),
(17, '978-3300659425', 'Les arbres, entre visible et invisible', 'Nature', 288, '20.5x14.0x2.2', 'ZURCHER', 'Ernst', 'Acte Sud', 2021, 29.00, 'Français'),
(18, '978-0170689694', 'Comment mettre un homme dans votre poche', 'Sexualité', 160, '22.5x15.5x1.6', 'PIETTE', 'Yann', 'Hachette', 2019, 14.00, 'Français'),
(19, '978-3649046375', 'Osez faire l\'amour partout sauf dans un lit', 'Sexualité', 160, '17.6x11.1x1.1', 'DANNAM', 'Marc', 'La musardine', 2018, 8.00, 'Français'),
(20, '978-0230024307', 'Préparer son accouchement avec la sophrologie', 'Bébé', 62, '16.5x14.5', 'TORTOCHOT', 'Chantal', 'Ellébore', 2021, 19.00, 'Français'),
(21, '978-li21li2115', 'Hunger Games', 'Aventure', 800, '', 'Lavallée', 'Achile', 'Talon', 2014, 12.99, 'Français'),
(22, '978-li21li2116', 'Les tortues pas ninja', 'cartoon', 200, '', 'Splinter', 'Christian', 'Dior', 2010, 38.99, 'Français'),
(23, '978-li21li2117', 'Apprendre à développer avec JavaScript', 'Programmation', 560, '', 'Vigouroux', 'Christian', 'Eni', 2000, 28.99, 'Français'),
(24, '978-li21li2118', 'La fabuleuse histoire de David Guetta', 'Legende', 1001, '', 'Djsnake', 'Eric', 'Glozere', 2021, 68.99, 'Français'),
(25, '978-li21li2119', 'Les chats', 'Animaux', 100, '', 'Vigoureux', 'Christianne', 'Enigme', 2000, 18.99, 'Anglais');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `Date` date NOT NULL,
  `MdP` varchar(32) DEFAULT NULL,
  `Statut` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `nom`, `prenom`, `age`, `Date`, `MdP`, `Statut`, `email`) VALUES
(1, 'Dupont', 'Jean', 32, '2021-08-13', '25d55ad283aa400af464c76d713c07ad', 'Utilisateur', 'dupont.jean@gmail.com'),
(29, 'HILALA', 'Sami', 60, '2021-08-13', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 'hilala.sami@gmail.com'),
(31, 'Pluton', 'Jeanne', 87, '2021-08-13', '25d55ad283aa400af464c76d713c07ad', 'Utilisateur', ''),
(32, 'Plouf', 'Eaudevie', 16, '2021-08-13', '64f847250ae222f2fd892bc6810b294f', 'Utilisateur', ''),
(33, 'Toutulds', 'Klousa', 25, '2021-08-13', '25d55ad283aa400af464c76d713c07ad', 'Utilisateur', ''),
(34, 'Abbaci', 'Yanis', 22, '2021-08-13', '869400f8978e2c5905d3aef6577f93e3', 'Utilisateur', ''),
(35, 'Delacroix', 'Anne', 32, '2021-08-13', '25d55ad283aa400af464c76d713c07ad', 'Utilisateur', ''),
(52, 'regnier', 'SYLVAIN', 20, '2024-01-15', '123', NULL, ''),
(53, 'az', 'az', 2, '2024-01-15', '123', NULL, ''),
(54, 'toto', 'toto', 20, '2024-01-15', '12', NULL, ''),
(55, '', '', 0, '2024-01-15', '', NULL, ''),
(56, 'pikachu', 'toto', 20, '2024-01-15', '12', NULL, ''),
(57, 'regnier', 'SYLVAIN', 20, '2024-01-16', '1234', NULL, ''),
(58, 'REGNIER', 'SYLVAIN', 20, '2024-01-16', '1234', NULL, 'regnier.sylvain@yahoo.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
