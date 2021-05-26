<?php
if (isset($_GET["submit"])) {
  include_once "../php/dbConnection.php";
  $databaseName = mysqli_real_escape_string($dbConnection,$_GET["databaseName"]);
  $sql_deleteDatabase_command = "DROP DATABASE IF EXISTS $databaseName;";
  $stmt = mysqli_stmt_init($dbConnection);
  mysqli_stmt_prepare($stmt,$sql_deleteDatabase_command);
  //mysqli_stmt_bind_param($stmt,"s",$databaseName);
  mysqli_stmt_execute($stmt);
  header("Location:../profile.php");
  exit();
}
if (isset($_GET["button"])) {
  include_once "../php/dbConnection.php";
  $title = mysqli_real_escape_string($dbConnection,$_GET["title"]);
  $sql_deleteArticle_command = "DELETE FROM article WHERE title=?;";
  $stmt = mysqli_stmt_init($dbConnection);
  mysqli_stmt_prepare($stmt,$sql_deleteArticle_command);
  mysqli_stmt_bind_param($stmt,"s",$title);
  mysqli_stmt_execute($stmt);
  mysqli_query($dbConnection,$sql_deleteArticle_command);
  header("Location:../profile.php");
  exit();
}
 ?>
