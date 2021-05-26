<?php
//add new article to database from profile page
  include_once 'dbConnection.php';
  $title = mysqli_real_escape_string($dbConnection,$_POST["title"]);
  $content = mysqli_real_escape_string($dbConnection,$_POST["content"]);
  if (isset($_POST["submit"])) {
    include_once 'dbConnection.php';
    $mysqli_comand = "INSERT INTO article(title,content,date,time,id)VALUES(?,?,NOW(),NOW(),NULL)";
    $stmt = mysqli_stmt_init($dbConnection);
    mysqli_stmt_prepare($stmt,$mysqli_comand);
    mysqli_stmt_bind_param($stmt,"ss",$title,$content);
    mysqli_stmt_execute($stmt);
    header("Location:../profile.php");
    exit();
}
//change articles from profile page
if (isset($_POST["button"])) {
$newTitle = mysqli_real_escape_string($dbConnection,$_POST["newTitle"]);
$id = mysqli_real_escape_string($dbConnection,$_POST["id"]);
  include_once 'dbConnection.php';
  if ($title === "") {
      $title = $newTitle;
  }
 $sql_update_copmmand = "UPDATE article SET title=?,content=? WHERE title=? OR id=?;";
 $stmt = mysqli_stmt_init($dbConnection);
 mysqli_stmt_prepare($stmt,$sql_update_command);
 mysqli_stmt_bind_param($stmt,"ssss",$title,$content,$newTitle,$id);
 mysqli_stmt_execute($stmt);
 header("Location:../profile.php");
 exit();
}
?>
