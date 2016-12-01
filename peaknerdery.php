<html>
<head>
	<title>Peak Nerdery</title>
	<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
	<script type='text/javascript' src='Ajax_JavaScript.js'></script>
</head>
<body>

	<div align="center" id='AjaxResponse'>
		<button name="d2-" onclick='AjaxRequest();' type="submit" value="20"><img src="http://i.imgur.com/6OuEBBp.png"></button>
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

