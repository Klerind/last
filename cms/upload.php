<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  print_r($file);
  if ($file['error'] === 1) {
   header("Location:../profile.php?error");
   exit();
 }elseif ($file['error'] === 0) {
   $allowed = ["png","jpg","jpeg","pdf"];
   $fileExtension = explode(".",$file['name']);
   $fileExtensionLowerCase = strtolower(end($fileExtension));
   if (in_array($fileExtensionLowerCase,$allowed)) {
    $fileSize = $file['size'];
    if ($fileSize <= 3000000) {
       $fileTmpLocation = $file['tmp_name'];
       $fileName = $file['name'];
       $filePath = "uploads/".$fileName;
       move_uploaded_file($fileTmpLocation,$filePath);
       header("Location:../profile.php?uploaded");
       exit();
    }else {
      header("Location:../profile.php?filetoobig");
      exit();
    }
   }else {
     header("Location:../profile.php?notallowed");
     exit();
   }
  }
}
#$file = $_FILES["file"];
#$path =  "uploads/".$file["name"];
#$date = date("Y");
#echo $path = "uploads/$date";
#echo file_exists($path);
#echo is_writable($path);
#move_uploaded_file($file["tmp_name"],$path);
# == true) {
#mkdir($path);
#date("Y");
#  echo "string";
#}
  #$uploadPath = 'uploads/'.date("Y",time())."/".date("m",time())."/";
  #$filePath = $uploadPath.basename($_FILES['file']['name']);

  #$allowed = ['png','jpg','jpeg','pdf'];
  # print_r($fileExtension =  explode('.',$_FILES['file']['name']));
#  $lowCharacterExtension = strtolower($fileExtension[1]);
#  if (file_exists($uploadPath) == false) {
#      mkdir($uploadPath);
#  if (file_exists($filePath) == true) {
#    if ($_FILES['file']['error'] === 1) {
#        if ($_FILES['file']['size'] > 200000) {
#           if (in_array($lowCharacterExtension,$allowed)) {
#             move_uploaded_file($fileTmpPath,$filePath);
             //print_r($file);
            // echo "<br>u ndarkua";
             //header("Location:../profile.php");
             //exit();

 ?>
