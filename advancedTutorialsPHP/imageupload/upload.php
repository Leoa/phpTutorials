<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  
include_once('init.php');

//$_SESSION['users']= "Ken";

$user = $_SESSION['users']= "Ken";


echo "Welcome ".$user."!<p>";

if($_POST['submit']){
	
	
	// get the file attributes 
	$name = $_FILES['myfile']['name'];
	$temp_name = $_FILES['myfile']['name'];
	
	if($name){
		
		//start upload process
		// add check that keeps people from uploading exes. 
		$location = 'C:/xampp/htdocs/phpTutorials/advancedTutorialsPHP/imageupload/avatars/'.$name;
		echo $temp_name;
	 move_uploaded_file('C:/Users/Leondria/Documents/Eclipse/workspace/TutorialBasics2/res/drawable-mdpi/'.$temp_name, $location);
		$query = mysql_query("UPDATE imageblog SET imageLocation='$location' WHERE users='$user'");
		die("your avatar has been uploaded <a href='view.php'>home</a>");
		
		//echo"...";
		
		
	}else{
		die("broken! Please select file");
	}
}

echo "upload your image: <br> 

<form action ='upload.php' method='POST' enctype='multipart/form-data'>

<input type='file' name='myfile'>

<input type='submit' name='submit' value='submit'>

</form> "


?>