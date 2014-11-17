<body>
	<form action="get.php" method="GET">
		Name:<br> <input type="text" name="name">
		Age:<br> <input type="text" name="age">
		<input type="submit" value="submit">
	</form>
</body>

<?php

$name=$_GET['name'];
$age=$_GET['age'];

 if (isset($name)&& isset($age)&&!empty($name)&&!empty($age))
 {
echo 'I am '.$name.' and I am '.$age.' years old.';
 }
?>

