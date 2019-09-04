<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function Newper()
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
	$query = "INSERT INTO pergjegjesit(peremer,permbiemer,perpaga,pergjinia,permosha,peremail,perkartebanke,perllojikarte,perarsim, perkontakti,perkontrate,perposti) VALUES ('$emer','$mbiemer', '$paga', '$gjinia','$mosha','$email','$kartebankare','$llojiikartesbankare','$arsim','$nrkontakti','$kontrata','$rol')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		$query = mysql_query("SELECT *  FROM pergjegjesit where peremer = '$_POST[emer]' AND perposti = '$_POST[rol]'") or die(mysql_error());
	$data1 = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($data1['peremer']) AND !empty($data1['perposti']))
	{
		readfile("suksese5.php");

	}
	}
}


function vendose()
{
if(!empty($_POST['emer']))
{
	$sql = mysql_query("SELECT * FROM pergjegjesit WHERE peremer = '$_POST[emer]' AND perposti = '$_POST[rol]'");
 if(mysql_num_rows($sql)>=2)
   {
   
   }
 else
    {
   Newper();
  
    }
}
}
if(isset($_POST['submit']))
{
	vendose();
}
?>