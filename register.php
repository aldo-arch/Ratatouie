<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$emer = $_POST['emer'];
	$mbiemer = $_POST['mbiemer'];
	$userid = $_POST['userid'];
	$gjinia =  $_POST['gjinia'];
	$mosha = $_POST['mosha'];
	$email = $_POST['email'];
	$kartebankare= $_POST['kartebankare'];
	$llojiikartesbankare = $_POST['llojiikartesbankare'];
	$fjalekalimi = $_POST['fjalekalimi'];
	$nrkontakti = $_POST['nrkontakti'];
	$query = "INSERT INTO users (name,surname,username,gender,age,email,creditcard,type,password, contact) VALUES ('$emer','$mbiemer', '$userid', '$gjinia','$mosha','$email','$kartebankare','$llojiikartesbankare','$fjalekalimi','$nrkontakti')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		$query = mysql_query("SELECT *  FROM users where username = '$_POST[userid]' AND password = '$_POST[fjalekalimi]'") or die(mysql_error());
	$data1 = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($data1['username']) AND !empty($data1['password']))
	{

		readfile("sukses.php");

	}
	}
}

function SignUp()
{
if(!empty($_POST['userid']))
{
	$sql = mysql_query("SELECT * FROM users WHERE username = '$_POST[userid]' AND password = '$_POST[fjalekalimi]'");
 if(mysql_num_rows($sql)>=1)
   {
   readfile("exist.php");
   }
 else
    {
   newuser();
  
    }
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>