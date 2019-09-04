<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function Newshef()
{
	$emer = $_POST['emer'];
	$mbiemer = $_POST['mbiemer'];
	$paga = $_POST['paga'];
	$gjinia =  $_POST['gjinia'];
	$mosha = $_POST['mosha'];
	$email = $_POST['email'];
	$kartebankare= $_POST['kartebankare'];
	$llojiikartesbankare = $_POST['llojiikartesbankare'];
	$arsim = $_POST['arsim'];
	$nrkontakti = $_POST['nrkontakti'];
	$kontrata = $_POST['kontrata'];
	$rol = $_POST['rol'];
	$kriptim = md5($nrkontakti);
	$query = "INSERT INTO shefkuzhine(emershefi,mbiemershefi,pagashefi,gjiniashefi,moshashefi,emailshefi,kartashefi,kartatipshefi,arsimshef, telshef,shefkontrate,shefpoz) VALUES ('$emer','$mbiemer', '$paga', '$gjinia','$mosha','$email','$kartebankare','$llojiikartesbankare','$arsim','$kriptim','$kontrata','$rol')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		$query = mysql_query("SELECT *  FROM shefkuzhine where emershefi = '$_POST[emer]' AND shefpoz = '$_POST[rol]'") or die(mysql_error());
	$data1 = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($data1['emershefi']) AND !empty($data1['shefpoz']))
	{
		readfile("sukses4.php");

	}
	}
}


function vendos()
{
if(!empty($_POST['emer']))
{
	$sql = mysql_query("SELECT * FROM shefkuzhine WHERE emershefi = '$_POST[emer]' AND shefpoz = '$_POST[rol]'");
 if(mysql_num_rows($sql)>=2)
   {
   
   }
 else
    {
   Newshef();
  
    }
}
}
if(isset($_POST['submit']))
{
	vendos();
}
?>