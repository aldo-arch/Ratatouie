<?php require_once("session.php") ?>
<!DOCTYPE html>
<html>
<head>
<title>Ratatouie|Sign up</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Forum_400.font.js"></script>
</head>
<body id="page3">
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
  <form action="register.php" method="post">
	<BR><p align=center>-NE KETE KATEGORI JU MUNDESOHET KRIJIMI I NJE PROFILI NE FAQEN TONE-</P>
	<h1>EMER:</h1>
	<input type="text" name="emer"  maxlength="15" size=30 required><br>
	<h1>MBIEMER:</h1>
	<input type="text" name="mbiemer"  maxlength="15" size=30 required><br>
        <h1>ZGJIDHNI NJE KOMBINIM PER USERNAME-N TUAJ:</h1>
	<input type="text" name="userid" size=20 required><br>
	<h1>ZGJIDHNI GJININE:</h1>
	<input type="radio" name="gjinia" value="Mashkull" required>M
	<input type="radio" name="gjinia" value="Femer" required>F<br>
	<h1>MOSHA JUAJ:</h1>
	<input type="number" name="mosha" maxlength="2" min="1" max="80" required><br>
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
	<h1>FJALEKALIMI/PASSWORDI JUAJ (10 karaktere):</h1>
	<input type="password" name="fjalekalimi" maxlength="10" required><br>
	<h1>NR.KONTAKTI:</h1>
	<input type="number" min="0" name="nrkontakti" maxlength="15" max="999999999999" required><br>
	<p align=center>KONTROLLONI TE DHENAT TUAJA DHE NJE HERE PARA SE TE REGJISTROHENI !</p><br>
	<p align=center><button type="submit" name="submit" class="button1">Regjistrohu!</button></p>
  </form>
	<br>
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
