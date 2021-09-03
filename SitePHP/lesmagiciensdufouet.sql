-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 sep. 2021 à 15:03
-- Version du serveur : 5.7.31
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lesmagiciensdufouet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chef`
--

DROP TABLE IF EXISTS `chef`;
CREATE TABLE IF NOT EXISTS `chef` (
  `id_chef` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `premon` varchar(50) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `descriptif` text NOT NULL,
  PRIMARY KEY (`id_chef`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chef`
--

INSERT INTO `chef` (`id_chef`, `nom`, `premon`, `photo`, `descriptif`) VALUES
(1, 'Lignac', ' Cyril', 'cyril_lignac.jpg', 'Originaire de l’Aveyron, Cyril Lignac est l’un des chefs les plus populaires de l’Hexagone. Après son apprentissage dans sa région natale, le Chef Cyril Lignac rejoint la brigade d’Alain Passard à l’Arpège à Paris en 2000, et poursuit sa formation auprès des plus grands chefs comme notamment les Frères Pourcel au Jardin des Sens et à la Maison Blanche. C’est à leurs côtés qu’il découvre le plaisir de l’improvisation et que s’affirme sa passion pour ce métier. Chef de cuisine à la tête d’un restaurant gastronomique, de deux bistrots parisiens, de plusieurs pâtisseries et plus récemment d’une chocolaterie et d\'un sushi bar germanopratin, il transmet également sa passion à travers un atelier de création culinaire.'),
(2, 'Pic ', 'Anne-Sophie ', 'anne-sophie-pic.jpg', 'Honorée de la troisième étoile en 2007, Anne-Sophie Pic - seule femme triplement étoilée en France - fonde sa cuisine d’auteur sur le respect, la saveur et la simplicité. Une simplicité – toute féminine – qui s’amuse de la recherche de la perfection et s’affirme dans la franchise des goûts. ');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `membreID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(30) NOT NULL DEFAULT 'default-profile.png',
  PRIMARY KEY (`membreID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`membreID`, `pseudo`, `password`, `avatar`) VALUES
(4, 'pauline', '123123', 'c9537fc1ddb4d3db.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id_recette` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `difficulte` int(11) NOT NULL,
  `temps` varchar(50) NOT NULL,
  `cout` int(11) NOT NULL,
  `ingredient` text NOT NULL,
  `descriptif` text NOT NULL,
  `etapes` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `plat` int(11) NOT NULL,
  `chef` varchar(50) NOT NULL,
  PRIMARY KEY (`id_recette`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id_recette`, `titre`, `photo`, `difficulte`, `temps`, `cout`, `ingredient`, `descriptif`, `etapes`, `date`, `plat`, `chef`) VALUES
(1, 'Choux à la crème ', '1.jpg', 4, '1 heure et 20 minutes', 2, 'Les ingrédients\r\ndes choux \r\nde la crème \r\ndu sucre \r\ndu poney', 'Une recette incontournable, des petits choux hiboux cailloux à croquer !', 'Les étapes\r\nPréparer la pâte : faire préchauffer le four à 200°C (thermostat 6/7).\r\nFaire chauffer dans une casserole le beurre, l\'eau, le sel et le sucre. Dès que tout est fondu, verser toute la farine d\'un coup et bien mélanger avec une cuillère en bois, jusqu\'à ce que la pâte n’adhère plus à la cuillère ni à la casserole.\r\nHors du feu, ajouter les œufs un à un, puis mélanger à chaque fois ce que le mélange soit bon.\r\nBeurrer une tôle à pâtisserie, puis disposer la pâte en petits tas (18 pour des petits choux, 12 pour des gros). Utiliser pour cela une poche à douille, ou tout simplement deux cuillères.\r\nCuire au four 20 à 25 mn. Petit truc pour vérifier la cuisson : Les choux doivent résister à une pression du doigt (ou de la cuillère, si l\'on a peur de se brûler !).\r\nPréparer la crème pâtissière : faire chauffer dans une casserole le lait, le sel et le sucre vanillé.\r\nPendant que le lait chauffe, travailler dans une grande terrine le sucre et les œufs avec une cuillère en bois jusqu\'à ce que le mélange blanchisse. Incorporer la farine puis, peu à peu, le lait bouillant.\r\nReverser dans la casserole (à allure douce) et remuer jusqu\'à ce que la crème épaississe. Verser dans un plat.\r\nLorsque la crème est refroidie, vous pouvez y ajouter une cuillère à soupe d\'Amaretto ou d\'une autre liqueur (Baileys, Amiaula...). Bien mélanger après cet ajout. NB : Ne rien ajouter lorsque la crème est chaude !\r\nLa touche finale : la préparation des choux. Remplissez de crème la poche à douille et remplissez les choux un à un, en pratiquant un trou dessous (vous n\'avez jamais remarqué, dans les boulangeries, les trous sous les religieuses ?). Si vous n\'avez pas de poche à douille, couper chaque chou à moitié en deux pour y insérer la crème.', '2021-08-25 13:05:55', 2, 'Jean-Pierre Kof'),
(2, 'Rôti de veau, ,pommes boulangère ', '2.jpg', 3, '1 heure et 30 minutes', 3, 'Ingrédients\r\n\r\n    1 rôti de veau de 800 g\r\n    6 gousses d’ail\r\n    700 g de pommes de terre Charlotte\r\n    250 g d’oignons roses de Roscoff\r\n    1 litre d’eau\r\n    1 cube de bouillon de volaille\r\n    45 g de beurre\r\n    4 brins de thym frais\r\n    1 feuille de laurier\r\n    Sel fin\r\n    Poivre du moulin\r\n\r\n', 'Un bon plat qui fera plaisir à tous !', '\r\nÉtape 1 : Préparation de la garniture\r\nÉplucher et laver les pommes de terre, les tailler en lamelles à la mandoline sans les repasser dans l’eau pour garder l’amidon. Les déposer dans un saladier. Éplucher les oignons et couper les racines, tailler en lamelles très fines. Les garder dans un bol.\r\n\r\nPréparer un bouillon de volaille en cube. Préchauffer le four à 180°C.\r\n\r\nÉtape 2 : Préparation du rôti et cuisson\r\nDans un plat de cuisson beurré, salé et poivré, étaler en couches les lamelles de pommes de terre et d’oignons en ajoutant du beurre, du sel et du poivre entre chaque légume. Verser 2 louches de bouillon. Recouvrir à la fin de pommes de terre, de noisettes de beurre, d’une louche de bouillon. Assaisonner de sel et poivre, déposer les gousses d’ail en chemise, deux brins de thym et une feuille de laurier. Enfourner pour 45 minutes.\r\n\r\nHuiler légèrement l’intégralité́ du rôti en le massant puis assaisonner avec du sel fin et du poivre du moulin généreusement. Le napper de beurre pommade. Déposer sur le gratin de pommes boulangère après les 45 minutes de cuisson puis remettre au four pour 45 minutes de cuisson.\r\n\r\n', '2021-08-25 13:13:52', 6, 'Cyril Lignac'),
(3, 'Le mille-feuille blanc ', '3.jpg', 5, '2 heures', 4, 'Ingrédients\r\nGlace royale\r\n\r\n    9 g de blancs d’œufs\r\n    45 g de sucre glace\r\n    3 gouttes de jus de citron\r\n\r\nFeuilletage\r\n\r\n    170 g de beurre\r\n    4 g de sel\r\n    120 g d’eau\r\n    200 g de farine\r\n    1 g de vinaigre\r\n\r\nCristalline\r\n\r\n    80 g de sucre semoule\r\n    32 g de glucose\r\n    32 g d’eau\r\n\r\nInfusion jasmin (gelée)\r\n\r\n    2 g de gélatine (1 feuille)\r\n    63 g d’eau\r\n    25 g de sucre semoule\r\n    3 g de jasmin séché (thé)\r\n\r\nCrème vanille\r\n\r\n    120 g de mascarpone\r\n    180 g de crème fleurette\r\n    60 g de lait concentré sucré\r\n    1/2 gousse de vanille de Tahiti\r\n    24 g de yaourt nature\r\n\r\nMousse de lait\r\n\r\n    40 cl de lait\r\n    Fine poudre de poivre Voatsiperifery\r\n\r\n', 'Un excellent dessert pour les papilles !', '\r\nÉtape 1 : Glace royale\r\nLa veille, dans un saladier, mélangez les blancs d’œufs et le sucre glace tamisé à l’aide d’une maryse. Ajoutez le jus de citron et mélangez bien. Dans un chablon (pochoir) très fin et carré de 5 cm déposé sur un plastique rhodoïd, lissez la glace royale à l’aide d’un coupe-pâte ou d’une spatule coudée. Laissez sécher une nuit à température ambiante. Le jour même, décollez délicatement et passez les bords à la microplane, réservez à l’abri de l’humidité dans une boîte hermétique.\r\n\r\nÉtape 2 : Feuilletage\r\nLaissez le beurre revenir à température ambiante. Étalez-en 150 g en forme de carré sur du papier cuisson. Réservez.\r\nRéalisez la détrempe : faites dissoudre le sel dans l’eau. Dans la cuve d’un robot pâtissier ou dans un saladier si vous le faites à la main, mettez la farine avec le reste de beurre fondu froid. Ajoutez l’eau salée, puis mélangez rapidement avec le crochet. Attention de ne pas trop travailler la pâte.\r\nLorsqu’une boule commence à se former, déposez-la sur un plan de travail fariné, puis faites une incision en forme de croix à l’aide d’un couteau. Emballez-la dans du film alimentaire, puis mettez-la au réfrigérateur pour 2 h.\r\nSur un plan de travail fariné, abaissez la détrempe au rouleau à pâtisserie en forme de carré. Déposez le carré de beurre au centre, puis refermez comme une enveloppe en soudant bien.\r\nÉtalez en formant un long rectangle. Réalisez alors le premier tour double : pliez la pâte en trois, tournez d’un quart de tour le carré obtenu de manière à avoir la pliure sur le côté, puis étalez en un long rectangle. Répétez une nouvelle fois la même opération. Stockez au réfrigérateur pendant 2 h. Recommencez deux autres fois pour faire deux autres tours doubles, en laissant à chaque fois la pâte reposer au réfrigérateur. Abaissez la pâte à 2,5 mm d’épaisseur, puis remettez au réfrigérateur.\r\n\r\nÉtape 3 : Cristalline\r\nMettez le sucre semoule, le glucose et l’eau dans une casserole, puis faites cuire à 160 °C. Coulez la préparation sur une feuille de papier cuisson et laissez refroidir. Cassez grossièrement la plaque obtenue, puis mixez au blender afin d’obtenir une poudre.\r\n\r\nÉtape 4 : Infusion jasmin (gelée)\r\nFaites tremper la gélatine dans de l’eau froide. Emballez un cadre de 20 x 20 cm de film alimentaire, puis déposez-le sur du papier cuisson ou sur un tapis en silicone. Mettez l’eau et le sucre dans une casserole et portez à ébullition. Ajoutez le jasmin, laissez infuser 7 min, puis filtrez. Ajoutez la gélatine essorée et mélangez. Coulez dans le cadre, puis laissez prendre au réfrigérateur. Quand la gelée est prise, détaillez des disques à l’aide d’un emporte-pièce de 4 cm de diamètre.\r\n\r\nÉtape 5 : Crème vanille\r\nDans la cuve d’un robot pâtissier muni du fouet, mettez le mascarpone, la crème fleurette, le lait concentré sucré et les graines de la gousse de vanille. Fouettez pour faire monter la crème. Mettez 60 g de cette crème dans un saladier, puis conservez le reste dans une poche à douille.\r\nDétendez les 60 g de crème avec le yaourt nature, puis mettez le tout dans une poche à douille.\r\n\r\nÉtape 6 : Mousse de lait\r\nMettez le lait dans une casserole avec un peu de poivre Voatsiperifery et faites-le chauffer à 60-70 °C. Émulsionnez-le à l’aide d’un mixeur plongeant.\r\n\r\nÉtape 7 : Cuisson de la pâte feuilletée\r\nPréchauffez le four à 150 °C (th. 5). Détaillez la pâte feuilletée avec un emporte-pièce carré de 5 cm. Déposez-les sur une plaque recouverte de papier cuisson ou d’un tapis en silicone et enfournez pour 25 min environ. Coupez les carrés de pâte en trois dans l’épaisseur, rectifiez leur taille si nécessaire pour qu’ils fassent 4 cm de côté. Saupoudrez ces carrés de cristalline, puis repassez au four pour 1 à 2 min à 160 °C (th. 5) afin de donner du croustillant au feuilletage. La cuisson de la pâte feuilletée est à adapter en fonction de votre four.\r\nVous pouvez également cuire les carrés de pâte feuilletée individuellement avec un emporte pièce carré plus grand, que vous placerez autour, ce qui permettra à la pâte feuilletée de monter plus régulièrement et de façon plus droite.\r\n\r\nÉtape 8 : Montage\r\nDéposez des cadres en inox de 5 cm de côté sur une feuille de papier cuisson. Déposez de la crème vanille bien serré dans le fond des cadres, puis à l’aide d’une spatule coudée, remontez-la sur les bords.\r\nDéposez un premier carré de feuilletage dans le fond, ajoutez une pointe de crème vanille au yaourt ainsi qu’un disque de gelée. Recommencez 2 fois les mêmes opérations, puis terminez en déposant un carré de feuilletage. Recouvrez de crème vanille sans yaourt et lissez.\r\nÀ l’aide d’une spatule, déplacez les cubes et déposez-les au centre des assiettes. Passez le chalumeau sur les arêtes des cadres, puis démoulez délicatement.\r\nÉmulsionnez à nouveau le lait au poivre Voatsiperifery. Déposez un carré de glace royale sur le dessus des cubes, puis, une fois l’émulsion de lait stabilisée, ajoutez 1 cuillerée de mousse de lait au poivre. Servez immédiatement.\r\n', '2021-08-25 13:18:02', 4, 'Anne-Sophie Pic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
