<?php

//connect to database
include_once('init.php');
include_once('session.php');
//errors in php
ini_set('display_errors',1); 
error_reporting(E_ALL);
 
// start script

$user =$_SESSION['user'];

$get = mysql_query("SELECT * FROM users WHERE username='$user'");

while($row = mysql_fetch_assoc($get)){
	
	$admin = $row ['admin'];
	
	
}

if($admin==0){
	
	echo "you are not an admin";
	die();
	
}else{
echo "welcome Admin ". $user ;
die();
}
?>