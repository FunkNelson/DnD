<?php
function run_query($query) 
{
	require('/var/www/html/DB_functions/db_connection_config_dnd.php');
	
	$db = mysqli_connect($server, $db_username, $db_password, $database);

	if (mysqli_connect_errno())
	{
		echo "Error: Could not connect to database.";
		echo mysqli_connect_error();
		exit;
	}
	
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	mysqli_close($db);
	return $result;
}


function get_all_heroes() 
{	
	$result = run_query("select distinct char_id from char_attributes order by char_id");	
	$party = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$party[] = $row['char_id'];
	}
	
	return $party;
}


function update_value($query)
{
	require('/var/www/html/DB_functions/db_connection_config_dnd.php');
	
	$db = mysqli_connect($server, $db_username_w, $db_password_w, $database);
	
	if (mysqli_connect_errno())
	{
		echo "Error: Could not connect to database.";
		echo mysqli_connect_error();
		exit;
	}
	
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	if ($result)
	{
		echo "New value successfully uploaded.<br />";
	}
	else
	{
		echo $query;
		echo "Error: derp.<br />";
	}
	
	echo '<a href="../char_update.php">Back</a><br />';
	mysqli_close($db);
}
?>	
