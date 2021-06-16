<?php
if (isset($_REQUIRE['submit'])) {
  echo $name = $_REQUIRE['name'];
  echo $company = $_REQUIRE['company'];
  echo $telephone = $_REQUIRE['telephone'];
  echo $email = $_REQUIRE['email'];
  echo $message = $_REQUIRE['message'];
  mail("info@klerind.tk",$name,$message,"From: ".$email);
}
mail("info@klerind.tk","subject","test mesage","From: myemail@gmail.com");
?>
