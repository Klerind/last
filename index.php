<?php include_once "header.php"; ?>
<section id="index">
  <div>
     <div>
       <h2>Challenge 1: Your age in days.</h2>
     </div>
     <div>
       <button onclick="clickMe()" type="button" name="button">Click me</button>
       <button onclick="reset()" type="button" name="button">reset</button>
     </div>
     <div></div>
   </div>

   <div>
     <div>
       <h2>Challenge 2: Cat Generator.</h2>
     </div>
     <div>
       <button onclick="generateCat()" type="button" name="button">Generate Cat</button>
     </div>
     <div></div>
   </div>

   <div>
     <div>
       <h2>Challenge 3: Rock, Paper, Scissors.</h2>
     </div>
     <div>
       <img id="img" class="remove" onclick="rockPaperScissors(this)" src="svg/rock.svg" alt="rock">
       <img class="remove" onclick="rockPaperScissors(this)" src="svg/paper.svg" alt="paper">
       <img class="remove" onclick="rockPaperScissors(this)" src="svg/scissors.svg" alt="scissors">
     </div>
   </div>

   <div>
     <div>
       <h2>Challenge 4: Change the Color of All buttons.</h2>
     </div>
     <div>
       <form>
         <select onchange="buttonColors(this)">
           <option value="random">Random</option>
           <option value="tomato">Tomato</option>
           <option value="green">Green</option>
           <option value="blue">Blue</option>
           <option value="reset">Reset</option>
         </select>
       </form>
        <button onclick="loadInformation('wee')" style="background-color: blue;" type="button" name="button">Wee!</button>
        <button onclick="loadInformation('yahoo')" style="background-color: red;" type="button" name="button">Yahoo</button>
        <button onclick="loadInformation('google')" style="background-color: black;" type="button" name="button">Google</button>
        <button onclick="loadInformation('facebook')" style="background-color: tomato;" type="button" name="button">Facebook</button>
     </div>
     <div></div>
   </div>
</section>
<script src="js/index.js"></script>
<?php include_once "footer.php" ?>
