<?php include_once "header.php"; ?>
<section id="testimonials">
  <button id="new-client" class="btn btn-primary" type="button" name="button">new client</button>
     <table class="table">
  <thead>
    <th>name</th>
    <th>email</th>
    <th>phone</th>
    <th>provides</th>
  </thead>
  <tbody id="tbody"></tbody>
</table>
<div id="add-client-form">
  <form action="php/_addClient.php" method="get">
  new client
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">name:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputPassword" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputPassword" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">phone:</label>
    <div class="col-sm-10">
      <input type="number" name="phone" class="form-control" id="inputPassword" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">providers:</label>
    <div class="col-sm-10">
      <select name="providers[]" class="selectpicker" multiple="true" required>
       <option value="1">Provider1</option>
       <option value="2">Provider2</option>
       <option value="3">Provider3</option>
       <option value="4">Provider4</option>
       <option value="5">Provider5</option>
     </select>
    </div>
  </div>
  <input class="btn btn-success" type="submit" name="submit" value="add-client">
  </form>
</div>
</section>
<script defer="true" src="js/testimonials.js"></script>
<?php include_once "footer.php" ?>
