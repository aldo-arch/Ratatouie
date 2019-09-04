<?php require_once("session.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ratatouie|Menu</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Forum_400.font.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/script.js"></script>
</head>
<body id="page1">
<div class="body6">
  <div class="body1">
    <div class="body5">
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
          <div class="wrap">
            <section class="cols">
              <div class="box">
                <div>
                  <h2><span>Amerikane</span></h2>
                  <figure><img src="images/usa.bmp" alt="" ></figure>
                  <p class="pad_bot1">Në këtë menu do të gjeni gatimet amerikane.Provoni shijen e tokës së premtuar!!!</p>
                  <a href="amerikane.php" class="button1">Welcome!!!</a> </div>
              </div>
            </section>
            <section class="cols pad_left1">
              <div class="box">
                <div>
                  <h2><span>Franceze</span></h2>
                  <figure><img src="images/fr.bmp" alt="" ></figure>
                  <p class="pad_bot1">Në këtë menu do të gjeni gatimet (pjatat) tradicionale franceze.Ndjeni aromën e kulturës europiane!!!</p>
                  <a href="franceze.php" class="button1">Bienvenue!!!</a> </div>
              </div>
            </section>
            <section class="cols pad_left1">
              <div class="box">
                <div>
                  <h2><span>Italiane</span></h2>
                  <figure><img src="images/ita.bmp" alt="" ></figure>
                  
                  <p class="pad_bot1">Në këtë menu do të gjeni gatimet (pjatat) tradicionale italiane.Vizitoni jugun e europës!!!</p>
                  <a href="italiane.php" class="button1">Benvenuto!!!</a> </div>
              </div>
            </section>
          </div>
    <div class="body6">
  <div class="body1">
    <div class="body5">
      <div class="main"><div class="wrap">
            <section class="cols">
              <div class="box">
                <div>
                  <h2><span>Jo Alkolike</span></h2>
                  <figure><img src="images/mg.jpg" alt=""></figure>
                  <p class="pad_bot1">Shoqëroni pjatën tuaj me lengjet më të freskëta !!! Freskohuni me shijen e markave më të njohura !!!</p>
                  <a href="joalkolike.php" class="button1">Shijo!!!</a> </div>
              </div>
            </section>
            <section class="cols pad_left1">
              <div class="box">
                <div>
                  <h2><span>Alkolike</span></h2>
                  <figure><img src="images/alk.jpg" alt=""></figure>
                  <p class="pad_bot1">Në ambientet tona nuk mungojnë as pijet alkolike.Njihuni me seicilën prej tyre!!!Kliko Provo!!!</p>
                  <a href="alkol.php" class="button1">Provo!!!</a> </div>
              </div>
            </section>
            <section class="cols pad_left1">
              <div class="box">
                <div>
                  <h2><span>Wine List</span></h2>
                  <figure><img src="images/Wine1.jpeg" alt=""></figure>
		<p class="pad_bot1">Këtu do të gjeni verërat më me emër!!! Porosisni gotën tuaj të preferuar dhe provoni shijen e mbarë Europës !!!</p>
                  <a href="wine.php" class="button1">Porosit!!!</a> </div>
              </div>
            </section>
          </div>
        </article>
      </div>
       </div>
        </div>
         </div>
          </div>
           </div>
            </div>
             </div>
        </section>
    <!-- / permbajtja -->
 
<div class="body3"> <br>
<p align="center">TROKISNI GOTAT TUAJA ME MIQTE TUAJ</p>
<p align="center"><a href="beer.php"><img src="beer/beer.jpg" alt=""></a></p>
<p align="center">KLIKO NE IMAZH PER TE PARE LISTEN PRODUKTEVE BIRRE !!!</p>
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
