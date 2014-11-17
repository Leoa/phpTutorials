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
	
	//echo $total_keywords." key words entered<br>";
	
	foreach ($keywords as $key=>$keyword)//$keywords is the array. $key is from the Database.We are shoveling from data in to $keyword
	{
		$where .="keywords LIKE '%$keyword%'";
		
		if($key != ($total_keywords-1)){
			
			$where .=" OR ";
		}
		
	}
	
	$query = "SELECT title, LEFT(description,70) as description, url FROM searches WHERE $where";
	
	echo $query;
	
	$result = mysql_query($query);
	
	$row_nums = mysql_num_rows($result);
	
	//echo "<br> number of rows ".$row_nums."<br>";
	

	
	/*echo $where;
	//$query= "SELECT title, description,url FROM searches WHERE $keywords =';
	// LEFT () function starts curser at the left and shows 70 characters in to the saved text 
	$results ="SELECT 'title', LEFT ('description', 70) as 'description', 'url' FROM 'searches' WHERE $where";
	
	echo $results."<br>";
	
	$results_num=($results = mysql_query($results))? mysql_num_rows($results): 0;
	
	echo $results_num;
	*/
	
	if($row_nums === 0){
		
		return false;
		
	}else{
		
	while ($row = mysql_fetch_assoc($result)){
		
		$return_results[]= array (	
		
			'title'=>$row['title'],
			
			'description'=>$row['description'],
			
			'url'=>$row['url']
			
		);
	
		}
	return $return_results;
	}
}


?>