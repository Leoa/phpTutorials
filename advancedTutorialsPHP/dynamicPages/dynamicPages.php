<?php



?>

<!Doctype html>

<html lang="en">
	
	<head>
		<meta charset="UTF-8"></meta>
		
		
		<title> Dynamic Pages</title>
		
		<link rel="stylesheet" href="style.css">
		
	</head>
	
	<body>
		<div id="page_wraper">
		<header id="header">Website</header>
		<nav id="menu">
			<a href="dynamicPages.php">Home</a>
			<a href="dynamicPages.php?p=aboutus">About Us</a>
			<a href="dynamicPages.php?p=contactus">Contact Us</a>
			
		</nav>
		
		<section id="content">
			
			<?php
			
			$pages_dir='pages';
			
			if(!empty ($_GET['p'])){
				
				
				
				$pages= scandir($pages_dir, 0);// php function that looks at all files in a folder/directory. 0  forward  l backward listing
				
				unset($pages[0],$pages[1]);// remove two values from the front on the array [.] and [..]
				//print_r($pages);
				
				$p=$_GET['p'];
				
					if (in_array($p.'.inc.php',$pages)){// in_array php functon serches variable in side an array
						include ($pages_dir.'/'.$p.'.inc.php');
					}
					else{
					
					echo("page not found");
					}
				}else{
					
					include ($pages_dir.'/dynamicPages.php');
				}
					
				
				//echo $p;
			
			?>
		</section>
		</div>
		
	</body>
	
	
	
	
</html>
