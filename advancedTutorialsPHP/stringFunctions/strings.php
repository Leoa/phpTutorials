<?php
/*
 * strlen(); counts the amouth of characters in a string
 * mb_substr(); looping  string like for loop with characters
 * explode(); create an array to break up a string
 * implode(); join array back together
 * join();join array back together
 * nl2br(); adds line breaks to recordes retived from server
 * strrev(); reverse string
 * strtolower(); makes the string all lower case-- good for user names
 * strtoupper();makes the string all upper case
 * substr_count(); find a smaller string within a string
 * subster_replace(); replaces string segments, need to count where.
 * 
 */


 
$string ="hello, my name is Proscuter Ha";

echo $string."<br>";
echo strlen($string)."<br>";
echo mb_substr($string,0,2)."<br>";
$xarray= explode(" ",$string);
echo $xarray[4]."<br>";


$yarray= implode($xarray, "  ");

echo $yarray."<br>";

 echo nl2br("this is the first line
second line
third line")."<br>";

echo strrev($string)."<br>";

echo strtolower($string)."<br>";
echo strtoupper($string)."<br>";



$result= substr_count($string,"Ha");//substr_count($string,"Ha", 9,30)

echo $result."<br>";


$result2= substr_replace($string,"Ha",11,13);//substr_count($string,"Ha", 9,30)

echo $result2."<br>";


?>