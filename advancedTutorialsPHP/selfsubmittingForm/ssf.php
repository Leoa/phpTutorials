
<?php

include_once('init.php');

ini_set('display_errors',1); 
error_reporting(E_ALL);
 
 if(isset($_POST['userName'])){
 	
	$name=mysql_real_escape_string(htmlentities($_POST['userName']));
	 
	if(!empty($name)){
		
		echo "your name is ".$name;
		
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
		
		<form name ="test" action="<?php echo mysql_real_escape_string(htmlentities($_SERVER ['PHP_SELF']));?>" method="POST" >
			<br> Enter your name:
			
			<input type="text" name="userName"  size="50"></input><br>
			
			
			<input type="submit" value ="Login"/>
			
		</form>
		
	</body>
	
</html>
