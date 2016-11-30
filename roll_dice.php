<?php
echo "<input type='button' onclick='AjaxRequest();' value='Roll a d6'/><br />";
echo "you rolled a " . roll_die(6);

function roll_d6() {
	
	return rand(1, 6);
}

function roll_die($sides)
{
	return rand(1, $sides);
}

?>
