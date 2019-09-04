<?php require_once("session.php");
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
$userID = $_SESSION['ID'];
$query = "SELECT * FROM users where ID = '$userID'"; 
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<html> 
<body>
<head>
<title>Ratatouie|Profile</title>
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
</div><br><p align="center">NDRYSHONI TE DHENAT TUAJA !!!</p>
<p align="center">OSE FSHINI LLOGARINE !!!</p>
<form method="post" action="edit1.php">
<p align="center"> Emer : <input type="text" required name="fullname" value="<?php echo "$row[name]" ?>"><br>
<p align="center"> Mbiemer : <input type="text" required name="surname" value="<?php echo "$row[surname]" ?>"><br>

<p align="center"> Username i Perdoruesit : <input type="text" required name="username" value="<?php echo "$row[username]" ?>"></p> <br>
<p align="center"> Posta Elektronike : <input type="text" required name="email" value="<?php echo "$row[email]" ?>"> </p><br>
<p align="center"> Gjinia : <select name="gender" required value="<?php echo "$row[gender]" ?>"> 
                  <?php
                       if($row['gender'] == 'Femer')
                     { ?>
                     <option selected>Femer </option>
                     <option> Mashkull </option>
                     <?php } ?> 
                      <?php if($row['gender'] == 'Mashkull') { ?>
                     <option selected>Mashkull </option>
                     <option> Femer </option>
                     <?php }; ?>
                  </select></p><br>
<p align="center"> Fjalekalimi : <input type="password" required name="password" value="<?php echo "$row[password]" ?>"></p><br>
<p align="center"> Karta Bankare : <input type="text" required name="crcard" value="<?php echo "$row[creditcard]" ?>"></p><br>
<p align="center"> Lloji : <select name="tipi" required value="<?php echo "$row[type]" ?>"> 
                  <?php
                       if($row['type'] == 'Bosh')
                     { ?>
                     <option selected>Bosh </option>
                     <option> Visa </option>
                     <option> MasterCard </option>
                     <option> Discover </option>
                     <option> American Express </option>
                     <?php } ?> 
                  <?php
                       if($row['type'] == 'Visa')
                     { ?>
                     <option selected>Visa </option>
                     <option> Bosh </option>
                     <option> MasterCard </option>
                     <option> Discover </option>
                     <option> American Express </option>
                     <?php } ?> 
                      <?php
                        if($row['type'] == 'Mastercard') { ?>
                    <option>Visa </option>
                    <option> Bosh </option>
                     <option selected> MasterCard </option>
                     <option> Discover </option>
                     <option> American Express </option>
                     <?php } ?>
                     <?php 
                     if($row['type'] == 'Discover') { ?>
                      <option>Visa </option>
                      <option>Bosh </option>
                     <option> MasterCard </option>
                     <option selected> Discover </option>
                     <option> American Express </option>
                     <?php } ?>
                     <?php if($row['type'] == 'AmericanExpress') { ?>
                      <option>Visa </option>
                      <option>Bosh</option>
                     <option> MasterCard </option>
                     <option> Discover </option>
                     <option selected> American Express </option>
                     <?php } ?>
                  </select></p><br>
<p align="center"> Nr.Kontakti :<input type="number" required name="nrkontakt" min="0" max="999999999999999" value="<?php echo "$row[contact]" ?>" </p><br>
<p align="center"> Mosha :<input type="number" required name="age1" min="1" max="80" value=" <?php echo "$row[age]" ?>" </p><br>
<p align="center"><input type="submit" name="submit" id="submit" value="Ruani ndryshimet"></p>
</form>
<form method="POST" action="remove.php">
<input type="hidden" name="id" value="<?php echo "$row[ID]" ?>">
<p align="center"><input type="submit" name="submit2" id="submit2" value="Fshini llogarine"></p>
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
