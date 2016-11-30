<html>
<head>
	<title>Peak Nerdery</title>
	<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
	<script type='text/javascript' src='Ajax_JavaScript.js'></script>
</head>
<body>
	<h1 align="center">Peak Nerdery</h1><br />
	
	<div id='AjaxResponse'>
		<input type='button' onclick='AjaxRequest();' value='Roll a d6'/>   
	</div>
	
    
	
	<br />
	<?php
	require_once('profile_strip.php');
	$party = array(1, 2, 3, 4);
	
	foreach ($party as $hero) 
	{
		print_profile($hero);
	}
		
	?>
		
		
	
	
</body>
</html>

