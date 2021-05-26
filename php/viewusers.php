<?php
/**
 * View users from databases
 */
class viewusers{
  public $dbConnection;
  public function viewusers() {
    return $this->dbConnection = new mysqli("localhost","root","root","last");
    }
}
?>
