<?php
//echo "<input type='button' onclick='AjaxRequest();' value='Roll a d6'/><br />";
echo "<button name='d6' onclick='AjaxRequest();' type='submit' value='6'>Roll a d6</button>";
echo roll_die(6);


function roll_die($sides)
{
	return rand(1, $sides);
}
?>
