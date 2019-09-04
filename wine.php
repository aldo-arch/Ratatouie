<?php require_once("session.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>R|M|P|Wine</title>
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
<center>
      <img src="winephoto/0.jpg" alt="">
      <img src="winephoto/1.png" alt="">
      <img src="winephoto/2.jpg" alt="">
      <img src="winephoto/3.jpg" alt="">
      <img src="winephoto/4.jpg" alt="">
      <img src="winephoto/5.jpg" alt="">
      <img src="winephoto/6.jpg" alt="">
      <img src="winephoto/7.jpg" alt="">
      <img src="winephoto/8.jpeg" alt="">
      <img src="winephoto/9.jpg" alt="">
      <img src="winephoto/10.jpg" alt="">
      <img src="winephoto/11.jpg" alt="">
      <img src="winephoto/12.jpg" alt="">
</center>
	<br>
  <p align=center>PER KETE KATEGORI,PERVEC TE TJERASH,KETO JANE KRYESORET:</p>
	<p align=center><audio controls autoplay>
  <source src="audio/alkoli.mp3" type="audio/mpeg">
</audio></p>
	<p align=center>Albariño		 |200 LEKE</p><br>
	<p align=center>Aligoté	 |200 LEKE</p><br>
	<p align=center>Amarone		 |200 LEKE</p><br>
	<p align=center>Arneis		 |200 LEKE</p><br>
	<p align=center>Asti Spumante	 |200 LEKE</p><br>
	<p align=center>Auslese	 |200 LEKE</p><br>
	<p align=center>Banylus		 |200 LEKE</p><br>
	<p align=center>Barbaresco	 |200 LEKE</p><br>	
	<p align=center>Bardolino	 |200 LEKE</p><br>
	<p align=center>Barolo	 |200 LEKE</p><br>
	<p align=center>Beaujolais	 |200 LEKE</p><br>
	<p align=center>Blanc de Blancs 	 |200 LEKE</p><br>
	<p align=center>Blanc de Noirs		 |200 LEKE</p><br>
	<p align=center>Blush	 |200 LEKE</p><br>
	<p align=center>Boal or Bual	 |200 LEKE</p><br>
	<p align=center>Brunello		 |200 LEKE</p><br>
	<p align=center>Cabernet Franc  |200 LEKE</p><br>
	<p align=center>Cabernet Sauvignon	 |200 LEKE</p><br>
	<p align=center>Carmenere |200 LEKE</p><br>
	<p align=center>Cava	 |200 LEKE</p><br>
	<p align=center>Charbono |200 LEKE</p><br>
	<p align=center>Chardonnay	 |200 LEKE</p><br>
	<p align=center>...</p>
<!-- / trupi -->
  </div>
</div>
<div class="body3">
  <div class="body4">
<center>
  <img src="winephoto/13.jpg" alt="">
  <img src="winephoto/14.jpg" alt="">
  <img src="winephoto/15.jpg" alt="">
  <img src="winephoto/16.png" alt="">
  <img src="winephoto/17.png" alt="">
  <img src="winephoto/18.png" alt="">
  <img src="winephoto/19.jpg" alt="">
  <img src="winephoto/20.jpg" alt="">
  <img src="winephoto/21.jpg" alt="">
  <img src="winephoto/22.png" alt="">
  <img src="winephoto/23.jpg" alt="">
  <img src="winephoto/24.jpg" alt="">
  <img src="winephoto/25.jpg" alt="">
</center>
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
        <!-- {%FOOTER_LINK} -->
      </footer>
      <!-- / footer -->
    </div>
  </div>
</div>
</body>
</html>
