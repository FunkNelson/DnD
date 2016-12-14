<html>
<head>
  <title>Log in</title>
  <meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
</head>
<body>	
	<h1>Log in</h1>
	
	<form action="DB_functions/authenticate_user.php" method="post">
		Username:<br>
		<input type="text" name="username"><br>
		Password:<br>
		<input typt="text" name="password"><br />
		<input type="submit" value="Log in"><br>		
	</form>
	
</body>
</html>