<?php

include_once('init2.php');
$id = addslashes($_REQUEST['id']);

$image = mysql_query("SELECT * FROM imageTable WHERE id=$id");
$image = mysql_fetch_assoc($image);
$image = $image['image'];


header("Content-type: image/jpeg");

$lastid=$image;
echo $image;



?>