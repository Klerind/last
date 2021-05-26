<?php
$serverName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "last";
define("DB_HOST",$serverName);
define("DB_USER",$userName);
define("DB_PASSWORD",$password);
define("DB_NAME",$databaseName);
$dbConnection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
/**
 * Database connection
 */
/*class viewusers {
   public $dbConnection;
   public function viewUsers() {
     return $this->dbConnection = new mysqli("localhost","root","root","last");
   }
}*/
?>
