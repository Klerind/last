<?php
if (isset($_POST['submit'])) {
  echo $name = $_POST['name'];
  echo $company = $_POST['company'];
  echo $telephone = $_POST['telephone'];
  echo $email = $_POST['email'];
  echo $message = $_POST['message'];
  mail("info@klerind.tk",$name,$message,"From: ".$email);
}
mail("info@klerind.tk","subject","test mesage","From: myemail@gmail.com");
?>
