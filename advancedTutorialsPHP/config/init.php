<?php

//include_once('config.php');


$connect = mysql_connect('localhost','root@localhost');

$db_selected= mysql_select_db('test');

if(!$connect){
	
	die(" failed to connect: ".mysql_error());

}
if(!$db_selected){
	
	die(" failed to select database: ".mysql_error());
}else{ echo 'database connected <br>';
}

?>
