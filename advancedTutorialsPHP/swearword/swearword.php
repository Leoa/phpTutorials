<?php

//str_replace
//str_ireplace ignors case

// if ($_POST['submit']){ censor =$_POST['text'];}
function censor($string){
	
	if($string){
		
		$swearArr = array ("bloody","shit","fuck");
		$replaceArr = array("b****y","sh**","fu**");
		$newString = str_ireplace($swearArr,$replaceArr, $string);
		
		return $newString;
		
	}else{
		
		return "No string specified";
	}
	
	
}

echo censor("bloody hell.");


?>