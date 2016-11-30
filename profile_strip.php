<?php
function print_profile($char_id) 
{
	require_once('db_query.php');
	
	$query = "select * from char_attributes where char_id = " . $char_id;
	$result = run_query($query);
	
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
	$image_url = $row['image_url'];
	$bgcolor = $row['bgcolor'];
	
	
	echo "<table bgcolor=\"$bgcolor\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"5\">";
	
	
	//echo $fullname;
	echo '<tr><td align="center" width="20%">';
	echo "<img src=\"$image_url\" /></td>";
	
	
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
	
	echo "</tr></table></td></tr></table>";			
}
?>