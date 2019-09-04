<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

if(isset($_POST['submit']))
{   
	
	$textarea1 = $_POST['textarea1'];
	$query = "INSERT INTO njoftime (news) VALUES ('$textarea1')";
	$data = mysql_query ($query)or die(mysql_error());
readfile("po.php");
}
?>