<?php
//use url of google to open as a file

$url = "http://www.google.com";
$page = file($url);

foreach($page as $part){
	//echo $part;
	
	//$part = ereg_replace($replace, $withthis,$part);
	$part = ereg_replace('<img src=', '<img src='.$url,$part);// not working
	
	echo $part;
}

?>