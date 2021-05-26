<?php session_start();
if (isset($_GET['button'])) {
  include 'dbConnection.php';
  $usernameId = $_SESSION["username"];
  $sql_delete_command = "DELETE FROM sign_up WHERE username = ?";
  $stmt_connection = mysqli_stmt_init($dbConnection);
  mysqli_stmt_prepare($stmt_connection,$sql_delete_command);
  mysqli_stmt_bind_param($stmt_connection,"s",$usernameId);
  mysqli_stmt_execute($stmt_connection);
  session_unset();
  session_destroy();
  header("Location:../index.php");
  exit();
}
if (isset($_GET['submit'])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location:../index.php");
  exit();
}

 ?>
