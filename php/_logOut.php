<?php
#calls session_start function
session_start();
#checks if delete profile button is pressed
if (isset($_REQUEST['button'])) {
  #includes dbConnection.php file
  include 'dbConnection.php';
  #sets username to a variable
  $usernameId = $_SESSION["username"];
  #sets sql delete command  to a variable
  $sql_delete_command = "DELETE FROM sign_up WHERE username = ?";
  #initializes connections to database
  $stmt_connection = mysqli_stmt_init($dbConnection);
  #prepare statements for database connection
  mysqli_stmt_prepare($stmt_connection,$sql_delete_command);
  #binds parameters for database connection
  mysqli_stmt_bind_param($stmt_connection,"s",$usernameId);
  #establishes connection with database
  mysqli_stmt_execute($stmt_connection);
  #unsets session
  session_unset();
  #destroys sesson
  session_destroy();
  #sends user at index.php page
  header("Location:../index.php");
  exit();
}
#checks if log out button is pressed
if (isset($_REQUEST['submit'])) {
  #calls session_start function
  session_start();
  #unsets session
  session_unset();
  #destroys sesson
  session_destroy();
  #sends user at index.php page
  header("Location:../index.php");
  exit();
}
