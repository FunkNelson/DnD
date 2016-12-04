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
	
	<form action="placeholder.php" method="post">
		<table border="0" class="center">
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
			
			echo "<option value = 'ac'>Armor Class</option>";
			echo "<option value = 'init'>Initiative</option>";
			echo "<option value = 'speed'>Speed</option>";
			echo "<option value = 'prof'>Proficiency Bonus</option>";
			echo "<option value = 'pw'>Passive Wisdom</option>";
			echo "<option value = 'insp'>Inspiration</option>";
			echo "<option value = 'max_hp'>Max Hit Points</option>";
			echo "<option value = 'current_hp'>Current Hit Points</option>";
			
			echo "</select></td></tr>";
			?>
			
			
		</table>
	</form>
	
	
	<!--
    <form action="doathing.php" method="post">
      <table border="0" class="center">
        <tr>
	      <td align="right">Deck Name</td>
	      <td align="left"><input type="text" name="deckname" size="16" maxlength="16" /></td>
        </tr>
		<tr>
	      <td align="right">Descriptor</td>
	      <td align="left"><input type="text" name="descriptor" size="16" maxlength="16" /></td>
        </tr>
		<tr>
		  <td></td>
		  <td size="6">Ex: zoo, mech, murloc...</td>
		</tr>
        <tr>
	      <td align="right">Style</td>
	      <td><select name="style">
		    <option value = "nothing">Choose</option>
		    <option value = "a">rush</option>
		    <option value = "b">midrange</option>
		    <option value = "c">control</option>
		    <option value = "d">mill</option>
		    <option value = "e">combo</option>
		    <option value = "f">other</option>
			</select>
		  </td>
        </tr>
        <tr>
	      <td align="right">Select your class</td>
	      <td><select name="find">
		    <option value = "nothing">Choose</option>
		    <option value = "a">Druid</option>
		    <option value = "b">Hunter</option>
		    <option value = "c">Mage</option>
		    <option value = "d">Paladin</option>
		    <option value = "e">Priest</option>
		    <option value = "f">Rogue</option>
		    <option value = "g">Shaman</option>
		    <option value = "h">Warlock</option>
		    <option value = "i">Warrior</option>
			</select>
		  </td>
        </tr>	
		<tr>
		  <td align="right">Minion count</td>
		  <td><input type="number" name="minions" min="0" max="30" /></td>
		</tr>
		<tr>
		  <td align="right">Spell count</td>
		  <td><input type="number" name="spells" min="0" max="30" /></td>
		</tr>
		<tr>
		  <td align="right">Weapon count</td>
		  <td><input type="number" name="weapons" min="0" max="30" /></td>
		</tr>
        <tr>
	      <td colspan="2" align="center"><input type="submit" value="Touch this." /></td>
        </tr>
      </table>
    </form>
	-->
	
	
	
	
	
</body>
</html>