<?php
require('db_connection_config_dnd.php');	
$db = mysqli_connect($server, $db_username, $db_password, $database);

if (mysqli_connect_errno())
{
	echo "Error: Could not connect to database.";
	echo mysqli_connect_error();
	exit;
}

$query = "select * from char_base_stats where char_id = 1";
$result = mysqli_query($db, $query);

$row = mysqli_fetch_array($result);

$strength = $row['strength'];
$dexterity = $row['dexterity'];
$constitution = $row['constitution'];
$intelligence = $row['intelligence'];
$wisdom = $row['wisdom'];
$charisma = $row['charisma'];

echo "<tr><td>$strength</td><td>-1</td><td>Strength</td></tr>";
echo "<tr><td>$dexterity</td><td>+4</td><td>Dexterity</td></tr>";
echo "<tr><td>$constitution</td><td>+1</td><td>Constitution</td></tr>";
echo "<tr><td>$intelligence</td><td>0</td><td>Intelligence</td></tr>";
echo "<tr><td>$wisdom</td><td>+1</td><td>Wisdom</td></tr>";
echo "<tr><td>$charisma</td><td>+3</td><td>Charisma</td></tr>";

$result->free();
mysqli_close($db);				
?>	