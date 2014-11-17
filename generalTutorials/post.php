<html>
<body>
	<form action="post.php" method="post">
		password:<br> <input type="password" name="password">
		
		<input type="submit" value="submit">
	</form>
</body>
</html>

<?php

$password='password';
if(isset($_POST['password'])&& !empty($_POST['password']))

{
	echo 'submited';

}
?>
