<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
	$username = 'root';
	$userpass = '';
	$dbhost   = 'localhost';
	$dbdatabase = 'hit';
	$db = new mysqli( $dbhost, $username, $userpass, $dbdatabase);
	if (mysqli_connect_error()){
		echo 'Could not connect to the database';
		exit;
	}
	$result = $db->query("select username from user;");
	$array  = $result->fetch_array();
	echo $array;
?>
</body>
</html>
