<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

if(isset($_POST['submit']))
{   
	$name = $_POST['fullname'];
	$usn = $_POST['usernome'];
	$pagesa = $_POST['pagesa'];
	$adresa = $_POST['adresa'];
	$amerikausa = $_POST['amerikausa'];
	$usasasia = $_POST['usasasia'];
	$francafr = $_POST['francafr'];
	$frsasia = $_POST['frsasia'];
	$italiaita = $_POST['italiaita'];
	$itasasia = $_POST['itasasia'];
	$query = "INSERT INTO Porosi (UserID,Username,Pay,Destination,USAProduct,USAsasia,FRProduct,FRsasia,ITAProduct,ITAsasia) VALUES ('$name','$usn','$pagesa', '$adresa', '$amerikausa', '$usasasia', '$francafr', '$frsasia', '$italiaita', '$itasasia')";
	$data = mysql_query ($query)or die(mysql_error());
		readfile("porosipo.php");
}
?>