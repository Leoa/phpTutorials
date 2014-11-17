<?php

session_start();

ini_set('display_errors',1); 

error_reporting(E_ALL);
 
include_once('init.php');


	if(isset($_POST['username'],$_POST['password'] )){
		
		$username = ''.mysql_real_escape_string(htmlentities($_POST["username"])).'';
		
		$password = ''.mysql_real_escape_string(htmlentities($_POST["password"])).'';
		
		$query = mysql_query("SELECT * FROM users WHERE username='$username'"); 
		//$password;
		
		$rows = mysql_num_rows($query);
	
			
	if ($rows!=0){
		
	
	while ($row = mysql_fetch_assoc($query)){
		
		$dbusername = $row['username'];
		
		$dbpassword = $row['password'];
		
	}
	
if ($username == $dbusername && $password == $dbpassword){
	
	echo "welcome $username";
	
 	echo "member page <a href='member.php'>Members Page</a>";
	
	$_SESSION['username'] == $dbusername;
 
	} else {
	
	echo "incorrect password or username";

	}
	
}else{
		
		die("that user does not exist");
		
		
	}
}
	
?>