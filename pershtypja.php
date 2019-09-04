<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

if(isset($_POST['submit']))
{   
	$emer = $_POST['emer'];
	$emerperdoruesi = $_POST['emerperdoruesi'];
	
	$textarea = $_POST['textarea'];
	$query = "INSERT INTO Pershtypje (UserID,Username,opinion) VALUES ('$emer','$emerperdoruesi','$textarea')";
	$data = mysql_query ($query)or die(mysql_error());
readfile("opinion.php");
}
?>