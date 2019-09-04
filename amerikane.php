<?php require_once("session.php") ?>
<!DOCTYPE html>
<html>
<head>
<title>R|M|Amerikane</title>
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
      <!-- permbajtja -->
    </div>
  </div>
</div>
<center>
      <img src="usamenuphoto/usa0.jpg" alt="">
      <img src="usamenuphoto/usa1.jpg" alt="">
      <img src="usamenuphoto/usa2.jpg" alt="">
      <img src="usamenuphoto/usa3.jpg" alt="">
      <img src="usamenuphoto/usa4.jpg" alt="">
      <img src="usamenuphoto/usa5.jpg" alt="">
      <img src="usamenuphoto/usa6.jpg" alt="">
      <img src="usamenuphoto/usa7.jpg" alt="">
      <img src="usamenuphoto/usa8.jpg" alt="">
      <img src="usamenuphoto/usa9.jpg" alt="">
      <img src="usamenuphoto/usa10.jpg" alt="">
      <img src="usamenuphoto/usa11.jpg" alt="">
      <img src="usamenuphoto/usa12.jpg" alt="">
</center>
      <br>
	<br><p align=center>MENUJA AMERIKANE OFRON :</p><br>
	<p align=center><audio controls autoplay>
  <source src="audio/usa.mp3" type="audio/mpeg">
  </audio></p>
<table style="width:100%">
  <tr>
    <th>PRODUKT</th>
    <th>PERBERES</th> 
    <th>CMIMI</th>
  </tr>
  <tr>
    <td>0-Texas BBQ medley</td>
    <td>Mish pule,biftek,mish gici i grire,
	      salce,qepe,hudher</td> 
    <td>500 leke</td>
  </tr>
  <tr>
    <td>1-Choc chip pecan pie</td>
    <td>Miell,gjalp,djath i kremuar,sheqer,
	      shurup molle,vanilje,cokollate</td> 
    <td>500 leke</td>
  </tr>
<tr>
    <td>2-burnt onion dip</td>
    <td>Qepe,Vaj ulliri,krem pule,majoneze,
	      perime</td> 
    <td>645 leke</td>
  </tr>
<tr>
    <td>3-Diner Sloppy Joes</td>
    <td>Vaj misri,qepe,piper,hudher,biftek,
	      domate,salce,djath,panine,</td> 
    <td>645 leke</td>
  </tr>
  <tr>
    <td>4-Cornbread</td>
    <td>Gjalp i kripur,miser,qumesht,veze,
	      sheqer,miell,puder molle,sode buke</td> 
    <td>400 leke</td>
  </tr>
 <tr>
    <td>5-Cookie dough</td>
    <td>Gjalp,sheqer,vanilje,miell,qumesht,
	      shurup dardhe,cokollate e bardhe</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>6-American T-bone</td>
    <td>Mish pate,hudher,vaj misri,gjalp,
	      perime,mjalte geshtenje</td> 
    <td>1000 leke</td>
  </tr>
<tr>
    <td>7-Malt chocolate</td>
    <td>Qumesht,biskote,cokollate e shkrire,
	      kikirike,lajthi,bajame</td> 
    <td>350 leke</td>
  </tr>
<tr>
    <td>8-Bourbon</td>
    <td>Qershi,manaferra,shurup molle,sheqer,
	      gjalp puder,pana</td> 
    <td>320 leke</td>
  </tr>
<tr>
    <td>9-Smoky pork</td>
    <td>Vaj ulliri,hudher,piper,mish gici,
	      fasule,makarona,paste pule,sheqer,
	      buke e bardhe,fileto peshku</td> 
    <td>1590 leke</td>
  </tr>
<tr>
    <td>10-Big burger</td>
    <td>Vaj ulliri,biftek vici,hudher,piper,
	      domate,veze,salce domateje,panine,mustarde,sallate jeshile</td> 
    <td>450 leke</td>
  </tr>
<tr>
    <td>11-BBQ pulled pork</td>
    <td>Fileto gici,vaj ulliri,piper spanjoll,
	      mustarde puder,kripe,hudher,krem qepe,
	      lulelaker,panine,salce pikante</td> 
    <td>1200 leke</td>
  </tr>
<tr>
    <td>12-Buttermilk salad</td>
    <td>Rukola,avokado,domate,fileto peshku,
	      mish pule(te bardhe),veze peshku,veze
	      pule,majoneze,</td> 
    <td>1520 leke</td>
  </tr>
<tr>
    <td>13-Seafood chowder</td>
    <td>Vaj vegjetal,qepe,qofte,miell,fileto,
	      ton,patate,piper,paste pule,bizele,
	      panine</td> 
    <td>1435 leke</td>
  </tr>
<tr>
    <td>14-Pumpkin Pie</td>
    <td>Gjalp kikiriku,tul pjeshke,shurup,
	      luleshtrydheje,kripe,veze,sheqer,
	      qumesht,kanelle</td> 
    <td>1200 leke</td>
  </tr>
<tr>
    <td>15-Salt beef/Cajun fries</td>
    <td>Patate,patatina me kripe,vaj ulliri,
	      majoneze,mustarde,buke misri,avokado,
	      ullinj</td> 
    <td>1300 leke</td>
  </tr>
<tr>
    <td>16-Chickencorn salad</td>
    <td>Gjoks pule,piper,arome hudhre,limon,
	      vaj ulliri,miser,bizele,kastravec,domate</td> 
    <td>900 leke</td>
  </tr>
<tr>
    <td>17-New York Cheesecake</td>
    <td>Gjalp,biskote,sheqer,miell,vanilje,
	      limon,veze,krem qershie,</td> 
    <td>480 leke</td>
  </tr>
<tr>
    <td>18-Sweet chilli dogs</td>
    <td>Kremvice,qepe e kuqe,salce,ketchup,
	      mustarde,panine</td> 
    <td>300 leke</td>
  </tr>
<tr>
    <td>19-Caesar salad</td>
    <td>Zog pule,majonezee,limon,salce,
	      karkaleca,perime,portokall</td> 
    <td>1390 leke</td>
  </tr>
<tr>
    <td>20-Sticky ribs</td>
    <td>Mish gici i grire,qepe,vaj ulliri,
	      hudher,piper i zi,domate,pure(patate),
	      arra,sheqer puder,
</td><td>1500 leke</td>
  </tr>
<tr>
    <td>21-Key lime pie</td>
    <td>Biskota,sheqer,Nutella,qumesht
	      panda,veze,krem-liker,bajame
</td><td>1485 leke</td>
  </tr>
<tr>
    <td>22-Crispy/pretzel chicken</td>
    <td>Rukola,sallate jeshile,majdanoz,
	      mish pule,veze,vaj ulliri,
	      mustarde,mjalte,ereza</td> 
    <td>1689 leke</td>
  </tr>
<tr>
    <td>23-Raspberry brownies</td>
    <td>Cokollate e zeze,qumesht,gjalp,
	      sheqer,miell,arre kokosi (puder),
	      veze,manaferra,rozmarine</td> 
    <td>2000 leke</td>
  </tr>
<tr>
    <td>24-Plate-sized pancakes</td>
    <td>Miell,puder luleshtrydheje,sheqer,
	      veze,qumesht,shurup(sipas deshires)</td> 
    <td>250 leke</td>
  </tr>
<tr>
    <td>25-Custard/biscuits</td>
    <td>Gjalp,sheqer,veze,vanilje,cokollate
	      (puder),frut(sipas deshires)</td> 
    <td>450 leke</td>
  </tr>
<tr>
    <td>26-Crispy chicken/apple</td>
    <td>Laker e bardhe,qepe,fileto pule,
	      kos me luleshtrydhe,shurup bananeje,
	      kokoshka,tul molle</td> 
    <td>1580 leke</td>
  </tr>
<tr>
    <td>27-Crispy Cajun rings</td>
    <td>Miell,qepe,veze(e bardha),vaj ulliri,
	      shurup(sipas deshires)</td> 
    <td>350 leke</td>
  </tr>
<tr>
    <td>28-Buffalo chicken wings</td>
    <td>Hudher,vaj misri,piper i kuq,
	      salce Worcestershire,mjalte,
	      krahe pule</td> 
    <td>890 leke</td>
  </tr>
<tr>
    <td>29-Peanut/butter cheesecake</td>
    <td>Gjalp,biskota,kikirike,xhelatine,
	      (mente),gjalp kikiriku,shurup 
	      qitroje,qumesht,sheqer,krem ananasi,
	      lajthi</td> 
    <td>1000 leke</td>
  </tr>
<tr>
    <td>30-Sticky glazed ribs</td>
    <td>Shishqebap,ketchup,salce pikante,
	      domate,mjalte geshtenje,whiskey</td> 
    <td>999 leke</td>
  </tr>
<tr>
    <td>31-Sweetcorn chowder</td>
    <td>Qepe,ereza,karrote,patate,miser,
	      brokoli,mish i grire,oriz</td> 
    <td>590 leke</td>
  </tr>
<tr>
    <td>32-Peach/blueberry grunt</td>
    <td>Portokall,sheqer,miell misri,
	      pjeshke,manaferre,qumesht</td> 
    <td>350 leke</td>
  </tr>
<tr>
    <td>33-BBQ drumsticks(slaw)</td>
    <td>Kofshe pule,salce,karrote,
	      lulelaker,qepe,sallate,perime</td> 
    <td>890 leke</td>
  </tr>
<tr>
    <td>34-Peanut butter brownies</td>
    <td>Gjalp kikiriku,cokollate e zeze,
	      sheqer,veze,miell misri</td> 
    <td>370 leke</td>
  </tr>
<tr>
    <td>35-South-western-salad</td>
    <td>Fasule te zeza,avokado,qepe,domate,
	      djath kackavall,vaj ulliri(ekstra i
	      virgjer)</td> 
    <td>800 leke</td>
  </tr>
<tr>
    <td>36-Buffalo wings</td>
    <td>Gjalp,salce pikante,vere e kuqe,kripe,
	      qumesht,piper,kanelle</td> 
    <td>1200 leke</td>
  </tr>
<tr>
    <td>37-Butternut, maple</td>
    <td>Gjalp kikiriku,perime,sheqer,
	      maskarpone,kanelle,xhinxher,veze,
	      shurup molle,vanilje,miell,qumesht,
	      qumesht panda,nutella
</td> 
    <td>1700 leke</td>
  </tr>
<tr>
    <td>38-Hot dogs</td>
    <td>Salcice,vaj lule dielli,qepe,
	      mustarde,ketchup,minibagete,
</td> 
    <td>200 leke</td>
  </tr>
<tr>
    <td>39-BBQ chicken burgers</td>
    <td>Panine,domate,sallate jeshile,
	      mish vici i tymosur,qepe e kuqe,
	      salce kosi,
</td> 
    <td>200 leke</td>
  </tr>
</table>
<div class="body3">
  <div class="body4"><br>   
<center>
  <img src="usamenuphoto/usa13.jpg" alt="">
  <img src="usamenuphoto/usa14.jpg" alt="">
  <img src="usamenuphoto/usa15.jpg" alt="">
  <img src="usamenuphoto/usa16.jpeg" alt="">
  <img src="usamenuphoto/usa17.jpg" alt="">
  <img src="usamenuphoto/usa18.jpg" alt="">
  <img src="usamenuphoto/usa19.jpg" alt="">
  <img src="usamenuphoto/usa20.jpg" alt="">
  <img src="usamenuphoto/usa21.JPG" alt="">
  <img src="usamenuphoto/usa22.jpeg" alt="">
  <img src="usamenuphoto/usa23.jpeg" alt="">
  <img src="usamenuphoto/usa24.jpeg" alt="">
  <img src="usamenuphoto/usa25.jpeg" alt="">
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
