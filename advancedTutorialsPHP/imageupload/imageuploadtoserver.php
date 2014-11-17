<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
  
include_once('init2.php');

if($submit = $_POST['submit']){
	
$image = $_FILES['image']['tmp_name'];
	
if(!isset($submit)){
	
	echo "please select an image";
}else{
	
	echo "image slected :".$image;
	
	$checkifImage = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	
	if ($image_size==FALSE){
		
		echo "this is not an image";
	}
	else{
		
		if (!$query = mysql_query("INSERT INTO imageTable VALUES('','$image_name','$checkifImage')")){
			
			echo "probme with getting image";
		}
		else{
			$lastid = mysql_insert_id();
			echo "image uploaded , <p/> Your image <p/> <img src ='get.php?id=$lastid'>";
		}
		
	}
}


}
//echo "Welcome ".$user."!<p>";

//if($_POST['submit']){};


echo " <br> 

<form action ='imageuploadtoserver.php' method='POST' enctype='multipart/form-data'>

<input type='file' name='image'>

<input type='submit' name='submit' value='Upload'>

</form> "


?>