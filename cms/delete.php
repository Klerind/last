<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $fileName = $file['name'];
  $realPath = realpath('uploads/'.$fileName);
  unlink($realPath);
  header("Location:../profile.php?deleted");
  exit();
}
 ?>
