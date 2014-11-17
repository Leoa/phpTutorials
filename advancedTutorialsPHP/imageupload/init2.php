<?php

//include_once('config.php');


$connect = mysql_connect('mysql','beleoa','11dd11');

$db_selected= mysql_select_db('imageDatabase');

if(!$connect){
	
	die(" failed to connect: ".mysql_error());

}
if(!$db_selected){
	
	die(" failed to select database: ".mysql_error());
}else{
	 echo 'database connected   <br>';
	
}

?>
