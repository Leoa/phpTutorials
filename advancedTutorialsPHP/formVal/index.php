<?php

if (isset($_POST['name'], $_POST['age'], $_POST['email']))	{
	
	$email = $_POST['email'];
	$name = $_POST['name'];
	$age= $_POST['age'];
	
	if((empty($name))|| (empty($age)) ||(empty($email))){
	$errors = array();
	//$errors[]=" all fileds required";
	
	
	if (strlen($name)>25){
		
		$errors[]='Name is too long';
	}
	 if (!is_numeric($age))	{
		
		
		$errors[]='age is not a number';
		
	}else if ($age<=0){
		
		$errors[]='age must be a postive number';
		
	}
	
	if (filter_var($email,FILTER_VALIDATE_EMAIL)=== FALSE){
		
		$errors[]=" please enter a  valid e-mail address";
	}
	
}
	
	
	
	if (!empty($errors))	{
		
		foreach($errors as $error){
			
			echo '<strong>'.$error.'</strong> <br>';
		}
		
	}

}
?>



<form action="index.php"	method="post">
	
	
	Name:<input type="text"	name="name"/><br>
	Age:<input type="text"	name="age"/><br>
	E-mail:<input type="text"	name="email"/><br>
	<br><br>
	<input type="submit" value="Register"/>
	
</form>
