<?php


function construct_query($tablename, $char_id) {

	return "select * from $tablename where char_id = $char_id";		
}

function run_query($query) {
	require('db_connection_config_dnd.php');
	
	$db = mysqli_connect($server, $db_username, $db_password, $database);

	if (mysqli_connect_errno())
	{
		echo "Error: Could not connect to database.";
		echo mysqli_connect_error();
		exit;
	}
	
	$result = mysqli_query($db, $query);
	mysqli_close($db);
	return $result;
}

function close_db_connection($result) {
		
	$result->free();
	
}


?>	