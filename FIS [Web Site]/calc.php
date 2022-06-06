<?php 
	session_start();
	$mysqli = new mysqli('localhost', 'root' , '', 'database');
	$subj = filter_var(trim($_POST['subj']), 
	FILTER_SANITIZE_STRING);
	$point = filter_var(trim($_POST['point']), 
	FILTER_SANITIZE_STRING);

		if (isset($_POST['submit'])) {
    $result = $mysqli->query("SELECT * FROM university WHERE subject=$subj AND minscore<$point ");
	
	echo("Variable universities: <br>");
	echo("\n");
	while ($row = $result->fetch_assoc()) {
	echo $row['name'];
	echo(" <br> ");
}
	}

	
	

?>
	