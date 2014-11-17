<?php

//include_once('config.php');


$connect = mysql_connect('mysql','beleoa','11dd11');

$db_selected= mysql_select_db('fileupload');

if(!$connect){
	
	die("Failed to connect: ".mysql_error());

}
if(!$db_selected){
	
	die("Failed to select database: ".mysql_error());
}else{ echo 'database connected <br>';
}

?>
