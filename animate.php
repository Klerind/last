<?php include_once "header.php"; ?>
<section id="animate">

 <div>
   <div>
     <div>
       <span>01</span>
       <h2>Vasil Dibra</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       <a id="link" href="#" onclick="learnMore(this)">Learn More...</a>
       </div>
     </div>
   <div>
     <div>
       <span>02</span>
       <h2>Muhamet Dibra</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       <a href="#" onclick="learnMore(this)">Learn More...</a>
       </div>
   </div>
   <div>
     <div>
       <span>03</span>
       <h2>Ismet Prifti</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       <a href="#" onclick="learnMore(this)">Learn More...</a>
       </div>
   </div>
 </div>

 <div>
   <div>
     <div id="sendLetter">
        <form>
          <textarea name="message" rows="4" placeholder="Please enter your message."></textarea>
          <input type="text" name="name" placeholder="Please enter your name.">
          <input type="text" name="company" placeholder="Please enter your company name.">
          <input type="telephone" name="telephone" placeholder="Please enter your telephone number.">
          <input type="email" name="email" placeholder="Please enter Your email.">
          <button type="button" onclick="fadeOut('sendLetter')" name="button">Sent Informtion</button>
        </form>
     </div>
   </div>

   <div>
      <div>
        <div>
        <form>
          <input type="text" name="name" placeholder="Username or email.">
          <span>Next</span>
        </form>
       </div>
      </div>
    <div>
      <div>
        <form>
          <input type="password" name="password" placeholder="Please enter your password.">
          <span>Login</span>
        </form>
      </div>
    </div>
   </div>

 </div>

 <div>
   <div></div>
   <div>

   <header>
     <span></span>
     <span></span>
   </header>
   <div>
     <div id="first-body-model">
       <form action="php/login.php" method="POST">
         <label for="logInForm">Log In</label>
         <input type="text" name="username" placeholder="Username or email">
         <input type="password" name="password" placeholder="Password">
         <button type="submit" name="submit">Log In</button>
         <p>Not yet a user?!</p>
         <span onclick="slideDownfadeIn('first-body-model','second-body-model')"> Sign Up</span>
       </form>
     </div>
     <div id="second-body-model">
       <form action="php/signUp.php" method="POST">
         <label for="signUpForm">Sign Up</label>
         <input type="text" name="username" placeholder="Please enter your username">
         <input type="email" name="email" placeholder="Please enter your email">
         <input type="password" name="password" placeholder="Please enter your password">
         <button type="submit" name="submit">Sign Up</button>
         <p>Alredy a member?!</p>
         <span onclick="fadeInslideDown('first-body-model','second-body-model')">Log In</span>
       </form>
     </div>
     <div>
       <form>
         <label for="signUpForm">Step Three</label>
         <button type="button" name="button">Done</button>
       </form>
     </div>
   </div>

  </div>
  <div></div>
 </div>

</section>
<script src="js/animate.js"></script>
<?php include_once "footer.php" ?>
