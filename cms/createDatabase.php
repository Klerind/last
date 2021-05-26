<?php
if (isset($_GET["submit"])) {
  include_once "../php/dbConnection.php";
  $databaseName = mysqli_real_escape_string($dbConnection,$_GET["databaseName"]);
  $sql_createDatabase_command = "CREATE DATABASE IF NOT EXISTS $databaseName;";
  $stmt = mysqli_stmt_init($dbConnection);
  mysqli_stmt_prepare($stmt,$sql_createDatabase_command);
  //mysqli_stmt_bind_param($stmt,"s",$databaseName);
  mysqli_stmt_execute($stmt);
  header("Location:../profile.php");
  exit();
}
?>
