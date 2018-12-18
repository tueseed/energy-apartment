<?php
	$server = "us-cdbr-iron-east-01.cleardb.net";
	$username = "bc0dff997eb9ae";
	$password = "e47b661f";
	$db = "heroku_6e98c4a56f6c5b4";
	$conn = new mysqli($server, $username, $password, $db);
	mysqli_query($conn, "SET NAMES utf8");
?>