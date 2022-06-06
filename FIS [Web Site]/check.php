<?php 
	$login = filter_var(trim($_POST['login']), 
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), 
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), 
	FILTER_SANITIZE_STRING);
	if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
		echo "<script>alert('You are not registered')</script>";
		header('Refresh: 0 ,Sign Up.php');
		exit();
	}
		$pass = md5($pass."asdjoabsdhasd546");
	$mysql = new mysqli('localhost', 'root', '', 'database');
	$mysql->query("INSERT INTO `users` (`login`, `name` , `pass` )
	VALUES('$login', '$name' ,'$pass')");
	echo("Registered");

	
	$mysql->close();
	header('Location: index.php');
?>