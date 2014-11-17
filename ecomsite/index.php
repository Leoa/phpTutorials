<?php

require('storescripts/database_connect.php');

$dynamicList="";

$query = "SELECT * FROM products ORDER BY date_added ASC LIMIT 3";

$result = mysql_query($query);

$productCount = mysql_num_rows($result);

if (mysql_num_rows($result) > 0){
	echo '<table>';
	  	while($row = mysql_fetch_array($result))	{
	  		$id=$row['id'];
			$product_name = $row['product_name'];
			$price=$row['price'];
			$category=$row['category'];
			$subcategory=$row['subcategory'];
			$details=$row['details'];
			$date_added = strftime("%b %d %Y", strtotime($row['date_added']));
					$itemType=$row['itemType'];
			$dynamicList .= "<td  width='60px' valign='top'>

<a href='product.php?id='.$id.'&itemType='.$itemType.''>

<img src='http://localhost/sugardefynery/storeadmin/inventory_images/'.$id.'.jpg'' width='50' height='50'>

</td><td></a>Name:<a href='product.php?id='.$id.'&itemType='.$itemType.''>'.$product_name.'<br/></a> Price: $'.$price.'<br/>Category: '.$category.'<br/>
            			Item Type: '.$itemType.'<br/>
            				</td>";
		
		}
	echo '</table>';

	
}else{
	
	$dynamicList="You have no items in your store ";
}


mysql_close();
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
	
	<link rel="stylesheet" href="style/ecom.css">
	
</head>

<body>
	
	<div id="page_wraper">
		
		<?php include_once("config/template_header.php")?>
		
			<section>
				
				<article>
					
					    <section id="main" class="flexbox">
					    	
       						 <div id="box-1" class="flexbox">
       						 	
          						 <h1>Some Stuff</h1> 
          						 
        					</div>
        					
        					<div id="box-2" class="flexbox"> 
        						
            					<h1>New items to the store</h1>
            					
            						<?php echo $dynamicList;?>
            						
            					</div>
            				
            					
        					
        					
        					<div id="box-3" class="flexbox">
        						
           						 <h1>Some More Stuff</h1>

       						 </div>
       						 
   						 </section>
   						 
				</article>
		
			</section>
			
		<?php include_once("config/template_footer.php")?>
			
	</div>
	
</body>

</html>