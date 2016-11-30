<html>
<head>
	<title>Peak Nerdery</title>
	<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
</head>
<body>

	<!-- Profile 1 -->
	

		
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

