upload.php
<form action="upload.php">
<input name="cert_file" value="" type="file"/>

<input class="button" name="submit" value="Save" type="submit"/>
</form>

<?php

 // Initialise cURL session
     $curl = curl_init();

         $filename = $_POST[cert_file] ;
        $size = filesize($filename);
        $file = fopen($filename,'r');
        list(,$destinationFilename) = pathinfo($filename);

        $data['upload'] = "@".$filename;
        $url = "http://www.leobee.com/curl/uploaded_files/{$destinationFilename}";
		$username='beleoa';
		$password='11dd11';

        curl_setopt($curl,CURLOPT_URL,$url);
        //curl_setopt($curl,CURLOPT_PUT,true);
        curl_setopt($curl,CURLOPT_POST,1);
        curl_setopt($curl,CURLOPT_POSTFIELDS,$data);

        // present the filesize of the file we're putting
        curl_setopt($curl,CURLOPT_INFILESIZE,$size);

        // load the file in by its resource handle
        curl_setopt($curl,CURLOPT_INFILE,$file);
		
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password); 

        // Place a nice friendly user-agent
        curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/4.0");

        // return the output instead of displaying it
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

         // execute, and log the result to curl_put.log
        $result = curl_exec($curl);
        $error = curl_error($curl);

?>