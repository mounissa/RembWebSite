-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 17 Septembre 2016 à 16:15
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
-- Structure de la table `websiteactualite`
--

CREATE TABLE IF NOT EXISTS `websiteactualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `websiteactualite`
--

INSERT INTO `websiteactualite` (`id`, `titre`, `description`, `date`, `img`) VALUES
(1, 'Popuur gautilre', '<p>populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum.<p> quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.', '2016-09-01', 'img1.jpg'),
(2, 'Phoenice Celsen ', '<p>populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.', '2016-09-06', 'img2.jpg'),
(3, 'Mpuur gautilre', '<p>populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege.<p> incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.', '2016-09-07', 'img3.jpg'),
(4, 'Rulsatae maiestatis', '<p>Pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.', '2016-09-12', 'img1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `websiteagenda`
--

CREATE TABLE IF NOT EXISTS `websiteagenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `dateDeb` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `websiteagenda`
--

INSERT INTO `websiteagenda` (`id`, `titre`, `auteur`, `dateDeb`, `dateFin`) VALUES
(1, 'Journée culturel', '', '2016-09-07 06:15:00', '2016-09-15 16:00:00'),
(2, 'Sortie sénat', '', '2016-09-20 12:18:00', '2016-09-23 16:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `websiteassociation`
--

CREATE TABLE IF NOT EXISTS `websiteassociation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `presentation` text COLLATE utf8_unicode_ci NOT NULL,
  `equipeText` text COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `websiteassociation`
--

INSERT INTO `websiteassociation` (`id`, `presentation`, `equipeText`, `adresse`, `ville`, `pays`, `resume`) VALUES
(1, '\r\n\r\n<p>Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis c ontra rem publicam se amici causa fecisse fateatur. Etenim eo loco, Fanni et Scaevola, locati sumus ut nos longe prospicere oporteat futuros casus rei publicae. Deflexit iam ali quantum de spatio curriculoque consuetudo maiorum.\r\n</p>\r\n<p>Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili.\r\n</p>', '<p>Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest. ', '', '', '', ' Le REMB , l''association qui vous accueille, vous aide et vous accompagne dans votre vie d''étudiant.\r\n\r\nPhoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum. ');

-- --------------------------------------------------------

--
-- Structure de la table `websitecommentaire`
--

CREATE TABLE IF NOT EXISTS `websitecommentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(11) DEFAULT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_forum` (`id_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `websitedroit`
--

CREATE TABLE IF NOT EXISTS `websitedroit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `websitedroit`
--

INSERT INTO `websitedroit` (`id`, `libelle`) VALUES
(1, 'ROLE_ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `websiteetatoffre`
--

CREATE TABLE IF NOT EXISTS `websiteetatoffre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `websiteforum`
--

CREATE TABLE IF NOT EXISTS `websiteforum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` int(11) DEFAULT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auteur` (`auteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `websiteimage`
--

CREATE TABLE IF NOT EXISTS `websiteimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pole_id` int(11) DEFAULT NULL,
  `realisation_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5BDCB234419C3385` (`pole_id`),
  KEY `IDX_5BDCB234B685E551` (`realisation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `websiteimage`
--

INSERT INTO `websiteimage` (`id`, `pole_id`, `realisation_id`, `url`) VALUES
(1, 1, NULL, 'tresorerie_partenariat/img2.jpg'),
(2, 1, NULL, 'tresorerie_partenariat/img1.jpg'),
(3, 2, NULL, 'administration/img2.jpg'),
(4, 2, NULL, 'administration/img5.jpg'),
(5, 3, NULL, 'educatif/img1.jpg'),
(6, 3, NULL, 'educatif/img2.jpg'),
(7, 4, NULL, 'culturel/img1.jpg'),
(8, 4, NULL, 'culturel/img2.jpg'),
(9, 4, NULL, 'culturel/img3.jpg'),
(10, 4, NULL, 'culturel/img4.jpg'),
(11, NULL, 1, 'actualite/prep_bachelier_mayotte1.jpg'),
(12, NULL, 1, 'actualite/prep_bachelier_mayotte2.jpg'),
(13, NULL, 2, 'groupe/img4.jpg'),
(14, NULL, 2, 'groupe/img2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `websiteoffre`
--

CREATE TABLE IF NOT EXISTS `websiteoffre` (
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
-- Structure de la table `websitepole`
--

CREATE TABLE IF NOT EXISTS `websitepole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `websitepole`
--

INSERT INTO `websitepole` (`id`, `nom`, `description`) VALUES
(1, ' Pôle trésorerie et partenariat', '<p>Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili.</p>'),
(2, 'Pôle administration', '<p>Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili.illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest.</p>'),
(3, ' Pôle éducatif', '<p>Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili.</p>'),
(4, 'Pôle culturel', '<p>Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quadirimi nisi detestabili.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `websiterapport`
--

CREATE TABLE IF NOT EXISTS `websiterapport` (
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
-- Structure de la table `websiterealisation`
--

CREATE TABLE IF NOT EXISTS `websiterealisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `websiterealisation`
--

INSERT INTO `websiterealisation` (`id`, `titre`, `description`) VALUES
(1, ' Préparations des futurs étudiant mahorais', '<p>applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. '),
(2, 'Quam cogitatione quantum ', '<p>applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. ');

-- --------------------------------------------------------

--
-- Structure de la table `websitetypeoffre`
--

CREATE TABLE IF NOT EXISTS `websitetypeoffre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `websitetyperapport`
--

CREATE TABLE IF NOT EXISTS `websitetyperapport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `websiteutilisateur`
--

CREATE TABLE IF NOT EXISTS `websiteutilisateur` (
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
-- Contenu de la table `websiteutilisateur`
--

INSERT INTO `websiteutilisateur` (`id`, `droit`, `mail`, `username`, `password`, `nom`, `prenom`) VALUES
(1, 1, '', 'admin', 'AdminRemb', '', '');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `websitecommentaire`
--
ALTER TABLE `websitecommentaire`
  ADD CONSTRAINT `FK_30AD9366BAEFFFD` FOREIGN KEY (`id_forum`) REFERENCES `websiteforum` (`id`);

--
-- Contraintes pour la table `websiteforum`
--
ALTER TABLE `websiteforum`
  ADD CONSTRAINT `FK_1BCA08A655AB140` FOREIGN KEY (`auteur`) REFERENCES `websiteutilisateur` (`id`);

--
-- Contraintes pour la table `websiteimage`
--
ALTER TABLE `websiteimage`
  ADD CONSTRAINT `FK_5BDCB234B685E551` FOREIGN KEY (`realisation_id`) REFERENCES `websiterealisation` (`id`),
  ADD CONSTRAINT `FK_5BDCB234419C3385` FOREIGN KEY (`pole_id`) REFERENCES `websitepole` (`id`);

--
-- Contraintes pour la table `websiteoffre`
--
ALTER TABLE `websiteoffre`
  ADD CONSTRAINT `FK_3167300455CAF762` FOREIGN KEY (`etat`) REFERENCES `websiteetatoffre` (`id`),
  ADD CONSTRAINT `FK_31673004A18A0198` FOREIGN KEY (`type_offre`) REFERENCES `websitetypeoffre` (`id`);

--
-- Contraintes pour la table `websiterapport`
--
ALTER TABLE `websiterapport`
  ADD CONSTRAINT `FK_1A3F9AA89615CF69` FOREIGN KEY (`type_rapport`) REFERENCES `websitetyperapport` (`id`);

--
-- Contraintes pour la table `websiteutilisateur`
--
ALTER TABLE `websiteutilisateur`
  ADD CONSTRAINT `FK_79E6D239CB7AA751` FOREIGN KEY (`droit`) REFERENCES `websitedroit` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
