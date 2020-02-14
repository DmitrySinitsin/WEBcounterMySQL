<?php
	$dsn = "mysql:host=127.0.0.1;dbname=MYBASE;charset=UTF8";
	$pdo = new PDO($dsn, "root", "");
	
	$res = $pdo->query("SELECT counter FROM mytable");
	$counter = $res->fetch()[0];
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
		<form method="POST" target="plus" action="plus.php">
			<input id="id_number" value="<?=$counter?>" 
			class="number"  type="text" />
			<input name="submit" class="button" type="submit" />
		</form>
		<iframe name="plus" ></iframe>
	</body>
</html>