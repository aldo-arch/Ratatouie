<?php require_once("session.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>R|M|P|Beer</title>
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
      <img src="beer/0.jpg" alt="">
      <img src="beer/1.png" alt="">
      <img src="beer/2.jpeg" alt="">
      <img src="beer/3.png" alt="">
      <img src="beer/4.jpg" alt="">
      <img src="beer/5.jpeg" alt="">
      <img src="beer/6.jpg" alt="">
      <img src="beer/7.jpg" alt="">
      <img src="beer/8.jpg" alt="">
      <img src="beer/9.jpg" alt="">
      <img src="beer/10.jpeg" alt="">
      <img src="beer/11.jpeg" alt="">
      <img src="beer/12.jpg" alt="">
</center>
	<br>
  <p align=center>PER KETE KATEGORI,PERVEC TE TJERASH,KETO JANE KRYESORET:</p>
	<p align=center><audio controls autoplay>
  <source src="audio/beer.mp3" type="audio/mpeg">
</audio></p>
	<p align=center>Guinnes		 |200 LEKE</p><br>
	<p align=center>Blue Moon	 |200 LEKE</p><br>
	<p align=center>Samuel Adams Boston Lager		 |200 LEKE</p><br>
	<p align=center>Corona		 |200 LEKE</p><br>
	<p align=center>Stella Artois	 |200 LEKE</p><br>
	<p align=center>Dos Equis	 |200 LEKE</p><br>
	<p align=center>Budweiser		 |200 LEKE</p><br>
	<p align=center>Fat Tire	 |200 LEKE</p><br>	
	<p align=center>Sierra Nevada	 |200 LEKE</p><br>
	<p align=center>Yuengling Premium Beer |200 LEKE</p><br>
	<p align=center>Newcastle Brown Ale	 |200 LEKE</p><br>
	<p align=center>Dogfish Head	 |200 LEKE</p><br>
	<p align=center>Hoegaarden Witbier		 |200 LEKE</p><br>
	<p align=center>Michelob	 |200 LEKE</p><br>
	<p align=center>George Kilian's Irish Red	 |200 LEKE</p><br>
	<p align=center>Labatt Blue		 |200 LEKE</p><br>
	<p align=center>Shiner Bock  |200 LEKE</p><br>
	<p align=center>Foster's Lager	 |200 LEKE</p><br>
	<p align=center>Grolsch |200 LEKE</p><br>
	<p align=center>Chimay	 |200 LEKE</p><br>
	<p align=center>Molson Canadian |200 LEKE</p><br>
	<p align=center>Pabst Blue Ribbon	 |200 LEKE</p><br>
  <p align=center>Sapporo Premium Lager  |200 LEKE</p><br>
  <p align=center>Beck's  |200 LEKE</p><br>
  <p align=center>Pilsner Urquell  |200 LEKE</p><br>
  <p align=center>Amstel Lager  |200 LEKE</p><br>
  <p align=center>Bass Ale  |200 LEKE</p><br>
  <p align=center>Coors Light  |200 LEKE</p><br>
  <p align=center>Hofbrauhaus  |200 LEKE</p><br>
  <p align=center>Old Latrobe Rolling Rock  |200 LEKE</p><br>
  <p align=center>Miller Genuine Draft  |200 LEKE</p><br>
  <p align=center>Peroni Nastro Azzurro  |200 LEKE</p><br>
  <p align=center>Guinness Smithwicks  |200 LEKE</p><br>
  <p align=center>Shock Top  |200 LEKE</p><br>
  <p align=center>Tsingatao Beer  |200 LEKE</p><br>
  <p align=center>Cerveceria Modelo  |200 LEKE</p><br>
  <p align=center>Red Stripe  |200 LEKE</p><br>
  <p align=center>Leinenkugel Original |200 LEKE</p><br>
  <p align=center>Paulaner  |200 LEKE</p><br>
  <p align=center>Femsa Tecate  |200 LEKE</p><br>
  <p align=center>Erdinger Weissbier  |200 LEKE</p><br>
  <p align=center>Harp Lager  |200 LEKE</p><br>
  <p align=center>Magic Hat  |200 LEKE</p><br>
	<p align=center>...</p>
<!-- / trupi -->
  </div>
</div>
<div class="body3">
  <div class="body4">
<center>
  <img src="beer/13.jpg" alt="">
  <img src="beer/14.jpg" alt="">
  <img src="beer/15.jpg" alt="">
  <img src="beer/16.jpeg" alt="">
  <img src="beer/17.png" alt="">
  <img src="beer/18.jpg" alt="">
  <img src="beer/19.jpeg" alt="">
  <img src="beer/20.jpg" alt="">
  <img src="beer/21.jpeg" alt="">
  <img src="beer/22.png" alt="">
  <img src="beer/23.jpg" alt="">
  <img src="beer/24.jpg" alt="">
  <img src="beer/25.png" alt="">
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
