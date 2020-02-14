<?php
	$dsn = "mysql:host=127.0.0.1;dbname=MYBASE;charset=UTF8";
	$pdo = new PDO($dsn, "root", "");
	if (isset($_POST["submit"]))
		$pdo ->exec("UPDATE mytable SET counter = counter + 1");
	$res = $pdo->query("SELECT counter FROM mytable");
	$counter = $res->fetch()[0];
?>
<script>
	parent.document.getElementById("id_number").value="<?= $counter ?>";
</script>