<?php include_once "header.php" ?>
<section id="profile">
  <div>
   <h2>Shto artikull</h2>
    <form action="php/article.php" name="postArticle" method="post" onsubmit="article()">
      <input type="text" name="title" placeholder="Add title" required>
      <textarea name="content" placeholder="Add content" rows="9" cols="39" required></textarea>
      <input  type="submit" name="submit" value="Add">
    </form>
    <h2>Ndrysho artikull</h2>
    <form action="php/article.php" method="post">
       <input type="text" name="newTitle" placeholder="select by title">
       <input type="number" min="1" name="id" placeholder="select by id">
       <input type="text" name="title" placeholder="Add new title">
       <textarea name="content" placeholder="Add new content" rows="9" cols="39" required></textarea>
       <input type="submit" name="button" value="Change">
    </form>
  </div>
    <div>
      <div>
        <h2>Trego Databazat</h2>
         <p></p>
          <button onclick="showDatabases()">show databases</button>
        <h2>Krijo Databaz</h2>
        <form action="cms/createDatabase.php" method="get">
          <input type="text" name="databaseName" placeholder="Enter Database name" required>
          <input type="submit" name="submit" value="Create Database">
        </form>
        <h2 >Fshi Databaz</h2>
        <form action="cms/deleteDatabase.php" method="get">
          <input type="text" name="databaseName" placeholder="Enter Database Name" required>
          <input type="submit" name="submit" value="Delete Database">
        </form>
        <h2 >Fshi artikull</h2>
        <form action="cms/deleteDatabase.php" method="get">
          <input type="text" name="title" placeholder="select by title" required>
          <input type="submit" name="button" value="Delete article">
        </form>
      </div>
      <div>
        <h2 > | Krijo tabel</h2>
        <form action="cms/createTable.php" method="get">
          <input type="text" name="databaseName" placeholder="Enter Database Name" required>
          <textarea name="sqlCommand" rows="9" cols="29" placeholder="Add sql command"></textarea>
          <input type="submit" name="submit" value="Send command">
        </form>
        <h2> | Trego tabelat</h2>
        <form action="cms/createTable.php" method="get">
          <input type="text" name="databaseName" placeholder="Enter Database Name" required>
          <input type="submit" name="button" value="Show tables">
        </form>
        <p><?php echo $_GET['data']; ?></p>
      </div>
    </div>
  <div>
    <h2 >Ngarko dokument me php</h2>
    <form action="cms/upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file" value="Select file" multiple required>
      <input type="submit" name="submit" value="Upload file">
      <?php $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (strpos($fullUrl,"error") == true) {
          echo "There was an error uploading this file";
        }elseif (strpos($fullUrl,"notallowed") == true) {
          echo "Allowed file types: png, jpg, jpeg and pdf";
        }elseif (strpos($fullUrl,"filetoobig") == true) {
          echo "Maximum file size: 3MB";
        }elseif (strpos($fullUrl,"uploaded") == true) {
          echo "Your file is uploaded";
        }
      ?>
    </form>
  <h2 >Fshi dokument me php</h2>
  <form action="cms/delete.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" value="upload" required>
    <input type="submit" name="submit" value="delet file">
    <?php
      if (strpos($fullUrl,"deleted") == true) {
        echo "File deleted";
      }
     ?>
  </form>
</div>
<div id="print">
  <h2> |Convert text file to json</h2>
</div>
</section>
<script defer="true" src="js/profile.js"></script>
<?php include_once "footer.php" ?>
