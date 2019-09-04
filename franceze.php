<?php require_once("session.php") ?>
<!DOCTYPE html>
<html>
<head>
<title>R|M|Franceze</title>
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
      <!-- permbajtja e faqes -->
    </div>
  </div>
</div>
<center>
      <img src="frmenuphoto/fr0.jpeg" alt="">
      <img src="frmenuphoto/fr1.jpeg" alt="">
      <img src="frmenuphoto/fr2.jpeg" alt="">
      <img src="frmenuphoto/fr3.jpeg" alt="">
      <img src="frmenuphoto/fr4.jpg" alt="">
      <img src="frmenuphoto/fr5.jpg" alt="">
      <img src="frmenuphoto/fr6.jpg" alt="">
      <img src="frmenuphoto/fr7.jpg" alt="">
      <img src="frmenuphoto/fr8.JPG" alt="">
      <img src="frmenuphoto/fr9.jpg" alt="">
      <img src="frmenuphoto/fr10.jpg" alt="">
      <img src="frmenuphoto/fr11.jpg" alt="">
      <img src="frmenuphoto/fr12.jpg" alt="">
</center>
      <br>
	<br><p align=center>MENUJA FRANCEZE OFRON :</p><br>
	<p align=center><audio controls autoplay>
  <source src="audio/fr.mp3" type="audio/mpeg">
</audio></p>
	<table style="width:100%">
  <tr>
    <th>PRODUKT</th>
    <th>PERBERES</th> 
    <th>CMIMI</th>
  </tr>
  <tr>
    <td>0-Gruyere</td>
    <td>Kerpudha,gjalp,mish pule,
	      qepe,vere e kuqe,djath i grire</td> 
    <td>700 leke</td>
  </tr>
 <tr>
    <td>1-Poulet de Provencal</td>
    <td>Mustarde(Dijon),hudher,fileto,
	      pule,susam,kerpudha,ereza,
	      xhinxher</td> 
    <td>850 leke</td>
  </tr>
 <tr>
    <td>2-Gratin Dauphinois</td>
    <td>Sallate jeshile,domate,djath i
	      grire,piper,ereza,mish rose,
	      salce</td> 
    <td>600 leke</td>
  </tr>
 <tr>
    <td>3-Croissant</td>
    <td>Miell,sheqer,kripe,uje,qumesht,
	      krem(sipas deshires),veze</td> 
    <td>200 leke</td>
  </tr>
 <tr>
    <td>4-Creme Brulee</td>
    <td>cokollate,krem,sheqer,kripe,
	      vanilje,veze</td> 
    <td>350 leke</td>
  </tr>
 <tr>
    <td>5-Beef Bourguignon</td>
    <td>Biftek vici,te brendshme,kripe,
	      piper,gjalp,hudher,vere e kuqe,
	      ereza,kerpudha,qepe</td> 
    <td>1500 leke</td>
  </tr>
<tr>
    <td>6-Creme Fraiche</td>
    <td>Krem(sipas deshires),qumesht,gjalp,
	      tul fruti(sipas deshires)
</td> 
    <td>800 leke</td>
  </tr>

<tr>
    <td>7-Coq Au Vin</td>
    <td>Mish gjeli,kripe,melci pule,
	      kerpudha,qepe,ereza,perime,
	      gjalp,bajame	
</td> 
    <td>1750 leke</td>
  </tr>
<tr>
    <td>8-Chocolate Ganache</td>
    <td>cokollate e zeze,krem bananeje,
	      tul molle,sheqer,gjalp,miell,
	      qumesht,maskarpone	
</td> 
    <td>500 leke</td>
  </tr>
<tr>
    <td>9-Cordon Bleu</td>
    <td>Proshute,sallam parizier,qumesht,
	      djath zvicerian,gjalp,ereza		
</td> 
    <td>1000 leke</td>
  </tr>
<tr>
    <td>10-Omelet</td>
    <td>Veze,proshute,djath pice,qepe,
	      piper,domate,salce(sipas deshires),
	      kerpudha		
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>11-Eclairs</td>
    <td>Gjalp,uje,miell,kripe,veze,vanilje,
	      qumesht,krem(sipas deshires),
	      sheqer,cokollate,</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>12-Brie</td>
    <td>Djath pice,krem bananeje,veze,sheqer,
	      puderluleshtrydheje
</td> 
    <td>590 leke</td>
  </tr>
<tr>
    <td>13-Meringues</td>
    <td>Veze,sheqer,krem vanilje,shurup
	      (sipas deshires)
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>14-Mousse</td>
    <td>cokollate,qumesht,vafer,uje,krem
	      (sipas deshires),pudding
</td> 
    <td>1200 leke</td>
  </tr>
<tr>
    <td>15-Mussels Mariniere</td>
    <td>Midhje,vaj ulliri(ekstra i virgjer),
	      hudher,vere e bardhe,qepe,domate,piper	
</td> 
    <td>1590 leke</td>
  </tr>
<tr>
    <td>16-Buche de Noel</td>
    <td>Krem kakaoje,sheqer,puder kakaoje,
	      vanilje,veze,puder arre kokosi,
	      kripe, 	
</td> 
    <td>890 leke</td>
  </tr>
<tr>
    <td>17-Ratatouille</td>
    <td>Zarzavate,ullinj,vaj ulliri,
	      majdanoz,ereza,djath kackavall
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>18-Brie Puff Pastry</td>
    <td>Vaj ulliri,uje,piper,veze,kunguj,
	      maskarpone,djath,perime	
</td> 
    <td>1600 leke</td>
  </tr>
<tr>
    <td>19-Bleu Casserole</td>
    <td>Buke e thekur,vaj misri,djath
	      zvicerian.proshute,paste pule,
	      qumesht

</td> 
    <td>459 leke</td>
  </tr>
<tr>
    <td>20-Quiche Lorraine</td>
    <td>Shishqebap,veze,qumesht,kripe,
	      djath zvicerian,miell,qepe
</td> 
    <td>620 leke</td>
  </tr>
<tr>
    <td>21-Madeleines</td>
    <td>Veze,vanilje,kripe,sheqer,miell,
	      shurup limoni,gjalp,arre kokosi
	      (pluhur)
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>22-Bourguignon</td>
    <td>Vere e bardhe,qepe,karrota,
	      fileto peshkaqeni,hudher,piper,
	      kripe,perime,vaj ulliri,paste 
	      domateje,miell,mish i grire,
	      gjalp,kerpudha	
</td> 
    <td>2000 leke</td>
  </tr>
<tr>
    <td>23-Kalamata Olive Tapenade</td>
    <td>Hudher,ullinj,peshk ton,limon,
	      vaj ulliri,kripe,piper	
</td> 
    <td>1800 leke</td>
  </tr>

<tr>
    <td>24-Macaron</td>
    <td>Veze,sheqer,vanilje,krem(sipas
	      deshires),shurup ananasi,puder
	      molle
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>25-Plum Clafouti</td>
    <td>Sheqer,panxhare,veze,qumesht,miell,
	      limon,vanilje,kripe,kanelle
</td> 
    <td>450 leke</td>
  </tr>
<tr>
    <td>26-Potatoe Au Gratin</td>
    <td>Patate gjermane,hudher,kripe,
	      krem brulee,djath pice,piper,
	      dhjath i grire
</td> 
    <td>870 leke</td>
  </tr>
<tr>
    <td>27-Meringue</td>
    <td>Veze,krem(sipas deshires),kripe,sheqer,vanilje(pluhur),
	      cokollate e bardhe
</td> 
    <td>520 leke</td>
  </tr>
<tr>
    <td>28-Herbes de Provence</td>
    <td>Oriz i bardhe,gjoks pule,ereza,
	      kripe,piper
</td> 
    <td>500 leke</td>
  </tr>
<tr>
    <td>29-Tarte de Pommes</td>
    <td>Miell,kripe,gjalp,veze,uje,sheqer,
	      tul molle,krem molle,recel molle
</td> 
    <td>900 leke</td>
  </tr>
<tr>
    <td>30-Crepe</td>
    <td>Qumesht,miell,veze,kripe,akullore
	      (sipas deshires),cokollate e zeze,
	      tul frutash
</td> 
    <td>290 leke</td>
  </tr>
<tr>
    <td>31-Rochester</td>
    <td>Miell,kripe,veze,sheqer,djath
	      parmesian,vaj ulliri,gjalp,
	      hudher,brokoli,oriz,limon
</td> 
    <td>1000 leke</td>
  </tr>
<tr>
    <td>32-Pro Ganache</td>
    <td>cokollate,krem cokollate te
	      bardhe,vanilje,shurup(sipas
	      deshires)
</td> 
    <td>900 leke</td>
  </tr>
<tr>
    <td>33-Filet Mignons</td>
    <td>Fileto vici,fileto pule,kripe,
	      vaj ulliri,majoneze,ketchup,
	      zarzavate
</td> 
    <td>1900 leke</td>
  </tr>
<tr>
    <td>34-Cassoulet</td>
    <td>Kremvice,kripe,piper,fasule,
	      mish gjeli,vere e bardhe,salce
</td> 
    <td>600 leke</td>
  </tr>
<tr>
    <td>35-Asparagus</td>
    <td>Tortelini,pana,gogzhare,turshi	
</td> 
    <td>490 leke</td>
  </tr>
<tr>
    <td>36-Chutney</td>
    <td>Bagete franceze,krem brulee,
	      shurup molle,cokollate(pluhur)	
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>37-Bordelaise</td>
    <td>Salce beshameli,kerpudha,gjalp,
	      hudher,uthull,salce pikante,
	      oktapod,piper,perime,
</td> 
    <td>2500 leke</td>
  </tr>
<tr>
    <td>38-Tourtiere</td>
    <td>Mish i grire,qepe,hudher,karrote,
	      patate,piper,kanelle,veze pate
</td> 
    <td>1790 leke</td>
  </tr>
<tr>
    <td>39-Lyonnaise a la crof</td>
    <td>Patate,vaj misri,qepe,hudher,
	      gjalp,pana,kripe,zog pule
</td> 
    <td>666 leke</td>
  </tr>
</table>
<div class="body3">
  <div class="body4">
<center>
  <img src="frmenuphoto/fr13.jpg" alt="">
  <img src="frmenuphoto/fr14.jpg" alt="">
  <img src="frmenuphoto/fr15.jpg" alt="">
  <img src="frmenuphoto/fr17.jpeg" alt="">
  <img src="frmenuphoto/fr18.jpeg" alt="">
  <img src="frmenuphoto/fr19.jpeg" alt="">
  <img src="frmenuphoto/fr20.jpeg" alt="">
  <img src="frmenuphoto/fr21.jpeg" alt="">
  <img src="frmenuphoto/fr22.jpeg" alt="">
  <img src="frmenuphoto/fr23.jpg" alt="">
  <img src="frmenuphoto/fr24.jpeg" alt="">
  <img src="frmenuphoto/fr25.jpg" alt="">
  <img src="frmenuphoto/fr26.jpg" alt="">
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
