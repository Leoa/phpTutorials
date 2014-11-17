<?php

include_once('config/init.php');


/*
if(isset($_POST["title"]) && isset($_POST["post"]) && $_POST["post"] !=NULL && $_POST["title"] !=NULL){
	
// values from test.html
$title = ''.mysql_real_escape_string(htmlentities(stripslashes($_POST["title"]))).'';

$contents = ''.mysql_real_escape_string(htmlentities($_POST["post"])).'';

// query to insert values into database
$query  = "INSERT INTO postTest VALUES('id','$title', '$contents','TimeStamp')";

mysql_query($query) or die(mysql_error()); 

echo ' thanks for posting!';
}
else{
	
	echo"<a href='test.html'> Go back</a>  and post again. Problem with post";
}
//echo '<br>'.$title;
//echo '<br>'.$contents; 

//comment for user
 
 */

?>
