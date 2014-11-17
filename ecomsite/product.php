<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors',1); 



?>



<?php

include('storescripts/database_connect.php');


if(isset($_GET['id'])){
	
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']);
	
	// use this var to check to see if this ID exisit , if yes then get the product 
	// details, if no then exit this script and give a message
	
	$query1="SELECT * FROM products WHERE id='$id' LIMIT 1";
	
	$result1=mysql_query($query1);
	
	if (mysql_num_rows($result1)>0){
		
			while($row = mysql_fetch_array($result1))	{
				
			$product_name = $row['product_name'];
			$price=$row['price'];
			$category=$row['category'];
			$subcategory=$row['subcategory'];
			$details=$row['details'];
			$date_added = strftime("%b %d %Y", strtotime($row['date_added']));
			
			$dynamicList='<b>'.$product_name.'</b> <br><a href="http://localhost/phpTutorials/ecomsite/storeadmin/inventory_images/'.$id.'.jpg" "><img src="http://localhost/phpTutorials/ecomsite/storeadmin/inventory_images/'.$id.'.jpg" width="100" height="100"></a>
			<br>$'.$price .'<br>'.$category.'<br>'.$subcategory.'<br>'.$details;
			
		}
		
	}else{
		
		echo "Item does not exist";
	
	exit();
}
	
	
	
}else{
	
	echo "Data to render this page is missing";
	
	exit();
}

mysql_close();
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
	
	<link rel="stylesheet" href="style/ecom.css">
	
	<title >Sugar Defynery <?php echo $product_name;?></title>
	
</head>

<body>
	
	<div id="page_wraper">
		
		<?php include_once("config/template_header.php")?>
		
			<section>
				
				<article>
					
					    <section id="main" class="flexbox">
					    	
       						 
        					
        					<div id="box-2" class="flexbox"> 
        						
            					<h1>New items to the store</h1>
            					
            						<?php echo $dynamicList;?>
            						
            					</div>
            				
            					
        					
        					
        					<div id="box-3" class="flexbox">
        						
           						 <h1>ADD TO CART</h1><br>
           						 
           						 <form id="form1" name="form1" method="POST" action="cart.php">
           						 	
           						 	<input type="hidden" name="pid" id="pid" value="<?php echo $id;?>"/>
           						 	<input type="hidden" name="h2" id="h2" value="pancakes"/>
           						 	
           						 	<input type="submit" name="submit" id="submit" value="Add to Shopping Cart">
           						
           						 </form>

       						 </div>
       						 
   						 </section>
   						 
				</article>
		
			</section>
			
		<?php include_once("config/template_footer.php")?>
			
	</div>
	
</body>

</html>