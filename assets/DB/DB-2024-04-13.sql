-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de table fanukin. tb_abonne
CREATE TABLE IF NOT EXISTS `tb_abonne` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` text ,
  `dateabonnement` date DEFAULT NULL,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table fanukin.tb_abonne : ~0 rows (environ)

-- Listage de la structure de table fanukin. tb_admin
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text ,
  `telephone` text ,
  `email` text ,
  `avatar` text ,
  `pwd` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table fanukin.tb_admin : ~2 rows (environ)
INSERT INTO `tb_admin` (`id`, `nom`, `telephone`, `email`, `avatar`, `pwd`, `status`) VALUES
	(1, 'Willyam', '0811552166', 'ngutshinsisili@gmail.com', 'will.jpg', '4255cb842e55f2d9b11720ee9c5b87a61960d4533f352e348d77d8983585900d6091ad138b7c5145f3d05a0c807445d33ad9cdd9458ed4494ce46ce23eddf60a', 1),
	(2, 'Héritier bomfima', '0832329099', 'heritierbomfima@gmail.com', 'heritierbomfima@gmail.com_65f6bd3a66dc5.jpg', '902062dc8289d4473c026a16304e4fcae2a0260cf7edfc767a8a635ab4ce1b3db41204f9ef83cb850ca77e5bef5b358d90f8ba0568db631ff245b37bff672aaf', 0);

-- Listage de la structure de table fanukin. tb_astuce
CREATE TABLE IF NOT EXISTS `tb_astuce` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` text ,
  `secteur` int DEFAULT NULL,
  `contenue` text ,
  `admin` int DEFAULT NULL,
  `datepublish` date DEFAULT NULL,
  `avatar` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table fanukin.tb_astuce : ~0 rows (environ)

-- Listage de la structure de table fanukin. tb_avatar
CREATE TABLE IF NOT EXISTS `tb_avatar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `avatar` text ,
  `datepublish` date DEFAULT NULL,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table fanukin.tb_avatar : ~0 rows (environ)

-- Listage de la structure de table fanukin. tb_candidat
CREATE TABLE IF NOT EXISTS `tb_candidat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text ,
  `datenaiss` date DEFAULT NULL,
  `phone` text ,
  `email` text ,
  `salaire` text ,
  `avatar` text ,
  `password` text ,
  `profil` text ,
  `country` text ,
  `city` text ,
  `secteur` text ,
  `secteur_id` int NOT NULL,
  `type_candidat` tinyint DEFAULT '0',
  `status` tinyint DEFAULT '1',
  `ville` text COLLATE utf8mb4_general_ci,
  `faculte` text COLLATE utf8mb4_general_ci,
  `annee` text COLLATE utf8mb4_general_ci,
  `niveau` text COLLATE utf8mb4_general_ci,
  `adresse` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 ;

-- Listage des données de la table fanukin.tb_candidat : ~26 rows (environ)
INSERT INTO `tb_candidat` (`id`, `name`, `datenaiss`, `phone`, `email`, `salaire`, `avatar`, `password`, `profil`, `country`, `city`, `secteur`, `secteur_id`, `type_candidat`, `status`, `ville`, `faculte`, `annee`, `niveau`, `adresse`) VALUES
	(2, 'Willyam Insisili', '2005-05-02', '0970665141', 'ngutshinsisili@gmail.com', '4500$', '2_65f7947ab120a.jpeg', '4255cb842e55f2d9b11720ee9c5b87a61960d4533f352e348d77d8983585900d6091ad138b7c5145f3d05a0c807445d33ad9cdd9458ed4494ce46ce23eddf60a', 'En tant que développeur web et mobile, je suis spécialisé dans la création d&#039;expériences numériques intuitives et performantes. Maîtrisant HTML, CSS, JavaScript, et divers frameworks comme React et Flutter, je suis déterminé à concevoir des sites web réactifs et des applications mobiles innovantes, tout en assurant une expérience utilisateur exceptionnelle. Passionné par la technologie et toujours à l&#039;affût des dernières tendances, je m&#039;engage à fournir des solutions de qualité qui répondent aux besoins spécifiques de chaque projet.', NULL, NULL, 'Programmation', 2, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(3, 'Verone Mansia', NULL, '0970554352', 'verone@gmail.com', NULL, NULL, '57acf66b146e4f606413e8707ffae882a5ea0228de3455c8efffd439f6ef1a2a04eec109d2879bf64c1d7e05cdd808a14db5c5b0f6a4ccf758d0c998058b53cd', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(4, 'David Basele', NULL, '0991671553', 'davidbasele3@gmail.com', NULL, NULL, '155c59ef18df99f086ebe6bb5f514519644970d93275d90e71065764fc8be506f481626a70d8904b26846dfaa8f92d2e956cb508ba3d74aef6989a66ba05a7ef', NULL, NULL, NULL, 'Graphiste', 3, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(5, 'Bonfima osibande', NULL, '0832329099', 'spartebonfima@gmail.com', NULL, NULL, 'e2b4d0fe6e3bc0056bd09d22165d38d434cc0207977ccb679de3a67d3a7265d64227d463048815bb2b42650989585e2315331ba7affcdb610aacbc694bc9e49d', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(6, 'LEON KANUNDEY', '2000-07-13', '0853885969', 'lkanundeyi@gamil.com', NULL, NULL, 'c4bb4561810d138fb74c97b9a21c6148e6703fcbfbf0b81e2204f09326a9f770bfe9922f23971e92aed100169d036da064da5fa97806a0020ed8c62cb6191aff', NULL, NULL, NULL, 'Programmation', 2, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(7, 'Léon kanundey', NULL, '0907247988', 'lkanundeyi@gmail.com', NULL, NULL, '6816bc0dcc5abaebbfae3ed237dcfa12ca0dd610f4220b0e1ada88c25845750fc1979dc3d39f7126599de03c8e399ac59f45dc52fb2855b13dd2a20e3f174fe4', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(8, 'Verone Mansia', NULL, '0818345473', 'veroneinsisili@gmail.com', NULL, NULL, '57acf66b146e4f606413e8707ffae882a5ea0228de3455c8efffd439f6ef1a2a04eec109d2879bf64c1d7e05cdd808a14db5c5b0f6a4ccf758d0c998058b53cd', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(9, 'Bones Insisili', NULL, '0826627897', NULL, NULL, NULL, 'f6dda54793349a9e284dd4a1daf0cc30f7aceee0c0a6a368575074c9931e8e43f7ff9858dab3824c272849a84948b86a6be1bfa50825d4c7c0546bd0799b655e', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(10, 'Bones Insisili', NULL, '0890007765', 'bones@gmail.com', NULL, NULL, 'f6dda54793349a9e284dd4a1daf0cc30f7aceee0c0a6a368575074c9931e8e43f7ff9858dab3824c272849a84948b86a6be1bfa50825d4c7c0546bd0799b655e', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(11, 'Hornella Meta', NULL, '0893322111', 'hornella@gmail.com', NULL, NULL, '57acf66b146e4f606413e8707ffae882a5ea0228de3455c8efffd439f6ef1a2a04eec109d2879bf64c1d7e05cdd808a14db5c5b0f6a4ccf758d0c998058b53cd', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(13, 'Basile NDOMBASI Basile', NULL, '0896628493', 'bandcreaentreprise@gmail.com', NULL, '13_65ff03109cb0d.jpg', '8f4bb23c96ed98f11274ea70279d153949d84c134b092db2245d2caaec72f9849ba9eaadc0a60e68bce898c65d4a14e1a1cc256688158ebd4836ca43b8667956', 'Je suis un professionnel dans la conception de visuelle avec une expérience de 10 ans  d&#039;activité pour les entreprises, ong, les églises etc. Toute personne qui va me contacter ne sera pas du tout déçu de mon travail exceptionnel.', NULL, NULL, 'Graphiste', 3, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(14, 'Djanny kabeya', NULL, '+243 822150595', 'kabeyadjanny710@gmail.com', NULL, '14_6602e506b2194.jpg', '4555a411ae3ed719701fa50b35bc460c9775e048d77a659ca721643d046c95b82a09a9df0245733a164dc05d0731de50ddd3eefb0ebe891f3629230f048ef3f2', 'Je suis un photographe professionnel pour la couverture des vos événements tel que : mariage civil, coutumier, religieux, concert, conférence et tant d&#039;autres.. avec une expérience de 9 ans dans le secteur avec une qualité de service impeccable, contactez moi enfin que je puisse vous donnez un travail qu&#039;il faut selon vos attentes', NULL, NULL, 'Photographie & Vidéographie', 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(15, 'Julie bogano mpembe', NULL, '+243 897941522', NULL, NULL, NULL, 'd99f8e4bc1b464f5aac2092c77c7a09cdb2d79b919696982cef9ca1d06509ce1323edefcda36eebbca7e50c88ccbf7f8b955bbf654c05cd9f1557d7371390fec', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(16, 'Othniel tshima', NULL, '+243 823608856', 'othnieltshiama31@gmail.com', NULL, '16_65ff2790abf6e.jpg', 'd99f8e4bc1b464f5aac2092c77c7a09cdb2d79b919696982cef9ca1d06509ce1323edefcda36eebbca7e50c88ccbf7f8b955bbf654c05cd9f1557d7371390fec', 'Je suis un professionnel dans la conception de visuelle avec une expérience de 4 ans d&#039;activité pour les entreprises, ong, les églises etc. Toute personne qui va me contacter ne sera pas du tout déçu de mon travail exceptionnel.', NULL, NULL, 'Graphiste', 3, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(18, 'Mervedi matondo', NULL, '+243828009063', 'mervedimatondo712@gmail.com', NULL, '18_65ff4a27d1d41.jpg', 'ce2467d0e773a36e0c4c51a59f9c93c92bd83bbc1b910784e474c7d5593a320b976a377ba3ed3bf263eeb90a1b780bbe8b7eb5f994a4a2f71764003bbb80b0b8', 'Je suis une jeune femme professionnelle excellent dans la coiffure dames qui met sa créativité artistique pour mettre en valeur où la métamorphoser des visages de toute femmes avec un style particulier .', NULL, NULL, 'Maquillage & Coiffure', 5, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(19, 'Kakesa Parker', NULL, '+243811635436', 'liyaparker952@gmail.com', NULL, '19_65fff5d101cff.jpg', 'a9cf249b3419d512a324afd6b10665944b72d294c766bbdf78288bd1d858aa80aa55d78d06d7f8adf79e3204474a402854962bd48c1f5889eee50ca2de2012d8', 'Je suis un photographe, vidéaste avec une expérience de 5 ans dans la couverture de toute sorte d&#039;événements tel que le mariage religieux, civil, coutumier, anniversaire, concert.', NULL, NULL, 'Photographie & Vidéographie', 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(21, 'Vip- kitoko', '1997-09-03', '+243 97 50 75 588', 'ketsiamulanga1@gmail.com', NULL, '21_660007c783b14.jpg', '4ef89b846fce983c9523af63d2ea3844b356b50c3b6b5e2f0764d0103a0c2ba911ca0a98d42a34e15e704c7baa6ff5389584f4645bbbe665c5ed00f83d4df1c5', 'En étant, professionnelle et expérimenté dans le maquillage avec une expérience de 3 ans  résidente à Kinshasa je m&#039;engage à donner un service de qualité à toute personne qui va me contacter', NULL, NULL, 'Maquillage & Coiffure', 5, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(22, 'Yolka_beauty', NULL, '0830069573', 'mwika01@gmail.com', NULL, '22_66000d4bc0774.jpg', '29179d2576c3349301703d2006b82ad0b1ee1c16fad9bc5ffd0b043f87cc92e5e92b43cf0a92b1167eb6bc3097ab05240daed2b621693560853e488cb9c05dfc', 'Je suis une professionnelle dans la coiffure dames et maquillage qui met tout sa créativité, son intelligence enfin de métamorphoser des visages avec le maquillage de soirée, prestige et toute sorte de tresse tel que le rasta, écailles, cordelette etc.', NULL, NULL, 'Maquillage & Coiffure', 5, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(23, 'Mardo photography drc', NULL, '+243825365649', 'mardochembodisa4@gmail.com', NULL, '23_660016d888b15.jpg', '7975d711ce6ced640214d98d74fb0ae4ef15395c4a64da063c6f8bf4ed2da903768e982dfcd8a16228f82d716fd697fd7a1eb6dba030ba45e3e899443be0ee0d', 'Je suis un photographe, vidéaste avec une expérience de 7 ans dans la couverture de toute sorte d&#039;événements tel que le mariage religieux, civil, coutumier, anniversaire, concert et séance photos à la maison, photos studio etc', NULL, NULL, 'Photographie & Vidéographie', 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(24, 'David kadima', NULL, '0828942882', 'kadimamukendi@gmail.com', NULL, '24_660020edf2424.jpg', '92a31e45c21f7de328b5eba78da066f0e641e476ed2868b5a00fb36e8c73d390ee96af38e7d2c93b3873ac4254c0993f1889f396e469dd16cd9344c932219aac', 'Je suis un photographe, vidéaste avec une expérience de 7 ans dans la couverture de toute sorte d&#039;événements tel que le mariage religieux, civil, coutumier, anniversaire, concert et séance photos à la maison, photos studio etc', NULL, NULL, 'Photographie & Vidéographie', 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(25, 'Eagle Eyes communication', NULL, '+243817477771', 'dieumerci.mpeti1@gmail.com', NULL, '25_6600571179a48.jpg', 'e65198ad88a2e6c1124ad68f21177d96c9b4c6eec586d0d5f0d49475126ee9064b42155890186fa73618129be0ab14704516484551a62b79223e912285fdc654', 'Une agence d&#039;audiovisuel et de la photographie avec 5 d&#039;expérience sur le marché et dans le secteur avec une équipe qualifiée, dynamique, pour tout vos cérémonie : mariage civil, coutumier, religieux, concert, conférence nous prêt à vous rendre un service de qualité', NULL, NULL, 'Photographie & Vidéographie', 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(26, 'Thechil  Photography officiel', NULL, '0975476136', 'thechilphotography@gmail.com', NULL, '26_66045c2c0fefe.jpg', '3643e3e710d964a10bfb8ed8d18df6adc5edfd9a3d946dcae2916ef6d01d6e3fbca274cba36c210daa81f898de0eadf76e540c67d896d890848113d6f7f2eb8e', 'Je suis un photographe, vidéaste, réalisateur professionnel avec une expérience de 4 ans dans la couverture de toute sorte d&#039;événements tel que le mariage religieux, civil, coutumier, anniversaire, concert et séance photos à la maison, photos studio etc', NULL, NULL, 'Photographie & Vidéographie', 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(27, 'Rizzdy Kumbi', NULL, '+243816950347', 'riddykumbi@gmail.com', NULL, '27_660462c5e6f11.jpg', 'ab15901456ac77acee1a0448f586be1a0b9f3af665f59fefa1e01ad304a40931e902a03b65baec263457db51a495c72b360803f2648d62df9b6ed40e61786f16', 'Mister design\r\n\r\nArtiste pluridisciplinaire graphic design de son vrai nom rizzdy kumbi est le fondateur et directeur de mister design, il a fait ce études à l&#039;Institut supérieur de statistiques de Kinshasa,il a commencé ce début sur d&#039;apprentissage à l&#039;internet avec une expérience de 7 ans dans le graphisme, rizzdy kumbi est un graphiste designer a succès de nationalité congolaise résident à la ville de Kinshasa', NULL, NULL, 'Graphiste', 3, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(28, 'S design comms', NULL, '+243 977 899 480', 'samuellenile@gmail.com', NULL, '28_6605963e1cfff.jpg', '962a9d7d8add72d18b87497260730af7a1d49771aaa3b5df87c27b070ae7c1fa2a8e3f25bb86b640e0bb4b0de07e8480a37965472c82d29b39aefe6e3b57d0b7', 'Samuel Lenile graphic design de son vrai le fondateur et directeur s design comms,il a commencé ce début sur d&#039;apprentissage à l&#039;internet avec une expérience de 5 ans dans le graphisme, Samuel Lenile est un graphiste designer a succès de nationalité congolaise résident à la ville de Kinshasa', NULL, NULL, 'Graphiste', 3, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(29, 'Hardy Tolongo', NULL, '0853605378', 'htstooel@gmail.com', NULL, '29_6607c768ac4a7.jpg', '555f40649e82316b3efba512892f622d2a51805173dec54031d5c7ea8e5eba8ecc269e6bdd03ab3a58f366720bc91f66186b1eab761dc62d7d737fe10a0f7352', 'À propos\r\nJe suis un photographe professionnel pour la couverture des vos événements tel que : mariage civil, coutumier, religieux, concert, conférence et tant d&#039;autres.. nationalité congolaise, résident à Kinshasa avec une expérience de 4 ans dans le secteur avec une qualité de service impeccable.', NULL, NULL, 'Photographie &amp; Vidéographie', 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(30, 'LM beauty', NULL, '+243 829 808 909', 'lovettemuluba35@gmail.com', NULL, '30_66099fb0561c1.jpg', 'c5c15bbbd3d3e3f130fdfc9b87d722f3767fbfbe472daea08a40dc6d7e69e68d4bab6e10c476e93d47df12eb253896acbc3b445bfca54882136a60468349e356', 'LM beauty est un salon de coiffure qui se trouve en RDC précisément à la ville de Kinshasa dans la commune de bandal dirigé par une jeune dame au nom de lovette muluba avec une expérience de 4 ans dans le domaine de la coiffure et maquillage', NULL, NULL, 'Maquillage &amp; Coiffure', 0, 0, 1, NULL, NULL, NULL, NULL, NULL),
	(31, 'Willyam Zuck', NULL, '0970665100', 'w@gmail.com', NULL, NULL, '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', NULL, NULL, NULL, NULL, 1, 0, 1, 'KINSHASA, RDC', 'xxxx', '2023-2024', 'Graduat', 'xxxxxxxx');

-- Listage de la structure de table fanukin. tb_competence
CREATE TABLE IF NOT EXISTS `tb_competence` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `competences` text ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 ;

-- Listage des données de la table fanukin.tb_competence : ~58 rows (environ)
INSERT INTO `tb_competence` (`id`, `candidat`, `competences`) VALUES
	(2, 2, 'Html 5'),
	(3, 2, 'Css 3'),
	(4, 2, 'Javascript'),
	(5, 2, 'Php'),
	(6, 2, 'Symphonie'),
	(7, 2, 'React native'),
	(8, 2, 'React js'),
	(9, 2, 'UML'),
	(10, 2, 'MySQL'),
	(11, 2, 'SQL'),
	(12, 2, 'MongoDB'),
	(13, 2, 'Next Js'),
	(14, 2, 'Node Js'),
	(17, 14, 'Photographe'),
	(18, 14, 'Vidéaste'),
	(19, 14, 'Cameraman'),
	(20, 16, 'Logo'),
	(21, 16, 'AF.A4'),
	(22, 16, 'AF.A3'),
	(23, 16, 'InDesign'),
	(28, 18, 'Maquillage soirée'),
	(29, 18, 'Prestige'),
	(30, 18, 'Maquillage simple'),
	(31, 18, 'Maquillage civil'),
	(32, 18, 'Maquillage coutumier'),
	(33, 18, 'Maquillage religieux'),
	(34, 19, 'Photographe'),
	(35, 19, 'Cameraman'),
	(37, 19, 'Vidéaste'),
	(43, 21, 'Maquillage simple'),
	(44, 21, 'Maquillage civil'),
	(45, 21, 'Maquillage coutumier'),
	(46, 21, 'Maquillage religieux et dansante'),
	(47, 21, 'Prestige'),
	(49, 21, 'Maquillage soirEE'),
	(50, 22, 'Maquillage soirée'),
	(51, 22, 'Prestige'),
	(52, 22, 'Maquillage simple'),
	(53, 22, 'Coiffure rasta'),
	(54, 22, 'Coiffure Ecailles'),
	(55, 22, 'Coiffure cordelette'),
	(56, 23, 'Photographe'),
	(58, 23, 'Cameraman'),
	(59, 23, 'VidEaste'),
	(60, 24, 'VidEaste'),
	(61, 24, 'Photographe'),
	(62, 24, 'Cameraman'),
	(64, 26, 'Photographe'),
	(65, 26, 'Vidéaste'),
	(66, 26, 'Réalisateur'),
	(67, 27, 'Designer'),
	(68, 28, 'Designer'),
	(69, 29, 'Photographe'),
	(70, 29, 'Réalisateur'),
	(71, 29, 'VidEaste'),
	(72, 29, 'Designer'),
	(73, 30, 'Maquilleuse'),
	(74, 30, 'Coiffeuse');

-- Listage de la structure de table fanukin. tb_competiton
CREATE TABLE IF NOT EXISTS `tb_competiton` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` text,
  `annee` text,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- Listage des données de la table fanukin.tb_competiton : ~0 rows (environ)

-- Listage de la structure de table fanukin. tb_contact
CREATE TABLE IF NOT EXISTS `tb_contact` (
  `nom` text ,
  `email` text ,
  `sujet` text ,
  `phone` text ,
  `message` text ,
  `status` tinyint DEFAULT '0'
) ENGINE=InnoDB ;

-- Listage des données de la table fanukin.tb_contact : ~0 rows (environ)

-- Listage de la structure de table fanukin. tb_contrant
CREATE TABLE IF NOT EXISTS `tb_contrant` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 ;

-- Listage des données de la table fanukin.tb_contrant : ~8 rows (environ)
INSERT INTO `tb_contrant` (`id`, `designation`, `status`) VALUES
	(2, 'Contrat à durée indéterminée (CDI)', 1),
	(3, 'Contrat à Durée Déterminée (CDD)', 1),
	(4, 'Contrat de Mission (Intérim)', 1),
	(5, 'Contrat de Travail Temporaire (CDTT)', 1),
	(6, 'Contrat de Travail à Temps Partiel', 1),
	(7, 'Contrat d&amp;#039;Apprentissage', 1),
	(8, 'Contrat de Professionnalisation', 1),
	(9, 'Contrat Freelance (ou Indépendant)', 1);

-- Listage de la structure de table fanukin. tb_education
CREATE TABLE IF NOT EXISTS `tb_education` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `etablissement` text ,
  `titre` text ,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table fanukin.tb_education : ~0 rows (environ)
INSERT INTO `tb_education` (`id`, `candidat`, `etablissement`, `titre`, `debut`, `fin`) VALUES
	(2, 2, 'Cameskin', 'Meilleur développeur', '2020-10-10', '2020-10-15');

-- Listage de la structure de table fanukin. tb_experience
CREATE TABLE IF NOT EXISTS `tb_experience` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `societe` text ,
  `poste` text ,
  `contrant` text ,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table fanukin.tb_experience : ~0 rows (environ)
INSERT INTO `tb_experience` (`id`, `candidat`, `societe`, `poste`, `contrant`, `debut`, `fin`) VALUES
	(2, 2, 'Pnam', 'Informaticien full', 'CDI', '2021-10-03', '2023-10-12');

-- Listage de la structure de table fanukin. tb_langue
CREATE TABLE IF NOT EXISTS `tb_langue` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `langue` text ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 ;

-- Listage des données de la table fanukin.tb_langue : ~34 rows (environ)
INSERT INTO `tb_langue` (`id`, `candidat`, `langue`) VALUES
	(2, 2, 'Anglais'),
	(3, 2, 'Français'),
	(4, 2, 'Lingala'),
	(5, 6, 'FRANCAIS'),
	(7, 6, 'LINGALA'),
	(8, 6, 'SWAHILI'),
	(10, 13, 'Français'),
	(11, 13, 'Lingala'),
	(12, 14, 'Français'),
	(13, 14, 'Lingala'),
	(14, 16, 'Français'),
	(15, 16, 'Lingala'),
	(16, 17, 'Français'),
	(17, 17, 'Lingala'),
	(18, 18, 'Français'),
	(19, 18, 'Lingala'),
	(20, 19, 'Français'),
	(21, 19, 'Lingala'),
	(22, 21, 'Français'),
	(23, 21, 'Lingala'),
	(24, 23, 'Français'),
	(25, 23, 'Lingala'),
	(26, 24, 'Français'),
	(27, 24, 'Lingala'),
	(28, 25, 'Français'),
	(30, 26, 'Français'),
	(31, 26, 'Lingala'),
	(32, 27, 'Français'),
	(33, 27, 'Lingala'),
	(34, 28, 'Français'),
	(35, 28, 'Français'),
	(36, 28, 'Lingala'),
	(37, 29, 'Français'),
	(38, 29, 'Lingala');

-- Listage de la structure de table fanukin. tb_message
CREATE TABLE IF NOT EXISTS `tb_message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sujet` text ,
  `nom` text ,
  `email` text ,
  `telephone` text ,
  `message` text COLLATE utf8mb4_general_ci,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 ;

-- Listage des données de la table fanukin.tb_message : ~0 rows (environ)
INSERT INTO `tb_message` (`id`, `sujet`, `nom`, `email`, `telephone`, `message`, `status`) VALUES
	(1, 'ccc', 'xxx', NULL, 'ccc', 'cc', 0),
	(2, 'ccc', 'xxx', NULL, 'ccc', 'cc', 0),
	(3, 'ccc', 'xxx', NULL, 'ccc', 'cc', 0),
	(4, 'ccc', 'xxx', NULL, 'ccc', 'cc', 0),
	(5, 'ccc', 'xxx', NULL, 'ccc', 'xxxxxxxxxxx', 0);

-- Listage de la structure de table fanukin. tb_newsletter
CREATE TABLE IF NOT EXISTS `tb_newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255)  DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 ;

-- Listage des données de la table fanukin.tb_newsletter : ~4 rows (environ)
INSERT INTO `tb_newsletter` (`id`, `email`) VALUES
	(9, ''),
	(7, 'lkanundeyi@gmail.com'),
	(13, 'mardochembodisa4@gmail.com'),
	(5, 'ngutshinsisili@gmail.com');

-- Listage de la structure de table fanukin. tb_pays
CREATE TABLE IF NOT EXISTS `tb_pays` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table fanukin.tb_pays : ~0 rows (environ)
INSERT INTO `tb_pays` (`id`, `designation`, `status`) VALUES
	(2, 'RDCongo', 1);

-- Listage de la structure de table fanukin. tb_porfolio
CREATE TABLE IF NOT EXISTS `tb_porfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `porfolio` text ,
  `extension` tinytext  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=218 ;

-- Listage des données de la table fanukin.tb_porfolio : ~179 rows (environ)
INSERT INTO `tb_porfolio` (`id`, `candidat`, `porfolio`, `extension`) VALUES
	(6, 2, '65f813c3e5994.jpeg', ''),
	(7, 2, '65f813c3e63fe.jpeg', ''),
	(8, 2, '65f813c3e77be.jpeg', ''),
	(9, 2, '65f815e583539.jpeg', ''),
	(10, 13, '65ff03ad681e0.jpg', ''),
	(11, 13, '65ff053be57b5.jpg', ''),
	(12, 13, '65ff0609da137.jpg', ''),
	(14, 13, '65ff10a3e419d.jpg', ''),
	(15, 13, '65ff1234465e3.mp4', ''),
	(16, 13, '65ff15277459a.jpg', ''),
	(17, 14, '65ff1aea5bb8d.jpg', ''),
	(18, 14, '65ff1bc22666c.jpg', ''),
	(19, 14, '65ff1bc226a74.jpg', ''),
	(20, 14, '65ff1bc226efe.jpg', ''),
	(21, 14, '65ff1bc2270ec.jpg', ''),
	(22, 14, '65ff1bc2272b2.jpg', ''),
	(23, 14, '65ff1bc227477.jpg', ''),
	(24, 14, '65ff1bc227605.jpg', ''),
	(25, 14, '65ff1bc22777a.jpg', ''),
	(26, 14, '65ff1bc227990.jpg', ''),
	(27, 14, '65ff1bc227b3c.jpg', ''),
	(28, 14, '65ff1bc227cda.jpg', ''),
	(29, 14, '65ff1bc227e6a.jpg', ''),
	(30, 14, '65ff1bc228018.jpg', ''),
	(31, 16, '65ff26cb3bc3c.jpg', ''),
	(32, 16, '65ff26cb4365d.jpg', ''),
	(33, 16, '65ff26cb437ca.jpg', ''),
	(34, 16, '65ff26cb438f8.jpg', ''),
	(35, 16, '65ff26cb43a27.jpg', ''),
	(36, 16, '65ff26cb44228.jpg', ''),
	(37, 16, '65ff26cb4432a.jpg', ''),
	(38, 16, '65ff26cb4441e.jpg', ''),
	(39, 16, '65ff26cb44527.jpg', ''),
	(40, 16, '65ff26cb4461b.jpg', ''),
	(41, 16, '65ff26cb446fe.jpg', ''),
	(53, 18, '65ff49f374c5c.jpg', 'jpg'),
	(54, 18, '65ff49f374e43.jpg', 'jpg'),
	(55, 18, '65ff49f375042.jpg', 'jpg'),
	(58, 19, '65fff53383073.jpg', 'jpg'),
	(59, 19, '65fff5338a70c.jpg', 'jpg'),
	(60, 19, '65fff5338a94e.jpg', 'jpg'),
	(61, 19, '65fff5338ab39.jpg', 'jpg'),
	(62, 19, '65fff5338ad17.jpg', 'jpg'),
	(63, 19, '65fff5338af1f.jpg', 'jpg'),
	(64, 19, '65fff5338b0df.jpg', 'jpg'),
	(65, 19, '65fff5338b309.jpg', 'jpg'),
	(66, 19, '65fff5338b533.jpg', 'jpg'),
	(67, 19, '65fff5338b786.jpg', 'jpg'),
	(68, 19, '65fff5338bae4.jpg', 'jpg'),
	(69, 19, '65fff5338bc8c.jpg', 'jpg'),
	(70, 21, '66000854a73a4.jpg', 'jpg'),
	(71, 21, '66000854a7739.jpg', 'jpg'),
	(72, 21, '66000854a78f6.jpg', 'jpg'),
	(73, 21, '66000854a7acd.jpg', 'jpg'),
	(74, 21, '66000854a7c98.jpg', 'jpg'),
	(75, 21, '66000854a7e51.jpg', 'jpg'),
	(76, 21, '66000854a8008.jpg', 'jpg'),
	(77, 21, '66000854a8177.jpg', 'jpg'),
	(78, 21, '66000854a82e6.jpg', 'jpg'),
	(79, 21, '66000854a88b8.jpg', 'jpg'),
	(80, 21, '66000854a8aad.jpg', 'jpg'),
	(81, 22, '66000d166eb79.jpg', 'jpg'),
	(82, 22, '66000d166ee96.jpg', 'jpg'),
	(83, 22, '66000d166efdb.jpg', 'jpg'),
	(84, 22, '66000d166f10f.jpg', 'jpg'),
	(85, 22, '66000d166f245.jpg', 'jpg'),
	(86, 22, '66000d166f379.jpg', 'jpg'),
	(87, 22, '66000d166f6d9.jpg', 'jpg'),
	(88, 22, '66000d166f80c.jpg', 'jpg'),
	(89, 22, '66000d166f90c.jpg', 'jpg'),
	(90, 22, '66000d166fa04.jpg', 'jpg'),
	(91, 22, '66000d166faf7.jpg', 'jpg'),
	(92, 22, '66000d166fbef.jpg', 'jpg'),
	(93, 22, '66000d166fd2b.jpg', 'jpg'),
	(94, 22, '66000d166fe26.jpg', 'jpg'),
	(95, 22, '66000d166ff1c.jpg', 'jpg'),
	(96, 22, '66000d167000f.jpg', 'jpg'),
	(97, 23, '660016876aaf4.jpg', 'jpg'),
	(98, 23, '660016876b04b.jpg', 'jpg'),
	(99, 23, '660016876b1f9.jpg', 'jpg'),
	(100, 23, '660016876b371.jpg', 'jpg'),
	(101, 23, '660016876b4f4.jpg', 'jpg'),
	(102, 23, '660016876b66b.jpg', 'jpg'),
	(103, 23, '660016876b7d4.jpg', 'jpg'),
	(104, 23, '660016876b93a.jpg', 'jpg'),
	(105, 23, '660016876bad3.jpg', 'jpg'),
	(106, 23, '660016876bc57.jpg', 'jpg'),
	(107, 24, '66001fa4ca53c.jpg', 'jpg'),
	(108, 24, '66001fa4cfa4a.jpg', 'jpg'),
	(109, 24, '66001fa4cfc81.jpg', 'jpg'),
	(110, 24, '66001fa4d0268.jpg', 'jpg'),
	(111, 24, '66001fa4d04d7.jpg', 'jpg'),
	(112, 24, '66001fa4d06c2.jpg', 'jpg'),
	(113, 24, '66001fa4d0855.jpg', 'jpg'),
	(114, 24, '66001fa4d0acc.jpg', 'jpg'),
	(121, 24, '66001fa4d17de.jpg', 'jpg'),
	(122, 24, '66001fa4d1983.jpg', 'jpg'),
	(123, 24, '66001fa4d1b4a.jpg', 'jpg'),
	(124, 24, '66001fa4d1dcd.jpg', 'jpg'),
	(125, 24, '66001fa4d1f79.jpg', 'jpg'),
	(126, 24, '66001fa4d2106.jpg', 'jpg'),
	(127, 25, '660061c59345e.jpg', 'jpg'),
	(129, 25, '660061c593bda.jpg', 'jpg'),
	(130, 25, '660061c593e2d.jpg', 'jpg'),
	(131, 25, '660061c5940bc.jpg', 'jpg'),
	(143, 26, '66045700d50eb.jpg', 'jpg'),
	(144, 26, '66045700ddf22.jpg', 'jpg'),
	(145, 26, '66045700de10a.jpg', 'jpg'),
	(146, 26, '66045700de725.jpg', 'jpg'),
	(147, 26, '66045700e0212.jpg', 'jpg'),
	(148, 26, '66045700e03e6.jpg', 'jpg'),
	(149, 26, '66045700e0549.jpg', 'jpg'),
	(150, 26, '66045700e071e.jpg', 'jpg'),
	(151, 26, '66045700e09ed.jpg', 'jpg'),
	(152, 26, '66045700e0bbc.jpg', 'jpg'),
	(153, 26, '66045700e0da3.jpg', 'jpg'),
	(154, 26, '66045700e0f04.jpg', 'jpg'),
	(155, 26, '66045700e1068.jpg', 'jpg'),
	(156, 26, '66045700e11e2.jpg', 'jpg'),
	(157, 26, '66045700e131a.jpg', 'jpg'),
	(158, 26, '66045700e143f.jpg', 'jpg'),
	(159, 26, '66045700e156a.jpg', 'jpg'),
	(160, 26, '66045700e174f.jpg', 'jpg'),
	(161, 26, '66045700e261f.jpg', 'jpg'),
	(162, 26, '66045700e280f.jpg', 'jpg'),
	(163, 27, '6604641f663be.JPG', 'JPG'),
	(164, 27, '6604641f668aa.JPG', 'JPG'),
	(165, 27, '6604641f66a5f.JPG', 'JPG'),
	(166, 27, '6604641f66c54.JPG', 'JPG'),
	(167, 27, '6604641f66dfe.JPG', 'JPG'),
	(168, 27, '6604641f66fc3.JPG', 'JPG'),
	(169, 27, '6604641f67202.JPG', 'JPG'),
	(170, 27, '660466a49c585.JPG', 'JPG'),
	(171, 27, '660466a49c97f.JPG', 'JPG'),
	(173, 27, '6604691d031cb.JPG', 'JPG'),
	(174, 27, '66047d1514ad7.JPG', 'JPG'),
	(175, 28, '66059685ae7a6.jpg', 'jpg'),
	(176, 28, '66059685b2cde.jpg', 'jpg'),
	(177, 28, '66059685b2fa9.jpg', 'jpg'),
	(178, 28, '66059685b319a.jpg', 'jpg'),
	(179, 28, '66059685b33a2.jpg', 'jpg'),
	(180, 28, '66059685b3687.jpg', 'jpg'),
	(181, 28, '66059685b3a11.jpg', 'jpg'),
	(182, 28, '66059685b3c81.jpg', 'jpg'),
	(183, 28, '66059685b3f29.jpg', 'jpg'),
	(184, 28, '66059685b4213.jpg', 'jpg'),
	(185, 28, '66059685b4491.jpg', 'jpg'),
	(186, 29, '6607c73f46480.jpg', 'jpg'),
	(187, 29, '6607c73f46851.jpg', 'jpg'),
	(188, 29, '6607c73f46a5f.jpg', 'jpg'),
	(189, 29, '6607c73f46c7f.jpg', 'jpg'),
	(190, 29, '6607c73f46eb1.jpg', 'jpg'),
	(191, 29, '6607c73f470f6.jpg', 'jpg'),
	(192, 29, '6607c73f47319.jpg', 'jpg'),
	(193, 29, '6607c73f475ba.jpg', 'jpg'),
	(194, 29, '6607c73f47856.jpg', 'jpg'),
	(195, 29, '6607c73f47a6a.jpg', 'jpg'),
	(196, 29, '6607c73f47c2f.jpg', 'jpg'),
	(197, 29, '6607c73f47de4.jpg', 'jpg'),
	(198, 29, '6607c73f47fdf.jpg', 'jpg'),
	(199, 29, '6607c73f48139.jpg', 'jpg'),
	(200, 29, '6607c73f48279.jpg', 'jpg'),
	(201, 29, '6607c73f483ad.jpg', 'jpg'),
	(202, 29, '6607c73f484e2.jpg', 'jpg'),
	(203, 29, '6607c73f48611.jpg', 'jpg'),
	(204, 29, '6607c73f48751.jpg', 'jpg'),
	(205, 29, '6607c73f48887.jpg', 'jpg'),
	(206, 30, '66099f8d0b94b.jpg', 'jpg'),
	(207, 30, '66099f8d0e3fb.jpg', 'jpg'),
	(208, 30, '66099f8d0e5f4.jpg', 'jpg'),
	(209, 30, '66099f8d0e785.jpg', 'jpg'),
	(210, 30, '66099f8d0e93f.jpg', 'jpg'),
	(211, 30, '66099f8d0eb28.jpg', 'jpg'),
	(212, 30, '66099f8d0ed04.jpg', 'jpg'),
	(213, 30, '66099f8d0eed4.jpg', 'jpg'),
	(214, 30, '66099f8d0f0d7.jpg', 'jpg'),
	(215, 30, '66099f8d0f2f1.jpg', 'jpg'),
	(216, 30, '66099f8d0f4d2.jpg', 'jpg'),
	(217, 30, '66099f8d0f67c.jpg', 'jpg');

-- Listage de la structure de table fanukin. tb_secteur
CREATE TABLE IF NOT EXISTS `tb_secteur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` text ,
  `icon` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 ;

-- Listage des données de la table fanukin.tb_secteur : ~7 rows (environ)
INSERT INTO `tb_secteur` (`id`, `designation`, `icon`, `status`) VALUES
	(1, 'Photographie & Vidéographie', 'fa-solid fa-camera-retro', 1),
	(2, 'Programmation', 'fa-solid fa-code', 1),
	(3, 'Graphiste', 'fa-solid fa-pen-nib', 1),
	(4, 'Dessin', 'fa-solid fa-compass-drafting', 0),
	(5, 'Maquillage & Coiffure', 'fa-solid fa-palette', 1),
	(6, 'Coiffure', 'fa-solid fa-brain', 0),
	(7, 'Realisateur', 'fa-solid fa-computer', 0);

-- Listage de la structure de table fanukin. tb_tarification
CREATE TABLE IF NOT EXISTS `tb_tarification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `domaine` text ,
  `cout` text ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 ;

-- Listage des données de la table fanukin.tb_tarification : ~74 rows (environ)
INSERT INTO `tb_tarification` (`id`, `candidat`, `domaine`, `cout`) VALUES
	(2, 2, 'Site web vitrine', '200$'),
	(4, 2, 'Site web dynamique', '500$'),
	(5, 2, 'Application mobile', '800$ - 1200$'),
	(6, 19, 'Mariage civil, coutumier,B.nuptial, soirée dansante flash disque,5 photos cadre, 2 albums book', '950$'),
	(7, 19, 'Mariage civil, coutumier,B.nuptial, soirée dansante flash disque,3 photos cadre, 1 albums book', '800$'),
	(8, 19, 'Mariage civil, coutumier,B.nuptial, soirée dansante flash disque,3 photos cadre', '700$'),
	(9, 19, 'Vidéo : remise coutumier , civil plus drone, B.nuptial + drone  et soirée dansante+ teaser, flash disque', '800$'),
	(10, 19, 'Caméra : remise coutumier, civile+ drone , B.nuptial, soirée dansante + flash disque', '600$'),
	(11, 19, 'Caméra : remise coutumier, civile, B.nuptial, soirée dansante + flash disque', '400$'),
	(12, 19, 'Photo studio : 7 pause', '20$'),
	(15, 21, 'Prestige', '70$'),
	(16, 22, 'Make up jour simple', '15$'),
	(17, 22, 'Make UP soirée complète', '20$'),
	(18, 22, 'Défense et collation', '25'),
	(19, 22, 'Séance photo professionnel', '25$'),
	(20, 22, 'Anniversaire', '18$'),
	(21, 22, 'Prestations coutumier', '60$'),
	(22, 22, 'Prestations  civile', '80$'),
	(23, 22, 'Prestations religieuse', '100$'),
	(24, 22, 'Dames d&amp;#039;honneur', '25$'),
	(25, 23, 'Photo studio : 4 pauses', '20$'),
	(26, 23, 'Photo studio : 1h', '100$'),
	(27, 23, 'Séance à domicile : 15 pause', '150$'),
	(28, 23, 'Predote', '150$'),
	(29, 23, 'Remise dote', '150$'),
	(30, 23, 'Mariage civil', '300$'),
	(31, 23, 'Mariage coutumier', '300$'),
	(32, 23, 'Mariage religieux', '500$'),
	(35, 23, 'Conférence', '150$'),
	(36, 23, 'Concert', '150$'),
	(37, 24, 'Prêt dot', '50$'),
	(38, 24, 'Remise dote', '150$'),
	(39, 24, 'Mariage civil', '200$'),
	(40, 24, 'Mariage religieux', '300$'),
	(41, 24, 'Concert', '150$'),
	(42, 24, 'Conférence', '120$'),
	(43, 24, 'Photo studio : 5 pause', '15$'),
	(44, 24, 'Photo séance à la maison : 20 pause', '50$'),
	(45, 24, 'Séance photo 1h : 30 pause', '100$'),
	(51, 26, 'Séance photo professionnel  couple', '150$'),
	(52, 26, 'Séance photo professionnel  8 photos', '80$'),
	(53, 26, 'Séance photo professionnel artistique 10 photos', '100$'),
	(54, 26, 'Séance photo 1h', '200$'),
	(55, 26, 'Séance photo portrait beauty', '100$'),
	(56, 26, 'Séance photo externe', '200$'),
	(57, 26, 'Mariage civil', '450$'),
	(58, 26, 'Mariage religieux', '600$'),
	(59, 26, 'Mariage coutumier', '420$'),
	(60, 27, 'Conception visuelle', '20$'),
	(61, 27, 'Logo', '100$'),
	(64, 27, 'Identité visuelle', '100$'),
	(65, 28, 'Affiche', '20$'),
	(66, 28, 'Logos', '100$'),
	(67, 28, 'Identité visuelle', '150$'),
	(68, 29, 'Mariage religieux', '300$'),
	(69, 29, 'Mariage civil', '250$'),
	(70, 29, 'Mariage coutumier', '200$'),
	(71, 29, 'Prêt dot', '100$'),
	(72, 29, 'Remise dote', '120$'),
	(73, 29, 'Défense', '100$'),
	(74, 29, 'Conférence', '200$'),
	(75, 29, 'Collation et réception', '150$'),
	(76, 29, 'Séance photo domicile', '100$'),
	(77, 29, 'Autre 1h', '100$'),
	(78, 23, 'Mariage complet, civil, coutumier, religieux avec 1 livres de 11 pages, 1 flash disque , un cadre photo A3', '1100$'),
	(79, 30, 'Maquillage simple', '25$'),
	(80, 30, 'Maquillage jour', '35$'),
	(81, 30, 'Maquillage soirée', '50$'),
	(82, 30, 'Maquillage mariée', '100$'),
	(83, 30, 'Pose lace avec effet naturel', '15$'),
	(84, 30, 'Pose closir', '10$'),
	(85, 30, 'Tissage simple', '10$'),
	(86, 30, 'Tissage closir', '10$'),
	(87, 30, 'Tissage lace', '20$');

-- Listage de la structure de table fanukin. tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table fanukin.tb_user : ~0 rows (environ)

-- Listage de la structure de table fanukin. tb_ville
CREATE TABLE IF NOT EXISTS `tb_ville` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pays` int DEFAULT NULL,
  `designation` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 ;

-- Listage des données de la table fanukin.tb_ville : ~26 rows (environ)
INSERT INTO `tb_ville` (`id`, `pays`, `designation`, `status`) VALUES
	(1, 2, 'Bas-Uele', 1),
	(2, 2, 'Équateur', 1),
	(3, 2, 'Haut-Katanga', 1),
	(4, 2, 'Haut-Lomami', 1),
	(5, 2, 'Haut-Uele', 1),
	(6, 2, 'Ituri', 1),
	(7, 2, 'Kasaï', 1),
	(8, 2, 'Kasaï-Central', 1),
	(9, 2, 'Kasaï-Oriental', 1),
	(10, 2, 'Kinshasa', 1),
	(11, 2, 'Kongo-Central', 1),
	(12, 2, 'Kwango', 1),
	(13, 2, 'Kwilu', 1),
	(14, 2, 'Lomami', 1),
	(15, 2, 'Lualaba', 1),
	(16, 2, 'Mai-Ndombe', 1),
	(17, 2, 'Maniema', 1),
	(18, 2, 'Mongala', 1),
	(19, 2, 'Nord-Kivu', 1),
	(20, 2, 'Nord-Ubangi', 1),
	(21, 2, 'Sankuru', 1),
	(22, 2, 'Sud-Kivu', 1),
	(23, 2, 'Sud-Ubangi', 1),
	(24, 2, 'Tanganyika', 1),
	(25, 2, 'Tshopo', 1),
	(26, 2, 'Tshuapa', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
