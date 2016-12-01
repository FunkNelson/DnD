<?php
//echo "<input type='button' onclick='AjaxRequest();' value='Roll a d6'/><br />";
echo "<button name='d20' onclick='AjaxRequest();' type='submit' value='20'><img src=\"http://i.imgur.com/6OuEBBp.png\"></button>";
$roll = roll_die(20);

echo "<h1>  $roll</h1>";

function roll_die($sides)
{
	return rand(1, $sides);
}
?>
