<?php require_once("session.php"); ?>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');

$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function login()
{
if(!empty($_POST['username']))
{
	$query = mysql_query("SELECT *  FROM users where username = '$_POST[username]' AND password = '$_POST[fjalekalimi]'");
	$row = mysql_fetch_array($query);
	if(!empty($row['username']) AND !empty($row['password']))
	{
		$_SESSION['ID'] = $row['ID'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['surname'] = $row['surname'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['age'] = $row['age'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['creditcard'] = $row['creditcard'];
		$_SESSION['type'] = $row['type'];
		$_SESSION['contact'] = $row['contact'];
		header("location: profile.php");
	}
	else
	{
		readfile("gabim.php");
	}
} 
}
if(isset($_POST['submit']))
{
	login();
}
?>