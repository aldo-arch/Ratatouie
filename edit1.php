<?php require_once("session.php"); ?>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

if(isset($_POST['submit']))
{
		
		$emer =$_POST['fullname'];
		$surname1 = $_POST['surname'];
		$username1 =$_POST['username'];
		$addremail = $_POST['email'];
		$gjinia =$_POST['gender'];
		$fjalekalimi = $_POST['password'];
		$kartekrediti =$_POST['crcard'];
		$tip = $_POST['tipi'];
		$mosha = $_POST['age1'];
		$contact = $_POST['nrkontakt'];
		$result = mysql_query("UPDATE users  SET username ='$username1' , name ='$emer', email ='$addremail', gender ='$gjinia', surname ='$surname1', password ='$fjalekalimi', creditcard ='$kartekrediti', type ='$tip', contact ='$contact',age ='$mosha' WHERE ID = '$_SESSION[ID]'") or die("Failed to connect to MySQL: " . mysql_error());
		readfile("undryshua.php");
}
?>