<?php

$replacethis = $_POST['replacethis'];
$withthis = $_POST['withthis'];
$text = $_POST['text'];

echo $replacethis;
if ($replacethis && $withthis){
	
	$newtext = ereg_replace($replacethis, $withthis);
	
}else{
	echo "die";
	
}
?>

<html>
	
	<form action="findandreplace.php" method="post">
		
		Replace<input type="text" name="replacethis"><br>
		Replace with<input type="text" name="withthis"><br>
		<input type="submit" value="Replace"><br>
		<textarea  name="text" cols="30" rows="5"><?php echo $newtext;?></textarea>
		
	</form>
</html>