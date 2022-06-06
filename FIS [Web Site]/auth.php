<?php
 	session_start();
 	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
	$pass = md5($pass."asdjoabsdhasd546");
	$mysql = new mysqli('localhost', 'root', '', 'database');
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	
	if (is_countable($user)  == 0) {
		echo "<script>alert('Not found')</script>";	
		header('Refresh: 0, index.php');
		exit();
	}
	 
		setcookie('user', $user['name'], time() + 3600, "/" );
	
	header('Location: main.php');
	
    ?>