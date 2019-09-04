-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 09:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Website`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administratoret`
--

CREATE TABLE `Administratoret` (
  `AdminID` int(8) NOT NULL,
  `AdminName` varchar(15) NOT NULL,
  `AdminSurname` varchar(15) NOT NULL,
  `StartDate` date NOT NULL,
  `OrePuneNeDite` int(2) NOT NULL,
  `SaDitePune` int(1) NOT NULL,
  `AddrElektronike` varchar(31) NOT NULL,
  `NumerKontakti` int(15) NOT NULL,
  `Adresa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Administratoret`
--

INSERT INTO `Administratoret` (`AdminID`, `AdminName`, `AdminSurname`, `StartDate`, `OrePuneNeDite`, `SaDitePune`, `AddrElektronike`, `NumerKontakti`, `Adresa`) VALUES
(1, 'Aldo', 'Qejvani', '2016-12-12', 5, 120, 'aldo.qejvani@fshnstudent.info', 699363937, 'Tirane (AL)'),
(2, 'Ardit', 'Gjylbegu', '2016-12-12', 5, 120, 'ardit.gjylbegu@fshnstudent.info', 699359614, 'Vlore (AL)'),
(3, 'Anxhela', 'Marku', '2016-12-12', 5, 120, 'anxhela.marku@fshnstudent.info', 698739920, 'Fier (AL)'),
(4, 'Ambra', 'Sejati', '2016-12-12', 5, 120, 'ambra.sejati@fshnstudent.info', 695292628, 'Erseke (AL)');

-- --------------------------------------------------------

--
-- Table structure for table `adminkod`
--

CREATE TABLE `adminkod` (
  `kodid` int(8) NOT NULL,
  `kodakses` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminkod`
--

INSERT INTO `adminkod` (`kodid`, `kodakses`) VALUES
(1, 1995);

-- --------------------------------------------------------

--
-- Table structure for table `aplikime`
--

CREATE TABLE `aplikime` (
  `EMER` varchar(15) NOT NULL,
  `MBIEMER` varchar(15) NOT NULL,
  `ATESI` varchar(15) NOT NULL,
  `GJINI` enum('Mashkull','Femer') NOT NULL,
  `MOSHE` int(2) NOT NULL,
  `EMAIL` varchar(15) NOT NULL,
  `ARSIMI` enum('paarsim','fillore','9vjecare','emesme','profesionale','elarte') NOT NULL,
  `NUMERKONTAKTI` int(16) NOT NULL,
  `aplikimID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikime`
--

INSERT INTO `aplikime` (`EMER`, `MBIEMER`, `ATESI`, `GJINI`, `MOSHE`, `EMAIL`, `ARSIMI`, `NUMERKONTAKTI`, `aplikimID`) VALUES
('qewe', 'wqeqwe', 'qeweqw', 'Mashkull', 22, 'q@q', 'emesme', 435465766, 1),
('wqerrte', 'qwertrey', 'weeretryt', 'Femer', 21, 'q@q', 'fillore', 23332423, 2),
('qweretyryt', 'qwerteyrt', 'wqeerre', 'Mashkull', 18, 'w@w', '9vjecare', 221231234, 3),
('qweretyryt', 'qwerteyrt', 'wqeerre', 'Mashkull', 18, 'w@w', '9vjecare', 221231234, 4),
('qweqweq', 'qwewer', 'qwewrwer', 'Femer', 22, 'w@w', '9vjecare', 1231231231, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `eventID` int(8) NOT NULL,
  `evname` varchar(15) NOT NULL,
  `evday` enum('hene','marte','merkure','enjte','premte','shtune','diele') NOT NULL,
  `evdatnum` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','29','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `evmonth` enum('janar','shkurt','mars','prill','maj','qershor','korrik','gusht','shtator','tetor','nentor','dhjetor') NOT NULL,
  `evyear` enum('2017','2018') NOT NULL,
  `evhr` enum('8','9','10','11','12','13','14','15','16','17','18','19','20','21') NOT NULL,
  `evmin` enum('00','15','30','45') NOT NULL,
  `evcapacity` int(3) NOT NULL,
  `evspecialg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`eventID`, `evname`, `evday`, `evdatnum`, `evmonth`, `evyear`, `evhr`, `evmin`, `evcapacity`, `evspecialg`) VALUES
(1, 'Dita e mesuesit', 'marte', '7', 'mars', '2017', '14', '30', 50, '( x-kengetar)'),
(4, 'Bamiresi', 'premte', '1', 'mars', '2017', '12', '00', 100, '(nuk ka)'),
(5, 'Irish Pub', 'hene', '13', 'mars', '2017', '21', '30', 200, 'The Rumjacks'),
(6, 'Pirates Day', 'diele', '12', 'shkurt', '2017', '18', '00', 150, '(nuk ka)'),
(7, 'Irish Dinner', 'premte', '17', 'mars', '2017', '21', '30', 100, '(-)'),
(8, 'dreke franceze', 'hene', '5', 'shtator', '2017', '13', '30', 200, '-');

-- --------------------------------------------------------

--
-- Table structure for table `mirembajtje`
--

CREATE TABLE `mirembajtje` (
  `mirembajtjeID` int(8) NOT NULL,
  `memer` varchar(15) NOT NULL,
  `mmbiemer` varchar(15) NOT NULL,
  `mpaga` int(5) NOT NULL,
  `mgjinia` enum('Mashkull','Femer') NOT NULL,
  `mmosha` int(2) NOT NULL,
  `memail` varchar(30) NOT NULL,
  `mkartebank` int(16) NOT NULL,
  `mkartetype` enum('Bosh','Visa','Mastercard','Discover','AmericanExpress') NOT NULL,
  `marsim` enum('paarsim','fillore','8/9vjecare','mesme','profesionale','larte') NOT NULL,
  `mkontakt` int(15) NOT NULL,
  `mkontrate` enum('po','jo') NOT NULL,
  `mpost` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mirembajtje`
--

INSERT INTO `mirembajtje` (`mirembajtjeID`, `memer`, `mmbiemer`, `mpaga`, `mgjinia`, `mmosha`, `memail`, `mkartebank`, `mkartetype`, `marsim`, `mkontakt`, `mkontrate`, `mpost`) VALUES
(1, 'Denis', 'Suka', 1000, 'Mashkull', 20, 'denis@gmail.com', 0, 'Bosh', '8/9vjecare', 42234562, 'jo', 'Pastrues'),
(2, 'Artur', 'Zeka', 10000, 'Mashkull', 44, 'turituri@gmail.com', 2147483647, 'Visa', 'mesme', 2147483647, 'jo', '(m.riparues)'),
(4, 'q', 'Q', 22, 'Femer', 22, 'q@yahoo.com', 123123, 'Bosh', 'fillore', 12321431, 'jo', 'Q');

-- --------------------------------------------------------

--
-- Table structure for table `njoftime`
--

CREATE TABLE `njoftime` (
  `newsID` int(8) NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `njoftime`
--

INSERT INTO `njoftime` (`newsID`, `news`) VALUES
(1, 'Njoftimet do te vijne se shpejti.'),
(2, '(nga administratori)'),
(3, 'Lajmerim tjeter'),
(4, 'njoftim tjeter ne rradhe\r\n'),
(5, 'Lajmerim');

-- --------------------------------------------------------

--
-- Table structure for table `oferta`
--

CREATE TABLE `oferta` (
  `oferteID` int(8) NOT NULL,
  `oferteemer` varchar(15) NOT NULL,
  `usapro` enum('asnje','Texas_BBQ_medley-500_LEKE','Choc_chip_pecan_pie-750_LEKE','Burnt_onion_dip-645_LEKE','Diner_Sloppy_Joes-500_LEKE','Diner_Sloppy_fish-500_LEKE','Cornbread-400_LEKE','Cookie_dough-200_LEKE','American_T-bone-1000_LEKE','Malt_chocolate-350_LEKE','Bourbon-320_LEKE','Smoky_pork-1590_LEKE','Big_burger-450_LEKE','BBQ_pulled_pork-1200_LEKE','Buttermilk_salad-1520_LEKE','Seafood_chowder-1435_LEKE','Pumpkin_Pie-1200_LEKE','Salt_beef/Cajun_fries-1300_LEKE','Chickencorn_salad-900_LEKE','New_York_Cheesecake-480_LEKE','Sweet_chilli_dogs-300_LEKE','Caesar_salad-1390_LEKE','Sticky_ribs-1500_LEKE','Key_lime_pie-1485_LEKE','Crispy/pretzel_chicken-1689_LEKE','Raspberry_brownies-2000_LEKE','Plate-sized_pancakes-250_LEKE','Custard/biscuits-450_LEKE','Crispy_chicken/apple-1580_LEKE','Crispy_Cajun_rings-350_LEKE','Buffalo_chicken_wings-890_LEKE','Peanut/butter_cheesecake-1000_LEKE','Sticky_glazed_ribs-999_LEKE','Sweetcorn_chowder-590_LEKE','Peach/blueberry_grunt-350_LEKE','BBQ_drumsticks(slaw)-890_LEKE','Peanut_butter_brownies-370_LEKE','South-western-salad-800_LEKE','Buffalo_wings-1200_LEKE','Butternut_maple-1700_LEKE','Hot_dogs-200_LEKE','BBQ_chicken_burgers-200_LEKE') NOT NULL,
  `usacmim` int(5) NOT NULL,
  `frpro` enum('asgje1','Gruyere-700_LEKE','Poulet_de_Provencal-850_LEKE','Gratin_Dauphinois-600_LEKE','Croissant-200_LEKE','Creme_Brulee-350_LEKE','Beef_Bourguignon-1500_LEKE','Creme_Fraiche-800_LEKE','Coq_Au_Vin-1750_LEKE','Chocolate_Ganache-500_LEKE','Chocolate_Bleu-1000_LEKE','Omelet-200_LEKE','Cordon_Bleu-1000_LEKE','Eclairs-200_LEKE','Brie-590_LEKE','Meringues-200_LEKE','Mousse-1200_LEKE','Buche_de_Noel-890_LEKE','Ratatouille-1000_LEKE','Brie_Puff_Pastry-200_LEKE','CBleu_Casserole-459_LEKE','Quiche_Lorraine-620_LEKE','Madeleines-200_LEKE','Bourguignon-2000_LEKE','Kalamata_Olive_Tapenade-1800_LEKE','Macaron-200_LEKE','Plum_Clafouti-450_LEKE','Potatoe_Au_Gratin-870_LEKE','Meringue-520_LEKE','Herbes_de_Provence-500_LEKE','Tarte_de_Pommes-900_LEKE','Crepe-290_LEKE','Rochester-1000_LEKE','Pro_Ganache-900_LEKE','Filet_Mignons-1900_LEKE','Cassoulet-600_LEKE','Asparagus-490_LEKE','Chutney-200_LEKE','Bordelaise-2500_LEKE','Tourtiere-1790_LEKE','Lyonnaise_a_la_crof-666_LEKE') NOT NULL,
  `frcmim` int(5) NOT NULL,
  `itapro` enum('asgje2','Cannelloni-590_LEKE','Antipasto-1800_LEKE','Focaccia/Baraise-200_LEKE','Torta_Rustica-680_LEKE','Zuppa_Toscanata-360_LEKE','Hazelnut_Biscotti-640_LEKE','Marsala-1800_LEKE','Lasagna-700_LEKE','Pizza-500_LEKE','Spaghetti-400_LEKE','Bruschetta-350_LEKE','Zuppa_Toscana-410_LEKE','Minestrone-900_LEKE','Tortellini-590_LEKE','Fettuccini-570_LEKE','Tiramisu-300_LEKE','Pesto_di_Florentine-690_LEKE','Parmigiana-2600_LEKE','Focaccia_Bread-1200_LEKE','Piccata-1630_LEKE','Penne_Arrabiata-700_LEKE','Pasta_Pomodoro-550_LEKE','Biscotti-200_LEKE','Manicotti_Alla_Romana-4500_LEKE','Calzone-350_LEKE','Cacciatore-1510_LEKE','Pene/Valentino-480_LEKE','Tetrazzini_di_mare-10000_LEKE','Cioppino-500_LEKE','Pasta_Primavera-470_LEKE','Pasta_Fagioli-610_LEKE','Ravioli-550_LEKE','Fettuccine_Alfredo-300_LEKE','Zitti-2400_LEKE','Pepperoni-200_LEKE','Ricotta_Gnocchi-310_LEKE','Manicotti-450_LEKE','Tilapia-320_LEKE','Zucchini-200_LEKE','Scarpariello-390_LEKE','Bruschetta-350_LEKE') NOT NULL,
  `itacmim` int(5) NOT NULL,
  `joalkpro` enum('asgje3','uje_100_LEKE','bravo_molle_200_LEKE','bravo_rrushi_200_LEKE','bravo_pjeshke_200_LEKE','bravo_luleshtrydhe_200_LEKE','bravo_portokall_200_LEKE','bravo_shege_200_LEKE','bravo_qumesht_200_LEKE','bravo_mix_200_LEKE','ivi_mandarine_200_LEKE','ivi_portokall_200_LEKE','ivi_deshire_200_LEKE','amita_pjeshte_200_LEKE','amita_banane_200_LEKE','amita_qershi_200_LEKE','amita_molle_200_LEKE','amita_deshire_200_LEKE','rauch_deshire_200_LEKE','frut_deshire_200_LEKE','perime_deshire_200_LEKE','mixer_pro_200_LEKE','mixer_deshire_200_LEKE','caj_kinez_200_LEKE','caj_jeshil_200_LEKE','kamomil_200_LEKE','caj_limoni_200_LEKE','caj_boronice_200_LEKE','caj_deshire_200_LEKE','lipton_limon_200_LEKE','lipton_pjeshke_200_LEKE','milkshake_200_LEKE','coffee_200_LEKE','nescafe_200_LEKE','santal_molle_200_LEKE','santal_pjeshke_200_LEKE','santal_deshire_200_LEKE','cola_200_LEKE','cola0_200_LEKE','fanta_orange_200_LEKE','fanta_lemon_200_LEKE','fanta_exotic_200_LEKE','pepsi_200_LEKE','pepsi_twist_200_LEKE','pepsi_max_200_LEKE','sprite_200_LEKE','7up_200_LEKE','soda_orange_200_LEKE','soda_lemon_200_LEKE','uje_gaz_200_LEKE','glina_ricoco_200_LEKE','glina_limon_200_LEKE','red_bull_200_LEKE','dragon_heart_200_LEKE','monster_r_200_LEKE','mosnter_g_200_LEKE','monster_b_200_LEKE','monster_y_200_LEKE','red_rock_200_LEKE','bitter_200_LEKE','ivi_200_LEKE') NOT NULL,
  `joalkcmim` int(5) NOT NULL,
  `alkpro` enum('asgje3','patron_200_LEKE','grey_goose_200_LEKE','hennesy_200_LEKE','giroc_200_LEKE','crown_royal_200_LEKE','johnnie_walker_200_LEKE','belvedere_200_LEKE','gentelman_jack_200_LEKE','bacardi_200_LEKE','don_julio_200_LEKE','makers_mark_200_LEKE','vodka_200_LEKE','bombay_sapphire_200_LEKE','ketel_one_200_LEKE','woodford_reserve_200_LEKE','jim_beam_200_LEKE','wild_turkey_200_LEKE','jagermeister_200_LEKE') NOT NULL,
  `alkcmimi` int(5) NOT NULL,
  `winepro` enum('albarino_200_LEKE','aligote_200_LEKE','amarone_200_LEKE','arneis_200_LEKE','asti_sumante_200_LEKE','auslese_200_LEKE','banylus_200_LEKE','barbaresco_200_LEKE','bardolino_200_LEKE_200_LEKE','barolo_200_LEKE','beaujolais_200_LEKE','blancs_de_blancs_200_LEKE','blanc_de_noirs_200_LEKE','blush_200_LEKE','boal_or_bual_200_LEKE','brunello_200_LEKE','cabernet_franc_200_LEKE','cabernet_sauvignon_200_LEKE','carmenere_200_LEKE','cava_200_LEKE','charbono_200_LEKE','chardonnay_200_LEKE') NOT NULL,
  `winecmim` int(5) NOT NULL,
  `beerpro` enum('asgje5','Guinnes','Blue_Moon','Samuel_Adams_Boston_Lager','Corona','Stella_Artois','Dos_Equis','Budweiser','Fat_Tire','Sierra_Nevada','Yuengling_Premium_Beer','Newcastle_Brown_Ale','Dogfish_Head','Hoegaarden_Witbier','Michelob','George_Kilians_Irish_Red','Labatt_Blue','Shiner_Bock','Fosters_Lager','Grolsch','Chimay','Molson_Canadian','Pabst_Blue_Ribbon','Sapporo_Premium_Lager','Becks','Pilsner_Urquell','Amstel_Lager','Bass_Ale','Coors_Light','Hofbrauhaus','Old_Latrobe_Rolling_Rock','Miller_Genuine_Draft','Peroni_Nastro_Azzurro','Guinness_Smithwicks','Shock_Top','Tsingatao_Beer','Cerveceria_Modelo','Red_Stripe','Leinenkugel_Original','Paulaner','Femsa_Tecate','Erdinger_Weissbier') NOT NULL,
  `beerprosasia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oferta`
--

INSERT INTO `oferta` (`oferteID`, `oferteemer`, `usapro`, `usacmim`, `frpro`, `frcmim`, `itapro`, `itacmim`, `joalkpro`, `joalkcmim`, `alkpro`, `alkcmimi`, `winepro`, `winecmim`, `beerpro`, `beerprosasia`) VALUES
(1, 'Ribs(stickyUSA)', 'Sticky_ribs-1500_LEKE', 1000, 'asgje1', 0, 'asgje2', 0, 'asgje3', 0, 'asgje3', 0, '', 0, 'asgje5', 0),
(2, 'Gruyere(FR)', 'asnje', 0, 'Gruyere-700_LEKE', 400, 'asgje2', 0, 'asgje3', 0, 'asgje3', 0, '', 0, 'asgje5', 0),
(3, 'Hot Dog', 'Hot_dogs-200_LEKE', 200, 'Ratatouille-1000_LEKE', 1000, 'Spaghetti-400_LEKE', 400, 'amita_qershi_200_LEKE', 100, 'patron_200_LEKE', 150, 'bardolino_200_LEKE_200_LEKE', 130, 'asgje5', 0),
(4, 'BEER OF', 'asnje', 0, 'asgje1', 0, 'asgje2', 0, 'asgje3', 0, 'asgje3', 0, '', 0, 'Michelob', 150),
(5, 'mix0', 'Diner_Sloppy_Joes-500_LEKE', 100, 'Croissant-200_LEKE', 100, 'Hazelnut_Biscotti-640_LEKE', 100, 'ivi_deshire_200_LEKE', 100, 'woodford_reserve_200_LEKE', 100, 'boal_or_bual_200_LEKE', 100, 'Shiner_Bock', 100),
(6, 'fr+beer', 'asnje', 0, 'Beef_Bourguignon-1500_LEKE', 1000, 'asgje2', 0, 'asgje3', 0, 'asgje3', 0, '', 0, 'Shiner_Bock', 150);

-- --------------------------------------------------------

--
-- Table structure for table `pergjegjesit`
--

CREATE TABLE `pergjegjesit` (
  `perID` int(8) NOT NULL,
  `peremer` varchar(15) NOT NULL,
  `permbiemer` varchar(15) NOT NULL,
  `perpaga` int(5) NOT NULL,
  `pergjinia` enum('Mashkull','Femer') NOT NULL,
  `permosha` int(2) NOT NULL,
  `peremail` varchar(30) NOT NULL,
  `perkartebanke` int(16) NOT NULL,
  `perllojikarte` enum('Bosh','Visa','Mastercard','Discover','AmericanExpress') NOT NULL,
  `perarsim` enum('paarsim','fillore','8/9vjecare','mesme','profesionale','larte') NOT NULL,
  `perkontakti` int(15) NOT NULL,
  `perkontrate` enum('po','jo') NOT NULL,
  `perposti` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pergjegjesit`
--

INSERT INTO `pergjegjesit` (`perID`, `peremer`, `permbiemer`, `perpaga`, `pergjinia`, `permosha`, `peremail`, `perkartebanke`, `perllojikarte`, `perarsim`, `perkontakti`, `perkontrate`, `perposti`) VALUES
(1, 'Aneta', 'Sinani', 2000, 'Femer', 45, 'aneta_33@rocketmail.com', 2147483647, 'Mastercard', 'mesme', 42342981, 'jo', 'Per.Delivery'),
(2, 'Gentian', 'Guri', 50000, 'Mashkull', 45, 'ggent_33@rocketmail.com', 2147483647, 'AmericanExpress', 'profesionale', 2147483647, 'po', '(p.porosite)');

-- --------------------------------------------------------

--
-- Table structure for table `Pershtypje`
--

CREATE TABLE `Pershtypje` (
  `PershtypjeID` int(8) NOT NULL,
  `UserID` varchar(15) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `opinion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pershtypje`
--

INSERT INTO `Pershtypje` (`PershtypjeID`, `UserID`, `Username`, `opinion`) VALUES
(19, '15', 'Aldo', 'Pershtypja (Aldo)'),
(20, '17', 'Jerin', 'Pershtypja (Jerin)'),
(21, '16', 'Beni', 'sdfghjk'),
(22, '26', 'Doni', 'Pershtypje'),
(23, '29', 'q', 'thm'),
(24, '31', 'tani', 'Pershtypja '),
(25, '49', 'xhino', 'pershtypje xhino'),
(26, '24', 'aldo', 'gfgds'),
(27, '26', 'Doni', 'qwert789'),
(28, '16', 'Beni', 'add'),
(29, '16', 'Beni', 'cgvjbn');

-- --------------------------------------------------------

--
-- Table structure for table `Porosi`
--

CREATE TABLE `Porosi` (
  `PorosiID` int(8) NOT NULL,
  `UserID` varchar(15) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Pay` enum('CreditCard','Cash') NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `USAProduct` enum('asgje0','Texas_BBQ_medley-500_LEKE','Choc_chip_pecan_pie-750_LEKE','Burnt_onion_dip-645_LEKE','Diner_Sloppy_Joes-500_LEKE','Diner_Sloppy_fish-500_LEKE','Cornbread-400_LEKE','Cookie_dough-200_LEKE','American_T-bone-1000_LEKE','Malt_chocolate-350_LEKE','Bourbon-320_LEKE','Smoky_pork-1590_LEKE','Big_burger-450_LEKE','BBQ_pulled_pork-1200_LEKE','Buttermilk_salad-1520_LEKE','Seafood_chowder-1435_LEKE','Pumpkin_Pie-1200_LEKE','Salt_beef/Cajun_fries-1300_LEKE','Chickencorn_salad-900_LEKE','New_York_Cheesecake-480_LEKE','Sweet_chilli_dogs-300_LEKE','Caesar_salad-1390_LEKE','Sticky_ribs-1500_LEKE','Key_lime_pie-1485_LEKE','Crispy/pretzel_chicken-1689_LEKE','Raspberry_brownies-2000_LEKE','Plate-sized_pancakes-250_LEKE','Custard/biscuits-450_LEKE','Crispy_chicken/apple-1580_LEKE','Crispy_Cajun_rings-350_LEKE','Buffalo_chicken_wings-890_LEKE','Peanut/butter_cheesecake-1000_LEKE','Sticky_glazed_ribs-999_LEKE','Sweetcorn_chowder-590_LEKE','Peach/blueberry_grunt-350_LEKE','BBQ_drumsticks(slaw)-890_LEKE','Peanut_butter_brownies-370_LEKE','South-western-salad-800_LEKE','Buffalo_wings-1200_LEKE','Butternut_maple-1700_LEKE','Hot_dogs-200_LEKE','BBQ_chicken_burgers-200_LEKE') DEFAULT NULL,
  `USAsasia` int(3) NOT NULL,
  `FRProduct` enum('asgje1','Gruyere-700_LEKE','Poulet_de_Provencal-850_LEKE','Gratin_Dauphinois-600_LEKE','Croissant-200_LEKE','Creme_Brulee-350_LEKE','Beef_Bourguignon-1500_LEKE','Creme_Fraiche-800_LEKE','Coq_Au_Vin-1750_LEKE','Chocolate_Ganache-500_LEKE','Chocolate_Bleu-1000_LEKE','Omelet-200_LEKE','Cordon_Bleu-1000_LEKE','Eclairs-200_LEKE','Brie-590_LEKE','Meringues-200_LEKE','Mousse-1200_LEKE','Mussels_Mariniere-1590_LEKE','Buche_de_Noel-890_LEKE','Ratatouille-1000_LEKE','Brie_Puff_Pastry-200_LEKE','CBleu_Casserole-459_LEKE','Quiche_Lorraine-620_LEKE','Madeleines-200_LEKE','Bourguignon-2000_LEKE','Kalamata_Olive_Tapenade-1800_LEKE','Macaron-200_LEKE','Plum_Clafouti-450_LEKE','Potatoe_Au_Gratin-870_LEKE','Meringue-520_LEKE','Herbes_de_Provence-500_LEKE','Tarte_de_Pommes-900_LEKE','Crepe-290_LEKE','Rochester-1000_LEKE','Pro_Ganache-900_LEKE','Filet_Mignons-1900_LEKE','Cassoulet-600_LEKE','Asparagus-490_LEKE','Chutney-200_LEKE','Bordelaise-2500_LEKE','Tourtiere-1790_LEKE','Lyonnaise_a_la_crof-666_LEKE') NOT NULL,
  `FRsasia` int(3) NOT NULL,
  `ITAProduct` enum('asgje2','Cannelloni-590_LEKE','Antipasto-1800_LEKE','Focaccia/Baraise-200_LEKE','Torta_Rustica-680_LEKE','Zuppa_Toscanata-360_LEKE','Hazelnut_Biscotti-640_LEKE','Marsala-1800_LEKE','Lasagna-700_LEKE','Pizza-500_LEKE','Spaghetti-400_LEKE','Bruschetta-350_LEKE','Zuppa_Toscana-410_LEKE','Minestrone-900_LEKE','Tortellini-590_LEKE','Fettuccini-570_LEKE','Tiramisu-300_LEKE','Pesto_di_Florentine-690_LEKE','Parmigiana-2600_LEKE','Focaccia_Bread-1200_LEKE','Piccata-1630_LEKE','Penne_Arrabiata-700_LEKE','Pasta_Pomodoro-550_LEKE','Biscotti-200_LEKE','Manicotti_Alla_Romana-4500_LEKE','Calzone-350_LEKE','Cacciatore-1510_LEKE','Pene/Valentino-480_LEKE','Tetrazzini_di_mare-10000_LEKE','Cioppino-500_LEKE','Pasta_Primavera-470_LEKE','Pasta_Fagioli-610_LEKE','Ravioli-550_LEKE','Fettuccine_Alfredo-300_LEKE','Zitti-2400_LEKE','Pepperoni-200_LEKE','Ricotta_Gnocchi-310_LEKE','Manicotti-450_LEKE','Tilapia-320_LEKE','Zucchini-200_LEKE','Scarpariello-390_LEKE','Bruschetta-350_LEKE') NOT NULL,
  `ITAsasia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Porosi`
--

INSERT INTO `Porosi` (`PorosiID`, `UserID`, `Username`, `Pay`, `Destination`, `USAProduct`, `USAsasia`, `FRProduct`, `FRsasia`, `ITAProduct`, `ITAsasia`) VALUES
(32, '16', 'Beni', 'Cash', 'Vlore (Shkolla:"Ali Demi")', 'asgje0', 0, 'Eclairs-200_LEKE', 5, 'asgje2', 0),
(33, '24', 'aldo', 'Cash', 'Tirane (lagjia :Ali Demi) Kthesa e dyte majtas perballe fushes Ali demi', 'Diner_Sloppy_Joes-500_LEKE', 1, 'Poulet_de_Provencal-850_LEKE', 2, 'asgje2', 0),
(34, '24', 'aldo', 'CreditCard', 'Tirane ("fakulteti i shkencave te natyres")', 'Seafood_chowder-1435_LEKE', 2, 'asgje1', 0, 'asgje2', 0),
(35, '26', 'Doni', 'CreditCard', 'Tirane (tek 15 kateshi)', 'Cookie_dough-200_LEKE', 5, 'asgje1', 0, 'asgje2', 0),
(36, '29', 'q', 'Cash', 'Tirane (21 dhjetori )', 'Cornbread-400_LEKE', 1, 'Coq_Au_Vin-1750_LEKE', 3, 'asgje2', 0),
(37, '31', 'tani', 'CreditCard', 'Durres (tek porti)', 'asgje0', 0, 'Poulet_de_Provencal-850_LEKE', 3, 'asgje2', 0),
(40, '26', 'Doni', 'Cash', '2345thjk', 'Seafood_chowder-1435_LEKE', 9, 'asgje1', 0, 'asgje2', 0),
(41, '16', 'Beni', 'CreditCard', '3434', 'Texas_BBQ_medley-500_LEKE', 1, 'asgje1', 0, 'asgje2', 0),
(42, '16', 'Beni', 'CreditCard', 'dsfghjkk', 'Diner_Sloppy_Joes-500_LEKE', 4, 'Croissant-200_LEKE', 1, 'Zuppa_Toscanata-360_LEKE', 6),
(43, '16', 'Beni', 'CreditCard', 'fh', 'Texas_BBQ_medley-500_LEKE', 8, 'asgje1', 0, 'asgje2', 0),
(44, '16', 'Beni', 'CreditCard', 'ghj', 'Texas_BBQ_medley-500_LEKE', 0, 'Gruyere-700_LEKE', 1, 'asgje2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prenotimeventi`
--

CREATE TABLE `prenotimeventi` (
  `prenotID` int(8) NOT NULL,
  `userid` int(8) NOT NULL,
  `username` varchar(15) NOT NULL,
  `eventname` enum('rumjacks') NOT NULL,
  `sapersona` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prenotimeventi`
--

INSERT INTO `prenotimeventi` (`prenotID`, `userid`, `username`, `eventname`, `sapersona`) VALUES
(1, 52, 'q', 'rumjacks', 5),
(2, 52, 'q', 'rumjacks', 5);

-- --------------------------------------------------------

--
-- Table structure for table `prenotimrestoranti`
--

CREATE TABLE `prenotimrestoranti` (
  `prenotimiid` int(8) NOT NULL,
  `userid` varchar(8) NOT NULL,
  `username` varchar(15) NOT NULL,
  `cfareeshte` enum('dasem','datelindje','mekolektiv','fejese') NOT NULL,
  `numriipersonave` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prenotimrestoranti`
--

INSERT INTO `prenotimrestoranti` (`prenotimiid`, `userid`, `username`, `cfareeshte`, `numriipersonave`) VALUES
(1, '52', 'q', 'mekolektiv', 157),
(2, '52', 'q', 'mekolektiv', 157);

-- --------------------------------------------------------

--
-- Table structure for table `prenotimtavoline`
--

CREATE TABLE `prenotimtavoline` (
  `prenotimID` int(8) NOT NULL,
  `userID` int(8) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tipi` enum('private','publike') NOT NULL,
  `numri` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prenotimtavoline`
--

INSERT INTO `prenotimtavoline` (`prenotimID`, `userID`, `username`, `tipi`, `numri`) VALUES
(1, 52, 'q', 'publike', 12),
(2, 52, 'q', 'publike', 12),
(3, 52, 'q', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `problemID` int(8) NOT NULL,
  `problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`problemID`, `problem`) VALUES
(1, '(Problem 1)'),
(2, 'PROBLEM'),
(3, 'Problem x'),
(4, 'Problem'),
(5, 'Problem\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `shefkuzhine`
--

CREATE TABLE `shefkuzhine` (
  `shefID` int(8) NOT NULL,
  `emershefi` varchar(15) NOT NULL,
  `mbiemershefi` varchar(15) NOT NULL,
  `pagashefi` int(5) NOT NULL,
  `gjiniashefi` enum('Mashkull','Femer') NOT NULL,
  `moshashefi` int(2) NOT NULL,
  `emailshefi` varchar(30) NOT NULL,
  `kartashefi` int(16) NOT NULL,
  `kartatipshefi` enum('Bosh','Visa','Mastercard','Discover','AmericanExpress') NOT NULL,
  `arsimshef` enum('paarsim','fillore','8/9vjecare','mesme','profesionale','larte') NOT NULL,
  `telshef` int(15) NOT NULL,
  `shefkontrate` enum('po','jo') NOT NULL,
  `shefpoz` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shefkuzhine`
--

INSERT INTO `shefkuzhine` (`shefID`, `emershefi`, `mbiemershefi`, `pagashefi`, `gjiniashefi`, `moshashefi`, `emailshefi`, `kartashefi`, `kartatipshefi`, `arsimshef`, `telshef`, `shefkontrate`, `shefpoz`) VALUES
(1, 'Renis', 'Mata', 5000, 'Mashkull', 27, 'renny@yahoo.com', 1234512345, 'Discover', 'profesionale', 671294205, 'po', 'Kryekuzhinier'),
(2, 'Antoine', 'Renoire', 100000, 'Mashkull', 33, 'antoine_21@gmail.com', 2147483647, 'Discover', 'larte', 2147483647, 'po', 'Kryekuzhinier'),
(3, 'q', 'q', 22, 'Mashkull', 22, 'q@q', 143243, 'Mastercard', 'fillore', 25, 'jo', 'wfg');

-- --------------------------------------------------------

--
-- Table structure for table `stafiisherbimit`
--

CREATE TABLE `stafiisherbimit` (
  `workerID` int(8) NOT NULL,
  `workername` varchar(15) NOT NULL,
  `workersurname` varchar(15) NOT NULL,
  `workersalary` int(5) NOT NULL,
  `workergender` enum('Mashkull','Femer') NOT NULL,
  `workerage` int(2) NOT NULL,
  `workeremail` varchar(15) NOT NULL,
  `workercrbank` int(16) NOT NULL,
  `workercrbanktype` enum('Bosh','Visa','Mastercard','Discover','AmericanExpress') NOT NULL,
  `workereducation` enum('paarsim','fillore','8/9vjecare','mesme','profesionale','larte') NOT NULL,
  `workercontact` int(15) NOT NULL,
  `workeragree` enum('po','jo') NOT NULL,
  `workerpost` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafiisherbimit`
--

INSERT INTO `stafiisherbimit` (`workerID`, `workername`, `workersurname`, `workersalary`, `workergender`, `workerage`, `workeremail`, `workercrbank`, `workercrbanktype`, `workereducation`, `workercontact`, `workeragree`, `workerpost`) VALUES
(1, 'Klevis', 'Goci', 1000, 'Mashkull', 26, 'klevi@ymail.com', 0, 'Bosh', 'profesionale', 42381790, 'jo', 'Transportues'),
(2, 'Grejsi', 'Dibra', 2300, 'Femer', 25, 'grace@gmail.com', 2147483647, 'Mastercard', 'mesme', 661921233, 'jo', 'Punetore'),
(3, 'Iva', 'Koka', 300, 'Femer', 27, 'ivakoka@ymail.c', 932, 'Mastercard', 'mesme', 421241221, 'jo', 'koordinatore'),
(4, 'Klea', 'Murati', 0, 'Femer', 22, 'klea_klo@yahoo.', 0, 'Bosh', 'profesionale', 42312432, 'jo', 'Op.Komunikacion'),
(5, 'q', 'q', 22, 'Femer', 22, 'q@q', 8453, 'Mastercard', 'fillore', 2345678, 'jo', 'sdfghj'),
(6, 'w', 'w', 22, 'Femer', 22, 'w@w', 25, 'Visa', 'fillore', 1244567, 'jo', '234567'),
(7, 'q', 'q', 222, 'Mashkull', 22, 'w@w', 26977700, 'Visa', 'fillore', 33, 'jo', 'wertyu');

-- --------------------------------------------------------

--
-- Table structure for table `StafiIT`
--

CREATE TABLE `StafiIT` (
  `workerID` int(8) NOT NULL,
  `workername` varchar(15) NOT NULL,
  `workersurname` varchar(15) NOT NULL,
  `workergender` enum('Mashkull','Femer') NOT NULL,
  `workerage` int(2) NOT NULL,
  `workeremail` varchar(30) NOT NULL,
  `workercreditcard` int(16) NOT NULL,
  `workercdtype` enum('Bosh','Visa','Mastercard','Discover','AmericanExpress') NOT NULL,
  `workereducation` enum('paarsim','fillore','8/9vjecare','mesme','profesionale','larte') NOT NULL,
  `workercontactnum` int(15) NOT NULL,
  `kontrata` enum('po','jo') NOT NULL,
  `workerrole` varchar(30) NOT NULL,
  `workerwage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `StafiIT`
--

INSERT INTO `StafiIT` (`workerID`, `workername`, `workersurname`, `workergender`, `workerage`, `workeremail`, `workercreditcard`, `workercdtype`, `workereducation`, `workercontactnum`, `kontrata`, `workerrole`, `workerwage`) VALUES
(3, 'Gezim', 'Caushi', 'Mashkull', 35, 'Gezim@yahoo.com', 2147483647, 'Mastercard', 'profesionale', 42367854, 'po', 'MenaxherSigurie', 4500),
(4, 'Arben', 'Lika', 'Mashkull', 25, 'arben_23@yahoo.com', 2147483647, 'Visa', 'larte', 681294532, 'jo', 'Mirembajtes', 2300),
(5, 'Elisa', 'Lika', 'Femer', 25, 'Lisa@hotmail.com', 123455676, 'Visa', 'larte', 661252123, 'po', 'Operatore', 2500),
(6, 'Elisa', 'Mero', 'Femer', 26, 'Mero@ymail.com', 0, 'Bosh', 'profesionale', 42123986, 'jo', 'Operatore', 1100),
(7, 'Arber', 'Shehu', 'Mashkull', 52, 'arber234@yahoo.com', 0, 'Bosh', 'mesme', 42579991, 'jo', 'teknik', 100),
(8, 'Ina', 'Dhono', 'Femer', 22, 'ina@gmail.com', 0, 'Bosh', 'larte', 681252335, 'po', 'programuese', 20000),
(10, 'w', 'w22', 'Mashkull', 22, 'w@w', 7, 'Mastercard', 'fillore', 234234, 'jo', '234234', 2222),
(15, 'w', 'w', 'Mashkull', 22, '054c7d811abdf700f0af22ca57ec56', 0, 'Mastercard', 'fillore', 2313213, 'jo', '12312', 122),
(16, 'q', 'q', 'Mashkull', 22, '548b1daa2c7cf5bad28fcb9bcf0862', 0, 'Mastercard', 'fillore', 23456, 'jo', 'sdfgh', 33);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `gender` enum('Mashkull','Femer') NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(40) NOT NULL,
  `creditcard` int(16) NOT NULL,
  `type` enum('Bosh','Visa','Mastercard','Discover','AmericanExpress') NOT NULL,
  `password` varchar(10) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `surname`, `username`, `gender`, `age`, `email`, `creditcard`, `type`, `password`, `contact`) VALUES
(14, 'Alfred', 'Dushku', 'Fredi', 'Mashkull', 22, 'Alfred@yahoo.com', 2147483647, 'AmericanExpress', 'fredi', 42123324),
(16, 'Beni', 'Beni', 'Beni', 'Mashkull', 21, 'Beni@yahoo.com', 12334546, 'Mastercard', 'beni', 123455678),
(24, 'Aldo', 'Qejvani', 'aldo', 'Mashkull', 21, 'aldo.qejvani@fshnstudent.info', 0, 'Bosh', 'aldo', 699363937),
(26, 'Andoni', 'Balliu', 'Doni', 'Mashkull', 22, 'doni121@yahoo.com', 0, 'Bosh', 'doni', 1234543234),
(31, 'Dritan', 'Filo', 'tani', 'Mashkull', 35, 'tani@ymail.com', 0, 'Bosh', 'tani', 42123567),
(46, 'q', 'q', 'q', 'Mashkull', 22, 'q@q', 24, 'Discover', '7694f4a663', 123123),
(47, 'a', 'a', 'a', 'Mashkull', 33, 'a@a', 2323, 'AmericanExpress', '0cc175b9c0', 2131231),
(48, 'johny', 'john', 'john1', 'Mashkull', 22, 'johnnie@hotmail.com', 2147483647, 'Visa', 'xhon', 2147483647),
(51, 'altin', 'duka', 'tini', 'Mashkull', 22, 'tini@yahoo.com', 2132433434, 'Mastercard', 'tini', 222),
(52, 'qqwq', 'qwqwq', 'q', 'Femer', 22, 'q@q', 321321312, 'Mastercard', 'beii', 123456788);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Administratoret`
--
ALTER TABLE `Administratoret`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `adminkod`
--
ALTER TABLE `adminkod`
  ADD PRIMARY KEY (`kodid`);

--
-- Indexes for table `aplikime`
--
ALTER TABLE `aplikime`
  ADD PRIMARY KEY (`aplikimID`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `mirembajtje`
--
ALTER TABLE `mirembajtje`
  ADD PRIMARY KEY (`mirembajtjeID`);

--
-- Indexes for table `njoftime`
--
ALTER TABLE `njoftime`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`oferteID`);

--
-- Indexes for table `pergjegjesit`
--
ALTER TABLE `pergjegjesit`
  ADD PRIMARY KEY (`perID`);

--
-- Indexes for table `Pershtypje`
--
ALTER TABLE `Pershtypje`
  ADD PRIMARY KEY (`PershtypjeID`);

--
-- Indexes for table `Porosi`
--
ALTER TABLE `Porosi`
  ADD PRIMARY KEY (`PorosiID`);

--
-- Indexes for table `prenotimeventi`
--
ALTER TABLE `prenotimeventi`
  ADD PRIMARY KEY (`prenotID`);

--
-- Indexes for table `prenotimrestoranti`
--
ALTER TABLE `prenotimrestoranti`
  ADD PRIMARY KEY (`prenotimiid`);

--
-- Indexes for table `prenotimtavoline`
--
ALTER TABLE `prenotimtavoline`
  ADD PRIMARY KEY (`prenotimID`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`problemID`);

--
-- Indexes for table `shefkuzhine`
--
ALTER TABLE `shefkuzhine`
  ADD PRIMARY KEY (`shefID`);

--
-- Indexes for table `stafiisherbimit`
--
ALTER TABLE `stafiisherbimit`
  ADD PRIMARY KEY (`workerID`);

--
-- Indexes for table `StafiIT`
--
ALTER TABLE `StafiIT`
  ADD PRIMARY KEY (`workerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Administratoret`
--
ALTER TABLE `Administratoret`
  MODIFY `AdminID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `adminkod`
--
ALTER TABLE `adminkod`
  MODIFY `kodid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aplikime`
--
ALTER TABLE `aplikime`
  MODIFY `aplikimID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `eventID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mirembajtje`
--
ALTER TABLE `mirembajtje`
  MODIFY `mirembajtjeID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `njoftime`
--
ALTER TABLE `njoftime`
  MODIFY `newsID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `oferta`
--
ALTER TABLE `oferta`
  MODIFY `oferteID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pergjegjesit`
--
ALTER TABLE `pergjegjesit`
  MODIFY `perID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Pershtypje`
--
ALTER TABLE `Pershtypje`
  MODIFY `PershtypjeID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `Porosi`
--
ALTER TABLE `Porosi`
  MODIFY `PorosiID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `prenotimeventi`
--
ALTER TABLE `prenotimeventi`
  MODIFY `prenotID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prenotimrestoranti`
--
ALTER TABLE `prenotimrestoranti`
  MODIFY `prenotimiid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prenotimtavoline`
--
ALTER TABLE `prenotimtavoline`
  MODIFY `prenotimID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `problemID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shefkuzhine`
--
ALTER TABLE `shefkuzhine`
  MODIFY `shefID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stafiisherbimit`
--
ALTER TABLE `stafiisherbimit`
  MODIFY `workerID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `StafiIT`
--
ALTER TABLE `StafiIT`
  MODIFY `workerID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
