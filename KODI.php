<?php require_once("session.php"); ?>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');

$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
paswordi ne databaze per te aksesuar administratorin
*/
function akses()
{
if(!empty($_POST['adminpass']))
{
	$query = mysql_query("SELECT *  FROM adminkod where kodakses = '$_POST[adminpass]'");
	$row = mysql_fetch_array($query);
	if(!empty($row['kodakses']))
	{
		readfile("admin1.php");
	}
	else
	{
		readfile("admingabim.php");
	}
}
}
if(isset($_POST['submit']))
{
	akses();
}
?>