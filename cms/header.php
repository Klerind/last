<!DOCTYPE html>
<html>
<?php include_once "head.php";
session_start(); ?>
  <body>
    <header>
      <nav>
        <a href="index.php">Logo</a>
   <?php if (isset($_SESSION['username'])) {
      echo '<a href="index.php">My Profile</a>
            <form action="../php/_logOut.php" method="get">
              <input type="submit" name="button" value="Delete Profile">
              <input type="submit" name="submit" value="Logout">
            </form>';
        }elseif(!isset($_SESSION['username'])) {
      echo '<form action="php/login.php" method="post">
              <input type="text" name="username" placeholder="Username/E-mail">
              <input type="password" name="password" placeholder="Password">
              <input type="submit" name="submit" value="LogIn">
              <button type="button" name="button">SignUp</button>
            </form>';
        }
        ?>
      </nav>
    </header>
