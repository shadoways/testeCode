<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
	
	</head>
	<body>
	
	<div id="container">
	
		<h1>Welcome to About!</h1>
		
		<?php 
		
			foreach($results as $value){
				
				echo $value->id . " ";
				echo $value->nome  . " ";
				echo $value->email;
				echo "<br />";
			}
		
		
		?>
	
	</div>
	
	</body>
</html>