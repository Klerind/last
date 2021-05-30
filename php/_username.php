<?php
$search = $_REQUEST['data'];
$search = strtolower($search);
include_once "dbConnection.php";
if ($search === "") {
  echo "Please enter some text.";
}else {
  $sql_username_command = "SELECT * FROM sign_up WHERE username LIKE '%$search%';";
  $results = mysqli_query($dbConnection,$sql_username_command);
  if (mysqli_num_rows($results) == 0) {
    echo "No data found.";
  }else {
    $row = mysqli_fetch_assoc($results);
    echo "<strong>Username: </strong>".$row['username']."<strong> Email: </strong>".$row['email'];
  }
}
