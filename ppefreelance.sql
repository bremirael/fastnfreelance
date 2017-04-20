-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Décembre 2016 à 16:38
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppefreelance`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_11_25_115327_create_projets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_projet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `budget` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cahiercharges` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publier` tinyint(1) DEFAULT NULL,
  `validation_admin` tinyint(1) NOT NULL DEFAULT '0',
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `type_projet`, `titre`, `description`, `budget`, `cahiercharges`, `publier`, `validation_admin`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'E-Commerce', 'Création forum wordpress + plugin ecommerce', 'Bonjour, \r\nJe dispose d’un nom de domaine et d’un hébergement incluant des thèmes wordpress. \r\nJe voudrais faire créer un site où il serait possible d’afficher en même un forum sur la moitié haute du site et un espace ecommerce sur la partie basse. \r\nLe forum devra offrir toutes les fonctionnalités habituelles sans être trop lourd. bbPress me paraît être une bonne solution. \r\nLa partie e-commerce devra être gérée par un plugin qui affiche des produits en affiliation. Et offre la quasi totalité des fonctionnalités d’une boutique en ligne. Je dispose déjà de ce plugin. \r\nLa page sujet d\'un article devra comprendre l’affichage de deux zone : Une zone forum et une zone e-commerce. \r\nLe tout devra être responsive. \r\nLe nom du plugin vous sera communiqué sur demande. \r\nMerci d’avance de vos offres.', '500 - 750€', NULL, NULL, 0, NULL, '2016-12-05 12:10:22', '2016-12-05 12:10:22');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_freelancer` tinyint(1) NOT NULL DEFAULT '0',
  `is_societe` tinyint(1) NOT NULL DEFAULT '0',
  `prenom` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `competence` text COLLATE utf8_unicode_ci,
  `date_naissance` date DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `raison_sociale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secteur_activite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_employes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inf_complementaire` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code_post` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `is_freelancer`, `is_societe`, `prenom`, `nom`, `profession`, `competence`, `date_naissance`, `bio`, `cv`, `raison_sociale`, `secteur_activite`, `nombre_employes`, `inf_complementaire`, `ville`, `adresse`, `code_post`, `photo`, `tel`) VALUES
(1, 'ryuuk06@hotmail.fr', '$2y$10$7qfs4ldrUf5NTFRLeXFRku/W1daBkhUgbapYq34HjoUT7mMed/4vK', '2r4ePkwajSLCudW0R1XSrYjJsYYHHTxuEjp41CsmAGzZqawu3dYg1RoBjBgW', '2016-12-05 11:44:40', '2016-12-05 13:49:47', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'bryan.gaudet@ufip.eu', '$2y$10$JwNgKFHV5CXHcP4N6xes8eYS.RRfZo4ZBS/3uztvT4m53YmAsy1oO', 'AI9RAlq3dHyY2KxLaEmj44GMJL70DozCizTtAcSaVUHZRmmvnhEcAIfEgy5q', '2016-12-05 14:43:55', '2016-12-05 15:07:14', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Brydet', 'Vente de Gadgets dentaires', '500 employés', 'PDG de cette grosse firme fraîchement introduite au CAC 40, je recherche du sang neuf pour améliorer le domaine informatique de mon entreprise de Grillzs personnalisables', 'Nice', '4 rue georges', NULL, 'img/grillz.jpg', '0647474747');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
