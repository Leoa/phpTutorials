<?php

ini_set('display_errors',1); 
 error_reporting(E_ALL);
include_once('init.php');

$user = $_SESSION['users'];

//echo  $user.'<br';


$query=mysql_query("SELECT * FROM imageblog WHERE users='$user'");

if (mysql_num_rows($query)==0){
	echo("user not found");
	
	die("user not found");
	
}else{
	
	$row = mysql_fetch_assoc($query);
	//echo $row['imageLocation'];
	$location =$row['imageLocation'];
	
	echo"<img src='$location' width='100' height='100'>";
	
}

?>