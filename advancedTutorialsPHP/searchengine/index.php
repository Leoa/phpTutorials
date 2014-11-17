<?php

include_once('search.php');

?>



<html>
	<head>
		
		
	</head>
	
	<h1>Search for Otaku Articles</h1>
	
	<form action="index.php" method="POST">
		
		 <input type="text" name="keywords">
	
		<input type="submit" value="Search">
	</form>
	
	<?php

if (isset($_POST['keywords'])){
	
	$keywords = mysql_real_escape_string (htmlentities (trim ($_POST['keywords'])));
	
	//echo $keywords;
	
	$errors = array();
	
	if (empty($keywords)){
		
		$errors[] = 'please enter a search term';
		
	}else if(strlen($keywords)<3){
			
		$errors[]= 'please enter a longer search term';
		
	}else if(search_results($keywords)=== false){
			
		$errors[]= 'search term <b>'.$keywords.'</b> returned no results';
		
	}
	
	if(empty($errors)){
		
		$results = search_results($keywords);
		
		$results_num = count($results);
		
		$suffix =($results_num !=1)? 's':'';
		
		echo '<p> your Search for <strong>'.$keywords.'</strong> returned <strong>'.$results_num.'</strong> result'.$suffix;
		
		//.print_r (search_results($keywords)).'</pre>';
		
		foreach( $results as $result){
			
			echo '<p> <strong>'. $result['title'].'</strong> <br>'. $result['description'].'... <br> <a href='.$result['url'].' target="_blank">'.$result['url'].'</a>. <br>';
		}
		
		
		
	}else{
		
		foreach( $errors as $error){
			
			echo $error.'<br>';
		}
	}

}
// remove variable on refresh	
header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
header( 'Cache-Control: post-check=0, pre-check=0', false ); 
header( 'Pragma: no-cache' ); 
?>


	
</body>
</html>
