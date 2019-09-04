<?php require_once("session.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ratatouie</title>
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
        <!-- / header -->
        <!-- permbajtje -->
        <article id="content">
          <div class="slider_bg">
            <div class="slider">
              <ul class="items">
                <li> <img src="images/img1.jpg" alt="">
                  <div class="banner"> <strong>Fettuccine<span>Italiane</span></strong> <b>Produkt i ri!!!</b>
                    <p> <span>Ndërthurja e elementëve të kuzhinës<br>
                      italiane sjell produktin e ri.Rezulton në një cmim të arsyeshëm dhe është e shëndetshme.PROVOJENI !!!</span> </p>
                  </div>
                </li>
                <li> <img src="images/img2.jpg" alt="">
                  <div class="banner"> <strong>succulent<span>meat</span></strong> <b>Pjata e ditës</b>
                    <p> <span>Pjata amerikane <br>
                     e cila ka qendruar në majë të porosive këtë muaj vjen si pjatë e ditës.Tradita e Texas-it troket në RATATOUIE</span> </p>
                  </div>
                </li>
                <li> <img src="images/img3.jpg" alt="">
                  <div class="banner"> <strong>La Tartlet<span>Francaise</span></strong> <b>Receta e re!!!</b>
                    <p> <span>Këtë herë shefi zbulon  <br>
                   	recetën.Mësojeni recetën duke na ndjekur në rrjetet sociale!!!</span> </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="wrap">
            <section class="cols">
              <div class="box">
                <div>
                  <h2><span>Evente</span></h2>
                  <figure><img src="images/1.bmp" alt="" ></figure>
                  <p class="pad_bot1">Në këtë kategori do të gjeni eventet që do të realizojë restoranti.Bashkohu dhe ti me ne ,bëhu pjesë e eventeve</p>
                  <a href="evente.php" class="button1">Kliko këtu</a> </div>
              </div>
            </section>
            <section class="cols pad_left1">
              <div class="box">
                <div>
                  <h2><span>Galeria</span></h2>
                  <figure><img src="images/2.bmp" alt="" ></figure>
                  <p class="pad_bot1">Në këtë kategori do të gjeni foto dhe video të restorantit në vite ,pa harruar dhe specialitetet (pjatat)</p>
                  <a href="galeria.php" class="button1">Shiko këtu</a> </div>
              </div>
            </section>
            <section class="cols pad_left1">
              <div class="box">
                <div>
                  <h2><span>Oferta</span></h2>
                  <figure><img src="images/3.bmp" alt="" ></figure>
                  <p class="pad_bot1">Në këtë kategori do të gjeni ofertat e fundit që ofrojmë për produktet tona.Përfitoni prej tyre!</p>
                  <a href="oferta.php" class="button1">Përfitoni</a> </div>
              </div>
            </section>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>
<div class="body2">
  <div class="main">
    <article id="content2">
      <div class="wrapper">
        <section class="col1 pad_left1">
          <h2>Historiku</h2>
          <div class="wrapper">
            <div class="cols">
              <div class="wrapper pad_bot2">
                <figure class="left marg_right1"><img src="images/a.jpg" alt=""></figure>
                <p>
                Restoranti u morr si iniciativë e Jean Paul Martin i cili cilësohet si themeluesi i institucionit të restorantit në përgjithësi.
                Sipas tij, duhet ditur çfarë ti ofrosh klientit ,sidomos kur ai është i uritur apo ka etje. </p>
              </div>
              <div class="wrapper">
                <figure class="left marg_right1"><img src="images/b.jpg" alt=""></figure>
                <p> 
                  Vitet më parë sollën bazën e traditës (shkencës) së gatimit amerikan,francez dhe Italian.
                  Me kalimin e viteve guzhinjerët tanë arritën të çojnë në një evolucion iniciativën e Jean Paul Martin
                  duke përgatitur elementin më të favorshëm e më të arsyeshëm në gatim.</p>
              </div>
            </div>
            <div class="cols pad_left1">
              <div class="wrapper pad_bot2">
                <figure class="left marg_right1"><img src="images/c.jpg" alt=""></figure>
                <p>
                  Sipas mediave prestigjoze restorant ‘RATATOUIE’ 
                  mbetet gjithmonë si një opsion i mirë e i favorshëm për evente e mbi të gjitha 
	                ofron një shumëllojshmëri artikujsh,shija e të cilëve nuk harrohet lehtë.</p>
              </div>
              <div class="wrapper">
                <figure class="left marg_right1"><img src="images/d.jpg" alt=""></figure>
                <p>
                  Vullneti i Jean Paul Martin është trashëguar duke sjellë vlerësime dhe çmime për restorantin.
                  Si gjithmonë… <br>JU MIREPRESIM ME BUZEQESHJEN E SHEFIT…
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="col2 pad_left1">
          <h2>Përshtypje</h2>
          <ul class="testimonials">
            <li> <span>1</span>
              <p> “Do të doja që pjata mos të mbaronte kurrë.Thjesht Magnifique” <br><img src="images/signature1.jpg" alt=""> </p>
            </li>
            <li> <span>2</span>
              <p> “Sa keq natyra ka bërë stomakun të vogël.” <img src="images/signature2.jpg" alt=""> </p>
            </li>
            <li> <span>3</span>
              <p> “Shijen e vërtetë nuk e trashëgoj me fjalë tek nipat e mi.”<br><img src="images/signature3.jpg" alt=""> </p>
            </li>
          </ul>
        </section>
      </div>
    </article>
    <!-- / permbajtja -->
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
