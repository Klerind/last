<?php
include "dbConnection.php";
$data = $_REQUEST['data'];
$arrayData = explode(",",$data);
$comment = $arrayData[0];
$article_id = $arrayData[1];
$sql_saveComment_command = "INSERT INTO comments (comment,time,date,article_id) VALUES ('$comment',NOW(),NOW(),'$article_id');";
mysqli_query($dbConnection,$sql_saveComment_command);
 ?>
