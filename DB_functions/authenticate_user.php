<?php
require_once('/var/www/html/DB_functions/db_query.php');
session_start();

$username_submit = $_POST['username'];
$password_submit = $_POST['password'];

if ($username_submit && $password_submit) 
//they have just tried logging in
{
	try
	{
		login($username_submit, $password_submit);
		//echo "Success!";		
		$_SESSION['valid_user'] = $username_submit;
	}
	catch (Exception $e)
	//unsuccessful login
	{
		echo "You could not be logged in <br />";
		echo "<a href='/var/www/html/login_page.php'>Go back to login page</a>";
		exit();
	}
}

check_valid_user();
require_once('/var/www/html/char_update.php');
?>