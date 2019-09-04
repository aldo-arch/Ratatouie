<?php require_once("session.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Forum_400.font.js"></script>
</head>
<body id="page2">
<div class="body6">
  <div class="body1">
    <div class="main">
      <!-- header -->
      <header>
        <h1><a href="index.php" id="logo">Restorant Ratatouie</a></h1>
         <nav>
            <ul id="top_nav">
              <li><a href="index.php"><img src="images/icon_1.gif" alt=""></a></li>
              <li><a href="reklama.php"><img src="images/icon_3.png" alt=""></a></li>
              <li><a href="admin.php"><img src="images/icon_2.gif" alt=""></a></li>
            </ul>
          </nav>
        <nav>
           <ul id="menu">
              <li><a href="events.php">Evente</a></li>
              <li><a href="users.php">Perdoruesit</a></li>
              <li><a href="ulje.php">Oferta</a></li>
              <li><a href="admini.php">Administratoret</a></li>
              <li><a href="help.php">Suport</a></li>
            </ul>
        </nav>
        </header>
  <!-- / header -->
      <!-- permbajtje -->
       </div>
  </div>
</div><br><br>

<p align="center">KRIJONI OFERTEN E RE !</p>
<form action="of3.php" method="post">
  <h1>EMER I OFERTES:</h1>
  <input type="text" name="emer"  maxlength="15" size=30 required><br>
  <h1>PRODUKTET AMERIKANE/Cmim aktual:</h1>
  <select name="usa">
  <option value="asnje">-</option>
  <option value="Texas_BBQ_medley-500_LEKE">Texas BBQ medley-500 LEKE</option>
  <option value="Choc_chip_pecan_pie-750_LEKE">Choc chip pecan pie-750 LEKE</option>
  <option value="Burnt_onion_dip-645_LEKE">Burnt onion dip-645 LEKE</option>
  <option value="Diner_Sloppy_Joes-500_LEKE">Diner Sloppy Joes-500 LEKE</option>
  <option value="Diner_Sloppy_fish-500_LEKE">Diner Sloppy fish-500 LEKE</option>
  <option value="Cornbread-400_LEKE">Cornbread-400 LEKE</option>
  <option value="Cookie_dough-200_LEKE">Cookie dough-200 LEKE</option>
  <option value="American_T-bone-1000_LEKE">American T-bone-1000 LEKE</option>
  <option value="Malt_chocolate-350_LEKE">Malt chocolate-350 LEKE</option>
  <option value="Bourbon-320_LEKE">Bourbon-320 LEKE</option>
  <option value="Smoky_pork-1590_LEKE">Smoky pork-1590 LEKE</option>
  <option value="Big_burger-450_LEKE">Big burger-450 LEKE</option>
  <option value="BBQ_pulled_pork-1200_LEKE">BBQ pulled pork-1200 LEKE</option>
  <option value="Buttermilk_salad-1520_LEKE">Buttermilk salad-1520 LEKE</option>
  <option value="Seafood_chowder-1435_LEKE">Seafood chowder-1435 LEKE</option>
  <option value="Pumpkin_Pie-1200_LEKE">Pumpkin Pie-1200 LEKE</option>
  <option value="Salt_beef/Cajun_fries-1300_LEKE">Salt beef/Cajun fries-1300 LEKE</option>
  <option value="Chickencorn_salad-900_LEKE">Chickencorn salad-900 LEKE</option>
  <option value="New_York_Cheesecake-480_LEKE">New York Cheesecake-480 LEKE</option>
  <option value="Sweet_chilli_dogs-300_LEKE">Sweet chilli dogs-300 LEKE</option>
  <option value="Caesar_salad-1390_LEKE">Caesar salad-1390 LEKE</option>
  <option value="Sticky_ribs-1500_LEKE">Sticky ribs-1500 LEKE</option>
  <option value="Key_lime_pie-1485_LEKE">Key lime pie-1485 LEKE</option>
  <option value="Crispy/pretzel_chicken-1689_LEKE">Crispy/pretzel chicken-1689 LEKE</option>
  <option value="Raspberry_brownies-2000_LEKE">Raspberry brownies-2000 LEKE</option>
  <option value="Plate-sized_pancakes-250_LEKE">Plate-sized pancakes-250 LEKE</option>
  <option value="Custard/biscuits-450_LEKE">Custard/biscuits-450 LEKE</option>
  <option value="Crispy_chicken/apple-1580_LEKE">Crispy chicken/apple-1580 LEKE</option>
  <option value="Crispy_Cajun_rings-350_LEKE">Crispy Cajun rings-350 LEKE</option>
  <option value="Buffalo_chicken_wings-890_LEKE">Buffalo chicken wings-890 LEKE</option>
  <option value="Peanut/butter_cheesecake-1000_LEKE">Peanut/butter cheesecake-1000 LEKE</option>
  <option value="Sticky_glazed_ribs-999_LEKE">Sticky glazed ribs-999 LEKE</option>
  <option value="Sweetcorn_chowder-590_LEKE">Sweetcorn chowder-590 LEKE</option>
  <option value="Peach/blueberry_grunt-350_LEKE">Peach/blueberry grunt-350 LEKE</option>
  <option value="BBQ_drumsticks(slaw)-890_LEKE">BBQ drumsticks(slaw)-890 LEKE</option>
  <option value="Peanut_butter_brownies-370_LEKE">Peanut butter brownies-370 LEKE</option>
  <option value="South-western-salad-800_LEKE">South-western-salad-800 LEKE</option>
  <option value="Buffalo_wings-1200_LEKE">Buffalo wings-1200 LEKE</option>
  <option value="Butternut_maple-1700_LEKE">Butternut, maple-1700 LEKE</option>
  <option value="Hot_dogs-200_LEKE">Hot dogs-200 LEKE</option>
  <option value="BBQ_chicken_burgers-200_LEKE">BBQ chicken burgers-200 LEKE</option>
  </select>CMIMI I RI:<input type="number" min="0" max="10000" name="usacmimi" maxlength="5" required><br>
  <h1>PRODUKTET FRANCEZE/Cmim aktual:</h1>
  <select name="fr">
  <option value="asgje1">-</option>
  <option value="Gruyere-700_LEKE">Gruyere-700 LEKE</option>
  <option value="Poulet_de_Provencal-850_LEKE">Poulet de Provencal-850 LEKE</option>
  <option value="Gratin_Dauphinois-600_LEKE">Gratin Dauphinois-600 LEKE</option>
  <option value="Croissant-200_LEKE">Croissant-200 LEKE</option>
  <option value="Creme_Brulee-350_LEKE">Creme Brulee-350 LEKE</option>
  <option value="Beef_Bourguignon-1500_LEKE">Beef Bourguignon-1500 LEKE</option>
  <option value="Creme_Fraiche-800_LEKE">Creme Fraiche-800 LEKE</option>
  <option value="Coq_Au_Vin-1750_LEKE">Coq Au Vin-1750 LEKE</option>
  <option value="Chocolate_Ganache-500_LEKE">Chocolate Ganache-500 LEKE</option>
  <option value="Chocolate_Bleu-1000_LEKE">Chocolate Bleu-1000 LEKE</option>
  <option value="Omelet-200_LEKE">Omelet-200 LEKE</option>
  <option value="Cordon_Bleu-1000_LEKE">Cordon Bleu-1000 LEKE</option>
  <option value="Eclairs-200_LEKE">Eclairs-200 LEKE</option>
  <option value="Brie-590_LEKE">Brie-590 LEKE</option>
  <option value="Meringues-200_LEKE">Meringues-200 LEKE</option>
  <option value="Mousse-1200_LEKE">Mousse-1200 LEKE</option>
  <option value="Mussels_Mariniere-1590_LEKE">Mussels Mariniere-1590 LEKE</option>
  <option value="Buche_de_Noel-890_LEKE">Buche de Noel-890 LEKE</option>
  <option value="Ratatouille-1000_LEKE">Ratatouille-1000 LEKE</option>
  <option value="Brie_Puff_Pastry-200_LEKE">Brie Puff Pastry-200 LEKE</option>
  <option value="CBleu_Casserole-459_LEKE">CBleu Casserole-459 LEKE</option>
  <option value="Quiche_Lorraine-620_LEKE">Quiche Lorraine-620 LEKE</option>
  <option value="Madeleines-200_LEKE">Madeleines-200 LEKE</option>
  <option value="Bourguignon-2000_LEKE">Bourguignon-2000 LEKE</option>
  <option value="Kalamata_Olive_Tapenade-1800_LEKE">Kalamata Olive Tapenade-1800 LEKE</option>
  <option value="Macaron-200_LEKE">Macaron-200 LEKE</option>
  <option value="Plum_Clafouti-450_LEKE">Plum Clafouti-450 LEKE</option>
  <option value="Potatoe_Au_Gratin-870_LEKE">Potatoe Au Gratin-870 LEKE</option>
  <option value="Meringue-520_LEKE">Meringue-520 LEKE</option>
  <option value="Herbes_de_Provence-500_LEKE">Herbes de Provence-500 LEKE</option>
  <option value="Tarte_de_Pommes-900_LEKE">Tarte de Pommes-900 LEKE</option>
  <option value="Crepe-290_LEKE">Crepe-290 LEKE</option>
  <option value="Rochester-1000_LEKE">Rochester-1000 LEKE</option>
  <option value="Pro_Ganache-900_LEKE">Pro Ganache-900 LEKE</option>
  <option value="Filet_Mignons-1900_LEKE">Filet Mignons-1900 LEKE</option>
  <option value="Cassoulet-600_LEKE">Cassoulet-600 LEKE</option>
  <option value="Asparagus-490_LEKE">Asparagus-490 LEKE</option>
  <option value="Chutney-200_LEKE">Chutney-200 LEKE</option>
  <option value="Bordelaise-2500_LEKE">Bordelaise-2500 LEKE</option>
  <option value="Tourtiere-1790_LEKE">Tourtiere-1790 LEKE</option>
  <option value="Lyonnaise_a_la_crof-666_LEKE">Lyonnaise a la crof-666 LEKE</option>
  </select>CMIMI I RI:<input type="number" min="0" max="10000" name="frcmimi" maxlength="5" required><br>
  <h1>PRODUKTET ITALIANE/Cmim aktual:</h1>
  <select name="ita">
  <option value="asgje2">-</option>
  <option value="Cannelloni-590_LEKE">Cannelloni-590 LEKE</option>
  <option value="Antipasto-1800_LEKE">Antipasto-1800 LEKE</option>
  <option value="Focaccia/Baraise-200_LEKE">Focaccia/Baraise-200 LEKE</option>
  <option value="Torta_Rustica-680_LEKE">Torta Rustica-680 LEKE</option>
  <option value="Zuppa_Toscanata-360_LEKE">Zuppa Toscanata-360 LEKE</option>
  <option value="Hazelnut_Biscotti-640_LEKE">Hazelnut Biscotti-640 LEKE</option>
  <option value="Marsala-1800_LEKE">Marsala-1800 LEKE</option>
  <option value="Lasagna-700_LEKE">Lasagna-700 LEKE</option>
  <option value="Pizza-500_LEKE">Pizza-500 LEKE</option>
  <option value="Spaghetti-400_LEKE">Spaghetti-400 LEKE</option>
  <option value="Bruschetta-350_LEKE">Bruschetta-350 LEKE</option>
  <option value="Zuppa_Toscana-410_LEKE">Zuppa Toscana-410 LEKE</option>
  <option value="Minestrone-900_LEKE">Minestrone-900 LEKE</option>
  <option value="Tortellini-590_LEKE">Tortellini-590 LEKE</option>
  <option value="Fettuccini-570_LEKE">Fettuccini-570 LEKE</option>
  <option value="Tiramisu-300_LEKE">Tiramisu-300 LEKE</option>
  <option value="Pesto_di_Florentine-690_LEKE">Pesto di Florentine-690 LEKE</option>
  <option value="Parmigiana-2600_LEKE">Parmigiana-2600 LEKE</option>
  <option value="Focaccia_Bread-1200_LEKE">Focaccia Bread-1200 LEKE</option>
  <option value="Piccata-1630_LEKE">Piccata-1630 LEKE</option>
  <option value="Penne_Arrabiata-700_LEKE">Penne Arrabiata-700 LEKE</option>
  <option value="Pasta_Pomodoro-550_LEKE">Pasta Pomodoro-550 LEKE</option>
  <option value="Biscotti-200_LEKE">Biscotti-200 LEKE</option>
  <option value="Manicotti_Alla_Romana-4500_LEKE">Manicotti Alla Romana-4500 LEKE</option>
  <option value="Calzone-350_LEKE">Calzone-350 LEKE</option>
  <option value="Cacciatore-1510_LEKE">Cacciatore-1510 LEKE</option>
  <option value="Pene/Valentino-480_LEKE">Pene/Valentino-480 LEKE</option>
  <option value="Tetrazzini_di_mare-10000_LEKE">Tetrazzini di mare-10000 LEKE</option>
  <option value="Cioppino-500_LEKE">Cioppino-500 LEKE</option>
  <option value="Pasta_Primavera-470_LEKE">Pasta Primavera-470 LEKE</option>
  <option value="Pasta_Fagioli-610_LEKE">Pasta Fagioli-610 LEKE</option>
  <option value="Ravioli-550_LEKE">Ravioli-550 LEKE</option>
  <option value="Fettuccine_Alfredo-300_LEKE">Fettuccine Alfredo-300 LEKE</option>
  <option value="Zitti-2400_LEKE">Zitti-2400 LEKE</option>
  <option value="Pepperoni-200_LEKE">Pepperoni-200 LEKE</option>
  <option value="Ricotta_Gnocchi-310_LEKE">Ricotta Gnocchi-310 LEKE</option>
  <option value="Manicotti-450_LEKE">Manicotti-450 LEKE</option>
  <option value="Tilapia-320_LEKE">Tilapia-320 LEKE</option>
  <option value="Zucchini-200_LEKE">Zucchini-200 LEKE</option>
  <option value="Scarpariello-390_LEKE">Scarpariello-390 LEKE</option>
  <option value="Bruschetta-350_LEKE">Bruschetta-350 LEKE</option>
  </select>CMIMI I RI:<input type="number" min="0" max="10000" name="itacmimi" maxlength="5" required><br>
  <h1>PRODUKTET JOALKOLIKE/Cmim aktual:</h1>
  <select name="joa">
  <option value="asgje3">-</option>
  <option value="uje_100_LEKE">uje mineral |100 LEKE</option>
  <option value="bravo_molle_200_LEKE">Bravo-molle |200 LEKE</option>
  <option value="bravo_rrushi_200_LEKE">Bravo-rrushi  |200 LEKE</option>
  <option value="bravo_pjeshke_200_LEKE">Bravo-pjeshke |200 LEKE</option>
  <option value="bravo_luleshtrydhe_200_LEKE">Bravo-luleshtrydhe|200 LEKE</option>
  <option value="bravo_portokall_200_LEKE">Bravo-portokall|200 LEKE</option>
  <option value="bravo_shege_200_LEKE">Bravo-Shege|200 LEKE</option>
  <option value="bravo_qumesht_200_LEKE">Bravo(sipas deshires)+qumesht|200 LEKE</option>
  <option value="bravo_mix_200_LEKE">Bravo-mix|200 LEKE</option>
  <option value="ivi_mandarine_200_LEKE">Ivi(pa gaz)-mandarine|200 LEKE</option>
  <option value="ivi_portokall_200_LEKE">Ivi(pa gaz)-portokall|200 LEKE</option>
  <option value="ivi_deshire_200_LEKE">Ivi(pa gaz/sipas deshires)|200 LEKE</option>
  <option value="amita_pjeshte_200_LEKE">Amita-pjeshke|200 LEKE</option>
  <option value="amita_banane_200_LEKE">Amita-banane|200 LEKE</option>
  <option value="amita_qershi_200_LEKE">Amita-qershi|200 LEKE</option>
  <option value="amita_molle_200_LEKE">Amita-molle|200 LEKE</option>
  <option value="amita_deshire_200_LEKE">Amita(sipas deshires)|200 LEKE</option>
  <option value="rauch_deshire_200_LEKE">Rauch(sipas deshires)|200 LEKE</option>
  <option value="frut_deshire_200_LEKE">Frut i shtrydhur(sipas deshires)|200 LEKE</option>
  <option value="perime_deshire_200_LEKE">Perime te shtrydhura(sipas deshires)|200 LEKE</option>
  <option value="mixer_pro_200_LEKE">Mixer PRO|200 LEKE</option>
  <option value="mixer_deshire_200_LEKE">Mixer(sipas deshires)|200 LEKE</option>
  <option value="caj_kinez_200_LEKE">Caj-Kinez|200 LEKE</option>
  <option value="caj_jeshil_200_LEKE">Caj-jeshil|200 LEKE</option>
  <option value="kamomil_200_LEKE">Kamomil|200 LEKE</option>
  <option value="caj_limoni_200_LEKE">Caj-limoni|200 LEKE</option>
  <option value="caj_boronice_200_LEKE">Caj-Boronice|200 LEKE</option>
  <option value="caj_deshire_200_LEKE">Caj(sipas deshires)+mjalte+biskote/kek|200 LEKE</option>
  <option value="lipton_limon_200_LEKE">Lipton ice tea-limon|200 LEKE</option>
  <option value="lipton_pjeshke_200_LEKE">Lipton ice tea-Pjeshke|200 LEKE</option>
  <option value="milkshake_200_LEKE">Milkshake(sipas deshires)|200 LEKE</option>
  <option value="coffee_200_LEKE">Coffee(sipas deshires)+cookie|200 LEKE</option>
  <option value="nescafe_200_LEKE">Nescafe|200 LEKE</option>
  <option value="santal_molle_200_LEKE">Santal-molle|200 LEKE</option>
  <option value="santal_pjeshke_200_LEKE">Santal-Pjeshke|200 LEKE</option>
  <option value="santal_deshire_200_LEKE">Santal(sipas deshires)|200 LEKE</option>
  <option value="cola_200_LEKE">Coca Cola |200 LEKE</option>
  <option value="cola0_200_LEKE">Coca cola zero  |200 LEKE</option>
  <option value="fanta_orange_200_LEKE">Fanta portokall |200 LEKE</option>
  <option value="fanta_lemon_200_LEKE">Fanta limon |200 LEKE</option>
  <option value="fanta_exotic_200_LEKE">Fanta Exotic  |200 LEKE</option>
  <option value="pepsi_200_LEKE">Pepsi   |200 LEKE</option>
  <option value="pepsi_twist_200_LEKE">Pepsi TWist |200 LEKE</option>
  <option value="pepsi_max_200_LEKE">Pepsi MAX |200 LEKE</option>
  <option value="sprite_200_LEKE">Sprite    |200 LEKE</option>
  <option value="7up_200_LEKE">7up   |200 LEKE</option>
  <option value="soda_orange_200_LEKE">Soda portokall  |200 LEKE</option>
  <option value="soda_lemon_200_LEKE">Soda limon  |200 LEKE</option>
  <option value="uje_gaz_200_LEKE">Uje Glina |200 LEKE</option>
  <option value="glina_ricoco_200_LEKE">Glina Ricoco  |200 LEKE</option>
  <option value="glina_limon_200_LEKE">Glina limon |200 LEKE</option>
  <option value="red_bull_200_LEKE">Red Bull  |200 LEKE</option>
  <option value="dragon_heart_200_LEKE">Dragon heart  |200 LEKE</option>
  <option value="monster_r_200_LEKE">Monster-R |200 LEKE</option>
  <option value="mosnter_g_200_LEKE">Monster-G |200 LEKE</option>
  <option value="monster_b_200_LEKE">Monster-B |200 LEKE</option>
  <option value="monster_y_200_LEKE">Monster-Y |200 LEKE</option>
  <option value="red_rock_200_LEKE">Red Rock  |200 LEKE</option>
  <option value="bitter_200_LEKE">biter   |200 LEKE</option>
  <option value="ivi_200_LEKE">Ivi   |200 LEKE</option>
  </select>CMIMI I RI:<input type="number" min="0" max="1000" name="joacmim" maxlength="5" required><br>
  <h1>PRODUKTET ALKOLIKE/Cmim aktual</h1>
  <select name="alko">
  <option value="asgje3">-</option>
  <option value="patron_200_LEKE">Patron    |200 LEKE</option>
  <option value="grey_goose_200_LEKE">Grey Goose   |200 LEKE</option>
  <option value="hennesy_200_LEKE">Hennesy    |200 LEKE</option>
  <option value="giroc_200_LEKE">Giroc    |200 LEKE</option>
  <option value="crown_royal_200_LEKE">Crown Royal  |200 LEKE</option>
  <option value="johnnie_walker_200_LEKE">Johnnie Walker   |200 LEKE</option>
  <option value="belvedere_200_LEKE">belvedere  |200 LEKE</option>
  <option value="gentelman_jack_200_LEKE">Gentelman Jack   |200 LEKE</option>
  <option value="bacardi_200_LEKE">Bacardi    |200 LEKE</option>
  <option value="don_julio_200_LEKE">Don Julio  |200 LEKE</option>
  <option value="makers_mark_200_LEKE">Maker's mark   |200 LEKE</option>
  <option value="vodka_200_LEKE">Vodka      |200 LEKE</option>
  <option value="bombay_sapphire_200_LEKE">Bombay sapphire  |200 LEKE</option>
  <option value="ketel_one_200_LEKE">ketel one  |200 LEKE</option>
  <option value="woodford_reserve_200_LEKE">woodford reserve |200 LEKE</option>
  <option value="jim_beam_200_LEKE">jim beam   |200 LEKE</option>
  <option value="wild_turkey_200_LEKE">wild turkey  |200 LEKE</option>
  <option value="jagermeister_200_LEKE">jagermeister   |200 LEKE</option>
  </select>CMIMI I RI:<input type="number" min="0" max="1000" name="alkcmim" maxlength="5" required><br>
  <h1>VERERAT/Cmim aktual:</h1>
  <select name="wines">
  <option value="asgje4">-</option>
  <option value="albarino_200_LEKE">Albariño     |200 LEKE</option>
  <option value="aligote_200_LEKE">Aligoté  |200 LEKE</option>
  <option value="amarone_200_LEKE">Amarone    |200 LEKE</option>
  <option value="arneis_200_LEKE">Arneis     |200 LEKE</option>
  <option value="asti_sumante_200_LEKE">Asti Spumante  |200 LEKE</option>
  <option value="auslese_200_LEKE">Auslese  |200 LEKE</option>
  <option value="banylus_200_LEKE">Banylus    |200 LEKE</option>
  <option value="barbaresco_200_LEKE">Barbaresco   |200 LEKE </option>
  <option value="bardolino_200_LEKE_200_LEKE">">Bardolino  |200 LEKE</option>
  <option value="barolo_200_LEKE">Barolo   |200 LEKE</option>
  <option value="beaujolais_200_LEKE">Beaujolais   |200 LEKE</option>
  <option value="blancs_de_blancs_200_LEKE">Blanc de Blancs    |200 LEKE</option>
  <option value="blanc_de_noirs_200_LEKE">Blanc de Noirs     |200 LEKE</option>
  <option value="blush_200_LEKE">Blush  |200 LEKE</option>
  <option value="boal_or_bual_200_LEKE">Boal or Bual   |200 LEKE</option>
  <option value="brunello_200_LEKE">Brunello     |200 LEKE</option>
  <option value="cabernet_franc_200_LEKE">Cabernet Franc  |200 LEKE</option>
  <option value="cabernet_sauvignon_200_LEKE">Cabernet Sauvignon   |200 LEKE</option>
  <option value="carmenere_200_LEKE">Carmenere |200 LEKE</option>
  <option value="cava_200_LEKE">Cava   |200 LEKE</option>
  <option value="charbono_200_LEKE">Charbono |200 LEKE</option>
  <option value="chardonnay_200_LEKE">Chardonnay   |200 LEKE</option>
  </select>CMIMI I RI:<input type="number" min="0" max="5000" name="verecmim" maxlength="5" required><br>
  <h1>PRODUKTET BIRRE/Cmim aktual:</h1>
  <select name="beer">
  <option value="asgje5">-</option>
  <option value="Guinnes">Guinnes    |200 LEKE</option>
  <option value="Blue_Moon">Blue Moon  |200 LEKE</option>
  <option value="Samuel_Adams_Boston_Lager">Samuel Adams Boston Lager    |200 LEKE</option>
  <option value="Corona">Corona     |200 LEKE</option>
  <option value="Stella_Artois">Stella Artois  |200 LEKE</option>
  <option value="Dos_Equis">Dos Equis  |200 LEKE</option>
  <option value="Budweiser">Budweiser    |200 LEKE</option>
  <option value="Fat_Tire">Fat Tire   |200 LEKE</option>
  <option value="Sierra_Nevada">Sierra Nevada  |200 LEKE</option>
  <option value="Yuengling_Premium_Beer">Yuengling Premium Beer |200 LEKE</option>
  <option value="Newcastle_Brown_Ale">Newcastle Brown Ale  |200 LEKE</option>
  <option value="Dogfish_Head">Dogfish Head   |200 LEKE</option>
  <option value="Hoegaarden_Witbier">Hoegaarden Witbier     |200 LEKE</option>
  <option value="Michelob">Michelob   |200 LEKE</option>
  <option value="George_Kilians_Irish_Red">George Kilian's Irish Red  |200 LEKE</option>
  <option value="Labatt_Blue">Labatt Blue    |200 LEKE</option>
  <option value="Shiner_Bock">Shiner Bock  |200 LEKE</option>
  <option value="Fosters_Lager">Foster's Lager   |200 LEKE</option>
  <option value="Grolsch">Grolsch |200 LEKE</option>
  <option value="Chimay">Chimay   |200 LEKE</option>
  <option value="Molson_Canadian">Molson Canadian |200 LEKE</option>
  <option value="Pabst_Blue_Ribbon">Pabst Blue Ribbon  |200 LEKE</option>
  <option value="Sapporo_Premium_Lager">Sapporo Premium Lager  |200 LEKE</option>
  <option value="Becks">Beck's  |200 LEKE</option>
  <option value="Pilsner_Urquell">Pilsner Urquell  |200 LEKE</option>
  <option value="Amstel_Lager">Amstel Lager  |200 LEKE</option>
  <option value="Bass_Ale">Bass Ale  |200 LEKE</option>
  <option value="Coors_Light">Coors Light  |200 LEKE</option>
  <option value="Hofbrauhaus">Hofbrauhaus  |200 LEKE</option>
  <option value="Old_Latrobe_Rolling_Rock">Old Latrobe Rolling Rock  |200 LEKE</option>
  <option value="Miller_Genuine_Draft">Miller Genuine Draft  |200 LEKE</option>
  <option value="Peroni_Nastro_Azzurro">Peroni Nastro Azzurro  |200 LEKE</option>
  <option value="Guinness_Smithwicks">Guinness Smithwicks  |200 LEKE</option>
  <option value="Shock_Top">Shock Top  |200 LEKE</option>
  <option value="Tsingatao_Beer">Tsingatao Beer  |200 LEKE</option>
  <option value="Cerveceria_Modelo">Cerveceria Modelo  |200 LEKE</option>
  <option value="Red_Stripe">Red Stripe  |200 LEKE</option>
  <option value="Leinenkugel_Original">Leinenkugel Original |200 LEKE</option>
  <option value="Paulaner">Paulaner  |200 LEKE</option>
  <option value="Femsa_Tecate">Femsa Tecate  |200 LEKE</option>
  <option value="Erdinger_Weissbier">Erdinger Weissbier  |200 LEKE</option>
  <option value="Harp_Lager">Harp Lager  |200 LEKE</option>
  <option value="Magic_Hat">Magic Hat  |200 LEKE</option>
 </select>CMIMI I RI:<input type="number" min="0" max="5000" name="birrecmim" maxlength="5" required><br>

  <p align=center>KONTROLLONI TE DHENAT DHE NJE HERE PARA SE KRIJONI OFERTEN !</p>
  <p align=center>VENDOS MINIMUMIN 0 NESE NUK DO TE NDRYSHOSH CMIM !</p><<br>
  <p align=center><button type="submit" name="submit" class="button1">Krijo oferte !</button></p>
  </form>
 <div class="body3">
  <div class="body4">
    <div class="main">
      <!-- footer -->
      <footer><hr>
        <div class="wrapper">
          <section class="col1 pad_left1">
     <h3>ADRESA:</h3>
         <p>Tiranë,Rruga:'Kont Leopold' kthesa e dytë,majtas,përballë 'Sophie'</p>
            <h3>NA KONTAKTONI NE:</h3>
      <p>Nr.Tel:+355 04 2 340580<br>
         Nr.Cel:+355 0699363937<br>
               E-mail:ratatouierestorant@yahoo.com<br>
               Delivery:+355 0699359614<br>
               Catering:+355 0684344042<br></p>
        <P ALIGN=right>
        |Copyright &copy;RATATOUIE| 
         All Rights Reserved |
               Certified 12/12/2016|</p></section>
          <section class="col2 pad_left1">
            <h3>NA NDIQNI </h3>
            <ul id="icons">
              <li><a href="https://www.facebook.com/Restorant-Ratatouie-1187326811355133/" target="_blank" class="normaltip"><img src="images/icon1.gif" alt=""></a></li>
              <li><a href="https://www.instagram.com/ratatouierestorant/?hl=en" target="_blank" class="normaltip"><img src="images/icon2.gif" alt=""></a></li>
              <li><a href="https://twitter.com/RRatatouie" target="_blank" class="normaltip"><img src="images/icon3.gif" alt=""></a></li>
              <li>Bëhu mik me shefin<a href="https://www.facebook.com/ratatouiechef.restorantchef.3" target=_"blank"> në facebook</a></li>
        </ul>
        </section>
        </div>
      </footer>
      <!-- / footer -->
    </div>
  </div>
</div>
</body>
</html>
