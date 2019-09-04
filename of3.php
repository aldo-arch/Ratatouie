<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function ofchange()
{
	$emer = $_POST['emer'];
	$usa = $_POST['usa'];
	$usacmimi = $_POST['usacmimi'];
	$fr =  $_POST['fr'];
	$frcmimi = $_POST['frcmimi'];
	$ita = $_POST['ita'];
	$itacmimi = $_POST['itacmimi'];
	$joa = $_POST['joa'];
	$joacmim = $_POST['joacmim'];
	$alko = $_POST['alko'];
	$alkcmim = $_POST['alkcmim'];
	$wines = $_POST['wines'];
	$verecmim = $_POST['verecmim'];
	$beer = $_POST['beer'];
	$birrecmim = $_POST['birrecmim'];
	$query = "INSERT INTO oferta(oferteemer,usapro,usacmim,frpro,frcmim,itapro,itacmim,joalkpro,joalkcmim, alkpro,alkcmimi,winepro,winecmim,beerpro,beerprosasia) VALUES ('$emer','$usa', '$usacmimi', '$fr','$frcmimi','$ita','$itacmimi','$joa','$joacmim','$alko','$alkcmim','$wines','$verecmim','$beer','$birrecmim')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		$query = mysql_query("SELECT *  FROM oferta where oferteemer = '$_POST[emer]' AND joalkpro = '$_POST[joa]'") or die(mysql_error());
	$data1 = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($data1['oferteemer']) AND !empty($data1['joalkpro']))
	{
		readfile("propose.php");

	}
	}
}


function vere()
{
if(!empty($_POST['emer']))
{
	$sql = mysql_query("SELECT * FROM oferta WHERE oferteemer = '$_POST[emer]' AND joalkpro = '$_POST[joa]'");
 if(mysql_num_rows($sql)>=2)
   {
   
   }
 else
    {
   ofchange();
  
    }
}
}
if(isset($_POST['submit']))
{
	vere();
}
?>