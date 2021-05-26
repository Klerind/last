<?php
include 'dbConnection.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sqli_Insert_command = "INSERT INTO sign_up(username,email,password)VALUES('$username','$email','$password')";
mysqli_query($dbConnection,$sqli_Insert_command);
header("Location:../index.php");
 ?>
