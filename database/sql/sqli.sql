-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le :  mer. 27 sep. 2017 à 10:19
-- Version du serveur :  10.2.8-MariaDB-10.2.8+maria~jessie
-- Version de PHP :  7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sqli`
--

-- --------------------------------------------------------

--
-- Structure de la table `auditors_treasure`
--

CREATE TABLE `auditors_treasure` (
  `id` int(11) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `track_title` varchar(25) NOT NULL,
  `record` varchar(25) DEFAULT NULL,
  `artist_name` varchar(25) NOT NULL,
  `year` year(4) NOT NULL,
  `label` varchar(25) DEFAULT NULL,
  `track_description` text DEFAULT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `author` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `thumbnail`, `author`, `description`) VALUES
(1, 'blog/Sapir/sapir.jpg', 'Laurent Sapir', 'Journaliste à TSFJAZZ (17h-20h)'),
(2, 'blog/Sapir/koperhant.jpg', 'David Koperhant', 'Animateur à TSFJAZZ (14h-17h) '),
(3, 'blog/Albernhe/albernhe.jpg', 'Laure Albernhe', 'Animatrice à TSFJAZZ (10h-14h)');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `description`) VALUES
(1, '2017-09-27', 'Swing again à Moscou', 'La ville de Saint-Petersbourg va accueillir, les 17 et 18 novembre, une grande conférence sur le jazz présentée par les organisateurs comme une première. Sous l\'égide du ministère russe de la Culture, cet événement, baptisé \"Jazz Across Borders\", devrait notamment valoriser les jeunes talents de la scène jazzistique russe devant un parterre de professionnels et de directeurs de grands festivals internationaux.'),
(2, '2017-09-27', 'Jazz à St-Nom-la-Bretèche', 'La 2e édition du festival Jazz à Saint-Nom-la-Bretèche, dans les Yvelines, aura lieu les samedis 7 et 14 octobre. Le premier week-end, c\'est le pianiste Franck Avitabile qui se produira tandis que la journée du 14 devrait valoriser Laurent Cugny et son Gil Evans Paris Workshop.'),
(3, '2017-09-26', 'Rémi Panossian fait appel à ELYX', 'Le trio de Rémi Panossian, RP3, revient dans l\'actualité discographique. Leur nouvel opus,Morning Smile, sortira le 20 octobre sur le label Jazz Family avec notamment un concert trois jours plus tôt, le 17, au Sunside dans le cadre du festival Jazz sur Seine à Paris. Le groupe s\'est par ailleurs associé à Yacine Ait Kaci, le créateur de ELYX, ce joyeux petit bonhomme créé sur Internet et devenu ambassadeur virtuel de l\'ONU, pour donner naissance à un spectacle visuel qui accompagnera leurs prestations.'),
(4, '2017-09-26', 'Nouvelle tournée pour The Bridge', 'Tournée hexagonale pour Twins, un groupe de musiciens français et de Chicago qui réunit les saxophonistes Stéphane Payen et Fred Jackson Jr ainsi que les batteurs Makaya McCraven et Edward Perraud. Quartet tout en ébullition (double sax et double drums...) que l\'on pourra notamment découvrir le 5 octobre au Carré Bleu à Poitiers, le 10 octobre au Petit Faucheux, à Tours, et le 16 à la Dynamo de Pantin avec la participation du vocaliste Mike Ladd... Une tournée qui entre dans le cadre de l\'opération \"The Bridge\", cette passerelle permanente entre la France et Chicago initiée par Alexandre Pierrepont,en partenariat avec l\'ambassade des Etats-Unis en France.'),
(5, '2017-09-25', 'Thomas et David Enhco ont perdu leur aïeule', 'On a appris la nuit dernière le décès de Gisèle Casadesus, doyenne des comédiennes. Elle avait 103 ans. Sociétaire de la Comédie Française, Gisèle Casadesus était la mère du chef d’orchestre Jean-Claude Casadesus et l’arrière grand-mère de deux musiciens de jazz qui nous sont chers, le pianiste Thomas Ehnco et le trompettiste David Enhco.'),
(6, '2017-09-25', 'Le Rhino Jazz Festival célèbre David Bowie', 'La 39e édition du Rhino Jazz Festival, créé autour de Rive-de-Gier, dans La Loire, aura comme fil conducteur cette année David Bowie. Ce sera du 5 au 29 octobre et pour l\'occasion, l\'ancien directeur de l\'Orchestre National de Jazz, Daniel Yvinec ,devrait assurer la direction artistique de trois soirées différentes avec notamment, le 21 octobre, à Saint-Etienne, la présence de Donny McCaslin, Mark Guiliana, Tim Lefebvre et Jason Lindner qui avaient collaboré avec Bowie sur son dernier album, Black Star'),
(7, '2017-09-24', 'Le chanteur soul Charles Bradley est décédé', 'C\'est sa maison de disques, Daptone Records, qui a annoncé ce samedi le décès à 68 ans du chanteur soul Charles Bradley des suites d\'un cancer. En novembre 2016, déjà, le même label annonçait la disparition de Sharon Jones... Né en Floride, Charles Bradley avait grandi à Brooklyn, découvert la musique de James Brown, et véritablement lancé sa carrière en 2001 avec l\'album No Time for daydreaming, rapidement suivi, en 2013, par Victim of Love. Son dernier disque, Changes, était paru l\'an passé.'),
(8, '2017-09-22', 'Une soirée éclectique au Vésinet', 'Le Théâtre du Vésinet, dans les Yvelines, proposera une grande soirée le vendredi 6 octobre pour fêter les 20 ans du Jazz Club de la Boucle, situé dans la même ville. Au programme, une partie de Boogie-Woogie enflammée avec notamment un maître du genre, Jean-Paul Amouroux, un hommage à Django Reinhardt avec Claude Tissendier et un orchestre New Orleans, le Mem\'Ory septet.'),
(9, '2017-09-22', 'Le nouveau projet d\'Olivier Bogé', 'Après deux albums qui ne sont pas passés inaperçus, \"The World Begins Today et Expanded Places, le multi-instrumentiste Olivier Bogé s\'est lancé dans un nouveau projet en partenariat avec le label participatif français Jazz & People. Dans When Ghosts Were Young, son nouvel opus pour lequel un appel aux dons vient d\'être lancé sur la plateforme KissKissBankBank, Olivier Bogé a surtout travaillé la guitare électrique même si l\'on entendra aussi au saxophone et au piano, avec toujours le désir de dissiper des frontières qui riment parfois trop souvent avec œillères entre jazz, folk, rock et musique classique.'),
(10, '2017-09-21', 'Mavis Staples repart au combat', 'Monument vivant du chant soul/gospel et Rhythm & Blues de Chicago, Mavis Staples vient d\'annoncer pour le 17 novembre la sortie d\'un nouvel album, \"If All I Was Was Black\". A 78 ans passés, et alors qu\'elle avait illuminé de sa présence la dernière édition du Cahors Blues Festival, la chanteuse promet un disque fortement engagé... Peut-être dans la lignée de ce qu\'a fait récemment Mightmy Mo Rodgers en baptisant un morceau \"Charlottesville Blues\" après les événements de Charlottesville à la mi-août aux Etats-Unis.');

-- --------------------------------------------------------

--
-- Structure de la table `podcast`
--

CREATE TABLE `podcast` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT 'TSF Jazz, la seule radio 100% JAZZ',
  `thumbnail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `podcast`
--

INSERT INTO `podcast` (`id`, `title`, `description`, `thumbnail`) VALUES
(1, 'Summer of Jazz!', 'TSF Jazz, la seule radio 100% JAZZ', 'podcast/TSF_SUM.png'),
(2, '59, Rue des archives', 'TSF Jazz, la seule radio 100% JAZZ', 'podcast/TSF_59RDA.jpg'),
(3, 'Les Matins Jazz', 'Du jazz, des infos, de la culture, des invités, des journaux qui crépitent et le bon parfum du café ... Le seul réveil 100% jazz !', 'podcast/TSF_MA.jpg'),
(4, 'Les Lundis du Duc', 'Artistes, musiciens, écrivains ou comédiens se rencontrent autour d\'un sujet d\'actu culturelle, en direct du Duc des Lombards... Le rendez-vous hebdomadaire Jazz et Culture !', 'podcast/TSF_LU.jpg'),
(5, 'Jazzlive', 'TSF Jazz, la seule radio 100% JAZZ', 'podcast/TSF_JL.jpg'),
(6, 'Portrait in Jazz', 'Scientifiques, comédiennes, musiciens, femmes politiques, cuisiniers, auteurs ou réalisatrices qui aiment le jazz et veulent partager leur passion.', 'podcast/TSF_PORT.jpg'),
(7, 'Made in China', 'TSF Jazz, la seule radio 100% JAZZ', 'podcast/TSF_MIC.jpg'),
(8, 'Coup de Projecteur', 'Un regard décalé sur la scène culturelle, par ceux qui la font et qui traverse toutes les formes artistiques.', 'podcast/TSF_CO.jpg'),
(9, 'Bon temps rouler', 'L\'émission blues et soul hebdomadaire de l\'harmoniciste Jean-Jacques Milteau... Histoire, actu, perles rares et nouveautés !', 'podcast/TSF_BO.jpg'),
(10, 'Jamie Cullum Show', 'Tous les vendredis, de 19h à 20h, le chanteur et pianiste anglais Jamie Cullum s\'installe sur les ondes de TSFJAZZ !', 'pocast/TSF_JCS.jpg'),
(11, 'Emissions Spéciales', 'Retrouvez toutes les émissions exceptionnelles de TSFJAZZ !', 'podcast/TSF_EM.jpg'),
(12, 'La chronique Hi-Fi', 'TSF Jazz, la seule radio 100% JAZZ', 'podcast/TSF_CHRO.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `podcast_item`
--

CREATE TABLE `podcast_item` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `id_podcast` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `podcast_item`
--

INSERT INTO `podcast_item` (`id`, `title`, `author`, `file`, `date`, `duration`, `id_podcast`) VALUES
(1, 'Entretien avec Denis Antoine au Festival Jazz à Ramatuelle', 'Vincent Fichet', 'podcasts/JAR_2017-08-20_DENISANTOINE.mp3', '2017-08-20', '26:05', 1),
(2, 'Yaron Herman Trio au Festival Jazz à Ramatuelle', 'Vincent Fichet', 'podcasts/JAR_2017-08-20_YARONHERMAN.mp3', '2017-08-20', '01:26:09', 1),
(3, 'Entretien avec Lou Tavano au Festival Jazz à Ramatuelle', 'Laure Albernhe', 'podcasts/JAR_2017-08-19_LOUTAVANOITV.mp3', '2017-08-19', '17:00', 1),
(4, 'Entretien avec Erwan Gauthier au Festival Jazz à Ramatuelle', 'Vincent Fichet', 'podcasts/JAR_2017-08-19_ERWANGAUTHIER_ITV.mp3', '2017-09-26', '06:53', 1),
(5, 'Entretien avec Michel Mey au Festival Jazz à Ramatuelle', 'Vincent Fichet', 'podcasts/JAR_2017-08-19_MICHELMEY_ITV.mp3', '2017-08-19', '06:35', 1),
(8, 'Charles Mingus, 1964', 'David Koperhant', 'podcasts/59rda_2017-01-22.mp3', '2017-08-30', '57:44', 2),
(9, 'John Coltrane, le Jazz à pas de géant (Episode 02)', 'David Koperhant', 'podcasts/59RDA_2017-07-02.mp3', '2017-07-02', '01:01:13', 2),
(12, 'John Coltrane, le Jazz à pas de géant (Episode 01)', 'David Koperhant', 'podcasts/59RDA_2017-06-25.mp3', '2017-06-25', '01:05:18', 2),
(13, 'Robert Johnson, celui qui pactisa avec le diable', 'David Koperhant', 'podcasts/59RDA_RJ_2017-06-18.mp3', '2017-06-18', '01:00:11', 2),
(14, 'Herbie Hancock, les années Blue Note', 'David Koperhant', 'podcasts/59RDA_2017-06-11.mp3', '2017-06-11', '57:38', 2),
(15, 'Les 80ans de la mort tragique de Bessie Smith', 'Laure Albernhe, Laurent Sapir', 'podcasts/260917 6h45.mp3', '2017-09-26', '03:43', 3),
(16, 'Michel Legrand regrette les clubs', 'Laure Albernhe, Laurent Sapir', 'podcasts/260917 8h45.mp3', '2017-09-26', '02:17', 3),
(17, 'Kamasi Washington dans MC Le son du monde', 'Laure Albernhe, Laurent Sapir', 'podcasts/260917 9h15.mp3', '2017-09-26', '02:21', 3),
(18, 'L\'Automne à Pékin\" de Vian réédition et BD', 'Laure Albernhe, Laurent Sapir', 'podcasts/250917 6h45.mp3', '2017-09-25', '02:19', 3),
(19, 'Hommage à Charles Bradley', 'Laure Albernhe, Laurent Sapir', 'podcasts/250917 7h15.mp3', '2017-09-25', '02:52', 3),
(20, 'Michel Legrand', 'Sebastien Vidal, Laurent Sapir', 'podcasts/LDD_LEGRAND_250917.mp3', '2017-09-25', '57:17', 4),
(21, 'Zydeco', 'Sebastien Vidal, Laurent Sapir', 'podcasts/LDD180917.mp3', '2017-09-18', '40:51', 4),
(22, 'Summer of Love', 'Sebastien Vidal, Laurent Sapir', 'podcasts/LDD SUMMEROFLOVE 110917 .mp3', '2017-09-11', '41:24', 4),
(23, 'Les Tubes de l\'été 2017', 'Sebastien Vidal, Laurent Sapir', 'podcasts/LDD_2017-06-26.mp3', '2017-06-26', '01:14:07', 4),
(24, 'Tous au Caveau de la Huchette !', 'Sebastien Vidal, Laurent Sapir', 'podcasts/LDD_2017-06-19.mp3', '2017-06-19', '01:02:07', 4),
(25, 'Kelin-Kelin Orchestra au Duc des Lombards', 'Sébastien Doviane', 'podcasts/Jazzlive_KelinKelinOrchestra_250917.mp3', '2017-09-25', '01:09:09', 5),
(26, 'Eric Legnini, Tribute to Les McCann au Duc des Lombards', 'Sébastien Doviane', 'podcasts/JAZZLIVE ERICLEGNINI 200917.mp3', '2017-09-20', '01:03:21', 5),
(27, 'Vincent Bourgeyx au Duc des Lombards', 'Sébastien Doviane', 'podcasts/JAZZLIVE VINCENTBOURGEYX 180917.mp3', '2017-09-18', '01:22:31', 5),
(28, 'Trio Rosenberg au Duc des Lombards', 'Sébastien Doviane', 'podcasts/JAZZLIVE TRIOROSENBERG 140917.mp3', '2017-06-14', '01:03:27', 5),
(29, 'Mathias Levy et Adrien Moignard au Sunset', 'Sébastien Doviane', 'podcasts/JAZZLIVE MATHIASLEVY 130917.mp3', '2017-06-13', '31:16', 5),
(30, 'Portrait In Jazz : La TSF Jazz Team', 'Laurent de Wilde', 'podcasts/PIJ_TeamTSF_2017-06-28.mp3', '2017-06-28', '01:00:59', 6),
(31, 'Portrait In Jazz : Thierry Arnaud', 'Laurent de Wilde', 'podcasts/PIJ_2017-06-21.mp3', '2017-06-21', '47:07', 6),
(32, 'Portrait In Jazz : Atmen Kelif', 'Laurent de Wilde', 'podcasts/PIJ_2017-06-14.mp3', '2017-06-14', '46:24', 6),
(33, 'Portrait In Jazz : Jackie Berroyer', 'Laurent de Wilde', 'podcasts/PIJ_2017-06-07.mp3', '2017-06-07', '48:46', 6),
(34, 'Portrait In Jazz : Émilie Besse', 'Laurent de Wilde', 'podcasts/PIJ_BESSE_2017-05-31.mp3', '2017-05-31', '47:27', 6),
(35, 'Made In China : Spécial Auditeurs (Episode 03)', 'Laure Albernhe', 'podcasts/MIC_AUDITEURS3_210917.mp3', '2017-09-21', '44:13', 7),
(36, 'Made In China : Spécial Auditeurs (Episode 02)', 'China Moses', 'podcasts/MIC_2017-06-29.mp3', '2017-06-29', '47:27', 7),
(37, 'Made In China : Spécial Auditeurs (Episode 01)', 'China Moses', 'podcasts/MIC_2017-06-22.mp3', '2017-06-22', '46:04', 7),
(38, 'Made In China : Bobby Womack', 'China Moses', 'podcasts/MIC_2017-06-15.mp3', '2017-06-15', '37:47', 7),
(39, 'Made In China : Les Voix de 2017', 'China Moses', 'podcasts/MIC_2017-06-08.mp3', '2017-06-08', '41:26', 7),
(40, 'La voix est le miroir de l\'âme, un livre d\'Angélique Kidjo', 'Thierry Lebon', 'podcasts/COUPDEPROJECTEUR 250917.mp3', '2017-09-25', '03:33', 8),
(41, 'Jean Moulin, une pièce de jean-Marie Besset', 'Thierry Lebon', 'podcasts/COUPDEPROJECTEUR 092217.mp3', '2017-09-22', '03:16', 8),
(42, 'Niels, un livre d\'Alexis Ragougneau', 'Laurent Sapir', 'podcasts/COUPDEPROJECTEUR_210917.mp3', '2017-09-21', '03:16', 8),
(43, 'Mon Garçon, un film de Christian Carion', 'Thierry Lebon', 'podcasts/COUPDEPROJECTEUR 200917.mp3', '2017-09-20', '04:00', 8),
(44, 'Panama Al Brown, une bande dessinée d\'Alex W. Inker', 'Laurent Sapir', 'podcasts/COUPDEPROJECTEUR 150917.mp3', '2017-09-15', '02:43', 8),
(45, 'Bon Temps Rouler : \"House\"', 'Jean-Jacques Milteau', 'podcasts/BTR HOUSE 120917.mp3', '2017-09-27', '50:37', 9),
(46, 'Bon Temps Rouler : \"Stevie Winwood Live\"', 'Jean-Jacques Milteau', 'podcasts/BTR_STEVIEWINWOODLIVE_050917.mp3', '2017-09-05', '50:37', 9),
(47, 'Bon Temps Rouler : \"Bonne Humeur\"', 'Jean-Jacques Milteau', 'podcasts/BTR_2017-06-27.mp3', '2017-06-27', '50:37', 9),
(48, 'Bon Temps Rouler : \"Expression\"', 'Jean-Jacques Milteau', 'podcasts/BTR_2017-06-20.mp3', '2017-06-20', '50:37', 9),
(49, 'Bon Temps Rouler : \"Hi / Don Bryant\"', 'Jean-Jacques Milteau', 'podcasts/BTR_2017-06-13.mp3', '2017-06-13', '50:37', 9),
(50, 'Jamie Cullum Show : Focus sur le batteur Richard Spaven', 'Laure Albernhe', 'podcasts/JCS PART_150917.mp3', '2017-09-15', '54:41', 10),
(51, 'Jamie Cullum Show', 'Laure Albernhe', 'podcasts/JCS_2017-06-30.mp3', '2017-06-30', '43:45', 10),
(52, 'Jamie Cullum Show', 'Laure Albernhe', 'podcasts/JCS_2017-06-23.mp3', '2017-06-23', '41:45', 10),
(53, 'Jamie Cullum Show', 'Laure Albernhe', 'podcasts/JCS_2017-06-16.mp3', '2017-06-16', '43:37', 10),
(54, 'Jamie Cullum Show', 'Laure Albernhe', 'podcasts/JCS_2017-06-09.mp3', '2017-06-09', '45:10', 10),
(55, 'Voodoo et Compagnie, épisode 1 : La Nouvelle Orléans', 'Jean-Charles Doukhan', 'podcasts/VOODOOEPISODE1.mp3', '2017-09-08', '27:32', 11),
(56, 'Voodoo et Compagnie, épisode 2 : Les Blacks Panthers', 'Jean-Charles Doukhan', 'podcasts/20h de tsf voodoo et compagnie episode 2 les blacks panthers.mp3', '2017-09-08', '28:25', 11),
(57, 'Voodoo et Compagnie, épisode 3 : Jamaïque', 'Jean-Charles Doukhan', 'podcasts/20h de tsf voodoo et compagnie episode 3 haiti.mp3', '2017-09-08', '28:15', 11),
(58, 'Voodoo et Compagnie, épisode 4 : Haïti', 'Jean-Charles Doukhan', 'podcasts/20h de tsf voodoo et compagnie episode 4 haiti.mp3', '2017-09-27', '29:09', 11),
(59, 'Voodoo et Compagnie, épisode 5 : L\'Afrique du Sud', 'Jean-Charles Doukhan', 'podcasts/20h de tsf voodoo et compagnie episode 5 l afrique du sud.mp3', '2017-09-27', '29:14', 11),
(60, 'La Chronique Hi-Fi: \"L\'Enceinte Abscisse\"', 'Laure Albernhe', 'podcasts/CHRONIQUE-HIFI_2806.mp3', '2017-06-28', '02:09', 12),
(61, 'La Chronique Hi-Fi : \"NuPrime Audio\"', 'Laure Albernhe', 'podcasts/CHRONIQUE-HIFI_2106.mp3', '2017-06-21', '02:17', 12),
(62, 'La Chronique Hi-Fi : \"ADL GT40 Alpha\"', 'Laure Albernhe', 'podcasts/CHRONIQUE-HIFI_1406.mp3', '2017-06-14', '02:18', 12),
(63, 'La Chronique Hi-Fi : \"Le FiiO X5 III\"', 'Laure Albernhe', 'podcasts/CHRONIQUE-HIFI_0806.mp3', '2017-06-07', '02:13', 12),
(64, 'La Chronique Hi-Fi : \"Le Nano iOne iFi Audio\"', 'Laure Albernhe', 'podcasts/CHRONIQUE-HIFI_0106.mp3', '2017-05-31', '02:26', 12);

-- --------------------------------------------------------

--
-- Structure de la table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auditors_treasure`
--
ALTER TABLE `auditors_treasure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `podcast_item`
--
ALTER TABLE `podcast_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_podcast_item_id_podcast` (`id_podcast`);

--
-- Index pour la table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auditors_treasure`
--
ALTER TABLE `auditors_treasure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `podcast_item`
--
ALTER TABLE `podcast_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `podcast_item`
--
ALTER TABLE `podcast_item`
  ADD CONSTRAINT `FK_podcast_item_id_podcast` FOREIGN KEY (`id_podcast`) REFERENCES `podcast` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
