<?php
  include "../php/dbConnection.php";
  $sql_showDatabases_command = "SHOW DATABASES;";
  $stmt = mysqli_stmt_init($dbConnection);
  mysqli_stmt_prepare($stmt,$sql_showDatabases_command);
  mysqli_stmt_execute($stmt);
  $databases = mysqli_stmt_get_result($stmt);
  echo "Databaza gjithsej: ".mysqli_num_rows($databases)."<hr>";
  foreach ($databases as $databasesName) {
   echo $databasesName['Database']."<br>";
  }
 ?>
