<?php include_once "header.php"; ?>
<section id="about">
  <div>
    <div>
      <article>
        <header>
          <h2>JSON and AJAX</h2>
          <button onclick="showContent()" type="button" name="button">Fetch info for 3 new animales</button>
        </header>
      </article>
    </div>
    <div>
      <img onclick="changeImage(this)" src="cms/uploads/Screenshot_from_2021-03-22_01-09-55_240x230.png" alt="img">
    </div>
  </div>
  <div>
    <div>
      <table>
        <thead>
          <th>Name</th>
          <th>Surename</th>
          <th>Email</th>
          <th>Address</th>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <div>
      <table>
        <thead>
          <th>Name</th>
          <th>Surename</th>
          <th>Email</th>
          <th>Address</th>
        </thead>
        <tbody>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
        </tbody>
      </table>
      <button type="button" name="button">+</button>
      <button type="button" name="button">-</button>
      <button type="button" name="button">Save</button>
      <button type="button" name="button">Show data</button>
      <table>
        <thead>
          <th>Name</th>
          <th>Surename</th>
          <th>Email</th>
          <th>Address</th>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
  <div>
    <div>
      <p><?php readfile("files/facebook.txt"); ?></p>
    </div>
    <div>
      <p><?php readfile("files/wee.txt"); ?></p>
    </div>
  </div>
</section>
<script defer="true" src="js/about.js"></script>
<?php include_once "footer.php" ?>
