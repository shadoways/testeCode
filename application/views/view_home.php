<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
	
	</head>
	<body>
	
	<div id="container">
	
		<h1>Welcome to CodeIgniter!</h1>
		
		<h2>Soma</h2>
		<p><?php echo $var1 . " + " . $var2 . " = " . $totalSoma?></p>
		<h2>Subtracao</h2>
		<p><?php echo $var1 . " - " . $var2 . " = " . $totalSub?></p>
		<h2>Multiplicacao</h2>
		<p><?php echo $var1 . " * " . $var2 . " = " . $totalMult?></p>
		<h2>Divisao</h2>
		<p><?php echo $var1 . " / " . $var2 . " = " . $totalDiv?></p>						
	
	</div>
	
	<a href='home'> Home</a>
	<a href='about'> About</a>
	
	</body>
</html>