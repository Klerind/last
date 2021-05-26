<?php
session_start();
include 'dbConnection.php';
$username = mysqli_real_escape_string($dbConnection,htmlentities($_GET['username']));
$password = mysqli_real_escape_string($dbConnection,htmlentities($_GET['password']));

$sql_select_command = "SELECT * FROM sign_up WHERE username = ? || password = ?";
$stmt_connection = mysqli_stmt_init($dbConnection);
mysqli_stmt_prepare($stmt_connection,$sql_select_command);
mysqli_stmt_bind_param($stmt_connection,"ss",$username,$username);
mysqli_stmt_execute($stmt_connection);
$data = mysqli_stmt_get_result($stmt_connection);
$result = mysqli_fetch_assoc($data);

if (mysqli_num_rows($data) > 0) {
  if ($result["username"] == $username || $result["email"] == $username ) {
    if ($result["password"] == $password) {
      $_SESSION['username'] = $result["username"];
      header("Location:../profile.php");
      exit();
    }else {
      header("Location:../index.php?wrongpassword");
      exit();
    }
  }else {
    header("Location:../index.php?userdoesnotexist");
    exit();
  }
}else {
  header("Location:../index.php?userdoesnotexist");
  exit();
}
?>
