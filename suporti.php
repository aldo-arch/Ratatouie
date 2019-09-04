<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Website');
define('DB_USER','root');
define('DB_PASSWORD','aldo1995');
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function help()
{
	$textarea = $_POST['textarea'];
	
	$query = "INSERT INTO problems(problem) VALUES ('$textarea')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		$query = mysql_query("SELECT *  FROM problems where problem = '$_POST[textarea]'") or die(mysql_error());
	$data1 = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($data1['problem']))
	{
		readfile("ube.php");

	}
	}
}


function suport()
{
if(!empty($_POST['textarea']))
{
	$sql = mysql_query("SELECT * FROM problems WHERE problem = '$_POST[textarea]'");
 if(mysql_num_rows($sql)>=2)
   {
   
   }
 else
    {
   help();
  
    }
}
}
if(isset($_POST['submit']))
{
	suport();
}
?>