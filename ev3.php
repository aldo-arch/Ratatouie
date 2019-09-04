<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function Newev()
{
	$emer = $_POST['emer'];
	$dita = $_POST['dita'];
	$data = $_POST['data'];
	$muaj =  $_POST['muaj'];
	$vit = $_POST['vit'];
	$hr = $_POST['hr'];
	$min= $_POST['min'];
	$nr = $_POST['nr'];
	$specg = $_POST['specg'];
	$query = "INSERT INTO Events(evname,evday,evdatnum,evmonth,evyear,evhr,evmin,evcapacity,evspecialg) VALUES ('$emer','$dita', '$data', '$muaj','$vit','$hr','$min','$nr','$specg')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		$query = mysql_query("SELECT *  FROM Events where evname = '$_POST[emer]' AND evspecialg = '$_POST[specg]'") or die(mysql_error());
	$data1 = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($data1['evname']) AND !empty($data1['evspecialg']))
	{
		readfile("evsux.php");

	}
	}
}


function vepro()
{
if(!empty($_POST['emer']))
{
	$sql = mysql_query("SELECT * FROM Events WHERE evname = '$_POST[emer]' AND evspecialg = '$_POST[specg]'");
 if(mysql_num_rows($sql)>=2)
   {
   
   }
 else
    {
   Newev();
  
    }
}
}
if(isset($_POST['submit']))
{
	vepro();
}
?>