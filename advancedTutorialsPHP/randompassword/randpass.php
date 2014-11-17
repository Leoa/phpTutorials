<?php


if (isset($_POST['generate'])){
	
	
	$charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQURTUVWXYZ1234567890%#!?';
	
	 $genpass = substr(str_shuffle($charset),0,12);
	
}
?>

<form action = "randpass.php"	method="post">
	<input type = "submit" name="generate" value="Generate"/> 
	<input type = "text" value="<?php if (isset($genpass)){echo $genpass;}?>"/>
</form>
