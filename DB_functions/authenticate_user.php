<?php
require('/var/www/html/DB_functions/db_query.php');

$username_submit = $_POST['username'];
$password_submit = $_POST['password'];

if ($username_submit && $password_submit) 
//they have just tried logging in
{
	try
	{
		login($username_submit, $password_submit);
		echo "Success!";		
		//$_SESSION['valid_user'] = $username_submit;
	}
	catch (Exception $e)
	//unsuccessful login
	{
		echo "You could not be logged in <br />";
		echo "<a href='/var/www/html/login_page.php' >Go back to login page</a>";
		exit();
	}
}

echo "more things";

/*
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
*/

?>