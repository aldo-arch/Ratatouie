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

<p align="center">REGJISTRO SHEFIN E RI NE STAFIN E KUZHINES !</p>
<form action="shef3.php" method="post">
  <h1>EMER:</h1>
  <input type="text" name="emer"  maxlength="15" size=30 required><br>
  <h1>MBIEMER:</h1>
  <input type="text" name="mbiemer"  maxlength="15" size=30 required><br>
  <h1>PAGA:</h1>
  <input type="number" min="0" max="100000" name="paga" size=5>LEKE<br>
  <h1>GJINIA:</h1>
  <input type="radio" name="gjinia" value="Mashkull" required>M
  <input type="radio" name="gjinia" value="Femer" required>F<br>
  <h1>MOSHA:</h1>
  <input type="number" min="20" max="65" name="mosha" maxlength="2" required><br>
  <h1>E-mail</h1>
  <input type="email" name="email"  maxlength="30" required><br>
  <h1>KARTA BANKARE:</h1>
  <input type="text" name="kartebankare"  maxlength="20" required><br>
  <h1>LLOJI:</h1>
  <input type="radio" name="llojiikartesbankare" value="Bosh" required>Bosh
  <input type="radio" name="llojiikartesbankare" value="Visa" required>Visa
  <input type="radio" name="llojiikartesbankare" value="Mastercard" required>Mastercard
  <input type="radio" name="llojiikartesbankare" value="Discover" required>Discover
  <input type="radio" name="llojiikartesbankare" value="AmericanExpress" required>American Express<br>
  <h1>ARSIMI:</h1>
    <input type="radio" name="arsim" value="paarsim" required>Pa arsim
  <input type="radio" name="arsim" value="fillore" required>Fillore
    <input type="radio" name="arsim" value="8/9vjecare" required>8/9 Vjecare
  <input type="radio" name="arsim" value="mesme" required>Shkolle e mesme
    <input type="radio" name="arsim" value="profesionale" required>Profesionale
  <input type="radio" name="arsim" value="larte" required>Shkolle e larte<br>
  <h1>NR.KONTAKTI:</h1>
  <input type="number" min="0" max="999999999999" name="nrkontakti" maxlength="15" required><br>
  <h1>KONTRATE</h1>
    <input type="radio" name="kontrata" value="po" required>po
  <input type="radio" name="kontrata" value="jo" required>jo<br>
  <h1>POSTI (roli):</h1>
  <input type="text" name="rol"  maxlength="15" size=50 required><br>
  <p align=center>KONTROLLONI TE DHENAT DHE NJE HERE PARA SE TI REGJISTRONI !</p><br>
  <p align=center><button type="submit" name="submit" class="button1">Shto shefin ne kuzhine !</button></p>
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
