<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewIt()
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
	$kriptim = md5($email);
	$query = "INSERT INTO StafiIT(workername,workersurname,workerwage,workergender,workerage,workeremail,workercreditcard,workercdtype,workereducation, workercontactnum,kontrata,workerrole) VALUES ('$emer','$mbiemer', '$paga', '$gjinia','$mosha','$kriptim','$kartebankare','$llojiikartesbankare','$arsim','$nrkontakti','$kontrata','$rol')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		$query = mysql_query("SELECT *  FROM StafiIT where workername = '$_POST[emer]' AND workerrole = '$_POST[rol]'") or die(mysql_error());
	$data1 = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($data1['workername']) AND !empty($data1['workerrole']))
	{
		readfile("suksese.php");

	}
	}
}


function SignUp()
{
if(!empty($_POST['emer']))
{
	$sql = mysql_query("SELECT * FROM StafiIT WHERE workername = '$_POST[emer]' AND workerrole = '$_POST[rol]'");
 if(mysql_num_rows($sql)>=2)
   {
   
   }
 else
    {
   NewIt();
  
    }
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>