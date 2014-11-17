<?php

//session_start();



ini_set('display_errors',1); 

error_reporting(E_ALL);
 
include_once('init.php');

//print_r($_FILES['image']);

echo '<br>';

if (isset($_FILES['image'])){
	
	$errors = array();
	
	$allowed_ext = array ('jpg','jpeg','gif','png');
	
	$file_name = $_FILES['image']['name'];
	
	$file_ext = strtolower(end (explode('.',$file_name)));
	
	//print_r($file_ext);
	
	$file_size = $_FILES['image']['size'];
	
	$file_tmp = $_FILES['image']['tmp_name'];
	
	
	if (in_array($file_ext, $allowed_ext) === false){
		
		$errors []= "ext not allowed";
		
	}
	
		if ($file_size >600000){
		
		$errors []= "image too big, must be under 2mb";
		
	}
	
		if (empty($errors)){
		
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
    //curl_setopt($ch, CURLOPT_URL,_VIRUS_SCAN_URL);
    curl_setopt($ch, CURLOPT_POST, true);
    // same as <input type="file" name="file_box">
    $post = array ("image"=>"@/http://www.leobee.com/php/fileupload/images/'.$file_name");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post); 
   
			
			curl_exec($ch);
curl_close($ch);
	echo $ch;
			//move_uploaded_file($file_tmp,'http://www.leobee.com/php/fileupload/images/'.$file_name);
			//
		}else{
			
			foreach($errors as $error){
				
				
				echo $error, "<br/>";
			}
		
	}
	
	print_r($errors);
	
	
	//mysql_real_escape_string (htmlentites());
	
	
	
}

?>



<html>
	<head>
		
		
	</head>
	
	<h1>File Upload</h1>
	
	<form action="" method="POST" enctype="multipart/form-data">
		
		 <input type="file" name="image">
	
		<input type="submit" value="Submit">
	</form>
	
	
</html>