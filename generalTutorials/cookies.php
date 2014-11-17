<?php

// cookie are set of data stored in the broswer accessed by server.
$expire = time()+86400;
setcookie("name", "alex", $expire);
setcookie("age","19", $expire);
//echo $_COOKIE['name']." is ".$_COOKIE["age"];

$expire_unset=time()-86400;//cookie is not set
setcookie("name"," " ,$expire_unset);
if ( isset($_COOKIE['name'])){
	echo "cookie is set";}
else{
	
	echo "cookie is not set";
}
	
	


?>