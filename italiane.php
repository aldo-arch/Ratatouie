<?php require_once("session.php") ?>
<!DOCTYPE html>
<html>
<head>
<title>R|M|Italiane</title>
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
    </div>
  </div>
</div>
<center>
      <img src="itamenuphoto/ita0.jpg" alt="">
      <img src="itamenuphoto/ita1.jpeg" alt="">
      <img src="itamenuphoto/ita2.jpeg" alt="">
      <img src="itamenuphoto/ita3.jpg" alt="">
      <img src="itamenuphoto/ita4.jpg" alt="">
      <img src="itamenuphoto/ita5.jpg" alt="">
      <img src="itamenuphoto/ita6.jpg" alt="">
      <img src="itamenuphoto/ita7.jpg" alt="">
      <img src="itamenuphoto/ita8.jpg" alt="">
      <img src="itamenuphoto/ita9.jpg" alt="">
      <img src="itamenuphoto/ita10.jpeg" alt="">
      <img src="itamenuphoto/ita11.jpeg" alt="">
      <img src="itamenuphoto/ita12.jpg" alt="">
</center>
	<br><p align=center>MENUJA ITALIANE OFRON :</p><br>
	<p align=center><audio controls autoplay>
  <source src="audio/ita.mp3" type="audio/mpeg">
</audio></p>
	<table style="width:100%">
  <tr>
    <th>PRODUKT</th>
    <th>PERBERES</th> 
    <th>CMIMI</th>
  </tr>
  <tr>
    <td>0-Cannelloni</td>
    <td>Makarona(Cannelloni),hudher,
	      vaj ulliri,piper,paste pule,
	      kripe,kerpudha,zucchini,veze,
	      oregano,djath parmezian</td> 
    <td>590 leke</td>
  </tr>
<tr>
    <td>1-Antipasto</td>
    <td>Lulelaker,qepe,piper,selino,
	      kastraveca,karrote,vaj vegjetal,
	      krem domateje,ullinj,kerpudha,
	      peshk ton</td> 
    <td>1800 leke</td>
  </tr>
<tr>
    <td>2-Focaccia/Baraise</td>
    <td>Patate,uje i gazuar,miell,kripe,
	      domate,qepe,vaj ulliri,	
	      borzilok,</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>3-Torta Rustica</td>
    <td>Miell,miser,kripe,gjalp,veze,
	      djath milanez,proshute 
	      parniziane
</td> 
    <td>680 leke</td>
  </tr>
<tr>
    <td>4-Zuppa Toscana</td>
    <td>Mish vici i tymosur,patate,
	      qepe,shishqebap,hudher,
	      ereza,beshamel
</td> 
    <td>360 leke</td>
  </tr>
<tr>
    <td>5-Hazelnut Biscotti</td>
    <td>Gjalp,sheqer,veze,vanilje,miell,
	      kanelle,kikirike,cokollate e zeze,
	      kakao
</td> 
    <td>640 leke</td>
  </tr>
<tr>
    <td>6-Marsala</td>
    <td>Miell,kripe,piper,borzilok,
	      spinaq,gjalp,vaj ulliri,
	      kerpudha,fileto peshku
</td> 
    <td>1800 leke</td>
  </tr>
<tr>
    <td>7-Lasagna</td>
    <td>Kremvice,mish i grire,beshamel,
	      zarzavate,pana,kripe,domate,	
	      makarona,veze,djath(mozzarella)
	      djath pice,djath parmezian
</td> 
    <td>700 leke</td>
  </tr>
<tr>
    <td>8-Pizza</td>
    <td>Kripe,Vaj ulliri,djath pice,
	      kerpudha,peshk ton,proshute,
	      perime,salce domateje
</td> 
    <td>500 leke</td>
  </tr>
<tr>
    <td>9-Spaghetti</td>
    <td>Qofte,makarona,hudher,borzilok,
	      kripe,veze,piper
</td> 
    <td>400 leke</td>
  </tr>
<tr>
    <td>10-Bruschetta</td>
    <td>Domate,vaj ulliri,hudher,kripe,
	      piper,sallam parizier,bagete 
	      franceze,djath mozzarella
</td> 
    <td>350 leke</td>
  </tr>
<tr>
    <td>11-Zuppa di Verona</td>
    <td>Salcice italiane,susam,qepe,
	      hudher,gjoks pule,patate,krem
	      brulee,spinaq
</td> 
    <td>410 leke</td>
  </tr>
<tr>
    <td>12-Minestrone</td>
    <td>Vaj ulliri,hudher,qepe,
	      selino,karrote,krahe pule,
	      salce domateje,fasule,
	      spinaq,borzilok,koper,
	      makarona,
</td> 
    <td>900 leke</td>
  </tr>
<tr>
    <td>13-Tortellini</td>
    <td>Tortelini(sipas deshires),
	      makarona,perime,mish i grire,
 	      hudher,borzilok,salce domateje
</td> 
    <td>590 leke</td>
  </tr>
<tr>
    <td>14-Fettuccini</td>
    <td>Mish gjeli,hudher,makarona,qepe,
	      miell,kripe,piper,qumesht,	
	      djath parmesian,domate,krem
	      (sipas deshires)
</td> 
    <td>570 leke</td>
  </tr>
<tr>
    <td>15-Tiramisu</td>
    <td>Kakao(puder),kafe,maskarpone,
	      qumesht,sheqer,krem brulee,
	      cokollate(puder)
</td> 
    <td>300 leke</td>
  </tr>
<tr>
    <td>16-Pesto di  Florentine</td>
    <td>Vaj ulliri,hudher,kofshe pule,
	      spinaq,salce mikse,makarona,
	      djath napoletan
</td> 
    <td>690 leke</td>
  </tr>
<tr>
    <td>17-Parmigiana</td>
    <td>Veze e rrahur,karkaleca deti,
        djath mozzarella,djath parmezian,
	      perime,mandarine
</td> 
    <td>2600 leke</td>
  </tr>
<tr>
    <td>18-Focaccia Panina</td>
    <td>Miell,kripe,sheqer,hudher,
	      borzilok,piper,vaj vegjetal,
	      djath zvicerian,mozzarella
</td> 
    <td>1200 leke</td>
  </tr>
<tr>
    <td>19-Piccata</td>
    <td>Beshamel,piper,mish i grire,
      	mish pule,miell,vaj vegjetal,
	      hudher,leng limoni,gjalp,oriz
</td> 
    <td>1630 leke</td>
  </tr>
<tr>
    <td>20-Penne Arrabiata</td>
    <td>Domate,vaj misri,salce pikante,
	      makarona,veze,gogozhare,kripe,
	      ereza,mish rose
</td> 
    <td>700 leke</td>
  </tr>
<tr>
    <td>21-Pasta Pomodoro</td>
    <td>Makarona,domate,salce(sipas
	      deshires),mozzarella,djath 
	      napolitan,ullinj,ereza
</td> 
    <td>550 leke</td>
  </tr>
<tr>
    <td>22-Biscotti</td>
    <td>Miell,veze,sheqer,qumesht,
	      gjalp,arra,shurup(sipas deshires)
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>23-Manicotti Alla Romana</td>
    <td>Vaj ulliri,qepe,mish kali,djath 
      	ricotta,veze,salce,perime,
	      beshamel,gjalp
</td> 
    <td>4500 leke</td>
  </tr>
<tr>
    <td>24-Calzone</td>
    <td>Vaj ulliri,miell,veze,kripe,
	      djath pice,proshute,sallam,		
	      ullinj,domate,spec,fasule,
	      salce
</td> 
    <td>350 leke</td>
  </tr>
<tr>
    <td>25-Cacciatore</td>
    <td>Makarona,kerpudhe,salcice,ereza,
	      karrote,domate,salce pikante,mish
	      i grire,peshk ton
</td> 
    <td>1510 leke</td>
  </tr>
<tr>
    <td>26-Pene/Valentino</td>
    <td>Tortelini,gjalp,vaj luledielli,
	      hudher,krem manaferre,djath 
	      parmezian
</td> 
    <td>480 leke</td>
  </tr>
<tr>
    <td>27-Tetrazzini di mare</td>
    <td>Aragosta,karkaleca,midhje,oktapod,
	      peshk ton,beshamel,makarona
</td> 
    <td>10000 leke</td>
  </tr>
<tr>
    <td>28-Cioppino</td>
    <td>Midhje,sallate ruse,xaxiq,
	      buke milaneze,borzilok,ereza
</td> 
    <td>500 leke</td>
  </tr>
<tr>
    <td>29-Pasta Primavera</td>
    <td>Makarona,kremvice pule,hudher,
	      qepe,zucchini,domate,piper,	
	      koper
</td> 
    <td>470 leke</td>
  </tr>
<tr>
    <td>30-Pasta Fagioli</td>
    <td>Vaj ulliri,qepe,hudher,domate,
	      borzilok,spaghetti,rigon,veze
</td> 
    <td>610 leke</td>
  </tr>
<tr>
    <td>31-Ravioli</td>
    <td>Biftek zgare,salce milaneze,
	      domate,djath deleje,miell,
	      veze,ereza
</td> 
    <td>550 leke</td>
  </tr>
<tr>
    <td>32-Fettuccine Alfredo</td>
    <td>Patate,karrota,brokoli,
	      lulelaker,vaj ulliri,kripe,
	      majoneze,mish i grire
</td> 
    <td>300 leke</td>
  </tr>
<tr>
    <td>33-Zitti</td>
    <td>Makarona,djath i grire,
	      mish i grire,vegeta,ereza,
	      kerpudha,kallamare
</td> 
    <td>2400 leke</td>
  </tr>
<tr>
    <td>34-Pepperoni</td>
    <td>Panine,kremvice,proshute,sallam,
	      mish i grire,ereza,djath pice
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>35-Ricotta Gnocchi</td>
    <td>Djath parmezian,kripe,hudher,
	      miell,vaj ulliri,domate,piper,
	      qofte zgare,ullinj,kerpudha
</td> 
    <td>310 leke</td>
  </tr>
<tr>
    <td>36-Manicotti</td>
    <td>Spinaq,qofte,djath i grire,
	      kerpudhe,lulelaker,brokoli,
	      selino,panine milaneze,ereza
</td> 
    <td>450 leke</td>
  </tr>
<tr>
    <td>37-Tilapia</td>
    <td>Oriz,bizele,domate,salce kosi,
	      proshute,bishtaja,ereza,
	      mish i grire
</td> 
    <td>320 leke</td>
  </tr>
<tr>
    <td>38-Zucchini</td>
    <td>Panine,djath pice,proshute,
	      spec,kastravec,domate,salce
	      kosi,gjalp,djath dele,ullinj
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>39-Scarpariello</td>
    <td>Qofte,mish i grire,patate,
	      oriz,fasule,kos,ereza,fileto
	      pule
</td> 
    <td>390 leke</td>
  </tr>
</table>
<div class="body3">
  <div class="body4">
<center>
  <img src="itamenuphoto/ita13.jpeg" alt="">
  <img src="itamenuphoto/ita14.jpeg" alt="">
  <img src="itamenuphoto/ita15.jpg" alt="">
  <img src="itamenuphoto/ita16.jpg" alt="">
  <img src="itamenuphoto/ita17.JPG" alt="">
  <img src="itamenuphoto/ita18.jpg" alt="">
  <img src="itamenuphoto/ita19.jpg" alt="">
  <img src="itamenuphoto/ita20.jpeg" alt="">
  <img src="itamenuphoto/ita21.jpeg" alt="">
  <img src="itamenuphoto/ita22.jpg" alt="">
  <img src="itamenuphoto/ita23.jpg" alt="">
  <img src="itamenuphoto/ita24.jpg" alt="">
  <img src="itamenuphoto/ita25.jpg" alt="">
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
      </footer>
      <!-- / footer -->
    </div>
  </div>
</div>
</body>
</html>
