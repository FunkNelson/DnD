<?php
require('/var/www/html/DB_functions/db_query.php');

$username_submit = $_POST['username'];
$password_submit = $_POST['password'];

$result = run_query("select passwd from dnd_users where username = \"$username_submit\"");
$row = mysqli_fetch_array($result);

$password_actual = $row['passwd'];

if ($password_actual === $password_submit)
{
	echo "ENTER!";
}
else
{	
	echo "BUTTS!";
}
?>