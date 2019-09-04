<?php require_once("session.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>R|M|P|Alkolike</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Forum_400.font.js"></script>
</head>
<!-- header -->
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
              <li><a href="sukses.php">Shporta</a></li>
              <li><a href="sukses.php">Libri i Pershtypjeve</a></li>
              <?php } ?>
            </ul>
        </nav>
        </header>
      <!-- / header -->
    </div>
  </div>
</div>
<!-- permbajtja -->
<center>
 	  <img src="alkphoto/0.jpg" alt="">
      <img src="alkphoto/1.jpg" alt="">
      <img src="alkphoto/2.jpg" alt="">
      <img src="alkphoto/3.jpeg" alt="">
      <img src="alkphoto/4.jpg" alt="">
      <img src="alkphoto/5.jpeg" alt="">
      <img src="alkphoto/6.png" alt="">
      <img src="alkphoto/7.jpg" alt="">
      <img src="alkphoto/8.jpg" alt="">
      <img src="alkphoto/9.jpg" alt="">
      <img src="alkphoto/10.png" alt="">
      <img src="alkphoto/11.jpg" alt="">
      <img src="alkphoto/12.jpg" alt="">
</center>
      <br>
	<p align=center>PER KETE KATEGORI,PERVEC TE TJERASH,KETO JANE KRYESORET:</p><br>
	<p align=center><audio controls autoplay>
  <source src="audio/gaz.mp3" type="audio/mpeg">
  </audio></p>
	<p align=center>Patron    |200 LEKE</p><br>
  <p align=center>Grey Goose   |200 LEKE</p><br>
  <p align=center>Hennesy    |200 LEKE</p><br>
  <p align=center>Giroc    |200 LEKE</p><br>
  <p align=center>Crown Royal  |200 LEKE</p><br>
  <p align=center>Johnnie Walker   |200 LEKE</p><br>
  <p align=center>belvedere  |200 LEKE</p><br>
  <p align=center>Gentelman Jack   |200 LEKE</p><br>
  <p align=center>Bacardi    |200 LEKE</p><br>
  <p align=center>Don Julio  |200 LEKE</p><br>
  <p align=center>Maker's mark   |200 LEKE</p><br>
  <p align=center>Vodka      |200 LEKE</p><br>
  <p align=center>Bombay sapphire  |200 LEKE</p><br>
  <p align=center>ketel one  |200 LEKE</p><br>
  <p align=center>woodford reserve |200 LEKE</p><br>
  <p align=center>jim beam   |200 LEKE</p><br>
  <p align=center>wild turkey  |200 LEKE</p><br>
  <p align=center>jagermeister   |200 LEKE</p><br>
  <p align=center>...</p>
<div class="body3">
  <div class="body4">
<center>
   <img src="alkphoto/13.jpg" alt="">
   <img src="alkphoto/14.jpg" alt="">
   <img src="alkphoto/15.jpg" alt="">
   <img src="alkphoto/16.jpg" alt="">
   <img src="alkphoto/17.jpg" alt="">
   <img src="alkphoto/18.jpg" alt="">
   <img src="alkphoto/19.png" alt="">
   <img src="alkphoto/20.jpg" alt="">
   <img src="alkphoto/21.png" alt="">
   <img src="alkphoto/22.jpg" alt="">
   <img src="alkphoto/23.jpg" alt="">
   <img src="alkphoto/24.png" alt="">
   <img src="alkphoto/25.png" alt="">
</center>
   <!-- / permbajtja-->
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
