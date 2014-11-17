<?php

/*
 * names of bots:
 * Googlebot, Yahoo! Slurp, Ask Jeeves 
 * 
 * $_SERVER
 * http://php.net/manual/en/reserved.variables.server.php
 * 
 * stripos();
 */

 
 $useragent = $_SERVER["HTTP_USER_AGENT"];
 echo $useragent."<br>";
 $document =$_SERVER["HTTP_CONNECTION"];
 echo $document."<br>";
 $time = $_SERVER["REQUEST_TIME"];
 

/*
$uSec = $time % 1000;
$time = floor($time / 1000);

$seconds = $time % 60;
$time = floor($time / 60);

$minutes = $time % 60;
$time = floor($time / 60); 

$hours = $time % 24;
$time = floor($time / 7); 
 

 echo $uSec."<br>".$seconds."<br>".$minutes."<br>".$hours."<br>"; */
 if (stripos($useragent, "Firefox")){
 	
	 echo "found <br>";
	 $file = open ("crawled.txt", "a");
	 $fwrite( $file,"you have been crawled\n");
	 
 
 }
 else{ echo"not found";
 }
 
?>