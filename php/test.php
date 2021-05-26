<?php
require_once "dbConnection.php";
$dbResult = mysqli_query($dbConnection,"SELECT * FROM article;");
$bigData = [];
foreach ($dbResult as $result) {
  $data = [];
  $data["title"] = $result['title'];
  $data["content"] = $result['content'];
  $data["date"] = $result['date'];
  $data["time"] = $result['time'];
  $bigData[] = $data;
}
$json = json_encode($bigData);
#echo $json;
echo $_SERVER['DOCUMENT_ROOT'];
echo "</br>";
echo $_SERVER['SERVER_NAME'];
echo "</br>";
echo $_SERVER['PHP_SELF'];
echo "</br>";
echo $_SERVER['HTTP_REFERER'];
echo "</br>";
echo $_SERVER['SERVER_ADMIN'];
echo "</br>";
echo $_SERVER['SERVER_PORT'];
echo "</br>";
echo $_SERVER['REQUEST_URI'];
echo "</br>";
echo $_SERVER['SCRIPT_NAME'];
if ($_REQUEST['name'] == "test") {
echo "string";
}
echo "</br>";
echo "</br>";
echo "</br>";
?>
