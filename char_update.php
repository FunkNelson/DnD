<html>
<head>
	<title>Character Update</title>
	<meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
	<script type='text/javascript' src='Ajax_JavaScript.js'></script>
</head>
<body>

	<!-- d20 -->
	<div align="center" id='AjaxResponse'>
		<button name="d2-" onclick='AjaxRequest();' type="submit" value="20"><img src="http://i.imgur.com/6OuEBBp.png"></button>
	</div>    
	
	<form action="DB_functions/insert_new_values.php" method="post">
		<table border="0" align="center">
		
			<?php
			require_once('db_query.php');
			//$party = get_active_heros();
			$result = run_query("select char_id, name from char_attributes where is_active = 1 order by char_id");
			$party = array();
			
			while ($row = mysqli_fetch_assoc($result))
			{
				$party[] = $row['name'];
			}
			
			//character
			echo "<tr><td align='right'>Character</td><td><select name='char'>";
			echo "<option value = 'nothing'>Choose</option>";
			
			foreach ($party as $hero)
			{							
				echo "<option value = '$hero'>$hero</option>";
			}			
			
			echo "</select></td></tr>";
			
			
			//attributes
			echo "<tr><td align='right'>Attribute</td><td><select name='attrib'>";
			echo "<option value = 'nothing'>Choose</option>";
			
			echo "<option value = 'armor'>Armor Class</option>";
			echo "<option value = 'initiative'>Initiative</option>";
			echo "<option value = 'speed'>Speed</option>";
			echo "<option value = 'proficiency'>Proficiency Bonus</option>";
			echo "<option value = 'passive_wisdom'>Passive Wisdom</option>";
			echo "<option value = 'inspiration'>Inspiration</option>";
			echo "<option value = 'max_hp'>Max Hit Points</option>";
			echo "<option value = 'current_hp'>Current Hit Points</option>";
			
			echo "</select></td></tr>";
			
			
			//new value field 			
			echo "<tr><td align='right'>New value</td>";
			echo "<td><input type='number' name='new_value' min='0' max='1000' /></td></tr>";
			
			
			//submit buttom
			echo "<tr><td colspan='2' align='center'><input type='submit' value='Submit' /></td></tr>";			
			?>
			
			<tr><td><a href="http://www.funknelson.com/peaknerdery.php">Go back to the party page</a></td></tr>
		</table>
	</form>	
</body>
</html>