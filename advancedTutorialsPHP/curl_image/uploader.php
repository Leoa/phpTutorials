<?php 

ini_set('display_errors',1); 
 error_reporting(E_ALL);


$upload_directory=dirname(__FILE__).'/uploaded_files/';
//check if form submitted
if (isset($_POST['upload'])) {  
    if (!empty($_FILES['my_file'])) { 
			//check for image submitted
    		if ($_FILES['my_file']['error'] > 0) { 
			// check for error re file
            echo "Error: " . $_FILES["my_file"]["error"] ;
        } else {
			//move temp file to our server            
			move_uploaded_file($_FILES['my_file']['tmp_name'], $upload_directory . $_FILES['my_file']['name']);	
			echo 'Uploaded File.';
        }
    } else {
	        die('File not uploaded.'); 
			// exit script
    }
}

?>