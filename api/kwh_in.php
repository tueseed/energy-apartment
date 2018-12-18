<?php
	$method = $_SERVER["REQUEST_METHOD"];
	if($method == "POST")
	{
	require('db/connect-db.php');
	$kwh = $_POST["kwh"];
	$sql_insert_kwh = "INSERT INTO tbl_kwh(kwh) VALUES('$kwh')";
	mysqli_query($conn,$sql_insert_meet);
	echo "INSERT SUCCESSFULL..";
	}
	else
	{
		echo "Method Not Allow!!!!";
	}
	?>