<?php require_once("session.php");
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
$username = $_SESSION['name'];
$query = "SELECT * FROM users where name = '$username'"; 
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ratatouie|Shporta</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Forum_400.font.js"></script>
</head>
<body id="page4">
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
              <li><a href="menu.php">Menu</a></li>
              <?php 
              if(isset($_SESSION['ID'])) { ?>
              <li><a href="profile.php">Profili im</a></li>
              <li><a href="shporta.php">Shporta</a></li>
              <li><a href="pershtypje.php">Libri i pershtypjeve</a></li>
              <?php }
              if(!isset($_SESSION['ID'])) { ?>
              <li><a href="login.php">Log in</a></li>
              <li><a href="signup.php">Sign up</a></li>
              <li><a href="logohu.php">Shporta</a></li>
              <li><a href="logohu.php">Libri i Pershtypjeve</a></li>
              <?php } ?>
            </ul>
        </nav>
      </header>
      <!-- / header -->
      <!-- trupi -->
    </div>
  </div>
</div>
	<br><p align=center>-NE KETE KATEGORI JU MUND TE ZGJIDHNI PRODUKTET TUAJA,NE JUA SJELLIM ME LEHTESI!!!-</p>
	<p align=center><audio controls autoplay>
  <source src="audio/shp.mp3" type="audio/mpeg">
</audio></p><br>
  <form  action="porosia.php" method="post">
<input type="hidden" name="fullname" value="<?php echo "$row[ID]" ?>">
<input type="hidden" name="usernome" value="<?php echo "$row[username]" ?>">
    <p align="center">PAGESA:
	<input type="radio" name="pagesa" value="CreditCard" required>KARTE BANKARE
	<input type="radio" name="pagesa" value="Cash" required>CASH</p><br>
	<p align="center">VENDOSNI ADRESEN KU DO TE MERRNI POROSITE</p><br>
	<p align="center"><input type="text" name="adresa" size=100 required></p><br>
	<p align="center">ZGJIDHNI PRODUKTET !!!</p><br>
	<p align="center">PRODUKTET AMERIKANE:</p><br>
   <p align="center" ><select name="amerikausa">
  <option value="asgje0">-</option>
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
  </select> </p><br>
  <p align="center">SASIA:<input type="number" min="0" max="20" name="usasasia" size=30 required></p><br>
  <p align="center">PRODUKTET FRANCEZE:</p><br>
  <p align="center" ><select name="francafr">
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
  </select> </p>
  <p align="center">SASIA:<input type="number" min="0" max="20" name="frsasia" size=30 required></p><br>
  <p align="center">PRODUKTET ITALIANE:</p><br>
  <p align="center" ><select name="italiaita">
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
  </select> </p>
  <p align="center">SASIA:<input type="number" min="0" max="20" name="itasasia" size=30 required></p><br>
  <p align=center>KONTROLLONI POROSINE TUAJ PERSERI PARA SE TE DERGONI ATE !!!</p><br>
  <p align="center"><input type=reset name="fshi" class="button1" value="NIS NGA E PARA"></p><br>
  <p align=center><button type="submit" class="button1" name="submit" id="submit">DERGO POROSINE!</button></p>
	</form>
    <!-- / trupi -->
  </div>
</div>
<div class="body3">
  <div class="body4">
    <div class="main">
      <!-- footer -->
      <footer><hr>
        <div class="wrapper">
          <section class="col1 pad_left1">
		 <h3>ADRESA:</h3>
	       <p>TIRANE,RRUGA:'KONT LEOPOLD' KTHESA E DYTE,MAJTAS,PERBALLE 'Sophie'</p>
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
              <li>BEHU MIK ME SHEFIN<a href="https://www.facebook.com/ratatouiechef.restorantchef.3" target=_"blank"> NE Facebook</a></li>
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
