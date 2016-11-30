<html>
<head>
  <title>Smoking Mirror</title>
  <meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
</head>
<body>


	<!-- Header -->
	<table bgcolor="#000000" width="100%" border="0" align="center" cellpadding="5">
		<tr>
		<td align="center" width="20%">
			<img src="http://a819.phobos.apple.com/us/r1000/075/Purple/v4/26/91/b3/2691b398-ad8b-8460-d2b4-130f901218e2/mza_7357829886999610302.png" width="30%" height="10%">
		</td>
		
		<?php
		require_once('db_query.php');
		$result = run_query("select * from char_attributes where char_id = 1");
		$row = mysqli_fetch_array($result);		
		
		$fullname = $row['fullname'];
		$name = $row['name'];
		$player = $row['player'];
		$class = $row['class'];
		$race = $row['race'];
		$background = $row['background'];
		$archetype = $row['archetype'];
		$alignment = $row['alignment'];
		$xp = $row['xp'];
		$level = $row['level'];
		
		//echo $fullname;
		
		//display full player name
		echo '<td align="left" width="30%"><h1 style="color:#FFFFFF">';
		echo "$fullname</h1></td>";
		
		//display header
		echo '<td align="left" width="50%">';
		echo '<table border="3" align="left" bgcolor=#FFFFFF cellpadding="5">';
		echo '<tr bgcolor="#aaa">';
		echo '<td>Nickname</td><td>Class</td><td>Race</td><td>Background</td><td>Archetype</td><td>Alignment</td><td>XP</td><td>Level</td>';
		echo '</tr><tr>';
		
		//display stats
		echo "<td>$name</td>";		
		echo "<td>$class</td>";
		echo "<td>$race</td>";
		echo "<td>$background</td>";
		echo "<td>$archetype</td>";
		echo "<td>$alignment</td>";
		echo "<td>$xp</td>";
		echo "<td>$level</td>";
		
		echo "</tr></table></td>";
		
		?>
		
		</tr>
	</table>
	

	<!-- Left Column -->
	<table width="30%" border="0" align="left" colspan="1" cellpadding="5">
		<tr>
		<td bgcolor="#aaa" width="50%" align="left" style="border:1px solid black">
			<h2 align="center">Character Stats</h2>
					
			<table border="3" colspan="1" width="50%" align="center" cellpadding="5" bgcolor=#FFFFFF>				
			
				<?php
				require_once('db_query.php');					
				$result = run_query("select * from char_base_stats where char_id = 1");
				
				$row = mysqli_fetch_array($result);
				
				$strength = $row['strength'];
				$dexterity = $row['dexterity'];
				$constitution = $row['constitution'];
				$intelligence = $row['intelligence'];
				$wisdom = $row['wisdom'];
				$charisma = $row['charisma'];
				
				echo "<tr><td>$strength</td><td>-1</td><td>Strength</td></tr>";
				echo "<tr><td>$dexterity</td><td>+4</td><td>Dexterity</td></tr>";
				echo "<tr><td>$constitution</td><td>+1</td><td>Constitution</td></tr>";
				echo "<tr><td>$intelligence</td><td>0</td><td>Intelligence</td></tr>";
				echo "<tr><td>$wisdom</td><td>+1</td><td>Wisdom</td></tr>";
				echo "<tr><td>$charisma</td><td>+3</td><td>Charisma</td></tr>";
				?>	
				
			</table>  
			<br />
		</td>
		<td bgcolor="#aaa" width="50%" align="left" style="border:1px solid black">
			<h2 align="center">Saving Throws</h2>
			<table border="3" colspan="1" width="50%" align="center" cellpadding="5" bgcolor=#FFFFFF>
			
				<?php
				require_once('db_query.php');					
				$result = run_query("select * from char_saves where char_id = 1");
				
				$row = mysqli_fetch_array($result);
				
				$strength = $row['strength'];
				$dexterity = $row['dexterity'];
				$constitution = $row['constitution'];
				$intelligence = $row['intelligence'];
				$wisdom = $row['wisdom'];
				$charisma = $row['charisma'];
				
				$strength_prof = $row['strength_prof'] ? "*" : "";
				$dexterity_prof = $row['dexterity_prof'] ? "*" : "";
				$constitution_prof = $row['constitution_prof'] ? "*" : "";
				$intelligence_prof = $row['intelligence_prof'] ? "*" : "";
				$wisdom_prof = $row['wisdom_prof'] ? "*" : "";
				$charisma_prof = $row['charisma_prof'] ? "*" : "";
				
				echo "<tr><td>$strength_prof</td><td>$strength</td><td>Strength</td></tr>";
				echo "<tr><td>$dexterity_prof</td><td>$dexterity</td><td>Dexterity</td></tr>";
				echo "<tr><td>$constitution_prof</td><td>$constitution</td><td>Constitution</td></tr>";
				echo "<tr><td>$intelligence_prof</td><td>$intelligence</td><td>Intelligence</td></tr>";
				echo "<tr><td>$wisdom_prof</td><td>$wisdom</td><td>Wisdom</td></tr>";
				echo "<tr><td>$charisma_prof</td><td>$charisma</td><td>Charisma</td></tr>";
				?>				
				
			</table>
			<br />				
		</td>
		</tr>
		<tr>
		<td bgcolor="#b5dcb3" width="100%" align="left" colspan="2" style="border:1px solid black">
			<h2 align="center">Skills</h2>
			<table border="3" width="50%" align="center" cellpadding="5" bgcolor=#FFFFFF>
			
				<?php
				require_once('db_query.php');					
				$result = run_query("select * from char_skills where char_id = 1");
				
				$row = mysqli_fetch_array($result);
				
				$acrobatics = $row['acrobatics'];
				$animal = $row['animal'];
				$arcana = $row['arcana'];
				$athletics = $row['athletics'];
				$deception = $row['deception'];
				$history = $row['history'];
				$insight = $row['insight'];
				$intimidation = $row['intimidation'];
				$investigation = $row['investigation'];
				$medicine = $row['medicine'];
				$nature = $row['nature'];
				$perception = $row['perception'];
				$performance = $row['performance'];
				$persuasion = $row['persuasion'];
				$religion = $row['religion'];
				$sleight = $row['sleight'];
				$stealth = $row['stealth'];
				$survival = $row['survival'];
				
				$acrobatics_prof = $row['acrobatics_prof'] ? "*" : "";
				$animal_prof = $row['animal_prof'] ? "*" : "";
				$arcana_prof = $row['arcana_prof'] ? "*" : "";
				$athletics_prof = $row['athletics_prof'] ? "*" : "";
				$deception_prof = $row['deception_prof'] ? "*" : "";
				$history_prof = $row['history_prof'] ? "*" : "";
				$insight_prof = $row['insight_prof'] ? "*" : "";
				$intimidation_prof = $row['intimidation_prof'] ? "*" : "";
				$investigation_prof = $row['investigation_prof'] ? "*" : "";
				$medicine_prof = $row['medicine_prof'] ? "*" : "";
				$nature_prof = $row['nature_prof'] ? "*" : "";
				$perception_prof = $row['perception_prof'] ? "*" : "";
				$performance_prof = $row['performance_prof'] ? "*" : "";
				$persuasion_prof = $row['persuasion_prof'] ? "*" : "";
				$religion_prof = $row['religion_prof'] ? "*" : "";
				$sleight_prof = $row['sleight_prof'] ? "*" : "";
				$stealth_prof = $row['stealth_prof'] ? "*" : "";
				$survival_prof = $row['survival_prof'] ? "*" : "";
				
				echo "<tr><td>$acrobatics_prof</td><td>$acrobatics</td><td>Acrobatics</td></tr>";
				echo "<tr><td>$animal_prof</td><td>$animal</td><td>Animal Handling</td></tr>";
				echo "<tr><td>$arcana_prof</td><td>$arcana</td><td>Arcana</td></tr>";
				echo "<tr><td>$athletics_prof</td><td>$athletics</td><td>Athletics</td></tr>";				
				echo "<tr><td>$deception_prof</td><td>$deception</td><td>Deception</td></tr>";
				echo "<tr><td>$history_prof</td><td>$history</td><td>History</td></tr>";
				echo "<tr><td>$insight_prof</td><td>$insight</td><td>Insight</td></tr>";
				echo "<tr><td>$intimidation_prof</td><td>$intimidation</td><td>Intimidation</td></tr>";
				echo "<tr><td>$investigation_prof</td><td>$investigation</td><td>Investigation</td></tr>";
				echo "<tr><td>$medicine_prof</td><td>$medicine</td><td>Medicine</td></tr>";
				echo "<tr><td>$nature_prof</td><td>$nature</td><td>Nature</td></tr>";
				echo "<tr><td>$perception_prof</td><td>$perception</td><td>Perception</td></tr>";
				echo "<tr><td>$performance_prof</td><td>$performance</td><td>Performance</td></tr>";
				echo "<tr><td>$persuasion_prof</td><td>$persuasion</td><td>Persuasion</td></tr>";
				echo "<tr><td>$religion_prof</td><td>$religion</td><td>Religion</td></tr>";
				echo "<tr><td>$sleight_prof</td><td>$sleight</td><td>Sleight of Hand</td></tr>";
				echo "<tr><td>$stealth_prof</td><td>$stealth</td><td>Stealth</td></tr>";
				echo "<tr><td>$survival_prof</td><td>$survival</td><td>Survival</td></tr>";
				?>	
				
			</table>
			<br />
		</td>
		</tr>
	</table>
	

	
	
	
	<!-- Middle Column -->
	<table width="30%" border="0" align="left" colspan="1" cellpadding="5">
	
		<?php
		require_once('db_query.php');
		$result = run_query("select * from char_base_stats where char_id = 1");		
		$row = mysqli_fetch_array($result);
		
		$armor = $row['armor'];
		$initiative = $row['initiative'];
		$speed = $row['speed'];
		$proficiency = $row['proficiency'];
		$passive_wisdom = $row['passive_wisdom'];
		$inspiration = $row['inspiration'];
		$max_hp = $row['max_hp'];
		$current_hp = $row['current_hp'];
		
		echo "<tr>";
		echo "<td align='center'><br />";
		
		echo '<table border="3" cellpadding="5">';
		
		echo "<tr>";
		echo "<td>Armor Class</td>";
		echo "<td>Initiative</td>";
		echo "<td>Speed</td>";
		echo "<td>Proficiency Bonus</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>$armor</td>";
		echo "<td>$initiative</td>";
		echo "<td>$speed</td>";
		echo "<td>$proficiency</td>";
		echo "</tr>";
		
		echo "</table>";
		echo "</td></tr>";
		echo '<tr><td align="center"><br />';
		
		echo '<table border="3" cellpadding="5">';
		
		echo "<tr>";
		echo "<td>Passive Wisdom</td>";
		echo "<td>Inspiration</td>";
		echo "<td>Max Hit Points</td>";
		echo "<td>Current Hit Points</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>$passive_wisdom</td>";
		echo "<td>$inspiration</td>";
		echo "<td>$max_hp</td>";
		echo "<td>$current_hp</td>";
		echo "</tr></table><br /></td></tr>";		
		?>
		
		<tr>
		<td bgcolor="#AED6F1" width="100%" style="border:1px solid black">
			<h2 align="center">Attacks</h2>
			<table border="3" cellpadding="5">	
			
				<?php
				require_once('db_query.php');
				$result = run_query("select * from attacks where char_id = 1");		
				
				echo "<tr><td>Name</td><td>Attack Bonus</td><td>Attack Type</td><td>Damage Type</td></tr>";
				
				while ($row = mysqli_fetch_array($result))
				{
					$attack_name = $row['attack_name'];
					$attack_bonus = $row['attack_bonus'];
					$attack_type = $row['attack_type'];
					$damage_type = $row['damage_type'];
					
					echo "<tr><td>$attack_name</td><td>$attack_bonus</td><td>$attack_type</td><td>$damage_type</td></tr>";
				}
				?>
			</table>
			<br />
		</td>
		</tr>
		
		<tr>
		<td bgcolor="#F7FCAB" width="100%" style="border:1px solid black">
			<h2 align="center">Equipment</h2>
			<table border="3" align="center" cellpadding="5">	
			
				<?php
				require_once('db_query.php');
				$result = run_query("select * from equipment where char_id = 1");	
				
				echo "<tr><td>Amount</td><td>Item</td></tr>";
				
				while ($row = mysqli_fetch_array($result))
				{
					$amount = $row['amount'];
					$item = $row['item'];

					echo "<tr><td>$amount</td><td>$item</td></tr>";
				}
				?>
		
			</table>
			<br />
		</td>
		</tr>
	</table>
		
		
		
	<!-- Right Column -->	
	<table width="40%" border="0" align="left" colspan="1" cellpadding="5">	
		<tr>
		<td bgcolor="#F1948A" width="100%" align="left" style="border:1px solid black">
			<h2 align="center">Features and Traits</h2>
			<table border="3" cellpadding="5">
			
				<?php
				require_once('db_query.php');
				$result = run_query("select * from features where char_id = 1");	
				
				echo "<tr><td>Name</td><td>Description</td></tr>";
				
				while ($row = mysqli_fetch_array($result))
				{
					$feature_name = $row['feature_name'];
					$description = $row['description'];
					
					echo "<tr><td>$feature_name</td><td>$description</td></tr>";
				}
				
				?>			

			</table>
			<br />
		</td>
		</tr>	
		
		<tr>
		<td bgcolor="#EDBB99" width="100%" align="left" style="border:1px solid black">
			<h2 align="center">Backstory</h2>
			<table border="3" cellpadding="5" align="center">						
				<tr><td>Personality</td><td>I am a lifelong gambler that cannot resist taking risks</td></tr>
				<tr><td>Ideals</td><td>Smoke, much like the honeybadger, don't give a shit</td></tr>
				<tr><td>Bonds</td><td>I fleeced the wrong person back in the day and now I'm often looking over my shoulder, wary of my potential comeuppance</td></tr>
				<tr><td>Flaws</td><td>I want all of the things, regardless of their worth or usefulness</td></tr>
				<tr><td>Obsession</td><td>I am fascinated by mundane objects</td></tr>
				<tr><td>Quirk</td><td>Greed, hording and kleptomania are pretty quirky</td></tr>
			</table>
			<br />
		</td>
		</tr>		
	</table>
	
  </body>
</html>
