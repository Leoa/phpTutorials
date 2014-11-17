<?php

//one way iencrption creates string 32

//$password_md5='aa0ebc5e058710a5d4e76e1c455145ea';

$password_md5=md5($password);

echo $password_md5;

if (isset($_POST['password'])){
	
	
	$password=$_POST['password'];
	
	if(!empty($password)){
		
		if ($password_md5===$password){
			
			echo "login correct";
		}
	}
}

?>

<!DOCTYPE html>

<html lang="en">
	
	<head>
		
		<meta charset="UTF-8"></meta>
		
		<link ></link>
		
	</head>
	
	<body>
		
		<form name ="test" action="index.php" method="POST" >
			<br> Enter your name:
			
			<input type="password" name="password"  size="50"></input><br>
			
			
			<input type="submit" value ="Submit"/>
			
		</form>
		
	</body>
	
</html>
