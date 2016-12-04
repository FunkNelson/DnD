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
   
    
	//map column
	echo "<table width='30%' border='0' align='left' cellpadding='5'>";
	echo "<h1 align='center'>Maps</h1>";	
	
	$maps = run_query("select * from maps order by map_id");
	$map_array = array();
	
	while($row = mysqli_fetch_assoc($maps))
	{	
		$map_url = $row['map_url'];
		$map_name = $row['map_name'];
		
		echo "<p align='center'><a href='$map_url'>$map_name</a></p>";		
	}	
	echo "</table>";
	
	
	//documents columns
	echo "<table width='30%' border='0' align='center' cellpadding='5'>";
	echo "<h1 align='center'>Documents and Letters</h1>";
	
	$docs = run_query("select * from documents order by doc_id");
	$doc_array = array();
	
	while($row = mysqli_fetch_assoc($docs))
	{	
		$doc_url = $row['doc_url'];
		$doc_name = $row['doc_name'];
		
		echo "<p align='center'><a href='$doc_url'>$doc_name</a></p>";		
	}	
	echo "</table>";
	
	
	
	?>
	
	

</body>
</html>

