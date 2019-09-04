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
        <br>
        <p align="center">NE KETE HAPESIRE SHFAQEN ADMINISTRATORET ME TE DHENAT PERKATESE !</p><br>
        <?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

mysql_select_db('Website');
$sql=("SELECT *  FROM Administratoret");
$records=mysql_query($sql);
?>
<table style="width:100%">
  <tr>
    <th>EMER</th>
    <th>MBIEMER</th> 
    <th>DATA E FILLIMIT</th>
    <th>ORE PUNE NE DITE</th>
    <th>SA DITE PUNE</th>
    <th>E-MAIL</th>
    <th>KONTAKT</th>
    <th>ADRESA</th>
  </tr>
  <?php 
  while($Administratoret=mysql_fetch_assoc($records)){
    echo "<tr>";
    echo "<td>".$Administratoret['AdminName']."</td>";
    echo "<td>".$Administratoret['AdminSurname']."</td>";
     echo "<td>".$Administratoret['StartDate']."</td>";
      echo "<td>".$Administratoret['OrePuneNeDite']."</td>";
      echo "<td>".$Administratoret['SaDitePune']."</td>";
       echo "<td>".$Administratoret['AddrElektronike']."</td>";
        echo "<td>".$Administratoret['NumerKontakti']."</td>";
        echo "<td>".$Administratoret['Adresa']."</td>";

    echo "</tr>";

  }
  ?>
  </table><br>
  <p align="center">NESE ADMINISTRATORI KERKON TE HIQET APO TE SHTOJE NJE ADMINISTRATOR TJETER AI DUHET TE DREJTOHET TEK STAFI IT !</p><br>
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
  </body>
  </html>
