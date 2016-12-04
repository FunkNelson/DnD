<html>
<head>
	<title>Peak Nerdery</title>
	<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
	<script type='text/javascript' src='Ajax_JavaScript.js'></script>
</head>
<body>
	
	<!-- d20 -->
	<div align="center" id='AjaxResponse'>
		<button name="d2-" onclick='AjaxRequest();' type="submit" value="20"><img src="http://i.imgur.com/6OuEBBp.png"></button>
	</div>    
	
	<br />
	<?php
	require('profile_strip.php');
	require('db_query.php');
	
	$query = "select distinct char_id from char_attributes where is_active = 1 order by char_id";
	$result = run_query($query);	
	$party = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$party[] = $row['char_id'];
	}
	
	foreach ($party as $hero) 
	{
		print_profile($hero);
	}

	echo "<br />";

	
	echo "<h1 align='center'>Maps</h1>";	
	
	$maps = run_query("select * from maps order by map_id");
	$map_array = array();
	
	while($row = mysqli_fetch_assoc($maps))
	{	
		$map_url = $row['map_url'];
		$map_name = $row['map_name'];
		
		echo "<p align='center'><a href='$map_url'>$map_name</a></p>";		
	}	
	?>
	

</body>
</html>

