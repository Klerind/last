<?php include_once "header.php" ?>
<section id="contact">
  <main>

    <h1>Contact US</h1>
    <h2>Got a question? We'll give you straight answers!</h2>
    <form action="php/_contact.php" method="post">
      <label for="name">name</label></br>
      <input type="text" name="name" required placeholder="enter your name" ></br>
      <label for="company">company</label></br>
      <input type="text" name="company" placeholder="enter your compnay name"></br>
      <label for="telephone">telephone</label></br>
      <input type="tel" name="telephone" required placeholder="enter your phone number 325-54-456" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" title="You can not enter letters. Enter number in this format: 325-12-789" ></br>
      <label for="email">email</label></br>
      <input type="email" name="email" required placeholder="enter your e-mail address" ></br>
      <label for="message">message</label></br>
      <textarea name="message"  required placeholder="please, type your message here" rows="8" cols="19" ></textarea></br>
      <input type="submit" name="submit" value="send message">
    </form>

  </main>
</section>
<script defer="true" src="js/contact.js"></script>
<?php include_once "footer.php" ?>
