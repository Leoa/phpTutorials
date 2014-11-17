<?php

//session_start();

ini_set('display_errors',1); 

error_reporting(E_ALL);
 
include_once('init.php');


function search_results($keywords){
	
	$return_results = array();
	
	$where = "";
	
	$keywords = preg_split('/[\s+]/', $keywords);
	
	//print_r($keywords);
	
	$total_keywords = count ($keywords);
	
	foreach ($keywords as $key=>$keyword)//$keywords is the array. $key is from the Database.We are shoveling from data in to $keyword
	{
		$where .='keywords LIKE %'.$keyword.'%';
		
		if($key != ($total_keywords-1)){
			
			$where .=" AND ";
		}
		
	}
	$word = 'convention';
	
	$query = "SELECT keywords FROM searches WHERE keywords LIKE '%$word%'";
	$result = mysql_query($query);
	$row_nums = mysql_num_rows($result);
	echo $row_nums;
	
	while ($row = mysql_fetch_assoc($result)){
		
		
		 //echo  $row['url']."<br>";
		 echo  $row['keywords']."<br>";
	}
	
	/*echo $where;
	//$query= "SELECT title, description,url FROM searches WHERE $keywords =';
	// LEFT () function starts curser at the left and shows 70 characters in to the saved text 
	$results ="SELECT 'title', LEFT ('description', 70) as 'description', 'url' FROM 'searches' WHERE $where";
	
	echo $results."<br>";
	
	$results_num=($results = mysql_query($results))? mysql_num_rows($results): 0;
	
	echo $results_num;
	
	
	if($results_num === 0){
		return false;
	}else{
		echo 'somthing found.';
	}*/
}


?>