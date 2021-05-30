<?php
#includes dbConnection.php file
include 'dbConnection.php';
#takes username, email and password values from sign up form
$username = mysqli_real_escape_string($dbConnection,htmlentities($_REQUEST['username']));
$email = mysqli_real_escape_string($dbConnection,htmlentities($_REQUEST['email']));
$password = mysqli_real_escape_string($dbConnection,htmlentities($_REQUEST['password']));
#saves sql select command in a variable
$sqli_Insert_command = "INSERT INTO sign_up(username,email,password)VALUES('$username','$email','$password')";
#connects with database and send the users sign up information to database
mysqli_query($dbConnection,$sqli_Insert_command);
#sends user at index.php page and tells user to log in
header("Location:../index.php?login");
exit();
