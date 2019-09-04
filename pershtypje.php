<?php require_once("session.php");
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
$username = $_SESSION['name'];
$query = "SELECT * FROM users where name = '$username'"; 
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ratatouie|Pershtypje</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Forum_400.font.js"></script>
</head>
<body id="page5">
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
      <article id="content">
        <div class="wrap">
          <div class="box">
            <div>
              <h2 class="letter_spacing">SHKRUANI <span>PERSHTYPJEN TUAJ</span></h2>
              <form  action="pershtypja.php" method="post" id="ContactForm">
              <input type="hidden" name="emer" value="<?php echo "$row[ID]" ?>">
              <input type="hidden" name="emerperdoruesi" value="<?php echo "$row[username]" ?>">
                <div>
                  </div>
                  <div class="wrapper"> 
                  </div>
                  <div class="textarea_box"> <span>PERSHTYPJA:</span>
                    <textarea name="textarea" cols="1" rows="1" required></textarea>
                  </div>
                  <input type=reset class="button1"> <input type="submit" class="button1" name="submit">
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>
<div class="body2">
  <div class="main">
    <article id="content2">
      <div class="wrapper">
        <section class="pad_left1">
          <div class="wrapper">
           <div class="col3 pad_left1">
              <h2>RREGULLAT</h2>
            </div>
               <div class="col3 pad_left1">
                <p> KY OPSION JU MUNDESON QE JU TE SHKRUANI PERSHTYPJEN TUAJ PA QENE NEVOJA QE TE VIZITONI RESTORANTIN TONE.<br>
		PERSHTYPJA JUAJ DHE KRITIKA E KLIENTIT NA NDIHMON QE TE REALIZOJME NJE PERFORMANCE ME TE KENAQSHME DHE ME TE MIRE.<br>
		PERSHTYPJA JUAJ KA RENDESI.<br>
		DO JU ISHIM MIRENJOHES NESE JU DO TE RESPEKTONIT GJUHEN LETRARE DHE TE SHKRUANIT PA GABIME.<br>
		DHE E FUNDIT... NGA SHEFI...TREGOHUNI TE SINQERTE !!!</p>
                BUTONI 'Submit' TE MUNDESON QE TE COSH PERSHTYPJEN TENDE DHE BUTONI 'Reset' TE MUNDESON QE TE FSHISH KOMPLET INFORMACIONIN DHE TE NISESH NGA FILLIMI </div>
            </div>
          </div>
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
