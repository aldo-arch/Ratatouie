<?php require_once("session.php");
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

if(isset($_POST['submit2']))
{
		$id =$_POST['id'];
		$result = "DELETE FROM users WHERE ID = '$id'";
		mysql_query($result) or die("Failed to connect to MySQL: " . mysql_error()); 

		header("Location: logout.php");
}
?>