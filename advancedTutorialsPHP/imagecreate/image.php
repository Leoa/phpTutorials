<?php
/*need gd package installed to xampp to work
 * imagecreate()
 * imagecolorallocate();
 * header()
 * imagejepg()
 * strlen()
 * 
 */
$name= $_GET['name'];
$message= "welcome to this php page, $name";
$lenght= strlen($message)*9.3;
$image= imagecreate($lenght, 20);
$backg=imagecolorallocate($image, 4,4,4);
$frontg=imagecolorallocate($image,255,255,255);
imagestring ($image, 5,5, 1, $message, $frontg);
header("content-type: image/jpeg");
imagejpeg($image);

?>
