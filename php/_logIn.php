<?php
#calls session_start function
session_start();
#includes dbConnection.php file
include 'dbConnection.php';
#takes username and password values from login form
$username = mysqli_real_escape_string($dbConnection,htmlentities($_REQUEST['username']));
$password = mysqli_real_escape_string($dbConnection,htmlentities($_REQUEST['password']));
#saves sql select command in a variable
$sql_select_command = "SELECT * FROM sign_up WHERE username = ? || password = ?";
#initializes connections to database
$stmt_connection = mysqli_stmt_init($dbConnection);
#prepare statements for database connection
mysqli_stmt_prepare($stmt_connection,$sql_select_command);
#binds parameters for database connection
mysqli_stmt_bind_param($stmt_connection,"ss",$username,$username);
#establishes connection with database
mysqli_stmt_execute($stmt_connection);
#gets results from database
$data = mysqli_stmt_get_result($stmt_connection);
#fetchs results for each row
$result = mysqli_fetch_assoc($data);
#checks if user exists
if (mysqli_num_rows($data) > 0) {
  #checks if username or email matchs
  if ($result["username"] == $username || $result["email"] == $username ) {
    #checks if password is correct
    if ($result["password"] == $password) {
      #sets session username
      $_SESSION['username'] = $result["username"];
      #sends user at profile.php page
      header("Location:../profile.php");
      exit();
    }else {
      #sends user at index.php page if password is wrong
      header("Location:../index.php?wrongpassword");
      exit();
    }
  }else {
    #sends user at index.php page if user or email does not match
    header("Location:../index.php?userdoesnotexist");
    exit();
  }
}else {
  #sends user at index.php page if user does not exists
  header("Location:../index.php?userdoesnotexist");
  exit();
}
