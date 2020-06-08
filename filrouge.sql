-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 juin 2020 à 00:42
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `filrouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `idBook` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `categ` int(11) NOT NULL,
  `auteur` varchar(155) NOT NULL,
  `editeur` varchar(100) NOT NULL,
  `bookImage` varchar(255) DEFAULT NULL,
  `theme` varchar(255) NOT NULL,
  `traducteur` varchar(50) DEFAULT NULL,
  `year` varchar(4) NOT NULL,
  `format` varchar(255) DEFAULT NULL,
  `langue` varchar(50) NOT NULL DEFAULT 'Français',
  `langue_orig` varchar(50) DEFAULT NULL,
  `resume` text NOT NULL,
  PRIMARY KEY (`idBook`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`idBook`, `titre`, `isbn`, `categ`, `auteur`, `editeur`, `bookImage`, `theme`, `traducteur`, `year`, `format`, `langue`, `langue_orig`, `resume`) VALUES
(1, 'LE CIEL DE DARJEELING', '9791026903567', 1, 'Nicole Vosseler', 'À vue d\'oeil', 'le_ciel_de_darjeeling.png', 'Roman', 'Jean-Marie Argelès', '2019', '2 vol. (751 p.) / couv. ill. en coul. / 24 cm', 'Français', 'Allemand', 'Cornouailles, 1876. Après la mort de son père, Helena, 16 ans, se retrouve dans la misère. Un jour, un inconnu lui fait une offre. Aussi riche que séduisant, Ian Neville lui propose de l\'épouser et d\'assurer l\'éducation de son jeune frère. Mais il y met une condition : qu\'elle accepte de le suivre en Inde, où il gère une vaste plantation de thé au pied de l\'Himalaya. L\'espoir de ne manquer de rien, le cadre de vie somptueux de Darjeeling et le charme de son époux ont raison de ses réticences. Jusqu\'au jour où, Ian étant en voyage, Helena reçoit la visite d\'un homme qui éveille en elle des questions sur le passé de Ian, dont celui-ci n\'a jamais rien voulu lui dire… Un voyage initiatique et sensuel aux confins de l\'Inde millénaire.'),
(3, 'L\'HEURE INDIGO', '9782846669023', 1, 'Kristin Harmel', 'À vue d\'oeil', 'lheure_indigo.jpg', 'Roman', 'Christine Barbaste', '2015', '505 p. / 24 cm', 'Français', 'Anglais', 'A Cape Cod, dans le Massachusetts, Hope s\'affaire derrière les fourneaux de la pâtisserie familiale. Entre son travail, la rébellion de sa fille adolescente, son récent divorce et ses soucis financiers, elle frôle parfois le surmenage. Hope s\'enfonce peu à peu dans la déprime et la résignation. Aussi, quand sa grand-mère Rose lui demande d\'aller en France retrouver sa famille disparue pendant la guerre, Hope accepte sans hésiter. Décidée à reprendre sa vie en main, elle s\'envole pour Paris en quête de ce passé dont elle ignore tout. Car le temps est compté : atteinte de la maladie d\'Alzheimer, la mémoire de Rose faiblit. Pour tout indice, elle a donné à sa petite-fille une simple liste de noms et une adresse.'),
(4, 'FAMILLE PARFAITE', '9782846669863', 1, 'Lisa Gardner', 'À vue d\'oeil', 'famille_parfaite.png', 'Actualité éditoriale', 'Cécile Deniard', '2016', '763 p. / 24 cm', 'Français', 'Anglais', 'Tout semble sourire à la famille Denbe : un mariage modèle, une belle situation, une ravissante fille, une demeure somptueuse dans la banlieue chic de Boston... Aussi, lorsqu\'ils disparaissent soudainement sans laisser la moindre piste, c\'est la stupéfaction. Pour la détective privée Tessa Leoni, l\'enlèvement ne fait aucun doute. Mais que pouvait bien cacher une existence en apparence aussi lisse ? Numéro un sur la liste des best-sellers du New York Times, le nouveau thriller de Lisa Gardner nous plonge dans les secrets d\'une famille au-dessus de tout soupçon.'),
(5, 'L\'ETRANGER', '9782070360024', 1, 'Albert Camus', 'Gallimard', 'letranger.png', 'Roman', '', '1971', '183 p. / 18 cm', 'Français', '', '«Quand la sonnerie a encore retenti, que la porte du box s\'est ouverte, c\'est le silence de la salle qui est monté vers moi, le silence, et cette singulière sensation que j\'ai eue lorsque j\'ai constaté que le jeune journaliste avait détourné les yeux. Je n\'ai pas regardé du côté de Marie. Je n\'en ai pas eu le temps parce que le président m\'a dit dans une forme bizarre que j\'aurais la tête tranchée sur une place publique au nom du peuple français...»'),
(6, 'INVERSIONS', '9782253066835', 1, 'Iain Banks', 'Livre de poche', 'inversions.jpg', 'Science-fiction', 'Nathalie Serval', '2003', '412 p. / 18 cm', 'Français', 'Anglais', 'Un monde engagé dans le difficile passage de la féodalité à la Renaissance, de la théocratie à la science. Un monde ravagé par des guerres et par des ambitions. Mais qui n\'est pas notre Terre. Cette planète connaît une autre histoire. Tout aussi barbare. Et sur ce monde étranger, éloigné dans le temps et dans l\'espace, qui ne sait rien d\'autres civilisations essaimées dans l\'espace, deux étrangers se croisent, s\'effleurent à peine. Un médecin, Vossll, qui est aussi une femme, et un guerrier, Dewar. Ils n\'ont apparemment rien en commun, sauf de surprenants savoirs. Au jeu de la compassion et de la cruauté, ils vont échanger leurs rôles. Avant peut-être de retourner vers leur véritable univers. Inversions est le cinquième volet du cycle de la Culture. Les quatre précédents, Une forme de guerre , L\'Homme des jeux , L\'Usage des armes et Excession ont été publiés dans la même collection.'),
(7, 'LE TROISIÈME ÉTÉ', '9782070524242', 1, 'Ann Brashares', 'Gallimard', 'le_troisieme_ete.png', 'Romans', 'Vanessa Rubio', '2005', '370 p. / 22 cm', 'Français', 'Anglais', 'Rien ne sera plus comme avant. A la fin des vacances, Carmen, Tibby ; Bridget et Lena devront se séparer, se rendre chacune dans une université différente. Plus que jamais, elles se raccrochent au symbole de leur amitié : le Jean magique, témoin de leurs vies, témoin de ce troisième été qui s\'annonce décisif... Carmen voit s\'effondrer ses belles certitudes. Après avoir découvert que sa mère lui cachait un incroyable secret, un charmant jeune homme lui fait prendre conscience qu\'une jeune fille aimable et généreuse sommeille peut-être en elle... Tibby se pose plus de questions que jamais. Sa petite sœur a frôlé la mort et elle se sent responsable de cet accident. Alors que la vie lui tend les bras, Tibby résiste au bonheur qui s\'offre à elle...'),
(8, 'MAUDIT MERCREDI - 2 VOLUMES', '9791026901440', 1, 'Nicci French', 'Voir de près', 'maudit_mercredi.png', 'Roman', 'Marianne Bertrand', '2017', '928 p. / 24 cm', 'Français', 'Anglais', 'Ruth Lennox, épouse et mère modèle, est sauvagement assassinée. Aide-soignante charitable et voisine exemplaire aimée de tous, voilà une femme sans histoire, pensait l’inspecteur Karlsson. Jusqu’à ce que les langues se délient… Face aux mensonges d’une famille meurtrie, il a besoin de la psychothérapeute Frieda Klein qui n’a pas son pareil pour déceler les secrets. Mais, traumatisée par une récente agression, jalousée par un confrère retors, et sollicitée par sa nièce au bord de la crise de nerfs, elle est obnubilée par d’étranges intuitions qui la mènent sur la piste de jeunes filles disparues auxquelles personne ne s’intéresse… À corps perdu, Frieda se lance à la poursuite d’un tueur en série ignoré de tous. À moins qu’il ne soit que la projection de ses propres angoisses ? Suspense garanti dans ce troisième opus des Nicci French. Le jeu du chat et de la souris entre la mystérieuse Frieda Klein et son ange gardien, le psychopathe Dean Reeve, se poursuit.'),
(9, 'LES 1000 LIEUX QU\'IL FAUT AVOIR VUS DANS SA VIE', '9782082013499', 4, 'Patricia Schultz', 'Flammarion', 'les_1000_lieux.png', 'Guide', '', '2006', '973 p. / 20 cm', 'Français', 'Anglais', 'Voici enfin traduit en français ce guide à nul autre pareil, qui a connu un succès sans précédent aux États-Unis. Îles lointaines, merveilles naturelles, cathédrales, musées, restaurants mythiques, villages perchés, palais, vignobles, souks... se succèdent au fil des pages, comme autant d\'invitations à voyager tout autour du monde, avec Patricia Schultz. Sa description très personnelle de chaque lieu est toujours accompagnée de renseignements pratiques fort utiles (comment s\'y rendre, en quelle saison, pour quel prix...). Voyageur infatigable, amoureux de vieilles pierres et de civilisations anciennes, ou rêveur impénitent, chacun trouvera dans ce livre de quoi passer des moments inoubliables. Mark Twain disait : « Dans vingt ans, c\'est ce que vous n\'aurez pas fait plutôt que ce que vous aurez fait que vous regretterez le plus. Alors larguez les amarres (...) Explorez. Rêvez. Découvrez. » « Un livre qui vous montre les endroits les plus beaux, les plus drôles et les plus inoubliables partout dans le monde. Impossible de ne pas y trouver son compte. On ne résiste pas au plaisir d\'y jeter un coup d\'oeil, d\'ouvrir une page au hasard et de s\'imaginer marquer de ses pas un endroit merveilleux du globe. » Newsweek'),
(10, 'ATLAS GÉOGRAPHIQUE', '9782809914962', 3, 'Collectif', 'Place des Victoires', 'atlas.png', 'Géographie', '', '', '231 p. / 33 cm', 'Français', '', 'Le monde qui vous entoure vous intéresse ? Ce livre est pour vous. Grâce à une cartographie très détaillée et des informations sur toutes les grandes thématiques physiques, politiques et sociales (climat, population, religions, commerce...), L\'atlas géographique constitue un outil indispensable pour le collégien et le lycéen, le voyageur en chambre, et d\'une manière générale, pour toute personne curieuse de mieux connaître sa planète. Présenté par continents, avec un texte didactique sur chaque région et de nombreuses cartes, ce tour du monde offre une vue d\'ensemble passionnante de notre univers. Un glossaire et une table des matières détaillée viennent compléter ce précieux ouvrage de référence.'),
(11, 'HISTOIRE DE FRANCE', '9782842590086', 3, 'Aedis', 'Aedis', 'histoire_de_france.png', 'Guide', '', '', '22 cm', 'Français', '', 'Chronologie de Vercingétorix à la Ve République Découvrez pour chaque période, les grandes étapes de la construction du territoire. Un ebook pratique et malin qui répondra rapidement à toutes vos questions sur ce sujet. Avec plus de 300 titres parus, la collection \"Petit Guide\" vous propose de découvrir l\'essentiel des sujets les plus passionnants et répond à vos questions sur l\'histoire, les sciences, la nature, les religions, la santé, la cuisine, les langues et bien d\'autres domaines !\r\n'),
(12, 'L\'AMÉNAGEMENT DU TERRITOIRE', '9782130732556', 4, 'Jérôme Monod, Philippe de Castelbajac', 'PUF', 'lamenagement_du_territoire.png', 'Guide', '', '', '125 p. / 18 cm', 'Français', '', 'Comment expliquer cette préoccupation, désormais répandue sur tous les continents, d\'aménager, c\'est-à-dire de \" disposer avec ordre \", le territoire quand on sait que cet objectif était ignoré des générations précédentes ? Autrement dit, quelle est l\'utilité de cette discipline ? Quels sont ses enjeux, ses acteurs, ses résultats ? Le présent livre explore les fondements de cette dimension politique devenue essentielle, ses tenants et aboutissants sur le plan national mais aussi dans l\'espace de l\'Union européenne. Il en étudie les voies politiques et institutionnelles (la Délégation à l\'aménagement du territoire, la décentralisation) et économiques (les régions, les villes et les campagnes). Il en dresse le bilan et en dessine l\'avenir.'),
(13, 'LE GRAND LIVRE DU DIY : DO IT YOURSELF', '9782501109819', 2, 'Émilie Guelpa', 'Marabout', 'le_grand_livre_du_diy.png', 'Art', '', '2015', '319 p. / 26 cm', 'Français', '', 'Cet ouvrage regroupe plus de 150 DIY (Do it yourself) autour des matières : marbre, béton, textile, bois, verre... pour réaliser des petits bijoux, objets, accessoires et autres décorations. Toutes les techniques expliquées pas à pas. Des créations très tendance. Pour les débutants comme les plus expérimentés.'),
(14, 'BABYLON BABIES', '9782070417537', 1, 'Maurice G. Dantec', 'Gallimard', 'babylon_babies.jpg', 'Science-fiction', '', '2001', '719 p. / 21 cm', 'Français', '', 'Un mafieux sibérien collectionneur de missiles. Un officier du GRU corrompu et lecteur de Sun Tzu. Une jeune schizophrène semi-amnésique trimballant une arme biologique révolutionnaire. Des scientifiques assumant leur rôle d\'apprentis sorciers et prêts à transgresser la Loi. Une poignée de soldats perdus à l\'autre bout du monde et se battant pour des causes sans espoir. Des sectes post-millénaristes à l\'assaut des Citadelles du savoir. Des gangs de bikers se livrant à une guerre sans merci à coups de lance-roquettes. De jeunes technopunks préparant l\'Apocalypse. Un écrivain de science-fiction à moitié fou prétendant recevoir des messages du futur.N\'ayez pas peur.Oui, il y a tout cela dans Babylon Babies.Non, il n\'y a pas d\'autre issue. Après La sirène rouge et Les racines du mal, l\'hallucinant Babylon Babies rend compte d\'un XXIᵉ siècle désemparé, chaotique, au seuil de l\'apocalypse.'),
(15, 'UNE AUTRE VIE', '9782253047858', 1, 'Danielle Steel', 'Le Livre de poche', 'une_autre_vie.png', 'Roman', 'Florence Rogers', '', '414 p. / 17 cm', 'Français', 'Anglais', 'Tout les sépare : une profession absorbante, une famille exigeante et, enfin, les milliers de kilomètres entre New York, où Mélanie présente le journal télévisé, et Los Angeles, dont Peter dirige le principal hôpital. Du temps, ils en ont si peu pour leur vie privée ! Peter, spécialiste international de la greffe du cœur, est à la disposition de ses opérés. A cause de son travail, Mélanie est obligée de vivre au jour le jour, sans faire de projets. Dérober quelques heures à de telles contraintes représente un tour de force. Alors, pourront-ils se satisfaire de cet amour à la sauvette ? La jeune femme prend le risque de tout sacrifier à Peter. Mais quel déchirement ! Et elle va devoir affronter l\'ombre d\'une morte, la haine d\'une belle-fille, les traquenards d\'un confrère…'),
(16, 'ET SI C\'ÉTAIT VRAI', '9782266104531', 1, 'Marc Lévy', 'Pocket', 'et_si_cetait_vrai.png', 'Roman', '', '2001', '250 p. / 18 cm', 'Français', '', 'Qui est cette jeune femme blottie dans le placard de la chambre d\'Arthur ? L\'ancienne occupante de l\'appartement qu\'il habite aujourd\'hui. Que fait-elle dans ce placard à une heure avancée de la nuit ? Rien de précis, son esprit a encore du mal à la mener là où elle le voudrait. Et puis elle est là sans l\'être et seul Arthur peut la voir. Ce qui la ravit, car elle peut enfin parler à quelqu\'un. Est-elle un spectre ? Non, elle n\'est ni un esprit ni un fantôme, et si elle semble réelle, parle, râle et sourit, son véritable corps est au cinquième étage de l\'hôpital de San Francisco, en état de coma dépassé à la suite d\'un accident de voiture six mois plus tôt. Dure nuit pour Arthur. Et cela ne fait que commencer puisque, après une visite à l\'hôpital sur les indications de Lauren, son spectre préféré, Arthur va croire à son histoire...'),
(17, 'PAUL ET VIRGINIE', '9782253007296', 1, 'Bernardin de Saint-Pierre', 'Le Livre de poche', 'paul_et_virginie.png', 'Roman', '', '', '348 p. / 17 cm', 'Français', '', 'Tout l\'équipage se précipitait en foule à la mer, sur des vergues, des planches, des cages à poules, des tables, et des tonneaux. On vit alors un objet digne d\'une éternelle pitié : une jeune demoiselle parut dans la galerie de la poupe du Saint-Géran. C\'était Virginie. Tous les matelots s\'étaient jetés à la mer. I1 n\'en restait plus qu\'un sur le pont, qui était tout nu et nerveux comme Hercule. I1 s\'approcha de Virginie avec respect : nous le vîmes se jeter à ses genoux, et s\'efforcer même de lui ôter ses habits; mais elle, le repoussant avec dignité, détourna de lui sa vue... Dans ce moment une montagne d\'eau d\'une effroyable grandeur s\'avança en rugissant vers le vaisseau. A cette terrible vue le matelot s\'élança seul à la mer; et Virginie parut un ange qui prend son vol vers les cieux.\r\n'),
(18, 'LA NON-VIOLENCE EXPLIQUÉE À MES FILLES', '9782020367769', 1, 'Jacques Sémelin', 'Seuil', 'la_non_violence.png', 'Sciences Sociales', '', '2000', '61 p. / 19 cm', 'Français', '', '« Voici plus de vingt-cinq ans que je travaille sur la violence et l\'action non violente. Sur un tel sujet, la plupart des questions que se pose un enfant concerné la vie de tous les jours. Si quelqu\'un m\'agresse, que dois-je faire ? Comment réagir face au racket à l\'école ? Contre une agression sexuelle ? Et la violence des jeunes ? Et le racisme ? Pour répondre, j\'ai quitté mes chères études... C\'est ainsi que je me suis mis à écrire quelques pages, que je leur donnai à lire : j\'ai souvent refait ma copie.J\'ai voulu leur dire que la non-violence n\'est pas la passivité : c\'est une manière d\'être et un e manière d\'agir qui visent à régler les conflits, lutter contre l\'injustice, construire une paix durable. Je me suis appuyé sur de nombreux exemples empruntés à la vie quotidienne et à l\'Histoire. »J. S.'),
(19, 'BATTUE : RÉCIT', '9782290000274', 1, 'Marguerite Binoix', 'J\'ai lu', 'battue.png', 'Sciences Sociales', '', '2007', '221 p. / 18 cm', 'Français', '', 'Témoignage de M. Binoix sur les violences et la domination physique et morale que lui a fait subir son mari pendant 27 ans. L\'ouvrage montre pourquoi elle a gardé le silence et pourquoi elle a accepté cette humiliation pendant tout ce temps, ce qui permet de mieux comprendre le silence des femmes battues.'),
(20, '10 ANS DE LIBERTÉ', '9782709656207', 1, 'Natascha Kampusch', 'J.C. Lattès', '10ans_de_liberte.png', 'Sciences Sociales', 'Céline Maurice', '2016', '280 p. / 23 cm', 'Français', 'Allemand', 'Le 23 août 2006, l\'un des pires enlèvements de ces dernières décennies prend fin. Natascha Kampusch réussit à s\'enfuir de la cave dans laquelle elle était retenue prisonnière depuis huit années. Dans un récit saisissant, 3096 Jours, elle a raconté son effroyable calvaire. Dix ans plus tard, elle nous livre un aperçu de son retour à la liberté : ses expériences, les plus douloureuses comme les plus belles, ses rêves et ses cauchemars, son investissement dans des projets humanitaires (notamment au Sri Lanka) et son engagement auprès de jeunes eux aussi blessés par la vie. Peut-on s\'affranchir d\'un passé aussi terrible ? Comment trouver la force de se reconstruire après un tel traumatisme ?'),
(22, 'ACQUITTÉE : JE L\'AI TUÉ POUR NE PAS MOURIR', '9782290073063', 1, 'Alexandra Lange', 'J\'ai lu', 'acquittee.png', 'Sciences Sociales', '', '2013', '280 p. / 18 cm', 'Français', '', 'Alexandra Lange, 33 ans, mère de quatre enfants, a été acquittée du meurtre de son mari par la cour d\'assises de Douai le 23 mars 2012. « J\'ai voulu montrer le calvaire que vivent des femmes comme moi. Dénoncer le silence de ceux qui savent mais se taisent. Et répondre à ceux qui se demandent pourquoi une femme battue a tant de mal à quitter son tortionnaire. » Sans doute Alexandra est-elle au début restée par amour. Il y a eu les promesses, également : « Je ne recommencerai plus. » Puis les coups à nouveau, les insultes, les humiliations, les viols, les strangulations, la peur. C\'est la peur qui empêche de partir. Peur de se retrouver à la rue avec ses quatre enfants, peur des représailles sur ses proches si elle se réfugiait chez eux. Peur des menaces directes de son mari : « Si tu fais ça, je te tuerai. » Le soir du drame, Alexandra lui a dit qu\'elle allait s\'en aller. La fureur de son dernier étranglement l\'a terrifiée au point de provoquer son geste fatal. En reconnaissant, dans son cas, la légitime défense, la justice française a braqué les projecteurs sur les victimes des violences conjugales. Et le témoignage digne et bouleversant d\'Alexandra Lange, adressé à nous tous, est aussi un appel à l\'aide pour ces femmes en danger.'),
(23, 'Tout sur les réseaux et Internet', '9782100807673', 5, 'Jean-francois Pillou,  Fabrice Lemainque', 'Dunod', 'c_9782100807673-9782100807673_1.jpg', 'informatique', '', '2020', 'Livre poche', 'Français', '', 'Autrefois réservés aux seules entreprises, les réseaux concernent aujourd\'hui tous les utilisateurs d\'ordinateurs, notamment les particuliers connectés à Internet.Cet ouvrage fait le point sur les différentes notions à connaître pour être en mesure de mettre en place, de gérer, de sécuriser et de dépanner un réseau, indépendamment du système d\'exploitation utilisé (Windows, Mac OS ou Linux). Les notions présentées permettront également au lecteur de parfaire sa connaissance du sujet et d\'en comprendre les différents aspects, notamment dans un contexte professionnel.Cette 5e édition actualisée, fait le point sur les récentes évolutions du domaine, notamment avec l\'arrivée de la 5G pour les téléphones portables et avec les nouveaux protocoles Wifi.'),
(25, 'Développer un site web en PHP, MySQL et JavaScript, Jquery, CSS3 et HTML5', '9782893775760', 5, 'Robin Nixon', 'Reynald Goulet', '9782893775760_internet_w290.jpg', 'informatique', '', '2019', '18cm x 23cm', 'Français', 'Anglais', 'Introduction au contenu web dynamique. Mettre en place le serveur de développement. Introduction à PHP. Expressions et contrôle de flux en PHP. Fonctions et objets en PHP. Tableaux en PHP. PHP en pratique. Introduction à MySQL. Maitriser MySQL. Accéder à MySQL à l\'aide de PHP. Gestion de formulaires. Cookies, sessions et authentification. Explorer JavaScript. Expressions et contrôle du flux d\'exécution en JavaScript. Fonctions, objets et tableaux en JavaScript. Validation et gestion d\'erreur en PHP et JavaScript. Utiliser les communications asynchrones. Introduction à CSS. CSS avancé avec CSS3. Accéder à CSS à partir de JavaScript. Introduction à jQuery. Introduction à jQuery Mobile. Introduction à HTML5. Canevas de HTML5. Audio et vidéo en HTML5. Autres fonctionnalités de HTML5. Assembler le tout. A. Réponses aux questions en fin de chapitre. B. Ressources en ligne. C. Mots vides FULLTEXT de MySQL. D. Fonctions de MySQL. E. Sélecteurs, objets et méthodes de jQuery.'),
(31, 'APPRENDRE À DÉVELOPPER AVEC JAVASCRIPT', '9782409016608', 5, 'Christian Vigouroux', 'Editions ENI', '41T3FDbd0oL._SX405_BO1,204,203,200_.jpg', 'informatique, développer', '', '2018', '21,6 x 4,3 x 17,8 cm', 'Français', '', 'Christian VIGOUROUX est Maître de Conférences des Universités à l\'Université de Rennes 1 dans la composante Gestion (IAE- Institut de Gestion de Rennes). Il y enseigne depuis près de 30 ans l\'informatique de gestion à des publics d\'étudiants en Formation Initiale et Formation Continue (Bac+5) et est notamment en charge des enseignements en Techniques Internet, en Génie Logiciel et en Informatique Décisionnelle du Master Systèmes d\'Information et Contrôle de Gestion qu\'il dirige. Par ailleurs, il mène des missions de conseil auprès de grands groupes pour la mise en oeuvre de solutions décisionnelles et pour l\'implémentation d\'architectures logicielles.');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `idCateg` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`idCateg`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idCateg`, `type`, `status`) VALUES
(1, 'Romans et Fictions', 1),
(2, 'Arts et Culture', 1),
(3, 'Histoire et Géographie', 1),
(4, 'Loisirs, Vie pratique et Société', 1),
(5, 'Sciences et Techniques', 1),
(7, 'Santé & Bien-être', 0),
(8, 'Documents & Médias', 0),
(10, 'Enseignement & Education', 0),
(12, 'Littérature & Lettres', 0);

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `idEmp` int(11) NOT NULL AUTO_INCREMENT,
  `BookId` int(11) NOT NULL,
  `Ncard` varchar(11) NOT NULL,
  `Emp_Date` date NOT NULL,
  `Retour_Date` date NOT NULL,
  `returnStatus` varchar(1) DEFAULT '-',
  `amende` int(11) DEFAULT '0',
  PRIMARY KEY (`idEmp`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`idEmp`, `BookId`, `Ncard`, `Emp_Date`, `Retour_Date`, `returnStatus`, `amende`) VALUES
(1, 5, 'BRAFLO413', '2020-05-29', '2020-06-11', '-', 0),
(2, 23, 'GARROB150', '2020-06-03', '2020-06-16', '-', 0),
(4, 1, 'BRAFLO413', '2020-05-27', '2020-06-09', '1', 0),
(8, 11, 'MONNOR721', '2020-06-03', '2020-06-16', '-', 0),
(10, 1, 'MONNOR721', '2020-06-01', '2020-06-15', '-', 0),
(11, 1, 'PRIYVO52', '2020-05-28', '2020-06-10', '-', 0),
(12, 5, 'HORQUE975', '2020-05-05', '2020-05-18', '0', 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(10) NOT NULL AUTO_INCREMENT,
  `sexe` varchar(5) NOT NULL,
  `nom` varchar(125) NOT NULL,
  `prenom` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `ncard` varchar(10) NOT NULL,
  `psw_ncard` varchar(100) NOT NULL,
  `debut_Date` date NOT NULL,
  `fin_Date` date DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `sexe`, `nom`, `prenom`, `email`, `phone`, `cp`, `ville`, `adresse`, `status`, `ncard`, `psw_ncard`, `debut_Date`, `fin_Date`) VALUES
(1, 'F', 'CHENG', 'TINGCHUN', 'christine1108@hotmail.com', '0751536217', 95130, 'FRANCONVILLE', '2 RUELLE DU MOULIN', 'admin', 'CHETIN118', '$2y$10$BFgiCLUMsj52WvCjMpqxZuld52qQEvveglyAQgDhIgMXg5/ty/TJm', '2020-05-06', '2021-05-05'),
(2, 'M', 'BRASQUIES', 'FLORENT', 'florent.brasquies@gmail.com', '0687026532', 95130, 'Franconville', '2 ruelle du Moulin', 'etudiant', 'BRAFLO413', '$2y$10$hNUoj.yviLwHtQz55JO/2ud8SyiMIj6M5EGPECp/mCxAYIJ9Afl2S', '2019-10-15', '2020-10-14'),
(6, 'F', 'GIROUD', 'CLAIRE', 'gcil@gmail.com', '0987654321', 30900, 'Nîmes', '1 rue voltaire', 'professeur', 'GIRCLA309', '$2y$10$.geG1kFmhS6eX687dyLJV.xdP9akNN5EudTrCIiPjMcWxVIFSMyL.', '2019-09-02', '2020-09-01'),
(31, 'M', 'MONJEAU', 'NORRIS', 'k8oyt1dn7hm@thrubay.com', '0163392050', 94210, 'LA VARENNE-SAINT-HILAIRE', '64 RUE DU CLAIR BOCAGE', 'etudiant', 'MONNOR721', '$2y$10$9o0x0DbScEMI/rAbNCW3hOTQI.efMlK4Seoq.oK6ENErprsUKJcZO', '2020-05-26', '2021-05-26'),
(10, 'F', 'BRASQUI', 'CHRISTINE', 'christine75118@gmail.com', '0246813579', 75017, 'PARIS', '11 RUE D\'INGWILLER', 'admin', 'BRACHR118', '$2y$10$NpmcPsyd20QkP7UhIB.la.Zi/sSBhGlzoX.b0TwVhBdr8WxO8nxv2', '2020-05-04', '2021-05-03'),
(33, 'M', 'PRIMEAU', 'YVON', 'ej0t1dz04v@claimab.com', '0537573915', 86000, 'POITOU-CHARENTES', '77 RUE DE LA BOéTIE', 'etudiant', 'PRIYVO52', '$2y$10$GZmMKkk58jUAeAY6Z23quOcjeGrhsLDIhBm9Xwvi7LI3vSGYlnBR.', '2020-06-06', '2021-06-05'),
(25, 'M', 'GERVAIS', 'DIXIE', '52v2im7db99@payspun.com', '0102579003', 75016, 'PARIS', '8 RUE LA BOéTIE', 'etudiant', 'GERDIX750', '$2y$10$FNdx1e6IbctFONFo51Ji7uzDuE3CzQlp/c2aQrq593ZCZQBtpFm8u', '2020-05-08', '2021-05-08'),
(24, 'M', 'HORTEN', 'QUESSY', 'q9euqnwwty@linshiyouxiang.net', '0519378546', 97500, 'SAINT-PIERRE-ET-MIQUELON', '10 RUE DE LA HULOTAIS', 'etudiant', 'HORQUE975', '$2y$10$6FX9m6bK4H2xLkIx9vZDa.AXADy8ufCUjYhtRHoTPrahwB5kIBuX2', '2020-05-08', '2021-05-08'),
(26, 'F', 'GARCEAU', 'ROBINETTE', 'qswqv9zojq@claimab.com', '0415496786', 15000, 'AURILLAC', '81 RUE SADI CARNOT', 'professeur', 'GARROB150', '$2y$10$hFMsYY3O1jBFukHEXNRZA.b/.rMx2JvuGmQ04NfjKF3ROBMFU2ddG', '2020-05-10', '2021-05-10'),
(34, 'M', 'PARENT', 'TRISTAN', '7cvmt7p8a6t@iffymedia.com', '0455619908', 42000, 'SAINT-éTIENNE', '85 RUE SéBASTOPOL', 'professeur', 'PARTRI627', '$2y$10$akX6tO6at9A.x.ZxoAvguudwkPWG0ba9js4eOH9Zt/HRl891TD9yy', '2020-03-06', '2021-03-05'),
(35, 'F', 'GARCEAU', 'ROBINETTE', 'y418q24nnf@iffymedia.com', '0415496786', 15000, 'AURILLAC', '81 RUE SADI CARNOT', 'admin', 'GARROB644', '$2y$10$zO/BlFBqvg3Em3zNhbkeBufeKFZF6uIWSaNxYKK5l9Asv7fNgtdia', '2020-06-01', '2020-06-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
