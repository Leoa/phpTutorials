<?php

include_once('init.php');

$per_page = 3;

$pages_query = mysql_query("SELECT COUNT ('title') FROM searches");

$pages = ceil( mysql_result($pages_query,0)/$per_page);

$page =(isset($_GET['page'])) ? (int)$_GET['page']: 1 ;

$start = ($page - 1) * $page;
//echo $start;

$query = mysql_query("SELECT title FROM searches LIMIT $start, $per_page");

while ($query_row = mysql_fetch_assoc($query)){
	
	
	echo '<p>'.$query_row['title'].'<p>';
}

if ($pages >= 1 && $page<=$pages){
	
	for($x=1; $x<=$pages; $x++){
		echo "poop"	;
		echo '<a href="?page='.$x.'">'.$x.'</a>';
	}
}

?>