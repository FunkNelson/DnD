<?php
require_once('/var/www/html/DB_functions/db_query.php');

$hero = $_POST['char'];
$attribute = $_POST['attrib'];
$new_value = $_POST['new_value'];

update_value("update char_base_stats set $attribute = $new_value where name = \"$hero\";");
?>