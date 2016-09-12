-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 12 Septembre 2016 à 20:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `remb`
--

-- --------------------------------------------------------

--
-- Structure de la table `website_actualite`
--

CREATE TABLE IF NOT EXISTS `website_actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `website_actualite`
--

INSERT INTO `website_actualite` (`id`, `titre`, `description`, `date`, `img`) VALUES
(1, 'Popuur gautilre', 'populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.', '0000-00-00 00:00:00', 'img1.jpg'),
(2, 'Phoenice Celsen ', 'populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.', '0000-00-00 00:00:00', 'img2.jpg'),
(3, 'Mpuur gautilre', 'populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.', '0000-00-00 00:00:00', 'img3.jpg'),
(4, 'Rulsatae maiestatis', 'Pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.', '0000-00-00 00:00:00', 'img1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `website_agenda`
--

CREATE TABLE IF NOT EXISTS `website_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `dateDeb` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `website_agenda`
--

INSERT INTO `website_agenda` (`id`, `titre`, `auteur`, `dateDeb`, `dateFin`) VALUES
(1, 'Journée culturel', '', '2016-09-07 06:15:00', '2016-09-15 16:00:00'),
(2, 'Sortie sénat', '', '2016-09-20 12:18:00', '2016-09-23 16:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `website_association`
--

CREATE TABLE IF NOT EXISTS `website_association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `presentation` text COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `equipeText` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `website_association`
--

INSERT INTO `website_association` (`id`, `presentation`, `adresse`, `ville`, `pays`, `resume`, `equipeText`) VALUES
(1, '\r\n\r\n<p>Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis c ontra rem publicam se amici causa fecisse fateatur. Etenim eo loco, Fanni et Scaevola, locati sumus ut nos longe prospicere oporteat futuros casus rei publicae. Deflexit iam ali quantum de spatio curriculoque consuetudo maiorum.\r\n</p>\r\n<p>Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili.\r\n</p>', '', '', '', ' Le REMB , l''association qui vous accueille, vous aide et vous accompagne dans votre vie d''étudiant.\r\n\r\nPhoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum. ', '<p>Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest. ');

-- --------------------------------------------------------

--
-- Structure de la table `website_commentaire`
--

CREATE TABLE IF NOT EXISTS `website_commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(11) DEFAULT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_forum` (`id_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `website_droit`
--

CREATE TABLE IF NOT EXISTS `website_droit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `website_droit`
--

INSERT INTO `website_droit` (`id`, `libelle`) VALUES
(1, 'ROLE_ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `website_etat_offre`
--

CREATE TABLE IF NOT EXISTS `website_etat_offre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `website_forum`
--

CREATE TABLE IF NOT EXISTS `website_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` int(11) DEFAULT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auteur` (`auteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `website_image`
--

CREATE TABLE IF NOT EXISTS `website_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pole_id` int(11) DEFAULT NULL,
  `realisation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9257B493419C3385` (`pole_id`),
  KEY `IDX_9257B493B685E551` (`realisation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `website_image`
--

INSERT INTO `website_image` (`id`, `url`, `pole_id`, `realisation_id`) VALUES
(1, 'tresorerie_partenariat/img2.jpg', 1, NULL),
(2, 'tresorerie_partenariat/img1.jpg', 1, NULL),
(3, 'administration/img2.jpg', 2, NULL),
(4, 'administration/img5.jpg', 2, NULL),
(5, 'educatif/img1.jpg', 3, NULL),
(6, 'educatif/img2.jpg', 3, NULL),
(7, 'culturel/img1.jpg', 4, NULL),
(8, 'culturel/img2.jpg', 4, NULL),
(9, 'culturel/img3.jpg', 4, NULL),
(10, 'culturel/img4.jpg', 4, NULL),
(13, 'actualite/prep_bachelier_mayotte1.jpg', NULL, 1),
(14, 'actualite/prep_bachelier_mayotte2.jpg', NULL, 1),
(15, 'groupe/img4.jpg', NULL, 2),
(16, 'groupe/img2.jpg', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `website_offre`
--

CREATE TABLE IF NOT EXISTS `website_offre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_offre` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  `titre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `date_publication` datetime NOT NULL,
  `societe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mission` text COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type_contrat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remuneration` double NOT NULL,
  `profil` text COLLATE utf8_unicode_ci NOT NULL,
  `nom_recruteur` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email_recruteur` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `tel_recruteur` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modalite` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_offre` (`type_offre`),
  UNIQUE KEY `etat` (`etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `website_pole`
--

CREATE TABLE IF NOT EXISTS `website_pole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `website_pole`
--

INSERT INTO `website_pole` (`id`, `nom`, `description`) VALUES
(1, ' Pôle trésorerie et partenariat', '<p>Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili.</p>'),
(2, 'Pôle administration', '<p>Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili.illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest.</p>'),
(3, ' Pôle éducatif', '<p>Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili.</p>'),
(4, 'Pôle culturel', '<p>Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quadirimi nisi detestabili.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `website_rapport`
--

CREATE TABLE IF NOT EXISTS `website_rapport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_rapport` int(11) DEFAULT NULL,
  `titre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `date_publication` datetime NOT NULL,
  `auteur` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_rapport` (`type_rapport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `website_realisation`
--

CREATE TABLE IF NOT EXISTS `website_realisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `website_realisation`
--

INSERT INTO `website_realisation` (`id`, `titre`, `description`) VALUES
(1, ' Préparations des futurs étudiant mahorais', '<p>applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. '),
(2, 'Quam cogitatione quantum ', '<p>applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. ');

-- --------------------------------------------------------

--
-- Structure de la table `website_type_offre`
--

CREATE TABLE IF NOT EXISTS `website_type_offre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `website_type_rapport`
--

CREATE TABLE IF NOT EXISTS `website_type_rapport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `website_utilisateur`
--

CREATE TABLE IF NOT EXISTS `website_utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `droit` int(11) DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `droit` (`droit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `website_utilisateur`
--

INSERT INTO `website_utilisateur` (`id`, `droit`, `mail`, `username`, `password`, `nom`, `prenom`) VALUES
(1, 1, '', 'admin', 'AdminRemb', '', '');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `website_commentaire`
--
ALTER TABLE `website_commentaire`
  ADD CONSTRAINT `FK_2C7591356BAEFFFD` FOREIGN KEY (`id_forum`) REFERENCES `website_forum` (`id`);

--
-- Contraintes pour la table `website_forum`
--
ALTER TABLE `website_forum`
  ADD CONSTRAINT `FK_D2410E0155AB140` FOREIGN KEY (`auteur`) REFERENCES `website_utilisateur` (`id`);

--
-- Contraintes pour la table `website_image`
--
ALTER TABLE `website_image`
  ADD CONSTRAINT `FK_9257B493B685E551` FOREIGN KEY (`realisation_id`) REFERENCES `website_realisation` (`id`),
  ADD CONSTRAINT `FK_9257B493419C3385` FOREIGN KEY (`pole_id`) REFERENCES `website_pole` (`id`);

--
-- Contraintes pour la table `website_offre`
--
ALTER TABLE `website_offre`
  ADD CONSTRAINT `FK_F8EC36A355CAF762` FOREIGN KEY (`etat`) REFERENCES `website_etat_offre` (`id`),
  ADD CONSTRAINT `FK_F8EC36A3A18A0198` FOREIGN KEY (`type_offre`) REFERENCES `website_type_offre` (`id`);

--
-- Contraintes pour la table `website_rapport`
--
ALTER TABLE `website_rapport`
  ADD CONSTRAINT `FK_121ADC389615CF69` FOREIGN KEY (`type_rapport`) REFERENCES `website_type_rapport` (`id`);

--
-- Contraintes pour la table `website_utilisateur`
--
ALTER TABLE `website_utilisateur`
  ADD CONSTRAINT `FK_56999A3ACB7AA751` FOREIGN KEY (`droit`) REFERENCES `website_droit` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
