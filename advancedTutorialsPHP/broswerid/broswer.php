<?php


$pre =$_SERVER ['HTTP_USER_AGENT'];

if (strpos($pre,"Firefox")!=0){
	$browser = "Firefox";	
}
else if (strpos($pre,"Safari")!=0){
	$browser = "Safari";	
}
else if (strpos($pre,"Google")!=0){
	$browser = "Chrome";	
}
else{$browser="unknown";
}

echo "your broswer is ".$browser;

?>