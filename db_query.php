<?php
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

function get_active_heros() 
{	
	$result = run_query("select distinct char_id from char_attributes where is_active = 1 order by char_id");	
	$party = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$party[] = $row['char_id'];
	}
	
	return $party;
}
?>	