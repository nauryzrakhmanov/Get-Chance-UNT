<?php 
	$name = filter_var(trim($_POST['name']), 
	FILTER_SANITIZE_STRING);
	$information = filter_var(trim($_POST['information']), 
	FILTER_SANITIZE_STRING);
	$subject = filter_var(trim($_POST['subject']), 
	FILTER_SANITIZE_STRING);
	$minscore = filter_var(trim($_POST['minscore']), 
	FILTER_SANITIZE_STRING);

	$mysql = new mysqli('localhost', 'root', '', 'database');
	$mysql->query("INSERT INTO `university` (`name`, `information`, `subject`, `minscore` )
	VALUES('$name', '$information' , '$subject', '$minscore')");
	
	$mysql->close();
	header('Location: admin.php');
?>