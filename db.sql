-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour base-de-donnees-clem
CREATE DATABASE IF NOT EXISTS `base-de-donnees-clem` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `base-de-donnees-clem`;

-- Listage de la structure de la table base-de-donnees-clem. experiences
CREATE TABLE IF NOT EXISTS `experiences` (
  `exp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `entreprise` varchar(100) NOT NULL,
  `type` varchar(1000) NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table base-de-donnees-clem.experiences : ~0 rows (environ)
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
INSERT INTO `experiences` (`exp_id`, `user_id`, `entreprise`, `type`) VALUES
	(1, 1, 'AirBus Chain', 'Job d\'Ete');
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;

-- Listage de la structure de la table base-de-donnees-clem. loisirs
CREATE TABLE IF NOT EXISTS `loisirs` (
  `loisir_id` int(11) NOT NULL,
  `loisir` varchar(100) NOT NULL,
  PRIMARY KEY (`loisir_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table base-de-donnees-clem.loisirs : ~1 rows (environ)
/*!40000 ALTER TABLE `loisirs` DISABLE KEYS */;
INSERT INTO `loisirs` (`loisir_id`, `loisir`) VALUES
	(1, 'Football Américain');
/*!40000 ALTER TABLE `loisirs` ENABLE KEYS */;

-- Listage de la structure de la table base-de-donnees-clem. personnel
CREATE TABLE IF NOT EXISTS `personnel` (
  `id` int(1) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table base-de-donnees-clem.personnel : ~1 rows (environ)
/*!40000 ALTER TABLE `personnel` DISABLE KEYS */;
INSERT INTO `personnel` (`id`, `prenom`, `nom`, `age`) VALUES
	(1, 'Clement', 'OSCHE', 666);
/*!40000 ALTER TABLE `personnel` ENABLE KEYS */;

-- Listage de la structure de la table base-de-donnees-clem. school
CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `etablissement` varchar(100) NOT NULL,
  `diplome` varchar(100) NOT NULL,
  `debut` int(11) NOT NULL,
  `fin` int(11) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table base-de-donnees-clem.school : ~1 rows (environ)
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
INSERT INTO `school` (`school_id`, `user_id`, `etablissement`, `diplome`, `debut`, `fin`) VALUES
	(2, 1, 'YNOV Toulouse', 'Bacchelor Informatique', 2019, 2024);
/*!40000 ALTER TABLE `school` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
