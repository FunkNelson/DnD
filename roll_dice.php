<?php
echo "<input type='button' onclick='AjaxRequest();' value='Roll a d6'/><br />";
echo "you rolled a " . roll_d6();

function roll_d6() {
	
	return rand(1, 6);
}


?>
