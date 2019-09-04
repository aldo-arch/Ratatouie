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
<p align="center">KRIJO EVENTIN E RI !</p>
<form action="ev3.php" method="post">
  <h1>EMER EVENTI:</h1>
  <input type="text" name="emer"  maxlength="15" size=30 required><br>
  <h1>DITA</h1><select name="dita" required>
  <option value="hene">E hene</option>
  <option value="marte">E marte</option>
  <option value="merkure">E merkure</option>
  <option value="enjte">E enjte</option>
  <option value="premte">E premte</option>
  <option value="shtune">E shtune</option>
  <option value="diele">E diele</option>
  </select><br>
  <h1>DATA</h1><select name="data" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  </select><br>
  <h1>MUAJI</h1><select name="muaj" required>
  <option value="janar">1-janar</option>
  <option value="shkurt">2-shkurt</option>
  <option value="mars">3-mars</option>
  <option value="prill">4-prill</option>
  <option value="maj">5-maj</option>
  <option value="qershor">6-qershor</option>
  <option value="korrik">7-korrik</option>
  <option value="gusht">8-gusht</option>
  <option value="shtator">9-shtator</option>
  <option value="tetor">10-tetor</option>
  <option value="nentor">11-nentor</option>
  <option value="dhjetor">12-dhjetor</option>
  </select><br><!--mund ta benim edhe me input numer ku kemi min=1 dhe max=12 po keshtu duke respektuar limitet edhe per elementet e tjere-->
  <h1>VITI</h1><select name="vit" required> 
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  </select><br>
  <h1>ORARI:</h1><br>
  <h1>ORA:</h1><select name="hr" required>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  </select><br>
   <h1>MINUTA:</h1><select name="min" required>
  <option value="00">00</option>
  <option value="15">15</option>
  <option value="30">30</option>
  <option value="45">45</option>
  </select><br>
  <h1>KAPACITETI:</h1>
  <input type="number" min="0" name="nr" maxlength="3" max="255" required>PERSONA<br>
  <h1>TE FTUAR</h1>
  <input type="text" name="specg"  maxlength="50" required><br>
  <p align=center>KONTROLLONI TE DHENAT DHE NJE HERE PARA SE TE KRIJONI EVENTIN !</p><br>
  <p align=center><button type="submit" name="submit" class="button1">Krijo Event !</button></p>
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
