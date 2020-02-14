<?php
	session_start();
	
	if(isset($_SESSION["counter"]))
		$_SESSION["counter"]++;
	else
		$_SESSION["counter"]=0;
		$counter=$_SESSION["counter"];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Counter</title>
		<link rel="stylesheet" type="text/css" 
			 href="style.css"/>
	</head>
	<body>
		<h1>Counter</h1>
		<form method="POST">
			<input name="number" value="<?=$counter?>" 
			class="number"  type="text" />
			<input class="button" type="submit" />
		</form>
	</body>
</html>