<?php

require ("./connectdb.php"); 

$id = $_GET['id'];

	$sql = "UPDATE tbl_users SET blocked='0' WHERE id= '$id' ";

	if ($conn->query($sql) === TRUE) {
	    $status = "1";
	} else {
	    $status = "0";
	}


	echo json_encode($status, JSON_PRETTY_PRINT);

?>