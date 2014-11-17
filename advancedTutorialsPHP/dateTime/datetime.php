<?php

//date();
//time();
//strtotime()

echo dirname(__FILE__);
echo date("d m y")."<br>";
echo date("D M Y")."<br>";
echo date("d-m-y")."<br>";

echo date("h i s")."<br>";
echo date("H I S")."<br>";

echo time("h i s")."<br>";
echo time("H I S")."<br>";


// changes string info to time or date
$offset= strtotime("+1 hours");
echo date("h:i:s", $offset)."<br>";

$offset= strtotime("+1 week +1 hours");
$date = date("d-m-y", $offset);
$time = date("h:i:s");
echo "The time is $time and the date is $date<br>";


$currentTime= date("Y-m-d")." ".date("H:i:s"); 
$goalTime="12:29:00";

echo "Current time $currentTime<br>  Goal time is $goalTime<br>";
echo "<meta http-equiv='refresh' content='1' />";
if ($currentTime>=$goalTime){
	
	echo"<b> Goal time has been reched";
}


?>