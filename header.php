<!DOCTYPE html>
<html>
<?php include_once "head.php"; ?>
  <body>
   <header id="header">
     <nav>
       <a href="blog.php">blog</a>
       <ul>
         <li><a href="index.php">Kryesore</a></li>
<<<<<<< HEAD
         <li><a href="weather.php">Weather Api</a></li>
         <li><a href="contact.php">Na Kontakto</a></li>
         <li><a href="animate.php">Animate Css</a></li>
          <li><a href="json.php">Json Api</a></li>
=======
         <li><a href="about.php">Weather Api</a></li>
         <li><a href="contact.php">Na Kontakto</a></li>
         <li><a href="animate.php">Animate Css</a></li>
          <li><a href="testimonials.php">Json Api</a></li>
>>>>>>> master
<?php if (isset($_SESSION['username'])) {
         echo '<li><a href="profile.php?data=none">My Profile</a></li>
               <li><a href="game.php">Game</a></li>
              </ul>
              <span></span>
              <form action="php/_logOut.php" method="get">
                 <input type="submit" name="button" value="Delete Profile">
                 <input type="submit" name="submit" value="Logout">
              </form>';
       }elseif(!isset($_SESSION['username'])) {
     echo '</ul>
           <form name="logInForm" action="php/_logIn.php" method="get">
             <input type="text" name="username" placeholder="Username/E-mail">
             <input type="password" name="password" placeholder="Password">
             <input type="submit" name="submit" value="LogIn">
             <button type="button" name="button">SignUp</button>
          </form>';
       }
      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
       if (strpos($fullUrl,"wrongpassword") == true) {
         echo "<p style='color: tomato;'>Wrong password.</p>";
       }elseif (strpos($fullUrl,"userdoesnotexist") == true) {
         echo "<p style='color: tomato;'>User does not exist.</p>";
       }
       ?>
     </nav>
     <form class="signUp" action="php/_signUp.php" method="post">
       <input type="text" name="username" placeholder="Username" required>
       <input type="email" name="email" placeholder="E-mail" required>
       <input type="password" name="password" placeholder="Password" required>
       <input type="submit" name="" value="Register">
     </form>
     <form action="search.php" method="post">
       <input type="search" name="search" placeholder="Search blog posts">
       <select>
         <option value="blog_post">blog post</option>
         <option value="user_name">user name</option>
       </select>
       <input type="submit" value="Search">
     </form>
     <output></output>
   </header>
