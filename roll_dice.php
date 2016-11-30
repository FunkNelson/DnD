<?php
echo "<input type='button' onclick='AjaxRequest();' value='Roll a d6'/><br />";
echo roll_die(6);


function roll_die($sides)
{
	return rand(1, $sides);
}

?>
