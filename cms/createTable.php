<?php
if (isset($_GET["submit"])) {
  $databaseName = $_GET["databaseName"];
  $sqlCommand = $_GET["sqlCommand"];
  $dbConnection = mysqli_connect("localhost","root","root",$databaseName);
  $sql_createTable_command = "$sqlCommand";
  $stmt = mysqli_stmt_init($dbConnection);
  mysqli_stmt_prepare($stmt,$sql_createTable_command);
  //mysqli_stmt_bind_param();
  mysqli_stmt_execute($stmt);
  //mysqli_query($dbConnection,$sqlCommand);
  header("Location:../profile.php");
  exit();
}
  if (isset($_GET["button"])) {
    $databaseName = $_GET["databaseName"];
    $dbConnection = mysqli_connect("localhost","root","root",$databaseName);
    $sql_showTable_command = "SHOW TABLES";
    $stmt = mysqli_stmt_init($dbConnection);
    mysqli_stmt_prepare($stmt,$sql_showTable_command);
    mysqli_stmt_execute($stmt);
    $tables = mysqli_stmt_get_result($stmt);
    $data;
    $data .= "Tabela gjithsej: ".mysqli_num_rows($tables)."<hr>";
    foreach ($tables as $tableName) {
     $data .= $tableName['Tables_in_'.$databaseName]."<br>";
    }
    header("Location: ../profile.php?data=".$data);
    exit();
  }
?>
