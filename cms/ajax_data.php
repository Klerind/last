<?php
$json_data = $_REQUEST['data'];
$myfile = fopen("../json/table.json", "w") or die("Unable to open file!");
fwrite($myfile,$json_data);
fclose($myfile);
?>
